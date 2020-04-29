<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Radio[]|\Cake\Collection\CollectionInterface $radios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medios'), ['controller' => 'Medios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medio'), ['controller' => 'Medios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radios index large-9 medium-8 columns content">
    <h3><?= __('Radios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Radiodifusora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sintonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medios_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('encuentro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($radios as $radio): ?>
            <tr>
                <td><?= $this->Number->format($radio->id) ?></td>
                <td><?= h($radio->Radiodifusora) ?></td>
                <td><?= $this->Number->format($radio->sintonia) ?></td>
                <td><?= $radio->has('medio') ? $this->Html->link($radio->medio->id, ['controller' => 'Medios', 'action' => 'view', $radio->medio->id]) : '' ?></td>
                <td><?= $radio->has('encuentro') ? $this->Html->link($radio->encuentro->id, ['controller' => 'Encuentro', 'action' => 'view', $radio->encuentro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radio->id)]) ?>
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
