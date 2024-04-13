<!DOCTYPE html>
<html>
<head>
 <title>Registro</title>
<link href="{{ asset('css/styleRegistro.css') }}" rel="stylesheet">
 <style>
</style>
</head>
<body>
 <div class="header">
 <a href="/login">INICIO</a>
 <a href="#">CONSULTAS</a>

 </div>
 <div class="main">
 <div class="register-form"> 
 <h2>REGISTRARSE</h2>
 <form id="{{ route('registro')}}" method="POST">
 @csrf
 
 <label for="pname">Primer Nombre  </label>
 <input type="text" id="name" name="pname" required> 
 @error('pname')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="sname">Segundo Nombre  </label>
 <input type="text" id="name" name="sname" required> 
 @error('sname')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="papellido">Primer Apellido </label>
 <input type="text" id="name" name="papellido" required> 
 @error('papellido')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="sapellido">Segundo Apellido </label>
 <input type="text" id="name" name="sapellido" required> 
 @error('sapellido')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="cedula">Cedula</label>
 <input type="text" id="name" name="cedula" required> 
 @error('cedula')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="email">Email  </label>
 <input type="text" id="email" name="email" required> 
 @error('email')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror  

 <label for="celular">Celular  </label>
 <input type="text" id="name" name="celular" required> 
 @error('celular')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="estrato">Estrato  </label>
 <input type="text" id="name" name="estrato" required> 
 @error('estrato')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="ingresos">Ingresos Mensuales  </label>
 <input type="text" id="name" name="ingresos" required> 
 @error('ingresos')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="direccion">Direccion  </label>
 <input type="text" id="name" name="direccion" required> 
 @error('direccion')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <label for="ciudad">Ciudad</label>
 <input type="text" id="name" name="ciudad" required>
 @error('ciudad')
 <div class="alert alert-danger">{{$message}}</div>
 @enderror 

 <button type="submit">Registrarse</button>
 </form>
 @if(session()->has('correcto'))
<div class="alert alert-success"> {{ session()->get('correcto') }}</div>
 @endif
 @if(session()->has('error'))
<div class="alert alert-success"> {{ session()->get('error') }}</div>
 @endif

 
 </div>
 </div>
 <script src="script.js"></script>
</body>
</html>
