<?php
function appilo_let_to_num( $size ) {
  $l   = substr( $size, -1 );
  $ret = substr( $size, 0, -1 );
  switch ( strtoupper( $l ) ) {
    case 'P':
      $ret *= 1024;
    case 'T':
      $ret *= 1024;
    case 'G':
      $ret *= 1024;
    case 'M':
      $ret *= 1024;
    case 'K':
      $ret *= 1024;
  }
  return $ret;
}
$ssl_check = 'https' === substr( get_home_url(), 0, 5 );
$green_mark = '<mark class="green"><span class="dashicons dashicons-yes"></span></mark>';

$appilotheme = wp_get_theme();

$plugins_counts = (array) get_option( 'active_plugins', array() );

if ( is_multisite() ) {
	$network_activated_plugins = array_keys( get_site_option( 'active_sitewide_plugins', array() ) );
	$plugins_counts            = array_merge( $plugins_counts, $network_activated_plugins );
}
?>

<div class="wrap about-wrap appilo-wrap">
    <h1><?php _e( 'Welcome to Appilo', 'appilo' ); ?></h1>

    <div class="about-text"><?php echo esc_html__( 'appilo theme is now installed and ready to use!', 'appilo' ); ?></div>
<div class="appilo-badge">
    
    <p><?php echo esc_html($appilotheme->get( 'Version' )); ?></p>
</div>
    <h2 class="nav-tab-wrapper">
        <?php
        printf( '<a href="#" class="nav-tab nav-tab-active">%s</a>', __( 'Welcome', 'appilo' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'customize.php' ), __( 'Theme Options', 'appilo' ) );

       
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=appilo-demo-importer' ), __( 'Demo Import', 'appilo' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=appilo-documentations' ), __( 'Documentations', 'appilo' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=appilo-license' ), __( 'License', 'appilo' ) );
        ?>
    </h2>
    
   
    <div class="appilo-section nav-tab-active" id="welcome">
        <p class="about-description">
            <?php printf( __( 'Before you get started, please be sure to always check out documentation Which Included In the theme folder or from <a href="https://themexriver.helpviser.com/" target="_blank">Website</a>. We outline all kinds of good information and provide you with all the details you need to use appilo.', 'appilo')); ?>
        </p>
        <p class="about-description">
            <?php printf( __( 'If you are unable to find your answer in our documentation, please contact us via  <a href="https://themexriver.helpviser.com/" target="_blank">submit a ticket</a> with your purchase code, site CPanel, and admin login info.', 'appilo'), 'mailto:support@themexriver.com'); ?>
        </p>
        <p class="about-description">
            <?php printf( __( 'We are very happy to help you and you will get the reply from us  faster than you expected.', 'appilo'), 'https://themexriver.helpviser.com/'); ?>
        </p>
        
        <p class="about-description">
            <?php printf( __( 'Note: Please Install All Required Plugins Before Install Demo !', 'appilo'), 'https://themexriver.com/appilo/'); ?>
        </p>
    </div>
    <div class="appilo-thanks">
        <p class="description">Thank you for using <strong>appilo</strong> theme! Powered by <a href="https://themexriver.com" target="_blank">ThemeXriver</a></p>
    </div>
    
    
    <div class="appilo-system-stats">
        <h3>System Status</h3>

    <table class="system-status-table">
        <tbody>
                     <tr>
							<td><?php esc_html_e( 'WP Version', 'appilo' ); ?></td>
							<td>
                                <?php bloginfo('version'); ?> <mark class="green">- We recommend using WordPress version 5.1 or above for greater performance and security.</mark>
                            </td>
						</tr>
						
						<tr>
							<td><?php esc_html_e( 'Language', 'appilo' ); ?></td>
							<td><?php echo get_locale() ?></td>
						</tr>
						
						<tr>
							<td><?php esc_html_e( 'WP Memory Limit', 'appilo' ); ?></td>
							<td><?php
								$memory = appilo_let_to_num( WP_MEMORY_LIMIT );

								if ( $memory < 100663296 ) {
									echo '<mark class="error">' . sprintf(esc_html__('%s - We recommend setting memory to at least 96MB. %s.','appilo'), size_format( $memory ), '<a href="' . esc_url('//www.wpbeginner.com/wp-tutorials/fix-wordpress-memory-exhausted-error-increase-php-memory/') . '" target="_blank">'.esc_html__('More info','appilo').'</a>') . '</mark>';
								} else {
									echo '<mark class="green">' . size_format( $memory ) . '</mark>';
								}
							?></td>
						</tr>
						
						
						
						<tr>
							<td><?php esc_html_e( 'PHP Max Input Vars', 'appilo' ); ?></td>
							<td><?php
								$max_input = ini_get('max_input_vars');
								if ( $max_input < 3000 ) {
									echo '<mark class="error">' . sprintf( wp_kses(__( '%s - We recommend setting PHP max_input_vars to at least 3000. See: <a href="%s" target="_blank">Increasing the PHP max vars limit</a>', 'appilo' ), array( 'a' => array( 'href' => array(),'target' => array() ) ) ), $max_input, '//teconce.com/support/2018/12/05/increasing-max-input-vars/' ) . '</mark>';
								} else {
									echo '<mark class="green">' . $max_input . '</mark>';
								}
							?></td>
						</tr>
						<tr>
						  <td>
						     <?php esc_html_e( 'PHP Version', 'appilo' ); ?>
						  </td>
						  
						  <td>
						 <?php
					
							$mayo_php = phpversion();

						if ( version_compare( $mayo_php, '7.2', '<' ) ) {
								echo sprintf( '<mark class="error"> %s </mark> - We recommend using PHP version 7.2 or above for greater performance and security.', esc_html( $mayo_php ), '' );
							} else {
								echo '<mark class="green">' . esc_html( $mayo_php ) . '</mark>';
							}
						
					?>
						</td>
						</tr>
						
						<tr>
						    <td>
						     <?php esc_html_e( 'Server Info', 'appilo' ); ?>
						  </td>
						  
						  <td>
						<?php echo esc_html( $_SERVER['SERVER_SOFTWARE'] ); ?>
					     </td>
						</tr>
						
						<tr>
						    <td>
						        <?php esc_html_e( 'Secure Connection(HTTPS)', 'appilo' ); ?>
						    </td>
						    <td>
						        <?php 
						        echo esc_attr($ssl_check) ? $green_mark : '<mark class="error">Your site is not using secure connection (HTTPS).</mark>'; ?>
						    </td>
						</tr>
						
				</tbody>		
    </table>
        </div>
        
         <div class="appilo-system-stats">
        <h3>Theme Information</h3>

    <table class="system-status-table">
        <tbody>
            <tr>
                <td><?php esc_html_e( 'Theme Name', 'appilo' ); ?></td>
                <td><?php echo wp_get_theme(); ?></td>
            </tr>
            
             <tr>
                <td><?php esc_html_e( 'Author Name', 'appilo' ); ?></td>
                <td><?php echo esc_html($appilotheme->get( 'Author' )); ?></td>
            </tr>
            
            <tr>
					<td><?php esc_html_e( 'Current Version', 'appilo' ); ?></td>
					<td><?php echo esc_html($appilotheme->get( 'Version' )); ?></td>
				</tr>
				
				  <tr>
					<td><?php esc_html_e( 'Text Domain', 'appilo' ); ?></td>
					<td><?php echo esc_html($appilotheme->get( 'TextDomain' )); ?></td>
				</tr>
				
				<tr>
				    <td><?php esc_html_e( 'Child Theme', 'appilo' ); ?></td>
					<td><?php echo is_child_theme() ? $green_mark : 'No'; ?></td>
				</tr>
				</tbody>
				</table>
	</div>
	
        <div class="appilo-system-stats">
            <h3>Active Plugins (<?php echo count( $plugins_counts ); ?>)</h3>
        <table class="system-status-table">
			<tbody>
			<?php
			foreach ( $plugins_counts as $plugin ) {
	
				$plugin_info    = @get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );
				$dirname        = dirname( $plugin );
				$version_string = '';
				$network_string = '';
	
				if ( ! empty( $plugin_info['Name'] ) ) {
	
					// Link the plugin name to the plugin url if available.
					$plugin_name = esc_html( $plugin_info['Name'] );
	
					if ( ! empty( $plugin_info['PluginURI'] ) ) {
						$plugin_name = '<a href="' . esc_url( $plugin_info['PluginURI'] ) . '" target="_blank">' . $plugin_name . '</a>';
					}
	
					?>
					<tr>
					    <?php
					    $allowed_html = [
                            'a'      => [
                                'href'  => [],
                                'title' => [],
                            ],
                            'br'     => [],
                            'em'     => [],
                            'strong' => [],
                        ];
					    ?>
						<td><?php echo wp_kses($plugin_name,$allowed_html); ?></td>
						<td><?php echo sprintf( 'by %s', $plugin_info['Author'] ) . ' &ndash; ' . esc_html( $plugin_info['Version'] ) . $version_string . $network_string; ?></td>
					</tr>
					<?php
				}
			}
			?>
			</tbody>
		</table>

		</div>
</div>

