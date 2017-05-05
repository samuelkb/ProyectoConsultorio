<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar empleado'), ['action' => 'edit', $empleado->idempleado]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar empleado'), ['action' => 'delete', $empleado->idempleado], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->idempleado)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de empleados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo empleado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empleado view large-9 medium-8 columns content">
    <h3><?= h($empleado->idempleado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Puesto') ?></th>
            <td><?= h($empleado->Puesto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idempleado') ?></th>
            <td><?= $this->Number->format($empleado->idempleado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario') ?></th>
            <td><?= $this->Number->format($empleado->Salario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ConsultorioDental IdConsultorioDental') ?></th>
            <td><?= $this->Number->format($empleado->ConsultorioDental_idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario IdUsuario') ?></th>
            <td><?= $this->Number->format($empleado->Usuario_idUsuario) ?></td>
        </tr>
    </table>
</div>
