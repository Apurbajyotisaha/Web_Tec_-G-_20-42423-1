<?php 

require_once '../Model/prescriptionModel.php';

if (deleteprescription($_GET['id'])) {
    header('Location: ../View/patientList.php');
}
 ?>