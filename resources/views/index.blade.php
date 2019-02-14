@extends('layouts.app')

@section('content')
<main class="container posts articles">

    <article>
        <img src="" alt="">
        <p><a href="">Legende</a></p>
        <p><a href="">Voir</a></p>
        @if (Auth::check())
          <p><a href="">Editer</a></p>
          <p><a href="">Supprimer</a></p>
        @endif
    </article>

    @foreach($vignettes as $vignette)
      <h2>{{ $vignette->legende }}</h2>
      <p>{{ $vignette->description }}</p>
      <p>{{ $vignette->url }}</p>
    @endforeach

</main>
@endsection
