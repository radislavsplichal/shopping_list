<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperItem $shopperItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shopper Item'), ['action' => 'edit', $shopperItem->item_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shopper Item'), ['action' => 'delete', $shopperItem->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopperItem->item_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shopper Item'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopper Item'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shopperItem view large-9 medium-8 columns content">
    <h3><?= h($shopperItem->item_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= h($shopperItem->product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EAN') ?></th>
            <td><?= h($shopperItem->EAN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Flag') ?></th>
            <td><?= h($shopperItem->active_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($shopperItem->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Id') ?></th>
            <td><?= $this->Number->format($shopperItem->item_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($shopperItem->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($shopperItem->quantity) ?></td>
        </tr>
    </table>
</div>
