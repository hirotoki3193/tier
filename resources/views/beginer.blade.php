<x-template>
	@section('wraperClass',$data['page'])
	@section('contents')
		<div class="beginers mt40m">
			<h2>{{__('web/beginer/beginer.h2')}}</h2>
			@foreach(__('web/beginer/beginer.context') as $b)
				<div class="step mb20 pt40">
					<h3 class="mt20"><span class="bg-orange">STEP 0{{$loop->iteration}}</span>{{$b['h3']}}</h3>
					<div class="context p40">
						{!! $b['context'] !!}
					</div>
				</div>
			@endforeach
			<div class="pt20">
				<a href="/about#price">{{__('web/beginer/beginer.goSystem')}}</a>
			</div>
		</div>
	@endsection
</x-template>