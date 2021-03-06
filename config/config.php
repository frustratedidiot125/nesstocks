<?php

return [
	'stocks_file' => 'stocks-' . date("YmdHi") . '.txt',
	'avails_file' => 'avails-' . date("YmdHi") . '.txt',
	'stores_file' => 'config/stores.txt',
	'retailers' => [
		'Target'  => [
			'checker' => 'TargetChecker',
			'sku'     => '056-02-0316',
		],
		'Walmart' => [
			'checker' => 'WalmartChecker',
			'sku'     => '190528556',
		],
		/*
		'BestBuy' => [
			'checker' => 'BestBuyChecker',
			'sku'     => '5792401',
		],
		'ToysRUs' => [
			'checker' => 'ToysRUsChecker',
			'sku'     => [590406],
		],
		*/
	],
];
