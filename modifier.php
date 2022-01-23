<?php

$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));
if(isset($_POST['enrg']))
{	
$ISBN = $_POST['ISBN'];
$titre = $_POST['titre'];
$req="UPDATE livre SET titre='$titre' WHERE ISBN='$ISBN'";
mysqli_query($link,$req);
}

echo '<meta http-equiv="refresh" content="2;URL=index.php">';
?>
<script type="text/javascript">
alert ("Merci");
</script>