<?php

namespace App\Http\Controllers;
use App\Models\Cosmetologist;

class CosmetologistController extends Controller
{
    // Метод для отображения списка всех постов
    public function index()
    {
        return view('cosmetologists',['cosmetologists'=> Cosmetologist::all()]);
    }

    // Метод для отображения конкретного поста
    public function show(string $id)
    {    return view('cosmetologist',
        ['cosmetologist' => Cosmetologist::all()->where('id',$id)->first()    ]);
    }

}
