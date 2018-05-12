<?php
	include "conn.php";

	$view1sql01='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="军事院校"';
	$view1sql02='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="科研院所"';
	$view1sql03='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="中科院直属院校及科研院所"';
	$view1sql04='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="其他院校"';
	$view1sql05='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="985院校" or institution_category="211院校"';

	$view1sql11='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="军事院校" and cc="本科"';
	$view1sql12='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="科研院所" and cc="本科"';
	$view1sql13='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="中科院直属院校及科研院所" and cc="本科"';
	$view1sql14='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="其他院校" and cc="本科"';
	$view1sql15='SELECT COUNT(*) FROM nationalUniversityView WHERE (institution_category="985院校" or institution_category="211院校") and cc="本科"';

	$view1sql21='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="军事院校" and cc="硕士研究生"';
	$view1sql22='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="科研院所" and cc="硕士研究生"';
	$view1sql23='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="中科院直属院校及科研院所" and cc="硕士研究生"';
	$view1sql24='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="其他院校" and cc="硕士研究生"';
	$view1sql25='SELECT COUNT(*) FROM nationalUniversityView WHERE (institution_category="985院校" or institution_category="211院校") and cc="硕士研究生"';

	$view1sql31='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="军事院校" and cc="博士研究生"';
	$view1sql32='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="科研院所" and cc="博士研究生"';
	$view1sql33='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="中科院直属院校及科研院所" and cc="博士研究生"';
	$view1sql34='SELECT COUNT(*) FROM nationalUniversityView WHERE institution_category="其他院校" and cc="博士研究生"';
	$view1sql35='SELECT COUNT(*) FROM nationalUniversityView WHERE (institution_category="985院校" or institution_category="211院校") and cc="博士研究生"';

	$view1result01=mysqli_query($conn,$view1sql01);
	$view1data01 = mysqli_fetch_row($view1result01)[0];

	$view1result02=mysqli_query($conn,$view1sql02);
	$view1data02=mysqli_fetch_row($view1result02)[0];

	$view1result03=mysqli_query($conn,$view1sql03);
	$view1data03=mysqli_fetch_row($view1result03)[0];

	$view1result04=mysqli_query($conn,$view1sql04);
	$view1data04=mysqli_fetch_row($view1result04)[0];

	$view1result05=mysqli_query($conn,$view1sql05);
	$view1data05=mysqli_fetch_row($view1result05)[0];

	$view1result11=mysqli_query($conn,$view1sql11);
	$view1data11=mysqli_fetch_row($view1result11)[0];

	$view1result12=mysqli_query($conn,$view1sql12);
	$view1data12=mysqli_fetch_row($view1result12)[0];

	$view1result13=mysqli_query($conn,$view1sql13);
	$view1data13=mysqli_fetch_row($view1result13)[0];

	$view1result14=mysqli_query($conn,$view1sql14);
	$view1data14=mysqli_fetch_row($view1result14)[0];

	$view1result15=mysqli_query($conn,$view1sql15);
	$view1data15=mysqli_fetch_row($view1result15)[0];


	$view1result21=mysqli_query($conn,$view1sql21);
	$view1data21=mysqli_fetch_row($view1result21)[0];

	$view1result22=mysqli_query($conn,$view1sql22);
	$view1data22=mysqli_fetch_row($view1result22)[0];

	$view1result23=mysqli_query($conn,$view1sql23);
	$view1data23=mysqli_fetch_row($view1result23)[0];

	$view1result24=mysqli_query($conn,$view1sql24);
	$view1data24=mysqli_fetch_row($view1result24)[0];

	$view1result25=mysqli_query($conn,$view1sql25);
	$view1data25=mysqli_fetch_row($view1result25)[0];


	$view1result31=mysqli_query($conn,$view1sql31);
	$view1data31=mysqli_fetch_row($view1result31)[0];

	$view1result32=mysqli_query($conn,$view1sql32);
	$view1data32=mysqli_fetch_row($view1result32)[0];

	$view1result33=mysqli_query($conn,$view1sql33);
	$view1data33=mysqli_fetch_row($view1result33)[0];

	$view1result34=mysqli_query($conn,$view1sql34);
	$view1data34=mysqli_fetch_row($view1result34)[0];

	$view1result35=mysqli_query($conn,$view1sql35);
	$view1data35=mysqli_fetch_row($view1result35)[0];
?>
