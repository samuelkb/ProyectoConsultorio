<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar paciente'), ['action' => 'edit', $paciente->idPaciente]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar paciente'), ['action' => 'delete', $paciente->idPaciente], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo paciente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paciente view large-9 medium-8 columns content">
    <h3><?= h($paciente->idPaciente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdPaciente') ?></th>
            <td><?= $this->Number->format($paciente->idPaciente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anotaciones') ?></th>
            <td><?= h($paciente->anotaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descuento') ?></th>
            <td><?= $this->Number->format($paciente->descuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ConsultorioDental IdConsultorioDental') ?></th>
            <td><?= $this->Number->format($paciente->ConsultorioDental_idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario IdUsuario') ?></th>
            <td><?= $this->Number->format($paciente->Usuario_idUsuario) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('NumeroDePaciente') ?></h4>
        <?= $this->Text->autoParagraph(h($paciente->numeroDePaciente)); ?>
    </div>
</div>
