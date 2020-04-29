<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado[]|\Cake\Collection\CollectionInterface $estado
 *
 */

?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir una nuevo Estado'), ['action' => 'add']) ?></li>
                    </h3>
                    <?= $this->Html->link('export', array(
                                'controller' => 'Estado',
                                'action' => 'export',
                                'ext' => 'csv'
                            ));?>




                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>


            <div class="box-body table-responsive no-padding">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Estados</h3>


    <table class="table table-hover" >
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($estado as $estado): ?>
            <tr>
                <td><?= $this->Number->format($estado->id) ?></td>
                <td><?= h($estado->estado) ?></td>
                <td><?= h($estado->created) ?></td>
                <td><?= h($estado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estado->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">


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
</div>
