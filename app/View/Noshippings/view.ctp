<div class="noshippings view">
<h2><?php echo __('Noshipping'); ?></h2>
	<dl>
		<dt><?php echo __('ProvName'); ?></dt>
		<dd>
			<?php echo h($noshipping['Noshipping']['provName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AreaCode'); ?></dt>
		<dd>
			<?php echo h($noshipping['Noshipping']['areaCode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noshipping'), array('action' => 'edit', $noshipping['Noshipping']['provName'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noshipping'), array('action' => 'delete', $noshipping['Noshipping']['provName']), null, __('Are you sure you want to delete # %s?', $noshipping['Noshipping']['provName'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Noshippings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noshipping'), array('action' => 'add')); ?> </li>
	</ul>
</div>
