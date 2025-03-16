<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    // Метод для отображения списка всех постов
    public function index()
    {
        return view('services',['services'=> Service::all()]);
    }

    // Метод для отображения конкретного поста
    public function show(string $id)
    {    return view('service',
        ['service' => Service::all()->where('id',$id)->first()    ]);
    }

}
