
<!DOCTYPE html>
<!-- Last Published: Fri Oct 04 2019 12:51:05 GMT+0000 (UTC) -->
<html data-wf-page="5d5cfb4b9052fe1364495af7" data-wf-site="5d5cfb4b9052fe3f5c495af6">
	<head>
		<meta charset="utf-8">
		<title>Week Travel - онлайн-вебинар</title>
		<link rel="stylesheet" type="text/css" href="css/style.css?ver=1570193529">
		<meta content="Онлайн-вебинар о новом способе, который подарил роскошную жизнь тысячам людей по всему миру" name="description">
		<meta content="Week Travel - онлайн-вебинар" property="og:title">
		<meta content="Онлайн-вебинар о новом способе, который подарил роскошную жизнь тысячам людей по всему миру" property="og:description">
		<meta content="http://wt-product-webinar.kpd.expert/images/og-image.jpg" property="og:image">
		<meta content="summary" name="twitter:card">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
		<link href="images/favicon32.png" rel="shortcut icon" type="image/x-icon">
		<link href="images/favicon256.png" rel="apple-touch-icon">
                <script src='https://www.google.com/recaptcha/api.js?render=<?=Yii::$app->params['capcha_client']?>'></script>
                <link rel="stylesheet" type="text/css" href="/css/slick.css?ver=3">
                <link rel="stylesheet" type="text/css" href="/css/custom.css?ver=3">
                <link rel="stylesheet" type="text/css" href="/css/fix.css?ver=3">
                
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
			<header   class="page-header">
				<div class="container">
					<div class="header-wrapper"><a href="#top" class="header-logo w-inline-block"><img src="images/logo.svg" alt="" class="header-logo-img"></a>
						<div class="header-content">
							<div class="header-menu"><a href="#about" class="header-menu-link">О чем вебинар?</a><a href="#founders" class="header-menu-link">Авторы проекта</a><a href="#who" class="header-menu-link">Для кого этот вебинар?</a></div>
							<div class="header-phone-block"><a href="tel:+78007009598" class="header-phone">8 800 700 95 98</a>
								<div class="header-phone-note">Бесплатно по России</div>
							</div>
						</div>
						<div class="header-mobile-menu"></div>
					</div>
				</div>
			</header>
			<main class="page-main">
				<section id="top" class="hero-screen">
					<div class="container">
						<div class="hs-content">
							<div   class="hs-title-block">
								<h1 class="hs-title">Узнайте, как путешествовать всю жизнь без затрат на отели!</h1>
								<div class="hs-subtitle">Онлайн-вебинар от клуба путешественников «Week.Travel»</div>
                                                                <?php if($webinar['status']=='ok'):?>
								<div class="hs-time">Начало: <?=$webinar['date']?> по МСК</div>
                                                                <?php else:?>
                                                                <div class="hs-time">Регистрация на вебинар скоро начнется!</div>
                                                                <?php endif;?>
							</div>
                                                        <?php if($webinar['status']=='ok'):?>
							<div   class="inline-form-block hs w-form">
								<form action='/site/senduser' data-name="Форма на главном экране" version="1" id="registration-form-1" class="inline-form" onsubmit="submitForm(this);return false;">
                                                                        <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                                        				<div class="inline-form-wrap">
										<div class="hs-form-line"></div>
                                                                                <input type="hidden" name="version" value="1">
                                                                                <input type="hidden" name='webinar_id' value="<?=isset($webinar['id'])?$webinar['id']:0?>">
                                                                                <input type="hidden" name='magnet_lead_id' value="<?=$magnet_lead_id?>">
                                                                                <input type="hidden" name='magnet_partner_utm' value="<?=$magnet_partner_utm?>">
                                                                                <input type="hidden" name='magnet_chennel' value="<?=$magnet_chennel?>">
                                                                                <input type="hidden" name="token" id="token-1">
                                                                                <input type="hidden" name="action" id="action-1">
                                                                                <input type="email" class="form-input inline-input w-input" maxlength="256" name="email" data-name="Email" placeholder="Ваш E-mail" id="email-1" required="">
                                                                                <input type="submit" class="btn-primary btn-submit w-button" value="Зарегистрироваться на вебинар" data-wait="Отправка..." >
                                                                        </div>
									<div class="form-note">Отправляя форму, вы соглашаетесь с <a href="/docs/policy.pdf" target="_blank" class="form-note-link white">политикой</a> обработки персональных данных.</div>
								</form>
								<div id="success_email_1" style="display:none" class="success-message w-form-done">
									
								</div>
								<div id="warning_email_1" style="display:none" class="error-message w-form-fail">
									
								</div>
							</div>
                                                        <?php endif;?>
						</div>
						<div class="hs-vector"></div>
				</section>
				<section id="about" class="about-sec">
					<div class="union-block"></div>
					<div class="container">
						<h2 class="sec-title">О чем будет вебинар?</h2>
						<div class="row about">
							<div      class="col-4 about">
								<div class="about-item">
									<h3 class="about-title">О новом способе отдыха, без затрат на отели</h3>
									<div class="about-text">В Америке это называют последней революцией в недвижимости, которая позволила прогрессивным людям путешествовать по всему миру без затрат на отели.
                                        <br><br>Системой «умного отдыха» пользуются во всех развитых странах, кроме России и теперь такая возможность появилась и у вас!</div>
								</div>
							</div>
							<div      class="col-4 about">
								<div class="about-item _2">
									<h3 class="about-title">О путешествиях здесь и сейчас</h3>
									<div class="about-text">Больше не нужно ждать повышения, крутой бизнес-идеи или выигрыша в лотерею — вы получаете реальную возможность путешествовать по всему миру с любым уровнем доходов!</div>
								</div>
							</div>
							<div      class="col-4 about">
								<div class="about-item">
									<h3 class="about-title">О том, как отдыхать на лучших курортах мира</h3>
									<div class="about-text">Вы узнаете, как жить так, как вы всегда мечтали — посещать новые страны, знакомиться с новыми людьми и получать новые впечатления. </div>
								</div>
							</div>
						</div>
					</div>
				</section>
                <section id="speaker" class="speaker-sec">
                    <div class="container">
                        <div class="speaker-row">
                            <div class="speaker-col"><img src="/images/speaker-1.png" alt="" class="speaker-img"><img src="/images/founder-3.png" alt="" class="speaker-mobile-img"></div>
                            <div class="speaker-col _2">
                                <div class="speaker-content">
                                    <h2 class="sec-title-2 dark">Автор проекта и ведущий вебинара</h2>
                                    <div class="founder-content dark">
                                        <h3 class="founder-title speaker">Александр Кудряшов</h3>
                                        <div class="founder-text">Самый востребованный консультант по партнёрским программам в России</div>
                                        <div class="founder-list">
                                            <div class="founder-list-item-2 speaker">Основал онлайн-школу с ежегодным оборотом в 120.000.000 рублей</div>
                                            <div class="founder-list-item-2 speaker">10-летний опыт построения партнёрских сетей</div>
                                            <div class="founder-list-item-2 speaker">Создал партнёрскую сеть численностью более 16.000 человек</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				<section id="who" class="inter who-sec">
					<div class="container">
						<div class="sec-title-wrap">
							<h2 class="sec-title">Для кого этот вебинар?</h2>
							<div class="who-line"></div>
						</div>
						<div class="row who">
							<div      class="col-4 who">
								<div class="who-item">
									<div class="who-icon"></div>
									<h3 class="who-title">Для тех, кому хочется сэкономить на путешествиях</h3>
									<div>Вам больше не нужно целый год копить на отпуск — теперь у вас будет возможность путешествовать по миру с любым уровнем доходов
                                    </div>
								</div>
							</div>
							<div      class="col-4 who">
								<div class="who-item _2">
									<div class="who-icon _2"></div>
									<h3 class="who-title">Для тех, кто мечтает увидеть весь мир</h3>
									<div>Вы будете постоянно путешествовать, без затрат на отели — посетите десятки стран и познакомитесь с сотнями интересных людей. </div>
								</div>
							</div>
							<div      class="col-4 who">
								<div class="who-item _3">
									<div class="who-icon _3"></div>
									<h3 class="who-title">Для тех, кто хочет обеспечить своих детей и внуков</h3>
									<div>Вся ваша семья получит возможность путешествовать по странам и жить в курортной недвижимости клуба «Week.Travel», благодаря Вам.</div>
								</div>
							</div>
						</div>
                      			<div      class="who-form-wrap">
                                                        <?php if($webinar['status']=='ok'):?>
							<div class="inline-form-block w-form">
								<form action='/site/senduser'  version="2" id="registration-form-2" class="inline-form" onsubmit="submitForm(this);return false;">
                                                                        <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                                                                        <div class="inline-form-wrap">
                                                                            <input type="hidden" name="version" value="2">
                                                                            <input type="hidden" name='webinar_id' value="<?=isset($webinar['id'])?$webinar['id']:0?>">
                                                                            <input type="hidden" name='magnet_lead_id' value="<?=$magnet_lead_id?>">
                                                                            <input type="hidden" name='magnet_partner_utm' value="<?=$magnet_partner_utm?>">
                                                                            <input type="hidden" name='magnet_chennel' value="<?=$magnet_chennel?>">
                                                                            <input type="hidden" name="token" id="token-2">
                                                                            <input type="hidden" name="action" id="action-2">
                                                                              
                                                                            <input type="email" class="form-input inline-input grey w-input" maxlength="256" name="email"  placeholder="Ваш E-mail" id="email-2" required="">
                                                                            <input type="submit" value="Зарегистрироваться на вебинар" data-wait="Отправка..." class="btn-primary btn-submit w-button">
                                                                        </div>
									<div class="form-note">Отправляя форму, вы соглашаетесь с <a href="/docs/policy.pdf" target="_blank" class="form-note-link">политикой</a> обработки персональных данных.</div>
								</form>
								<div id="success_email_2" style="display:none" class="success-message w-form-done">
									
								</div>
								<div id="warning_email_2" style="display:none" class="error-message w-form-fail">
									
								</div>
							</div>
                                                        <?php endif;?>
						</div>
					</div>
				</section>
				<section id="appartament" class="inter app">
					<div class="container">
						<h2 class="sec-title mb20">Виртуальная экскурсия по апартаментам, в которых вы можете оказаться уже завтра!</h2>
						<div class="sec-subtitle white">Если сегодня зарегистрируетесь на вебинар</div>
						<div      class="app-slider-wrapper">
							<div class="app-slider">
								<div class="app-slider-item"><img src="images/app-slide-1.jpg" alt="" class="app-slider-image">
									<div class="app-button-wrap"><a href="#" class="btn-3d w-button">Открыть 3D-тур</a></div>
								</div>
								<div class="app-slider-item"><img src="images/app-slide-2.jpg" alt="" class="app-slider-image">
									<div class="app-button-wrap"><a href="#" class="btn-3d w-button">Открыть 3D-тур</a></div>
								</div>
								<div class="app-slider-item"><img src="images/app-slide-3.jpg" alt="" class="app-slider-image">
									<div class="app-button-wrap"><a href="#" class="btn-3d w-button">Открыть 3D-тур</a></div>
								</div>
								<div class="app-slider-item"><img src="images/app-slide-4.jpg" alt="" class="app-slider-image">
									<div class="app-button-wrap"><a href="#" class="btn-3d w-button">Открыть 3D-тур</a></div>
								</div>
								<div class="app-slider-item"><img src="images/app-slide-5.jpg" alt="" class="app-slider-image">
									<div class="app-button-wrap"><a href="#" class="btn-3d w-button">Открыть 3D-тур</a></div>
								</div>
							</div>
							<div class="app-slider-buttons">
								<div class="app-slider-buttons-col">
									<div data-slide="1" class="app-slider-button">
										<div class="app-slider-button-hover"></div><img src="images/app-button-1.jpg" alt="" class="app-slider-button-img"></div>
								</div>
								<div class="app-slider-buttons-col">
									<div data-slide="2" class="app-slider-button">
										<div class="app-slider-button-hover"></div><img src="images/app-button-2.jpg" alt="" class="app-slider-button-img"></div>
								</div>
								<div class="app-slider-buttons-col">
									<div data-slide="3" class="app-slider-button">
										<div class="app-slider-button-hover"></div><img src="images/app-button-3.jpg" alt="" class="app-slider-button-img"></div>
								</div>
								<div class="app-slider-buttons-col">
									<div data-slide="4" class="app-slider-button">
										<div class="app-slider-button-hover"></div><img src="images/app-button-4.jpg" alt="" class="app-slider-button-img"></div>
								</div>
								<div class="app-slider-buttons-col">
									<div data-slide="5" class="app-slider-button">
										<div class="app-slider-button-hover"></div><img src="images/app-button-5.jpg" alt="" class="app-slider-button-img"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
                           	<section id="begins" class="inter begins">
					<div class="container">
						<h2 class="sec-title cta">Регистрируйтесь на вебинар и узнайте, как стать членом клуба «Week.Travel»</h2>
						<div class="sec-subtitle"></div>
                                                <?php if($webinar['status']=='ok'):?>
						<div      class="inline-form-block w-form">
							<form action='/site/senduser' version="3" id="registration-form-3"  onsubmit="submitForm(this);return false;" class="inline-form">
                                                                <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                                        			<div class="inline-form-wrap">
                                                                    <input type="hidden" name="version" value="3">
                                                                    <input type="hidden" name='webinar_id' value="<?=isset($webinar['id'])?$webinar['id']:0?>">
                                                                    <input type="hidden" name='magnet_lead_id' value="<?=$magnet_lead_id?>">
                                                                    <input type="hidden" name='magnet_partner_utm' value="<?=$magnet_partner_utm?>">
                                                                    <input type="hidden" name='magnet_chennel' value="<?=$magnet_chennel?>">
                                                                    <input type="hidden" name="token" id="token-3">
                                                                    <input type="hidden" name="action" id="action-3">
                                                                         
                                                                    <input type="email" class="form-input inline-input w-input" maxlength="256" name="email"  placeholder="Ваш E-mail" id="email-3" required="">
                                                                    <input type="submit" value="Зарегистрироваться на вебинар" data-wait="Отправка..." class="btn-primary btn-submit blue w-button">
                                                                </div>
								<div class="form-note">Отправляя форму, вы соглашаетесь с <a href="/docs/policy.pdf" target="_blank" class="form-note-link">политикой</a> обработки персональных данных.</div>
							</form>
							<div id="success_email_3" style="display:none" class="success-message w-form-done">
									
                                                        </div>
                                                        <div id="warning_email_3" style="display:none" class="error-message w-form-fail">

                                                        </div>
						</div>
                                                <?php endif;?>
					</div>
				</section>
			</main>
			<footer id="footer" class="page-footer">
				<div class="footer-row-1">
					<div class="container">
						<div      class="footer-row">
							<div class="footer-col logo"><a href="#" class="footer-logo-block w-inline-block"><img src="images/logo-footer.svg" alt="" class="footer-logo"></a></div>
							<div class="footer-col menu">
								<div class="footer-menu">
                                                                    <a href="#about" class="footer-link">О чем этот вебинар?</a>
                                                                    <a href="#founders" class="footer-link">Авторы проекта</a>
                                                                    <a href="#who" class="footer-link">Для кого этот вебинар?</a>
                                                                </div>
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
                                                                                        <img src="images/soc-fb.svg" alt="" class="footer-soc-img">
                                                                                    </a>
                                                                                    <a href="https://vk.com/week.travel" target="_blank" class="footer-soc-link w-inline-block">
                                                                                        <img src="images/soc-vk.svg" alt="" class="footer-soc-img">
                                                                                    </a>
                                                                                    <a href="https://www.instagram.com/week.travel/" target="_blank" class="footer-soc-link w-inline-block">
                                                                                        <img src="images/soc-in.svg" alt="" class="footer-soc-img">
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
						<div      class="footer-row center">
							<div class="footer-col">
								<div class="footer-payment">
									<div class="footer-payment-item"><img src="images/pay-1.svg" alt="" class="footer-payment-img"></div>
									<div class="footer-payment-item"><img src="images/pay-2.svg" alt="" class="footer-payment-img"></div>
									<div class="footer-payment-item"><img src="images/pay-3.svg" alt="" class="footer-payment-img"></div>
									<div class="footer-payment-item"><img src="images/pay-4.svg" alt="" class="footer-payment-img"></div>
									<div class="footer-payment-item"><img src="images/pay-5.svg" alt="" class="footer-payment-img"></div>
									<div class="footer-payment-item"><img src="images/pay-6.svg" alt="" class="footer-payment-img"></div>
								</div>
							</div>
							<div class="footer-col copy">
								<div class="footer-copyright">Copyright © <?=date('Y',time())?> Week.Travel. Все права защищены.</div>
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
 <script type='text/javascript'>
    let captcha_action = 'regwebinar';
     
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
                       if(data.type=='wrong') {
                             $('#warning_email_'+version).html('<div><?=I18nHelper::t("Введитие правильный Email")?></div>');
                             $('#warning_email_'+version).show();     
                           }
                        if(data.type=='nowebinar') {
                             $('#warning_email_'+version).html('<div><?=I18nHelper::t("К сожалению, регистрация на данный вебинар прекращена.")?></div>');
                             $('#warning_email_'+version).show();     
                           }
                        if(data.type=='server'||data.type=='savesubscription') {
                             $('#warning_email_'+version).html('<div><?=I18nHelper::t("Сервис регистарции времено недоступен.")?></div>');
                             $('#warning_email_'+version).show();     
                           }  
                        if(data.type=='alreadyreg') {
                             $('#warning_email_'+version).html('<div><?=I18nHelper::t("Вы уже зарегистрировались на данный вебинар. Ждите информационного письма на указанную почту.")?></div>');
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

                       location.href = '/site/thankyou?email='+$('#email-'+version).val()+'&webinar_id=<?=$webinar['id']?>';
                      
                   }
                   
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#warning_email_'+version).html('<?=I18nHelper::t("Ошибка отправки данных. Проверьте ваше подключение к интернету.")?>');
                    $('#warning_email_'+version).show();
                    return false;

                }
            });
            
            return false;
           
        }
</script>        
<!-- Start of Omnidesk Widget script {literal}-->
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


