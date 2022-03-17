<?php 
	$news = __('web/news/contexts');
	return [
		'header' => 'お知らせ',
		'context' => [
			[	
				'title' => $news[0]['header']['h2'],
				'date'  => $news[0]['header']['date'],
				'class' => 'pre',
				'href' => '/news',
			],[	
				'title' => $news[1]['header']['h2'],
				'date'  => $news[1]['header']['date'],
				'class' => 'active',
				'href' => '/news',
			],[	
				'title' => $news[2]['header']['h2'],
				'date'  => $news[2]['header']['date'],
				'class' => 'next',
				'href' => '/news',
			],
		],
		'more' => [
			'context' => 'MORE',
			'href' => '/news',
		],
	];
 ?>