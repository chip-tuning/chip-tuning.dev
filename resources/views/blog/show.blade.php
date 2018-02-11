@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('content')
<div id="blog">
	@component('components.breadcrumbs')
		<li><a class="link-dark" href="{{ route('blog.index') }}">Blog</a></li>
		<li class="active">Post</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h1 class="page-title">Blog Post</h1>
					<article class="blogpost full">
						<header>
							<div class="post-info">
								<span class="post-date">
									<i class="icon-calendar"></i>
									<span class="day">12</span>
									<span class="month">May 2015</span>
								</span>
								<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
								<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
							</div>
						</header>
						<div class="blogpost-content">
							<img src="{{ asset('images/blog-2.jpg') }}" alt="">
							<p>Mauris dolor sapien, <a href="#">malesuada at interdum ut</a>, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam nemo itaque excepturi suscipit unde repudiandae nesciunt ad voluptates minima recusandae illum exercitationem, neque, ut totam ratione. Consequuntur consequatur ad nesciunt nulla voluptate voluptates qui natus labore facilis dolore odit vero ea sint inventore tenetur et eligendi nobis fugit veniam quod possimus, quasi, voluptatem. Cupiditate?</p>
							<ol>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, laboriosam tempore, veniam repudiandae dolor aperiam, iste porro amet odio eius earum tempora? Ex nobis suscipit, nam in eius, deserunt nihil.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis odit est quae amet iure quia reiciendis maxime eos blanditiis tenetur voluptates, ab, obcaecati eaque accusamus dolorem a beatae mollitia quod?</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aperiam vel cum quisquam enim reprehenderit sunt cupiditate ullam, id quidem perspiciatis dolore molestiae iure odio. Dolore fuga voluptate, deleniti placeat.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, eaque. Totam nisi ducimus dolor ab obcaecati temporibus asperiores, ad dignissimos dolorum unde fuga quae voluptates beatae quasi voluptatum culpa dolore?</li>
							</ol>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus incidunt, beatae rem omnis distinctio, dolor, praesentium impedit quisquam nobis pariatur nulla expedita aliquid repellendus laudantium. A illum sint corrupti eligendi quae ab, facilis eos quas! Velit earum facere ex maxime.</p>
						</div>
						<footer class="clearfix">
							<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
							<div class="link pull-right">
								<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</footer>
					</article>
				</div>
				@include('sections.sidebar')
			</div>
		</div>
	</section>
</div>
@endsection