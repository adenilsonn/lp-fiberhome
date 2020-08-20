<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDC - Fiberhome</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="top">
            <img src="<?php bloginfo('template_url'); ?>/img/wdc.png" width="207" alt="WDC Networks">
            <p>Conecte-se ao essencial</p>
        </div>
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="hide-on-med-and-down navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#institucional">INSTITUCIONAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#visao-do-setor">VISÃO DO SETOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#solucoes">SOLUÇÕES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#servicos">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#as-a-service">As a Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-to-link" href="#contato">CONTATO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#institucional">INSTITUCIONAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#visao-do-setor">VISÃO DO SETOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#solucoes">SOLUÇÕES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#servicos">SERVIÇOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#as-a-service">As a Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll-to-link" href="#contato">CONTATO</a>
            </li>
        </ul>
    </header>