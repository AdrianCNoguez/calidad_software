<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $sMS
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir un nuevo SMS'), ['action' => 'add']) ?></li>
                    </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>

</nav>





<div class="sMS index large-9 medium-8 columns content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Estadio</h3>

                <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mensaje') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sMS as $sM): ?>
            <tr>
                <td><?= $this->Number->format($sM->id) ?></td>
                <td><?= $this->Number->format($sM->telefono) ?></td>
                <td><?= h($sM->mensaje) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sM->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sM->id)]) ?>
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
