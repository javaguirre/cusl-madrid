<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<!-- TODO Meter el nombre del proyecto -->

<h1>Evaluación del proyecto</h1>
<div class="sf_admin_form">
  <form action="<?php echo url_for('evaluation/marks')?>">
    <table>
      <?php echo $form ?>
    </table>
  </form>
  <input type="submit" value="Evaluar" />
</div>
