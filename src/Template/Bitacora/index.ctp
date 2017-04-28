<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo registro a bitacora'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bitacora index large-9 medium-8 columns content">
    <h3><?= __('Bitacora') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servidor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobre la tabla') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
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
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $bitacora->idBitacora]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bitacora->idBitacora]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $bitacora->idBitacora], ['confirm' => __('Are you sure you want to delete # {0}?', $bitacora->idBitacora)]) ?>
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
