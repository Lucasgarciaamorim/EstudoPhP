<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)

    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor[0]['name'] }}
        <br>
        Status {{ $fornecedor[0]['status'] }} <br>

        CNPJ: {{ $fornecedor[0]['cnpj'] ?? 'Dado não foi Preenchido' }}
        <br>
        Telefone: ({{ $fornecedor[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @endforeach
@endisset
