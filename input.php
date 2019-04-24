<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Irfan P" />
	<title>OOP Input Data</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
<body>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper blue darken-1">
      Aplikasi To Do List
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <li><a href="#" target="_blank">About</a></li>
      </ul>
    </div>
  </nav>
</div>
<br />
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">airplay</i></b> Latihan CRUD OOP</h5><br />
      <form action="proses.php?aksi=tambah" method="post">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nama" id="nama" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">room</i>
          <input id="icon_telephone" type="text" name="alamat" id="alamat"  class="validate">
          <label for="icon_telephone">Alamat</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <input id="icon_telephone" type="text" name="usia" id="usia"  class="validate">
          <label for="icon_telephone">Umur</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">message</i>
          <input id="icon_telephone" type="email" name="email" id="email"  class="validate">
          <label for="icon_telephone">Email</label>
        </div>
        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <input class="btn waves-effect waves-light" type="submit" value="Simpan">
        </div>
      
    </form>
    </div>
</div>  
<footer class="page-footer blue darken-1">
          <div class="footer-copyright">
            <div class="container">
           Irfan Prasetyo | Copyright � 2018
            
            </div>
          </div>
        </footer>
        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>