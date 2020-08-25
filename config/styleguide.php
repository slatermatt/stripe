<?php

// colours
$variables = file_get_contents(resource_path('assets/variables.json'));
$variablesArray = json_decode($variables, JSON_OBJECT_AS_ARRAY);
$keys = array_keys((array)$variablesArray['colors']);
$colorsArr = [];
if (isset($variablesArray['colors']) && is_array($variablesArray['colors'])) {
	foreach ($variablesArray['colors'] as $key => $colors) {
		array_push($colorsArr, $key);
	}
}

// icons
function icon($file) {
	return str_replace('.svg', '', basename($file));
}

$iconFiles = glob('../resources/assets/sprite/*.svg');
$icons = [];

foreach ($iconFiles as $icon) {
	array_push($icons, [
		'name' => str_replace('.svg', '', basename($icon)),
	]);
}

return [
	'meta' => [
		'title' => 'Styleguide',
		'icon' => '/static/img/meta/favicon-32.png',
		'accent' => '#ff585d',
	],
	'sections' => [
		'foundation' => [
			'heading' => 'Foundations',
			'copy' => 'Basic elements such as fonts, typography and colours.',
			'blocks' => [
				'font' => [
					'heading' => 'Fonts',
					'copy' => 'Culpa consequat incididunt ea id ad in labore nostrud. Sunt enim eu laboris laborum qui fugiat elit consectetur Lorem mollit adipisicing velit.',
					'previews' => [
						'sans-serif' => [
							'heading' => 'Sans-serif',
							'copy' => 'Anim magna sit amet elit irure nisi ex et. Elit qui aliquip labore cupidatat ullamco in enim esse aute.',
							'partial' => 'foundation/fonts',
							'style' => 'font-family: sans-serif',
							'attributes' => [
								[
									'weights' => [400, 700],
								],
							],
						],
						'serif' => [
							'heading' => 'Serif',
							'copy' => 'Exercitation reprehenderit quis reprehenderit nisi in dolor. Ipsum quis veniam ipsum laboris nisi.',
							'partial' => 'foundation/fonts',
							'style' => 'font-family: serif',
							'attributes' => [
								[
									'weights' => [400, 700],
								],
							],
						],
						'helvetica-neue' => [
							'heading' => 'Helvetica Neue',
							'copy' => 'Exercitation reprehenderit quis reprehenderit nisi in dolor. Ipsum quis veniam ipsum laboris nisi.',
							'partial' => 'foundation/fonts',
							'style' => 'font-family: "Helvetica Neue"',
							'attributes' => [
								[
									'weights' => [400, 500, 700],
								],
							],
						],
					],
				],
				'colour' => [
					'heading' => 'Colours',
					'previews' => [
						[
							'partial' => 'foundation/colours',
							'attributes' => [
								[
									'colours' => $colorsArr,
								]
							],
						],
					],
				],
				'icon' => [
					'heading' => 'Icons',
					'copy' => 'Est commodo labore do eiusmod ea aute ea exercitation. Et quis ea aliqua culpa cupidatat pariatur sunt. Eu eiusmod dolor ut duis ad.',
					'previews' => [
						[
							'component' => [
								'name' => 'icon',
								'type' => 'vue',
							],
							'style' => 'font-size: 50px; line-height: 1',
							'attributes' => $icons,
							'stack' => false,
						],
					],
				],
				'table' => [
					'heading' => 'Table',
					'copy' => 'Est commodo labore do eiusmod ea aute ea exercitation. Et quis ea aliqua culpa cupidatat pariatur sunt. Eu eiusmod dolor ut duis ad.',
					'previews' => [
						[
							'component' => [
								'name' => 'e-table',
								'type' => 'vue',
							],
							'stack' => true,
							'attributes' => [
								[
									'headers' => [
										'Caption X',
										'Caption Y',
									],
									'content' => [
										[
											'Content row x',
											'Content row y',
										],
										[
											'Content row x',
											'Content row y',
										],
										[
											'Content row x',
											'Content row y',
										],
									],
								],
							],
						],
					],
				],
			],
		],
		'block' => [
			'heading' => 'Blocks',
			'copy' => 'More complex components',
			'blocks' => [
				'button' => [
					'heading' => 'Button',
					'previews' => [
						[
							'component' => [
								'name' => 'e-button',
								'type' => 'vue',
							],
							'autoload' => false,
							'container' => true,
							'attributes' => [
								[
									'text' => 'Start now',
									'type' => 'primary',
								],
								[
									'text' => 'Contact sales',
								],
								[
									'text' => 'Start with payments',
									'type' => 'secondary',
								],
								[
									'text' => 'Read the docs',
									'type' => 'tertiary',
								],
								[
									'text' => 'Contact Sales',
									'class' => 'text-brand-purple',
								],
							],
						],
					],
				],
			],
		],
	],
];
