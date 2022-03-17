<x-template>
	@section('wraperClass',$data['page'])
	@section('contents')
	<div class="form mt40m">
		<h2 class="p10">{{__('web/contact/form.h2')}}</h2>
		{!! Form::open(['url' => 'contact/submit','class'=>'p20']) !!}
		<div class="form-group mt10 mb10">
			{{Form::text('name', '', ['id' => 'name', 'class' => 'form-control', 'required'])}}
			{{Form::label('name', __('web/contact/form.name'))}}
		</div>
		<div class="form-group mt10 mb10">
			{{Form::email('email', '', ['id' => 'email', 'class' => 'form-control','required'])}}
			{{Form::label('email', __('web/contact/form.email'))}}
		</div>
		<div class="form-group mt10 mb10">
			{{Form::select('select', 
			[
				'question' => __('web/contact/form.select.question'),
				'adopt' => __('web/contact/form.select.adopt'),
				'others' => __('web/contact/form.select.others'),
			], '',
			['id' => 'select', 'class' => 'form-control', 'required','placeholder'=>''])}}
			{{Form::label('select', __('web/contact/form.select.label'))}}
		</div>
		<div class="form-group">
			{{Form::textarea('message', '', ['id' => 'message', 'class' => 'form-control', 'required'])}}
			{{Form::label('message', __('web/contact/form.textarea'))}}
		</div>
		<div class="submit">
			{{Form::submit(__('web/contact/form.submit'), ['class'=> 'btn btn-primary'])}}
		</div>
		{!! Form::close() !!}
	</div>
	<x-access />
	@endsection
</x-template>