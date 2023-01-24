<?php 
function logData($type,$Moderator,$data,$table,$definition){
    return array(
        'type'=>$type,
        'Moderator'=>$Moderator,
        'createDate'=>date("d-m-Y"),
        'data'=>$data,
        'tables'=>$table,
        'definition'=>$definition
    );
}

?>