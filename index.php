<?php 
$username = 'Camilla';
$greetings = 'Hello,' . $username . '!';
$offers = [
    [ $items = 'Cake',],
    [ $quantity = '3',],
    [ $price = 45,],
    [ $discountedprice = 35,]
];
$usual_price = $quantity * $price;
$offer_price = $quantity * $discountedprice;
$saving = $usual_price  -  $offer_price  ;


?>

<?php include 'includes/header.php'?>
<DOCTYPE html>
    <body>
            <h2><?= $greetings ?></h2>
            <p class = button> Save $<?= $saving ?></p>
            <p>Thank you for visiting our site. You visited our shop on the right time as we have special offers for you!</p>
            <p>The original price per piece is $<?= $usual_price  ?> </p>
            <p> If you buy 3 Cakes, you have a discount of $<?= $offer_price ?> 

            
</body>
<?php include 'includes/footer.php'?>