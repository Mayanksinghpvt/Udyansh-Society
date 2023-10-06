<?php
/**
 * The sidebar containing the main widget area
 *
 * @package NGO Organization
 * @subpackage ngo_organization
 */
?>

<aside id="theme-sidebar" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'ngo-organization' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>