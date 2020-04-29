<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Temporada[]|\Cake\Collection\CollectionInterface $temporada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Temporada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temporada index large-9 medium-8 columns content">
    <h3><?= __('Temporada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreTemporada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ligas_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($temporada as $temporada): ?>
            <tr>
                <td><?= $this->Number->format($temporada->id) ?></td>
                <td><?= h($temporada->nombreTemporada) ?></td>
                <td><?= $temporada->has('liga') ? $this->Html->link($temporada->liga->id, ['controller' => 'Ligas', 'action' => 'view', $temporada->liga->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $temporada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $temporada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $temporada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $temporada->id)]) ?>
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
