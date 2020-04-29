<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion[]|\Cake\Collection\CollectionInterface $direccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">


</nav>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><li><?= $this->Html->link(__('Añadir una nueva Direccion'), ['action' => 'add']) ?></li>
                </h3>

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
                <h3 class="box-title">Direccion</h3>



                <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($direccion as $direccion): ?>
            <tr>
                <td style="width: 3%"><?= $this->Number->format($direccion->id) ?></td>
                <td style="width: 10%"><?= h($direccion->calle) ?></td>
                <td style="width: 3%"><?= $this->Number->format($direccion->No) ?></td>
                <td style="width: 3%"><?= $this->Number->format($direccion->Cp) ?></td>

                <td style="width: 5%"><?= $direccion->colonia_id ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('View'), ['action' => 'view', $direccion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direccion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?>
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
