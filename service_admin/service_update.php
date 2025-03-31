<?php
session_start();
ini_set('display_errors', '0');
// echo$_SESSION['id'];

if($_SESSION['id']==null){
    echo "<script>window.location.href='login.php'</script>";
    // echo "success";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>

    
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
                *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

/* ----------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -----------navbar---------  */

.header{
    width: 100%;
    height: 90px;
    background-color: rgb(2,0,36);
    
    background-repeat:no-repeat;
    padding-top: 10px;
    padding-left: 10px;
}








.account{
    width: 30%;
    height: 70px;
    /* background-color: red; */
    /* border-radius: 50%; */
    display: flex;
    /* justify-content: center; */
    font-family: "Trykker", serif;
}

.account .icon{
    width: 75px;
    height: 70px;
    background-color: grey;
    background-image:url('logo.png');
    background-size:cover;
    border-radius: 50%;
}

.title_name h2{
    width:300%;
    height: 40px;
    /* background-color: green; */
    color: white;
    font-size: 25px;
    margin-left: 10px;
    margin-top: 17px;

}

.logout{
    width: 12%;
    height: 40px;
    /* background-color: red; */
    float: right;
    margin-top:-60px;
    margin-right: 5px;
    display: flex;
    justify-content: center;
}

.logout .btn{
    width: 100px;
    height:45px;
    border-radius: 5px;
    font-size: 20px;
    font-weight:bolder;
    background-color: #ffff;
    cursor: pointer;
    text-align: center;
    color: black;
    margin-top:0px;
    font-family: "Trykker", serif;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

    
    
}



.btn:hover{
    color: 	 #ff1a1a;
    /* border:3px solid; */
    
    
}



/* ----------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -----------list of activities---------  */

.activity{
    width: 20%;
    height: 659px;
    background-color: rgb(2,0,36);
    
    /* background-color: green; */
    padding-left: 18px;
    padding-right: 18px;

}

.activity .list{
    width: 100%;
    height: 630px;
    /* background-color: red; */
    padding: 20px;
}

.list ul{
    width: 90%;
    height: 540px;
    /* background-color: yellow; */
    font-size: 20px;
    list-style: none;
    text-align: center;
    font-family: "Trykker", serif;
}

.list ul li{
    width: 90%;
    margin-top: 40px;
    margin-left: 10px;
    color: white;
    /* background-color: red; */
}

.list ul li a{
    text-decoration: none;
    color: white;
}

.list ul li a:hover{
    cursor: pointer;
    color: yellow;
    border-bottom: 3px solid red;
}

/* ----------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -----------main---------  */
.main{
    width: 80%;
    height: 649px;
    /* background-color: rgb(214,213,223); */
    /* background-color:red; */
    background-color:#DCDCDC;
    position: absolute;
    top: 12%;
    left: 20%;
    padding-top: 35px;
    padding-left: 10%;
   /* padding-right:10px; */
}

.contain{
    width:80%;
    height:190px;
    background-color:white;
    margin-top: 30px;
    /* background-image:url("https://www.shutterstock.com/image-vector/white-welcome-sign-over-confetti-260nw-302906972.jpg");
    background-repeat: no-repeat;
    background-size: cover; */
    border:1px solid white;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;

}

.form{
    width: 100%;
    height: 80px;
    /* background-color: white; */
    margin-top:15px;
    padding: 20px;
    font-size: 25px;
    font-family: "Balsamiq Sans", sans-serif;
    font-weight:bolder;
}

select{
    width:35%;
    height: 34px;
    margin-left:3%;
    font-size:15px;
    border-radius:4px;
    border:1px solid white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    /* background: transparent; */
}

.sub_btn{
    width:15%;
    height:35px;
    margin-top:20px;
    margin-left:16px;
    background-color: white;
    color:black;
    border:1px solid #e6e6e6;
    border-radius: 5px;
    font-size:14px;
    font-weight:bolder;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.sub_btn:hover{
    cursor:pointer;
    color:red;
}

/* -----HIDDEN DIV--------- */
/* -------SERVICE NAME----------- */

.service_name{
    width:100%;
    height:220px;
    background-color:#ffff;
    margin-top:70px;
    padding-top:20px;
    padding-left:20px;
    font-size:20px;
    font-weight:bold;
    
    font-family: "Balsamiq Sans", sans-serif;
    border:1px solid white;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;


}

.service_name input{
    outline:none;
    width:50%;
    height:40px;
    margin-top:30px;
    margin-left:15px;
    padding-left:20px;
    font-size:16px;
    font-weight:bold;
    border-radius:4px;
    background-color:#ffff;
    border:1px solid white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.update_btn{
    width:100%;
    height:30px;

}

button{
    width:15%;
    height:35px;
    background-color:white;
    border:1px solid white;
    border-radius:4px;
    margin-top:30px;
    margin-left:35%;
    font-size:15px;
    font-weight:bolder;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

button:hover{
    cursor:pointer;
    color:red;
}

    </style>


</head>
<body>
    

       

 <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->
    <!-- navbar -->
    <div class="header">
        
        <div class="account">
            
            <!-- <div class="icon">

            </div> -->

            <?php
        $id=$_SESSION['id'];
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name from tiffin_info where id='$id';";
        $result=pg_query($con,$query);
        while($row=pg_fetch_row($result))
        {

        ?>

        
            <div class="title_name">
                <h2>Welcome, <span style="color: pink;"><?php echo$row[0];?></span></h2>
            </div>
        <?php
        }
        ?>

        </div>

        <div class="logout">
            <!-- <h3 class="btn" name="logout"><a href="C:\xampp\htdocs\photos\login.php">Logout</a></h3> -->
            <form method="post">
                <button type="submit" class="btn" name="logout">Logout</button>
            </form>
           
            <!-- PHP LOGIC -->
            <?php
            if(isset($_POST['logout']))
            {
                echo "<script> var x=confirm('Confirm Before Logout');";
                echo" if(x)
                        {
                            window.location.href='service_logout.php';
                        }
                    </script>";
            }
            ?>
        </div>
    </div>


    <!-- ----------------------------------------------------------- -->
    <!-- ----------------------------------------------------------- -->
    <!-- list of activities -->

    <div class="activity">
        <div class="list">
            <ul>
                <li><a href="service_profile.php"  style="color:yellow;border-bottom: 3px solid red;">Profile</a></li>
                <li><a href="service_dash.php" >Dashboard</a></li>
                <li><a href="service_view.php">View / Delete Plans</a></li>
                <li><a href="service_add.php">Add Plan</a></li>
                <li><a href="service_updateplan.php">Update Plan</a></li>
                <li><a href="service_delete.php">Delete Tiffin Service</a></li>
                <!-- <li><a href="#">Contact Admin</a></li> -->
            </ul>
        </div>
    </div>

    <!-- ----------------------------------------------------------- -->
<!-- ----------------------------------------------------------- -->
<!-- main activity -->

<div class="main">
    <div class="contain">
       
        <h2 style="text-align:center;font-size:38px;padding-top:10px;font-family:IM Fell Great Primer SC, serif;">Update Request</h2>

        <hr style="width:100%;height:2px;color:black;margin-top:15px;">

        <div class="form">
            <form method="post">
            Select What to Update..?
            <select name="update" class="up_list">
                <option value="" selected>Select option</option>
                <option value="Service Name">Service Name</option>
                <option value="Full Name">Full Name</option>
                <option value="Password">Password</option>
                <option value="Phone Number">Phone Number</option>
                <option value="Street Address">Street Address</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="Pin code">Pin code</option>
            </select>
            

            <input type="submit" value="Submit" name="update_btn" class="sub_btn">
            </form>

            
        </div>
        <!-- PHP LOGIC -->
        <?php
        if(isset($_POST['update_btn']))
        {
            $value=$_POST['update'];
           
            
            
            function service_name(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Service Name Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Tiffin Service Name : <input type='text' name='nm' placeholder='Enter new Tiffin Service Name' required>";
                echo "<br><button type='submit' value='1' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function full_name(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Full Name Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Full Name : <input type='text' name='nm' placeholder='Enter new Full Name' required>";
                echo "<br><button type='submit' value='2' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function password(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Password Name Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Password : <input type='text' name='nm' placeholder='Enter new Password' required>";
                echo "<br><button type='submit' value='3' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function phone_no(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Phone Number Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Phone Number : <input type='text' name='nm' placeholder='Enter new Phone Number' required>";
                echo "<br><button type='submit' value='4' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function street_address(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Street Address Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Street Address : <input type='text' name='nm' placeholder='Enter new Street Address' required>";
                echo "<br><button type='submit' value='5' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function city(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>City Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter City : <input type='text' name='nm' placeholder='Enter new City' required>";
                echo "<br><button type='submit' value='6' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function state(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>State Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter State : <input type='text' name='nm' placeholder='Enter new State' required>";
                echo "<br><button type='submit' value='7' name='btn1'>Update</button>";
                echo "</form></div>";
            }

            function pin_code(){
                echo "<div class='service_name'>";
                echo "<h2 style='text-align:center;font-size:35px;font-family:IM Fell Great Primer SC, serif;'>Pincode Update</h2>";
                echo "<form action='update.php' method='post'>";
                echo "Enter Pin Code : <input type='text' name='nm' placeholder='Enter new Pin Code' required>";
                echo "<br><button type='submit' value='8' name='btn1'>Update</button>";
                echo "</form></div>";
            }


            if($value=='Service Name')
            {
                service_name();  
            }
            else if($value=='Full Name')
            {
                full_name();
            }
            else if($value=='Password')
            {
                password();
            }
            else if($value=='Phone Number')
            {
                phone_no();
            }
            else if($value=='Street Address')
            {
                street_address();
            }
            else if($value=='City')
            {
                city();
            }
            else if($value=='State')
            {
                state();
            }
            else if($value=='Pin code')
            {
                pin_code();
            }

            

           
        }
        ?>
    </div>

</div>



</body>
</html>