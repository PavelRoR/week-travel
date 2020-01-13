<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\helpers\SessionHelper;
use lk\common\helpers\I18nHelper;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
   

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($partner='',$utm='',$magnet_lead_id='',$magnet_partner_utm='',$magnet_chennel='')
    {
        if($partner!='') {
            SessionHelper::SaveSessionVar('refkey', $partner);
        }
         if($utm!='') {
            SessionHelper::SaveSessionVar('utm', $utm);
        }
        
    
        
        
        $reftoken = 'ghg288';
        $utm = SessionHelper::GetSessionVar('utm');
        $noconnect = SessionHelper::GetSessionVar('noconnect');
         
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  

        
        if($utm!='' && $reftoken!='' && (!isset($noconnect)||$noconnect==0)) {
            if(!Yii::$app->session->get('utm') || !Yii::$app->request->cookies->getValue('pid_utm') || Yii::$app->session->get('utm')!=Yii::$app->request->cookies->getValue('pid_utm'))
                {
                        Yii::$app->session->set('utm', $utm);
                        Yii::$app->response->cookies->add(new \yii\web\Cookie([
                            'name' => 'pid_utm',
                            'value' => $utm,
                        ]));
                       

                        $result = file_get_contents(Yii::$app->params['regsite'].'ajax/utm?refcode='.$reftoken.'&utm='.$utm,false, stream_context_create($arrContextOptions));

                    
                }
            
        } else {
            $utm = '';
            $reftoken = '';
        }
        
        if((!isset($noconnect)||$noconnect==0))
        {
            $usermetrics = json_decode(file_get_contents(Yii::$app->params['regsite'].'ajax/metrics?refcode='.$reftoken.'&homeurl='.Yii::$app->request->serverName,false, stream_context_create($arrContextOptions)),1);
            $this->view->params['usermetrics'] = $usermetrics;
        } else {
            $this->view->params['usermetrics'] = [];
        }
        
        $webinar = json_decode(file_get_contents(Yii::$app->params['regsite'].'ajax/getlastwebinar?type=1',false, stream_context_create($arrContextOptions)),1);
        
        return $this->render('index',['webinar'=> $webinar, 'reftoken'=>$reftoken, 'utm'=>$utm, 'magnet_lead_id'=>$magnet_lead_id, 'magnet_partner_utm'=>$magnet_partner_utm, 'magnet_chennel'=>$magnet_chennel]);
    } 

    
    public function actionSenduser()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
       
        
        if (isset($_POST['token']) && isset($_POST['action'])) {
            $captcha_token = $_POST['token'];
            $captcha_action = $_POST['action'];
        } else {
           return ['status'=>'error','type'=>'capcha'];
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $params = [
            'secret' => Yii::$app->params['capcha_secret'],
            'response' => $captcha_token,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        if(!empty($response)) $decoded_response = json_decode($response);

        $success = false;

        if ($decoded_response && $decoded_response->success && $decoded_response->action == $captcha_action && $decoded_response->score > 0) {
            $success = $decoded_response->success;
            $reftoken = 'ghg288';
            $utm = SessionHelper::GetSessionVar('utm');
        
            $arrContextOptions=array(
                "ssl"=>array(
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                ),
            );  
            $email = Yii::$app->request->post('email');
            $webinar_id = Yii::$app->request->post('webinar_id');
            $magnet_lead_id = Yii::$app->request->post('magnet_lead_id');
            $magnet_chennel = Yii::$app->request->post('magnet_chennel');
            $magnet_partner_utm = Yii::$app->request->post('magnet_partner_utm');
            
        
            $result = json_decode(file_get_contents(Yii::$app->params['regsite'].'/ajax/regwebinar?type=1&email='.$email."&refcode=".$reftoken.'&utm='.$utm.'&webinar_id='.$webinar_id.'&magnet_lead_id='.$magnet_lead_id.'&magnet_chennel='.$magnet_chennel.'&magnet_partner_utm='.$magnet_partner_utm,false, stream_context_create($arrContextOptions)),1);
        
            return $result;
            
        
        } else {
            return ['status'=>'error','type'=>'bot'];
        }

        
        
         
        
        
    }

    public function actionSetuserphone()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;




        if (true) {
            $reftoken = SessionHelper::GetSessionVar('refkey');
            $utm = SessionHelper::GetSessionVar('utm');

            $arrContextOptions=array(
                "ssl"=>array(
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                ),
            );
            $email = Yii::$app->request->post('email');
            $webinar_id = Yii::$app->request->post('webinar');
            $phone = Yii::$app->request->post('phone');
            $url = Yii::$app->params['regsite'].'/ajax/setuserphone?type=1&email='.$email."&phone=".$phone.'&webinar_id='.$webinar_id;
            $result = json_decode(file_get_contents($url,false, stream_context_create($arrContextOptions)),1);

            return $result;


        } else {
            return ['status'=>'error','type'=>'bot'];
        }






    }
    
    public function actionDropcachekey($message, $lang)
    {
        
        Yii::$app->response->format = Response::FORMAT_JSON;
        $key = Yii::$app->translation->createCacheKey(Yii::$app->params['I18N_PROJECT_ID'],$message,$lang);
        if(Yii::$app->translation->getCache()->delete(md5($key)))
        {
            return ['remotedrop'=>'ok'];
        } else {
            return ['remotedrop'=>'false','massage'=>$message,'lang'=>$lang, 'key'=>$key];
        }
        
    }
    public function actionDroplangcache()
    {
        
        if(Yii::$app->translation->getCache()->delete(Yii::$app->params['i18nprojectCode']."_languages"))
        {
            return ['remotedrop'=>'ok'];
        } else {
            return ['remotedrop'=>'false'];
        }
        
    }
    public function actionThankyou()
    {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
        $webinar = json_decode(file_get_contents(Yii::$app->params['regsite'].'ajax/getlastwebinar?type=1',false, stream_context_create($arrContextOptions)),1);
        
        return $this->render('thankyou',['webinar'=>$webinar]);
    }
    
}
