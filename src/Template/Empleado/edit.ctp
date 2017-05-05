<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $empleado->idempleado],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->idempleado)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de empleados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="empleado form large-9 medium-8 columns content">
    <?= $this->Form->create($empleado) ?>
    <fieldset>
        <legend><?= __('Editar empleado') ?></legend>
        <?php
            echo $this->Form->control('Puesto');
            echo $this->Form->control('Salario');
            echo $this->Form->control('Usuario_idUsuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
