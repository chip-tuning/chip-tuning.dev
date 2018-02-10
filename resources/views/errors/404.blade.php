@extends('layouts.errors')

@section('title', '404 - Stranica nije pronadjena')

@section('description', 'Tražena stranica nije pronadjena.')

@section('content')
<h1 class="page-title"><span class="text-default">404</span></h1>
<h2>Upsss! Stranica nije pronađena</h2>
<p class="p-20">Zahtevanana stranica ili URL ne postoje na ovom serveru. Proverite da li je upisana adresa u vašem browseru ispravno napisana.</p>
<a href="{{ route('home.index') }}" class="btn btn-default btn-animated btn-lg">Vrati se na početnu <i class="fa fa-home"></i></a>
@endsection