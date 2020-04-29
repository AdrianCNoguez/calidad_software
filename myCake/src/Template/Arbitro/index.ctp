<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arbitro[]|\Cake\Collection\CollectionInterface $arbitro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Arbitro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arbitro index large-9 medium-8 columns content">
    <h3><?= __('Arbitro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posicion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('partidosJ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ligas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('encuentro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arbitro as $arbitro): ?>
            <tr>
                <td><?= $this->Number->format($arbitro->id) ?></td>
                <td><?= h($arbitro->posicion) ?></td>
                <td><?= h($arbitro->partidosJ) ?></td>
                <td><?= $arbitro->has('liga') ? $this->Html->link($arbitro->liga->id, ['controller' => 'Ligas', 'action' => 'view', $arbitro->liga->id]) : '' ?></td>
                <td><?= $arbitro->has('encuentro') ? $this->Html->link($arbitro->encuentro->id, ['controller' => 'Encuentro', 'action' => 'view', $arbitro->encuentro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arbitro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arbitro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arbitro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arbitro->id)]) ?>
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
