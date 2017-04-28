<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Razonsocial'), ['action' => 'edit', $razonsocial->idRazonSocial]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Razonsocial'), ['action' => 'delete', $razonsocial->idRazonSocial], ['confirm' => __('Are you sure you want to delete # {0}?', $razonsocial->idRazonSocial)]) ?> </li>
        <li><?= $this->Html->link(__('List Razonsocial'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Razonsocial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="razonsocial view large-9 medium-8 columns content">
    <h3><?= h($razonsocial->idRazonSocial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreRazon') ?></th>
            <td><?= h($razonsocial->nombreRazon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($razonsocial->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdRazonSocial') ?></th>
            <td><?= $this->Number->format($razonsocial->idRazonSocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion IdDireccion') ?></th>
            <td><?= $this->Number->format($razonsocial->Direccion_idDireccion) ?></td>
        </tr>
    </table>
</div>
