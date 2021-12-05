<?php   
    if($_POST['executer'] == 'ON')
    {
        system("touch coucou.txt");
        header('Location: run.php');
    }
    else
    {
        system("rm coucou.txt");
        header('Location: shutdown.php');
    }
?>