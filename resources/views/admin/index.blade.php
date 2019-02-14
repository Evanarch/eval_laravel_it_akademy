@extends('layouts.app')

@section('content')
<main class="container posts articles">

  @foreach($vignettes as $vignette)
    <article>
        <h2>{{ $vignette->legende }}</h2>
        <p>{{ $vignette->description }}</p>
        <p>{{ $vignette->url }}</p>

        <img src="" alt="">
        <p><a href="">Legende</a></p>
        <p><a href="/show/{{ $vignette->id }}">Voir</a></p>
        <p><a href="/admin/vignettes/{{ $vignette->id }}/edit">Editer</a></p>
        <p><a href="/admin/vignettes/{{ $vignette->id }}/delete">Supprimer</a></p>
    </article>
  @endforeach

</main>
@endsection
