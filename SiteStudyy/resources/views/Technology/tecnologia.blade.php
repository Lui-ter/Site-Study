<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologia</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/tecnologia.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset('storage/'. $userTecnology['logo']) }}" alt="Logo">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Asesorías</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de portada -->
    <section class="hero">
        <div class="hero-content">
            <h1>{{ $userTecnology['namewebsite']}}</h1>
            <p>{{ $userTecnology['descriptionweb']}}</p>
            <!-- Botón eliminado según solicitud -->
        </div>
    </section>

    <!-- Sección de contenido -->
    <section class="main-content">
        <h2>Nuestros Servicios</h2>
        <p>{{ $userTecnology['desc_imgs']}}</p>

        <div class="image-gallery">
            <div class="image-box">
                <img src="{{ asset('storage/'. $userTecnology['img_one']) }}" alt="Teclado Redragon">
                <div class="image-info">
                    <h3>Teclado Redragon Dark Avenger TKL Mecanico</h3>
                    <p>{{ $userTecnology['desc_img_one']}}</p>
                </div>
            </div>

            <div class="image-box">
                <img src="{{ asset('storage/'. $userTecnology['img_two']) }}" alt="Combo Trust GXT">
                <div class="image-info">
                    <h3>Combo Trust GXT 794W 3 en 1 Teclado Mouse Padmouse</h3>
                    <p>{{ $userTecnology['desc_img_two']}}</p>
                </div>
            </div>

            <div class="image-box">
                <img src="{{ asset('storage/'. $userTecnology['img_three']) }}" alt="Mouse Gamer">
                <div class="image-info">
                    <h3>Mouse Gamer Trust GXT </h3>
                    <p>{{ $userTecnology['desc_img_three']}}</p>
                </div>
            </div>

            <div class="image-box">
                <img src="{{ asset('storage/'. $userTecnology['img_four']) }}" alt="GeForce RTX">
                <div class="image-info">
                    <h3> GeForce RTX 5070 Ti INFINITY 16GB</h3>
                    <p>{{ $userTecnology['desc_img_four']}}</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <img src="https://via.placeholder.com/100x50" alt="" class="logo">
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Otros</h4>
                    <div class="paginas-links">
                        <ul>
                            <li><a href="#"> <i class="fa-solid fa-angle-right"></i> Inicio</a></li>
                            <li><a href="#"> <i class="fa-solid fa-angle-right"></i> Cursos</a></li>
                            <li><a href="#"> <i class="fa-solid fa-angle-right"></i> Servicios</a></li>
                            <li><a href="#"> <i class="fa-solid fa-angle-right"></i> Asesorias</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <div class="contacto-links">
                        <ul>
                            <li><a href="#"> <i class="fa-solid fa-phone"></i>{{ $userTecnology['boss']}}</a></li>
                            <li><a href="#"> <i class="fa-solid fa-envelope"></i>{{ $userTecnology['email']}}</a></li>
                            <li><a href="#"> <i class="fa-solid fa-location-dot"></i> Cali Valle del Cauca</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
