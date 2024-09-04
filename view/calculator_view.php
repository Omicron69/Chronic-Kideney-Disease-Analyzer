<!DOCTYPE html>
<html>
  <head>
    <title>eGFR Calculation</title>
    <link rel="stylesheet" href="../style/calculation.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  </head>
  <body>

    <!-- This is the nav bar -->
    <header class="navbar">
      <img class="logo" src="../assets/CKD Logo.png" alt="log for CKD">
      <nav>
          <ul class="nav_links">
              <li class="nav1"><a href="../view/patientDashboard_view.php">Home</a></li>
              <li class="nav2"><a href="../view/calculator_view.php">Calculate eGFR</a></li>
              <li class="nav3"><a href="#">Know about your Kidney</a></li>
              <li><a href="#">About Us</a></li>
          </ul>
      </nav>
      <a class="btm" href="../controller/signup.php"><button>Login/Sign-Up</button></a>
  </header>

    <h1 class="startpage">Calculate eGFR</h1>
    <!-- <h1 class="startpage">What is eGFR?</h1> -->
    <!-- <h2 class="info">Glomerular filtration rate (GFR) is the best overall index of kidney function. Normal GFR varies according to age, sex, and body size, and declines with age. The National Kidney Foundation recommends using the CKD-EPI Creatinine Equation (2021) to estimate GFR. </h2> -->

    <form>
      <h2 class="entertl">Creatinine Level in (umol/l):</h2>
      <input type="text" class="crtn" id="creatinine" placeholder="Enter Creatinine Level (umol/l)">
      <br>
      <h2 class="entertl">Age (Years):</h2>
      <input type="text" class="old" id="age" placeholder="Enter Age (Years)">
      <br>
      <br>
      <h2 class="radiotitle">Gender:</h2>
      <input type="radio" class="radiobtn" name="gender" value="M" id="male">
      <label for="gender" class="lbl">Male</label>
      <input type="radio" class="radiobtn" name="gender" value="F" id="female">
      <label for="gender" class="lbl">Female</label>
    
      <h2 class="radiotitle">Ethnicity:</h2>
      <input type="radio" name="race" value="B" id="black">
      <label for="race" class="lbl">Black</label> 
      <input type="radio" name="race" value="NB" id="nonblack">
      <label for="race" class="lbl">Other</label>
      <br>
      <br>
      <button type="button" onclick="calculateEGFR()">Calculate eGFR</button>
    </form>

    <div id="result" class="calc"></div>
    


    <script>
      function calculateEGFR() {
        let creatinine = document.querySelector("#creatinine").value;
        let age = document.querySelector("#age").value;
        let gender = "";
        if (document.querySelector("#male").checked) {
          gender = "M";
        } else if (document.querySelector("#female").checked) {
          gender = "F";
        }

        let race = "";
        if (document.querySelector("#nonblack").checked) {
          race = "NB";
        } else if (document.querySelector("#black").checked) {
          race = "B";
       
        }


        umol = creatinine/88.4;

        // eGFR calculation
        let egfr;
        if (gender === "M" && race === "NB") {
          egfr = 186 * (Math.pow(umol, -1.154)) * (Math.pow(age, -0.203));
        } else if (gender === "M" && race === "B") {
          egfr = 186 * (Math.pow(umol, -1.154)) * Math.pow(age, -0.203) * 1.210;
        } else if (gender === "F" && race === "NB") {
          egfr = 186 * (Math.pow(umol, -1.154)) * (Math.pow(age, -0.203)) * 0.742;
        }
        else if (gender === "F" && race === "B") {
          egfr = 186 * (Math.pow(umol, -1.154)) * (Math.pow(age, -0.203)) * (0.742) * 1.210;
        }

        let stage;
        if (egfr >= 90) {
          stage = "Normal or high GFR";
        } else if (egfr >= 60) {
          stage = "Mildly reduced GFR";
        } else if (egfr >= 30) {
        stage = "Moderately reduced GFR";
        } else if (egfr >= 15) {
        stage = "Severely reduced GFR";
        } else if (egfr >= 0) {
        stage = "Kidney failure";

        }

        document.querySelector("#result").innerHTML = "eGFR: " + egfr.toFixed(2) + " mL/min/1.73 m² <br> Stage: " + stage;

        function myFunction() {
          document.getElementById("Normal or high GFR").style.color = "#ff0000";
          document.getElementById("Mildly reduced GFR").style.color = "magenta";
          document.getElementById("Moderately reduced GFR").style.color = "blue";
          document.getElementById("Kidney failure").style.color = "lightblue";
}

}


</script>

</body>
</html>