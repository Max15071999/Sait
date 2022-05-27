<?php 
session_start(); 
if(!empty($_POST['paswd'])){ 
$pass = "admin"; 
$log = "admin"; 
if($_POST['paswd']==$pass && $_POST['login']==$log){ 
$_SESSION['access']=true; 
header("Location:adminka_woprosi.php") ;//Тут ссылка при правильном пароле 
} 
else { 
header("Location: index.php") ;//Тут ссылка при неправильном пароле 
} 
} 
else 
{ 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

<meta charset="UTF-8"> 
<title>Панель администрации</title> 
<!— Latest compiled and minified CSS —> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
<!— Optional theme —> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
<!— Latest compiled and minified JavaScript —> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
<script> 
$( document ).ready(function() { 
$('#s-h-pass').click(function(){ 
var type = $('#password').attr('type') == "text" ? "password" : 'text', 
c = $(this).html() == "<span class=\"glyphicon glyphicon-eye-close\" title=\"Скрыть пароль\"></span>" ? "<span class=\"glyphicon glyphicon-eye-open\" title=\"Показать пароль\"></span>" : "<span class=\"glyphicon glyphicon-eye-close\" title=\"Скрыть пароль\"></span>"; 
$(this).html(c); 
$('#password').prop('type', type); 
}); 
}); 
</script> 
<meta http-equiv="Content-Language" content="en-us; charset=windows-1251" /> 
<meta http-equiv="Content-Type" content="text/html" /> 
<title>...</title> 




</head> 

<div class="container"> 
<h1>Авторизация</h1> 
<form class="my-form" action="" method="POST"> 
<div class="form-group"> 
<label for="email">Введите логин</label> 
<input id="email" name="login" type="text" placeholder="Логин" class="form-control" /> 
</div> 
<div class="form-group"> 
<label for="password">Введите пароль:</label> 

<div class="input-group"> 
<input id="password" name="paswd" type="password" placeholder="Пароль" class="form-control" /> 
<div class="input-group-addon" id="s-h-pass"><span class="glyphicon glyphicon-eye-open" title="Показать пароль"></span></div> 
</div> 
</div> 

<div class="form-group"> 
<input id="enter" type="submit" value="Вход" class="btn btn-success pull-right" /> 

</div> 
</form> 
</div> 
<?php 
} 
?>
