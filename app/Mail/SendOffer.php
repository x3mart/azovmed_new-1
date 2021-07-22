<?php

namespace App\Mail;

use App\Models\Offer;
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
        $this->offer = Offer::first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->offer->from)
                    ->subject('Прайс AzovMed.com для ' . $this->name)
                    ->attach(storage_path('app/') . $this->offer->kpfile, ['as' => 'Оптовый прайслист.xlsx'])
                    ->attach(storage_path('app/'). $this->offer->ipcard, ['as' => 'Карточка предпринимателя.doc'])
                    ->view('emails.offer', ['name' => $this->name, 'offer' => $this->offer]);
    }
}
