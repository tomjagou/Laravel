<html>
    <head></head>
    <body>
        <p>{{ $a->incrementCount() }}</p>
        <p>{{ $b->incrementCount() }}</p>
        <p>{{ $a->incrementCount() }}</p>
    </body>
    <footer></footer>
</html>

@extends("base")
@section('contenu')
    {{ $a->increment() }}<br>
    {{ $b->increment() }}<br>
    {{ $a->increment() }}
@endsection
@section('title')
    Singleton
@endsection