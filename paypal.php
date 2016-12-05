<html>
<head></head>
<body>





<form id="myContainer" method="post" action="/checkout"></form>

<script>
    window.paypalCheckoutReady = function () {
        paypal.checkout.setup('AFcWxV21C7fd0v3bYYYRCpSSRl31A3GSQcpQJJ1ID3ySRrjOE2-kryGj', {
            environment: 'sandbox',
            container: 'myContainer'
        });
    };
</script>

<script src="http://www.paypalobjects.com/api/checkout.js" async></script>
</body>
</html>