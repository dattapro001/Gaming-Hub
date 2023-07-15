<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .card {
      perspective: 1000px;
      cursor: pointer;
      height: 400px;
    }
    
    .card-inner {
      transition: transform 0.6s;
      transform-style: preserve-3d;
      height: 400px;
    }
    
    .card:hover .card-inner {
      transform: rotateY(180deg);
    }
    
    .card-front, .card-back {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: hidden;
    }
    
    .card-front {
      background-color: #f2f2f2;
      display: flex;
      align-items: center;
      justify-content: center;
      
    }
    
    .card-back {
      background-color: #eaeaea;
      transform: rotateY(180deg);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .card-back h3{
        margin-right:600px;
        margin-bottom:280px;
    }
    .h5{
        margin-right:0px;
        margin-bottom:100px;
    }

    img{
        width:300px;
        height: 100%;
    }
   
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-primary" href="manu.php" style="font-size:25px">Gaming Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 col-md-12 mb-4">
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <img src="img/mug.jpg" alt="Game 1" class="img-fluid">
            </div>
            <div class="card-back">
            <div>
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Payment History</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chinmoy Datta Priom</th>
      <td>dattapro001</td>
      <td>dattapro001@gmailcom</td>
      <td>No purchase</td>
    </tr>
  </tbody>
</table>

              <a href="logoutAction.php" class="btn btn-danger">LogOut</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>