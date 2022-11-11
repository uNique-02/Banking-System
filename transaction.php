<?php 
 include("top.html");
    
    if(isset($_POST["amount"])){
        withdraw();
    }
    else if(isset($_POST["deposit"])){
        deposit();
    }
function withdraw(){
    $amount = $_POST["amount"];
    $file = file_get_contents("balance.txt");
    $file = preg_replace('/[\$,]/', '', $file);
    $file = (double)$file;
    $amount = (double)$amount;
    if($file >= $amount){
        $balance = $file - $amount;
        file_put_contents("balance.txt", "$".sprintf("%.2f", $balance));
        successful();
    }
    else{
        error();
    }
}
function deposit(){
    $deposit = (double)$_POST["deposit"];
    $file = file_get_contents("balance.txt");
    $file = preg_replace('/[\$,]/', '', $file);
    echo $file;
    $file = (double)$file;
    $balance = $file + $deposit;
    file_put_contents("balance.txt", "$".sprintf("%.2f", $balance));
    successful();
}
function successful(){  
?>
<div class="form">
    <p class="heading">Congratulations</p>
    <p class="transacPrompt"> Your transaction is complete. </p>
</div>
<?php }

function error(){ ?>
<div class="form">
    <p class="heading">Error xxx</p>
    <p class="transacPrompt"> Your balance is not enough to do the transaction. Pls check your <a href="balance.php">balance</a> </p>
</div>
<?php }

?>
<a class="back" href="index.php">Back</a>
