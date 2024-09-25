<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['name'] }}
    <br>
    Status {{ $fornecedores[0]['status'] }}    <br>

    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi Preenchido' }}
@endisset
