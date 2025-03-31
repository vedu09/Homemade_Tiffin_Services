<?php
session_start();
ini_set('display_errors', '0');
$id=$_SESSION['id'];

$con=pg_connect("host=localhost dbname=tiffin_service user=postgres password=090403");

$x=$_POST['btn1'];

// echo $x;

if($x==1)
{
    $nm=ucwords(strtolower($_POST['nm']));
    $query="update tiffin_info set service_name='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Service Name Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==2)
{
    $nm=ucwords(strtolower($_POST['nm']));
    $query="update tiffin_info set full_name='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Full Name Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==3)
{
    $nm=$_POST['nm'];
    $query="update tiffin_info set password='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Password Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==4)
{
    $nm=$_POST['nm'];
    $query="update tiffin_info set mobile_no='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Mobile Number Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==5)
{
    $nm=ucwords(strtolower($_POST['nm']));
    $query="update tiffin_info set street_address='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Street Address Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==6)
{
    $nm=ucwords(strtolower($_POST['nm']));
    $query="update tiffin_info set city='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('City Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==7)
{
    $nm=ucwords(strtolower($_POST['nm']));
    $query="update tiffin_info set state='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('State Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}
else if($x==8)
{
    $nm=$_POST['nm'];
    $query="update tiffin_info set pin_code='$nm' where id='$id';";
    $result=pg_query($con,$query);
    if($result)
    {
        echo "<script>alert('Pin Code Updated Successfully')</script>";
    }
    
    echo "<script>window.location.href='service_update.php'</script>";
}

?>