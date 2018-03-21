<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperItem[]|\Cake\Collection\CollectionInterface $shopperItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shopper Item'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shopperItem index large-9 medium-8 columns content">
    <h3><?= __('Shopper Item') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EAN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shopperItem as $shopperItem): ?>
            <tr>
                <td><?= $this->Number->format($shopperItem->item_id) ?></td>
                <td><?= h($shopperItem->product) ?></td>
                <td><?= $this->Number->format($shopperItem->price) ?></td>
                <td><?= $this->Number->format($shopperItem->quantity) ?></td>
                <td><?= h($shopperItem->EAN) ?></td>
                <td><?= h($shopperItem->active_flag) ?></td>
                <td><?= h($shopperItem->foto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shopperItem->item_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shopperItem->item_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shopperItem->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopperItem->item_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
