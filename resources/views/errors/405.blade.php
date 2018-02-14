@extends('layouts.errors')

@section('title', '405 - Metoda nije dozvoljena')

@section('description', 'Tražena metoda nije dozvoljena.')

@section('content')
<h1 class="page-title"><span class="text-default">405</span></h1>
<h2>Upsss! Metoda nije dozvoljena</h2>
<p class="p-20">Zahtevana metoda nije dozvoljena.</p>
<a href="{{ route('home.index') }}" class="btn btn-default btn-animated btn-lg">Vrati se na početnu <i class="fa fa-home"></i></a>
@endsection