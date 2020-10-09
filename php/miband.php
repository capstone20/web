<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/v4-shims.css">
  <link rel="stylesheet" href="/resource/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <meta charset="utf-8">
</head>
<style>
  body {
    padding-top: 120px;
    padding-bottom: 120px;
  }
	.inav:hover{
			-ms-transform: scale(1.5);
			-webkit-transform: scale(1.5);
			transform: scale(1.5);
			opacity: 0.7;
		}
  #today_exercise_div {
    margin: 5% 10%;
    height: 100px;
  }

  #notification_div {
    margin: 1% 0;
    display: inline;

  }

  #exercise_div {
    width: 70%;
    margin: 70px auto;
    /* width 가 지정되어있어서 가운데정렬이 먹히는것임. */
    background-color: yellow;
  }

  #exercise {
    padding: 5% 0;
    text-align: center;
  }

  .progress {

    width: 60%;
    margin: 0px auto;
  }
</style>

<body>
  <nav class="navbar fixed-top" style="background-color:#8DA5BD">
    <p style="font-size:90px; font-weight:bold; color:white;">Smart PT</p>
    <a href="userInsert3.html"><i class="fa fa-user-circle" style="font-size:100px; color:white;"></i></a>
  </nav>

  <br><br><br>
  <div class="card" style="margin : 0 auto; width: 70%;">
    <div class="card-header">
      오늘의 운동
    </div>
    <div class="card-body">
      <div class="container">
        <div style="height:100px; text-align:center;">
          <div>
            <i class="fas fa-walking" style="font-size:30px; margin: 0 0 0 20%; float:left;"></i>
            <p style="font-size:20px; font-weight:bold; float:left; margin: 0 40px;">걷기</p>
            <p> 3분 / 150 Kcal </p>
          </div>
          <div>
            <i class="fas fa-swimmer" style="font-size:30px; margin: 0 0 0 20%; float:left;"></i>
            <p style="font-size:20px; font-weight:bold; float:left; margin: 0 30px;">수영</p>
            <p> 2분 / 130 Kcal </p>
          </div>
          <div>
            <i class="fas fa-biking" style="font-size:30px; margin: 0 0 0 20%; float:left;"></i>
            <p style="font-size:20px; font-weight:bold; float:left; margin: 0 20px;">자전거</p>
            <p> 2분 / 130 Kcal </p>
          </div>
          <div>
            <i class="fas fa-swimmer" style="font-size:30px; margin: 0 0 0 20%; float:left;"></i>
            <p style="font-size:20px; font-weight:bold; float:left; margin: 0 20px;">줄넘기</p>
            <p> 2분 / 130 Kcal </p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container" style="margin:5% 0 0 15%;">
    <div class="progress rounded-pill" style="height:20px; float:left; width: 80%; margin-top:1%;">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
      </div>
    </div>
    <div class="container" style="width:20%; display:inline-block;">
      <p style="font-size:17px; margin-left:10%; "> 800/1400 Kcal</p>
    </div>
  </div>

  <div id="notification_div" style="position:absolute; right:10%; width:150px;">
    <i class="fas fa-exclamation-circle" style="color:red; float:left; font-size: 20px;"></i>
    <p style="font-size:15px;">총 278 Kcal 초과</p>
  </div>

  <div class="card" style="margin : 70px auto; width: 70%;">
    <div class="card-header">
      추천 운동
    </div>
    <div class="card-body">
      <div class="container">
        <div style="height:600px; text-align:center;">
          <div id="exercise">
            <h2 style="font-weight:bold;">걷기</h2>
            <p style="font-size:20px;"> 70 분 / 278 Kcal</p>
          </div>
          <div id="exercise">
            <h3 style="font-weight:bold;">수영</h3>
            <p style="font-size:20px;"> 70 분 / 278 Kcal</p>
          </div>
          <div id="exercise">
            <h3 style="font-weight:bold;">자전거</h3>
            <p style="font-size:20px;"> 70 분 / 278 Kcal</p>
          </div>
          <div id="exercise">
            <h3 style="font-weight:bold;">줄넘기</h3>
            <p style="font-size:20px;"> 70 분 / 278 Kcal</p>
          </div>
        </div>
      </div>
    </div>
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