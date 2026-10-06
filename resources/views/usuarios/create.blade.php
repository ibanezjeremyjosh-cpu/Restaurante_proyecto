<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear usuario</title>
<style>
:root{--dark:#6b2d1f;--steel:#c1440e;--light:#fdf1e3;--gray:#8a7461;--orange:#e8871e;--radius:14px}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:sans-serif;background:var(--light);color:#2b1810}
.wrap{max-width:420px;margin:60px auto;background:#fff;border-radius:var(--radius);padding:36px;box-shadow:0 4px 20px rgba(0,0,0,.1)}
h1{font-size:1.5rem;color:var(--dark);margin-bottom:6px}
p.sub{color:var(--gray);margin-bottom:20px}
.form-group{margin-bottom:14px}
.form-group label{display:block;font-weight:700;font-size:.85rem;margin-bottom:4px}
.form-group input{width:100%;padding:10px 14px;border:2px solid var(--light);border-radius:8px}
.btn{width:100%;background:var(--dark);color:#fff;border:none;border-radius:8px;padding:12px;font-weight:800;cursor:pointer;margin-top:6px;text-decoration:none;display:block;text-align:center}
.btn:hover{background:var(--steel)}
.error{color:#b00020;font-size:.85rem;margin-bottom:10px}
</style>
</head>
<body>
<div class="wrap">
    <h1>🍔 Crear usuario</h1>
    <p class="sub">Llená los datos para registrarte</p>

    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach

    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="form-group"><label>Nombre</label><input type="text" name="name" value="{{ old('name') }}" required></div>
        <div class="form-group"><label>Correo</label><input type="email" name="email" value="{{ old('email') }}" required></div>
        <div class="form-group"><label>Contraseña</label><input type="password" name="password" required></div>
        <div class="form-group"><label>Confirmar contraseña</label><input type="password" name="password_confirmation" required></div>
        <button type="submit" class="btn">Crear usuario</button>
    </form>
    <a href="/" class="btn" style="background:var(--gray)">Volver</a>
</div>
</body>
</html>