<?php

function wpbs4_customize_register($wp_customize)
{
// rodape
  $wp_customize->add_section('footer', array(
    'title'=>__('Rodapé', 'WPBS4'),
    'description'=>sprintf(__('Opções para o rodapé', 'WPBS4')),
    'priority'=>20
  ));
  $wp_customize->add_setting('footer_title', array(
    'default'=>_x('Meu primeiro tema wordpress', 'WPBS4'),
    'type'=>'theme_mod'
  ));
  $wp_customize->add_control('footer_title', array(
    'label'=>__('Título do rodapé', 'WPBS4'),
    'section'=>'footer',
    'priority'=>1
  ));
  $wp_customize->add_setting('footer_text', array(
    'default'=>_x('Feito com wordpress', 'WPBS4'),
    'type'=>'theme_mod'
  ));
  $wp_customize->add_control('footer_text', array(
    'label'=>__('Texto do rodapé', 'WPBS4'),
    'section'=>'footer',
    'priority'=>2
  ));
}
add_action('customize_register', 'wpbs4_customize_register');
