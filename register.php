<?php
session_start();
include("loginheader.php");
include("dbconnection.php");

if(isset($_POST['submit']))
{

  $sql ="INSERT INTO user(title,username,city,area,phone,email,age,numofkids,insomaliland,howlong,password,hint,status) values('$_POST[title]','$_POST[username]','$_POST[city]','$_POST[area]','$_POST[phone]','$_POST[email]','$_POST[age]','$_POST[numofkids]','$_POST[insomaliland]','$_POST[howlong]','$_POST[password]','$_POST[hint]','$_POST[status]' )";
  if($qsql = mysqli_query($con,$sql))
  {
    echo "<div class='alert alert-success'>
    User Record Inserted successfully
    </div>";
  }
  else
  {
    echo mysqli_error($con);
  }
}
?>
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="images/undraw_survey_05s5.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="mb-4">
                  <h3>Register</h3>
                  <p class="mb-4">Already have an account? <span> <a href="./login.php" > Login</a></span></p>
                </div>
                <form action="" method="post">

                <div class="form-group first">
                    <h6 style = "color:#b7beca; font-size:15px;">Title</h6>
                    <select required placeholder="title" type="text" class="form-control" id="title" name="title">
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                    </select>
                  </div>


                  <div class="form-group first">
                    <h6 style = "color:#b7beca; font-size:15px;">Status</h6>
                    <select required placeholder="status" type="text" class="form-control" id="status" name="status">
                      <option>Married</option>
                      <option>Single</option>
                      <option>Widowed</option>
                    </select>
                  </div>

                  <div class="form-group first">
                    <input required placeholder="Full name" type="text" class="form-control" id="username" name="username">
                  </div>

                  <div class="form-group first">
                    <input required placeholder="Mobile" type="number" class="form-control" id="phone" name="phone">
                  </div>

                  <div class="form-group first">
                    <input required placeholder="Email" type="email" class="form-control" id="username" name="email">
                  </div>

                  <div class="form-group first">
                    <input required placeholder="City" type="text" class="form-control" id="username" name="city">
                  </div>

                  <div class="form-group first">
                    <input required placeholder="Area" type="text" class="form-control" id="username" name="area">
                  </div>

                  <div class="form-group first">
                    <h6 style = "color:#b7beca; font-size:15px;">Age group</h6>
                    <select required placeholder="Age group" type="text" class="form-control" id="username" name="age">
                      <option>18-25</option>
                      <option>26-32</option>
                      <option>33-40</option>
                      <option>41-50</option>
                      <option>51+</option>
                    </select>
                  </div>


                  <div class="form-group first">
                    <input required placeholder="No. of kids" type="text" class="form-control" id="numofkids" name="numofkids">



                    
                  </div>

                  <div class="form-group first">
                  <h6 style = "color:#b7beca; font-size:15px;">Are you in somaliland?</h6>
                
                  <select  required placeholder="Are you in somaliland?" type="text" class="form-control" id="insomaliland" name="insomaliland">
                      <option  value = "Yes">Yes</option>
                      <option value = "No">No</option>
                      
                    </select>
                
                </div>

                  <div class="form-group first">
                    <input placeholder="How long have you been in somaliland" type="text" class="form-control" id="howlong" name="howlong">
                  </div>
                  <div class="form-group last mb-4">
                    <input required placeholder="Password" type="password" name="password" class="form-control" id="password">  
                  </div>
                  <div class="form-group last mb-4">
                  <h6 style = "color:#b7beca; font-size:15px;">Password question</h6>
                    <input required placeholder="what was your first neighborhood called?" type="text" name="hint" class="form-control" id="password">  
                  </div>
                  
            <button type="submit" class="btn btn-success" name="submit">Register</button>
    
    
                  
                </form>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>

      <script> 
  var selectField = document.getElementById("insomaliland");
var inputField = document.getElementById("howlong");

selectField.addEventListener("change", function(e) {
  var selectValue = e.target.value;
  if (selectValue === "Yes") {
    inputField.style.display = "block";
  } else {
    inputField.style.display = "none";
  }
});

    
    </script>
</body>
</html>
