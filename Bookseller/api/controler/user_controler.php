<?php
	
		

	include '../model/user_model.php';

		$obj = new user_model();

    
     switch ($_GET['operation']) {
     	
     	case 'insert':
     		$obj->adduser();
     		break;

     		case 'list':
     		$obj->listuser();
     		break;

     		case 'login':
     		$obj->login();
     		break;

               case 'check_username':
               $obj->check_username($_GET['puname']);
               break;
     	
     	default:
     		echo "Hattttt";
     		break;
     }


?>