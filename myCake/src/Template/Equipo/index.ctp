<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo[]|\Cake\Collection\CollectionInterface $equipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estadio'), ['controller' => 'Estadio', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipo index large-9 medium-8 columns content">
    <h3><?= __('Equipo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomEquipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Med') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Def') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipo as $equipo): ?>
            <tr>
                <td><?= $this->Number->format($equipo->id) ?></td>
                <td><?= h($equipo->nomEquipo) ?></td>
                <td><?= $this->Number->format($equipo->Atq) ?></td>
                <td><?= $this->Number->format($equipo->Med) ?></td>
                <td><?= $this->Number->format($equipo->Def) ?></td>
                <td><?= h($equipo->valor) ?></td>
                <td><?= $this->Number->format($equipo->calidad) ?></td>
                <td><?= $equipo->has('estadio') ? $this->Html->link($equipo->estadio->id, ['controller' => 'Estadio', 'action' => 'view', $equipo->estadio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?>
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
