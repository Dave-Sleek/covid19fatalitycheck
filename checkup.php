<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Pay Small Small">
<meta name="author" content="TK Waplong">
<link href="asset/css/bootstrap.min.css" rel="stylesheet">
<link href="asset/css/font-awesome_2.css" rel="stylesheet">
<link href="asset/css/all.css" rel="stylesheet">
<head>
	<title>COVID-19 FATALITY CHECKUP</title>
</head>
<h2 style="text-align: center;"><img src='asset/img/img2.png' height='100' width='100'> COVID-19 FATALITY CHECKUP REPORT</h2>
<p style="margin-left: 25px; padding-top: 25px;">
<?php

error_reporting("No data");

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$symptoms_a = $_POST['symptoms_a'];
$symptoms_b = $_POST['symptoms_b'];
$symptoms_c = $_POST['symptoms_c'];
$symptoms_d = $_POST['symptoms_d'];
$symptoms_e = $_POST['symptoms_e'];
$symptoms_f = $_POST['symptoms_f'];
$symptoms_g = $_POST['symptoms_g'];
$symptoms_h = $_POST['symptoms_h'];
$symptoms_i = $_POST['symptoms_i'];
$symptoms_j = $_POST['symptoms_j'];
//$checked;

/**$data = array(
	0 => 'In your age fatality rate of corona virus is 0.00%',
	1 => 'In your age fatality rate of corona virus is 0.2%',
	2 => 'In your age fatality rate of corona virus is 0.2%',
	3 => 'In your age fatality rate of corona virus is 0.2%',
	4 => 'In your age fatality rate of corona virus is 0.4%',
	5 => 'In your age fatality rate of corona virus is 1.3%',
	6 => 'In your age fatality rate of corona virus is 3.6%',
	7 => 'In your age fatality rate of corona virus is 8.0%',
	8 => 'In your age fatality rate of corona virus is 21.8% or 14.8%'
);
**/

echo "<b>Your fatality rate</b><br />";
if ($age>0 && $age<=5) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.00%";
}elseif ($age>=5 && $age<=10) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.1%";
}elseif ($age>=10 && $age<=19) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.2%";
}elseif ($age>=20 && $age<=29) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.2%";
}elseif ($age>=30 && $age<=39) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.3%";
}elseif ($age>=40 && $age<=49) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 0.4%";
}elseif ($age>=50 && $age<=59) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 1.3%";
}elseif ($age>=60 && $age<=69) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 3.6%";
}elseif ($age>=70 && $age<=79) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 8.0%";
}elseif ($age>=80 && $age<=89) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 14.8%";
}elseif ($age>=90 && $age<=99) {
	echo "Dear ".$name."! In your age fatality rate of corona virus is 24.8%";
}else{
	echo "Sorry data not found";
}
echo "<br />Hi ".$name.", If you feel very sick, Go to the clinic.";
echo "<br />According to <a href='https://www.ncdc.gov.ng' target='blank_'>ncdc.gov.ng</a> <br /><br />";
echo "<b>Your personal details</b><br />"."Name: ".$name."<br />"."Age: ".$age."yrs"."<br />Gender: ".$gender."<br />Your location: ".$location."<br />Contact: ".$contact."";

echo "<br /><br /><b>Below is your medical checkup report for COVID-19, ".$name."</b> <br /><br />";

if ($symptoms_a==null) {
	echo "Do you have fever?: "."no symptoms of fever<br />";
}elseif ($symptoms_a==$symptoms_a) {
	echo "".$symptoms_a."<br />";
}if ($symptoms_b==null) {
	echo "Do you have cough?: "."no symptoms of cough<br />";
}elseif ($symptoms_b==$symptoms_b) {
	echo "".$symptoms_b."<br />";
}if ($symptoms_c==null) {
	echo "Do you have respiratory stress?: "."no respiratory stress<br />";
}elseif ($symptoms_c==$symptoms_c) {
	echo "".$symptoms_c."<br />";
}if ($symptoms_d==null) {
	echo "Do you feel tired?"."not feeling tired<br />";
}elseif ($symptoms_d==$symptoms_d) {
	echo "".$symptoms_d."<br />";
}if ($symptoms_e==null) {
	echo "Do you have aches and pains?: "."no aches and pains<br />";
}elseif ($symptoms_e==$symptoms_e) {
	echo "".$symptoms_e."<br />";
}if ($symptoms_f==null) {
	echo "Do you have nasal congestion or running nose?: "."no nasal congestion or running nose<br />";
}elseif ($symptoms_f==$symptoms_f) {
	echo "".$symptoms_f."<br />";
}if ($symptoms_g==null) {
	echo "Do you feel cold?: "."not feeling cold<br />";
}elseif ($symptoms_g==$symptoms_g) {
	echo "".$symptoms_g."<br />";
}if ($symptoms_h==null) {
	echo "Is your body temperature high?: "."no high body temperature<br />";
}elseif ($symptoms_h==$symptoms_h) {
	echo "".$symptoms_h."<br />";
}if ($symptoms_i==null) {
	echo "Are you experiencing fatigue?: "."no fatigue<br />";
}elseif ($symptoms_i==$symptoms_i) {
	echo "".$symptoms_i."<br />";
}if ($symptoms_j==null) {
	echo "Do you have difficulty in breathing?: "."no difficulty in breathing<br />";
}elseif ($symptoms_j==$symptoms_j) {
	echo "".$symptoms_j."<br />";
}
/**
echo "".$symptoms_a."<br />".$symptoms_b."<br />".$symptoms_c."<br />".$symptoms_d."<br />".$symptoms_e."<br />".$symptoms_f."<br />".$symptoms_g."<br />".$symptoms_h."<br />".$symptoms_i."<br />".$symptoms_j."";
**/
echo "<br /><b>Important tips to prevent it:</b><br /><ol><li>Stay at home </li><li>Use face mask</li><li>Wash your hands with soap, or use alcohol-base hand rub kills viruses that may be on your hands </li><li>Maintain social distancing </li><li>Avoid touching your eyes, nose and mouth</li><li>Cover your mouth with your elbow when coughing, or if you use tissue paper make sure you discard it properly.</li></ol>";

//echo "<button class='btn btn-lg  btn-outline-success' type='submit' style='margin-left:25px;'  onclick='window.print()'><i class='fa fa-print'></i> Print this page</button>";
?>
<button class='btn btn-lg  btn-outline-success' type='submit' style='margin-left:25px;'  onclick='window.print()'><i class='fa fa-print'></i> Print this page</button>
</p>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="asset/js/jquery-slim.min.js"><\/script>')</script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/all.js"></script>
    <script src="asset/js/bootstrap.js"></script>
