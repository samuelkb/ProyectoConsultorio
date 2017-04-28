<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->idPaciente]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->idPaciente], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]) ?> </li>
        <li><?= $this->Html->link(__('List Paciente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paciente view large-9 medium-8 columns content">
    <h3><?= h($paciente->idPaciente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anotaciones') ?></th>
            <td><?= h($paciente->anotaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPaciente') ?></th>
            <td><?= $this->Number->format($paciente->idPaciente) ?></td>
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
