<?php include 'database.php';?>
<?php
date_default_timezone_set("Asia/Kolkata");
$RegistrationTime="";
$solo_dance="";
$group_dance="";
$group_name="";
$dancers_count="";
$cadsing="";
$cadband="";
$band_name="";
$mem_count="";
$cadfashion="";
$mime="";
$crew_name="";
$crew_count="";
$cadmovie="";
$movie_name="";
$tamiltalk="";
$englishtalk="";
$artist="";
$kolam="";
$kolam_team="";
$kavidhai="";
$poem="";
$katturai="";
$essay="";
$irumugan="";
$photography="";
$pName="";
$pMail="";
$phone=0;
$phone1=0;
$pCollege="";
$pCourse="";
$pDept="";
$RegistrationTime=date("d-m-Y h:i:sa");
// $pName=$_POST['pName'];
// $pMail=$_POST['pMail'];
// $phone=$_POST['phone'];
// $phone1=$_POST['phone1'];
// $pCollege=$_POST['pCollege'];
// $pCourse=$_POST['pCourse'];
// $pDept=$_POST['pDept'];

if (isset($_POST['pName']))
{
          $pName=$_POST['pName'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['pMail']))
{
          $pMail=$_POST['pMail'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['phone']))
{
          $phone=$_POST['phone'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['phone1']))
{
          $phone1=$_POST['phone1'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['pCollege']))
{
          $pCollege=$_POST['pCollege'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['pCourse']))
{
          $pCourse=$_POST['pCourse'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['pDept']))
{
          $pDept=$_POST['pDept'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['soloDance']))
{
          $solo_dance=$_POST['soloDance'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['groupDance']))
{
          $group_dance=$_POST['groupDance'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['groupName']))
{
          $group_name=$_POST['groupName'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['dancersCount']))
{
          $dancers_count=$_POST['dancersCount'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['soloSinging']))
{
          $cadsing=$_POST['soloSinging'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['bandSinging']))
{
          $cadband=$_POST['bandSinging'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['bandName']))
{
          $band_name=$_POST['bandName'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['memCount']))
{
          $mem_count=$_POST['memCount'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['fashionShow']))
{
          $cadfashion=$_POST['fashionShow'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['mime']))
{
          $mime=$_POST['mime'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['mCrewName']))
{
          $crew_name=$_POST['mCrewName'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['mCount']))
{
          $crew_count=$_POST['mCount'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['sFilm']))
{
          $cadmovie=$_POST['sFilm'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['sFilmName']))
{
          $movie_name=$_POST['sFilmName'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['tamilSpeech']))
{
          $tamiltalk=$_POST['tamilSpeech'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['englishSpeech']))
{
          $englishtalk=$_POST['englishSpeech'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['drawing']))
{
          $artist=$_POST['drawing'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['rangoli']))
{
          $kolam=$_POST['rangoli'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['rangoliTeam']))
{
          $kolam_team=$_POST['rangoliTeam'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['kavidhai']))
{
          $kavidhai=$_POST['kavidhai'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['poem']))
{
          $poem=$_POST['poem'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['katturai']))
{
          $katturai=$_POST['katturai'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['essay']))
{
          $essay=$_POST['essay'];// Instructions if $_POST['value'] exist
}

if (isset($_POST['irumugan']))
{
          $irumugan=$_POST['irumugan'];// Instructions if $_POST['value'] exist
}
if (isset($_POST['photography']))
{
          $photography=$_POST['photography'];// Instructions if $_POST['value'] exist
}
//Execute the query
$sqlda="INSERT INTO participants(
  RegistrationTime,
  pName,
  pMail,
  phone,
  phone1,
  pCollege,
  pCourse,
  pDept,
  soloDance,
  groupDance,
  groupName,
  dancersCount,
  soloSinging,
  bandSinging,
  bandName,
  memCount,
  fashionShow,
  mime,
  mCrewName,
  mCount,
  sFilm,
  sFilmName,
  tamilSpeech,
  englishSpeech,
  drawing,
  rangoli,
  rangoliTeam,
  kavidhai,
  poem,
  katturai,
  essay,
  irumugan,
  photography
) VALUES (
  '$RegistrationTime',
  '$pName',
  '$pMail',
  '$phone',
  '$phone1',
  '$pCollege',
  '$pCourse',
  '$pDept',
  '$solo_dance',
  '$group_dance',
  '$group_name',
  '$dancers_count',
  '$cadsing',
  '$cadband',
  '$band_name',
  '$mem_count',
  '$cadfashion',
  '$mime',
  '$crew_name',
  '$crew_count',
  '$cadmovie',
  '$movie_name',
  '$tamiltalk',
  '$englishtalk',
  '$artist',
  '$kolam',
  '$kolam_team',
  '$kavidhai',
  '$poem',
  '$katturai',
  '$essay',
  '$irumugan',
  '$photography'
)";
mysqli_query($connect,$sqlda);

if(mysqli_affected_rows($connect) > 0){
	header("Location: https://testingtheboss.000webhostapp.com/demon/thankyou.html");
	exit();
	/*echo "<p>Participant Added</p>";
	echo "<a href=\"index.php\">Submit another response</a>";*/
} else {
	echo "Participant not added<br />";
	echo mysqli_error ($connect);
}
