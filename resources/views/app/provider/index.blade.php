<h3>Provider</h3>

@if(count($providers) > 0 && count($providers) < 10)
    <h3>Some providers was found</h3>
@elseif(count($providers) > 10)
    <h3>Many providers was found</h3>
@else
    <h3>No providers was found</h3>
@endif
