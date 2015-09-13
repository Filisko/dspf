<!DOCTYPE html>
<html lang="<?=APP_LANGUAGE;?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=APP_NAME; ?> - <?=$title;?></title>
    <meta name="author" content="<?=APP_AUTHOR;?>">
    <meta name="description" content="<?php echo APP_DESCRIPTION; ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--<link rel="shortcut icon" href="assets/img/ico.ico">-->
</head>

<body>
<nav>
    <ul class="menu">
    <?php
    foreach ($menu as $item):
    ?>
        <li class="item<?=$item['status'];?>"><a href="<?=$item['link'];?>"><?=$item['name'];?></a></li>
    <?php
    endforeach;
    ?>
    </ul>
</nav>
    
<section id="main">
