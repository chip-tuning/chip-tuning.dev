@if ($paginator->hasPages())
	<div class="text-center">
	    <ul class="pagination">
	        {{-- Previous Page Link --}}
	        @if ($paginator->onFirstPage())
	            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
	        @else
	            <li><a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
	        @endif

	        {{-- Pagination Elements --}}
	        @foreach ($elements as $element)
	            {{-- "Three Dots" Separator --}}
	            @if (is_string($element))
	                <li class="disabled"><a href="#">{{ $element }}</a></li>
	            @endif

	            {{-- Array Of Links --}}
	            @if (is_array($element))
	                @foreach ($element as $page => $url)
	                    @if ($page == $paginator->currentPage())
	                        <li class="active"><a href="#">{{ $page }}</a></li>
	                    @else
	                        <li><a href="{{ $url }}">{{ $page }}</a></li>
	                    @endif
	                @endforeach
	            @endif
	        @endforeach

	        {{-- Next Page Link --}}
	        @if ($paginator->hasMorePages())
	            <li><a href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
	        @else
	            <li class="disabled"><a href="#" onclick="preventDefault();"><i class="fa fa-angle-right"></i></a></li>
	        @endif
	    </ul>
	</div>
@endif
