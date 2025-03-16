<?php

namespace App\Http\Controllers;

use App\Models\Seance; // Используем PascalCase для имени модели

class SeanceController extends Controller // Используем PascalCase для имени контроллера
{
    // Метод для отображения списка всех косметологов
    public function index()
    {
        return view('seances',['seances'=> Seance::all()]);
    }

    // Метод для отображения конкретной услуги
    public function show(string $id)
    {    return view('seance',
        ['seance' => Seance::all()->where('id',$id)->first()    ]);
    }
}

