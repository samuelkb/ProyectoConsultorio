<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expediente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expediente index large-9 medium-8 columns content">
    <h3><?= __('Expediente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idExpediente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Paciente_idPaciente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expediente as $expediente): ?>
            <tr>
                <td><?= $this->Number->format($expediente->idExpediente) ?></td>
                <td><?= $this->Number->format($expediente->Paciente_idPaciente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expediente->idExpediente]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expediente->idExpediente]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expediente->idExpediente], ['confirm' => __('Are you sure you want to delete # {0}?', $expediente->idExpediente)]) ?>
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
