<?php get_header();?>

<div class="row">
  <div class="col-md-8 col-sm-12">

<?php
if(is_search()):$total_results=$wp_query->found_posts;echo"<h3 class='mb-3'>".sprintf(__('%s resultado(s) para  %s','WPBS4'),$total_results,get_search_query()."</h3>");endif;?>

<?php if(have_posts()):while(have_posts()):the_post();?>
<?php get_template_part('content',get_post_format());?>
<?php endwhile;?>
<?php else:echo"<p>Sua busca não encontrou resultados. Use o formulário para refazer a busca.";get_search_form();endif;?>

<div class="blog-pagination mb-5">
  <?php next_posts_link('Mais antigos');?><?php previous_posts_link('Mais novos');?>
</div>

</div>

<?php get_sidebar();?>

</div>
</div>

<?php get_footer();?>
