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
            ],
        ];
    }
}
