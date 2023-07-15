<!DOCTYPE html>
<html>
<head>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
   <form id="image-form" enctype="multipart/form-data">
      <input type="file" id="image-input" name="image" accept="image/*">
      <button type="submit">Upload</button>
   </form>
   <img id="image-preview" src="#" alt="Preview">

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

  
</body>
</html>