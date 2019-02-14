@extends('layouts.app')

@section('content')
@if ($errors->has('legende'))
{{ $errors->first('legende') }}
{{ $errors->first('description') }}
{{ $errors->first('url') }}
@endif
<form action="/admin/vignettes/{{ $vignette->id }}/update" method="post">
  @csrf
  @method('put')
  <label>Legende</label>
  <input name=legende type=text value={{$vignette->legende}}>
  <label>Description</label>
  <input name=description type=text value={{$vignette->description}}>
  <label>URL</label>
  <input name=url type=text value={{$vignette->url}}>
  <button type=submit>Click me</button>
</form>
@endsection
