<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailtrapExample;

class contactController extends Controller
{


    public function about()
    {
        $titre = 'About our App!';
        return view('about')->with('title', $titre);
    }



    public function contact()
    {
        return view('contact');
    }

    public function contactMessage()
    {
        $data = request()->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'phone' => 'require',
            'message' => 'required',
        ]);
        Mail::to('slimensarra0@gmail.com')->send(new MailtrapExample($data));
        return redirect()->route('contact')
            ->with('successContactMail', 'Email envoyé avec succés');
    }

}
