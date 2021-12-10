<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Fan;
use App\Mail\FanMail;
use Exception;


class MailerController
{

    public function sendMail()
    {
        try {

            $fans = Fan::get();

            foreach ($fans as $fan) {
                if ($fan->email != "")
                    Mail::to($fan->email)->send(new FanMail($fan));
            }

            $return = true;
        } catch (Exception $ex) {

            $return = false;
        }

        return view("concluded-operation", [
            "return" => $return
        ]);
    }

    public function getSendMailScreen()
    {
        return view("send-mail-screen");
    }
}

