<?php
/*
 * Virtina
 * @package    Virtina_ProductSlider
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
	$installer = $this;
	$installer->startSetup();
	if(in_array($this->getTable('permission_block'),$installer->getConnection()->listTables())){
		$installer->run("INSERT INTO {$this->getTable('permission_block')} (block_name,is_allowed) VALUES ('productslider/productslider','1');");
	}
		
	$installer->endSetup();
