<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Consultar Usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 mt-5">
        <h1><i class="fa fa-search"></i>Consultar Usuario</h1>
        <hr>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">
                <i class="fa fa-users"></i>
                Lista de usuarios 
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Consultar Usuario
            </li>
          </ul>
        </nav>
        <table class="table table-striped">
          <?php  
          while ($row = mysqli_fetch_array($data)) {
        ?>
        
        <tr>
          <td colspan="2" class="text-center">
            <img src="<?php echo $row['photo'] ?>" class="img-thumbnail" width="220px">
          </td>
        </tr>
        <tr>
          <th>Nombre Completo</th>
          <td><?php echo $row['names'] ?></td>
        </tr>
        <tr>
          <th>Fecha de Nacimiento</th>
          <td><?php echo $row['birthdate'] ?></td>
        </tr>
        <tr>
          <th>Correo Electronico</th>
          <td><?php echo $row['email'] ?></td>
        </tr>
        <tr>
          <th>Rol</th>
          <td><?php echo $row['role'] ?></td>
        </tr>
        <tr>
          <th>Estado</th>
          <td><?php echo $row['status'] ?></td>
        </tr>
        <?php
          }
        ?>
        </table>
        
      </div>
    </div> 
  </div>
  
  
</body>
</html>