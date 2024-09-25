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
                'cnpj' => ''
            ],
            1 => [
                'name' => 'fornecedor 2',
                'status' => 'S',
                'cnpj' => '000.0000.0000/00-0'
            ]
        ];

        /* operador Ternário

        condição ? se verdade : se falso;
        
Exemplo:
        $msg =  isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : ' CNPJ não informado';
        echo $msg;

        */

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
