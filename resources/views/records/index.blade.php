<h1>Lista dischi presenti in archivio</h1>

<ul>
    {{-- @foreach ($records->record as $image)
        <li>{{ $image->url }}</li>
    @endforeach --}}
</ul>

<ul>

    @foreach ($records as $record)

    <li> Titolo disco: {{ $record->titolo }}</li>
    <li> Nome artista: {{ $record->artista }} </li>
    <li> Anno disco: {{ $record->anno }} </li>
    <li> Numero brani presenti {{ $record->numero_brani }}</li>
    <li> Descrizione: {{ $record->descrizione }}</li>

    <a href="{{ route('records.show', $record) }}">Vedi dettaglio disco</a>
   
    
    @endforeach

</ul>