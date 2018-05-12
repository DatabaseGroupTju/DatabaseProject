<?php
	include "conn.php";

	$view4sql01='SELECT COUNT(*) FROM nationalUniversityView';
	$view4sql02='SELECT COUNT(*) FROM foreignUniversityView';
	$view4sql03='SELECT COUNT(*) FROM companyView';
	$view4sql04='SELECT COUNT(*) FROM notEmployedView';

	$view4sql11='SELECT COUNT(*) FROM nationalUniversityView
		WHERE cc="本科" OR cc="第二学士学位"';
	$view4sql12='SELECT COUNT(*) FROM foreignUniversityView
		WHERE cc="本科" OR cc="第二学士学位"';
	$view4sql13='SELECT COUNT(*) FROM companyView
		WHERE cc="本科" OR cc="第二学士学位"';
	$view4sql14='SELECT COUNT(*) FROM notEmployedView
		WHERE cc="本科" OR cc="第二学士学位"';

	$view4sql21='SELECT COUNT(*) FROM nationalUniversityView
		WHERE cc="硕士研究生"';
	$view4sql22='SELECT COUNT(*) FROM foreignUniversityView
		WHERE cc="硕士研究生"';
	$view4sql23='SELECT COUNT(*) FROM companyView
		WHERE cc="硕士研究生"';
	$view4sql24='SELECT COUNT(*) FROM notEmployedView
		WHERE cc="硕士研究生"';

	$view4sql31='SELECT COUNT(*) FROM nationalUniversityView
		WHERE cc="博士研究生"';
	$view4sql32='SELECT COUNT(*) FROM foreignUniversityView
		WHERE cc="博士研究生"';
	$view4sql33='SELECT COUNT(*) FROM companyView
		WHERE cc="博士研究生"';
	$view4sql34='SELECT COUNT(*) FROM notEmployedView
		WHERE cc="博士研究生"';

	$view4result01=mysqli_query($conn,$view4sql01);
	$view4data01 = mysqli_fetch_row($view4result01)[0];

	$view4result02=mysqli_query($conn,$view4sql02);
	$view4data02=mysqli_fetch_row($view4result02)[0];

	$view4result03=mysqli_query($conn,$view4sql03);
	$view4data03=mysqli_fetch_row($view4result03)[0];

	$view4result04=mysqli_query($conn,$view4sql04);
	$view4data04=mysqli_fetch_row($view4result04)[0];


	$view4result11=mysqli_query($conn,$view4sql11);
	$view4data11=mysqli_fetch_row($view4result11)[0];

	$view4result12=mysqli_query($conn,$view4sql12);
	$view4data12=mysqli_fetch_row($view4result12)[0];

	$view4result13=mysqli_query($conn,$view4sql13);
	$view4data13=mysqli_fetch_row($view4result13)[0];

	$view4result14=mysqli_query($conn,$view4sql14);
	$view4data14=mysqli_fetch_row($view4result14)[0];


	$view4result21=mysqli_query($conn,$view4sql21);
	$view4data21=mysqli_fetch_row($view4result21)[0];

	$view4result22=mysqli_query($conn,$view4sql22);
	$view4data22=mysqli_fetch_row($view4result22)[0];

	$view4result23=mysqli_query($conn,$view4sql23);
	$view4data23=mysqli_fetch_row($view4result23)[0];

	$view4result24=mysqli_query($conn,$view4sql24);
	$view4data24=mysqli_fetch_row($view4result24)[0];


	$view4result31=mysqli_query($conn,$view4sql31);
	$view4data31=mysqli_fetch_row($view4result31)[0];

	$view4result32=mysqli_query($conn,$view4sql32);
	$view4data32=mysqli_fetch_row($view4result32)[0];

	$view4result33=mysqli_query($conn,$view4sql33);
	$view4data33=mysqli_fetch_row($view4result33)[0];

	$view4result34=mysqli_query($conn,$view4sql34);
	$view4data34=mysqli_fetch_row($view4result34)[0];
?>
