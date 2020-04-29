<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encuentro[]|\Cake\Collection\CollectionInterface $encuentro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="encuentro index large-9 medium-8 columns content">
    <h3><?= __('Encuentro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NombreEcuentro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visinte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($encuentro as $encuentro): ?>
            <tr>
                <td><?= $this->Number->format($encuentro->id) ?></td>
                <td><?= h($encuentro->NombreEcuentro) ?></td>
                <td><?= h($encuentro->local) ?></td>
                <td><?= h($encuentro->visinte) ?></td>
                <td><?= h($encuentro->fecha) ?></td>
                <td><?= h($encuentro->hora) ?></td>
                <td><?= $encuentro->has('equipo') ? $this->Html->link($encuentro->equipo->id, ['controller' => 'Equipo', 'action' => 'view', $encuentro->equipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $encuentro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $encuentro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $encuentro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $encuentro->id)]) ?>
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
