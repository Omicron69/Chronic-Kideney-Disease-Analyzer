<?php
    $pdo = new PDO("mysql:host=localhost;dbname=ckd",
    $username = "CKD",
    $password = "abc123",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
   
    function getAllPatients() 
    {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient");
        $statement->execute();
        $results = $statement->fetchALL(PDO::FETCH_CLASS,"patient");
        return $results;
    }
    function getPatientBypatientId($patientId)
    {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient WHERE patientId = ?");
        $statement->execute([$patientId]);
        $results = $statement->fetchAll(PDO::FETCH_CLASS,"patient");
        return $results;
    }
    function logIn($userName,$password){ ## login function

        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM patient WHERE patient.userName = ?"); ## checks database for for values
        $statement->execute([$userName]); ## binds the parameter values to the placeholders
        $result = $statement->fetchObject('patient'); ## retrieves the result object
        if ($result && password_verify($password, $result->password)){
            return $result;
        }else {
            return false;
        }
    }
    function newPatient($firstName, $lastName, $dateOfBirth, $email, $userName, $password)
{
    global $pdo;

    $type = array('cost' => 12);
    $securePassword = password_hash($password, PASSWORD_BCRYPT, $type);

    $sql = "INSERT INTO patient (firstName, lastName, dateOfBirth, email, userName, password) 
        VALUES (:firstName, :lastName, :dateOfBirth, :email, :userName, :password)";
    $statement = $pdo->prepare($sql);

    $statement->bindParam(':firstName', $firstName);
    $statement->bindParam(':lastName', $lastName);
    $statement->bindParam(':dateOfBirth', $dateOfBirth);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':userName', $userName);
    $statement->bindParam(':password', $securePassword);

    try {
        $statement->execute();
        echo 'Account created successfully.';
    } catch (PDOException $e) {
        echo 'Error inserting patient data: ' . $e->getMessage();
        exit;
    }
}
?>
