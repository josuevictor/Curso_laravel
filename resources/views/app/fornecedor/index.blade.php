<h3>Fornecedor</h3>

@php
    /*
    if() {

    } elseif() {

    } else {

    }
    */
@endphp

{{--@dd($fornecedores);--}}

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fonecedor: {{ $fornecedor['nome'] }}
        <br>
        status: {{  $fornecedor['status'] }}
        <br>
        CNPJ: {{  $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{  $fornecedor['ddd'] ?? ''}}) {{  $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteração do loop
        @endif

        @if($loop->last)
            Última iteração do loop

            <br>
            Total de registros: {{ $loop->count }}

        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset

{{--@unless($fornecedores[1]['status'] == 'A')--}}
{{--    Fornecedor inativo--}}
{{--@endunless--}}

{{--@switch($fornecedores[1]['ddd'])--}}
{{--    @case('11')--}}
{{--        São Paulo - SP--}}
{{--        @break--}}
{{--    @case('82')--}}
{{--        Alagoas - AL--}}
{{--        @break--}}
{{--    @case('85')--}}
{{--        Ceará - CE--}}
{{--        @break--}}
{{--    @default--}}
{{--        Estado não identificado--}}
{{--@endswitch--}}

{{--@if(count($fornecedores) > 0 && count($fornecedores) < 10)--}}
{{--    <h3>Existem alguns fornecedores cadastrados</h3>--}}
{{--@elseif(count($fornecedores) > 10)--}}
{{--    <h3>Existem vários fornecedores cadastrados</h3>--}}
{{--@else--}}
{{--    <h3>Ainda não existem fornecedores cadastrados</h3>--}}
{{--@endif--}}
