<div id = "home_container">

<div id = "content_container">
<h3><?php if(isset($_SESSION['username'])){
    echo 'Welcome '.ucfirst(strtolower($_SESSION['username']));
}else {
    echo "Username";
}
        ?></h3>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis suscipit lectus. Suspendisse eu metus lacus. Duis ac semper justo, nec vehicula metus. Cras congue odio vitae risus congue feugiat. Mauris ornare nunc massa, nec pharetra enim rhoncus volutpat. Aliquam euismod nibh eget sem consectetur vestibulum. Aliquam egestas arcu vel ex consequat ornare. Vivamus sed felis tincidunt, finibus magna et, lacinia ex. Ut tristique cursus mattis. Integer et convallis ipsum. Cras sed semper orci. Sed ac metus ac erat ornare eleifend. Etiam dictum erat et nunc semper, vitae suscipit massa congue. Quisque quis est vel risus convallis fringilla eget a ipsum. Donec finibus imperdiet consequat. Quisque suscipit vestibulum ligula, in fringilla risus porttitor non.

Donec feugiat sed dui gravida luctus. Mauris iaculis accumsan quam non posuere. Fusce at quam eget elit sollicitudin fermentum nec id massa. Praesent a mollis nunc, ut scelerisque felis. Integer nec augue porttitor, euismod ipsum eget, mattis massa. Etiam pharetra vulputate sodales. Morbi metus tortor, lacinia a tortor a, auctor suscipit odio. Duis tempus neque sed mi semper, a volutpat urna suscipit. Aenean laoreet sapien quis fringilla gravida. Pellentesque vitae ultricies leo, auctor finibus odio.
</div>
    <div id = "chat_container">
        <?
        if(isset($_SESSION['id'])){
            include("chat.php");

        }
        ?>
    </div>

</div>
