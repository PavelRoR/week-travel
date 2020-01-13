<?php

use lk\common\helpers\I18nHelper;
use yii\helpers\ArrayHelper;
use app\helpers\SessionHelper;

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'language'   => 'ru',
    'sourceLanguage' => 'ru',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'class' => 'pjhl\multilanguage\components\AdvancedRequest',
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'cookieValidationKey' => 'o4soaO67zRMLEltPFghds5L7LP5peuhc'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'class' => 'pjhl\multilanguage\components\AdvancedUrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<partner:[a-zA-Z]{3}\d{3}>' => 'site/index',
                '<partner:[a-zA-Z]{3}\d{3}>/<utm:\d{1,10}>' => 'site/index',
            ],
        ],
        'translation' => [
            'class' => \lk\i18n\components\I18n::class,
            'apiMode' => true,
            'cache' => 'translationCache',
            'lang' => 'RU',
            'defaultLang' => 'RU',
         ],
        'translationCache' => [
            'class' => \yii\redis\Cache::class,
            'redis' => [
                'hostname' => '127.0.0.1',
                'port' => 6379,
                'database' => 5,
            ],
            /*'redis' => [
                'hostname' => 'localhost',
                'port' => 6379,
                'database' => 0,
            ],*/
        ],
        
    ],
    'params' => $params,
    'on beforeAction' => [app\components\Start::class, 'run'],
    'on beforeRequest' => function() {
       
        

        /** @var Lang[] $languages */
        
        Yii::$app->params['languages'] = [];
        
        $url = Yii::$app->params['lkApiUrl'].'/v1/lang/find-all';
       
        $arrContextOptions=array(
          "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  

        $response = file_get_contents($url, false, stream_context_create($arrContextOptions));
        $languages = json_decode($response,1);
        
        if (is_array($languages)) {
            Yii::$app->params['languages'] = [];
            foreach ($languages as $language) {
                Yii::$app->params['languages'][] = [
                    'id' => $language['id'],
                    'locale' => trim(mb_strtolower($language['code'])),
                    'name' => trim($language['name']),
                    'url' => trim(mb_strtolower($language['code'])),
                    'default' => (bool) $language['default'],
                ];
            }
        } else {
             Yii::$app->params['languages'][] = [
                    'id' => 1,
                    'locale' => 'ru',
                    'name' => 'Русский',
                    'url' => 'ru',
                    'default' => true,
                ];
        }
        
        try {
            Yii::$app->translation->lang = trim(mb_strtoupper(I18nHelper::getLangById(ArrayHelper::getValue($_COOKIE, 'new-x-language-id', 1))['locale']));
        } catch (Exception $e) {
            Yii::$app->translation->lang = trim(mb_strtoupper(I18nHelper::defaultLang()['locale']));
        }
    },
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
