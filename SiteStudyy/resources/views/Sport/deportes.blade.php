<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/deportes.css">
</head>
<body>


    <header class="header">
        <div class="logo">
            <img src="{{ asset('storage/' . $usuarioDeporte['logo'])}}" alt="Logo">
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


    <section class="hero">
        <div class="hero-content">
            <h1>{{ $usuarioDeporte['nombreweb'] }} </h1>
            <p>{{ $usuarioDeporte['descripcionweb'] }}</p>
        </div>
    </section>

    <!-- Sección de contenido -->
    <section class="main-content">
        <h2>Nuestros Servicios</h2>
        <p>{{ $usuarioDeporte['descripcionImg'] }}</p>

        <div class="image-grid">
            <!-- Tarjeta 1 -->
            <div class="image-card">
                <img src="{{ asset('storage/' . $usuarioDeporte['imagen2']) }}" alt="Entrenamiento Personalizado">
                <div class="card-content">
                    <h3>{{ $usuarioDeporte['tituloImagen1'] }}</h3>
                    <p>{{ $usuarioDeporte['desImagen1'] }}</p>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="image-card">
                <img src="{{ asset('storage/' . $usuarioDeporte['imagen2']) }}" alt="Nutrición Deportiva">
                <div class="card-content">
                    <h3>{{ $usuarioDeporte['tituloImagen2'] }}</h3>
                    <p>{{ $usuarioDeporte['desImagen2'] }}</p>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="image-card">
                <img src="{{ asset('storage/' . $usuarioDeporte['imagen3']) }}" alt="Preparación Física">
                <div class="card-content">
                    <h3>{{ $usuarioDeporte['tituloImagen3'] }}</h3>
                    <p>{{ $usuarioDeporte['desImagen3'] }}</p>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="image-card">
                <img src="{{ asset('storage/' . $usuarioDeporte['imagen4']) }}" alt="Psicología Deportiva">
                <div class="card-content">
                    <h3>{{ $usuarioDeporte['tituloImagen4'] }}</h3>
                    <p>{{ $usuarioDeporte['desImagen4'] }}</p>
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
                            <li><a href="#"> <i class="fa-solid fa-phone"></i>{{ $usuarioDeporte['coach'] }}</a></li>
                            <li><a href="#"> <i class="fa-solid fa-envelope"></i>{{ $usuarioDeporte['email']}}</a></li>
                            <li><a href="#"> <i class="fa-solid fa-location-dot"></i> Cali Valle del Cauca</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
