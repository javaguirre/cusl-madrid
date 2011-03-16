<ul id="nav">
  <li><a href="<?php echo url_for('project')?>">Elegir proyectos</a></li>
  <li><a href="<?php echo url_for('project_jury')?>">Evaluar</a></li>
  <li><a href="#results">resultados</a></li>
  <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
</ul>