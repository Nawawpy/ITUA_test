<?php

function clean($value = "")
{
$value = trim($value);
$value = stripslashes($value);
$value = strip_tags($value);
$value = htmlspecialchars($value);

return $value;
}

function check_length($value = "", $min, $max) {
$result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
return !$result;
}

function connect_db(){
$host = '127.0.0.1';
$user = 'root';
$password = '';
$db_name = 'itua';
$connection = new mysqli($host, $user, $password, $db_name);
return $connection;

}
function insert_data($USER_NAME, $NAME, $EMAIL, $TEXT,$path=''){
$connection = connect_db();
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO table_itua
SET user_name = '$USER_NAME',
name = '$NAME',
email = '$EMAIL',
text = '$TEXT',
IP = '$ip',
path = '$path'";
$connection->query($sql);
}

function get_data($from, $to){

    $connection = connect_db();
    $sql = "SELECT * FROM table_itua";
    if (!empty($from) && !empty($to)){
        $sql.=" WHERE date BETWEEN '{$from}' AND '{$to}'";
    }
    else if (empty ($from) && !empty($to)){
        $sql.=" WHERE date <= '{$to}'";
    }
    else if (!empty($from) && empty($to)){
        $sql.=" WHERE date >='{$from}'";
    }
    $sql.=" ORDER BY date";
    if (isset($_POST['checkbox']) && $_POST['checkbox']=='on'){
        $sql.=' DESC';
    }
    echo $sql;
    $res = $connection->query($sql);

    $data = array();
    while( $row = mysqli_fetch_assoc($res) ){
        $data[] = $row;
    }
    return $data;
}

function date_reverse ($date){
    $arr = explode('/', $date);
    $new = array_reverse($arr);
    $new = implode('-', $new);
    return $new;

}