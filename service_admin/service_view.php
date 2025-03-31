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
    <title>Service View</title>

    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    

</head>

<style>
    *{
        margin:0;
        padding:0;
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
    background-image:url('admin.png');
    background-size:cover;
    border-radius: 50%;
}

.title_name h2{
    width:300%;
    height: 40px;
    /* background-color: green; */
    color: white;
    font-size: 25px;
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
    height: 645px;
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
    height: 647px;
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

 /* .contain{
    width:100%;
    height:500px;
    background-color:blue;
    margin-top: 60px;
    background-image:url("https://www.shutterstock.com/image-vector/white-welcome-sign-over-confetti-260nw-302906972.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
}   */

.refresh{
    width:100%;
    height:30px;
    margin-top:30px;
    margin-bottom:5px;
    /* background-color:brown; */
    display:flex;
    justify-content:space-between;
    float:right;
}

.refresh button{
    width: 80px;
    height: 30px;
    background-color: rgb(51, 255, 0);
    border: 2px dotted rgb(111, 121, 108);
    float: right;
    color: black;
    font-weight: bolder;
    font-family:Georgia, 'Times New Roman', Times, serif ;
    margin-right: 70px;
    margin-bottom: 10px;
}

.refresh button:hover{
    color: red;
    cursor: pointer;

}

.main .contain{
    width: 100%;
    height: auto;
    max-height: 500px;
    /* background-color: yellow; */
    overflow-y: scroll;
    border: 1px solid black;
    margin-top: 30px;
}

.contain table{
    width: 100%;
    height: auto;
    /* background-color: green; */
    outline:none;
    /* border: 1px solid black; */
    border-radius:8px;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

}

.contain table th{
    height: 80px;
    background-color: #e6f7ff;
    font-family: "Pridi", serif;
}


tr,td{
    height: 50px;
    background-color:#ffff;
    font-family: "Averia Libre", system-ui;
}

.del{
    width: 90%;
    height: 30px;
    background-color: rgb(243, 100, 100);
    font-weight: bolder;
}

.del:hover{
    background-color: red;
    cursor: pointer;
}

.btn_open{
    width:90%;
    height:30px;
    background-color:lightgreen;
    font-weight:bolder;
}

.btn_open:hover{
    color:blue;
    cursor:pointer;
}

.btn_close{
    width:90%;
    height:30px;
    background-color:#Dc787b;
    font-weight:bolder;
}

.btn_close:hover{
    color:red;
    cursor:pointer;
}

.conclusion{
    width:100%;
    height:30px;
    color:black;
    font-weight:bolder;
    background-color:green;
}

</style>


<body>
    <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->
    <!-- navbar -->
    <div class="header">
        
        <div class="account">
        
     

<!-- <img src="logo.png" alt="profile" style="width:70px;height:70px;border-radius:50%;"> -->




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
                <li><a href="service_dash.php"  >Dashboard</a></li>
                <li><a href="service_view.php" style="color:yellow;border-bottom: 3px solid red;">View / Delete Plans</a></li>
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

    <h2 style="text-align:center;font-size:45px;margin-top:2%;font-family: 'IM Fell Great Primer SC', serif;">LIST OF TIFFIN PLANS</h2>
    
    

    <div class="refresh">
        
        <?php

        $id=$_SESSION['id'];
        // echo $id;
        $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $sql="select count(name) from plan_info where id='$id';";
        $result=pg_query($connect,$sql);

        while($row=pg_fetch_row($result))
        {
        ?>

        <h4 style='margin-top:6px;'>Showing <?php echo$row[0]; ?> Records</h4>
        
        <?php
        }
        ?>

        <form action="service_view.php">
            <button type="submit">Refresh</button>
        </form>
    </div>




    <div class="contain">
      
            <!-- PHP LOGIC -->

            <?php
        
            echo "<table border=1>
                       
                            <th>Plan Name</th>
                            <th>Plan Description</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Image</th>
                            </tr>";

            

            
            $sql="select * from plan_info where id='$id';";
            $result=pg_query($connect,$sql);

            if($result){
                while($row=pg_fetch_array($result)){
                    if($row[5]=='open')
                    {
                        echo "<tr><td>";
                    
                    echo "<b>$row[1]</b>";
                    echo "</td><td>";
                    echo$row[2];
                    echo "</td><td>";
                    echo$row[3];
                    echo "</td><td>";
                    echo$row[4];
                    echo "</td><td>";
                    echo$row[5];
                    echo "</td><td>";
                    ?>
                    <img src="plan_pic/<?php echo$row[6];?>" alt="plan pic" style="width:100px;height:100px;">

                    <?php
                    echo "</td><td>";
                    echo "<form action='service_view.php' method='POST'>
                            <input type=hidden value='$row[7]' name='del'>
                            <button type='submit' class='del'>Delete</button>
                            </form>";
                    echo "</td><td>";
                    echo "<form action='service_view.php' method='POST'>
                    <input type=hidden value='$row[7]' name='upt'>
                    <button type='submit' class='del'>Update</button>
                    </form>";
                    echo "</td></tr>";

                    }
                    else if($row[5]=='close')
                    {
                        echo "<tr><td  style='background-color:#ff9999;'>";
                    
                    echo "<b>$row[1]</b>";
                    echo "</td><td style='background-color:#ff9999;'>";
                    echo$row[2];
                    echo "</td><td style='background-color:#ff9999;'>";
                    echo$row[3];
                    echo "</td><td style='background-color:#ff9999;'>";
                    echo$row[4];
                    echo "</td><td style='background-color:#ff9999;'>";
                    echo$row[5];
                    echo "</td><td>";
                    ?>
                    <img src="plan_pic/<?php echo$row[6];?>" alt="plan pic" style="width:100px;height:100px;">

                    <?php
                    echo "</td><td>";
                    echo "<form action='service_view.php' method='POST'>
                            <input type=hidden value='$row[7]' name='del'>
                            <button type='submit' class='del'>Delete</button>
                            </form>";
                    echo "</td><td>";
                    echo "<form action='service_view.php' method='POST'>
                    <input type=hidden value='$row[7]' name='upt'>
                    <button type='submit' class='del'>Update</button>
                    </form>";
                    echo "</td></tr>";
                    }
                    
                    
                    
                    
                    }
                    

                   
                   

                    

                }

                echo "</tables>";
            
                if(isset($_POST['del'])){

                    $x=$_POST['del'];

                    echo "<script>alert('Plan deleted Successfully') </script>";
                    // echo $x;
                    
                    $sql="DELETE FROM plan_info where unique_id='$x';";
                    $result1=pg_query($connect,$sql);

                    echo "<script>window.location.href='service_view.php'</script>";
                
                   
                }
                if(isset($_POST['upt']))
                {
                    $_SESSION['unq_id']=$_POST['upt'];
                    echo $_SESSION['unq_id'];
                    echo "<script>window.location.href='service_updateplan.php'</script>";
                }
            ?>

    </div>

    
</div>




</body>
</html>