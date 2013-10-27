<div class="addresses view">
<h2><?php echo __('Address'); ?></h2>
	<dl>
		<dt><?php echo __('ZipCode'); ?></dt>
		<dd>
			<?php echo h($address['Address']['zipCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CityName'); ?></dt>
		<dd>
			<?php echo h($address['Address']['cityName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProvName'); ?></dt>
		<dd>
			<?php echo h($address['Address']['provName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AreaCode'); ?></dt>
		<dd>
			<?php echo h($address['Address']['areaCode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address'), array('action' => 'edit', $address['Address']['zipCode'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address'), array('action' => 'delete', $address['Address']['zipCode']), null, __('Are you sure you want to delete # %s?', $address['Address']['zipCode'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?> </li>
	</ul>
</div>
