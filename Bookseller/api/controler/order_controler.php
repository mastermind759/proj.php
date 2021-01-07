<?php

include '../Model/order_model.php';


		$obj = new order_model();

    
     switch ($_GET['operation']) {
     	
     	case 'insert':
     		$obj->addorder();
     		break;

     		case 'list':
     		$obj->listorder();
     		break;

     		
     	
     	default:
     		echo "Hattttt";
     		break;
     }
  

?>