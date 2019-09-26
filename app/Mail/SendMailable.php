<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data =$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        if($request->session()->get('rorf')=='r')
        {
        return $this->from('s3557899@student.rmit.edu.au')->subject('Match Key Mail')->view('dynamic')->with('data',$this->data);
        }
        if($request->session()->get('rorf')=='f')
        {
        return $this->from('s3557899@student.rmit.edu.au')->subject('Match Key Mail')->view('mailforgotpw')->with('data',$this->data);
        }
        if($request->session()->get('rorf')=='p')
        {
        return $this->from('s3557899@student.rmit.edu.au')->subject('Match Key Mail')->view('sendpw')->with('data',$this->data);
        }
    }
}
