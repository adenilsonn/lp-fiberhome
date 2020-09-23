<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <main>
        <section class="banner parallax-container">
            <?php
                $attachment_id = get_field('imagem_fundo_banner_formulario');
                $imagem = wp_get_attachment_image_src( $attachment_id, 'parallax' );
            ?>
            <div class="parallax"><img src="<?php echo $imagem[0]; ?>" alt="Fiberhome"></div>
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
                            <?php the_field('texto_banner_formulario'); ?>
                        </div>
                    </div>
                    <div class="col xl5">
                        <div class="text">
                            <div role="main" id="formulario-lp-fiberhome-32ff90fa7bef39066f83"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about scroll-to-block" data-id="institucional">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col xl5">
                        <?php
                            $attachment_id = get_field('imagem_institucional');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'lap' );
                        ?>
                        <img class="lap" src="<?php echo $imagem[0]; ?>" alt="Institucional">
                    </div>
                    <div class="col xl7">
                        <?php the_field('texto_institucional'); ?>
                        <a id="<?php $idVideo = parse_video_uri( get_field('video_institucional') ); echo $idVideo[id]; ?>" class="btn-video modal-button">Veja o Vídeo <img
                                src="<?php bloginfo('template_url'); ?>/img/bt-play.png" width="93" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
         <?php if(get_field('imagem_fundo_visao_setor')) : ?>
        <section class="vision parallax-container scroll-to-block" data-id="visao-do-setor">
            <div class="parallax">
                <?php
                    $attachment_id = get_field('imagem_fundo_visao_setor');
                    $imagem = wp_get_attachment_image_src( $attachment_id, 'parallax' );
                ?>
                <img src="<?php echo $imagem[0]; ?>" alt="Visão do Setor">
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
                                <?php if(have_rows('lista_visao_setor')) : while(have_rows('lista_visao_setor')) : the_row(); ?>
                                <?php
                                    $attachment_id = get_sub_field('icone');
                                    $imagem = wp_get_attachment_image_src( $attachment_id, 'icone' );
                                ?>
                                <a href="<?php the_sub_field('link'); ?>" class="box" target="_blank">
                                    <div class="ico">
                                        <img src="<?php echo $imagem[0]; ?>" width="70"
                                            alt="<?php the_sub_field('titulo'); ?>">
                                    </div>
                                    <h2><?php the_sub_field('titulo'); ?></h2>
                                    <p><?php the_sub_field('chamada'); ?></p>
                                </a>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col xl4 man">
                        <?php
                            $attachment_id = get_field('imagem_visao_setor');
                            $imagem = wp_get_attachment_image_src( $attachment_id, 'man' );
                        ?>
                        <img src="<?php echo $imagem[0]; ?>" alt="Visão do Setor">
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <section class="products scroll-to-block" data-id="solucoes">
            <div class="container">
                <h2 class="title center-align">
                    soluções <span> fiberhome</span>
                </h2>
                <div class="carousel">
                    <?php if(have_rows('lista_solucoes')) : while(have_rows('lista_solucoes')) : the_row(); ?>
                    <a class="carousel-item box" href="<?php the_sub_field('link'); ?>">
                        <?php
                        $attachment_id = get_sub_field('imagem');
                        $imagem = wp_get_attachment_image_src( $attachment_id, 'solucoes' );
                        ?>
                        <img src="<?php echo $imagem[0]; ?>" alt="<?php the_sub_field('titulo'); ?>">
                        <h2><?php the_sub_field('titulo'); ?></h2>
                        <span>Saiba mais</span>
                    </a>
                    <?php endwhile; endif; ?>
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
                            <div>
                                <ul class="collapsible">
                                    <?php if(have_rows('lista_suporte')) : while(have_rows('lista_suporte')) : the_row(); ?>
                                    <li>
                                        <div class="collapsible-header"><?php the_sub_field('titulo'); ?></div>
                                        <div class="collapsible-body"><?php the_sub_field('texto'); ?></div>
                                    </li>
                                    <?php endwhile; endif; ?>
                                </ul>
                                <div class="title-faq">
                                    <img width="56" src="<?php bloginfo('template_url'); ?>/img/ico-faq.png" alt="">
                                    <h2>Dúvidas frequentes</h2>
                                </div>
                                <ul class="collapsible faqc">
                                    <?php if(have_rows('duvidas_frequentes')) : while(have_rows('duvidas_frequentes')) : the_row(); ?>
                                    <li>
                                        <div class="collapsible-header"><?php the_sub_field('titulo'); ?></div>
                                        <div class="collapsible-body">
                                            <?php the_sub_field('texto'); ?>
                                            <?php if(get_sub_field('video')) : ?>
                                            <a id="<?php $idVideo = parse_video_uri( get_sub_field('video') ); echo $idVideo[id]; ?>" class="modal-button">Veja o vídeo</a>
                                            <?php endif; ?>
                                            <?php if(get_sub_field('link')) : ?>
                                            <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">Requisitos</a>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                    <?php endwhile; endif; ?>
                                </ul>
                                <?php /*<div class="faq carousel carousel-slider center">
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
                                </div>*/ ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vision videos parallax-container">
            <div class="parallax">
                <?php
                $attachment_id = get_field('imagem_fundo_videos');
                $imagem = wp_get_attachment_image_src( $attachment_id, 'parallax' );
                ?>
                <img src="<?php echo $imagem[0]; ?>" alt="Vídeos">
            </div>
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col xl8 valign-wrapper">
                        <div>
                            <h2 class="title">
                            <span><strong>+</strong></span>vídeos <span> fiberhome</span>
                            </h2>
                            <div class="box-list owl-carousel owl-theme">
                                <?php if(have_rows('lista_videos')) : while(have_rows('lista_videos')) : the_row(); ?>
                                <a id="<?php $idVideo = parse_video_uri( get_sub_field('video') ); echo $idVideo[id]; ?>" class="carousel-item box modal-button">
                                    <div class="ico">
                                        <img src="<?php bloginfo('template_url'); ?>/img/play-youtube.png" width="40"
                                            alt="">
                                    </div>
                                    <h2><?php the_sub_field('titulo'); ?></h2>
                                </a>
                                <?php endwhile; endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col xl4 man">
                        <?php
                        $attachment_id = get_field('imagem_videos');
                        $imagem = wp_get_attachment_image_src( $attachment_id, 'lap1' );
                        ?>
                        <img src="<?php echo $imagem[0]; ?>" alt="Vídeos">
                    </div>
                </div>
            </div>
        </section>
        <?php
            $attachment_id = get_field('imagem_fundo_ponta');
            $imagem = wp_get_attachment_image_src( $attachment_id, 'parallax' );
        ?>
        <section class="solucoes scroll-to-block" data-id="servicos" style="background: url(<?php echo $imagem[0]; ?>) no-repeat center top/cover">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col xl6 offset-xl6">
                        <h2> <strong> SOLUÇÃO</strong> DE PONTA A PONTA <span>FIBERHOME</span></h2>
                        <?php the_field('texto_ponta'); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $attachment_id = get_field('imagem_fundo_as');
        $imagem = wp_get_attachment_image_src( $attachment_id, 'parallax' );
        ?>
        <section class="wdc scroll-to-block" data-id="as-a-service" style="background: url(<?php echo $imagem[0]; ?>) no-repeat center top/cover">
            <div class="container">
                <div class="row">
                    <div class="col xl7 valign-wrapper">
                        <div>
                            <?php the_field('texto_as'); ?>
                        </div>
                    </div>
                    <div class="col xl5 vantagens valign-wrapper">
                        <div class="div">
                            <?php the_field('vantagens_as'); ?>
                            <a href="<?php the_field('link_as'); ?>" class="more">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact scroll-to-block" data-id="contato">
            <div class="container">
                <div class="row">
                    <div class="col xl3">
                        <img width="126" src="<?php bloginfo('template_url'); ?>/img/wdc-v.png" alt="WDC Networks">
                    </div>
                    <div class="col xl4">
                        <h2>CONTATO</h2>
                        <div class="infos">
                            <?php if(get_field('telefone_fiberhome') && get_field('email_fiberhome')) : ?>
                            <strong>FIBERHOME</strong><br>
                            Telefone: <span>11</span> <strong><?php the_field('telefone_fiberhome'); ?></strong><br>
                            Email: <a href="mailto:<?php the_field('email_fiberhome'); ?>" target="_blank" rel="noopener noreferrer"><strong><?php the_field('email_fiberhome'); ?></strong></a>
                            <?php endif; ?>
                        </div>
                        <div class="infos">
                            <strong>WDC</strong><br>
                            Telefone: <span>11</span> <a href="https://api.whatsapp.com/send?phone=5511<?php the_field('telefone_wdc'); ?>" target="_blank" rel="noopener noreferrer"><strong class="whatsapp"><?php the_field('telefone_wdc'); ?> <img src="<?php bloginfo('template_url'); ?>/img/ico-whatsapp.png" width="25" alt="WhatsApp"></strong></a><br>
                            Email: <a href="mailto:contato@wdcnet.com.br" target="_blank" rel="noopener noreferrer"><strong><?php the_field('email_wdc'); ?></strong></a>
                        </div>
                        <div class="infos">
                            <div class="buttons">
                                <a href="<?php the_field('mais_informacoes'); ?>" target="_blank" rel="noopener noreferrer"><strong>mais informaçÕes</strong></a>
                                <a href="<?php the_field('sac'); ?>" target="_blank" rel="noopener noreferrer"><strong>SAC (PÓS-VENDA)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="col xl5">
                        <div role="main" id="formulario-lp-fiberhome-2-5ed0e2219684ad2119b2"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal Structure -->
    <div class="modal-video">
        <div class="content">
            <a class="close">X</a>
            <div class="modal-content">
                <iframe src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>