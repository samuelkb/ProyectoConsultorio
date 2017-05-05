<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva cita'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cita index large-10 medium-8 columns content">
    <h3><?= __('Cita') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Hora de inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hora de termino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id del paciente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id del empleado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id Catalogo de servicios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id de pago') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cita as $citum): ?>
            <tr>
                <td><?= h($citum->horaInicio) ?></td>
                <td><?= h($citum->horaTermino) ?></td>
                <td><?= h($citum->observaciones) ?></td>
                <td><?= $this->Number->format($citum->Paciente_idPaciente) ?></td>
                <td><?= $this->Number->format($citum->empleado_idempleado) ?></td>
                <td><?= $this->Number->format($citum->CatalogoServicios_idCatalogoServicios) ?></td>
                <td><?= $this->Number->format($citum->Pago_idPago) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $citum->idCita]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $citum->idCita]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $citum->idCita], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->idCita)]) ?>
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
