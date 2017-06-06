<?php

if ( ! defined( 'ABSPATH' ) )
	exit;

/* Outputs the content of the Sell Your Book page */

?>
<div class="wrap">

	<div id="icon-sell" class="icon32"></div>
	<h2><?php _e( 'Sell Your Book', 'pressbooks' ); ?></h2>

	<div class="sell-your-book-copy">
		<!-- BookBaby -->
		<p><?php
		printf( __( 'Would you like to get your book into ebook stores? MobiApp121 <a href="%s" target="_blank">Publishing</a>, can help you. ', 'pressbooks' ), 'http://mobiapp121.com/publishing/getstarted' );
		_e( 'For a flat fee starting at &#8364;99 (with 100% royalties going to you), MobiApp121 will Publish your book for you, including Free ISBN numbers, to the Kindle Store, Barnes & Noble, Apple\'s iBook store, and Kobo. Ask about our other Publishing and Design services too!', 'pressbooks' );
		?></p>
		<a href="http://mobiapp121.com/publishing/services" class="button" target="_blank"><?php _e( 'Distribute with MobiApp121', 'pressbooks' ); ?></a>
		<p><?php _e( 'Once your books are available, you can add the links to bookstores below and we will make a Buy page on the web version of your MobiApp121 book.', 'pressbooks' ); ?></p>
	</div>

	<!-- Create the form that will be used to render our options -->
	<form method="post" action="options.php">
		<?php settings_fields( 'ecomm_settings' );
		do_settings_sections( 'ecomm_settings' ); ?>
		<?php submit_button(); ?>
	</form>

</div>