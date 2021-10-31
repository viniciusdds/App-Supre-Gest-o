<h3>Fornecedor</h3>


@php
/* 
   if(empty($variavel)){} // returnar true se a varíavel estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var;
*/
@endphp

{{-- @unless () @endunless executa se o retorno for false --}} 

@isset($fornecedores)
    {{-- @for ($i = 0; isset($fornecedores[$i]); $i++)     --}}
    {{-- @php
        $i = 0;
    @endphp
    @while (isset($fornecedores[$i])) --}}
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        {{-- @php
             $fornecedor[$indice]['nome'] = 'Outro nome para o fornecedor';
        @endphp --}}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
       
        {{-- @php
            $i++;
        @endphp
    @endwhile --}}
       
        {{-- @switch($fornecedores[0]['ddd'])
            @case('11')
                São Paulo - SP
            @break
            @case('15')
                Sorocaba - SP
            @break
            @case('32')
                Juiz de Fora - MG
            @break
            @default
                Estado não identificado
        @endswitch --}}

        <!-- 
            $variavel testada não estiver definida
            ou 
            $variavel testada possuir o valor null
        -->
        {{-- @isset( $fornecedores[0]['cnpj'])
            CNPJ: {{ $fornecedores[0]['cnpj'] }}
            @empty($fornecedores[0]['cnpj'])
                - Vazio
            @endempty
        @endisset --}}
    {{-- @endfor --}}
@endisset

<br>


{{-- @if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless
<br> --}}

 
{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>  
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

