<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- product display -->
    <div class="container-fluid">
    <table class="table table-dark mt-4">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
    include 'config.php';
    $db_data = "SELECT * FROM `product`";
    $allData = mysqli_query($conn,$db_data);

    if($allData){
        while($row=mysqli_fetch_assoc($allData)){
            $id=$row['id'];
            $name=$row['name'];
            $price=$row['price'];
            $image=$row['image'];

            echo' <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$price.'</td>
          <td><img src="'.$image.'" alt="" width="100px"></td>
          <td>
          <a  class="btn btn-warning" href = "update.php?
          id='.$id.'">Update</a></td>
          <td>
          <a  class="btn btn-danger" href = "delate.php? 
          id='.$id.'" >Delate</a>
          
      </td>
          </tr>';
        }
    }
   ?>
  </tbody>
</table>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>