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
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center py-3">My BookShop</h1>
    <!-- Account Info -->
    <div class="container">
        <div class="account-info mb-5">
            <h2>Welcome <?php echo $premium1->getFullName() ?></h2>
            <div class="premium">Your Premium Level is <?php echo $premium1->getLevel() ?> - You are eligible for a <?php echo $premium1->getSale() ?>% discount</div>    
        </div>
        <!-- Cart -->
        <div class="cart mb-5">
            <h3 class="text-center mb-3">Your Cart</h3>
            <div class="product d-flex justify-content-between">
                <div class="info"><?php echo $book1->getFullInfo() ?></div>
                <div class="info"><?php echo $book2->getFullInfo() ?></div>
                <div class="info"><?php echo $audio1->getFullInfo() ?></div>
                <div class="info"><?php echo $audio2->getFullInfo() ?></div>
            </div>
        </div>
        <div class="total text-center">
            <div class="rough-total">Your total is: <?php echo $book1->getPrice() + $book2->getPrice() + $audio1->getPrice() + $audio2->getPrice()?>€</div>
            <div class="discount">With yours <?php echo $premium1->getSale() ?>% discount</div>
            <div class="final-price">Your final price is
                <?php $sum = $book1->getPrice() + $book2->getPrice() + $audio1->getPrice() + $audio2->getPrice();
                echo number_format($sum - ($sum * 15 / 100), 2);
                ?>
            </div>
        </div>
    </div>
    

</body>
</html>