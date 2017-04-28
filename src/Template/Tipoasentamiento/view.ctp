<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipoasentamiento'), ['action' => 'edit', $tipoasentamiento->idTipoAsentamiento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipoasentamiento'), ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipoasentamiento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoasentamiento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoasentamiento view large-9 medium-8 columns content">
    <h3><?= h($tipoasentamiento->idTipoAsentamiento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DescripciónAsentamiento') ?></th>
            <td><?= h($tipoasentamiento->descripciónAsentamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdTipoAsentamiento') ?></th>
            <td><?= $this->Number->format($tipoasentamiento->idTipoAsentamiento) ?></td>
        </tr>
    </table>
</div>
