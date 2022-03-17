<section id="staff">
	<h2>{{__('web/home/cats.header')}}</h2>
	<ul class="staff-list">
		@foreach(__('web/home/cats.context') as $cat)
			<li class="staff-list-item pr20 pl20">
				<figure data-text="{{ $cat['name'] }}">
					<img src="img/cat0{{ $loop->iteration}}.jpg" alt="{{ $cat['name'] }}" >
					<figcaption class="context">
						{!!$cat['context']!!}
					</figcaption>
				</figure>
			</li>
		@endforeach
	</ul>
</section>