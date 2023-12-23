<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $joined_date = $_POST['joined_date'];
    $duration = $_POST['duration'];
    $goal = $_POST['goal'];
    $admin_password = $_POST['admin_password'];
    $newphonenumber = strval($phonenumber);

    $checkquery = "SELECT * from gym_user where phonenumber = '$phonenumber'";
    $result = $connection->query($checkquery);

    if($result->num_rows > 0){
            echo '<div class="popup" style="background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);" id="popup">Phone number already exists
          <span class="popup-close" onclick="closePopup()">X</span>
          </div>';
    }
    else{

    if ($admin_password == 'admin') {
        if ($age < 100) {
            if (strlen($newphonenumber) == 10 && is_numeric($phonenumber)) {

                $sql = "INSERT INTO gym_user (name, phonenumber, age, gender, joined_date, duration, goal) VALUES('$name', '$phonenumber', '$age', '$gender', '$joined_date', '$duration', '$goal')";

                if ($connection->query($sql) === true) {
                    echo '<div class="popup" id="popup">Registered
                          <span class="popup-close" onclick="closePopup()">X</span>
                          </div>';
                } else {
                    echo '<div class="popup" style="background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);" id="popup">Could not register
                          <span class="popup-close" onclick="closePopup()">X</span>
                          </div>';
                }
            } else {
                echo '<div class="popup" style="background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);" id="popup">Enter a valid phone number
                      <span class="popup-close" onclick="closePopup()">X</span>
                      </div>';
            }
        } else {
            echo '<div class="popup" style="background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);" id="popup">Enter a valid age
                  <span class="popup-close" onclick="closePopup()">X</span>
                  </div>';
        }
    } else {
        echo '<div class="popup" style="background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);" id="popup">Enter correct password
              <span class="popup-close" onclick="closePopup()">X</span>
              </div>';
    }
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BajrangDal Registration</title>
</head>
<body>
<style>
.popup {
    z-index:9999999;
    letter-spacing:1px;
    opacity:0;
    transition:0.2s all ease;
    cursor:default;
    font-weight:bold;
    border-radius:5px;
    position:absolute;
    margin: 10px auto;
    top: 10px;
    left: 50%;
    width:840px;
    transform: translateX(-50%);
    background: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
    color: white;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
}

    .popup-close {
        cursor: pointer;
        float: right;
        margin-left: 10px;
        font-weight: bold;
    }
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}
.btn-wrap{
  display:flex;
  justify-content: flex-end;

}
.container{
    transition:0.3s all ease;
}
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px #fff inset;
        background-color: transparent;
        color: grey;
    }

    .container,
    button {
        box-shadow: inset 0 0 0 #d3d3d3;
    }

    * {
        -webkit-tap-highlight-color: transparent;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    h2 {
        color:#505050;
        text-align:left;
        padding: 10px 0;
        margin: 10px 20px;
        font-weight: 1200;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        position: absolute;
        transform: translate(-50%, -50%);
        top:50%;
        left: 50%;
        padding: 20px;
        width:840px;
        border: 1px solid #d3d3d3;
    }
    .second-wrapper{
        display:flex;
    }

    .wrapper,
    input {
        background-color: #fff;
        padding: 10px 0;
        border: none;
    }

    input {
        width:100%;
        padding:2px 0px;
        font-weight: 500;
        font-size: 15px;
        outline: 0;
        color:dimgray;
    }
    .x-wrapper{
        width:100%;
    }

    .wrapper {
        margin:0 10px;
        margin-top:20px;
        padding:10px;
        position: relative;
        border:1px solid rgba(222, 222, 222, 1.0);
        border-radius:5px;
    }
    select{
        appearance: none;
        font-size:15px;
        outline:none;
        width:100%;
        color:dimgray;
        border:none;
        background-color:transparent;
    }

    button {
        color: #fff;
        border: none;
        border-radius:5px;
        background: radial-gradient(circle at 10% 20%, rgb(221, 49, 49) 0%, rgb(119, 0, 0) 90%);
        padding: 15px 60px;
        font-weight: 800;
        font-size: 18px;
        letter-spacing: 2px;
        margin: 20px 10px;
    }

    .container {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }
    .icon{
        position: relative;
        top:2px;
        width:17px;
        height:17px;
    }

@media screen and (max-width:370px) {
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px #fff inset;
        background-color: transparent;
        color: grey;
    }

    .container,
    button {
        box-shadow: inset 0 0 0 #d3d3d3;
    }

    * {
        -webkit-tap-highlight-color: transparent;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    h2 {
        color:#505050;
        text-align:center;
        padding: 10px 0;
        margin: 10px 20px;
        font-weight: 1200;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        padding:20px;
        width:calc(100% - 10px);
        border: 1px solid #d3d3d3;
    }

    .wrapper,
    input {
        border:1px solid rgba(222, 222, 222, 1.0);
        border-radius:5px;
        background-color: #fff;
    }
    input{
        border: none;
    }
    .second-wrapper{
        width:calc(100% - 20px);
        border:none;
        display:flex;
        flex-direction:column;
    }

    input {
        padding:2px 0px;
        font-weight: 500;
        font-size: 15px;
        outline: 0;
        color: #000;
}

    button {
        width:100%;
        color: #fff;
        border: none;
        border-radius:5px;
        background: radial-gradient(circle at 10% 20%, rgb(221, 49, 49) 0%, rgb(119, 0, 0) 90%);
        padding: 15px 60px;
        font-weight: 800;
        font-size: 18px;
        letter-spacing: 2px;
    }

    .container {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }
    .icon{
        position: relative;
        top:2px;
    }
}
@media screen and (max-width:650px){
    .display-box {
    width:95%;
    box-shadow: 0 0 10px 10px lightgray;
    z-index: 10000;
    border: 0.1px solid lightgray;
    border-radius: 10px;
    padding: 15px;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
}
.display-box p{
    font-size: 13px;
    text-align: center;
    line-height:1.4;
}

}

@media screen and (max-width:870px){
.container,.popup{
    width:90%;
}
}
</style>
<div id="bgOverlay"></div>

  <form action="" method="post">
  <div class="container" id="box">
  <h2>Customer Registration</h2>

  <div class="second-wrapper">
  <div class="wrapper x-wrapper">
  <input type="text" placeholder="Full Name" name="name" id="username" required autocomplete="off">
  </div>
  <div class="wrapper x-wrapper">
  <input type="text" placeholder="Age" name="age" required autocomplete="off">
  </div>
  </div>

  <div class="second-wrapper">
  <div class="wrapper x-wrapper">
  <input type="tel" placeholder="Phone number" name="phonenumber" id="phone" pattern="[0-9]{10}" required autocomplete="off">
  </div>
  <div class="wrapper x-wrapper">
  <select name="gender" required>
        <option value="" disabled selected>Gender</option>
        <option value="Male" name="Male">Male</option>
        <option value="Female" name="Female">Female</option>
    </select>
  </div>
  </div>

  <div class="wrapper">
  <input type="date" name="joined_date" required selected>
  </div>

  <div class="wrapper">
  <select name="duration" required>
        <option value="" disabled selected>Select Duration</option>
        <option value="Day wise" name="Day wise">Day wise</option>
        <option value="1 month" name="1 month">1 month</option>
        <option value="3 months" name="3 months">3 months</option>
        <option value="6 months" name="6 months">6 months</option>
        <option value="1 year" name="1 year">1 year</option>
    </select>
  </div>

  <div class="wrapper">
  <input type="text" placeholder="Enter Goal to achieve" name="goal"  required autocomplete="off">
  </div>

  <div class="wrapper">
  <input type="password" placeholder="Enter password" name="admin_password"  required autocomplete="off">
  </div>

  <div class="btn-wrap">
  <button type="submit">Register</button>
  </div>
  </div>
  </form>

<script type="text/javascript">
function seepassword() {
  var x = document.getElementById('inputpassword')
  if (x.type === "password"){
    x.type="text";
  }
  else{
    x.type="password";
  }
}
</script>
<script>
    function showPopup() {
        document.getElementById('popup').style.opacity = '1';
    }

    function closePopup() {
        document.getElementById('popup').style.opacity = '0';
    }

    window.onload = function() {
        showPopup();
    };
</script>
</body>
</html>