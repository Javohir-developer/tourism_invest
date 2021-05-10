<?php

namespace backend\components;

use Yii;
use yii\caching\TagDependency;
use common\models\User;

class View extends \yii\web\View
{
    public $menus = [
        'post'       => [
          'label' => 'Posts',
          'icon'  => 'file',
          'url'   => '/post/index',
        ],
        'pages'       => [
            'label' => 'Pages',
            'icon'  => 'file',
            'url'   => '/pages/index',
        ],
        'category'       => [
            'label' => 'Categories',
            'icon'  => 'file',
            'url'   => '/categories',
        ],
		'menu'       => [
			'label' => 'Menu',
			'icon'  => 'file',
			'url'   => '/menu/menu',
		],
		'slider'       => [
			'label' => 'Slider',
			'icon'  => 'file',
			'url'   => '/slider/index',
		],
        [
            'label' => 'Gallery',
            'items' => [
                'PhotoGallery'       => [
                    'label' => 'PhotoGallery',
                    'icon'  => 'file',
                    'url'   => '/photo-gallery/index',
                ],
                'VideoGallery'       => [
                    'label' => 'VideoGallery',
                    'icon'  => 'file',
                    'url'   => '/video-gallery/index',
                ],
            ],
        ],
        'person'       => [
            'label' => 'Persons',
            'icon'  => 'file',
            'url'   => '/person/index',
        ],
        'vote'       => [
            'label' => 'Votes',
            'icon'  => 'file',
            'url'   => '/vote-questions/index',
        ],
        'useful-links'       => [
            'label' => 'Usefull Links',
            'icon'  => 'file',
            'url'   => '/usefull-links',
        ],
        'region-courses'       => [
            'label' => 'Region Courses',
            'icon'  => 'file',
            'url'   => '/region-courses',
        ],
		[
			'label' => 'Feedback',
			'items' => [
                'contact'       => [
                    'label' => 'Feedback',
                    'icon'  => 'file',
                    'url'   => '/contact/index',
                ],
				'FAQ' => [
					'label' => 'FAQ',
					'icon'  => 'file',
					'url'   => '/faq/index',
				],
			],
		],
        [
            'label' => 'Setting',
            'items' => [
                'settings'       => [
                    'label' => 'Settings',
                    'icon'  => 'file',
                    'url'   => '/settings',
                ],
                'translations'       => [
                    'label' => 'Translations',
                    'icon'  => 'file',
                    'url'   => '/translations/source-message',
                ],
            ],
        ],
    ];

    public function getMenu(){
        return $this->menus;
    }

    public function _user()
    {
        return $this->context->_user();
    }

    public function getMenuItems()
    {
        $menu = [];

		$FilterAccessControl = new FilterAccessControl;

        if ($user = $this->_user())
        {
			$menu = Yii::$app->cache->getOrSet([User::CACHE_KEY_USER_MENU, 'user_id' => $user->id, 'language' => Yii::$app->language], function () use ($user, $FilterAccessControl)
			{
				$menu = $this->menus;

				foreach ($menu as $id => &$item)
				{
					if (empty($item)) continue;

					if (isset($item['items']) && !empty($item['items']))
					{
						foreach ($item['items'] as $p => &$childItem)
						{
							if (!$this->_user()->canAccessToResource($childItem['url'], $FilterAccessControl->except))
							{
								unset($menu[$id]['items'][$p]);
							}

							$childItem['label'] = __($childItem['label']);
						}

						if (count($menu[$id]['items']) == 0 && !$user->canAccessToResource($item['url'], $FilterAccessControl->except))
						{
							unset($menu[$id]);
						}
					}

					$item['label'] = __($item['label']);

					if ( !$user->canAccessToResource($item['url'], $FilterAccessControl->except) && (!isset($item['items']) || count($item['items']) == 0) )
					{
						unset($menu[$id]);
					}
				}

				return $menu;

			}, null, new TagDependency(['tags' => User::CACHE_KEY_USER_MENU]));
        }

        return $menu;
    }

    public function getImageUrl($name)
    {
        return $this->getAssetManager()->getBundle('\backend\assets\admin\AdminAsset')->baseUrl . '/' . $name;
    }
}