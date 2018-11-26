<?php
    define("SERVER","localhost");
    define("DATABASE","ddb118663");
    define("BD_USER","ddb118663");
    define("PASSWORD","f9UXeEekN");

    function get_connection(){
        $connection = mysql_connect(SERVER,BD_USER,PASSWORD);
        mysql_select_db(DATABASE,$connection) or die ("ERROR CONNECTING BD");
        mysql_query("SET NAMES 'utf8' ");
    }
    function list_products(){
        $query="select * from Allotjament";
        $connection= get_connection();
        $result=mysql_query($query,$connection);
        if(!result){echo "Error:$consulta".mysql_error();return false;}
        while ($row = mysql_fetch_array($result)){
            $elements[]=$row;
        }
        mysql_close($connection);
        return $elements;
    }
?>