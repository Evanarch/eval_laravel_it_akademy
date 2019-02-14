@extends('layouts.app')

@section('content')
@if ($errors->has('legende'))
{{ $errors->first('legende') }}
{{ $errors->first('description') }}
{{ $errors->first('url') }}
@endif
<form action="/admin/vignettes/store" method="post">
  @csrf
  <label>Legende</label>
  <input name=legende type=text>
  <label>Description</label>
  <input name=description type=text>
  <label>URL</label>
  <input name=url type=text>
  <button type=submit>Click me</button>
</form>
@endsection
