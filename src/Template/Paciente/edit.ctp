<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paciente->idPaciente],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paciente'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paciente form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Edit Paciente') ?></legend>
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
