<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperUser[]|\Cake\Collection\CollectionInterface $shopperUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shopper User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shopperUser index large-9 medium-8 columns content">
    <h3><?= __('Shopper User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shopperUser as $shopperUser): ?>
            <tr>
                <td><?= $this->Number->format($shopperUser->user_id) ?></td>
                <td><?= h($shopperUser->username) ?></td>
                <td><?= h($shopperUser->password) ?></td>
                <td><?= h($shopperUser->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shopperUser->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shopperUser->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shopperUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopperUser->user_id)]) ?>
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
