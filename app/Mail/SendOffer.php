<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOffer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name= $data['name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aazovmed@gmail.com')
                    ->subject('Прайс AzovMed.com для ' . $this->name)
                    ->attach(base_path() . "/public/kp/price.xlsx", ['as' => 'Оптовый прайслист.xlsx'])
                    ->attach(base_path() . "/public/kp/ipcard.doc", ['as' => 'Карточка предпринимателя.doc'])
                    ->view('emails.offer', ['name' => $this->name]);
    }
}
