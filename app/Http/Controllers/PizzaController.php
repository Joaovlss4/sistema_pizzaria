<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Requests\PizzaRequest;

class PizzaController extends Controller
{
    public function index()
    {
        $pizza = Pizza::select('id', 'flavor', 'price', 'size')
            ->paginate('2');

        return [
            'status' => 200,
            'mensage' => 'Usuários encontrados!',
            'pizza' => $pizza
        ];
    }
}
