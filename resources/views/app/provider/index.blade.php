<h3>Provider</h3>

@isset($providers)
    Provider: {{ $providers[2]['name'] }}
    <br />
    Status: {{ $providers[2]['status'] }}
    <br />
    CNPJ: {{ $providers[2]['cnpj'] ?? 'Data was not fullfilled' }}
    <br />
    Telephone: {{ $providers[2]['ddd'] ?? '' }} {{ $providers[2]['tel'] ?? '' }}
    @switch($providers[2]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            State not identified
    @endswitch
@endisset
