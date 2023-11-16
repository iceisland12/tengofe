<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php include './templates/nav.php' ?>

<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <h3>Nueva cuenta</h3><hr/>
            <form>
                <div class="form-group">
                    <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name">
  
                <div class="form-group">
                    <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                </div>
  
                <div class="form-group">
                    <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                </div>

  <button type="submit" class="btn btn-primary">Crear Cuenta</button>
</form>
        </div>
    </div>
</div>

</body>
</html>