<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
// echo $_SESSION['location'];

if(isset($_GET['value']))
{
    $x=$_GET['value'];
    $_SESSION['tf_nm']=$x;
    // echo $_SESSION['tf_nm'];
}
else{
    echo"<script>alert('no')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="home.css"> -->
        <title>Service Description</title>

       <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sura:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        
        
<style>
*{
    padding: 0px;
    margin: 0px;
}
/* 
.bg{
    width: 100%;
} */

.bg img{
    width:100%;
    /* height:auto; */
    
}
.topper{
    width:100%;
    /* padding :0px 20px; */
    display: flex;
    justify-content: space-between;
    position:absolute;
    top:0;
}

.navbar{
    height: 50px;
    /* background-color: red; */
    margin-top:45px;
    margin-right: 2%;
    /* position: absolute; */
}
.navbar a{
    font-size:25px;
    color: black;
    font-weight:600;
    text-decoration: none;
    margin-left: 50px;
    /* position: fixed; */
    
}

.navbar a:hover{
    color: red;
    border-bottom: 2px solid red;
}
.logo{
    background-size: cover;
    height: 150px;
    width: 90%;
    margin-right: 50px;
    margin-top: 1px;
}



.contain{
    width: 78%;
    height: 1500px;
    background-color: #ffff;
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-radius:10px;
    border:1px solid grey;
    margin-left:11%;
    /* margin-right:5%; */
    margin-top: 12%;
    /* display: flex; */
    position: absolute;
    top:0;
    /* padding-left:20px;
    padding-top:20px; */
    border:2px solid white;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

}

.img_contain{
    width:100%;
    height:430px;
    /* background:red; */
    /* background-color:red; */
    
    
}

.title{
    width:98%;
    height:150px;
    /* background-color:red; */
    padding:15px;
}

.btns{
    width:100%;
    height:50px;
    /* background-color:green; */
    display:flex;
    /* justify-content:space-evenly; */
    /* padding-top:2px; */
}

.btn1,.btn2,.btn3{
    width:15%;
    height:45px;
    margin-left:10px;
    
}

/* .btn1{
    background-color:brown;
}
.btn2{
    background-color:black;
}
.btn3{
    background-color:yellow;
} */

button{
    width:100%;
    height:45px;
    font-size:18px;
    font-weight:bold;
    border-radius:8px;
    border:1px solid white;
    /* text-align:left; */
    cursor:pointer;
    font-family: "Open Sans", sans-serif;
    background-color:white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

button:hover{
    color:Blue;
    border:1px solid grey;
}

.btn2 button:hover{
    background-color:rgb(7 ,94 ,84,0.2);
}



.plan{
    margin-top:36px;
    width:100%;
    height:650px;
    /* background-color:green; */
    display:flex;
    flex-wrap:wrap;
    justify-content:space-evenly;
    /* padding-left:100px; */

}

.container{
    width:300px;
    height:250px;
    /* background-color:red; */
    margin-left:28px;
    /* margin-top:px; */
    
}

.card{
    width:100%;
    height:100%;
    /* background-color:green; */
    position:relative;
    transition: 2s;
    transform-style:preserve-3d;
}

.container:hover >.card{
    /* border:3px solid red; */
    cursor:pointer;
    transform:rotateY(180deg);
    
}

.front,.back{
    width:100%;
    height:100%;
    border-radius:20px;
    box-shadow:0 0 5px 2px rgba(50,50,50,0.25);
    position:absolute;
    backface-visibility:hidden;
}

.front{
    /* background-image:url('https://source.unsplash.com/random/350x500'); */

}

.back{
    /* background-color:white; */
    background: linear-gradient(90deg, rgba(6,6,8,0.7) 19%, rgba(117,112,129,0.8) 71%);
    transform:rotateY(180deg);
    /* padding:5px; */
    padding-top:10px;
    /* font-size:20px; */

}


/* --------------------------- */
/* --------------------------- */
/* GET INFO BTN HERE */
.info{
    width:20%;
    height:50px;
    /* background-color:red; */
    margin-left:40%;
    margin-top:50px;
}

.info .get_info{
    width:100%;
    height:50px;
    font-size:18px;
    font-weight:bold;
    border:1px solid white;
    border-radius:8px;
    font-family: "Open Sans", sans-serif;
    background-color:white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.info .get_info:hover{
    cursor:pointer;
    /* background-color:grey; */
    border:1px solid grey;
    color:red;
}


/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* footer */

.footer{
    height: 400px;
    /* background-color: red; */
    display: flex;
    justify-content: space-evenly;
    margin-top: 1%;
    
}

.footer_box{
    width: 20%;
    height: 250px;
    /* border: 1px solid black; */
    margin-top: 50px;
}

.footer_box ul{
    /* padding: 20px; */
    font-size: 20px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    list-style: none;
    color: grey;
    margin-left: 20px;
    /* font-weight: bold; */
}

.footer_box ul li{
    padding-bottom: 16px;
}

.footer_box ul li a{
    text-decoration: none;
    color: grey;
}

.footer_box ul li a:hover{
    color: red;
    cursor: pointer;
    border-bottom: 1px solid black;
}

.add{
    font-size: 17px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color:grey;
    margin-left:20px;
    /* font-weight: bold; */

}

.connect{
    width: 90%;
    height: 70px;
    background-color: red;
    display: flex; 
    justify-content: space-evenly;
    margin-top: 10px;
}

.icons{
    width:100%;
    height:50px;
    /* border:1px solid red; */
    margin-top:30px;
    display: flex;
    /* justify-content:space-evenly; */ 
    
}


.icons .facebook,.instagram,.twitter{
    width: 60px;
    height: 50px;
    /* border:1px solid rgb(221, 216, 223); */
    border-radius: 10px;
    background-color: rgb(221, 216, 223);
    margin-left: 30px;
}

.icons .facebook i,.instagram i,.twitter i{
    display: flex;
    justify-content: center;
    padding-top: 10px;
    font-size: 30px;
    color:black;
}

.facebook a,.instagram a,.twitter a{
    text-decoration: none;
}

.facebook:hover{
    background-color: rgb(32, 77, 113);
    border: 1px solid blue;
}
.instagram:hover{
    background-color: rgb(217, 155, 165);
    border: 1px solid pink;
}
.twitter:hover{
    background-color: rgb(40, 153, 191);
    /* opacity: 0.7; */
    border: 1px solid lightblue;
}



.c a{
    /* color: grey; */
    text-decoration: none;
}

.c:hover{
    
    border: 1px solid red;
    /* color: red; */
    cursor: pointer;
}

.c a:hover{
    color: red;
    cursor: pointer;
}

.madeby{
    width: 100%;
    height: 50px;
    /* border: 1px solid red; */
    /* margin-top: 20px; */
    display: flex;
    justify-content: center;

}
.madeby h1{
    font-size: 20px;
    padding-top: 15px;
    font-family: 'Maven Pro', sans-serif;
}

</style>
</head>
<body>

    <div class="bg">
        <img src="gradient2.png" alt="" height="1770px">

    <div class="topper">
        <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
        <div class="navbar">
            <a href="../home.php"><span >Home</span></a>
            <a href="../about_us.html">About us</a>
            <a href="../contact_us.php">Contact us</a>
            <a href="../service_admin/login.php">Promote Business</a>
        </div>
    </div>


    <!-- main -->
    <div class="contain">
        <div class="img_contain">

        
            <?php
            $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
            $query="select service_name,profile_pic from tiffin_info where service_name='$x';";
            $result=pg_query($con,$query);

            while($row=pg_fetch_row($result))
            {
            ?>
            
            <img src="profile_pic/<?php echo $row[1];?>" alt="profile image" style="height:430px;background-size:cover;border-top-left-radius:15px;border-top-right-radius:15px;">
        </div>
            
        <div class="title">
                <i style="font-size:30px;" class="fa-regular fa-thumbs-up"></i> 
                <span style="font-size:45px;font-weight:bolder;margin-left:10px; font-family: Trykker, serif;"><?php echo$row[0];?></span>
            
            
                <?php
                }
                ?>
                <br>
                <span style="width:100%">
                <i style="width:10%;margin-top:18px;font-size:15px;color:green;"  class="fa-solid fa-circle-check"> Verified</i>
                <i style="width:10%;margin-top:18px;font-size:15px;" class="fa-solid fa-circle-check">  Claimed</i>
                </span>
             
                <h3 style="width:100%;margin-top:15px;font-size:18px;font-family: Sura, serif;"><span style="color:green;">Open</span> 12:00pm || <span style="color:red;">Closes</span> 10:00pm</h3>

            </div>
            
            <form  method="post">
            <div class="btns">
                <div class="btn1">
                    <button type="submit" name="mobile"><i class="fa-solid fa-phone"></i>  Contact</button>
                </div>

                <div class="btn2">
                <button style="color:green;" type="submit" name="whatsapp"><i class="fa-brands fa-whatsapp"></i>  Whatsapp</button>
                </div>

                <div class="btn3">
                    <button type="submit" name="share"><i class="fa-solid fa-share"></i>  Share</button>
                </div>
            </div>
            </form>

            <?php
            if(isset($_POST['mobile'])||isset($_POST['whatsapp']))
            {
                // echo "<script>alert('ok')</script>";
                echo "<script>window.location.href='userform.php'</script>";
            }
            ?>


            
        <div style="width:95%;margin-left:20px;height:1px;background-color:grey;margin-top:24px;"></div>
        
 <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!--  Plan Info  -->

        <div class="plan">
        
        <?php
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select id from tiffin_info where service_name='$x';";
        $result=pg_query($con,$query);

        while($row=pg_fetch_row($result))
        {
            $id=$row[0];
            // echo "<script>alert('$id')</script>";
        }

        $query="select * from plan_info where id='$id';";
        $result=pg_query($con,$query);

        $row1=pg_fetch_row($result);
        if($row1[0]==0)
        {
            echo "<script>alert('Service Dont have Plans Yet...');
                        window.location.href='2ndpage.php';
            </script>";
        }

       
        while($row=pg_fetch_row($result))
        {
            
           
            echo "<div style='width:350px;height:310px;'>
                    <div class='container'>
                        <div class='card'>
                            <div class='front'>";
                            ?>

                                <img src='plan_pic/<?php echo$row[6];?>' alt='plan image' style="height:250px;background-size:cover;border-radius:20px;">
                            
                            <?php
                            echo "</div>
                            <div class='back'>
                                    <h3 style=' font-family: IM Fell Great Primer SC, serif;text-align:center;margin-top:30px;font-size:23px;margin-left:10px;color:white;'>$row[2]</h3>
                                    <h3 style=' font-family: IM Fell Great Primer SC, serif;text-align:center;margin-top:20px;font-size:23px;margin-left:10px;color:white;'>Available:- $row[4]</h3>
                                    <h3 style=' font-family: IM Fell Great Primer SC, serif;text-align:center;margin-top:20px;font-size:23px;margin-left:10px;color:white;'>Price:- $row[3]</h3>
                            </div>
                        </div>
                    </div>
                    <h3 style='font-size:25px;text-align:center;margin-top:20px; font-family: Spectral SC, serif;'>$row[1]</h3>
                </div>";
            
        }

        ?>

      

        </div>

        <!-- ---------------------------------------- -->
        <!-- ---------------------------------------- -->
        <!-- GET INFO HERE BTN -->
        <div class="info">
            <form method="post">
                <input type="submit" name="sub" value="GET INFO HERE" class="get_info">
            </form>
        </div>
        
        <?php
        if(isset($_POST['sub']))
        {
            echo "<script>window.location.href='userform.php'</script>";
        }
        ?>
    
    </div>
        
    </div>


    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!--  Footer  -->

    <!-- <div class="hr" style="width:80%; border:1px solid rgb(164, 156, 156);align-content: center;margin: auto;"></div> -->

    <div class="footer">
           <div class="footer_box">
                <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;padding: 20px;">Useful Links :</h3>

                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="register.html">Promote Your Business</a></li>

                </ul>
           </div>
           
           <div class="footer_box">
                <h3  style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;padding: 20px;">Address :</h3>

                <p class="add">Grand Highstreet Phase 1, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Pimpri-Chinchwad, Maharashtra 411057 <br> <br>+91-8888888888  <br><br> websupport@homemademeals.com
                </p>
           </div>

           <div class="footer_box">
                <h3  style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;padding: 20px;">Connect: <br>
                    
                    <div class="icons">
                        <div class="facebook"><a href="connect.html"><i class="fa-brands fa-facebook-f"></i></a></div>
                        <div class="instagram"><a href="connect.html"><i class="fa-brands fa-instagram"></i></a></div>
                        <div class="twitter"><a href="connect.html"><i class="fa-brands fa-twitter"></i></a></div>
                    </div>
                
                
                </h3>
           </div>
   

    </div>

    <div class="hr" style="width:80%; border:1px solid rgb(164, 156, 156);align-content: center;margin: auto;"></div>

    <div class="madeby">    
        <h1>Created By <span style="color:red;font-weight:bolder;">Vedant Ghadge</span> & <span style="color:red;font-weight:bolder;">Vikrant Patil</span>  | All Rights Reserved</h1>
   </div>

</body>
</html>
