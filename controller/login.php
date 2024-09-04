<?php
require_once ("../model/patient.php");  // for patient class access
require_once ("../model/dataAccess.php"); //for database access

session_start();
if (!isset($_SESSION["patientId"])) //checking if a session variable is set 
{
    $_SESSION["patientId"] = "";   // if it is not set then set to nothing for new patient
}
if (isset($_REQUEST["userName"]) && isset($_REQUEST["password"])) // condition to check if username and password are set
    {
        $user = $_REQUEST["userName"];    // requesting values from the form of the web page
        $password = $_REQUEST["password"];  

        $patient = logIn(($user),($password)); // calling the login function with the values set above
        if ($patient != null)
        {
            $_SESSION["patientId"] = $patient->patientId; // sets patientid as a session variable
            $_SESSION["firstName"] = $patient->firstName;
            header("Location: ../view/homepage_view.php"); /* Redirect browser to homepage*/
        }
        else
        {
            echo "try again"; //Redirect browser
        }
    }
    require_once("../view/loginPage_view.php");
?>