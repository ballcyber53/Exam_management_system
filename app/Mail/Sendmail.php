<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userdata;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($data,$userdata)
    // {
    //     $this->data = $data;

    //     $this->userdata = $userdata;
    // }

    public function __construct($data)
    {
        $this->data = $data;

    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ballcybersm3@gmail.com', 'Examroom Management System')->subject('แจ้งผู้สอบเข้าศึกษาต่อมหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย')->view('emails.dynamic_email_template')->with([
            'data', $this->data,
            // 'userdata', $this->userdata
        ]);
    }
}
