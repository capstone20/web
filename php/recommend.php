<!DOCTYPE html>
<html>

<head>
	<title></title>


	<link rel="stylesheet" href="/resource/css/bootstrap.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
	<meta charset="utf-8">

	<style>
		body {
			padding-top: 180px;
			padding-bottom: 120px;
		}

		.inav:hover {
			-ms-transform: scale(1.5);
			-webkit-transform: scale(1.5);
			transform: scale(1.5);
			opacity: 0.7;
		}
	</style>


	</STYLE>
	<script>
		<!--
		function SetDisplay(frm) {

			var set = frm.selectset.selectedIndex;

			switch (set) {
				case 0:
					frm.set.value = '칼로리에 맞는 Set가 표시됩니다.';
					break;
				case 1:
					frm.set.value = 'Set1';
					break;
				case 2:
					frm.set.value = 'Set2';
					break;
				case 3:
					frm.set.value = 'Set3';
			}

			return true;
		}
		//
		-->
		function
		Display() {
		document.getElementById("setKcal").style.display = 'block';
		}
	</script>
</head>

<body>
	<nav class="navbar fixed-top" style="background-color:#8DA5BD">
		<p style="font-size:90px; font-weight:bold; color:white;">Smart PT</p>
		<i class="fa fa-user-circle" style="font-size:100px; color:white;"></i>
	</nav>

	<br><br>
	<div clas="container" style="text-align: center;">
		<i class="fa fa-spoon" aria-hidden="true" style="font-size:300px; color:#8DA5BD; float: center;"></i>
		<p style="float: center; font-size: 100px;">식단추천</p>
	</div>
	<br><br><br>

	<div class="card" style="margin : 0 auto; width: 80%;">
		<div class="card-header">
			영양소
		</div>
		<div class="card-body">

			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p style="font-size:20px; font-weight: bold;" align="left;"> Kcal </p>

				</div>

				<div class="progress rounded-pill" style="height:40px;">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p style="font-size:20px; font-weight: bold;"> 1560/2600 </p>
					</div>
				</div>
			</div>

			<br><br>

			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p style="font-size:20px; font-weight: bold;" align="left;"> 탄 </p>

				</div>

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 62.5%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p style="font-size:20px; font-weight: bold;"> 250/400 </p>
					</div>
				</div>


			</div>
			<br><br>


			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p style="font-size:20px; font-weight: bold;" align="left;"> 단 </p>

				</div>

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 57%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p style="font-size:20px; font-weight: bold;"> 80/140 </p>
					</div>
				</div>
			</div>


			<br><br>

			<div class="container" style="font-weight: bold;">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p style="font-size:20px;" align="left;"> 지 </p>

				</div>

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 42%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p style="font-size:20px;"> 30/70 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<Br><br>





	<div class="card" style="margin : 0 auto; width: 80%;">
		<div class="card-header">
			아침
		</div>
		<div class="card-body">

			<p> 쌀밥 300Kcal <br> 불고기 471Kcal <br> 된장국 78Kcal </p>

		</div>
	</div>


	<Br><br>

	<div class="card" style="margin : 0 auto; width: 80%;">
		<div class="card-header">
			점심
		</div>
		<div class="card-body">

			<form action="javascript:Display();">
				<input type="number" size="20">
				<button>입력</button>
			</form>


			<div id="setKcal" style="display: none;">
				<form>
					<select name="selectset" onchange="SetDisplay(this.form)">
						<option selected value=0>-선택하세요- </option>
						<option value=1>Set1</option>
						<option value=2>Set2</option>
						<option value=3>Set3</option>
					</select>
					<input name="set" type="text" size="50" maxlength="50">
				</form>
			</div>
		</div>
	</div>

	<Br><br>

	<div class="card" style="margin : 0 auto; width: 80%;">
		<div class="card-header">
			저녁
		</div>
		<div class="card-body">

			<p> 쌀밥 300Kcal <br> 불고기 471Kcal <br> 된장국 78Kcal </p>

		</div>
	</div>


	<br /><br /><br />
	<nav class="navbar fixed-bottom" style="background-color:white; box-shadow: 20px 20px 20px 20px #E6E6E6; padding-right:70px; padding-left:70px;">
		<a href="index.php">
			<div class="navIcons" style="text-align:center;">
				<br />
				<i class="navIcon fas fa-home" id="navHome" aria-hidden="true" style="font-size:60px; color:#BDBDBD;"></i>
				<p class="navName" style="color:#BDBDBD;"> Home </p>
			</div>
		</a>
		<a href="recommend.php">
			<div class="navIcons" style="text-align:center;">
				<br />
				<i class="navIcon fas fa-utensils" id="navDiet" aria-hidden="true" style="font-size:60px; color:#BDBDBD;"></i>
				<p class="navName" style="color:#BDBDBD;"> Diet </p>
			</div>
		</a>
		<a href="miband.php">
			<div class="navIcons" style="text-align:center;">
				<br />
				<i class="navIcon fas fa-heartbeat" id="navMiband" aria-hidden="true" style="font-size:60px; color:#BDBDBD;"></i>
				<p class="navName" style="color:#BDBDBD;"> Miband </p>
			</div>
		</a>
		<a href="static.php">
			<div class="navIcons" style="text-align:center;">
				<br />
				<i class="navIcon far fa-chart-bar" id="navChart" aria-hidden="true" style="font-size:60px; color:#BDBDBD;"></i>
				<p class="navName" style="color:#BDBDBD;"> Chart </p>
			</div>
		</a>
	</nav>



</body>

</html>