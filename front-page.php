<?php
$estiloPagina = 'home.css';
require_once 'header.php';

//imagem
the_post_thumbnail('post-thumbnail', array('class' => 'imagem-solucoes'));

echo '<h1 align="center"> Soluções </h1>';
//post_type
$args = array('post_type' => 'solucoes');
$query= new WP_Query($args);
if ($query->have_posts()):
    echo '<main class="page-home">';
    echo '<ul class="lista-home container-header">';
    while ($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 solucoes">';
        the_post_thumbnail();
        the_title('<p class="titulo-home">', '</p>');
        the_content();
        echo '</li>';
    endwhile;
    echo'</ul>';
    echo'</main>';
endif;

//texto inserido pelo adm
if(have_posts()):
    echo '<main class="boxmodel1">';
    while(have_posts()): the_post();
        echo '<div class="conteudo container">';
        the_content();
        echo '</div>';
    endwhile;
    echo '</main>';
endif;
?>

<br>
<br>

<div class="texto">
<h1 class="align"> Software Solutions </h1>
</div>

<main class="boxmodel">
<h1 align="center"> Outros </h1>
<div class="conteudo container">
<?php
echo do_shortcode('[metaslider id="123"]');
echo '<div class="video">';
echo do_shortcode('[su_youtube_advanced url="https://www.youtube.com/watch?v=9URSbTOE4YI"]');
echo '</div>';
?>
</div>
</main>
<?php
require_once 'footer.php';
