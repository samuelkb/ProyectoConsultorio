<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipoasentamiento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoasentamiento index large-9 medium-8 columns content">
    <h3><?= __('Tipoasentamiento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idTipoAsentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripciónAsentamiento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoasentamiento as $tipoasentamiento): ?>
            <tr>
                <td><?= $this->Number->format($tipoasentamiento->idTipoAsentamiento) ?></td>
                <td><?= h($tipoasentamiento->descripciónAsentamiento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoasentamiento->idTipoAsentamiento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoasentamiento->idTipoAsentamiento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]) ?>
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
