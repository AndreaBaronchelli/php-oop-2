<?php
// Import proucts
require_once __DIR__ . '/partials/products.php';
//Import users
require_once __DIR__ . '/partials/users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My BookShop</h1>
    <!-- Account Info -->
    <div class="account-info">
        <h2>Welcome <?php echo $premium1->getFullName() ?></h2>
        <div class="premium">Your Premium Level is <?php echo $premium1->getLevel() ?></div>
        <div class="sale">You are eligible for a <?php echo $premium1->getSale() ?>% discount</div>
    </div>

    <!-- Cart -->
    <div class="cart">
        <h3>Your Cart</h3>
        <div class="product">
            <div class="info"><?php echo $book1->getFullInfo() ?></div>
            <div class="info"><?php echo $book2->getFullInfo() ?></div>
            <div class="info"><?php echo $audio1->getFullInfo() ?></div>
            <div class="info"><?php echo $audio2->getFullInfo() ?></div>
        </div>
    </div>

    <div class="total">
        <div class="rough-total">Your total is: <?php echo $book1->getPrice() + $book2->getPrice() + $audio1->getPrice() + $audio2->getPrice()?>€</div>
        <div class="discount">With yours <?php echo $premium1->getSale() ?>% discount</div>
        <div class="final-price">Your final price is 
            <?php $sum = $book1->getPrice() + $book2->getPrice() + $audio1->getPrice() + $audio2->getPrice();
            echo number_format($sum - ($sum * 15 / 100), 2);
            ?>
        </div>
    </div>
    

</body>
</html>