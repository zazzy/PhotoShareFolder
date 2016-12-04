<html>
<head>
    <title>Chat Room</title>
    <script></script>
    <link rel="stylesheet" href="./css/stylesheet.css"/>
    <link rel="stylesheet" href="./css/chatss.css"/>
</head>
<body>
<script type='text/javascript'>
    var name = "<?php echo $_SESSION['username'] ?>";
</script>
<div id ="chatBox"></div>

<?php
/*
if(file_exists("log.html") && filesize("log.html")>0){
    $handle = fopen("log.html","r");
    $contents = fread($handle,filezise("log.html"));
    fclose($handle);

    echo $contents;
}
*/

?>


<form name = "message" action ="">
    <input name= "msg" type="text" id="msg"/>
    <input name ="submitmsg" type="submit" id="submitmsg" value="Send"/>
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type ="text/javascript">
    /*
    setInterval(loadLog,2000);

$("#submitmsg").click(function(){
    var userMsg = $('#msg').val();
    $.post("post.php",{text:userMsg});
    $("#msg").attr("value","");
    $.ajax({
        type:'POST',
        url:'index.php',
        data: 'page=profile'
    })
    return false;

});
function loadLog(){
    $var oldHeight = $('#chatBox').attr("scrollHeight")-20;
$.ajax({
    url:"log.html",
    cache:false,
    success:function(html){
        $("#chatBox").html(html);
        var newHeight = $('chatBox').attr("scrollHeight")-20;
        if(newHeight>oldHeight){
            $('#chatBox').animation({scrollTop: newHeight},'normal');
        }
    }
});
}
*/


</script>
</body>
</html>