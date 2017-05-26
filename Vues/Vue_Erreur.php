<?php require("Vue_Entete.php"); ?>
<body>
<div>
    <?php require("Vue_Menu.php"); ?>
</div>
<?php
echo "<h2>".$erreur."</h2>";
?>
    <a class="waves-effect waves-light btn-large darken-4 white-text retour" href="javascript:history.go(-1)"><i class="material-icons left">cloud</i>Retour</a>

</body>
</html>