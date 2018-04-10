<?php
namespace App\Http\Services;

use Mail;

class MailService
{
    public static function send($template, $from, $to, $subject)
    {
        return  Mail::send($template, [], function ($msg) use ($from,$to,$subject) {
            $msg->from($from)->to($to)->subject($subject);
        });
    }
}
