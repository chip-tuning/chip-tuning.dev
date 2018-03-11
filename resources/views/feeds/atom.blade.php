{!! '<?xml version="1.0" encoding="utf-8" ?>' !!}
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="{{ app()->getLocale() }}">
	<title>{{ config('app.name', 'RPCT') }}</title>
	<subtitle>Racing Performance Chip Tuning - Najnoviji članci</subtitle>
	<link rel="self" type="application/atom+xml" href="{{ url()->current() }}" />
	<link href="{{ config('app.url') }}" />
	<updated>{{ $updated }}</updated>
	<id>{{ $id }}{{ $feed }}</id>
	<author>
		<name>{{ config('app.name', 'RPCT') }}</name>
		<email>{{ config('app.details.email', 'office@chip-tuning.rs') }}</email>
	</author>

@foreach($articles as $article)
	<entry>
		<title>{{ $article->title }}</title>
		<link href="{{ route('blog.show', $article->slug) }}" />
		<id>{{ $id }}{{ $article->published_at->format('Y-m-d') }}:/{{ $article->slug }}</id>
		<updated>{{ $article->published_at->toAtomString() }}</updated>
		<summary>{{ strip_tags(str_replace('><', '> <', $article->summary)) }}</summary>
	</entry>
@endforeach
</feed>