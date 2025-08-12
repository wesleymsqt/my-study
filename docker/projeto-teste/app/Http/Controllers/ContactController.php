<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Exibe o formulário de contato.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Processa o envio do formulário de contato.
     */
    public function send(Request $request)
    {
        // Lógica de validação e envio de e-mail virá aqui.
        // Por enquanto, apenas redirecionamos de volta com uma mensagem de sucesso.
        return redirect()->route('contact.show')->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
