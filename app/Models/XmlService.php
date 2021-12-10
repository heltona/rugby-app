<?php
namespace App\Models;

use Illuminate\Support\Facades\Storage;
use DOMDocument;
use Illuminate\Database\Eloquent\Collection;
use App\Models\XmlNormalizer;

class XmlService implements IMigration
{

    private $fileLocation;

    public function __construct($path)
    {
        $this->fileLocation = Storage::path($path);
    }

    public function getFansFromMedia(): Collection
    {
        $fans = new Collection();

        $doc = new DOMDocument();
        $doc->load($this->fileLocation);

        $els = $doc->getElementsByTagName("torcedor");

        for ($i = 0; $i < $els->length; $i ++) {

            $fan = new Fan();

            $normalizer = new XmlNormalizer($els->item($i));
            $item = $normalizer->getNormalizedItem();

            $fan->nome = $item->getAttribute("nome");
            $fan->documento = $item->getAttribute("documento");
            $fan->cep = $item->getAttribute("cep");
            $fan->endereco = $item->getAttribute("endereco");
            $fan->bairro = $item->getAttribute("bairro");
            $fan->cidade = $item->getAttribute("cidade");
            $fan->uf = $item->getAttribute("uf");
            $fan->telefone = $item->getAttribute("telefone");
            $fan->email = $item->getAttribute("email");
            $fan->ativo = $item->getAttribute("ativo");

            $fans->add($fan);
        }

        return $fans;
    }

    public function putFansOnMedia(Collection $fans)
    {
        $doc = new DOMDocument();
        $root = $doc->createElement("torcedores");

        foreach ($fans as $fan) {
            $el = $doc->createElement("torcedor");

            $el->setAttribute("nome", $fan->nome);
            $el->setAttribute("documento", $fan->documento);
            $el->setAttribute("cep", $fan->cep);
            $el->setAttribute("endereco", $fan->endereco);
            $el->setAttribute("bairro", $fan->bairro);
            $el->setAttribute("cidade", $fan->cidade);
            $el->setAttribute("uf", $fan->uf);
            $el->setAttribute("telefone", $fan->telefone);
            $el->setAttribute("email", $fan->email);
            $el->setAttribute("ativo", $fan->ativo);

            $root->appendChild($el);
        }

        $doc->appendChild($root);
        $doc->save($this->fileLocation);
    }
}

