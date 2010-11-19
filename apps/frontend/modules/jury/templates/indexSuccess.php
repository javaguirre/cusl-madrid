<h1>Jurys List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jurys as $jury): ?>
    <tr>
      <td><?php echo $jury->getName() ?></td>
      <td><?php echo $jury->getDescription(ESC_RAW) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>