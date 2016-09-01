#
#管理员表
#网站配置表
#博客表
#文章归档表
#文章分类表
#搜索词表
#标签表
#评论表
#相册表
#
CREATE TABLE IF NOT EXISTS `hf_manage`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`name` CHAR(16) NOT NULL COMMENT '名称'
	,`nick` VARCHAR(100) NOT null COMMENT '昵称'
	,`email` VARCHAR(56) NOT NULL COMMENT '邮箱'
	,`signed` VARCHAR(512) NOT NULL DEFAULT '' COMMENT '签名'
	,`pwd` CHAR(32) NOT NULL COMMENT '密码'
	,`halt` CHAR(8) NOT NULL COMMENT '密码随机字符串'
	,`addtime` INT(10) UNSIGNED NOT NULL COMMENT '添加时间'
	,`lastlogintime` INT(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '最后登录时间'
	,PRIMARY KEY(`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='管理员表';

#博客表
CREATE TABLE IF NOT EXISTS `hf_blog`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`title` VARCHAR(180) NOT NULL DEFAULT '' COMMENT '标题'
    ,`subtitle` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '副标题'
	,`cid` SMALLINT UNSIGNED NOT NULL COMMENT '文章分类'
	,`seotitle` VARCHAR(90) NOT NULL DEFAULT '' COMMENT 'SEO 标题'
	,`seodesc` VARCHAR(512) NOT NULL DEFAULT '' COMMENT 'SEO 描述'
	,`seokeywords` VARCHAR(130) NOT NULL DEFAULT '' COMMENT 'SEO 关键字'
	,`tags` VARCHAR(60) NOT NULL DEFAULT '' COMMENT '标签'
	,`thumb` VARCHAR(150) NOT NULL DEFAULT '' COMMENT '缩略图'
	,`authority` ENUM('公开','朋友可见','私密') DEFAULT '公开' COMMENT '权限'
	,`textlink` VARCHAR(150) NOT NULL DEFAULT '' COMMENT '原文链接'
	,`authorid` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '作者id'
	,`goods` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '点赞数'
	,`status` enum('待审核','审核通过','拒绝','删除') DEFAULT '待审核' COMMENT '状态'
	,`sort` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '排序'
    ,`addtime` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '添加时间'
    ,`updatetime` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '修改时间'
	,PRIMARY KEY(`id`)
	,KEY `authorid` (`authorid`)
	,KEY `search` (`title`,`seokeywords`,`thumb`,`status`,`updatetime`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='博客表';

#博客正文表
CREATE TABLE IF NOT EXISTS `hf_blog_data`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`contents` text COMMENT 'pc端正文'
	,PRIMARY KEY `id` (`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='博客正文表';


#文章分类表
CREATE TABLE IF NOT EXISTS `hf_category`(
    `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
    ,`title` VARCHAR(180) NOT NULL DEFAULT '' COMMENT '分类名'
    ,`catalog` VARCHAR(24) NOT NULL DEFAULT '' COMMENT '目录名 可定义'
    ,`subtitle` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '副标题'
    ,`seotitle` VARCHAR(128) NOT NULL DEFAULT '' COMMENT 'SEO 标题'
    ,`seodesc` VARCHAR(512) NOT NULL DEFAULT '' COMMENT 'SEO 介绍'
    ,`seokeywords` VARCHAR(198) NOT NULL DEFAULT '' COMMENT 'SEO 关键字'
    ,`letter` char(1) NOT NULL DEFAULT '' COMMENT '首字母'
    ,`pid` SMALLINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '父id'
    ,`pids` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT '父id组'
    ,`cids` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT '子id组'
    ,PRIMARY KEY(`id`)
    ,UNIQUE KEY(`catalog`)
    ,KEY `ids` (`id`,`pid`)
    ,KEY `keys` (`letter`,`catalog`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='分类表';

CREATE TABLE IF NOT EXISTS `hf_webconfig`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`gid` INT UNSIGNED NOT NULL COMMENT '配置组'
	,`variable` VARCHAR(32) NOT NULL COMMENT '参数'
	,`value` VARCHAR(2000) NOT NULL DEFAULT '' COMMENT '参数值'
	,`desc` VARCHAR(2000) NOT NULL DEFAULT '' COMMENT '参数说明'
	,PRIMARY KEY (`id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='网站配置表';