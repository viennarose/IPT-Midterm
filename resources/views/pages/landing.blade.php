<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IPT Midterm Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url('/users')?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url('/accounts')?>">Accounts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
        <div class="col-md-3 offset-md-4">
                <div class="card  bg-primary mt-3">
                    <div class="card-header text-center text-white">
                        <h4>Main Menu</h4>
                    </div>
                    <div class="d-grid card-body">
                        <a href="{{url('/')}}" class="btn btn-light btn-inline mt-2">Home</a>
                        <a href="{{url('/users')}}" class="btn btn-light btn-inline mt-2">Users</a>
                        <a href="{{url('/accounts')}}" class="btn btn-light btn-inline mt-2">Accounts</a>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>