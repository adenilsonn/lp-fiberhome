<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDC - Fiberhome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="top">
            <img src="<?php bloginfo('template_url'); ?>/img/wdc.png" width="207" alt="WDC Networks">
            <p>Conecte-se ao essencial</p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-space-around">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">INSTITUCIONAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VISÃO DO SETOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRODUTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTATO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">As a Service</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="banner" style="background: url('<?php bloginfo('template_url'); ?>/img/bg-slider.jpg') center center / cover no-repeat;">
            <div class="logo">
                <div class="bg"></div>
                <div class="triangle"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/fiberhome.png" width="227" alt="Fiberhome">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-4 align-center">
                        <div class="text">
                            <h2> <strong> maximizando</strong><br>o valor das<br> conexões<br>    <strong>digitais</strong></h2>
                            <p>Confiabilidade, tecnologia e inovação contínua. Sempre junto aos provedores de internet do Brasil.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-center">
                        <div class="text">
                        <div role="main" id="formulario-lp-fiberhome-32ff90fa7bef39066f83"></div>
                        <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
                        <script type="text/javascript"> new RDStationForms('formulario-lp-fiberhome-32ff90fa7bef39066f83', 'UA-32191804-1').createForm();</script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="lap" src="<?php bloginfo('template_url'); ?>/img/laptop.png" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>A WDC NETWORKS É DISTRIBUIDOR AUTORIZADO FIBERHOME NO BRASIL. POSSUI EQUIPE CAPACITADA PARA ATENDIMENTO A REVENDAS, DISTRIBUIDORES REGIONAIS, INTEGRADORES E PROVEDORES DE INTERNET, ALÉM DE POSSUIR SUPORTE TÉCNICO DE PROJETOS. </p>
                        <p>A FiberHome Technologies foi fundada em 1974. Um fabricante de produtos FTTH, soluções de DWDM e toda linha cabos de fibra ótica, atualmente é a  maior empresa de tecnologia diretamente filiada ao Governo da China. </p>
                        <p> Localizada em Wuhan – Optic Valley of China, foi a primeira empresa
                         a desenvolver tecnologia de Fibra Ótica na Ásia e é até hoje uma das
 maiores detentoras de patentes nessa área, caracterizando-se por uma
 empresa inovadora que assume a missão de "maximizar o valor da
 conexão digital e beneficiar a sociedade humana".</p>
                        <a href="#" class="btn">Veja o Vídeo <img src="<?php bloginfo('template_url'); ?>/img/bt-play.png" width="93" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="vision" style="background: url(<?php bloginfo('template_url'); ?>/img/bg-visao.jpg) right center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 align-center">
                        <div>
                            <h2 class="title">
                                visão <span> do setor</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 man">
                        <img src="<?php bloginfo('template_url'); ?>/img/man-vision.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <?php wp_footer(); ?>
</body>

</html>