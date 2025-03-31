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
    <title>Update Plan</title>


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
        padding:0;
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
    background-image:url('admin.png');
    background-size:cover;
    border-radius: 50%;
}

.title_name h2{
    width:300%;
    height: 40px;
    /* background-color: green; */
    color: white;
    font-size: 25px;
    margin-left: 20px;
    margin-top: 17px;

}

.logout{
    width: 12%;
    height: 40px;
    /* background-color: red; */
    float: right;
    margin-top:-60px;
    margin-right: 20px;
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
    height: 645px;
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
    height: 647px;
    background-color: white;
    /* background-color:red; */
  
    position: absolute;
    top: 12%;
    left: 20%;
    /* padding-top: 60px; */
    padding-left: 20px;
   padding-right:20px;
   padding-top: 20px;
}

.contain{
    width:100%;
    height:540px;
    /* background-color:blue; */
    background-color:#DCDCDC;
    margin-top: 20px;
    /* background-image:url("https://www.shutterstock.com/image-vector/white-welcome-sign-over-confetti-260nw-302906972.jpg");
    background-repeat: no-repeat;
    background-size: cover; */
    padding:30px;
    border-radius:8px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.form{
    width:100%;
    height:482px;
    /* background-color: aqua; */
    /* margin:10px; */

}

.box{
    width:100%;
    height:90px;
    /* background-color: aqua; */
    margin-top:20px;
    /* margin-bottom: 20px; */
    display: flex;
    justify-content: space-between;
    font-size:12px;
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
    border-radius:6px;
    padding: 20px;
    cursor:text;
    font-size:15px;
    color:rgb(107, 96, 96);
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    font-family: "Lusitana", serif;
}

.form select{
    width: 95%;
    height: 40px;
    margin-left:10px;
    margin-top:10px;
    background-color:	#ffff;
    border:1px solid white;
    border-radius:6px;
    padding-left: 18px;
    cursor:text;
    font-size:15px;
    color:rgb(107, 96, 96);
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    font-family: "Lusitana", serif;
}

textarea{
    margin-left:10px;
    margin-top:10px;
    width: 95%;
    height: 150px;
    background-color: #ffff;
    border:1px solid white;
    border-radius: 6px;
    padding:20px;
    cursor:text;
    font-size:15px;
    color:rgb(107, 96, 96);
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    font-family: "Lusitana", serif;
}

.b1 input::file-selector-button{
    width: 20%;
    height:40px;
    cursor:pointer;
    border-top-left-radius:6px ;
    border-bottom-left-radius: 6px;
    border:1px solid white;
    font-family: "Cagliostro", sans-serif;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

}

.ok:hover,.fail:hover{
    cursor:pointer;
    color:red;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}


    </style>

</head>
<body>
    
        <!-- ------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------ -->
    <!-- navbar -->
    <div class="header">
        
        <div class="account">
        
     

        <!-- <img src="logo.png" alt="image not visibile" style="width:70px;height:70px;border-radius:50%;"> -->


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
                echo "<script> var x=confirm('Confirm Before Logout');";
                echo" if(x)
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
                <li><a href="service_profile.php">Profile</a></li>
                <li><a href="service_dash.php"  >Dashboard</a></li>
                <li><a href="service_view.php">View / Delete Plans</a></li>
                <li><a href="service_add.php">Add Plan</a></li>
                <li><a href="service_updateplan.php"  style="color:yellow;border-bottom: 3px solid red;">Update Plan</a></li>
                <li><a href="service_delete.php">Delete Tiffin Service</a></li>
                <!-- <li><a href="#">Contact Admin</a></li> -->
            </ul>
        </div>
    </div>


        <!-- ----------------------------------------------------------- -->
<!-- ----------------------------------------------------------- -->
<!-- main activity -->

<div class="main">

<h2 style='color:#333333;width:100%;font-size:40px;font-family:IM Fell Great Primer SC, serif;'>Update Your Plan Here...!!</h2>

    <div class="contain">

    <?php

    $unq_id=$_SESSION['unq_id'];
    // echo $uq_id;

    if($unq_id=="")
    {
        echo "<script>alert('PLease select Tiffin Plan from View Section...');
            window.location.href='service_view.php'
        </script>";

    }
   

        // echo "welcome";
        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="select * from plan_info where unique_id='$unq_id';";
        $result=pg_query($con,$query);

        while($row=pg_fetch_row($result))
        {

        
    
    ?>
       
    <form method="POST" enctype="multipart/form-data">
            <div class="form">
           
                <div class="box">
                    <div class="b1">
                        <h2 style="margin-left:10px;">Plan Name:</h2>
                        <input type="text" name="p_name"  value="<?php echo$row[1];?>" id="" placeholder="Monthly Tiffin, Daily Tiffin, Student Budget Tiffin,etc" >
                    </div>

                    <div class="b2">
                        <h2 style="margin-left:10px;">Plan Description:</h2>
                        <textarea name="p_des" value="hello" cols="45" rows="6" placeholder="eg: (2-Chapatis/Roti , 1-Curry Vegetable , 1-Dry Vegetable , 1-Rice ,1-Dal ,sweet, salad)" ></textarea>
                    </div>
                </div>


                <div class="box">
                    <div class="b1">
                        <h2 style="margin-left:10px;">Cost Of Tiffin</h2>
                        <input type="text" name="p_cost" value="<?php echo$row[3];?>" placeholder="Enter Price" id="" >
                    </div>

                    
                </div>

                <div class="box">
                    <div class="b1">
                        <h2 style="margin-left:10px;">Tiffin Time</h2>
                        <select name="p_time" value="<?php echo$row[4];?>" >
                            <option value="" selected>Select Option</option>
                            <option value="afternoon meal">AfterNoon Meal</option>
                            <option value="night meal">Night Meal</option>
                            <option value="both time">Both Time</option>
                        </select>
                    </div>

                    <div class="b2">
                        <h3 style="margin-left:10px;">Plan Status</h3>
                        <select name="p_status" value="<?php echo$row[5];?>">
                            <option value="" selected>Select Option</option>
                            <option value="open">Open</option>
                            <option value="close">Close</option>
                        </select>
                    </div>
                </div>

                <div class="box">
                    <div class="b1">
                        <h2 style="margin-left:10px;">Choose Image for Plan:</h2>
                        <input type="file" name="image" value="<?php echo$row[6];?>" style="padding:0px;" >
                    </div>

                   
                </div>

                <input type="submit" class="ok" name="update" value="Update" style="width:15%;padding: 0px;font-size:18px;font-weight:bolder;margin-left:34%;margin-top:20px;cursor:pointer;">
                <input type="submit" class="fail" name="cancel" value="Cancel Update" style="width:15%;padding: 0px;font-size:18px;font-weight:bolder;margin-left:3%;margin-top:20px;cursor:pointer;">                
            </div>

        <?php
            }

            if(isset($_POST['update']))
            {
                $name=$_POST['p_name'];
                $des=$_POST['p_des'];
                $cost=$_POST['p_cost'];
                $status=$_POST['p_status'];
                $time=$_POST['p_time'];
                $file_name=$_FILES['image']['name'];
                $tempname=$_FILES['image']['tmp_name'];
                $folder='plan_pic/'.$file_name;

                if($name==""||$des==""||$cost==""||$status==""||$time==""||$file_name=="")
                {
                    echo "<script>alert('Fields cannot be empty')
                    window.location.href='service_updateplan.php'
                    </script>";
                }

                
                $query="update plan_info set name='$name',description='$des',price='$cost',tiffin_time='$time',status='$status',image='$file_name' where unique_id='$unq_id';";
                $result=pg_query($con,$query);
                $_SESSION['unq_id']="";
                echo "<script>alert('Plan Updated Successfully')
                window.location.href='service_view.php'
                </script>";
                
                
                
            }

            if(isset($_POST['cancel']))
            {
                $_SESSION['unq_id']="";
                echo "<script>alert('Plan Updation Canceled')
                window.location.href='service_view.php'
                </script>";
            }
            
            
            
        
        ?>
            
    </div>
</div>



</body>
</html>