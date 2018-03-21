<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperUser $shopperUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shopperUser->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shopperUser->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shopper User'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shopperUser form large-9 medium-8 columns content">
    <?= $this->Form->create($shopperUser) ?>
    <fieldset>
        <legend><?= __('Edit Shopper User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
