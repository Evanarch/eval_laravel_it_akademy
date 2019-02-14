@extends('layouts.app')

@section('content')
Bonjour {{ Auth::user()->name }} !
@endsection
