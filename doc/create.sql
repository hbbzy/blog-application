#
#����Ա��
#��վ���ñ�
#���ͱ�
#���¹鵵��
#���·����
#�����ʱ�
#��ǩ��
#���۱�
#����
#
CREATE TABLE IF NOT EXISTS `hf_manage`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`name` CHAR(16) NOT NULL COMMENT '����'
	,`nick` VARCHAR(100) NOT null COMMENT '�ǳ�'
	,`email` VARCHAR(56) NOT NULL COMMENT '����'
	,`signed` VARCHAR(512) NOT NULL DEFAULT '' COMMENT 'ǩ��'
	,`pwd` CHAR(32) NOT NULL COMMENT '����'
	,`halt` CHAR(8) NOT NULL COMMENT '��������ַ���'
	,`addtime` INT(10) UNSIGNED NOT NULL COMMENT '���ʱ��'
	,`lastlogintime` INT(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '����¼ʱ��'
	,PRIMARY KEY(`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='����Ա��';

#���ͱ�
CREATE TABLE IF NOT EXISTS `hf_blog`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`title` VARCHAR(180) NOT NULL DEFAULT '' COMMENT '����'
    ,`subtitle` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '������'
	,`cid` SMALLINT UNSIGNED NOT NULL COMMENT '���·���'
	,`seotitle` VARCHAR(90) NOT NULL DEFAULT '' COMMENT 'SEO ����'
	,`seodesc` VARCHAR(512) NOT NULL DEFAULT '' COMMENT 'SEO ����'
	,`seokeywords` VARCHAR(130) NOT NULL DEFAULT '' COMMENT 'SEO �ؼ���'
	,`tags` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '��ǩ'
	,`thumb` VARCHAR(150) NOT NULL DEFAULT '' COMMENT '����ͼ'
	,`authority` ENUM('����','���ѿɼ�','˽��') DEFAULT '����' COMMENT 'Ȩ��'
	,`textlink` VARCHAR(150) NOT NULL DEFAULT '' COMMENT 'ԭ������'
	,`authorid` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '����id'
	,`goods` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '������'
	,`status` enum('�����','���ͨ��','�ܾ�','ɾ��') DEFAULT '�����' COMMENT '״̬'
	,`sort` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '����'
    ,`addtime` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '���ʱ��'
    ,`updatetime` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '�޸�ʱ��'
	,PRIMARY KEY(`id`)
	,KEY `authorid` (`authorid`)
	,KEY `search` (`title`,`seokeywords`,`thumb`,`status`,`updatetime`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='���ͱ�';

#�������ı�
CREATE TABLE IF NOT EXISTS `hf_blog_data`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`contents` text COMMENT 'pc������'
	,PRIMARY KEY `id` (`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='�������ı�';


#���·����
CREATE TABLE IF NOT EXISTS `hf_category`(
    `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
    ,`title` VARCHAR(180) NOT NULL DEFAULT '' COMMENT '������'
    ,`catalog` VARCHAR(24) NOT NULL DEFAULT '' COMMENT 'Ŀ¼�� �ɶ���'
    ,`subtitle` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '������'
    ,`seotitle` VARCHAR(128) NOT NULL DEFAULT '' COMMENT 'SEO ����'
    ,`seodesc` VARCHAR(512) NOT NULL DEFAULT '' COMMENT 'SEO ����'
    ,`seokeywords` VARCHAR(198) NOT NULL DEFAULT '' COMMENT 'SEO �ؼ���'
    ,`letter` char(1) NOT NULL DEFAULT '' COMMENT '����ĸ'
    ,`pid` SMALLINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '��id'
    ,`pids` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT '��id��'
    ,`cids` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT '��id��'
    ,PRIMARY KEY(`id`)
    ,UNIQUE KEY(`catalog`)
    ,KEY `ids` (`id`,`pid`)
    ,KEY `keys` (`letter`,`catalog`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='�����';

CREATE TABLE IF NOT EXISTS `hf_webconfig`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`gid` INT UNSIGNED NOT NULL COMMENT '������'
	,`variable` VARCHAR(32) NOT NULL COMMENT '����'
	,`value` VARCHAR(2000) NOT NULL DEFAULT '' COMMENT '����ֵ'
	,`desc` VARCHAR(2000) NOT NULL DEFAULT '' COMMENT '����˵��'
	,PRIMARY KEY (`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='��վ���ñ�';