@extends('app/register/view', [
	'model' => [
		'form' => [
			'action' => '/',
			'fields' => [
				[
					'label' => 'Email',
					'name' => 'email',
					'type' => 'email',
				],
				[
					'label' => 'Full name',
					'name' => 'name',
					'type' => 'text',
				],
				[
					'label' => 'Password',
					'name' => 'password',
					'type' => 'password',
				],
			],
		],
	],
])
