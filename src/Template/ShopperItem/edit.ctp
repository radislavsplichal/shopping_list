<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShopperItem $shopperItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shopperItem->item_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shopperItem->item_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shopper Item'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shopperItem form large-9 medium-8 columns content">
    <?= $this->Form->create($shopperItem) ?>
    <fieldset>
        <legend><?= __('Edit Shopper Item') ?></legend>
        <?php
            echo $this->Form->control('product');
            echo $this->Form->control('price');
            echo $this->Form->control('quantity');
            echo $this->Form->control('EAN');
            echo $this->Form->control('active_flag');
            echo $this->Form->control('foto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
