<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Catalogoservicio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catalogoservicios index large-9 medium-8 columns content">
    <h3><?= __('Catalogoservicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCatalogoServicios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcionServicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('costoServicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Especificaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catalogoservicios as $catalogoservicio): ?>
            <tr>
                <td><?= $this->Number->format($catalogoservicio->idCatalogoServicios) ?></td>
                <td><?= h($catalogoservicio->descripcionServicio) ?></td>
                <td><?= $this->Number->format($catalogoservicio->costoServicio) ?></td>
                <td><?= h($catalogoservicio->Especificaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catalogoservicio->idCatalogoServicios]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catalogoservicio->idCatalogoServicios]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catalogoservicio->idCatalogoServicios], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogoservicio->idCatalogoServicios)]) ?>
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
