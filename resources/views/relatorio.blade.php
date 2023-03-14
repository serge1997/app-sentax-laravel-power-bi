
@if (isset($relatorio))
    @foreach ($relatorio as $item)
        {{ $item->pbidois }}
    @endforeach
@endif    
