<?php

namespace App\Mail;

use stdClass;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable
{
    use Queueable, SerializesModels;
    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $data) {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */



    // public function build()
    // {
    //     return $this->view('view.name');
    // }
    public function build() {
        return $this->from('kogar98@mail.ru', 'squid')
            ->subject('Форма обратной связи')
            ->view('email.feedback', ['data' => $this->data]);
    }
}
