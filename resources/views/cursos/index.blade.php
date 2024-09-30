<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Barra de Menú en PHP</title>

</head>

<body>

    <!-- Barra de navegación -->
    <nav>
        <!-- Logo -->
        <div class="logo"><img src="laravel.png"></div>

        <!-- Menú de navegación -->
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="contenedor">
        <img src="larav.jpg">
    </div>

    <div class="contenedor2">
        <div class="izquierda">
            <img src="curso.png">
        </div>
        <div class="derecha">
            <h2>Why you should study Laravel?</h2>

            <p>1. High demand in the labor market. 2. Time Saving and Efficiency. 3. Ease of Use and Documentation</p>
            <p> 4. Great community and support. 5. Solid MVC structure . 6. You will learn how to work with modern
                tools.</p>
            <p>7. Built-in security. 8. Preparation for real projects. 9. Flexible schedules</p>
            <p> 10. Access to certification . 11. Frequent updates</p>
        </div>
    </div>
    <!-- Sección de Testimonios -->
    <section id="testimonios" class="section">
        <h2>Student Testimonial</h2>
        <div class="grid-layout">
            <div class="testimonio">
                <img src="estudiante.jpeg" alt="Estudiante Satisfecho">
                <p>"This course changed my life. I'm now a full-stack developer."</p>
                <p><strong>- Juan Pérez</strong></p>
            </div>
            <div class="testimonio">
                <img src="estudiante2.jpeg" alt="Estudiante Satisfecho">
                <p>"The classes are clear and precise. I learned a lot."</p>
                <p><strong>- María López</strong></p>
            </div>
            <div class="testimonio">
                <img src="estudiante3.jpeg" alt="Estudiante Satisfecho">
                <p>"Excellent support and up-to-date content."</p>
                <p><strong>- Carlos García</strong></p>
            </div>
        </div>
    </section>


    </div>


    <section id="contacto" class="section contact-info">
        <h3>Location</h3>
        <p>Programming Development Center, 123 False Street</p>
        <h3>Telephone</h3>
        <p>(123) 456-7890</p>
        <h3>Email</h3>
        <p>contacto@cursosprogramacion.com</p>
    </section>

    </div>

    <footer>
        <p>&copy;
            <?php echo date('Y'); ?> © Programming Courses. All rights reserved.
        </p>
    </footer>
</body>

</html>
