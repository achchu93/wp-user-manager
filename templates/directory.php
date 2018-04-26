<?php
/**
 * The Template for displaying the directory
 *
 * This template can be overridden by copying it to yourtheme/wpum/directory.php
 *
 * HOWEVER, on occasion WPUM will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div id="wpum-user-directory">

	<?php do_action( 'wpum_before_user_directory' ); ?>

	<?php
		WPUM()->templates
			->set_template_data( $data )
			->get_template_part( 'directory/search-form' );
		WPUM()->templates
			->set_template_data( $data )
			->get_template_part( 'directory/top-bar' );
	?>

	<?php do_action( 'wpum_after_user_directory' ); ?>

</div>