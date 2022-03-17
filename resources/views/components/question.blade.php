<section class="question">
	<h2>{{$h2}}</h2>
	<ul class="accordions">
		@foreach($questions as $question)
			<li class="accordion">
				<label class="acd-btn">
					<input type="checkbox" class="acd-btn-check">
					<h3 class="bg-orange">{{$question['q']}}</h3>
					<p class="bg-gray">{{$question['a']}}</p>
				</label>
			</li>
		@endforeach
	</ul>
</section>