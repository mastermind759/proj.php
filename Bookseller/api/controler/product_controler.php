
<?php


  include '../Model/product_model.php';
  $obj = new product_model();

    
     switch ($_GET['operation']) {
     	
     	case 'insert':
     		$obj->addproduct();
     		break;

     		case 'list':
     		$obj->showproduct();
     		break;

     		case 'delete':
     		$obj->removeproduct();
     		break;
     	
     	default:
     		
     		break;
     }



?>
