<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperUser $shopperUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shopper User'), ['action' => 'edit', $shopperUser->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shopper User'), ['action' => 'delete', $shopperUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopperUser->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shopper User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopper User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shopperUser view large-9 medium-8 columns content">
    <h3><?= h($shopperUser->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($shopperUser->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($shopperUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($shopperUser->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($shopperUser->user_id) ?></td>
        </tr>
    </table>
</div>
