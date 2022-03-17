$(function(){
	// HOME:ニュース欄
	setInterval(function(){
		let pre = $('.home .news .pre'),
			act = $('.home .news .active'),
			nex = $('.home .news .next');
		$('.news-list  li').removeClass('pre active next');
		pre.addClass('next');	
		nex.addClass('active');	
		act.addClass('pre');	
	},5000);

	// HOME:スタッフ紹介
	let $staffListItems = $('.staff-list-item');
	$staffListItems.on('click', function () {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}
	});
	
	// グローバルナビゲーション用
	// phpで対応予定...
	let bodyClass =  $('body').attr('class');
	bodyClassList = bodyClass.split(" ");
	console.log(bodyClassList);
	$('.overlay li').each(function(){
		for(const className of bodyClassList){
			if($(this).data('text')===className){
				$(this).addClass('active');
			}
		}
	});

	// darkモード
	$toggleScene = $('.scene-icon');
	$toggleScene.on('click','ion-icon',function(event){
		event.preventDefault();
		if($('body').hasClass('dark')){
			$('body').removeClass('dark');
			$(this).attr('name','moon-outline');
		}else{
			$(this).attr('name', 'sunny-outline');
			$('body').addClass('dark');
		}
	});

});
