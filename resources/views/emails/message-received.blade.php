<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mensje recibido</title>
</head>
<body>
	<p>Recibiste  un mensaje de: {{ $msg['name'] }}   -  {{ $msg['email'] }}</p>
	<p>Subject: {{ $msg['subject'] }}</p>
	<p>Contenido: {{ $msg['content'] }}</p>
</body>
</html>