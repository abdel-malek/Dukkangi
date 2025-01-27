<?php
namespace App\Http\Services;

use Mail;

class MailService
{
    public static function send($template,$data, $from, $to, $subject)
    {
        try{
            return  Mail::send($template, $data , function ($msg) use ($from,$to,$subject) {
                $msg->from($from)->to($to)->subject($subject);
            });
        }
        catch(Exception $ex){}

    }
}
