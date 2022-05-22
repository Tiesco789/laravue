<h3>Provider</h3>

@isset($providers)
    Provider: {{ $providers[0]['name'] }}
    <br />
    Status: {{ $providers[0]['status'] }}
    <br />
    @isset($providers[0]['cnpj'])
        CNPJ: {{ $providers[0]['cnpj'] }}
        @empty($providers[0]['cnpj'])
            - Empty
        @endempty
    @endisset
@endisset
