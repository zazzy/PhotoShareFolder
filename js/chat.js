/*var time =0;
var UserName = "Undefined";
$(document).ready(function() {
    var UserName = name;
    $('#chatSend').click(function(){
        sendChatText();
        $('#chatInput').val("");
    });
    startChat();
});

function startChat(){
    setInterval(function() { getChatText();},2000);
}
jQuery(document).ready(function ($) {
    var value = '@Request.RequestContext.HttpContext.Session["someKey"]';
});

function getChatText(){
    $.ajax({
        type: "GET",
        url: "/refresh.php?time=" + time
    }).done(function(data)
    {
        var jsonData = JSON.parse(data);
        var jsonLength = jsonData.result.length;
        var html = "";
        for (var i = 0; i < jsonLength; i++) {
            var result = jsonData.result[i];
            html += '<div style="color:' + result.color + "'>('result.chattime + ')<b>'+ UserName + '</b>:'+result.chattext+'</div>';
            time = result.id;
        }
        $('#chatWindow').append(html);

    });
}

function sendChatText(){
    var msgs = $('#chatMessage').val();
    if(msgs != ""){
        $.ajax({
            type:"GET",
            url: "/submit.php?chattext="+encodeURIComponent(msgs)
        });
    }
}*/