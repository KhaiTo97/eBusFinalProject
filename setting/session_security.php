<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

// Get Page Id
$page[] = "";
$getPage = mysqli_query($connect5,"SELECT * FROM `Pages` WHERE `PageName` = '".basename($_SERVER['PHP_SELF'])."'");
if (mysqli_num_rows($getPage) == 1){
while($r = mysqli_fetch_array($getPage)){
	$page[0] = $r['Page_Id'];
}
}else{
	echo "Please contact ADMINISTRATOR to verify page before continue";
	exit();
}

// Get User permission
$getUserPermission = mysqli_query($connect5, "
SELECT * FROM `Permission` 
WHERE `UserId` = '".$_SESSION['id']."'
AND `PageId` = '".$page[0]."'
");
$countUser = mysqli_num_rows($getUserPermission);

if ($countUser == 1){
	while ($r = mysqli_fetch_array($getUserPermission)){
		
	}
}else{
	echo "You don't have permission to view this page.";
}