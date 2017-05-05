<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar municipio'), ['action' => 'edit', $municipio->idMunicipio]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar municipio'), ['action' => 'delete', $municipio->idMunicipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->idMunicipio)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de municipios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo municipio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipio view large-9 medium-8 columns content">
    <h3><?= h($municipio->idMunicipio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id de municipio') ?></th>
            <td><?= $this->Number->format($municipio->idMunicipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre de municipio') ?></th>
            <td><?= h($municipio->nombreMunicipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado IdEstado') ?></th>
            <td><?= $this->Number->format($municipio->Estado_idEstado) ?></td>
        </tr>
    </table>
</div>
