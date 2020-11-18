<?= $this->extend('layouttucil/template'); ?>

<?= $this->section('content'); ?>
<div class="judul">
	<h1>Mau Sendal?</h1>
	<p>Boleh dipilih sendal nya...</p>
</div>
<div class="wrap">
	<div class="card" style="width: 18rem;">
 		<img src="/img/slipon.jpg" class="card-img-top" alt="Sendal Slip On">
  		<div class="card-body">
    		<h5 class="card-title">Sendal Slip On</h5>
    		<p class="card-text">Ini namanya sendal slip-on, karena make nya cuma tinggal diselipin kakinya, terus jalan deh.</p>
    		<a href="/tucil/sendalslipon" class="btn btn-primary">Detail</a>
  		</div>
	</div>
	<div class="card" style="width: 18rem;">
 		<img src="/img/jepit.jpg" class="card-img-top" alt="Sendal Jepit">
  		<div class="card-body">
    		<h5 class="card-title">Sendal Jepit</h5>
    		<p class="card-text">Ini namanya sendal jepit, karena ya make nya dijepit, kalo ditempel berarti namanya sendal tempel.</p>
    		<a href="/tucil/sendaljepit" class="btn btn-primary">Detail</a>
  		</div>
	</div>
	<div class="card" style="width: 18rem;">
 		<img src="/img/gunung.jpg" class="card-img-top" alt="Sendal Gunung">
  		<div class="card-body">
    		<h5 class="card-title">Sendal Gunung</h5>
    		<p class="card-text">Ini namanya sendal gunung, tapi bisa juga kok make sendal ini di laut sambil berenang, tenang aja.</p>
    		<a href="/tucil/sendalgunung" class="btn btn-primary">Detail</a>
  		</div>
	</div>
</div>
<?= $this->endSection(); ?>