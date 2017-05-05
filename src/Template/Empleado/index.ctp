<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo empleado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empleado index large-9 medium-8 columns content">
    <h3><?= __('Empleado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Puesto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Salario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ConsultorioDental_idConsultorioDental') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuario_idUsuario') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleado as $empleado): ?>
            <tr>
                <td><?= h($empleado->Puesto) ?></td>
                <td><?= $this->Number->format($empleado->Salario) ?></td>
                <td><?= $this->Number->format($empleado->ConsultorioDental_idConsultorioDental) ?></td>
                <td><?= $this->Number->format($empleado->Usuario_idUsuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $empleado->idempleado]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empleado->idempleado]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $empleado->idempleado], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->idempleado)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
