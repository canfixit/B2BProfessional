<?php
$oInstaller = $this;
$oInstaller->startSetup();
$oInstaller->run("
CREATE TABLE IF NOT EXISTS {$this->getTable('sales_quote_b2bprofessional')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `quote_id` int(11) unsigned NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS {$this->getTable('sales_order_b2bprofessional')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `order_id` int(11) unsigned NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$oInstaller->endSetup();
