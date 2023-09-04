<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\MailableName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function contact(ContactRequest $request)
    {

        $data=$request->validated();
            Mail::to("ladun@visualinnovate.net")->send(new MailableName($data));
            return response(['message'=>"success",'status'=>'200','data'=>$request->validated()]);
    }
}
