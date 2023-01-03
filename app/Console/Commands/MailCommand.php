<?php

namespace App\Console\Commands;

use App\Mail\UserMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:minuteMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send per minute Mail to Users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post = ['name' => 'asd', 'message' => 'asd'];
        Mail::to('sohailtahir5858@gmail.com')->send(new UserMail($post));
    }
}
