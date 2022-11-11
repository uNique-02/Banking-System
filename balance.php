<?php 
    include("top.html");
    $file = file_get_contents("balance.txt")
?>
<div class="form">
    <p class="heading">Your current Balance</p>
    <p class="balance"><?php echo $file ?></p>
</div>

<a class="back" href="index.php">Back</a>

