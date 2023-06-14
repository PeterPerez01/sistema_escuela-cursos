<?php 
session_start();
session_destroy();

echo "<script>
    alert('Cerraste sesión.');
    location.href='index.php';
</script>";
?>
