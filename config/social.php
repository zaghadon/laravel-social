<?php

return [

    // config for zaghadon/laravel-social package
    'likes' => [
        'model' => Zaghadon\Social\Models\Like::class,

        'table' => 'likes',

        'pivot_table' => 'likeables',

        'counter_model' => Zaghadon\Social\Models\LikeCounter::class,

        'counter_table' => 'like_counters',

        'morphs' => 'likeable',

        'liker_foreign_key' => 'liker_id',
    ],

    'bookmarks' => [
        'table' => 'bookmarks',

        'model' => Zaghadon\Social\Models\Bookmark::class,

        'morphs' => 'bookmarkable',

        'bookmarker_foreign_key' => 'user_id',

        'bookmark_group' => [
            'table' => 'bookmark_groups',

            'model' => Zaghadon\Social\Models\BookmarkGroup::class,

        ],
    ],

    'tags' => [
        'table' => 'tags',

        'pivot_table' => 'tagables',

        'model' => Zaghadon\Social\Models\Tag::class,

        'morphs' => 'tagable',

        'default_active' => true,
    ],

    'categories' => [
        'table' => 'categories',

        'pivot_table' => 'categoriables',

        'model' => Zaghadon\Social\Models\Category::class,

        'morphs' => 'categoriable',

        'default_active' => true,
    ],

    'comments' => [
        'table' => 'comments',

        'model' => Zaghadon\Social\Models\Comment::class,

        'commentors' => [],

        'morphs' => 'commentable',

        'commentor_foreign_key' => 'commentor_id',

        'default_commentator' => config('auth.providers.users.model'),

        'middleware'   => ['web'],

        'need_approve' => false,

        'has_rate' => false,
    ],

    'follows' => [
        'table' => 'follows',

        'morphs' => 'followable',

        'model' => Zaghadon\Social\Models\Follows::class,

        'need_follows_to_approved' => false,
    ],

    'subscriptions' => [
        'table' => 'subscriptions',

        'morphs' => 'subscriptionable',

        'model' => Zaghadon\Social\Models\Subscription::class,

        'subscriber_foreign_key' => 'user_id',
    ],

];