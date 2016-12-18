<html>
<head>
    <title>API</title>
</head>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript">
    $(function(){

        $.ajax({
            type: 'GET',
            url: 'http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers',
            success: function (data) {
                for(person in data){
                    var users = data[person];
                    console.log(users)

                }
                //  ????
            }
        })
    });
    //$.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers&jsoncallback=?");



</script>



</body>
</html>
