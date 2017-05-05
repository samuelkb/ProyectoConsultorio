<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de citas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cita form large-9 medium-8 columns content">
    <?= $this->Form->create($citum) ?>
    <fieldset>
        <legend><?= __('Agendar cita') ?></legend>
        <?php
            echo $this->Form->control('horaInicio');
            echo $this->Form->control('horaTermino');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('Paciente_idPaciente', array('type' => 'select', 'options' => $paciente));
            echo $this->Form->control('empleado_idempleado', array('type' => 'select', 'options' => $empleado));
            echo $this->Form->control('empleado_ConsultorioDental_idConsultorioDental', array('type' => 'select', 'options' => $consultoriodental));
            echo $this->Form->control('CatalogoServicios_idCatalogoServicios', array('type' => 'select', 'options' => $catalogoservicios));
            echo $this->Form->control('Pago_idPago');
            echo $this->Form->control('Expediente_idExpediente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
