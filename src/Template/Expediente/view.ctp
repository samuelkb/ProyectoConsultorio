<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expediente'), ['action' => 'edit', $expediente->idExpediente]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expediente'), ['action' => 'delete', $expediente->idExpediente], ['confirm' => __('Are you sure you want to delete # {0}?', $expediente->idExpediente)]) ?> </li>
        <li><?= $this->Html->link(__('List Expediente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expediente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expediente view large-9 medium-8 columns content">
    <h3><?= h($expediente->idExpediente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdExpediente') ?></th>
            <td><?= $this->Number->format($expediente->idExpediente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente IdPaciente') ?></th>
            <td><?= $this->Number->format($expediente->Paciente_idPaciente) ?></td>
        </tr>
    </table>
</div>
