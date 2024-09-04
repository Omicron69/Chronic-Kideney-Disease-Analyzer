<?php
    require_once "../model/patient.php";
    require_once "../model/dataAccess.php";

    if (!isset($_POST["search"]))
    {
        $patients = getAllPatients();
    }
    else {
        $search = $_POST["search"];
        $patients = getPatientBypatientId($search);
    }    
    require_once "../view/patientlist_view.php";
?>