<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $colonia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $colonia->id],
                ['confirm' => __('¿Estas seguro de eliminar la colonia? # {0}?', $colonia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Estados'), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Municipios'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Colonias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="colonia form large-9 medium-8 columns content">
    <?= $this->Form->create($colonia) ?>
    <fieldset>
        <legend><?= __('Editar Colonia') ?></legend>

        <select id="municipio_id" name="municipio_id">

            <option>------Seleccionar------</option>
            <?php foreach( $municipio as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->municipio ?></option>
            <?php endforeach; ?>
        </select>



        <?php
            echo $this->Form->control('colonia');
          //  echo $this->Form->control('municipio_id',  ['options'=> $municipio]); //combobox
           // echo $this->Form->input('municipio_id', array('type'=>'select', 'option' =>$municipio));


        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
