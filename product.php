<?php
require "settings/init.php";

$prodId = $_GET["prodId"];

$produkter = $db->sql(sql: "SELECT * FROM produkter WHERE prodId = :prodId", binds: [":prodId" => $prodId]);
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
         <div class="col-12 col-md-6 bg-pink">
             <?php
             echo $produkt->prodName;
             echo $produkt->prodDescription;
             echo $produkt->prodDato;
             ?>
        </div>
    </div>
    <?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
