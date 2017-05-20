
<head>
    <?php include ('Configs/Config_css.php'); ?>
</head>
<?php
$res= recupTroc(52);
echo $res['photoTroc'];
echo "alexandrebottero.com/".$res['photoTroc'];
echo"<img src=\"alexandrebottero.com/".$res['photoTroc']."\"/>"
?>

<?php require("Vue_PiedDePage.php"); ?>
<?php include ('Configs/Config_js.php'); ?>
<script>
