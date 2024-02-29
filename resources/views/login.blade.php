<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/ba69bf8ad0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@800&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/categorias.css">
    <link rel="stylesheet" href="css/indexMain.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/contacto.css">

    <link rel="icon" type="image/x-icon"
        href="https://sar-solutions.com.mx/wp-content/uploads/2023/11/logo-1-100x100.png">
    <title>Registro e inicio de sesión</title>
</head>

<body>
    <!-- EL nav  -->
    <header>
        <nav class="navbar">
            <div class="logo-and-search">
                <div class="logo">
                    <img src="src/logosarlineal-dark-icono.png" alt="Logo" onclick="window.location.href='index.html'">
                </div>
            </div>

            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="contenidoLog">
        <!-- Para iniciar sesion -->
        <section class="loginCont login">
            <div class="informacion">
                <div class="infotexto">
                    <h2>Explore nuestra membresía y desarrolle sus habilidades para sobresalir en su campo profesional.</h2>
                    <p>¿No tiene una cuenta?</p>
                    <input type="button" value="Crear Cuenta" id="sing-in">
                </div>
            </div>
            <div class="formularioLoyCre">
                <div class="formularioContenido">
                    <h2>Iniciar sesión</h2>
    
                    <form class="FormCrear">
    
                        <label>
                            <i class='bx bx-envelope'></i>
                            <input type="email"  placeholder="Correo electrónico">
                        </label>
    
                        <label>
                            <!-- Contraseña normal  -->
                            <i class='bx bx-lock-alt'></i>
                            <!-- para  que se muestre la contraseña -->
                            <!-- <i class='bx bx-lock-open-alt' ></i> -->
                            <input type="password" placeholder="Contraseña" >
                        </label>
                        
                        <input value="Iniciar sesión" type="submit">
    
                    </form>
                </div>
            </div>
        </section>
        <!-- Para crear cuenta -->
        <section class="loginCont hide registrar">
            <div class="informacion">
                <div class="infotexto">
                    <h2>Explore nuestra membresía y desarrolle sus habilidades para sobresalir en su campo profesional.</h2>
                    <p>¿Ya tiene una cuenta?</p>
                    <input type="button" value="Iniciar sesión" id="sing-up">
                </div>
            </div>
            <div class="formularioLoyCre">
                <div class="formularioContenido">
                    <h2>Crear una cuenta</h2>
    
                    <form class="FormCrear">
                        <label>
                            <i class='bx bx-user-pin'></i>
                            <input type="text" placeholder="Nombre completo">
                        </label>
    
                        <label>
                            <i class='bx bx-envelope'></i>
                            <input type="email"  placeholder="Correo electrónico">
                        </label>
    
                        <label>
                            <!-- Contraseña normal  -->
                            <i class='bx bx-lock-alt'></i>
                            <!-- para  que se muestre la contraseña -->
                            <!-- <i class='bx bx-lock-open-alt' ></i> -->
                            <input type="password" placeholder="Contraseña" >
                        </label>
                        
                        <input value="Registrarse" type="submit">
    
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script type="module" src="/js/formulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<!-- <script src="/js/Acciones.js"></script> -->
</html>