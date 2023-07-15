<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <form action="insert.php" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                           <h3>Insert Product</h3> 
                    </div>
                    <div class="mb-3">
                      Name : 
                      <input type="text" class="form-control" name ="name">
                      
                    </div>
                    <div class="mb-3">
                      Price :
                      <input type="text" class="form-control" name="price">
                    </div> 
                    <div class="mb-3">
                      Image :
                      <input type="file" class="form-control" name="image">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary col-12" name="submit">Insert</button>
                   
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>