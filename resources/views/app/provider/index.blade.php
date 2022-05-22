<h3>Provider</h3>

@isset($providers)
    @foreach ($providers as $index => $provider)

        Provider: {{ $provider['name'] }}
        <br />
        Status: {{ $provider['status'] }}
        <br />
        CNPJ: {{ $provider['cnpj'] ?? 'Data was not fullfilled' }}
        <br />
        Telephone: {{ $provider['ddd'] ?? '' }} {{ $provider['tel'] ?? '' }}
        <hr />
    @endforeach

@endisset
