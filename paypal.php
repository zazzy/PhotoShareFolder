<html>
<head></head>
<body>


<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>

<div id = "paypal-button">
    <script>
        paypal.Button.render({

            env: 'production', // Optional: specify 'sandbox' environment

            client: {
                sandbox:    'xxxxxxxxx',
                production: 'xxxxxxxxx'
            },

            payment: function() {

                var env    = this.props.env;
                var client = this.props.client;

                return paypal.rest.payment.create(env, client, {
                    transactions: [
                        {
                            amount: { total: '1.00', currency: 'USD' }
                        }
                    ]
                });
            },

            commit: true, // Optional: show a 'Pay Now' button in the checkout flow

            onAuthorize: function(data, actions) {

                // Optional: display a confirmation page here

                return actions.payment.execute().then(function() {
                    // Show a success page to the buyer
                });
            }

        }, '#paypal-button');
    </script>
    </div>

</body>
</html>