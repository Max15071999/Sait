<!DOCTYPE html >
<html >
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Теоретический лицей имени Дмитрия Кантемира</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="wrapper-bgbtm">
		<div id="header">
			<div id="logo">
				<img src="images/logo.png" alt=""/>
			</div>
		</div>
		<!-- end #header -->
		<div id="menu">
			<ul>
				<li><a href="index.php">Главная</a></li>
				<li><a href="psih.php">Страница Психолога</a></li>
				<li><a href="photo.php">Галерея</a></li>
				<li><a href="o_nas.php">О нас</a></li>
				<li class="current_page_item"><a href="question.php">Задать вопрос</a></li>
				<li><a href="contact.php">Контакты</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">
						<div class="post">
							<h2 class="title">Свяжитесь с нами</h2>
							<div style="width: 700px; margin-top:24px; padding-left:32px;"><p>Если вы хотите получить больше информации, заполните эту форму. Мы свяжемся с вами в ближайшее время.
								Пожалуйста, заполните все <b>обязательные поля.</b></p></div>
								<form method="POST" > 
                                <div style="padding-left:32px;">
                                <div style="font-size:15px;">Фамилия Имя<span style="color:red;">*</span><div style="padding-left: 200px;margin-top:-17px;"><input type="text" name="name" style="width: 250px;"><br><br></div></div>
                                <div style="font-size:15px;">Email<span style="color:red;">*</span><div style="padding-left: 200px;margin-top:-17px;"><input type="text" name="email"          style="width: 250px;"><br><br></div></div>
                                <div style="font-size:15px;">Телефон<span style="color:red;">*</span><div style="padding-left: 200px;margin-top:-17px;"><input type="text" name="tel" style="width: 250px;"><br><br></div></div> 
                                <div style="font-size:15px;">Ваш вопрос<span style="color:red;">*</span><div style="padding-left: 200px;margin-top:-17px;"><textarea name="area" style="width: 250px; height: 150px;"></textarea><br><br> </div></div>
                                <input type="checkbox" value="1" name="cb"><span style="color:red;">*</span>Я согласен с вашими правилами и условиями<br><br> Отправляя эту форму, вы принимаете нашу политику конфиденциальности.<br> <br>
                                <input value="Отправить" type="submit" name="btn"></div> 
                                </form> 
                                <?php require 'quest.php';
                                ?>
						</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<div id="search"  style="height: 133px;">
							<h2>Панель администатора</h2>
							<a href="adminka.php"><button style="height: 50px; width: 150px; margin-left: 30px;"> Вход в панель администатора</button> </a>
						</div>
						<ul>
							<li>
								<h2>График работы</h2>
								<p>
									<img src="images/cal.png" alt="">
									<div style="margin-top: -54px; margin-left:55px; font-size: 15px;">ПН-ПТ: 7.00 - 20.00<br/>
						            СБ-ВС: выходной<br /></div>
						        </p>
							</li>
							<li>
								<h2>Интересное</h2>
								<ul>
									<li><a href="psih1.php">Советы психолога родителям первоклассников</a></li>
									<li><a href="psih2.php">Рекомендации «Как помочь ребёнку учиться»</a></li>
									<li><a href="psih3.php">10 заповедей для родителей</a></li>
									<li><a href="psih4.php">Памятка родителям</a></li>
									<li><a href="psih5.php">Информация для родителей 5-х классов</a></li>
								</ul>
							</li>	
							
						</ul>
					</div>
					<!-- end #sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
		</div>
		<!-- end #page -->

		<div id="footer">
		<!-- shell -->
		<div class="shell">
			<div class="widgets">			
					
				<div class="widget contact-widget">
					<h4>Контакты</h4>
					<p class="address-ico">
						Теоретический лицей имени Д. Кантемира<br/>
						3909 Кагул, <br />
						ул.Ион Лука Караджиале, 33
					</p>

					<p class="phone-ico">
						Тел: +373 299 23 865<br />
					</p>					
				</div>
			</div>
			<!-- end of widgets -->

			<!-- footer-bottom -->			
				<p class="copy">&copy; Теоретический лицей имени Дмитрия Кантемира</p>
			<!-- end of footer-bottom -->
		</div>
		<!-- end of shell -->
	</div>
	<!-- end of footer -->
	</div>
</div>
</body>
</html>
