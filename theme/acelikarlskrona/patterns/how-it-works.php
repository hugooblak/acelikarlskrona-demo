<?php
/**
 * Title: Så går det till
 * Slug: acelikarlskrona/how-it-works
 * Categories: acelikarlskrona-sections
 * Description: Fyra steg från första samtalet till garantin. Numrerade, inga ikoner.
 */
$steps = array(
	array( 'Du hör av dig', 'Ring eller fyll i formuläret. Vi svarar samma dag, oftast inom någon timme.' ),
	array( 'Vi kommer ut och tittar', 'Kostnadsfritt. Vi går upp på taket, fotar och mäter. Tar ungefär en timme.' ),
	array( 'Du får ett fast pris', 'Skriftligt, uppdelat på material och arbete, med ROT-avdraget redan avdraget. Gäller i 30 dagar.' ),
	array( 'Vi lägger taket', 'Vi städar efter oss varje dag. När allt är klart går vi igenom jobbet tillsammans och du får garantin skriftligt.' ),
);
?>
<!-- wp:group {"align":"full","className":"ac-sec-steps","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull ac-sec-steps" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"align":"wide","fontSize":"xx-large"} -->
<h2 class="wp-block-heading alignwide has-xx-large-font-size">Så går det till</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"ac-steps","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide ac-steps" style="margin-top:var(--wp--preset--spacing--50)"><?php
$n = 0;
foreach ( $steps as $s ) :
	$n++;
	?><!-- wp:group {"className":"ac-step","layout":{"type":"default"}} -->
<div class="wp-block-group ac-step"><!-- wp:paragraph {"className":"ac-step-n"} -->
<p class="ac-step-n"><?php echo esc_html( (string) $n ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $s[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"small"} -->
<p class="has-ink-soft-color has-text-color has-small-font-size"><?php echo esc_html( $s[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
