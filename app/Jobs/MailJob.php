<?php

namespace App\Jobs;

use App\Mail\UserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->post =  $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       
        Mail::to('sohailtahir5858@gmail.com')->send(new UserMail($this->post));
    }
}
