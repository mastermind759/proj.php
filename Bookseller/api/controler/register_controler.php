<?php


  include '../Model/register_model.php';

	$obj = new register_model();

    
     switch ($_GET['operation']) {
     	
     	case 'insert':
     		$obj->adduser();
     		break;

     		case 'list':
     		$obj->listuser();
     		break;

     		
     	default:
     		
     		break;
     }
  


?>