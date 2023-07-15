<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<head>
<body>
  <div class="container">
    <h1>Payment Page</h1>
    <form action="paymentAction.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="p_name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="deliveryTime">Delivery Time:</label>
        <select class="form-control" name="p_type" id="deliveryTime">
          <option value="cashOnDelivery" >Cash on Delivery</option>
          <option value="cardDelivery" >Card Delivery</option>
        </select>
      </div>
      <div class="form-group" id="cardNumberField" style="display: none;">
        <label for="cardNumber">Card Number:</label>
        <input type="text" class="form-control" id="cardNumber" name="p_card" placeholder="Enter your card number">
      </div>
      <div class="form-group">
        <label for="amount" >Amount:</label>
        <input type="text" class="form-control" name="p_amount" id="amount" placeholder="Enter the amount">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Show or hide card number field based on delivery time selection
    document.getElementById("deliveryTime").addEventListener("change", function() {
      var cardNumberField = document.getElementById("cardNumberField");
      if (this.value === "cardDelivery") {
        cardNumberField.style.display = "block";
      } else {
        cardNumberField.style.display = "none";
      }
    });
  </script>
</body>
</html>
