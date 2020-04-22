<?php 
/*
Plugin Name: Task-Plugin
Plugin URI:
Description:This is my Task Demo Plugin to just provide basic plugin setting.
Author:Anoop Chourasia
Author URI:
Version:5.4



*/
add_action('init','property_Task');

function property_Task(){
	$labels=array(

		'name'=>__('Property'),
		'singular_name'=>__('Property'),
		'menu_name'=>__('Property'),
		'name_admin_bar'=>__('Property'),
		'add_new'=>__('Add New'),
		'add_new_item'=>__('Add New Property'),
		'new_item'=>__('New Property'),
		'edit_item'=>__('Edit Property'),
		'view_item'=>__('View Property'),
		'all_items'=>__('All Property'),
		'search_items'=>__('Search Property'),
		'parent_item_colon'=>__('Parent Property'),
		'not_found'=>__('No Property Found'),
		'not_found_in_trash'=>__('No Property Found in Trash')
);
	$args=array(
'labels'=>$labels,
'description'=>__('Description'),
'public'=>true,
'publicly_queryable'=>true,
'show_ui'=>true,
'show_in_menu'=>true,
'query_var'=>true,
'rewrite'=>array('slug'=>'Property'),
'capability_type'=>'post',
'has_archive'=>true,
'hierarchical'=>false,
'menu_position'=>null,
'supports'=>array('title','editor','author','thumbnail','excerpt','comments')


	);
	register_post_type('Property',$args);
}
function task_Property_register_metabox(){
add_meta_box("cpt-id","Property Details","task_Property_call","Property","side","high");

}
add_action("add_meta_boxes","task_Property_register_metabox");
function task_Property_call($post){
	?>
	<p>
		<label>Property Name:</label>
		<?php $name=get_post_meta($post->ID,"property_update_name",true)?>
		<input type="text" value="<?php echo $name;  ?>" name="property_name" placeholder="Name">
	</p>
	<p>
		<label>Description:</label>
		<?php $description=get_post_meta($post->ID,"property_update_description",true)?>
		<input type="text" value="<?php echo $description; ?>" name="property_description" placeholder="Description">
	</p>

	<p>
		<label>Property Multiple Images:</label>
		<?php $image=get_post_meta($post->ID,"property_update_image",true)?>
		<input type="text" value="<?php echo $image; ?>" name="property_image" placeholder="Image">
	</p>

	<p>
		<label>Owner Name:</label>
		<?php $owner_name=get_post_meta($post->ID,"property_update_ownername",true)?>
		<input type="text" value="<?php echo $owner_name; ?>" name="property_ownername" placeholder="Owner Name">
	</p>

	<p>
		<label>Owner Pic:</label>
		<?php $pic=get_post_meta($post->ID,"property_update_ownerpic",true)?>
		<input type="text" value="<?php echo $pic; ?>" name="property_ownerpic" placeholder="Owner Pic">
	</p>

	<p>
		<label>Owner Contact Number:</label>
		<?php $number=get_post_meta($post->ID,"property_update_number",true)?>
		<input type="number" value="<?php echo $number; ?>" name="property_number" placeholder="Number">
	</p>

	<p>
		<label>Property Address:</label>
		<?php $address=get_post_meta($post->ID,"property_update_address",true)?>
		<input type="text" value="<?php echo $address; ?>" name="property_address" placeholder="Address">
	</p>

	<p>
		<label>Owner Address:</label>
		<?php $owner_address=get_post_meta($post->ID,"property_update_owneraddress",true)?>
		<input type="text" value="<?php echo $owner_address; ?>" name="property_owneraddress" placeholder="Owner Address">
	</p>

	<p>
		<label>longitude:</label>
		<?php $longitude=get_post_meta($post->ID,"property_update_longitude",true)?>
		<input type="text" value="<?php echo $longitude; ?>" name="property_longitude" placeholder="Longitude">
	</p>

	<p>
		<label>Latitude:</label>
		<?php $latitude=get_post_meta($post->ID,"property_update_latitude",true)?>
		<input type="text" value="<?php echo $latitude; ?>" name="property_latitude" placeholder="Latitude">
	</p>

	<p>
		<label>Rent:</label>
		<?php $rent=get_post_meta($post->ID,"property_update_rent",true)?>
		<input type="text" value="<?php echo $rent; ?>" name="property_rent" placeholder="Rent">
	</p>

	<p>
		<label>Sale:</label>
		<?php $sale=get_post_meta($post->ID,"property_update_sale",true)?>
		<input type="text" value="<?php echo $sale; ?>" name="property_sale" placeholder="Sale">
	</p>
	<?php
}
function task_Property_save_values($post_id,$post){
$property_name=isset($_POST['property_name'])?$_POST['property_name']:"";
$property_description=isset($_POST['property_description'])?$_POST['property_description']:"";
$property_image=isset($_POST['property_image'])?$_POST['property_image']:"";
$property_ownername=isset($_POST['property_ownername'])?$_POST['property_ownername']:"";
$property_ownerpic=isset($_POST['property_ownerpic'])?$_POST['property_ownerpic']:"";
$property_number=isset($_POST['property_number'])?$_POST['property_number']:"";
$property_address=isset($_POST['property_address'])?$_POST['property_address']:"";
$property_owneraddress=isset($_POST['property_owneraddress'])?$_POST['property_owneraddress']:"";
$property_longitude=isset($_POST['property_longitude'])?$_POST['property_longitude']:"";
$property_latitude=isset($_POST['property_latitude'])?$_POST['property_latitude']:"";
$property_rent=isset($_POST['property_rent'])?$_POST['property_rent']:"";
$property_sale=isset($_POST['property_sale'])?$_POST['property_sale']:"";


update_post_meta($post_id,"property_update_name",$property_name);
update_post_meta($post_id,"property_update_description",$property_description);
update_post_meta($post_id,"property_update_image",$property_image);
update_post_meta($post_id,"property_update_ownername",$property_ownername);
update_post_meta($post_id,"property_update_ownerpic",$property_ownerpic);
update_post_meta($post_id,"property_update_number",$property_number);
update_post_meta($post_id,"property_update_address",$property_address);
update_post_meta($post_id,"property_update_owneraddress",$property_owneraddress);
update_post_meta($post_id,"property_update_longitude",$property_longitude);
update_post_meta($post_id,"property_update_latitude",$property_latitude);
update_post_meta($post_id,"property_update_rent",$property_rent);
update_post_meta($post_id,"property_update_sale",$property_sale);


}
add_action("save_post","task_Property_save_values",10,2);

function task_Property_custom_columns($columns){
$columns=array(
"cb"=>"<input type='checkbox'/>",
"title"=>"Property Name",
"description"=>"Description",
"property_image"=>"Property Multiple Images",
"owner_name"=>"Owner's Name",
"owner_pic"=>"Owner's Pic",
"owner_contact_number"=>"Owner's Contact Number",
"property_address"=>"Property Address",
"owner_address"=>"Owner's Address",
"longitude"=>"Longitude",
"latitude"=>"Latitude",
"cb1"=>"<input type='checkbox'/>Rent",
"cb2"=>"<input type='checkbox'/>Sale",
"date"=>"Date"
);
	return $columns;
}
add_action("manage_property_posts_columns","task_Property_custom_columns");


function task_Property_custom_columns_data($column,$post_id){
switch($column){
case 'property_name':
$_property_name= get_post_meta($post_id,"property_update_name",true);
echo $_property_name;
break;
case 'property_description';
$_property_description=get_post_meta($post_id,"property_update_description",true);
echo $_property_description;
break;
case 'property_image';
$_property_image=get_post_meta($post_id,"property_update_image",true);
echo $_property_image;
break;
case 'property_ownername';
$_property_ownername=get_post_meta($post_id,"property_update_ownername",true);
echo $_property_ownername;
break;
case 'property_ownerpic';
$_property_ownerpic=get_post_meta($post_id,"property_update_ownerpic",true);
echo $_property_ownerpic;
break;
case 'property_number';
$_property_number=get_post_meta($post_id,"property_update_number",true);
echo $_property_number;
break;
case 'property_address';
$_property_address=get_post_meta($post_id,"property_update_address",true);
echo $_property_address;
break;
case 'property_owneraddress';
$_property_owneraddress=get_post_meta($post_id,"property_update_owneraddress",true);
echo $_property_owneraddress;
break;
case 'property_longitude';
$_property_longitude=get_post_meta($post_id,"property_update_longitude",true);
echo $_property_longitude;
break;
case 'property_latitude';
$_property_latitude=get_post_meta($post_id,"property_update_latitude",true);
echo $_property_latitude;
break;
case 'property_rent';
$_property_rent=get_post_meta($post_id,"property_update_rent",true);
echo $_property_rent;
break;

case 'property_sale';
$_property_sale=get_post_meta($post_id,"property_update_sale",true);
echo $_property_sale;

}



}
add_action("manage_property_posts_custom_column","task_Property_custom_columns_data",10,2);

//Tag Taxonomy
function task_Property_taxonomy(){

	$labels=array(
		'name'=>__('Property'),
		'singular_name'=>__('Property'),
		'menu_name'=>__('Property'),
		'all_items'=>__('All Property','Property'),
		'parent_item'=>__('Parent Property','Property'),
		'parent_item_colon'=>__('Parent Property:','Property'),
		'new_item_name'=>__('New Item Property','Property'),
		'add_new_item'=>__('Add New Property','Property'),
		'edit_item'=>__('Edit Property','Property'),
		'update_item'=>__('Update Property','Property'),
		'view_item'=>__('View Property','Property'),
		'separate_items_with_commas'=>__('Separate Property with commas','Property'),
		'add_or_remove_items'=>__('Add or Remove Property','Property'),
		'choose_from_most_used'=>__('Choose From the most','Property'),
		'popular_items'=>__('Popular Property','Property'),
		'search_items'=>__('Search Property','Property'),
		'not_found'=>__('Not Found','Property'),
		'no_terms'=>__('No Terms','Property'),
		'items_list'=>__('Property List','Property'),
		'items_list_navigation'=>__('Property List Navigation','Property'),
	);

	$args=array(
		'labels'=>$labels,
		'hierarchical'=>false,
		'public'=>true,
		'show_ui'=>true,
		'show_admin_column'=>true,
		'show_in_nav_menus'=>true,
		'show_tagcloud'=>true,
);
	register_taxonomy('Property',array('post'),$args);
}
add_action('init','task_Property_taxonomy',0);


//Category Taxonomy



function task_Property_category_taxonomy(){

	$labels=array(
		'name'=>__('Property'),
		'singular_name'=>__('Property'),
		'menu_name'=>__('Property'),
		'all_items'=>__('All Property','Property'),
		'parent_item'=>__('Parent Property','Property'),
		'parent_item_colon'=>__('Parent Property:','Property'),
		'new_item_name'=>__('New Item Property','Property'),
		'add_new_item'=>__('Add New Property','Property'),
		'edit_item'=>__('Edit Property','Property'),
		'update_item'=>__('Update Property','Property'),
		'view_item'=>__('View Property','Property'),
		'separate_items_with_commas'=>__('Separate Property with commas','Property'),
		'add_or_remove_items'=>__('Add or Remove Property','Property'),
		'choose_from_most_used'=>__('Choose From the most','Property'),
		'popular_items'=>__('Popular Property','Property'),
		'search_items'=>__('Search Property','Property'),
		'not_found'=>__('Not Found','Property'),
		'no_terms'=>__('No Terms','Property'),
		'items_list'=>__('Property List','Property'),
		'items_list_navigation'=>__('Property List Navigation','Property'),
	);

	$args=array(
		'labels'=>$labels,
		'hierarchical'=>true,
		'public'=>true,
		'show_ui'=>true,
		'show_admin_column'=>true,
		'show_in_nav_menus'=>true,
		'show_tagcloud'=>true,
);
	register_taxonomy('Property',array('post'),$args);
}
add_action('init','task_Property_category_taxonomy',0);
?>