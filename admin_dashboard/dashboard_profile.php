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
    <title>Profile</title>

     <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Cagliostro&family=Headland+One&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
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

/* .account .icon{
    width: 70px;
    height: 70px;
    background-color: grey;
    background-image:url('admin.png');
    background-size:cover;
    border-radius: 50%;
} */

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
    color: 	 #ff1a1a;
    /* border:3px solid; */
    
    
}





/* ----------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -----------list of activities---------  */

.activity{
    width: 20%;
    height: 639px;
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
    height: 639px;
    /* background-color: rgb(214,213,223); */
    /* background-color:rgb(230, 247, 255); */
    background-color:#DCDCDC;
    position: absolute;
    top: 12%;
    left: 20%;
    /* padding-top: 60px; */
    padding-left: 20px;
   padding-right:20px;
}

.contain{
    width:100%;
    height:600px;
    /* background-color:yellow; */
    margin-top: 30px;
    /* padding:30px; */
    
}

.submit{
    width:30%;
    height: 35px;
    /* background-color: orange; */
    text-align: center;
    margin-top: -40px;
    margin-left:70%;
    /* margin-right:20px; */
    display:flex;
    justify-content:center;
    
}

.submit .button{
    width:110%;
    height: 35px;
    font-size:15px;
    background-color: white;
    border:1px solid white;
    border-radius:5px;
    margin-left: 10px;
    /* margin-right:20px; */
    font-weight: bolder;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

.submit .button:hover{
    cursor:pointer;
    color:red;
    border:1px solid  #a6a6a6;
    /* background-color: yellow; */
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}


.line{
    width:100%;
    height: 2px;
    background-color: red;
    border:1px solid black;
    margin-top:20px;
}

.box{
    width:100%;
    height:450px;
    margin-top:20px;
    padding:20px;
    /* background-color: red; */
    display: flex;
    justify-content: space-between;
}

.b1,.b2{
    width:48%;
    height:450px;
    /* margin-top:30px; */

}
/* 
.b1{
    background-color: green;
} */
.b2{
    /* background-color: aqua; */
    /* height:100px; */
    font-weight:bolder;
    font-size:18px;
    
    padding:20px;
    
    font-family: "Spectral SC", serif;
}

.b2 input{
    outline:none;
    width:85%;
    height:40px;
    margin-top: 14px;
    margin-bottom:15px;
    border:1px solid grey;
    font-family: "Headland One", serif;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}

.b2 input::placeholder{
    padding: 14px;
    font-size:14px;
}


.pic_update{
    width:100%;
    height:80px;
    /* background-color: blue; */
    padding:20px;
    padding-left: 13%;
    padding-top:30px;
}

.pic_update .choose_file{
    width:45%;
    height:30px;
    border: 1px solid white;
    border-radius:5px;
    background-color:#ffff;
    font-family: "Cagliostro", sans-serif;
    /* margin-right: 20px; */
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}


.choose_file:hover{
    cursor:pointer;
    color: red;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

.pic_update input::file-selector-button{
    height:30px;
    font-size: 14px;
    border:1px solid white;
    font-weight: bolder;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

.pic_update .pic_sub_btn{
    width: 30%;
    height:30px;
    background-color: #ffff;
    font-weight:bolder;
    border: 1px solid white;
    border-radius: 5px;
    margin-left:20px;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

.pic_update .pic_sub_btn:hover{
    cursor:pointer;
    color: red;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

    /* border: 1px solid yellow; */
}








    </style>
</head>
<body>
    
    <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->
    <!-- navbar -->
    <div class="header">
        
        <div class="account">
        
            <!-- <div class="icon">

            </div> -->

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
                <li><a href="dashboard_profile.php"  style="color:yellow;border-bottom: 3px solid red;">Profile</a></li>
                <li><a href="dashboard_dash.php">Dashboard</a></li>
                <li><a href="dashboard_view.php">View Tiffin Services</a></li>
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
    <div class="contain">

        <h2 style="color:#333333;font-size:40px;width:45%;font-family:IM Fell Great Primer SC, serif;">Admin Profile :</h2>

      

        <div class="line">

        </div>

        <div class="box">
            <div class="b1">
                <div style="width: 60%;height:250px;background-color: yellow;margin-left:18%;margin-top: 5%;border:1px solid black;border-radius:50%;">

                <?php

                $id=$_SESSION['adn_id'];
                $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                $query="select profile_pic from admin_info where admin_id='$id';";
                $result=pg_query($con,$query);

                while($row=pg_fetch_assoc($result)) 
                {

                ?>
                    <img src="profile_pic/<?php echo $row['profile_pic']; ?>" alt="profile image" style="background-size: cover;width:100%;height:250px;border-radius: 50%;box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;">
                <?php
                }
                ?>
                    

                </div>

                <div class="pic_update">
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="image" id="" class="choose_file">
                        <input type="submit" name="submit" value="Update image" class="pic_sub_btn">
                    </form>

                    <?php

                    if(isset($_POST['submit']))
                    {
                    $id=$_SESSION['adn_id'];
                    $file_name=$_FILES['image']['name'];
                    $tempname=$_FILES['image']['tmp_name'];
                    $folder='profile_pic/'.$file_name;

                    $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                    $query="update admin_info set profile_pic='$file_name' where admin_id='$id';";
                    $result=pg_query($con,$query);

                    if(move_uploaded_file($tempname,$folder) && $result)
                        {
                            echo "<script>alert('Profile Image Uploaded Successfully')</script>";
                            echo "<script>window.location.href='dashboard_profile.php'</script>";
                        }
                        else{
                            echo "<script>alert('Profile Image Not Uploaded')</script>";
                        }
                    }

                    ?>
                </div>
            </div>

            <div class="b2">

                <?php
                $id=$_SESSION['adn_id'];
                // echo $id;

                $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                $query="select admin_name,email_id,login_email_id,phone_no,password from admin_info where admin_id='$id';";
                $result=pg_query($con,$query);

                while($row=pg_fetch_row($result))
                {
                ?>

                
                    Admin Name:<br>
                    <input type="text"  placeholder="<?php echo$row[0]; ?>" readonly>
                    <br>
                    Email ID:<br>
                    <input type="text" name="" placeholder="<?php echo$row[1]; ?>" readonly>
                    <br>
                    Login Email ID:<br>
                    <input type="text" name="" placeholder="<?php echo$row[2]; ?>" readonly>
                    <br>
                    Phone Number:<br>
                    <input type="text" name="" placeholder="<?php echo$row[3]; ?>" readonly>
                    <br>
                    Password:<br>
                    <input type="text" name="" placeholder="<?php echo$row[4]; ?>" readonly>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>






</body>
</html>