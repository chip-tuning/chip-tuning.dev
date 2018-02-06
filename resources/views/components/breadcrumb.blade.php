<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ $parent_url }}">{{ $parent }}</a></li>
			@if (isset($child))
			<li><a class="link-dark" href="{{ $child_url }}">{{ $child }}</a></li>
			@endif
			<li class="active">{{ $slot }}</li>
		</ol>
	</div>
</div>