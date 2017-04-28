<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Agregar Asentamiento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asentamiento index large-10 medium-7 columns content">
    <h3><?= __('Asentamiento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre del asentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id Tipo de asentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Codigo postal') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asentamiento as $asentamiento): ?>
            <tr>
                <td><?= $this->Number->format($asentamiento->idAsentamiento) ?></td>
                <td><?= h($asentamiento->nombreAsentamiento) ?></td>
                <td><?= $this->Number->format($asentamiento->TipoAsentamiento_idTipoAsentamiento) ?></td>
                <td><?= $this->Number->format($asentamiento->CodigoPostal_idCodigoPostal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asentamiento->idAsentamiento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asentamiento->idAsentamiento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asentamiento->idAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $asentamiento->idAsentamiento)]) ?>
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
