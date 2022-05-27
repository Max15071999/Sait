<?php 
                              error_reporting(0);
                               ini_set(‘display_errors’, 0);
                                if(isset($_POST['cb'])==''){ 
                                echo "<br>Примите наши условия конфиденциальности"; 
                                }else{ 
                                if(isset($_POST['btn'])){
                                $name=$_POST['name']; 
                                $email=$_POST['email']; 
                                $tel=$_POST['tel']; 
                                $area=$_POST['area']; 
                                if($name!='' || $email!='' || $tel!='' || $area!=''){
                                $link=mysqli_connect('localhost','root','','school1');
                                $link->set_charset("utf8");
                                $query_site="INSERT INTO woprosi1 (name,email,phone,question) VALUES('$name','$email','$tel','$area')"; 
                                mysqli_query($link,$query_site); 
                                mysqli_close($link); 
                                echo "<br>Отправленно!"; 
                                }else echo "<br>Заполните все поля";}}
                                ?>