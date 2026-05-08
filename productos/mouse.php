<?php // mouse.php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mouse | CompuElectric</title>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../2productos/productoss.css">
</head>
<body>

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="container">
      <div class="topbar-left">
        <span><i class="fa-solid fa-location-dot"></i>Lima, Perú</span>
        <span><i class="fa-regular fa-clock"></i>Lun – Sáb: 9am – 7pm</span>
      </div>
      <div class="topbar-right">
        <a href="tel:+51997679527"><i class="fa-solid fa-phone"></i>997 679 527</a>
        <a href="mailto:compuelectric.777@gmail.com"><i class="fa-solid fa-envelope"></i>compuelectric.777@gmail.com</a>
      </div>
    </div>
  </div>
  <!-- NAVBAR -->
  <nav>
    <div class="container nav-inner">
      <a href="../index.php"><img src="../img/logo.png" alt="CompuElectric" class="logo"></a>
      <div class="nav-links">
        <a href="../index.php">Inicio</a>
        <a href="../reparaciones.php">Reparaciones</a>
        <a href="../instalaciones.php">Instalaciones</a>
        <a href="../productos.php" class="active">Productos</a>
        <a href="../nosotros.php">Nosotros</a>
        <a href="../contactos.php">Contacto</a>
      </div>
      <button class="hamburger" id="hamburger" aria-label="Menú">
        <span></span><span></span><span></span>
      </button>
    </div>
    <div class="mobile-menu" id="mobileMenu">
      <a href="../index.php">Inicio</a>
      <a href="../reparaciones.php">Reparaciones</a>
      <a href="../instalaciones.php">Instalaciones</a>
      <a href="../productos.php">Productos</a>
      <a href="../nosotros.php">Nosotros</a>
      <a href="../contactos.php">Contacto</a>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero-int">
    <div class="hero-int-bg"></div>
    <div class="hero-int-overlay"></div>
    <div class="container">
      <div class="breadcrumb">
        <a href="../index.php">Inicio</a>
        <i class="fa-solid fa-chevron-right"></i>
        <a href="../productos.php">Productos</a>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Mouse</span>
      </div>
      <h1>🖱️ <span>Mouse</span></h1>
    </div>
  </section>

  <main>
    <h2>Productos: <span>Mouse</span></h2>
    <div class="productos-grid">
      <div class="producto reveal">
        <img src="../img/mouse.PNG" alt="Mouse Gamer Logitech">
        <h3>Mouse Gamer Logitech</h3>
        <p>RGB · USB · DPI ajustable</p>
        <h5>S/.35</h5>
        <div class="botones"><button class="btn-compra">Comprar</button><button class="btn-compra">🛒</button></div>
      </div>
      <div class="producto reveal" style="transition-delay:.08s">
        <img src="../img/mousegamer.PNG" alt="Mouse Gamer">
        <h3>Mouse Gamer</h3>
        <p>USB · 7 LEDs · 6 botones</p>
        <h5>S/.20</h5>
        <div class="botones"><button class="btn-compra">Comprar</button><button class="btn-compra">🛒</button></div>
      </div>
      <div class="producto reveal" style="transition-delay:.16s">
        <img src="../img/MouseWifi.PNG" alt="Mouse Wifi">
        <h3>Mouse Gamer Wifi</h3>
        <p>Inalámbrico · Recargable</p>
        <h5>S/.55</h5>
        <div class="botones"><button class="btn-compra">Comprar</button><button class="btn-compra">🛒</button></div>
      </div>
      <div class="producto reveal" style="transition-delay:.24s">
        <img src="../img/Mousegod.PNG" alt="Mouse RGB">
        <h3>Mouse Gamer RGB</h3>
        <p>USB · RGB · 7200 DPI</p>
        <h5>S/.55</h5>
        <div class="botones"><button class="btn-compra">Comprar</button><button class="btn-compra">🛒</button></div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <img src="../img/logo.png" alt="CompuElectric" class="footer-logo">
          <p>Empresa peruana especializada en reparación de equipos tecnológicos y venta de componentes electrónicos desde 2016.</p>
          <div class="footer-social">
            <a href="https://www.facebook.com/profile.php?id=61575279149696" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/compu_electric_/" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/51997679527" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
        <div>
          <h4>Navegación</h4>
          <ul>
            <li><a href="../nosotros.php">Nosotros</a></li>
            <li><a href="../reparaciones.php">Reparaciones</a></li>
            <li><a href="../instalaciones.php">Instalaciones</a></li>
            <li><a href="../productos.php">Productos</a></li>
            <li><a href="../contactos.php">Contacto</a></li>
          </ul>
        </div>
        <div>
          <h4>Servicios</h4>
          <ul>
            <li><span>Reparación de Laptops</span></li>
            <li><span>Reparación de PCs</span></li>
            <li><span>Reparación de Impresoras</span></li>
            <li><span>Instalaciones de Red</span></li>
            <li><span>Servicio a Domicilio</span></li>
          </ul>
        </div>
        <div>
          <h4>Contacto</h4>
          <ul>
            <li><a href="tel:+51997679527"><i class="fa-solid fa-phone fa-xs" style="margin-right:6px;color:#7fb9ff"></i>997 679 527</a></li>
            <li><a href="tel:+51944598747"><i class="fa-solid fa-phone fa-xs" style="margin-right:6px;color:#7fb9ff"></i>944 598 747</a></li>
            <li><a href="tel:+5116778585"><i class="fa-solid fa-phone fa-xs" style="margin-right:6px;color:#7fb9ff"></i>(01) 6778585</a></li>
            <li><a href="mailto:compuelectric.777@gmail.com"><i class="fa-solid fa-envelope fa-xs" style="margin-right:6px;color:#7fb9ff"></i>compuelectric.777@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 CompuElectric. Todos los derechos reservados.</p>
        <p>Lima, Perú</p>
      </div>
    </div>
  </footer>
  <a href="https://wa.me/51997679527" class="wa-fab" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
  <script>
    document.getElementById('hamburger').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('open');
    });
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }});
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(r => observer.observe(r));
  </script>

</body>
</html>