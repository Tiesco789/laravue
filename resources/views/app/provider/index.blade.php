<h3>Provider</h3>

@isset($providers)
    @for ($i = 0; isset($providers[$i]); $i++)
        Provider: {{ $providers[$i]['name'] }}
        <br />
        Status: {{ $providers[$i]['status'] }}
        <br />
        CNPJ: {{ $providers[$i]['cnpj'] ?? 'Data was not fullfilled' }}
        <br />
        Telephone: {{ $providers[$i]['ddd'] ?? '' }} {{ $providers[$i]['tel'] ?? '' }}

        <hr />
    @endfor
@endisset
