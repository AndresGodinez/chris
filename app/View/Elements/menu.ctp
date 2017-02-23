    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('ProductionLn', array('controller' => 'jobs', 'action' => 'index'), array('class' => 'navbar-brand' )); ?>
          

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Empresas', array('controller' => 'companies', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nueva Empresa', array('controller' => 'companies', 'action' => 'add')) ?></li>
              </ul>
            </li>

            <?php //if($current_user['role'] == 'admin'): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Usuarios', array('controller' => 'users', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <?php //endif; ?>

            

            <?php //if($current_user['role'] == 'admin'): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departamentos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Departamentos', array('controller' => 'departaments', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Departamento', array('controller' => 'departaments', 'action' => 'add')) ?></li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link('Lista Puestos', array('controller'=>'jobs','action'=>'index'))?></li>
                 <li><?php echo $this->Html->link('Nuevo Puesto', array('controller'=>'jobs','action'=>'add'))?></li>
                <li class="divider"></li> <!-- divider -->
                <li><?php echo $this->Html->link('Estados de trabajo', array('controller'=>'statuses','action'=>'index'))?></li>
                 <li><?php echo $this->Html->link('Nuevo estado de trabajo', array('controller'=>'statuses','action'=>'add'))?></li>

              </ul>
            </li>
            <?php //endif; ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Generos', array('controller' => 'genders', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Genero', array('controller' => 'genders', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Roles', array('controller' => 'roles', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Rol', array('controller' => 'roles', 'action' => 'add')) ?></li> 
                 <li><?php echo $this->Html->link('Modos Empresa', array('controller' => 'modes', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Modo Empresa', array('controller' => 'modes', 'action' => 'add')) ?></li> 
                <li><?php // busqueda echo $this->Html->link('Buscar Platillo', array('controller' => 'platillos', 'action' => 'search')) ?></li>
                <li class="divider"></li>
                <li class="dropdown-header">Categorías</li>
                <li><?php echo $this->Html->link('Lista Categorías', array('controller' => 'categoria_platillos', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nueva Categoría', array('controller' => 'categoria_platillos', 'action' => 'add')) ?></li>                   
              </ul>
            </li>


            
            <?php //if($current_user['role'] == 'admin'): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabajos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Trabajos', array('controller' => 'works', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Trabajo', array('controller' => 'works', 'action' => 'add')) ?></li>
                <li class="divider"></li>

              </ul>
            </li>
            <?php //endif; ?>
          </ul>
          
          <?php echo $this->Form->create('Platillo', array('type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => array('controller' => 'platillos', 'action' => 'search'))); ?>
          <div class="form-group">
              <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar platillo...')); ?>
          </div>
          <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
          <?php echo $this->Form->end(); ?>
          
          <?php //echo $this->Html->link('Pedidos', array('controller' => 'pedidos', 'action' => 'view'), array('class' => 'btn btn-success navbar-btn') ); ?>
          
            <ul class="nav navbar-nav navbar-right">
              <li>
                <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?>
              </li>
            </ul>          
          
        </div><!--/.nav-collapse -->
      </div>
    </div>