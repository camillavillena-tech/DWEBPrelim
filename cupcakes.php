<?php 
$name = 'Camilla';
$greeting = 'Welcome Back, ' . $name .'!';
$product = 'cupcakes';
$cost = 1.92;
for ($i = 1; $i <=10; $i++){
    $subtotal = $cost * $i;
    $discount = ($i/100) * (4*$i);
    $totals = $subtotal - $discount;
}
?>
<?php include 'includes/header.php'?>
<DOCTYPE html>
    <body>
            <p><?= $greeting ?></p>
             <p>We have more discount price for you, but this time it's for <?=$product ?>!</p>

            <table>
            <tr>
                <th>Packs</th>
                <th>Price</th></tr>
            <tr>
            <tr>
                <td>1 Pack</td>
                <td>1.20</td></tr>
            <tr>
            <tr>
                <td>2 Packs</td>
                <td>3.68</td></tr>
            <tr>
            <tr>
                <td>3 Packs</td>
                <td>5.28</td></tr>
            <tr>
            <tr>
                <td>4 Packs</td>
                <td>6.72</td></tr>
            <tr>
            </table>

            
</body>

<?php include 'includes/footer.php'?>