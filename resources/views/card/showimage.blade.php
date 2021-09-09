@php

session_start();
$hn = "000035634";
// $hn = $_SESSION['hn'];
header("Content-type: image/jpeg");

	try {

        $myPDO = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        $myPDO -> exec("set names utf8");
        $myPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT image FROM patient_image WHERE hn = '".$hn."'  ";
		$query = $myPDO->query($sql);
		foreach($query as $row) {
			echo $row['image'];
		}

	} catch (PDOException $e) {
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : ".$e->getMessage();
	}

@endphp
