
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript">
    $.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers");
    $(function(){
        $.getJSON("http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers");
        $.ajax({
            type: 'GET',
            url: 'http://photoshare1418132.azurewebsites.net/api.php?method=getAllUsers',
            success: function (data) {
                for(users in data){
                    var allUsers = data[users];
                    console.log(allUsers)
                }
                //  console.dir('success', data);
            }
        })
    });




</script>
