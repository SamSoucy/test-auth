const express = require("express");
const { join } = require("path");
const app = express();

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
const stripe = require('stripe')('sk_test_hVFPjzKb3yhtlVJgIYazNBlw00JQ3F9Qaw');

(async () => {
  const session = await stripe.checkout.sessions.create({
    payment_method_types: ['card'],
    subscription_data: {
      items: [{
        plan: 'plan_FSXb5AqUDA37Bu',
      }],
    },
    success_url: 'https://elated-hawking-39e9a0.netlify.com/about',
    cancel_url: 'https://example.com/cancel',
  });
})();

var stripe = Stripe('pk_test_W6vtswQDS4pn6Ik2Ckj3bgWV00rIABQGNP');

stripe.redirectToCheckout({
  // Make the id field from the Checkout Session creation API response
  // available to this file, so you can provide it as parameter here
  // instead of the {{CHECKOUT_SESSION_ID}} placeholder.
  sessionId: '{{CHECKOUT_SESSION_ID}}'
}).then(function (result) {
  // If `redirectToCheckout` fails due to a browser or network
  // error, display the localized error message to your customer
  // using `result.error.message`.
});
// Serve static assets from the /public folder
app.use(express.static(join(__dirname, "public")));

// Endpoint to serve the configuration file
app.get("/auth_config.json", (req, res) => {
  res.sendFile(join(__dirname, "auth_config.json"));
});

// Serve the index page for all other requests
app.get("/*", (_, res) => {
  res.sendFile(join(__dirname, "index.html"));
});

// Listen on port 3000
app.listen(3000, () => console.log("Application running on port 3000"));