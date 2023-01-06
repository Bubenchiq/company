<?php
require "layouts/head.php";
include '../controllers/IndexController.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container py-2">
    <div class="d-flex">
        <div class="d-inline-block">
            <span>
                Number of donations:
                <?php
                echo $count;
                ?>
            </span>
        </div>
        <div class="d-inline-block row offset-md-4">
            <span>
                Total count:
                <?php
                echo $sum;
                ?>
            </span>
        </div>
    </div>
</div>
<div class="container py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Alias aliquid amet animi beatae earum enim eveniet expedita facere ipsam,
    ipsum iste natus, nihil non porro quae, quasi quidem tempora voluptatum.
</div>

</body>
</html>

<?php
require "layouts/foot.php"
?>
