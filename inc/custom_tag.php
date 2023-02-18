<?php 

// For Custom Post Tag

// function query_tag_type($query){
//   if(is_tag()){
//     $post_type = get_query_var('post_type');
//     if($post_type){
//       $post_type = $post_type;
//     }else{
//       $post_type = array('post_tag', 'service');
//       $query -> set('post_type', $post_type);
//       return $query;
//     }
//   }
// }
// add_filter('pre_get_posts', 'query_tag_type');

function add_tags() {
  register_taxonomy_for_object_type('post_tag', 'service');
  }
  add_action('init', 'add_tags');