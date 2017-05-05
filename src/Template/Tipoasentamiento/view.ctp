<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar tipo de asentamiento'), ['action' => 'edit', $tipoasentamiento->idTipoAsentamiento]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar tipo de asentamiento'), ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]) ?> </li>
        <li><?= $this->Html->link(__('Tipo de asentamiento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo tipo de asentamiento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoasentamiento view large-9 medium-8 columns content">
    <h3><?= h($tipoasentamiento->idTipoAsentamiento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Tipo de Asentamiento') ?></th>
            <td><?= $this->Number->format($tipoasentamiento->idTipoAsentamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción de asentamiento') ?></th>
            <td><?= h($tipoasentamiento->descripciónAsentamiento) ?></td>
        </tr>
    </table>
</div>
