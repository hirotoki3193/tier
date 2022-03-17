<x-template>
	@section('wraperClass',$data['page'])
	@section('contents')
		<section class="concept mt40m">
			<div class="bg-concept p20">
				<h2 class="p10">Concept</h2>
				@foreach(__('web/about/concept') as $con)
					<p class="pt20">
						{!! $con !!}
					</p>
				@endforeach
			</div>
		</section>
		<section id="price" class="pb40">
			<h2>
				<span class="ion-icons mr20">
					<ion-icon name="alarm-outline"></ion-icon>
					<ion-icon name="logo-yen"></ion-icon>
				</span>
				<span>{{__('web/about/system.h2')}}</span>
			</h2>
			<p>
				{{__('web/about/system.context')}}<br>
				<a href="#access">
					{{__('web/about/system.linkText')}}
				</a>
			</p>
			@foreach(__('web/about/system.table') as $table)
				<div>
					<table border="1">
						<caption>{{$table['tableCaption']}}</caption>
						<thead>
							@foreach($table['th'] as $th)
								<th>{{$th}}</th>
							@endforeach
						</thead>
						<tbody>
							@foreach($table['td'] as $td)
								<td>{{$td}}</td>
							@endforeach
						</tbody>
					</table>
					@foreach($table['caution'] as $caution)
						<p>{{$caution}}</p>
					@endforeach
				</div>
			@endforeach
		</section>
		<section class="event bg-gray mt40m p20 pb40">
			<h2>
				<span class="ion-icons mr20">
					<ion-icon name="restaurant-outline"></ion-icon>
					<ion-icon name="paw-outline"></ion-icon>
				</span>
				<span>{{__('web/about/event.h2')}}</span>
			</h2>
			<dl class="p20">
				@foreach(__('web/about/event.dl') as $dl)
					<dt class="p10">{{$dl['dt']}}</dt>
					<dd class="ml40">{!! $dl['dd'] !!}</dd>
				@endforeach
			</dl>
		</section>
		<section class="caution bg-black mt40m p20 pb40">
			<h2>
				<ion-icon name="warning-outline"></ion-icon>
				<span class="ml10">{{ __('web/about/caution.h2') }}</span>
			</h2>
			<ul class="p20 pl40">
				@foreach(__('web/about/caution.ul') as $li)
					<li>{{ $li }}</li>
				@endforeach
			</ul>
		</section>
		<x-access/>
	@endsection
</x-template>