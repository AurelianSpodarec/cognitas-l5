<?php
    $table_heading = get_sub_field('table_heading');
    $heading_styles_in_left_column = get_sub_field('heading_styles_in_left_column');
    $table = get_sub_field('table');
?>


<section class="section">
<div class="container">

    <?php if ( $header_title = get_sub_field( 'header_title' ) ) : ?>
        <header class="common-section__header">
            <h2 class="common-section__header-title  common-section__header-title--line"><?php echo esc_html( $header_title ); ?></h2>
        </header>
    <?php endif; ?>
 
<div class="licence-table__wrap">
    <table class="licence-table">
 

    <?php if ($table['header']) : ?>
        <thead class="licence-table__thead">
          <tr>
            <?php foreach ($table['header'] as $th) : ?>
                <th colspan="<?php echo count($table['header']); ?>">
                    <div class="licence-table__thead-th-icon-wrap">
                        <span><?php echo $th['c']; ?></span>
                    </div>
                </th>
            <?php endforeach; ?>
          </tr>
        </thead>
      <?php endif; ?>

    <tbody class="licence-table__tbody">

        <?php foreach ($table['body'] as $tr) : ?>
          <tr>

            <?php foreach ($tr as $td) : ?>
              <td colspan="<?php echo count($table['header']); ?>"><?php echo $td['c']; ?></td>
            <?php endforeach; ?>

          </tr>
        <?php endforeach; ?>          
    </tbody>
    </table> 
    
            </div>
</div>
</section>