<!DOCTYPE html>
<html>
<head>
	<?php
		if ($this->session->flashdata('alert')=='sukses_daftar'){
			echo "<script>alert('Sukses Daftar');</script>";
		}else if($this->session->flashdata('alert')=='gagal_login'){
			echo "<script>alert('Username / Password Salah');</script>";
		}
	?>
	<title style="text-align:center;">Coffee Master</title>
	<link rel="icon" type="img/png" href="<?php echo base_url(); ?>asset/img/cf.png">
	<!-- Bootstrap CSS Library Here -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- CSS rel Here -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
	<!-- JQuery here -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/bootstable.js"></script>
	<!-- Bootstrap JS Library Here -->
	<!-- <script src="js/bootstrap.js"></script> -->
</head>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navibar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>">Coffee Master</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="navibar">
					<ul class="nav navbar-nav">
						<li><a id="sc1">Article</a></li>
						<li><a id="sc2">Product</a></li>
						<li><a id="sc3">Help</a></li>
						<li><a id="sc4">About us</a></li>
						<?php
							if($this->session->userdata('nama')){
								echo '<li><a href="http://localhost/Sebut/index.php/Akun/logout" id="sc5">Logout</a></li>';
							}else{
								echo '<li><a id="sc5">Sign In / Sign Up</a></li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
<body>
	<div id="section1" class="container-fluid">
		<div class="content-home">
		<h4><small>RECENT POSTS</small></h4>
      	<hr>
		<h2>Lorem Blogging</h2>
		<h5><span class="glyphicon glyphicon-time"></span> Post by wtrey, Feb 28, 2018.</h5>
		<h5><span class="label label-success">Lorem</span></h5><br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<hr>
		<div class="commentbox-app">
			<div class="container">
				<h1 class="heading">Leave a Comment:</h1>
				<div class="clearfix">
						<form id="comment-form">
							<textarea type="text" id="comment-input" rows="3" class="form-control" placeholder="Masukkan Komentar Anda"></textarea>
							<button type="submit" class="btn btn-success">Submit</button>
						</form>
				</div>

				<ul id="comment-stream" class="comment-stream"></ul>
				<button type="submit" class="btn-danger" name="button" id="remove-all">Remove</button>
			</div>
		</div>
		<br><br>
		</div>
	</div>
	<div id="section2" class="container-fluid">
	  <div class="content-home">
		<div class="row">
			<div class="container">
			<div class="col-md-5">
				<h4>Our Product</h4>
      			<hr>
				<form style="text-align: center;">
					<input type="button" id="btn-menu" name="" value="Breakfast">&nbsp;&nbsp;&nbsp;<input type="button" id="btn-menu" name="" value="Lunch">
					<br><br>
					<input type="button" id="btn-menu" name="" value="Coffee">&nbsp;&nbsp;&nbsp;<input type="button" id="btn-menu" name="" value="Serve">
				</form>
			</div>
			<div class="col-md-7">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			</div>
		</div>
		<br><br>
		</div>
	</div>
	<div id="section3" class="container-fluid">
		<div class="content-home">
			<h3>Help</h3>
			<div>
				<?php
					$attribute3 = array('name' => 'keluh_form','id' => 'keluh_form');
					echo form_open('Akun/add',$attribute3);
				?>
				<center>
					<input type="text" class="form-control" value="<?=$this->session->userdata('nama'); ?>" style="margin-top:5%;width:70%" disabled>
					<input type="hidden" name="nama" class="form-control" value="<?=$this->session->userdata('nama'); ?>" id="nama" required>
					<input type="text" class="form-control" value="<?=$this->session->userdata('username'); ?>" style="margin-top:2%;width:70%" disabled>
					<input type="hidden" name="username" class="form-control" value="<?=$this->session->userdata('username'); ?>" id="username" required>
					<input class="form-control" type="text" name="keluhan" placeholder="Keluhan" style="margin-top:2%;width:70%">
					<button type="submit" name="submit" class="btn btn-success" style="margin-top:1%;width:20%;margin-bottom:3%;">Submit</button>
				</center>
				<?php echo form_close(); ?>
			</div>
			<table id="tabelkeluhan" class="table table-striped table-bordered" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Username User</th>
						<th>Keluhan</th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						foreach ($keluhan as $kel) {
						?>
						<tr>
							<td><?php echo $no++;?></td>
							<td><?php echo $kel->nama;?></td>
							<td><?php echo $kel->username; ?></td>
							<td><?php echo $kel->keluhan; ?></td>
							<td style="text-align: center;">
								<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?=$kel->id;?>"><i class="glyphicon glyphicon-pencil"></i></button>
								<button class="btn btn-sm btn-danger" data-toggle="modal" onclick="location.href = '<?php echo base_url('index.php/Akun/delete/'.$kel->id) ?>'"><i class="glyphicon glyphicon-trash"></i></button>
							</td>
						</tr>
						<div id="edit<?=$kel->id;?>" class="modal fade" role="dialog" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="color:#000">
										<button type="button" class="close" data-dismiss="modal"></button>
										<h4 class="modal-title">Edit Keluh Kesah</h4>
									</div>
									<?php echo form_open("Akun/edit"); ?>
									<div class="modal-body" style="color:#000">
										<div class="form-group">
											<label class="control-label" for="keluhan">Keluhan</label>
											<input type="text" name="keluhan" class="form-control" value="<?=$kel->keluhan;?>" id="keluhan" required>
											<input type="hidden" name="id" value="<?=$kel->id;?>">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
										<button type="submit" class="btn btn-primary" name="edit" value="Edit">Submit</button>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div id="section4" class="container-fluid">
	  <h1>About us</h1>
	  <div id="formlogin" class="row" style="padding-top:30px;">
			<div class="col-sm-12" style="background-color:#ffffffa6;border-radius:4px">
				<h1 style="color:#4D4D4D">Coffee Master</h1>
				<p style="color:#4D4D4D"><img src="<?php echo base_url(); ?>asset/img/cf.png" style="float:left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<div id="formlogin" class="row">
			<div class="col-sm-12" style="background-color:#c49872a6;border-radius:4px;">
				<center style="margin-top:2%">
					<div class="col-sm-4">
						<img class="img-circle" src="<?php echo base_url(); ?>asset/img/sanji.jpg" style="width:40%;height:45%;">
						<h2>Ray Alam</h2>
					</div>
					<div class="col-sm-4">
						<img class="img-circle" src="<?php echo base_url(); ?>asset/img/zoro.jpg" style="width:40%;height:45%;">
						<h2>Yono Triwi</h2>
					</div>
					<div class="col-sm-4">
						<img class="img-circle" src="<?php echo base_url(); ?>asset/img/luffy.jpg" style="width:40%;height:45%;">
						<h2>Fanani Amar</h2>
					</div>
				</center>
			</div>
		</div>
	</div>
	<div id="section5" class="container-fluid">
		<h1>Sign In / Sign Up</h1>
		<div id="formlogin" class="row" style="padding-top:30px">
			<div class="col-sm-6" style="background-color:#ffffffa6;border-radius:4px">
				<h1 style="color:black;font-family: curve;">Sign In</h1>
					<center>
						<?php
							$attribute = array('name' => 'login_form','id' => 'login_form');
							echo form_open('Akun/cek_login',$attribute);
						?>
						<input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Masukkan E-Mail" style="margin-top:5%;width:70%" required>
						<input type="password" class="form-control" name="password" placeholder="Masukkan kata sandi" style="margin-top:2%;width:70%" required>
						<button type="submit" name="submit" class="btn btn-success" style="margin-top:2%;width:40%;margin-bottom:5%;">Masuk</button>
						<?php
							echo form_close();
						?>
					</center>
			</div>
			<div class="col-sm-6" style="background-color: #c49872a6;border-radius:4px">
				<h1 style="color:black;font-family: curve;">Register</h1>
				<center>
					<?php
						$attribute2 = array('name' => 'daftar_form','id' => 'daftar_form');
						echo form_open('Akun/daftar_akun',$attribute2);
					?>
					<input type="text" name="namadep" class="form-control" pattern="[a-zA-Z]+" placeholder="Nama Depan" style="margin-top:5%;width:70%" required>
					<input type="text" name="namabel" class="form-control" pattern="[a-zA-Z]+" placeholder="Nama Belakang" style="margin-top:2%;width:70%" required>
					<input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" style="margin-top:2%;width:70%" required>
					<input type="text" name="username" class="form-control" placeholder="Username" style="margin-top:2%;width:70%" required>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" style="margin-top:2%;width:70%" required>
					<input type="password" name="password2" class="form-control" id="confirm_password" placeholder="Ulangi Password" style="margin-top:2%;width:70%" required>
					<script type="text/javascript">
						var password = document.getElementById("password");
						var confirm_password = document.getElementById("confirm_password");
						function validatePassword(){
							if(password.value != confirm_password.value) {
								confirm_password.setCustomValidity("Passwords Don't Match");
							} else {
								confirm_password.setCustomValidity('');
							}
						}
						password.onchange = validatePassword;
						confirm_password.onkeyup = validatePassword;
					</script>
					<button type="submit" name="submit" class="btn btn-success" style="margin-top:2%;width:40%;margin-bottom:5%;">Daftar</button>
					<?php
						echo form_close();
					?>
				</center>
			</div>
		</div>
	</div>
	<div id="home" class="container-fluid">
		<!-- <div class="content-home">
	  	<h4><small>RECENT POSTS</small></h4>
      	<hr>
		<h2>Lorem Blogging</h2>
		<h5><span class="glyphicon glyphicon-time"></span> Post by wtrey, Feb 28, 2018.</h5>
		<h5><span class="label label-success">Lorem</span></h5><br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<hr>
	    <h4>Leave a Comment:</h4>
		<form role="form">
		<div class="form-group">
		<textarea class="form-control" rows="3" required></textarea>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
		</form>
		<br><br>
		</div> -->
		<div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        	<li class="active" data-target="carousel1" data-slide-to="0"></li>
          <li data-target="carousel1" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
        	<div class="item active">
            	<img style="width:70%;margin:0 auto" src="<?php echo base_url(); ?>asset/img/Coffeer.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>Khasiat Kopi Robusta</h3>
                  <p>Kopi dataran rendah</p>
                </div>
            </div>
            <div class="item">
            	<img style="width:70%;margin:0 auto" src="<?php echo base_url(); ?>asset/img/coffeein.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>Khasiat Kopi Arabica</h3>
                    <p>Kopi dataran tinggi</p>
                </div>
            </div>
        </div>
        <a href="#carousel1" class="carousel-control left" data-slide="prev" role="button">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel1" class="carousel-control right" data-slide="next" role="button">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
	</div>
	<!-- <div class="ac-subitem" style="height: 400px;  margin-top: -100px;">
		<span class="ac_close"></span>
		<h2>SSO Login</h2>
		<ul>
		<li>Single Account, Single Sign On login</li>
		<li>
			<form name="loginform" id="" method="POST">
				<input type="text" style="width:100%;color:#aaa" name="textUsername" id="textUsername" placeholder="Single Account Username" class="form-poshytip  input-text" title="Masukkan single account username">
				<input type="password" style="width:100%;color:#aaa" name="textPassword" id="textPassword" placeholder="Password" class="form-poshytip  input-text" title="Masukkan single account password">
				<br>
				<br>
				<input type="submit" name="submit" id="submit" class="buttonLogin" style="width:80px;" value="Login">
				<br><br><div class="box"><a id="link2017" style="text-transform: none !important;color:#fff;" href="/activation/forgotsso.php">Forgot password?</a></div>
			</form>
		</li>
		</ul>
	</div>-->
	<script type="text/javascript">
		 $(document).ready(function(){
    $("a").click(function(){
      var a=1;
      while (a<6){
        $("#section"+a).css("z-index","0");
        a++;
      };
      $("#home").css("z-index","0");
      var i=$(this).html();
      if (i=="Article"){
        $("#section1").css("z-index","2");
      }
      else if (i=="Product"){
        $("#section2").css("z-index","2");
      }
      else if (i=="Help"){
        $("#section3").css("z-index","2");
      }
      else if (i=="About us"){
        $("#section4").css("z-index","2");
      }
			else if (i=="Sign In / Sign Up"){
				$("#section5").css("z-index","2");
			}
    });
  });
	</script>
	<script type="text/javascript">
		function supportsLocalStorage () {
		  return typeof localStorage !== 'undefined';
		}

		function getComments() {
		  return JSON.parse(localStorage.getItem('comments')) || [];
		}

		function saveComment (comments, commentStr, action) {
		  if (!commentStr && comments.indexOf(commentStr) < 0) {
		    action(err);
		  }

		  action(undefined, commentStr);

		}


		function appendToStream(stream, str, index) {
		  var li = document.createElement('LI');
		  li.setAttribute('data-index', index);
		  li.innerHTML = str + ' --- Anonymous ';
		  stream.appendChild(li);
		}

		function loadComments(stream) {
		  var comments = getComments();
		  if (comments) {
		    for (var i = 0; i < comments.length; i++) {
		      appendToStream(stream, comments[i], i);
		    }
		  }
		}

		function clearComments(stream) {
		  localStorage.removeItem('comments');
		  stream.innerHTML = '';
		}

		if (supportsLocalStorage()) {
		  initApp();
		}

		function initApp() {
		  var commentForm = document.getElementById('comment-form'),
		      commentList = document.getElementById('comment-stream'),
		      commentInput = document.getElementById('comment-input'),
		      removeAll = document.getElementById('remove-all');

		  loadComments(commentList);

		  removeAll.addEventListener('click', function() {
		    clearComments(commentList);
		  }, true);

		  commentForm.addEventListener('submit', function (event) {
		    event.preventDefault();
		    var commStr = commentInput.value,
		        comments = getComments();

		    saveComment(comments, commStr, function(err, value) {

		      if (err) {
		        return;
		      }

		      comments.push(value);
		      localStorage.setItem('comments', JSON.stringify(comments));
		      appendToStream(commentList, commStr);
		      commentInput.value = '';
		    });

		  }, true);
		}
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#tabelkeluhan').DataTable({"dom": '<"top"fl>rt<"bottom"ip><"clear">'});
		} );
		$('.modal').click(function(event){
			$(event.target).modal('hide');
		});
	</script>
</body>
</html>
