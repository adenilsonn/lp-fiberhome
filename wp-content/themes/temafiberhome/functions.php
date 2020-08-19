<?php

/*-----------------------------------------------------------------------------------*/
/* Configurações do admin
/*-----------------------------------------------------------------------------------*/

// Remove a versão do WP no front
remove_action('wp_head','wp_generator');

// Remove itens do menu

function remove_menus(){

  //remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );

// Add suporte aos formatos de post
//add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );
//add_theme_support( 'post-thumbnails' );

// Não adiciona o jquery e scripts padrões do WP
function my_script() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_bloginfo('template_url').'/vendor/jquery.min.js', false, NULL);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_script');


// Altera imagem login

function custom_login_logo() {
     echo '<style type="text/css">
         .login h1 a { background-image:url("'.get_stylesheet_directory_uri().'/img/wdc-adm.png") !important; background-size: 207px 58px; width: 207px; height:58px; background-position: 0px 0px;}
     </style>';
}
add_action('login_head', 'custom_login_logo');


// Adiciona suporte a widgets

/**
 * Register our sidebars and widgetized areas.
 *
 */
/*if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => 'Sidebar Calendário',
        'id'   => 'sidebar-calendario',
        'description'   => 'Aqui pode inserir o calendário.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

}*/

// Registra o menu
//register_nav_menus( array ('menu-principal' => __( 'Menu Principal', 'rspress' )));


/*-----------------------------------------------------------------------------------*/
/* Configurações do tema
/*-----------------------------------------------------------------------------------*/

// html5 support
//add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//title tag
//add_theme_support( 'title-tag' );


/*-----------------------------------------------------------------------------------*/
/* Paginação
/*-----------------------------------------------------------------------------------*/

function attach_pagination($url){
    global $wp_query;
    $page = max(get_query_var('paged'),1);
    $page_link = get_pagenum_link();
    $big = 999999999; // need an unlikely integer
    if(get_query_var('paged') == 0) $page_link .= '1/';

    $page_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_next'    => false,
        'prev_text' => '',
        'next_text' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $page,
        'type' => 'array'
    ));

    if ( $page_links ) {

    echo '<div class="pagination justify-content-center"><ul>';

        if(get_previous_posts_link()) {
			echo '<li><a href="' . get_bloginfo('url') . $url . '"><i class="fas fa-angle-left"></i></a></li>';
        }
        foreach($page_links as $link) {
            echo '<li>' . $link . '</li>';
        }
        if(get_next_posts_link()) {
			echo '<li><a href="' . get_bloginfo('url') . $url . 'page/' . $wp_query->max_num_pages . '/' . '"><i class="fas fa-angle-right"></i></a></li>';
        }
    echo '</div></ul>';
    }
}
// adiciona o nome do slug a função body_class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
//add_filter( 'body_class', 'add_slug_body_class' );


// tamanho de imagens personalizadas

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'parallax', 1920, 800, true);
	add_image_size( 'lap', 640, 540, true);
	add_image_size( 'icone', 140, 140, true);
	add_image_size( 'solucoes', 313, 236, true);
	add_image_size( 'man', 330, 583, true);
	add_image_size( 'lap1', 441, 481, true);
}

/* Options Tema */

/*if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Conteúdos Adicionais',
        'menu_title'    => 'Conteúdos Adicionais',
        'menu_slug'     => 'conteudos-adicionais',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

}*/


/*function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Artigos';
    $submenu['edit.php'][5][0] = 'Todos os Artigos';
}
add_action( 'admin_menu', 'edit_admin_menus' );*/

// custom post types

function post_type_cases() {
    $args = array(
        'labels' => array(
            'name' => 'Cases',
            'singular_name' => 'Case',
            'add_new' => 'Adicionar nova',
            'add_new_item' => 'Adicionar novo item',
            'edit_item' => 'Editar item',
            'new_item' => 'Novo item',
            'view' => 'Ver',
            'view_item' => 'Ver itens',
            'search_items' => 'Procurar itens',
            'not_found' => 'Nenhuma item encontrado',
            'not_found_in_trash' => 'Nenhuma item encontrado na lixeira'
        ),
        'description' => 'Esse post type é para as case do site',
        'menu_position' => 22,
        'menu_icon' => 'dashicons-editor-kitchensink',
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => false,
        'rewrite' => array( 'slug' => 'case' ),
        'supports' => array('title','editor','excerpt')
    );


    register_post_type( 'case' , $args );

}

//add_action('init', 'post_type_cases');


/*function post_type_imprensa() {
    $args = array(
        'labels' => array(
            'name' => 'Sala de Imprensa',
            'singular_name' => 'Sala de Imprensa',
            'add_new' => 'Adicionar nova',
            'add_new_item' => 'Adicionar novo item',
            'edit_item' => 'Editar item',
            'new_item' => 'Novo item',
            'view' => 'Ver',
            'view_item' => 'Ver itens',
            'search_items' => 'Procurar itens',
            'not_found' => 'Nenhuma item encontrado',
            'not_found_in_trash' => 'Nenhuma item encontrado na lixeira'
        ),
        'description' => 'Esse post type é para sala de imprensa do site',
        'menu_position' => 7,
        'menu_icon' => 'dashicons-testimonial',
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'has_archive' => false,
        'rewrite' => array( 'slug' => 'imprensa' ),
        'supports' => array('title','editor','excerpt')
    );


    register_post_type( 'imprensa' , $args );

}

add_action('init', 'post_type_imprensa');*/


function novas_taxonomias() {
    register_taxonomy('case-cliente',array('case'), array(
        'hierarchical' => true,
        'label' => 'Clientes',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'case-cliente' ),
    ));
    register_taxonomy('case-servico',array('case'), array(
        'hierarchical' => true,
        'label' => 'Serviços',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'case-servico' ),
    ));
}
//add_action('init', 'novas_taxonomias', 0);


// Funções do Tema

//LIMITAR OS CARACTERES DO THE_EXCERTP() NO WORDPRESS
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt)>=$limit) {

        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';

    } else {

        $excerpt = implode(" ",$excerpt);
    }

    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

    return $excerpt;
}

function cutText($limit, $s) {
    $max_length = $limit;

    if (strlen($s) > $max_length)
    {
        $offset = ($max_length - 3) - strlen($s);
        $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
    }

    return $s;
}

// Verifica se a página é filha
function is_tree($pid) {
    global $post;

    if ( is_page($pid) )
        return true;

    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }
    return false;
}


// Retorna a Slug da Pag
function the_slug($echo=true){
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
		do_action('after_slug', $slug);
	return $slug;
}

/*add_filter( 'body_class', 'class_slug_page' );
function class_slug_page( $classes )
{
	global $post;

	// add 'post_name' to the $classes array
	$classes[] = $post->post_name;
	// return the $classes array
	return $classes;
}*/

// Alterar a palavra para o singular

function depluralize($word){
    // Here is the list of rules. To add a scenario,
    // Add the plural ending as the key and the singular
    // ending as the value for that key. This could be
    // turned into a preg_replace and probably will be
    // eventually, but for now, this is what it is.
    //
    // Note: The first rule has a value of false since
    // we don't want to mess with words that end with
    // double 's'. We normally wouldn't have to create
    // rules for words we don't want to mess with, but
    // the last rule (s) would catch double (ss) words
    // if we didn't stop before it got to that rule.
    $rules = array(
        'ss' => false,
        'os' => 'o',
        'ies' => 'y',
        'xes' => 'x',
        'oes' => 'o',
        'ies' => 'y',
        'ves' => 'f',
        's' => '');
    // Loop through all the rules and do the replacement.
    foreach(array_keys($rules) as $key){
        // If the end of the word doesn't match the key,
        // it's not a candidate for replacement. Move on
        // to the next plural ending.
        if(substr($word, (strlen($key) * -1)) != $key)
            continue;
        // If the value of the key is false, stop looping
        // and return the original version of the word.
        if($key === false)
            return $word;
        // We've made it this far, so we can do the
        // replacement.
        return substr($word, 0, strlen($word) - strlen($key)) . $rules[$key];
    }
    return $word;
}

/* Função para tirar acentos e espaços*/

/*function clearwords($variavel) {
	$variavel_limpa = strtolower( ereg_replace("[^a-zA-Z0-9-]", "-", strtr(utf8_decode(trim($variavel)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),"aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
	return $variavel_limpa;
}*/

function traducaoTexto ($array) {

    $traducao = $array;

    $idioma = get_locale();

    switch ($idioma) {
        case 'pt_BR':
            $idiomaNum = 0;
            break;
        case 'en_US':
            $idiomaNum = 1;
            break;
        default:
             $idiomaNum = 0;
            break;
    }

    return $traducao[$idiomaNum];
}

// Editor Visual WP

//Adicionar botões ao editor
/*function add_more_buttons($buttons) {
  //$buttons[] = 'hr';
  //$buttons[] = 'del';
  //$buttons[] = 'sub';
  //$buttons[] = 'sup';
  //$buttons[] = 'fontselect';
  $buttons[] = 'fontsizeselect';
  //$buttons[] = 'cleanup';
  //$buttons[] = 'styleselect';
  return $buttons;
}
//add_filter("mce_buttons_2", "add_more_buttons");*/

// Função para os compartilhamentos de todos os posts

function  addSharePost($link, $titulo/*, $imagem*/) {
    //render
    $str = '';

    //facebook
    $str .= '<a original-title="FACEBOOK" href="http://www.facebook.com/sharer.php?u=' . urlencode( $link ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><img style="width:22px; height:22px;" width="22" height="22" src="' . get_bloginfo('template_url') . '/img/ico-facebook-laranja.svg" alt=""></a>';

    //twitter
    $str .= '<a original-title="TWITTER" href="https://twitter.com/intent/tweet?text=' . urlencode( strip_tags( $titulo ) ) . '&amp;url=' . urlencode( $link ) . '&amp;via=' . urlencode( $twitter_user ? $twitter_user : get_bloginfo( 'name' ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><img width="22" height="22" src="' . get_bloginfo('template_url') . '/img/ico-twitter-laranja.svg" alt=""></a>';

    //google plus
    /*$str .= '<a original-title="GOOGLE" href="http://plus.google.com/share?url=' . urlencode( $link ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fab fa-google"></i></a>';*/

    //pinterest
    /*$str .= '<a original-title="PINTEREST" href="http://pinterest.com/pin/create/button/?url=' . urlencode( $link ) . '&amp;media=' . ( ! empty( $imagem ) ? $imagem : '' ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-pinterest"></i></a>';*/

    //linkedin
    $str .= '<a original-title="LINKEDIN" href="http://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode( $link ) . '&amp;title=' . urlencode( strip_tags( $titulo ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><img width="22" height="22" src="' . get_bloginfo('template_url') . '/img/ico-linkedin-laranja.svg" alt=""></a>';


    return $str;
}




/* Parse the video uri/url to determine the video type/source and the video id */
function parse_video_uri( $url ) {

	// Parse the url
	$parse = parse_url( $url );

	// Set blank variables
	$video_type = '';
	$video_id = '';

	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {

		$video_type = 'youtube';

		$video_id = ltrim( $parse['path'],'/' );

	}

	// Url is http://www.youtube.com/watch?v=xxxx
	// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
	// or http://www.youtube.com/embed/xxxx
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {

		$video_type = 'youtube';

		parse_str( $parse['query'] );

		$video_id = $v;

		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );

		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );

	}

	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {

		$video_type = 'vimeo';

		$video_id = ltrim( $parse['path'],'/' );

	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {

		$video_type = 'wistia';

		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );

	}

	// If recognised type return video array
	if ( !empty( $video_type ) ) {

		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);

		return $video_array;

	} else {

		return false;

	}

}


/* Cria um menu customizado */

function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

        /*$menu_list  = '<nav class="navbar navbar-default">' ."\n";
        $menu_list .= '<div class="container-fluid">' ."\n";
        $menu_list .= '<!-- Brand and toggle get grouped for better mobile display -->' ."\n";
        $menu_list .= '<div class="navbar-header">' ."\n";
        $menu_list .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">' ."\n";
        $menu_list .= '<span class="sr-only">Toggle navigation</span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '</button>' ."\n";
        $menu_list .= '<a class="navbar-brand" href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a>';
        $menu_list .= '</div>' ."\n";

        $menu_list .= '<!-- Collect the nav links, forms, and other content for toggling -->';*/


        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        //$menu_list .= '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">' ."\n";
        $menu_list .= '<ul class="navbar-nav mr-auto">' ."\n";

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {

                $parent = $menu_item->ID;

                $menu_array = array();
                foreach( $menu_items as $submenu ) {

				if(is_page($menu_item->title) || is_singular('post') && $menu_item->title == 'Blog' || is_singular('produto') && $menu_item->title == 'Produtos' ) {
					$class= 'active';
				}
				else {
					$class = '';
				}

                if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a>' ."\n";
                    }
                }
				if($menu_item->title == 'Contato') { $classlast = 'contato'; }
                if($menu_item->title == 'Fabricantes' || $menu_item->title == 'Produtos') { $classMega = ' megamenu ' . $menu_item->post_name; } else { $classMega = ''; }
                if( $bool == true && count( $menu_array ) > 0 ) {

                    $menu_list .= '<li class="nav-item dropdown '. $class . $classMega . '">' ."\n";
                    $menu_list .= '<a class="nav-link dropdown-toggle" href="' . $menu_item->url . '" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";

                    $menu_list .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown ' . $classlast . '">' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    if($menu_item->title == 'Produtos') {

                        $taxonomies_fam = get_terms( array(
                            'taxonomy' => 'familia-de-produto',
                            'hide_empty' => true
                        ) );

                        if ( !empty($taxonomies_fam) ) {
                            foreach( $taxonomies_fam as $tax_fam ) {
                                $menu_list .= '<a class="dropdown-item" href="' . get_bloginfo('url') . '/produtos/?_sft_familia-de-produto=' . $tax_fam->slug . '">' . $tax_fam->name . '</a>' ."\n";
                            }

                        }


                    }
                    if($menu_item->title == 'Fabricantes') {

                        $taxonomies_fab = get_terms( array(
                            'taxonomy' => 'fabricantes',
                            'hide_empty' => true
                        ) );

                        if ( !empty($taxonomies_fab) ) {
                            foreach( $taxonomies_fab as $tax_fb ) {
                                $menu_list .= '<a class="dropdown-item" href="' . get_bloginfo('url') . '/fabricantes/' . $tax_fb->slug . '">' . $tax_fb->name . '</a>' ."\n";
                            }

                        }


                    }
                    $menu_list .= '</div>' ."\n";

                } else {

                    $menu_list .= '<li class="nav-item '. $class .'">' ."\n";
                    $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                }

            }

            // end <li>
            $menu_list .= '</li>' ."\n";
        }

        $menu_list .= '</ul>' ."\n";
        //$menu_list .= '</div>' ."\n";
        //$menu_list .= '</div><!-- /.container-fluid -->' ."\n";
        //$menu_list .= '</nav>' ."\n";

    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }

    echo $menu_list;
}

/* Ajusta o funcionamento da páginação nas páginas de Archivo e Busca */
function custom_posts_per_page( $query ) {

    if ( $query->is_archive() ) {
        set_query_var('posts_per_page', 5);
    }

	if ( $query->is_search() ) {
        set_query_var('posts_per_page', 5);
    }
}
//add_action( 'pre_get_posts', 'custom_posts_per_page' );

// Função para Breadcrumbs
function wp_custom_breadcrumbs() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '<li><a href="#"><i class="fas fa-caret-right"></i></a></li>'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<li>'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<li class="breadcrumb-item"><a href="' . $homeLink . '">' . $home . '</a></li>';

  } else {

    echo '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . 'Você está pesquisando por "' . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a class="breadcrumb-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a class="breadcrumb-link" href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_singular('produtos') ) {
        echo '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . $homeLink . '/' . 'produtos' . '/">' . 'Produtos' . '</a></li>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		echo '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . $homeLink . '/' . 'noticias/">Notícias</a></li>' . $delimiter;
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        //echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a class="breadcrumb-link" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Tag "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Posts do autor ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Erro 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

  }
} // end wp_custom_breadcrumbs()


/* Customize wp get archives */

/*add_filter( 'get_archives_link', function( $link_html, $url, $text, $format, $before, $after ) {

    if ( 'custom' == $format ) {
        $link_html = "\t<li><a href='$url' class='clearfix'><span class='inner clearfix'><span class='txt1'>$text</span></a></li>\n";
    }

    return $link_html;

}, 10, 6 );*/


/*add_filter( 'wp_nav_menu_objects', 'add_has_children_to_nav_items' );

function add_has_children_to_nav_items( $items )
{
    $parents = wp_list_pluck( $items, 'menu_item_parent');

    foreach ( $items as $item )
        in_array( $item->ID, $parents ) && $item->classes[] = 'submenu';

    return $items;
}*/

/* -------------- WOOCOMMERCE -------------- */

// Adiciona suporte ao Woocommerce

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//add_action( 'after_setup_theme', 'woocommerce_support' );

// Woocommerce Function
if (class_exists('WooCommerce')) {

    /* Remove Itens do Summary */
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
    //remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	//remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
    //remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

	//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );




    /* Adiciona Título na página do Carrinho, Checkout , Finalizado */

    //add_action('woocommerce_checkout_nav', 'custom_checkout_nav', 0);

    function custom_checkout_nav()
    {
        echo '<div class="checkout-breadcrumb"><h1><span class="title-cart">CONFIRMAÇÃO DO PEDIDO</span><span class="fa fa-angle-right"></span><span class="title-checkout">INFORMAÇÕES DE CADASTRO</span><span class="fa fa-angle-right"></span><span class="title-thankyou">PEDIDO FINALIZADO</span></h1></div>';
    }

    // Alterar o texto do botão adicionar ao carrinho */
    /*function woo_custom_cart_button_text() {
        return __( 'ADICIONAR AO CARRINHO', 'woocommerce' );
    }
    add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );  */  // 2.1 +

    // Disable WooCommerce's Default Stylesheets
    //add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

    /**
      * Remove link wrapping main product image in single product view.
      * @param $html
      * @param $post_id
      * @return string
    */

    /*function custom_unlink_single_product_image( $html, $post_id ) {
        return get_the_post_thumbnail( $post_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ) );
    }

    add_filter('woocommerce_single_product_image_html', 'custom_unlink_single_product_image', 10, 2);*/

    /**
     * Redirect to a specific page when clicking on Continue Shopping in the cart
     *
     * @return void
     */
    /*function wc_custom_redirect_continue_shopping() {
        return 'http://www.midiaria.com/midiaria-training/';
    }
    add_filter( 'woocommerce_continue_shopping_redirect', 'wc_custom_redirect_continue_shopping' );*/

}

// -------------------- Register Sidebar --------------------- //
/*if (!function_exists('vivacom_widgets_init')) {
    add_action('widgets_init', 'vivacom_widgets_init');
    function vivacom_widgets_init()
    {
        register_sidebar(array(
            'name' => 'Woocommerce Widget',
            'id' => 'woocommerce-widget',
            'description' => esc_html__('Itens na página dos produtos', 'WDC'),
            'before_widget' => '<div class="categorias">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }
}*/


// Adiciona Classe a tag a do menu
function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
//add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

// Adiciona Classe a li do menu
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
//add_filter('nav_menu_css_class','add_classes_on_li',1,3);


function force_ssl()
{
    // Specify ID of page to be viewed on SSL connection

    if (!is_ssl ())
    {
      header('HTTP/1.1 301 Moved Permanently');
      header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
      exit();
    }

    // All other pages must not be https

    /*else if (!is_page(9) && is_ssl() )

    {
        header('Location: http://' . $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        exit();
    }*/
}
//force_ssl();


function clean($string) {
    $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

    return str_replace(["-", "–"], '', $string);
    // Removes special chars.
 }


 // API

 require_once TEMPLATEPATH . '/api/api.php';
