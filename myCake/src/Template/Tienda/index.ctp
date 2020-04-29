<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tienda[]|\Cake\Collection\CollectionInterface $tienda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tienda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estadio'), ['controller' => 'Estadio', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patrocinador'), ['controller' => 'Patrocinador', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patrocinador'), ['controller' => 'Patrocinador', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tienda index large-9 medium-8 columns content">
    <h3><?= __('Tienda') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom_tienda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patrocinador_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tienda as $tienda): ?>
            <tr>
                <td><?= $this->Number->format($tienda->id) ?></td>
                <td><?= h($tienda->Nom_tienda) ?></td>
                <td><?= $tienda->has('estadio') ? $this->Html->link($tienda->estadio->id, ['controller' => 'Estadio', 'action' => 'view', $tienda->estadio->id]) : '' ?></td>
                <td><?= $tienda->has('patrocinador') ? $this->Html->link($tienda->patrocinador->id, ['controller' => 'Patrocinador', 'action' => 'view', $tienda->patrocinador->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tienda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tienda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tienda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tienda->id)]) ?>
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
