<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar cita'), ['action' => 'edit', $citum->idCita]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar cita'), ['action' => 'delete', $citum->idCita], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->idCita)]) ?> </li>
        <li><?= $this->Html->link(__('Citas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Agendar nueva cita'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cita view large-9 medium-8 columns content">
    <h3><?= h($citum->idCita) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($citum->idCita) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($citum->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id del paciente') ?></th>
            <td><?= $this->Number->format($citum->Paciente_idPaciente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id del empleado') ?></th>
            <td><?= $this->Number->format($citum->empleado_idempleado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de Consultorio dental') ?></th>
            <td><?= $this->Number->format($citum->empleado_ConsultorioDental_idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de Catalogode servicios') ?></th>
            <td><?= $this->Number->format($citum->CatalogoServicios_idCatalogoServicios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de pago') ?></th>
            <td><?= $this->Number->format($citum->Pago_idPago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de expediente') ?></th>
            <td><?= $this->Number->format($citum->Expediente_idExpediente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora de Inicio') ?></th>
            <td><?= h($citum->horaInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora de Termino') ?></th>
            <td><?= h($citum->horaTermino) ?></td>
        </tr>
    </table>
</div>
