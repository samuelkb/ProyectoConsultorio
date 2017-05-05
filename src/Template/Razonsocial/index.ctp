<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva razon social'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="razonsocial index large-10 medium-8 columns content">
    <h3><?= __('Razon social') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idRazonSocial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreRazon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion_idDireccion') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($razonsocial as $razonsocial): ?>
            <tr>
                <td><?= $this->Number->format($razonsocial->idRazonSocial) ?></td>
                <td><?= h($razonsocial->nombreRazon) ?></td>
                <td><?= h($razonsocial->descripcion) ?></td>
                <td><?= $this->Number->format($razonsocial->Direccion_idDireccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $razonsocial->idRazonSocial]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $razonsocial->idRazonSocial]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $razonsocial->idRazonSocial], ['confirm' => __('Are you sure you want to delete # {0}?', $razonsocial->idRazonSocial)]) ?>
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
