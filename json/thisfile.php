<?
    $file = 'messages.json';
    touch($file);       //create file if not exist
    $messages = json_decode(file_get_contents($file),true);
    if(empty($messages)){
        $messages = array();
    }

    if(isset($_POST['username'])&&isset($_POST['mssg'])) {  //save settings
        $messages[] = $_POST; //remember to sanitize
        file_put_contents($file,json_encode($messages));
        exit;
    }elseif(isset($_POST['read'])&&$_POST['read']=='messages'){
        echo json_encode($messages);
        exit;
    }

?>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
<body>
    <form id="my_form" method="post" action="">
        <label>Enter your name</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label>Enter mssg here</label>
        <br>
        <textarea name="mssg" id="mssg" cols="40" rows="4"></textarea>
        <br>
        <button name="submit" id="submit" value="submit" />submit</button>
    </form>

    <div id="put_here">
        <table border="1" id="put_here_table">
        <!--messages will be added here-->
        </table>
    </div>

    <script>
        $("#my_form").submit(function(e){  //handle the form submission
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                url: "./thisfile.php",
                method: "POST",
                data: data,
                success: function(response){
                    $("#put_here_table").append('<tr><td>'+$("#username").val()+'</td><td>'+$("#mssg").val()+'</td></tr>');
                    $("#mssg").val("");//clear the text box
                }
            });
        });
        $.ajax({  //load the messages
            dataType: "json",
            url: "./thisfile.php",
            method: "POST",
            data: {"read":"messages"},
            success: function(messages){
                if(messages.length){
                    $("#put_here_table").append('<tr><th>Name</th><th>Message</th></tr>');
                    $.each(messages,function(i,msg){
                        $("#put_here_table").append('<tr><td>'+msg['username']+'</td><td>'+msg['mssg']+'</td></tr>');
                    });
                }
            }
        });
    </script>
</body>
</html>