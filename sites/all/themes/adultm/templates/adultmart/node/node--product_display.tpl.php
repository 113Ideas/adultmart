<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix  adult-content"<?php print $attributes; ?>>

      <?php print render($content['title']); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        
      <?php print render($content['field_image2']); ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
             
      <p><?php print render($content['body']); ?></p>
      <?php print render($content['field_product']); ?>
    </div>
</div>
</div>

