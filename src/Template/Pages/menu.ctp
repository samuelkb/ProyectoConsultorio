<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Consultorio dental'), ['controller' => 'consultoriodental', 'action' => 'view/1']) ?> </li>
        <li><?= $this->Html->link(__('Citas'), ['controller' => 'Cita', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Inventario'), ['controller' => 'inventario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Pacientes'), ['controller' => 'paciente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Empleados'), ['controller' => 'empleado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Pagos'), ['controller' => 'Paciente', 'action' => 'index']) ?> </li>
        <li><ul>
        <li><?= $this->Html->link(__('Facturas'), ['controller' => 'Factura', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Recibos'), ['controller' => 'Recibo', 'action' => 'index']) ?> </li>
        </ul></li>
        <li><?= $this->Html->link(__('Añadir servicio'), ['controller' => 'catalogoservicios', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="consultoriodental view large-9 medium-8 columns content">
    <h3>Bienvenido</h3>
        <div class="related">
        <h4>Avisos</h4>
        </div>
</div>
