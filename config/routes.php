<?php

return [

'routes' => [
    'dashboard' => [
        'index' => 'admin.dashboard.index',
    ],
    'siteSettings' => [
        'index' => 'site.index',
        'create' => 'admin.siteSettings.create',
        'edit' => 'admin.siteSettings.edit',
        'update' => 'admin.siteSettings.update',
        'store' => 'admin.siteSettings.store',
    ],
    'filter' =>[
        'index' => 'filtre.index'
    ],
    'articles' => [
        'index' => 'admin.articles.index',
        'list' => 'admin.articles.list',
        'show' => 'admin.articles.show',
        'create' => 'admin.articles.create',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'store' => 'admin.articles.store',
    ],
    'categories' => [
                'index' => 'admin.categories.index',
                'create' => 'admin.categories.create',
                'edit' => 'admin.categories.edit',
                'update' => 'admin.categories.update',
                'store' => 'admin.categories.store',
    ],
    'features' => [
                'index' => 'admin.features.index',
                'create' => 'admin.features.create',
                'edit' => 'admin.features.edit',
                'update' => 'admin.features.update',
                'store' => 'admin.features.store',
    ],
    'contacts' => [
                'index' => 'contacts.index',
                'aboutPage' => 'contacts.aboutPage',
                'create' => 'admin.contacts.create',
                'edit' => 'admin.contacts.edit',
                'update' => 'admin.contacts.update',
                'store' => 'admin.contacts.store',
    ],
],
'views' => [      
    'dashboard' => [
        'index' => 'admin.dashboard',
    ],

    'siteSettings' => [
        'index' => 'index',
        'create' => 'admin.siteSettings.create',
        'edit' => 'admin.siteSettingEdit',
        'update' => 'admin.siteSettings.update',
        'store' => 'admin.siteSettings.store',
    ],

    'articles' => [
        'index' => 'pages.articles.index',
        'list' => 'pages.articles.list',
        'show' => 'pages.articles.show',
        'create' => 'admin.articles.create',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'store' => 'admin.articles.store',
    ],
    'categories' => [
                    'index' => 'admin.categories.index',
                    'create' => 'admin.categories.create',
    ],
    
    'features' => [
        'index' => 'components.features.index',
        'edit' => 'admin.features.edit',
    ],
    'cards' => [
        'article_cards' => 'components.cards.article_card',
        
    ],
    'contacts' => [
        'index' => 'pages.contacts.index',
        'aboutPage' => 'pages.contacts.aboutPage',
    ],
            
   

]
];