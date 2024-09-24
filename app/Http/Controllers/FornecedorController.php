<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {

        $fornecedores = [
            0 => [
                'name' => 'fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.0000/0000-00'
            ],
            
                1 => [
                    'name' => 'fornecedor 2',
                    'status' => 'S'

                ]
            
        ];


        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
