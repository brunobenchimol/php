<p> Links: </p>
<a href="/info.php">PHP INFO</a><BR>
          
<p> Im running on <b> <?php echo gethostname(); ?> </b> system. </p>
<p> Env $APP_CYCLE value is: <?php echo getenv("APP_CYCLE"); ?> </p>     
          
<?php
if(isset($_POST['ready'])) 
{ 
    echo "<p> <b> Probe de Ready Removido !!! </b> </p>"; 
    unlink("ready.php");
}
if(isset($_POST['liveness'])) 
{ 
    echo "<p> <b> Probe de Liveness Removido !!! </b> </p>"; 
    unlink("alive.txt");
}         
          
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="submit" name="ready" value="Remover Probe - Ready"><br>
</form>
          
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="submit" name="liveness" value="Remover Probe - Liveness"><br>
</form>
          

<p> Hello World - PHP </p>
<p> Printing servers variables </p>
          
<?php      
$indicesServer = array('PHP_SELF', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SCRIPT_NAME' ) ; 
echo '<table cellpadding="10">' ; 
foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
    } 
    else { 
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
    } 
} 
echo '</table>' ; 
?>
