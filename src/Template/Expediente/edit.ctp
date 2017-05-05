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
                ['action' => 'delete', $expediente->idExpediente],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expediente->idExpediente)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de expedientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expediente form large-9 medium-8 columns content">
    <?= $this->Form->create($expediente) ?>
    <fieldset>
        <legend><?= __('Editar expediente') ?></legend>
        <?php
            echo $this->Form->control('Paciente_idPaciente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
