<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<h1><?php echo __('Actions'); ?></h1>
		<ul>
			<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['usrID'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Credits'), array('controller' => 'credits', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div id="templatemo_content_right">
<div class="users view">
	<h1><?php echo __('User'); ?></h1>
	<dl>
		<dt><?php echo __('UsrID'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrEmail'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrPass'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrPass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrFname'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrFname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrLname'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrLname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrAddress1'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrAddress1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrAddress2'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrAddress2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrCity'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrCity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrProvince'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrProvince']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrZIP'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrZIP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrPhone'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrPhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrSSN'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrSSN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrRole'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrRole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UsrStat'); ?></dt>
		<dd>
			<?php echo h($user['User']['usrStat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Credits'); ?></h3>
	<?php if (!empty($user['UserCredit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CcNum'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('CcType'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserCredit'] as $userCredit): ?>
		<tr>
			<td><?php echo $userCredit['ccNum']; ?></td>
			<td><?php echo $userCredit['usrID']; ?></td>
			<td><?php echo $userCredit['ccType']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'credits', 'action' => 'view', $userCredit['ccID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'credits', 'action' => 'edit', $userCredit['ccID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'credits', 'action' => 'delete', $userCredit['ccID']), null, __('Are you sure you want to delete # %s?', $userCredit['ccID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Credit'), array('controller' => 'credits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($user['UserCart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CrtID'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('CrtQnty'); ?></th>
		<th><?php echo __('CrtShip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserCart'] as $userCart): ?>
		<tr>
			<td><?php echo $userCart['crtID']; ?></td>
			<td><?php echo $userCart['usrID']; ?></td>
			<td><?php echo $userCart['bkID']; ?></td>
			<td><?php echo $userCart['crtQnty']; ?></td>
			<td><?php echo $userCart['crtShip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $userCart['crtID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $userCart['crtID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $userCart['crtID']), null, __('Are you sure you want to delete # %s?', $userCart['crtID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Checkouts'); ?></h3>
	<?php if (!empty($user['UserCheckout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ChkID'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('UsedCC'); ?></th>
		<th><?php echo __('CpnID'); ?></th>
		<th><?php echo __('ChkDate'); ?></th>
		<th><?php echo __('ChkTprice'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserCheckout'] as $userCheckout): ?>
		<tr>
			<td><?php echo $userCheckout['chkID']; ?></td>
			<td><?php echo $userCheckout['usrID']; ?></td>
			<td><?php echo $userCheckout['usedCC']; ?></td>
			<td><?php echo $userCheckout['cpnID']; ?></td>
			<td><?php echo $userCheckout['chkDate']; ?></td>
			<td><?php echo $userCheckout['chkTprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'checkouts', 'action' => 'view', $userCheckout['chkID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'checkouts', 'action' => 'edit', $userCheckout['chkID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'checkouts', 'action' => 'delete', $userCheckout['chkID']), null, __('Are you sure you want to delete # %s?', $userCheckout['chkID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Checkout'), array('controller' => 'checkouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($user['UserReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('RevID'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('EmpID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('RevDesc'); ?></th>
		<th><?php echo __('RevRating'); ?></th>
		<th><?php echo __('RevStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserReview'] as $userReview): ?>
		<tr>
			<td><?php echo $userReview['revID']; ?></td>
			<td><?php echo $userReview['usrID']; ?></td>
			<td><?php echo $userReview['empID']; ?></td>
			<td><?php echo $userReview['bkID']; ?></td>
			<td><?php echo $userReview['revDesc']; ?></td>
			<td><?php echo $userReview['revRating']; ?></td>
			<td><?php echo $userReview['revStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $userReview['revID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $userReview['revID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $userReview['revID']), null, __('Are you sure you want to delete # %s?', $userReview['revID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($user['UserWishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('WshID'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserWishlist'] as $userWishlist): ?>
		<tr>
			<td><?php echo $userWishlist['wshID']; ?></td>
			<td><?php echo $userWishlist['usrID']; ?></td>
			<td><?php echo $userWishlist['bkID']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $userWishlist['wshID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $userWishlist['wshID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $userWishlist['wshID']), null, __('Are you sure you want to delete # %s?', $userWishlist['wshID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Procures'); ?></h3>
	<?php if (!empty($user['UserProcure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('PrcID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('PrcQnty'); ?></th>
		<th><?php echo __('PrcLprice'); ?></th>
		<th><?php echo __('UsrID'); ?></th>
		<th><?php echo __('PrcStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserProcure'] as $userProcure): ?>
		<tr>
			<td><?php echo $userProcure['prcID']; ?></td>
			<td><?php echo $userProcure['bkID']; ?></td>
			<td><?php echo $userProcure['prcQnty']; ?></td>
			<td><?php echo $userProcure['prcLprice']; ?></td>
			<td><?php echo $userProcure['usrID']; ?></td>
			<td><?php echo $userProcure['prcStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procures', 'action' => 'view', $userProcure['prcID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procures', 'action' => 'edit', $userProcure['prcID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procures', 'action' => 'delete', $userProcure['prcID']), null, __('Are you sure you want to delete # %s?', $userProcure['prcID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>