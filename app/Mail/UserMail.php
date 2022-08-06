<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $post;
    
    public function __construct($post)
    {
        // assigning the post that we have recieved
        $this->post = $post;
    }

    
    public function build()
    {
        // send post array to mail blade
        $post = $this->post;
        return $this->view('UserMail',compact('post'));
    }
}
