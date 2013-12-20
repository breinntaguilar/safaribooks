<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['cpnID'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['cpnID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['cpnID'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="coupons index">
		<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1">
			<tr>
				<td align="center">Code</td>
				<td align="left"><?php echo h($coupon['Coupon']['cpnID']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Type</td>
				<td align="left"><?php echo h($coupon['Coupon']['cpnType']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Parameter</td>
				<td align="left"><?php echo h($coupon['Coupon']['cpnParam']); ?>&nbsp;</td>
			</tr>			
			<tr>
				<td align="center">Description</td>
				<td align="left"><?php echo h($coupon['Coupon']['cpnDetail']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Status</td>
				<td align="left"><?php echo h($coupon['Coupon']['cpnStat']); ?>&nbsp;</td>
			</tr>
		</table>
	</div>
</div>