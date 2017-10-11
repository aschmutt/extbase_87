#
# Table structure for table tx_asproduct_domain_model_product
#
CREATE TABLE tx_asproduct_domain_model_product (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	artikelnummer int(11) DEFAULT '0' NOT NULL,
	serie varchar(255) DEFAULT '' NOT NULL,
	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	laenge int(11) DEFAULT '0' NOT NULL,
	breite int(11) DEFAULT '0' NOT NULL,
	hoehe int(11) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY language (l10n_parent,sys_language_uid)

);
