<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Citum'), ['action' => 'edit', $citum->idCita]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Citum'), ['action' => 'delete', $citum->idCita], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->idCita)]) ?> </li>
        <li><?= $this->Html->link(__('List Cita'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Citum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cita view large-9 medium-8 columns content">
    <h3><?= h($citum->idCita) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($citum->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCita') ?></th>
            <td><?= $this->Number->format($citum->idCita) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente IdPaciente') ?></th>
            <td><?= $this->Number->format($citum->Paciente_idPaciente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado Idempleado') ?></th>
            <td><?= $this->Number->format($citum->empleado_idempleado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado ConsultorioDental IdConsultorioDental') ?></th>
            <td><?= $this->Number->format($citum->empleado_ConsultorioDental_idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CatalogoServicios IdCatalogoServicios') ?></th>
            <td><?= $this->Number->format($citum->CatalogoServicios_idCatalogoServicios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pago IdPago') ?></th>
            <td><?= $this->Number->format($citum->Pago_idPago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expediente IdExpediente') ?></th>
            <td><?= $this->Number->format($citum->Expediente_idExpediente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HoraInicio') ?></th>
            <td><?= h($citum->horaInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HoraTermino') ?></th>
            <td><?= h($citum->horaTermino) ?></td>
        </tr>
    </table>
</div>
