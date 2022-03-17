<div class="shop-info" id="access">
	<h2>
		<ion-icon name="storefront-outline"></ion-icon>
		<span class="ml10 mr10">{{config('app.name')}}</span>
		<span>{{ __('web/shopInfo.header') }}</span>
	</h2>
	<ul class="p20">
		@foreach( __('web/shopInfo.context') as $info)
			<li>
				<ion-icon name="{{ $info['icon-name']}}"></ion-icon>
				<span>{{ $info['value']}}</span>
			</li>
		@endforeach
	</ul>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d776.7644537644306!2d129.87548629334245!3d32.74429864812534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5qCq5byP5Lya56S-44OV44Ot44Oz44OG44Kj44Ki!5e0!3m2!1sja!2sjp!4v1644803918538!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>