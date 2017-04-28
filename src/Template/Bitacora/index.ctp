<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bitacora'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bitacora index large-9 medium-8 columns content">
    <h3><?= __('Bitacora') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idBitacora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servidor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tabla') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bitacora as $bitacora): ?>
            <tr>
                <td><?= $this->Number->format($bitacora->idBitacora) ?></td>
                <td><?= h($bitacora->operacion) ?></td>
                <td><?= h($bitacora->usuario) ?></td>
                <td><?= h($bitacora->servidor) ?></td>
                <td><?= h($bitacora->modificado) ?></td>
                <td><?= h($bitacora->tabla) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bitacora->idBitacora]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bitacora->idBitacora]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bitacora->idBitacora], ['confirm' => __('Are you sure you want to delete # {0}?', $bitacora->idBitacora)]) ?>
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
