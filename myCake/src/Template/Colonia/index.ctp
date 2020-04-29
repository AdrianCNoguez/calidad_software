<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $colonia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir un nueva Colonia'), ['action' => 'add']) ?></li>
                    </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>

</nav>

<div class="box-body table-responsive no-padding">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Colonia</h3>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($colonia as $colonium): ?>
            <tr>
                <td><?= $this->Number->format($colonium->id) ?></td>
                <td><?= h($colonium->colonia) ?></td>
                <td><?= $colonium->has('municipio') ? $this->Html->link($colonium->municipio->id, ['controller' => 'Municipio', 'action' => 'view', $colonium->municipio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $colonium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colonium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colonium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colonium->id)]) ?>
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
