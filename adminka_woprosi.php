<!DOCTYPE html >
<html >
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Теоретический лицей имени Дмитрия Кантемира</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style type="text/css">
    img{margin-right:20px;}
    .text{ font-size: 16px; 
    font-family: 'Roboto Condensed', sans-serif;}    
}
</style>
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
        
        <!-- end #menu -->
        <div id="page">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <div id="content">
                        <div class="post">
                            <h2 class="title">Заданные вопросы</h2><br>
                            <?php require 'zap.php';
                                ?>
                        </div>
                    </div>
                    <!-- end #content -->
                    <div id="sidebar">
                        <div id="search"  style="height: 133px; margin-top: 90px;">
                            <h2>Панель администатора</h2>
                            <a href="index.php"><button style="height: 50px; width: 150px; margin-left: 30px;"> Выход из панели администатора</button> </a>
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
