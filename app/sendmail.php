<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
//print_r($_POST);
if ( isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['message']) && isset($_POST['mail']) ) {

	//$to = "mister.slaus@gmail.com";	// receiver of the email
        $to = "niknake@mail.ru";
        $subject = '--- Сообщение о желании купить ноутбук от пользователя ' . $_POST['name'] . ', телефон: ' . $_POST['tel'] . ' ---';			// subject of the email
	$message = '
	<html>
		<head>
    			<meta charset="utf-8">
			<title>Сообщение о желании купить ноутбук от пользователя ' . $_POST['name'] . ' с телефоном ' . $_POST['tel'] . ' </title>
		</head>
		<body>
			<h3>Имя: <span style="font-weight: normal;">' . $_POST['name'] . '</span></h3>
			<h3>Телефон: <span style="font-weight: normal;">' . $_POST['tel'] . '</span></h3>
			<h3>E-mail: <span style="font-weight: normal;">' . $_POST['mail'] . '</span></h3>
			<div>
				<h3 style="margin-bottom: 5px;">Сообщение:</h3>
				<div>' . $_POST['message'] . '</div>
			</div>
		</body>
	</html>';

	$headers  = "Content-type: text/html; charset=utf-8 \r\n";

	// E-mail sending function
	if (mail($to, $subject, $message, $headers)) {
	   echo '<html>
		    <head>
    	        <meta http-equiv="Refresh" content="5; URL=http://landing.n-book.in.ua/" />
    	    </head>
		    <body>
	            <div align="center" style="margin-top:30%;"><h4>Спасибо, Ваше письмо было отправлено.</h4><h3>Наш менеджер свяжется с Вами в ближайшее время.</h3><h5>Через 5 секунд Вы будете перенаправлены на сайт.<h5></div>
	        </body>
	    </html>';
	} else {
	   echo '<html>
		    <head>
    	        <meta http-equiv="Refresh" content="5; URL=http://landing.n-book.in.ua/" />
    	    </head>
		    <body>
	            <div align="center" style="margin-top:30%;"><h4>Произошла ошибка при отправки сообщения.</h4><h5>Через 5 секунд Вы будете перенаправлены на сайт</h5></div>
	        </body>
	    </html>';
	}

}
?>