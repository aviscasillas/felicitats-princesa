<?php
function template($msg, $options, $ok_val) {
	echo '<p>' . $msg . "</p>";
 	foreach ($options as $label => $value) {
    echo '<a name="response" value="' . $value . '" class="button">' . $label . '</a>';
	}
 	echo '<input type="hidden" name="ok_val" value="' . $ok_val . '" />';
}
?>