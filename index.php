<?
define("SMARTY_DIR", "Smarty-3.1.29/libs/");

include(SMARTY_DIR."Smarty.class.php");
$smarty = new Smarty();

$title = "landing page";
$menu_data = Array(
		 "#features" 	=> "Features"
		,"#about" 		=> "About"
		,"#articles" 	=> "Articles"
		,"#contacts" 	=> "Contacts"
		);

$smarty->assign("title", $title);
$smarty->assign("menu_data", $menu_data);


$smarty->display('templates/main.tpl'); 
 
 


?>