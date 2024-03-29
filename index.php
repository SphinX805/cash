<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["auth"];

if($status == true){header('Location: /account/index.php');}

?>
<!doctype html>
<html class=" js no-touch" style=""><!--<![endif]--><head>
        <meta charset="utf-8">

         	    <title>Haslacash.ru - приём платежей и моментальная оплата онлайн услуг</title>

        
        
        <meta property="og:type" content="website">
		<meta property="og:url" content="https://Haslacash.ru/">
		<meta property="og:title" content="Платёжный агрегатор Haslacash.ru">
		<meta property="og:description" content="Приём платежей для сайтов.">
		<meta property="og:image" content="https://mycrypter.com/wp-content/uploads/2018/09/sbi-sozdayet-platezhnyy-platfor-mobilnogo.jpg">
		<meta property="twitter:title" content="Платёжный агрегатор Haslacash.ru">
		<meta property="twitter:description" content="Приём платежей для сайтов.">
		<meta property="twitter:url" content="https://xpayz.ru/">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:image" content="https://mycrypter.com/wp-content/uploads/2018/09/sbi-sozdayet-platezhnyy-platfor-mobilnogo.jpg">
         
           
        <meta name="description" content="Моментальная оплата онлайн услуг: игры, игровая валюта, доступ к сайтам, Коммунальные платежи, пополнение баланса, Интернет магазины, прием платежей">
        <meta name="author" content="Haslacash.ru">
        <meta name="KeyWords" content="Haslacash.ru, средств, платежей, платёжной, Комиссия, системы, Кошельков, организации, Интернет, работа, клиентов, подключения, Подключиться, Экономия, банковских, интеграция">
		<meta name="referrer" content="no-referrer">
        
        
		
		
   
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <link rel="shortcut icon" href="https://www.nextpay.ru/frontendfiles/img/favicon.ico">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://www.nextpay.ru/frontendfiles/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.nextpay.ru/frontendfiles/css/plugins.css">
		<link rel="stylesheet" href="https://www.nextpay.ru/frontendfiles/css/main.css?v=1">
		<link rel="stylesheet" href="https://www.nextpay.ru/frontendfiles/css/themes.css">
        <!-- END Stylesheets -->
        <script src="https://www.nextpay.ru/frontendfiles/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    <body>
<!-- Page Container -->

<div id="page-container">
    <!-- Site Header -->
    <header class="header-scroll">
        <div class="container">
            <!-- Site Logo -->
            <a href="/" class="site-logo">
                <i class="gi   logoluna"></i> <span class="colornext">DogeCash</span><span class="colorpay">.ru</span>
            </a>
            <!-- Site Logo -->

            <!-- Site Navigation -->
            <nav>
                <!-- Menu Toggle -->
                <!-- Toggles menu on small screens -->
            
                <!-- END Menu Toggle -->

                <!-- Main Menu -->
                                <ul class="site-nav">
                    <!-- Toggles menu on small screens -->
                    <li class="visible-xs visible-sm">
                        <a href="javascript:void(0)" class="site-menu-toggle text-center">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    <!-- END Menu Toggle -->
					
					                   
					
                         
					
                     
					
                    					
				
                </ul>
                				
                <!-- END Main Menu -->
            </nav>
            <!-- END Site Navigation -->
        </div>
    </header>
    <!-- END Site Header -->



<!-- Intro -->

<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('https://thematridox.com/wp-content/uploads/2017/06/f3df92c17f5c1cc3209e60bc3831f3df.jpg');">
    <div class="container">

       <h1 class="text-center animation-slideDown"><strong>Платёжная платформа Haslacash.ru</strong></h1>
     
    
		        <!-- Quick Stats -->

    <div class="row">
        <!-- Stats Row -->
		<center><big></big></center>
        <h4 class="text-center">Наши клиенты:</h4>
        <div class="row" id="counters">
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="10" data-after="К+">10К+</span>
                    <small>Успешные предприниматели</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="100" data-after="К+">100К+</span>
                    <small>Владельцы электронных денег</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="5" data-after="К+">5К+</span>
                    <small>Финансисты</small>
                </div>
                </div>
            </div>
    </div>
        <!-- END Stats Row -->

<!-- END Quick Stats -->
		
<div class="auth">
  <form method="POST" action="auth.php">
    <input type="text" name="mail" id="login" placeholder="Email" required="" >
    <input type="password" name="pass" id="code" placeholder="Пароль" required="" ><p style="display: inline-block;"><font color = "red"><?php echo @$_SESSION["authERROR"]; ?></font></p>
    <input type="submit" name="submit" value="Войти" class="submit-btn">
  </form>
</div>
	  <style>
	  	.auth form {
    color: #000;
	width: 60%;
	margin-left: 20%;
}

.auth input {
	border-radius: 6px;
	padding: 10px;
	border: none;
}

.auth input + input {
	margin-left: 10%;
}

.submit-btn {
	float: right;
	color: #000;
}

@media screen and (max-width: 768px) {
	.auth input {
		width: 100%;
		margin: 5px 0;
	}

	.auth input + input {
		margin-left: 0;
	}

	.auth form {
		width: 80%;
		margin-left: 10%;
	}
}
	  </style>
	  
	  
	  
					<br>
        </div>
		
		<hr class="intro-divider">
												<center><button type="button" onclick="location.href='./reg.php'" class="btn btn btn-primary btn-lg"><i class="fa fa-plus"></i> Подключиться</button></center>
                  
	</div>
	
</section>

<!-- END Intro -->

<!-- Key Features -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 site-block">
                <h3 class="site-heading"><i class="fa fa-arrow-right animation-floatingHor"></i> <strong>Преимущества</strong> подключения</h3>
                <div class="remove-margin">
					<ul class="fa-ul">
						<li><i class="gi gi-stats fa-li"></i><strong>Увеличение оборота</strong> за счет привлечения платежеспособного сегмента клиентов – держателей банковских карт, электронных денег.</li>
						<li><i class="gi gi-globe_af fa-li"></i><strong>Прием платежей</strong> по всему миру - создайте удобство и комфорт для ваших клиентов.</li>
						<li><i class="fa fa-medkit fa-li"></i><strong>Индивидуальный подход</strong> к каждому клиенту. Опишите вашу задачу и мы постараемся её решить.</li>
					</ul>
				</div>
            </div>
            <div class="col-sm-4 site-block">
                <h3 class="site-heading"><i class="fa fa-arrow-right animation-floatingHor"></i> <strong>Удобство</strong> работы</h3>
                <div class="remove-margin">
				<ul class="fa-ul">
    <li><i class="fa fa-check fa-li"></i><strong>Легкая интеграция</strong>, готовые скрипты.</li>
    <li><i class="hi hi-phone fa-li"></i><strong>Доступ в статистику</strong> с любых устройств для отслеживания продаж в режиме on-line.</li>
    <li><i class="fa fa-code fa-li"></i><strong>Полная интеграция</strong> в дизайн вашего сайта без перехода на сайт Haslacash.ru.</li>
    <li><i class="gi gi-money fa-li"></i><strong>Ежедневные</strong> выплаты.</li>
	<li><i class="fa fa-pencil fa-li"></i><strong>Один договор</strong>, один акт ежемесячно.</li>
	</ul>
			</div>
            </div>
            <div class="col-sm-4 site-block">
                <h3 class="site-heading"><i class="fa fa-check text-success animation-pulse"></i> <strong>Экономия</strong> средств</h3>
                <div class="remove-margin">
				<ul class="fa-ul">
				<li><i class="gi gi-money fa-li"></i><strong>Низкие</strong> <strong>тарифные ставки</strong>, никаких скрытых платежей и комиссий.</li>
				<li><i class="gi gi-coins fa-li"></i><strong>Сокращение расходов</strong> на инкассацию наличных денежных средств.</li>
				<li><i class="hi hi-thumbs-up fa-li"></i><strong>Бесплатное подключение</strong>, без абонентской платы.</li>
				<li><i class="gi gi-clock fa-li"></i><strong>Экономия времени и средств</strong> на подключение каждой платёжной системы отдельно.</li>
				</ul>
				</div>
            </div>
        </div>
        <hr>
    </div>
	
</section>
<!-- END Key Features -->
<!-- Features -->
<section class="site-content site-section">
    <div class="container text-center">
        <div class="row row-items">
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background-fire animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="fa fa-building-o"></i>
                </a>
                <h4 class="site-heading"><strong>Предприятиям ЖКХ</strong></h4>
                <p class="text-left remove-margin">Готовое решение для <b>приёма платежей</b> за коммунальные услуги. Возможна работа без заключения договора и без наличия сайта организации. Специальная платёжная витрина с возможностью создания произвольных форм оплаты, в том числе с возможностью передачи показаний счётчиков. Выгодный тариф с возможностью оплаты всех комиссий плательщиком.</p>
            </div>
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-shopping_cart"></i>
                </a>
                <h4 class="site-heading"><strong>Интернет Магазинам</strong></h4>
                <p class="text-left remove-margin">Готовые решения интеграции платёжной формы в популярные CMS интернет магазинов. Возможность возврата средств без комиссии. Возможность работы в соответствии с 54-ФЗ без установки кассы.</p>
            </div>
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background-flatie animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-global"></i>
                </a>
                <h4 class="site-heading"><strong>Интернет провайдерам</strong></h4>
                <p class="text-left remove-margin">Готовые модули подключения <b>приёма платежей</b> для популярных биллинговых платформ "LANBilling" и "UTM 5". Возможность автоматического выставления счёта на пополнение баланса. Так же предлагаем воспользоваться услугой по приему платежей в пользу вашей организации при помощи <strong>банковского платежного терминала</strong>, установленного на вашей территории.</p>
            </div>
        </div>
        <div class="row row-items">
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background-amethyst animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-gamepad"></i>
                </a>
                <h4 class="site-heading"><strong>Онлайн играм</strong></h4>
                <p class="text-left remove-margin">Готовая форма для покупки игровой валюты. Форма оплаты, оптимизированная для импульсных покупок.</p>
            </div>
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background-spring animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-briefcase"></i>
                </a>
                <h4 class="site-heading"><strong>Бюджетным учреждениям</strong></h4>
                <p class="text-left remove-margin">Банки-партнеры Haslacash.ru подключены к системе Государственных и муниципальных платежей (ГИС ГМП) посредством системы электронного межведомственного взаимодействия (СМЭВ), т.е. информация о поступающих платежах в пользу бюджетной организации будет автоматически направляться в Департамент Финансов, что исключает потерю денежных средств или неправильное их зачисление бюджетом.</p>
            </div>
            <div class="col-sm-4">
                <a href="javascript:void(0)" class="circle themed-background-autumn animation-fadeIn360" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-group"></i>
                </a>
                <h4 class="site-heading"><strong>Физическим лицам</strong></h4>
                <p class="text-left remove-margin">Работаем как с юридическими лицами, так и с физическими. Работа в полном соответствии с требованиями ЦБ РФ и ФЗ №161 “О национальной платежной системе”. Работа с физическими лицами основывается на договоре на осуществление переводов денежных средств с использованием электронного средства платежа. Удобные способы вывода средств.</p>
            </div>
        </div>
        <hr>
    </div>
	
</section>
<!-- END Features -->





<!-- Quick Stats -->
<section class="site-content site-section themed-background">
    <div class="container">
        <!-- Stats Row -->
        
        <div class="row" id="counters">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="5000" data-after="+">5000+</span>
                    <small>Партнеров Haslacash.ru уже увеличивают оборот своих сайтов!</small>
                </div>
            </div>
            <div class="col-sm-4">
                
                </div>
            </div>
        </div>
        <!-- END Stats Row -->
</section>
<!-- END Quick Stats -->



<!-- Footer -->
    <footer class="site-footer site-section">
        <div class="container">
            <!-- Footer Links -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">О нас</h4>
                    <ul class="footer-nav list-inline">
						<li><a href="/about/this.php">Новости</a></li>
                        <li><a href="/about/this.php">Контакты</a></li>
     
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">Информация</h4>
                    <ul class="footer-nav list-inline">
                        <li><a href="/about/this.php">Соглашение</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading">Сети</h4>
                    <ul class="footer-nav footer-nav-social list-inline">
					<li><a href="https://twitter.com/XpayZ" target="_blank"><i class="fa fa-twitter"></i></a></li>
                       
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-heading"><span id="year-copy">© 2007-2019,</span> © <a href="/">Haslacash.ru</a></h4>
                    <!--ul class="footer-nav list-inline">
                        <li>Проект <a href="http://www.ra-m.ru" target="_blank">RA Media Group</a></li>
                    </ul-->
                </div>
            </div>
            <!-- END Footer Links -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<a href="#" id="to-top" style="display: block;"><i class="fa fa-angle-up"></i></a>

<script>!window.jQuery && document.write(decodeURI('%3Cscript src="https://www.nextpay.ru/frontendfiles/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script><script src="https://www.nextpay.ru/frontendfiles/js/vendor/jquery-1.11.1.min.js"></script>


<script src="https://www.nextpay.ru/frontendfiles/js/vendor/bootstrap.min.js"></script>
<script src="https://www.nextpay.ru/frontendfiles/js/plugins.js"></script>
<script src="https://www.nextpay.ru/frontendfiles/js/app.js?v=1"></script>
<!-- <a style="background-color: #6D43FF; padding: 5px; border-radius: 12px; font-weight: bold; color: #fff;" href="./mail.php?code='.$codemail.'">Подтвердить почту</a> -->
 
   
</body></html>