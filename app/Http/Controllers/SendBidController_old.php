<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class SendBidController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $input = $request->input();

        //check if robot spam sender
        if (preg_match("/[\d]+/", $input['name'], $match)) {
            if ($match[0] > 0) {
                return view('failSend', ['errorName' => "ОШИБКА! ИМЯ НЕ МОЖЕТ СОДЕРЖАТЬ ЦИФРЫ."]);
            }
        }

        /**
         * @param \Illuminate\Http\Request $request
         * @param $input
         * @return mixed
         */
        function sendBid(\Illuminate\Http\Request $request, $input)
        {
            return false;
            \Mail::send('emails.bid', $input, function ($message) use (&$isSuccess, $request) {
                /** @var \Illuminate\Mail\Message $message */
                $isSuccess = $message
                    ->from('robot@azovmed.com')
                    ->subject('Заявка на сайте Azovmed')
                    ->to('azovmedopt@yandex.ru')
                    ->bcc('mafidze@gmail.com');
            });
            return $isSuccess;
        }


        /**
         * @param $email
         */
        function sendOfferIfNeed($input)
        {
            return false;
            $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                \Mail::send('emails.offer', $input, function ($message) use (&$isSuccess, $email, $input) {
                    /** @var \Illuminate\Mail\Message $message */
                    $isSuccess = $message
                        ->from('robot@azovmed.com')
                        ->bcc(['azovmed@bk.ru','supral2@mail.ru'])
                        ->subject('Прайс AzovMed.com для ' . $input['name'])
                        ->to($email);
                        // ->bcc('azovmedopt@yandex.ru')
                        // ->attach(base_path() . "/email_files/карточка_предпринимателя_ИП_Азовцев_В.С._2016.doc", ['as' => 'Карточка предпринимателя ИП Азовцев В.С.doc'])
                        // ->attach(base_path() . "/email_files/оптовый_прайслист_2017.xlsx", ['as' => 'Оптовый прайслист.xlsx']);
                });
                return $isSuccess;
            }
        }


        $isSuccessSendOffer = sendOfferIfNeed($input);
        if (!$isSuccessSendOffer) {
            return view('failSend');
        }

        $isSuccess = sendBid($request, $input);

        $bid = new \App\Models\Bid;
        $bid->name = $input['name'];
        $bid->phone_or_email = $input['email'];
        $bid->save();

        return view(($isSuccess ? 'success' : 'fail') . 'Send');

        }
}
