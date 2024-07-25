<?php // HEADER  
    require "templates/header.php";
?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
?>
    <li class="list-group-item"><?php echo $_GET["name"] ?></li>
    <li class="list-group-item"><?php echo $_GET["number"] ?></li>
    <li class="list-group-item"><?php echo $_GET["email"] ?></li>
    <li class="list-group-item"><?php echo $_GET["password"] ?></li>
    <li class="list-group-item"><?php echo $_GET["text"] ?></li>

</ul>
<?php // FOOTER 
    require "templates/footer.php";
?>