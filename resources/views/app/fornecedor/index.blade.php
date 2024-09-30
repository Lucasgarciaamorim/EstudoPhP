<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)


    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedor: @{{ $fornecedor['name'] }}
        <br>
        Status @{{ $fornecedor['status'] }} <br>

        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não foi Preenchido' }}
        <br>
        Telefone: @({{ $fornecedor['ddd'] ?? '' }}) @{{ $fornecedor['telefone'] ?? '' }}
        <hr>

    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset


se eu quiser que seja mostrado exatamente como ta escrito e não que o interpretador interprete o código, eu coloco um @
na frente do código

exemplo:

@{ $fornecedor['ddd'] ?? '' }
