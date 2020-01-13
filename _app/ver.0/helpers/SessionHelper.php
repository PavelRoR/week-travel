<?php
/*
 * Помогатор для работы с сессиями
 * 
 * Denis S Sergachev
 */
namespace app\helpers;

use Yii;

class SessionHelper
{
    public static function GetSessionVar($key)
    {
      $session=Yii::$app->session;
      if(!$session->isActive)
      {
          $session->open();
      }
      $value=$session->get($key,false);
      $session->close();
      return $value;
    }
    public static function SaveSessionVar($key,$value)
    {
      $session=Yii::$app->session;
      if(!$session->isActive)
      {
          $session->open();
      }
      $session->set($key, $value);
      $session->close();
    }
    public static function getRegUrl()
    {
        $refkey = self::GetSessionVar('refkey');
        $utm = SessionHelper::GetSessionVar('utm');
        
        if($refkey) {
            if(!$utm) {
                return Yii::$app->params['regsite'].$refkey;
            } else {
                return Yii::$app->params['regsite'].$refkey.'/'.$utm;
            }
        } else {
            return Yii::$app->params['regsite'].'site/register';
        }
    }
    public static function getAuthUrl()
    {
        $refkey = self::GetSessionVar('refkey');
        $utm = SessionHelper::GetSessionVar('utm');
        
        if($refkey) {
             if(!$utm) {
                 return Yii::$app->params['regsite'].'site/login/'.$refkey;
             } else {
                 return Yii::$app->params['regsite'].'site/login/'.$refkey.'/'.$utm;
             }
        } else {
            return Yii::$app->params['regsite'].'site/login';
        }
    }
        
}