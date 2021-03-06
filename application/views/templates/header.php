<!DOCTYPE html>
<html lang="<?=$config['app']['language'] ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title><?=config('app')['name'] ?> - <?=$title;?></title>
    <meta name="author" content="<?=config('app')['author'] ?>">
    <meta name="description" content="<?=config('app')['description'] ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=URL?>assets/css/theme.css">
    <link rel="shortcut icon" href="<?=URL?>assets/img/icon.png">
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