<?php

/**
 * @file
 * This is the template file for compound objects.
 *
 * @TODO: needs documentation about file and variables
 * $parent_label - Title of compound object
 * $child_count - Count of objects in compound object
 * $parent_url - URL to manage compound object
 * $previous_pid - PID of previous object in sequence or blank if on first
 * $next_pid - PID of next object in sequence or blank if on last
 * $siblings - array of PIDs of sibling objects in compound
 * $themed_siblings - array of siblings of model
 *    array(
 *      'pid' => PID of sibling,
 *      'label' => label of sibling,
 *      'TN' => URL of thumbnail or default folder if no datastream,
 *      'class' => array of classes for this sibling,
 *    )
 */
?>
 <div class="islandora-compound-prev-next">
 <span class="islandora-compound-title"><?php
  print t('Part of: @parent (@count @objects)', [
    '@parent' => $parent_label,
    '@count' => $child_count,
    '@objects' => \Drupal::translation()->formatPlural($child_count, 'object', 'objects')
  ]); 
 ?>
 <?php if ($parent_url): ?>
    <?php // @FIXME
// l() expects a Url object, created from a route name or external URI.
// print l(t('manage parent'), $parent_url);
 ?>
 <?php endif; ?>
   <?php if ($parent_tn): ?>
    <?php // @FIXME
// l() expects a Url object, created from a route name or external URI.
// print l(
//        theme_image(
//          array(
//            'path' => $parent_tn,
//            'attributes' => array(
//              'alt' => $parent_label,
//            ),
//          )
//        ),
//        'islandora/object/' . $parent_pid,
//        array('html' => TRUE)
//      );
 ?>
 <?php endif; ?>
 </span><br/>

 <?php if (!empty($previous_pid)): ?>
   <?php // @FIXME
// l() expects a Url object, created from a route name or external URI.
// print l(t('Previous'), 'islandora/object/' . $previous_pid);
 ?>
 <?php endif; ?>
 <?php if (!empty($previous_pid) && !empty($next_pid)): ?>
    |
 <?php endif;?>
 <?php if (!empty($next_pid)): ?>
   <?php // @FIXME
// l() expects a Url object, created from a route name or external URI.
// print l(t('Next'), 'islandora/object/' . $next_pid);
 ?>
 <?php endif; ?>

 <?php if (count($themed_siblings) > 0): ?>
   <?php $query_params = \Drupal\Component\Utility\UrlHelper::filterQueryParameters(); ?>
   <div class="islandora-compound-thumbs">
   <?php foreach ($themed_siblings as $sibling): ?>
     <div class="islandora-compound-thumb">
     <span class='islandora-compound-caption'><?php print $sibling['label'];?></span>
     <?php // @FIXME
// l() expects a Url object, created from a route name or external URI.
// print l(
//        theme_image(
//          array(
//            'path' => $sibling['TN'],
//            'attributes' => array(
//              'class' => $sibling['class'],
//              'title' => $sibling['label'],
//              'alt' => $sibling['label'],
//            ),
//          )
//        ),
//        'islandora/object/' . $sibling['pid'],
//        array(
//          'html' => TRUE,
//          'query' => $query_params,
//          'attributes' => array(
//            'title' => $sibling['label'],
//          )
//        )
//      );
?>
     </div>
   <?php // each themed_siblings.
   endforeach; ?>
   </div> <!-- // islandora-compound-thumbs -->
 <?php // count($themed_siblings) > 0.
 endif; ?>
 </div>
