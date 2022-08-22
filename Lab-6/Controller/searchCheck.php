
<?php 
     include "../Model/prescriptionModel.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
  <style>
      {
			margin: 0;
			padding: 0;
			
		}	
        fieldset{
			
            background: #fefbd8;
            height: 95vh;
            margin-left: 80px;
		    margin-right: 78px;
            margin-top: 12px;
			background-size: cover;
			background-position: center;
		}
        fieldset body{
		color:black;
		background-size: 300px;
		background-color: #fefbd8;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 30px;
		position: absolute;
		top: 10%;
		right: 8%;
		bottom: 8%;
		left: 8%;
	}
    img{
                
                position: absolute;
                top: 3%;
                left: 10%;
            }
    
    table {
           width: 100%;
           border-collapse: collapse;
           position: absolute;
           top: 50px;
        }

        table, td, th {
           color: black;
           border: 1px solid black;
           padding: 5px;
           background-color: yellow;

        }

        th {text-align: left;
        }

       
  </style>
  <body>
  

<?php 
    if(isset($_GET['name']))
    

    $allSearchedname = searchUser($_GET['name']);

?> 
<div class="form">
<form>
    <table>
        <tr>
                
                <td>Name</td>
                <td>Age</td>
                <td>Medicine</td>
                <td>No Of Medicine</td>
                <td>Description</td>
                
                            </tr>
            <tr>
           
             <tr>
               <?php 
                 echo "<td>" . $allSearchedname['name']  . "</td>";
                 echo "<td>" . $allSearchedname['age']  . "</td>";
                 echo "<td>" . $allSearchedname['medicine'] . "</td>";
                 echo "<td>" . $allSearchedname['no_of_medicine'] . "</td>";
                 echo "<td>" . $allSearchedname['description'] . "</td>";
   
               ?>             
                   
              

                
            </tr>
            
          
    </table>
    
</form>
</div>
 
</body>
</html>

