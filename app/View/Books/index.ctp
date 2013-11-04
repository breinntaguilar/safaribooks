<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
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
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books index">
		<?php $cnt = 1; foreach ($books as $book): ?>
			<div class="templatemo_product_box">
				<h1><?php echo '', (strlen($book['Book']['bkTitle']) + strlen($book['Book']['bkAuthor']) > 28 ?
						$this->Text->truncate(h($book['Book']['bkTitle']), abs(28 - strlen($book['Book']['bkAuthor'])), array('ellipsis' => '...', 'exact' => true)) :
						h($book['Book']['bkTitle'])); ?>
					<span>(by <?php echo h($book['Book']['bkAuthor']); ?>)</span>
				</h1>
				<?php if ($book['Book']['bkCover']) echo $this->Html->image($book['Book']['bkCover'], array('alt' => $book['Book']['bkTitle'], 'width' => 100)); ?>
				<div class="product_info">
					<p><?php echo $this->Text->truncate(h($book['Book']['bkSnippet']), 100, array('ellipsis' => '...', 'exact' => true)); ?></p>
					<h3>$<?php echo h($book['Book']['bkPrice']); ?></h3>
					<div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><?php echo $this->Html->link(__('Details'), array('action' => 'view', $book['Book']['bkID'])); ?></div>
				</div>
				<div class="cleaner">&nbsp;</div>
			</div>
			<?php
				$cnt++;
				echo '<div class="cleaner_with_', ($cnt % 2 == 0 ? 'width' : 'height') . '">&nbsp;</div>';
		endforeach; ?>
		<!-- <table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('bkID'); ?></th>
				<th><?php echo $this->Paginator->sort('bkTitle'); ?></th>
				<th><?php echo $this->Paginator->sort('bkAuthor'); ?></th>
				<th><?php echo $this->Paginator->sort('bkPubDate'); ?></th>
				<th><?php echo $this->Paginator->sort('bkQnty'); ?></th>
				<th><?php echo $this->Paginator->sort('bkRating'); ?></th>
				<th><?php echo $this->Paginator->sort('bkPrice'); ?></th>
				<th><?php echo $this->Paginator->sort('bkDiscPrice'); ?></th>
				<th><?php echo $this->Paginator->sort('bkStat'); ?></th>
				<th><?php echo $this->Paginator->sort('bkAddedDate'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($books as $book): ?>
		<tr>
			<td><?php echo h($book['Book']['bkID']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkTitle']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkAuthor']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkPubDate']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkQnty']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkRating']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkPrice']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkDiscPrice']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkStat']); ?>&nbsp;</td>
			<td><?php echo h($book['Book']['bkAddedDate']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['bkID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['bkID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['bkID']), null, __('Are you sure you want to delete # %s?', $book['Book']['bkID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table> -->
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>
