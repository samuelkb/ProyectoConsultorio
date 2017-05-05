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
                ['action' => 'delete', $paciente->idPaciente],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de pacientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paciente form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Editar paciente') ?></legend>
        <?php
            echo $this->Form->control('numeroDePaciente');
            echo $this->Form->control('anotaciones');
            echo $this->Form->control('descuento');
            echo $this->Form->control('Usuario_idUsuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
