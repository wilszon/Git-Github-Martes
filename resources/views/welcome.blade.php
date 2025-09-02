<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Tu tienda de videojuegos</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #121212;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header / Navbar */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1f1f1f;
        }

        header .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #ff3c00;
        }

        nav a {
            margin-left: 25px;
            font-weight: bold;
            color: #fff;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff3c00;
        }

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px;
            background: url('https://images.unsplash.com/photo-1606813902448-66d4469ad5aa?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 8px rgba(0,0,0,0.7);
        }

        .hero a {
            padding: 15px 30px;
            background-color: #ff3c00;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .hero a:hover {
            background-color: #ff5c33;
        }

        /* Productos Destacados */
        .productos {
            padding: 80px 50px;
            background-color: #1f1f1f;
            text-align: center;
        }

        .productos h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #ff3c00;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .card {
            background-color: #2a2a2a;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            margin-bottom: 10px;
            color: #ff3c00;
        }

        .card-content p {
            margin-bottom: 15px;
            color: #ddd;
        }

        .card-content span {
            font-weight: bold;
            color: #fff;
        }

        .card-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #ff3c00;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s;
        }

        .card-content a:hover {
            background-color: #ff5c33;
        }

        /* Footer */
        footer {
            padding: 30px 50px;
            background-color: #1f1f1f;
            text-align: center;
            color: #888;
        }

        footer a {
            color: #ff3c00;
            margin: 0 10px;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">GameZone</div>
        <nav>
            <a href="#productos">Juegos</a>
            <a href="#beneficios">Beneficios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Tu mundo gamer empieza aquí</h1>
        <p>Encuentra los mejores videojuegos al mejor precio</p>
        <a href="#productos">Ver Juegos</a>
    </section>

    <section class="productos" id="productos">
        <h2>Juegos Destacados</h2>
        <div class="cards">
            <div class="card">
                <img src="https://media.vandal.net/i/1200x1200/2-2024/1/2024211750367_1.jpg" alt="Juego 1">
                <div class="card-content">
                    <h3>Resident Evil 4 Remake</h3>
                    <p>Terror y Acción.</p>
                    <span>210.000 COP</span>
                    <a href="#">Comprar</a>
                </div>
            </div>
            <div class="card">
                <img src="https://juegosdigitalescolombia.com/files/images/productos/1654982757-the-last-of-us-remastered-part-i-ps5-pre-orden-0.jpg" alt="Juego 2">
                <div class="card-content">
                    <h3>The Last Of Us</h3>
                    <p>Supervivencia, Accion y Terror.</p>
                    <span>180.000 COP</span>
                    <a href="#">Comprar</a>
                </div>
            </div>
            <div class="card">
                <img src="https://e0.365dm.com/25/07/1600x900/skysports-eafc-bellingham-musiala_6966794.jpg?20250717093803" alt="Juego 3">
                <div class="card-content">
                    <h3>EA FC 26</h3>
                    <p>Deportes.</p>
                    <span>350.000 COP</span>
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>
    </section>

    <footer id="contacto">
        <p>© 2025 GameZone. Todos los derechos reservados.</p>
        <p>Síguenos en:
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a> |
            <a href="#">Instagram</a>
        </p>
    </footer>
</body>
</html>
