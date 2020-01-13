<?php

namespace app\components;

use Yii;
use pjhl\multilanguage\LangHelper;


class Start extends \pjhl\multilanguage\Start
{
    public static $excludedControllers = [
        ['pay']
    ];
    
    public static $excludeRoutes = [
    ];
    
    public static $detectRoutes = [
        '/',
        '',
        'user/default/login',
        'user/login',
        'user/forgot',
        'reg/resend',
    ];

    
    private static function Detect()
    {
        // We are looking for language in the user's cookie
        if (isset($_COOKIE['new-x-language-id'])) {
            $isset = LangHelper::getLanguageByParam('id', $_COOKIE['new-x-language-id']);
            if ($isset !== null) {
                return $isset['id'];
            }
        }
        
     
        // Let's look at the language of the browser
        if (getenv('HTTP_ACCEPT_LANGUAGE')) {
            $arr = explode(';', getenv('HTTP_ACCEPT_LANGUAGE'));
            
            foreach ($arr as $val) {
                $val = preg_replace("/^q=[\d\.]+,?/", '', $val);
                $subval = explode(',',$val);
                if(count($subval)>0) {
                    foreach ($subval as $subelem) {
                        $isset = LangHelper::getLanguageByParam('locale', substr($subelem, 0, 2));
                        if ($isset !== null) {
                             return $isset['id'];
                        }
                    }
                } else {
                    $isset = LangHelper::getLanguageByParam('locale', substr($val, 0, 2));
                    if ($isset !== null) {
                         return $isset['id'];
                    }
                }
            }
        } else {
            $current = self::detectLinkLang();
            Yii::$app->language = $current['locale'];
        }

        // Default language
        $lang_id = LangHelper::getLanguage('id');
        if ($lang_id !== null) {
            return $lang_id;
        }
    }
    
    public static function detectExpectLang() {

        $langExpected = null;
        $lang = null;
        
        $route = \Yii::$app->requestedRoute;

        if(!in_array($route, self::$detectRoutes))
        {
            $current = self::detectLinkLang();
            if ($current && isset($_COOKIE['new-x-language-id'])) {
                Yii::$app->language = $current['locale'];
                return $current;
            }
        }
        

        // Save the language in a config of the yii2
        $lang_id = self::Detect();
        if ($lang_id !== null) {
            $lang = LangHelper::getLanguageByParam('id', $lang_id);
            if ($lang !== null) {
                Yii::$app->language = $lang['locale'];
                return $lang;
            }
        }

        return null;
    }
    /*
    **
     * Returns current link language
     * @return array|null
     */
    public static function detectLinkLang() {
        $languageInurl = Yii::$app->request->languageInurl;
        if ($languageInurl) {
            $current = LangHelper::getLanguageByParam('url', $languageInurl);
        } else {
            $current = LangHelper::getLanguageByParam('default', true);
        }
        return $current;
    }

    /**
     * Creates link for language redirect
     * @param string|false $link
     */
    public static function redirectLink($lang) {
        $link = null;
        if (!$lang) {
            return $link;
        }
        
        // Do not make redirect on test env
        $isTestEnv = defined('YII_ENV') && YII_ENV === 'test';
        $isTestEnv2 = defined('YII_ENV_TEST') && YII_ENV_TEST;
        if ($isTestEnv || $isTestEnv2) {
            return;
        }

        if (Yii::$app->getRequest()->getMethod() === 'GET' && !Yii::$app->getRequest()->isAjax) {
            $isDefault = isset($lang['default']) && $lang['default'];
            $link = \yii\helpers\Url::current([
                        'x-language-url' => $isDefault ? false : $lang['url']
            ]);
        }
        return $link;
    }

    /**
     * Make redirect to correct language url.
     * Ajax and not GET requests will be ignored
     * @param array $lang
     */
    private static function makeRedirectTo($lang) {
        $link = self::redirectLink($lang);

        if ($link !== null) {
            Yii::$app->getResponse()->redirect($link)->send();
            Yii::$app->end();
        }
    }

    public static function run($event = null) {
        $controller = \Yii::$app->controller->id;
        $route = \Yii::$app->requestedRoute;
        if (!in_array($controller, self::$excludedControllers) && !in_array($route, self::$excludeRoutes)) {
            if(!isset($_COOKIE['new-x-language-id']))
                {
                    $lang = \pjhl\multilanguage\Start::detectExpectLang();
                    if($lang!=null)
                    {
                        setcookie('new-x-language-id', $lang['id'], time()+60*60*24*30, '/');
                    } else {

                        $seten = false;
                        if (getenv('HTTP_ACCEPT_LANGUAGE')) {
                            $arr = explode(';', getenv('HTTP_ACCEPT_LANGUAGE'));
                            foreach ($arr as $val) {
                                    $val = preg_replace("/^q=[\d\.]+,?/", '', $val);
                                    $subval = explode(',', $val);
                                    if (is_array($subval) && count($subval) > 0) {
                                        foreach ($subval as $subelem) {
                                            $detect = false;
                                            if (!$detect && in_array($subelem, ['uk', 'kk', 'be', 'ru'])) {
                                                setcookie('new-x-language-id', 1, time() + 60 * 60 * 24 * 30, '/');
                                                $seten = true;
                                                $detect = true;
                                            }
                                        }
                                        if ($detect) {
                                            break;
                                        }
                                    } else {
                                        if (in_array($val, ['uk', 'kk', 'be', 'ru'])) {
                                            setcookie('new-x-language-id', 1, time() + 60 * 60 * 24 * 30, '/');
                                            $seten = true;
                                            break;
                                        }
                                    }
                            }
                            if(!$seten)
                            {
                                setcookie('new-x-language-id', 2, time()+60*60*24*30, '/');
                            }
                        } else {
                                setcookie('new-x-language-id', 2, time() + 60 * 60 * 24 * 31, '/');
                                Yii::$app->language = 'en';
                                Yii::$app->translation->lang = 'EN';
                                return;
                    }


                    }
                }
                
            $langExpected = '';
           
            $langExpected = $langExpected ? $langExpected : self::detectExpectLang();
            $linkLang = self::detectLinkLang();
            if ($langExpected !== null && $langExpected != $linkLang) {
                // Make redirect to correct language url
                self::makeRedirectTo($langExpected);
            }

            Yii::$app->translation->lang = trim(mb_strtoupper(Yii::$app->language));
                
        }
    }
}