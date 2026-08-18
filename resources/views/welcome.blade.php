<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>J&S Burger Bros</title>
<style>
:root{--dark:#6b2d1f;--steel:#c1440e;--light:#fdf1e3;--white:#fff;--gray:#8a7461;--orange:#e8871e;--radius:14px}
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
</style>
</head>
<body>
<div class="wrap">
    <h1>🍔 J&S<span style="color:var(--steel)">Burger Bros</span></h1>
    <p class="sub">Inicia sesión para continuar</p>
    <div class="form-group"><label>Correo</label><input type="email" placeholder="correo@ejemplo.com"></div>
    <div class="form-group"><label>Contraseña</label><input type="password" placeholder="••••••••"></div>
    <a href="{{ route('productos.index') }}" class="btn">Iniciar Sesión</a>
</div>
</body>
</html>