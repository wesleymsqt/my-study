<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(ContactFormRequest $request)
    {
        return redirect()->route('contact.show')->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
