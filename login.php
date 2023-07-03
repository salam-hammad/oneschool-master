<?php 

include('database.php');

// $sname= "localhost";
// $unmae= "root";
// $password ="";
// $db_name = "universitydb";

// $con = mysqli_connect($sname, $unmae, $password, $db_name);

// if (!$con) {
//     echo "Connection failed!";

// }


?>


<?php
 session_start(); 

if (isset($_POST['user_id']) && isset($_POST['password'])) {

    // function validate($data){

    //    $data = trim($data);
    //    $data = stripslashes($data);
    //    $data = htmlspecialchars($data);
    //    return $data;

    // }

    // $user_id = validate($_POST['user_id']);
    // $password = validate($_POST['password']);

    $user_id = ($_POST['user_id']);
    $password = ($_POST['password']);


    if(empty($user_id)) {
      // echo"Email.empty";
        // echo"<div class='alert'><span class='closebtn' onclick='this.parentElement.style.display='none';" . ">&times;</span>
        //         This is an alert box.
        //       </div> ";
        // echo"Email.empty";
        //         header("Location: login.php ? error=User Name is required");

       echo '<script type ="text/JavaScript">';  
       echo 'alert("Please, Enter Your ID ")';  
       echo '</script>';  
  //      echo'       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  //      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  //    </svg>
  //    <div>
  //      An example alert with an icon
  //    </div>
  //  </div>';
      include("login.html");
      exit();


    }else if(empty($password)){

        //header("Location: login.php?error=Password is required");
        // echo"Id Is wrong";
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please, Enter Your Password ")';  
        echo '</script>';  
        include("login.html");
        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_id='$user_id' AND password='$password'";
        $result = mysqli_query($con, $sql);


        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['user_id'] === $user_id && $row['password'] === $password) {

                // echo "Logged in!";

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['password'] = $row['password'];
                // $_SESSION['studentID'] = $row['st_id'];
                
                //header("Location: login.php");
                //header("Location: ProjectPage.html");
                include('ProjectPage.html');
                exit();

            }else{

                echo"<div class='alert'><span class='closebtn' onclick='this.parentElement.style.display='none';" . ">&times;</span>
                This is an alert box.
              </div> "."MMMMMMMM";
                exit();

            }

        }else{

            // header("Location: login.html?error=Incorect User name or password");
            // echo"Incorect User name or passwordASSSSSSSSSSSSSSSSSS";
            
            exit();

        }

    }

}else{

    //header("Location: Project Page.html");
    //header("Location: login.php");
    //include('login.php');
    echo"You Already Logged In .";
    include('ProjectPage.html');
    exit();

}

?>
