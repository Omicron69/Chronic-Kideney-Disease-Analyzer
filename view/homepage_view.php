<?php  
session_start();

echo $_SESSION["patientId"];
echo "welcome ", $_SESSION["firstName"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Home Page</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="../controller/logout.php">LogOut</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="about">
        <h2>About Us</h2>
        <p>Welcome to our website! We are a team of dedicated professionals providing top-notch services to our clients.</p>
      </section>
      <section id="services">
        <h2>Our Services</h2>
        <ul>
          <li>Service 1</li>
          <li>Service 2</li>
          <li>Service 3</li>
        </ul>
      </section>
      <section id="contact">
        <h2>Contact Us</h2>
        <form action="submit-form.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"><br><br>
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea><br><br>
          <input type="submit" value="Submit">
        </form>
      </section>
    </main>
    <footer>
      <p>Copyright © 2023 My Website</p>
    </footer>
  </body>
</html>
