<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medio[]|\Cake\Collection\CollectionInterface $medios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medios index large-9 medium-8 columns content">
    <h3><?= __('Medios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medios as $medio): ?>
            <tr>
                <td><?= $this->Number->format($medio->id) ?></td>
                <td><?= h($medio->tipo) ?></td>
                <td><?= $medio->has('equipo') ? $this->Html->link($medio->equipo->id, ['controller' => 'Equipo', 'action' => 'view', $medio->equipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medio->id)]) ?>
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
