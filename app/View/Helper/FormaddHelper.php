<?php
/**
 * Author: Alfrenido Cenera
 * Description: Extends the Form helper to add <td> tags between label and input.
 */

App::uses('AppHelper', 'View/Helper');

class FormaddHelper extends AppHelper {
	public $helpers = array('Form');
	
	public function inputAdd($fieldName, $options1 = array()) {
		$error = $this->Form->isFieldError($fieldName) ? $this->Form->error($fieldName) . '</td></tr>': '</td></tr>';
		if (isset($options1['hiddenField'])) {
			$options2 = array('before' => '<tr><td>Status</td><td><div class="cleaner_with_image" /></td><td>', 'after' => '</td></tr>');
		}
		else {
			$options2 = array('before' => '<tr><td>', 'between' => '</td><td><div class="cleaner_with_image" /></td><td>', 'after' => $error);
		}
		$options1 = array_merge((array)$options1, (array)$options2);
		$output = $this->Form->input($fieldName, $options1);
		
		return $output;
	}
	
	public function inputSel($fieldName, $options = array()) {
		$output = $this->inputAdd($fieldName, $options);
		
		$find = array('/(<select)(.*)(id=")(.*)( required.*)(>)/', '/<\/select>/', '/( req.*)((.*\r\n)*)(.*)( sel.*ted")(>)(\d{4})/');
		$replace = array('<input\2type="text" \3\4 list="dl\4\5/\6<datalist \3dl\4>', '</datalist>', ' value=\7\1\2\4\6\7');
		return preg_replace($find, $replace, $output);
	}
}
