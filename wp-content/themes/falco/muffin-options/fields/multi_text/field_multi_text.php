<?php
class MFN_Options_multi_text extends MFN_Options{	
	
	/**
	 * Field Constructor.
	*/
	function __construct($field = array(), $value ='', $parent){
		
		parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		$this->field = $field;
		$this->value = $value;
	
	}

	
	/**
	 * Field Render Function.
	*/
	function render(){
		
		$class = (isset($this->field['class']))?$this->field['class']:'';
		
		echo '<input type="text" class="multi-text-add small-text" placeholder="type sidebar title here">';
		echo '<a href="javascript:void(0);" class="multi-text-btn btn-blue" rel-id="'.$this->field['id'].'-ul" rel-name="'.$this->args['opt_name'].'['.$this->field['id'].'][]">Add sidebar</a>';
		
		echo '<ul class="multi-text-ul" id="'.$this->field['id'].'-ul">';
			
			if(isset($this->value) && is_array($this->value)){
				foreach($this->value as $k => $value){
					if($value != ''){	
						echo '<li>';
							echo '<input type="hidden" id="'.$this->field['id'].'-'.$k.'" name="'.$this->args['opt_name'].'['.$this->field['id'].'][]" value="'.esc_attr($value).'" class="'.$class.'" />';
							echo '<span>'.esc_attr($value).'</span>';
							echo '<a href="" class="multi-text-remove"><em>delete</em></a>';
						echo '</li>';
					}
				}
			}
			
			echo '<li class="multi-text-default">';
				echo '<input type="hidden" name="" value="" class="'.$class.'" />';
				echo '<span></span>';
				echo '<a href="" class="multi-text-remove"><em>delete</em></a>';
			echo '</li>';	
	
		echo '</ul>';

		echo (isset($this->field['desc']) && !empty($this->field['desc']))?' <span class="description multi-text-desc">'.$this->field['desc'].'</span>':'';	
	}
	
	
	/**
	 * Enqueue Function.
	*/
	function enqueue(){
		
		wp_enqueue_script(
			'mfn-opts-field-multi-text-js', 
			MFN_OPTIONS_URI.'fields/multi_text/field_multi_text.js', 
			array('jquery'),
			time(),
			true
		);
		
	}
	
}
?>