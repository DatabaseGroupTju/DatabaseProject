<?php
	include "conn.php";
	$view3sql01='SELECT COUNT(*) FROM companyView WHERE company_industry="互联网/计算机/通信/软件"';
	$view3sql02='SELECT COUNT(*) FROM companyView WHERE company_industry="房地产/建筑/工程建设"';
	$view3sql03='SELECT COUNT(*) FROM companyView WHERE company_industry="制造业"';
	$view3sql04='SELECT COUNT(*) FROM companyView WHERE company_industry="教育"';
	$view3sql05='SELECT COUNT(*) FROM companyView WHERE company_industry="科学研究/技术服务业"';
	$view3sql06='SELECT COUNT(*) FROM companyView WHERE company_industry="公共管理/社会保障/社会组织"';
	$view3sql07='SELECT COUNT(*) FROM companyView WHERE company_industry="金融/保险/银行"';
	$view3sql08='SELECT COUNT(*) FROM companyView WHERE company_industry="电力/燃气/水的生产和供应"';
	$view3sql09='SELECT COUNT(*) FROM companyView WHERE company_industry="医疗卫生/生物医药/医疗保健"';
	$view3sql0A='SELECT COUNT(*) FROM companyView WHERE company_industry="贸易/批发/零售"';
	$view3sql0B='SELECT COUNT(*) FROM companyView WHERE company_industry="能源矿产/石油化工"';
	$view3sql0C='SELECT COUNT(*) FROM companyView WHERE company_industry="租赁/商务服务/居民服务业"';
	$view3sql0D='SELECT COUNT(*) FROM companyView WHERE company_industry="水利/环境/公共设施管理"';
	$view3sql0E='SELECT COUNT(*) FROM companyView WHERE company_industry="交通运输/仓储/邮政"';
	$view3sql0F='SELECT COUNT(*) FROM companyView WHERE company_industry="广告传媒/文化娱乐/体育/出版"';
	$view3sql0G='SELECT COUNT(*) FROM companyView WHERE company_industry="军队"';
	$view3sql0H='SELECT COUNT(*) FROM companyView WHERE company_industry="农/林/牧/渔业"';

	$view3sql11='SELECT COUNT(*) FROM companyView WHERE company_industry="互联网/计算机/通信/软件" and cc="本科"';
	$view3sql12='SELECT COUNT(*) FROM companyView WHERE company_industry="房地产/建筑/工程建设" and cc="本科"';
	$view3sql13='SELECT COUNT(*) FROM companyView WHERE company_industry="制造业" and cc="本科"';
	$view3sql14='SELECT COUNT(*) FROM companyView WHERE company_industry="教育" and cc="本科"';
	$view3sql15='SELECT COUNT(*) FROM companyView WHERE company_industry="科学研究/技术服务业" and cc="本科"';
	$view3sql16='SELECT COUNT(*) FROM companyView WHERE company_industry="公共管理/社会保障/社会组织" and cc="本科"';
	$view3sql17='SELECT COUNT(*) FROM companyView WHERE company_industry="金融/保险/银行" and cc="本科"';
	$view3sql18='SELECT COUNT(*) FROM companyView WHERE company_industry="电力/燃气/水的生产和供应" and cc="本科"';
	$view3sql19='SELECT COUNT(*) FROM companyView WHERE company_industry="医疗卫生/生物医药/医疗保健" and cc="本科"';
	$view3sql1A='SELECT COUNT(*) FROM companyView WHERE company_industry="贸易/批发/零售" and cc="本科"';
	$view3sql1B='SELECT COUNT(*) FROM companyView WHERE company_industry="能源矿产/石油化工" and cc="本科"';
	$view3sql1C='SELECT COUNT(*) FROM companyView WHERE company_industry="租赁/商务服务/居民服务业" and cc="本科"';
	$view3sql1D='SELECT COUNT(*) FROM companyView WHERE company_industry="水利/环境/公共设施管理" and cc="本科"';
	$view3sql1E='SELECT COUNT(*) FROM companyView WHERE company_industry="交通运输/仓储/邮政" and cc="本科"';
	$view3sql1F='SELECT COUNT(*) FROM companyView WHERE company_industry="广告传媒/文化娱乐/体育/出版" and cc="本科"';
	$view3sql1G='SELECT COUNT(*) FROM companyView WHERE company_industry="军队" and cc="本科"';
	$view3sql1H='SELECT COUNT(*) FROM companyView WHERE company_industry="农/林/牧/渔业" and cc="本科"';

	$view3sql21='SELECT COUNT(*) FROM companyView WHERE company_industry="互联网/计算机/通信/软件" and cc="硕士研究生"';
	$view3sql22='SELECT COUNT(*) FROM companyView WHERE company_industry="房地产/建筑/工程建设" and cc="硕士研究生"';
	$view3sql23='SELECT COUNT(*) FROM companyView WHERE company_industry="制造业" and cc="硕士研究生"';
	$view3sql24='SELECT COUNT(*) FROM companyView WHERE company_industry="教育" and cc="硕士研究生"';
	$view3sql25='SELECT COUNT(*) FROM companyView WHERE company_industry="科学研究/技术服务业" and cc="硕士研究生"';
	$view3sql26='SELECT COUNT(*) FROM companyView WHERE company_industry="公共管理/社会保障/社会组织" and cc="硕士研究生"';
	$view3sql27='SELECT COUNT(*) FROM companyView WHERE company_industry="金融/保险/银行" and cc="硕士研究生"';
	$view3sql28='SELECT COUNT(*) FROM companyView WHERE company_industry="电力/燃气/水的生产和供应" and cc="硕士研究生"';
	$view3sql29='SELECT COUNT(*) FROM companyView WHERE company_industry="医疗卫生/生物医药/医疗保健" and cc="硕士研究生"';
	$view3sql2A='SELECT COUNT(*) FROM companyView WHERE company_industry="贸易/批发/零售" and cc="硕士研究生"';
	$view3sql2B='SELECT COUNT(*) FROM companyView WHERE company_industry="能源矿产/石油化工" and cc="硕士研究生"';
	$view3sql2C='SELECT COUNT(*) FROM companyView WHERE company_industry="租赁/商务服务/居民服务业" and cc="硕士研究生"';
	$view3sql2D='SELECT COUNT(*) FROM companyView WHERE company_industry="水利/环境/公共设施管理" and cc="硕士研究生"';
	$view3sql2E='SELECT COUNT(*) FROM companyView WHERE company_industry="交通运输/仓储/邮政" and cc="硕士研究生"';
	$view3sql2F='SELECT COUNT(*) FROM companyView WHERE company_industry="广告传媒/文化娱乐/体育/出版" and cc="硕士研究生"';
	$view3sql2G='SELECT COUNT(*) FROM companyView WHERE company_industry="军队" and cc="硕士研究生"';
	$view3sql2H='SELECT COUNT(*) FROM companyView WHERE company_industry="农/林/牧/渔业" and cc="硕士研究生"';

	$view3sql31='SELECT COUNT(*) FROM companyView WHERE company_industry="互联网/计算机/通信/软件" and cc="博士研究生"';
	$view3sql32='SELECT COUNT(*) FROM companyView WHERE company_industry="房地产/建筑/工程建设" and cc="博士研究生"';
	$view3sql33='SELECT COUNT(*) FROM companyView WHERE company_industry="制造业" and cc="博士研究生"';
	$view3sql34='SELECT COUNT(*) FROM companyView WHERE company_industry="教育" and cc="博士研究生"';
	$view3sql35='SELECT COUNT(*) FROM companyView WHERE company_industry="科学研究/技术服务业" and cc="博士研究生"';
	$view3sql36='SELECT COUNT(*) FROM companyView WHERE company_industry="公共管理/社会保障/社会组织" and cc="博士研究生"';
	$view3sql37='SELECT COUNT(*) FROM companyView WHERE company_industry="金融/保险/银行" and cc="博士研究生"';
	$view3sql38='SELECT COUNT(*) FROM companyView WHERE company_industry="电力/燃气/水的生产和供应" and cc="博士研究生"';
	$view3sql39='SELECT COUNT(*) FROM companyView WHERE company_industry="医疗卫生/生物医药/医疗保健" and cc="博士研究生"';
	$view3sql3A='SELECT COUNT(*) FROM companyView WHERE company_industry="贸易/批发/零售" and cc="博士研究生"';
	$view3sql3B='SELECT COUNT(*) FROM companyView WHERE company_industry="能源矿产/石油化工" and cc="博士研究生"';
	$view3sql3C='SELECT COUNT(*) FROM companyView WHERE company_industry="租赁/商务服务/居民服务业" and cc="博士研究生"';
	$view3sql3D='SELECT COUNT(*) FROM companyView WHERE company_industry="水利/环境/公共设施管理" and cc="博士研究生"';
	$view3sql3E='SELECT COUNT(*) FROM companyView WHERE company_industry="交通运输/仓储/邮政" and cc="博士研究生"';
	$view3sql3F='SELECT COUNT(*) FROM companyView WHERE company_industry="广告传媒/文化娱乐/体育/出版" and cc="博士研究生"';
	$view3sql3G='SELECT COUNT(*) FROM companyView WHERE company_industry="军队" and cc="博士研究生"';
	$view3sql3H='SELECT COUNT(*) FROM companyView WHERE company_industry="农/林/牧/渔业" and cc="博士研究生"';

	$view3result01=mysqli_query($conn,$view3sql01);
	$view3data01=mysqli_fetch_row($view3result01)[0];

	$view3result02=mysqli_query($conn,$view3sql02);
	$view3data02=mysqli_fetch_row($view3result02)[0];

	$view3result03=mysqli_query($conn,$view3sql03);
	$view3data03=mysqli_fetch_row($view3result03)[0];

	$view3result04=mysqli_query($conn,$view3sql04);
	$view3data04=mysqli_fetch_row($view3result04)[0];

	$view3result05=mysqli_query($conn,$view3sql05);
	$view3data05=mysqli_fetch_row($view3result05)[0];

	$view3result06=mysqli_query($conn,$view3sql06);
	$view3data06=mysqli_fetch_row($view3result06)[0];

	$view3result07=mysqli_query($conn,$view3sql07);
	$view3data07=mysqli_fetch_row($view3result07)[0];

	$view3result08=mysqli_query($conn,$view3sql08);
	$view3data08=mysqli_fetch_row($view3result08)[0];

	$view3result09=mysqli_query($conn,$view3sql09);
	$view3data09=mysqli_fetch_row($view3result09)[0];

	$view3result0A=mysqli_query($conn,$view3sql0A);
	$view3data0A=mysqli_fetch_row($view3result0A)[0];

	$view3result0B=mysqli_query($conn,$view3sql0B);
	$view3data0B=mysqli_fetch_row($view3result0B)[0];

	$view3result0C=mysqli_query($conn,$view3sql0C);
	$view3data0C=mysqli_fetch_row($view3result0C)[0];

	$view3result0D=mysqli_query($conn,$view3sql0D);
	$view3data0D=mysqli_fetch_row($view3result0D)[0];

	$view3result0E=mysqli_query($conn,$view3sql0E);
	$view3data0E=mysqli_fetch_row($view3result0E)[0];

	$view3result0F=mysqli_query($conn,$view3sql0F);
	$view3data0F=mysqli_fetch_row($view3result0F)[0];

	$view3result0G=mysqli_query($conn,$view3sql0G);
	$view3data0G=mysqli_fetch_row($view3result0G)[0];

	$view3result0H=mysqli_query($conn,$view3sql0H);
	$view3data0H=mysqli_fetch_row($view3result0H)[0];


	$view3result11=mysqli_query($conn,$view3sql11);
	$view3data11=mysqli_fetch_row($view3result11)[0];

	$view3result12=mysqli_query($conn,$view3sql12);
	$view3data12=mysqli_fetch_row($view3result12)[0];

	$view3result13=mysqli_query($conn,$view3sql13);
	$view3data13=mysqli_fetch_row($view3result13)[0];

	$view3result14=mysqli_query($conn,$view3sql14);
	$view3data14=mysqli_fetch_row($view3result14)[0];

	$view3result15=mysqli_query($conn,$view3sql15);
	$view3data15=mysqli_fetch_row($view3result15)[0];

	$view3result16=mysqli_query($conn,$view3sql16);
	$view3data16=mysqli_fetch_row($view3result16)[0];

	$view3result17=mysqli_query($conn,$view3sql17);
	$view3data17=mysqli_fetch_row($view3result17)[0];

	$view3result18=mysqli_query($conn,$view3sql18);
	$view3data18=mysqli_fetch_row($view3result18)[0];

	$view3result19=mysqli_query($conn,$view3sql19);
	$view3data19=mysqli_fetch_row($view3result19)[0];

	$view3result1A=mysqli_query($conn,$view3sql1A);
	$view3data1A=mysqli_fetch_row($view3result1A)[0];

	$view3result1B=mysqli_query($conn,$view3sql1B);
	$view3data1B=mysqli_fetch_row($view3result1B)[0];

	$view3result1C=mysqli_query($conn,$view3sql1C);
	$view3data1C=mysqli_fetch_row($view3result1C)[0];

	$view3result1D=mysqli_query($conn,$view3sql1D);
	$view3data1D=mysqli_fetch_row($view3result1D)[0];

	$view3result1E=mysqli_query($conn,$view3sql1E);
	$view3data1E=mysqli_fetch_row($view3result1E)[0];

	$view3result1F=mysqli_query($conn,$view3sql1F);
	$view3data1F=mysqli_fetch_row($view3result1F)[0];

	$view3result1G=mysqli_query($conn,$view3sql1G);
	$view3data1G=mysqli_fetch_row($view3result1G)[0];

	$view3result1H=mysqli_query($conn,$view3sql1H);
	$view3data1H=mysqli_fetch_row($view3result1H)[0];


	$view3result21=mysqli_query($conn,$view3sql21);
	$view3data21=mysqli_fetch_row($view3result21)[0];

	$view3result22=mysqli_query($conn,$view3sql22);
	$view3data22=mysqli_fetch_row($view3result22)[0];

	$view3result23=mysqli_query($conn,$view3sql23);
	$view3data23=mysqli_fetch_row($view3result23)[0];

	$view3result24=mysqli_query($conn,$view3sql24);
	$view3data24=mysqli_fetch_row($view3result24)[0];

	$view3result25=mysqli_query($conn,$view3sql25);
	$view3data25=mysqli_fetch_row($view3result25)[0];

	$view3result26=mysqli_query($conn,$view3sql26);
	$view3data26=mysqli_fetch_row($view3result26)[0];

	$view3result27=mysqli_query($conn,$view3sql27);
	$view3data27=mysqli_fetch_row($view3result27)[0];

	$view3result28=mysqli_query($conn,$view3sql28);
	$view3data28=mysqli_fetch_row($view3result28)[0];

	$view3result29=mysqli_query($conn,$view3sql29);
	$view3data29=mysqli_fetch_row($view3result29)[0];

	$view3result2A=mysqli_query($conn,$view3sql2A);
	$view3data2A=mysqli_fetch_row($view3result2A)[0];

	$view3result2B=mysqli_query($conn,$view3sql2B);
	$view3data2B=mysqli_fetch_row($view3result2B)[0];

	$view3result2C=mysqli_query($conn,$view3sql2C);
	$view3data2C=mysqli_fetch_row($view3result2C)[0];

	$view3result2D=mysqli_query($conn,$view3sql2D);
	$view3data2D=mysqli_fetch_row($view3result2D)[0];

	$view3result2E=mysqli_query($conn,$view3sql2E);
	$view3data2E=mysqli_fetch_row($view3result2E)[0];

	$view3result2F=mysqli_query($conn,$view3sql2F);
	$view3data2F=mysqli_fetch_row($view3result2F)[0];

	$view3result2G=mysqli_query($conn,$view3sql2G);
	$view3data2G=mysqli_fetch_row($view3result2G)[0];

	$view3result2H=mysqli_query($conn,$view3sql2H);
	$view3data2H=mysqli_fetch_row($view3result2H)[0];


	$view3result31=mysqli_query($conn,$view3sql31);
	$view3data31=mysqli_fetch_row($view3result31)[0];

	$view3result32=mysqli_query($conn,$view3sql32);
	$view3data32=mysqli_fetch_row($view3result32)[0];

	$view3result33=mysqli_query($conn,$view3sql33);
	$view3data33=mysqli_fetch_row($view3result33)[0];

	$view3result34=mysqli_query($conn,$view3sql34);
	$view3data34=mysqli_fetch_row($view3result34)[0];

	$view3result35=mysqli_query($conn,$view3sql35);
	$view3data35=mysqli_fetch_row($view3result35)[0];

	$view3result36=mysqli_query($conn,$view3sql36);
	$view3data36=mysqli_fetch_row($view3result36)[0];

	$view3result37=mysqli_query($conn,$view3sql37);
	$view3data37=mysqli_fetch_row($view3result37)[0];

	$view3result38=mysqli_query($conn,$view3sql38);
	$view3data38=mysqli_fetch_row($view3result38)[0];

	$view3result39=mysqli_query($conn,$view3sql39);
	$view3data39=mysqli_fetch_row($view3result39)[0];

	$view3result3A=mysqli_query($conn,$view3sql3A);
	$view3data3A=mysqli_fetch_row($view3result3A)[0];

	$view3result3B=mysqli_query($conn,$view3sql3B);
	$view3data3B=mysqli_fetch_row($view3result3B)[0];

	$view3result3C=mysqli_query($conn,$view3sql3C);
	$view3data3C=mysqli_fetch_row($view3result3C)[0];

	$view3result3D=mysqli_query($conn,$view3sql3D);
	$view3data3D=mysqli_fetch_row($view3result3D)[0];

	$view3result3E=mysqli_query($conn,$view3sql3E);
	$view3data3E=mysqli_fetch_row($view3result3E)[0];

	$view3result3F=mysqli_query($conn,$view3sql3F);
	$view3data3F=mysqli_fetch_row($view3result3F)[0];

	$view3result3G=mysqli_query($conn,$view3sql3G);
	$view3data3G=mysqli_fetch_row($view3result3G)[0];

	$view3result3H=mysqli_query($conn,$view3sql3H);
	$view3data3H=mysqli_fetch_row($view3result3H)[0];
	?>
