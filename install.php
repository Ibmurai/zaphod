#!/usr/bin/php
<?php
set_time_limit(0);

if (!is_dir($libPath = dirname(__FILE__) . '/lib')) {
	mkdir($libPath, 0777, true);
}

$libs = array(
	array(
		'lib' => 'frood',
		'url' => 'http://github.com/Ibmurai/frood.git',
		'ver' => 'origin/master'
	),
	array(
		'lib' => 'twig',
		'url' => 'http://github.com/fabpot/Twig.git',
		'ver' => 'origin/master'
	),
);

foreach ($libs as $lib) {
	$installPath = "$libPath/{$lib['lib']}";

	if (!is_dir($installPath)) {
		echo " > Cloning {$lib['lib']}, version {$lib['ver']}\n";

		system('git clone ' . escapeshellarg($lib['url']) . ' ' . escapeshellarg($installPath));
	}

	echo " > Fetching {$lib['lib']}, version {$lib['ver']}\n";

	system('cd ' . escapeshellarg($installPath) . ' && git fetch origin && git reset --hard ' . escapeshellarg($lib['ver']));
}
