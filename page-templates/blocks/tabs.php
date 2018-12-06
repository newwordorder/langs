<?php // TABS

if( get_row_layout() == 'tabs' ):

  $spaceBelow = get_sub_field('space_below');

  ?>

  <?php

  // check if the repeater field has rows of data
  if( have_rows('tabs') ):


    ?>


  <?php $counter = 0;?>
    <div class="container space-below--<?php echo $spaceBelow ?>" style="position:relative;margin-top:-50px;z-index:100;">

      <div class="row justify-content-center">

          <ul class="nav nav-pills" id="myTab" role="tablist">

        <?php	// loop through the rows of data
        while ( have_rows('tabs') ) : the_row();

        $title = get_sub_field('title');

        ?>

        <li class="nav-item">
            <a class="nav-link " id="tab-<?php echo $counter ?>" data-toggle="tab" href="#tab-pane-<?php echo $counter ?>" role="tab"><?php  echo $title ?></a>
        </li>


        
        <?php $counter++; // add one per row ? ?>
      <?php  endwhile; ?>

      </ul>

    </div>
  </div>

<?php else :

  // no rows found

endif;

?>

<?php

// check if the repeater field has rows of data
if( have_rows('tabs') ):


  ?>


<?php $counter = 0;?>
  <div class="container space-below--<?php echo $spaceBelow ?>">

    <div class="row justify-content-center align-items-center">

        <div class="tab-content" id="nav-tabContent">

      <?php	// loop through the rows of data
      while ( have_rows('tabs') ) : the_row();

      $title = get_sub_field('title');

      ?>

      <div class="tab-pane fade " id="tab-pane-<?php echo $counter ?>" role="tabpanel" aria-labelledby="tab-<?php echo $counter ?>">
          <h2><?php  echo $title ?></h2>
    </div>


      
      <?php $counter++; // add one per row ? ?>
    <?php  endwhile; ?>

    </div>

  </div>
</div>

<?php else :

// no rows found

endif;

?>

<script>
    jQuery(document).ready(function($) {
        $('#tab-0').addClass('active');
        $('#tab-pane-0').addClass('active show')
    });
</script>
<?php endif; ?>
