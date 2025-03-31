<?php

error_reporting(E_ALL & ~E_WARNING);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Signup</title>

    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">



<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }

    .main{
        width: 100%;
        height:665px;
        background-color: red;

        /* background-image: url("depositphotos_71466371-stock-photo-food-container\ \(1\).jpg");
        background-position: center;
        background-size: cover; */
    }


    .main img{
        width: 100%;
        height: 729px;
        float: left;
    }



       /* <!-- ------------------------------------------------------------------------ --> */
/* <!-- ------------------------------------------------------------------------ --> */
/* <!-- Navigational Bar --> */



.topper{
    width: 100%;
    height: 170px;
    /* background-color: blue; */
    position: absolute;
    top: 0;
    left:0;
    
    padding :0px 20px;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    /* z-index: 100; */
}

.navbar{
    height: 50px;
    /* background-color: red; */
    margin-top:48px;
    margin-right: 0%;
    padding: 0px 65px;
}


.navbar a{
    font-size:21px;
    font-family:Arial, Helvetica, sans-serif;
    color: white;
    /* opacity: 0.8; */
    font-weight:bolder;
    text-decoration: none;
    margin-left: 50px;
    /* opacity: 0.6; */
    
}


.navbar a:hover{
    color: yellow;
    border-bottom: 2px solid grey;
    /* opacity: 0.3; */
}


.topper a img{
    background-size: cover;
    height: 170px;
    width: 100%;
    /* background-color:red; */
    margin-right: 0px;
    /* margin-top: 1px; */
}

/* ---------- */

.contain{
    width: 45%;
    height:535px;
    position:absolute;
    background:transparent;
    /* backdrop-filter: blur(30px); */
    /* opacity: 0.3; */ 
    /* border: 2px solid black; */
    box-shadow: rgba(166, 166, 166, 0.16) 0px 10px 36px 0px, rgba(166, 166, 166, 0.06) 0px 0px 0px 1px;
    border-radius: 20px;
    margin-top:170px;
    margin-left:3%;
    margin-right: 40px;
    /* background-color: brown; */
}


.form{
    width: 100%;
    height: 445px;
    background:transparent;

    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    padding-left:30px;
    padding-right: 25px;
    padding-top: 15px;
    margin-top:10px;
    /* background-color: red; */
}

.box1,.box2,.box3,.box4,.box5{
    width: 100%;
    height: 70px;
    padding-top:0px;
    padding-left: 10px;
    padding-right: 10px;
    display: flex;
    justify-content: space-around;
}

/* .box1{
    background-color: red;
}
.box2{
    background-color: blue;
}
.box3{
    background-color: violet;
}
.box4{
    background-color: yellow;
}
.box5{
    background-color:aqua;
} */

.form input{
    width: 96%;
    height: 40px;
    background: transparent;
    /* background-color:red; */
    border:2px solid rgba(255,255,255, .2);
    outline:none;
    font-size: 16px;
    color:white;
    border-radius:10px;
    padding: 15px 15px 15px 30px;
    font-family: "IM Fell Great Primer SC", serif;
}

.form input::placeholder{
    color: white;
}

.form .btn{
    width:35%;
    height:45px;
    background: white;
    border-color: black;
    outline: none;
    border-radius: 100px;
    box-shadow: 0 0 10px rgba(0,0,0, .1);
    cursor: pointer;
    font-size: 17px;
    margin-left:200px;
    font-weight: 600;
    /* margin-top:15px; */
}

.btn button{
    width:100%;
    height:45px;
    background: white;
    border-color: black;
    /* outline: none; */
    border-radius: 100px;
    box-shadow: 0 0 10px rgba(0,0,0, .1);
    cursor: pointer;
    font-size: 17px;
    /* margin-left:200px; */
    font-weight: 600;
}

.c1,.c2{
    width: 100%;
    height: 40px;
}

.form .link{
    width:80%;
    height:25px;
    font-size:17px;
    text-align: center;
    margin: 15px;
    margin-left:8%;
    /* background-color:red; */
    
}

/* .form .link{
    font-size:17x;
    text-align: center;
    margin: 23px;
    
} */

.link p{
    color: white;
}
.link p a{
    color:bisque;
    text-decoration: none;
    font-weight: 600;
    align-items:center;
}

.link p a:hover{
    text-decoration:underline;
    color:green;
}


/* .c1{
    background-color:bisque;
}
.c2{
    background-color: brown;
} */

</style>

</head>
<body>
    
    <div class="main">
        <!-- <img src="depositphotos_71466371-stock-photo-food-container (5).jpg" alt=""> -->
        <img src="image_2.jpg" alt="">
        
        <div class="topper">
    <!-- https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA -->
        <a href="#" ><img src="12.png" class="logo"></a>
        <div class="navbar">
            <a href="../home.php">Home</a>
            <a href="../about_us.html">About us</a>
            <a href="../how_it_works.html">How it Works</a>
            <a href="../contact_us.php">Contact us</a>
            <a href="login.php"><span style="color: yellow;border-bottom: 2px solid grey;">Promote Business</span></a>
        </div>
    </div>

    <div class="contain">
        <h2 style="text-align: center;font-size: 30px;margin-top: 2%;color:#e6f9ff;font-family: 'Hahmlet', serif;">Registration Form</h2>
        <!-- <hr style="margin-top: 14px;width: 85%;margin-left: 7%;"> -->

        <div class="form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="box1">
                <div class="c1">
                    <!-- Tiffin service Name -->
                    <input type="text" name="ts_name" placeholder="Tiffin Service Name" required>
                </div>

                <div class="c2">
                    <!-- Full name -->
                    <input type="text" name="fname" placeholder="Full Name" required>
                </div>
            </div>

            <div class="box2">
                <div class="c1">
                    <!-- Phone Number -->
                    <input type="text" name="phn" placeholder="Phone Number" required>
                </div>

                <div class="c2">
                    <!-- Email Address -->
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class="box3">
                <div class="c1">
                    <!-- Password -->
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="c2">
                    <!-- Confirm Password -->
                    <input type="password" name="cpassword" placeholder="Confirm Password" required>
                </div>
            </div>

            <div class="box4">
                <div class="c1">
                    <!-- Street Adderess -->
                    <input type="text" name="streetadd" placeholder="Street Address" required>
                </div>

                <div class="c2">
                    <!-- City -->
                    <input type="text" name="city" placeholder="Enter City" required>
                </div>
            </div>

            <div class="box5">
                <div class="c1">
                    <!-- State -->
                    <input type="text" name="state" placeholder="State / Province" required>
                </div>

                <div class="c2">
                    <!-- Postal Code -->
                    <input type="text" name="code" placeholder="ZIP code / Postal code" required>
                </div>

                
            </div>

            <!-- <button type="Submit" name="submit" class="btn">Register</button> -->

            <div class="btn">
                <button type="submit" name="submit">Register</button>
            </div>
            <div class="link">
                    <p>Have an account? <a href="login.php">Login Here</a></p>
                </div>
        

            
            </form>
        </div>
    </div>

    <!-- PHP CODE HERE -->
    <?php

        // Disable display of errors on the web page
        ini_set('display_errors', '0');

        echo "<div style='width:60%;height:40px;position:absolute;bottom:70px;text-align:center;'>";

        if(isset($_POST['submit']))
        {

            session_start();
            // variables creation
            
            $service_name=ucwords(strtolower($_POST["ts_name"]));
            $full_name=ucwords(strtolower($_POST["fname"]));
            $mobile_no=$_POST["phn"];
            $email_id=$_POST["email"];
            $password=$_POST["password"];
            $cpassword=$_POST["cpassword"];
            $streetadd=ucwords(strtolower($_POST["streetadd"]));
            $city=ucwords(strtolower($_POST["city"]));
            $state=ucwords(strtolower($_POST["state"]));
            $code=ucwords(strtolower($_POST["code"]));


            
            
            // -----------------------------------------------------------------
            // -----------------------------------------------------------------
            // checking password & confirm password
            if($password != $cpassword)
            {
                echo "<script>alert('Password Mismatch');</script>";
                // echo "<h4 style='color:red;'>**Password Not Match**</h4></div>";

            }
            else
            {

                    $random = rand(1000, 9999);
                    $id="ID_".$random;
                  
                    
                    $remail=str_replace("@gmail.com","",$email_id);
                    $login_email_id=$remail."@tiffin.erp";

                    // echo "<br>$remail";
                    // echo "<br>$login_email_id";
                    
                    
                    $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");

                    

                    l1:
                    // check duplicate id
                    $sql_1="select id from tiffin_info where id='$id';";
                    $result_1=pg_query($connect,$sql_1);
                    

                    // check duplicate email
                    $sql_2="select email_id from tiffin_info where email_id='$email_id'";
                    $result_2=pg_query($connect,$sql_2);
                    

                    // ----------------------------------------------------------------------------------------------
                    // ----------------------------------------------------------------------------------------------
                    // checking for duplicate ID
                    if(pg_num_rows($result_1)>0)
                    {
                        $random = rand(1000, 9999);
                        $id="ID_".$random;
                        
                        goto l1;
                    }


                    // ----------------------------------------------
                    // -----------------------------------------------
                    // checking duplicate email 
                    if(pg_num_rows($result_2)==0)
                    {
                        // echo "<h2 style='color:red;'>$id<br>$service_name<br>$full_name<br>$mobile_no<br>$email_id<br>$password<br>$cpassword<br>$streetadd<br>$city<br>$state<br>$code</h2>";
                        // inserting data
                        $sql_main="insert into tiffin_info(id,service_name,full_name,mobile_no,email_id,password,street_address,city,state,pin_code,login_email_id) values('$id','$service_name','$full_name','$mobile_no','$email_id','$password','$streetadd','$city','$state','$code','$login_email_id');";
                        $result_main=pg_query($connect,$sql_main);

                        // $_SESSION['id']=$id;
                        // $_SESSION['lgn_eid']=$login_email_id;

                        // echo "<script>alert('Registration Successfull'); </script>";
                        
                       

                        $_SESSION['new_email']=$login_email_id;
                        echo "<script>alert('Registration Successful');
                                    var r=confirm('Login With New Email-Id : $login_email_id');
                                    if(r==true)
                                    {
                                        window.location.href='login.php';
                                    }

                        </script>";
                        

                    

                    }
                    else{
                        
                        echo "<script>alert('Email Already Exists'); </script>";
                    }
                   
                    
                
                    pg_close($connect);
                
            }

        }

        
        ?>

    
    
</div>

       
    

</body>
</html>