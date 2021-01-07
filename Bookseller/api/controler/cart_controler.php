<?php


  include '../Model/cart_model.php';


		$obj = new cart_model();

    
     switch ($_GET['operation']) {
     	
     	case 'insert':
     		$obj->addproduct($_GET['user_id'],$_GET['book_id'],$_GET['book_title'],$_GET['book_price']);
     		break;

     		case 'list':
     		$obj->listproduct($_GET['user_id']);
     		break;

     		
     	
     	default:
     		echo "Hattttt";
     		break;
     }
  


?>