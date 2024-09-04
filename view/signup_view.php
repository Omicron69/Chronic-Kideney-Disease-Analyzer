<!doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../style/signup.css">
    <title>Sign Up</title>
    </head>
    <header>
        <h1>Sign Up</h1>
    </header>
    <form action="../controller/signup.php" method="POST">  
        <label for="first-name">First Name:</label>
        <input type="text" id="firstName" name="firstName" autocomplete="off" required pattern="[A-Za-z]+" title="Please enter a valid first name (letters only)">

        <label for="last-name">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required pattern="[A-Za-z]+" title="Please enter a valid last name (letters only)">

        <label for="date-of-birth">Date of Birth:</label>
        <input type="date" id="date0fBirth" name="dateOfBirth" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="username">Username:</label>
        <input type="text" id="userName" name="userName" autocomplete="off" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="off" required>

        <button type="submit" id="submit" name="submit">Create account</button>
        <br></br>
    </form>
    <form action="../controller/login.php">
            <button type="submit" name= "login">Login</button>
    </form>    
</html>