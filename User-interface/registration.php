<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/IT-ELECT-FINALPROJ-main/User-interface/registration.css">
  <title>Document</title>
</head>
<body>
  <div class="whole-container">
  <div class="right-container">
        <h2>EDUCATIVO</h2>
        <h1>Welcome to <br>EDUCATIVO</h1>
  </div>
    <div class="left-container">
          <div class="items">
          <h1>Sign Up</h1>
          <p>Create a account to access our latest courses </p>
          </div>
          <form class="signupForm" action="registrationAction">
                  <div class="holder1">
                    <input type="text" id="fname" placeholder="First Name" required>
                    <input type="text" id="lname" placeholder="Last Name" required>
                  </div>

                  <div class="holder2"> 
                    <input type="text" id="username" placeholder="Username" required>
                    <input type="text" id="email"placeholder="Email/Phone Number" required>
                  </div> 

                  <div class="holder3">
                    <input type="password" id="password" placeholder="Password" required>
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                  </div>

                  <div class="holder4">
                    <input type="text" id="gender" name="gender" list="genderList" placeholder="Gender" required>
                    <datalist id="genderList">
                      <option value="Male">
                      <option value="Female">
                      <option value="Other">
                    </datalist>
                    <label>Birthday:</label>
                    <input type="date" id="birthday" name="birthday" placeholder="YYYY-MM-DD" required>
                  </div>
          
                  <div class="Terms-condition">
                      <label><input type="checkbox">I've read and agree with <a href="">Terms of Service</a> and our <a href="">Privacy Policy</a></label>
                  </div>
                  <button>Sign Up</button>
                  </form>
</body>
</html>