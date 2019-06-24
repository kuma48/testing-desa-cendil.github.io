<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul;?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/front/css/modern-business.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/front/css/bootstrap-flatly.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url()?>"><img class="img-brand" src="<?=base_url()?>assets/front/vendor/img/bg-icon.png" alt=""></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?=$this->uri->segment(1) == 'home' || $this->uri->segment(1) =='' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url()?>">Home</a>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'profil' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url()?>profil">Profil</a>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'potensi' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url()?>potensi">Potensi Desa</a>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'artikel' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url()?>artikel">Artikel</a>
          </li>
          <li class="nav-item dropdown <?=$this->uri->segment(2) == 'foto' || $this->uri->segment(2) =='video' ? 'active' : '' ?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGaleri" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Galeri
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownGaleri">
              <a class="dropdown-item <?=$this->uri->segment(2) == 'foto' ? 'active' : '' ?>" href="<?php echo site_url()?>galeri/foto">Galeri Foto</a>
              <a class="dropdown-item <?=$this->uri->segment(2) == 'video' ? 'active' : '' ?>" href="<?php echo site_url()?>galeri/video">Galeri Video</a>
            </div>
          </li>
          <li class="nav-item <?=$this->uri->segment(1) == 'kontak' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo site_url()?>kontak">Kontak Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <br />
    <br />