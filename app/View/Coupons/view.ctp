<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['cpnID'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['cpnID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['cpnID'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="coupons view">
		<h2><?php echo __('Coupon'); ?></h2>
		<dl>
			<dt><?php echo __('CpnID'); ?></dt>
			<dd>
				<?php echo h($coupon['Coupon']['cpnID']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CpnType'); ?></dt>
			<dd>
				<?php echo h($coupon['Coupon']['cpnType']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CpnParam'); ?></dt>
			<dd>
				<?php echo h($coupon['Coupon']['cpnParam']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CpnDetail'); ?></dt>
			<dd>
				<?php echo h($coupon['Coupon']['cpnDetail']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CpnStat'); ?></dt>
			<dd>
				<?php echo h($coupon['Coupon']['cpnStat']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
