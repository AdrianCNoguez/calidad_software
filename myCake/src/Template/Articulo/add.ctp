<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tienda'), ['controller' => 'Tienda', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tienda'), ['controller' => 'Tienda', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulo form large-9 medium-8 columns content">
    <?= $this->Form->create($articulo) ?>
    <fieldset>
        <legend><?= __('Add Articulo') ?></legend>
             <select id="tienda_id" name="tienda_id">

            <option>------Seleccionar------</option>
            <?php foreach( $tienda as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->Nom_tienda ?></option>
            <?php endforeach; ?>
        </select>


        <?php
            echo $this->Form->control('nombreArt');
            echo $this->Form->control('precio');
            echo $this->Form->control('promocion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
