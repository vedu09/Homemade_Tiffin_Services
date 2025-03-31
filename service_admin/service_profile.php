<?php
session_start();
ini_set('display_errors', '0');
// echo$_SESSION['id'];

if($_SESSION['id']==null){
    echo "<script>window.location.href='login.php'</script>";
    // echo "success";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Profile</title>


    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Trykker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cagliostro&family=Dosis:wght@200..800&family=Headland+One&family=Lusitana:wght@400;700&family=Patrick+Hand+SC&family=Protest+Riot&family=Quando&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
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
    
    background-repeat:no-repeat;
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
    width: 75px;
    height: 70px;
    background-color: grey;
    background-image:url('logo.png');
    background-size:cover;
    border-radius: 50%;
}

.title_name h2{
    width:300%;
    height: 40px;
    /* background-color: green; */
    color: white;
    font-size: 25px;
    margin-left: 10px;
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
    height: 880px;
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
    height: 880px;
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
    height:680px;
    /* background-color:yellow; */
    margin-top: 30px;
    
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

.main1{
    width: 65%;
    height: 130px;
    /* background-color: blue; */
    display: flex;
    justify-content: space-evenly;
}


.profile_pic{
    width:25%;
    height: 105px;
    /* background-color: red; */
    margin-top:15px;
    /* margin-left:2%; */
    border:1px solid grey;
    border-radius:6px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}

.profile_pic img{
    width:100%;
    height:105px;
    border-radius:6px;
}

.pic_btn{
    width: 50%;
    height:24px;
    /* background-color: green; */
    margin-top: 10px;
    /* margin-right:2px; */
} 

.pic_btn .choose_file{
    width:65%;
    height:30px;
    /* margin-top:10px; */
    /* border:2px solid black; */
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

.pic_btn input::file-selector-button{
    height:30px;
    font-size: 14px;
    border:1px solid white;
    font-weight: bolder;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}



.pic_sub_btn{
    width: 30%;
    height: 30px;
    background-color: #ffff;
    margin-top:40px;
    margin-left:15px;
    font-weight: bolder;
    border: 1px solid white;
    border-radius: 5px;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

.pic_sub_btn input{
    width: 100%;
    height:30px;
    border:1px solid red;
}

.pic_sub_btn:hover{
    cursor:pointer;
    color:red;
    /* border:1px solid yellow; */
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

/* 
.pic_btn input::file-selector-button{
    height: 30px;
    font-size:14px;
    font-weight:bolder;
} */



.form{
    width:100%;
    height:500px;
    /* background-color: aqua; */
    /* margin:10px; */

}

.box{
    width:100%;
    height:70px;
    /* background-color: aqua; */
    margin-top:20px;
    display: flex;
    font-size:12px;
    justify-content: space-evenly;
    font-family: "Quando", serif;
}

.b1{
    width: 50%;
    height: 80px;
    /* background-color: black; */
}

.b2{
    width: 50%;
    height: 80px;
    /* background-color: blueviolet; */
}

.form input{
    width:95%;
    height: 40px;
    margin-left:10px;
    margin-top:10px;
    background-color:#ffff;
    border:1px solid white;
    font-family: "Lusitana", serif;
    border-radius:4px;
    padding: 20px;
    cursor:text;
    font-size:15px;
    color:rgb(107, 96, 96);
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
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
        $id=$_SESSION['id'];
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select service_name from tiffin_info where id='$id';";
        $result=pg_query($con,$query);
        while($row=pg_fetch_row($result))
        {

        ?>

        
            <div class="title_name">
                <h2>Welcome, <span style="color: pink;"><?php echo$row[0];?></span></h2>
            </div>
        <?php
        }
        ?>

        </div>

        <div class="logout">
            <!-- <h3 class="btn" name="logout"><a href="C:\xampp\htdocs\photos\login.php">Logout</a></h3> -->
            <form method="post">
                <button type="submit" class="btn" name="logout">Logout</button>
            </form>
           
             <!-- PHP LOGIC -->
            
            <?php
            if(isset($_POST['logout']))
            {
                echo "<script>
                        var r=confirm('Want to Logout..?');
                        if(r==true)
                        {
                            window.location.href='service_logout.php';
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
                <li><a href="service_profile.php"   style="color:yellow;border-bottom: 3px solid red;">Profile</a></li>
                <li><a href="service_dash.php">Dashboard</a></li>
                <li><a href="service_view.php">View / Delete Plans</a></li>
                <li><a href="service_add.php">Add Plan</a></li>
                <li><a href="service_updateplan.php">Update Plan</a></li>
                <li><a href="service_delete.php">Delete Tiffin Service</a></li>
                <!-- <li><a href="#">Contact Admin</a></li> -->
            </ul>
        </div>
    </div>


<!-- ----------------------------------------------------------- -->
<!-- ----------------------------------------------------------- -->
<!-- main activity -->

<div class="main">
        <div class="contain">
            <h2 style="color:#333333;font-size:40px;width:45%;font-family:IM Fell Great Primer SC, serif;">Account Information :-</h2>

            <div class="submit">
                <form method="post">
                        <input type="submit" value="Update Changes" name="update" class="button">
                </form>  
            </div>

            <?php

            if(isset($_POST['update']))
            {
                echo "<script>window.location.href='service_update.php'</script>";
            }

            ?>

            <div class="line">

            </div>

            <h3 style="color:purple;margin-top:20px;margin-left:5px;font-size: 25px;font-family: 'Dosis', sans-serif;"><u>Profile Picture</u> :</h3>

            <div class="main1">
                <div class="profile_pic">
                    <?php

                    $id=$_SESSION['id'];
                    $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                    $query="select profile_pic from tiffin_info where id='$id';";
                    $result=pg_query($con,$query);

                    while($row=pg_fetch_assoc($result))
                    {

                    ?>
                    <img src="profile_pic/<?php echo $row['profile_pic'];?>" alt="Profile Pic">

                    <?php
                    }
                    ?>
                </div>

                <div class="pic_btn">
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="image" class="choose_file">
                        <input type="submit" name="submit" value="Update Image" class="pic_sub_btn">
                    </form>

                    <?php
                    if(isset($_POST['submit']))
                    {
                        $id=$_SESSION['id'];
                        // $nm=$_POST['image'];
                        $file_name=$_FILES['image']['name'];
                        $tempname=$_FILES['image']['tmp_name'];
                        $folder='profile_pic/'.$file_name;

                        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
                        $query="update tiffin_info set profile_pic='$file_name' where id='$id';";
                        $result=pg_query($con,$query);

                        

                        if(move_uploaded_file($tempname,$folder) && $result)
                        {
                            echo "<script>alert('Profile Image Uploaded Successfully')</script>";
                            echo "<script>window.location.href='service_profile.php'</script>";
                        }
                        else{
                            echo "<script>alert('Profile Image Not Uploaded')</script>";
                        }
                    }
                    ?>
                </div>

                
            </div>

            <div class="line">

            </div>

            <?php
            // echo $_SESSION['id'];
            $id=$_SESSION['id'];
            $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
            $query="select service_name,full_name,mobile_no,email_id,password,login_email_id,street_address,city,state,pin_code from tiffin_info where id='$id';";
            $result=pg_query($con,$query);
            
            while($row=pg_fetch_row($result))
            {
            ?>
        

            <h3 style="color:purple;margin-top:20px;margin-left:5px;font-size: 25px;font-family: 'Dosis', sans-serif;"><u>Personal Information</u> :</h3>

            <form method="POST">
                <div class="form">
               
                    <div class="box">
                        <div class="b1">
                            <h3 style="margin-left:10px;">Tiffin Service Name</h3>
                            <input type="text" name="" id="" value="<?php echo$row[0]; ?>" readonly>
                        </div>

                        <div class="b2">
                            <h3 style="margin-left:10px;">Full Name</h3>
                            <input type="text" name="" value="<?php echo$row[1]; ?>" id="" readonly>
                        </div>
                    </div>


                    <div class="box">
                        <div class="b1">
                            <h3 style="margin-left:10px;">Email Address</h3>
                            <input type="text" name="" value="<?php echo$row[3]; ?>" id="" readonly>
                        </div>

                        <div class="b2">
                            <h3 style="margin-left:10px;">Phone Number</h3>
                            <input type="text" name="" id=""  value="<?php echo$row[2]; ?>" readonly>
                        </div>
                    </div>

                    <div class="box">
                        <div class="b1">
                            <h3 style="margin-left:10px;">Login Email Address</h3>
                            <input type="text" name="" value="<?php echo$row[5]; ?>" id="" readonly>
                        </div>

                        <div class="b2">
                            <h3 style="margin-left:10px;">Password</h3>
                            <input type="text" name="" id=""  value="<?php echo$row[4]; ?>" readonly>
                        </div>
                    </div>

                
                

                <!-- ------------ -->

                <div class="line">

                </div>
    
            
    
                <h3 style="color:purple;margin-top:20px;margin-left:5px;font-size: 25px;font-family: 'Dosis', sans-serif"><u>Address Details</u> :</h3>
    
                
                    <div class="box">
                        <div class="b1">
                            <h3 style="margin-left:10px;">Street Address</h3>
                            <input type="text" name="" value="<?php echo$row[6]; ?>" id="" readonly>
                        </div>

                        <div class="b2">
                            <h3 style="margin-left:10px;">City </h3>
                            <input type="text" name="" value="<?php echo$row[7]; ?>" id="" readonly>
                        </div>
                    </div>

                    <div class="box">
                        <div class="b1">
                            <h3 style="margin-left:10px;">State</h3>
                            <input type="text" name="" value="<?php echo$row[8]; ?>" id="" readonly>

                            

                        </div>

                        <div class="b2">
                            <h3 style="margin-left:10px;">Zip Code / Postal Code</h3>
                            <input type="text" name="" value="<?php echo$row[9]; ?>" id="" readonly>
                        </div>
                    </div>

            <?php
            }
            ?>

        </div>


        </div>

            </form>
        </div>
    

</div>

</body>
</html>