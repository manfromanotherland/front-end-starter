<!DOCTYPE html>
<!--[if IE 8]><html lang="pt-br" class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html lang="pt-br"><!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php $page = basename($_SERVER['PHP_SELF'], ".php"); ?>

	<title>
<?php if ($page == "page1"): ?>
		Page 1 ‹
<?php elseif ($page == "page2"): ?>
		Page 2 ‹
<?php endif; ?>
		Title
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body class="<?php echo "is-$page"; ?>">
