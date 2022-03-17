<section class="our">
	<h2>{{__('web/home/our.header')}}</h2>
	<div class="context p20">
		@foreach(__('web/home/our.context') as $context)
			<p class="pb10">
				{!! $context !!}
			</p>
		@endforeach
	</div>
	@foreach(__('web/home/our.link') as $link)
		<article>
			<a href="{{ $link['href'] }}">
				<figure>
					<img src="{{$link['imgSrc']}}" alt="{{$link['alt']}}">
				</figure>
				<h3>{{$link['h3']}}</h3>
			</a>
		</article>
	@endforeach
</section>