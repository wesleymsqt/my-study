<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return response()->json(['message' => 'Endpoint de formulário de contato.']);
    }

    public function send(ContactFormRequest $request)
    {
        $data = $request->validated();

        Mail::to('stde.cadeiacriativa@sobral.ce.gov.br')->send(new ContactMail($data));

        return response()->json(['message' => 'Sua mensagem foi enviada à administração da CICCS. Em caso de necessidade de resposta, a mesma será enviada em breve para você. Agradecemos seu contato!']);
    }
}
