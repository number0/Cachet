<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => '最終更新 :timestamp',
        'status'       => [
            1 => '稼働中',
            2 => 'パフォーマンスに関する問題あり',
            3 => '一部停止中',
            4 => '大規模な停止中',
        ],
        'group' => [
            'other' => 'その他のコンポーネント',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'インシデントはありません',
        'past'          => 'インシデント履歴',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => '計画メンテナンス',
        'scheduled_at'  => ', 予定日時 :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => '調査中',
            2 => '特定済み',
            3 => '監視中',
            4 => '修正済み',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '全システムが正常に稼動しています',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'APIキーの再生成',
        'revoke'     => 'APIキーの削除',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '過去1時間',
            'hourly'    => '過去12時間',
            'weekly'    => '週',
            'monthly'   => '月',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => '購読',
        'manage'    => [
            'no_subscriptions' => '現在、すべてのアップデートを購読しています。',
            'my_subscriptions' => '現在、以下のアップデートを購読しています。',
        ],
        'email' => [
            'subscribe'          => 'メールによるアップデート情報の購読',
            'subscribed'         => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'           => 'あなたのメール購読を確認しました。ありがとうございます！',
            'manage'             => '購読の管理',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'メールの購読が取り消されました。',
            'failure'            => '購読に失敗しました。',
            'already-subscribed' => '既に購読しているので :email の購読ができません。',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => '購読の確認',
            ],
            'maintenance' => [
                'subject' => '[計画メンテナンス] :name',
            ],
            'incident' => [
                'subject' => '[新規インシデント] :status: :name',
            ],
            'component' => [
                'subject'       => 'Component Status Update',
                'text'          => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html'          => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title' => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html' => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => '新規登録',
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'アカウントが作成されました。',
        'failure'  => '新規登録に失敗しました。',
    ],

    'system' => [
        'update' => 'Cachetの新しいバージョンがあります。アップデートの方法については<a href="https://docs.cachethq.io/docs/updating-cachet">こちら</a>を参照して下さい！',
    ],

    // Modal
    'modal' => [
        'close'     => '閉じる',
        'subscribe' => [
            'title'  => 'コンポーネントのアップデート情報を購読する',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => '購読',
        ],
    ],

    // Other
    'home'            => 'ホーム',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'このサイトについて',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'ステータスフィード',

];
