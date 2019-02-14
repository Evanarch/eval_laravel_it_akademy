@if ($errors->has('legende'))
{{ $errors->first('legende') }}
{{ $errors->first('description') }}
{{ $errors->first('url') }}
@endif
<form action="/admin/voyage/update/1" method="post">
  @csrf
  @method('put')
  <label>Legende</label>
  <input name=libelle type=text value={{$vignette->legende}}>
  <label>Description</label>
  <input name=description type=text value={{$vignette->description}}>
  <label>URL</label>
  <input name=dure type=text value={{$vignette->url}}>
  <button type=submit>Click me</button>
</form>
