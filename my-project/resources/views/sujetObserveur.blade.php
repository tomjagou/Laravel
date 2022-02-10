@foreach($sujet->observeurs as $key => $observeur)
    <p>Observeur n°{{ $key }} : {{ $observeur->display() }}</p>
@endforeach
{{ $sujet->notify() }}
<hr>
@foreach($sujet->observeurs as $key => $observeur)
    <p>Observeur n°{{ $key }} : {{ $observeur->display() }}</p>
@endforeach