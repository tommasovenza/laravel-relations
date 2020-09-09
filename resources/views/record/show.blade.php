<h1>Titolo Disco: {{ $record->titolo }} </h1>

<ul>
    
    <li>{{ $record->artista }}</li>
    <li>{{ $record->anno }}</li>
    <li>{{ $record->numero_brani }}</li>
    <li>{{ $record->descrizione }}</li>
   
</ul>



<a href="{{ route('record.index')}}">Torna alla home</a>