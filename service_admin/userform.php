<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$x=$_SESSION['tf_nm'];
// echo $x;

?>


<html>
    <head>
    <title>User Form</title>

    <!-- ------------------------------------ -->
    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">
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
    box-shadow:0 0 50px rgba(0,0,0, .2);
    /* background-image:url(user_form.jpg); */
    background-blend-mode: black;
    margin-right:500px;
    background-size: cover;
    border-radius: 20px;
    color: white;
    padding:40px 35px 55px;
    margin: 0 50px;
    margin-right:200px;
    margin-left: 20%;
    position: absolute;
    margin-top:18px;
    top:20%;


}

.wrap h1{
    font-size: 45px;
    text-align: center;
    margin-bottom: 25px;
    color:black;
    margin-top: 0%;
    font-family: "Hahmlet", serif;

}
.wrap .in-box{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    /* margin-bottom:3%; */
    
    
    /* background-color:red; */
   
}

.in-box .in-field{
    position: relative;
    width:48%;
    height:60px;
    margin: 13px 0;
    /* background-color:yellow; */
}

.in-box .in-field input {
    width:100%;
    height:100%;
    background: transparent;
    border:1px solid  #f2f2f2;
    outline: none;
    font-size:18px;
    /* color:whitesmoke; */
    border-radius: 40px;
    padding:15px 15px 15px 40px;
    font-family: "Pridi", serif;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}


select{
    width:100%;
    height:100%;
    background: transparent;
    border:1px solid  #f2f2f2;
    outline: none;
    font-size:18px;
    /* color:whitesmoke; */
    border-radius: 40px;
    font-family: "Pridi", serif;
    padding:15px 15px 15px 40px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.in-box .in-field input::placeholder{
    color: black;
}

.in-box .in-field i{
    position: absolute;
    left:15px;
    top:50%;
    transform: translateY(-50%);
    font-size: 20px;

}

.wrap .btn{    
    width:25%;
    height:45px;
    background: white;
    border-color: #a6a6a6;
    outline: none;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0, .1);
    cursor: pointer;
    font-size: 17px;
    margin-left:300px;
    font-weight: 600;
    margin-top:30px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    
}

.wrap .btn:hover{
    color:red;
    border:none;
    /* background-color:	 #ffff80; */
}

.wrap .link{
    font-size:13.5px;
    text-align: center;
    margin: 20px 0 15px;
    
}






    </style>
    </head>

    <body>


    <div class="body_1">


        <div class="bg">
            <img src="gradient2.png" alt="" width="100px" height="729px">
    
        <div class="topper">
            <a href="#" ><img src="https://img.playbook.com/yI2uZOJHNaKWN1BPZaQ4YUD40eAtfx71zLaRoH5egF0/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzRhMDAwZjM1/LTFiZDAtNDUxNi1i/ZWIyLTBjMTg5ZTli/NTY4OA" class="logo"></a>
            <div class="navbar">
                <a href="../home.php">Home</a>
                <a href="../about_us.html">About us</a>
                <a href="../contact_us.php">Contact us</a>
                <a href="../service_admin/login.php">Promote Business</a>
            </div>
        </div>

        

        <div class="wrap">
            <form action="" method="post">
                <h1>User Form</h1>

                <div class="in-box">
                    <div class="in-field">
                        <input type="text" name="fn" placeholder="First Name" required>
                    </div>

                    <div class="in-field">
                        <input type="text" name="ln" placeholder="Last Name" required>
                    </div>
                </div>


                <div class="in-box">
                    <div class="in-field">
                        <input type="text" name="phn" placeholder="Phone Number" required>
                    </div>

                    

                    <div class="in-field">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                
               

                <div class="in-box">
                    <div class="in-field">
                        
                        <select name="occ" class="op" required>
                            <option>Choose Your Occupation :</option>
                            <option value="student" >Student</option>
                            <option value="employee">Employee</option>
                            <option value="others">Others</option>
                        </select>
                    </div>


                    <div class="in-field">
                        <input type="text" name="city" placeholder="Enter your City" required>
                    </div>
                </div>

                

                
                <button type="Submit" name="submit" class="btn">Get Access</button>
                
            </form>
        </div>

    </div>
    
    <!-- PHP LOGIC -->
    <?php
    if(isset($_POST['submit']))
    {

        $fn=$_POST['fn'];
        $ln=$_POST['ln'];
        $phn=$_POST['phn'];
        $email=$_POST['email'];
        $occ=$_POST['occ'];
        $city=$_POST['city'];

        echo $fn,$ln,$phn,$email,$occ,$city;

        $con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");
        $query="insert into user_info values('$fn','$ln','$phn','$email','$occ','$city');";
        $result=pg_query($con,$query);

        if($result)
        {
            echo "<script>window.location.href='final_result.php'</script>";
        
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }
        
        

    }

       ?>
   
    </body>


</html>