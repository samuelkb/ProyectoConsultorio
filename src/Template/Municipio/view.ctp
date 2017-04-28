<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->idMunicipio]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->idMunicipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->idMunicipio)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipio view large-9 medium-8 columns content">
    <h3><?= h($municipio->idMunicipio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreMunicipio') ?></th>
            <td><?= h($municipio->nombreMunicipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdMunicipio') ?></th>
            <td><?= $this->Number->format($municipio->idMunicipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado IdEstado') ?></th>
            <td><?= $this->Number->format($municipio->Estado_idEstado) ?></td>
        </tr>
    </table>
</div>
