<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `fanwe_region_conf`;");
E_C("CREATE TABLE `fanwe_region_conf` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '????????',
  `region_level` tinyint(4) NOT NULL COMMENT '1:?? 2:? 3:??(??) 4:??(??)',
  `py` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3401 DEFAULT CHARSET=gbk");
E_D("replace into `fanwe_region_conf` values('3','1','安徽','2','anhui');");
E_D("replace into `fanwe_region_conf` values('4','1','福建','2','fujian');");
E_D("replace into `fanwe_region_conf` values('5','1','甘肃','2','gansu');");
E_D("replace into `fanwe_region_conf` values('6','1','广东','2','guangdong');");
E_D("replace into `fanwe_region_conf` values('7','1','广西','2','guangxi');");
E_D("replace into `fanwe_region_conf` values('8','1','贵州','2','guizhou');");
E_D("replace into `fanwe_region_conf` values('9','1','海南','2','hainan');");
E_D("replace into `fanwe_region_conf` values('10','1','河北','2','hebei');");
E_D("replace into `fanwe_region_conf` values('11','1','河南','2','henan');");
E_D("replace into `fanwe_region_conf` values('12','1','黑龙江','2','heilongjiang');");
E_D("replace into `fanwe_region_conf` values('13','1','湖北','2','hubei');");
E_D("replace into `fanwe_region_conf` values('14','1','湖南','2','hunan');");
E_D("replace into `fanwe_region_conf` values('15','1','吉林','2','jilin');");
E_D("replace into `fanwe_region_conf` values('16','1','江苏','2','jiangsu');");
E_D("replace into `fanwe_region_conf` values('17','1','江西','2','jiangxi');");
E_D("replace into `fanwe_region_conf` values('18','1','辽宁','2','liaoning');");
E_D("replace into `fanwe_region_conf` values('19','1','内蒙古','2','neimenggu');");
E_D("replace into `fanwe_region_conf` values('20','1','宁夏','2','ningxia');");
E_D("replace into `fanwe_region_conf` values('21','1','青海','2','qinghai');");
E_D("replace into `fanwe_region_conf` values('22','1','山东','2','shandong');");
E_D("replace into `fanwe_region_conf` values('23','1','山西','2','shanxi');");
E_D("replace into `fanwe_region_conf` values('24','1','陕西','2','shanxi');");
E_D("replace into `fanwe_region_conf` values('26','1','四川','2','sichuan');");
E_D("replace into `fanwe_region_conf` values('28','1','西藏','2','xicang');");
E_D("replace into `fanwe_region_conf` values('29','1','新疆','2','xinjiang');");
E_D("replace into `fanwe_region_conf` values('30','1','云南','2','yunnan');");
E_D("replace into `fanwe_region_conf` values('31','1','浙江','2','zhejiang');");
E_D("replace into `fanwe_region_conf` values('36','3','安庆','3','anqing');");
E_D("replace into `fanwe_region_conf` values('37','3','蚌埠','3','bangbu');");
E_D("replace into `fanwe_region_conf` values('38','3','巢湖','3','chaohu');");
E_D("replace into `fanwe_region_conf` values('39','3','池州','3','chizhou');");
E_D("replace into `fanwe_region_conf` values('40','3','滁州','3','chuzhou');");
E_D("replace into `fanwe_region_conf` values('41','3','阜阳','3','fuyang');");
E_D("replace into `fanwe_region_conf` values('42','3','淮北','3','huaibei');");
E_D("replace into `fanwe_region_conf` values('43','3','淮南','3','huainan');");
E_D("replace into `fanwe_region_conf` values('44','3','黄山','3','huangshan');");
E_D("replace into `fanwe_region_conf` values('45','3','六安','3','liuan');");
E_D("replace into `fanwe_region_conf` values('46','3','马鞍山','3','maanshan');");
E_D("replace into `fanwe_region_conf` values('47','3','宿州','3','suzhou');");
E_D("replace into `fanwe_region_conf` values('48','3','铜陵','3','tongling');");
E_D("replace into `fanwe_region_conf` values('49','3','芜湖','3','wuhu');");
E_D("replace into `fanwe_region_conf` values('50','3','宣城','3','xuancheng');");
E_D("replace into `fanwe_region_conf` values('51','3','亳州','3','zhou');");
E_D("replace into `fanwe_region_conf` values('52','2','北京','2','beijing');");
E_D("replace into `fanwe_region_conf` values('53','4','福州','3','fuzhou');");
E_D("replace into `fanwe_region_conf` values('54','4','龙岩','3','longyan');");
E_D("replace into `fanwe_region_conf` values('55','4','南平','3','nanping');");
E_D("replace into `fanwe_region_conf` values('56','4','宁德','3','ningde');");
E_D("replace into `fanwe_region_conf` values('57','4','莆田','3','putian');");
E_D("replace into `fanwe_region_conf` values('58','4','泉州','3','quanzhou');");
E_D("replace into `fanwe_region_conf` values('59','4','三明','3','sanming');");
E_D("replace into `fanwe_region_conf` values('60','4','厦门','3','xiamen');");
E_D("replace into `fanwe_region_conf` values('61','4','漳州','3','zhangzhou');");
E_D("replace into `fanwe_region_conf` values('62','5','兰州','3','lanzhou');");
E_D("replace into `fanwe_region_conf` values('63','5','白银','3','baiyin');");
E_D("replace into `fanwe_region_conf` values('64','5','定西','3','dingxi');");
E_D("replace into `fanwe_region_conf` values('65','5','甘南','3','gannan');");
E_D("replace into `fanwe_region_conf` values('66','5','嘉峪关','3','jiayuguan');");
E_D("replace into `fanwe_region_conf` values('67','5','金昌','3','jinchang');");
E_D("replace into `fanwe_region_conf` values('68','5','酒泉','3','jiuquan');");
E_D("replace into `fanwe_region_conf` values('69','5','临夏','3','linxia');");
E_D("replace into `fanwe_region_conf` values('70','5','陇南','3','longnan');");
E_D("replace into `fanwe_region_conf` values('71','5','平凉','3','pingliang');");
E_D("replace into `fanwe_region_conf` values('72','5','庆阳','3','qingyang');");
E_D("replace into `fanwe_region_conf` values('73','5','天水','3','tianshui');");
E_D("replace into `fanwe_region_conf` values('74','5','武威','3','wuwei');");
E_D("replace into `fanwe_region_conf` values('75','5','张掖','3','zhangye');");
E_D("replace into `fanwe_region_conf` values('76','6','广州','3','guangzhou');");
E_D("replace into `fanwe_region_conf` values('77','6','深圳','3','shen');");
E_D("replace into `fanwe_region_conf` values('78','6','潮州','3','chaozhou');");
E_D("replace into `fanwe_region_conf` values('79','6','东莞','3','dong');");
E_D("replace into `fanwe_region_conf` values('80','6','佛山','3','foshan');");
E_D("replace into `fanwe_region_conf` values('81','6','河源','3','heyuan');");
E_D("replace into `fanwe_region_conf` values('82','6','惠州','3','huizhou');");
E_D("replace into `fanwe_region_conf` values('83','6','江门','3','jiangmen');");
E_D("replace into `fanwe_region_conf` values('84','6','揭阳','3','jieyang');");
E_D("replace into `fanwe_region_conf` values('85','6','茂名','3','maoming');");
E_D("replace into `fanwe_region_conf` values('86','6','梅州','3','meizhou');");
E_D("replace into `fanwe_region_conf` values('87','6','清远','3','qingyuan');");
E_D("replace into `fanwe_region_conf` values('88','6','汕头','3','shantou');");
E_D("replace into `fanwe_region_conf` values('89','6','汕尾','3','shanwei');");
E_D("replace into `fanwe_region_conf` values('90','6','韶关','3','shaoguan');");
E_D("replace into `fanwe_region_conf` values('91','6','阳江','3','yangjiang');");
E_D("replace into `fanwe_region_conf` values('92','6','云浮','3','yunfu');");
E_D("replace into `fanwe_region_conf` values('93','6','湛江','3','zhanjiang');");
E_D("replace into `fanwe_region_conf` values('94','6','肇庆','3','zhaoqing');");
E_D("replace into `fanwe_region_conf` values('95','6','中山','3','zhongshan');");
E_D("replace into `fanwe_region_conf` values('96','6','珠海','3','zhuhai');");
E_D("replace into `fanwe_region_conf` values('97','7','南宁','3','nanning');");
E_D("replace into `fanwe_region_conf` values('98','7','桂林','3','guilin');");
E_D("replace into `fanwe_region_conf` values('99','7','百色','3','baise');");
E_D("replace into `fanwe_region_conf` values('100','7','北海','3','beihai');");
E_D("replace into `fanwe_region_conf` values('101','7','崇左','3','chongzuo');");
E_D("replace into `fanwe_region_conf` values('102','7','防城港','3','fangchenggang');");
E_D("replace into `fanwe_region_conf` values('103','7','贵港','3','guigang');");
E_D("replace into `fanwe_region_conf` values('104','7','河池','3','hechi');");
E_D("replace into `fanwe_region_conf` values('105','7','贺州','3','hezhou');");
E_D("replace into `fanwe_region_conf` values('106','7','来宾','3','laibin');");
E_D("replace into `fanwe_region_conf` values('107','7','柳州','3','liuzhou');");
E_D("replace into `fanwe_region_conf` values('108','7','钦州','3','qinzhou');");
E_D("replace into `fanwe_region_conf` values('109','7','梧州','3','wuzhou');");
E_D("replace into `fanwe_region_conf` values('110','7','玉林','3','yulin');");
E_D("replace into `fanwe_region_conf` values('111','8','贵阳','3','guiyang');");
E_D("replace into `fanwe_region_conf` values('112','8','安顺','3','anshun');");
E_D("replace into `fanwe_region_conf` values('113','8','毕节','3','bijie');");
E_D("replace into `fanwe_region_conf` values('114','8','六盘水','3','liupanshui');");
E_D("replace into `fanwe_region_conf` values('115','8','黔东南','3','qiandongnan');");
E_D("replace into `fanwe_region_conf` values('116','8','黔南','3','qiannan');");
E_D("replace into `fanwe_region_conf` values('117','8','黔西南','3','qianxinan');");
E_D("replace into `fanwe_region_conf` values('118','8','铜仁','3','tongren');");
E_D("replace into `fanwe_region_conf` values('119','8','遵义','3','zunyi');");
E_D("replace into `fanwe_region_conf` values('120','9','海口','3','haikou');");
E_D("replace into `fanwe_region_conf` values('121','9','三亚','3','sanya');");
E_D("replace into `fanwe_region_conf` values('122','9','白沙','3','baisha');");
E_D("replace into `fanwe_region_conf` values('123','9','保亭','3','baoting');");
E_D("replace into `fanwe_region_conf` values('124','9','昌江','3','changjiang');");
E_D("replace into `fanwe_region_conf` values('125','9','澄迈县','3','chengmaixian');");
E_D("replace into `fanwe_region_conf` values('126','9','定安县','3','dinganxian');");
E_D("replace into `fanwe_region_conf` values('127','9','东方','3','dongfang');");
E_D("replace into `fanwe_region_conf` values('128','9','乐东','3','ledong');");
E_D("replace into `fanwe_region_conf` values('129','9','临高县','3','lingaoxian');");
E_D("replace into `fanwe_region_conf` values('130','9','陵水','3','lingshui');");
E_D("replace into `fanwe_region_conf` values('131','9','琼海','3','qionghai');");
E_D("replace into `fanwe_region_conf` values('132','9','琼中','3','qiongzhong');");
E_D("replace into `fanwe_region_conf` values('133','9','屯昌县','3','tunchangxian');");
E_D("replace into `fanwe_region_conf` values('134','9','万宁','3','wanning');");
E_D("replace into `fanwe_region_conf` values('135','9','文昌','3','wenchang');");
E_D("replace into `fanwe_region_conf` values('136','9','五指山','3','wuzhishan');");
E_D("replace into `fanwe_region_conf` values('137','9','儋州','3','zhou');");
E_D("replace into `fanwe_region_conf` values('138','10','石家庄','3','shijiazhuang');");
E_D("replace into `fanwe_region_conf` values('139','10','保定','3','baoding');");
E_D("replace into `fanwe_region_conf` values('140','10','沧州','3','cangzhou');");
E_D("replace into `fanwe_region_conf` values('141','10','承德','3','chengde');");
E_D("replace into `fanwe_region_conf` values('142','10','邯郸','3','handan');");
E_D("replace into `fanwe_region_conf` values('143','10','衡水','3','hengshui');");
E_D("replace into `fanwe_region_conf` values('144','10','廊坊','3','langfang');");
E_D("replace into `fanwe_region_conf` values('145','10','秦皇岛','3','qinhuangdao');");
E_D("replace into `fanwe_region_conf` values('146','10','唐山','3','tangshan');");
E_D("replace into `fanwe_region_conf` values('147','10','邢台','3','xingtai');");
E_D("replace into `fanwe_region_conf` values('148','10','张家口','3','zhangjiakou');");
E_D("replace into `fanwe_region_conf` values('149','11','郑州','3','zhengzhou');");
E_D("replace into `fanwe_region_conf` values('150','11','洛阳','3','luoyang');");
E_D("replace into `fanwe_region_conf` values('151','11','开封','3','kaifeng');");
E_D("replace into `fanwe_region_conf` values('152','11','安阳','3','anyang');");
E_D("replace into `fanwe_region_conf` values('153','11','鹤壁','3','hebi');");
E_D("replace into `fanwe_region_conf` values('154','11','济源','3','jiyuan');");
E_D("replace into `fanwe_region_conf` values('155','11','焦作','3','jiaozuo');");
E_D("replace into `fanwe_region_conf` values('156','11','南阳','3','nanyang');");
E_D("replace into `fanwe_region_conf` values('157','11','平顶山','3','pingdingshan');");
E_D("replace into `fanwe_region_conf` values('158','11','三门峡','3','sanmenxia');");
E_D("replace into `fanwe_region_conf` values('159','11','商丘','3','shangqiu');");
E_D("replace into `fanwe_region_conf` values('160','11','新乡','3','xinxiang');");
E_D("replace into `fanwe_region_conf` values('161','11','信阳','3','xinyang');");
E_D("replace into `fanwe_region_conf` values('162','11','许昌','3','xuchang');");
E_D("replace into `fanwe_region_conf` values('163','11','周口','3','zhoukou');");
E_D("replace into `fanwe_region_conf` values('164','11','驻马店','3','zhumadian');");
E_D("replace into `fanwe_region_conf` values('165','11','漯河','3','he');");
E_D("replace into `fanwe_region_conf` values('166','11','濮阳','3','yang');");
E_D("replace into `fanwe_region_conf` values('167','12','哈尔滨','3','haerbin');");
E_D("replace into `fanwe_region_conf` values('168','12','大庆','3','daqing');");
E_D("replace into `fanwe_region_conf` values('169','12','大兴安岭','3','daxinganling');");
E_D("replace into `fanwe_region_conf` values('170','12','鹤岗','3','hegang');");
E_D("replace into `fanwe_region_conf` values('171','12','黑河','3','heihe');");
E_D("replace into `fanwe_region_conf` values('172','12','鸡西','3','jixi');");
E_D("replace into `fanwe_region_conf` values('173','12','佳木斯','3','jiamusi');");
E_D("replace into `fanwe_region_conf` values('174','12','牡丹江','3','mudanjiang');");
E_D("replace into `fanwe_region_conf` values('175','12','七台河','3','qitaihe');");
E_D("replace into `fanwe_region_conf` values('176','12','齐齐哈尔','3','qiqihaer');");
E_D("replace into `fanwe_region_conf` values('177','12','双鸭山','3','shuangyashan');");
E_D("replace into `fanwe_region_conf` values('178','12','绥化','3','suihua');");
E_D("replace into `fanwe_region_conf` values('179','12','伊春','3','yichun');");
E_D("replace into `fanwe_region_conf` values('180','13','武汉','3','wuhan');");
E_D("replace into `fanwe_region_conf` values('181','13','仙桃','3','xiantao');");
E_D("replace into `fanwe_region_conf` values('182','13','鄂州','3','ezhou');");
E_D("replace into `fanwe_region_conf` values('183','13','黄冈','3','huanggang');");
E_D("replace into `fanwe_region_conf` values('184','13','黄石','3','huangshi');");
E_D("replace into `fanwe_region_conf` values('185','13','荆门','3','jingmen');");
E_D("replace into `fanwe_region_conf` values('186','13','荆州','3','jingzhou');");
E_D("replace into `fanwe_region_conf` values('187','13','潜江','3','qianjiang');");
E_D("replace into `fanwe_region_conf` values('188','13','神农架林区','3','shennongjialinqu');");
E_D("replace into `fanwe_region_conf` values('189','13','十堰','3','shiyan');");
E_D("replace into `fanwe_region_conf` values('190','13','随州','3','suizhou');");
E_D("replace into `fanwe_region_conf` values('191','13','天门','3','tianmen');");
E_D("replace into `fanwe_region_conf` values('192','13','咸宁','3','xianning');");
E_D("replace into `fanwe_region_conf` values('193','13','襄樊','3','xiangfan');");
E_D("replace into `fanwe_region_conf` values('194','13','孝感','3','xiaogan');");
E_D("replace into `fanwe_region_conf` values('195','13','宜昌','3','yichang');");
E_D("replace into `fanwe_region_conf` values('196','13','恩施','3','enshi');");
E_D("replace into `fanwe_region_conf` values('197','14','长沙','3','changsha');");
E_D("replace into `fanwe_region_conf` values('198','14','张家界','3','zhangjiajie');");
E_D("replace into `fanwe_region_conf` values('199','14','常德','3','changde');");
E_D("replace into `fanwe_region_conf` values('200','14','郴州','3','chenzhou');");
E_D("replace into `fanwe_region_conf` values('201','14','衡阳','3','hengyang');");
E_D("replace into `fanwe_region_conf` values('202','14','怀化','3','huaihua');");
E_D("replace into `fanwe_region_conf` values('203','14','娄底','3','loudi');");
E_D("replace into `fanwe_region_conf` values('204','14','邵阳','3','shaoyang');");
E_D("replace into `fanwe_region_conf` values('205','14','湘潭','3','xiangtan');");
E_D("replace into `fanwe_region_conf` values('206','14','湘西','3','xiangxi');");
E_D("replace into `fanwe_region_conf` values('207','14','益阳','3','yiyang');");
E_D("replace into `fanwe_region_conf` values('208','14','永州','3','yongzhou');");
E_D("replace into `fanwe_region_conf` values('209','14','岳阳','3','yueyang');");
E_D("replace into `fanwe_region_conf` values('210','14','株洲','3','zhuzhou');");
E_D("replace into `fanwe_region_conf` values('211','15','长春','3','changchun');");
E_D("replace into `fanwe_region_conf` values('212','15','吉林','3','jilin');");
E_D("replace into `fanwe_region_conf` values('213','15','白城','3','baicheng');");
E_D("replace into `fanwe_region_conf` values('214','15','白山','3','baishan');");
E_D("replace into `fanwe_region_conf` values('215','15','辽源','3','liaoyuan');");
E_D("replace into `fanwe_region_conf` values('216','15','四平','3','siping');");
E_D("replace into `fanwe_region_conf` values('217','15','松原','3','songyuan');");
E_D("replace into `fanwe_region_conf` values('218','15','通化','3','tonghua');");
E_D("replace into `fanwe_region_conf` values('219','15','延边','3','yanbian');");
E_D("replace into `fanwe_region_conf` values('220','16','南京','3','nanjing');");
E_D("replace into `fanwe_region_conf` values('221','16','苏州','3','suzhou');");
E_D("replace into `fanwe_region_conf` values('222','16','无锡','3','wuxi');");
E_D("replace into `fanwe_region_conf` values('223','16','常州','3','changzhou');");
E_D("replace into `fanwe_region_conf` values('224','16','淮安','3','huaian');");
E_D("replace into `fanwe_region_conf` values('225','16','连云港','3','lianyungang');");
E_D("replace into `fanwe_region_conf` values('226','16','南通','3','nantong');");
E_D("replace into `fanwe_region_conf` values('227','16','宿迁','3','suqian');");
E_D("replace into `fanwe_region_conf` values('228','16','泰州','3','taizhou');");
E_D("replace into `fanwe_region_conf` values('229','16','徐州','3','xuzhou');");
E_D("replace into `fanwe_region_conf` values('230','16','盐城','3','yancheng');");
E_D("replace into `fanwe_region_conf` values('231','16','扬州','3','yangzhou');");
E_D("replace into `fanwe_region_conf` values('232','16','镇江','3','zhenjiang');");
E_D("replace into `fanwe_region_conf` values('233','17','南昌','3','nanchang');");
E_D("replace into `fanwe_region_conf` values('234','17','抚州','3','fuzhou');");
E_D("replace into `fanwe_region_conf` values('235','17','赣州','3','ganzhou');");
E_D("replace into `fanwe_region_conf` values('236','17','吉安','3','jian');");
E_D("replace into `fanwe_region_conf` values('237','17','景德镇','3','jingdezhen');");
E_D("replace into `fanwe_region_conf` values('238','17','九江','3','jiujiang');");
E_D("replace into `fanwe_region_conf` values('239','17','萍乡','3','pingxiang');");
E_D("replace into `fanwe_region_conf` values('240','17','上饶','3','shangrao');");
E_D("replace into `fanwe_region_conf` values('241','17','新余','3','xinyu');");
E_D("replace into `fanwe_region_conf` values('242','17','宜春','3','yichun');");
E_D("replace into `fanwe_region_conf` values('243','17','鹰潭','3','yingtan');");
E_D("replace into `fanwe_region_conf` values('244','18','沈阳','3','shenyang');");
E_D("replace into `fanwe_region_conf` values('245','18','大连','3','dalian');");
E_D("replace into `fanwe_region_conf` values('246','18','鞍山','3','anshan');");
E_D("replace into `fanwe_region_conf` values('247','18','本溪','3','benxi');");
E_D("replace into `fanwe_region_conf` values('248','18','朝阳','3','chaoyang');");
E_D("replace into `fanwe_region_conf` values('249','18','丹东','3','dandong');");
E_D("replace into `fanwe_region_conf` values('250','18','抚顺','3','fushun');");
E_D("replace into `fanwe_region_conf` values('251','18','阜新','3','fuxin');");
E_D("replace into `fanwe_region_conf` values('252','18','葫芦岛','3','huludao');");
E_D("replace into `fanwe_region_conf` values('253','18','锦州','3','jinzhou');");
E_D("replace into `fanwe_region_conf` values('254','18','辽阳','3','liaoyang');");
E_D("replace into `fanwe_region_conf` values('255','18','盘锦','3','panjin');");
E_D("replace into `fanwe_region_conf` values('256','18','铁岭','3','tieling');");
E_D("replace into `fanwe_region_conf` values('257','18','营口','3','yingkou');");
E_D("replace into `fanwe_region_conf` values('258','19','呼和浩特','3','huhehaote');");
E_D("replace into `fanwe_region_conf` values('259','19','阿拉善盟','3','alashanmeng');");
E_D("replace into `fanwe_region_conf` values('260','19','巴彦淖尔盟','3','bayannaoermeng');");
E_D("replace into `fanwe_region_conf` values('261','19','包头','3','baotou');");
E_D("replace into `fanwe_region_conf` values('262','19','赤峰','3','chifeng');");
E_D("replace into `fanwe_region_conf` values('263','19','鄂尔多斯','3','eerduosi');");
E_D("replace into `fanwe_region_conf` values('264','19','呼伦贝尔','3','hulunbeier');");
E_D("replace into `fanwe_region_conf` values('265','19','通辽','3','tongliao');");
E_D("replace into `fanwe_region_conf` values('266','19','乌海','3','wuhai');");
E_D("replace into `fanwe_region_conf` values('267','19','乌兰察布市','3','wulanchabushi');");
E_D("replace into `fanwe_region_conf` values('268','19','锡林郭勒盟','3','xilinguolemeng');");
E_D("replace into `fanwe_region_conf` values('269','19','兴安盟','3','xinganmeng');");
E_D("replace into `fanwe_region_conf` values('270','20','银川','3','yinchuan');");
E_D("replace into `fanwe_region_conf` values('271','20','固原','3','guyuan');");
E_D("replace into `fanwe_region_conf` values('272','20','石嘴山','3','shizuishan');");
E_D("replace into `fanwe_region_conf` values('273','20','吴忠','3','wuzhong');");
E_D("replace into `fanwe_region_conf` values('274','20','中卫','3','zhongwei');");
E_D("replace into `fanwe_region_conf` values('275','21','西宁','3','xining');");
E_D("replace into `fanwe_region_conf` values('276','21','果洛','3','guoluo');");
E_D("replace into `fanwe_region_conf` values('277','21','海北','3','haibei');");
E_D("replace into `fanwe_region_conf` values('278','21','海东','3','haidong');");
E_D("replace into `fanwe_region_conf` values('279','21','海南','3','hainan');");
E_D("replace into `fanwe_region_conf` values('280','21','海西','3','haixi');");
E_D("replace into `fanwe_region_conf` values('281','21','黄南','3','huangnan');");
E_D("replace into `fanwe_region_conf` values('282','21','玉树','3','yushu');");
E_D("replace into `fanwe_region_conf` values('283','22','济南','3','jinan');");
E_D("replace into `fanwe_region_conf` values('284','22','青岛','3','qingdao');");
E_D("replace into `fanwe_region_conf` values('285','22','滨州','3','binzhou');");
E_D("replace into `fanwe_region_conf` values('286','22','德州','3','dezhou');");
E_D("replace into `fanwe_region_conf` values('287','22','东营','3','dongying');");
E_D("replace into `fanwe_region_conf` values('288','22','菏泽','3','heze');");
E_D("replace into `fanwe_region_conf` values('289','22','济宁','3','jining');");
E_D("replace into `fanwe_region_conf` values('290','22','莱芜','3','laiwu');");
E_D("replace into `fanwe_region_conf` values('291','22','聊城','3','liaocheng');");
E_D("replace into `fanwe_region_conf` values('292','22','临沂','3','linyi');");
E_D("replace into `fanwe_region_conf` values('293','22','日照','3','rizhao');");
E_D("replace into `fanwe_region_conf` values('294','22','泰安','3','taian');");
E_D("replace into `fanwe_region_conf` values('295','22','威海','3','weihai');");
E_D("replace into `fanwe_region_conf` values('296','22','潍坊','3','weifang');");
E_D("replace into `fanwe_region_conf` values('297','22','烟台','3','yantai');");
E_D("replace into `fanwe_region_conf` values('298','22','枣庄','3','zaozhuang');");
E_D("replace into `fanwe_region_conf` values('299','22','淄博','3','zibo');");
E_D("replace into `fanwe_region_conf` values('300','23','太原','3','taiyuan');");
E_D("replace into `fanwe_region_conf` values('301','23','长治','3','changzhi');");
E_D("replace into `fanwe_region_conf` values('302','23','大同','3','datong');");
E_D("replace into `fanwe_region_conf` values('303','23','晋城','3','jincheng');");
E_D("replace into `fanwe_region_conf` values('304','23','晋中','3','jinzhong');");
E_D("replace into `fanwe_region_conf` values('305','23','临汾','3','linfen');");
E_D("replace into `fanwe_region_conf` values('306','23','吕梁','3','lvliang');");
E_D("replace into `fanwe_region_conf` values('307','23','朔州','3','shuozhou');");
E_D("replace into `fanwe_region_conf` values('308','23','忻州','3','xinzhou');");
E_D("replace into `fanwe_region_conf` values('309','23','阳泉','3','yangquan');");
E_D("replace into `fanwe_region_conf` values('310','23','运城','3','yuncheng');");
E_D("replace into `fanwe_region_conf` values('311','24','西安','3','xian');");
E_D("replace into `fanwe_region_conf` values('312','24','安康','3','ankang');");
E_D("replace into `fanwe_region_conf` values('313','24','宝鸡','3','baoji');");
E_D("replace into `fanwe_region_conf` values('314','24','汉中','3','hanzhong');");
E_D("replace into `fanwe_region_conf` values('315','24','商洛','3','shangluo');");
E_D("replace into `fanwe_region_conf` values('316','24','铜川','3','tongchuan');");
E_D("replace into `fanwe_region_conf` values('317','24','渭南','3','weinan');");
E_D("replace into `fanwe_region_conf` values('318','24','咸阳','3','xianyang');");
E_D("replace into `fanwe_region_conf` values('319','24','延安','3','yanan');");
E_D("replace into `fanwe_region_conf` values('320','24','榆林','3','yulin');");
E_D("replace into `fanwe_region_conf` values('321','25','上海','2','shanghai');");
E_D("replace into `fanwe_region_conf` values('322','26','成都','3','chengdu');");
E_D("replace into `fanwe_region_conf` values('323','26','绵阳','3','mianyang');");
E_D("replace into `fanwe_region_conf` values('324','26','阿坝','3','aba');");
E_D("replace into `fanwe_region_conf` values('325','26','巴中','3','bazhong');");
E_D("replace into `fanwe_region_conf` values('326','26','达州','3','dazhou');");
E_D("replace into `fanwe_region_conf` values('327','26','德阳','3','deyang');");
E_D("replace into `fanwe_region_conf` values('328','26','甘孜','3','ganzi');");
E_D("replace into `fanwe_region_conf` values('329','26','广安','3','guangan');");
E_D("replace into `fanwe_region_conf` values('330','26','广元','3','guangyuan');");
E_D("replace into `fanwe_region_conf` values('331','26','乐山','3','leshan');");
E_D("replace into `fanwe_region_conf` values('332','26','凉山','3','liangshan');");
E_D("replace into `fanwe_region_conf` values('333','26','眉山','3','meishan');");
E_D("replace into `fanwe_region_conf` values('334','26','南充','3','nanchong');");
E_D("replace into `fanwe_region_conf` values('335','26','内江','3','neijiang');");
E_D("replace into `fanwe_region_conf` values('336','26','攀枝花','3','panzhihua');");
E_D("replace into `fanwe_region_conf` values('337','26','遂宁','3','suining');");
E_D("replace into `fanwe_region_conf` values('338','26','雅安','3','yaan');");
E_D("replace into `fanwe_region_conf` values('339','26','宜宾','3','yibin');");
E_D("replace into `fanwe_region_conf` values('340','26','资阳','3','ziyang');");
E_D("replace into `fanwe_region_conf` values('341','26','自贡','3','zigong');");
E_D("replace into `fanwe_region_conf` values('342','26','泸州','3','zhou');");
E_D("replace into `fanwe_region_conf` values('343','27','天津','2','tianjin');");
E_D("replace into `fanwe_region_conf` values('344','28','拉萨','3','lasa');");
E_D("replace into `fanwe_region_conf` values('345','28','阿里','3','ali');");
E_D("replace into `fanwe_region_conf` values('346','28','昌都','3','changdu');");
E_D("replace into `fanwe_region_conf` values('347','28','林芝','3','linzhi');");
E_D("replace into `fanwe_region_conf` values('348','28','那曲','3','naqu');");
E_D("replace into `fanwe_region_conf` values('349','28','日喀则','3','rikaze');");
E_D("replace into `fanwe_region_conf` values('350','28','山南','3','shannan');");
E_D("replace into `fanwe_region_conf` values('351','29','乌鲁木齐','3','wulumuqi');");
E_D("replace into `fanwe_region_conf` values('352','29','阿克苏','3','akesu');");
E_D("replace into `fanwe_region_conf` values('353','29','阿拉尔','3','alaer');");
E_D("replace into `fanwe_region_conf` values('354','29','巴音郭楞','3','bayinguoleng');");
E_D("replace into `fanwe_region_conf` values('355','29','博尔塔拉','3','boertala');");
E_D("replace into `fanwe_region_conf` values('356','29','昌吉','3','changji');");
E_D("replace into `fanwe_region_conf` values('357','29','哈密','3','hami');");
E_D("replace into `fanwe_region_conf` values('358','29','和田','3','hetian');");
E_D("replace into `fanwe_region_conf` values('359','29','喀什','3','kashi');");
E_D("replace into `fanwe_region_conf` values('360','29','克拉玛依','3','kelamayi');");
E_D("replace into `fanwe_region_conf` values('361','29','克孜勒苏','3','kezilesu');");
E_D("replace into `fanwe_region_conf` values('362','29','石河子','3','shihezi');");
E_D("replace into `fanwe_region_conf` values('363','29','图木舒克','3','tumushuke');");
E_D("replace into `fanwe_region_conf` values('364','29','吐鲁番','3','tulufan');");
E_D("replace into `fanwe_region_conf` values('365','29','五家渠','3','wujiaqu');");
E_D("replace into `fanwe_region_conf` values('366','29','伊犁','3','yili');");
E_D("replace into `fanwe_region_conf` values('367','30','昆明','3','kunming');");
E_D("replace into `fanwe_region_conf` values('368','30','怒江','3','nujiang');");
E_D("replace into `fanwe_region_conf` values('369','30','普洱','3','puer');");
E_D("replace into `fanwe_region_conf` values('370','30','丽江','3','lijiang');");
E_D("replace into `fanwe_region_conf` values('371','30','保山','3','baoshan');");
E_D("replace into `fanwe_region_conf` values('372','30','楚雄','3','chuxiong');");
E_D("replace into `fanwe_region_conf` values('373','30','大理','3','dali');");
E_D("replace into `fanwe_region_conf` values('374','30','德宏','3','dehong');");
E_D("replace into `fanwe_region_conf` values('375','30','迪庆','3','diqing');");
E_D("replace into `fanwe_region_conf` values('376','30','红河','3','honghe');");
E_D("replace into `fanwe_region_conf` values('377','30','临沧','3','lincang');");
E_D("replace into `fanwe_region_conf` values('378','30','曲靖','3','qujing');");
E_D("replace into `fanwe_region_conf` values('379','30','文山','3','wenshan');");
E_D("replace into `fanwe_region_conf` values('380','30','西双版纳','3','xishuangbanna');");
E_D("replace into `fanwe_region_conf` values('381','30','玉溪','3','yuxi');");
E_D("replace into `fanwe_region_conf` values('382','30','昭通','3','zhaotong');");
E_D("replace into `fanwe_region_conf` values('383','31','杭州','3','hangzhou');");
E_D("replace into `fanwe_region_conf` values('384','31','湖州','3','huzhou');");
E_D("replace into `fanwe_region_conf` values('385','31','嘉兴','3','jiaxing');");
E_D("replace into `fanwe_region_conf` values('386','31','金华','3','jinhua');");
E_D("replace into `fanwe_region_conf` values('387','31','丽水','3','lishui');");
E_D("replace into `fanwe_region_conf` values('388','31','宁波','3','ningbo');");
E_D("replace into `fanwe_region_conf` values('389','31','绍兴','3','shaoxing');");
E_D("replace into `fanwe_region_conf` values('390','31','台州','3','taizhou');");
E_D("replace into `fanwe_region_conf` values('391','31','温州','3','wenzhou');");
E_D("replace into `fanwe_region_conf` values('392','31','舟山','3','zhoushan');");
E_D("replace into `fanwe_region_conf` values('393','31','衢州','3','zhou');");
E_D("replace into `fanwe_region_conf` values('394','32','重庆','2','zhongqing');");
E_D("replace into `fanwe_region_conf` values('395','33','香港','2','xianggang');");
E_D("replace into `fanwe_region_conf` values('396','34','澳门','2','aomen');");
E_D("replace into `fanwe_region_conf` values('397','35','台湾','2','taiwan');");
E_D("replace into `fanwe_region_conf` values('500','52','东城区','3','dongchengqu');");
E_D("replace into `fanwe_region_conf` values('501','52','西城区','3','xichengqu');");
E_D("replace into `fanwe_region_conf` values('502','52','海淀区','3','haidianqu');");
E_D("replace into `fanwe_region_conf` values('503','52','朝阳区','3','chaoyangqu');");
E_D("replace into `fanwe_region_conf` values('504','52','崇文区','3','chongwenqu');");
E_D("replace into `fanwe_region_conf` values('505','52','宣武区','3','xuanwuqu');");
E_D("replace into `fanwe_region_conf` values('506','52','丰台区','3','fengtaiqu');");
E_D("replace into `fanwe_region_conf` values('507','52','石景山区','3','shijingshanqu');");
E_D("replace into `fanwe_region_conf` values('508','52','房山区','3','fangshanqu');");
E_D("replace into `fanwe_region_conf` values('509','52','门头沟区','3','mentougouqu');");
E_D("replace into `fanwe_region_conf` values('510','52','通州区','3','tongzhouqu');");
E_D("replace into `fanwe_region_conf` values('511','52','顺义区','3','shunyiqu');");
E_D("replace into `fanwe_region_conf` values('512','52','昌平区','3','changpingqu');");
E_D("replace into `fanwe_region_conf` values('513','52','怀柔区','3','huairouqu');");
E_D("replace into `fanwe_region_conf` values('514','52','平谷区','3','pingguqu');");
E_D("replace into `fanwe_region_conf` values('515','52','大兴区','3','daxingqu');");
E_D("replace into `fanwe_region_conf` values('516','52','密云县','3','miyunxian');");
E_D("replace into `fanwe_region_conf` values('517','52','延庆县','3','yanqingxian');");
E_D("replace into `fanwe_region_conf` values('2703','321','长宁区','3','changningqu');");
E_D("replace into `fanwe_region_conf` values('2704','321','闸北区','3','zhabeiqu');");
E_D("replace into `fanwe_region_conf` values('2705','321','闵行区','3','xingqu');");
E_D("replace into `fanwe_region_conf` values('2706','321','徐汇区','3','xuhuiqu');");
E_D("replace into `fanwe_region_conf` values('2707','321','浦东新区','3','pudongxinqu');");
E_D("replace into `fanwe_region_conf` values('2708','321','杨浦区','3','yangpuqu');");
E_D("replace into `fanwe_region_conf` values('2709','321','普陀区','3','putuoqu');");
E_D("replace into `fanwe_region_conf` values('2710','321','静安区','3','jinganqu');");
E_D("replace into `fanwe_region_conf` values('2711','321','卢湾区','3','luwanqu');");
E_D("replace into `fanwe_region_conf` values('2712','321','虹口区','3','hongkouqu');");
E_D("replace into `fanwe_region_conf` values('2713','321','黄浦区','3','huangpuqu');");
E_D("replace into `fanwe_region_conf` values('2714','321','南汇区','3','nanhuiqu');");
E_D("replace into `fanwe_region_conf` values('2715','321','松江区','3','songjiangqu');");
E_D("replace into `fanwe_region_conf` values('2716','321','嘉定区','3','jiadingqu');");
E_D("replace into `fanwe_region_conf` values('2717','321','宝山区','3','baoshanqu');");
E_D("replace into `fanwe_region_conf` values('2718','321','青浦区','3','qingpuqu');");
E_D("replace into `fanwe_region_conf` values('2719','321','金山区','3','jinshanqu');");
E_D("replace into `fanwe_region_conf` values('2720','321','奉贤区','3','fengxianqu');");
E_D("replace into `fanwe_region_conf` values('2721','321','崇明县','3','chongmingxian');");
E_D("replace into `fanwe_region_conf` values('2912','343','和平区','3','hepingqu');");
E_D("replace into `fanwe_region_conf` values('2913','343','河西区','3','hexiqu');");
E_D("replace into `fanwe_region_conf` values('2914','343','南开区','3','nankaiqu');");
E_D("replace into `fanwe_region_conf` values('2915','343','河北区','3','hebeiqu');");
E_D("replace into `fanwe_region_conf` values('2916','343','河东区','3','hedongqu');");
E_D("replace into `fanwe_region_conf` values('2917','343','红桥区','3','hongqiaoqu');");
E_D("replace into `fanwe_region_conf` values('2918','343','东丽区','3','dongliqu');");
E_D("replace into `fanwe_region_conf` values('2919','343','津南区','3','jinnanqu');");
E_D("replace into `fanwe_region_conf` values('2920','343','西青区','3','xiqingqu');");
E_D("replace into `fanwe_region_conf` values('2921','343','北辰区','3','beichenqu');");
E_D("replace into `fanwe_region_conf` values('2922','343','塘沽区','3','tangguqu');");
E_D("replace into `fanwe_region_conf` values('2923','343','汉沽区','3','hanguqu');");
E_D("replace into `fanwe_region_conf` values('2924','343','大港区','3','dagangqu');");
E_D("replace into `fanwe_region_conf` values('2925','343','武清区','3','wuqingqu');");
E_D("replace into `fanwe_region_conf` values('2926','343','宝坻区','3','baoqu');");
E_D("replace into `fanwe_region_conf` values('2927','343','经济开发区','3','jingjikaifaqu');");
E_D("replace into `fanwe_region_conf` values('2928','343','宁河县','3','ninghexian');");
E_D("replace into `fanwe_region_conf` values('2929','343','静海县','3','jinghaixian');");
E_D("replace into `fanwe_region_conf` values('2930','343','蓟县','3','jixian');");
E_D("replace into `fanwe_region_conf` values('3325','394','合川区','3','hechuanqu');");
E_D("replace into `fanwe_region_conf` values('3326','394','江津区','3','jiangjinqu');");
E_D("replace into `fanwe_region_conf` values('3327','394','南川区','3','nanchuanqu');");
E_D("replace into `fanwe_region_conf` values('3328','394','永川区','3','yongchuanqu');");
E_D("replace into `fanwe_region_conf` values('3329','394','南岸区','3','nananqu');");
E_D("replace into `fanwe_region_conf` values('3330','394','渝北区','3','yubeiqu');");
E_D("replace into `fanwe_region_conf` values('3331','394','万盛区','3','wanshengqu');");
E_D("replace into `fanwe_region_conf` values('3332','394','大渡口区','3','dadukouqu');");
E_D("replace into `fanwe_region_conf` values('3333','394','万州区','3','wanzhouqu');");
E_D("replace into `fanwe_region_conf` values('3334','394','北碚区','3','beiqu');");
E_D("replace into `fanwe_region_conf` values('3335','394','沙坪坝区','3','shapingbaqu');");
E_D("replace into `fanwe_region_conf` values('3336','394','巴南区','3','bananqu');");
E_D("replace into `fanwe_region_conf` values('3337','394','涪陵区','3','fulingqu');");
E_D("replace into `fanwe_region_conf` values('3338','394','江北区','3','jiangbeiqu');");
E_D("replace into `fanwe_region_conf` values('3339','394','九龙坡区','3','jiulongpoqu');");
E_D("replace into `fanwe_region_conf` values('3340','394','渝中区','3','yuzhongqu');");
E_D("replace into `fanwe_region_conf` values('3341','394','黔江开发区','3','qianjiangkaifaqu');");
E_D("replace into `fanwe_region_conf` values('3342','394','长寿区','3','changshouqu');");
E_D("replace into `fanwe_region_conf` values('3343','394','双桥区','3','shuangqiaoqu');");
E_D("replace into `fanwe_region_conf` values('3344','394','綦江县','3','jiangxian');");
E_D("replace into `fanwe_region_conf` values('3345','394','潼南县','3','nanxian');");
E_D("replace into `fanwe_region_conf` values('3346','394','铜梁县','3','tongliangxian');");
E_D("replace into `fanwe_region_conf` values('3347','394','大足县','3','dazuxian');");
E_D("replace into `fanwe_region_conf` values('3348','394','荣昌县','3','rongchangxian');");
E_D("replace into `fanwe_region_conf` values('3349','394','璧山县','3','shanxian');");
E_D("replace into `fanwe_region_conf` values('3350','394','垫江县','3','dianjiangxian');");
E_D("replace into `fanwe_region_conf` values('3351','394','武隆县','3','wulongxian');");
E_D("replace into `fanwe_region_conf` values('3352','394','丰都县','3','fengduxian');");
E_D("replace into `fanwe_region_conf` values('3353','394','城口县','3','chengkouxian');");
E_D("replace into `fanwe_region_conf` values('3354','394','梁平县','3','liangpingxian');");
E_D("replace into `fanwe_region_conf` values('3355','394','开县','3','kaixian');");
E_D("replace into `fanwe_region_conf` values('3356','394','巫溪县','3','wuxixian');");
E_D("replace into `fanwe_region_conf` values('3357','394','巫山县','3','wushanxian');");
E_D("replace into `fanwe_region_conf` values('3358','394','奉节县','3','fengjiexian');");
E_D("replace into `fanwe_region_conf` values('3359','394','云阳县','3','yunyangxian');");
E_D("replace into `fanwe_region_conf` values('3360','394','忠县','3','zhongxian');");
E_D("replace into `fanwe_region_conf` values('3361','394','石柱','3','shizhu');");
E_D("replace into `fanwe_region_conf` values('3362','394','彭水','3','pengshui');");
E_D("replace into `fanwe_region_conf` values('3363','394','酉阳','3','youyang');");
E_D("replace into `fanwe_region_conf` values('3364','394','秀山','3','xiushan');");
E_D("replace into `fanwe_region_conf` values('3365','395','沙田区','3','shatianqu');");
E_D("replace into `fanwe_region_conf` values('3366','395','东区','3','dongqu');");
E_D("replace into `fanwe_region_conf` values('3367','395','观塘区','3','guantangqu');");
E_D("replace into `fanwe_region_conf` values('3368','395','黄大仙区','3','huangdaxianqu');");
E_D("replace into `fanwe_region_conf` values('3369','395','九龙城区','3','jiulongchengqu');");
E_D("replace into `fanwe_region_conf` values('3370','395','屯门区','3','tunmenqu');");
E_D("replace into `fanwe_region_conf` values('3371','395','葵青区','3','kuiqingqu');");
E_D("replace into `fanwe_region_conf` values('3372','395','元朗区','3','yuanlangqu');");
E_D("replace into `fanwe_region_conf` values('3373','395','深水埗区','3','shenshui');");
E_D("replace into `fanwe_region_conf` values('3374','395','西贡区','3','xigongqu');");
E_D("replace into `fanwe_region_conf` values('3375','395','大埔区','3','dapuqu');");
E_D("replace into `fanwe_region_conf` values('3376','395','湾仔区','3','wanziqu');");
E_D("replace into `fanwe_region_conf` values('3377','395','油尖旺区','3','youjianwangqu');");
E_D("replace into `fanwe_region_conf` values('3378','395','北区','3','beiqu');");
E_D("replace into `fanwe_region_conf` values('3379','395','南区','3','nanqu');");
E_D("replace into `fanwe_region_conf` values('3380','395','荃湾区','3','wanqu');");
E_D("replace into `fanwe_region_conf` values('3381','395','中西区','3','zhongxiqu');");
E_D("replace into `fanwe_region_conf` values('3382','395','离岛区','3','lidaoqu');");
E_D("replace into `fanwe_region_conf` values('3383','396','澳门','3','aomen');");
E_D("replace into `fanwe_region_conf` values('3384','397','台北','3','taibei');");
E_D("replace into `fanwe_region_conf` values('3385','397','高雄','3','gaoxiong');");
E_D("replace into `fanwe_region_conf` values('3386','397','基隆','3','jilong');");
E_D("replace into `fanwe_region_conf` values('3387','397','台中','3','taizhong');");
E_D("replace into `fanwe_region_conf` values('3388','397','台南','3','tainan');");
E_D("replace into `fanwe_region_conf` values('3389','397','新竹','3','xinzhu');");
E_D("replace into `fanwe_region_conf` values('3390','397','嘉义','3','jiayi');");
E_D("replace into `fanwe_region_conf` values('3391','397','宜兰县','3','yilanxian');");
E_D("replace into `fanwe_region_conf` values('3392','397','桃园县','3','taoyuanxian');");
E_D("replace into `fanwe_region_conf` values('3393','397','苗栗县','3','miaolixian');");
E_D("replace into `fanwe_region_conf` values('3394','397','彰化县','3','zhanghuaxian');");
E_D("replace into `fanwe_region_conf` values('3395','397','南投县','3','nantouxian');");
E_D("replace into `fanwe_region_conf` values('3396','397','云林县','3','yunlinxian');");
E_D("replace into `fanwe_region_conf` values('3397','397','屏东县','3','pingdongxian');");
E_D("replace into `fanwe_region_conf` values('3398','397','台东县','3','taidongxian');");
E_D("replace into `fanwe_region_conf` values('3399','397','花莲县','3','hualianxian');");
E_D("replace into `fanwe_region_conf` values('3400','397','澎湖县','3','penghuxian');");

require("../../inc/footer.php");
?>