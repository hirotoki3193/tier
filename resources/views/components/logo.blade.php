<div class="logo-img">
	<img src="./img/silhouette01.png" alt="ロゴ" width="100" height="210">
	<div class="logo-text">
		@foreach(__('app.logoLetters') as $char)
			<span data-text="{{$char}}" style="--i:{{ $loop->iteration}}">{{$char}}</span>
		@endforeach
	</div>
</div>