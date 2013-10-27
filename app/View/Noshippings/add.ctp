<div class="noshippings form">
<?php echo $this->Form->create('Noshipping'); ?>
	<fieldset>
		<legend><?php echo __('Add Noshipping'); ?></legend>
	<?php
		echo $this->Form->input('areaCode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Noshippings'), array('action' => 'index')); ?></li>
	</ul>
</div>
