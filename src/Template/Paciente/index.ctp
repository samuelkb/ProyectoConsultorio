<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Paciente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paciente index large-9 medium-8 columns content">
    <h3><?= __('Paciente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPaciente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anotaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descuento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuario_idUsuario') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paciente as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->idPaciente) ?></td>
                <td><?= h($paciente->anotaciones) ?></td>
                <td><?= $this->Number->format($paciente->descuento) ?></td>
                <td><?= $this->Number->format($paciente->Usuario_idUsuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $paciente->idPaciente]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paciente->idPaciente]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $paciente->idPaciente], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
