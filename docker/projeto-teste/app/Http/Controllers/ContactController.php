<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(ContactFormRequest $request)
    {
        $validated = $request->validated();

        Mail::to('stde.cadeiacriativa@sobral.ce.gov.br')
            ->send(new ContactMail($validated));

        return redirect()->route('contact.show')->with('success', 'Sua mensagem foi enviada à administração da CICCS. Em caso de necessidade de resposta, a mesma será enviada em breve para você. Agradecemos seu contato!');
    }
}
