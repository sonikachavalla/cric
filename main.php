
<?php
$res=$_GET['match_id'];
session_start();
$_SESSION['id']=$res;
?>
<html>
<frameset rows="23%,*" frameborder="0">
<frame src="index.php"></frame>
<frameset cols="75%,*" frameborder="0">
<frame src="details.php"></frame>
<frame src="sonika.php"></frame>
</frameset>
</frameset>

</html>