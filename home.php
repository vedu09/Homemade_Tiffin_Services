<?php
 session_start();
 ini_set('display_errors', '0');
//  if($_SESSION['location']!="")
//  {
//     echo "<script>window.location.href='home.php'</script>";
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------------------------------- -->
    <!-- ---------------------------------- -->
    <!-- FONT ADDITION LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    

    <title>Home</title>

    <style>

*{
    padding: 0px;
    margin: 0px;
}


/* INTRODUCTION */

.back_img{
    width: 100%;
    height: 729px;
    /* background-color: red; */
    margin:0px;
    padding: 0px;
    background-image: url("https://img.playbook.com/gMjpz0Xqo7rWj5iQ6h6eSuj8lD79T1fgW_q9-2CmXmA/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljL2MyMjZmMjQz/LTQ1YjEtNDk3OC1h/NmE4LTBiMjJmMGZj/MWRkMQ");
    background-repeat: no-repeat;
    background-size: cover;
    /* padding-left: 10%; */
}


.topper{
    /* position: absolute; */
    top: 0;
    left:0;
    width:98;
    padding :0px 10px;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    /* z-index: 100; */
}

.navbar{
    height: 50px;
    /* background-color: red; */
    margin-top:45px;
    margin-right: 2%;
}

.navbar a{
    font-size:25px;
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


.content{
    position: absolute;
    color: black;
    /*background-color: purple;*/
    top:35%;
    left:0%;
    width: 40%;
    height: 110px;
}

.content h1{
    font-size: 45px;
    text-align: center;
    
}

.content p{
    color: brown;
    font-size: 55px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-weight: bolder;
}



.contain{
    width: 35%;
    height: 55px;
    /* background-color: red; */
    margin-left: 3%;
    margin-top: 17%;
    display: flex;

}

.search{
    width: 80%;
    height: 50px;
    /* background-color: black; */
    
    
}

.search input{
    outline:none;
    width:89%;
    height: 45px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 2px solid rgb(240, 242, 233);
    padding-left:38px;
    font-size:15px;
    font-weight: bold;
    font-family: "Trykker", serif;
    cursor:pointer;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}

.search input::placeholder{
    padding-left: 0px;
    font-size: 15px;
    font-weight: bold;
}

.search input:hover{
    cursor:text;
}




.Submit{
    width: 30%;
    height: 50px;
    /* background-color: green; */
}

.Submit input{
    outline:none;
    font-size: 18px;
    font-weight: bold;
    font-family: "Trykker", serif;
    width: 80%;
    height: 48px;
    border: 2px solid rgb(240, 242, 233);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    cursor: pointer;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}

.Submit input:hover{
    color:red;
}







/* ------------------------------------------------------ */
/* ------------------------------------------------------ */
/* ------------------------------------------------------ */
/* Types of Cuisine */

.second{
    margin-top: 10px;
    width: 100%;
    height: 750px;
    background-color: rgb(244,244,244);
    /* background-color: red; */
    /* border: 2px solid red; */
}

.second_title{
    font-size: 40px;
    font-family: "Hahmlet", serif;
    text-align: center;
    color:grey ;
    padding-top: 80px;
}



.second_types{
    width: 100%;
    height: 390px;
    /* border: 1px solid green; */
    margin-top: 40px;
    display: flex;
    justify-content: center;
    /* background-color: grey; */
}

.second_box{
    width: 250px;
    height: 350px;
    border: 2px solid rgba(207, 209, 205);
    border-radius: 8px;
    font-family: "Overpass", sans-serif;
    color:rgb(128, 128, 128);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin-top: 30px;
    margin-left: 30px;
    transition: transform 0.1s ease-in-out;
}

.img1{
    height:250px;
    background-size: cover;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
}

.second_box:hover{
    /* border: 1px solid red; */
    color:  #cb3434;
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    transform: translateX(-3px) translateY(-3px);
   
}

.more_btn{
    text-align: center;
    border: 1px solid rgb(240, 242, 233);
    /* width: 20%; */
    margin-top: 50px;
    margin-left: 46%;
    padding-top:4px;
    height: 25px;
    width: 120px;
    border-radius: 4px;
    background-color: 240, 242, 233;
    font-size: 18px;
    font-weight: bold;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}

.more_btn a{
   text-decoration:none;
   color:#666666;
   /* margin-top:10px; */
   
}





.more_btn:hover{
    color: red;
    cursor: pointer;
    border:1px solid #a6a6a6;
    
}

a:hover{
    color: #ff8080;
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


      
<!-- INTRODUCTION -->
<div class="back_img" id="first">

    <div class="topper">
        <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
        <div class="navbar">
            <a href="home.php"><span style="color: red;border-bottom: 2px solid red;">Home</span></a>
            <a href="about_us.html">About us</a>
            <a href="contact_us.php">Contact us</a>
            <a href="service_admin/login.php">Promote Business</a>
        </div>
    </div>
    <div class="content">
        <h1>THE REAL TASTE OF<br><p>MOTHER'S HAND</p></h1>
    </div>
    
    <form method="POST">
        
        <div class="contain">
        
            <div class="search">
                <!-- <input type="text" placeholder="Enter Location   eg:Kothrud,Pune" name=""> -->
                <div style="position:absolute;margin-left:20px;margin-top:16px;"><i class="fa-solid fa-magnifying-glass"></i></div>
                <input list="browsers" name="browser" placeholder="Enter Location To Search " id="browser">
                    <datalist id="browsers">
                        <option value="Banner">
                        <option value="Karvenagar">
                        <option value="Kothrud">
                        <option value="Pashan">
                        <option value="Warje">
                    </datalist>
            </div>
        
            <div class="Submit">
                <input type="submit" name="sub" value="Search" class="input">
            </div>
        </div>
    </form>

    <?php
    if(isset($_POST['sub']))
    {
       
        $_SESSION['location']=$_POST['browser'];
        $abc=ucwords(strtolower($_SESSION['location']));
        // echo $abc;

        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select id from tiffin_info where city='$abc';";
        $result=pg_query($con,$query);
        
        $row=pg_fetch_row($result);
        
            if($row[0]==0)
            {
                echo"<script>alert('No services in $abc Loation / Area')</script>";
            }
            else if($row[0]!=0)
            {
                echo "<script>window.location.href='service_admin/2ndpage.php'</script>";
       
            }
        

        
    }
    ?>
    
    </div>
    
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- types of cuisine -->
    
        <div class="second">
    
            <h2 class="second_title">Types of Tiffins you can <br><span style="color: red;font-size: 37px;">Find Here?</span></h2>
    
            <!-- <h4 class="second_caption">What types of tiffins can you find here?</h4> -->
    
    
    
            <div class="second_types">
                <div class="second_box">
                        <div class="img1" style="background-image: url('https://img.pbkstaging.com/uPkvPaWMxMTMbEvYE1Vfwlg67rDasx1b1269lFQz7ok/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzYyNjIzODcz/LWE5YTctNDZjOS04/NGU0LTU4Zjk0NTE5/YTYyOQ');"></div>
                        <h4 style="font-size: 25px;text-align: center;padding-top: 30px;">Maharashtra Tiffin</h4>
                </div>
    
                <div class="second_box">
                    <div class="img1" style="background-image: url('https://img.pbkstaging.com/tbZ0gxd7ChzP-4ReLwErPBAj6vMHUbyUUR5x7dfBpro/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljL2MwNjM5Nzdm/LWI1MGMtNGQ3NC05/YjMyLWFiNGM2ODZh/ZTk0Zg');"></div>
                    <h4 style="font-size: 25px;text-align: center;padding-top: 30px;">Gujarati Tiffin</h4>
                    
                 </div>
    
                <div class="second_box">
                    <div class="img1" style="background-image: url('https://img.pbkstaging.com/pkzRcITUIbzGVrwUvTPY6dEI-AWOpYhan2QLDw6J3uk/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzJlZjNlMzE3/LThhNWQtNDhkNC1h/NzUwLTA4YWIyOTIx/MzFjYg');"></div>
                    <h4 style="font-size: 25px;text-align: center;padding-top: 30px;">Rajasthani Tiffin</h4>
                    
                </div>
    
    
                <div class="second_box">
                    <div class="img1" style="background-image: url('https://img.pbkstaging.com/uPkvPaWMxMTMbEvYE1Vfwlg67rDasx1b1269lFQz7ok/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzYyNjIzODcz/LWE5YTctNDZjOS04/NGU0LTU4Zjk0NTE5/YTYyOQ');"></div>
                    <h4 style="font-size: 25px;text-align: center;padding-top: 30px;">Non-Veg Tiffin</h4>
                    
                </div>
        
               
            </div>
    
            <div class="more_btn">
               
                <a href="home.php">Explore Here</a>
                
            </div>

           
    
        </div>
    
    
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!--  Footer  -->

    <!-- <div class="hr" style="width:80%; border:1px solid rgb(164, 156, 156);align-content: center;margin: auto;"></div> -->

    <div class="footer">
           <div class="footer_box">
                <h3 style="font-family: Hahmlet, serif;padding: 20px;">Useful Links :</h3>

                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="service_admin/login.php">Promote Your Business</a></li>

                </ul>
           </div>
           
           <div class="footer_box">
                <h3  style="font-family: Hahmlet, serif;padding: 20px;">Address :</h3>

                <p class="add">Grand Highstreet Phase 1, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Pimpri-Chinchwad, Maharashtra 411057 <br> <br>+91-8888888888  <br><br> websupport@homemademeals.com
                </p>
           </div>

           <div class="footer_box">
                <h3  style="font-family: Hahmlet, serif;padding: 20px;">Connect: <br>
                    
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
    
    
