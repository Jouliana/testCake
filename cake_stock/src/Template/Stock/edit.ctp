<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stock'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stock form large-9 medium-8 columns content">
    <?= $this->Form->create($stock) ?>
    <fieldset>
        <legend><?= __('Edit Stock') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('count');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
