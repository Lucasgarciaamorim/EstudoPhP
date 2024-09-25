<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['name'] }}
    <br>
    Status {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset


