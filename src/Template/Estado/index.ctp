<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estado index large-9 medium-8 columns content">
    <h3><?= __('Estado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idEstado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreEstado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estado as $estado): ?>
            <tr>
                <td><?= $this->Number->format($estado->idEstado) ?></td>
                <td><?= h($estado->nombreEstado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estado->idEstado]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estado->idEstado]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estado->idEstado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]) ?>
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
