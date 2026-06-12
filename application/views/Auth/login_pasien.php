
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>

Login Pasien | RS AZ-ZAHRA

</title>

<link
href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
rel="stylesheet">

<link
href="<?= base_url('assets/css/sb-admin-2.min.css');?>"
rel="stylesheet">

<style>

body{

margin:0;
padding:0;

font-family:'Segoe UI',sans-serif;

min-height:100vh;

background:
linear-gradient(
135deg,
#11998e,
#38ef7d
);

}

.wrapper{

min-height:100vh;

display:flex;

justify-content:center;

align-items:center;

padding:30px;

}

.login-card{

width:100%;

max-width:1150px;

overflow:hidden;

border-radius:35px;

background:
rgba(255,255,255,.15);

backdrop-filter:blur(18px);

box-shadow:
0 25px 50px
rgba(0,0,0,.25);

}

.left-side{

background:

linear-gradient(

rgba(5,70,55,.88),

rgba(17,153,142,.82)

),

url('https://images.unsplash.com/photo-1584515933487-779824d29309');

background-size:cover;

background-position:center;

padding:70px 50px;

color:white;

}

.left-side h1{

font-size:42px;

font-weight:800;

}

.left-side p{

margin-top:25px;

line-height:1.9;

font-size:17px;

}

.info-box{

margin-top:35px;

}

.info-box p{

font-size:17px;

}

.info-box i{

font-size:24px;

margin-right:10px;

color:#9dffe8;

}

.right-side{

background:white;

padding:50px;

}

.logo{

width:95px;

height:95px;

border-radius:50%;

margin:auto;

display:flex;

justify-content:center;

align-items:center;

background:

linear-gradient(

135deg,

#11998e,

#38ef7d

);

color:white;

font-size:36px;

}

.heading{

text-align:center;

margin-top:20px;

margin-bottom:30px;

}

.heading h3{

color:#11998e;

font-weight:800;

}

.form-control{

border-radius:15px;

height:54px;

}

.btn-login{

height:55px;

border:none;

border-radius:35px;

font-size:17px;

font-weight:700;

background:

linear-gradient(

135deg,

#11998e,

#38ef7d

);

}

.btn-login:hover{

transform:translateY(-2px);

}

.alert{

border-radius:15px;

}

.bottom-link{

text-align:center;

margin-top:25px;

}

.bottom-link a{

font-weight:700;

color:#11998e;

}

@media(max-width:991px){

.left-side{

display:none;

}

.right-side{

padding:35px 20px;

}

}

</style>

</head>

<body>

<div class="wrapper">

<div class="login-card">

<div class="row no-gutters">

<!-- LEFT -->

<div class="col-lg-6">

<div class="left-side">

<h1>

<i class="fas fa-heartbeat"></i>

Portal Pasien

</h1>

<p>

Silahkan login untuk melakukan
pendaftaran online,
memilih dokter spesialis,
mengatur jadwal kunjungan,
dan memantau status berobat
di RS AZ-ZAHRA.

</p>

<div class="info-box">

<p>

<i class="fas fa-user-plus"></i>

Registrasi Online Cepat

</p>

<p>

<i class="fas fa-user-md"></i>

Pilih Dokter Spesialis

</p>

<p>

<i class="fas fa-calendar-check"></i>

Atur Jadwal Kunjungan

</p>

<p>

<i class="fas fa-file-medical"></i>

Cek Status Pendaftaran

</p>

</div>

</div>

</div>

<!-- RIGHT -->

<div class="col-lg-6">

<div class="right-side">

<div class="logo">

<i class="fas fa-user-injured"></i>

</div>

<div class="heading">

<h3>

LOGIN PASIEN

</h3>

<p class="text-muted">

Masuk ke akun pasien anda

</p>

</div>

<?php if($this->session->flashdata('error')): ?>

<div class="alert alert-danger text-center">

<?= $this->session->flashdata('error');?>

</div>

<?php endif; ?>

<?php if($this->session->flashdata('success')): ?>

<div class="alert alert-success text-center">

<?= $this->session->flashdata('success');?>

</div>

<?php endif; ?>

<form
method="post"
action="<?= site_url('auth/proses_pasien');?>">

<div class="form-group">

<label>

Username

</label>

<input

type="text"

name="username"

class="form-control"

placeholder="Masukkan Username"

required>

</div>

<div class="form-group">

<label>

Password

</label>

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

onclick="lihatPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<button

type="submit"

class="btn btn-success btn-block btn-login">

<i class="fas fa-sign-in-alt"></i>

LOGIN PASIEN

</button>

</form>

<div class="bottom-link">

<p class="mt-4">

Belum punya akun?

<a href="<?= site_url('auth/register');?>">

Daftar Disini

</a>

</p>

<p>

<a href="<?= site_url('auth/login_admin');?>">

<i class="fas fa-user-shield"></i>

Login Sebagai Admin

</a>

</p>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function lihatPassword(){

var x=
document.getElementById(
'password'
);

if(x.type==="password")
{
x.type="text";
}
else
{
x.type="password";
}

}

</script>

<script
src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

<script
src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>

</html>
