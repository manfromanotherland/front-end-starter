<!DOCTYPE html>
<!--[if IE 8]><html lang="pt-br" class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html lang="pt-br"><!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
<?php if (strpos($class,"page1") !== false): ?>
		Page 1 ‹
<?php elseif (strpos($class,"page2") !== false): ?>
		Page 2 ‹
<?php endif; ?>
		Template
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body class="<?php echo $class; ?>">
