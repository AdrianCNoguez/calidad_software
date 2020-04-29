<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo[]|\Cake\Collection\CollectionInterface $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tienda'), ['controller' => 'Tienda', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tienda'), ['controller' => 'Tienda', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulo index large-9 medium-8 columns content">
    <h3><?= __('Articulo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreArt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promocion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tienda_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulo as $articulo): ?>
            <tr>
                <td><?= $this->Number->format($articulo->id) ?></td>
                <td><?= h($articulo->nombreArt) ?></td>
                <td><?= $this->Number->format($articulo->precio) ?></td>
                <td><?= $this->Number->format($articulo->promocion) ?></td>
                <td><?= $articulo->has('tienda') ? $this->Html->link($articulo->tienda->id, ['controller' => 'Tienda', 'action' => 'view', $articulo->tienda->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?>
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
