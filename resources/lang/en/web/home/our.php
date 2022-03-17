<?php
	return [
		'header' => 'About '.config("app.name"),
		'context' => [
			'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ullam asperiores nesciunt, necessitatibus excepturi similique eaque delectus consequatur cum, consequuntur iste atque iure praesentium? Enim dignissimos corrupti unde nam porro.',
		],
		'link' => [
			[ 
				'href' => '/news',
				'imgSrc' => 'img/raychan.jpg',
				'alt' => 'Notice',
				'h3' => 'Notice'
			],[ 
				'href' => '/about#price',
				'imgSrc' => 'img/rest.jpg',
				'alt' => 'System',
				'h3' => 'System'
			],[ 
				'href' => '/beginer',
				'imgSrc' => 'img/tucker.jpg',
				'alt' => 'Rule',
				'h3' => 'Rule'
			],[ 
				'href' => 'https://levelco.github.io',
				'imgSrc' => 'img/coffee01.jpg',
				'alt' => 'Extra',
				'h3' => 'Extra'
			],
		],
	];
?>