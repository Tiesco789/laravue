<h3>Provider</h3>

@isset($providers)
    Provider: {{ $providers[0]['name'] }}
    <br />
    Status: {{ $providers[0]['status'] }}
    <br />
    CNPJ: {{ $providers[1]['cnpj'] ?? 'Data was not fullfilled' }}
@endisset
