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
                'status' => 'S'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}



/*
if(empty($variavel)){} retorna true se a variável estiver vazia
tipos de dados vazios
- '' ( uma string vazia)
- 0
- 0.0
- null
- false 
- array() ( um array vazio)
- $var (não atribuido um valor a variável)