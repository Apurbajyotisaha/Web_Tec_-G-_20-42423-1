<?php 
    session_start();
	require('../Model/bloodModel.php');
	   
    if(isset($_POST['donarid1']) && isset ($_POST['donarname1']) && isset ($_POST['age1']) && isset ($_POST['bloodgroup1']) && isset ($_POST['phone1']) && isset ($_POST['address1']) )
{
	
	     $donarid = $_POST['donarid1'];
	     $donarname = $_POST['donarname1'];
	     $age = $_POST['age1'];
	     $bloodgroup = $_POST['bloodgroup1'];
	     $phone = $_POST['phone1'];
	     $address = $_POST['address1'];
        

	{
		$status = adddonar($donarid,$donarname, $age, $bloodgroup, $phone,$address);
		if($status)
		{
            
            echo "Submit Successful";
        }
        else
        {
           header('location: ../View/bloodDonate.php?msg=error');
        }


	}
}

?>