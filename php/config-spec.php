<?php

# Global configuration file for EE.

return array(

	'disabled_commands' => array(
		'file' => '<list>',
		'default' => array(),
		'desc' => '(Sub)commands to disable.',
	),

	'sites_path' => array(
		'runtime' => '=<path>',
		'file' => '<path>',
		'default' => null,
		'desc' => 'Absolute path to where all sites will be stored.',
	),

	'locale' => array(
		'runtime' => '=<locale>',
		'file'    => '<locale>',
		'default' => null,
		'desc'    => 'Locale for WordPress.',
	),

	'le-mail' => array(
		'runtime' => '=<le-mail>',
		'file'    => '<le-mail>',
		'default' => null,
		'desc'    => 'Mail-id to be used for letsencrypt.',
	),

	'env' => array(
		'runtime' => '=<env>',
		'file'    => '<env>',
		'default' => null,
		'desc'    => 'EasyEngine server environment.',
	),

	'wp-mail' => array(
		'runtime' => '=<wp-mail>',
		'file'    => '<wp-mail>',
		'default' => null,
		'desc'    => 'Default Mail-id to be used for WordPress site installation.',
	),

	'sysctl' => array(
		'runtime' => '=<true/false>',
		'file' => '<sysctl>',
		'default' => false,
		'desc' => 'Whether to add sysctl config in docker-compose.',
	),

	'ee_installer_version' => array(
		'file' => '<path>',
		'default' => null,
		'desc' => 'EE version to run.',
	),

	'color' => array(
		'runtime' => true,
		'file' => '<bool>',
		'default' => 'auto',
		'desc' => 'Whether to colorize the output.',
	),

	'debug' => array(
		'runtime' => '[=<group>]',
		'file' => '<group>',
		'default' => false,
		'desc' => 'Show all PHP errors; add verbosity to EE bootstrap.',
	),

	'quiet' => array(
		'runtime' => '',
		'file' => '<bool>',
		'default' => false,
		'desc' => 'Suppress informational messages.',
	),

);
