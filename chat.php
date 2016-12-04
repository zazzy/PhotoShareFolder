<?
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<html>
<head>
    <title>Chat Room</title>
   <link rel="stylesheet" href="/css/chatss.css" type="text/css"/>
</head>
<body>
<script type='text/javascript'>
    var name = "<?php echo $_SESSION['username'] ?>";
</script>
<div id ="chatBox">

<?php

if(file_exists("log.html") && filesize("log.html")>0){
    $handle = fopen("log.html","r");
    $contents = fread($handle,filesize("log.html"));
    fclose($handle);

    echo $contents;
}else{
    echo "error";
}


?>

    </div>
<form name = "message" action ="">
    <input type ="hidden" name="page" value="profile"/>
    <input name= "msg" type="text" id="msg"/>
    <input name ="submitmsg" type="submit" id="submitmsg" value="Send"/>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type ="text/javascript">

    setInterval(loadLog,2000);
$("#submitmsg").click(function(){
    var userMsg = $('#msg').val();
    $.post("post.php",{text:userMsg});
    $("#msg").val("");
    $.ajax({
        type:'POST',
        url:'index.php',
        data: 'page=profile'


    })
    return false;

});

function loadLog(){
    var chatDiv =$('#chatBox');
    var oldHeight = chatDiv.attr("scrollHeight")-20;

$.ajax({
    url:"log.html",
    cache:false,
    success: function(html){
        chatDiv.html(html);
        var newHeight = $('chatBox').attr("scrollHeight")-20;
        if(newHeight>oldHeight){
            chatDiv.animation({scrollTop: newHeight},'normal');
            chatDiv.scrollTop(chatDiv.prop("scrollHeight"));
       }
    }
});
    chatDiv.scrollTop(chatDiv.prop("scrollHeight"));
}


</script>
</body>
</html>