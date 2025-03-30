<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="../css/comida.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>

    <!-- 1. Nav -->
    <header class="header">
        <div class="logo">
            <img src="{{$imagen}}" alt="Logo Cafetería">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="{{ route('Form-Food') }}">Inicio</a></li>
                <li><a href="#">Menú</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- 2. Título y descripción -->
    <div class="text-header">
        <h1><strong>{{ $website_name }}</strong></h1>
        <p><strong>{{ $Description }}</strong></p>
    </div>

    <!-- 3. 3 Imágenes -->
    <div class="image-container">
        <div>
            <div class="image-box" >
                <img src="{{ $imagen_3 }}" alt="" class="img-food" width="300px">
                <p class="image-title"><strong>{{ $food_price }}</strong></p>
            </div>
            <p class="image-title"><strong>{{ $food_description }}</strong></p>
        </div>
        <div>
            <div class="image-box">
                <img src="{{ $imagen_4 }}" alt="" class="img-food" width="300px">
                <p class="image-title"><strong>{{ $food_price }}</strong></p>
            </div>
            <p class="image-title"><strong>{{ $food_description_2 }}</strong></p>
        </div>
        <div>
            <div class="image-box" >
                <img src="{{ $imagen_5 }}" alt="" class="img-food" width="300px">
                <p class="image-title"><strong>{{ $food_price }}</strong></p>
            </div>
            <p class="image-title"><strong>{{ $food_description_3 }}</strong></p>
        </div>
    </div>

    <!-- 4. Hero con texto para cafetería -->
    <section class="hero">
        <div class="hero-content">
            <h1><strong>{{ $food_name }}</strong></h1>
            <p><strong>{{ $food }}</strong></p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <img src="{{ $imagen_2 }}" alt="" class="logo">
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
                            <li><a href="#"> <i class="fa-solid fa-phone"></i> 3126382</a></li>
                            <li><a href="#"> <i class="fa-solid fa-envelope"></i> cacha@agmail.com</a></li>
                            <li><a href="#"> <i class="fa-solid fa-location-dot"></i> Cali Valle del Cauca</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
