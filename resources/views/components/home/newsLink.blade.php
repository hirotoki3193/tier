<section class="news bg-black mt40m">
	<h2>{{__('web/home/news.header')}}</h2>
	<ul class="news-list">
		@foreach(__('web/home/news.context') as $news)
			<li class="{{$news['class']}}">
				<time datetime="{{$news['date']}}">{{str_replace('-','.',$news['date'])}}</time>
				<a href="{{$news['href']}}">{{$news['title']}}</a>
			</li>
		@endforeach
	</ul>
	<p>
		<a href="{{__('web/home/news.more.href')}}">
			{{__('web/home/news.more.context')}}
		</a>
	</p>
</section>