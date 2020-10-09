<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="./css/jaehyun.css">
	
	 <!-- 폰트 -->
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Do+Hyeon&display=swap" rel="stylesheet">
  <!-- 아이콘 -->
  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <!-- 자바스크립트 -->


	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="/resource/css/bootstrap.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">

</STYLE>
<script src="./js/recommend.js">

</script>
</head>
<body>
	<nav class="navbar fixed-top">
		<p class="navp">Smart PT</p>
		<a href="userInsert3.html"><i class="fa fa-user-circle navi"></i></a>
	</nav>
	
	<br><br>
	<div clas="container" style="text-align: center;">
		<i class="fa fa-spoon titlei" aria-hidden="true"></i>
		<p class="title">식단추천</p>
	</div>
	<br><br><br>

	<div class="card">
		<div class="card-header">
			영양소
		</div>
		<div class="card-body">

			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p class="pr" align="left;"> Kcal  </p>
					
				</div>	

				<div class="progress rounded-pill" style="height:40px;">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p  style="font-size:20px; font-weight: bold;"> 1560/2600 </p>
					</div>
				</div>
			</div>

			<br><br>

			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p class="pr" align="left;"> 탄  </p>
					
				</div>	

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar" style="width: 62.5%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p class="pr"> 250/400 </p>
					</div>
				</div>


			</div>
			<br><br>


			<div class="container">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p class="pr" align="left;"> 단  </p>
					
				</div>	

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped bg-success progress-bar-animated"role="progressbar" style="width: 57%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p class="pr"> 80/140 </p>
					</div>
				</div>
			</div>


			<br><br>

			<div class="container" style="font-weight: bold;">
				<div class="container" style="float:left; width: 15%;text-align: center;">
					<p class="pr"> 지  </p>

				</div>	

				<div class="progress rounded-pill" style="height:30px;">
					<div class="progress-bar progress-bar-striped bg-info progress-bar-animated"role="progressbar" style="width: 42%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
						<p class="pr"> 30/70 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<Br><br>
	




	<div class="card">
		<div class="card-header">
			아침
		</div>
		<div class="card-body">

			<p> 쌀밥 300Kcal <br> 불고기 471Kcal <br> 된장국 78Kcal  </p>

		</div>
	</div>
	

	<Br><br>

	<div class="card">
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
					<select name="selectset" onchange="SetDisplay(this.form)" >
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

	<div class="card">
		<div class="card-header">
			저녁
		</div>
		<div class="card-body">

			<p> 쌀밥 300Kcal <br> 불고기 471Kcal <br> 된장국 78Kcal  </p>

		</div>
	</div>


	<br><br>

  <nav class="navbar fixed-bottom navd">
    <a href="index.php">
      <div class="navIcons" style="text-align:center;" >
        <br/>
        <i class="navIcon fas fa-home navdi" id="navHome" aria-hidden="true"></i>
        <p class="navName navdp"> Home </p>
      </div>
    </a>
    <a href="recommend.php">
      <div class="navIcons" style="text-align:center;">
        <br/>
        <i class="navIcon fas fa-utensils navdi" id="navDiet" aria-hidden="true"></i>
        <p class="navName navdp"> Diet </p>
      </div>
    </a>
    <a href="miband.php">
      <div class="navIcons" style="text-align:center;">
        <br/>
        <i class="navIcon fas fa-heartbeat navdi" id="navMiband" aria-hidden="true"></i>
        <p class="navName navdp"> Miband </p>
      </div>
    </a>
    <a href="static.php">
      <div  class="navIcons" style="text-align:center;">
        <br/>
        <i class="navIcon far fa-chart-bar navdi" id="navChart" aria-hidden="true" ></i>
        <p class="navName navdp"> Chart </p>
      </div>
    </a>
  </nav>



</body>
</html>