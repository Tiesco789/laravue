<h3>Provider</h3>

@isset($providers)
    @php $i = 0 @endphp
    @while (isset($providers[$i]))
        Provider: {{ $providers[$i]['name'] }}
        <br />
        Status: {{ $providers[$i]['status'] }}
        <br />
        CNPJ: {{ $providers[$i]['cnpj'] ?? 'Data was not fullfilled' }}
        <br />
        Telephone: {{ $providers[$i]['ddd'] ?? '' }} {{ $providers[$i]['tel'] ?? '' }}
        <hr />
    @php $i++ @endphp
    @endwhile
@endisset
