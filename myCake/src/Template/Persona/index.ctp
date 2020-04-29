<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona[]|\Cake\Collection\CollectionInterface $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona index large-9 medium-8 columns content">
    <h3><?= __('Persona') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidoP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidoM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persona as $persona): ?>
            <tr>
                <td><?= $this->Number->format($persona->id) ?></td>
                <td><?= h($persona->nombre) ?></td>
                <td><?= h($persona->apellidoP) ?></td>
                <td><?= h($persona->apellidoM) ?></td>
                <td><?= h($persona->edad) ?></td>
                <td><?= $persona->has('equipo') ? $this->Html->link($persona->equipo->id, ['controller' => 'Equipo', 'action' => 'view', $persona->equipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
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
