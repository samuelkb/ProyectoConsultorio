<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
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
                <th scope="col"><?= $this->Paginator->sort('ConsultorioDental_idConsultorioDental') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuario_idUsuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paciente as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->idPaciente) ?></td>
                <td><?= h($paciente->anotaciones) ?></td>
                <td><?= $this->Number->format($paciente->descuento) ?></td>
                <td><?= $this->Number->format($paciente->ConsultorioDental_idConsultorioDental) ?></td>
                <td><?= $this->Number->format($paciente->Usuario_idUsuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->idPaciente]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->idPaciente]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->idPaciente], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->idPaciente)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
