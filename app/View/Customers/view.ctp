<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('CusID'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cusID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CmnID'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cmnID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CusEmail'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cusEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CusPass'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cusPass']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['cusID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['cusID']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['cusID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Details'); ?></h3>
	<?php if (!empty($customer['CustomerDetail'])): ?>
		<dl>
			<dt><?php echo __('CmnID'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnFname'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnFname']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnLname'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnLname']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnSuffix'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnSuffix']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnAddress'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnAddress']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnPhone'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnPhone']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnRole'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnRole']; ?>
&nbsp;</dd>
		<dt><?php echo __('CmnStat'); ?></dt>
		<dd>
	<?php echo $customer['CustomerDetail']['cmnStat']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Customer Detail'), array('controller' => 'details', 'action' => 'edit', $customer['CustomerDetail']['cmnID'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Credits'); ?></h3>
	<?php if (!empty($customer['CustomerCredit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CcNum'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('CcType'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CustomerCredit'] as $customerCredit): ?>
		<tr>
			<td><?php echo $customerCredit['ccNum']; ?></td>
			<td><?php echo $customerCredit['cusID']; ?></td>
			<td><?php echo $customerCredit['ccType']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'credits', 'action' => 'view', $customerCredit['ccID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'credits', 'action' => 'edit', $customerCredit['ccID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'credits', 'action' => 'delete', $customerCredit['ccID']), null, __('Are you sure you want to delete # %s?', $customerCredit['ccID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($customer['CustomerReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('RevID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('EmpID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('RevDesc'); ?></th>
		<th><?php echo __('RevRating'); ?></th>
		<th><?php echo __('RevStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CustomerReview'] as $customerReview): ?>
		<tr>
			<td><?php echo $customerReview['revID']; ?></td>
			<td><?php echo $customerReview['cusID']; ?></td>
			<td><?php echo $customerReview['empID']; ?></td>
			<td><?php echo $customerReview['bkID']; ?></td>
			<td><?php echo $customerReview['revDesc']; ?></td>
			<td><?php echo $customerReview['revRating']; ?></td>
			<td><?php echo $customerReview['revStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $customerReview['revID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $customerReview['revID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $customerReview['revID']), null, __('Are you sure you want to delete # %s?', $customerReview['revID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($customer['CustomerCart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CrtID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('CrtQnty'); ?></th>
		<th><?php echo __('CrtShip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CustomerCart'] as $customerCart): ?>
		<tr>
			<td><?php echo $customerCart['crtID']; ?></td>
			<td><?php echo $customerCart['cusID']; ?></td>
			<td><?php echo $customerCart['bkID']; ?></td>
			<td><?php echo $customerCart['crtQnty']; ?></td>
			<td><?php echo $customerCart['crtShip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $customerCart['crtID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $customerCart['crtID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $customerCart['crtID']), null, __('Are you sure you want to delete # %s?', $customerCart['crtID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Checkouts'); ?></h3>
	<?php if (!empty($customer['CustomerCheckout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ChkID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('UsedCC'); ?></th>
		<th><?php echo __('CpnID'); ?></th>
		<th><?php echo __('ChkDate'); ?></th>
		<th><?php echo __('ChkTprice'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CustomerCheckout'] as $customerCheckout): ?>
		<tr>
			<td><?php echo $customerCheckout['chkID']; ?></td>
			<td><?php echo $customerCheckout['cusID']; ?></td>
			<td><?php echo $customerCheckout['usedCC']; ?></td>
			<td><?php echo $customerCheckout['cpnID']; ?></td>
			<td><?php echo $customerCheckout['chkDate']; ?></td>
			<td><?php echo $customerCheckout['chkTprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'checkouts', 'action' => 'view', $customerCheckout['chkID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'checkouts', 'action' => 'edit', $customerCheckout['chkID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'checkouts', 'action' => 'delete', $customerCheckout['chkID']), null, __('Are you sure you want to delete # %s?', $customerCheckout['chkID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($customer['CustomerWishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('WshID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CustomerWishlist'] as $customerWishlist): ?>
		<tr>
			<td><?php echo $customerWishlist['wshID']; ?></td>
			<td><?php echo $customerWishlist['cusID']; ?></td>
			<td><?php echo $customerWishlist['bkID']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $customerWishlist['wshID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $customerWishlist['wshID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $customerWishlist['wshID']), null, __('Are you sure you want to delete # %s?', $customerWishlist['wshID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
