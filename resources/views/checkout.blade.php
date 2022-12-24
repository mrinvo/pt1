<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="row">

    <div class="col-50">
  <p style="font-weight: bold; font-size:20px;">Test Checkout Page</p>
    </div>
    <div  class="col-50">
        <img style="float: right" width="120" height="50" src="{{ asset('MicrosoftTeams-image (5).png') }}" alt="">
    </div>

</div>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{ route('initiate_payment') }}" method="POST">
        @csrf
        <input type="hidden" name="cart_id" value="1" id="">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John M. Doe">

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">

            <label for="phone"><i class="fa fa-user"></i> Phone</label>
            <input type="text" id="phone" name="phone" placeholder="">

            <label for="street1"><i class="fa fa-address-card-o"></i> Street</label>
            <input type="text" id="street1" name="street1" placeholder="542 W. 15th Street">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

                <label for="state"><i class="fa fa-institution"></i> state</label>
                <input type="text" id="state" name="state" placeholder="New York">
                <label for="country"><i class="fa fa-institution"></i> country</label>
                <input type="text" id="country" name="country" placeholder="New York">
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
                <input type="hidden" value="127.0.0.12" name="ip">
              </div>
          </div>
          <input type="hidden" value="30" name="cart_amount">
          <input type="hidden" value="cart description" name="cart_description">

        </div>
        <label>
          <input type="checkbox" checked="checked" name="same_as_billing"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>

