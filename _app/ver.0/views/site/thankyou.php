<?php
use app\helpers\SessionHelper;
use yii\bootstrap\Html;
use lk\common\helpers\I18nHelper;
?>
<!DOCTYPE html>
<!-- Last Published: Sun Oct 27 2019 09:52:35 GMT+0000 (UTC) --><html>
<head>
    <meta charset="utf-8">
    <title>Week Travel - онлайн-вебинар</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css?ver=1570193529">
    <meta content="Онлайн-вебинар о новом способе, который подарил роскошную жизнь тысячам людей по всему миру" name="description">
    <meta content="Week Travel - онлайн-вебинар" property="og:title">
    <meta content="Онлайн-вебинар о новом способе, который подарил роскошную жизнь тысячам людей по всему миру" property="og:description">
    <meta content="http://wt-product-webinar.kpd.expert/images/og-image.jpg" property="og:image">
    <meta content="summary" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <link href="/images/favicon32.png" rel="shortcut icon" type="image/x-icon">
    <link href="/images/favicon256.png" rel="apple-touch-icon">
    <script src='https://www.google.com/recaptcha/api.js?render=<?=Yii::$app->params['capcha_client']?>'></script>
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/fix.css?ver=1237">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1227078837469283');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1227078837469283&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
<div class="page-wrapper">
    <header class="page-header">
        <div class="container">
            <div class="header-wrapper"><a href="/" class="header-logo w-inline-block"><img src="/images/logo.svg" alt="" class="header-logo-img"></a>
                <div class="header-content">
                    <div class="header-menu"><a href="#" class="header-menu-link">О чем вебинар?</a><a href="#" class="header-menu-link">Авторы проекта</a><a href="#" class="header-menu-link">Для кого этот вебинар?</a></div>
                    <div class="header-phone-block"><a href="tel:+78007009598" class="header-phone">8 800 700 95 98</a>
                        <div class="header-phone-note">Бесплатно по России</div>
                    </div>
                </div>
                <div class="header-mobile-menu"></div>
            </div>
        </div>
    </header>
    <div class="page-main-2">
        <section id="top" class="hero-screen-2 tnk">
            <div class="container">
                <div class="hs-content">
                    <div class="tnk-title-block">
                        <h1 class="tnk-title">Поздравляю!<br>Вы успешно зарегистрировались на вебинар «Как путешествовать по всему миру без затрат на отели».</h1>
                        <div class="tnk-subtitle"><span class="bold">Дата и время вебинара:</span> <?=$webinar['date']?> по МСК<br><span class="bold">Ведущий вебинара:</span> Александр Кудряшов.</div>
                        <div class="tnk-subtitle">На нашей онлайн-презентации мы будем разыгрывать бесплатную неделю отдыха на наших курортах.</div>

                        <div class="inline-form-block hs w-form" style="margin-bottom:40px">
                            <div class="tnk-subtitle mb20">Для участия в розыгрыше укажите свой номер телефона:</div>
                            <form action="/site/setuserphone" data-name="Форма на главном экране" version="1" id="registration-form-1" class="inline-form" onsubmit="submitForm(this);return false;">
                                <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                                <div class="inline-form-wrap">
                                    <input type="hidden" name="version" value="1">
                                    <input type="hidden" name="email" value="<?=Yii::$app->request->get('email')?>">
                                    <input type="hidden" name="webinar" value="<?=Yii::$app->request->get('webinar_id')?>">
                                    <input type="hidden" name="token" id="token-1">
                                    <input type="hidden" name="action" id="action-1" >
                                    <input type="tel"   class="form-input inline-input w-input" maxlength="256" name="phone" data-name="Email" placeholder="Ваш номер телефона" id="phone-1" required="" style="background-image:none">
                                    <input type="submit" class="btn-primary btn-submit w-button" value="Отправить" data-wait="Отправка...">
                                </div>
                                <div class="form-note">Отправляя форму, вы соглашаетесь с <a href="/docs/policy.pdf" target="_blank" class="form-note-link white">политикой</a> обработки персональных данных.</div>
                            </form>
                            <div id="success_email_1" style="display:none" class="success-message w-form-done">

                            </div>
                            <div id="warning_email_1" style="display:none" class="error-message w-form-fail">

                            </div>
                        </div>
                        <div class="tnk-subtitle mb30">Подписывайтесь на наши соц сети, чтобы не пропустить новинки</div>
                        <div class="tnk-soc-block">
                            <a href="https://www.instagram.com/week.travel/" target="_blank"  class="tnk-soc-link w-inline-block"><img src="/images/icon-soc-white-in.svg" alt="" class="tnk-soc-img"></a>
                            <a href="https://vk.com/week.travel" target="_blank"  class="tnk-soc-link w-inline-block"><img src="/images/icon-soc-white-vk.svg" alt="" class="tnk-soc-img"></a>
                            <a href="https://www.facebook.com/Week-Travel-119528209443697/" target="_blank"  class="tnk-soc-link w-inline-block"><img src="/images/icon-soc-white-fb.svg" alt="" class="tnk-soc-img"></a>
                        </div>
                    </div>
                </div>
                <div class="hs-vector-2"></div>
            </div>
        </section>
    </div>
    <footer id="footer" class="page-footer">
        <div class="footer-row-1">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-col logo"><a href="/" class="footer-logo-block w-inline-block"><img src="/images/logo-footer.svg" alt="" class="footer-logo"></a></div>
                    <div class="footer-col menu">
                        <div class="footer-menu"><a href="#" class="footer-link">О чем этот вебинар?</a><a href="#" class="footer-link">Авторы проекта</a><a href="#" class="footer-link">Для кого этот вебинар?</a></div>
                    </div>
                    <div class="footer-col links">
                        <div class="footer-links">
                            <a href="<?=I18nHelper::t('/docs/policy.pdf')?>" target="_blank" class="footer-link"><?=I18nHelper::t('Политика конфиденциальности')?></a>
                            <a href="<?=I18nHelper::t('/docs/agreement.pdf')?>" target="_blank" class="footer-link"><?=I18nHelper::t('Пользовательское соглашение')?></a>
                            <a href="<?=I18nHelper::t('/docs/rules.pdf')?>" target="_blank" class="footer-link"><?=I18nHelper::t('Условия использования сайта')?></a>
                        </div>
                    </div>
                    <div class="footer-col soc">
                        <div class="footer-socials"><a href="tel:+78007009598" class="footer-phone">8 800 700 95 98</a>
                            <div class="footer-soc-wrap">
                                <div class="footer-soc-block">
                                    <a href="https://www.facebook.com/Week-Travel-119528209443697/" target="_blank" class="footer-soc-link w-inline-block">
                                        <img src="/images/soc-fb.svg" alt="" class="footer-soc-img">
                                    </a>
                                    <a href="https://vk.com/week.travel" target="_blank" class="footer-soc-link w-inline-block">
                                        <img src="/images/soc-vk.svg" alt="" class="footer-soc-img">
                                    </a>
                                    <a href="https://www.instagram.com/week.travel/" target="_blank" class="footer-soc-link w-inline-block">
                                        <img src="/images/soc-in.svg" alt="" class="footer-soc-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-row-2">
            <div class="container">
                <div class="footer-row center">
                    <div class="footer-col">
                        <div class="footer-payment">
                            <div class="footer-payment-item"><img src="/images/pay-1.svg" alt="" class="footer-payment-img"></div>
                            <div class="footer-payment-item"><img src="/images/pay-2.svg" alt="" class="footer-payment-img"></div>
                            <div class="footer-payment-item"><img src="/images/pay-3.svg" alt="" class="footer-payment-img"></div>
                            <div class="footer-payment-item"><img src="/images/pay-4.svg" alt="" class="footer-payment-img"></div>
                            <div class="footer-payment-item"><img src="/images/pay-5.svg" alt="" class="footer-payment-img"></div>
                            <div class="footer-payment-item"><img src="/images/pay-6.svg" alt="" class="footer-payment-img"></div>
                        </div>
                    </div>
                    <div class="footer-col copy">
                        <div class="footer-copyright">Copyright © 2019 Week.travel. Все права защищены.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/script.js?ver=1570193512" type="text/javascript"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<!-- FOOTER CODE -->
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<!-- Start of Omnidesk Widget script {literal}-->
<script type='text/javascript'>
    let captcha_action = 'sendphone';

    grecaptcha.ready(function() {
        grecaptcha.execute('<?=Yii::$app->params['capcha_client']?>', {action: captcha_action})
            .then(function(token) {
                if (token) {

                    $("input[name='token']").each(function(index){
                        $( this ).val(token);
                    });
                    $("input[name='action']").each(function(index){
                        $( this ).val(captcha_action);
                    });
                }
            });
    });

    function submitForm(form)
    {
        var action = $(form).attr("action");
        var version = $(form).attr("version");

        var data = new FormData(form);

        $('#success_email_'+version).hide();

        $('#warning_email_'+version).html('<img src="<?=I18nHelper::t('/img/rl.gif')?>">');
        $('#warning_email_'+version).show();

        $.ajax(
            {
                url : action,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                success: function(data, textStatus, jqXHR) {

                    if(data.status!='ok')
                    {
                        if(data.type=='nowebreg') {
                            $('#warning_email_'+version).html('<div><?=I18nHelper::t("Пользователь не найден")?></div>');
                            $('#warning_email_'+version).show();
                        }
                        if(data.type=='wrong') {
                            $('#warning_email_'+version).html('<div><?=I18nHelper::t("Введитие правильный номер телефона")?></div>');
                            $('#warning_email_'+version).show();
                        }
                        if(data.type=='alreadyreg') {
                            $('#warning_email_'+version).html('<div><?=I18nHelper::t("Данный номер телефона уже используется!")?></div>');
                            $('#warning_email_'+version).show();
                        }
                        if(data.type=='capcha') {
                            $('#warning_email_'+version).html('<div><?=I18nHelper::t("Сервис проверки безопасности отключен. Регистарция временно прекращена. Обратитесь в техподдержку.")?></div>');
                            $('#warning_email_'+version).show();
                        }
                        if(data.type=='bot') {
                            $('#warning_email_'+version).html('<div><?=I18nHelper::t("Замечена подозрительная активность. Автоматическая регистрация для вас недоступна.  Попробуйте позже, с другого браузера, или обратитесь в техподдержку.")?></div>');
                            $('#warning_email_'+version).show();
                        }
                    } else {
                        /*yaCounter60772312.reachGoal('WEBINAR '+version);*/
                        $('#warning_email_'+version).hide();
                        $('#success_email_'+version).html('<div><?=I18nHelper::t("Вы успешно зарегистрировались в акции.<br>Мы вышлем вам СМС с напоминанием о вебинаре!")?></div>');
                        $('#success_email_'+version).show();

                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#success_email_'+version).html('<?=I18nHelper::t("Кажется что то пошло не так. Обратитесь в службу поддержки клиентов.")?>');
                    $('#success_email_'+version).show();
                    return false;

                }
            });

        return false;

    }
</script>

<script>
    !function(e,o){!window.omni?window.omni=[]:'';window.omni.push(o);o.g_config={widget_id:"3160-ye51e1n6"}; o.email_widget=o.email_widget||{};var w=o.email_widget;w.readyQueue=[];o.config=function(e){ this.g_config.user=e};w.ready=function(e){this.readyQueue.push(e)};var r=e.getElementsByTagName("script")[0];c=e.createElement("script");c.type="text/javascript",c.async=!0;c.src="https://omnidesk.ru/bundles/acmesite/js/cwidget0.2.min.js";r.parentNode.insertBefore(c,r)}(document,[]);
</script>
<!-- End of Omnidesk Widget script {/literal}-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150945759-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150945759-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(55929439, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55929439" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
