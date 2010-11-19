<div class="node">
  <div class="content">
    <div class="cuadro"><h2>¿Qué es...?</h2>
      Es un concurso de desarrollo de software, hardware y documentación técnica libre en el que pueden participar estudiantes universitarios de primer,
      segundo y tercer ciclo; así como estudiantes no universitarios de bachillerato, grado medio y superior del ámbito estatal español.
      Para liberar los proyectos se emplea principalmente la forja de <a href="http://forja.rediris.es/">forja de RedIRIS</a>.
      Los participantes además disponen de un blog donde contarán su experiencia en el desarrollo durante el curso académico.
    </div>

<h2>¿Qué objetivos perseguimos?</h2>

<p>El objetivo principal del <strong>Concurso Universitario de Software Libre de Madrid</strong> es
fomentar la creación y contribuir a la consolidación de la comunidad del Software Libre en las universidades de la Comunidad
de Madrid y su entorno.</p>

Las fases y sus correspondientes fechas de inicio y finalización son las siguientes:
<ul>
  <li>
    <strong>Fase de inscripción</strong>:
    Durante este periodo, los participantes se preinscribirán mediante un
    formulario en la web del <a href="https://www.concursosoftwarelibre.org/inscripcion">concurso estatal</a>.
  </li>
  <li><strong>Fase de aceptación</strong>: Se comunicará a todos los participantes la lista de proyectos aceptados.</li>

  <li><strong>Fase de desarrollo</strong>: Periodo destinado al desarrollo de los proyectos aceptados.</li>

  <li>
      <strong>Fase final</strong>: Consistirá en un evento en el que los proyectos finalistas podrán exponer sus proyectos.
  </li>
</ul>

<div class="foto">


</div>
<?php if(sizeof($entrys) > 0): ?>
  <?php include_partial('entry/list', array('entrys' => $entrys)) ?>
<?php endif; ?>
<?php if($feed !== null): ?>
  <?php include_partial('home/news_global', array('feed' => $feed)) ?>
<?php endif; ?>
</div>
</div>