<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idUsuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuario view large-9 medium-8 columns content">
    <h3><?= h($usuario->idUsuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreUsuario') ?></th>
            <td><?= h($usuario->nombreUsuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ApellidoPaterno') ?></th>
            <td><?= h($usuario->apellidoPaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ApellidoMaterno') ?></th>
            <td><?= h($usuario->apellidoMaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario') ?></th>
            <td><?= $this->Number->format($usuario->idUsuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion IdDireccion') ?></th>
            <td><?= $this->Number->format($usuario->Direccion_idDireccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto IdContacto') ?></th>
            <td><?= $this->Number->format($usuario->Contacto_idContacto) ?></td>
        </tr>
    </table>
</div>
