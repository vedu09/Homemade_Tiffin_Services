<?php
session_start();
ini_set('display_errors', '0');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>

    <!-- <link rel="stylesheet" href="admin.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@1,700&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@700&display=swap" rel="stylesheet">




<style>
    *{
    padding:0;
    margin:0;
    box-sizing: border-box;
}



.topper{
    width:100%;
    position: absolute;
    top: 0;
    left:0;
    width:98;
    padding :0px 20px;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    /* z-index: 100; */
    /* background-color:red; */

}

.navbar{
    height: 50px;
    /* background-color: red; */
    margin-top:45px;
    margin-right: 2%;
}

.navbar a{
    font-size:25px;
    color: white;
    opacity: 0.8;
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
    height: 180px;
    width: 90%;
    margin-right: 50px;
    margin-top: 1px;
}




/* -------------------------------- */
/* -------------------------------- */
/* ---------admin form--------- */
#img{
    width: 100%;
    height: 729px;
    opacity: 0.9;
}

.transparent{
    width:100%;
    height: 700px;
    background-color: rgb(244,244,244);
    
    /* opacity: 0.8; */
    display: flex;
    justify-content: center;
}

.box{
    position: absolute;
    top: 22%;
    width: 30%;
    height: 470px;
    background-color: black;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    display: flex;
    /* justify-content: center; */
    opacity: 0.7;
    border-radius:18px;
    
}


/* .admin-logo{
    width: 130px;
    height: 130px;
    background-color: red;
    border-radius: 70px;
    margin-left: 36%;
    margin-top: -60px;
    

} */

/* .admin-logo i{
    color:white;
    font-size: 60px;
    margin: 30px;
    margin-left: 38px;
    
} */

.box h2{
    color: white;
}

.title{
    width: 100%;
    height: 50px;
    /* background-color: green; */
    display: flex;
    justify-content: center;
    position: absolute;
    top: 200px;
    font-size: 30px;
    color:white;
    font-family: 'Zilla Slab', serif;
}

.admin_form{
    width: 30%;
    height: 200px;
    /* background-color: green; */
    position: absolute;
    top: 320px;
    left: 35%;
    padding-left:30px;
    color: white;
}

label{
    height: 300px;
    font-size: 23px;
    /* background-color: green; */
    font-weight: bold;
    font-family: 'Bitter', serif;
}

.admin_form input{
    width: 92%;
    height: 50px;
    margin-top: 8px;
    /* border:1px solid black; */
    border: none;
    background-color: black;
    opacity: 0.7;
    border-bottom: 2px solid white;
    color: white;
    font-family: 'Crimson Text', serif;
    font-size: 17px;
}

::-webkit-input-placeholder{
    color: white;
    font-size: 17px;
    opacity: 0.6;
    font-family: 'Crimson Text', serif;
}



#submit{
    height: 40px;
    font-size: 20px;
    background-color: red;
    border: 1px solid red;
    border-radius: 50px;
    font-weight: bolder;
    opacity: 1;
    cursor: pointer;
    font-family: 'Zilla Slab', serif;
}
</style>



</head>
<body>




<script>
window.history.forward();
</script>





<!-- ------------------------------------- -->
<!-- ------------------------------------- -->
<!-- ----------ADMIN FORM-------------- -->




            <div class="transparent">
                <img src="admin_ba.jpg" alt="" id="img">
                
                <div class="box">
                    <!-- <div style="width: 100%;;height: 80px;">
                        <div class="admin-logo">
                            <i class="fa-solid fa-user"></i>
                        </div> -->
                    </div>

                </div>      
            </div>


            <div class="topper">
    <a href="#" ><img src="12.png" class="logo"></a>
    <div class="navbar">
        <a href="../home.php"><span >Home</span></a>
        <a href="../about_us.html">About us</a>
        <a href="../contact_us.php">Contact us</a>
        <a href="../service_admin/login.php">Promote Business</a>
    </div>
</div>


            <div class="title">
                <h2>ADMIN &nbsp LOGIN</h2>
            </div>


            <div class="admin_form">
                
            
            
                <form action="admin.php" method="post">
                    <label>Login Email Id</label> <br>
                    <input type="text" name="login_email" id="" placeholder="Enter Login Email Id" required>
                    <br>
                    <br>
                    <label>Password</label> <br>
                    <input type="password" name="password" id="" placeholder="Enter password" required>

                    <br>
                    <br>
                    <input type="submit" name="submit" value="Get Access" id="submit">
                </form>
                <?php
                //  ob_start();
                
                
                
                if(isset($_POST['submit'])) {
                        
                    //    session_start();

                        $login_email=$_POST['login_email'];
                        $key=$_POST['password'];

                        

                        // $_SESSION['login_email']=$_POST['login_email'];


                            $connect=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");

                            $sql="select * from admin_info where login_email_id='$login_email' and password='$key'";
                            $result=pg_query($connect,$sql);

                            $row=pg_fetch_array($result);
                            $id=$row['admin_id'];
                            $nm=$row['admin_name'];

                            
                            $count=pg_num_rows($result);

                            if($count==1){
                                $_SESSION['adn_id']=$id;
                                $_SESSION['adn_name']=$nm;
                                
                                echo"<script>window.location.href='dashboard_dash.php'</script>";
                            }
                            else{
                                echo"<script>alert('Invalid Username or Password')</script>";
                            }
                        
                            
                            pg_close($connect);
                        
                        

                }
                
                
                ?>
            </div>
            
</body>
</html>