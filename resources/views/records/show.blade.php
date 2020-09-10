<h1>Titolo Disco: {{ $record->titolo }} </h1>

<ul>
    <li>Artista: {{  $record->artista }}</li>
    <li>Anno: {{  $record->anno }}</li>
    <li>Numero brani presenti: {{  $record->numero_brani }}</li>
    <li>Info: {{  $record->descrizione }}</li>
</ul>

<h3>Copertina</h3>
{{-- CHIAMI LA FUNZIONE PRESENTE NEL MODEL RECORD E CHE SI CHIAMA IMAGE(). QUESTA FUNZIONE RICHIAMERà L'URL E LO MOSTRERà NEL TAG IMG --}}
<img src="{{ $record->image->url }}" alt="{{ $record->titolo }}">

<h3>lista canzoni presenti nel disco</h3>

<ul> 
    @foreach ($record->songs as $song)
        <li>Titolo canzone: {{ $song->titolo_canzone }}</li>
        <li>Genere: {{ $song->genere }}</li>
    @endforeach
</ul>


<a href="{{ route('records.index')}}">Torna alla home</a>