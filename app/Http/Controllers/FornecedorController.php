<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                    'nome' => 'Fornecedor 1',
                    'status' => 'I',
                    'cnpj' => '00.000.000/000-00',
                    'ddd'  => '', //sao paulo
                    'telefone'  => '99999999',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'A',
                'cnpj' => null,
                'ddd'  => '82', //alagoas
                'telefone'  => '99999999',
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'A',
                'cnpj' => null,
                'ddd'  => '85', //fortaleza
                'telefone'  => '99999999',
            ]

        ];

        //$fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
