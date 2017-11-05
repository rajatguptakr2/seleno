<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$fvalid[] = array("field"=>"fname","label"=>"First Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"lname","label"=>"Last Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"email","label"=>"Email","rules"=>"required|is_unique[userinfo.email]");
$fvalid[] = array("field"=>"contactno","label"=>"Contact","rules"=>"required|numeric|min_length[10]|max_length[14]");
$fvalid[] = array("field"=>"password","label"=>"Password","rules"=>"required|min_length[6]|max_length[10]");
$fvalid[] = array("field"=>"cpassword","label"=>"Confirm Password","rules"=>"trim|required|matches[password]|min_length[6]|max_length[10]");
$config['auth/register'] = $fvalid;
unset($fvalid);



$fvalid[] = array("field"=>"email","label"=>"Email","rules"=>"required");
$fvalid[] = array("field"=>"password","label"=>"Password","rules"=>"required|min_length[6]|max_length[10]");
$config['auth/login'] = $fvalid;
unset($fvalid);


$fvalid[] = array("field"=>"fname","label"=>"First Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"lname","label"=>"Last Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"email","label"=>"Email","rules"=>"required|is_unique[userinfo.email]");
$fvalid[] = array("field"=>"contactno","label"=>"Contact","rules"=>"required|numeric|min_length[10]|max_length[14]");
//$fvalid[] = array("field"=>"password","label"=>"Password","rules"=>"required|min_length[6]|max_length[10]");
//$fvalid[] = array("field"=>"cpassword","label"=>"Confirm Password","rules"=>"trim|required|matches[password]|min_length[6]|max_length[10]");
$config['dashboard/add'] = $fvalid;
unset($fvalid);



$fvalid[] = array("field"=>"fname","label"=>"First Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"lname","label"=>"Last Name","rules"=>"required|alpha");
$fvalid[] = array("field"=>"email","label"=>"Email","rules"=>"required|is_unique[userinfo.email]");
//$fvalid[] = array("field"=>"contactno","label"=>"Contact","rules"=>"required|numeric|min_length[10]|max_length[14]");
//$fvalid[] = array("field"=>"password","label"=>"Password","rules"=>"required|min_length[6]|max_length[10]");
//$fvalid[] = array("field"=>"cpassword","label"=>"Confirm Password","rules"=>"trim|required|matches[password]|min_length[6]|max_length[10]");
$config['dashboard/update'] = $fvalid;
unset($fvalid);


$fvalid[] = array("field"=>"menu_name","label"=>"Menu Name","rules"=>"required|trim|is_unique[lz_menu.menu_name]");
$config['menu/add'] = $fvalid;
unset($fvalid);

$fvalid[] = array("field"=>"menu_id","label"=>"Menu Name","rules"=>"required");
$fvalid[] = array("field"=>"submenu_name","label"=>"Sub Menu Name","rules"=>"required|trim|is_unique[lz_submenu.submenu_name]");
$config['submenu/add'] = $fvalid;
unset($fvalid);

//$fvalid[] = array("field"=>"set_id","label"=>"Menu Name","rules"=>"required");
$fvalid[] = array("field"=>"set_name","label"=>"Set Name","rules"=>"required|trim|is_unique[lz_sets.set_name]");
//$fvalid[] = array("field"=>"set_type","label"=>"Set Type","rules"=>"required|trim|is_unique[lz_sets.set_type]");
$config['set/add'] = $fvalid;
unset($fvalid);
    
//$fvalid[] = array("field"=>"set_id","label"=>"Menu Name","rules"=>"required");
$fvalid[] = array("field"=>"set_name","label"=>"Set Name","rules"=>"required|trim|is_unique[lz_sets.set_name]");
//$fvalid[] = array("field"=>"set_type","label"=>"Set Type","rules"=>"required|trim|is_unique[lz_sets.set_type]");
$config['question/add'] = $fvalid;
unset($fvalid);
