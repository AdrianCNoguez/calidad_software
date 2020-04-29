<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Director[]|\Cake\Collection\CollectionInterface $director
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Director'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="director index large-9 medium-8 columns content">
    <h3><?= __('Director') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiempo_club') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Liguillas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TorneosEquipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($director as $director): ?>
            <tr>
                <td><?= $this->Number->format($director->id) ?></td>
                <td><?= h($director->Alias) ?></td>
                <td><?= h($director->tiempo_club) ?></td>
                <td><?= $this->Number->format($director->Liguillas) ?></td>
                <td><?= $this->Number->format($director->TorneosEquipo) ?></td>
                <td><?= $director->has('persona') ? $this->Html->link($director->persona->id, ['controller' => 'Persona', 'action' => 'view', $director->persona->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $director->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $director->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $director->id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->id)]) ?>
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
