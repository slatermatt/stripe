@extends('app/home/home', [
	'model' => [
		'pageHeader' => [
			'title' => 'Payments infrastructure for the internet',
			'content' => 'Millions of businesses of all sizes—from startups to large enterprises—use Stripe’s software and APIs to accept payments, send payouts, and manage their businesses online.',
			'ctas' => [
				[
					'title' => 'Start now',
					'url' => route('templates.show', 'register/index'),
				],
				[
					'title' => 'Contact sales',
					'url' => route('templates.show', 'contact/index'),
				],
			],
			'image' => [
				'url' => '//placehold.it/1000',
				'alt' => 'Infographic of payment system & stats displayed in charts',
			],
		],
		'clients' => [
			'title' => 'Our clients',
			'items' => [
				[
					'name' => 'deliveroo',
					'title' => 'Deliveroo logo',
				],
				[
					'name' => 'booking',
					'title' => 'Booking.com logo',
				],
				[
					'name' => 'made',
					'title' => 'Made logo',
				],
				[
					'name' => 'hostelworld',
					'title' => 'Hostelworld logo',
				],
				[
					'name' => 'missguided',
					'title' => 'Missguided logo',
				],
				[
					'name' => 'asosmarketplace',
					'title' => 'AsosMarketplace logo',
				],
				[
					'name' => 'monzo',
					'title' => 'Monzo logo',
				],
				[
					'name' => 'xero',
					'title' => 'Xero logo',
				],
			],
		],
		'blocks' => [
			[
				'type' => 'products',
				'value' => [
					'subTitle' => 'Unified platform',
					'title' => 'A fully integrated suite of payments products',
					'content' => [
						[
							'text' => 'We bring together everything that’s required to build websites and apps that accept payments and send payouts globally. Stripe’s products power payments for <a href="/">online and in-person retailers</a>, <a href="/">subscriptions businesses</a>, <a href="/">software platforms and marketplaces</a>, and everything in between.',
						],
						[
							'text' => 'We also help companies <a href="/">beat fraud</a>, <a href="/">send invoices</a>, <a href="/">issue virtual and physical cards</a>, <a href="/">get financing</a>, <a href="/">manage business spend</a>, and much more.',
						],
					],
					'ctas' => [
						[
							'title' => 'Start with payments',
							'url' => route('templates.show', 'payments/index'),
						],
					],
					'gallery' => [
						'card' => [
							'url' => '//placehold.it/383x237?text=card',
							'alt' => 'Bank card',
						],
						'invoice' => [
							'url' => '//placehold.it/590x424?text=invoice',
							'alt' => 'Infographic of invoice payment system',
						],
						'phone' => [
							'url' => '//placehold.it/302x618?text=phone',
							'alt' => 'Phone payment',
						],
						'web' => [
							'url' => '//placehold.it/1024x540?text=web',
							'alt' => 'Infographic of web control panel',
						],
						'calculator' => [
							'url' => '//placehold.it/304x566?text=calc',
							'alt' => 'Calculator',
						],
					],
				],
			],
			[
				'type' => 'developers',
				'value' => [
					'subTitle' => 'Designed for developers',
					'title' => 'The world&rsquo;s most powerful and easy-to-use APIs',
					'content' => 'We agonize over the right abstractions so your teams don&rsquo;t need to stitch together disparate systems or spend months integrating payments functionality.',
					'ctas' => [
						[
							'title' => 'Read the docs',
							'url' => route('templates.show', 'docs/index'),
						],
					],
					'features' => [
						[
							// 'icon' => 'settings',
							'icon' => 'chevron-right',
							'title' => 'Tools for every stack',
							'content' => 'We offer client and server libraries in everything from React and PHP to .NET and iOS.',
							'cta' => [
								'title' => 'See libraries',
								'url' => route('templates.show', 'docs/view'),
							],
						],
						[
							// 'icon' => 'boxes',
							'icon' => 'chevron-up',
							'title' => 'Prebuilt integrations',
							'content' => 'Use integrations for systems like Shopify, WooCommerce, NetSuite, and more.',
							'cta' => [
								'title' => 'Explore partnets',
								'url' => route('templates.show', 'partners/index'),
							],
						],
					],
					'image' => [
						'url' => '//placehold.it/550x660',
						'alt' => 'Simple code snippet',
					],
				],
			],
			[
				'type' => 'why-stripe',
				'value' => [
					'subTitle' => 'Why Stripe',
					'title' => 'A technology-first approach to payments and finance',
					'features' => [
						[
							// 'icon' => 'hexagon',
							'icon' => 'chevron-up',
							'title' => 'Close to the metal',
							'content' => 'From <a href="/">direct integrations</a> with card networks and banks to checkout flows in the browser, we operate on and optimize at every level of the financial stack.',
						],
						[
							// 'icon' => 'fast-forward',
							'icon' => 'chevron-down',
							'title' => 'Fastest-improving platform',
							'content' => 'We release <a href="/">hundreds of features</a> and improvements each year to help you stay ahead of industry shifts. (On average, we deploy our production API 16x per day.)',
						],
						[
							// 'icon' => 'ecg-check',
							'icon' => 'chevron-left',
							'title' => 'Battle-tested reliability',
							'content' => 'Our systems operate with <a href="/">99.9%+</a> uptime and are highly scalable and redundant. Stripe is certified to the highest compliance standards.',
						],
						[
							// 'icon' => 'cogs',
							'icon' => 'chevron-right',
							'title' => 'Intelligent optimizations',
							'content' => 'Our machine learning models train on <a href="/">billions</a> of data points and help increase revenue across conversion, fraud, revenue recovery, and more.',
						],
					],
				],
			],
			[
				'type' => 'global',
				'value' => [
					'subTitle' => 'Global scale',
					'title' => 'The backbone for internet business',
					'content' => 'For ambitious companies around the world, Stripe makes moving money as simple, borderless, and programmable as the rest of the internet. Our teams are based in dozens of offices around the world and we process hundreds of billions of pounds each year for <a href="/">startups to large enterprises</a>.',
					'stats' => [
						[
							'figure' => '250M+',
							'description' => 'API requests per day, peaking at 13,000 requests a second.',
						],
						[
							'figure' => '90%',
							'description' => 'of U.S. adults have bought from businesses using Stripe.',
						],
						[
							'figure' => '135+',
							'description' => 'currencies and payment methods supported.',
						],
						[
							'figure' => '35+',
							'description' => 'countries with local acquiring, optimizing acceptance rates.',
						],
					],
				],
			],
		],
		'start' => [
			'title' => 'Ready to get started?',
			'content' => 'Explore <a href="/payments">Stripe Payments</a>, or create an account instantly and start accepting payments. You can also contact us to design a custom package for your business.',
			'ctas' => [
				[
					'title' => 'Start now',
					'url' => route('templates.show', 'register/index'),
				],
				[
					'title' => 'Contact sales',
					'url' => route('templates.show', 'contact/index'),
				],
			],
			'features' => [
				[
					// 'icon' => 'pricetag',
					'icon' => 'chevron-right',
					'title' => 'Always know what you pay',
					'content' => 'Integrated per-transaction pricing with no hidden fees.',
					'cta' => [
						'title' => 'Pricing details',
						'url' => route('templates.show', 'pricing/index'),
					],
				],
				[
					// 'icon' => 'code',
					'icon' => 'chevron-up',
					'title' => 'Start your integration',
					'content' => 'Get up and running with Stripe in as little as 10 minutes.',
					'cta' => [
						'title' => 'API reference',
						'url' => route('templates.show', 'api/index'),
					],
				],
			],
		],
	],
])
