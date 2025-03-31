<?php
session_start();
ini_set('display_errors', '0');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Login</title>

   

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
/* ---------- */

.contain{
    width: 30%;
    height:450px;
    position:absolute;
    background:rgba(255,255,255, .1) ;
    box-shadow: rgba(166, 166, 166, 0.16) 0px 10px 36px 0px, rgba(166, 166, 166, 0.06) 0px 0px 0px 1px;
    backdrop-filter: blur(30px);
    /* opacity: 0.3;  */
    border: 2px solid black;
    border-radius: 20px;
    margin-top:170px;
    margin-left:8%;
    margin-right: 50px;
    background-color: transparent;
    padding-top: 27px;
}

.form{
    width: 100%;
    height: 380px;
    background:transparent;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    padding-left:25px;
    padding-right: 25px;
    padding-top: 15px;
    margin-top:10px;
    /* background-color: green; */
}

.box1,.box2{
    width:100%;
    height:80px;
    /* padding-top:0px;
    padding-left:10px;
    padding-right: 10px; */
  

}

/* .box1{
    background-color: red;
}
.box2{
    background-color: blue;
} */

.c1 input{
    font-family: "IM Fell Great Primer SC", serif;
    margin-top: 10px;
    width: 100%;
    height: 100%;
    border:2px solid rgba(255,255,255, .2);
    border-radius: 40px;
    font-size:18px;
    color:#fff;
    background: transparent;
    outline: none;
    padding: 20px 45px 20px 20px;

}

.c1 input::placeholder{
    color:whitesmoke;
}

.form .btn{
    width:35%;
    height:45px;
    /* background: white; */
    
    /* background-color: transparent; */
    border-color: #f2f2f2;
    outline: none;
    border-radius: 100px;
    box-shadow: 0 0 10px rgba(0,0,0, .1);
    cursor: pointer;
    font-size: 17px;
    margin-left:120px;
    font-weight: bolder;
    margin-top:17px;
    font-family: 'Hahmlet', serif;
    color:black#f2f2f2;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.form .btn:hover{
    cursor:pointer;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    color:red;
}

.form .link{
    font-size:17x;
    text-align: center;
    margin: 23px;
    
}

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
            <a href="../contact_us.php">Contact us</a>
            <a href="login.php"><span style="color: yellow;border-bottom: 2px solid grey;">Promote Business</span></a>
        </div>
    </div>

    <div class="contain">
        <h2 style="text-align: center;font-size: 30px;margin-top: 2px;color:#e6f9ff; font-family: 'Hahmlet', serif;">Login Form</h2>

        <div class="form">
            <form action="login.php" method="post">
                <div class="box1">
                    <div class="c1">
                        <input type="text" name="login_email_id" placeholder="Email-Id" value="">
                    </div>
                </div>

                <div class="box2">
                    <div class="c1">
                        <input type="password" name="password" placeholder="Enter Password">
                    </div>

                </div>

                <button type="Submit" name="submit" class="btn">Login</button>
                
                <div class="link">
                    <p>Don't have an account? <a href="signup.php">Register Here</a></p>
                </div>

                <button type="Submit" name="admin" class="btn" style="border-radius:4px;height:35px;margin-top:0px;">Admin Login</button>
            </form>

            <!-- PHP logic -->
            <?php

            if(isset($_POST['submit']))
            {
                $login_email_id=$_POST['login_email_id'];
                $password=$_POST['password'];

                // echo "email=$login_email_id";
                // echo "password=$password";

                $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                
                $sql="select id,login_email_id,password from tiffin_info where login_email_id='$login_email_id' and password='$password';";
                
                $result=pg_query($connect,$sql);
                
                $row=pg_fetch_array($result);
                $id=$row[0];

                $count=pg_num_rows($result);
                if($count==1)
                {
                    $_SESSION['id']=$id;

                    echo "<script>window.location.href='service_dash.php'</script>";
                }
                else{
                    echo "<script>alert('Invalid Username or Password')</script>";
                }

                pg_close($connect);
            }

            if(isset($_POST['admin']))
            {
                echo "<script>window.location.href='../admin_dashboard/admin.php'</script>";
            }

            ?>
        </div>
    </div>
       
    
</div>
</body>
</html>