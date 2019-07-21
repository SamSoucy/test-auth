<?php
    require_once('stripe-php-6.40.0/init.php');

    $stripe = [
    "secret_key"      => "sk_test_hVFPjzKb3yhtlVJgIYazNBlw00JQ3F9Qaw",
    "publishable_key" => "pk_test_W6vtswQDS4pn6Ik2Ckj3bgWV00rIABQGNP",
    ];

    \Stripe\Stripe::setApiKey($stripe['secret_key']);

    $pid = $_GET["pid"];
    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create([
        'email' => $email,
        'source'  => $token,
    ]);

    \Stripe\Subscription::create([
        "customer" => $customer->id,
        "items" => [
          [
            "plan" => "plan_FSXb5AqUDA37Bu",
          ],
        ]
      ]);
?>