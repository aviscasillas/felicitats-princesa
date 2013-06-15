<?php
function template($msg, $options, $ok_val) {
 echo '<p>' . $msg . "</p>";
 echo '<input type="text" name="ok_val" value="' . $ok_val . '" />';
}
?>