@extends('app/register/view', [
	'model' => [
		'info' => [
			'features' => [
				[
					'title' => 'Quick and free sign‑up',
					'content' => 'Enter your email address to create an account.',
				],
				[
					'title' => 'Global payment methods',
					'content' => 'Accept credit cards, Apple Pay, ACH, iDEAL and more.',
				],
				[
					'title' => 'Start accepting payments',
					'content' => 'Use Stripe’s API or pick a pre-built solution.',
				],
			],
			'links' => [
				[
					'title' => '&copy; Stripe',
					'url' => route('templates.show', 'home/index'),
				],
				[
					'title' => 'Privacy &amp; terms',
					'url' => route('templates.show', 'privacy/index'),
				],
			],
		],
		'register' => [
			'title' => 'Create your Stripe account',
			'form' => [
				'action' => route('templates.show', 'home/index'),
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
					[
						'label' => 'Confirm password',
						'name' => 'confirm-password',
						'type' => 'password',
					],
					[
						'component' => 'checkbox-wrapper',
						'label' => 'Don&rsquo;t email me about product updates. If this box is left unticked, Stripe will occasionally send helpful and relevant emails. You can unsubscribe at any time. <a href="/privacy">Privacy Policy</a>',
						'name' => 'marketing',
					],
				],
			],
		],
	],
])
