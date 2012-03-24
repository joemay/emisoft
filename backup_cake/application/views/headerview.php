<div class="hdrl"></div>
<div class="hdrr"></div>

<h1><a href="<?= site_url("/emisoft/CategoriasController"); ?>">EMISOFT</a></h1>
<?= $this->load->view("NavigationView"); ?>

<p class="user">
<?= $this->session->userdata("usuario"); ?>| 
<a href="<?= site_url("LoginController/cerrarSesion"); ?>">Salir</a>

</p>
