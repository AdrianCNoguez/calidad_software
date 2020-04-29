<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jugador $jugador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jugador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jugador->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jugador'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jugador form large-9 medium-8 columns content">
    <?= $this->Form->create($jugador) ?>
    <fieldset>
        <legend><?= __('Edit Jugador') ?></legend>
        <select id="persona_id" name="persona_id">

            <option>------Seleccionar------</option>
            <?php foreach( $persona as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->nombre?></option>
            <?php endforeach; ?>
        </select>
        <?php
            echo $this->Form->control('Nacionalidad');
            echo $this->Form->control('Estatura');
            echo $this->Form->control('Peso');
            echo $this->Form->control('MovilHabil');
            echo $this->Form->control('Posicion');
            echo $this->Form->control('Perfil');
            echo $this->Form->control('Pie_Debil');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
