<!Doctype html>
<html lang='en'>
	<head>
		<title>Tugas1Prak</title>
		<link rel=stylesheet href="style.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<div class="neon">
			  <span class="text" data-text="CALENDER">KALENDER</span>
			  <span class="gradient"></span>
			  <span class="spotlight"></span>
			</div>
		</div>
		<div class="content">
		<?PHP
			include "fungsi.inc"; //pemanggulan file include u/ fungsi
			//deklarasi hari libur;
			$holidays = array(
						"2019-1-1"=>"Tahun Baru Masehi",
						"2019-2-5"=>"Tahun Baru Imlek",
						"2019-3-7"=>"Hari Raya Nyepi",
						"2019-4-3"=>"Isra Miraj",
						"2019-4-19"=>"Jumat Agung",
						"2019-5-1"=>"Hari Buruh",
						"2019-5-19"=>"Hari Raya Waisak",
						"2019-5-30"=>"Kenaikan Isa Almasih",
						"2019-6-1"=>"Hari Lahir Pancasila",
						"2019-6-3"=>"Cuti Bersama",
						"2019-6-4"=>"Cuti Bersama",
						"2019-6-5"=>"Hari Raya Idul Fitri",
						"2019-6-6"=>"Hari Raya Idul Fitri",
						"2019-6-7"=>"Cuti Bersama Lebaran",
						"2019-8-11"=>"Idul Adha", 
						"2019-8-17"=>"Tahun Baru Hijriyah",
						"2019-9-1"=>"Tahun Baru Hijriyah",
						"2019-11-9"=>"Maulid Nabi",
						"2019-12-24"=>"Cuti Bersama",
						"2019-12-25"=>"Hari Natal");
			//penulisan setiap bulan
			for ($i=1; $i<=12; $i++){
				echo ("<div class='bulan$i'>");
				display_month($i, 2019, $holidays);
				echo ("</div>");
			}
			//penulisan setiap hari libur
			echo ("<div class='holiday'>
					<h3>Note:</h3><blockquote>");
			foreach($holidays as $tgl => $event){
				echo("$tgl => $event <br/>");
			}
			echo ("</blockquote></div>");
		?>
		</div>
	</body>
</html>