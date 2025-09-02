<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Carrito de Compras</title>
    <style>
        body { background:#121212; color:#fff; font-family:'Arial',sans-serif; margin:0; }
        header { display:flex; justify-content:space-between; align-items:center; padding:20px 50px; background:#1f1f1f; }
        .logo { font-size:2rem; font-weight:bold; color:#ff3c00; }
        nav a { margin-left:25px; font-weight:bold; color:#fff; text-decoration:none; }
        nav a:hover { color:#ff3c00; }
        .carrito { padding:80px 50px; background:#1f1f1f; }
        .carrito h2 { font-size:2.5rem; margin-bottom:30px; color:#ff3c00; text-align:center; }
        table { width:100%; border-collapse:collapse; background:#2a2a2a; border-radius:10px; overflow:hidden; }
        th, td { padding:15px; text-align:center; }
        th { background:#ff3c00; }
        tr:nth-child(even) { background:#333; }
        .img-mini { width:80px; height:80px; object-fit:cover; border-radius:8px; }
        .total { margin-top:20px; text-align:right; font-size:1.5rem; font-weight:bold; }
        .btn { display:inline-block; margin-top:20px; padding:15px 30px; background:#ff3c00; border-radius:5px; color:#fff; text-decoration:none; }
        .btn:hover { background:#ff5c33; }
        footer { padding:30px 50px; background:#1f1f1f; text-align:center; color:#888; margin-top:50px; }
        footer a { color:#ff3c00; margin:0 10px; }
    </style>
</head>
<body>
<header>
    <div class="logo">GameZone</div>
    <nav>
        <a href="{{ route('welcome') }}">Inicio</a>
        <a href="{{ route('listaproductos') }}">Productos</a>
        <a href="{{ route('carrito') }}">Carrito</a>
    </nav>
</header>

<section class="carrito">
    <h2>Tu Carrito</h2>
    <table>
        <tr>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <tr>
            <td><img class="img-mini" src="https://media.vandal.net/i/1200x1200/2-2024/1/2024211750367_1.jpg" alt="Resident Evil 4"></td>
            <td>Resident Evil 4 Remake</td>
            <td>210.000 COP</td>
            <td>1</td>
            <td>210.000 COP</td>
        </tr>
        <tr>
            <td><img class="img-mini" src="https://juegosdigitalescolombia.com/files/images/productos/1654982757-the-last-of-us-remastered-part-i-ps5-pre-orden-0.jpg" alt="The Last of Us"></td>
            <td>The Last of Us</td>
            <td>180.000 COP</td>
            <td>2</td>
            <td>360.000 COP</td>
        </tr>
        <tr>
            <td><img class="img-mini" src="https://e0.365dm.com/25/07/1600x900/skysports-eafc-bellingham-musiala_6966794.jpg?20250717093803" alt="EA FC 26"></td>
            <td>EA FC 26</td>
            <td>350.000 COP</td>
            <td>1</td>
            <td>350.000 COP</td>
        </tr>
    </table>
    <p class="total">Total: 920.000 COP</p>
    <a href="#" class="btn">Finalizar Compra</a>
</section>

<footer>
    <p>© 2025 GameZone. Todos los derechos reservados.</p>
    <p>Síguenos en:
        <a href="#">Facebook</a> |
        <a href="#">Twitter</a> |
        <a href="#">Instagram</a>
    </p>
</footer>
</body>
</html>
