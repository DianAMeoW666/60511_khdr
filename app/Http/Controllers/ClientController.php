<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    // Метод для отображения списка всех постов
    public function index()
    {
        return view('clients',['clients'=> Client::all()]);
    }

    // Метод для отображения конкретного поста
    public function show(string $id)
    {    return view('client',
        ['client' => Client::all()->where('id',$id)->first()    ]);
    }

}
