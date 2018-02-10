@extends('layouts.errors')

@section('title', '503 - Vracamo se uskoro')

@section('description', 'Usluga je trenutno onemogucena, vracamo se uskoro.')

@section('content')
<h1 class="page-title"><span class="text-default">503</span></h1>
<h2>Vraćamo se uskoro</h2>
<p class="p-20">Ažuriranje web aplikacije je trenutno u toku. Molimo, posetite nas malo kasnije.</p>
<ul class="social-links colored circle clearfix">
	@include('sections.socials')
</ul>
@endsection