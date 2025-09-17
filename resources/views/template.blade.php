<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>CreedNet</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('CSS/head.css') }}">
</head>
<body class="bg-light text-dark">

  <!-- Header  -->
  <header class="sticky-top bg-dark text-white shadow">
    <div class="container d-flex justify-content-between align-items-center py-2">
      
      <!-- Navegación iziquierda, (Es posible que lo cambie) -->
      <nav>
        <div class="d-flex gap-2">
          <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm">Inicio</a>
          <a href="{{ url('/manual') }}" class="btn btn-outline-light btn-sm">Manual del juego</a>
        </div>
      </nav>

      <!-- Logo que va a la derecha -->
      <div>
        <img src="{{ asset('imagenes/logocreednet.png') }}" alt="Logo" width="50" height="50" class="rounded">
      </div>

    </div>
  </header>

  <!-- Main (contenido) -->
  <main class="container my-4 p-4 bg-white rounded shadow">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="m-0">© {{ date('Y') }} - Esto le pertenece a CreedNet</p>
  </footer>

  <!-- Coso del bootstrap funcione -->

</body>
</html>
