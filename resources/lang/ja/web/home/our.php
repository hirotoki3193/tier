<?php
	return [
		'header' => config("app.name").'について',
		'context' => ['
			私ひとりの自由時間。<br>
			と、猫。<br>
			私とあなたの2人の時間。<br>
			と、猫。<br>
			ワタシとキミのおしゃべり時間。<br>と、猫。',
			'"猫ちゃんがいる自由な空間"<br>
			ごゆっくりとお過ごしください。',
		],
		'link' => [
			[ 
				'href' => '/news',
				'imgSrc' => 'img/raychan.jpg',
				'alt' => 'お知らせ',
				'h3' => 'お知らせ'
			],[ 
				'href' => '/about#price',
				'imgSrc' => 'img/rest.jpg',
				'alt' => 'システム',
				'h3' => 'システム'
			],[ 
				'href' => '/beginer',
				'imgSrc' => 'img/tucker.jpg',
				'alt' => 'ルール',
				'h3' => 'ルール'
			],[ 
				'href' => 'https://levelco.github.io',
				'imgSrc' => 'img/coffee01.jpg',
				'alt' => 'おまけ',
				'h3' => 'オマケ(外部サイト)'
			],
		],
	];
?>