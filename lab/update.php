<?php
include 'config.php';
$id=$_GET['id'];

$FetchQuery = "SELECT `id`, `name`, `price`, `image` FROM `product` WHERE id='$id'"; 
$allData = mysqli_query($conn,$FetchQuery);

$arrayData = mysqli_fetch_array($allData);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        form{
            background-color: #fff;
            padding : 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" id="image-from" enctype='multipart/form-data'>
                    <div class="mb-3">
                           <h3>Update Product</h3> 
                    </div>
                    <div class="mb-3">
                      Product Name: 
                      <input type="text" class="form-control" name ="name" value="<?php echo $arrayData['name']?>">
                      
                    </div>
                    <div class="mb-3">
                      Price :
                      <input type="text" class="form-control" name="price" value="<?php echo $arrayData['price']?>">
                    </div> 
                    <div class="mb-3">
                      Image :
                      <input type="file" class="form-control" id="image-input" accept="image/*" name="image" value="<?php echo $arrayData['image']?>"  >
                    </div>
                    <div class="mb-3">
                      Previous Image :
                    <img  src="<?php echo $arrayData['image']?>" width="150px" alt="">
                    </div>

                    <div class="mb-3">
                     Selected Image:   
                    <img id="image-preview" src="" alt="Preview" width="150px">
                    </div>
                   <input name="id" type="hidden" value="<?php echo $arrayData['id']?>">
                    <button type="submit" class="btn btn-primary col-12" name="submit">Update</button>

                    
                    <script>
                $(document).ready(function() {
                $('#image-input').change(function() {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                   $('#image-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
         });
      });
   </script>
                   
                </form>
            </div>
        </div>
    </div>

   

    
</body>
</html>