<?php
/**
 * Load all mu-plugins
 */

require_once __DIR__ . '/asset-loader/asset-loader.php';

if ( JBR_IS_LOCAL ) {
	require_once __DIR__ . '/query-monitor/query-monitor.php';
}
