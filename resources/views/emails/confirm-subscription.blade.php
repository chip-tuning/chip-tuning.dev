@component('mail::layout')
	{{-- Header --}}
	@slot('header')
		@component('mail::header', ['url' => config('app.url')])
			<img src="{{ asset('images/logo-email.png') }}" alt="{{ config('app.name') }}">
		@endcomponent
	@endslot

{{-- Body --}}
Molimo potvrdite vašu email adresu klikom na dugme ispod.

@component('mail::button', ['url' => route('subscription.edit', $subscriber->access_token), 'color' => 'red'])
Potvrdi email
@endcomponent

U slučaju da imate problema sa potvrdom klikom na dugme, molimo posetite ovu adresu:<br>
<small>[{{ route('subscription.edit', $subscriber->access_token) }}]({{ route('subscription.edit', $subscriber->access_token) }})</small>
<br><br>
<small>Ukoliko ste ovaj email dobili greškom, možete ga ignorisati.</small>
<br><br>
{{ config('app.name') }}

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
