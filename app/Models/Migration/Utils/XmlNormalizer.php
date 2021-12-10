<?php
namespace App\Models\Migration\Utils;

use DOMElement;

class XmlNormalizer
{
    private $itemToNormalize;
    
    public function __construct(DOMElement $item)
    {
        $this->itemToNormalize = $item;
    }
    private function sanitizeDocumento()
    {
        $string = $this->itemToNormalize->getAttribute("documento");
        $replacement = array("." => "", "-" => "");
        
        $string =  strtr($string, $replacement);
        $string = str_pad($string, 14, "0", STR_PAD_LEFT);
        
        $this->itemToNormalize->setAttribute("documento", $string);
        
    }
    
    private function sanitizeCep()
    {
        $string = $this->itemToNormalize->getAttribute("cep");
        $replacement = array("-" => "");
        
        $string =  strtr($string, $replacement);
        
        $this->itemToNormalize->setAttribute("cep", $string);
        
    }
    
    private function sanitizeTelefone()
    {
        $string = $this->itemToNormalize->getAttribute("telefone");
        $replacement = array("-" => "", "(" => "", ")" => "", " " => "");
        
        $string =  strtr($string, $replacement);
        
        $this->itemToNormalize->setAttribute("telefone", $string);
        
    }
    
    private function sanitizeAtivo()
    {
        $string = $this->itemToNormalize->getAttribute("telefone");
        
        
        $this->itemToNormalize->setAttribute("ativo", $string == 1 ? "SIM" : "NÃO");
    }
    
    public function getNormalizedItem(): DOMElement
    {
        $this->sanitizeDocumento();
        $this->sanitizeCep();
        $this->sanitizeTelefone();
        $this->sanitizeAtivo();
        
        return $this->itemToNormalize;
    }
    
    
    
}

