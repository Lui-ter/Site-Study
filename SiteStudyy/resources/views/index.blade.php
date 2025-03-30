<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Study</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo">
                    <img src="img/LogoCACHA.png" alt="">
                </li>
                <li class="icons">
                    <a href=""><i class="fa-solid fa-bell"></i></a>
                    <div class="color">
                            <a href=""><i class="fa-solid fa-sun"></i></a>
                            <a href=""><i class="fa-solid fa-moon"></i></a>
                    </div>
                    <a href=""><i class="fa-solid fa-gear"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="form-container">
        <div class="title">
            <h2>SITESTUDY</h2>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment,
                so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through
                weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. 
            </p>
        </div>
        <div class="cards">
            <div class="card-food">
                <h3>Sports</h3>
                <div class="img-card">
                    <img src="img/sports.png" alt="" >
                </div>
                <div class="button">
                    <button class="btn-sports"><a href="{{ route('Form-Sports') }}">SPORTS</a></button>
                </div>
            </div>

            <div class="card-food">
                <h3>Food</h3>
                <div class="img-card">
                    <img src="img/Comidas.png" alt="">
                </div>
                <div class="button">
                    <button class="btn-food"><a href="{{ route('Form-Food') }}">FOOD</a></button>
                </div>
            </div>
            <div class="card-food">
                <h3>TECHNOLOGY</h3>
                <div class="img-card">
                    <img src="img/tech.jpg" alt="">
                </div>
                <div class="button">
                    <button class="btn-tech"><a href="{{ route('Form-Tehnology') }}">TECHNOLOGY</a></button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <img src="LogoCACHA.png" alt="" class="logo">
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
                            <li><a href=""> <i class="fa-solid fa-angle-right"></i> Inicio</a></li>
                            <li><a href=""> <i class="fa-solid fa-angle-right"></i> Cursos</a></li>
                            <li><a href="#"> <i class="fa-solid fa-angle-right"></i> Servicios</a></li>
                            <li><a href=""> <i class="fa-solid fa-angle-right"></i> Asesorias</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <div class="contacto-links">
                        <ul>
                            <li><a href="#"> <i class="fa-solid fa-phone"></i></i> 3126382</a></li>
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
