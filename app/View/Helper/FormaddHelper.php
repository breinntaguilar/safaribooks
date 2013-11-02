<?php
/**
 * Author: Alfrenido Cenera
 * Description: Extends the Form helper to add <td> tags between label and input.
 *              It is possible to do this using the Form helper itself but it would make the codes in the View files long.
 */

App::uses('AppHelper', 'View/Helper');

class FormaddHelper extends AppHelper {
	public $helpers = array('Form');
	
	public function inputAdd($fieldName, $options = array()) {
		$options2 = array('before' => '<tr><td>', 'between' => '</td><td><div class="cleaner_with_image"></div></td><td>', 'after' => '</td></tr>');
		$options = array_merge((array)$options, (array)$options2);
		$output = $this->Form->input($fieldName, $options);
		
		return $output;
	}
}
