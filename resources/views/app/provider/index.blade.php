<h3>Provider</h3>

Provider: {{ $providers[0]['name'] }}
<br />
Status: {{ $providers[0]['status'] }}
<br />

@if(!($providers[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br />

@unless ($providers[0]['status'] == 'S')
    Fornecedor inativo
@endunless
