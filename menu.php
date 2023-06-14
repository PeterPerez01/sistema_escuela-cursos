<?php 
echo '<!--


$$\       $$\                                          $$$$$$\    $$\     
$$ |      \__|                                        $$  __$$\   $$ |    
$$$$$$$\  $$\  $$$$$$\   $$$$$$\   $$$$$$$\  $$$$$$\  $$ /  \__|$$$$$$\   
$$  __$$\ $$ |$$  __$$\ $$  __$$\ $$  _____|$$  __$$\ $$$$\     \_$$  _|  
$$ |  $$ |$$ |$$ |  \__|$$ /  $$ |\$$$$$$\  $$ /  $$ |$$  _|      $$ |    
$$ |  $$ |$$ |$$ |      $$ |  $$ | \____$$\ $$ |  $$ |$$ |        $$ |$$\ 
$$$$$$$  |$$ |$$ |      \$$$$$$  |$$$$$$$  |\$$$$$$  |$$ |        \$$$$  |
\_______/ \__|\__|       \______/ \_______/  \______/ \__|         \____/ 
                                                                          
                                                                          
        https://birosoft.000webhostapp.com/                                                      

                                    https://www.buymeacoffee.com/birobytes


-->';
echo '<script src="https://kit.fontawesome.com/ddbbc0bed0.js" crossorigin="anonymous"></script>';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["autenticado"])){
    echo '<div class="menu">
        <a href="index.php">
        <img src="./img/logo.png" class="logo-up"> &nbsp;
        </a>
        <div class="enlaces">
            <a href="index.php">Inicio</a>
            <a href="cursos.php">Cursos</a>
            <a href="inscripcion.php">Inscripción</a>';

            if($_SESSION["rol"]=="admin"){
                echo '<a href="dashboard.php">Panel Admin</a>';
            }
            
            echo '<a style="all: unset; cursor:pointer;" href="miperfil.php";>';
            echo '<img class="fotoperfil" src="data:image/jpeg;base64,' . base64_encode($_SESSION["foto"]) . '"/>';
    echo '<h2 class="usuario">'.$_SESSION["user"].'</h2>
            </a>
            <div class="logout">
            <a class="logout" href="logout.php"><i class="fa-solid fa-sign-out chico blanco"></i></a>
            </div>
        </div>
        
    </div>';
}

else {
    echo '<div class="menu">
    <a href="index.php">
    <img src="./img/logo.png" class="logo-up"> &nbsp;
    </a>
    <div class="enlaces nolog">
        <a href="index.php">Inicio</a>
        <a href="login.php">Iniciar Sesión</a>
    </div>
    
</div>';
}

?>


            
            