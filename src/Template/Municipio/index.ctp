<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo municipio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipio index large-9 medium-8 columns content">
    <h3><?= __('Municipio') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idMunicipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreMunicipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado_idEstado') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipio as $municipio): ?>
            <tr>
                <td><?= $this->Number->format($municipio->idMunicipio) ?></td>
                <td><?= h($municipio->nombreMunicipio) ?></td>
                <td><?= $this->Number->format($municipio->Estado_idEstado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $municipio->idMunicipio]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $municipio->idMunicipio]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $municipio->idMunicipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->idMunicipio)]) ?>
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
