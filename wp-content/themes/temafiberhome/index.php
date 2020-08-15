<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDC - Fiberhome</title>
    <?php /*<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/ ?>
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

        <ul class="sidenav" id="mobile-demo">
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
    </header>
    <main>
        <section class="banner parallax-container">
            <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/img/bg-slider.jpg" alt=""></div>
            <div class="logo">
                <div class="bg"></div>
                <div class="triangle"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/fiberhome.png" width="227" alt="Fiberhome">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col xl3">
                    </div>
                    <div class="col xl4">
                        <div class="text">
                            <h2> <strong> maximizando</strong><br>o valor das<br> conexões<br> <strong>digitais</strong>
                            </h2>
                            <p>Confiabilidade, tecnologia e inovação contínua. Sempre junto aos provedores de internet
                                do Brasil.</p>
                        </div>
                    </div>
                    <div class="col xl5">
                        <div class="text">
                            <div role="main" id="formulario-lp-fiberhome-32ff90fa7bef39066f83"></div>
                            <script type="text/javascript"
                                src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js">
                            </script>
                            <script type="text/javascript">
                                new RDStationForms('formulario-lp-fiberhome-32ff90fa7bef39066f83', 'UA-32191804-1')
                                    .createForm();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col xl5">
                        <img class="lap" src="<?php bloginfo('template_url'); ?>/img/laptop.png" alt="">
                    </div>
                    <div class="col xl7">
                        <p>A WDC NETWORKS É DISTRIBUIDOR AUTORIZADO FIBERHOME NO BRASIL. POSSUI EQUIPE CAPACITADA PARA
                            ATENDIMENTO A REVENDAS, DISTRIBUIDORES REGIONAIS, INTEGRADORES E PROVEDORES DE INTERNET,
                            ALÉM DE POSSUIR SUPORTE TÉCNICO DE PROJETOS. </p>
                        <p>A FiberHome Technologies foi fundada em 1974. Um fabricante de produtos FTTH, soluções de
                            DWDM e toda linha cabos de fibra ótica, atualmente é a maior empresa de tecnologia
                            diretamente filiada ao Governo da China. </p>
                        <p> Localizada em Wuhan – Optic Valley of China, foi a primeira empresa
                            a desenvolver tecnologia de Fibra Ótica na Ásia e é até hoje uma das
                            maiores detentoras de patentes nessa área, caracterizando-se por uma
                            empresa inovadora que assume a missão de "maximizar o valor da
                            conexão digital e beneficiar a sociedade humana".</p>
                        <a href="#" class="btn-video">Veja o Vídeo <img
                                src="<?php bloginfo('template_url'); ?>/img/bt-play.png" width="93" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="vision parallax-container">
            <div class="parallax">
                <img src="<?php bloginfo('template_url'); ?>/img/bg-visao.jpg" alt="">
            </div>
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col xl8 valign-wrapper">
                        <div>
                            <h2 class="title">
                                visão <span> do setor</span>
                            </h2>
                            <div class="box-list">
                                <a href="#" class="box" target="_blank">
                                    <div class="ico">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-tendencias.png" width="70"
                                            alt="">
                                    </div>
                                    <h2>tendências do mercado</h2>
                                    <p>Consectetur adipiscing elit, sed do eiusmod </p>
                                </a>
                                <a href="#" class="box" target="_blank">
                                    <div class="ico">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-inovacao.png" width="70"
                                            alt="">
                                    </div>
                                    <h2>tendências do mercado</h2>
                                    <p>Consectetur adipiscing elit, sed do eiusmod </p>
                                </a>
                                <a href="#" class="box" target="_blank">
                                    <div class="ico">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-padroes.png" width="70"
                                            alt="">
                                    </div>
                                    <h2>tendências do mercado</h2>
                                    <p>Consectetur adipiscing elit, sed do eiusmod </p>
                                </a>
                                <a href="#" class="box" target="_blank">
                                    <div class="ico">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-noticias.png" width="70"
                                            alt="">
                                    </div>
                                    <h2>tendências do mercado</h2>
                                    <p>Consectetur adipiscing elit, sed do eiusmod </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col xl4 man">
                        <img src="<?php bloginfo('template_url'); ?>/img/man-vision.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="products">
            <div class="container">
                <h2 class="title center-align">
                    soluções <span> fiberhome</span>
                </h2>
                <div class="carousel">
                    <a class="carousel-item box" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/produto.jpg">
                        <h2>Cabos de fibra ótica</h2>
                        <span>Saiba mais</span>
                    </a>
                    <a class="carousel-item box" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/produto.jpg">
                        <h2>Cabos de fibra ótica</h2>
                        <span>Saiba mais</span>
                    </a>
                    <a class="carousel-item box" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/produto.jpg">
                        <h2>Cabos de fibra ótica</h2>
                        <span>Saiba mais</span>
                    </a>
                    <a class="carousel-item box" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/produto.jpg">
                        <h2>Cabos de fibra ótica</h2>
                        <span>Saiba mais</span>
                    </a>
                    <a class="carousel-item box" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/produto.jpg">
                        <h2>Cabos de fibra ótica</h2>
                        <span>Saiba mais</span>
                    </a>
                </div>
                <div class="navigation">
                    <div class="prev">
                        <img src="<?php bloginfo('template_url'); ?>/img/arrow-left-blue.png" width="40" alt="">
                    </div>

                    <div class="next">
                        <img src="<?php bloginfo('template_url'); ?>/img/arrow-right-blue.png" width="40" alt="">
                    </div>

                </div>
            </div>
        </section>
        <section class="support">
            <div class="title-section">
                <h2>Suporte</h2>
            </div>
            <div class="content" style="background: url(<?php bloginfo('template_url'); ?>/img/bg-suporte.jpg) no-repeat right center">
                <div class="bg"></div>
                <img class="woman" src="<?php bloginfo('template_url'); ?>/img/mulher.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col xl7">
                            <ul>
                                <li><a href="http://">Suporte Gratuito  </a></li>
                                <li><a href="http://">Suporte VIP  </a></li>
                            </ul>
                            <div class="faq carousel carousel-slider center">
                                <div class="carousel-item faq-item">
                                    <img width="56" src="<?php bloginfo('template_url'); ?>/img/ico-faq.png" alt="">
                                    <h2>Dúvidas frequentes</h2>
                                    <h3>1) Qual a diferença da potência de luz GBIC classe ( B+ / C+ )</h3>
                                    <p>Classe de Gbics:<br>
            B+ 3 a 5db - ONU opera em até -28dbm<br>
            C+ 3 a 7db - ONU opera em até -30dbm</p>
                                </div>
                                <div class="carousel-item faq-item">
                                    <img width="56" src="<?php bloginfo('template_url'); ?>/img/ico-faq.png" alt="">
                                    <h2>Dúvidas frequentes</h2>
                                    <h3>1) Qual a diferença da potência de luz GBIC classe ( B+ / C+ )</h3>
                                    <p>Classe de Gbics:<br>
            B+ 3 a 5db - ONU opera em até -28dbm<br>
            C+ 3 a 7db - ONU opera em até -30dbm</p>
                                </div>
                                <div class="carousel-item faq-item">
                                    <img width="56" src="<?php bloginfo('template_url'); ?>/img/ico-faq.png" alt="">
                                    <h2>Dúvidas frequentes</h2>
                                    <h3>1) Qual a diferença da potência de luz GBIC classe ( B+ / C+ )</h3>
                                    <p>Classe de Gbics:<br>
            B+ 3 a 5db - ONU opera em até -28dbm<br>
            C+ 3 a 7db - ONU opera em até -30dbm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready( () => {
            $('.products .carousel').carousel()
            $('.products .next').on("click", () => {
                $(".carousel").carousel("next");
            })
            $(".products .prev").on("click", () => {
                $(".carousel").carousel("prev");
            })
            $('.faq').carousel({
                fullWidth: true
            })
            $('.sidenav').sidenav()
            $('.parallax').parallax()
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>