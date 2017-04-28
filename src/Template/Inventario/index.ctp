<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inventario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventario index large-9 medium-8 columns content">
    <h3><?= __('Inventario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idInventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreItem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcionItem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaDeCaducidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Categoria_idCategoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ConsultorioDental_idConsultorioDental') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventario as $inventario): ?>
            <tr>
                <td><?= $this->Number->format($inventario->idInventario) ?></td>
                <td><?= h($inventario->nombreItem) ?></td>
                <td><?= h($inventario->descripcionItem) ?></td>
                <td><?= $this->Number->format($inventario->stock) ?></td>
                <td><?= h($inventario->fechaDeCaducidad) ?></td>
                <td><?= $this->Number->format($inventario->Categoria_idCategoria) ?></td>
                <td><?= $this->Number->format($inventario->ConsultorioDental_idConsultorioDental) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inventario->idInventario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventario->idInventario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventario->idInventario], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]) ?>
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
