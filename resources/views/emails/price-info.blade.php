@component('mail::layout')
	{{-- Header --}}
	@slot('header')
		@component('mail::header', ['url' => config('app.url')])
			<img src="{{ asset('images/logo-email.png') }}" alt="{{ config('app.name') }}">
		@endcomponent
	@endslot

{{-- Body --}}
Posetilac, <a href="mailto:{{ $request['email'] }}">{{ ucwords($request['name']) }}</a> je poslao upit za cene sledećih usluga:
@foreach ($request['services'] as $service)
* {{ $service }}
@endforeach

prema sledećim specifikacijama vozila:
@component('mail::table')
| Specifikacija      | Vrednost                         |
| :----------------- | --------------------------------:|
| Marka              | {{ ucfirst($request['brand']) }} |
| Model              | {{ ucfirst($request['type']) }}  |
| Motor              | {{ $request['engine'] }}         |
| Snaga              | {{ $request['power'] }} kW       |
| Godina proizvodnje | {{ $request['year'] }}.          |
@endcomponent
	
	{{-- Subcopy --}}
	@isset($subcopy)
		@slot('subcopy')
			@component('mail::subcopy')
				{{ $subcopy }}
			@endcomponent
		@endslot
	@endisset

	{{-- Footer --}}
	@slot('footer')
		@component('mail::footer')
			Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. Sva prava zadržana.
		@endcomponent
	@endslot
@endcomponent