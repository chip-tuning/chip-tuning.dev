<div class="tags pull-left">
	<i class="fa fa-tags"></i> 
	@foreach($tags as $tag)
		<a href="{{ route('blog.index') }}?tag={{ $tag->name }}">#{{ $tag->name }}</a>@if (!$loop->last),@endif
	@endforeach
</div>