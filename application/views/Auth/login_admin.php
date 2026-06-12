<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Admin | Sistem Rumah Sakit</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>

body{
    margin:0;
    padding:0;
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#0f4c81,#1fb6ff);
}

.container-login{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.login-card{
    width:100%;
    max-width:1150px;
    background:rgba(255,255,255,.12);
    backdrop-filter:blur(18px);
    border-radius:30px;
    overflow:hidden;
    box-shadow:0 20px 45px rgba(0,0,0,.25);
}

.left-panel{
    background:
    linear-gradient(
        rgba(10,45,97,.82),
        rgba(18,122,204,.82)
    ),
    url('https://images.unsplash.com/photo-1587351021759-3e566b3db4f1?auto=format&fit=crop&w=1200&q=80');

    background-size:cover;
    background-position:center;

    color:white;
    padding:70px 50px;
    height:100%;
}

.left-panel h1{
    font-weight:800;
    font-size:40px;
}

.left-panel p{
    margin-top:20px;
    opacity:.92;
    line-height:1.8;
}

.icon-box{
    margin-top:35px;
}

.icon-box i{
    font-size:45px;
    margin-right:15px;
    color:#7fdcff;
}

.right-panel{
    background:white;
    padding:60px 45px;
}

.logo-circle{
    width:90px;
    height:90px;
    border-radius:50%;
    background:linear-gradient(135deg,#0f4c81,#1fb6ff);
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:35px;
    margin:auto;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.title{
    text-align:center;
    margin-top:20px;
    margin-bottom:35px;
}

.title h3{
    font-weight:700;
    color:#0f4c81;
}

.form-control{
    border-radius:15px;
    height:52px;
}

.input-group-text{
    border-radius:15px 0 0 15px;
}

.btn-login{
    background:linear-gradient(135deg,#0f4c81,#1fb6ff);
    border:none;
    border-radius:30px;
    height:52px;
    font-size:17px;
    font-weight:600;
    transition:.3s;
}

.btn-login:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 22px rgba(0,0,0,.18);
}

.bottom-link{
    text-align:center;
    margin-top:25px;
}

.bottom-link a{
    color:#0f4c81;
    font-weight:600;
}

.alert{
    border-radius:15px;
}

@media(max-width:991px){

.left-panel{
    display:none;
}

.right-panel{
    padding:40px 25px;
}

}

</style>

</head>

<body>

<div class="container-login">

<div class="login-card">

<div class="row no-gutters">

<!-- KIRI -->

<div class="col-lg-6">

<div class="left-panel">

<h1>
<i class="fas fa-hospital-alt"></i>
Sistem Rumah Sakit
</h1>

<p>
Selamat datang pada Sistem Informasi Rumah Sakit.
Login Admin digunakan untuk mengelola data pasien,
pendaftaran online, dokter spesialis, laporan,
serta jadwal pelayanan kesehatan.
</p>

<div class="icon-box">

<p>
<i class="fas fa-user-shield"></i>
Kelola Admin
</p>

<p>
<i class="fas fa-procedures"></i>
Data Pasien
</p>

<p>
<i class="fas fa-calendar-check"></i>
Pendaftaran Online
</p>

<p>
<i class="fas fa-file-pdf"></i>
Laporan PDF / CSV
</p>

</div>

</div>

</div>

<!-- KANAN -->

<div class="col-lg-6">

<div class="right-panel">

<div class="logo-circle">
<i class="fas fa-user-md"></i>
</div>

<div class="title">

<h3>LOGIN ADMIN</h3>

<p class="text-muted">
Silahkan masuk ke sistem rumah sakit
</p>

</div>

<?php if($this->session->flashdata('error')): ?>

<div class="alert alert-danger text-center">

<?= $this->session->flashdata('error'); ?>

</div>

<?php endif; ?>

<form method="post"
action="<?= site_url('auth/proses_admin');?>">

<div class="form-group">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
placeholder="Masukkan Username"
required>

</div>

<div class="form-group">

<label>Password</label>

<div class="input-group">

<input
type="password"
name="password"
id="password"
class="form-control"
placeholder="Masukkan Password"
required>

<div class="input-group-append">

<button
type="button"
class="btn btn-outline-secondary"
onclick="showPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<button
type="submit"
class="btn btn-primary btn-block btn-login">

<i class="fas fa-sign-in-alt"></i>
LOGIN ADMIN

</button>

</form>

<div class="bottom-link">

<a href="<?= site_url('auth/login_pasien');?>">

<i class="fas fa-user"></i>
Login Sebagai Pasien

</a>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function showPassword(){

var x=document.getElementById("password");

if(x.type==="password"){
    x.type="text";
}else{
    x.type="password";
}

}

</script>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>