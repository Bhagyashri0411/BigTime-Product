<?php
session_start();
require_once './../php/dbcon.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $loginame = $_POST['logname'];
  $loginpassword = $_POST['passlog'];
if (empty($loginame) || empty($loginpassword)) {
  echo "please Enter";
}
else{
  $sql = "SELECT * FROM logininformation WHERE loginname='$loginame' AND password='$loginpassword'";

  $result = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
          if ($row['loginname'] === $loginame && $row['password'] === $loginpassword) {
            $_SESSION['loginname'] = $row['loginname'];
          $_SESSION['name'] = $row['name'];
          header("Location: ./Main.php?eyJsb2dpbm5hbWUiOiJhZG1pbiIsInBhc3N3b3JkIjoiYWRtaW4iLCJuYW1lIjoiYmhhZ3lhc2hyaSJ9");
          exit();
            // echo "success";
          }
            
          else{
            header("Location: ./../index.php?error=Incorect User name or password");
            echo "Please Enter pass and username Information";
            exit();
    }
  }else{
    echo "Please Enter validate Information";
  }
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.btn {
    display: inline-block;
    background: #000;
    color: #fff;
    font-size: 1rem;
    text-decoration: none;
    padding: 1rem 3rem;
    cursor: pointer;
}
/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #303841;
    color: #fff;
    display: flex;
    justify-content: center;
}

.modal-body {
    padding: 2px 16px;
    margin: 10px 0;
}
.modal-body input{
    border: none;
    height: 50px;
    padding: 0;
    outline: none;
    -webkit-appearance: none;
    display: block;
    margin: 0;
    min-width: 10px;
    max-width: 100%;
    width: 100%;
    line-height: 1.5;
    font-size: 1em;
}
.main-bodyi{
    border-bottom: solid 1px #e5e5e6;
    width: 100%;

}
.modal-footer {
  padding: 5px 16px;
  background-color: #303841;
  color: white;
}
</style>
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>Login Information</h2>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="modal-body">
        <div class="main-bodyi">
            <input type="text" name="logname" placeholder="Login Name">
        </div>
  
 
        <div class="main-bodyi">
            <input type="text" name="passlog" placeholder="Login password">
        </div>
    </div>

    <div class="modal-footer">
        <div class="about-btn" style="text-align: center;">
        <input type="submit" class="btn btn-primary" value="Login">
         </div>
    </div>
    </form>
  </div>

</div>

</body>
</html>
