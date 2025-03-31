<?php
session_start();
ini_set('display_errors', '0');

// echo$_SESSION['adn_id'];
// echo$_SESSION['adn_name'];

if($_SESSION['adn_id']==null){
    echo "<script>window.location.href='admin.php'</script>";
    // echo "success";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PROFILE</title>


    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="dashboard1.css"> -->

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
    width: 70px;
    height: 70px;
    background-color: grey;
    background-image:url('admin.png');
    background-size:cover;
    border-radius: 50%;
}

.title_name h2{
    
    height: 40px;
    /* background-color: green; */
    color: white;
    font-size: 30px;
    margin-left: 20px;
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
    background-color:  #ffff;
    cursor: pointer;
    text-align: center;
    color: black;
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
    height: 659px;
    /* background-color: rgb(214,213,223); */
    background-color:#DCDCDC;
    position: absolute;
    top: 12%;
    left: 20%;
    /* padding-top: 60px; */
    padding-left: 20px;
   padding-right:20px;
}

.contain{
    width:100%;
    height:300px;
    /* background-color:red; */
    margin-top:30px;
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
}

.contain .box{
    width:30%;
    height:240px;
    background-color:White;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    border:1px solid #ffff;
    border-radius:8px;
    font-family: 'Macondo Swash Caps', cursive;
    transition: transform 0.1s ease-in-out;
    margin-bottom:30px;

}

.box a{
    text-decoration:none;
    color:black;
}
.box:hover, .box a:hover{
    /* background-color:yellow; */
    cursor:pointer;
    /* color:red; */
    
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    transform: translateX(-3px) translateY(-3px);
}




    </style>


</head>
<body>
    <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->
    <!-- navbar -->
    <div class="header">
        
        <div class="account">
        
        <?php

$id=$_SESSION['adn_id'];
$con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
$query="select profile_pic from admin_info where admin_id='$id';";
$result=pg_query($con,$query);

while($row=pg_fetch_assoc($result)) 
{

?>

<img src="profile_pic/<?php echo $row['profile_pic']; ?>" alt="profile" style="width:70px;height:70px;border-radius:50%;">

<?php
}
?>



        
            <div class="title_name">
                <h2>Admin,<span style="color: pink;"><?php echo$_SESSION['adn_name'];?> </span></h2>
            </div>

        </div>

        <div class="logout">
            <!-- <h3 class="btn" name="logout"><a href="C:\xampp\htdocs\photos\login.php">Logout</a></h3> -->
            <form method="post">
                <button type="submit" class="btn" name="logout">Logout</button>
            </form>
            
            <?php
            if(isset($_POST['logout']))
            {
                echo "<script>
                        var r=confirm('Want to Logout..?');
                        if(r==true)
                        {
                            window.location.href='logout.php';
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
                <li><a href="dashboard_profile.php">Profile</a></li>
                <li><a href="dashboard_dash.php"  style="color:yellow;border-bottom: 3px solid red;">Dashboard</a></li>
                <li><a href="dashboard_view.php">View Tiffin Services</a></li>
                <li><a href="dashboard_location.php">Location</a></li>
                <li><a href="dashboard_user.php">User Details</a></li>
                <li><a href="dashboard_website.php">Website Feedback Details</a></li>
            </ul>
        </div>
    </div>



     <!-- ----------------------------------------------------------- -->
    <!-- ----------------------------------------------------------- -->
    <!-- main activity -->

    <div class="main">
        
        <!-- <h2 style="text-align:center;font-size:70px;">WELCOME </h2> -->

        <!-- <h1 style="font-size:100px;text-align:center;letter-spacing:3px;margin-top:45px;    font-family:Georgia, 'Times New Roman', Times, serif;color:red;"><?php echo$_SESSION['admin_name'];?></h1> -->
        <br><br>

        <?php
        
        date_default_timezone_set('UTC');
        $Date = date('F j, Y');
        echo "<h3 style='font-family:IM Fell Great Primer SC, serif;font-size:30px;margin-top:0px;'>Date :<span style='color:purple;'> $Date</span> </h3>";
        // echo $x;
        $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        ?>

        <div class="contain">
            <div class="box"><a href="dashboard_view.php">
                <div class="no" style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:100px;">
                    <?php
                     $sql1="select count(id) from tiffin_info;";
                     $result1=pg_query($connect,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                     }

                    ?>
                </div>
                <div class="box_contain" style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:blue;opacity:0.6;">
                    Active Services
                </div>
                    </a>
            </div>

            <div class="box"><a href="dashboard_location.php">
            <div class="no" style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:100px;">
                    <?php
                    $sql1="select count(distinct city) from tiffin_info";
                    $result1=pg_query($connect,$sql1);
                    $row1=pg_fetch_array($result1);
                    echo $row1[0];
                    ?>
                </div>
                <div class="box_contain" style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:purple;opacity:0.6;">
                    Active Locations
                </div>
                    </a>
            </div>

            <div class="box">
            <div class="no" style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:100px;">
                    4
                </div>
                <div class="box_contain" style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:red;opacity:0.6;">
                    Pending Tasks
                </div>
            </div>

            <div class="box"><a href="dashboard_user.php">
                <div class="no" style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:100px;">
                    <?php
                     $sql1="select count(first_name) from user_info;";
                     $result1=pg_query($connect,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                     }

                    ?>
                </div>
                <div class="box_contain" style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:brown;opacity:0.6;">
                    User Details
                </div>
                    </a>
            </div>

            <div class="box"><a href="dashboard_website.php">
                <div class="no" style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:100px;">
                    <?php
                     $sql1="select count(full_name) from contact_form;";
                     $result1=pg_query($connect,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                     }

                    ?>
                </div>
                <div class="box_contain" style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:orange;opacity:0.6;">
                    Website Feedback
                </div>
                    </a>
            </div>
        </div>

    </div>
    
</body>
</html>