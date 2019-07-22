<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Pricing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/paymentPage.css" />
    <link rel="prefetch" type="text/php" href="paymentProcess.php"
</head>

  <body>
  
      <div class="container-right">
      <button id="btn-login" disabled="true" onclick="login()">Log in</button>
      <button id="btn-logout" disabled="true" onclick="logout()">Log out</button>
    <div class="container"> 
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">$</span>17.65</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 1</h1>
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <form action="paymentProcess.php?pid=1" method="POST">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_W6vtswQDS4pn6Ik2Ckj3bgWV00rIABQGNP"
                                    data-amount="1765"
                                    data-name="test auth"
                                    data-description="Widget"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="usd">
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">$</span>67</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 1</h1>
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="paymentProcess.php?pid=2" method="POST">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_InwOqy624uXwfN2dgqlCR2gI"
                                    data-amount="6700"
                                    data-name="CodingPassiveIncome"
                                    data-description="Widget"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="eur">
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">$</span>97</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 1</h1>
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="paymentProcess.php?pid=3" method="POST">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_InwOqy624uXwfN2dgqlCR2gI"
                                    data-amount="9700"
                                    data-name="CodingPassiveIncome"
                                    data-description="Widget"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="eur">
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.auth0.com/js/auth0-spa-js/1.1.0/auth0-spa-js.production.js"></script>
    <script src="js/app.js"></script>
  </body>
  </html>