<?php

namespace App\Http\Controllers;

use stdClass;
use App\Mail\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{


    public function send(Request $request) {

        $request->validate([
            'e-mail' => 'required|min:4|max:100',
            'What' => 'required|min:4|max:500',
        ]);

        $data = new stdClass();
        $data->email = $request["e-mail"];
        $data->message = $request->What;
        Mail::to("kogar98@mail.ru")->send(new FeedbackMailer($data));
        return redirect("/");
    }
}
