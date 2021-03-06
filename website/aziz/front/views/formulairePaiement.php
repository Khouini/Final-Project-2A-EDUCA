<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="../controller/assets/style.css">
<body>
    <?php require_once '../controller/process3.php'; ?> 
        <?php
            $mysqli = new mysqli('localhost','root','','aziz') or die(mysqli_error($mysqli));
            $commande = $mysqli->query("SELECT * FROM commande") or die($mysqli->error);
            $total=0;
        ?>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <form action="../controller/process3.php" method="post">
          <div class="products">
            <h3 class="title">Checkout</h3>
            <?php while ($rowc = $commande->fetch_assoc()): ?>
                <div class="item">
                    <span class="price"><?php echo $rowc['price']; ?></span>
                    <p class="item-name"><?php echo $rowc['itemName']; ?></p>
                    <?php $total = $total + $rowc['price']; ?>
                </div>
            <?php endwhile; ?>

            <div class="total">Total<span class="price"><?php echo $total; ?></span></div>
          </div>
          <div class="card-details">
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
                    <div class="form-group col-sm-7">
                      <label for="card-holder">Card Holder</label>
                      <input name="nameHolder" id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-5">
                      <label for="">Expiration Date</label>
                      <div class="input-group expiration-date">
                        <input name="MM" type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                        <span class="date-separator">/</span>
                        <input name="YY" type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="form-group col-sm-8">
                      <label for="card-number">Card Number</label>
                      <input name="cardNumber" id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="cvc">CVC</label>
                      <input name="cvc" id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-sm-12">
                      <button name="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
