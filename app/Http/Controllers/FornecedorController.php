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
                'cnpj' => '000.0000.0000/00-0',
                'ddd' => '',
                'telefone' => '99979-9831'
            ],
            1 => [
                'name' => 'fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',
                'telefone' => '3329-2415'


            ],
            2 => [
                'name' => 'fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '4420-5542'


            ]
        ];



        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
