<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `fanwe_delivery_region`;");
E_C("CREATE TABLE `fanwe_delivery_region` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '地区名称',
  `region_level` tinyint(4) NOT NULL COMMENT '1:国 2:省 3:市(县) 4:区(镇)',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3402 DEFAULT CHARSET=utf8");
E_D("replace into `fanwe_delivery_region` values('2','1','北京','2');");
E_D("replace into `fanwe_delivery_region` values('3','1','安徽','2');");
E_D("replace into `fanwe_delivery_region` values('4','1','福建','2');");
E_D("replace into `fanwe_delivery_region` values('5','1','甘肃','2');");
E_D("replace into `fanwe_delivery_region` values('6','1','广东','2');");
E_D("replace into `fanwe_delivery_region` values('7','1','广西','2');");
E_D("replace into `fanwe_delivery_region` values('8','1','贵州','2');");
E_D("replace into `fanwe_delivery_region` values('9','1','海南','2');");
E_D("replace into `fanwe_delivery_region` values('10','1','河北','2');");
E_D("replace into `fanwe_delivery_region` values('11','1','河南','2');");
E_D("replace into `fanwe_delivery_region` values('12','1','黑龙江','2');");
E_D("replace into `fanwe_delivery_region` values('13','1','湖北','2');");
E_D("replace into `fanwe_delivery_region` values('14','1','湖南','2');");
E_D("replace into `fanwe_delivery_region` values('15','1','吉林','2');");
E_D("replace into `fanwe_delivery_region` values('16','1','江苏','2');");
E_D("replace into `fanwe_delivery_region` values('17','1','江西','2');");
E_D("replace into `fanwe_delivery_region` values('18','1','辽宁','2');");
E_D("replace into `fanwe_delivery_region` values('19','1','内蒙古','2');");
E_D("replace into `fanwe_delivery_region` values('20','1','宁夏','2');");
E_D("replace into `fanwe_delivery_region` values('21','1','青海','2');");
E_D("replace into `fanwe_delivery_region` values('22','1','山东','2');");
E_D("replace into `fanwe_delivery_region` values('23','1','山西','2');");
E_D("replace into `fanwe_delivery_region` values('24','1','陕西','2');");
E_D("replace into `fanwe_delivery_region` values('25','1','上海','2');");
E_D("replace into `fanwe_delivery_region` values('26','1','四川','2');");
E_D("replace into `fanwe_delivery_region` values('27','1','天津','2');");
E_D("replace into `fanwe_delivery_region` values('28','1','西藏','2');");
E_D("replace into `fanwe_delivery_region` values('29','1','新疆','2');");
E_D("replace into `fanwe_delivery_region` values('30','1','云南','2');");
E_D("replace into `fanwe_delivery_region` values('31','1','浙江','2');");
E_D("replace into `fanwe_delivery_region` values('32','1','重庆','2');");
E_D("replace into `fanwe_delivery_region` values('33','1','香港','2');");
E_D("replace into `fanwe_delivery_region` values('34','1','澳门','2');");
E_D("replace into `fanwe_delivery_region` values('35','1','台湾','2');");
E_D("replace into `fanwe_delivery_region` values('36','3','安庆','3');");
E_D("replace into `fanwe_delivery_region` values('37','3','蚌埠','3');");
E_D("replace into `fanwe_delivery_region` values('38','3','巢湖','3');");
E_D("replace into `fanwe_delivery_region` values('39','3','池州','3');");
E_D("replace into `fanwe_delivery_region` values('40','3','滁州','3');");
E_D("replace into `fanwe_delivery_region` values('41','3','阜阳','3');");
E_D("replace into `fanwe_delivery_region` values('42','3','淮北','3');");
E_D("replace into `fanwe_delivery_region` values('43','3','淮南','3');");
E_D("replace into `fanwe_delivery_region` values('44','3','黄山','3');");
E_D("replace into `fanwe_delivery_region` values('45','3','六安','3');");
E_D("replace into `fanwe_delivery_region` values('46','3','马鞍山','3');");
E_D("replace into `fanwe_delivery_region` values('47','3','宿州','3');");
E_D("replace into `fanwe_delivery_region` values('48','3','铜陵','3');");
E_D("replace into `fanwe_delivery_region` values('49','3','芜湖','3');");
E_D("replace into `fanwe_delivery_region` values('50','3','宣城','3');");
E_D("replace into `fanwe_delivery_region` values('51','3','亳州','3');");
E_D("replace into `fanwe_delivery_region` values('52','2','北京','3');");
E_D("replace into `fanwe_delivery_region` values('53','4','福州','3');");
E_D("replace into `fanwe_delivery_region` values('54','4','龙岩','3');");
E_D("replace into `fanwe_delivery_region` values('55','4','南平','3');");
E_D("replace into `fanwe_delivery_region` values('56','4','宁德','3');");
E_D("replace into `fanwe_delivery_region` values('57','4','莆田','3');");
E_D("replace into `fanwe_delivery_region` values('58','4','泉州','3');");
E_D("replace into `fanwe_delivery_region` values('59','4','三明','3');");
E_D("replace into `fanwe_delivery_region` values('60','4','厦门','3');");
E_D("replace into `fanwe_delivery_region` values('61','4','漳州','3');");
E_D("replace into `fanwe_delivery_region` values('62','5','兰州','3');");
E_D("replace into `fanwe_delivery_region` values('63','5','白银','3');");
E_D("replace into `fanwe_delivery_region` values('64','5','定西','3');");
E_D("replace into `fanwe_delivery_region` values('65','5','甘南','3');");
E_D("replace into `fanwe_delivery_region` values('66','5','嘉峪关','3');");
E_D("replace into `fanwe_delivery_region` values('67','5','金昌','3');");
E_D("replace into `fanwe_delivery_region` values('68','5','酒泉','3');");
E_D("replace into `fanwe_delivery_region` values('69','5','临夏','3');");
E_D("replace into `fanwe_delivery_region` values('70','5','陇南','3');");
E_D("replace into `fanwe_delivery_region` values('71','5','平凉','3');");
E_D("replace into `fanwe_delivery_region` values('72','5','庆阳','3');");
E_D("replace into `fanwe_delivery_region` values('73','5','天水','3');");
E_D("replace into `fanwe_delivery_region` values('74','5','武威','3');");
E_D("replace into `fanwe_delivery_region` values('75','5','张掖','3');");
E_D("replace into `fanwe_delivery_region` values('76','6','广州','3');");
E_D("replace into `fanwe_delivery_region` values('77','6','深圳','3');");
E_D("replace into `fanwe_delivery_region` values('78','6','潮州','3');");
E_D("replace into `fanwe_delivery_region` values('79','6','东莞','3');");
E_D("replace into `fanwe_delivery_region` values('80','6','佛山','3');");
E_D("replace into `fanwe_delivery_region` values('81','6','河源','3');");
E_D("replace into `fanwe_delivery_region` values('82','6','惠州','3');");
E_D("replace into `fanwe_delivery_region` values('83','6','江门','3');");
E_D("replace into `fanwe_delivery_region` values('84','6','揭阳','3');");
E_D("replace into `fanwe_delivery_region` values('85','6','茂名','3');");
E_D("replace into `fanwe_delivery_region` values('86','6','梅州','3');");
E_D("replace into `fanwe_delivery_region` values('87','6','清远','3');");
E_D("replace into `fanwe_delivery_region` values('88','6','汕头','3');");
E_D("replace into `fanwe_delivery_region` values('89','6','汕尾','3');");
E_D("replace into `fanwe_delivery_region` values('90','6','韶关','3');");
E_D("replace into `fanwe_delivery_region` values('91','6','阳江','3');");
E_D("replace into `fanwe_delivery_region` values('92','6','云浮','3');");
E_D("replace into `fanwe_delivery_region` values('93','6','湛江','3');");
E_D("replace into `fanwe_delivery_region` values('94','6','肇庆','3');");
E_D("replace into `fanwe_delivery_region` values('95','6','中山','3');");
E_D("replace into `fanwe_delivery_region` values('96','6','珠海','3');");
E_D("replace into `fanwe_delivery_region` values('97','7','南宁','3');");
E_D("replace into `fanwe_delivery_region` values('98','7','桂林','3');");
E_D("replace into `fanwe_delivery_region` values('99','7','百色','3');");
E_D("replace into `fanwe_delivery_region` values('100','7','北海','3');");
E_D("replace into `fanwe_delivery_region` values('101','7','崇左','3');");
E_D("replace into `fanwe_delivery_region` values('102','7','防城港','3');");
E_D("replace into `fanwe_delivery_region` values('103','7','贵港','3');");
E_D("replace into `fanwe_delivery_region` values('104','7','河池','3');");
E_D("replace into `fanwe_delivery_region` values('105','7','贺州','3');");
E_D("replace into `fanwe_delivery_region` values('106','7','来宾','3');");
E_D("replace into `fanwe_delivery_region` values('107','7','柳州','3');");
E_D("replace into `fanwe_delivery_region` values('108','7','钦州','3');");
E_D("replace into `fanwe_delivery_region` values('109','7','梧州','3');");
E_D("replace into `fanwe_delivery_region` values('110','7','玉林','3');");
E_D("replace into `fanwe_delivery_region` values('111','8','贵阳','3');");
E_D("replace into `fanwe_delivery_region` values('112','8','安顺','3');");
E_D("replace into `fanwe_delivery_region` values('113','8','毕节','3');");
E_D("replace into `fanwe_delivery_region` values('114','8','六盘水','3');");
E_D("replace into `fanwe_delivery_region` values('115','8','黔东南','3');");
E_D("replace into `fanwe_delivery_region` values('116','8','黔南','3');");
E_D("replace into `fanwe_delivery_region` values('117','8','黔西南','3');");
E_D("replace into `fanwe_delivery_region` values('118','8','铜仁','3');");
E_D("replace into `fanwe_delivery_region` values('119','8','遵义','3');");
E_D("replace into `fanwe_delivery_region` values('120','9','海口','3');");
E_D("replace into `fanwe_delivery_region` values('121','9','三亚','3');");
E_D("replace into `fanwe_delivery_region` values('122','9','白沙','3');");
E_D("replace into `fanwe_delivery_region` values('123','9','保亭','3');");
E_D("replace into `fanwe_delivery_region` values('124','9','昌江','3');");
E_D("replace into `fanwe_delivery_region` values('125','9','澄迈县','3');");
E_D("replace into `fanwe_delivery_region` values('126','9','定安县','3');");
E_D("replace into `fanwe_delivery_region` values('127','9','东方','3');");
E_D("replace into `fanwe_delivery_region` values('128','9','乐东','3');");
E_D("replace into `fanwe_delivery_region` values('129','9','临高县','3');");
E_D("replace into `fanwe_delivery_region` values('130','9','陵水','3');");
E_D("replace into `fanwe_delivery_region` values('131','9','琼海','3');");
E_D("replace into `fanwe_delivery_region` values('132','9','琼中','3');");
E_D("replace into `fanwe_delivery_region` values('133','9','屯昌县','3');");
E_D("replace into `fanwe_delivery_region` values('134','9','万宁','3');");
E_D("replace into `fanwe_delivery_region` values('135','9','文昌','3');");
E_D("replace into `fanwe_delivery_region` values('136','9','五指山','3');");
E_D("replace into `fanwe_delivery_region` values('137','9','儋州','3');");
E_D("replace into `fanwe_delivery_region` values('138','10','石家庄','3');");
E_D("replace into `fanwe_delivery_region` values('139','10','保定','3');");
E_D("replace into `fanwe_delivery_region` values('140','10','沧州','3');");
E_D("replace into `fanwe_delivery_region` values('141','10','承德','3');");
E_D("replace into `fanwe_delivery_region` values('142','10','邯郸','3');");
E_D("replace into `fanwe_delivery_region` values('143','10','衡水','3');");
E_D("replace into `fanwe_delivery_region` values('144','10','廊坊','3');");
E_D("replace into `fanwe_delivery_region` values('145','10','秦皇岛','3');");
E_D("replace into `fanwe_delivery_region` values('146','10','唐山','3');");
E_D("replace into `fanwe_delivery_region` values('147','10','邢台','3');");
E_D("replace into `fanwe_delivery_region` values('148','10','张家口','3');");
E_D("replace into `fanwe_delivery_region` values('149','11','郑州','3');");
E_D("replace into `fanwe_delivery_region` values('150','11','洛阳','3');");
E_D("replace into `fanwe_delivery_region` values('151','11','开封','3');");
E_D("replace into `fanwe_delivery_region` values('152','11','安阳','3');");
E_D("replace into `fanwe_delivery_region` values('153','11','鹤壁','3');");
E_D("replace into `fanwe_delivery_region` values('154','11','济源','3');");
E_D("replace into `fanwe_delivery_region` values('155','11','焦作','3');");
E_D("replace into `fanwe_delivery_region` values('156','11','南阳','3');");
E_D("replace into `fanwe_delivery_region` values('157','11','平顶山','3');");
E_D("replace into `fanwe_delivery_region` values('158','11','三门峡','3');");
E_D("replace into `fanwe_delivery_region` values('159','11','商丘','3');");
E_D("replace into `fanwe_delivery_region` values('160','11','新乡','3');");
E_D("replace into `fanwe_delivery_region` values('161','11','信阳','3');");
E_D("replace into `fanwe_delivery_region` values('162','11','许昌','3');");
E_D("replace into `fanwe_delivery_region` values('163','11','周口','3');");
E_D("replace into `fanwe_delivery_region` values('164','11','驻马店','3');");
E_D("replace into `fanwe_delivery_region` values('165','11','漯河','3');");
E_D("replace into `fanwe_delivery_region` values('166','11','濮阳','3');");
E_D("replace into `fanwe_delivery_region` values('167','12','哈尔滨','3');");
E_D("replace into `fanwe_delivery_region` values('168','12','大庆','3');");
E_D("replace into `fanwe_delivery_region` values('169','12','大兴安岭','3');");
E_D("replace into `fanwe_delivery_region` values('170','12','鹤岗','3');");
E_D("replace into `fanwe_delivery_region` values('171','12','黑河','3');");
E_D("replace into `fanwe_delivery_region` values('172','12','鸡西','3');");
E_D("replace into `fanwe_delivery_region` values('173','12','佳木斯','3');");
E_D("replace into `fanwe_delivery_region` values('174','12','牡丹江','3');");
E_D("replace into `fanwe_delivery_region` values('175','12','七台河','3');");
E_D("replace into `fanwe_delivery_region` values('176','12','齐齐哈尔','3');");
E_D("replace into `fanwe_delivery_region` values('177','12','双鸭山','3');");
E_D("replace into `fanwe_delivery_region` values('178','12','绥化','3');");
E_D("replace into `fanwe_delivery_region` values('179','12','伊春','3');");
E_D("replace into `fanwe_delivery_region` values('180','13','武汉','3');");
E_D("replace into `fanwe_delivery_region` values('181','13','仙桃','3');");
E_D("replace into `fanwe_delivery_region` values('182','13','鄂州','3');");
E_D("replace into `fanwe_delivery_region` values('183','13','黄冈','3');");
E_D("replace into `fanwe_delivery_region` values('184','13','黄石','3');");
E_D("replace into `fanwe_delivery_region` values('185','13','荆门','3');");
E_D("replace into `fanwe_delivery_region` values('186','13','荆州','3');");
E_D("replace into `fanwe_delivery_region` values('187','13','潜江','3');");
E_D("replace into `fanwe_delivery_region` values('188','13','神农架林区','3');");
E_D("replace into `fanwe_delivery_region` values('189','13','十堰','3');");
E_D("replace into `fanwe_delivery_region` values('190','13','随州','3');");
E_D("replace into `fanwe_delivery_region` values('191','13','天门','3');");
E_D("replace into `fanwe_delivery_region` values('192','13','咸宁','3');");
E_D("replace into `fanwe_delivery_region` values('193','13','襄樊','3');");
E_D("replace into `fanwe_delivery_region` values('194','13','孝感','3');");
E_D("replace into `fanwe_delivery_region` values('195','13','宜昌','3');");
E_D("replace into `fanwe_delivery_region` values('196','13','恩施','3');");
E_D("replace into `fanwe_delivery_region` values('197','14','长沙','3');");
E_D("replace into `fanwe_delivery_region` values('198','14','张家界','3');");
E_D("replace into `fanwe_delivery_region` values('199','14','常德','3');");
E_D("replace into `fanwe_delivery_region` values('200','14','郴州','3');");
E_D("replace into `fanwe_delivery_region` values('201','14','衡阳','3');");
E_D("replace into `fanwe_delivery_region` values('202','14','怀化','3');");
E_D("replace into `fanwe_delivery_region` values('203','14','娄底','3');");
E_D("replace into `fanwe_delivery_region` values('204','14','邵阳','3');");
E_D("replace into `fanwe_delivery_region` values('205','14','湘潭','3');");
E_D("replace into `fanwe_delivery_region` values('206','14','湘西','3');");
E_D("replace into `fanwe_delivery_region` values('207','14','益阳','3');");
E_D("replace into `fanwe_delivery_region` values('208','14','永州','3');");
E_D("replace into `fanwe_delivery_region` values('209','14','岳阳','3');");
E_D("replace into `fanwe_delivery_region` values('210','14','株洲','3');");
E_D("replace into `fanwe_delivery_region` values('211','15','长春','3');");
E_D("replace into `fanwe_delivery_region` values('212','15','吉林','3');");
E_D("replace into `fanwe_delivery_region` values('213','15','白城','3');");
E_D("replace into `fanwe_delivery_region` values('214','15','白山','3');");
E_D("replace into `fanwe_delivery_region` values('215','15','辽源','3');");
E_D("replace into `fanwe_delivery_region` values('216','15','四平','3');");
E_D("replace into `fanwe_delivery_region` values('217','15','松原','3');");
E_D("replace into `fanwe_delivery_region` values('218','15','通化','3');");
E_D("replace into `fanwe_delivery_region` values('219','15','延边','3');");
E_D("replace into `fanwe_delivery_region` values('220','16','南京','3');");
E_D("replace into `fanwe_delivery_region` values('221','16','苏州','3');");
E_D("replace into `fanwe_delivery_region` values('222','16','无锡','3');");
E_D("replace into `fanwe_delivery_region` values('223','16','常州','3');");
E_D("replace into `fanwe_delivery_region` values('224','16','淮安','3');");
E_D("replace into `fanwe_delivery_region` values('225','16','连云港','3');");
E_D("replace into `fanwe_delivery_region` values('226','16','南通','3');");
E_D("replace into `fanwe_delivery_region` values('227','16','宿迁','3');");
E_D("replace into `fanwe_delivery_region` values('228','16','泰州','3');");
E_D("replace into `fanwe_delivery_region` values('229','16','徐州','3');");
E_D("replace into `fanwe_delivery_region` values('230','16','盐城','3');");
E_D("replace into `fanwe_delivery_region` values('231','16','扬州','3');");
E_D("replace into `fanwe_delivery_region` values('232','16','镇江','3');");
E_D("replace into `fanwe_delivery_region` values('233','17','南昌','3');");
E_D("replace into `fanwe_delivery_region` values('234','17','抚州','3');");
E_D("replace into `fanwe_delivery_region` values('235','17','赣州','3');");
E_D("replace into `fanwe_delivery_region` values('236','17','吉安','3');");
E_D("replace into `fanwe_delivery_region` values('237','17','景德镇','3');");
E_D("replace into `fanwe_delivery_region` values('238','17','九江','3');");
E_D("replace into `fanwe_delivery_region` values('239','17','萍乡','3');");
E_D("replace into `fanwe_delivery_region` values('240','17','上饶','3');");
E_D("replace into `fanwe_delivery_region` values('241','17','新余','3');");
E_D("replace into `fanwe_delivery_region` values('242','17','宜春','3');");
E_D("replace into `fanwe_delivery_region` values('243','17','鹰潭','3');");
E_D("replace into `fanwe_delivery_region` values('244','18','沈阳','3');");
E_D("replace into `fanwe_delivery_region` values('245','18','大连','3');");
E_D("replace into `fanwe_delivery_region` values('246','18','鞍山','3');");
E_D("replace into `fanwe_delivery_region` values('247','18','本溪','3');");
E_D("replace into `fanwe_delivery_region` values('248','18','朝阳','3');");
E_D("replace into `fanwe_delivery_region` values('249','18','丹东','3');");
E_D("replace into `fanwe_delivery_region` values('250','18','抚顺','3');");
E_D("replace into `fanwe_delivery_region` values('251','18','阜新','3');");
E_D("replace into `fanwe_delivery_region` values('252','18','葫芦岛','3');");
E_D("replace into `fanwe_delivery_region` values('253','18','锦州','3');");
E_D("replace into `fanwe_delivery_region` values('254','18','辽阳','3');");
E_D("replace into `fanwe_delivery_region` values('255','18','盘锦','3');");
E_D("replace into `fanwe_delivery_region` values('256','18','铁岭','3');");
E_D("replace into `fanwe_delivery_region` values('257','18','营口','3');");
E_D("replace into `fanwe_delivery_region` values('258','19','呼和浩特','3');");
E_D("replace into `fanwe_delivery_region` values('259','19','阿拉善盟','3');");
E_D("replace into `fanwe_delivery_region` values('260','19','巴彦淖尔盟','3');");
E_D("replace into `fanwe_delivery_region` values('261','19','包头','3');");
E_D("replace into `fanwe_delivery_region` values('262','19','赤峰','3');");
E_D("replace into `fanwe_delivery_region` values('263','19','鄂尔多斯','3');");
E_D("replace into `fanwe_delivery_region` values('264','19','呼伦贝尔','3');");
E_D("replace into `fanwe_delivery_region` values('265','19','通辽','3');");
E_D("replace into `fanwe_delivery_region` values('266','19','乌海','3');");
E_D("replace into `fanwe_delivery_region` values('267','19','乌兰察布市','3');");
E_D("replace into `fanwe_delivery_region` values('268','19','锡林郭勒盟','3');");
E_D("replace into `fanwe_delivery_region` values('269','19','兴安盟','3');");
E_D("replace into `fanwe_delivery_region` values('270','20','银川','3');");
E_D("replace into `fanwe_delivery_region` values('271','20','固原','3');");
E_D("replace into `fanwe_delivery_region` values('272','20','石嘴山','3');");
E_D("replace into `fanwe_delivery_region` values('273','20','吴忠','3');");
E_D("replace into `fanwe_delivery_region` values('274','20','中卫','3');");
E_D("replace into `fanwe_delivery_region` values('275','21','西宁','3');");
E_D("replace into `fanwe_delivery_region` values('276','21','果洛','3');");
E_D("replace into `fanwe_delivery_region` values('277','21','海北','3');");
E_D("replace into `fanwe_delivery_region` values('278','21','海东','3');");
E_D("replace into `fanwe_delivery_region` values('279','21','海南','3');");
E_D("replace into `fanwe_delivery_region` values('280','21','海西','3');");
E_D("replace into `fanwe_delivery_region` values('281','21','黄南','3');");
E_D("replace into `fanwe_delivery_region` values('282','21','玉树','3');");
E_D("replace into `fanwe_delivery_region` values('283','22','济南','3');");
E_D("replace into `fanwe_delivery_region` values('284','22','青岛','3');");
E_D("replace into `fanwe_delivery_region` values('285','22','滨州','3');");
E_D("replace into `fanwe_delivery_region` values('286','22','德州','3');");
E_D("replace into `fanwe_delivery_region` values('287','22','东营','3');");
E_D("replace into `fanwe_delivery_region` values('288','22','菏泽','3');");
E_D("replace into `fanwe_delivery_region` values('289','22','济宁','3');");
E_D("replace into `fanwe_delivery_region` values('290','22','莱芜','3');");
E_D("replace into `fanwe_delivery_region` values('291','22','聊城','3');");
E_D("replace into `fanwe_delivery_region` values('292','22','临沂','3');");
E_D("replace into `fanwe_delivery_region` values('293','22','日照','3');");
E_D("replace into `fanwe_delivery_region` values('294','22','泰安','3');");
E_D("replace into `fanwe_delivery_region` values('295','22','威海','3');");
E_D("replace into `fanwe_delivery_region` values('296','22','潍坊','3');");
E_D("replace into `fanwe_delivery_region` values('297','22','烟台','3');");
E_D("replace into `fanwe_delivery_region` values('298','22','枣庄','3');");
E_D("replace into `fanwe_delivery_region` values('299','22','淄博','3');");
E_D("replace into `fanwe_delivery_region` values('300','23','太原','3');");
E_D("replace into `fanwe_delivery_region` values('301','23','长治','3');");
E_D("replace into `fanwe_delivery_region` values('302','23','大同','3');");
E_D("replace into `fanwe_delivery_region` values('303','23','晋城','3');");
E_D("replace into `fanwe_delivery_region` values('304','23','晋中','3');");
E_D("replace into `fanwe_delivery_region` values('305','23','临汾','3');");
E_D("replace into `fanwe_delivery_region` values('306','23','吕梁','3');");
E_D("replace into `fanwe_delivery_region` values('307','23','朔州','3');");
E_D("replace into `fanwe_delivery_region` values('308','23','忻州','3');");
E_D("replace into `fanwe_delivery_region` values('309','23','阳泉','3');");
E_D("replace into `fanwe_delivery_region` values('310','23','运城','3');");
E_D("replace into `fanwe_delivery_region` values('311','24','西安','3');");
E_D("replace into `fanwe_delivery_region` values('312','24','安康','3');");
E_D("replace into `fanwe_delivery_region` values('313','24','宝鸡','3');");
E_D("replace into `fanwe_delivery_region` values('314','24','汉中','3');");
E_D("replace into `fanwe_delivery_region` values('315','24','商洛','3');");
E_D("replace into `fanwe_delivery_region` values('316','24','铜川','3');");
E_D("replace into `fanwe_delivery_region` values('317','24','渭南','3');");
E_D("replace into `fanwe_delivery_region` values('318','24','咸阳','3');");
E_D("replace into `fanwe_delivery_region` values('319','24','延安','3');");
E_D("replace into `fanwe_delivery_region` values('320','24','榆林','3');");
E_D("replace into `fanwe_delivery_region` values('321','25','上海','3');");
E_D("replace into `fanwe_delivery_region` values('322','26','成都','3');");
E_D("replace into `fanwe_delivery_region` values('323','26','绵阳','3');");
E_D("replace into `fanwe_delivery_region` values('324','26','阿坝','3');");
E_D("replace into `fanwe_delivery_region` values('325','26','巴中','3');");
E_D("replace into `fanwe_delivery_region` values('326','26','达州','3');");
E_D("replace into `fanwe_delivery_region` values('327','26','德阳','3');");
E_D("replace into `fanwe_delivery_region` values('328','26','甘孜','3');");
E_D("replace into `fanwe_delivery_region` values('329','26','广安','3');");
E_D("replace into `fanwe_delivery_region` values('330','26','广元','3');");
E_D("replace into `fanwe_delivery_region` values('331','26','乐山','3');");
E_D("replace into `fanwe_delivery_region` values('332','26','凉山','3');");
E_D("replace into `fanwe_delivery_region` values('333','26','眉山','3');");
E_D("replace into `fanwe_delivery_region` values('334','26','南充','3');");
E_D("replace into `fanwe_delivery_region` values('335','26','内江','3');");
E_D("replace into `fanwe_delivery_region` values('336','26','攀枝花','3');");
E_D("replace into `fanwe_delivery_region` values('337','26','遂宁','3');");
E_D("replace into `fanwe_delivery_region` values('338','26','雅安','3');");
E_D("replace into `fanwe_delivery_region` values('339','26','宜宾','3');");
E_D("replace into `fanwe_delivery_region` values('340','26','资阳','3');");
E_D("replace into `fanwe_delivery_region` values('341','26','自贡','3');");
E_D("replace into `fanwe_delivery_region` values('342','26','泸州','3');");
E_D("replace into `fanwe_delivery_region` values('343','27','天津','3');");
E_D("replace into `fanwe_delivery_region` values('344','28','拉萨','3');");
E_D("replace into `fanwe_delivery_region` values('345','28','阿里','3');");
E_D("replace into `fanwe_delivery_region` values('346','28','昌都','3');");
E_D("replace into `fanwe_delivery_region` values('347','28','林芝','3');");
E_D("replace into `fanwe_delivery_region` values('348','28','那曲','3');");
E_D("replace into `fanwe_delivery_region` values('349','28','日喀则','3');");
E_D("replace into `fanwe_delivery_region` values('350','28','山南','3');");
E_D("replace into `fanwe_delivery_region` values('351','29','乌鲁木齐','3');");
E_D("replace into `fanwe_delivery_region` values('352','29','阿克苏','3');");
E_D("replace into `fanwe_delivery_region` values('353','29','阿拉尔','3');");
E_D("replace into `fanwe_delivery_region` values('354','29','巴音郭楞','3');");
E_D("replace into `fanwe_delivery_region` values('355','29','博尔塔拉','3');");
E_D("replace into `fanwe_delivery_region` values('356','29','昌吉','3');");
E_D("replace into `fanwe_delivery_region` values('357','29','哈密','3');");
E_D("replace into `fanwe_delivery_region` values('358','29','和田','3');");
E_D("replace into `fanwe_delivery_region` values('359','29','喀什','3');");
E_D("replace into `fanwe_delivery_region` values('360','29','克拉玛依','3');");
E_D("replace into `fanwe_delivery_region` values('361','29','克孜勒苏','3');");
E_D("replace into `fanwe_delivery_region` values('362','29','石河子','3');");
E_D("replace into `fanwe_delivery_region` values('363','29','图木舒克','3');");
E_D("replace into `fanwe_delivery_region` values('364','29','吐鲁番','3');");
E_D("replace into `fanwe_delivery_region` values('365','29','五家渠','3');");
E_D("replace into `fanwe_delivery_region` values('366','29','伊犁','3');");
E_D("replace into `fanwe_delivery_region` values('367','30','昆明','3');");
E_D("replace into `fanwe_delivery_region` values('368','30','怒江','3');");
E_D("replace into `fanwe_delivery_region` values('369','30','普洱','3');");
E_D("replace into `fanwe_delivery_region` values('370','30','丽江','3');");
E_D("replace into `fanwe_delivery_region` values('371','30','保山','3');");
E_D("replace into `fanwe_delivery_region` values('372','30','楚雄','3');");
E_D("replace into `fanwe_delivery_region` values('373','30','大理','3');");
E_D("replace into `fanwe_delivery_region` values('374','30','德宏','3');");
E_D("replace into `fanwe_delivery_region` values('375','30','迪庆','3');");
E_D("replace into `fanwe_delivery_region` values('376','30','红河','3');");
E_D("replace into `fanwe_delivery_region` values('377','30','临沧','3');");
E_D("replace into `fanwe_delivery_region` values('378','30','曲靖','3');");
E_D("replace into `fanwe_delivery_region` values('379','30','文山','3');");
E_D("replace into `fanwe_delivery_region` values('380','30','西双版纳','3');");
E_D("replace into `fanwe_delivery_region` values('381','30','玉溪','3');");
E_D("replace into `fanwe_delivery_region` values('382','30','昭通','3');");
E_D("replace into `fanwe_delivery_region` values('383','31','杭州','3');");
E_D("replace into `fanwe_delivery_region` values('384','31','湖州','3');");
E_D("replace into `fanwe_delivery_region` values('385','31','嘉兴','3');");
E_D("replace into `fanwe_delivery_region` values('386','31','金华','3');");
E_D("replace into `fanwe_delivery_region` values('387','31','丽水','3');");
E_D("replace into `fanwe_delivery_region` values('388','31','宁波','3');");
E_D("replace into `fanwe_delivery_region` values('389','31','绍兴','3');");
E_D("replace into `fanwe_delivery_region` values('390','31','台州','3');");
E_D("replace into `fanwe_delivery_region` values('391','31','温州','3');");
E_D("replace into `fanwe_delivery_region` values('392','31','舟山','3');");
E_D("replace into `fanwe_delivery_region` values('393','31','衢州','3');");
E_D("replace into `fanwe_delivery_region` values('394','32','重庆','3');");
E_D("replace into `fanwe_delivery_region` values('395','33','香港','3');");
E_D("replace into `fanwe_delivery_region` values('396','34','澳门','3');");
E_D("replace into `fanwe_delivery_region` values('397','35','台湾','3');");
E_D("replace into `fanwe_delivery_region` values('398','36','迎江区','4');");
E_D("replace into `fanwe_delivery_region` values('399','36','大观区','4');");
E_D("replace into `fanwe_delivery_region` values('400','36','宜秀区','4');");
E_D("replace into `fanwe_delivery_region` values('401','36','桐城市','4');");
E_D("replace into `fanwe_delivery_region` values('402','36','怀宁县','4');");
E_D("replace into `fanwe_delivery_region` values('403','36','枞阳县','4');");
E_D("replace into `fanwe_delivery_region` values('404','36','潜山县','4');");
E_D("replace into `fanwe_delivery_region` values('405','36','太湖县','4');");
E_D("replace into `fanwe_delivery_region` values('406','36','宿松县','4');");
E_D("replace into `fanwe_delivery_region` values('407','36','望江县','4');");
E_D("replace into `fanwe_delivery_region` values('408','36','岳西县','4');");
E_D("replace into `fanwe_delivery_region` values('409','37','中市区','4');");
E_D("replace into `fanwe_delivery_region` values('410','37','东市区','4');");
E_D("replace into `fanwe_delivery_region` values('411','37','西市区','4');");
E_D("replace into `fanwe_delivery_region` values('412','37','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('413','37','怀远县','4');");
E_D("replace into `fanwe_delivery_region` values('414','37','五河县','4');");
E_D("replace into `fanwe_delivery_region` values('415','37','固镇县','4');");
E_D("replace into `fanwe_delivery_region` values('416','38','居巢区','4');");
E_D("replace into `fanwe_delivery_region` values('417','38','庐江县','4');");
E_D("replace into `fanwe_delivery_region` values('418','38','无为县','4');");
E_D("replace into `fanwe_delivery_region` values('419','38','含山县','4');");
E_D("replace into `fanwe_delivery_region` values('420','38','和县','4');");
E_D("replace into `fanwe_delivery_region` values('421','39','贵池区','4');");
E_D("replace into `fanwe_delivery_region` values('422','39','东至县','4');");
E_D("replace into `fanwe_delivery_region` values('423','39','石台县','4');");
E_D("replace into `fanwe_delivery_region` values('424','39','青阳县','4');");
E_D("replace into `fanwe_delivery_region` values('425','40','琅琊区','4');");
E_D("replace into `fanwe_delivery_region` values('426','40','南谯区','4');");
E_D("replace into `fanwe_delivery_region` values('427','40','天长市','4');");
E_D("replace into `fanwe_delivery_region` values('428','40','明光市','4');");
E_D("replace into `fanwe_delivery_region` values('429','40','来安县','4');");
E_D("replace into `fanwe_delivery_region` values('430','40','全椒县','4');");
E_D("replace into `fanwe_delivery_region` values('431','40','定远县','4');");
E_D("replace into `fanwe_delivery_region` values('432','40','凤阳县','4');");
E_D("replace into `fanwe_delivery_region` values('433','41','蚌山区','4');");
E_D("replace into `fanwe_delivery_region` values('434','41','龙子湖区','4');");
E_D("replace into `fanwe_delivery_region` values('435','41','禹会区','4');");
E_D("replace into `fanwe_delivery_region` values('436','41','淮上区','4');");
E_D("replace into `fanwe_delivery_region` values('437','41','颍州区','4');");
E_D("replace into `fanwe_delivery_region` values('438','41','颍东区','4');");
E_D("replace into `fanwe_delivery_region` values('439','41','颍泉区','4');");
E_D("replace into `fanwe_delivery_region` values('440','41','界首市','4');");
E_D("replace into `fanwe_delivery_region` values('441','41','临泉县','4');");
E_D("replace into `fanwe_delivery_region` values('442','41','太和县','4');");
E_D("replace into `fanwe_delivery_region` values('443','41','阜南县','4');");
E_D("replace into `fanwe_delivery_region` values('444','41','颖上县','4');");
E_D("replace into `fanwe_delivery_region` values('445','42','相山区','4');");
E_D("replace into `fanwe_delivery_region` values('446','42','杜集区','4');");
E_D("replace into `fanwe_delivery_region` values('447','42','烈山区','4');");
E_D("replace into `fanwe_delivery_region` values('448','42','濉溪县','4');");
E_D("replace into `fanwe_delivery_region` values('449','43','田家庵区','4');");
E_D("replace into `fanwe_delivery_region` values('450','43','大通区','4');");
E_D("replace into `fanwe_delivery_region` values('451','43','谢家集区','4');");
E_D("replace into `fanwe_delivery_region` values('452','43','八公山区','4');");
E_D("replace into `fanwe_delivery_region` values('453','43','潘集区','4');");
E_D("replace into `fanwe_delivery_region` values('454','43','凤台县','4');");
E_D("replace into `fanwe_delivery_region` values('455','44','屯溪区','4');");
E_D("replace into `fanwe_delivery_region` values('456','44','黄山区','4');");
E_D("replace into `fanwe_delivery_region` values('457','44','徽州区','4');");
E_D("replace into `fanwe_delivery_region` values('458','44','歙县','4');");
E_D("replace into `fanwe_delivery_region` values('459','44','休宁县','4');");
E_D("replace into `fanwe_delivery_region` values('460','44','黟县','4');");
E_D("replace into `fanwe_delivery_region` values('461','44','祁门县','4');");
E_D("replace into `fanwe_delivery_region` values('462','45','金安区','4');");
E_D("replace into `fanwe_delivery_region` values('463','45','裕安区','4');");
E_D("replace into `fanwe_delivery_region` values('464','45','寿县','4');");
E_D("replace into `fanwe_delivery_region` values('465','45','霍邱县','4');");
E_D("replace into `fanwe_delivery_region` values('466','45','舒城县','4');");
E_D("replace into `fanwe_delivery_region` values('467','45','金寨县','4');");
E_D("replace into `fanwe_delivery_region` values('468','45','霍山县','4');");
E_D("replace into `fanwe_delivery_region` values('469','46','雨山区','4');");
E_D("replace into `fanwe_delivery_region` values('470','46','花山区','4');");
E_D("replace into `fanwe_delivery_region` values('471','46','金家庄区','4');");
E_D("replace into `fanwe_delivery_region` values('472','46','当涂县','4');");
E_D("replace into `fanwe_delivery_region` values('473','47','埇桥区','4');");
E_D("replace into `fanwe_delivery_region` values('474','47','砀山县','4');");
E_D("replace into `fanwe_delivery_region` values('475','47','萧县','4');");
E_D("replace into `fanwe_delivery_region` values('476','47','灵璧县','4');");
E_D("replace into `fanwe_delivery_region` values('477','47','泗县','4');");
E_D("replace into `fanwe_delivery_region` values('478','48','铜官山区','4');");
E_D("replace into `fanwe_delivery_region` values('479','48','狮子山区','4');");
E_D("replace into `fanwe_delivery_region` values('480','48','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('481','48','铜陵县','4');");
E_D("replace into `fanwe_delivery_region` values('482','49','镜湖区','4');");
E_D("replace into `fanwe_delivery_region` values('483','49','弋江区','4');");
E_D("replace into `fanwe_delivery_region` values('484','49','鸠江区','4');");
E_D("replace into `fanwe_delivery_region` values('485','49','三山区','4');");
E_D("replace into `fanwe_delivery_region` values('486','49','芜湖县','4');");
E_D("replace into `fanwe_delivery_region` values('487','49','繁昌县','4');");
E_D("replace into `fanwe_delivery_region` values('488','49','南陵县','4');");
E_D("replace into `fanwe_delivery_region` values('489','50','宣州区','4');");
E_D("replace into `fanwe_delivery_region` values('490','50','宁国市','4');");
E_D("replace into `fanwe_delivery_region` values('491','50','郎溪县','4');");
E_D("replace into `fanwe_delivery_region` values('492','50','广德县','4');");
E_D("replace into `fanwe_delivery_region` values('493','50','泾县','4');");
E_D("replace into `fanwe_delivery_region` values('494','50','绩溪县','4');");
E_D("replace into `fanwe_delivery_region` values('495','50','旌德县','4');");
E_D("replace into `fanwe_delivery_region` values('496','51','涡阳县','4');");
E_D("replace into `fanwe_delivery_region` values('497','51','蒙城县','4');");
E_D("replace into `fanwe_delivery_region` values('498','51','利辛县','4');");
E_D("replace into `fanwe_delivery_region` values('499','51','谯城区','4');");
E_D("replace into `fanwe_delivery_region` values('500','52','东城区','4');");
E_D("replace into `fanwe_delivery_region` values('501','52','西城区','4');");
E_D("replace into `fanwe_delivery_region` values('502','52','海淀区','4');");
E_D("replace into `fanwe_delivery_region` values('503','52','朝阳区','4');");
E_D("replace into `fanwe_delivery_region` values('504','52','崇文区','4');");
E_D("replace into `fanwe_delivery_region` values('505','52','宣武区','4');");
E_D("replace into `fanwe_delivery_region` values('506','52','丰台区','4');");
E_D("replace into `fanwe_delivery_region` values('507','52','石景山区','4');");
E_D("replace into `fanwe_delivery_region` values('508','52','房山区','4');");
E_D("replace into `fanwe_delivery_region` values('509','52','门头沟区','4');");
E_D("replace into `fanwe_delivery_region` values('510','52','通州区','4');");
E_D("replace into `fanwe_delivery_region` values('511','52','顺义区','4');");
E_D("replace into `fanwe_delivery_region` values('512','52','昌平区','4');");
E_D("replace into `fanwe_delivery_region` values('513','52','怀柔区','4');");
E_D("replace into `fanwe_delivery_region` values('514','52','平谷区','4');");
E_D("replace into `fanwe_delivery_region` values('515','52','大兴区','4');");
E_D("replace into `fanwe_delivery_region` values('516','52','密云县','4');");
E_D("replace into `fanwe_delivery_region` values('517','52','延庆县','4');");
E_D("replace into `fanwe_delivery_region` values('518','53','鼓楼区','4');");
E_D("replace into `fanwe_delivery_region` values('519','53','台江区','4');");
E_D("replace into `fanwe_delivery_region` values('520','53','仓山区','4');");
E_D("replace into `fanwe_delivery_region` values('521','53','马尾区','4');");
E_D("replace into `fanwe_delivery_region` values('522','53','晋安区','4');");
E_D("replace into `fanwe_delivery_region` values('523','53','福清市','4');");
E_D("replace into `fanwe_delivery_region` values('524','53','长乐市','4');");
E_D("replace into `fanwe_delivery_region` values('525','53','闽侯县','4');");
E_D("replace into `fanwe_delivery_region` values('526','53','连江县','4');");
E_D("replace into `fanwe_delivery_region` values('527','53','罗源县','4');");
E_D("replace into `fanwe_delivery_region` values('528','53','闽清县','4');");
E_D("replace into `fanwe_delivery_region` values('529','53','永泰县','4');");
E_D("replace into `fanwe_delivery_region` values('530','53','平潭县','4');");
E_D("replace into `fanwe_delivery_region` values('531','54','新罗区','4');");
E_D("replace into `fanwe_delivery_region` values('532','54','漳平市','4');");
E_D("replace into `fanwe_delivery_region` values('533','54','长汀县','4');");
E_D("replace into `fanwe_delivery_region` values('534','54','永定县','4');");
E_D("replace into `fanwe_delivery_region` values('535','54','上杭县','4');");
E_D("replace into `fanwe_delivery_region` values('536','54','武平县','4');");
E_D("replace into `fanwe_delivery_region` values('537','54','连城县','4');");
E_D("replace into `fanwe_delivery_region` values('538','55','延平区','4');");
E_D("replace into `fanwe_delivery_region` values('539','55','邵武市','4');");
E_D("replace into `fanwe_delivery_region` values('540','55','武夷山市','4');");
E_D("replace into `fanwe_delivery_region` values('541','55','建瓯市','4');");
E_D("replace into `fanwe_delivery_region` values('542','55','建阳市','4');");
E_D("replace into `fanwe_delivery_region` values('543','55','顺昌县','4');");
E_D("replace into `fanwe_delivery_region` values('544','55','浦城县','4');");
E_D("replace into `fanwe_delivery_region` values('545','55','光泽县','4');");
E_D("replace into `fanwe_delivery_region` values('546','55','松溪县','4');");
E_D("replace into `fanwe_delivery_region` values('547','55','政和县','4');");
E_D("replace into `fanwe_delivery_region` values('548','56','蕉城区','4');");
E_D("replace into `fanwe_delivery_region` values('549','56','福安市','4');");
E_D("replace into `fanwe_delivery_region` values('550','56','福鼎市','4');");
E_D("replace into `fanwe_delivery_region` values('551','56','霞浦县','4');");
E_D("replace into `fanwe_delivery_region` values('552','56','古田县','4');");
E_D("replace into `fanwe_delivery_region` values('553','56','屏南县','4');");
E_D("replace into `fanwe_delivery_region` values('554','56','寿宁县','4');");
E_D("replace into `fanwe_delivery_region` values('555','56','周宁县','4');");
E_D("replace into `fanwe_delivery_region` values('556','56','柘荣县','4');");
E_D("replace into `fanwe_delivery_region` values('557','57','城厢区','4');");
E_D("replace into `fanwe_delivery_region` values('558','57','涵江区','4');");
E_D("replace into `fanwe_delivery_region` values('559','57','荔城区','4');");
E_D("replace into `fanwe_delivery_region` values('560','57','秀屿区','4');");
E_D("replace into `fanwe_delivery_region` values('561','57','仙游县','4');");
E_D("replace into `fanwe_delivery_region` values('562','58','鲤城区','4');");
E_D("replace into `fanwe_delivery_region` values('563','58','丰泽区','4');");
E_D("replace into `fanwe_delivery_region` values('564','58','洛江区','4');");
E_D("replace into `fanwe_delivery_region` values('565','58','清濛开发区','4');");
E_D("replace into `fanwe_delivery_region` values('566','58','泉港区','4');");
E_D("replace into `fanwe_delivery_region` values('567','58','石狮市','4');");
E_D("replace into `fanwe_delivery_region` values('568','58','晋江市','4');");
E_D("replace into `fanwe_delivery_region` values('569','58','南安市','4');");
E_D("replace into `fanwe_delivery_region` values('570','58','惠安县','4');");
E_D("replace into `fanwe_delivery_region` values('571','58','安溪县','4');");
E_D("replace into `fanwe_delivery_region` values('572','58','永春县','4');");
E_D("replace into `fanwe_delivery_region` values('573','58','德化县','4');");
E_D("replace into `fanwe_delivery_region` values('574','58','金门县','4');");
E_D("replace into `fanwe_delivery_region` values('575','59','梅列区','4');");
E_D("replace into `fanwe_delivery_region` values('576','59','三元区','4');");
E_D("replace into `fanwe_delivery_region` values('577','59','永安市','4');");
E_D("replace into `fanwe_delivery_region` values('578','59','明溪县','4');");
E_D("replace into `fanwe_delivery_region` values('579','59','清流县','4');");
E_D("replace into `fanwe_delivery_region` values('580','59','宁化县','4');");
E_D("replace into `fanwe_delivery_region` values('581','59','大田县','4');");
E_D("replace into `fanwe_delivery_region` values('582','59','尤溪县','4');");
E_D("replace into `fanwe_delivery_region` values('583','59','沙县','4');");
E_D("replace into `fanwe_delivery_region` values('584','59','将乐县','4');");
E_D("replace into `fanwe_delivery_region` values('585','59','泰宁县','4');");
E_D("replace into `fanwe_delivery_region` values('586','59','建宁县','4');");
E_D("replace into `fanwe_delivery_region` values('587','60','思明区','4');");
E_D("replace into `fanwe_delivery_region` values('588','60','海沧区','4');");
E_D("replace into `fanwe_delivery_region` values('589','60','湖里区','4');");
E_D("replace into `fanwe_delivery_region` values('590','60','集美区','4');");
E_D("replace into `fanwe_delivery_region` values('591','60','同安区','4');");
E_D("replace into `fanwe_delivery_region` values('592','60','翔安区','4');");
E_D("replace into `fanwe_delivery_region` values('593','61','芗城区','4');");
E_D("replace into `fanwe_delivery_region` values('594','61','龙文区','4');");
E_D("replace into `fanwe_delivery_region` values('595','61','龙海市','4');");
E_D("replace into `fanwe_delivery_region` values('596','61','云霄县','4');");
E_D("replace into `fanwe_delivery_region` values('597','61','漳浦县','4');");
E_D("replace into `fanwe_delivery_region` values('598','61','诏安县','4');");
E_D("replace into `fanwe_delivery_region` values('599','61','长泰县','4');");
E_D("replace into `fanwe_delivery_region` values('600','61','东山县','4');");
E_D("replace into `fanwe_delivery_region` values('601','61','南靖县','4');");
E_D("replace into `fanwe_delivery_region` values('602','61','平和县','4');");
E_D("replace into `fanwe_delivery_region` values('603','61','华安县','4');");
E_D("replace into `fanwe_delivery_region` values('604','62','皋兰县','4');");
E_D("replace into `fanwe_delivery_region` values('605','62','城关区','4');");
E_D("replace into `fanwe_delivery_region` values('606','62','七里河区','4');");
E_D("replace into `fanwe_delivery_region` values('607','62','西固区','4');");
E_D("replace into `fanwe_delivery_region` values('608','62','安宁区','4');");
E_D("replace into `fanwe_delivery_region` values('609','62','红古区','4');");
E_D("replace into `fanwe_delivery_region` values('610','62','永登县','4');");
E_D("replace into `fanwe_delivery_region` values('611','62','榆中县','4');");
E_D("replace into `fanwe_delivery_region` values('612','63','白银区','4');");
E_D("replace into `fanwe_delivery_region` values('613','63','平川区','4');");
E_D("replace into `fanwe_delivery_region` values('614','63','会宁县','4');");
E_D("replace into `fanwe_delivery_region` values('615','63','景泰县','4');");
E_D("replace into `fanwe_delivery_region` values('616','63','靖远县','4');");
E_D("replace into `fanwe_delivery_region` values('617','64','临洮县','4');");
E_D("replace into `fanwe_delivery_region` values('618','64','陇西县','4');");
E_D("replace into `fanwe_delivery_region` values('619','64','通渭县','4');");
E_D("replace into `fanwe_delivery_region` values('620','64','渭源县','4');");
E_D("replace into `fanwe_delivery_region` values('621','64','漳县','4');");
E_D("replace into `fanwe_delivery_region` values('622','64','岷县','4');");
E_D("replace into `fanwe_delivery_region` values('623','64','安定区','4');");
E_D("replace into `fanwe_delivery_region` values('624','64','安定区','4');");
E_D("replace into `fanwe_delivery_region` values('625','65','合作市','4');");
E_D("replace into `fanwe_delivery_region` values('626','65','临潭县','4');");
E_D("replace into `fanwe_delivery_region` values('627','65','卓尼县','4');");
E_D("replace into `fanwe_delivery_region` values('628','65','舟曲县','4');");
E_D("replace into `fanwe_delivery_region` values('629','65','迭部县','4');");
E_D("replace into `fanwe_delivery_region` values('630','65','玛曲县','4');");
E_D("replace into `fanwe_delivery_region` values('631','65','碌曲县','4');");
E_D("replace into `fanwe_delivery_region` values('632','65','夏河县','4');");
E_D("replace into `fanwe_delivery_region` values('633','66','嘉峪关市','4');");
E_D("replace into `fanwe_delivery_region` values('634','67','金川区','4');");
E_D("replace into `fanwe_delivery_region` values('635','67','永昌县','4');");
E_D("replace into `fanwe_delivery_region` values('636','68','肃州区','4');");
E_D("replace into `fanwe_delivery_region` values('637','68','玉门市','4');");
E_D("replace into `fanwe_delivery_region` values('638','68','敦煌市','4');");
E_D("replace into `fanwe_delivery_region` values('639','68','金塔县','4');");
E_D("replace into `fanwe_delivery_region` values('640','68','瓜州县','4');");
E_D("replace into `fanwe_delivery_region` values('641','68','肃北','4');");
E_D("replace into `fanwe_delivery_region` values('642','68','阿克塞','4');");
E_D("replace into `fanwe_delivery_region` values('643','69','临夏市','4');");
E_D("replace into `fanwe_delivery_region` values('644','69','临夏县','4');");
E_D("replace into `fanwe_delivery_region` values('645','69','康乐县','4');");
E_D("replace into `fanwe_delivery_region` values('646','69','永靖县','4');");
E_D("replace into `fanwe_delivery_region` values('647','69','广河县','4');");
E_D("replace into `fanwe_delivery_region` values('648','69','和政县','4');");
E_D("replace into `fanwe_delivery_region` values('649','69','东乡族自治县','4');");
E_D("replace into `fanwe_delivery_region` values('650','69','积石山','4');");
E_D("replace into `fanwe_delivery_region` values('651','70','成县','4');");
E_D("replace into `fanwe_delivery_region` values('652','70','徽县','4');");
E_D("replace into `fanwe_delivery_region` values('653','70','康县','4');");
E_D("replace into `fanwe_delivery_region` values('654','70','礼县','4');");
E_D("replace into `fanwe_delivery_region` values('655','70','两当县','4');");
E_D("replace into `fanwe_delivery_region` values('656','70','文县','4');");
E_D("replace into `fanwe_delivery_region` values('657','70','西和县','4');");
E_D("replace into `fanwe_delivery_region` values('658','70','宕昌县','4');");
E_D("replace into `fanwe_delivery_region` values('659','70','武都区','4');");
E_D("replace into `fanwe_delivery_region` values('660','71','崇信县','4');");
E_D("replace into `fanwe_delivery_region` values('661','71','华亭县','4');");
E_D("replace into `fanwe_delivery_region` values('662','71','静宁县','4');");
E_D("replace into `fanwe_delivery_region` values('663','71','灵台县','4');");
E_D("replace into `fanwe_delivery_region` values('664','71','崆峒区','4');");
E_D("replace into `fanwe_delivery_region` values('665','71','庄浪县','4');");
E_D("replace into `fanwe_delivery_region` values('666','71','泾川县','4');");
E_D("replace into `fanwe_delivery_region` values('667','72','合水县','4');");
E_D("replace into `fanwe_delivery_region` values('668','72','华池县','4');");
E_D("replace into `fanwe_delivery_region` values('669','72','环县','4');");
E_D("replace into `fanwe_delivery_region` values('670','72','宁县','4');");
E_D("replace into `fanwe_delivery_region` values('671','72','庆城县','4');");
E_D("replace into `fanwe_delivery_region` values('672','72','西峰区','4');");
E_D("replace into `fanwe_delivery_region` values('673','72','镇原县','4');");
E_D("replace into `fanwe_delivery_region` values('674','72','正宁县','4');");
E_D("replace into `fanwe_delivery_region` values('675','73','甘谷县','4');");
E_D("replace into `fanwe_delivery_region` values('676','73','秦安县','4');");
E_D("replace into `fanwe_delivery_region` values('677','73','清水县','4');");
E_D("replace into `fanwe_delivery_region` values('678','73','秦州区','4');");
E_D("replace into `fanwe_delivery_region` values('679','73','麦积区','4');");
E_D("replace into `fanwe_delivery_region` values('680','73','武山县','4');");
E_D("replace into `fanwe_delivery_region` values('681','73','张家川','4');");
E_D("replace into `fanwe_delivery_region` values('682','74','古浪县','4');");
E_D("replace into `fanwe_delivery_region` values('683','74','民勤县','4');");
E_D("replace into `fanwe_delivery_region` values('684','74','天祝','4');");
E_D("replace into `fanwe_delivery_region` values('685','74','凉州区','4');");
E_D("replace into `fanwe_delivery_region` values('686','75','高台县','4');");
E_D("replace into `fanwe_delivery_region` values('687','75','临泽县','4');");
E_D("replace into `fanwe_delivery_region` values('688','75','民乐县','4');");
E_D("replace into `fanwe_delivery_region` values('689','75','山丹县','4');");
E_D("replace into `fanwe_delivery_region` values('690','75','肃南','4');");
E_D("replace into `fanwe_delivery_region` values('691','75','甘州区','4');");
E_D("replace into `fanwe_delivery_region` values('692','76','从化市','4');");
E_D("replace into `fanwe_delivery_region` values('693','76','天河区','4');");
E_D("replace into `fanwe_delivery_region` values('694','76','东山区','4');");
E_D("replace into `fanwe_delivery_region` values('695','76','白云区','4');");
E_D("replace into `fanwe_delivery_region` values('696','76','海珠区','4');");
E_D("replace into `fanwe_delivery_region` values('697','76','荔湾区','4');");
E_D("replace into `fanwe_delivery_region` values('698','76','越秀区','4');");
E_D("replace into `fanwe_delivery_region` values('699','76','黄埔区','4');");
E_D("replace into `fanwe_delivery_region` values('700','76','番禺区','4');");
E_D("replace into `fanwe_delivery_region` values('701','76','花都区','4');");
E_D("replace into `fanwe_delivery_region` values('702','76','增城区','4');");
E_D("replace into `fanwe_delivery_region` values('703','76','从化区','4');");
E_D("replace into `fanwe_delivery_region` values('704','76','市郊','4');");
E_D("replace into `fanwe_delivery_region` values('705','77','福田区','4');");
E_D("replace into `fanwe_delivery_region` values('706','77','罗湖区','4');");
E_D("replace into `fanwe_delivery_region` values('707','77','南山区','4');");
E_D("replace into `fanwe_delivery_region` values('708','77','宝安区','4');");
E_D("replace into `fanwe_delivery_region` values('709','77','龙岗区','4');");
E_D("replace into `fanwe_delivery_region` values('710','77','盐田区','4');");
E_D("replace into `fanwe_delivery_region` values('711','78','湘桥区','4');");
E_D("replace into `fanwe_delivery_region` values('712','78','潮安县','4');");
E_D("replace into `fanwe_delivery_region` values('713','78','饶平县','4');");
E_D("replace into `fanwe_delivery_region` values('714','79','南城区','4');");
E_D("replace into `fanwe_delivery_region` values('715','79','东城区','4');");
E_D("replace into `fanwe_delivery_region` values('716','79','万江区','4');");
E_D("replace into `fanwe_delivery_region` values('717','79','莞城区','4');");
E_D("replace into `fanwe_delivery_region` values('718','79','石龙镇','4');");
E_D("replace into `fanwe_delivery_region` values('719','79','虎门镇','4');");
E_D("replace into `fanwe_delivery_region` values('720','79','麻涌镇','4');");
E_D("replace into `fanwe_delivery_region` values('721','79','道滘镇','4');");
E_D("replace into `fanwe_delivery_region` values('722','79','石碣镇','4');");
E_D("replace into `fanwe_delivery_region` values('723','79','沙田镇','4');");
E_D("replace into `fanwe_delivery_region` values('724','79','望牛墩镇','4');");
E_D("replace into `fanwe_delivery_region` values('725','79','洪梅镇','4');");
E_D("replace into `fanwe_delivery_region` values('726','79','茶山镇','4');");
E_D("replace into `fanwe_delivery_region` values('727','79','寮步镇','4');");
E_D("replace into `fanwe_delivery_region` values('728','79','大岭山镇','4');");
E_D("replace into `fanwe_delivery_region` values('729','79','大朗镇','4');");
E_D("replace into `fanwe_delivery_region` values('730','79','黄江镇','4');");
E_D("replace into `fanwe_delivery_region` values('731','79','樟木头','4');");
E_D("replace into `fanwe_delivery_region` values('732','79','凤岗镇','4');");
E_D("replace into `fanwe_delivery_region` values('733','79','塘厦镇','4');");
E_D("replace into `fanwe_delivery_region` values('734','79','谢岗镇','4');");
E_D("replace into `fanwe_delivery_region` values('735','79','厚街镇','4');");
E_D("replace into `fanwe_delivery_region` values('736','79','清溪镇','4');");
E_D("replace into `fanwe_delivery_region` values('737','79','常平镇','4');");
E_D("replace into `fanwe_delivery_region` values('738','79','桥头镇','4');");
E_D("replace into `fanwe_delivery_region` values('739','79','横沥镇','4');");
E_D("replace into `fanwe_delivery_region` values('740','79','东坑镇','4');");
E_D("replace into `fanwe_delivery_region` values('741','79','企石镇','4');");
E_D("replace into `fanwe_delivery_region` values('742','79','石排镇','4');");
E_D("replace into `fanwe_delivery_region` values('743','79','长安镇','4');");
E_D("replace into `fanwe_delivery_region` values('744','79','中堂镇','4');");
E_D("replace into `fanwe_delivery_region` values('745','79','高埗镇','4');");
E_D("replace into `fanwe_delivery_region` values('746','80','禅城区','4');");
E_D("replace into `fanwe_delivery_region` values('747','80','南海区','4');");
E_D("replace into `fanwe_delivery_region` values('748','80','顺德区','4');");
E_D("replace into `fanwe_delivery_region` values('749','80','三水区','4');");
E_D("replace into `fanwe_delivery_region` values('750','80','高明区','4');");
E_D("replace into `fanwe_delivery_region` values('751','81','东源县','4');");
E_D("replace into `fanwe_delivery_region` values('752','81','和平县','4');");
E_D("replace into `fanwe_delivery_region` values('753','81','源城区','4');");
E_D("replace into `fanwe_delivery_region` values('754','81','连平县','4');");
E_D("replace into `fanwe_delivery_region` values('755','81','龙川县','4');");
E_D("replace into `fanwe_delivery_region` values('756','81','紫金县','4');");
E_D("replace into `fanwe_delivery_region` values('757','82','惠阳区','4');");
E_D("replace into `fanwe_delivery_region` values('758','82','惠城区','4');");
E_D("replace into `fanwe_delivery_region` values('759','82','大亚湾','4');");
E_D("replace into `fanwe_delivery_region` values('760','82','博罗县','4');");
E_D("replace into `fanwe_delivery_region` values('761','82','惠东县','4');");
E_D("replace into `fanwe_delivery_region` values('762','82','龙门县','4');");
E_D("replace into `fanwe_delivery_region` values('763','83','江海区','4');");
E_D("replace into `fanwe_delivery_region` values('764','83','蓬江区','4');");
E_D("replace into `fanwe_delivery_region` values('765','83','新会区','4');");
E_D("replace into `fanwe_delivery_region` values('766','83','台山市','4');");
E_D("replace into `fanwe_delivery_region` values('767','83','开平市','4');");
E_D("replace into `fanwe_delivery_region` values('768','83','鹤山市','4');");
E_D("replace into `fanwe_delivery_region` values('769','83','恩平市','4');");
E_D("replace into `fanwe_delivery_region` values('770','84','榕城区','4');");
E_D("replace into `fanwe_delivery_region` values('771','84','普宁市','4');");
E_D("replace into `fanwe_delivery_region` values('772','84','揭东县','4');");
E_D("replace into `fanwe_delivery_region` values('773','84','揭西县','4');");
E_D("replace into `fanwe_delivery_region` values('774','84','惠来县','4');");
E_D("replace into `fanwe_delivery_region` values('775','85','茂南区','4');");
E_D("replace into `fanwe_delivery_region` values('776','85','茂港区','4');");
E_D("replace into `fanwe_delivery_region` values('777','85','高州市','4');");
E_D("replace into `fanwe_delivery_region` values('778','85','化州市','4');");
E_D("replace into `fanwe_delivery_region` values('779','85','信宜市','4');");
E_D("replace into `fanwe_delivery_region` values('780','85','电白县','4');");
E_D("replace into `fanwe_delivery_region` values('781','86','梅县','4');");
E_D("replace into `fanwe_delivery_region` values('782','86','梅江区','4');");
E_D("replace into `fanwe_delivery_region` values('783','86','兴宁市','4');");
E_D("replace into `fanwe_delivery_region` values('784','86','大埔县','4');");
E_D("replace into `fanwe_delivery_region` values('785','86','丰顺县','4');");
E_D("replace into `fanwe_delivery_region` values('786','86','五华县','4');");
E_D("replace into `fanwe_delivery_region` values('787','86','平远县','4');");
E_D("replace into `fanwe_delivery_region` values('788','86','蕉岭县','4');");
E_D("replace into `fanwe_delivery_region` values('789','87','清城区','4');");
E_D("replace into `fanwe_delivery_region` values('790','87','英德市','4');");
E_D("replace into `fanwe_delivery_region` values('791','87','连州市','4');");
E_D("replace into `fanwe_delivery_region` values('792','87','佛冈县','4');");
E_D("replace into `fanwe_delivery_region` values('793','87','阳山县','4');");
E_D("replace into `fanwe_delivery_region` values('794','87','清新县','4');");
E_D("replace into `fanwe_delivery_region` values('795','87','连山','4');");
E_D("replace into `fanwe_delivery_region` values('796','87','连南','4');");
E_D("replace into `fanwe_delivery_region` values('797','88','南澳县','4');");
E_D("replace into `fanwe_delivery_region` values('798','88','潮阳区','4');");
E_D("replace into `fanwe_delivery_region` values('799','88','澄海区','4');");
E_D("replace into `fanwe_delivery_region` values('800','88','龙湖区','4');");
E_D("replace into `fanwe_delivery_region` values('801','88','金平区','4');");
E_D("replace into `fanwe_delivery_region` values('802','88','濠江区','4');");
E_D("replace into `fanwe_delivery_region` values('803','88','潮南区','4');");
E_D("replace into `fanwe_delivery_region` values('804','89','城区','4');");
E_D("replace into `fanwe_delivery_region` values('805','89','陆丰市','4');");
E_D("replace into `fanwe_delivery_region` values('806','89','海丰县','4');");
E_D("replace into `fanwe_delivery_region` values('807','89','陆河县','4');");
E_D("replace into `fanwe_delivery_region` values('808','90','曲江县','4');");
E_D("replace into `fanwe_delivery_region` values('809','90','浈江区','4');");
E_D("replace into `fanwe_delivery_region` values('810','90','武江区','4');");
E_D("replace into `fanwe_delivery_region` values('811','90','曲江区','4');");
E_D("replace into `fanwe_delivery_region` values('812','90','乐昌市','4');");
E_D("replace into `fanwe_delivery_region` values('813','90','南雄市','4');");
E_D("replace into `fanwe_delivery_region` values('814','90','始兴县','4');");
E_D("replace into `fanwe_delivery_region` values('815','90','仁化县','4');");
E_D("replace into `fanwe_delivery_region` values('816','90','翁源县','4');");
E_D("replace into `fanwe_delivery_region` values('817','90','新丰县','4');");
E_D("replace into `fanwe_delivery_region` values('818','90','乳源','4');");
E_D("replace into `fanwe_delivery_region` values('819','91','江城区','4');");
E_D("replace into `fanwe_delivery_region` values('820','91','阳春市','4');");
E_D("replace into `fanwe_delivery_region` values('821','91','阳西县','4');");
E_D("replace into `fanwe_delivery_region` values('822','91','阳东县','4');");
E_D("replace into `fanwe_delivery_region` values('823','92','云城区','4');");
E_D("replace into `fanwe_delivery_region` values('824','92','罗定市','4');");
E_D("replace into `fanwe_delivery_region` values('825','92','新兴县','4');");
E_D("replace into `fanwe_delivery_region` values('826','92','郁南县','4');");
E_D("replace into `fanwe_delivery_region` values('827','92','云安县','4');");
E_D("replace into `fanwe_delivery_region` values('828','93','赤坎区','4');");
E_D("replace into `fanwe_delivery_region` values('829','93','霞山区','4');");
E_D("replace into `fanwe_delivery_region` values('830','93','坡头区','4');");
E_D("replace into `fanwe_delivery_region` values('831','93','麻章区','4');");
E_D("replace into `fanwe_delivery_region` values('832','93','廉江市','4');");
E_D("replace into `fanwe_delivery_region` values('833','93','雷州市','4');");
E_D("replace into `fanwe_delivery_region` values('834','93','吴川市','4');");
E_D("replace into `fanwe_delivery_region` values('835','93','遂溪县','4');");
E_D("replace into `fanwe_delivery_region` values('836','93','徐闻县','4');");
E_D("replace into `fanwe_delivery_region` values('837','94','肇庆市','4');");
E_D("replace into `fanwe_delivery_region` values('838','94','高要市','4');");
E_D("replace into `fanwe_delivery_region` values('839','94','四会市','4');");
E_D("replace into `fanwe_delivery_region` values('840','94','广宁县','4');");
E_D("replace into `fanwe_delivery_region` values('841','94','怀集县','4');");
E_D("replace into `fanwe_delivery_region` values('842','94','封开县','4');");
E_D("replace into `fanwe_delivery_region` values('843','94','德庆县','4');");
E_D("replace into `fanwe_delivery_region` values('844','95','石岐街道','4');");
E_D("replace into `fanwe_delivery_region` values('845','95','东区街道','4');");
E_D("replace into `fanwe_delivery_region` values('846','95','西区街道','4');");
E_D("replace into `fanwe_delivery_region` values('847','95','环城街道','4');");
E_D("replace into `fanwe_delivery_region` values('848','95','中山港街道','4');");
E_D("replace into `fanwe_delivery_region` values('849','95','五桂山街道','4');");
E_D("replace into `fanwe_delivery_region` values('850','96','香洲区','4');");
E_D("replace into `fanwe_delivery_region` values('851','96','斗门区','4');");
E_D("replace into `fanwe_delivery_region` values('852','96','金湾区','4');");
E_D("replace into `fanwe_delivery_region` values('853','97','邕宁区','4');");
E_D("replace into `fanwe_delivery_region` values('854','97','青秀区','4');");
E_D("replace into `fanwe_delivery_region` values('855','97','兴宁区','4');");
E_D("replace into `fanwe_delivery_region` values('856','97','良庆区','4');");
E_D("replace into `fanwe_delivery_region` values('857','97','西乡塘区','4');");
E_D("replace into `fanwe_delivery_region` values('858','97','江南区','4');");
E_D("replace into `fanwe_delivery_region` values('859','97','武鸣县','4');");
E_D("replace into `fanwe_delivery_region` values('860','97','隆安县','4');");
E_D("replace into `fanwe_delivery_region` values('861','97','马山县','4');");
E_D("replace into `fanwe_delivery_region` values('862','97','上林县','4');");
E_D("replace into `fanwe_delivery_region` values('863','97','宾阳县','4');");
E_D("replace into `fanwe_delivery_region` values('864','97','横县','4');");
E_D("replace into `fanwe_delivery_region` values('865','98','秀峰区','4');");
E_D("replace into `fanwe_delivery_region` values('866','98','叠彩区','4');");
E_D("replace into `fanwe_delivery_region` values('867','98','象山区','4');");
E_D("replace into `fanwe_delivery_region` values('868','98','七星区','4');");
E_D("replace into `fanwe_delivery_region` values('869','98','雁山区','4');");
E_D("replace into `fanwe_delivery_region` values('870','98','阳朔县','4');");
E_D("replace into `fanwe_delivery_region` values('871','98','临桂县','4');");
E_D("replace into `fanwe_delivery_region` values('872','98','灵川县','4');");
E_D("replace into `fanwe_delivery_region` values('873','98','全州县','4');");
E_D("replace into `fanwe_delivery_region` values('874','98','平乐县','4');");
E_D("replace into `fanwe_delivery_region` values('875','98','兴安县','4');");
E_D("replace into `fanwe_delivery_region` values('876','98','灌阳县','4');");
E_D("replace into `fanwe_delivery_region` values('877','98','荔浦县','4');");
E_D("replace into `fanwe_delivery_region` values('878','98','资源县','4');");
E_D("replace into `fanwe_delivery_region` values('879','98','永福县','4');");
E_D("replace into `fanwe_delivery_region` values('880','98','龙胜','4');");
E_D("replace into `fanwe_delivery_region` values('881','98','恭城','4');");
E_D("replace into `fanwe_delivery_region` values('882','99','右江区','4');");
E_D("replace into `fanwe_delivery_region` values('883','99','凌云县','4');");
E_D("replace into `fanwe_delivery_region` values('884','99','平果县','4');");
E_D("replace into `fanwe_delivery_region` values('885','99','西林县','4');");
E_D("replace into `fanwe_delivery_region` values('886','99','乐业县','4');");
E_D("replace into `fanwe_delivery_region` values('887','99','德保县','4');");
E_D("replace into `fanwe_delivery_region` values('888','99','田林县','4');");
E_D("replace into `fanwe_delivery_region` values('889','99','田阳县','4');");
E_D("replace into `fanwe_delivery_region` values('890','99','靖西县','4');");
E_D("replace into `fanwe_delivery_region` values('891','99','田东县','4');");
E_D("replace into `fanwe_delivery_region` values('892','99','那坡县','4');");
E_D("replace into `fanwe_delivery_region` values('893','99','隆林','4');");
E_D("replace into `fanwe_delivery_region` values('894','100','海城区','4');");
E_D("replace into `fanwe_delivery_region` values('895','100','银海区','4');");
E_D("replace into `fanwe_delivery_region` values('896','100','铁山港区','4');");
E_D("replace into `fanwe_delivery_region` values('897','100','合浦县','4');");
E_D("replace into `fanwe_delivery_region` values('898','101','江州区','4');");
E_D("replace into `fanwe_delivery_region` values('899','101','凭祥市','4');");
E_D("replace into `fanwe_delivery_region` values('900','101','宁明县','4');");
E_D("replace into `fanwe_delivery_region` values('901','101','扶绥县','4');");
E_D("replace into `fanwe_delivery_region` values('902','101','龙州县','4');");
E_D("replace into `fanwe_delivery_region` values('903','101','大新县','4');");
E_D("replace into `fanwe_delivery_region` values('904','101','天等县','4');");
E_D("replace into `fanwe_delivery_region` values('905','102','港口区','4');");
E_D("replace into `fanwe_delivery_region` values('906','102','防城区','4');");
E_D("replace into `fanwe_delivery_region` values('907','102','东兴市','4');");
E_D("replace into `fanwe_delivery_region` values('908','102','上思县','4');");
E_D("replace into `fanwe_delivery_region` values('909','103','港北区','4');");
E_D("replace into `fanwe_delivery_region` values('910','103','港南区','4');");
E_D("replace into `fanwe_delivery_region` values('911','103','覃塘区','4');");
E_D("replace into `fanwe_delivery_region` values('912','103','桂平市','4');");
E_D("replace into `fanwe_delivery_region` values('913','103','平南县','4');");
E_D("replace into `fanwe_delivery_region` values('914','104','金城江区','4');");
E_D("replace into `fanwe_delivery_region` values('915','104','宜州市','4');");
E_D("replace into `fanwe_delivery_region` values('916','104','天峨县','4');");
E_D("replace into `fanwe_delivery_region` values('917','104','凤山县','4');");
E_D("replace into `fanwe_delivery_region` values('918','104','南丹县','4');");
E_D("replace into `fanwe_delivery_region` values('919','104','东兰县','4');");
E_D("replace into `fanwe_delivery_region` values('920','104','都安','4');");
E_D("replace into `fanwe_delivery_region` values('921','104','罗城','4');");
E_D("replace into `fanwe_delivery_region` values('922','104','巴马','4');");
E_D("replace into `fanwe_delivery_region` values('923','104','环江','4');");
E_D("replace into `fanwe_delivery_region` values('924','104','大化','4');");
E_D("replace into `fanwe_delivery_region` values('925','105','八步区','4');");
E_D("replace into `fanwe_delivery_region` values('926','105','钟山县','4');");
E_D("replace into `fanwe_delivery_region` values('927','105','昭平县','4');");
E_D("replace into `fanwe_delivery_region` values('928','105','富川','4');");
E_D("replace into `fanwe_delivery_region` values('929','106','兴宾区','4');");
E_D("replace into `fanwe_delivery_region` values('930','106','合山市','4');");
E_D("replace into `fanwe_delivery_region` values('931','106','象州县','4');");
E_D("replace into `fanwe_delivery_region` values('932','106','武宣县','4');");
E_D("replace into `fanwe_delivery_region` values('933','106','忻城县','4');");
E_D("replace into `fanwe_delivery_region` values('934','106','金秀','4');");
E_D("replace into `fanwe_delivery_region` values('935','107','城中区','4');");
E_D("replace into `fanwe_delivery_region` values('936','107','鱼峰区','4');");
E_D("replace into `fanwe_delivery_region` values('937','107','柳北区','4');");
E_D("replace into `fanwe_delivery_region` values('938','107','柳南区','4');");
E_D("replace into `fanwe_delivery_region` values('939','107','柳江县','4');");
E_D("replace into `fanwe_delivery_region` values('940','107','柳城县','4');");
E_D("replace into `fanwe_delivery_region` values('941','107','鹿寨县','4');");
E_D("replace into `fanwe_delivery_region` values('942','107','融安县','4');");
E_D("replace into `fanwe_delivery_region` values('943','107','融水','4');");
E_D("replace into `fanwe_delivery_region` values('944','107','三江','4');");
E_D("replace into `fanwe_delivery_region` values('945','108','钦南区','4');");
E_D("replace into `fanwe_delivery_region` values('946','108','钦北区','4');");
E_D("replace into `fanwe_delivery_region` values('947','108','灵山县','4');");
E_D("replace into `fanwe_delivery_region` values('948','108','浦北县','4');");
E_D("replace into `fanwe_delivery_region` values('949','109','万秀区','4');");
E_D("replace into `fanwe_delivery_region` values('950','109','蝶山区','4');");
E_D("replace into `fanwe_delivery_region` values('951','109','长洲区','4');");
E_D("replace into `fanwe_delivery_region` values('952','109','岑溪市','4');");
E_D("replace into `fanwe_delivery_region` values('953','109','苍梧县','4');");
E_D("replace into `fanwe_delivery_region` values('954','109','藤县','4');");
E_D("replace into `fanwe_delivery_region` values('955','109','蒙山县','4');");
E_D("replace into `fanwe_delivery_region` values('956','110','玉州区','4');");
E_D("replace into `fanwe_delivery_region` values('957','110','北流市','4');");
E_D("replace into `fanwe_delivery_region` values('958','110','容县','4');");
E_D("replace into `fanwe_delivery_region` values('959','110','陆川县','4');");
E_D("replace into `fanwe_delivery_region` values('960','110','博白县','4');");
E_D("replace into `fanwe_delivery_region` values('961','110','兴业县','4');");
E_D("replace into `fanwe_delivery_region` values('962','111','南明区','4');");
E_D("replace into `fanwe_delivery_region` values('963','111','云岩区','4');");
E_D("replace into `fanwe_delivery_region` values('964','111','花溪区','4');");
E_D("replace into `fanwe_delivery_region` values('965','111','乌当区','4');");
E_D("replace into `fanwe_delivery_region` values('966','111','白云区','4');");
E_D("replace into `fanwe_delivery_region` values('967','111','小河区','4');");
E_D("replace into `fanwe_delivery_region` values('968','111','金阳新区','4');");
E_D("replace into `fanwe_delivery_region` values('969','111','新天园区','4');");
E_D("replace into `fanwe_delivery_region` values('970','111','清镇市','4');");
E_D("replace into `fanwe_delivery_region` values('971','111','开阳县','4');");
E_D("replace into `fanwe_delivery_region` values('972','111','修文县','4');");
E_D("replace into `fanwe_delivery_region` values('973','111','息烽县','4');");
E_D("replace into `fanwe_delivery_region` values('974','112','西秀区','4');");
E_D("replace into `fanwe_delivery_region` values('975','112','关岭','4');");
E_D("replace into `fanwe_delivery_region` values('976','112','镇宁','4');");
E_D("replace into `fanwe_delivery_region` values('977','112','紫云','4');");
E_D("replace into `fanwe_delivery_region` values('978','112','平坝县','4');");
E_D("replace into `fanwe_delivery_region` values('979','112','普定县','4');");
E_D("replace into `fanwe_delivery_region` values('980','113','毕节市','4');");
E_D("replace into `fanwe_delivery_region` values('981','113','大方县','4');");
E_D("replace into `fanwe_delivery_region` values('982','113','黔西县','4');");
E_D("replace into `fanwe_delivery_region` values('983','113','金沙县','4');");
E_D("replace into `fanwe_delivery_region` values('984','113','织金县','4');");
E_D("replace into `fanwe_delivery_region` values('985','113','纳雍县','4');");
E_D("replace into `fanwe_delivery_region` values('986','113','赫章县','4');");
E_D("replace into `fanwe_delivery_region` values('987','113','威宁','4');");
E_D("replace into `fanwe_delivery_region` values('988','114','钟山区','4');");
E_D("replace into `fanwe_delivery_region` values('989','114','六枝特区','4');");
E_D("replace into `fanwe_delivery_region` values('990','114','水城县','4');");
E_D("replace into `fanwe_delivery_region` values('991','114','盘县','4');");
E_D("replace into `fanwe_delivery_region` values('992','115','凯里市','4');");
E_D("replace into `fanwe_delivery_region` values('993','115','黄平县','4');");
E_D("replace into `fanwe_delivery_region` values('994','115','施秉县','4');");
E_D("replace into `fanwe_delivery_region` values('995','115','三穗县','4');");
E_D("replace into `fanwe_delivery_region` values('996','115','镇远县','4');");
E_D("replace into `fanwe_delivery_region` values('997','115','岑巩县','4');");
E_D("replace into `fanwe_delivery_region` values('998','115','天柱县','4');");
E_D("replace into `fanwe_delivery_region` values('999','115','锦屏县','4');");
E_D("replace into `fanwe_delivery_region` values('1000','115','剑河县','4');");
E_D("replace into `fanwe_delivery_region` values('1001','115','台江县','4');");
E_D("replace into `fanwe_delivery_region` values('1002','115','黎平县','4');");
E_D("replace into `fanwe_delivery_region` values('1003','115','榕江县','4');");
E_D("replace into `fanwe_delivery_region` values('1004','115','从江县','4');");
E_D("replace into `fanwe_delivery_region` values('1005','115','雷山县','4');");
E_D("replace into `fanwe_delivery_region` values('1006','115','麻江县','4');");
E_D("replace into `fanwe_delivery_region` values('1007','115','丹寨县','4');");
E_D("replace into `fanwe_delivery_region` values('1008','116','都匀市','4');");
E_D("replace into `fanwe_delivery_region` values('1009','116','福泉市','4');");
E_D("replace into `fanwe_delivery_region` values('1010','116','荔波县','4');");
E_D("replace into `fanwe_delivery_region` values('1011','116','贵定县','4');");
E_D("replace into `fanwe_delivery_region` values('1012','116','瓮安县','4');");
E_D("replace into `fanwe_delivery_region` values('1013','116','独山县','4');");
E_D("replace into `fanwe_delivery_region` values('1014','116','平塘县','4');");
E_D("replace into `fanwe_delivery_region` values('1015','116','罗甸县','4');");
E_D("replace into `fanwe_delivery_region` values('1016','116','长顺县','4');");
E_D("replace into `fanwe_delivery_region` values('1017','116','龙里县','4');");
E_D("replace into `fanwe_delivery_region` values('1018','116','惠水县','4');");
E_D("replace into `fanwe_delivery_region` values('1019','116','三都','4');");
E_D("replace into `fanwe_delivery_region` values('1020','117','兴义市','4');");
E_D("replace into `fanwe_delivery_region` values('1021','117','兴仁县','4');");
E_D("replace into `fanwe_delivery_region` values('1022','117','普安县','4');");
E_D("replace into `fanwe_delivery_region` values('1023','117','晴隆县','4');");
E_D("replace into `fanwe_delivery_region` values('1024','117','贞丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1025','117','望谟县','4');");
E_D("replace into `fanwe_delivery_region` values('1026','117','册亨县','4');");
E_D("replace into `fanwe_delivery_region` values('1027','117','安龙县','4');");
E_D("replace into `fanwe_delivery_region` values('1028','118','铜仁市','4');");
E_D("replace into `fanwe_delivery_region` values('1029','118','江口县','4');");
E_D("replace into `fanwe_delivery_region` values('1030','118','石阡县','4');");
E_D("replace into `fanwe_delivery_region` values('1031','118','思南县','4');");
E_D("replace into `fanwe_delivery_region` values('1032','118','德江县','4');");
E_D("replace into `fanwe_delivery_region` values('1033','118','玉屏','4');");
E_D("replace into `fanwe_delivery_region` values('1034','118','印江','4');");
E_D("replace into `fanwe_delivery_region` values('1035','118','沿河','4');");
E_D("replace into `fanwe_delivery_region` values('1036','118','松桃','4');");
E_D("replace into `fanwe_delivery_region` values('1037','118','万山特区','4');");
E_D("replace into `fanwe_delivery_region` values('1038','119','红花岗区','4');");
E_D("replace into `fanwe_delivery_region` values('1039','119','务川县','4');");
E_D("replace into `fanwe_delivery_region` values('1040','119','道真县','4');");
E_D("replace into `fanwe_delivery_region` values('1041','119','汇川区','4');");
E_D("replace into `fanwe_delivery_region` values('1042','119','赤水市','4');");
E_D("replace into `fanwe_delivery_region` values('1043','119','仁怀市','4');");
E_D("replace into `fanwe_delivery_region` values('1044','119','遵义县','4');");
E_D("replace into `fanwe_delivery_region` values('1045','119','桐梓县','4');");
E_D("replace into `fanwe_delivery_region` values('1046','119','绥阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1047','119','正安县','4');");
E_D("replace into `fanwe_delivery_region` values('1048','119','凤冈县','4');");
E_D("replace into `fanwe_delivery_region` values('1049','119','湄潭县','4');");
E_D("replace into `fanwe_delivery_region` values('1050','119','余庆县','4');");
E_D("replace into `fanwe_delivery_region` values('1051','119','习水县','4');");
E_D("replace into `fanwe_delivery_region` values('1052','119','道真','4');");
E_D("replace into `fanwe_delivery_region` values('1053','119','务川','4');");
E_D("replace into `fanwe_delivery_region` values('1054','120','秀英区','4');");
E_D("replace into `fanwe_delivery_region` values('1055','120','龙华区','4');");
E_D("replace into `fanwe_delivery_region` values('1056','120','琼山区','4');");
E_D("replace into `fanwe_delivery_region` values('1057','120','美兰区','4');");
E_D("replace into `fanwe_delivery_region` values('1058','137','市区','4');");
E_D("replace into `fanwe_delivery_region` values('1059','137','洋浦开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1060','137','那大镇','4');");
E_D("replace into `fanwe_delivery_region` values('1061','137','王五镇','4');");
E_D("replace into `fanwe_delivery_region` values('1062','137','雅星镇','4');");
E_D("replace into `fanwe_delivery_region` values('1063','137','大成镇','4');");
E_D("replace into `fanwe_delivery_region` values('1064','137','中和镇','4');");
E_D("replace into `fanwe_delivery_region` values('1065','137','峨蔓镇','4');");
E_D("replace into `fanwe_delivery_region` values('1066','137','南丰镇','4');");
E_D("replace into `fanwe_delivery_region` values('1067','137','白马井镇','4');");
E_D("replace into `fanwe_delivery_region` values('1068','137','兰洋镇','4');");
E_D("replace into `fanwe_delivery_region` values('1069','137','和庆镇','4');");
E_D("replace into `fanwe_delivery_region` values('1070','137','海头镇','4');");
E_D("replace into `fanwe_delivery_region` values('1071','137','排浦镇','4');");
E_D("replace into `fanwe_delivery_region` values('1072','137','东成镇','4');");
E_D("replace into `fanwe_delivery_region` values('1073','137','光村镇','4');");
E_D("replace into `fanwe_delivery_region` values('1074','137','木棠镇','4');");
E_D("replace into `fanwe_delivery_region` values('1075','137','新州镇','4');");
E_D("replace into `fanwe_delivery_region` values('1076','137','三都镇','4');");
E_D("replace into `fanwe_delivery_region` values('1077','137','其他','4');");
E_D("replace into `fanwe_delivery_region` values('1078','138','长安区','4');");
E_D("replace into `fanwe_delivery_region` values('1079','138','桥东区','4');");
E_D("replace into `fanwe_delivery_region` values('1080','138','桥西区','4');");
E_D("replace into `fanwe_delivery_region` values('1081','138','新华区','4');");
E_D("replace into `fanwe_delivery_region` values('1082','138','裕华区','4');");
E_D("replace into `fanwe_delivery_region` values('1083','138','井陉矿区','4');");
E_D("replace into `fanwe_delivery_region` values('1084','138','高新区','4');");
E_D("replace into `fanwe_delivery_region` values('1085','138','辛集市','4');");
E_D("replace into `fanwe_delivery_region` values('1086','138','藁城市','4');");
E_D("replace into `fanwe_delivery_region` values('1087','138','晋州市','4');");
E_D("replace into `fanwe_delivery_region` values('1088','138','新乐市','4');");
E_D("replace into `fanwe_delivery_region` values('1089','138','鹿泉市','4');");
E_D("replace into `fanwe_delivery_region` values('1090','138','井陉县','4');");
E_D("replace into `fanwe_delivery_region` values('1091','138','正定县','4');");
E_D("replace into `fanwe_delivery_region` values('1092','138','栾城县','4');");
E_D("replace into `fanwe_delivery_region` values('1093','138','行唐县','4');");
E_D("replace into `fanwe_delivery_region` values('1094','138','灵寿县','4');");
E_D("replace into `fanwe_delivery_region` values('1095','138','高邑县','4');");
E_D("replace into `fanwe_delivery_region` values('1096','138','深泽县','4');");
E_D("replace into `fanwe_delivery_region` values('1097','138','赞皇县','4');");
E_D("replace into `fanwe_delivery_region` values('1098','138','无极县','4');");
E_D("replace into `fanwe_delivery_region` values('1099','138','平山县','4');");
E_D("replace into `fanwe_delivery_region` values('1100','138','元氏县','4');");
E_D("replace into `fanwe_delivery_region` values('1101','138','赵县','4');");
E_D("replace into `fanwe_delivery_region` values('1102','139','新市区','4');");
E_D("replace into `fanwe_delivery_region` values('1103','139','南市区','4');");
E_D("replace into `fanwe_delivery_region` values('1104','139','北市区','4');");
E_D("replace into `fanwe_delivery_region` values('1105','139','涿州市','4');");
E_D("replace into `fanwe_delivery_region` values('1106','139','定州市','4');");
E_D("replace into `fanwe_delivery_region` values('1107','139','安国市','4');");
E_D("replace into `fanwe_delivery_region` values('1108','139','高碑店市','4');");
E_D("replace into `fanwe_delivery_region` values('1109','139','满城县','4');");
E_D("replace into `fanwe_delivery_region` values('1110','139','清苑县','4');");
E_D("replace into `fanwe_delivery_region` values('1111','139','涞水县','4');");
E_D("replace into `fanwe_delivery_region` values('1112','139','阜平县','4');");
E_D("replace into `fanwe_delivery_region` values('1113','139','徐水县','4');");
E_D("replace into `fanwe_delivery_region` values('1114','139','定兴县','4');");
E_D("replace into `fanwe_delivery_region` values('1115','139','唐县','4');");
E_D("replace into `fanwe_delivery_region` values('1116','139','高阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1117','139','容城县','4');");
E_D("replace into `fanwe_delivery_region` values('1118','139','涞源县','4');");
E_D("replace into `fanwe_delivery_region` values('1119','139','望都县','4');");
E_D("replace into `fanwe_delivery_region` values('1120','139','安新县','4');");
E_D("replace into `fanwe_delivery_region` values('1121','139','易县','4');");
E_D("replace into `fanwe_delivery_region` values('1122','139','曲阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1123','139','蠡县','4');");
E_D("replace into `fanwe_delivery_region` values('1124','139','顺平县','4');");
E_D("replace into `fanwe_delivery_region` values('1125','139','博野县','4');");
E_D("replace into `fanwe_delivery_region` values('1126','139','雄县','4');");
E_D("replace into `fanwe_delivery_region` values('1127','140','运河区','4');");
E_D("replace into `fanwe_delivery_region` values('1128','140','新华区','4');");
E_D("replace into `fanwe_delivery_region` values('1129','140','泊头市','4');");
E_D("replace into `fanwe_delivery_region` values('1130','140','任丘市','4');");
E_D("replace into `fanwe_delivery_region` values('1131','140','黄骅市','4');");
E_D("replace into `fanwe_delivery_region` values('1132','140','河间市','4');");
E_D("replace into `fanwe_delivery_region` values('1133','140','沧县','4');");
E_D("replace into `fanwe_delivery_region` values('1134','140','青县','4');");
E_D("replace into `fanwe_delivery_region` values('1135','140','东光县','4');");
E_D("replace into `fanwe_delivery_region` values('1136','140','海兴县','4');");
E_D("replace into `fanwe_delivery_region` values('1137','140','盐山县','4');");
E_D("replace into `fanwe_delivery_region` values('1138','140','肃宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1139','140','南皮县','4');");
E_D("replace into `fanwe_delivery_region` values('1140','140','吴桥县','4');");
E_D("replace into `fanwe_delivery_region` values('1141','140','献县','4');");
E_D("replace into `fanwe_delivery_region` values('1142','140','孟村','4');");
E_D("replace into `fanwe_delivery_region` values('1143','141','双桥区','4');");
E_D("replace into `fanwe_delivery_region` values('1144','141','双滦区','4');");
E_D("replace into `fanwe_delivery_region` values('1145','141','鹰手营子矿区','4');");
E_D("replace into `fanwe_delivery_region` values('1146','141','承德县','4');");
E_D("replace into `fanwe_delivery_region` values('1147','141','兴隆县','4');");
E_D("replace into `fanwe_delivery_region` values('1148','141','平泉县','4');");
E_D("replace into `fanwe_delivery_region` values('1149','141','滦平县','4');");
E_D("replace into `fanwe_delivery_region` values('1150','141','隆化县','4');");
E_D("replace into `fanwe_delivery_region` values('1151','141','丰宁','4');");
E_D("replace into `fanwe_delivery_region` values('1152','141','宽城','4');");
E_D("replace into `fanwe_delivery_region` values('1153','141','围场','4');");
E_D("replace into `fanwe_delivery_region` values('1154','142','从台区','4');");
E_D("replace into `fanwe_delivery_region` values('1155','142','复兴区','4');");
E_D("replace into `fanwe_delivery_region` values('1156','142','邯山区','4');");
E_D("replace into `fanwe_delivery_region` values('1157','142','峰峰矿区','4');");
E_D("replace into `fanwe_delivery_region` values('1158','142','武安市','4');");
E_D("replace into `fanwe_delivery_region` values('1159','142','邯郸县','4');");
E_D("replace into `fanwe_delivery_region` values('1160','142','临漳县','4');");
E_D("replace into `fanwe_delivery_region` values('1161','142','成安县','4');");
E_D("replace into `fanwe_delivery_region` values('1162','142','大名县','4');");
E_D("replace into `fanwe_delivery_region` values('1163','142','涉县','4');");
E_D("replace into `fanwe_delivery_region` values('1164','142','磁县','4');");
E_D("replace into `fanwe_delivery_region` values('1165','142','肥乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1166','142','永年县','4');");
E_D("replace into `fanwe_delivery_region` values('1167','142','邱县','4');");
E_D("replace into `fanwe_delivery_region` values('1168','142','鸡泽县','4');");
E_D("replace into `fanwe_delivery_region` values('1169','142','广平县','4');");
E_D("replace into `fanwe_delivery_region` values('1170','142','馆陶县','4');");
E_D("replace into `fanwe_delivery_region` values('1171','142','魏县','4');");
E_D("replace into `fanwe_delivery_region` values('1172','142','曲周县','4');");
E_D("replace into `fanwe_delivery_region` values('1173','143','桃城区','4');");
E_D("replace into `fanwe_delivery_region` values('1174','143','冀州市','4');");
E_D("replace into `fanwe_delivery_region` values('1175','143','深州市','4');");
E_D("replace into `fanwe_delivery_region` values('1176','143','枣强县','4');");
E_D("replace into `fanwe_delivery_region` values('1177','143','武邑县','4');");
E_D("replace into `fanwe_delivery_region` values('1178','143','武强县','4');");
E_D("replace into `fanwe_delivery_region` values('1179','143','饶阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1180','143','安平县','4');");
E_D("replace into `fanwe_delivery_region` values('1181','143','故城县','4');");
E_D("replace into `fanwe_delivery_region` values('1182','143','景县','4');");
E_D("replace into `fanwe_delivery_region` values('1183','143','阜城县','4');");
E_D("replace into `fanwe_delivery_region` values('1184','144','安次区','4');");
E_D("replace into `fanwe_delivery_region` values('1185','144','广阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1186','144','霸州市','4');");
E_D("replace into `fanwe_delivery_region` values('1187','144','三河市','4');");
E_D("replace into `fanwe_delivery_region` values('1188','144','固安县','4');");
E_D("replace into `fanwe_delivery_region` values('1189','144','永清县','4');");
E_D("replace into `fanwe_delivery_region` values('1190','144','香河县','4');");
E_D("replace into `fanwe_delivery_region` values('1191','144','大城县','4');");
E_D("replace into `fanwe_delivery_region` values('1192','144','文安县','4');");
E_D("replace into `fanwe_delivery_region` values('1193','144','大厂','4');");
E_D("replace into `fanwe_delivery_region` values('1194','145','海港区','4');");
E_D("replace into `fanwe_delivery_region` values('1195','145','山海关区','4');");
E_D("replace into `fanwe_delivery_region` values('1196','145','北戴河区','4');");
E_D("replace into `fanwe_delivery_region` values('1197','145','昌黎县','4');");
E_D("replace into `fanwe_delivery_region` values('1198','145','抚宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1199','145','卢龙县','4');");
E_D("replace into `fanwe_delivery_region` values('1200','145','青龙','4');");
E_D("replace into `fanwe_delivery_region` values('1201','146','路北区','4');");
E_D("replace into `fanwe_delivery_region` values('1202','146','路南区','4');");
E_D("replace into `fanwe_delivery_region` values('1203','146','古冶区','4');");
E_D("replace into `fanwe_delivery_region` values('1204','146','开平区','4');");
E_D("replace into `fanwe_delivery_region` values('1205','146','丰南区','4');");
E_D("replace into `fanwe_delivery_region` values('1206','146','丰润区','4');");
E_D("replace into `fanwe_delivery_region` values('1207','146','遵化市','4');");
E_D("replace into `fanwe_delivery_region` values('1208','146','迁安市','4');");
E_D("replace into `fanwe_delivery_region` values('1209','146','滦县','4');");
E_D("replace into `fanwe_delivery_region` values('1210','146','滦南县','4');");
E_D("replace into `fanwe_delivery_region` values('1211','146','乐亭县','4');");
E_D("replace into `fanwe_delivery_region` values('1212','146','迁西县','4');");
E_D("replace into `fanwe_delivery_region` values('1213','146','玉田县','4');");
E_D("replace into `fanwe_delivery_region` values('1214','146','唐海县','4');");
E_D("replace into `fanwe_delivery_region` values('1215','147','桥东区','4');");
E_D("replace into `fanwe_delivery_region` values('1216','147','桥西区','4');");
E_D("replace into `fanwe_delivery_region` values('1217','147','南宫市','4');");
E_D("replace into `fanwe_delivery_region` values('1218','147','沙河市','4');");
E_D("replace into `fanwe_delivery_region` values('1219','147','邢台县','4');");
E_D("replace into `fanwe_delivery_region` values('1220','147','临城县','4');");
E_D("replace into `fanwe_delivery_region` values('1221','147','内丘县','4');");
E_D("replace into `fanwe_delivery_region` values('1222','147','柏乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1223','147','隆尧县','4');");
E_D("replace into `fanwe_delivery_region` values('1224','147','任县','4');");
E_D("replace into `fanwe_delivery_region` values('1225','147','南和县','4');");
E_D("replace into `fanwe_delivery_region` values('1226','147','宁晋县','4');");
E_D("replace into `fanwe_delivery_region` values('1227','147','巨鹿县','4');");
E_D("replace into `fanwe_delivery_region` values('1228','147','新河县','4');");
E_D("replace into `fanwe_delivery_region` values('1229','147','广宗县','4');");
E_D("replace into `fanwe_delivery_region` values('1230','147','平乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1231','147','威县','4');");
E_D("replace into `fanwe_delivery_region` values('1232','147','清河县','4');");
E_D("replace into `fanwe_delivery_region` values('1233','147','临西县','4');");
E_D("replace into `fanwe_delivery_region` values('1234','148','桥西区','4');");
E_D("replace into `fanwe_delivery_region` values('1235','148','桥东区','4');");
E_D("replace into `fanwe_delivery_region` values('1236','148','宣化区','4');");
E_D("replace into `fanwe_delivery_region` values('1237','148','下花园区','4');");
E_D("replace into `fanwe_delivery_region` values('1238','148','宣化县','4');");
E_D("replace into `fanwe_delivery_region` values('1239','148','张北县','4');");
E_D("replace into `fanwe_delivery_region` values('1240','148','康保县','4');");
E_D("replace into `fanwe_delivery_region` values('1241','148','沽源县','4');");
E_D("replace into `fanwe_delivery_region` values('1242','148','尚义县','4');");
E_D("replace into `fanwe_delivery_region` values('1243','148','蔚县','4');");
E_D("replace into `fanwe_delivery_region` values('1244','148','阳原县','4');");
E_D("replace into `fanwe_delivery_region` values('1245','148','怀安县','4');");
E_D("replace into `fanwe_delivery_region` values('1246','148','万全县','4');");
E_D("replace into `fanwe_delivery_region` values('1247','148','怀来县','4');");
E_D("replace into `fanwe_delivery_region` values('1248','148','涿鹿县','4');");
E_D("replace into `fanwe_delivery_region` values('1249','148','赤城县','4');");
E_D("replace into `fanwe_delivery_region` values('1250','148','崇礼县','4');");
E_D("replace into `fanwe_delivery_region` values('1251','149','金水区','4');");
E_D("replace into `fanwe_delivery_region` values('1252','149','邙山区','4');");
E_D("replace into `fanwe_delivery_region` values('1253','149','二七区','4');");
E_D("replace into `fanwe_delivery_region` values('1254','149','管城区','4');");
E_D("replace into `fanwe_delivery_region` values('1255','149','中原区','4');");
E_D("replace into `fanwe_delivery_region` values('1256','149','上街区','4');");
E_D("replace into `fanwe_delivery_region` values('1257','149','惠济区','4');");
E_D("replace into `fanwe_delivery_region` values('1258','149','郑东新区','4');");
E_D("replace into `fanwe_delivery_region` values('1259','149','经济技术开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1260','149','高新开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1261','149','出口加工区','4');");
E_D("replace into `fanwe_delivery_region` values('1262','149','巩义市','4');");
E_D("replace into `fanwe_delivery_region` values('1263','149','荥阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1264','149','新密市','4');");
E_D("replace into `fanwe_delivery_region` values('1265','149','新郑市','4');");
E_D("replace into `fanwe_delivery_region` values('1266','149','登封市','4');");
E_D("replace into `fanwe_delivery_region` values('1267','149','中牟县','4');");
E_D("replace into `fanwe_delivery_region` values('1268','150','西工区','4');");
E_D("replace into `fanwe_delivery_region` values('1269','150','老城区','4');");
E_D("replace into `fanwe_delivery_region` values('1270','150','涧西区','4');");
E_D("replace into `fanwe_delivery_region` values('1271','150','瀍河回族区','4');");
E_D("replace into `fanwe_delivery_region` values('1272','150','洛龙区','4');");
E_D("replace into `fanwe_delivery_region` values('1273','150','吉利区','4');");
E_D("replace into `fanwe_delivery_region` values('1274','150','偃师市','4');");
E_D("replace into `fanwe_delivery_region` values('1275','150','孟津县','4');");
E_D("replace into `fanwe_delivery_region` values('1276','150','新安县','4');");
E_D("replace into `fanwe_delivery_region` values('1277','150','栾川县','4');");
E_D("replace into `fanwe_delivery_region` values('1278','150','嵩县','4');");
E_D("replace into `fanwe_delivery_region` values('1279','150','汝阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1280','150','宜阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1281','150','洛宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1282','150','伊川县','4');");
E_D("replace into `fanwe_delivery_region` values('1283','151','鼓楼区','4');");
E_D("replace into `fanwe_delivery_region` values('1284','151','龙亭区','4');");
E_D("replace into `fanwe_delivery_region` values('1285','151','顺河回族区','4');");
E_D("replace into `fanwe_delivery_region` values('1286','151','金明区','4');");
E_D("replace into `fanwe_delivery_region` values('1287','151','禹王台区','4');");
E_D("replace into `fanwe_delivery_region` values('1288','151','杞县','4');");
E_D("replace into `fanwe_delivery_region` values('1289','151','通许县','4');");
E_D("replace into `fanwe_delivery_region` values('1290','151','尉氏县','4');");
E_D("replace into `fanwe_delivery_region` values('1291','151','开封县','4');");
E_D("replace into `fanwe_delivery_region` values('1292','151','兰考县','4');");
E_D("replace into `fanwe_delivery_region` values('1293','152','北关区','4');");
E_D("replace into `fanwe_delivery_region` values('1294','152','文峰区','4');");
E_D("replace into `fanwe_delivery_region` values('1295','152','殷都区','4');");
E_D("replace into `fanwe_delivery_region` values('1296','152','龙安区','4');");
E_D("replace into `fanwe_delivery_region` values('1297','152','林州市','4');");
E_D("replace into `fanwe_delivery_region` values('1298','152','安阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1299','152','汤阴县','4');");
E_D("replace into `fanwe_delivery_region` values('1300','152','滑县','4');");
E_D("replace into `fanwe_delivery_region` values('1301','152','内黄县','4');");
E_D("replace into `fanwe_delivery_region` values('1302','153','淇滨区','4');");
E_D("replace into `fanwe_delivery_region` values('1303','153','山城区','4');");
E_D("replace into `fanwe_delivery_region` values('1304','153','鹤山区','4');");
E_D("replace into `fanwe_delivery_region` values('1305','153','浚县','4');");
E_D("replace into `fanwe_delivery_region` values('1306','153','淇县','4');");
E_D("replace into `fanwe_delivery_region` values('1307','154','济源市','4');");
E_D("replace into `fanwe_delivery_region` values('1308','155','解放区','4');");
E_D("replace into `fanwe_delivery_region` values('1309','155','中站区','4');");
E_D("replace into `fanwe_delivery_region` values('1310','155','马村区','4');");
E_D("replace into `fanwe_delivery_region` values('1311','155','山阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1312','155','沁阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1313','155','孟州市','4');");
E_D("replace into `fanwe_delivery_region` values('1314','155','修武县','4');");
E_D("replace into `fanwe_delivery_region` values('1315','155','博爱县','4');");
E_D("replace into `fanwe_delivery_region` values('1316','155','武陟县','4');");
E_D("replace into `fanwe_delivery_region` values('1317','155','温县','4');");
E_D("replace into `fanwe_delivery_region` values('1318','156','卧龙区','4');");
E_D("replace into `fanwe_delivery_region` values('1319','156','宛城区','4');");
E_D("replace into `fanwe_delivery_region` values('1320','156','邓州市','4');");
E_D("replace into `fanwe_delivery_region` values('1321','156','南召县','4');");
E_D("replace into `fanwe_delivery_region` values('1322','156','方城县','4');");
E_D("replace into `fanwe_delivery_region` values('1323','156','西峡县','4');");
E_D("replace into `fanwe_delivery_region` values('1324','156','镇平县','4');");
E_D("replace into `fanwe_delivery_region` values('1325','156','内乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1326','156','淅川县','4');");
E_D("replace into `fanwe_delivery_region` values('1327','156','社旗县','4');");
E_D("replace into `fanwe_delivery_region` values('1328','156','唐河县','4');");
E_D("replace into `fanwe_delivery_region` values('1329','156','新野县','4');");
E_D("replace into `fanwe_delivery_region` values('1330','156','桐柏县','4');");
E_D("replace into `fanwe_delivery_region` values('1331','157','新华区','4');");
E_D("replace into `fanwe_delivery_region` values('1332','157','卫东区','4');");
E_D("replace into `fanwe_delivery_region` values('1333','157','湛河区','4');");
E_D("replace into `fanwe_delivery_region` values('1334','157','石龙区','4');");
E_D("replace into `fanwe_delivery_region` values('1335','157','舞钢市','4');");
E_D("replace into `fanwe_delivery_region` values('1336','157','汝州市','4');");
E_D("replace into `fanwe_delivery_region` values('1337','157','宝丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1338','157','叶县','4');");
E_D("replace into `fanwe_delivery_region` values('1339','157','鲁山县','4');");
E_D("replace into `fanwe_delivery_region` values('1340','157','郏县','4');");
E_D("replace into `fanwe_delivery_region` values('1341','158','湖滨区','4');");
E_D("replace into `fanwe_delivery_region` values('1342','158','义马市','4');");
E_D("replace into `fanwe_delivery_region` values('1343','158','灵宝市','4');");
E_D("replace into `fanwe_delivery_region` values('1344','158','渑池县','4');");
E_D("replace into `fanwe_delivery_region` values('1345','158','陕县','4');");
E_D("replace into `fanwe_delivery_region` values('1346','158','卢氏县','4');");
E_D("replace into `fanwe_delivery_region` values('1347','159','梁园区','4');");
E_D("replace into `fanwe_delivery_region` values('1348','159','睢阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1349','159','永城市','4');");
E_D("replace into `fanwe_delivery_region` values('1350','159','民权县','4');");
E_D("replace into `fanwe_delivery_region` values('1351','159','睢县','4');");
E_D("replace into `fanwe_delivery_region` values('1352','159','宁陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1353','159','虞城县','4');");
E_D("replace into `fanwe_delivery_region` values('1354','159','柘城县','4');");
E_D("replace into `fanwe_delivery_region` values('1355','159','夏邑县','4');");
E_D("replace into `fanwe_delivery_region` values('1356','160','卫滨区','4');");
E_D("replace into `fanwe_delivery_region` values('1357','160','红旗区','4');");
E_D("replace into `fanwe_delivery_region` values('1358','160','凤泉区','4');");
E_D("replace into `fanwe_delivery_region` values('1359','160','牧野区','4');");
E_D("replace into `fanwe_delivery_region` values('1360','160','卫辉市','4');");
E_D("replace into `fanwe_delivery_region` values('1361','160','辉县市','4');");
E_D("replace into `fanwe_delivery_region` values('1362','160','新乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1363','160','获嘉县','4');");
E_D("replace into `fanwe_delivery_region` values('1364','160','原阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1365','160','延津县','4');");
E_D("replace into `fanwe_delivery_region` values('1366','160','封丘县','4');");
E_D("replace into `fanwe_delivery_region` values('1367','160','长垣县','4');");
E_D("replace into `fanwe_delivery_region` values('1368','161','浉河区','4');");
E_D("replace into `fanwe_delivery_region` values('1369','161','平桥区','4');");
E_D("replace into `fanwe_delivery_region` values('1370','161','罗山县','4');");
E_D("replace into `fanwe_delivery_region` values('1371','161','光山县','4');");
E_D("replace into `fanwe_delivery_region` values('1372','161','新县','4');");
E_D("replace into `fanwe_delivery_region` values('1373','161','商城县','4');");
E_D("replace into `fanwe_delivery_region` values('1374','161','固始县','4');");
E_D("replace into `fanwe_delivery_region` values('1375','161','潢川县','4');");
E_D("replace into `fanwe_delivery_region` values('1376','161','淮滨县','4');");
E_D("replace into `fanwe_delivery_region` values('1377','161','息县','4');");
E_D("replace into `fanwe_delivery_region` values('1378','162','魏都区','4');");
E_D("replace into `fanwe_delivery_region` values('1379','162','禹州市','4');");
E_D("replace into `fanwe_delivery_region` values('1380','162','长葛市','4');");
E_D("replace into `fanwe_delivery_region` values('1381','162','许昌县','4');");
E_D("replace into `fanwe_delivery_region` values('1382','162','鄢陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1383','162','襄城县','4');");
E_D("replace into `fanwe_delivery_region` values('1384','163','川汇区','4');");
E_D("replace into `fanwe_delivery_region` values('1385','163','项城市','4');");
E_D("replace into `fanwe_delivery_region` values('1386','163','扶沟县','4');");
E_D("replace into `fanwe_delivery_region` values('1387','163','西华县','4');");
E_D("replace into `fanwe_delivery_region` values('1388','163','商水县','4');");
E_D("replace into `fanwe_delivery_region` values('1389','163','沈丘县','4');");
E_D("replace into `fanwe_delivery_region` values('1390','163','郸城县','4');");
E_D("replace into `fanwe_delivery_region` values('1391','163','淮阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1392','163','太康县','4');");
E_D("replace into `fanwe_delivery_region` values('1393','163','鹿邑县','4');");
E_D("replace into `fanwe_delivery_region` values('1394','164','驿城区','4');");
E_D("replace into `fanwe_delivery_region` values('1395','164','西平县','4');");
E_D("replace into `fanwe_delivery_region` values('1396','164','上蔡县','4');");
E_D("replace into `fanwe_delivery_region` values('1397','164','平舆县','4');");
E_D("replace into `fanwe_delivery_region` values('1398','164','正阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1399','164','确山县','4');");
E_D("replace into `fanwe_delivery_region` values('1400','164','泌阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1401','164','汝南县','4');");
E_D("replace into `fanwe_delivery_region` values('1402','164','遂平县','4');");
E_D("replace into `fanwe_delivery_region` values('1403','164','新蔡县','4');");
E_D("replace into `fanwe_delivery_region` values('1404','165','郾城区','4');");
E_D("replace into `fanwe_delivery_region` values('1405','165','源汇区','4');");
E_D("replace into `fanwe_delivery_region` values('1406','165','召陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1407','165','舞阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1408','165','临颍县','4');");
E_D("replace into `fanwe_delivery_region` values('1409','166','华龙区','4');");
E_D("replace into `fanwe_delivery_region` values('1410','166','清丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1411','166','南乐县','4');");
E_D("replace into `fanwe_delivery_region` values('1412','166','范县','4');");
E_D("replace into `fanwe_delivery_region` values('1413','166','台前县','4');");
E_D("replace into `fanwe_delivery_region` values('1414','166','濮阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1415','167','道里区','4');");
E_D("replace into `fanwe_delivery_region` values('1416','167','南岗区','4');");
E_D("replace into `fanwe_delivery_region` values('1417','167','动力区','4');");
E_D("replace into `fanwe_delivery_region` values('1418','167','平房区','4');");
E_D("replace into `fanwe_delivery_region` values('1419','167','香坊区','4');");
E_D("replace into `fanwe_delivery_region` values('1420','167','太平区','4');");
E_D("replace into `fanwe_delivery_region` values('1421','167','道外区','4');");
E_D("replace into `fanwe_delivery_region` values('1422','167','阿城区','4');");
E_D("replace into `fanwe_delivery_region` values('1423','167','呼兰区','4');");
E_D("replace into `fanwe_delivery_region` values('1424','167','松北区','4');");
E_D("replace into `fanwe_delivery_region` values('1425','167','尚志市','4');");
E_D("replace into `fanwe_delivery_region` values('1426','167','双城市','4');");
E_D("replace into `fanwe_delivery_region` values('1427','167','五常市','4');");
E_D("replace into `fanwe_delivery_region` values('1428','167','方正县','4');");
E_D("replace into `fanwe_delivery_region` values('1429','167','宾县','4');");
E_D("replace into `fanwe_delivery_region` values('1430','167','依兰县','4');");
E_D("replace into `fanwe_delivery_region` values('1431','167','巴彦县','4');");
E_D("replace into `fanwe_delivery_region` values('1432','167','通河县','4');");
E_D("replace into `fanwe_delivery_region` values('1433','167','木兰县','4');");
E_D("replace into `fanwe_delivery_region` values('1434','167','延寿县','4');");
E_D("replace into `fanwe_delivery_region` values('1435','168','萨尔图区','4');");
E_D("replace into `fanwe_delivery_region` values('1436','168','红岗区','4');");
E_D("replace into `fanwe_delivery_region` values('1437','168','龙凤区','4');");
E_D("replace into `fanwe_delivery_region` values('1438','168','让胡路区','4');");
E_D("replace into `fanwe_delivery_region` values('1439','168','大同区','4');");
E_D("replace into `fanwe_delivery_region` values('1440','168','肇州县','4');");
E_D("replace into `fanwe_delivery_region` values('1441','168','肇源县','4');");
E_D("replace into `fanwe_delivery_region` values('1442','168','林甸县','4');");
E_D("replace into `fanwe_delivery_region` values('1443','168','杜尔伯特','4');");
E_D("replace into `fanwe_delivery_region` values('1444','169','呼玛县','4');");
E_D("replace into `fanwe_delivery_region` values('1445','169','漠河县','4');");
E_D("replace into `fanwe_delivery_region` values('1446','169','塔河县','4');");
E_D("replace into `fanwe_delivery_region` values('1447','170','兴山区','4');");
E_D("replace into `fanwe_delivery_region` values('1448','170','工农区','4');");
E_D("replace into `fanwe_delivery_region` values('1449','170','南山区','4');");
E_D("replace into `fanwe_delivery_region` values('1450','170','兴安区','4');");
E_D("replace into `fanwe_delivery_region` values('1451','170','向阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1452','170','东山区','4');");
E_D("replace into `fanwe_delivery_region` values('1453','170','萝北县','4');");
E_D("replace into `fanwe_delivery_region` values('1454','170','绥滨县','4');");
E_D("replace into `fanwe_delivery_region` values('1455','171','爱辉区','4');");
E_D("replace into `fanwe_delivery_region` values('1456','171','五大连池市','4');");
E_D("replace into `fanwe_delivery_region` values('1457','171','北安市','4');");
E_D("replace into `fanwe_delivery_region` values('1458','171','嫩江县','4');");
E_D("replace into `fanwe_delivery_region` values('1459','171','逊克县','4');");
E_D("replace into `fanwe_delivery_region` values('1460','171','孙吴县','4');");
E_D("replace into `fanwe_delivery_region` values('1461','172','鸡冠区','4');");
E_D("replace into `fanwe_delivery_region` values('1462','172','恒山区','4');");
E_D("replace into `fanwe_delivery_region` values('1463','172','城子河区','4');");
E_D("replace into `fanwe_delivery_region` values('1464','172','滴道区','4');");
E_D("replace into `fanwe_delivery_region` values('1465','172','梨树区','4');");
E_D("replace into `fanwe_delivery_region` values('1466','172','虎林市','4');");
E_D("replace into `fanwe_delivery_region` values('1467','172','密山市','4');");
E_D("replace into `fanwe_delivery_region` values('1468','172','鸡东县','4');");
E_D("replace into `fanwe_delivery_region` values('1469','173','前进区','4');");
E_D("replace into `fanwe_delivery_region` values('1470','173','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('1471','173','向阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1472','173','东风区','4');");
E_D("replace into `fanwe_delivery_region` values('1473','173','同江市','4');");
E_D("replace into `fanwe_delivery_region` values('1474','173','富锦市','4');");
E_D("replace into `fanwe_delivery_region` values('1475','173','桦南县','4');");
E_D("replace into `fanwe_delivery_region` values('1476','173','桦川县','4');");
E_D("replace into `fanwe_delivery_region` values('1477','173','汤原县','4');");
E_D("replace into `fanwe_delivery_region` values('1478','173','抚远县','4');");
E_D("replace into `fanwe_delivery_region` values('1479','174','爱民区','4');");
E_D("replace into `fanwe_delivery_region` values('1480','174','东安区','4');");
E_D("replace into `fanwe_delivery_region` values('1481','174','阳明区','4');");
E_D("replace into `fanwe_delivery_region` values('1482','174','西安区','4');");
E_D("replace into `fanwe_delivery_region` values('1483','174','绥芬河市','4');");
E_D("replace into `fanwe_delivery_region` values('1484','174','海林市','4');");
E_D("replace into `fanwe_delivery_region` values('1485','174','宁安市','4');");
E_D("replace into `fanwe_delivery_region` values('1486','174','穆棱市','4');");
E_D("replace into `fanwe_delivery_region` values('1487','174','东宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1488','174','林口县','4');");
E_D("replace into `fanwe_delivery_region` values('1489','175','桃山区','4');");
E_D("replace into `fanwe_delivery_region` values('1490','175','新兴区','4');");
E_D("replace into `fanwe_delivery_region` values('1491','175','茄子河区','4');");
E_D("replace into `fanwe_delivery_region` values('1492','175','勃利县','4');");
E_D("replace into `fanwe_delivery_region` values('1493','176','龙沙区','4');");
E_D("replace into `fanwe_delivery_region` values('1494','176','昂昂溪区','4');");
E_D("replace into `fanwe_delivery_region` values('1495','176','铁峰区','4');");
E_D("replace into `fanwe_delivery_region` values('1496','176','建华区','4');");
E_D("replace into `fanwe_delivery_region` values('1497','176','富拉尔基区','4');");
E_D("replace into `fanwe_delivery_region` values('1498','176','碾子山区','4');");
E_D("replace into `fanwe_delivery_region` values('1499','176','梅里斯达斡尔区','4');");
E_D("replace into `fanwe_delivery_region` values('1500','176','讷河市','4');");
E_D("replace into `fanwe_delivery_region` values('1501','176','龙江县','4');");
E_D("replace into `fanwe_delivery_region` values('1502','176','依安县','4');");
E_D("replace into `fanwe_delivery_region` values('1503','176','泰来县','4');");
E_D("replace into `fanwe_delivery_region` values('1504','176','甘南县','4');");
E_D("replace into `fanwe_delivery_region` values('1505','176','富裕县','4');");
E_D("replace into `fanwe_delivery_region` values('1506','176','克山县','4');");
E_D("replace into `fanwe_delivery_region` values('1507','176','克东县','4');");
E_D("replace into `fanwe_delivery_region` values('1508','176','拜泉县','4');");
E_D("replace into `fanwe_delivery_region` values('1509','177','尖山区','4');");
E_D("replace into `fanwe_delivery_region` values('1510','177','岭东区','4');");
E_D("replace into `fanwe_delivery_region` values('1511','177','四方台区','4');");
E_D("replace into `fanwe_delivery_region` values('1512','177','宝山区','4');");
E_D("replace into `fanwe_delivery_region` values('1513','177','集贤县','4');");
E_D("replace into `fanwe_delivery_region` values('1514','177','友谊县','4');");
E_D("replace into `fanwe_delivery_region` values('1515','177','宝清县','4');");
E_D("replace into `fanwe_delivery_region` values('1516','177','饶河县','4');");
E_D("replace into `fanwe_delivery_region` values('1517','178','北林区','4');");
E_D("replace into `fanwe_delivery_region` values('1518','178','安达市','4');");
E_D("replace into `fanwe_delivery_region` values('1519','178','肇东市','4');");
E_D("replace into `fanwe_delivery_region` values('1520','178','海伦市','4');");
E_D("replace into `fanwe_delivery_region` values('1521','178','望奎县','4');");
E_D("replace into `fanwe_delivery_region` values('1522','178','兰西县','4');");
E_D("replace into `fanwe_delivery_region` values('1523','178','青冈县','4');");
E_D("replace into `fanwe_delivery_region` values('1524','178','庆安县','4');");
E_D("replace into `fanwe_delivery_region` values('1525','178','明水县','4');");
E_D("replace into `fanwe_delivery_region` values('1526','178','绥棱县','4');");
E_D("replace into `fanwe_delivery_region` values('1527','179','伊春区','4');");
E_D("replace into `fanwe_delivery_region` values('1528','179','带岭区','4');");
E_D("replace into `fanwe_delivery_region` values('1529','179','南岔区','4');");
E_D("replace into `fanwe_delivery_region` values('1530','179','金山屯区','4');");
E_D("replace into `fanwe_delivery_region` values('1531','179','西林区','4');");
E_D("replace into `fanwe_delivery_region` values('1532','179','美溪区','4');");
E_D("replace into `fanwe_delivery_region` values('1533','179','乌马河区','4');");
E_D("replace into `fanwe_delivery_region` values('1534','179','翠峦区','4');");
E_D("replace into `fanwe_delivery_region` values('1535','179','友好区','4');");
E_D("replace into `fanwe_delivery_region` values('1536','179','上甘岭区','4');");
E_D("replace into `fanwe_delivery_region` values('1537','179','五营区','4');");
E_D("replace into `fanwe_delivery_region` values('1538','179','红星区','4');");
E_D("replace into `fanwe_delivery_region` values('1539','179','新青区','4');");
E_D("replace into `fanwe_delivery_region` values('1540','179','汤旺河区','4');");
E_D("replace into `fanwe_delivery_region` values('1541','179','乌伊岭区','4');");
E_D("replace into `fanwe_delivery_region` values('1542','179','铁力市','4');");
E_D("replace into `fanwe_delivery_region` values('1543','179','嘉荫县','4');");
E_D("replace into `fanwe_delivery_region` values('1544','180','江岸区','4');");
E_D("replace into `fanwe_delivery_region` values('1545','180','武昌区','4');");
E_D("replace into `fanwe_delivery_region` values('1546','180','江汉区','4');");
E_D("replace into `fanwe_delivery_region` values('1547','180','硚口区','4');");
E_D("replace into `fanwe_delivery_region` values('1548','180','汉阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1549','180','青山区','4');");
E_D("replace into `fanwe_delivery_region` values('1550','180','洪山区','4');");
E_D("replace into `fanwe_delivery_region` values('1551','180','东西湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1552','180','汉南区','4');");
E_D("replace into `fanwe_delivery_region` values('1553','180','蔡甸区','4');");
E_D("replace into `fanwe_delivery_region` values('1554','180','江夏区','4');");
E_D("replace into `fanwe_delivery_region` values('1555','180','黄陂区','4');");
E_D("replace into `fanwe_delivery_region` values('1556','180','新洲区','4');");
E_D("replace into `fanwe_delivery_region` values('1557','180','经济开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1558','181','仙桃市','4');");
E_D("replace into `fanwe_delivery_region` values('1559','182','鄂城区','4');");
E_D("replace into `fanwe_delivery_region` values('1560','182','华容区','4');");
E_D("replace into `fanwe_delivery_region` values('1561','182','梁子湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1562','183','黄州区','4');");
E_D("replace into `fanwe_delivery_region` values('1563','183','麻城市','4');");
E_D("replace into `fanwe_delivery_region` values('1564','183','武穴市','4');");
E_D("replace into `fanwe_delivery_region` values('1565','183','团风县','4');");
E_D("replace into `fanwe_delivery_region` values('1566','183','红安县','4');");
E_D("replace into `fanwe_delivery_region` values('1567','183','罗田县','4');");
E_D("replace into `fanwe_delivery_region` values('1568','183','英山县','4');");
E_D("replace into `fanwe_delivery_region` values('1569','183','浠水县','4');");
E_D("replace into `fanwe_delivery_region` values('1570','183','蕲春县','4');");
E_D("replace into `fanwe_delivery_region` values('1571','183','黄梅县','4');");
E_D("replace into `fanwe_delivery_region` values('1572','184','黄石港区','4');");
E_D("replace into `fanwe_delivery_region` values('1573','184','西塞山区','4');");
E_D("replace into `fanwe_delivery_region` values('1574','184','下陆区','4');");
E_D("replace into `fanwe_delivery_region` values('1575','184','铁山区','4');");
E_D("replace into `fanwe_delivery_region` values('1576','184','大冶市','4');");
E_D("replace into `fanwe_delivery_region` values('1577','184','阳新县','4');");
E_D("replace into `fanwe_delivery_region` values('1578','185','东宝区','4');");
E_D("replace into `fanwe_delivery_region` values('1579','185','掇刀区','4');");
E_D("replace into `fanwe_delivery_region` values('1580','185','钟祥市','4');");
E_D("replace into `fanwe_delivery_region` values('1581','185','京山县','4');");
E_D("replace into `fanwe_delivery_region` values('1582','185','沙洋县','4');");
E_D("replace into `fanwe_delivery_region` values('1583','186','沙市区','4');");
E_D("replace into `fanwe_delivery_region` values('1584','186','荆州区','4');");
E_D("replace into `fanwe_delivery_region` values('1585','186','石首市','4');");
E_D("replace into `fanwe_delivery_region` values('1586','186','洪湖市','4');");
E_D("replace into `fanwe_delivery_region` values('1587','186','松滋市','4');");
E_D("replace into `fanwe_delivery_region` values('1588','186','公安县','4');");
E_D("replace into `fanwe_delivery_region` values('1589','186','监利县','4');");
E_D("replace into `fanwe_delivery_region` values('1590','186','江陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1591','187','潜江市','4');");
E_D("replace into `fanwe_delivery_region` values('1592','188','神农架林区','4');");
E_D("replace into `fanwe_delivery_region` values('1593','189','张湾区','4');");
E_D("replace into `fanwe_delivery_region` values('1594','189','茅箭区','4');");
E_D("replace into `fanwe_delivery_region` values('1595','189','丹江口市','4');");
E_D("replace into `fanwe_delivery_region` values('1596','189','郧县','4');");
E_D("replace into `fanwe_delivery_region` values('1597','189','郧西县','4');");
E_D("replace into `fanwe_delivery_region` values('1598','189','竹山县','4');");
E_D("replace into `fanwe_delivery_region` values('1599','189','竹溪县','4');");
E_D("replace into `fanwe_delivery_region` values('1600','189','房县','4');");
E_D("replace into `fanwe_delivery_region` values('1601','190','曾都区','4');");
E_D("replace into `fanwe_delivery_region` values('1602','190','广水市','4');");
E_D("replace into `fanwe_delivery_region` values('1603','191','天门市','4');");
E_D("replace into `fanwe_delivery_region` values('1604','192','咸安区','4');");
E_D("replace into `fanwe_delivery_region` values('1605','192','赤壁市','4');");
E_D("replace into `fanwe_delivery_region` values('1606','192','嘉鱼县','4');");
E_D("replace into `fanwe_delivery_region` values('1607','192','通城县','4');");
E_D("replace into `fanwe_delivery_region` values('1608','192','崇阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1609','192','通山县','4');");
E_D("replace into `fanwe_delivery_region` values('1610','193','襄城区','4');");
E_D("replace into `fanwe_delivery_region` values('1611','193','樊城区','4');");
E_D("replace into `fanwe_delivery_region` values('1612','193','襄阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1613','193','老河口市','4');");
E_D("replace into `fanwe_delivery_region` values('1614','193','枣阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1615','193','宜城市','4');");
E_D("replace into `fanwe_delivery_region` values('1616','193','南漳县','4');");
E_D("replace into `fanwe_delivery_region` values('1617','193','谷城县','4');");
E_D("replace into `fanwe_delivery_region` values('1618','193','保康县','4');");
E_D("replace into `fanwe_delivery_region` values('1619','194','孝南区','4');");
E_D("replace into `fanwe_delivery_region` values('1620','194','应城市','4');");
E_D("replace into `fanwe_delivery_region` values('1621','194','安陆市','4');");
E_D("replace into `fanwe_delivery_region` values('1622','194','汉川市','4');");
E_D("replace into `fanwe_delivery_region` values('1623','194','孝昌县','4');");
E_D("replace into `fanwe_delivery_region` values('1624','194','大悟县','4');");
E_D("replace into `fanwe_delivery_region` values('1625','194','云梦县','4');");
E_D("replace into `fanwe_delivery_region` values('1626','195','长阳','4');");
E_D("replace into `fanwe_delivery_region` values('1627','195','五峰','4');");
E_D("replace into `fanwe_delivery_region` values('1628','195','西陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1629','195','伍家岗区','4');");
E_D("replace into `fanwe_delivery_region` values('1630','195','点军区','4');");
E_D("replace into `fanwe_delivery_region` values('1631','195','猇亭区','4');");
E_D("replace into `fanwe_delivery_region` values('1632','195','夷陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1633','195','宜都市','4');");
E_D("replace into `fanwe_delivery_region` values('1634','195','当阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1635','195','枝江市','4');");
E_D("replace into `fanwe_delivery_region` values('1636','195','远安县','4');");
E_D("replace into `fanwe_delivery_region` values('1637','195','兴山县','4');");
E_D("replace into `fanwe_delivery_region` values('1638','195','秭归县','4');");
E_D("replace into `fanwe_delivery_region` values('1639','196','恩施市','4');");
E_D("replace into `fanwe_delivery_region` values('1640','196','利川市','4');");
E_D("replace into `fanwe_delivery_region` values('1641','196','建始县','4');");
E_D("replace into `fanwe_delivery_region` values('1642','196','巴东县','4');");
E_D("replace into `fanwe_delivery_region` values('1643','196','宣恩县','4');");
E_D("replace into `fanwe_delivery_region` values('1644','196','咸丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1645','196','来凤县','4');");
E_D("replace into `fanwe_delivery_region` values('1646','196','鹤峰县','4');");
E_D("replace into `fanwe_delivery_region` values('1647','197','岳麓区','4');");
E_D("replace into `fanwe_delivery_region` values('1648','197','芙蓉区','4');");
E_D("replace into `fanwe_delivery_region` values('1649','197','天心区','4');");
E_D("replace into `fanwe_delivery_region` values('1650','197','开福区','4');");
E_D("replace into `fanwe_delivery_region` values('1651','197','雨花区','4');");
E_D("replace into `fanwe_delivery_region` values('1652','197','开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1653','197','浏阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1654','197','长沙县','4');");
E_D("replace into `fanwe_delivery_region` values('1655','197','望城县','4');");
E_D("replace into `fanwe_delivery_region` values('1656','197','宁乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1657','198','永定区','4');");
E_D("replace into `fanwe_delivery_region` values('1658','198','武陵源区','4');");
E_D("replace into `fanwe_delivery_region` values('1659','198','慈利县','4');");
E_D("replace into `fanwe_delivery_region` values('1660','198','桑植县','4');");
E_D("replace into `fanwe_delivery_region` values('1661','199','武陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1662','199','鼎城区','4');");
E_D("replace into `fanwe_delivery_region` values('1663','199','津市市','4');");
E_D("replace into `fanwe_delivery_region` values('1664','199','安乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1665','199','汉寿县','4');");
E_D("replace into `fanwe_delivery_region` values('1666','199','澧县','4');");
E_D("replace into `fanwe_delivery_region` values('1667','199','临澧县','4');");
E_D("replace into `fanwe_delivery_region` values('1668','199','桃源县','4');");
E_D("replace into `fanwe_delivery_region` values('1669','199','石门县','4');");
E_D("replace into `fanwe_delivery_region` values('1670','200','北湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1671','200','苏仙区','4');");
E_D("replace into `fanwe_delivery_region` values('1672','200','资兴市','4');");
E_D("replace into `fanwe_delivery_region` values('1673','200','桂阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1674','200','宜章县','4');");
E_D("replace into `fanwe_delivery_region` values('1675','200','永兴县','4');");
E_D("replace into `fanwe_delivery_region` values('1676','200','嘉禾县','4');");
E_D("replace into `fanwe_delivery_region` values('1677','200','临武县','4');");
E_D("replace into `fanwe_delivery_region` values('1678','200','汝城县','4');");
E_D("replace into `fanwe_delivery_region` values('1679','200','桂东县','4');");
E_D("replace into `fanwe_delivery_region` values('1680','200','安仁县','4');");
E_D("replace into `fanwe_delivery_region` values('1681','201','雁峰区','4');");
E_D("replace into `fanwe_delivery_region` values('1682','201','珠晖区','4');");
E_D("replace into `fanwe_delivery_region` values('1683','201','石鼓区','4');");
E_D("replace into `fanwe_delivery_region` values('1684','201','蒸湘区','4');");
E_D("replace into `fanwe_delivery_region` values('1685','201','南岳区','4');");
E_D("replace into `fanwe_delivery_region` values('1686','201','耒阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1687','201','常宁市','4');");
E_D("replace into `fanwe_delivery_region` values('1688','201','衡阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1689','201','衡南县','4');");
E_D("replace into `fanwe_delivery_region` values('1690','201','衡山县','4');");
E_D("replace into `fanwe_delivery_region` values('1691','201','衡东县','4');");
E_D("replace into `fanwe_delivery_region` values('1692','201','祁东县','4');");
E_D("replace into `fanwe_delivery_region` values('1693','202','鹤城区','4');");
E_D("replace into `fanwe_delivery_region` values('1694','202','靖州','4');");
E_D("replace into `fanwe_delivery_region` values('1695','202','麻阳','4');");
E_D("replace into `fanwe_delivery_region` values('1696','202','通道','4');");
E_D("replace into `fanwe_delivery_region` values('1697','202','新晃','4');");
E_D("replace into `fanwe_delivery_region` values('1698','202','芷江','4');");
E_D("replace into `fanwe_delivery_region` values('1699','202','沅陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1700','202','辰溪县','4');");
E_D("replace into `fanwe_delivery_region` values('1701','202','溆浦县','4');");
E_D("replace into `fanwe_delivery_region` values('1702','202','中方县','4');");
E_D("replace into `fanwe_delivery_region` values('1703','202','会同县','4');");
E_D("replace into `fanwe_delivery_region` values('1704','202','洪江市','4');");
E_D("replace into `fanwe_delivery_region` values('1705','203','娄星区','4');");
E_D("replace into `fanwe_delivery_region` values('1706','203','冷水江市','4');");
E_D("replace into `fanwe_delivery_region` values('1707','203','涟源市','4');");
E_D("replace into `fanwe_delivery_region` values('1708','203','双峰县','4');");
E_D("replace into `fanwe_delivery_region` values('1709','203','新化县','4');");
E_D("replace into `fanwe_delivery_region` values('1710','204','城步','4');");
E_D("replace into `fanwe_delivery_region` values('1711','204','双清区','4');");
E_D("replace into `fanwe_delivery_region` values('1712','204','大祥区','4');");
E_D("replace into `fanwe_delivery_region` values('1713','204','北塔区','4');");
E_D("replace into `fanwe_delivery_region` values('1714','204','武冈市','4');");
E_D("replace into `fanwe_delivery_region` values('1715','204','邵东县','4');");
E_D("replace into `fanwe_delivery_region` values('1716','204','新邵县','4');");
E_D("replace into `fanwe_delivery_region` values('1717','204','邵阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1718','204','隆回县','4');");
E_D("replace into `fanwe_delivery_region` values('1719','204','洞口县','4');");
E_D("replace into `fanwe_delivery_region` values('1720','204','绥宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1721','204','新宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1722','205','岳塘区','4');");
E_D("replace into `fanwe_delivery_region` values('1723','205','雨湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1724','205','湘乡市','4');");
E_D("replace into `fanwe_delivery_region` values('1725','205','韶山市','4');");
E_D("replace into `fanwe_delivery_region` values('1726','205','湘潭县','4');");
E_D("replace into `fanwe_delivery_region` values('1727','206','吉首市','4');");
E_D("replace into `fanwe_delivery_region` values('1728','206','泸溪县','4');");
E_D("replace into `fanwe_delivery_region` values('1729','206','凤凰县','4');");
E_D("replace into `fanwe_delivery_region` values('1730','206','花垣县','4');");
E_D("replace into `fanwe_delivery_region` values('1731','206','保靖县','4');");
E_D("replace into `fanwe_delivery_region` values('1732','206','古丈县','4');");
E_D("replace into `fanwe_delivery_region` values('1733','206','永顺县','4');");
E_D("replace into `fanwe_delivery_region` values('1734','206','龙山县','4');");
E_D("replace into `fanwe_delivery_region` values('1735','207','赫山区','4');");
E_D("replace into `fanwe_delivery_region` values('1736','207','资阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1737','207','沅江市','4');");
E_D("replace into `fanwe_delivery_region` values('1738','207','南县','4');");
E_D("replace into `fanwe_delivery_region` values('1739','207','桃江县','4');");
E_D("replace into `fanwe_delivery_region` values('1740','207','安化县','4');");
E_D("replace into `fanwe_delivery_region` values('1741','208','江华','4');");
E_D("replace into `fanwe_delivery_region` values('1742','208','冷水滩区','4');");
E_D("replace into `fanwe_delivery_region` values('1743','208','零陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1744','208','祁阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1745','208','东安县','4');");
E_D("replace into `fanwe_delivery_region` values('1746','208','双牌县','4');");
E_D("replace into `fanwe_delivery_region` values('1747','208','道县','4');");
E_D("replace into `fanwe_delivery_region` values('1748','208','江永县','4');");
E_D("replace into `fanwe_delivery_region` values('1749','208','宁远县','4');");
E_D("replace into `fanwe_delivery_region` values('1750','208','蓝山县','4');");
E_D("replace into `fanwe_delivery_region` values('1751','208','新田县','4');");
E_D("replace into `fanwe_delivery_region` values('1752','209','岳阳楼区','4');");
E_D("replace into `fanwe_delivery_region` values('1753','209','君山区','4');");
E_D("replace into `fanwe_delivery_region` values('1754','209','云溪区','4');");
E_D("replace into `fanwe_delivery_region` values('1755','209','汨罗市','4');");
E_D("replace into `fanwe_delivery_region` values('1756','209','临湘市','4');");
E_D("replace into `fanwe_delivery_region` values('1757','209','岳阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1758','209','华容县','4');");
E_D("replace into `fanwe_delivery_region` values('1759','209','湘阴县','4');");
E_D("replace into `fanwe_delivery_region` values('1760','209','平江县','4');");
E_D("replace into `fanwe_delivery_region` values('1761','210','天元区','4');");
E_D("replace into `fanwe_delivery_region` values('1762','210','荷塘区','4');");
E_D("replace into `fanwe_delivery_region` values('1763','210','芦淞区','4');");
E_D("replace into `fanwe_delivery_region` values('1764','210','石峰区','4');");
E_D("replace into `fanwe_delivery_region` values('1765','210','醴陵市','4');");
E_D("replace into `fanwe_delivery_region` values('1766','210','株洲县','4');");
E_D("replace into `fanwe_delivery_region` values('1767','210','攸县','4');");
E_D("replace into `fanwe_delivery_region` values('1768','210','茶陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1769','210','炎陵县','4');");
E_D("replace into `fanwe_delivery_region` values('1770','211','朝阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1771','211','宽城区','4');");
E_D("replace into `fanwe_delivery_region` values('1772','211','二道区','4');");
E_D("replace into `fanwe_delivery_region` values('1773','211','南关区','4');");
E_D("replace into `fanwe_delivery_region` values('1774','211','绿园区','4');");
E_D("replace into `fanwe_delivery_region` values('1775','211','双阳区','4');");
E_D("replace into `fanwe_delivery_region` values('1776','211','净月潭开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1777','211','高新技术开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1778','211','经济技术开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1779','211','汽车产业开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1780','211','德惠市','4');");
E_D("replace into `fanwe_delivery_region` values('1781','211','九台市','4');");
E_D("replace into `fanwe_delivery_region` values('1782','211','榆树市','4');");
E_D("replace into `fanwe_delivery_region` values('1783','211','农安县','4');");
E_D("replace into `fanwe_delivery_region` values('1784','212','船营区','4');");
E_D("replace into `fanwe_delivery_region` values('1785','212','昌邑区','4');");
E_D("replace into `fanwe_delivery_region` values('1786','212','龙潭区','4');");
E_D("replace into `fanwe_delivery_region` values('1787','212','丰满区','4');");
E_D("replace into `fanwe_delivery_region` values('1788','212','蛟河市','4');");
E_D("replace into `fanwe_delivery_region` values('1789','212','桦甸市','4');");
E_D("replace into `fanwe_delivery_region` values('1790','212','舒兰市','4');");
E_D("replace into `fanwe_delivery_region` values('1791','212','磐石市','4');");
E_D("replace into `fanwe_delivery_region` values('1792','212','永吉县','4');");
E_D("replace into `fanwe_delivery_region` values('1793','213','洮北区','4');");
E_D("replace into `fanwe_delivery_region` values('1794','213','洮南市','4');");
E_D("replace into `fanwe_delivery_region` values('1795','213','大安市','4');");
E_D("replace into `fanwe_delivery_region` values('1796','213','镇赉县','4');");
E_D("replace into `fanwe_delivery_region` values('1797','213','通榆县','4');");
E_D("replace into `fanwe_delivery_region` values('1798','214','江源区','4');");
E_D("replace into `fanwe_delivery_region` values('1799','214','八道江区','4');");
E_D("replace into `fanwe_delivery_region` values('1800','214','长白','4');");
E_D("replace into `fanwe_delivery_region` values('1801','214','临江市','4');");
E_D("replace into `fanwe_delivery_region` values('1802','214','抚松县','4');");
E_D("replace into `fanwe_delivery_region` values('1803','214','靖宇县','4');");
E_D("replace into `fanwe_delivery_region` values('1804','215','龙山区','4');");
E_D("replace into `fanwe_delivery_region` values('1805','215','西安区','4');");
E_D("replace into `fanwe_delivery_region` values('1806','215','东丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1807','215','东辽县','4');");
E_D("replace into `fanwe_delivery_region` values('1808','216','铁西区','4');");
E_D("replace into `fanwe_delivery_region` values('1809','216','铁东区','4');");
E_D("replace into `fanwe_delivery_region` values('1810','216','伊通','4');");
E_D("replace into `fanwe_delivery_region` values('1811','216','公主岭市','4');");
E_D("replace into `fanwe_delivery_region` values('1812','216','双辽市','4');");
E_D("replace into `fanwe_delivery_region` values('1813','216','梨树县','4');");
E_D("replace into `fanwe_delivery_region` values('1814','217','前郭尔罗斯','4');");
E_D("replace into `fanwe_delivery_region` values('1815','217','宁江区','4');");
E_D("replace into `fanwe_delivery_region` values('1816','217','长岭县','4');");
E_D("replace into `fanwe_delivery_region` values('1817','217','乾安县','4');");
E_D("replace into `fanwe_delivery_region` values('1818','217','扶余县','4');");
E_D("replace into `fanwe_delivery_region` values('1819','218','东昌区','4');");
E_D("replace into `fanwe_delivery_region` values('1820','218','二道江区','4');");
E_D("replace into `fanwe_delivery_region` values('1821','218','梅河口市','4');");
E_D("replace into `fanwe_delivery_region` values('1822','218','集安市','4');");
E_D("replace into `fanwe_delivery_region` values('1823','218','通化县','4');");
E_D("replace into `fanwe_delivery_region` values('1824','218','辉南县','4');");
E_D("replace into `fanwe_delivery_region` values('1825','218','柳河县','4');");
E_D("replace into `fanwe_delivery_region` values('1826','219','延吉市','4');");
E_D("replace into `fanwe_delivery_region` values('1827','219','图们市','4');");
E_D("replace into `fanwe_delivery_region` values('1828','219','敦化市','4');");
E_D("replace into `fanwe_delivery_region` values('1829','219','珲春市','4');");
E_D("replace into `fanwe_delivery_region` values('1830','219','龙井市','4');");
E_D("replace into `fanwe_delivery_region` values('1831','219','和龙市','4');");
E_D("replace into `fanwe_delivery_region` values('1832','219','安图县','4');");
E_D("replace into `fanwe_delivery_region` values('1833','219','汪清县','4');");
E_D("replace into `fanwe_delivery_region` values('1834','220','玄武区','4');");
E_D("replace into `fanwe_delivery_region` values('1835','220','鼓楼区','4');");
E_D("replace into `fanwe_delivery_region` values('1836','220','白下区','4');");
E_D("replace into `fanwe_delivery_region` values('1837','220','建邺区','4');");
E_D("replace into `fanwe_delivery_region` values('1838','220','秦淮区','4');");
E_D("replace into `fanwe_delivery_region` values('1839','220','雨花台区','4');");
E_D("replace into `fanwe_delivery_region` values('1840','220','下关区','4');");
E_D("replace into `fanwe_delivery_region` values('1841','220','栖霞区','4');");
E_D("replace into `fanwe_delivery_region` values('1842','220','浦口区','4');");
E_D("replace into `fanwe_delivery_region` values('1843','220','江宁区','4');");
E_D("replace into `fanwe_delivery_region` values('1844','220','六合区','4');");
E_D("replace into `fanwe_delivery_region` values('1845','220','溧水县','4');");
E_D("replace into `fanwe_delivery_region` values('1846','220','高淳县','4');");
E_D("replace into `fanwe_delivery_region` values('1847','221','沧浪区','4');");
E_D("replace into `fanwe_delivery_region` values('1848','221','金阊区','4');");
E_D("replace into `fanwe_delivery_region` values('1849','221','平江区','4');");
E_D("replace into `fanwe_delivery_region` values('1850','221','虎丘区','4');");
E_D("replace into `fanwe_delivery_region` values('1851','221','吴中区','4');");
E_D("replace into `fanwe_delivery_region` values('1852','221','相城区','4');");
E_D("replace into `fanwe_delivery_region` values('1853','221','园区','4');");
E_D("replace into `fanwe_delivery_region` values('1854','221','新区','4');");
E_D("replace into `fanwe_delivery_region` values('1855','221','常熟市','4');");
E_D("replace into `fanwe_delivery_region` values('1856','221','张家港市','4');");
E_D("replace into `fanwe_delivery_region` values('1857','221','玉山镇','4');");
E_D("replace into `fanwe_delivery_region` values('1858','221','巴城镇','4');");
E_D("replace into `fanwe_delivery_region` values('1859','221','周市镇','4');");
E_D("replace into `fanwe_delivery_region` values('1860','221','陆家镇','4');");
E_D("replace into `fanwe_delivery_region` values('1861','221','花桥镇','4');");
E_D("replace into `fanwe_delivery_region` values('1862','221','淀山湖镇','4');");
E_D("replace into `fanwe_delivery_region` values('1863','221','张浦镇','4');");
E_D("replace into `fanwe_delivery_region` values('1864','221','周庄镇','4');");
E_D("replace into `fanwe_delivery_region` values('1865','221','千灯镇','4');");
E_D("replace into `fanwe_delivery_region` values('1866','221','锦溪镇','4');");
E_D("replace into `fanwe_delivery_region` values('1867','221','开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1868','221','吴江市','4');");
E_D("replace into `fanwe_delivery_region` values('1869','221','太仓市','4');");
E_D("replace into `fanwe_delivery_region` values('1870','222','崇安区','4');");
E_D("replace into `fanwe_delivery_region` values('1871','222','北塘区','4');");
E_D("replace into `fanwe_delivery_region` values('1872','222','南长区','4');");
E_D("replace into `fanwe_delivery_region` values('1873','222','锡山区','4');");
E_D("replace into `fanwe_delivery_region` values('1874','222','惠山区','4');");
E_D("replace into `fanwe_delivery_region` values('1875','222','滨湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1876','222','新区','4');");
E_D("replace into `fanwe_delivery_region` values('1877','222','江阴市','4');");
E_D("replace into `fanwe_delivery_region` values('1878','222','宜兴市','4');");
E_D("replace into `fanwe_delivery_region` values('1879','223','天宁区','4');");
E_D("replace into `fanwe_delivery_region` values('1880','223','钟楼区','4');");
E_D("replace into `fanwe_delivery_region` values('1881','223','戚墅堰区','4');");
E_D("replace into `fanwe_delivery_region` values('1882','223','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('1883','223','新北区','4');");
E_D("replace into `fanwe_delivery_region` values('1884','223','武进区','4');");
E_D("replace into `fanwe_delivery_region` values('1885','223','溧阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1886','223','金坛市','4');");
E_D("replace into `fanwe_delivery_region` values('1887','224','清河区','4');");
E_D("replace into `fanwe_delivery_region` values('1888','224','清浦区','4');");
E_D("replace into `fanwe_delivery_region` values('1889','224','楚州区','4');");
E_D("replace into `fanwe_delivery_region` values('1890','224','淮阴区','4');");
E_D("replace into `fanwe_delivery_region` values('1891','224','涟水县','4');");
E_D("replace into `fanwe_delivery_region` values('1892','224','洪泽县','4');");
E_D("replace into `fanwe_delivery_region` values('1893','224','盱眙县','4');");
E_D("replace into `fanwe_delivery_region` values('1894','224','金湖县','4');");
E_D("replace into `fanwe_delivery_region` values('1895','225','新浦区','4');");
E_D("replace into `fanwe_delivery_region` values('1896','225','连云区','4');");
E_D("replace into `fanwe_delivery_region` values('1897','225','海州区','4');");
E_D("replace into `fanwe_delivery_region` values('1898','225','赣榆县','4');");
E_D("replace into `fanwe_delivery_region` values('1899','225','东海县','4');");
E_D("replace into `fanwe_delivery_region` values('1900','225','灌云县','4');");
E_D("replace into `fanwe_delivery_region` values('1901','225','灌南县','4');");
E_D("replace into `fanwe_delivery_region` values('1902','226','崇川区','4');");
E_D("replace into `fanwe_delivery_region` values('1903','226','港闸区','4');");
E_D("replace into `fanwe_delivery_region` values('1904','226','经济开发区','4');");
E_D("replace into `fanwe_delivery_region` values('1905','226','启东市','4');");
E_D("replace into `fanwe_delivery_region` values('1906','226','如皋市','4');");
E_D("replace into `fanwe_delivery_region` values('1907','226','通州市','4');");
E_D("replace into `fanwe_delivery_region` values('1908','226','海门市','4');");
E_D("replace into `fanwe_delivery_region` values('1909','226','海安县','4');");
E_D("replace into `fanwe_delivery_region` values('1910','226','如东县','4');");
E_D("replace into `fanwe_delivery_region` values('1911','227','宿城区','4');");
E_D("replace into `fanwe_delivery_region` values('1912','227','宿豫区','4');");
E_D("replace into `fanwe_delivery_region` values('1913','227','宿豫县','4');");
E_D("replace into `fanwe_delivery_region` values('1914','227','沭阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1915','227','泗阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1916','227','泗洪县','4');");
E_D("replace into `fanwe_delivery_region` values('1917','228','海陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1918','228','高港区','4');");
E_D("replace into `fanwe_delivery_region` values('1919','228','兴化市','4');");
E_D("replace into `fanwe_delivery_region` values('1920','228','靖江市','4');");
E_D("replace into `fanwe_delivery_region` values('1921','228','泰兴市','4');");
E_D("replace into `fanwe_delivery_region` values('1922','228','姜堰市','4');");
E_D("replace into `fanwe_delivery_region` values('1923','229','云龙区','4');");
E_D("replace into `fanwe_delivery_region` values('1924','229','鼓楼区','4');");
E_D("replace into `fanwe_delivery_region` values('1925','229','九里区','4');");
E_D("replace into `fanwe_delivery_region` values('1926','229','贾汪区','4');");
E_D("replace into `fanwe_delivery_region` values('1927','229','泉山区','4');");
E_D("replace into `fanwe_delivery_region` values('1928','229','新沂市','4');");
E_D("replace into `fanwe_delivery_region` values('1929','229','邳州市','4');");
E_D("replace into `fanwe_delivery_region` values('1930','229','丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1931','229','沛县','4');");
E_D("replace into `fanwe_delivery_region` values('1932','229','铜山县','4');");
E_D("replace into `fanwe_delivery_region` values('1933','229','睢宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1934','230','城区','4');");
E_D("replace into `fanwe_delivery_region` values('1935','230','亭湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1936','230','盐都区','4');");
E_D("replace into `fanwe_delivery_region` values('1937','230','盐都县','4');");
E_D("replace into `fanwe_delivery_region` values('1938','230','东台市','4');");
E_D("replace into `fanwe_delivery_region` values('1939','230','大丰市','4');");
E_D("replace into `fanwe_delivery_region` values('1940','230','响水县','4');");
E_D("replace into `fanwe_delivery_region` values('1941','230','滨海县','4');");
E_D("replace into `fanwe_delivery_region` values('1942','230','阜宁县','4');");
E_D("replace into `fanwe_delivery_region` values('1943','230','射阳县','4');");
E_D("replace into `fanwe_delivery_region` values('1944','230','建湖县','4');");
E_D("replace into `fanwe_delivery_region` values('1945','231','广陵区','4');");
E_D("replace into `fanwe_delivery_region` values('1946','231','维扬区','4');");
E_D("replace into `fanwe_delivery_region` values('1947','231','邗江区','4');");
E_D("replace into `fanwe_delivery_region` values('1948','231','仪征市','4');");
E_D("replace into `fanwe_delivery_region` values('1949','231','高邮市','4');");
E_D("replace into `fanwe_delivery_region` values('1950','231','江都市','4');");
E_D("replace into `fanwe_delivery_region` values('1951','231','宝应县','4');");
E_D("replace into `fanwe_delivery_region` values('1952','232','京口区','4');");
E_D("replace into `fanwe_delivery_region` values('1953','232','润州区','4');");
E_D("replace into `fanwe_delivery_region` values('1954','232','丹徒区','4');");
E_D("replace into `fanwe_delivery_region` values('1955','232','丹阳市','4');");
E_D("replace into `fanwe_delivery_region` values('1956','232','扬中市','4');");
E_D("replace into `fanwe_delivery_region` values('1957','232','句容市','4');");
E_D("replace into `fanwe_delivery_region` values('1958','233','东湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1959','233','西湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1960','233','青云谱区','4');");
E_D("replace into `fanwe_delivery_region` values('1961','233','湾里区','4');");
E_D("replace into `fanwe_delivery_region` values('1962','233','青山湖区','4');");
E_D("replace into `fanwe_delivery_region` values('1963','233','红谷滩新区','4');");
E_D("replace into `fanwe_delivery_region` values('1964','233','昌北区','4');");
E_D("replace into `fanwe_delivery_region` values('1965','233','高新区','4');");
E_D("replace into `fanwe_delivery_region` values('1966','233','南昌县','4');");
E_D("replace into `fanwe_delivery_region` values('1967','233','新建县','4');");
E_D("replace into `fanwe_delivery_region` values('1968','233','安义县','4');");
E_D("replace into `fanwe_delivery_region` values('1969','233','进贤县','4');");
E_D("replace into `fanwe_delivery_region` values('1970','234','临川区','4');");
E_D("replace into `fanwe_delivery_region` values('1971','234','南城县','4');");
E_D("replace into `fanwe_delivery_region` values('1972','234','黎川县','4');");
E_D("replace into `fanwe_delivery_region` values('1973','234','南丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1974','234','崇仁县','4');");
E_D("replace into `fanwe_delivery_region` values('1975','234','乐安县','4');");
E_D("replace into `fanwe_delivery_region` values('1976','234','宜黄县','4');");
E_D("replace into `fanwe_delivery_region` values('1977','234','金溪县','4');");
E_D("replace into `fanwe_delivery_region` values('1978','234','资溪县','4');");
E_D("replace into `fanwe_delivery_region` values('1979','234','东乡县','4');");
E_D("replace into `fanwe_delivery_region` values('1980','234','广昌县','4');");
E_D("replace into `fanwe_delivery_region` values('1981','235','章贡区','4');");
E_D("replace into `fanwe_delivery_region` values('1982','235','于都县','4');");
E_D("replace into `fanwe_delivery_region` values('1983','235','瑞金市','4');");
E_D("replace into `fanwe_delivery_region` values('1984','235','南康市','4');");
E_D("replace into `fanwe_delivery_region` values('1985','235','赣县','4');");
E_D("replace into `fanwe_delivery_region` values('1986','235','信丰县','4');");
E_D("replace into `fanwe_delivery_region` values('1987','235','大余县','4');");
E_D("replace into `fanwe_delivery_region` values('1988','235','上犹县','4');");
E_D("replace into `fanwe_delivery_region` values('1989','235','崇义县','4');");
E_D("replace into `fanwe_delivery_region` values('1990','235','安远县','4');");
E_D("replace into `fanwe_delivery_region` values('1991','235','龙南县','4');");
E_D("replace into `fanwe_delivery_region` values('1992','235','定南县','4');");
E_D("replace into `fanwe_delivery_region` values('1993','235','全南县','4');");
E_D("replace into `fanwe_delivery_region` values('1994','235','宁都县','4');");
E_D("replace into `fanwe_delivery_region` values('1995','235','兴国县','4');");
E_D("replace into `fanwe_delivery_region` values('1996','235','会昌县','4');");
E_D("replace into `fanwe_delivery_region` values('1997','235','寻乌县','4');");
E_D("replace into `fanwe_delivery_region` values('1998','235','石城县','4');");
E_D("replace into `fanwe_delivery_region` values('1999','236','安福县','4');");
E_D("replace into `fanwe_delivery_region` values('2000','236','吉州区','4');");
E_D("replace into `fanwe_delivery_region` values('2001','236','青原区','4');");
E_D("replace into `fanwe_delivery_region` values('2002','236','井冈山市','4');");
E_D("replace into `fanwe_delivery_region` values('2003','236','吉安县','4');");
E_D("replace into `fanwe_delivery_region` values('2004','236','吉水县','4');");
E_D("replace into `fanwe_delivery_region` values('2005','236','峡江县','4');");
E_D("replace into `fanwe_delivery_region` values('2006','236','新干县','4');");
E_D("replace into `fanwe_delivery_region` values('2007','236','永丰县','4');");
E_D("replace into `fanwe_delivery_region` values('2008','236','泰和县','4');");
E_D("replace into `fanwe_delivery_region` values('2009','236','遂川县','4');");
E_D("replace into `fanwe_delivery_region` values('2010','236','万安县','4');");
E_D("replace into `fanwe_delivery_region` values('2011','236','永新县','4');");
E_D("replace into `fanwe_delivery_region` values('2012','237','珠山区','4');");
E_D("replace into `fanwe_delivery_region` values('2013','237','昌江区','4');");
E_D("replace into `fanwe_delivery_region` values('2014','237','乐平市','4');");
E_D("replace into `fanwe_delivery_region` values('2015','237','浮梁县','4');");
E_D("replace into `fanwe_delivery_region` values('2016','238','浔阳区','4');");
E_D("replace into `fanwe_delivery_region` values('2017','238','庐山区','4');");
E_D("replace into `fanwe_delivery_region` values('2018','238','瑞昌市','4');");
E_D("replace into `fanwe_delivery_region` values('2019','238','九江县','4');");
E_D("replace into `fanwe_delivery_region` values('2020','238','武宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2021','238','修水县','4');");
E_D("replace into `fanwe_delivery_region` values('2022','238','永修县','4');");
E_D("replace into `fanwe_delivery_region` values('2023','238','德安县','4');");
E_D("replace into `fanwe_delivery_region` values('2024','238','星子县','4');");
E_D("replace into `fanwe_delivery_region` values('2025','238','都昌县','4');");
E_D("replace into `fanwe_delivery_region` values('2026','238','湖口县','4');");
E_D("replace into `fanwe_delivery_region` values('2027','238','彭泽县','4');");
E_D("replace into `fanwe_delivery_region` values('2028','239','安源区','4');");
E_D("replace into `fanwe_delivery_region` values('2029','239','湘东区','4');");
E_D("replace into `fanwe_delivery_region` values('2030','239','莲花县','4');");
E_D("replace into `fanwe_delivery_region` values('2031','239','芦溪县','4');");
E_D("replace into `fanwe_delivery_region` values('2032','239','上栗县','4');");
E_D("replace into `fanwe_delivery_region` values('2033','240','信州区','4');");
E_D("replace into `fanwe_delivery_region` values('2034','240','德兴市','4');");
E_D("replace into `fanwe_delivery_region` values('2035','240','上饶县','4');");
E_D("replace into `fanwe_delivery_region` values('2036','240','广丰县','4');");
E_D("replace into `fanwe_delivery_region` values('2037','240','玉山县','4');");
E_D("replace into `fanwe_delivery_region` values('2038','240','铅山县','4');");
E_D("replace into `fanwe_delivery_region` values('2039','240','横峰县','4');");
E_D("replace into `fanwe_delivery_region` values('2040','240','弋阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2041','240','余干县','4');");
E_D("replace into `fanwe_delivery_region` values('2042','240','波阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2043','240','万年县','4');");
E_D("replace into `fanwe_delivery_region` values('2044','240','婺源县','4');");
E_D("replace into `fanwe_delivery_region` values('2045','241','渝水区','4');");
E_D("replace into `fanwe_delivery_region` values('2046','241','分宜县','4');");
E_D("replace into `fanwe_delivery_region` values('2047','242','袁州区','4');");
E_D("replace into `fanwe_delivery_region` values('2048','242','丰城市','4');");
E_D("replace into `fanwe_delivery_region` values('2049','242','樟树市','4');");
E_D("replace into `fanwe_delivery_region` values('2050','242','高安市','4');");
E_D("replace into `fanwe_delivery_region` values('2051','242','奉新县','4');");
E_D("replace into `fanwe_delivery_region` values('2052','242','万载县','4');");
E_D("replace into `fanwe_delivery_region` values('2053','242','上高县','4');");
E_D("replace into `fanwe_delivery_region` values('2054','242','宜丰县','4');");
E_D("replace into `fanwe_delivery_region` values('2055','242','靖安县','4');");
E_D("replace into `fanwe_delivery_region` values('2056','242','铜鼓县','4');");
E_D("replace into `fanwe_delivery_region` values('2057','243','月湖区','4');");
E_D("replace into `fanwe_delivery_region` values('2058','243','贵溪市','4');");
E_D("replace into `fanwe_delivery_region` values('2059','243','余江县','4');");
E_D("replace into `fanwe_delivery_region` values('2060','244','沈河区','4');");
E_D("replace into `fanwe_delivery_region` values('2061','244','皇姑区','4');");
E_D("replace into `fanwe_delivery_region` values('2062','244','和平区','4');");
E_D("replace into `fanwe_delivery_region` values('2063','244','大东区','4');");
E_D("replace into `fanwe_delivery_region` values('2064','244','铁西区','4');");
E_D("replace into `fanwe_delivery_region` values('2065','244','苏家屯区','4');");
E_D("replace into `fanwe_delivery_region` values('2066','244','东陵区','4');");
E_D("replace into `fanwe_delivery_region` values('2067','244','沈北新区','4');");
E_D("replace into `fanwe_delivery_region` values('2068','244','于洪区','4');");
E_D("replace into `fanwe_delivery_region` values('2069','244','浑南新区','4');");
E_D("replace into `fanwe_delivery_region` values('2070','244','新民市','4');");
E_D("replace into `fanwe_delivery_region` values('2071','244','辽中县','4');");
E_D("replace into `fanwe_delivery_region` values('2072','244','康平县','4');");
E_D("replace into `fanwe_delivery_region` values('2073','244','法库县','4');");
E_D("replace into `fanwe_delivery_region` values('2074','245','西岗区','4');");
E_D("replace into `fanwe_delivery_region` values('2075','245','中山区','4');");
E_D("replace into `fanwe_delivery_region` values('2076','245','沙河口区','4');");
E_D("replace into `fanwe_delivery_region` values('2077','245','甘井子区','4');");
E_D("replace into `fanwe_delivery_region` values('2078','245','旅顺口区','4');");
E_D("replace into `fanwe_delivery_region` values('2079','245','金州区','4');");
E_D("replace into `fanwe_delivery_region` values('2080','245','开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2081','245','瓦房店市','4');");
E_D("replace into `fanwe_delivery_region` values('2082','245','普兰店市','4');");
E_D("replace into `fanwe_delivery_region` values('2083','245','庄河市','4');");
E_D("replace into `fanwe_delivery_region` values('2084','245','长海县','4');");
E_D("replace into `fanwe_delivery_region` values('2085','246','铁东区','4');");
E_D("replace into `fanwe_delivery_region` values('2086','246','铁西区','4');");
E_D("replace into `fanwe_delivery_region` values('2087','246','立山区','4');");
E_D("replace into `fanwe_delivery_region` values('2088','246','千山区','4');");
E_D("replace into `fanwe_delivery_region` values('2089','246','岫岩','4');");
E_D("replace into `fanwe_delivery_region` values('2090','246','海城市','4');");
E_D("replace into `fanwe_delivery_region` values('2091','246','台安县','4');");
E_D("replace into `fanwe_delivery_region` values('2092','247','本溪','4');");
E_D("replace into `fanwe_delivery_region` values('2093','247','平山区','4');");
E_D("replace into `fanwe_delivery_region` values('2094','247','明山区','4');");
E_D("replace into `fanwe_delivery_region` values('2095','247','溪湖区','4');");
E_D("replace into `fanwe_delivery_region` values('2096','247','南芬区','4');");
E_D("replace into `fanwe_delivery_region` values('2097','247','桓仁','4');");
E_D("replace into `fanwe_delivery_region` values('2098','248','双塔区','4');");
E_D("replace into `fanwe_delivery_region` values('2099','248','龙城区','4');");
E_D("replace into `fanwe_delivery_region` values('2100','248','喀喇沁左翼蒙古族自治','4');");
E_D("replace into `fanwe_delivery_region` values('2101','248','北票市','4');");
E_D("replace into `fanwe_delivery_region` values('2102','248','凌源市','4');");
E_D("replace into `fanwe_delivery_region` values('2103','248','朝阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2104','248','建平县','4');");
E_D("replace into `fanwe_delivery_region` values('2105','249','振兴区','4');");
E_D("replace into `fanwe_delivery_region` values('2106','249','元宝区','4');");
E_D("replace into `fanwe_delivery_region` values('2107','249','振安区','4');");
E_D("replace into `fanwe_delivery_region` values('2108','249','宽甸','4');");
E_D("replace into `fanwe_delivery_region` values('2109','249','东港市','4');");
E_D("replace into `fanwe_delivery_region` values('2110','249','凤城市','4');");
E_D("replace into `fanwe_delivery_region` values('2111','250','顺城区','4');");
E_D("replace into `fanwe_delivery_region` values('2112','250','新抚区','4');");
E_D("replace into `fanwe_delivery_region` values('2113','250','东洲区','4');");
E_D("replace into `fanwe_delivery_region` values('2114','250','望花区','4');");
E_D("replace into `fanwe_delivery_region` values('2115','250','清原','4');");
E_D("replace into `fanwe_delivery_region` values('2116','250','新宾','4');");
E_D("replace into `fanwe_delivery_region` values('2117','250','抚顺县','4');");
E_D("replace into `fanwe_delivery_region` values('2118','251','阜新','4');");
E_D("replace into `fanwe_delivery_region` values('2119','251','海州区','4');");
E_D("replace into `fanwe_delivery_region` values('2120','251','新邱区','4');");
E_D("replace into `fanwe_delivery_region` values('2121','251','太平区','4');");
E_D("replace into `fanwe_delivery_region` values('2122','251','清河门区','4');");
E_D("replace into `fanwe_delivery_region` values('2123','251','细河区','4');");
E_D("replace into `fanwe_delivery_region` values('2124','251','彰武县','4');");
E_D("replace into `fanwe_delivery_region` values('2125','252','龙港区','4');");
E_D("replace into `fanwe_delivery_region` values('2126','252','南票区','4');");
E_D("replace into `fanwe_delivery_region` values('2127','252','连山区','4');");
E_D("replace into `fanwe_delivery_region` values('2128','252','兴城市','4');");
E_D("replace into `fanwe_delivery_region` values('2129','252','绥中县','4');");
E_D("replace into `fanwe_delivery_region` values('2130','252','建昌县','4');");
E_D("replace into `fanwe_delivery_region` values('2131','253','太和区','4');");
E_D("replace into `fanwe_delivery_region` values('2132','253','古塔区','4');");
E_D("replace into `fanwe_delivery_region` values('2133','253','凌河区','4');");
E_D("replace into `fanwe_delivery_region` values('2134','253','凌海市','4');");
E_D("replace into `fanwe_delivery_region` values('2135','253','北镇市','4');");
E_D("replace into `fanwe_delivery_region` values('2136','253','黑山县','4');");
E_D("replace into `fanwe_delivery_region` values('2137','253','义县','4');");
E_D("replace into `fanwe_delivery_region` values('2138','254','白塔区','4');");
E_D("replace into `fanwe_delivery_region` values('2139','254','文圣区','4');");
E_D("replace into `fanwe_delivery_region` values('2140','254','宏伟区','4');");
E_D("replace into `fanwe_delivery_region` values('2141','254','太子河区','4');");
E_D("replace into `fanwe_delivery_region` values('2142','254','弓长岭区','4');");
E_D("replace into `fanwe_delivery_region` values('2143','254','灯塔市','4');");
E_D("replace into `fanwe_delivery_region` values('2144','254','辽阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2145','255','双台子区','4');");
E_D("replace into `fanwe_delivery_region` values('2146','255','兴隆台区','4');");
E_D("replace into `fanwe_delivery_region` values('2147','255','大洼县','4');");
E_D("replace into `fanwe_delivery_region` values('2148','255','盘山县','4');");
E_D("replace into `fanwe_delivery_region` values('2149','256','银州区','4');");
E_D("replace into `fanwe_delivery_region` values('2150','256','清河区','4');");
E_D("replace into `fanwe_delivery_region` values('2151','256','调兵山市','4');");
E_D("replace into `fanwe_delivery_region` values('2152','256','开原市','4');");
E_D("replace into `fanwe_delivery_region` values('2153','256','铁岭县','4');");
E_D("replace into `fanwe_delivery_region` values('2154','256','西丰县','4');");
E_D("replace into `fanwe_delivery_region` values('2155','256','昌图县','4');");
E_D("replace into `fanwe_delivery_region` values('2156','257','站前区','4');");
E_D("replace into `fanwe_delivery_region` values('2157','257','西市区','4');");
E_D("replace into `fanwe_delivery_region` values('2158','257','鲅鱼圈区','4');");
E_D("replace into `fanwe_delivery_region` values('2159','257','老边区','4');");
E_D("replace into `fanwe_delivery_region` values('2160','257','盖州市','4');");
E_D("replace into `fanwe_delivery_region` values('2161','257','大石桥市','4');");
E_D("replace into `fanwe_delivery_region` values('2162','258','回民区','4');");
E_D("replace into `fanwe_delivery_region` values('2163','258','玉泉区','4');");
E_D("replace into `fanwe_delivery_region` values('2164','258','新城区','4');");
E_D("replace into `fanwe_delivery_region` values('2165','258','赛罕区','4');");
E_D("replace into `fanwe_delivery_region` values('2166','258','清水河县','4');");
E_D("replace into `fanwe_delivery_region` values('2167','258','土默特左旗','4');");
E_D("replace into `fanwe_delivery_region` values('2168','258','托克托县','4');");
E_D("replace into `fanwe_delivery_region` values('2169','258','和林格尔县','4');");
E_D("replace into `fanwe_delivery_region` values('2170','258','武川县','4');");
E_D("replace into `fanwe_delivery_region` values('2171','259','阿拉善左旗','4');");
E_D("replace into `fanwe_delivery_region` values('2172','259','阿拉善右旗','4');");
E_D("replace into `fanwe_delivery_region` values('2173','259','额济纳旗','4');");
E_D("replace into `fanwe_delivery_region` values('2174','260','临河区','4');");
E_D("replace into `fanwe_delivery_region` values('2175','260','五原县','4');");
E_D("replace into `fanwe_delivery_region` values('2176','260','磴口县','4');");
E_D("replace into `fanwe_delivery_region` values('2177','260','乌拉特前旗','4');");
E_D("replace into `fanwe_delivery_region` values('2178','260','乌拉特中旗','4');");
E_D("replace into `fanwe_delivery_region` values('2179','260','乌拉特后旗','4');");
E_D("replace into `fanwe_delivery_region` values('2180','260','杭锦后旗','4');");
E_D("replace into `fanwe_delivery_region` values('2181','261','昆都仑区','4');");
E_D("replace into `fanwe_delivery_region` values('2182','261','青山区','4');");
E_D("replace into `fanwe_delivery_region` values('2183','261','东河区','4');");
E_D("replace into `fanwe_delivery_region` values('2184','261','九原区','4');");
E_D("replace into `fanwe_delivery_region` values('2185','261','石拐区','4');");
E_D("replace into `fanwe_delivery_region` values('2186','261','白云矿区','4');");
E_D("replace into `fanwe_delivery_region` values('2187','261','土默特右旗','4');");
E_D("replace into `fanwe_delivery_region` values('2188','261','固阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2189','261','达尔罕茂明安联合旗','4');");
E_D("replace into `fanwe_delivery_region` values('2190','262','红山区','4');");
E_D("replace into `fanwe_delivery_region` values('2191','262','元宝山区','4');");
E_D("replace into `fanwe_delivery_region` values('2192','262','松山区','4');");
E_D("replace into `fanwe_delivery_region` values('2193','262','阿鲁科尔沁旗','4');");
E_D("replace into `fanwe_delivery_region` values('2194','262','巴林左旗','4');");
E_D("replace into `fanwe_delivery_region` values('2195','262','巴林右旗','4');");
E_D("replace into `fanwe_delivery_region` values('2196','262','林西县','4');");
E_D("replace into `fanwe_delivery_region` values('2197','262','克什克腾旗','4');");
E_D("replace into `fanwe_delivery_region` values('2198','262','翁牛特旗','4');");
E_D("replace into `fanwe_delivery_region` values('2199','262','喀喇沁旗','4');");
E_D("replace into `fanwe_delivery_region` values('2200','262','宁城县','4');");
E_D("replace into `fanwe_delivery_region` values('2201','262','敖汉旗','4');");
E_D("replace into `fanwe_delivery_region` values('2202','263','东胜区','4');");
E_D("replace into `fanwe_delivery_region` values('2203','263','达拉特旗','4');");
E_D("replace into `fanwe_delivery_region` values('2204','263','准格尔旗','4');");
E_D("replace into `fanwe_delivery_region` values('2205','263','鄂托克前旗','4');");
E_D("replace into `fanwe_delivery_region` values('2206','263','鄂托克旗','4');");
E_D("replace into `fanwe_delivery_region` values('2207','263','杭锦旗','4');");
E_D("replace into `fanwe_delivery_region` values('2208','263','乌审旗','4');");
E_D("replace into `fanwe_delivery_region` values('2209','263','伊金霍洛旗','4');");
E_D("replace into `fanwe_delivery_region` values('2210','264','海拉尔区','4');");
E_D("replace into `fanwe_delivery_region` values('2211','264','莫力达瓦','4');");
E_D("replace into `fanwe_delivery_region` values('2212','264','满洲里市','4');");
E_D("replace into `fanwe_delivery_region` values('2213','264','牙克石市','4');");
E_D("replace into `fanwe_delivery_region` values('2214','264','扎兰屯市','4');");
E_D("replace into `fanwe_delivery_region` values('2215','264','额尔古纳市','4');");
E_D("replace into `fanwe_delivery_region` values('2216','264','根河市','4');");
E_D("replace into `fanwe_delivery_region` values('2217','264','阿荣旗','4');");
E_D("replace into `fanwe_delivery_region` values('2218','264','鄂伦春自治旗','4');");
E_D("replace into `fanwe_delivery_region` values('2219','264','鄂温克族自治旗','4');");
E_D("replace into `fanwe_delivery_region` values('2220','264','陈巴尔虎旗','4');");
E_D("replace into `fanwe_delivery_region` values('2221','264','新巴尔虎左旗','4');");
E_D("replace into `fanwe_delivery_region` values('2222','264','新巴尔虎右旗','4');");
E_D("replace into `fanwe_delivery_region` values('2223','265','科尔沁区','4');");
E_D("replace into `fanwe_delivery_region` values('2224','265','霍林郭勒市','4');");
E_D("replace into `fanwe_delivery_region` values('2225','265','科尔沁左翼中旗','4');");
E_D("replace into `fanwe_delivery_region` values('2226','265','科尔沁左翼后旗','4');");
E_D("replace into `fanwe_delivery_region` values('2227','265','开鲁县','4');");
E_D("replace into `fanwe_delivery_region` values('2228','265','库伦旗','4');");
E_D("replace into `fanwe_delivery_region` values('2229','265','奈曼旗','4');");
E_D("replace into `fanwe_delivery_region` values('2230','265','扎鲁特旗','4');");
E_D("replace into `fanwe_delivery_region` values('2231','266','海勃湾区','4');");
E_D("replace into `fanwe_delivery_region` values('2232','266','乌达区','4');");
E_D("replace into `fanwe_delivery_region` values('2233','266','海南区','4');");
E_D("replace into `fanwe_delivery_region` values('2234','267','化德县','4');");
E_D("replace into `fanwe_delivery_region` values('2235','267','集宁区','4');");
E_D("replace into `fanwe_delivery_region` values('2236','267','丰镇市','4');");
E_D("replace into `fanwe_delivery_region` values('2237','267','卓资县','4');");
E_D("replace into `fanwe_delivery_region` values('2238','267','商都县','4');");
E_D("replace into `fanwe_delivery_region` values('2239','267','兴和县','4');");
E_D("replace into `fanwe_delivery_region` values('2240','267','凉城县','4');");
E_D("replace into `fanwe_delivery_region` values('2241','267','察哈尔右翼前旗','4');");
E_D("replace into `fanwe_delivery_region` values('2242','267','察哈尔右翼中旗','4');");
E_D("replace into `fanwe_delivery_region` values('2243','267','察哈尔右翼后旗','4');");
E_D("replace into `fanwe_delivery_region` values('2244','267','四子王旗','4');");
E_D("replace into `fanwe_delivery_region` values('2245','268','二连浩特市','4');");
E_D("replace into `fanwe_delivery_region` values('2246','268','锡林浩特市','4');");
E_D("replace into `fanwe_delivery_region` values('2247','268','阿巴嘎旗','4');");
E_D("replace into `fanwe_delivery_region` values('2248','268','苏尼特左旗','4');");
E_D("replace into `fanwe_delivery_region` values('2249','268','苏尼特右旗','4');");
E_D("replace into `fanwe_delivery_region` values('2250','268','东乌珠穆沁旗','4');");
E_D("replace into `fanwe_delivery_region` values('2251','268','西乌珠穆沁旗','4');");
E_D("replace into `fanwe_delivery_region` values('2252','268','太仆寺旗','4');");
E_D("replace into `fanwe_delivery_region` values('2253','268','镶黄旗','4');");
E_D("replace into `fanwe_delivery_region` values('2254','268','正镶白旗','4');");
E_D("replace into `fanwe_delivery_region` values('2255','268','正蓝旗','4');");
E_D("replace into `fanwe_delivery_region` values('2256','268','多伦县','4');");
E_D("replace into `fanwe_delivery_region` values('2257','269','乌兰浩特市','4');");
E_D("replace into `fanwe_delivery_region` values('2258','269','阿尔山市','4');");
E_D("replace into `fanwe_delivery_region` values('2259','269','科尔沁右翼前旗','4');");
E_D("replace into `fanwe_delivery_region` values('2260','269','科尔沁右翼中旗','4');");
E_D("replace into `fanwe_delivery_region` values('2261','269','扎赉特旗','4');");
E_D("replace into `fanwe_delivery_region` values('2262','269','突泉县','4');");
E_D("replace into `fanwe_delivery_region` values('2263','270','西夏区','4');");
E_D("replace into `fanwe_delivery_region` values('2264','270','金凤区','4');");
E_D("replace into `fanwe_delivery_region` values('2265','270','兴庆区','4');");
E_D("replace into `fanwe_delivery_region` values('2266','270','灵武市','4');");
E_D("replace into `fanwe_delivery_region` values('2267','270','永宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2268','270','贺兰县','4');");
E_D("replace into `fanwe_delivery_region` values('2269','271','原州区','4');");
E_D("replace into `fanwe_delivery_region` values('2270','271','海原县','4');");
E_D("replace into `fanwe_delivery_region` values('2271','271','西吉县','4');");
E_D("replace into `fanwe_delivery_region` values('2272','271','隆德县','4');");
E_D("replace into `fanwe_delivery_region` values('2273','271','泾源县','4');");
E_D("replace into `fanwe_delivery_region` values('2274','271','彭阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2275','272','惠农县','4');");
E_D("replace into `fanwe_delivery_region` values('2276','272','大武口区','4');");
E_D("replace into `fanwe_delivery_region` values('2277','272','惠农区','4');");
E_D("replace into `fanwe_delivery_region` values('2278','272','陶乐县','4');");
E_D("replace into `fanwe_delivery_region` values('2279','272','平罗县','4');");
E_D("replace into `fanwe_delivery_region` values('2280','273','利通区','4');");
E_D("replace into `fanwe_delivery_region` values('2281','273','中卫县','4');");
E_D("replace into `fanwe_delivery_region` values('2282','273','青铜峡市','4');");
E_D("replace into `fanwe_delivery_region` values('2283','273','中宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2284','273','盐池县','4');");
E_D("replace into `fanwe_delivery_region` values('2285','273','同心县','4');");
E_D("replace into `fanwe_delivery_region` values('2286','274','沙坡头区','4');");
E_D("replace into `fanwe_delivery_region` values('2287','274','海原县','4');");
E_D("replace into `fanwe_delivery_region` values('2288','274','中宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2289','275','城中区','4');");
E_D("replace into `fanwe_delivery_region` values('2290','275','城东区','4');");
E_D("replace into `fanwe_delivery_region` values('2291','275','城西区','4');");
E_D("replace into `fanwe_delivery_region` values('2292','275','城北区','4');");
E_D("replace into `fanwe_delivery_region` values('2293','275','湟中县','4');");
E_D("replace into `fanwe_delivery_region` values('2294','275','湟源县','4');");
E_D("replace into `fanwe_delivery_region` values('2295','275','大通','4');");
E_D("replace into `fanwe_delivery_region` values('2296','276','玛沁县','4');");
E_D("replace into `fanwe_delivery_region` values('2297','276','班玛县','4');");
E_D("replace into `fanwe_delivery_region` values('2298','276','甘德县','4');");
E_D("replace into `fanwe_delivery_region` values('2299','276','达日县','4');");
E_D("replace into `fanwe_delivery_region` values('2300','276','久治县','4');");
E_D("replace into `fanwe_delivery_region` values('2301','276','玛多县','4');");
E_D("replace into `fanwe_delivery_region` values('2302','277','海晏县','4');");
E_D("replace into `fanwe_delivery_region` values('2303','277','祁连县','4');");
E_D("replace into `fanwe_delivery_region` values('2304','277','刚察县','4');");
E_D("replace into `fanwe_delivery_region` values('2305','277','门源','4');");
E_D("replace into `fanwe_delivery_region` values('2306','278','平安县','4');");
E_D("replace into `fanwe_delivery_region` values('2307','278','乐都县','4');");
E_D("replace into `fanwe_delivery_region` values('2308','278','民和','4');");
E_D("replace into `fanwe_delivery_region` values('2309','278','互助','4');");
E_D("replace into `fanwe_delivery_region` values('2310','278','化隆','4');");
E_D("replace into `fanwe_delivery_region` values('2311','278','循化','4');");
E_D("replace into `fanwe_delivery_region` values('2312','279','共和县','4');");
E_D("replace into `fanwe_delivery_region` values('2313','279','同德县','4');");
E_D("replace into `fanwe_delivery_region` values('2314','279','贵德县','4');");
E_D("replace into `fanwe_delivery_region` values('2315','279','兴海县','4');");
E_D("replace into `fanwe_delivery_region` values('2316','279','贵南县','4');");
E_D("replace into `fanwe_delivery_region` values('2317','280','德令哈市','4');");
E_D("replace into `fanwe_delivery_region` values('2318','280','格尔木市','4');");
E_D("replace into `fanwe_delivery_region` values('2319','280','乌兰县','4');");
E_D("replace into `fanwe_delivery_region` values('2320','280','都兰县','4');");
E_D("replace into `fanwe_delivery_region` values('2321','280','天峻县','4');");
E_D("replace into `fanwe_delivery_region` values('2322','281','同仁县','4');");
E_D("replace into `fanwe_delivery_region` values('2323','281','尖扎县','4');");
E_D("replace into `fanwe_delivery_region` values('2324','281','泽库县','4');");
E_D("replace into `fanwe_delivery_region` values('2325','281','河南蒙古族自治县','4');");
E_D("replace into `fanwe_delivery_region` values('2326','282','玉树县','4');");
E_D("replace into `fanwe_delivery_region` values('2327','282','杂多县','4');");
E_D("replace into `fanwe_delivery_region` values('2328','282','称多县','4');");
E_D("replace into `fanwe_delivery_region` values('2329','282','治多县','4');");
E_D("replace into `fanwe_delivery_region` values('2330','282','囊谦县','4');");
E_D("replace into `fanwe_delivery_region` values('2331','282','曲麻莱县','4');");
E_D("replace into `fanwe_delivery_region` values('2332','283','市中区','4');");
E_D("replace into `fanwe_delivery_region` values('2333','283','历下区','4');");
E_D("replace into `fanwe_delivery_region` values('2334','283','天桥区','4');");
E_D("replace into `fanwe_delivery_region` values('2335','283','槐荫区','4');");
E_D("replace into `fanwe_delivery_region` values('2336','283','历城区','4');");
E_D("replace into `fanwe_delivery_region` values('2337','283','长清区','4');");
E_D("replace into `fanwe_delivery_region` values('2338','283','章丘市','4');");
E_D("replace into `fanwe_delivery_region` values('2339','283','平阴县','4');");
E_D("replace into `fanwe_delivery_region` values('2340','283','济阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2341','283','商河县','4');");
E_D("replace into `fanwe_delivery_region` values('2342','284','市南区','4');");
E_D("replace into `fanwe_delivery_region` values('2343','284','市北区','4');");
E_D("replace into `fanwe_delivery_region` values('2344','284','城阳区','4');");
E_D("replace into `fanwe_delivery_region` values('2345','284','四方区','4');");
E_D("replace into `fanwe_delivery_region` values('2346','284','李沧区','4');");
E_D("replace into `fanwe_delivery_region` values('2347','284','黄岛区','4');");
E_D("replace into `fanwe_delivery_region` values('2348','284','崂山区','4');");
E_D("replace into `fanwe_delivery_region` values('2349','284','胶州市','4');");
E_D("replace into `fanwe_delivery_region` values('2350','284','即墨市','4');");
E_D("replace into `fanwe_delivery_region` values('2351','284','平度市','4');");
E_D("replace into `fanwe_delivery_region` values('2352','284','胶南市','4');");
E_D("replace into `fanwe_delivery_region` values('2353','284','莱西市','4');");
E_D("replace into `fanwe_delivery_region` values('2354','285','滨城区','4');");
E_D("replace into `fanwe_delivery_region` values('2355','285','惠民县','4');");
E_D("replace into `fanwe_delivery_region` values('2356','285','阳信县','4');");
E_D("replace into `fanwe_delivery_region` values('2357','285','无棣县','4');");
E_D("replace into `fanwe_delivery_region` values('2358','285','沾化县','4');");
E_D("replace into `fanwe_delivery_region` values('2359','285','博兴县','4');");
E_D("replace into `fanwe_delivery_region` values('2360','285','邹平县','4');");
E_D("replace into `fanwe_delivery_region` values('2361','286','德城区','4');");
E_D("replace into `fanwe_delivery_region` values('2362','286','陵县','4');");
E_D("replace into `fanwe_delivery_region` values('2363','286','乐陵市','4');");
E_D("replace into `fanwe_delivery_region` values('2364','286','禹城市','4');");
E_D("replace into `fanwe_delivery_region` values('2365','286','宁津县','4');");
E_D("replace into `fanwe_delivery_region` values('2366','286','庆云县','4');");
E_D("replace into `fanwe_delivery_region` values('2367','286','临邑县','4');");
E_D("replace into `fanwe_delivery_region` values('2368','286','齐河县','4');");
E_D("replace into `fanwe_delivery_region` values('2369','286','平原县','4');");
E_D("replace into `fanwe_delivery_region` values('2370','286','夏津县','4');");
E_D("replace into `fanwe_delivery_region` values('2371','286','武城县','4');");
E_D("replace into `fanwe_delivery_region` values('2372','287','东营区','4');");
E_D("replace into `fanwe_delivery_region` values('2373','287','河口区','4');");
E_D("replace into `fanwe_delivery_region` values('2374','287','垦利县','4');");
E_D("replace into `fanwe_delivery_region` values('2375','287','利津县','4');");
E_D("replace into `fanwe_delivery_region` values('2376','287','广饶县','4');");
E_D("replace into `fanwe_delivery_region` values('2377','288','牡丹区','4');");
E_D("replace into `fanwe_delivery_region` values('2378','288','曹县','4');");
E_D("replace into `fanwe_delivery_region` values('2379','288','单县','4');");
E_D("replace into `fanwe_delivery_region` values('2380','288','成武县','4');");
E_D("replace into `fanwe_delivery_region` values('2381','288','巨野县','4');");
E_D("replace into `fanwe_delivery_region` values('2382','288','郓城县','4');");
E_D("replace into `fanwe_delivery_region` values('2383','288','鄄城县','4');");
E_D("replace into `fanwe_delivery_region` values('2384','288','定陶县','4');");
E_D("replace into `fanwe_delivery_region` values('2385','288','东明县','4');");
E_D("replace into `fanwe_delivery_region` values('2386','289','市中区','4');");
E_D("replace into `fanwe_delivery_region` values('2387','289','任城区','4');");
E_D("replace into `fanwe_delivery_region` values('2388','289','曲阜市','4');");
E_D("replace into `fanwe_delivery_region` values('2389','289','兖州市','4');");
E_D("replace into `fanwe_delivery_region` values('2390','289','邹城市','4');");
E_D("replace into `fanwe_delivery_region` values('2391','289','微山县','4');");
E_D("replace into `fanwe_delivery_region` values('2392','289','鱼台县','4');");
E_D("replace into `fanwe_delivery_region` values('2393','289','金乡县','4');");
E_D("replace into `fanwe_delivery_region` values('2394','289','嘉祥县','4');");
E_D("replace into `fanwe_delivery_region` values('2395','289','汶上县','4');");
E_D("replace into `fanwe_delivery_region` values('2396','289','泗水县','4');");
E_D("replace into `fanwe_delivery_region` values('2397','289','梁山县','4');");
E_D("replace into `fanwe_delivery_region` values('2398','290','莱城区','4');");
E_D("replace into `fanwe_delivery_region` values('2399','290','钢城区','4');");
E_D("replace into `fanwe_delivery_region` values('2400','291','东昌府区','4');");
E_D("replace into `fanwe_delivery_region` values('2401','291','临清市','4');");
E_D("replace into `fanwe_delivery_region` values('2402','291','阳谷县','4');");
E_D("replace into `fanwe_delivery_region` values('2403','291','莘县','4');");
E_D("replace into `fanwe_delivery_region` values('2404','291','茌平县','4');");
E_D("replace into `fanwe_delivery_region` values('2405','291','东阿县','4');");
E_D("replace into `fanwe_delivery_region` values('2406','291','冠县','4');");
E_D("replace into `fanwe_delivery_region` values('2407','291','高唐县','4');");
E_D("replace into `fanwe_delivery_region` values('2408','292','兰山区','4');");
E_D("replace into `fanwe_delivery_region` values('2409','292','罗庄区','4');");
E_D("replace into `fanwe_delivery_region` values('2410','292','河东区','4');");
E_D("replace into `fanwe_delivery_region` values('2411','292','沂南县','4');");
E_D("replace into `fanwe_delivery_region` values('2412','292','郯城县','4');");
E_D("replace into `fanwe_delivery_region` values('2413','292','沂水县','4');");
E_D("replace into `fanwe_delivery_region` values('2414','292','苍山县','4');");
E_D("replace into `fanwe_delivery_region` values('2415','292','费县','4');");
E_D("replace into `fanwe_delivery_region` values('2416','292','平邑县','4');");
E_D("replace into `fanwe_delivery_region` values('2417','292','莒南县','4');");
E_D("replace into `fanwe_delivery_region` values('2418','292','蒙阴县','4');");
E_D("replace into `fanwe_delivery_region` values('2419','292','临沭县','4');");
E_D("replace into `fanwe_delivery_region` values('2420','293','东港区','4');");
E_D("replace into `fanwe_delivery_region` values('2421','293','岚山区','4');");
E_D("replace into `fanwe_delivery_region` values('2422','293','五莲县','4');");
E_D("replace into `fanwe_delivery_region` values('2423','293','莒县','4');");
E_D("replace into `fanwe_delivery_region` values('2424','294','泰山区','4');");
E_D("replace into `fanwe_delivery_region` values('2425','294','岱岳区','4');");
E_D("replace into `fanwe_delivery_region` values('2426','294','新泰市','4');");
E_D("replace into `fanwe_delivery_region` values('2427','294','肥城市','4');");
E_D("replace into `fanwe_delivery_region` values('2428','294','宁阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2429','294','东平县','4');");
E_D("replace into `fanwe_delivery_region` values('2430','295','荣成市','4');");
E_D("replace into `fanwe_delivery_region` values('2431','295','乳山市','4');");
E_D("replace into `fanwe_delivery_region` values('2432','295','环翠区','4');");
E_D("replace into `fanwe_delivery_region` values('2433','295','文登市','4');");
E_D("replace into `fanwe_delivery_region` values('2434','296','潍城区','4');");
E_D("replace into `fanwe_delivery_region` values('2435','296','寒亭区','4');");
E_D("replace into `fanwe_delivery_region` values('2436','296','坊子区','4');");
E_D("replace into `fanwe_delivery_region` values('2437','296','奎文区','4');");
E_D("replace into `fanwe_delivery_region` values('2438','296','青州市','4');");
E_D("replace into `fanwe_delivery_region` values('2439','296','诸城市','4');");
E_D("replace into `fanwe_delivery_region` values('2440','296','寿光市','4');");
E_D("replace into `fanwe_delivery_region` values('2441','296','安丘市','4');");
E_D("replace into `fanwe_delivery_region` values('2442','296','高密市','4');");
E_D("replace into `fanwe_delivery_region` values('2443','296','昌邑市','4');");
E_D("replace into `fanwe_delivery_region` values('2444','296','临朐县','4');");
E_D("replace into `fanwe_delivery_region` values('2445','296','昌乐县','4');");
E_D("replace into `fanwe_delivery_region` values('2446','297','芝罘区','4');");
E_D("replace into `fanwe_delivery_region` values('2447','297','福山区','4');");
E_D("replace into `fanwe_delivery_region` values('2448','297','牟平区','4');");
E_D("replace into `fanwe_delivery_region` values('2449','297','莱山区','4');");
E_D("replace into `fanwe_delivery_region` values('2450','297','开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2451','297','龙口市','4');");
E_D("replace into `fanwe_delivery_region` values('2452','297','莱阳市','4');");
E_D("replace into `fanwe_delivery_region` values('2453','297','莱州市','4');");
E_D("replace into `fanwe_delivery_region` values('2454','297','蓬莱市','4');");
E_D("replace into `fanwe_delivery_region` values('2455','297','招远市','4');");
E_D("replace into `fanwe_delivery_region` values('2456','297','栖霞市','4');");
E_D("replace into `fanwe_delivery_region` values('2457','297','海阳市','4');");
E_D("replace into `fanwe_delivery_region` values('2458','297','长岛县','4');");
E_D("replace into `fanwe_delivery_region` values('2459','298','市中区','4');");
E_D("replace into `fanwe_delivery_region` values('2460','298','山亭区','4');");
E_D("replace into `fanwe_delivery_region` values('2461','298','峄城区','4');");
E_D("replace into `fanwe_delivery_region` values('2462','298','台儿庄区','4');");
E_D("replace into `fanwe_delivery_region` values('2463','298','薛城区','4');");
E_D("replace into `fanwe_delivery_region` values('2464','298','滕州市','4');");
E_D("replace into `fanwe_delivery_region` values('2465','299','张店区','4');");
E_D("replace into `fanwe_delivery_region` values('2466','299','临淄区','4');");
E_D("replace into `fanwe_delivery_region` values('2467','299','淄川区','4');");
E_D("replace into `fanwe_delivery_region` values('2468','299','博山区','4');");
E_D("replace into `fanwe_delivery_region` values('2469','299','周村区','4');");
E_D("replace into `fanwe_delivery_region` values('2470','299','桓台县','4');");
E_D("replace into `fanwe_delivery_region` values('2471','299','高青县','4');");
E_D("replace into `fanwe_delivery_region` values('2472','299','沂源县','4');");
E_D("replace into `fanwe_delivery_region` values('2473','300','杏花岭区','4');");
E_D("replace into `fanwe_delivery_region` values('2474','300','小店区','4');");
E_D("replace into `fanwe_delivery_region` values('2475','300','迎泽区','4');");
E_D("replace into `fanwe_delivery_region` values('2476','300','尖草坪区','4');");
E_D("replace into `fanwe_delivery_region` values('2477','300','万柏林区','4');");
E_D("replace into `fanwe_delivery_region` values('2478','300','晋源区','4');");
E_D("replace into `fanwe_delivery_region` values('2479','300','高新开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2480','300','民营经济开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2481','300','经济技术开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2482','300','清徐县','4');");
E_D("replace into `fanwe_delivery_region` values('2483','300','阳曲县','4');");
E_D("replace into `fanwe_delivery_region` values('2484','300','娄烦县','4');");
E_D("replace into `fanwe_delivery_region` values('2485','300','古交市','4');");
E_D("replace into `fanwe_delivery_region` values('2486','301','城区','4');");
E_D("replace into `fanwe_delivery_region` values('2487','301','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('2488','301','沁县','4');");
E_D("replace into `fanwe_delivery_region` values('2489','301','潞城市','4');");
E_D("replace into `fanwe_delivery_region` values('2490','301','长治县','4');");
E_D("replace into `fanwe_delivery_region` values('2491','301','襄垣县','4');");
E_D("replace into `fanwe_delivery_region` values('2492','301','屯留县','4');");
E_D("replace into `fanwe_delivery_region` values('2493','301','平顺县','4');");
E_D("replace into `fanwe_delivery_region` values('2494','301','黎城县','4');");
E_D("replace into `fanwe_delivery_region` values('2495','301','壶关县','4');");
E_D("replace into `fanwe_delivery_region` values('2496','301','长子县','4');");
E_D("replace into `fanwe_delivery_region` values('2497','301','武乡县','4');");
E_D("replace into `fanwe_delivery_region` values('2498','301','沁源县','4');");
E_D("replace into `fanwe_delivery_region` values('2499','302','城区','4');");
E_D("replace into `fanwe_delivery_region` values('2500','302','矿区','4');");
E_D("replace into `fanwe_delivery_region` values('2501','302','南郊区','4');");
E_D("replace into `fanwe_delivery_region` values('2502','302','新荣区','4');");
E_D("replace into `fanwe_delivery_region` values('2503','302','阳高县','4');");
E_D("replace into `fanwe_delivery_region` values('2504','302','天镇县','4');");
E_D("replace into `fanwe_delivery_region` values('2505','302','广灵县','4');");
E_D("replace into `fanwe_delivery_region` values('2506','302','灵丘县','4');");
E_D("replace into `fanwe_delivery_region` values('2507','302','浑源县','4');");
E_D("replace into `fanwe_delivery_region` values('2508','302','左云县','4');");
E_D("replace into `fanwe_delivery_region` values('2509','302','大同县','4');");
E_D("replace into `fanwe_delivery_region` values('2510','303','城区','4');");
E_D("replace into `fanwe_delivery_region` values('2511','303','高平市','4');");
E_D("replace into `fanwe_delivery_region` values('2512','303','沁水县','4');");
E_D("replace into `fanwe_delivery_region` values('2513','303','阳城县','4');");
E_D("replace into `fanwe_delivery_region` values('2514','303','陵川县','4');");
E_D("replace into `fanwe_delivery_region` values('2515','303','泽州县','4');");
E_D("replace into `fanwe_delivery_region` values('2516','304','榆次区','4');");
E_D("replace into `fanwe_delivery_region` values('2517','304','介休市','4');");
E_D("replace into `fanwe_delivery_region` values('2518','304','榆社县','4');");
E_D("replace into `fanwe_delivery_region` values('2519','304','左权县','4');");
E_D("replace into `fanwe_delivery_region` values('2520','304','和顺县','4');");
E_D("replace into `fanwe_delivery_region` values('2521','304','昔阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2522','304','寿阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2523','304','太谷县','4');");
E_D("replace into `fanwe_delivery_region` values('2524','304','祁县','4');");
E_D("replace into `fanwe_delivery_region` values('2525','304','平遥县','4');");
E_D("replace into `fanwe_delivery_region` values('2526','304','灵石县','4');");
E_D("replace into `fanwe_delivery_region` values('2527','305','尧都区','4');");
E_D("replace into `fanwe_delivery_region` values('2528','305','侯马市','4');");
E_D("replace into `fanwe_delivery_region` values('2529','305','霍州市','4');");
E_D("replace into `fanwe_delivery_region` values('2530','305','曲沃县','4');");
E_D("replace into `fanwe_delivery_region` values('2531','305','翼城县','4');");
E_D("replace into `fanwe_delivery_region` values('2532','305','襄汾县','4');");
E_D("replace into `fanwe_delivery_region` values('2533','305','洪洞县','4');");
E_D("replace into `fanwe_delivery_region` values('2534','305','吉县','4');");
E_D("replace into `fanwe_delivery_region` values('2535','305','安泽县','4');");
E_D("replace into `fanwe_delivery_region` values('2536','305','浮山县','4');");
E_D("replace into `fanwe_delivery_region` values('2537','305','古县','4');");
E_D("replace into `fanwe_delivery_region` values('2538','305','乡宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2539','305','大宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2540','305','隰县','4');");
E_D("replace into `fanwe_delivery_region` values('2541','305','永和县','4');");
E_D("replace into `fanwe_delivery_region` values('2542','305','蒲县','4');");
E_D("replace into `fanwe_delivery_region` values('2543','305','汾西县','4');");
E_D("replace into `fanwe_delivery_region` values('2544','306','离石市','4');");
E_D("replace into `fanwe_delivery_region` values('2545','306','离石区','4');");
E_D("replace into `fanwe_delivery_region` values('2546','306','孝义市','4');");
E_D("replace into `fanwe_delivery_region` values('2547','306','汾阳市','4');");
E_D("replace into `fanwe_delivery_region` values('2548','306','文水县','4');");
E_D("replace into `fanwe_delivery_region` values('2549','306','交城县','4');");
E_D("replace into `fanwe_delivery_region` values('2550','306','兴县','4');");
E_D("replace into `fanwe_delivery_region` values('2551','306','临县','4');");
E_D("replace into `fanwe_delivery_region` values('2552','306','柳林县','4');");
E_D("replace into `fanwe_delivery_region` values('2553','306','石楼县','4');");
E_D("replace into `fanwe_delivery_region` values('2554','306','岚县','4');");
E_D("replace into `fanwe_delivery_region` values('2555','306','方山县','4');");
E_D("replace into `fanwe_delivery_region` values('2556','306','中阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2557','306','交口县','4');");
E_D("replace into `fanwe_delivery_region` values('2558','307','朔城区','4');");
E_D("replace into `fanwe_delivery_region` values('2559','307','平鲁区','4');");
E_D("replace into `fanwe_delivery_region` values('2560','307','山阴县','4');");
E_D("replace into `fanwe_delivery_region` values('2561','307','应县','4');");
E_D("replace into `fanwe_delivery_region` values('2562','307','右玉县','4');");
E_D("replace into `fanwe_delivery_region` values('2563','307','怀仁县','4');");
E_D("replace into `fanwe_delivery_region` values('2564','308','忻府区','4');");
E_D("replace into `fanwe_delivery_region` values('2565','308','原平市','4');");
E_D("replace into `fanwe_delivery_region` values('2566','308','定襄县','4');");
E_D("replace into `fanwe_delivery_region` values('2567','308','五台县','4');");
E_D("replace into `fanwe_delivery_region` values('2568','308','代县','4');");
E_D("replace into `fanwe_delivery_region` values('2569','308','繁峙县','4');");
E_D("replace into `fanwe_delivery_region` values('2570','308','宁武县','4');");
E_D("replace into `fanwe_delivery_region` values('2571','308','静乐县','4');");
E_D("replace into `fanwe_delivery_region` values('2572','308','神池县','4');");
E_D("replace into `fanwe_delivery_region` values('2573','308','五寨县','4');");
E_D("replace into `fanwe_delivery_region` values('2574','308','岢岚县','4');");
E_D("replace into `fanwe_delivery_region` values('2575','308','河曲县','4');");
E_D("replace into `fanwe_delivery_region` values('2576','308','保德县','4');");
E_D("replace into `fanwe_delivery_region` values('2577','308','偏关县','4');");
E_D("replace into `fanwe_delivery_region` values('2578','309','城区','4');");
E_D("replace into `fanwe_delivery_region` values('2579','309','矿区','4');");
E_D("replace into `fanwe_delivery_region` values('2580','309','郊区','4');");
E_D("replace into `fanwe_delivery_region` values('2581','309','平定县','4');");
E_D("replace into `fanwe_delivery_region` values('2582','309','盂县','4');");
E_D("replace into `fanwe_delivery_region` values('2583','310','盐湖区','4');");
E_D("replace into `fanwe_delivery_region` values('2584','310','永济市','4');");
E_D("replace into `fanwe_delivery_region` values('2585','310','河津市','4');");
E_D("replace into `fanwe_delivery_region` values('2586','310','临猗县','4');");
E_D("replace into `fanwe_delivery_region` values('2587','310','万荣县','4');");
E_D("replace into `fanwe_delivery_region` values('2588','310','闻喜县','4');");
E_D("replace into `fanwe_delivery_region` values('2589','310','稷山县','4');");
E_D("replace into `fanwe_delivery_region` values('2590','310','新绛县','4');");
E_D("replace into `fanwe_delivery_region` values('2591','310','绛县','4');");
E_D("replace into `fanwe_delivery_region` values('2592','310','垣曲县','4');");
E_D("replace into `fanwe_delivery_region` values('2593','310','夏县','4');");
E_D("replace into `fanwe_delivery_region` values('2594','310','平陆县','4');");
E_D("replace into `fanwe_delivery_region` values('2595','310','芮城县','4');");
E_D("replace into `fanwe_delivery_region` values('2596','311','莲湖区','4');");
E_D("replace into `fanwe_delivery_region` values('2597','311','新城区','4');");
E_D("replace into `fanwe_delivery_region` values('2598','311','碑林区','4');");
E_D("replace into `fanwe_delivery_region` values('2599','311','雁塔区','4');");
E_D("replace into `fanwe_delivery_region` values('2600','311','灞桥区','4');");
E_D("replace into `fanwe_delivery_region` values('2601','311','未央区','4');");
E_D("replace into `fanwe_delivery_region` values('2602','311','阎良区','4');");
E_D("replace into `fanwe_delivery_region` values('2603','311','临潼区','4');");
E_D("replace into `fanwe_delivery_region` values('2604','311','长安区','4');");
E_D("replace into `fanwe_delivery_region` values('2605','311','蓝田县','4');");
E_D("replace into `fanwe_delivery_region` values('2606','311','周至县','4');");
E_D("replace into `fanwe_delivery_region` values('2607','311','户县','4');");
E_D("replace into `fanwe_delivery_region` values('2608','311','高陵县','4');");
E_D("replace into `fanwe_delivery_region` values('2609','312','汉滨区','4');");
E_D("replace into `fanwe_delivery_region` values('2610','312','汉阴县','4');");
E_D("replace into `fanwe_delivery_region` values('2611','312','石泉县','4');");
E_D("replace into `fanwe_delivery_region` values('2612','312','宁陕县','4');");
E_D("replace into `fanwe_delivery_region` values('2613','312','紫阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2614','312','岚皋县','4');");
E_D("replace into `fanwe_delivery_region` values('2615','312','平利县','4');");
E_D("replace into `fanwe_delivery_region` values('2616','312','镇坪县','4');");
E_D("replace into `fanwe_delivery_region` values('2617','312','旬阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2618','312','白河县','4');");
E_D("replace into `fanwe_delivery_region` values('2619','313','陈仓区','4');");
E_D("replace into `fanwe_delivery_region` values('2620','313','渭滨区','4');");
E_D("replace into `fanwe_delivery_region` values('2621','313','金台区','4');");
E_D("replace into `fanwe_delivery_region` values('2622','313','凤翔县','4');");
E_D("replace into `fanwe_delivery_region` values('2623','313','岐山县','4');");
E_D("replace into `fanwe_delivery_region` values('2624','313','扶风县','4');");
E_D("replace into `fanwe_delivery_region` values('2625','313','眉县','4');");
E_D("replace into `fanwe_delivery_region` values('2626','313','陇县','4');");
E_D("replace into `fanwe_delivery_region` values('2627','313','千阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2628','313','麟游县','4');");
E_D("replace into `fanwe_delivery_region` values('2629','313','凤县','4');");
E_D("replace into `fanwe_delivery_region` values('2630','313','太白县','4');");
E_D("replace into `fanwe_delivery_region` values('2631','314','汉台区','4');");
E_D("replace into `fanwe_delivery_region` values('2632','314','南郑县','4');");
E_D("replace into `fanwe_delivery_region` values('2633','314','城固县','4');");
E_D("replace into `fanwe_delivery_region` values('2634','314','洋县','4');");
E_D("replace into `fanwe_delivery_region` values('2635','314','西乡县','4');");
E_D("replace into `fanwe_delivery_region` values('2636','314','勉县','4');");
E_D("replace into `fanwe_delivery_region` values('2637','314','宁强县','4');");
E_D("replace into `fanwe_delivery_region` values('2638','314','略阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2639','314','镇巴县','4');");
E_D("replace into `fanwe_delivery_region` values('2640','314','留坝县','4');");
E_D("replace into `fanwe_delivery_region` values('2641','314','佛坪县','4');");
E_D("replace into `fanwe_delivery_region` values('2642','315','商州区','4');");
E_D("replace into `fanwe_delivery_region` values('2643','315','洛南县','4');");
E_D("replace into `fanwe_delivery_region` values('2644','315','丹凤县','4');");
E_D("replace into `fanwe_delivery_region` values('2645','315','商南县','4');");
E_D("replace into `fanwe_delivery_region` values('2646','315','山阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2647','315','镇安县','4');");
E_D("replace into `fanwe_delivery_region` values('2648','315','柞水县','4');");
E_D("replace into `fanwe_delivery_region` values('2649','316','耀州区','4');");
E_D("replace into `fanwe_delivery_region` values('2650','316','王益区','4');");
E_D("replace into `fanwe_delivery_region` values('2651','316','印台区','4');");
E_D("replace into `fanwe_delivery_region` values('2652','316','宜君县','4');");
E_D("replace into `fanwe_delivery_region` values('2653','317','临渭区','4');");
E_D("replace into `fanwe_delivery_region` values('2654','317','韩城市','4');");
E_D("replace into `fanwe_delivery_region` values('2655','317','华阴市','4');");
E_D("replace into `fanwe_delivery_region` values('2656','317','华县','4');");
E_D("replace into `fanwe_delivery_region` values('2657','317','潼关县','4');");
E_D("replace into `fanwe_delivery_region` values('2658','317','大荔县','4');");
E_D("replace into `fanwe_delivery_region` values('2659','317','合阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2660','317','澄城县','4');");
E_D("replace into `fanwe_delivery_region` values('2661','317','蒲城县','4');");
E_D("replace into `fanwe_delivery_region` values('2662','317','白水县','4');");
E_D("replace into `fanwe_delivery_region` values('2663','317','富平县','4');");
E_D("replace into `fanwe_delivery_region` values('2664','318','秦都区','4');");
E_D("replace into `fanwe_delivery_region` values('2665','318','渭城区','4');");
E_D("replace into `fanwe_delivery_region` values('2666','318','杨陵区','4');");
E_D("replace into `fanwe_delivery_region` values('2667','318','兴平市','4');");
E_D("replace into `fanwe_delivery_region` values('2668','318','三原县','4');");
E_D("replace into `fanwe_delivery_region` values('2669','318','泾阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2670','318','乾县','4');");
E_D("replace into `fanwe_delivery_region` values('2671','318','礼泉县','4');");
E_D("replace into `fanwe_delivery_region` values('2672','318','永寿县','4');");
E_D("replace into `fanwe_delivery_region` values('2673','318','彬县','4');");
E_D("replace into `fanwe_delivery_region` values('2674','318','长武县','4');");
E_D("replace into `fanwe_delivery_region` values('2675','318','旬邑县','4');");
E_D("replace into `fanwe_delivery_region` values('2676','318','淳化县','4');");
E_D("replace into `fanwe_delivery_region` values('2677','318','武功县','4');");
E_D("replace into `fanwe_delivery_region` values('2678','319','吴起县','4');");
E_D("replace into `fanwe_delivery_region` values('2679','319','宝塔区','4');");
E_D("replace into `fanwe_delivery_region` values('2680','319','延长县','4');");
E_D("replace into `fanwe_delivery_region` values('2681','319','延川县','4');");
E_D("replace into `fanwe_delivery_region` values('2682','319','子长县','4');");
E_D("replace into `fanwe_delivery_region` values('2683','319','安塞县','4');");
E_D("replace into `fanwe_delivery_region` values('2684','319','志丹县','4');");
E_D("replace into `fanwe_delivery_region` values('2685','319','甘泉县','4');");
E_D("replace into `fanwe_delivery_region` values('2686','319','富县','4');");
E_D("replace into `fanwe_delivery_region` values('2687','319','洛川县','4');");
E_D("replace into `fanwe_delivery_region` values('2688','319','宜川县','4');");
E_D("replace into `fanwe_delivery_region` values('2689','319','黄龙县','4');");
E_D("replace into `fanwe_delivery_region` values('2690','319','黄陵县','4');");
E_D("replace into `fanwe_delivery_region` values('2691','320','榆阳区','4');");
E_D("replace into `fanwe_delivery_region` values('2692','320','神木县','4');");
E_D("replace into `fanwe_delivery_region` values('2693','320','府谷县','4');");
E_D("replace into `fanwe_delivery_region` values('2694','320','横山县','4');");
E_D("replace into `fanwe_delivery_region` values('2695','320','靖边县','4');");
E_D("replace into `fanwe_delivery_region` values('2696','320','定边县','4');");
E_D("replace into `fanwe_delivery_region` values('2697','320','绥德县','4');");
E_D("replace into `fanwe_delivery_region` values('2698','320','米脂县','4');");
E_D("replace into `fanwe_delivery_region` values('2699','320','佳县','4');");
E_D("replace into `fanwe_delivery_region` values('2700','320','吴堡县','4');");
E_D("replace into `fanwe_delivery_region` values('2701','320','清涧县','4');");
E_D("replace into `fanwe_delivery_region` values('2702','320','子洲县','4');");
E_D("replace into `fanwe_delivery_region` values('2703','321','长宁区','4');");
E_D("replace into `fanwe_delivery_region` values('2704','321','闸北区','4');");
E_D("replace into `fanwe_delivery_region` values('2705','321','闵行区','4');");
E_D("replace into `fanwe_delivery_region` values('2706','321','徐汇区','4');");
E_D("replace into `fanwe_delivery_region` values('2707','321','浦东新区','4');");
E_D("replace into `fanwe_delivery_region` values('2708','321','杨浦区','4');");
E_D("replace into `fanwe_delivery_region` values('2709','321','普陀区','4');");
E_D("replace into `fanwe_delivery_region` values('2710','321','静安区','4');");
E_D("replace into `fanwe_delivery_region` values('2711','321','卢湾区','4');");
E_D("replace into `fanwe_delivery_region` values('2712','321','虹口区','4');");
E_D("replace into `fanwe_delivery_region` values('2713','321','黄浦区','4');");
E_D("replace into `fanwe_delivery_region` values('2714','321','南汇区','4');");
E_D("replace into `fanwe_delivery_region` values('2715','321','松江区','4');");
E_D("replace into `fanwe_delivery_region` values('2716','321','嘉定区','4');");
E_D("replace into `fanwe_delivery_region` values('2717','321','宝山区','4');");
E_D("replace into `fanwe_delivery_region` values('2718','321','青浦区','4');");
E_D("replace into `fanwe_delivery_region` values('2719','321','金山区','4');");
E_D("replace into `fanwe_delivery_region` values('2720','321','奉贤区','4');");
E_D("replace into `fanwe_delivery_region` values('2721','321','崇明县','4');");
E_D("replace into `fanwe_delivery_region` values('2722','322','青羊区','4');");
E_D("replace into `fanwe_delivery_region` values('2723','322','锦江区','4');");
E_D("replace into `fanwe_delivery_region` values('2724','322','金牛区','4');");
E_D("replace into `fanwe_delivery_region` values('2725','322','武侯区','4');");
E_D("replace into `fanwe_delivery_region` values('2726','322','成华区','4');");
E_D("replace into `fanwe_delivery_region` values('2727','322','龙泉驿区','4');");
E_D("replace into `fanwe_delivery_region` values('2728','322','青白江区','4');");
E_D("replace into `fanwe_delivery_region` values('2729','322','新都区','4');");
E_D("replace into `fanwe_delivery_region` values('2730','322','温江区','4');");
E_D("replace into `fanwe_delivery_region` values('2731','322','高新区','4');");
E_D("replace into `fanwe_delivery_region` values('2732','322','高新西区','4');");
E_D("replace into `fanwe_delivery_region` values('2733','322','都江堰市','4');");
E_D("replace into `fanwe_delivery_region` values('2734','322','彭州市','4');");
E_D("replace into `fanwe_delivery_region` values('2735','322','邛崃市','4');");
E_D("replace into `fanwe_delivery_region` values('2736','322','崇州市','4');");
E_D("replace into `fanwe_delivery_region` values('2737','322','金堂县','4');");
E_D("replace into `fanwe_delivery_region` values('2738','322','双流县','4');");
E_D("replace into `fanwe_delivery_region` values('2739','322','郫县','4');");
E_D("replace into `fanwe_delivery_region` values('2740','322','大邑县','4');");
E_D("replace into `fanwe_delivery_region` values('2741','322','蒲江县','4');");
E_D("replace into `fanwe_delivery_region` values('2742','322','新津县','4');");
E_D("replace into `fanwe_delivery_region` values('2743','322','都江堰市','4');");
E_D("replace into `fanwe_delivery_region` values('2744','322','彭州市','4');");
E_D("replace into `fanwe_delivery_region` values('2745','322','邛崃市','4');");
E_D("replace into `fanwe_delivery_region` values('2746','322','崇州市','4');");
E_D("replace into `fanwe_delivery_region` values('2747','322','金堂县','4');");
E_D("replace into `fanwe_delivery_region` values('2748','322','双流县','4');");
E_D("replace into `fanwe_delivery_region` values('2749','322','郫县','4');");
E_D("replace into `fanwe_delivery_region` values('2750','322','大邑县','4');");
E_D("replace into `fanwe_delivery_region` values('2751','322','蒲江县','4');");
E_D("replace into `fanwe_delivery_region` values('2752','322','新津县','4');");
E_D("replace into `fanwe_delivery_region` values('2753','323','涪城区','4');");
E_D("replace into `fanwe_delivery_region` values('2754','323','游仙区','4');");
E_D("replace into `fanwe_delivery_region` values('2755','323','江油市','4');");
E_D("replace into `fanwe_delivery_region` values('2756','323','盐亭县','4');");
E_D("replace into `fanwe_delivery_region` values('2757','323','三台县','4');");
E_D("replace into `fanwe_delivery_region` values('2758','323','平武县','4');");
E_D("replace into `fanwe_delivery_region` values('2759','323','安县','4');");
E_D("replace into `fanwe_delivery_region` values('2760','323','梓潼县','4');");
E_D("replace into `fanwe_delivery_region` values('2761','323','北川县','4');");
E_D("replace into `fanwe_delivery_region` values('2762','324','马尔康县','4');");
E_D("replace into `fanwe_delivery_region` values('2763','324','汶川县','4');");
E_D("replace into `fanwe_delivery_region` values('2764','324','理县','4');");
E_D("replace into `fanwe_delivery_region` values('2765','324','茂县','4');");
E_D("replace into `fanwe_delivery_region` values('2766','324','松潘县','4');");
E_D("replace into `fanwe_delivery_region` values('2767','324','九寨沟县','4');");
E_D("replace into `fanwe_delivery_region` values('2768','324','金川县','4');");
E_D("replace into `fanwe_delivery_region` values('2769','324','小金县','4');");
E_D("replace into `fanwe_delivery_region` values('2770','324','黑水县','4');");
E_D("replace into `fanwe_delivery_region` values('2771','324','壤塘县','4');");
E_D("replace into `fanwe_delivery_region` values('2772','324','阿坝县','4');");
E_D("replace into `fanwe_delivery_region` values('2773','324','若尔盖县','4');");
E_D("replace into `fanwe_delivery_region` values('2774','324','红原县','4');");
E_D("replace into `fanwe_delivery_region` values('2775','325','巴州区','4');");
E_D("replace into `fanwe_delivery_region` values('2776','325','通江县','4');");
E_D("replace into `fanwe_delivery_region` values('2777','325','南江县','4');");
E_D("replace into `fanwe_delivery_region` values('2778','325','平昌县','4');");
E_D("replace into `fanwe_delivery_region` values('2779','326','通川区','4');");
E_D("replace into `fanwe_delivery_region` values('2780','326','万源市','4');");
E_D("replace into `fanwe_delivery_region` values('2781','326','达县','4');");
E_D("replace into `fanwe_delivery_region` values('2782','326','宣汉县','4');");
E_D("replace into `fanwe_delivery_region` values('2783','326','开江县','4');");
E_D("replace into `fanwe_delivery_region` values('2784','326','大竹县','4');");
E_D("replace into `fanwe_delivery_region` values('2785','326','渠县','4');");
E_D("replace into `fanwe_delivery_region` values('2786','327','旌阳区','4');");
E_D("replace into `fanwe_delivery_region` values('2787','327','广汉市','4');");
E_D("replace into `fanwe_delivery_region` values('2788','327','什邡市','4');");
E_D("replace into `fanwe_delivery_region` values('2789','327','绵竹市','4');");
E_D("replace into `fanwe_delivery_region` values('2790','327','罗江县','4');");
E_D("replace into `fanwe_delivery_region` values('2791','327','中江县','4');");
E_D("replace into `fanwe_delivery_region` values('2792','328','康定县','4');");
E_D("replace into `fanwe_delivery_region` values('2793','328','丹巴县','4');");
E_D("replace into `fanwe_delivery_region` values('2794','328','泸定县','4');");
E_D("replace into `fanwe_delivery_region` values('2795','328','炉霍县','4');");
E_D("replace into `fanwe_delivery_region` values('2796','328','九龙县','4');");
E_D("replace into `fanwe_delivery_region` values('2797','328','甘孜县','4');");
E_D("replace into `fanwe_delivery_region` values('2798','328','雅江县','4');");
E_D("replace into `fanwe_delivery_region` values('2799','328','新龙县','4');");
E_D("replace into `fanwe_delivery_region` values('2800','328','道孚县','4');");
E_D("replace into `fanwe_delivery_region` values('2801','328','白玉县','4');");
E_D("replace into `fanwe_delivery_region` values('2802','328','理塘县','4');");
E_D("replace into `fanwe_delivery_region` values('2803','328','德格县','4');");
E_D("replace into `fanwe_delivery_region` values('2804','328','乡城县','4');");
E_D("replace into `fanwe_delivery_region` values('2805','328','石渠县','4');");
E_D("replace into `fanwe_delivery_region` values('2806','328','稻城县','4');");
E_D("replace into `fanwe_delivery_region` values('2807','328','色达县','4');");
E_D("replace into `fanwe_delivery_region` values('2808','328','巴塘县','4');");
E_D("replace into `fanwe_delivery_region` values('2809','328','得荣县','4');");
E_D("replace into `fanwe_delivery_region` values('2810','329','广安区','4');");
E_D("replace into `fanwe_delivery_region` values('2811','329','华蓥市','4');");
E_D("replace into `fanwe_delivery_region` values('2812','329','岳池县','4');");
E_D("replace into `fanwe_delivery_region` values('2813','329','武胜县','4');");
E_D("replace into `fanwe_delivery_region` values('2814','329','邻水县','4');");
E_D("replace into `fanwe_delivery_region` values('2815','330','利州区','4');");
E_D("replace into `fanwe_delivery_region` values('2816','330','元坝区','4');");
E_D("replace into `fanwe_delivery_region` values('2817','330','朝天区','4');");
E_D("replace into `fanwe_delivery_region` values('2818','330','旺苍县','4');");
E_D("replace into `fanwe_delivery_region` values('2819','330','青川县','4');");
E_D("replace into `fanwe_delivery_region` values('2820','330','剑阁县','4');");
E_D("replace into `fanwe_delivery_region` values('2821','330','苍溪县','4');");
E_D("replace into `fanwe_delivery_region` values('2822','331','峨眉山市','4');");
E_D("replace into `fanwe_delivery_region` values('2823','331','乐山市','4');");
E_D("replace into `fanwe_delivery_region` values('2824','331','犍为县','4');");
E_D("replace into `fanwe_delivery_region` values('2825','331','井研县','4');");
E_D("replace into `fanwe_delivery_region` values('2826','331','夹江县','4');");
E_D("replace into `fanwe_delivery_region` values('2827','331','沐川县','4');");
E_D("replace into `fanwe_delivery_region` values('2828','331','峨边','4');");
E_D("replace into `fanwe_delivery_region` values('2829','331','马边','4');");
E_D("replace into `fanwe_delivery_region` values('2830','332','西昌市','4');");
E_D("replace into `fanwe_delivery_region` values('2831','332','盐源县','4');");
E_D("replace into `fanwe_delivery_region` values('2832','332','德昌县','4');");
E_D("replace into `fanwe_delivery_region` values('2833','332','会理县','4');");
E_D("replace into `fanwe_delivery_region` values('2834','332','会东县','4');");
E_D("replace into `fanwe_delivery_region` values('2835','332','宁南县','4');");
E_D("replace into `fanwe_delivery_region` values('2836','332','普格县','4');");
E_D("replace into `fanwe_delivery_region` values('2837','332','布拖县','4');");
E_D("replace into `fanwe_delivery_region` values('2838','332','金阳县','4');");
E_D("replace into `fanwe_delivery_region` values('2839','332','昭觉县','4');");
E_D("replace into `fanwe_delivery_region` values('2840','332','喜德县','4');");
E_D("replace into `fanwe_delivery_region` values('2841','332','冕宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2842','332','越西县','4');");
E_D("replace into `fanwe_delivery_region` values('2843','332','甘洛县','4');");
E_D("replace into `fanwe_delivery_region` values('2844','332','美姑县','4');");
E_D("replace into `fanwe_delivery_region` values('2845','332','雷波县','4');");
E_D("replace into `fanwe_delivery_region` values('2846','332','木里','4');");
E_D("replace into `fanwe_delivery_region` values('2847','333','东坡区','4');");
E_D("replace into `fanwe_delivery_region` values('2848','333','仁寿县','4');");
E_D("replace into `fanwe_delivery_region` values('2849','333','彭山县','4');");
E_D("replace into `fanwe_delivery_region` values('2850','333','洪雅县','4');");
E_D("replace into `fanwe_delivery_region` values('2851','333','丹棱县','4');");
E_D("replace into `fanwe_delivery_region` values('2852','333','青神县','4');");
E_D("replace into `fanwe_delivery_region` values('2853','334','阆中市','4');");
E_D("replace into `fanwe_delivery_region` values('2854','334','南部县','4');");
E_D("replace into `fanwe_delivery_region` values('2855','334','营山县','4');");
E_D("replace into `fanwe_delivery_region` values('2856','334','蓬安县','4');");
E_D("replace into `fanwe_delivery_region` values('2857','334','仪陇县','4');");
E_D("replace into `fanwe_delivery_region` values('2858','334','顺庆区','4');");
E_D("replace into `fanwe_delivery_region` values('2859','334','高坪区','4');");
E_D("replace into `fanwe_delivery_region` values('2860','334','嘉陵区','4');");
E_D("replace into `fanwe_delivery_region` values('2861','334','西充县','4');");
E_D("replace into `fanwe_delivery_region` values('2862','335','市中区','4');");
E_D("replace into `fanwe_delivery_region` values('2863','335','东兴区','4');");
E_D("replace into `fanwe_delivery_region` values('2864','335','威远县','4');");
E_D("replace into `fanwe_delivery_region` values('2865','335','资中县','4');");
E_D("replace into `fanwe_delivery_region` values('2866','335','隆昌县','4');");
E_D("replace into `fanwe_delivery_region` values('2867','336','东  区','4');");
E_D("replace into `fanwe_delivery_region` values('2868','336','西  区','4');");
E_D("replace into `fanwe_delivery_region` values('2869','336','仁和区','4');");
E_D("replace into `fanwe_delivery_region` values('2870','336','米易县','4');");
E_D("replace into `fanwe_delivery_region` values('2871','336','盐边县','4');");
E_D("replace into `fanwe_delivery_region` values('2872','337','船山区','4');");
E_D("replace into `fanwe_delivery_region` values('2873','337','安居区','4');");
E_D("replace into `fanwe_delivery_region` values('2874','337','蓬溪县','4');");
E_D("replace into `fanwe_delivery_region` values('2875','337','射洪县','4');");
E_D("replace into `fanwe_delivery_region` values('2876','337','大英县','4');");
E_D("replace into `fanwe_delivery_region` values('2877','338','雨城区','4');");
E_D("replace into `fanwe_delivery_region` values('2878','338','名山县','4');");
E_D("replace into `fanwe_delivery_region` values('2879','338','荥经县','4');");
E_D("replace into `fanwe_delivery_region` values('2880','338','汉源县','4');");
E_D("replace into `fanwe_delivery_region` values('2881','338','石棉县','4');");
E_D("replace into `fanwe_delivery_region` values('2882','338','天全县','4');");
E_D("replace into `fanwe_delivery_region` values('2883','338','芦山县','4');");
E_D("replace into `fanwe_delivery_region` values('2884','338','宝兴县','4');");
E_D("replace into `fanwe_delivery_region` values('2885','339','翠屏区','4');");
E_D("replace into `fanwe_delivery_region` values('2886','339','宜宾县','4');");
E_D("replace into `fanwe_delivery_region` values('2887','339','南溪县','4');");
E_D("replace into `fanwe_delivery_region` values('2888','339','江安县','4');");
E_D("replace into `fanwe_delivery_region` values('2889','339','长宁县','4');");
E_D("replace into `fanwe_delivery_region` values('2890','339','高县','4');");
E_D("replace into `fanwe_delivery_region` values('2891','339','珙县','4');");
E_D("replace into `fanwe_delivery_region` values('2892','339','筠连县','4');");
E_D("replace into `fanwe_delivery_region` values('2893','339','兴文县','4');");
E_D("replace into `fanwe_delivery_region` values('2894','339','屏山县','4');");
E_D("replace into `fanwe_delivery_region` values('2895','340','雁江区','4');");
E_D("replace into `fanwe_delivery_region` values('2896','340','简阳市','4');");
E_D("replace into `fanwe_delivery_region` values('2897','340','安岳县','4');");
E_D("replace into `fanwe_delivery_region` values('2898','340','乐至县','4');");
E_D("replace into `fanwe_delivery_region` values('2899','341','大安区','4');");
E_D("replace into `fanwe_delivery_region` values('2900','341','自流井区','4');");
E_D("replace into `fanwe_delivery_region` values('2901','341','贡井区','4');");
E_D("replace into `fanwe_delivery_region` values('2902','341','沿滩区','4');");
E_D("replace into `fanwe_delivery_region` values('2903','341','荣县','4');");
E_D("replace into `fanwe_delivery_region` values('2904','341','富顺县','4');");
E_D("replace into `fanwe_delivery_region` values('2905','342','江阳区','4');");
E_D("replace into `fanwe_delivery_region` values('2906','342','纳溪区','4');");
E_D("replace into `fanwe_delivery_region` values('2907','342','龙马潭区','4');");
E_D("replace into `fanwe_delivery_region` values('2908','342','泸县','4');");
E_D("replace into `fanwe_delivery_region` values('2909','342','合江县','4');");
E_D("replace into `fanwe_delivery_region` values('2910','342','叙永县','4');");
E_D("replace into `fanwe_delivery_region` values('2911','342','古蔺县','4');");
E_D("replace into `fanwe_delivery_region` values('2912','343','和平区','4');");
E_D("replace into `fanwe_delivery_region` values('2913','343','河西区','4');");
E_D("replace into `fanwe_delivery_region` values('2914','343','南开区','4');");
E_D("replace into `fanwe_delivery_region` values('2915','343','河北区','4');");
E_D("replace into `fanwe_delivery_region` values('2916','343','河东区','4');");
E_D("replace into `fanwe_delivery_region` values('2917','343','红桥区','4');");
E_D("replace into `fanwe_delivery_region` values('2918','343','东丽区','4');");
E_D("replace into `fanwe_delivery_region` values('2919','343','津南区','4');");
E_D("replace into `fanwe_delivery_region` values('2920','343','西青区','4');");
E_D("replace into `fanwe_delivery_region` values('2921','343','北辰区','4');");
E_D("replace into `fanwe_delivery_region` values('2922','343','塘沽区','4');");
E_D("replace into `fanwe_delivery_region` values('2923','343','汉沽区','4');");
E_D("replace into `fanwe_delivery_region` values('2924','343','大港区','4');");
E_D("replace into `fanwe_delivery_region` values('2925','343','武清区','4');");
E_D("replace into `fanwe_delivery_region` values('2926','343','宝坻区','4');");
E_D("replace into `fanwe_delivery_region` values('2927','343','经济开发区','4');");
E_D("replace into `fanwe_delivery_region` values('2928','343','宁河县','4');");
E_D("replace into `fanwe_delivery_region` values('2929','343','静海县','4');");
E_D("replace into `fanwe_delivery_region` values('2930','343','蓟县','4');");
E_D("replace into `fanwe_delivery_region` values('2931','344','城关区','4');");
E_D("replace into `fanwe_delivery_region` values('2932','344','林周县','4');");
E_D("replace into `fanwe_delivery_region` values('2933','344','当雄县','4');");
E_D("replace into `fanwe_delivery_region` values('2934','344','尼木县','4');");
E_D("replace into `fanwe_delivery_region` values('2935','344','曲水县','4');");
E_D("replace into `fanwe_delivery_region` values('2936','344','堆龙德庆县','4');");
E_D("replace into `fanwe_delivery_region` values('2937','344','达孜县','4');");
E_D("replace into `fanwe_delivery_region` values('2938','344','墨竹工卡县','4');");
E_D("replace into `fanwe_delivery_region` values('2939','345','噶尔县','4');");
E_D("replace into `fanwe_delivery_region` values('2940','345','普兰县','4');");
E_D("replace into `fanwe_delivery_region` values('2941','345','札达县','4');");
E_D("replace into `fanwe_delivery_region` values('2942','345','日土县','4');");
E_D("replace into `fanwe_delivery_region` values('2943','345','革吉县','4');");
E_D("replace into `fanwe_delivery_region` values('2944','345','改则县','4');");
E_D("replace into `fanwe_delivery_region` values('2945','345','措勤县','4');");
E_D("replace into `fanwe_delivery_region` values('2946','346','昌都县','4');");
E_D("replace into `fanwe_delivery_region` values('2947','346','江达县','4');");
E_D("replace into `fanwe_delivery_region` values('2948','346','贡觉县','4');");
E_D("replace into `fanwe_delivery_region` values('2949','346','类乌齐县','4');");
E_D("replace into `fanwe_delivery_region` values('2950','346','丁青县','4');");
E_D("replace into `fanwe_delivery_region` values('2951','346','察雅县','4');");
E_D("replace into `fanwe_delivery_region` values('2952','346','八宿县','4');");
E_D("replace into `fanwe_delivery_region` values('2953','346','左贡县','4');");
E_D("replace into `fanwe_delivery_region` values('2954','346','芒康县','4');");
E_D("replace into `fanwe_delivery_region` values('2955','346','洛隆县','4');");
E_D("replace into `fanwe_delivery_region` values('2956','346','边坝县','4');");
E_D("replace into `fanwe_delivery_region` values('2957','347','林芝县','4');");
E_D("replace into `fanwe_delivery_region` values('2958','347','工布江达县','4');");
E_D("replace into `fanwe_delivery_region` values('2959','347','米林县','4');");
E_D("replace into `fanwe_delivery_region` values('2960','347','墨脱县','4');");
E_D("replace into `fanwe_delivery_region` values('2961','347','波密县','4');");
E_D("replace into `fanwe_delivery_region` values('2962','347','察隅县','4');");
E_D("replace into `fanwe_delivery_region` values('2963','347','朗县','4');");
E_D("replace into `fanwe_delivery_region` values('2964','348','那曲县','4');");
E_D("replace into `fanwe_delivery_region` values('2965','348','嘉黎县','4');");
E_D("replace into `fanwe_delivery_region` values('2966','348','比如县','4');");
E_D("replace into `fanwe_delivery_region` values('2967','348','聂荣县','4');");
E_D("replace into `fanwe_delivery_region` values('2968','348','安多县','4');");
E_D("replace into `fanwe_delivery_region` values('2969','348','申扎县','4');");
E_D("replace into `fanwe_delivery_region` values('2970','348','索县','4');");
E_D("replace into `fanwe_delivery_region` values('2971','348','班戈县','4');");
E_D("replace into `fanwe_delivery_region` values('2972','348','巴青县','4');");
E_D("replace into `fanwe_delivery_region` values('2973','348','尼玛县','4');");
E_D("replace into `fanwe_delivery_region` values('2974','349','日喀则市','4');");
E_D("replace into `fanwe_delivery_region` values('2975','349','南木林县','4');");
E_D("replace into `fanwe_delivery_region` values('2976','349','江孜县','4');");
E_D("replace into `fanwe_delivery_region` values('2977','349','定日县','4');");
E_D("replace into `fanwe_delivery_region` values('2978','349','萨迦县','4');");
E_D("replace into `fanwe_delivery_region` values('2979','349','拉孜县','4');");
E_D("replace into `fanwe_delivery_region` values('2980','349','昂仁县','4');");
E_D("replace into `fanwe_delivery_region` values('2981','349','谢通门县','4');");
E_D("replace into `fanwe_delivery_region` values('2982','349','白朗县','4');");
E_D("replace into `fanwe_delivery_region` values('2983','349','仁布县','4');");
E_D("replace into `fanwe_delivery_region` values('2984','349','康马县','4');");
E_D("replace into `fanwe_delivery_region` values('2985','349','定结县','4');");
E_D("replace into `fanwe_delivery_region` values('2986','349','仲巴县','4');");
E_D("replace into `fanwe_delivery_region` values('2987','349','亚东县','4');");
E_D("replace into `fanwe_delivery_region` values('2988','349','吉隆县','4');");
E_D("replace into `fanwe_delivery_region` values('2989','349','聂拉木县','4');");
E_D("replace into `fanwe_delivery_region` values('2990','349','萨嘎县','4');");
E_D("replace into `fanwe_delivery_region` values('2991','349','岗巴县','4');");
E_D("replace into `fanwe_delivery_region` values('2992','350','乃东县','4');");
E_D("replace into `fanwe_delivery_region` values('2993','350','扎囊县','4');");
E_D("replace into `fanwe_delivery_region` values('2994','350','贡嘎县','4');");
E_D("replace into `fanwe_delivery_region` values('2995','350','桑日县','4');");
E_D("replace into `fanwe_delivery_region` values('2996','350','琼结县','4');");
E_D("replace into `fanwe_delivery_region` values('2997','350','曲松县','4');");
E_D("replace into `fanwe_delivery_region` values('2998','350','措美县','4');");
E_D("replace into `fanwe_delivery_region` values('2999','350','洛扎县','4');");
E_D("replace into `fanwe_delivery_region` values('3000','350','加查县','4');");
E_D("replace into `fanwe_delivery_region` values('3001','350','隆子县','4');");
E_D("replace into `fanwe_delivery_region` values('3002','350','错那县','4');");
E_D("replace into `fanwe_delivery_region` values('3003','350','浪卡子县','4');");
E_D("replace into `fanwe_delivery_region` values('3004','351','天山区','4');");
E_D("replace into `fanwe_delivery_region` values('3005','351','沙依巴克区','4');");
E_D("replace into `fanwe_delivery_region` values('3006','351','新市区','4');");
E_D("replace into `fanwe_delivery_region` values('3007','351','水磨沟区','4');");
E_D("replace into `fanwe_delivery_region` values('3008','351','头屯河区','4');");
E_D("replace into `fanwe_delivery_region` values('3009','351','达坂城区','4');");
E_D("replace into `fanwe_delivery_region` values('3010','351','米东区','4');");
E_D("replace into `fanwe_delivery_region` values('3011','351','乌鲁木齐县','4');");
E_D("replace into `fanwe_delivery_region` values('3012','352','阿克苏市','4');");
E_D("replace into `fanwe_delivery_region` values('3013','352','温宿县','4');");
E_D("replace into `fanwe_delivery_region` values('3014','352','库车县','4');");
E_D("replace into `fanwe_delivery_region` values('3015','352','沙雅县','4');");
E_D("replace into `fanwe_delivery_region` values('3016','352','新和县','4');");
E_D("replace into `fanwe_delivery_region` values('3017','352','拜城县','4');");
E_D("replace into `fanwe_delivery_region` values('3018','352','乌什县','4');");
E_D("replace into `fanwe_delivery_region` values('3019','352','阿瓦提县','4');");
E_D("replace into `fanwe_delivery_region` values('3020','352','柯坪县','4');");
E_D("replace into `fanwe_delivery_region` values('3021','353','阿拉尔市','4');");
E_D("replace into `fanwe_delivery_region` values('3022','354','库尔勒市','4');");
E_D("replace into `fanwe_delivery_region` values('3023','354','轮台县','4');");
E_D("replace into `fanwe_delivery_region` values('3024','354','尉犁县','4');");
E_D("replace into `fanwe_delivery_region` values('3025','354','若羌县','4');");
E_D("replace into `fanwe_delivery_region` values('3026','354','且末县','4');");
E_D("replace into `fanwe_delivery_region` values('3027','354','焉耆','4');");
E_D("replace into `fanwe_delivery_region` values('3028','354','和静县','4');");
E_D("replace into `fanwe_delivery_region` values('3029','354','和硕县','4');");
E_D("replace into `fanwe_delivery_region` values('3030','354','博湖县','4');");
E_D("replace into `fanwe_delivery_region` values('3031','355','博乐市','4');");
E_D("replace into `fanwe_delivery_region` values('3032','355','精河县','4');");
E_D("replace into `fanwe_delivery_region` values('3033','355','温泉县','4');");
E_D("replace into `fanwe_delivery_region` values('3034','356','呼图壁县','4');");
E_D("replace into `fanwe_delivery_region` values('3035','356','米泉市','4');");
E_D("replace into `fanwe_delivery_region` values('3036','356','昌吉市','4');");
E_D("replace into `fanwe_delivery_region` values('3037','356','阜康市','4');");
E_D("replace into `fanwe_delivery_region` values('3038','356','玛纳斯县','4');");
E_D("replace into `fanwe_delivery_region` values('3039','356','奇台县','4');");
E_D("replace into `fanwe_delivery_region` values('3040','356','吉木萨尔县','4');");
E_D("replace into `fanwe_delivery_region` values('3041','356','木垒','4');");
E_D("replace into `fanwe_delivery_region` values('3042','357','哈密市','4');");
E_D("replace into `fanwe_delivery_region` values('3043','357','伊吾县','4');");
E_D("replace into `fanwe_delivery_region` values('3044','357','巴里坤','4');");
E_D("replace into `fanwe_delivery_region` values('3045','358','和田市','4');");
E_D("replace into `fanwe_delivery_region` values('3046','358','和田县','4');");
E_D("replace into `fanwe_delivery_region` values('3047','358','墨玉县','4');");
E_D("replace into `fanwe_delivery_region` values('3048','358','皮山县','4');");
E_D("replace into `fanwe_delivery_region` values('3049','358','洛浦县','4');");
E_D("replace into `fanwe_delivery_region` values('3050','358','策勒县','4');");
E_D("replace into `fanwe_delivery_region` values('3051','358','于田县','4');");
E_D("replace into `fanwe_delivery_region` values('3052','358','民丰县','4');");
E_D("replace into `fanwe_delivery_region` values('3053','359','喀什市','4');");
E_D("replace into `fanwe_delivery_region` values('3054','359','疏附县','4');");
E_D("replace into `fanwe_delivery_region` values('3055','359','疏勒县','4');");
E_D("replace into `fanwe_delivery_region` values('3056','359','英吉沙县','4');");
E_D("replace into `fanwe_delivery_region` values('3057','359','泽普县','4');");
E_D("replace into `fanwe_delivery_region` values('3058','359','莎车县','4');");
E_D("replace into `fanwe_delivery_region` values('3059','359','叶城县','4');");
E_D("replace into `fanwe_delivery_region` values('3060','359','麦盖提县','4');");
E_D("replace into `fanwe_delivery_region` values('3061','359','岳普湖县','4');");
E_D("replace into `fanwe_delivery_region` values('3062','359','伽师县','4');");
E_D("replace into `fanwe_delivery_region` values('3063','359','巴楚县','4');");
E_D("replace into `fanwe_delivery_region` values('3064','359','塔什库尔干','4');");
E_D("replace into `fanwe_delivery_region` values('3065','360','克拉玛依市','4');");
E_D("replace into `fanwe_delivery_region` values('3066','361','阿图什市','4');");
E_D("replace into `fanwe_delivery_region` values('3067','361','阿克陶县','4');");
E_D("replace into `fanwe_delivery_region` values('3068','361','阿合奇县','4');");
E_D("replace into `fanwe_delivery_region` values('3069','361','乌恰县','4');");
E_D("replace into `fanwe_delivery_region` values('3070','362','石河子市','4');");
E_D("replace into `fanwe_delivery_region` values('3071','363','图木舒克市','4');");
E_D("replace into `fanwe_delivery_region` values('3072','364','吐鲁番市','4');");
E_D("replace into `fanwe_delivery_region` values('3073','364','鄯善县','4');");
E_D("replace into `fanwe_delivery_region` values('3074','364','托克逊县','4');");
E_D("replace into `fanwe_delivery_region` values('3075','365','五家渠市','4');");
E_D("replace into `fanwe_delivery_region` values('3076','366','阿勒泰市','4');");
E_D("replace into `fanwe_delivery_region` values('3077','366','布克赛尔','4');");
E_D("replace into `fanwe_delivery_region` values('3078','366','伊宁市','4');");
E_D("replace into `fanwe_delivery_region` values('3079','366','布尔津县','4');");
E_D("replace into `fanwe_delivery_region` values('3080','366','奎屯市','4');");
E_D("replace into `fanwe_delivery_region` values('3081','366','乌苏市','4');");
E_D("replace into `fanwe_delivery_region` values('3082','366','额敏县','4');");
E_D("replace into `fanwe_delivery_region` values('3083','366','富蕴县','4');");
E_D("replace into `fanwe_delivery_region` values('3084','366','伊宁县','4');");
E_D("replace into `fanwe_delivery_region` values('3085','366','福海县','4');");
E_D("replace into `fanwe_delivery_region` values('3086','366','霍城县','4');");
E_D("replace into `fanwe_delivery_region` values('3087','366','沙湾县','4');");
E_D("replace into `fanwe_delivery_region` values('3088','366','巩留县','4');");
E_D("replace into `fanwe_delivery_region` values('3089','366','哈巴河县','4');");
E_D("replace into `fanwe_delivery_region` values('3090','366','托里县','4');");
E_D("replace into `fanwe_delivery_region` values('3091','366','青河县','4');");
E_D("replace into `fanwe_delivery_region` values('3092','366','新源县','4');");
E_D("replace into `fanwe_delivery_region` values('3093','366','裕民县','4');");
E_D("replace into `fanwe_delivery_region` values('3094','366','和布克赛尔','4');");
E_D("replace into `fanwe_delivery_region` values('3095','366','吉木乃县','4');");
E_D("replace into `fanwe_delivery_region` values('3096','366','昭苏县','4');");
E_D("replace into `fanwe_delivery_region` values('3097','366','特克斯县','4');");
E_D("replace into `fanwe_delivery_region` values('3098','366','尼勒克县','4');");
E_D("replace into `fanwe_delivery_region` values('3099','366','察布查尔','4');");
E_D("replace into `fanwe_delivery_region` values('3100','367','盘龙区','4');");
E_D("replace into `fanwe_delivery_region` values('3101','367','五华区','4');");
E_D("replace into `fanwe_delivery_region` values('3102','367','官渡区','4');");
E_D("replace into `fanwe_delivery_region` values('3103','367','西山区','4');");
E_D("replace into `fanwe_delivery_region` values('3104','367','东川区','4');");
E_D("replace into `fanwe_delivery_region` values('3105','367','安宁市','4');");
E_D("replace into `fanwe_delivery_region` values('3106','367','呈贡县','4');");
E_D("replace into `fanwe_delivery_region` values('3107','367','晋宁县','4');");
E_D("replace into `fanwe_delivery_region` values('3108','367','富民县','4');");
E_D("replace into `fanwe_delivery_region` values('3109','367','宜良县','4');");
E_D("replace into `fanwe_delivery_region` values('3110','367','嵩明县','4');");
E_D("replace into `fanwe_delivery_region` values('3111','367','石林县','4');");
E_D("replace into `fanwe_delivery_region` values('3112','367','禄劝','4');");
E_D("replace into `fanwe_delivery_region` values('3113','367','寻甸','4');");
E_D("replace into `fanwe_delivery_region` values('3114','368','兰坪','4');");
E_D("replace into `fanwe_delivery_region` values('3115','368','泸水县','4');");
E_D("replace into `fanwe_delivery_region` values('3116','368','福贡县','4');");
E_D("replace into `fanwe_delivery_region` values('3117','368','贡山','4');");
E_D("replace into `fanwe_delivery_region` values('3118','369','宁洱','4');");
E_D("replace into `fanwe_delivery_region` values('3119','369','思茅区','4');");
E_D("replace into `fanwe_delivery_region` values('3120','369','墨江','4');");
E_D("replace into `fanwe_delivery_region` values('3121','369','景东','4');");
E_D("replace into `fanwe_delivery_region` values('3122','369','景谷','4');");
E_D("replace into `fanwe_delivery_region` values('3123','369','镇沅','4');");
E_D("replace into `fanwe_delivery_region` values('3124','369','江城','4');");
E_D("replace into `fanwe_delivery_region` values('3125','369','孟连','4');");
E_D("replace into `fanwe_delivery_region` values('3126','369','澜沧','4');");
E_D("replace into `fanwe_delivery_region` values('3127','369','西盟','4');");
E_D("replace into `fanwe_delivery_region` values('3128','370','古城区','4');");
E_D("replace into `fanwe_delivery_region` values('3129','370','宁蒗','4');");
E_D("replace into `fanwe_delivery_region` values('3130','370','玉龙','4');");
E_D("replace into `fanwe_delivery_region` values('3131','370','永胜县','4');");
E_D("replace into `fanwe_delivery_region` values('3132','370','华坪县','4');");
E_D("replace into `fanwe_delivery_region` values('3133','371','隆阳区','4');");
E_D("replace into `fanwe_delivery_region` values('3134','371','施甸县','4');");
E_D("replace into `fanwe_delivery_region` values('3135','371','腾冲县','4');");
E_D("replace into `fanwe_delivery_region` values('3136','371','龙陵县','4');");
E_D("replace into `fanwe_delivery_region` values('3137','371','昌宁县','4');");
E_D("replace into `fanwe_delivery_region` values('3138','372','楚雄市','4');");
E_D("replace into `fanwe_delivery_region` values('3139','372','双柏县','4');");
E_D("replace into `fanwe_delivery_region` values('3140','372','牟定县','4');");
E_D("replace into `fanwe_delivery_region` values('3141','372','南华县','4');");
E_D("replace into `fanwe_delivery_region` values('3142','372','姚安县','4');");
E_D("replace into `fanwe_delivery_region` values('3143','372','大姚县','4');");
E_D("replace into `fanwe_delivery_region` values('3144','372','永仁县','4');");
E_D("replace into `fanwe_delivery_region` values('3145','372','元谋县','4');");
E_D("replace into `fanwe_delivery_region` values('3146','372','武定县','4');");
E_D("replace into `fanwe_delivery_region` values('3147','372','禄丰县','4');");
E_D("replace into `fanwe_delivery_region` values('3148','373','大理市','4');");
E_D("replace into `fanwe_delivery_region` values('3149','373','祥云县','4');");
E_D("replace into `fanwe_delivery_region` values('3150','373','宾川县','4');");
E_D("replace into `fanwe_delivery_region` values('3151','373','弥渡县','4');");
E_D("replace into `fanwe_delivery_region` values('3152','373','永平县','4');");
E_D("replace into `fanwe_delivery_region` values('3153','373','云龙县','4');");
E_D("replace into `fanwe_delivery_region` values('3154','373','洱源县','4');");
E_D("replace into `fanwe_delivery_region` values('3155','373','剑川县','4');");
E_D("replace into `fanwe_delivery_region` values('3156','373','鹤庆县','4');");
E_D("replace into `fanwe_delivery_region` values('3157','373','漾濞','4');");
E_D("replace into `fanwe_delivery_region` values('3158','373','南涧','4');");
E_D("replace into `fanwe_delivery_region` values('3159','373','巍山','4');");
E_D("replace into `fanwe_delivery_region` values('3160','374','潞西市','4');");
E_D("replace into `fanwe_delivery_region` values('3161','374','瑞丽市','4');");
E_D("replace into `fanwe_delivery_region` values('3162','374','梁河县','4');");
E_D("replace into `fanwe_delivery_region` values('3163','374','盈江县','4');");
E_D("replace into `fanwe_delivery_region` values('3164','374','陇川县','4');");
E_D("replace into `fanwe_delivery_region` values('3165','375','香格里拉县','4');");
E_D("replace into `fanwe_delivery_region` values('3166','375','德钦县','4');");
E_D("replace into `fanwe_delivery_region` values('3167','375','维西','4');");
E_D("replace into `fanwe_delivery_region` values('3168','376','泸西县','4');");
E_D("replace into `fanwe_delivery_region` values('3169','376','蒙自县','4');");
E_D("replace into `fanwe_delivery_region` values('3170','376','个旧市','4');");
E_D("replace into `fanwe_delivery_region` values('3171','376','开远市','4');");
E_D("replace into `fanwe_delivery_region` values('3172','376','绿春县','4');");
E_D("replace into `fanwe_delivery_region` values('3173','376','建水县','4');");
E_D("replace into `fanwe_delivery_region` values('3174','376','石屏县','4');");
E_D("replace into `fanwe_delivery_region` values('3175','376','弥勒县','4');");
E_D("replace into `fanwe_delivery_region` values('3176','376','元阳县','4');");
E_D("replace into `fanwe_delivery_region` values('3177','376','红河县','4');");
E_D("replace into `fanwe_delivery_region` values('3178','376','金平','4');");
E_D("replace into `fanwe_delivery_region` values('3179','376','河口','4');");
E_D("replace into `fanwe_delivery_region` values('3180','376','屏边','4');");
E_D("replace into `fanwe_delivery_region` values('3181','377','临翔区','4');");
E_D("replace into `fanwe_delivery_region` values('3182','377','凤庆县','4');");
E_D("replace into `fanwe_delivery_region` values('3183','377','云县','4');");
E_D("replace into `fanwe_delivery_region` values('3184','377','永德县','4');");
E_D("replace into `fanwe_delivery_region` values('3185','377','镇康县','4');");
E_D("replace into `fanwe_delivery_region` values('3186','377','双江','4');");
E_D("replace into `fanwe_delivery_region` values('3187','377','耿马','4');");
E_D("replace into `fanwe_delivery_region` values('3188','377','沧源','4');");
E_D("replace into `fanwe_delivery_region` values('3189','378','麒麟区','4');");
E_D("replace into `fanwe_delivery_region` values('3190','378','宣威市','4');");
E_D("replace into `fanwe_delivery_region` values('3191','378','马龙县','4');");
E_D("replace into `fanwe_delivery_region` values('3192','378','陆良县','4');");
E_D("replace into `fanwe_delivery_region` values('3193','378','师宗县','4');");
E_D("replace into `fanwe_delivery_region` values('3194','378','罗平县','4');");
E_D("replace into `fanwe_delivery_region` values('3195','378','富源县','4');");
E_D("replace into `fanwe_delivery_region` values('3196','378','会泽县','4');");
E_D("replace into `fanwe_delivery_region` values('3197','378','沾益县','4');");
E_D("replace into `fanwe_delivery_region` values('3198','379','文山县','4');");
E_D("replace into `fanwe_delivery_region` values('3199','379','砚山县','4');");
E_D("replace into `fanwe_delivery_region` values('3200','379','西畴县','4');");
E_D("replace into `fanwe_delivery_region` values('3201','379','麻栗坡县','4');");
E_D("replace into `fanwe_delivery_region` values('3202','379','马关县','4');");
E_D("replace into `fanwe_delivery_region` values('3203','379','丘北县','4');");
E_D("replace into `fanwe_delivery_region` values('3204','379','广南县','4');");
E_D("replace into `fanwe_delivery_region` values('3205','379','富宁县','4');");
E_D("replace into `fanwe_delivery_region` values('3206','380','景洪市','4');");
E_D("replace into `fanwe_delivery_region` values('3207','380','勐海县','4');");
E_D("replace into `fanwe_delivery_region` values('3208','380','勐腊县','4');");
E_D("replace into `fanwe_delivery_region` values('3209','381','红塔区','4');");
E_D("replace into `fanwe_delivery_region` values('3210','381','江川县','4');");
E_D("replace into `fanwe_delivery_region` values('3211','381','澄江县','4');");
E_D("replace into `fanwe_delivery_region` values('3212','381','通海县','4');");
E_D("replace into `fanwe_delivery_region` values('3213','381','华宁县','4');");
E_D("replace into `fanwe_delivery_region` values('3214','381','易门县','4');");
E_D("replace into `fanwe_delivery_region` values('3215','381','峨山','4');");
E_D("replace into `fanwe_delivery_region` values('3216','381','新平','4');");
E_D("replace into `fanwe_delivery_region` values('3217','381','元江','4');");
E_D("replace into `fanwe_delivery_region` values('3218','382','昭阳区','4');");
E_D("replace into `fanwe_delivery_region` values('3219','382','鲁甸县','4');");
E_D("replace into `fanwe_delivery_region` values('3220','382','巧家县','4');");
E_D("replace into `fanwe_delivery_region` values('3221','382','盐津县','4');");
E_D("replace into `fanwe_delivery_region` values('3222','382','大关县','4');");
E_D("replace into `fanwe_delivery_region` values('3223','382','永善县','4');");
E_D("replace into `fanwe_delivery_region` values('3224','382','绥江县','4');");
E_D("replace into `fanwe_delivery_region` values('3225','382','镇雄县','4');");
E_D("replace into `fanwe_delivery_region` values('3226','382','彝良县','4');");
E_D("replace into `fanwe_delivery_region` values('3227','382','威信县','4');");
E_D("replace into `fanwe_delivery_region` values('3228','382','水富县','4');");
E_D("replace into `fanwe_delivery_region` values('3229','383','西湖区','4');");
E_D("replace into `fanwe_delivery_region` values('3230','383','上城区','4');");
E_D("replace into `fanwe_delivery_region` values('3231','383','下城区','4');");
E_D("replace into `fanwe_delivery_region` values('3232','383','拱墅区','4');");
E_D("replace into `fanwe_delivery_region` values('3233','383','滨江区','4');");
E_D("replace into `fanwe_delivery_region` values('3234','383','江干区','4');");
E_D("replace into `fanwe_delivery_region` values('3235','383','萧山区','4');");
E_D("replace into `fanwe_delivery_region` values('3236','383','余杭区','4');");
E_D("replace into `fanwe_delivery_region` values('3237','383','市郊','4');");
E_D("replace into `fanwe_delivery_region` values('3238','383','建德市','4');");
E_D("replace into `fanwe_delivery_region` values('3239','383','富阳市','4');");
E_D("replace into `fanwe_delivery_region` values('3240','383','临安市','4');");
E_D("replace into `fanwe_delivery_region` values('3241','383','桐庐县','4');");
E_D("replace into `fanwe_delivery_region` values('3242','383','淳安县','4');");
E_D("replace into `fanwe_delivery_region` values('3243','384','吴兴区','4');");
E_D("replace into `fanwe_delivery_region` values('3244','384','南浔区','4');");
E_D("replace into `fanwe_delivery_region` values('3245','384','德清县','4');");
E_D("replace into `fanwe_delivery_region` values('3246','384','长兴县','4');");
E_D("replace into `fanwe_delivery_region` values('3247','384','安吉县','4');");
E_D("replace into `fanwe_delivery_region` values('3248','385','南湖区','4');");
E_D("replace into `fanwe_delivery_region` values('3249','385','秀洲区','4');");
E_D("replace into `fanwe_delivery_region` values('3250','385','海宁市','4');");
E_D("replace into `fanwe_delivery_region` values('3251','385','嘉善县','4');");
E_D("replace into `fanwe_delivery_region` values('3252','385','平湖市','4');");
E_D("replace into `fanwe_delivery_region` values('3253','385','桐乡市','4');");
E_D("replace into `fanwe_delivery_region` values('3254','385','海盐县','4');");
E_D("replace into `fanwe_delivery_region` values('3255','386','婺城区','4');");
E_D("replace into `fanwe_delivery_region` values('3256','386','金东区','4');");
E_D("replace into `fanwe_delivery_region` values('3257','386','兰溪市','4');");
E_D("replace into `fanwe_delivery_region` values('3258','386','市区','4');");
E_D("replace into `fanwe_delivery_region` values('3259','386','佛堂镇','4');");
E_D("replace into `fanwe_delivery_region` values('3260','386','上溪镇','4');");
E_D("replace into `fanwe_delivery_region` values('3261','386','义亭镇','4');");
E_D("replace into `fanwe_delivery_region` values('3262','386','大陈镇','4');");
E_D("replace into `fanwe_delivery_region` values('3263','386','苏溪镇','4');");
E_D("replace into `fanwe_delivery_region` values('3264','386','赤岸镇','4');");
E_D("replace into `fanwe_delivery_region` values('3265','386','东阳市','4');");
E_D("replace into `fanwe_delivery_region` values('3266','386','永康市','4');");
E_D("replace into `fanwe_delivery_region` values('3267','386','武义县','4');");
E_D("replace into `fanwe_delivery_region` values('3268','386','浦江县','4');");
E_D("replace into `fanwe_delivery_region` values('3269','386','磐安县','4');");
E_D("replace into `fanwe_delivery_region` values('3270','387','莲都区','4');");
E_D("replace into `fanwe_delivery_region` values('3271','387','龙泉市','4');");
E_D("replace into `fanwe_delivery_region` values('3272','387','青田县','4');");
E_D("replace into `fanwe_delivery_region` values('3273','387','缙云县','4');");
E_D("replace into `fanwe_delivery_region` values('3274','387','遂昌县','4');");
E_D("replace into `fanwe_delivery_region` values('3275','387','松阳县','4');");
E_D("replace into `fanwe_delivery_region` values('3276','387','云和县','4');");
E_D("replace into `fanwe_delivery_region` values('3277','387','庆元县','4');");
E_D("replace into `fanwe_delivery_region` values('3278','387','景宁','4');");
E_D("replace into `fanwe_delivery_region` values('3279','388','海曙区','4');");
E_D("replace into `fanwe_delivery_region` values('3280','388','江东区','4');");
E_D("replace into `fanwe_delivery_region` values('3281','388','江北区','4');");
E_D("replace into `fanwe_delivery_region` values('3282','388','镇海区','4');");
E_D("replace into `fanwe_delivery_region` values('3283','388','北仑区','4');");
E_D("replace into `fanwe_delivery_region` values('3284','388','鄞州区','4');");
E_D("replace into `fanwe_delivery_region` values('3285','388','余姚市','4');");
E_D("replace into `fanwe_delivery_region` values('3286','388','慈溪市','4');");
E_D("replace into `fanwe_delivery_region` values('3287','388','奉化市','4');");
E_D("replace into `fanwe_delivery_region` values('3288','388','象山县','4');");
E_D("replace into `fanwe_delivery_region` values('3289','388','宁海县','4');");
E_D("replace into `fanwe_delivery_region` values('3290','389','越城区','4');");
E_D("replace into `fanwe_delivery_region` values('3291','389','上虞市','4');");
E_D("replace into `fanwe_delivery_region` values('3292','389','嵊州市','4');");
E_D("replace into `fanwe_delivery_region` values('3293','389','绍兴县','4');");
E_D("replace into `fanwe_delivery_region` values('3294','389','新昌县','4');");
E_D("replace into `fanwe_delivery_region` values('3295','389','诸暨市','4');");
E_D("replace into `fanwe_delivery_region` values('3296','390','椒江区','4');");
E_D("replace into `fanwe_delivery_region` values('3297','390','黄岩区','4');");
E_D("replace into `fanwe_delivery_region` values('3298','390','路桥区','4');");
E_D("replace into `fanwe_delivery_region` values('3299','390','温岭市','4');");
E_D("replace into `fanwe_delivery_region` values('3300','390','临海市','4');");
E_D("replace into `fanwe_delivery_region` values('3301','390','玉环县','4');");
E_D("replace into `fanwe_delivery_region` values('3302','390','三门县','4');");
E_D("replace into `fanwe_delivery_region` values('3303','390','天台县','4');");
E_D("replace into `fanwe_delivery_region` values('3304','390','仙居县','4');");
E_D("replace into `fanwe_delivery_region` values('3305','391','鹿城区','4');");
E_D("replace into `fanwe_delivery_region` values('3306','391','龙湾区','4');");
E_D("replace into `fanwe_delivery_region` values('3307','391','瓯海区','4');");
E_D("replace into `fanwe_delivery_region` values('3308','391','瑞安市','4');");
E_D("replace into `fanwe_delivery_region` values('3309','391','乐清市','4');");
E_D("replace into `fanwe_delivery_region` values('3310','391','洞头县','4');");
E_D("replace into `fanwe_delivery_region` values('3311','391','永嘉县','4');");
E_D("replace into `fanwe_delivery_region` values('3312','391','平阳县','4');");
E_D("replace into `fanwe_delivery_region` values('3313','391','苍南县','4');");
E_D("replace into `fanwe_delivery_region` values('3314','391','文成县','4');");
E_D("replace into `fanwe_delivery_region` values('3315','391','泰顺县','4');");
E_D("replace into `fanwe_delivery_region` values('3316','392','定海区','4');");
E_D("replace into `fanwe_delivery_region` values('3317','392','普陀区','4');");
E_D("replace into `fanwe_delivery_region` values('3318','392','岱山县','4');");
E_D("replace into `fanwe_delivery_region` values('3319','392','嵊泗县','4');");
E_D("replace into `fanwe_delivery_region` values('3320','393','衢州市','4');");
E_D("replace into `fanwe_delivery_region` values('3321','393','江山市','4');");
E_D("replace into `fanwe_delivery_region` values('3322','393','常山县','4');");
E_D("replace into `fanwe_delivery_region` values('3323','393','开化县','4');");
E_D("replace into `fanwe_delivery_region` values('3324','393','龙游县','4');");
E_D("replace into `fanwe_delivery_region` values('3325','394','合川区','4');");
E_D("replace into `fanwe_delivery_region` values('3326','394','江津区','4');");
E_D("replace into `fanwe_delivery_region` values('3327','394','南川区','4');");
E_D("replace into `fanwe_delivery_region` values('3328','394','永川区','4');");
E_D("replace into `fanwe_delivery_region` values('3329','394','南岸区','4');");
E_D("replace into `fanwe_delivery_region` values('3330','394','渝北区','4');");
E_D("replace into `fanwe_delivery_region` values('3331','394','万盛区','4');");
E_D("replace into `fanwe_delivery_region` values('3332','394','大渡口区','4');");
E_D("replace into `fanwe_delivery_region` values('3333','394','万州区','4');");
E_D("replace into `fanwe_delivery_region` values('3334','394','北碚区','4');");
E_D("replace into `fanwe_delivery_region` values('3335','394','沙坪坝区','4');");
E_D("replace into `fanwe_delivery_region` values('3336','394','巴南区','4');");
E_D("replace into `fanwe_delivery_region` values('3337','394','涪陵区','4');");
E_D("replace into `fanwe_delivery_region` values('3338','394','江北区','4');");
E_D("replace into `fanwe_delivery_region` values('3339','394','九龙坡区','4');");
E_D("replace into `fanwe_delivery_region` values('3340','394','渝中区','4');");
E_D("replace into `fanwe_delivery_region` values('3341','394','黔江开发区','4');");
E_D("replace into `fanwe_delivery_region` values('3342','394','长寿区','4');");
E_D("replace into `fanwe_delivery_region` values('3343','394','双桥区','4');");
E_D("replace into `fanwe_delivery_region` values('3344','394','綦江县','4');");
E_D("replace into `fanwe_delivery_region` values('3345','394','潼南县','4');");
E_D("replace into `fanwe_delivery_region` values('3346','394','铜梁县','4');");
E_D("replace into `fanwe_delivery_region` values('3347','394','大足县','4');");
E_D("replace into `fanwe_delivery_region` values('3348','394','荣昌县','4');");
E_D("replace into `fanwe_delivery_region` values('3349','394','璧山县','4');");
E_D("replace into `fanwe_delivery_region` values('3350','394','垫江县','4');");
E_D("replace into `fanwe_delivery_region` values('3351','394','武隆县','4');");
E_D("replace into `fanwe_delivery_region` values('3352','394','丰都县','4');");
E_D("replace into `fanwe_delivery_region` values('3353','394','城口县','4');");
E_D("replace into `fanwe_delivery_region` values('3354','394','梁平县','4');");
E_D("replace into `fanwe_delivery_region` values('3355','394','开县','4');");
E_D("replace into `fanwe_delivery_region` values('3356','394','巫溪县','4');");
E_D("replace into `fanwe_delivery_region` values('3357','394','巫山县','4');");
E_D("replace into `fanwe_delivery_region` values('3358','394','奉节县','4');");
E_D("replace into `fanwe_delivery_region` values('3359','394','云阳县','4');");
E_D("replace into `fanwe_delivery_region` values('3360','394','忠县','4');");
E_D("replace into `fanwe_delivery_region` values('3361','394','石柱','4');");
E_D("replace into `fanwe_delivery_region` values('3362','394','彭水','4');");
E_D("replace into `fanwe_delivery_region` values('3363','394','酉阳','4');");
E_D("replace into `fanwe_delivery_region` values('3364','394','秀山','4');");
E_D("replace into `fanwe_delivery_region` values('3365','395','沙田区','4');");
E_D("replace into `fanwe_delivery_region` values('3366','395','东区','4');");
E_D("replace into `fanwe_delivery_region` values('3367','395','观塘区','4');");
E_D("replace into `fanwe_delivery_region` values('3368','395','黄大仙区','4');");
E_D("replace into `fanwe_delivery_region` values('3369','395','九龙城区','4');");
E_D("replace into `fanwe_delivery_region` values('3370','395','屯门区','4');");
E_D("replace into `fanwe_delivery_region` values('3371','395','葵青区','4');");
E_D("replace into `fanwe_delivery_region` values('3372','395','元朗区','4');");
E_D("replace into `fanwe_delivery_region` values('3373','395','深水埗区','4');");
E_D("replace into `fanwe_delivery_region` values('3374','395','西贡区','4');");
E_D("replace into `fanwe_delivery_region` values('3375','395','大埔区','4');");
E_D("replace into `fanwe_delivery_region` values('3376','395','湾仔区','4');");
E_D("replace into `fanwe_delivery_region` values('3377','395','油尖旺区','4');");
E_D("replace into `fanwe_delivery_region` values('3378','395','北区','4');");
E_D("replace into `fanwe_delivery_region` values('3379','395','南区','4');");
E_D("replace into `fanwe_delivery_region` values('3380','395','荃湾区','4');");
E_D("replace into `fanwe_delivery_region` values('3381','395','中西区','4');");
E_D("replace into `fanwe_delivery_region` values('3382','395','离岛区','4');");
E_D("replace into `fanwe_delivery_region` values('3383','396','澳门','4');");
E_D("replace into `fanwe_delivery_region` values('3384','397','台北','4');");
E_D("replace into `fanwe_delivery_region` values('3385','397','高雄','4');");
E_D("replace into `fanwe_delivery_region` values('3386','397','基隆','4');");
E_D("replace into `fanwe_delivery_region` values('3387','397','台中','4');");
E_D("replace into `fanwe_delivery_region` values('3388','397','台南','4');");
E_D("replace into `fanwe_delivery_region` values('3389','397','新竹','4');");
E_D("replace into `fanwe_delivery_region` values('3390','397','嘉义','4');");
E_D("replace into `fanwe_delivery_region` values('3391','397','宜兰县','4');");
E_D("replace into `fanwe_delivery_region` values('3392','397','桃园县','4');");
E_D("replace into `fanwe_delivery_region` values('3393','397','苗栗县','4');");
E_D("replace into `fanwe_delivery_region` values('3394','397','彰化县','4');");
E_D("replace into `fanwe_delivery_region` values('3395','397','南投县','4');");
E_D("replace into `fanwe_delivery_region` values('3396','397','云林县','4');");
E_D("replace into `fanwe_delivery_region` values('3397','397','屏东县','4');");
E_D("replace into `fanwe_delivery_region` values('3398','397','台东县','4');");
E_D("replace into `fanwe_delivery_region` values('3399','397','花莲县','4');");
E_D("replace into `fanwe_delivery_region` values('3400','397','澎湖县','4');");
E_D("replace into `fanwe_delivery_region` values('1','0','中国','1');");

require("../../inc/footer.php");
?>