<?php

namespace App;

Use Illuminate\Mail\Mailer as Mail;

abstract class BaseMail
{
    /**
     * @var Mail
     */
    private $mail;

    /**
     * BaseMail constructor.
     * @param Mail $mail
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function send($person, $view, $data, $subject)
    {
        $view = view_path($view);

        \Mail::send($view, $data, function($message) use($person, $subject)
        {
            $message->to($person->email)
                ->subject($subject);
        });
    }

    public function queue($person, $view, $data, $subject)
    {
        \Mail::queue($view, $data, function($message) use($person, $subject)
        {
            $message->to($person->email)
                ->subject($subject);
        });
    }
}