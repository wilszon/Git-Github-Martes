<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto - GameZone</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        header {
            background-color: #1f1f1f;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ff3c00;
        }

        nav a {
            margin-left: 20px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff3c00;
        }

        .product-detail {
            display: flex;
            flex-wrap: wrap;
            padding: 50px;
            gap: 50px;
            justify-content: center;
        }

        .product-image {
            flex: 1 1 400px;
            max-width: 500px;
        }

        .product-image img {
            width: 100%;
            border-radius: 10px;
        }

        .product-info {
            flex: 1 1 300px;
            max-width: 500px;
        }

        .product-info h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .product-info .developer {
            color: #aaa;
            margin-bottom: 15px;
        }

        .product-info .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ff3c00;
            margin-bottom: 20px;
        }

        .product-info p {
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .product-info button {
            padding: 15px 30px;
            background-color: #ff3c00;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-info button:hover {
            background-color: #ff5c33;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            flex: 1 1 200px;
            background-color: #1f1f1f;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .feature h4 {
            margin-bottom: 5px;
            color: #ff3c00;
        }

        footer {
            background-color: #1f1f1f;
            padding: 30px 50px;
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">GameZone</div>
        <nav>
            <a href="{{ route('welcome') }}">Inicio</a>
            <a href="#">Juegos</a>
            <a href="#">Contacto</a>
        </nav>
    </header>

    <section class="product-detail">
        <div class="product-image">
            <img src="https://juegosdigitalescolombia.com/files/images/productos/1654982757-the-last-of-us-remastered-part-i-ps5-pre-orden-0.jpg" alt="Imagen del Juego">
        </div>
        <div class="product-info">
            <h1>The Last of Us™ Part I</h1>
            <div class="developer">Sony Interactive Entertainment</div>
            <div class="price">Incluido su DLC / 180.000 COP</div>
            <p>Sumérgete en una historia épica en un mundo post-apocalíptico. Explora, combate y sobrevive junto a Ellie y Joel.</p>
            <button>COMPRAR</button>

            <div class="features">
                <div class="feature">
                    <h4>1 Jugador</h4>
                    <p>Disfruta la historia en solitario.</p>
                </div>
                <div class="feature">
                    <h4>Offline Activado</h4>
                    <p>Juega sin conexión a internet.</p>
                </div>
                <div class="feature">
                    <h4>PS5 Pro</h4>
                    <p>Mejorado para PS5 Pro.</p>
                </div>
                <div class="feature">
                    <h4>Accesibilidad</h4>
                    <p>Funciones especiales para todos.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        © 2025 GameZone. Todos los derechos reservados.
    </footer>
</body>
</html>
