<!DOCTYPE html>
<html>
<head>
 <title>Sisben</title>
 <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet">
 <style>
   
</style>
</head>
<body>
 <div class="header">
 <a href="#">INICIO</a>
 <a href="#">CONSULTAS</a>
 
 </div>
 <div class="main">
 <div class="login-form">
 <h2>INICIAR SESION</h2>
 <form id="loginForm">
 <label for="email">Email  </label>
 <input type="text" id="email" name="email" required>  
 <label for="password">Contraseña</label>
 <input type="password" id="password" name="password" required>
 <input type="checkbox" id="remember" name="remember">
 <label for="remember">Recuérdame</label>
 <button type="submit">Iniciar sesión</button>
 <a href="#">¿Olvidaste tu contraseña?</a>
 <a href="/registrar">Regístrate ahora &rarr;</a>
 </form>
 </div>
 </div>
 <script src="script.js"></script>
</body>
</html>