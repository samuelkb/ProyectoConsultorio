<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Citum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cita index large-9 medium-8 columns content">
    <h3><?= __('Cita') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCita') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horaTermino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Paciente_idPaciente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleado_idempleado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleado_ConsultorioDental_idConsultorioDental') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CatalogoServicios_idCatalogoServicios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pago_idPago') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Expediente_idExpediente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cita as $citum): ?>
            <tr>
                <td><?= $this->Number->format($citum->idCita) ?></td>
                <td><?= h($citum->horaInicio) ?></td>
                <td><?= h($citum->horaTermino) ?></td>
                <td><?= h($citum->observaciones) ?></td>
                <td><?= $this->Number->format($citum->Paciente_idPaciente) ?></td>
                <td><?= $this->Number->format($citum->empleado_idempleado) ?></td>
                <td><?= $this->Number->format($citum->empleado_ConsultorioDental_idConsultorioDental) ?></td>
                <td><?= $this->Number->format($citum->CatalogoServicios_idCatalogoServicios) ?></td>
                <td><?= $this->Number->format($citum->Pago_idPago) ?></td>
                <td><?= $this->Number->format($citum->Expediente_idExpediente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $citum->idCita]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $citum->idCita]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $citum->idCita], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->idCita)]) ?>
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
