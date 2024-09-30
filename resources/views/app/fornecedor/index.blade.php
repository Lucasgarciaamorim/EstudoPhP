<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
    @php $i =0 @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[0]['name'] }}
        <br>
        Status {{ $fornecedores[0]['status'] }} <br>

        CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi Preenchido' }}
        <br>
        Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
        @php $i++ @endphp
    @endwhile
@endisset
