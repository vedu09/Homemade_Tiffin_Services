<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
$x=ucwords(strtolower($_SESSION['location']));
$cusine=$_GET['value'];
// echo $cusine;
// echo $x;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="home.css"> -->
        <title>3rd Page</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

         <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Cagliostro&family=Cormorant+Upright:wght@300;400;500;600;700&family=Dosis:wght@200..800&family=Handlee&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stardos+Stencil:wght@400;700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
     
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Cagliostro&family=Cormorant+Upright:wght@300;400;500;600;700&family=Dosis:wght@200..800&family=Handlee&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Shantell+Sans:ital,wght@0,300..800;1,300..800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stardos+Stencil:wght@400;700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
     
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
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

.marquee{
    width:100%;
    height:30px;
    background: radial-gradient(circle at center, #ffffff , #b4ecfd);
    position:absolute;
    top:21%;
}

.scroll_text{
    width:100%;
    height:30px;
    
    /* background-color: red; */
    font-size:18px;
    padding-top:6px;
    font-weight:bolder;
    font-family: "Truculenta", sans-serif;
}


.contain{
    width: 60%;
    height: 55px;
    /* background-color: red; */
    margin-left: 24%;
    margin-top: 17%;
    display: flex;
    position: absolute;
    top:0;

}

.search{
    width: 450%;
    height: 50px;
    /* background-color: black; */
}

.search .location{
    outline:none;
    width: 14%;
    height: 45px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 1px solid #ffff;
    padding-left:35px;
    font-size:15px;
    font-weight: bold;
    background-color:white;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    font-family: "Shantell Sans", cursive;
}

.search .tiffin{
    outline:none;
    width: 75%;
    height: 45px;
    /* border-top-left-radius: 10px;
    border-bottom-left-radius: 10px; */
    border: 1px solid #ffff;
    padding-left:40px;
    font-size:15px;
    font-weight: bold;
    background-color:White;
    margin-left:-1%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    font-family: "Shantell Sans", cursive;
}


.search input::placeholder{
    padding-left: 0px;
    font-size: 15px;
    font-weight: bold;
}


.Submit{
    width: 90%;
    height: 45px;
    /* margin-left: 60%; */
    /* background-color: green; */
}

.Submit input{
    /* overflow:hidden; */
    outline:none;
    font-size: 17px;
    font-weight: bold;
    width: 100%;
    height: 47px;
    border: 1px solid #ffff;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    cursor: pointer;
    /* background-color:red; */
    font-family: "Shantell Sans", cursive;
    margin-left:-9%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.Submit input:hover{
    color:#ff6666;
    cursor:pointer;

}


.filters{
    display: flex;
    justify-content: space-evenly;
    
    height:200px;
    width:57%;
    /* background-color: red; */
    margin-left: 25%;
    position: absolute;
    top:52%;

}


.c1,.c2,.c3,.c4{
    margin-top: 20px;
    margin-right: 10px;
    width:20%;
    height:150px;
    border-radius: 50%;
    
    cursor: pointer;    
    /* background-color: black; */
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}

.c1:hover,.c2:hover,.c3:hover,.c4:hover{
    border:3px solid #00ff55;
}

.img{
    background-size: cover;
    border-radius: 50%;
    height:100%;
}

.menus{
    height:auto;
    width:100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    /* background-color: #e2e7e6; */
    position:absolute;
    top:85%;
    /* padding:10px; */
}
.menu1{
   /* border: 2px solid black;  */
    height: 400px;
    width: 27%;
    background-color: white;
    padding: 20px 0px 15px;
    margin-top: 15px;
    margin-bottom:15px;
    /* margin:23px; */
    border-radius:5px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

}

.menu1:hover{
    border:2px solid grey;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
.menu-img{
    height:300px;
    /* background-color:red; */
    /* border:2px solid red; */
    /* background-size: cover; */
    /*background-repeat: no-repeat;*/
    margin-top: 1rem;
    margin-bottom: 1rem ;
}

.menu-content{
    /* margin-top:10px; */
    margin-left: 14px;
    margin-right: 14px;
    text-decoration: none;
    /* background-color: red; */
    width:90%;
    height:200px;
    font-family: "IM Fell Great Primer SC", serif;
    color:	 #666666;
    
}
.menu-content p{
    margin-top:10px;
    color: #032429;
    text-decoration: none;
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

    <div class="bg">
        <img src="gradient2.png" alt="" height="1200px">

    <div class="topper">
        <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
        <div class="navbar">
            <a href="../home.php"><span >Home</span></a>
            <a href="../about_us.html">About us</a>
            <a href="../contact_us.php">Contact us</a>
            <a href="../service_admin/login.php">Promote Business</a>
        </div>
    </div>

    
    <div class="marquee">
        <marquee class="scroll_text" behavior="alternate" direction="left"> Enjoy homemade goodness with our tiffin service. Explore now for a hassle-free and tasty experience!"</marquee>
    </div>


    <form  method="POST">
        
        <div class="contain">
        
            <div class="search">
            
            <div style="margin-left:10px;margin-top:14px;font-size 15px;px;width:18px;height:20px;position:absolute;"><i class="fa-solid fa-location-dot"></i></div>
            <input class="location" list="browsers" name="browser" placeholder="Enter Location  eg: Kothrud, Pune" value="<?php echo$x;?>" id="browser">
                    <datalist id="browsers">
            
                    <?php
                    $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                    $query="select distinct(city) from tiffin_info;";
                    $result=pg_query($con,$query);

                    while($row=pg_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>";
                    }
                    ?>
                        
                    </datalist>

                    <div style="position:absolute;margin-left:17%;margin-top:-3.5%;font-size:15px;"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="tiffin" list="tiffin" name="tiffin" placeholder="Search for Tiifns in Nearby Area" value="" >
                    <!-- <input class="tiffin" type="text" placeholder="Search for Tiifns in Nearby Area" value="" name=""> -->
                    <datalist id="tiffin">
                    <?php
                    $query="select service_name from tiffin_info where city='$x';";
                    $result=pg_query($con,$query);
                    while($row=pg_fetch_row($result))
                    {
                        echo "<option value='$row[0]'>";
                    }
                    
                    ?>
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
           $a=$_POST['browser'];
            $b=$_POST['tiffin'];

       
           if($a!=NULL && $b==NULL)
           {
            $query="select count(id) from tiffin_info where city='$a' and tiffin_type='$cusine';";
            $result=pg_query($con,$query);
            $row=pg_fetch_row($result);
            if($row[0]==0)
            {
                echo"<script>alert('Sorry We Not Have Services in ($a) Location. It will be avaliable asap..!!')</script>";
                echo "<script>window.location.href='3rdpage.php'</script>";
                
            }
            else
            {
                // echo "<script>alert('okay')</script>";
                $_SESSION['location']=$_POST['browser'];
                $x=$_SESSION['location'];
                echo "<script>window.location.href='4thpage.php'</script>";
            }
           }
           
        
        
       }
    ?>
    


    <div class="filters">
        <?php
        // $cusine;
        if($cusine=='vn')
        {
            echo "<div class='c1' style='background-color: blue;'>
            <a href='google.com?value=vn'><img src='mt.png' alt='cusine image' class='img'></a>
        </div>";
        }
        else if($cusine=='g')
        {
            echo "<div class='c2' style='background-color: palevioletred;'>
            <a href='google.com?value=g'><img src='gt.png' alt='cusine image' class='img'></a>
        </div>";
        }
        else if($cusine=='r')
        {
            echo "<div class='c3' style='background-color: green;'>
            <a href='google.com?value=r'><img src='rt.png' alt='cusine image' class='img'></a>
        </div>";
        }
        else if($cusine=='n')
        {
            echo "<div class='c4' style='background-color: yellow;'>
            <a href='google.com?value=n'><img src='nt.png' alt='cusine image' class='img'></a>
        </div>";
        }
        ?>
        
        
    </div>

    
      
    <?php


    
    

    if($cusine=="vn")
    {
        $type="v";
        $type2="vn";
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name,profile_pic from tiffin_info where city='$x' and tiffin_type in ('$type','$type2');";
        $result=pg_query($con,$query);
        echo "<div class='menus'> ";
        while($row=pg_fetch_row($result))
        {
            echo "<div class='menu1'>
                        <div class='menu-content'>
                                <h2>$row[0]</h2>";
        ?>
                                
                                <div class='menu-img'><img src="profile_pic/<?php echo $row[1];?>" alt='Profile Image' style="height:300px;background-size:cover;"></div>
                                <?php

                                echo "<a href='mess_des.php?value=$row[0]'><p>See more</p></a>
                        </div>
                    </div>";

        // echo $row[1];
    }
    echo "</div>";
        
    }
    else if($cusine=="g")
    {
        $type="g";
        
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name,profile_pic from tiffin_info where city='$x' and tiffin_type='$type';";
        $result=pg_query($con,$query);
        echo "<div class='menus'> ";
        while($row=pg_fetch_row($result))
        {
            echo "<div class='menu1'>
                        <div class='menu-content'>
                                <h2>$row[0]</h2>";
        ?>
                                
                                <div class='menu-img'><img src="profile_pic/<?php echo $row[1];?>" alt='Profile Image' style="height:300px;background-size:cover;"></div>
                                <?php

                                echo "<a href='mess_des.php?value=$row[0]'><p>See more</p></a>
                        </div>
                    </div>";

        // echo $row[1];
    }
    echo "</div>";
    }
    else if($cusine=="r")
    {
        $type="r";
        
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name,profile_pic from tiffin_info where city='$x' and tiffin_type='$type';";
        $result=pg_query($con,$query);
        echo "<div class='menus'> ";
        while($row=pg_fetch_row($result))
        {
            echo "<div class='menu1'>
                        <div class='menu-content'>
                                <h2>$row[0]</h2>";
        ?>
                                
                                <div class='menu-img'><img src="profile_pic/<?php echo $row[1];?>" alt='Profile Image' style="height:300px;background-size:cover;"></div>
                                <?php

                                echo "<a href='mess_des.php?value=$row[0]'><p>See more</p></a>
                        </div>
                    </div>";

        // echo $row[1];
    }
    echo "</div>";
    }
    else if($cusine=="n")
    {
        $type="n";
        $type2="vn";
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name,profile_pic from tiffin_info where city='$x' and tiffin_type in ('$type','$type2');";
        $result=pg_query($con,$query);
        echo "<div class='menus'> ";
        while($row=pg_fetch_row($result))
        {
            echo "<div class='menu1'>
                        <div class='menu-content'>
                                <h2>$row[0]</h2>";
        ?>
                                
                                <div class='menu-img'><img src="profile_pic/<?php echo $row[1];?>" alt='Profile Image' style="height:300px;background-size:cover;"></div>
                                <?php

                                echo "<a href='mess_des.php?value=$row[0]'><p>See more</p></a>
                        </div>
                    </div>";

        // echo $row[1];
    }
    echo "</div>";
    }

    
    ?>

   


 


    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
    <!--  Footer  -->

    <div class="hr" style="width:80%; border:1px solid rgb(164, 156, 156);align-content: center;margin: auto;"></div>

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
