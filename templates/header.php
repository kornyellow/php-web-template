<?php

namespace templates;

use libraries\korn\client\KornHeader;

?>

<!DOCTYPE html>
<html class="h-100" lang="th">

<head>
	<!-- Metas -->
	<meta charset="utf-8">

	<title><?php echo KornHeader::getTitle() ?></title>

	<meta name="title" content="<?php echo KornHeader::getTitle() ?>">
	<meta name="author" content="<?php echo KornHeader::getAuthor() ?>">
	<meta name="owner" content="kornkubzaza@gmail.com">

	<meta name="keywords" content="<?php echo KornHeader::getKeywords() ?>">
	<meta name="abstract" content="<?php echo KornHeader::getAbstract() ?>">
	<meta name="description" content="<?php echo KornHeader::getDescription() ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer async></script>

	<!-- CSS -->
	<link href="/static/css/root.css" rel="stylesheet">

	<!-- Script -->
	<script src="/static/js/script.js" defer async></script>
</head>

<body class="d-flex h-100 text-center">

<!-- Main -->
<div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
	<header class="mb-auto"></header>
