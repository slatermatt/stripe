<?php

namespace App\Http\ViewComposers;

use Engage\LaravelFrontend\PageDefaultsViewComposer as BaseViewComposer;

class PageDefaultsViewComposer extends BaseViewComposer
{
    /**
     * Returns developer-defined application default variables.
     *
     * @return array
     */
    protected function app(): array
    {
        return [
            'page' => [
                'title' => trans('meta.default.title'),
                'description' => trans('meta.default.description'),
                'site_name' => 'Site Name',
                'social_image' => asset('/static/img/meta/share.png'),
                'url' => url()->current(),
                'creator_twitter_handle' => '@author_handle',
                'site_twitter_handle' => '@site_handle',
                'share_title' => trans('meta.default.share_title'),
                'share_description' => trans('meta.default.share_description'),
                'type' => 'article',
                'js' => [
                    'sprite' => (string) mix('/compiled/img/sprite.svg'),
                ],
            ],
            'links' => [
                'home' => route('home.show'),
            ],
        ];
    }

    /**
     * Returns developer-defined frontend default variables.
     *
     * @return array
     */
    protected function templates(): array
    {
        return [
            'links' => [
                'home' => route('templates.show', 'home/index'),
                'sign-in' => route('templates.show', 'sign-in/index'),
            ],
            'nav' => [
                'mobile' => [
                    'title' => 'Products',
                    'primary' => [
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Payments',
                            'url' => route('templates.show', 'payments/index'),
                        ],
                        [
                            'icon' => 'chevron-right',
                            'title' => 'Terminal',
                            'url' => route('templates.show', 'terminal/index'),
                        ],
                        [
                            'icon' => 'chevron-down',
                            'title' => 'Billing',
                            'url' => route('templates.show', 'billing/index'),
                        ],
                        [
                            'icon' => 'chevron-left',
                            'title' => 'Connect',
                            'url' => route('templates.show', 'connect/index'),
                        ],
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Payouts',
                            'url' => route('templates.show', 'payouts/index'),
                        ],
                        [
                            'icon' => 'chevron-right',
                            'title' => 'Issuing',
                            'url' => route('templates.show', 'issuing/index'),
                        ],
                        [
                            'icon' => 'chevron-down',
                            'title' => 'Radar',
                            'url' => route('templates.show', 'radar/index'),
                        ],
                        [
                            'icon' => 'chevron-left',
                            'title' => 'Sigma',
                            'url' => route('templates.show', 'sigma/index'),
                        ],
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Atlas',
                            'url' => route('templates.show', 'atlas/index'),
                        ],
                    ],
                    'secondary' => [
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Pricing',
                            'url' => route('templates.show', 'pricing/index'),
                        ],
                        [
                            'icon' => 'chevron-right',
                            'title' => 'About Stripe',
                            'url' => route('templates.show', 'about-stripe/index'),
                        ],
                        [
                            'icon' => 'chevron-down',
                            'title' => 'Enterprise',
                            'url' => route('templates.show', 'enterprise/index'),
                        ],
                        [
                            'icon' => 'chevron-left',
                            'title' => 'Jobs',
                            'url' => route('templates.show', 'jobs/index'),
                        ],
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Partners',
                            'url' => route('templates.show', 'partners/index'),
                        ],
                        [
                            'icon' => 'chevron-right',
                            'title' => 'Newsroom',
                            'url' => route('templates.show', 'newsroom/index'),
                        ],
                        [
                            'icon' => 'chevron-down',
                            'title' => 'Documentation',
                            'url' => route('templates.show', 'documentation/index'),
                        ],
                        [
                            'icon' => 'chevron-left',
                            'title' => 'Support',
                            'url' => route('templates.show', 'support/index'),
                        ],
                        [
                            'icon' => 'chevron-up',
                            'title' => 'Blog',
                            'url' => route('templates.show', 'blog/index'),
                        ],
                    ],
                    'cta' => [
                        'title' => 'Sign in',
                        'url' => route('templates.show', 'sign-in/index'),
                    ],
                ],
                'desktop' => [
                    'products' => [
                        'title' => 'Products',
                        'categories' => [
                            [
                                'title' => 'Payments',
                                'items' => [
                                    [
                                        'icon' => 'chevron-up',
                                        'title' => 'Payments',
                                        'description' => 'Online Payments',
                                        'url' => route('templates.show', 'payments/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-right',
                                        'title' => 'Terminal',
                                        'description' => 'In-person payments',
                                        'url' => route('templates.show', 'payments/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-down',
                                        'title' => 'Connect',
                                        'description' => 'Payments for platforms',
                                        'url' => route('templates.show', 'payments/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-left',
                                        'title' => 'Billing',
                                        'description' => 'Subscriptions & invoicing',
                                        'url' => route('templates.show', 'payments/view'),
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Payouts',
                                'items' => [
                                    [
                                        'icon' => 'chevron-up',
                                        'title' => 'Payouts',
                                        'description' => 'Programmatic payouts',
                                        'url' => route('templates.show', 'payouts/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-right',
                                        'title' => 'Issuing',
                                        'description' => 'Card creation',
                                        'url' => route('templates.show', 'payouts/view'),
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Business operations',
                                'items' => [
                                    [
                                        'icon' => 'chevron-up',
                                        'title' => 'Radar',
                                        'description' => 'Fraud & risk management',
                                        'url' => route('templates.show', 'operations/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-right',
                                        'title' => 'Sigma',
                                        'description' => 'Custom reports',
                                        'url' => route('templates.show', 'operations/view'),
                                    ],
                                    [
                                        'icon' => 'chevron-down',
                                        'title' => 'Atlas',
                                        'description' => 'Startup incorporation',
                                        'url' => route('templates.show', 'operations/view'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'developers' => [
                        'title' => 'Developers',
                        'docs' => [
                            'icon' => 'chevron-right',
                            'title' => 'Documentation',
                            'description' => 'Start integrating Stripes products and tools',
                            'url' => route('templates.show', 'docs/index'),
                        ],
                        'categories' => [
                            [
                                'title' => 'Get started',
                                'items' => [
                                    [
                                        'title' => 'Prebuilt checkout',
                                        'url' => route('templates.show', 'checkout/index'),
                                    ],
                                    [
                                        'title' => 'Libraries and SDKs',
                                        'url' => route('templates.show', 'libraries/index'),
                                    ],
                                    [
                                        'title' => 'Plugins',
                                        'url' => route('templates.show', 'plugins/index'),
                                    ],
                                    [
                                        'title' => 'Code samples',
                                        'url' => route('templates.show', 'code-samples/index'),
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Guides',
                                'items' => [
                                    [
                                        'title' => 'Accept online payments',
                                        'url' => route('templates.show', 'payments/index'),
                                    ],
                                    [
                                        'title' => 'Manage subscriptions',
                                        'url' => route('templates.show', 'manage/index'),
                                    ],
                                    [
                                        'title' => 'Send payments',
                                        'url' => route('templates.show', 'send/index'),
                                    ],
                                    [
                                        'title' => 'Set up in-person payments',
                                        'url' => route('templates.show', 'in-person/index'),
                                    ],
                                ],
                            ],
                        ],
                        'links' => [
                            [
                                'icon' => 'chevron-up',
                                'title' => 'Full API reference',
                                'url' => route('templates.show', 'api/index'),
                            ],
                            [
                                'icon' => 'chevron-right',
                                'title' => 'API status',
                                'url' => route('templates.show', 'api/index'),
                            ],
                            [
                                'icon' => 'chevron-down',
                                'title' => 'Support',
                                'url' => route('templates.show', 'api/index'),
                            ],
                            [
                                'icon' => 'chevron-left',
                                'title' => 'API changelog',
                                'url' => route('templates.show', 'api/index'),
                            ],
                        ],
                    ],
                    'company' => [
                        'title' => 'Company',
                        'links' => [
                            [
                                'icon' => 'chevron-up',
                                'title' => 'About stripe',
                                'url' => route('templates.show', 'about/index'),
                            ],
                            [
                                'icon' => 'chevron-right',
                                'title' => 'Jobs',
                                'url' => route('templates.show', 'careers/index'),
                            ],
                            [
                                'icon' => 'chevron-down',
                                'title' => 'Customers',
                                'url' => route('templates.show', 'customers/index'),
                            ],
                            [
                                'icon' => 'chevron-left',
                                'title' => 'Environment',
                                'url' => route('templates.show', 'environment/index'),
                            ],
                            [
                                'icon' => 'chevron-up',
                                'title' => 'Enterprise',
                                'url' => route('templates.show', 'enterprise/index'),
                            ],
                            [
                                'icon' => 'chevron-right',
                                'title' => 'Newsroom',
                                'url' => route('templates.show', 'newsroom/index'),
                            ],
                            [
                                'icon' => 'chevron-down',
                                'title' => 'Partners',
                                'url' => route('templates.show', 'partners/index'),
                            ],
                        ],
                        'blog' => [
                            'icon' => 'chevron-right',
                            'title' => 'From the blog',
                            'url' => route('templates.show', 'blog/index'),
                            'articles' => [
                                [
                                    'title' => 'Introducing the Billing customer portal',
                                    'url' => route('templates.show', 'articles/view'),
                                ],
                                [
                                    'title' => 'Opposing racism',
                                    'url' => route('templates.show', 'articles/view'),
                                ],
                                [
                                    'title' => 'Stripes remote engineering hub, one year in',
                                    'url' => route('templates.show', 'articles/view'),
                                ],
                            ],
                        ],
                    ],
                    'pricing' => [
                        'title' => 'Pricing',
                        'url' => route('templates.show', 'pricing/index'),
                    ],
                ],
                'cta' => [
                    'title' => 'Sign in',
                    'url' => route('templates.show', 'sign-in/index'),
                ],
            ],
        ];
    }
}
