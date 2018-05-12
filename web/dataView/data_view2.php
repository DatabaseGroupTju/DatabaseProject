<?php
	include "conn.php";

	$view2sql01='SELECT COUNT(*) FROM companyView WHERE company_category like "%民企%"';
	$view2sql02='SELECT COUNT(*) FROM companyView WHERE company_category like "%央企%"';
	$view2sql03='SELECT COUNT(*) FROM companyView WHERE company_category like "%国企%"';
	$view2sql04='SELECT COUNT(*) FROM companyView WHERE company_category like "%三资企业%"';
	$view2sql05='SELECT COUNT(*) FROM companyView WHERE company_category like "%高等教育单位%"';
	$view2sql06='SELECT COUNT(*) FROM companyView WHERE company_category like "%党政机关%"';
	$view2sql07='SELECT COUNT(*) FROM companyView WHERE company_category like "%事业单位%"';
	$view2sql08='SELECT COUNT(*) FROM companyView WHERE company_category like "%科研院所%"';
	$view2sql09='SELECT COUNT(*) FROM companyView WHERE company_category like "%中等教育单位%"';
	$view2sql0A='SELECT COUNT(*) FROM companyView WHERE company_category like "%部队%"';
	$view2sql0B='SELECT COUNT(*) FROM companyView WHERE company_category="大学生村官" or company_category="三支一扶" or company_category="支教"';
	$view2sql0C='SELECT COUNT(*) FROM companyView WHERE company_category like "%央企%" or company_category like "%国企%"';

	$view2sql11='SELECT COUNT(*) FROM companyView WHERE company_category like "%民企%" and cc="本科"';
	$view2sql12='SELECT COUNT(*) FROM companyView WHERE company_category like "%央企%" and cc="本科"';
	$view2sql13='SELECT COUNT(*) FROM companyView WHERE company_category like "%国企%" and cc="本科"';
	$view2sql14='SELECT COUNT(*) FROM companyView WHERE company_category like "%三资企业%" and cc="本科"';
	$view2sql15='SELECT COUNT(*) FROM companyView WHERE company_category like "%高等教育单位%" and cc="本科"';
	$view2sql16='SELECT COUNT(*) FROM companyView WHERE company_category like "%党政机关%" and cc="本科"';
	$view2sql17='SELECT COUNT(*) FROM companyView WHERE company_category like "%事业单位%" and cc="本科"';
	$view2sql18='SELECT COUNT(*) FROM companyView WHERE company_category like "%科研院所%" and cc="本科"';
	$view2sql19='SELECT COUNT(*) FROM companyView WHERE company_category like "%中等教育单位%" and cc="本科"';
	$view2sql1A='SELECT COUNT(*) FROM companyView WHERE company_category like "%部队%" and cc="本科"';
	$view2sql1B='SELECT COUNT(*) FROM companyView WHERE (company_category="大学生村官" or company_category="三支一扶" or company_category="支教") and cc="本科"';
	$view2sql1C='SELECT COUNT(*) FROM companyView WHERE (company_category like "%央企%" or company_category like "%国企%") and cc="本科"';

	$view2sql21='SELECT COUNT(*) FROM companyView WHERE company_category like "%民企%" and cc="硕士研究生"';
	$view2sql22='SELECT COUNT(*) FROM companyView WHERE company_category like "%央企%" and cc="硕士研究生"';
	$view2sql23='SELECT COUNT(*) FROM companyView WHERE company_category like "%国企%" and cc="硕士研究生"';
	$view2sql24='SELECT COUNT(*) FROM companyView WHERE company_category like "%三资企业%" and cc="硕士研究生"';
	$view2sql25='SELECT COUNT(*) FROM companyView WHERE company_category like "%高等教育单位%" and cc="硕士研究生"';
	$view2sql26='SELECT COUNT(*) FROM companyView WHERE company_category like "%党政机关%" and cc="硕士研究生"';
	$view2sql27='SELECT COUNT(*) FROM companyView WHERE company_category like "%事业单位%" and cc="硕士研究生"';
	$view2sql28='SELECT COUNT(*) FROM companyView WHERE company_category like "%科研院所%" and cc="硕士研究生"';
	$view2sql29='SELECT COUNT(*) FROM companyView WHERE company_category like "%中等教育单位%" and cc="硕士研究生"';
	$view2sql2A='SELECT COUNT(*) FROM companyView WHERE company_category like "%部队%" and cc="硕士研究生"';
	$view2sql2B='SELECT COUNT(*) FROM companyView WHERE (company_category="大学生村官" or company_category="三支一扶" or company_category="支教") and cc="硕士研究生"';
	$view2sql2C='SELECT COUNT(*) FROM companyView WHERE (company_category like "%央企%" or company_category like "%国企%") and cc="硕士研究生"';

	$view2sql31='SELECT COUNT(*) FROM companyView WHERE company_category like "%民企%" and cc="博士研究生"';
	$view2sql32='SELECT COUNT(*) FROM companyView WHERE company_category like "%央企%" and cc="博士研究生"';
	$view2sql33='SELECT COUNT(*) FROM companyView WHERE company_category like "%国企%" and cc="博士研究生"';
	$view2sql34='SELECT COUNT(*) FROM companyView WHERE company_category like "%三资企业%" and cc="博士研究生"';
	$view2sql35='SELECT COUNT(*) FROM companyView WHERE company_category like "%高等教育单位%" and cc="博士研究生"';
	$view2sql36='SELECT COUNT(*) FROM companyView WHERE company_category like "%党政机关%" and cc="博士研究生"';
	$view2sql37='SELECT COUNT(*) FROM companyView WHERE company_category like "%事业单位%" and cc="博士研究生"';
	$view2sql38='SELECT COUNT(*) FROM companyView WHERE company_category like "%科研院所%" and cc="博士研究生"';
	$view2sql39='SELECT COUNT(*) FROM companyView WHERE company_category like "%中等教育单位%" and cc="博士研究生"';
	$view2sql3A='SELECT COUNT(*) FROM companyView WHERE company_category like "%部队%" and cc="博士研究生"';
	$view2sql3B='SELECT COUNT(*) FROM companyView WHERE (company_category="大学生村官" or company_category="三支一扶" or company_category="支教") and cc="博士研究生"';
	$view2sql3C='SELECT COUNT(*) FROM companyView WHERE (company_category like "%央企%" or company_category like "%国企%") and cc="博士研究生"';

	$view2result01=mysqli_query($conn,$view2sql01);
	$view2data01=mysqli_fetch_row($view2result01)[0];

	$view2result02=mysqli_query($conn,$view2sql02);
	$view2data02=mysqli_fetch_row($view2result02)[0];

	$view2result03=mysqli_query($conn,$view2sql03);
	$view2data03=mysqli_fetch_row($view2result03)[0];

	$view2result04=mysqli_query($conn,$view2sql04);
	$view2data04=mysqli_fetch_row($view2result04)[0];

	$view2result05=mysqli_query($conn,$view2sql05);
	$view2data05=mysqli_fetch_row($view2result05)[0];

	$view2result06=mysqli_query($conn,$view2sql06);
	$view2data06=mysqli_fetch_row($view2result06)[0];

	$view2result07=mysqli_query($conn,$view2sql07);
	$view2data07=mysqli_fetch_row($view2result07)[0];

	$view2result08=mysqli_query($conn,$view2sql08);
	$view2data08=mysqli_fetch_row($view2result08)[0];

	$view2result09=mysqli_query($conn,$view2sql09);
	$view2data09=mysqli_fetch_row($view2result09)[0];

	$view2result0A=mysqli_query($conn,$view2sql0A);
	$view2data0A=mysqli_fetch_row($view2result0A)[0];

	$view2result0B=mysqli_query($conn,$view2sql0B);
	$view2data0B=mysqli_fetch_row($view2result0B)[0];

	$view2result0C=mysqli_query($conn,$view2sql0C);
	$view2data0C=mysqli_fetch_row($view2result0C)[0];




	$view2result11=mysqli_query($conn,$view2sql11);
	$view2data11=mysqli_fetch_row($view2result11)[0];

	$view2result12=mysqli_query($conn,$view2sql12);
	$view2data12=mysqli_fetch_row($view2result12)[0];

	$view2result13=mysqli_query($conn,$view2sql13);
	$view2data13=mysqli_fetch_row($view2result13)[0];

	$view2result14=mysqli_query($conn,$view2sql14);
	$view2data14=mysqli_fetch_row($view2result14)[0];

	$view2result15=mysqli_query($conn,$view2sql15);
	$view2data15=mysqli_fetch_row($view2result15)[0];

	$view2result16=mysqli_query($conn,$view2sql16);
	$view2data16=mysqli_fetch_row($view2result16)[0];

	$view2result17=mysqli_query($conn,$view2sql17);
	$view2data17=mysqli_fetch_row($view2result17)[0];

	$view2result18=mysqli_query($conn,$view2sql18);
	$view2data18=mysqli_fetch_row($view2result18)[0];

	$view2result19=mysqli_query($conn,$view2sql19);
	$view2data19=mysqli_fetch_row($view2result19)[0];

	$view2result1A=mysqli_query($conn,$view2sql1A);
	$view2data1A=mysqli_fetch_row($view2result1A)[0];

	$view2result1B=mysqli_query($conn,$view2sql1B);
	$view2data1B=mysqli_fetch_row($view2result1B)[0];

	$view2result1C=mysqli_query($conn,$view2sql1C);
	$view2data1C=mysqli_fetch_row($view2result1C)[0];



	$view2result21=mysqli_query($conn,$view2sql21);
	$view2data21=mysqli_fetch_row($view2result21)[0];

	$view2result22=mysqli_query($conn,$view2sql22);
	$view2data22=mysqli_fetch_row($view2result22)[0];

	$view2result23=mysqli_query($conn,$view2sql23);
	$view2data23=mysqli_fetch_row($view2result23)[0];

	$view2result24=mysqli_query($conn,$view2sql24);
	$view2data24=mysqli_fetch_row($view2result24)[0];

	$view2result25=mysqli_query($conn,$view2sql25);
	$view2data25=mysqli_fetch_row($view2result25)[0];

	$view2result26=mysqli_query($conn,$view2sql26);
	$view2data26=mysqli_fetch_row($view2result26)[0];

	$view2result27=mysqli_query($conn,$view2sql27);
	$view2data27=mysqli_fetch_row($view2result27)[0];

	$view2result28=mysqli_query($conn,$view2sql28);
	$view2data28=mysqli_fetch_row($view2result28)[0];

	$view2result29=mysqli_query($conn,$view2sql29);
	$view2data29=mysqli_fetch_row($view2result29)[0];

	$view2result2A=mysqli_query($conn,$view2sql2A);
	$view2data2A=mysqli_fetch_row($view2result2A)[0];

	$view2result2B=mysqli_query($conn,$view2sql2B);
	$view2data2B=mysqli_fetch_row($view2result2B)[0];

	$view2result2C=mysqli_query($conn,$view2sql2C);
	$view2data2C=mysqli_fetch_row($view2result2C)[0];



	$view2result31=mysqli_query($conn,$view2sql31);
	$view2data31=mysqli_fetch_row($view2result31)[0];

	$view2result32=mysqli_query($conn,$view2sql32);
	$view2data32=mysqli_fetch_row($view2result32)[0];

	$view2result33=mysqli_query($conn,$view2sql33);
	$view2data33=mysqli_fetch_row($view2result33)[0];

	$view2result34=mysqli_query($conn,$view2sql34);
	$view2data34=mysqli_fetch_row($view2result34)[0];

	$view2result35=mysqli_query($conn,$view2sql35);
	$view2data35=mysqli_fetch_row($view2result35)[0];

	$view2result36=mysqli_query($conn,$view2sql36);
	$view2data36=mysqli_fetch_row($view2result36)[0];

	$view2result37=mysqli_query($conn,$view2sql37);
	$view2data37=mysqli_fetch_row($view2result37)[0];

	$view2result38=mysqli_query($conn,$view2sql38);
	$view2data38=mysqli_fetch_row($view2result38)[0];

	$view2result39=mysqli_query($conn,$view2sql39);
	$view2data39=mysqli_fetch_row($view2result39)[0];

	$view2result3A=mysqli_query($conn,$view2sql3A);
	$view2data3A=mysqli_fetch_row($view2result3A)[0];

	$view2result3B=mysqli_query($conn,$view2sql3B);
	$view2data3B=mysqli_fetch_row($view2result3B)[0];

	$view2result3C=mysqli_query($conn,$view2sql3C);
	$view2data3C=mysqli_fetch_row($view2result3C)[0];
?>
