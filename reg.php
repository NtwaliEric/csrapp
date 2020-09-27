<?php
try{
$con = new PDO('mysql:host=localhost; dbname=csrapp','root', ''); 
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['reg'])){
	$ID  = '';
	$serv = $_POST['serv'];
	$chap = $_POST ['chap'];
	$fname = $_POST['fname'];
	$nid = $_POST['nid'];
	$tel = $_POST['tel'];
	$dis = $_POST['dis'];
	$sec = $_POST['sec'];
	$cell = $_POST['cell'];
	$vil = $_POST['vil'];
	$date = date('Y-m-d h:i:s');

$count=$con->prepare("SELECT serv FROM christian_info WHERE serv=:serv");

$count->bindParam(":serv",$serv);

$count->execute();

$no=$count->rowCount();

if($no >1 ){

 echo "<script>alert('Iri Teraniro Ryuzuye Mwakwiyandikisha Murikurikira'); window.location='cregister.php'</script>";   

}

$sql = "SELECT COUNT(*) AS num FROM `christian_info` WHERE fname = :fname";

$stmt = $con->prepare($sql);
 
$stmt->bindValue(':fname', $fname);
 
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
if($row['num'] > 0){
	echo "<script>alert('Mwamaze Kwiyandikisha Mumateraniro!'); window.location='cregister.php'</script>";
    

}
else{

$insert ='INSERT INTO christian_info VALUES(:ID,:serv,:chap,:fname,:nid,:tel,:dis,:sec,:cell,:vill,:dates)';
$query=$con->prepare($insert);
$query->bindParam(':ID',$ID,PDO::PARAM_INT);
$query->bindParam(':serv',$serv,PDO::PARAM_STR);
$query->bindParam(':chap',$chap,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':nid',$nid,PDO::PARAM_STR);
$query->bindParam(':tel',$tel,PDO::PARAM_STR);
$query->bindParam(':dis',$dis,PDO::PARAM_STR);
$query->bindParam(':sec',$sec,PDO::PARAM_STR);
$query->bindParam(':cell',$cell,PDO::PARAM_STR);
$query->bindParam(':vill',$vil,PDO::PARAM_STR);
$query->bindParam(':dates',$date,PDO::PARAM_STR);


$results = $query->execute();
echo "<script>alert('Amakuru Yabitswe Neza!'); window.location='cregister.php'</script>";

$con=null;
}
}
}
catch(PDOExeption $e){
echo $e->getmessage();
}
?>
