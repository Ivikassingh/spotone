<?php
$con= mysql_connect("localhost","","");
if(!$con)
{
    die("unable to connect");
}
else
{
    echo "yes, you are connected".'</b>'; 
     $new= mysql_select_db("test");
    if($new)
    {
      echo("connect");
    }
    else
    {
        echo "not";
    }
    $sql="CREATE TABLE VIKAS";
    mysql_query($sql,$con);
}
?>