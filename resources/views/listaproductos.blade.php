<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Lista de Productos</title>
    <style>
        body { background:#121212; color:#fff; font-family:'Arial',sans-serif; margin:0; }
        header { display:flex; justify-content:space-between; align-items:center; padding:20px 50px; background:#1f1f1f; }
        .logo { font-size:2rem; font-weight:bold; color:#ff3c00; }
        nav a { margin-left:25px; font-weight:bold; color:#fff; text-decoration:none; }
        nav a:hover { color:#ff3c00; }

        /* Sección filtros */
        .filtros { padding:40px 50px; background:#1f1f1f; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; }
        .filtros h2 { font-size:2rem; color:#ff3c00; margin-bottom:15px; }
        .filtros select { padding:10px 15px; border-radius:5px; border:none; background:#2a2a2a; color:#fff; }
        .filtros select option { background:#1f1f1f; }

        /* Productos */
        .productos { padding:60px 50px; background:#181818; }
        .productos h3 { font-size:2rem; margin-bottom:40px; color:#ff3c00; text-align:center; }
        .cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; }
        .card { background:#2a2a2a; border-radius:10px; overflow:hidden; transition:.3s; }
        .card:hover { transform:scale(1.05); }
        .card img { width:100%; height:220px; object-fit:cover; }
        .card-content { padding:20px; }
        .card-content h4 { color:#ff3c00; margin-bottom:10px; }
        .card-content p { color:#ccc; margin-bottom:10px; }
        .card-content span { font-weight:bold; display:block; margin-bottom:10px; }
        .card-content a { display:inline-block; padding:10px 20px; background:#ff3c00; border-radius:5px; color:#fff; text-decoration:none; }
        .card-content a:hover { background:#ff5c33; }

        /* Próximamente */
        .proximos { padding:60px 50px; background:#1f1f1f; text-align:center; }
        .proximos h3 { font-size:2rem; margin-bottom:40px; color:#ff3c00; }
        .proximos .cards .card { opacity:0.7; position:relative; }
        .badge { position:absolute; top:10px; left:10px; background:#ff3c00; color:#fff; padding:5px 10px; border-radius:5px; font-size:0.9rem; }

        footer { padding:30px 50px; background:#1f1f1f; text-align:center; color:#888; }
        footer a { color:#ff3c00; margin:0 10px; }
    </style>
</head>
<body>
<header>
    <div class="logo">GameZone</div>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Carrito</a>
    </nav>
</header>

<!-- FILTROS -->
<section class="filtros">
    <h2>Filtrar por</h2>
    <select>
        <option value="todos">Todos</option>
        <option value="accion">Acción</option>
        <option value="terror">Terror</option>
        <option value="deportes">Deportes</option>
        <option value="rpg">RPG</option>
    </select>
</section>

<!-- PRODUCTOS DISPONIBLES -->
<section class="productos">
    <h3>Catálogo de Juegos</h3>
    <div class="cards">
        <div class="card">
            <img src="https://media.vandal.net/i/1200x1200/2-2024/1/2024211750367_1.jpg" alt="Resident Evil 4">
            <div class="card-content">
                <h4>Resident Evil 4 Remake</h4>
                <p>Terror y Acción.</p>
                <span>210.000 COP</span>
                <a href="#">Agregar al Carrito</a>
            </div>
        </div>
        <div class="card">
            <img src="https://juegosdigitalescolombia.com/files/images/productos/1654982757-the-last-of-us-remastered-part-i-ps5-pre-orden-0.jpg" alt="The Last of Us">
            <div class="card-content">
                <h4>The Last Of Us</h4>
                <p>Supervivencia y Acción.</p>
                <span>180.000 COP</span>
                <a href="#">Agregar al Carrito</a>
            </div>
        </div>
        <div class="card">
            <img src="https://e0.365dm.com/25/07/1600x900/skysports-eafc-bellingham-musiala_6966794.jpg?20250717093803" alt="EA FC 26">
            <div class="card-content">
                <h4>EA FC 26</h4>
                <p>Deportes.</p>
                <span>350.000 COP</span>
                <a href="#">Agregar al Carrito</a>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTOS PRÓXIMAMENTE -->
<section class="proximos">
    <h3>Próximamente en GameZone</h3>
    <div class="cards">
        <div class="card">
            <span class="badge">Muy Pronto</span>
            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202306/1219/1c7b75d8ed9271516546560d219ad0b22ee0a263b4537bd8.png" alt="Spider-Man 2">
            <div class="card-content">
                <h4>Spider-Man 2</h4>
                <p>Aventura y Acción.</p>
                <span>--- COP</span>
                <a href="#">No disponible</a>
            </div>
        </div>
        <div class="card">
            <span class="badge">Muy Pronto</span>
            <img src="https://blog.es.playstation.com/uploads/sites/14/2023/02/1782b0a34f88557dd5ea5cdea90f1bb374a6391c.jpeg" alt="Final Fantasy XVI">
            <div class="card-content">
                <h4>Final Fantasy XVI</h4>
                <p>RPG y Fantasía.</p>
                <span>--- COP</span>
                <a href="#">No disponible</a>
            </div>
        </div>
    </div>
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
