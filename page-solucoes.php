<?php
$estiloPagina = 'solucoes.css';
require_once 'header.php';

if(have_posts()):
    echo '<main class="main">';

        while(have_posts()): the_post();
            the_post_thumbnail('post-thumbnail', array('class' => 'imagem-sobre-nos'));
            echo '<div class="conteudo container">';
            the_content();
            echo '</div>';
        endwhile;
    echo '</main>';
endif;
require_once 'footer.php';