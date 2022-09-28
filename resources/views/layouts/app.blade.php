<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield ('title') - Prueba Desarrollo</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <a href="{{ route('home') }}">
          <p class="text-2xl font-bold">Prueba Desarrollo Web</p>
        </a>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())

          <li >
            <p class="text-xl">Bienvenido Usuario 
              <strong>{{ auth()->user()->name }}</strong>
            </p>
          </li>

          <li class="mx-6">
            <a href="{{ route('consulta.index') }}" class="font-semibold 
            hover:bg-indigo-700 py-3 px-4 rounded-md">Usuarios</a>
          </li>

          <li>
            <a href="{{ route('login.destroy') }}" class="font-bold
          py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Salir</a>
          </li>
        @else

          <li class="mx-6">
            <a href="{{ route('login.index') }}" class="font-semibold 
            hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesión</a>
          </li>
          <li>
            <a href="{{ route('register.index') }}" class="font-semibold
            border-2 border-white py-2 px-4 rounded-md hover:bg-white 
            hover:text-indigo-700">Registro</a>
          </li>

        @endif
      </ul>

    </nav>
    @yield('content')

    <div id="footer" style="position:fixed; left:0px; bottom:0px;height:50px;width:100%;background:#999;">
      Sistema de administración de Usuarios
      <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://www.facebook.com/Mario.Alonso.Blazter" target="_blank">MARIO ALONSO</a>.</strong>
    </div>
  
</footer>
  </body>
</html>