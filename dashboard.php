<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<style type="text/css">

    ::-webkit-scrollbar{
        height:0;
        width:0;
    }
    body{
        overflow-y: hidden;
    }
    *{
        font-family:sans-serif;
        margin:0;
        padding:0;
    }
    .wrap{
        display:flex;
        flex-direction:row;
    }
    .dashboard-nav{
        border-right:10px solid rgb(232, 232, 232, 1.0);
        padding:0 10px;
        background-color:white;
        min-width:300px;
        max-width:300px;
    }
    .element{
        filter:drop-shadow(5px 5px lightgrey);
        background-color:white;
        cursor:pointer;
        font-family:sans-serif;
        font-size:20px;
        text-align: center;
        font-weight:bold;
        border:.1px solid rgb(170, 170, 170, 1.0);
        margin:30px 20px;
        border-radius:10px;
        padding:20px;
    }
    .element-top{
        border-radius:5px;
        font-weight:bold;
        color:dimgray;
        text-align: center;
        margin:20px;
        padding:20px;
        font-size:25px;
        border:.1px solid rgb(212, 212, 212, 1.0);
    }
    span{
        color:darkgrey;
        position: relative;
        bottom:10px;
    }
.dashboard-content {
    text-align: center;
    width:100%;
}

    .user,.staff,.attendance,.payment{
        color:black;
        height:100vh;
        padding:20px;
    }
    .user{
        display:block;
    }
    .payment{
        display:none;
    }
    .attendance{
        display:none;
    }
    .staff{
        display:none;
    }
    h2{
        margin-top:20px;
        text-align: center;
        color:dimgray;
    }

</style>
<body>
<div class="wrap">

    <div class="dashboard-nav">

        <div class="element-top">GYM NAME</div>

        <div onclick="user()" class="element"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M21.0082 3C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM20 5H4V19H20V5ZM18 15V17H6V15H18ZM12 7V13H6V7H12ZM18 11V13H14V11H18ZM10 9H8V11H10V9ZM18 7V9H14V7H18Z" fill="rgba(173,184,194,1)"></path></svg><span> User</span></div>

        <div onclick="attendance()" class="element"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z" fill="rgba(173,184,194,1)"></path></svg><span> Attendance</span></div>

        <div onclick="payment()" class="element"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M11.0049 2L18.3032 4.28071C18.7206 4.41117 19.0049 4.79781 19.0049 5.23519V7H21.0049C21.5572 7 22.0049 7.44772 22.0049 8V16C22.0049 16.5523 21.5572 17 21.0049 17L17.7848 17.0011C17.3982 17.5108 16.9276 17.9618 16.3849 18.3318L11.0049 22L5.62486 18.3318C3.98563 17.2141 3.00488 15.3584 3.00488 13.3744V5.23519C3.00488 4.79781 3.28913 4.41117 3.70661 4.28071L11.0049 2ZM11.0049 4.094L5.00488 5.97V13.3744C5.00488 14.6193 5.58406 15.7884 6.56329 16.5428L6.75154 16.6793L11.0049 19.579L14.7869 17H10.0049C9.4526 17 9.00488 16.5523 9.00488 16V8C9.00488 7.44772 9.4526 7 10.0049 7H17.0049V5.97L11.0049 4.094ZM11.0049 12V15H20.0049V12H11.0049ZM11.0049 10H20.0049V9H11.0049V10Z" fill="rgba(173,184,194,1)"></path></svg><span> Payment</span></div>

        <div onclick="staff()" class="element"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM14.5946 18.8115C14.5327 18.5511 14.5 18.2794 14.5 18C14.5 17.7207 14.5327 17.449 14.5945 17.1886L13.6029 16.6161L14.6029 14.884L15.5952 15.4569C15.9883 15.0851 16.4676 14.8034 17 14.6449V13.5H19V14.6449C19.5324 14.8034 20.0116 15.0851 20.4047 15.4569L21.3971 14.8839L22.3972 16.616L21.4055 17.1885C21.4673 17.449 21.5 17.7207 21.5 18C21.5 18.2793 21.4673 18.551 21.4055 18.8114L22.3972 19.3839L21.3972 21.116L20.4048 20.543C20.0117 20.9149 19.5325 21.1966 19.0001 21.355V22.5H17.0001V21.3551C16.4677 21.1967 15.9884 20.915 15.5953 20.5431L14.603 21.1161L13.6029 19.384L14.5946 18.8115ZM18 17C17.4477 17 17 17.4477 17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17Z" fill="rgba(173,184,194,1)"></path></svg><span> Staff</span>       </div>
    </div>

    <div class="dashboard-content">
        <div class="user" id="user">
            <h2>Customer&nbsp;Information</h2>
            <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'dbconnection.php';
$sql = "SELECT * from gym_user";
$result = $connection->query($sql);
if ($result->num_rows > 0){
while ($row=$result->fetch_assoc()){
    $username = $row['name'];
    $age = $row['age'];
    $gender = $row['gender'];
    $duration = $row['duration'];
    $joined_date = $row['joined_date'];
    $phonenumber = $row['phonenumber'];
}
    }
    else{
        echo "No data to show";
        }
?>
        </div>

        <div class="attendance" id="attendance">
            <h2>Customer&nbsp;Attendace</h2>
            <?php
            ?>
        </div>

        <div class="payment" id="payment">
            <h2>Customer's&nbsp;Payment</h2>
            <?php
            ?>
        </div>

        <div class="staff" id="staff">
            <h2>Staff&nbsp;Details</h2>
            <?php
            ?>
        </div>
    </div>

</div>
<script type="text/javascript">
    var u = document.getElementById('user').style;
    var a = document.getElementById('attendance').style;
    var p = document.getElementById('payment').style;
    var s = document.getElementById('staff').style;

        function user() {
            u.display="block";
            a.display="none";
            p.display="none";
            s.display="none";
    }
        function attendance() {
            u.display="none";
            a.display="block";
            p.display="none";
            s.display="none";
    }
        function payment() {
            u.display="none";
            a.display="none";
            p.display="block";
            s.display="none";
    }
        function staff() {
            u.display="none";
            a.display="none";
            p.display="none";
            s.display="block";
    }
</script>
</body>
</html>