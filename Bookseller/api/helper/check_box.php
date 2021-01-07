<!DOCTYPE html>
<html>
<head>
	<title>check_box</title>
	<link rel="stylesheet" type="text/css" href="check.css">
	<script type="text/javascript" src="check.js"></script>
</head>
<body>
   <button data-modal-target="#modal">Open Modal</button>
<div class="modal" id="modal">
    <div class="modal-header">
      <div class="title"></div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
       Your Product is added sucessfully
    </div>
     <div class="checkout">
      <form method="POST" action="#href">
      <input type="Submit" class="cheout-btn" name="" value="CheckOut">
    </form>
    </div>
  </div>
	 <div id="overlay"></div>
</body>
</html>