<?php   
    if($_POST['executer'] == 'ON')
    {
        system("/home/pi/minecraft/server");
        header('Location: run.php');
    }
    else
    {
        system("/home/pi/minecraft/stop");
        header('Location: shutdown.php');
    }
?>
