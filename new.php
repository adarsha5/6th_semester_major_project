<?php
// Execute the Python function
function php_function(){
$command = "python jarvis.py ";
shell_exec($command);
}
php_function();
?>
