<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request) {
        // return 'procesar formulario';
        // return $request;
        // return $request->get('name');
        // return request('name');

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        return 'Datos validados';
    }
}
