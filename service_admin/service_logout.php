<?php
session_start();
session_unset();
session_destroy();

echo "<script>
window.history.forward();
</script>
";
// sleep(1000);

echo"<script>window.location.href='login.php'</script>";
?>