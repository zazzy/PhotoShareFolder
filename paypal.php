<html>
<head></head>
<body>





<form id="myContainer" method="post" action="/checkout"></form>

<script>
    window.paypalCheckoutReady = function () {
        paypal.checkout.setup('<Your-Merchant-ID>', {
            environment: 'sandbox',
            container: 'myContainer'
        });
    };
</script>

<script src="http://www.paypalobjects.com/api/checkout.js" async></script>
</body>
</html>