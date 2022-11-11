<?php 
    include("top.html");
?>
<div class="form">
    <p class="heading">Withdrawal Slip</p>
    <form action="transaction.php" method="POST">
        <h2>Enter the amount you want to deposit:</h2>
        <input name="deposit" type="number" placeholder="Enter 0.00">
        <input type="submit" value="Deposit" class="button" style="color: black;">
    </form>
</div>
<a class="back" href="index.php">Back</a>