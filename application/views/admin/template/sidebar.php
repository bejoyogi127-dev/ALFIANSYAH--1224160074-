<style>

.sidebar{
background:linear-gradient(180deg,#0B3C91,#0A58CA);
}

.sidebar .nav-item .nav-link{
padding:14px 18px;
margin:4px 10px;
border-radius:12px;
transition:.3s;
font-weight:600;
color:rgba(255,255,255,.85)!important;
}

.sidebar .nav-item .nav-link i{
margin-right:10px;
font-size:15px;
}

.sidebar .nav-item .nav-link:hover{
background:rgba(255,255,255,.15);
transform:translateX(4px);
color:#fff!important;
}

.sidebar .nav-item.active .nav-link{
background:#ffffff;
color:#0A58CA!important;
box-shadow:0 8px 20px rgba(0,0,0,.18);
}

.sidebar .nav-item.active .nav-link i{
color:#0A58CA!important;
}

.sidebar-heading{
color:#cfdfff!important;
font-size:11px;
letter-spacing:2px;
padding-left:18px;
margin-top:10px;
}

.sidebar-brand{
height:80px;
font-size:20px;
font-weight:800;
}

.sidebar-brand-icon{
font-size:28px;
}

.sidebar-divider{
border-color:rgba(255,255,255,.15);
}

</style>

<ul class="navbar-nav sidebar sidebar-dark accordion"
id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center"
href="<?= site_url('dashboard_admin');?>">

<div class="sidebar-brand-icon">
<i class="fas fa-hospital-alt"></i>
</div>

<div class="sidebar-brand-text mx-2">
RS AZ-ZAHRA
</div>

</a>

<hr class="sidebar-divider my-0">

<!-- DASHBOARD -->

<li class="nav-item <?= ($this->uri->segment(1)=='dashboard_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('dashboard_admin');?>">

<i class="fas fa-home"></i>

<span>Dashboard</span>

</a>

</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
MASTER DATA
</div>

<!-- PASIEN -->

<li class="nav-item <?= ($this->uri->segment(1)=='pasien_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('pasien_admin');?>">

<i class="fas fa-user-injured"></i>

<span>Data Pasien</span>

</a>

</li>

<!-- DOKTER -->

<li class="nav-item <?= ($this->uri->segment(1)=='dokter') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('dokter');?>">

<i class="fas fa-user-md"></i>

<span>Data Dokter</span>

</a>

</li>

<!-- PENDAFTARAN -->

<li class="nav-item <?= ($this->uri->segment(1)=='pendaftaran_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('pendaftaran_admin');?>">

<i class="fas fa-calendar-check"></i>

<span>Pendaftaran</span>

</a>

</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
LAPORAN
</div>

<li class="nav-item">

<a class="nav-link"
href="<?= site_url('laporan/csv');?>">

<i class="fas fa-file-csv"></i>

<span>Export CSV</span>

</a>

</li>

<li class="nav-item">

<a class="nav-link"
href="<?= site_url('laporan/pdf');?>">

<i class="fas fa-file-pdf"></i>

<span>Export PDF</span>

</a>

</li>

<hr class="sidebar-divider">

<!-- LOGOUT -->

<li class="nav-item <?= ($this->uri->segment(1)=='logout') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('logout');?>">

<i class="fas fa-sign-out-alt"></i>

<span>Logout</span>

</a>

</li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">