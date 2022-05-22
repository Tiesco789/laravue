<h3>Provider</h3>

@isset($providers)
    @forelse ($providers as $index => $provider)

        Provider: {{ $provider['name'] }}
        <br />
        Status: {{ $provider['status'] }}
        <br />
        CNPJ: {{ $provider['cnpj'] ?? 'Data was not fullfilled' }}
        <br />
        Telephone: {{ $provider['ddd'] ?? '' }} {{ $provider['tel'] ?? '' }}
        <hr />
    @empty
        Provider does not exist
    @endforelse

@endisset
