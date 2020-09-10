<h1>Titolo Disco: {{ $record->titolo }} </h1>

<ul>
    <li>Artista: {{  $record->artista }}</li>
    <li>Anno: {{  $record->anno }}</li>
    <li>Numero brani presenti: {{  $record->numero_brani }}</li>
    <li>Info: {{  $record->descrizione }}</li>
</ul>

<img src="{{$record->image->url}}" alt="$record->titolo">

<h3>lista canzoni presenti nel disco</h3>



<ul> 
    @foreach ($record->songs as $song)
        <li>Titolo canzone: {{$song->titolo_canzone}}</li>
        <li>Genere: {{ $song->genere }}</li>
    @endforeach
</ul>


<a href="{{ route('records.index')}}">Torna alla home</a>