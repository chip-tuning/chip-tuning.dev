@extends('layouts.errors')

@section('title', '403 - Zabranjeno')

@section('description', 'Tražena stranica je zaštićena.')

@section('content')
<h1 class="page-title"><span class="text-default">403</span></h1>
<h2>Sadržaj ove stranice je zaštićen!</h2>
<p class="p-20">Za pristup ovoj stranici potrebna su administratorska ovlašćenja.</p>
<a href="{{ route('home.index') }}" class="btn btn-default btn-animated btn-lg">Vrati se na početnu <i class="fa fa-home"></i></a>
@endsection