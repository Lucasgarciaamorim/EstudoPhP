<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //   echo "A soma de $p1 + $p2 é: ".($p1+$p2);

        //modos de envio de paramentros do controller para a view

        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //array associativo

        // return view('site.teste', compact('p1', 'p2')); // compact

        return view('site.teste')->with('xyz', $p1)->with('zzz', $p2); //with
    }
}
