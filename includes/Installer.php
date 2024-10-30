<?php

namespace Maantheme\Addons;

/**
 * Installer class
 */
class Installer {

    /**
     * Run the installer
     *
     * @return void
     */
    public function run() {
        $this->add_version();
    }

    /**
     * Add time and version on DB
     */
    public function add_version() {
        $installed = get_option( 'maan_elementor_addons_installed' );

        if ( ! $installed ) {
            update_option( 'maan_elementor_addons_installed', time() );
        }

        update_option( 'maan_elementor_addons_version', MAAN_ELEMENTOR_ADDONS_VERSION );
    }
    
}