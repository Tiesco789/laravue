<h3>Provider</h3>

@isset($providers)
    @forelse ($providers as $index => $provider)
        Actual Iteration: {{ $loop->iteration }}

        Provider: {{ $provider['name'] }}
        <br />
        Status: {{ $provider['status'] }}
        <br />
        CNPJ: {{ $provider['cnpj'] ?? 'Data was not fullfilled' }}
        <br />
        Telephone: {{ $provider['ddd'] ?? '' }} {{ $provider['tel'] ?? '' }}
        <br />
        @if($loop->first)
            First loop iteration
            <br />
            Total Registry: {{ $loop->count }}
        @endif

        @if($loop->last)
            Last loop iteration
        @endif
        <hr />
    @empty
        Provider does not exist
    @endforelse

@endisset
