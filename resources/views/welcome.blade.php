<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: linear-gradient(135deg, #1f1c2c, #928dab);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .hero {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        padding: 3rem 1rem;
    }

    /* Imagen estilo banner */
    .hero img {
        width: 100%;
        max-width: 900px;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        margin-bottom: 2rem;
        transition: transform 0.3s ease-in-out;
    }

    .hero img:hover {
        transform: scale(1.03);
    }

    .hero h1 {
        font-weight: 700;
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    footer {
        background-color: rgba(0, 0, 0, 0.5);
        color: #ccc;
        text-align: center;
        padding: 1rem;
    }

    /* Botones más anchos */
    .btn-wide {
        min-width: 130px;   /* puedes subir a 150px si quieres más ancho */
    }
</style>


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{route('panel')}}">📦 Inventario Web</a>
        <div class="d-flex ms-auto">
            <a href="{{route('login.index')}}" class="btn btn-primary btn-wide">Iniciar sesión</a>
        </div>
    </div>
</nav>


    <!-- Hero Section -->
    <section class="hero container">
        <div>
            <!-- Imagen recomendada -->
                            <img src="{{asset('assets/img/img_inicio.png')}}" class="d-block w-100" alt="banner de invitacion">
            
            <h1>Gestión de Inventarios Eficiente</h1>
            <p>
                La administración de inventario posee una importancia para cualquier tipo de empresa con el fin de garantizar el correcto uso de su capital. 
                Es gracias al buen manejo de los inventarios de una empresa que se pueda mantener un flujo constante de mercancías entre producción,
                proveedores y clientes lo que garantiza la eficiencia de todos los sistemas de la empresa.
                la gestión empresarial actual está necesitada de una adecuada gestión de inventarios, donde debe primar el criterio de mantener las cantidades 
                mínimas necesarias que garanticen la continuidad de todo el flujo en la cadena logística y que permitan absorber el impacto de la variabilidad e 
                incertidumbre asociadas a la operación.
                El uso de herramientas tecnológicas de libre acceso permite aumentar la eficacia de los procesos garantizando el buen manejo del inventario de la 
                empresa.
            </p>
            <p>
                Muchas de la pequeñas y medianas empresas no tienen los medios para administrar de manera eficiente su inventario causando que, al no tener 
                este tipo de tecnologías dificultan la atención al cliente y la toma de decisiones y pueden llegar a ocurrir ciertas problemáticas como 
                pueden ser la falta de stock o tener abundancia de algún producto, lo que puede generar pérdidas a gran escala para este tipo de empresas.
            </p>
            <a href="{{route('login.index')}}" class="btn btn-lg btn-success">Acceder al sistema</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Sistema de Gestion de Inventario &copy; UTS 2025 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>