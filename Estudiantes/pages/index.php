<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style=" background-image: linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)">
    
<center>
<div class="container">
  <h2>REGISTRO ESTUDIANTES</h2>
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname"></label>
      <input type="text" class="form-control" id="uname" name="Nombre" placeholder="Nombre de aprendiz" name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <label for="uname"></label>
        <input type="text" class="form-control" id="uname" name="Apellido" placeholder="Apellido de aprendiz" name="uname" required style="width: 300px;">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
    </div>


    <div class="form-group">
        <label for="uname"></label>
        <input type="text" class="form-control" id="uname"  name="Documento" placeholder="Documento del estudiante" name="uname" required style="width: 300px;">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <label for="uname"></label>
        <input type="text" class="form-control" id="uname"  name="Correo" placeholder="Correo del estudiante" name="uname" required style="width: 300px;">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <label for="uname"></label>
        <input type="text" class="form-control" id="uname"  name="Matera" placeholder="Materia del estudiante" name="uname" required style="width: 300px;">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <label for="uname"></label>
        <input type="text" class="form-control" id="uname"  name="Docente" placeholder="Docente" name="uname" required style="width: 300px;">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> ¿Todo es correcto?
        <div class="valid-feedback">Confirmado.</div>
        <div class="invalid-feedback"></div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>
</center>

</body>
</html>
