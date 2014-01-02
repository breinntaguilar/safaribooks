<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="coupons index">
		<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1">
		<tr>
			<th><?php echo $this->Paginator->sort('revID'); ?></th>
			<th><?php echo $this->Paginator->sort('cusID'); ?></th>
			<th><?php echo $this->Paginator->sort('empID'); ?></th>
			<th><?php echo $this->Paginator->sort('bkID'); ?></th>
			<th><?php echo $this->Paginator->sort('revDesc'); ?></th>
			<th><?php echo $this->Paginator->sort('revRating'); ?></th>
			<th><?php echo $this->Paginator->sort('revStat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($reviews as $review): ?>
		<tr>
			<td align="center"><?php echo h($coupon['Coupon']['cpnID']); ?>&nbsp;</td>
			<td align="center"><?php echo h($coupon['Coupon']['cpnType']); ?>&nbsp;</td>
			<td align="center"><?php echo h($coupon['Coupon']['cpnParam']); ?>&nbsp;</td>
			<td align="left"><?php echo h($coupon['Coupon']['cpnDetail']); ?>&nbsp;</td>
			<td align="center"><?php echo h($coupon['Coupon']['cpnStat']); ?>&nbsp;</td>
			<td align="center" class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $coupon['Coupon']['cpnID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coupon['Coupon']['cpnID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coupon['Coupon']['cpnID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['cpnID'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<p>
		<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?> </p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
		?>
	</div>
</div>