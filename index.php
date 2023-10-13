<?php
require "settings/init.php";

$produkter = $db->sql(sql: "SELECT * FROM produkter WHERE prodPrice > 200");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="All">
    <meta name="copyright" content="Information om copyright">

    <link href="css/_bootstrapComponents.scss" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
foreach ($produkter as $produkt){
    ?>

    <div class="row">
         <div class="col-12 col-md-6 bg-primary">
             <?php
             echo $produkt -> prodName;
             ?>
        </div>
    <div class="col-12 col-md-6">
        <?php
        echo number_format(num: $produkt->prodPrice, decimals: 2, decimal_separator: ",", thousands_separator: "_");
        ?>
         </div>
    </div>

    <?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
