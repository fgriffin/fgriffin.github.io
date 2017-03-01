<?php 
	//Принимаем постовые данные
	$whatever=$_POST['whatever'];
	$userName=$_POST['user_name'];
	$userEmail=$_POST['user_email'];
	$userMessage=$_POST['user_message'];

	//Тут указываем на какой ящик посылать письмо
	$to = "79991570874@yandex.ru";

	//Далее идет тема письма и само сообщение
	// Тема письма
	$subject = "Заявка с моего первого сайта";

	// Сообщение письма
	$message = "Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
				Имя пользователя: ".htmlspecialchars($user_name)."<br />
				Email: ".htmlspecialchars($user_email)."<br />
				Сообщение: ".htmlspecialchars($user_message)."<br />";

	// Отправляем письмо при помощи функции mail();
	$headers = "From: homework.sl <mail@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);

	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
 ?>