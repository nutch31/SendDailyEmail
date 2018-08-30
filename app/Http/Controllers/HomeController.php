<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    //
    public function mail(Request $request)
    {
        $data = [ 
            'name' => 'Nut Chantathab',
            ]; 
            
        
        Mail::send('emails.name', $data, function ($message) use ($data)
        { 

        $message->from('nutchantathab31@gmail.com'); 

        $message->to('nutnutnutnutnutnutnutnutnutnut@gmail.com'); 
        //info.whc@singhamorta.com '/'.App::getLocale().'/contact'
        $message->subject('Email from Website dittymusic.com | '.$data['name'].''); 

        });
        
        return 'Email was sent';
    }       
}
