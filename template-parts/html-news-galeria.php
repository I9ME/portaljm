<ul class="news" id="owl-galeria">
  <?php $slider_cursos = new WP_Query(array('post_type' => 'videos', 'showposts' => -1, 'orderby' => 'date'));
    while ($slider_cursos->have_posts()) : $slider_cursos->the_post(); ?>
      
    <li class="news__item">
      <a href="<?php echo get_permalink(); ?>"> 
      <?php echo the_post_thumbnail(); ?>
    </a>
      <h2 class="news-title"><?php 
        $thetitle = $post->post_title; 
        $getlength = strlen($thetitle);
        $thelength = 28;

        echo substr($thetitle, 0, $thelength);

        if ($getlength > $thelength) echo "...";

        ?>   
      </h2>
      <p class="news-subtitle"><?php 

      echo word_count(get_the_excerpt(), '10') . '...'; ?>
            
    </li>
  <?php endwhile; wp_reset_query(); ?>
</ul>