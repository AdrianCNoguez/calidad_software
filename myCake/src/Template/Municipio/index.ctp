<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipio[]|\Cake\Collection\CollectionInterface $municipio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir un nuevo Municipio'), ['action' => 'add']) ?></li>
                    </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>

</nav>

<div class="municipio index large-9 medium-8 columns content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Municipio</h3>


                <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipio as $municipio): ?>
            <tr>
                <td><?= $this->Number->format($municipio->id) ?></td>
                <td><?= h($municipio->municipio) ?></td>
                <td><?= h($municipio->created) ?></td>
                <td><?= h($municipio->modified) ?></td>
                <td><?= $municipio->has('estado') ? $this->Html->link($municipio->estado->id, ['controller' => 'Estado', 'action' => 'view', $municipio->estado->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $municipio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id)]) ?>
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
