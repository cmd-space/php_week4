<?php

	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	echo '<form><select>';
	for ($i = 0; $i < count($states); $i++)
	{
		echo '<option>' . $states[$i] . '</option>';
	}
	echo '</select></form>';

	echo '<form><select>';
	foreach ($states as $value)
	{
		echo '<option>' . $value . '</option>';
	}
	echo '</select></form>';

	$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');
	echo '<form><select>';
	foreach ($states as $value)
	{
		echo '<option>' . $value . '</option>';
	}
	echo '</select></form>';

?>