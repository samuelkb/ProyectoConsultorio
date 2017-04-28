<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Codigopostal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigopostal index large-9 medium-8 columns content">
    <h3><?= __('Codigopostal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCodigoPostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($codigopostal as $codigopostal): ?>
            <tr>
                <td><?= $this->Number->format($codigopostal->idCodigoPostal) ?></td>
                <td><?= h($codigopostal->ciudad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $codigopostal->idCodigoPostal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $codigopostal->idCodigoPostal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $codigopostal->idCodigoPostal], ['confirm' => __('Are you sure you want to delete # {0}?', $codigopostal->idCodigoPostal)]) ?>
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
