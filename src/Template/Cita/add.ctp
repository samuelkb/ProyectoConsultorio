<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cita'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cita form large-9 medium-8 columns content">
    <?= $this->Form->create($citum) ?>
    <fieldset>
        <legend><?= __('Add Citum') ?></legend>
        <?php
            echo $this->Form->control('horaInicio');
            echo $this->Form->control('horaTermino');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('Paciente_idPaciente');
            echo $this->Form->control('empleado_idempleado');
            echo $this->Form->control('empleado_ConsultorioDental_idConsultorioDental');
            echo $this->Form->control('CatalogoServicios_idCatalogoServicios');
            echo $this->Form->control('Pago_idPago');
            echo $this->Form->control('Expediente_idExpediente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
