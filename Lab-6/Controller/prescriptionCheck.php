<?php 
	session_start();
	require('../Model/prescriptionModel.php');


	
	if(isset($_REQUEST['submit'])){

		
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		$medicine = $_REQUEST['medicine'];
		$no_of_medicine = $_REQUEST['no_of_medicine'];
		$description = $_REQUEST['description'];
		$file = $_FILES['image'];

		$filename=$file['name'];
		$filepath=$file['tmp_name'];
		$fileerror=$file['error'];

		if($fileerror == 0){
			$destfile='../View/Upload/'.$filename;

			move_uploaded_file($filepath, $destfile);
			

		if($name != null && $age != null && $medicine != null && $no_of_medicine != null && $destfile != null &&  $description != null )
		{
			
			$status=addprescription($name, $age, $medicine, $no_of_medicine,$destfile,$description);
            if($status){
    			header('location: ../View/prescription.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
		}
		else{
    		header('location: ../View/prescription.php?msg=error');
    	}
	}
}

?>