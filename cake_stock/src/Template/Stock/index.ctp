<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock[]|\Cake\Collection\CollectionInterface $stock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stock index large-9 medium-8 columns content">
    <h3><?= __('Stock') ?></h3>
    <?= $this->Form->control('search'); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stock as $stock): ?>
            <tr>
                <td><?= $this->Number->format($stock->id) ?></td>
                <td><?= h($stock->name) ?></td>
                <td><?= $this->Number->format($stock->count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stock->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?>
                    <?= $this->Html->link(__('+'), ['action' => 'increment', $stock->id]) ?>
                    <?= $this->Html->link(__('-'), ['action' => 'decrement', $stock->id]) ?>
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
<script type="text/javascript">
    $('document').ready(function(){
    $('#search').keyup(function(){
        $.ajax({
            method: 'get',
            url : "<?= $this->Url->build(['controller' => 'Stock','action' => 'testajax']); ?>",
            data: {keyword:$(this).val()},
            success: function( response )
            {       
                alert(response);
                //$( '.table-content' ).html(response);
            }
        });
    });
});
</script>