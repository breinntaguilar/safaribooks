<div class="details view">
<h2><?php echo __('Detail'); ?></h2>
	<dl>
		<dt><?php echo __('CmnID'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnFname'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnFname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnLname'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnLname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnSuffix'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnSuffix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnAddress'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnAddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnPhone'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnPhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnRole'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnRole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnStat'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['cmnStat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detail'), array('action' => 'edit', $detail['Detail']['cmnID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detail'), array('action' => 'delete', $detail['Detail']['cmnID']), null, __('Are you sure you want to delete # %s?', $detail['Detail']['cmnID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($detail['DetailCustomer'])): ?>
		<dl>
			<dt><?php echo __('CusID'); ?></dt>
		<dd>
	<?php echo $detail['DetailCustomer']['cusID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnID'); ?></dt>
		<dd>
	<?php echo $detail['DetailCustomer']['cmnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CusEmail'); ?></dt>
		<dd>
	<?php echo $detail['DetailCustomer']['cusEmail']; ?>
&nbsp;</dd>
		<dt><?php echo __('CusPass'); ?></dt>
		<dd>
	<?php echo $detail['DetailCustomer']['cusPass']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Detail Customer'), array('controller' => 'customers', 'action' => 'edit', $detail['DetailCustomer']['cusID'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($detail['DetailEmployee'])): ?>
		<dl>
			<dt><?php echo __('EmpID'); ?></dt>
		<dd>
	<?php echo $detail['DetailEmployee']['empID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnID'); ?></dt>
		<dd>
	<?php echo $detail['DetailEmployee']['cmnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('EmpPass'); ?></dt>
		<dd>
	<?php echo $detail['DetailEmployee']['empPass']; ?>
&nbsp;</dd>
		<dt><?php echo __('EmpSSN'); ?></dt>
		<dd>
	<?php echo $detail['DetailEmployee']['empSSN']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Detail Employee'), array('controller' => 'employees', 'action' => 'edit', $detail['DetailEmployee']['empID'])); ?></li>
			</ul>
		</div>
	</div>
	