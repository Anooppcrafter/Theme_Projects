<?php 
/*
Plugin Name: New-Plugin1
Plugin URI:
Description:This is my Second New Demo Plugin to just provide basic plugin setting.
Author:Anoop Chourasia
Author URI:
Version:5.4
*/
add_action('init','New_Slide_Task');

function New_Slide_Task(){
	$labels=array(

		'name'=>__('Slide'),
		'singular_name'=>__('Slide'),
		'menu_name'=>__('Slide'),
		'name_admin_bar'=>__('Slide'),
		'add_new'=>__('Add New'),
		'add_new_item'=>__('Add New Slide'),
		'new_item'=>__('New Slide'),
		'edit_item'=>__('Edit Slide'),
		'view_item'=>__('View Slide'),
		'all_items'=>__('All Slide'),
		'search_items'=>__('Search Slide'),
		'parent_item_colon'=>__('Parent Slide'),
		'not_found'=>__('No Slide Found'),
		'not_found_in_trash'=>__('No Slide Found in Trash')
);
	$args=array(
'labels'=>$labels,
'description'=>__('Description'),
'public'=>true,
'publicly_queryable'=>true,
'show_ui'=>true,
'show_in_menu'=>true,
'query_var'=>true,
'rewrite'=>array('slug'=>'slide'),
'capability_type'=>'post',
'has_archive'=>true,
'hierarchical'=>false,
'menu_position'=>null,
'supports'=>array('title','editor','author','thumbnail','excerpt','comments','revision'),
	//'taxonomies'=>array('category','post_tag'),
	'menu_position'=>5,
	'execlude_from_scratch'=>false
);
	register_post_type('slide',$args);
}
function task_slider_category_taxonomy(){

	$labels=array(
		'name'=>__('Slider'),
		'singular_name'=>__('Slider'),
		'menu_name'=>__('Slider'),
		'all_items'=>__('All Slider','Slider'),
		'parent_item'=>__('Parent Slider','Slider'),
		'parent_item_colon'=>__('Parent Slider:','Slider'),
		'new_item_name'=>__('New Item Slider','Slider'),
		'add_new_item'=>__('Add New Slider','Slider'),
		'edit_item'=>__('Edit Slider','Slider'),
		'update_item'=>__('Update Slider','Slider'),
		'view_item'=>__('View Slider','Slider'),
		'separate_items_with_commas'=>__('Separate Slider with commas','Slider'),
		'add_or_remove_items'=>__('Add or Remove Slider','Slider'),
		'choose_from_most_used'=>__('Choose From the most','Slider'),
		'popular_items'=>__('Popular Slider','Slider'),
		'search_items'=>__('Search Slider','Slider'),
		'not_found'=>__('Not Found','Slider'),
		'no_terms'=>__('No Terms','Slider'),
		'items_list'=>__('Slider List','Slider'),
		'items_list_navigation'=>__('Slider List Navigation','Slider'),
		'menu_name'=>__('Slider','Slider'),
	);

	$args=array(
		'labels'=>$labels,
		'hierarchical'=>true,
		//'public'=>true,
		'show_ui'=>true,
		'show_admin_column'=>true,
		//'show_in_nav_menus'=>true,
		//'show_tagcloud'=>true,
		'query_var'=>true,
'rewrite'=>array('slug'=>'slider'),
);
	register_taxonomy('slider',array('slide'),$args);
}
add_action('init','task_slider_category_taxonomy',0);
 

?>