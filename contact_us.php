<?php
error_reporting(E_ERROR | E_PARSE);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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

    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Ysabeau:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


/* <!-- ------------------------------------------------------------------------ --> */
/* <!-- ------------------------------------------------------------------------ --> */
/* <!-- Navigational Bar --> */

.back_img{
width: 100%;
height: 900px;
/* background-color: red; */
margin:0px;
padding: 0px;
background-repeat: no-repeat;
background-size: cover;
/* padding-left: 10%; */
}

.topper{
/* position: absolute; */
top: 0;
left:0;
width:98;
padding :0px 20px;
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




/* ---------------------------------- */
/* ---------------------------------- */
/* Background Image */


.img_text{
width: 100%;
/* background-color: red; */
text-align: center;
font-size: 60px;
/* position: absolute; */
top: 45%;
padding-top: 70px;
font-weight: bolder;
color: black;
opacity: 0.9;
font-family:Georgia, 'Times New Roman', Times, serif ;   
}





/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* Map */

.map{
display: flex;
justify-content: space-evenly;
margin-top: 10px;
}

.map iframe{
width: 40%;
height: 500px;
}

.map .contact_detail{
width: 30%;
height: 500px;
/* background-color: red; */
}

.contact_detail .add{
/* border: 2px solid green; */
margin-top: 70px;
}

.add ul{
list-style: none;

}

.add ul li{
margin-top: 40px;
}









/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* Contact us */
.contact{
width:100%;
height:550px;
/* Background-color: 	#d9d9d9; */
/* margin-left:15%; */
margin-top:100px;
}

.form{
width:90%;
height:400px;
/* background-color:black; */
margin-left:5%;
margin-right:5%;
margin-top:20px;
}

.form input{
    outline:none;
height:60px;
width:550px;
margin-top:20px;
border-radius:8px;
border:1px solid grey;
/* background-color:yellow; */
margin-left:12%;
padding-left:20px;
box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
font-family: "Hahmlet", serif;
}

.form input::placeholder{
/* padding-left:20px; */
font-family: "Hahmlet", serif;
}

.msg{
width:30%;
/* background-color:green; */
/* position: absolute; */
/* bottom:10%; */
/* left:59%; */
/* right:10%; */
float:right;
margin-top:-277px;
margin-right:12%;
}


.msg textarea{
    outline:none;
width:100%;
height:260px;
padding-left:20px;
padding-top:20px;
border:1px solid grey;
border-radius:8px;
box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
font-family: "Hahmlet", serif;
}

.msg textarea::placeholder{
/* padding-left:20px; */
/* padding-top:20px; */
font-family: "Hahmlet", serif;
}

/* #submit_btn{
width:150px;
font-size:18px;
margin-left:44%;
margin-top:4%;
border-radius:10px;
font-weight:bold;
background-color:red;
} */

.btn{
    width:13%;
    height:50px;
    /* border:1px solid red; */
    margin-left:44%;
    margin-top:20px;

}
#submit_btn{
    outline:none;
    width:100%;
    height:50px;
    text-align:center;
    font-size:19px;
    border-radius:10px;
    border:1px solid #cccccc;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    font-family: "Ysabeau", sans-serif;
    font-weight:bolder;
}

#submit_btn:hover{
border:1px solid #ffff;
box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
color:red;
cursor:pointer;
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




<div class="topper">
    <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="about_us.html">About us</a>
        <a href="contact_us.php"><span style="color: red;border-bottom: 2px solid red;">Contact us</span></a>
        <a href="service_admin/login.php">Promote Business</a>
    </div>
</div>




<!-- ---------------------------------- -->
<!-- ---------------------------------------- -->






<!-- ------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------- -->
<!-- Map -->

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7563.110036605349!2d73.72121172159068!3d18.5940897109221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bb166f8d31a5%3A0x9e90acd42adbbdfc!2sGrand%20Highstreet!5e0!3m2!1sen!2sin!4v1704729076776!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<div class="contact_detail">
    <div class="add">
       <ul>
            <li><p style="color: black;font-weight: bold;font-family:cursive;font-size: 25px;">➢ Our Office Address:</p> <br>  <p style="color: grey;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Grand Highstreet Phase 1, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Pimpri-Chinchwad, Maharashtra 411057</p></li>

            <li><p style="color: black;font-weight: bold;font-family:cursive;font-size: 25px;">➢ General Enquires:</p>  <br>   <p style="color: grey;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">+91-8888888888</p></li>

            <li><p style="color: black;font-weight: bold;font-family:cursive;font-size: 25px;">➢ Call Us:</p>  <br>   <p style="color: grey;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">websupport@homemademeals.com</p></li>

        </ul>
    </div>
</div>

</div>






<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!--   Contact Us  -->


<div class="contact">

    <h3 style="font-size:30px;text-align:center;font-family:cursive">Feel Free To Contact Us Any Time.<br><span style="font-size:20px;color:grey;"> We will get back to you as soon as possible</span></h3>


<div class="form">

       

        <form action="" method="post">
            <input type="text" placeholder="Full Name" name="full_name" id="">  <br><br>
            <input type="text" placeholder="Mobile Number" name="mobile" id=""><br><br>
            <input type="text" placeholder="Email ID" name="email" id=""><br><br>

            <div class="msg">
                <textarea placeholder="Enter Message" name="msg" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="btn">
                <button type="submit"  id="submit_btn" name="submit">Submit</button>
            </div>
        </form>
</div>
</div>

<!-- PHP LOGIC -->
<?php
if(isset($_POST['submit']))
{
    $fn=$_POST['full_name'];
    $phn=$_POST['mobile'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
    $query="insert into contact_form values('$fn','$phn','$email','$msg'); ";
    $result=pg_query($con,$query);

    if($result==true)
    {
        echo "<script>alert('Response Submitted successfully')</script>";
    }
}

?>


<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!--  Footer  -->

<div class="hr" style="width:80%; border:1px solid rgb(164, 156, 156);align-content: center;margin: 30px 115px 0px 115px;"></div>

<div class="footer">
       <div class="footer_box">
            <h3 style="font-family: Hahmlet, serif;padding: 20px;">Useful Links :</h3>

            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="privacy_policy.html">Privacy Policy</a></li>
                <li><a href="register.html">Promote Your Business</a></li>

            </ul>
       </div>
       
       <div class="footer_box">
            <h3  style="font-family: Hahmlet, serif;padding: 20px;">Address :</h3>

            <p class="add">Grand Highstreet
                Phase 1, Hinjawadi Rajiv Gandhi Infotech Park, Hinjawadi, Pune, Pimpri-Chinchwad, Maharashtra 411057 <br> <br>+91-8888888888  <br><br> websupport@homemademeals.com
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