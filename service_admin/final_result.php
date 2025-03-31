<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$n=$_SESSION['tf_nm'];
if($n==null)
{
    echo "<script>window.location.href='home.php'</script>";
}
// echo $n;

?>


<html>
    <head>
    <title>Final Result</title>
    
    <!-- --------------------------------- -->
    <!-- ---------------------------------- -->
    <!-- FONT ADDITION LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
     <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}



.bg img{
    width:100%;
    
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
    font-size:23px;
    color: black;
    font-weight:600;
    text-decoration: none;
    margin-left: 50px; 
    
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

/* .body_1{
    width:100%;
    display: flex;
    justify-content: left;
    align-items: center;
    min-height: 100vh;
    background-image:url("image3.jpg");
    background-blend-mode: darken;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-right:400px;
    
    
} */



.wrap{
    width:900px;
    background: #ffff;
    /* box-shadow:0 0 50px rgba(0,0,0, .2); */
    /* background-image:url(userbg.jpg); */
    background-blend-mode: black;
    margin-right:500px;
    background-size: cover;
    border-radius: 20px;
    color: white;
    padding:30px 35px 55px;
    margin: 0 50px;
    margin-right:200px;
    margin-left: 20%;
    position: absolute;
    margin-top:18px;
    top:20%;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;


}


.profile_img{
    width:23%;
    height:150px;
    margin-left:38%;
    border:1px solid black;
    background-size:cover;
}

.info{
    width:100%;
    height:160px;
    /* background-color:red; */
    margin-top:20px;
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
    padding-left:20px;
    padding-right:20px;
}

.info .b1{
    width:48%;
    height:60px;
    /* border:1px solid black; */
}

.b1 input{
    width:100%;
    height:60px;
    margin-left:10px;
    margin-top:10px;
    background-color:white;
    border:1px solid grey;
    border-radius:6px;
    padding: 20px;
    cursor:text;
    font-size:18px;
    color:rgb(107, 96, 96);
    font-family: "Pridi", serif;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;

}

textarea{
    width:100%;
    height:60px;
    margin-left:10px;
    margin-top:10px;
    background-color:white;
    border:1px solid grey;
    border-radius:6px;
    padding: 10px;
    cursor:text;
    font-size:15px;
    color:rgb(107, 96, 96);
    font-family: "Pridi", serif;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}


button{
    width:30%;
    height:45px;
    font-size:18px;
    font-weight:bold;
    border-radius:5px;
    border:1px solid grey;
    /* text-align:left; */
    cursor:pointer;
    color:black;
    margin-top:30px;
    margin-left:19%;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    
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
    font-family: "Trykker", serif;
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
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
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
    background-color: #1778F2;
    border: 1px solid blue;
}
.instagram:hover{
    background: linear-gradient(115deg, #f9ce34, #ee2a7b, #6228d7);
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


    <div class="body_1">


        <div class="bg">
            <img src="gradient2.png" alt="" width="100px" height="880px">
    
            <div class="topper">
        <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
        <div class="navbar">
            <a href="../home.php"><span >Home</span></a>
            <a href="../about_us.html">About us</a>
            <a href="../contact_us.php">Contact us</a>
            <a href="../service_admin/login.php">Promote Business</a>
        </div>
    </div>

        
        <!-- PHP LOGIC -->
        <?php
        $x=$_SESSION['tf_nm'];
        // echo $x;
            $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
            $query="select * from tiffin_info where service_name='$x';";
            $result=pg_query($con,$query);

           
            
        ?>

        <div class="wrap">
            <?php
           
            while($row=pg_fetch_row($result))
                 
             {    
             
            ?>
             <div class="profile_img">
                <img src="profile_pic/<?php echo$row[11]; ?>" alt="profile image" height="150px">
             </div>
            
             <h3 style="  font-family:Hahmlet, serif;width:100%;height:40px;text-align:center;margin-top:20px;font-size:30px;color:black;"><?php echo$row[1]; ?></h3>
             
             <div class="info">
                <div class="b1"><input type="text" value="<?php echo$row[2]; ?>" readonly></div>
                <div class="b1"><input type="text" value="<?php echo$row[3]; ?>" readonly></div>
                <div class="b1"><input type="text" value="<?php echo$row[4]; ?>" readonly></div>
                <div class="b1"><textarea name="" id="" cols="20" rows="5" placeholder="<?php echo$row[6].", ".$row[7].", ".$row[8].", ".$row[9]; ?>"></textarea></div>
             </div>

             <?php
             } 
             ?>

            <form method="post">
             <input type="checkbox" name="check" value="checked" id="" style="margin-left:30px;margin-top:26px;"> <span style="color:black;font-family: Macondo Swash Caps, cursive;" required> I HERE BY ACCEPT ALL <B>TERMS AND CONDITIONS</B></span>
                <br>
             <button style="color:green;" type="submit" name="whatsapp"><i class="fa-brands fa-whatsapp"></i> Connect To Whatsapp</button>
             <button style="margin-left:2%;" type="submit" name="mail" class="mail"><i class="fa-brands fa-whatsapp"></i> Send Mail</button>
             </form>
        </div>
        
        <?php
            

           if(isset($_POST['whatsapp']))
           {
                if($_POST['check']==null)
                {
                    echo "<script>alert('PLease Accpet Terms and Conditions')</script>";
                }
                if($_POST['check']=='checked')
                {
                    $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                    $query="select * from tiffin_info where service_name='$x';";
                    $result=pg_query($con,$query);

                    while($row=pg_fetch_row($result))
                    {
                        $nm=$row[2];
                    }
                    $msg="https://api.whatsapp.com/send?phone=919325433589&text=%22Hii%20".$nm."%2C%20I%20learned%20about%20your%20service%20through%20Homemade%20Meals%20and%20I%27m%20interested%20in%20learning%20more.%20Could%20you%20please%20spare%20a%20moment%20to%20answer%20a%20few%20questions%3F%20Thanks!%22";
                    
                    echo "<script>window.location.href='$msg'</script>";
                }
             
           } 
           
           if(isset($_POST['mail']))
           {
            if($_POST['check']==null)
            {
                echo "<script>alert('PLease Accpet Terms and Conditions')</script>";
            }
            if($_POST['check']=='checked')
            {
                
                echo "<script>var r=confirm('Redirecting To Another Website..');
                            if(r==true)
                            {
                                window.location.href='https://mail.google.com/';
                            }
                            </script>";
            }
           }


        ?>

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