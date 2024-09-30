<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)


    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        <br>
        Fornecedor: {{ $fornecedor['name'] }}
        <br>
        Status {{ $fornecedor['status'] }} <br>

        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi Preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>

        @if ($loop->first)
            Primeira Iteração
        @endif

        @if ($loop->last)
            Ultima Iteração
        @endif
        <br>

        Quantidade de Registros:{{ $loop->count }}


    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
