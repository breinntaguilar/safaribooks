<div class="checkouts view">
<h2><?php echo __('Checkout'); ?></h2>
	<dl>
		<dt><?php echo __('ChkID'); ?></dt>
		<dd>
			<?php echo h($checkout['Checkout']['chkID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkout Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($checkout['CheckoutUser']['usrEmail'], array('controller' => 'users', 'action' => 'view', $checkout['CheckoutUser']['usrID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsedCC'); ?></dt>
		<dd>
			<?php echo h($checkout['Checkout']['usedCC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CpnID'); ?></dt>
		<dd>
			<?php echo h($checkout['Checkout']['cpnID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChkDate'); ?></dt>
		<dd>
			<?php echo h($checkout['Checkout']['chkDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChkTprice'); ?></dt>
		<dd>
			<?php echo h($checkout['Checkout']['chkTprice']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Checkout'), array('action' => 'edit', $checkout['Checkout']['chkID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Checkout'), array('action' => 'delete', $checkout['Checkout']['chkID']), null, __('Are you sure you want to delete # %s?', $checkout['Checkout']['chkID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Customer'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checkout Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Coupons'); ?></h3>
	<?php if (!empty($checkout['CheckoutCoupon'])): ?>
		<dl>
			<dt><?php echo __('CpnID'); ?></dt>
		<dd>
	<?php echo $checkout['CheckoutCoupon']['cpnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CpnType'); ?></dt>
		<dd>
	<?php echo $checkout['CheckoutCoupon']['cpnType']; ?>
&nbsp;</dd>
		<dt><?php echo __('CpnParam'); ?></dt>
		<dd>
	<?php echo $checkout['CheckoutCoupon']['cpnParam']; ?>
&nbsp;</dd>
		<dt><?php echo __('CpnDetail'); ?></dt>
		<dd>
	<?php echo $checkout['CheckoutCoupon']['cpnDetail']; ?>
&nbsp;</dd>
		<dt><?php echo __('CpnStat'); ?></dt>
		<dd>
	<?php echo $checkout['CheckoutCoupon']['cpnStat']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Checkout Coupon'), array('controller' => 'coupons', 'action' => 'edit', $checkout['CheckoutCoupon']['cpnID'])); ?></li>
			</ul>
		</div>
	</div>
	