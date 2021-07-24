<?php

namespace App\Http\Controllers;

use App\Mail\BidRecieved;
use App\Mail\SendOffer;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

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
        $data = $request->except('__token');
        if(!$data['email'] || $data['name']){
            return back();
        }

        //check if robot spam sender
        if (preg_match("/[\d]+/", $request->name, $match)) {
            if ($match[0] > 0) {
                return view('failSend', ['errorName' => "ОШИБКА! ИМЯ НЕ МОЖЕТ СОДЕРЖАТЬ ЦИФРЫ."]);
            }
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL) === false){
            Mail::to($data['email'])
                ->send(new SendOffer($data));
            Mail::to('azovcev_valera@mail.ru')
                ->send(new BidRecieved($data));
            $isSuccess = true;
        } else {
            $isSuccess = false;
        }

        Bid::create(['name' => $data['name'], 'phone_or_email' => $data['email']]);

        return view(($isSuccess ? 'success' : 'fail') . 'Send');

        }
}
