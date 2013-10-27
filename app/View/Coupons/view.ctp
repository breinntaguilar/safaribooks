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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['cpnID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['cpnID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['cpnID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Checkouts'); ?></h3>
	<?php if (!empty($coupon['CouponCheckout'])): ?>
		<dl>
			<dt><?php echo __('ChkID'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['chkID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CusID'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['cusID']; ?>
&nbsp;</dd>
		<dt><?php echo __('UsedCC'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['usedCC']; ?>
&nbsp;</dd>
		<dt><?php echo __('CpnID'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['cpnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('ChkDate'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['chkDate']; ?>
&nbsp;</dd>
		<dt><?php echo __('ChkTprice'); ?></dt>
		<dd>
	<?php echo $coupon['CouponCheckout']['chkTprice']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Coupon Checkout'), array('controller' => 'checkouts', 'action' => 'edit', $coupon['CouponCheckout']['chkID'])); ?></li>
			</ul>
		</div>
	</div>
	