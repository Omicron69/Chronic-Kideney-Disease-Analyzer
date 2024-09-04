<?php
require_once("../model/patient.php");
require_once("../model/dataAccess.php");


if (isset($_POST['submit'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $email = $_POST["email"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    newPatient($firstName,$lastName,$dateOfBirth,$email,$userName,$password);
}
require_once("../view/signup_view.php");
?>