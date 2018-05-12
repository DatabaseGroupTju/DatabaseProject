<?php include('conn.php');
//获取sql数据库中的相关的计数信息
	$sql01='SELECT COUNT(*) as num FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and B.institution_category="军事院校"';
	$sql02='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and B.institution_category="科研院所"';
	$sql03='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and B.institution_category="中科院直属院校及科研院所"';
	$sql04='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and B.institution_category="其他院校"';
	$sql05='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" where B.institution_category="985院校" or B.institution_category="211院校"';
	$sql06='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>""';
	$sql11='SELECT COUNT(*) as num FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科" and B.institution_category="军事院校"';
	$sql12='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科" and B.institution_category="科研院所"';
	$sql13='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科" and B.institution_category="中科院直属院校及科研院所"';
	$sql14='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科" and B.institution_category="其他院校"';
    $sql15='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科" where B.institution_category="985院校" or B.institution_category="211院校"';
    $sql16='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="本科"';
	$sql21='SELECT COUNT(*) as num FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生" and B.institution_category="军事院校"';
	$sql22='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生" and B.institution_category="科研院所"';
	$sql23='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生" and B.institution_category="中科院直属院校及科研院所"';
	$sql24='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生" and B.institution_category="其他院校"';
	$sql25='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生" where B.institution_category="985院校" or B.institution_category="211院校"';
	$sql26='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="硕士研究生"';
	$sql31='SELECT COUNT(*) as num FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生" and B.institution_category="军事院校"';
	$sql32='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生" and B.institution_category="科研院所"';
	$sql33='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生" and B.institution_category="中科院直属院校及科研院所"';
	$sql34='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生" and B.institution_category="其他院校"';
	$sql35='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生" where B.institution_category="985院校" or B.institution_category="211院校"';
    $sql36='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `NATIONAL_UNIVERSITY` B on A.dwmc = B.dwmc and A.dwmc<>"" and A.cc="博士研究生"';


	$sql101='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%民企%"';
	$sql102='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%央企%"';
	$sql103='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%国企%"';
	$sql104='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%三资企业%"';
	$sql105='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%高等教育单位%"';
	$sql106='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%党政机关%"';
	$sql107='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%事业单位%"';
	$sql108='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%科研院所%"';
	$sql109='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%中等教育单位%"';
	$sql10A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_category like "%部队%"';
	$sql10B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc where B.company_category="大学生村官" or B.company_category="西部计划" or B.company_category="三支一扶" or B.company_category="支教"';
	$sql10C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc ';

	$sql111='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%民企%"';
	$sql112='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%央企%"';
	$sql113='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%国企%"';
	$sql114='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%三资企业%"';
	$sql115='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%高等教育单位%"';
	$sql116='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%党政机关%"';
	$sql117='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%事业单位%"';
	$sql118='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%科研院所%"';
	$sql119='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%中等教育单位%"';
	$sql11A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_category like "%部队%"';
	$sql11B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc where B.company_category="大学生村官" or B.company_category="西部计划" or B.company_category="三支一扶" or B.company_category="支教"';
	$sql11C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc ';

	$sql121='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%民企%"';
	$sql122='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%央企%"';
	$sql123='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%国企%"';
	$sql124='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%三资企业%"';
	$sql125='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%高等教育单位%"';
	$sql126='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%党政机关%"';
	$sql127='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%事业单位%"';
	$sql128='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%科研院所%"';
	$sql129='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%中等教育单位%"';
	$sql12A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_category like "%部队%"';
	$sql12B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc where B.company_category="大学生村官" or B.company_category="西部计划" or B.company_category="三支一扶" or B.company_category="支教"';
	$sql12C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc ';

	$sql131='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%民企%"';
	$sql132='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%央企%"';
	$sql133='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%国企%"';
	$sql134='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%三资企业%"';
	$sql135='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%高等教育单位%"';
	$sql136='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%党政机关%"';
	$sql137='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%事业单位%"';
	$sql138='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%科研院所%"';
	$sql139='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%中等教育单位%"';
	$sql13A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_category like "%部队%"';
	$sql13B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc where B.company_category="大学生村官" or B.company_category="西部计划" or B.company_category="三支一扶" or B.company_category="支教"';
	$sql13C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc ';
    $sql201='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="互联网/计算机/通信/软件"';
	$sql202='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="房地产/建筑/工程建设"';
	$sql203='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="制造业"';
	$sql204='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="教育"';
	$sql205='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="科学研究/技术服务业"';
	$sql206='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="公共管理/社会保障/社会组织"';
	$sql207='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="金融/保险/银行"';
	$sql208='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="电力/燃气/水的生产和供应"';
	$sql209='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="医疗卫生/生物医药/医疗保健"';
	$sql20A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="贸易/批发/零售"';
	$sql20B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="能源矿产/石油化工"';
	$sql20C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="租赁/商务服务/居民服务业"';
	$sql20D='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="水利/环境/公共设施管理"';
	$sql20E='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="交通运输/仓储/邮政"';
	$sql20F='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="广告传媒/文化娱乐/体育/出版"';
	$sql20G='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="军队"';
	$sql20H='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc and B.company_industry="农/林/牧/渔业"';
	$sql20I='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.dwmc = B.dwmc';
	
	$sql211='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="互联网/计算机/通信/软件"';
	$sql212='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="房地产/建筑/工程建设"';
	$sql213='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="制造业"';
	$sql214='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="教育"';
	$sql215='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="科学研究/技术服务业"';
	$sql216='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="公共管理/社会保障/社会组织"';
	$sql217='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="金融/保险/银行"';
	$sql218='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="电力/燃气/水的生产和供应"';
	$sql219='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="医疗卫生/生物医药/医疗保健"';
	$sql21A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="贸易/批发/零售"';
	$sql21B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="能源矿产/石油化工"';
	$sql21C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="租赁/商务服务/居民服务业"';
	$sql21D='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="水利/环境/公共设施管理"';
	$sql21E='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="交通运输/仓储/邮政"';
	$sql21F='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="广告传媒/文化娱乐/体育/出版"';
	$sql21G='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="军队"';
	$sql21H='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc and B.company_industry="农/林/牧/渔业"';
	$sql21I='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="本科" and A.dwmc = B.dwmc';

	$sql221='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="互联网/计算机/通信/软件"';
	$sql222='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="房地产/建筑/工程建设"';
	$sql223='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="制造业"';
	$sql224='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="教育"';
	$sql225='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="科学研究/技术服务业"';
	$sql226='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="公共管理/社会保障/社会组织"';
	$sql227='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="金融/保险/银行"';
	$sql228='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="电力/燃气/水的生产和供应"';
	$sql229='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="医疗卫生/生物医药/医疗保健"';
	$sql22A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="贸易/批发/零售"';
	$sql22B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="能源矿产/石油化工"';
	$sql22C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="租赁/商务服务/居民服务业"';
	$sql22D='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="水利/环境/公共设施管理"';
	$sql22E='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="交通运输/仓储/邮政"';
	$sql22F='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="广告传媒/文化娱乐/体育/出版"';
	$sql22G='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="军队"';
	$sql22H='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc and B.company_industry="农/林/牧/渔业"';
	$sql22I='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="硕士研究生" and A.dwmc = B.dwmc';

	$sql231='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="互联网/计算机/通信/软件"';
	$sql232='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="房地产/建筑/工程建设"';
	$sql233='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="制造业"';
	$sql234='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="教育"';
	$sql235='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="科学研究/技术服务业"';
	$sql236='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="公共管理/社会保障/社会组织"';
	$sql237='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="金融/保险/银行"';
	$sql238='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="电力/燃气/水的生产和供应"';
	$sql239='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="医疗卫生/生物医药/医疗保健"';
	$sql23A='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="贸易/批发/零售"';
	$sql23B='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="能源矿产/石油化工"';
	$sql23C='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="租赁/商务服务/居民服务业"';
	$sql23D='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="水利/环境/公共设施管理"';
	$sql23E='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="交通运输/仓储/邮政"';
	$sql23F='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="广告传媒/文化娱乐/体育/出版"';
	$sql23G='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="军队"';
	$sql23H='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc and B.company_industry="农/林/牧/渔业"';
	$sql23I='SELECT COUNT(*) FROM `STUDENT` A inner JOIN `COMPANY` B on A.cc="博士研究生" and A.dwmc = B.dwmc';
    ?>
<!-- 在每个地方执行php mysql语句 插入数据 -->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                整体升学情况
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form1" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>双一流院校</th>
                                <th>中科院直属院校及科研院所</th>
                                <th>其他科研院校</th>
                                <th>其他重点院校</th>
                                <th>军事院校</th>
                                <th>总计</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>本科</td>
                                <td>
                                    <?php 	
                $result15=mysqli_query($conn,$sql15);
echo mysqli_fetch_row($result15)[0];
?>
                                </td>
                                <td>
                                    <?php 	$result13=mysqli_query($conn,$sql13);
	print(mysqli_fetch_row($result13)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result12=mysqli_query($conn,$sql12);
	print(mysqli_fetch_row($result12)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result14=mysqli_query($conn,$sql14);
	print(mysqli_fetch_row($result14)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result11=mysqli_query($conn,$sql11);
	print(mysqli_fetch_row($result11)[0]); ?>
                                </td>
                                <td>
                                    <?php $result16=mysqli_query($conn,$sql16);
	print(mysqli_fetch_row($result16)[0]);?>
                                </td>
                            </tr>
                            <tr>
                                <td>硕士研究生</td>
                                <td>
                                    <?php 	
                $result25=mysqli_query($conn,$sql25);
echo mysqli_fetch_row($result25)[0];
?>
                                </td>
                                <td>
                                    <?php 	$result23=mysqli_query($conn,$sql23);
	print(mysqli_fetch_row($result23)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result22=mysqli_query($conn,$sql22);
	print(mysqli_fetch_row($result22)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result24=mysqli_query($conn,$sql24);
	print(mysqli_fetch_row($result24)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result21=mysqli_query($conn,$sql21);
	print(mysqli_fetch_row($result21)[0]); ?>
                                </td>
                                <td>
                                    <?php $result26=mysqli_query($conn,$sql26);
 print(mysqli_fetch_row($result26)[0]);?>
                                </td>
                            </tr>
                            <tr>
                                <td>博士研究生</td>
                                <td>
                                    <?php 	
                $result35=mysqli_query($conn,$sql35);
echo mysqli_fetch_row($result35)[0];
?>
                                </td>
                                <td>
                                    <?php 	$result33=mysqli_query($conn,$sql33);
	print(mysqli_fetch_row($result33)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result32=mysqli_query($conn,$sql32);
	print(mysqli_fetch_row($result32)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result34=mysqli_query($conn,$sql34);
	print(mysqli_fetch_row($result34)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result31=mysqli_query($conn,$sql31);
	print(mysqli_fetch_row($result31)[0]); ?>
                                </td>
                                <td>
                                    <?php $result36=mysqli_query($conn,$sql36);
 print(mysqli_fetch_row($result36)[0]);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php 	
                $result05=mysqli_query($conn,$sql05);
echo mysqli_fetch_row($result05)[0];
?>
                                </td>
                                <td>
                                    <?php 	$result03=mysqli_query($conn,$sql03);
	print(mysqli_fetch_row($result03)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result02=mysqli_query($conn,$sql02);
	print(mysqli_fetch_row($result02)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result04=mysqli_query($conn,$sql04);
	print(mysqli_fetch_row($result04)[0]); ?>
                                </td>
                                <td>
                                    <?php 	$result01=mysqli_query($conn,$sql01);
	print(mysqli_fetch_row($result01)[0]); ?>
                                </td>
                                <td>
                                    <?php $result06=mysqli_query($conn,$sql06);
 print(mysqli_fetch_row($result06)[0]);?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                整体就业去向
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form2" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>单位性质</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>民企</td>
                                <td>
                                    <?php $result101=mysqli_query($conn,$sql101);
	print(mysqli_fetch_row($result101)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result101=mysqli_query($conn,$sql101);
    $row2=mysqli_fetch_row($result101)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>央企</td>
                                <td>
                                    <?php $result102=mysqli_query($conn,$sql102);
	print(mysqli_fetch_row($result102)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result102=mysqli_query($conn,$sql102);
    $row2=mysqli_fetch_row($result102)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>国企</td>
                                <td>
                                    <?php $result103=mysqli_query($conn,$sql103);
	print(mysqli_fetch_row($result103)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result103=mysqli_query($conn,$sql103);
    $row2=mysqli_fetch_row($result103)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>三资企业</td>
                                <td>
                                    <?php $result104=mysqli_query($conn,$sql104);
	print(mysqli_fetch_row($result104)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result104=mysqli_query($conn,$sql104);
    $row2=mysqli_fetch_row($result104)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>高等教育单位</td>
                                <td>
                                    <?php $result105=mysqli_query($conn,$sql105);
	print(mysqli_fetch_row($result105)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result105=mysqli_query($conn,$sql105);
    $row2=mysqli_fetch_row($result105)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>党政机关</td>
                                <td>
                                    <?php $result106=mysqli_query($conn,$sql106);
	print(mysqli_fetch_row($result106)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result106=mysqli_query($conn,$sql106);
    $row2=mysqli_fetch_row($result106)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>事业单位</td>
                                <td>
                                    <?php $result107=mysqli_query($conn,$sql107);
	print(mysqli_fetch_row($result107)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result107=mysqli_query($conn,$sql107);
    $row2=mysqli_fetch_row($result107)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科研院所</td>
                                <td>
                                    <?php $result108=mysqli_query($conn,$sql108);
	print(mysqli_fetch_row($result108)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result108=mysqli_query($conn,$sql108);
    $row2=mysqli_fetch_row($result108)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>初、中等教育单位</td>
                                <td>
                                    <?php $result109=mysqli_query($conn,$sql109);
	print(mysqli_fetch_row($result109)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result109=mysqli_query($conn,$sql109);
    $row2=mysqli_fetch_row($result109)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>部队</td>
                                <td>
                                    <?php $result10A=mysqli_query($conn,$sql10A);
	print(mysqli_fetch_row($result10A)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result10A=mysqli_query($conn,$sql10A);
    $row2=mysqli_fetch_row($result10A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>西部计划、三支一扶、大学生村官、支教</td>
                                <td>
                                    <?php $result10B=mysqli_query($conn,$sql10B);
	print(mysqli_fetch_row($result10B)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result10C=mysqli_query($conn,$sql10C);
    $row1=mysqli_fetch_row($result10C)[0];
    $result10B=mysqli_query($conn,$sql10B);
    $row2=mysqli_fetch_row($result10B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php $result10C=mysqli_query($conn,$sql10C);
	print(mysqli_fetch_row($result10C)[0]); ?>
                                </td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                本科
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form2" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>单位性质</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>民企</td>
                                <td>
                                    <?php $result111=mysqli_query($conn,$sql111);
	print(mysqli_fetch_row($result111)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result111=mysqli_query($conn,$sql111);
    $row2=mysqli_fetch_row($result111)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>央企</td>
                                <td>
                                    <?php $result112=mysqli_query($conn,$sql112);
	print(mysqli_fetch_row($result112)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result112=mysqli_query($conn,$sql112);
    $row2=mysqli_fetch_row($result112)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>国企</td>
                                <td>
                                    <?php $result113=mysqli_query($conn,$sql113);
	print(mysqli_fetch_row($result113)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result113=mysqli_query($conn,$sql113);
    $row2=mysqli_fetch_row($result113)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>三资企业</td>
                                <td>
                                    <?php $result114=mysqli_query($conn,$sql114);
	print(mysqli_fetch_row($result114)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result114=mysqli_query($conn,$sql114);
    $row2=mysqli_fetch_row($result114)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>高等教育单位</td>
                                <td>
                                    <?php $result115=mysqli_query($conn,$sql115);
	print(mysqli_fetch_row($result115)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result115=mysqli_query($conn,$sql115);
    $row2=mysqli_fetch_row($result115)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>党政机关</td>
                                <td>
                                    <?php $result116=mysqli_query($conn,$sql116);
	print(mysqli_fetch_row($result116)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result116=mysqli_query($conn,$sql116);
    $row2=mysqli_fetch_row($result116)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>事业单位</td>
                                <td>
                                    <?php $result117=mysqli_query($conn,$sql117);
	print(mysqli_fetch_row($result117)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result117=mysqli_query($conn,$sql117);
    $row2=mysqli_fetch_row($result117)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科研院所</td>
                                <td>
                                    <?php $result118=mysqli_query($conn,$sql118);
	print(mysqli_fetch_row($result118)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result118=mysqli_query($conn,$sql118);
    $row2=mysqli_fetch_row($result118)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>初、中等教育单位</td>
                                <td>
                                    <?php $result119=mysqli_query($conn,$sql119);
	print(mysqli_fetch_row($result119)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result119=mysqli_query($conn,$sql119);
    $row2=mysqli_fetch_row($result119)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>部队</td>
                                <td>
                                    <?php $result11A=mysqli_query($conn,$sql11A);
	print(mysqli_fetch_row($result11A)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result11A=mysqli_query($conn,$sql11A);
    $row2=mysqli_fetch_row($result11A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>西部计划、三支一扶、大学生村官、支教</td>
                                <td>
                                    <?php $result11B=mysqli_query($conn,$sql11B);
	print(mysqli_fetch_row($result11B)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result11C=mysqli_query($conn,$sql11C);
    $row1=mysqli_fetch_row($result11C)[0];
    $result11B=mysqli_query($conn,$sql11B);
    $row2=mysqli_fetch_row($result11B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php $result11C=mysqli_query($conn,$sql11C);
	print(mysqli_fetch_row($result11C)[0]); ?>
                                </td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                硕士研究生
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form2" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:120%">
                        <thead>
                            <tr>
                                <th>单位性质</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>民企</td>
                                <td>
                                    <?php $result121=mysqli_query($conn,$sql121);
	print(mysqli_fetch_row($result121)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result121=mysqli_query($conn,$sql121);
    $row2=mysqli_fetch_row($result121)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>央企</td>
                                <td>
                                    <?php $result122=mysqli_query($conn,$sql122);
	print(mysqli_fetch_row($result122)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result122=mysqli_query($conn,$sql122);
    $row2=mysqli_fetch_row($result122)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>国企</td>
                                <td>
                                    <?php $result123=mysqli_query($conn,$sql123);
	print(mysqli_fetch_row($result123)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result123=mysqli_query($conn,$sql123);
    $row2=mysqli_fetch_row($result123)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>三资企业</td>
                                <td>
                                    <?php $result124=mysqli_query($conn,$sql124);
	print(mysqli_fetch_row($result124)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result124=mysqli_query($conn,$sql124);
    $row2=mysqli_fetch_row($result124)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>高等教育单位</td>
                                <td>
                                    <?php $result125=mysqli_query($conn,$sql125);
	print(mysqli_fetch_row($result125)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result125=mysqli_query($conn,$sql125);
    $row2=mysqli_fetch_row($result125)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>党政机关</td>
                                <td>
                                    <?php $result126=mysqli_query($conn,$sql126);
	print(mysqli_fetch_row($result126)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result126=mysqli_query($conn,$sql126);
    $row2=mysqli_fetch_row($result126)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>事业单位</td>
                                <td>
                                    <?php $result127=mysqli_query($conn,$sql127);
	print(mysqli_fetch_row($result127)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result127=mysqli_query($conn,$sql127);
    $row2=mysqli_fetch_row($result127)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科研院所</td>
                                <td>
                                    <?php $result128=mysqli_query($conn,$sql128);
	print(mysqli_fetch_row($result128)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result128=mysqli_query($conn,$sql128);
    $row2=mysqli_fetch_row($result128)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>初、中等教育单位</td>
                                <td>
                                    <?php $result129=mysqli_query($conn,$sql129);
	print(mysqli_fetch_row($result129)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result129=mysqli_query($conn,$sql129);
    $row2=mysqli_fetch_row($result129)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>部队</td>
                                <td>
                                    <?php $result12A=mysqli_query($conn,$sql12A);
	print(mysqli_fetch_row($result12A)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result12A=mysqli_query($conn,$sql12A);
    $row2=mysqli_fetch_row($result12A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>西部计划、三支一扶、大学生村官、支教</td>
                                <td>
                                    <?php $result12B=mysqli_query($conn,$sql12B);
	print(mysqli_fetch_row($result12B)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result12C=mysqli_query($conn,$sql12C);
    $row1=mysqli_fetch_row($result12C)[0];
    $result12B=mysqli_query($conn,$sql12B);
    $row2=mysqli_fetch_row($result12B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php $result12C=mysqli_query($conn,$sql12C);
	print(mysqli_fetch_row($result12C)[0]); ?>
                                </td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                博士研究生
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form2" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:130%">
                        <thead>
                            <tr>
                                <th>单位性质</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>民企</td>
                                <td>
                                    <?php $result131=mysqli_query($conn,$sql131);
	print(mysqli_fetch_row($result131)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result131=mysqli_query($conn,$sql131);
    $row2=mysqli_fetch_row($result131)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>央企</td>
                                <td>
                                    <?php $result132=mysqli_query($conn,$sql132);
	print(mysqli_fetch_row($result132)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result132=mysqli_query($conn,$sql132);
    $row2=mysqli_fetch_row($result132)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>国企</td>
                                <td>
                                    <?php $result133=mysqli_query($conn,$sql133);
	print(mysqli_fetch_row($result133)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result133=mysqli_query($conn,$sql133);
    $row2=mysqli_fetch_row($result133)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>三资企业</td>
                                <td>
                                    <?php $result134=mysqli_query($conn,$sql134);
	print(mysqli_fetch_row($result134)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result134=mysqli_query($conn,$sql134);
    $row2=mysqli_fetch_row($result134)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>高等教育单位</td>
                                <td>
                                    <?php $result135=mysqli_query($conn,$sql135);
	print(mysqli_fetch_row($result135)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result135=mysqli_query($conn,$sql135);
    $row2=mysqli_fetch_row($result135)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>党政机关</td>
                                <td>
                                    <?php $result136=mysqli_query($conn,$sql136);
	print(mysqli_fetch_row($result136)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result136=mysqli_query($conn,$sql136);
    $row2=mysqli_fetch_row($result136)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>事业单位</td>
                                <td>
                                    <?php $result137=mysqli_query($conn,$sql137);
	print(mysqli_fetch_row($result137)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result137=mysqli_query($conn,$sql137);
    $row2=mysqli_fetch_row($result137)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科研院所</td>
                                <td>
                                    <?php $result138=mysqli_query($conn,$sql138);
	print(mysqli_fetch_row($result138)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result138=mysqli_query($conn,$sql138);
    $row2=mysqli_fetch_row($result138)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>初、中等教育单位</td>
                                <td>
                                    <?php $result139=mysqli_query($conn,$sql139);
	print(mysqli_fetch_row($result139)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result139=mysqli_query($conn,$sql139);
    $row2=mysqli_fetch_row($result139)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>部队</td>
                                <td>
                                    <?php $result13A=mysqli_query($conn,$sql13A);
	print(mysqli_fetch_row($result13A)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result13A=mysqli_query($conn,$sql13A);
    $row2=mysqli_fetch_row($result13A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>西部计划、三支一扶、大学生村官、支教</td>
                                <td>
                                    <?php $result13B=mysqli_query($conn,$sql13B);
	print(mysqli_fetch_row($result13B)[0]); ?>
                                </td>
                                <td>
                                    <?php 
                $result13C=mysqli_query($conn,$sql13C);
    $row1=mysqli_fetch_row($result13C)[0];
    $result13B=mysqli_query($conn,$sql13B);
    $row2=mysqli_fetch_row($result13B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php $result13C=mysqli_query($conn,$sql13C);
	print(mysqli_fetch_row($result13C)[0]); ?>
                                </td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                行业整体去向情况
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form3" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>行业整体</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>互联网/计算机/通信/软件</td>
                                <td>
                                    <?php 	$result201=mysqli_query($conn,$sql201);
	print(mysqli_fetch_row($result201)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result201=mysqli_query($conn,$sql201);
    $row2=mysqli_fetch_row($result201)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>房地产/建筑/工程建设</td>
                                <td>
                                    <?php 	$result202=mysqli_query($conn,$sql202);
	print(mysqli_fetch_row($result202)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result202=mysqli_query($conn,$sql202);
    $row2=mysqli_fetch_row($result202)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>制造业</td>
                                <td>
                                    <?php 	$result203=mysqli_query($conn,$sql203);
	print(mysqli_fetch_row($result203)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result203=mysqli_query($conn,$sql203);
    $row2=mysqli_fetch_row($result203)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>教育</td>
                                <td>
                                    <?php 	$result204=mysqli_query($conn,$sql204);
	print(mysqli_fetch_row($result204)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result204=mysqli_query($conn,$sql204);
    $row2=mysqli_fetch_row($result204)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科学研究/技术服务业</td>
                                <td>
                                    <?php 	$result205=mysqli_query($conn,$sql205);
	print(mysqli_fetch_row($result205)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result205=mysqli_query($conn,$sql205);
    $row2=mysqli_fetch_row($result205)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>公共管理/社会保障/社会组织</td>
                                <td>
                                    <?php 	$result206=mysqli_query($conn,$sql206);
	print(mysqli_fetch_row($result206)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result206=mysqli_query($conn,$sql206);
    $row2=mysqli_fetch_row($result206)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>金融/保险/银行</td>
                                <td>
                                    <?php 	$result207=mysqli_query($conn,$sql207);
	print(mysqli_fetch_row($result207)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result207=mysqli_query($conn,$sql207);
    $row2=mysqli_fetch_row($result207)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>电力/燃气/水的生产和供应</td>
                                <td>
                                    <?php 	$result208=mysqli_query($conn,$sql208);
	print(mysqli_fetch_row($result208)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result208=mysqli_query($conn,$sql208);
    $row2=mysqli_fetch_row($result208)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>医疗卫生/生物医药/医疗保健</td>
                                <td>
                                    <?php 	$result209=mysqli_query($conn,$sql209);
	print(mysqli_fetch_row($result209)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result209=mysqli_query($conn,$sql209);
    $row2=mysqli_fetch_row($result209)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>贸易/批发/零售</td>
                                <td>
                                    <?php 	$result20A=mysqli_query($conn,$sql20A);
	print(mysqli_fetch_row($result20A)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20A=mysqli_query($conn,$sql20A);
    $row2=mysqli_fetch_row($result20A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>能源矿产/石油化工</td>
                                <td>
                                    <?php 	$result20B=mysqli_query($conn,$sql20B);
	print(mysqli_fetch_row($result20B)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20B=mysqli_query($conn,$sql20B);
    $row2=mysqli_fetch_row($result20B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>租赁/商务服务/居民服务业</td>
                                <td>
                                    <?php 	$result20C=mysqli_query($conn,$sql20C);
	print(mysqli_fetch_row($result20C)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20C=mysqli_query($conn,$sql20C);
    $row2=mysqli_fetch_row($result20C)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>水利/环境/公共设施管理</td>
                                <td>
                                    <?php 	$result20D=mysqli_query($conn,$sql20D);
	print(mysqli_fetch_row($result20D)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20D=mysqli_query($conn,$sql20D);
    $row2=mysqli_fetch_row($result20D)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>交通运输/仓储/邮政</td>
                                <td>
                                    <?php 	$result20E=mysqli_query($conn,$sql20E);
	print(mysqli_fetch_row($result20E)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20E=mysqli_query($conn,$sql20E);
    $row2=mysqli_fetch_row($result20E)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>广告传媒/文化娱乐/体育/出版印刷</td>
                                <td>
                                    <?php 	$result20F=mysqli_query($conn,$sql20F);
	print(mysqli_fetch_row($result20F)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result2FH=mysqli_query($conn,$sql20F);
    $row2=mysqli_fetch_row($result20F)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>军队</td>
                                <td>
                                    <?php 	$result20G=mysqli_query($conn,$sql20G);
	print(mysqli_fetch_row($result20G)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20G=mysqli_query($conn,$sql20G);
    $row2=mysqli_fetch_row($result20G)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>农/林/牧/渔业</td>
                                <td>
                                    <?php 	$result20H=mysqli_query($conn,$sql20H);
	print(mysqli_fetch_row($result20H)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result20I=mysqli_query($conn,$sql20I);
    $row1=mysqli_fetch_row($result20I)[0];
    $result20H=mysqli_query($conn,$sql20H);
    $row2=mysqli_fetch_row($result20H)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php 	$result20I=mysqli_query($conn,$sql20I);
	print(mysqli_fetch_row($result20I)[0]);?>
                                </td>
                                <td>1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                本科
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form3" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>行业整体</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>互联网/计算机/通信/软件</td>
                                <td>
                                    <?php 	$result211=mysqli_query($conn,$sql211);
	print(mysqli_fetch_row($result211)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result211=mysqli_query($conn,$sql211);
    $row2=mysqli_fetch_row($result211)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>房地产/建筑/工程建设</td>
                                <td>
                                    <?php 	$result212=mysqli_query($conn,$sql212);
	print(mysqli_fetch_row($result212)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result212=mysqli_query($conn,$sql212);
    $row2=mysqli_fetch_row($result212)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>制造业</td>
                                <td>
                                    <?php 	$result213=mysqli_query($conn,$sql213);
	print(mysqli_fetch_row($result213)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result213=mysqli_query($conn,$sql213);
    $row2=mysqli_fetch_row($result213)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>教育</td>
                                <td>
                                    <?php 	$result214=mysqli_query($conn,$sql214);
	print(mysqli_fetch_row($result214)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result214=mysqli_query($conn,$sql214);
    $row2=mysqli_fetch_row($result214)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科学研究/技术服务业</td>
                                <td>
                                    <?php 	$result215=mysqli_query($conn,$sql215);
	print(mysqli_fetch_row($result215)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result215=mysqli_query($conn,$sql215);
    $row2=mysqli_fetch_row($result215)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>公共管理/社会保障/社会组织</td>
                                <td>
                                    <?php 	$result216=mysqli_query($conn,$sql216);
	print(mysqli_fetch_row($result216)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result216=mysqli_query($conn,$sql216);
    $row2=mysqli_fetch_row($result216)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>金融/保险/银行</td>
                                <td>
                                    <?php 	$result217=mysqli_query($conn,$sql217);
	print(mysqli_fetch_row($result217)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result217=mysqli_query($conn,$sql217);
    $row2=mysqli_fetch_row($result217)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>电力/燃气/水的生产和供应</td>
                                <td>
                                    <?php 	$result218=mysqli_query($conn,$sql218);
	print(mysqli_fetch_row($result218)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result218=mysqli_query($conn,$sql218);
    $row2=mysqli_fetch_row($result218)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>医疗卫生/生物医药/医疗保健</td>
                                <td>
                                    <?php 	$result219=mysqli_query($conn,$sql219);
	print(mysqli_fetch_row($result219)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result219=mysqli_query($conn,$sql219);
    $row2=mysqli_fetch_row($result219)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>贸易/批发/零售</td>
                                <td>
                                    <?php 	$result21A=mysqli_query($conn,$sql21A);
	print(mysqli_fetch_row($result21A)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21A=mysqli_query($conn,$sql21A);
    $row2=mysqli_fetch_row($result21A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>能源矿产/石油化工</td>
                                <td>
                                    <?php 	$result21B=mysqli_query($conn,$sql21B);
	print(mysqli_fetch_row($result21B)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21B=mysqli_query($conn,$sql21B);
    $row2=mysqli_fetch_row($result21B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>租赁/商务服务/居民服务业</td>
                                <td>
                                    <?php 	$result21C=mysqli_query($conn,$sql21C);
	print(mysqli_fetch_row($result21C)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21C=mysqli_query($conn,$sql21C);
    $row2=mysqli_fetch_row($result21C)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>水利/环境/公共设施管理</td>
                                <td>
                                    <?php 	$result21D=mysqli_query($conn,$sql21D);
	print(mysqli_fetch_row($result21D)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21D=mysqli_query($conn,$sql21D);
    $row2=mysqli_fetch_row($result21D)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>交通运输/仓储/邮政</td>
                                <td>
                                    <?php 	$result21E=mysqli_query($conn,$sql21E);
	print(mysqli_fetch_row($result21E)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21E=mysqli_query($conn,$sql21E);
    $row2=mysqli_fetch_row($result21E)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>广告传媒/文化娱乐/体育/出版印刷</td>
                                <td>
                                    <?php 	$result21F=mysqli_query($conn,$sql21F);
	print(mysqli_fetch_row($result21F)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result2FH=mysqli_query($conn,$sql21F);
    $row2=mysqli_fetch_row($result21F)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>军队</td>
                                <td>
                                    <?php 	$result21G=mysqli_query($conn,$sql21G);
	print(mysqli_fetch_row($result21G)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21G=mysqli_query($conn,$sql21G);
    $row2=mysqli_fetch_row($result21G)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>农/林/牧/渔业</td>
                                <td>
                                    <?php 	$result21H=mysqli_query($conn,$sql21H);
	print(mysqli_fetch_row($result21H)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result21I=mysqli_query($conn,$sql21I);
    $row1=mysqli_fetch_row($result21I)[0];
    $result21H=mysqli_query($conn,$sql21H);
    $row2=mysqli_fetch_row($result21H)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php 	$result21I=mysqli_query($conn,$sql21I);
	print(mysqli_fetch_row($result21I)[0]);?>
                                </td>
                                <td>1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                硕士研究生
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form3" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>行业整体</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>互联网/计算机/通信/软件</td>
                                <td>
                                    <?php 	$result221=mysqli_query($conn,$sql221);
	print(mysqli_fetch_row($result221)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result221=mysqli_query($conn,$sql221);
    $row2=mysqli_fetch_row($result221)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>房地产/建筑/工程建设</td>
                                <td>
                                    <?php 	$result222=mysqli_query($conn,$sql222);
	print(mysqli_fetch_row($result222)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result222=mysqli_query($conn,$sql222);
    $row2=mysqli_fetch_row($result222)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>制造业</td>
                                <td>
                                    <?php 	$result223=mysqli_query($conn,$sql223);
	print(mysqli_fetch_row($result223)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result223=mysqli_query($conn,$sql223);
    $row2=mysqli_fetch_row($result223)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>教育</td>
                                <td>
                                    <?php 	$result224=mysqli_query($conn,$sql224);
	print(mysqli_fetch_row($result224)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result224=mysqli_query($conn,$sql224);
    $row2=mysqli_fetch_row($result224)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科学研究/技术服务业</td>
                                <td>
                                    <?php 	$result225=mysqli_query($conn,$sql225);
	print(mysqli_fetch_row($result225)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result225=mysqli_query($conn,$sql225);
    $row2=mysqli_fetch_row($result225)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>公共管理/社会保障/社会组织</td>
                                <td>
                                    <?php 	$result226=mysqli_query($conn,$sql226);
	print(mysqli_fetch_row($result226)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result226=mysqli_query($conn,$sql226);
    $row2=mysqli_fetch_row($result226)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>金融/保险/银行</td>
                                <td>
                                    <?php 	$result227=mysqli_query($conn,$sql227);
	print(mysqli_fetch_row($result227)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result227=mysqli_query($conn,$sql227);
    $row2=mysqli_fetch_row($result227)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>电力/燃气/水的生产和供应</td>
                                <td>
                                    <?php 	$result228=mysqli_query($conn,$sql228);
	print(mysqli_fetch_row($result228)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result228=mysqli_query($conn,$sql228);
    $row2=mysqli_fetch_row($result228)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>医疗卫生/生物医药/医疗保健</td>
                                <td>
                                    <?php 	$result229=mysqli_query($conn,$sql229);
	print(mysqli_fetch_row($result229)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result229=mysqli_query($conn,$sql229);
    $row2=mysqli_fetch_row($result229)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>贸易/批发/零售</td>
                                <td>
                                    <?php 	$result22A=mysqli_query($conn,$sql22A);
	print(mysqli_fetch_row($result22A)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22A=mysqli_query($conn,$sql22A);
    $row2=mysqli_fetch_row($result22A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>能源矿产/石油化工</td>
                                <td>
                                    <?php 	$result22B=mysqli_query($conn,$sql22B);
	print(mysqli_fetch_row($result22B)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22B=mysqli_query($conn,$sql22B);
    $row2=mysqli_fetch_row($result22B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>租赁/商务服务/居民服务业</td>
                                <td>
                                    <?php 	$result22C=mysqli_query($conn,$sql22C);
	print(mysqli_fetch_row($result22C)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22C=mysqli_query($conn,$sql22C);
    $row2=mysqli_fetch_row($result22C)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>水利/环境/公共设施管理</td>
                                <td>
                                    <?php 	$result22D=mysqli_query($conn,$sql22D);
	print(mysqli_fetch_row($result22D)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22D=mysqli_query($conn,$sql22D);
    $row2=mysqli_fetch_row($result22D)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>交通运输/仓储/邮政</td>
                                <td>
                                    <?php 	$result22E=mysqli_query($conn,$sql22E);
	print(mysqli_fetch_row($result22E)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22E=mysqli_query($conn,$sql22E);
    $row2=mysqli_fetch_row($result22E)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>广告传媒/文化娱乐/体育/出版印刷</td>
                                <td>
                                    <?php 	$result22F=mysqli_query($conn,$sql22F);
	print(mysqli_fetch_row($result22F)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result2FH=mysqli_query($conn,$sql22F);
    $row2=mysqli_fetch_row($result22F)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>军队</td>
                                <td>
                                    <?php 	$result22G=mysqli_query($conn,$sql22G);
	print(mysqli_fetch_row($result22G)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22G=mysqli_query($conn,$sql22G);
    $row2=mysqli_fetch_row($result22G)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>农/林/牧/渔业</td>
                                <td>
                                    <?php 	$result22H=mysqli_query($conn,$sql22H);
	print(mysqli_fetch_row($result22H)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result22I=mysqli_query($conn,$sql22I);
    $row1=mysqli_fetch_row($result22I)[0];
    $result22H=mysqli_query($conn,$sql22H);
    $row2=mysqli_fetch_row($result22H)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php 	$result22I=mysqli_query($conn,$sql22I);
	print(mysqli_fetch_row($result22I)[0]);?>
                                </td>
                                <td>1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                博士研究生
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="form3" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>行业整体</th>
                                <th>人数</th>
                                <th>比例</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>互联网/计算机/通信/软件</td>
                                <td>
                                    <?php 	$result231=mysqli_query($conn,$sql231);
	print(mysqli_fetch_row($result231)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result231=mysqli_query($conn,$sql231);
    $row2=mysqli_fetch_row($result231)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>房地产/建筑/工程建设</td>
                                <td>
                                    <?php 	$result232=mysqli_query($conn,$sql232);
	print(mysqli_fetch_row($result232)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result232=mysqli_query($conn,$sql232);
    $row2=mysqli_fetch_row($result232)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>制造业</td>
                                <td>
                                    <?php 	$result233=mysqli_query($conn,$sql233);
	print(mysqli_fetch_row($result233)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result233=mysqli_query($conn,$sql233);
    $row2=mysqli_fetch_row($result233)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>教育</td>
                                <td>
                                    <?php 	$result234=mysqli_query($conn,$sql234);
	print(mysqli_fetch_row($result234)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result234=mysqli_query($conn,$sql234);
    $row2=mysqli_fetch_row($result234)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>科学研究/技术服务业</td>
                                <td>
                                    <?php 	$result235=mysqli_query($conn,$sql235);
	print(mysqli_fetch_row($result235)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result235=mysqli_query($conn,$sql235);
    $row2=mysqli_fetch_row($result235)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>公共管理/社会保障/社会组织</td>
                                <td>
                                    <?php 	$result236=mysqli_query($conn,$sql236);
	print(mysqli_fetch_row($result236)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result236=mysqli_query($conn,$sql236);
    $row2=mysqli_fetch_row($result236)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>金融/保险/银行</td>
                                <td>
                                    <?php 	$result237=mysqli_query($conn,$sql237);
	print(mysqli_fetch_row($result237)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result237=mysqli_query($conn,$sql237);
    $row2=mysqli_fetch_row($result237)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>电力/燃气/水的生产和供应</td>
                                <td>
                                    <?php 	$result238=mysqli_query($conn,$sql238);
	print(mysqli_fetch_row($result238)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result238=mysqli_query($conn,$sql238);
    $row2=mysqli_fetch_row($result238)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>医疗卫生/生物医药/医疗保健</td>
                                <td>
                                    <?php 	$result239=mysqli_query($conn,$sql239);
	print(mysqli_fetch_row($result239)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result239=mysqli_query($conn,$sql239);
    $row2=mysqli_fetch_row($result239)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>贸易/批发/零售</td>
                                <td>
                                    <?php 	$result23A=mysqli_query($conn,$sql23A);
	print(mysqli_fetch_row($result23A)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23A=mysqli_query($conn,$sql23A);
    $row2=mysqli_fetch_row($result23A)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>能源矿产/石油化工</td>
                                <td>
                                    <?php 	$result23B=mysqli_query($conn,$sql23B);
	print(mysqli_fetch_row($result23B)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23B=mysqli_query($conn,$sql23B);
    $row2=mysqli_fetch_row($result23B)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>租赁/商务服务/居民服务业</td>
                                <td>
                                    <?php 	$result23C=mysqli_query($conn,$sql23C);
	print(mysqli_fetch_row($result23C)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23C=mysqli_query($conn,$sql23C);
    $row2=mysqli_fetch_row($result23C)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>水利/环境/公共设施管理</td>
                                <td>
                                    <?php 	$result23D=mysqli_query($conn,$sql23D);
	print(mysqli_fetch_row($result23D)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23D=mysqli_query($conn,$sql23D);
    $row2=mysqli_fetch_row($result23D)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>交通运输/仓储/邮政</td>
                                <td>
                                    <?php 	$result23E=mysqli_query($conn,$sql23E);
	print(mysqli_fetch_row($result23E)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23E=mysqli_query($conn,$sql23E);
    $row2=mysqli_fetch_row($result23E)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>广告传媒/文化娱乐/体育/出版印刷</td>
                                <td>
                                    <?php 	$result23F=mysqli_query($conn,$sql23F);
	print(mysqli_fetch_row($result23F)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result2FH=mysqli_query($conn,$sql23F);
    $row2=mysqli_fetch_row($result23F)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>军队</td>
                                <td>
                                    <?php 	$result23G=mysqli_query($conn,$sql23G);
	print(mysqli_fetch_row($result23G)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23G=mysqli_query($conn,$sql23G);
    $row2=mysqli_fetch_row($result23G)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>农/林/牧/渔业</td>
                                <td>
                                    <?php 	$result23H=mysqli_query($conn,$sql23H);
	print(mysqli_fetch_row($result23H)[0]);?>
                                </td>
                                <td>
                                    <?php 
                $result23I=mysqli_query($conn,$sql23I);
    $row1=mysqli_fetch_row($result23I)[0];
    $result23H=mysqli_query($conn,$sql23H);
    $row2=mysqli_fetch_row($result23H)[0];
    echo round($row2/$row1,4);?>
                                </td>
                            </tr>
                            <tr>
                                <td>总计</td>
                                <td>
                                    <?php 	$result23I=mysqli_query($conn,$sql23I);
	print(mysqli_fetch_row($result23I)[0]);?>
                                </td>
                                <td>1
                                </td>
                            </tr>
                        </tbody>
                    </table>