<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 if(isset($_GET['message'])){
	$message = $_GET['message'];
 }else{
	$message = $attributes['copy'];
 }


?>
<h1 <?php echo get_block_wrapper_attributes(); ?>>
	<?php echo $message; ?>
</h1>
