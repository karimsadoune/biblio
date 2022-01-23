<?php

$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));

$ISBN = $_POST['ISBN'];
$req=" DELETE FROM livre WHERE ISBN='$ISBN' ";
mysqli_query($link,$req);


echo '<meta http-equiv="refresh" content="3;URL=index.php">';
?>
<script type="text/javascript">
confirm ("êtes-vous sûr ?");
</script>