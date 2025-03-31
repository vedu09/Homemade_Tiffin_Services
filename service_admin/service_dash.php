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
    <title>Service Dashboard</title>

    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
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
    /* padding-top: 60px; */
    padding-left: 20px;
   padding-right:20px;
}

.contain{
    width:100%;
    height:550px;
    /* background-color:blue; */
    margin-top: 30px;
    padding:80px;
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
    font-family: "Stardos Stencil", system-ui;
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
                <li><a href="service_profile.php">Profile</a></li>
                <li><a href="service_dash.php"  style="color:yellow;border-bottom: 3px solid red;">Dashboard</a></li>
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
<?php
$id=$_SESSION['id'];
$con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");

?>
<div class="main">
        <div class="contain">

            <div class="box"><a href="service_view.php">
                <div style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:50px;">
                <?php
                     $sql1="select count(name) from plan_info where id='$id';";
                     $result1=pg_query($con,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                         if($row[0]==0)
                         {
                            echo "0";
                         } 
                     }
                    ?>
                </div>
                <div style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:Orange;opacity:0.6;margin-top:-30px;">
                    Total Tiffin Plans
                </div>
                    </a>
            </div>


            <div class="box"><a href="service_view.php">
                <div style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:50px;">
                <?php
                     $sql1="select count(name) from plan_info where id='$id' and status='open';";
                     $result1=pg_query($con,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                         if($row[0]==0)
                         {
                            echo "0";
                         } 
                     }
                    ?>
                </div>
                <div style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:Blue;opacity:0.6;margin-top:-30px;">
                    Open Plans
                </div>
                    </a>
            </div>


            <div class="box"><a href="service_view.php">
                <div style="width:100%;height:150px;text-align:center;padding-top:8%;font-size:50px;">
                <?php
                     $sql1="select count(name) from plan_info where id='$id' and status='close';";
                     $result1=pg_query($con,$sql1);
                    
                     while($row=pg_fetch_array($result1))
                     {
                         echo $row[0];
                         if($row[0]==0)
                         {
                            echo "0";
                         } 
                     }
                    ?>
                </div>
                <div style="width:100%;height:60px;text-align:center;font-size:40px;font-weight:bolder;color:green;opacity:0.6;margin-top:-30px;">
                    Close Plans
                </div>
                    </a>
            </div>

        </div>
    

</div>

</body>
</html>