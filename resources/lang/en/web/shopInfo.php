<?php
	$time = '10：00～19：00';
	return [
		'header' => 'Edomachi store',
		'time' => $time,
		'context' => [
			[
				'icon-name' => 'location-outline',
				'name' => 'Address',
				'value' => '5-6 Edomachi, Nagasaki City',
			],[
				'icon-name' => 'call-outline',
				'name' => 'Tel',
				'value' => '095-xxx-xxxx',
			],[
				'icon-name' => 'mail-outline',
				'name' => 'Email',
				'value' => 'sample@frontier.com',
			],[
				'icon-name' => 'time-outline',
				'name' => 'Open',
				'value' => $time,
			],
		],
	];
?>