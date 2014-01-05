<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['revID'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['revID']), null, __('Are you sure you want to delete # %s?', $review['Review']['revID'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Review Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Review Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Review Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="reviews index">
		<table class="table table-condensed table-bordered table-hover" cellpadding="1" cellspacing="1">
			<tr>
				<td align="center">Review ID</td>
				<td align="left"><?php echo h($review['Review']['revID']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Customer ID</td>
				<td align="left"><?php echo $this->Html->link($review['ReviewCustomer']['cusEmail'], array('controller' => 'customers', 'action' => 'view', $review['ReviewCustomer']['cusID'])); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Employee ID</td>
				<td align="left"><?php echo $this->Html->link($review['ReviewEmployee']['empID'], array('controller' => 'employees', 'action' => 'view', $review['ReviewEmployee']['empID'])); ?>&nbsp;</td>
			</tr>			
			<tr>
				<td align="center">Book ID</td>
				<td align="left"><?php echo $this->Html->link($review['ReviewBook']['bkTitle'], array('controller' => 'books', 'action' => 'view', $review['ReviewBook']['bkID'])); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Review Description</td>
				<td align="left"><?php echo h($review['Review']['revDesc']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Rating</td>
				<td align="left"><?php echo h($review['Review']['revRating']); ?>&nbsp;</td>
			</tr>
			<tr>
				<td align="center">Status</td>
				<td align="left"><?php echo h($review['Review']['revStat']); ?>&nbsp;</td>
			</tr>
		</table>
	</div>
</div>