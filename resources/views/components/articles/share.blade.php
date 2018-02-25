<div class="link pull-right">
	<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
		<li class="facebook">
			<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" onclick="window.open(this.href, '', 'scrollbars=1,resizable=1,width=560,height=350'); return false;">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<li class="googleplus">
			<a target="_blank" href="https://plus.google.com/share?url={{ url()->current() }}" onclick="window.open(this.href,'','scrollbars=1,resizable=1,width=400,height=480');return false;">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<li class="twitter">
			<a target="_blank" href="https://twitter.com/intent/tweet?text={{ $text }}&amp;url={{ url()->current() }}" onclick="window.open(this.href,'','scrollbars=1,resizable=1,width=560,height=255');return false;">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
	</ul>								
</div>