<?php
/*
* Configurações do Tema
* Desenvolvedor: Bruno Kiedis
* Email: bruno@i9me.com.br
*/
//=========================================================================================
// INCLUDE FUNCTIONS
//=========================================================================================
//===================================Painel================================================
require_once locate_template('/_lib/dashboard.php');

//================================Funções Dashboard========================================
require_once locate_template('/_lib/admin.php');//..................STYLE LOGIN/ADMIN

//===================================Backend===============================================
require_once locate_template('/_lib/posts.php');//..................POST TYPE FUNCTIONS

//===================================Tema==================================================
require_once locate_template('/_lib/scripts.php');//................SCRIPTS E CSS


//=========================================================================================
// ADICIONANDO FAVICON
//=========================================================================================
// function blog_favicon() {
//   echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/_lib/_admin/favicon.png" />';
// }
// add_action('wp_head', 'blog_favicon');


function word_count($string, $limit) {
 
$words = explode(' ', $string);
 
return implode(' ', array_slice($words, 0, $limit));
 
}