<x-template>
	@section('wraperClass',$data['page'])
	@section('contents')
		<div class="main">
			@foreach(__('web/news/contexts') as $news)
			<article>
				<div class="header">
					<h2>
						{{$news['header']['h2']}}
					</h2>
					<time datetime="{{$news['header']['date']}}" class="date">
						{{str_replace('-','.',$news['header']['date'])}}
					</time>
					<p class="pt10 pb40">
						{!!$news['header']['context']!!}
					</p>
				</div>
				@isset($news['contents'])
					<div class="context">
					@foreach($news['contents'] as $content)
						<section>
							<h3>
								{{$content['h3']}}
							</h3>
							<p class="p10 pb20">
								{!!$content['context']!!}
							</p>
						</section>
					@endforeach
					</div>
				@endisset
			</article>
			@endforeach
		</div>
	@endsection
</x-template>