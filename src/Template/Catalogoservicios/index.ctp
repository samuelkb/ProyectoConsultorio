<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo servicio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catalogoservicios index large-9 medium-8 columns content">
    <h3><?= __('Catalogo de servicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion del servicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('costo del servicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Especificaciones') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
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
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $catalogoservicio->idCatalogoServicios]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $catalogoservicio->idCatalogoServicios]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $catalogoservicio->idCatalogoServicios], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogoservicio->idCatalogoServicios)]) ?>
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
