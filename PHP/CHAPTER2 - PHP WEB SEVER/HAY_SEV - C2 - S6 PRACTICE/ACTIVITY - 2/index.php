
<?php 
// include of header
include_once("includes/header.php");
//  include of pages 

$page = "home";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
include_once("pages/".$page.".php");

//  include of footer 

include_once("includes/footer.php");

