<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo consultorio dental'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoriodental index large-9 medium-8 columns content">
    <h3><?= __('Consultorio dental') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre de consultorio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id de direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id de contacto') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoriodental as $consultoriodental): ?>
            <tr>
                <td><?= $this->Number->format($consultoriodental->idConsultorioDental) ?></td>
                <td><?= h($consultoriodental->nombreConsultorio) ?></td>
                <td><?= $this->Number->format($consultoriodental->Direccion_idDireccion) ?></td>
                <td><?= $this->Number->format($consultoriodental->Contacto_idContacto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $consultoriodental->idConsultorioDental]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $consultoriodental->idConsultorioDental]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $consultoriodental->idConsultorioDental], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoriodental->idConsultorioDental)]) ?>
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
