<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva categoria'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoria index large-9 medium-8 columns content">
    <h3><?= __('Categoria') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoria as $categorium): ?>
            <tr>
                <td><?= $this->Number->format($categorium->idCategoria) ?></td>
                <td><?= h($categorium->descripcionCategoria) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $categorium->idCategoria]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categorium->idCategoria]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $categorium->idCategoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->idCategoria)]) ?>
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
