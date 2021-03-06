<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>