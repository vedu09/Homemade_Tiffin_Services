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
    <title>View Services</title>
    
    <!-- <link rel="stylesheet" href="dashboard1.css"> -->

     <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Headland+One&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
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
    color: #ff1a1a;
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
    padding-top: 40px;
    padding-left: 80px;
    /* background-image: url('dash.jpg'); */
    /* background-repeat: no-repeat;
    background-size:contain;
    background-position: center; */
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
    width: 95%;
    height: auto;
    max-height: 500px;
    /* background-color: yellow; */
    overflow-y: scroll;
    /* border: 1px solid black; */
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
                <h2>Admin,<span style="color: pink;"><?php echo$_SESSION['adn_name'];?></span></h2>
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
                <li><a href="dashboard_dash.php">Dashboard</a></li>
                <li><a href="dashboard_view.php" style="color:yellow;border-bottom: 3px solid red;">View Tiffin Services</a></li>
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
        
        <h2 style="text-align:center;font-size:45px;font-family: 'IM Fell Great Primer SC', serif;">LIST OF TIFFIN SERVICES</h2>
        
        <div class="refresh">
                <form action="dashboard_view.php">
                    <button type="submit">Refresh</button>
                </form>
        </div>
    
        <div class="contain">

            
            
            <!-- php logic -->
            <?php

                

                
                echo "<table border=1>
                        <tr><th>Id</th>
                            <th>Service Name</th>
                            <th>Full Name</th>
                            <th>Mobile No</th>
                            <th>Email Id</th>
                            <th>City</th>
                            <th></th>
                            <th></th>
                            </tr>";
                $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");

                $sql="select id,service_name,full_name,mobile_no,email_id,city from tiffin_info";
                $result=pg_query($connect,$sql);

                while($row=pg_fetch_array($result)){
                    echo "<tr><td>";
                    echo$row[0];
                    echo "</td><td>";
                    echo$row[1];
                    echo "</td><td>";
                    echo$row[2];
                    echo "</td><td>";
                    echo$row[3];
                    echo "</td><td>";
                    echo$row[4];
                    echo "</td><td>";
                    echo$row[5];
                    echo "</td><td>";
                    echo "<form action='dashboard_view.php' method='POST'>
                            <input type=hidden value='$row[0]' name='del'>
                            <button type='submit' class='del'>Delete</button>
                            </form>";

                   

                    echo "</td></tr>";
                    

                }

                echo "</table>";

                if(isset($_POST['del'])){

                    $x=$_POST['del'];
                    // echo $x;
                    
                    $sql="DELETE FROM tiffin_info where id='$x'";
                    $result1=pg_query($connect,$sql);
                
                   
                }


                $sql1="select count(id) from tiffin_info;";
                $result1=pg_query($connect,$sql1);

                while($row=pg_fetch_array($result1))
                {
                    echo "<h4 style='color:brown;margin-top:5px;margin-bottom:5px;'>Showing $row[0] entries";
                }
               

            ?>

        </div>
    </div>
    
</body>
</html>