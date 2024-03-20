<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>GDSC</h1>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link disabled" aria-disabled="true">Home</a>
          <a class="nav-link disabled" aria-disabled="true">Booking</a>
        </div>
      </div>
    </div>
  </nav>
  <h3 class="container mt-5" >Form Pendaftaran Study Jam Frontend Web Development</h3>
    <fieldset class="container mt-5 p-3">
        <form action="submit.php" method="post">
        <div class="form-group row">
          <label for="noTelepon" class="col-4 col-form-label">No. Telepon</label> 
          <div class="col-6">
            <input id="noTelepon" name="noTelepon" type="number" class="form-control" placeholder="00000000" required>
          </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-6">
              <input id="nama" name="nama" type="text" class="form-control"  placeholder="Nama Lengkap" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
            <div class="col-6">
              <input id="kelamin" name="kelamin" type="text" class="form-control" placeholder="Jenis Kelamin" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Tempat Tinggal</label> 
            <div class="col-6">
              <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Tempat Tinggal" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-6">
              <input id="email" name="email" type="text" class="form-control" placeholder="nama@gmail.com" required>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>
        </form>
    </fieldset>
</body>
</html>


