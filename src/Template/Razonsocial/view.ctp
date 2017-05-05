<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar razon social'), ['action' => 'edit', $razonsocial->idRazonSocial]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar razon social'), ['action' => 'delete', $razonsocial->idRazonSocial], ['confirm' => __('Are you sure you want to delete # {0}?', $razonsocial->idRazonSocial)]) ?> </li>
        <li><?= $this->Html->link(__('Listado de razon social'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva razon social'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="razonsocial view large-10 medium-8 columns content">
    <h3><?= h($razonsocial->idRazonSocial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Razon Social') ?></th>
            <td><?= $this->Number->format($razonsocial->idRazonSocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre de Razon Social') ?></th>
            <td><?= h($razonsocial->nombreRazon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($razonsocial->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion IdDireccion') ?></th>
            <td><?= $this->Number->format($razonsocial->Direccion_idDireccion) ?></td>
        </tr>
    </table>
</div>
