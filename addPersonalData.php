<?php
//include("ProjectPage.html");

if(count($_POST)==0){
    
?>

<?php die();} 
else{
$con = mysqli_connect("localhost", "root", "", "universitydb");

if($con === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

extract($_POST);
$sql = "SELECT * FROM student_table WHERE id *****";
//$sql = "INSERT INTO student_table VALUES('$st_id', '$first_name', '$last_name', '$email', '$phone', '$s_id')";
//*********************************************************      form valedation else insert for all information ....*/
$result = mysqli_query($con,$sql);
if($result === FALSE){
// if(!strst($st_id, mysqli_error($con)) ){
if(strcontains(mysqli_error($con),$st_id)){?>
    <form method="post" action="personalData.php">
          <div class="form-group">
            <label for="InputId">Student ID :</label>
            <input type="text" name="st_id" class="form-control" id="InputId" aria-describedby="idHelp" autofocus>
            <span style= "color:red">*</span><br><br>
            <small id="idHelp" class="form-text text-muted">We'll never share your id with anyone else .</small>
          </div>

          <div class="form-group">
            <label for="InputFiratName">First Name :</label>
            <input type="text" name="first_name" class="form-control" id="InputFiratName" value= <?php echo $first_name;?>><br><br>
            <small id="firstNameHelp" class="form-text text-muted">Enter Your First Name .</small>
          </div>

          <div class="form-group">
            <label for="InputLastName">Last Name :</label>
            <input type="text" name="last_name" class="form-control" id="InputLastName" value= <?php echo $last_name;?>><br><br>
            <small id="lastNameHelp" class="form-text text-muted">Enter Your Last Name .</small>
          </div>

          <div class="form-group">
            <label for="InputEmail1">Email address :</label>
            <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value= <?php echo $email;?>><br><br>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>


          <div class="form-group">
            <label for="InputPhine">Phone Number :</label>
            <input type="phone" name="phone" class="form-control" id="InputPhone" aria-describedby="phoneHelp" value= <?php echo $phone;?>><br><br>
            <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
              else.</small>
          </div>


          <div class="form-group">
            <label for="InputCollege" style="font-weight: bold;">College :</label>
            <input type="text" name="s_id" class="form-control" id="InputCollege" aria-describedby="collegeHelp" value= <?php echo $s_id;?>><br><br>>
            <small id="collegeHelp" class="form-text text-muted">Enter Your College .</small>
          </div>


          <button type="submit" name="submit" class="btn btn-primary">Save</button>

        </form>

      </div>
    </div>
<?php die();}
}else echo "done";
}
?>