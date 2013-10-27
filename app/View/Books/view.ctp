<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('BkID'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkTitle'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkTitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkAuthor'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkAuthor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkPubDate'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkPubDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkQnty'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkQnty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkRating'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkRating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkPrice'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkPrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkDiscPrice'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkDiscPrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BkStat'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bkStat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['bkID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['bkID']), null, __('Are you sure you want to delete # %s?', $book['Book']['bkID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($book['BookReview'])): ?>
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
	<?php foreach ($book['BookReview'] as $bookReview): ?>
		<tr>
			<td><?php echo $bookReview['revID']; ?></td>
			<td><?php echo $bookReview['cusID']; ?></td>
			<td><?php echo $bookReview['empID']; ?></td>
			<td><?php echo $bookReview['bkID']; ?></td>
			<td><?php echo $bookReview['revDesc']; ?></td>
			<td><?php echo $bookReview['revRating']; ?></td>
			<td><?php echo $bookReview['revStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $bookReview['revID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $bookReview['revID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $bookReview['revID']), null, __('Are you sure you want to delete # %s?', $bookReview['revID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carts'); ?></h3>
	<?php if (!empty($book['BookCart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CrtID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('CrtQnty'); ?></th>
		<th><?php echo __('CrtShip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['BookCart'] as $bookCart): ?>
		<tr>
			<td><?php echo $bookCart['crtID']; ?></td>
			<td><?php echo $bookCart['cusID']; ?></td>
			<td><?php echo $bookCart['bkID']; ?></td>
			<td><?php echo $bookCart['crtQnty']; ?></td>
			<td><?php echo $bookCart['crtShip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $bookCart['crtID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $bookCart['crtID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $bookCart['crtID']), null, __('Are you sure you want to delete # %s?', $bookCart['crtID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Procures'); ?></h3>
	<?php if (!empty($book['BookProcure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('PrcID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th><?php echo __('PrcQnty'); ?></th>
		<th><?php echo __('PrcLprice'); ?></th>
		<th><?php echo __('EmpID'); ?></th>
		<th><?php echo __('PrcStat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['BookProcure'] as $bookProcure): ?>
		<tr>
			<td><?php echo $bookProcure['prcID']; ?></td>
			<td><?php echo $bookProcure['bkID']; ?></td>
			<td><?php echo $bookProcure['prcQnty']; ?></td>
			<td><?php echo $bookProcure['prcLprice']; ?></td>
			<td><?php echo $bookProcure['empID']; ?></td>
			<td><?php echo $bookProcure['prcStat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procures', 'action' => 'view', $bookProcure['prcID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procures', 'action' => 'edit', $bookProcure['prcID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procures', 'action' => 'delete', $bookProcure['prcID']), null, __('Are you sure you want to delete # %s?', $bookProcure['prcID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book Procure'), array('controller' => 'procures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishlists'); ?></h3>
	<?php if (!empty($book['BookWishlist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('WshID'); ?></th>
		<th><?php echo __('CusID'); ?></th>
		<th><?php echo __('BkID'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['BookWishlist'] as $bookWishlist): ?>
		<tr>
			<td><?php echo $bookWishlist['wshID']; ?></td>
			<td><?php echo $bookWishlist['cusID']; ?></td>
			<td><?php echo $bookWishlist['bkID']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishlists', 'action' => 'view', $bookWishlist['wshID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishlists', 'action' => 'edit', $bookWishlist['wshID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishlists', 'action' => 'delete', $bookWishlist['wshID']), null, __('Are you sure you want to delete # %s?', $bookWishlist['wshID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
