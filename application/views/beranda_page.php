<script type="text/javascript">
$(document).ready(function(){
	$("#lightSlider").lightSlider({
    	item: 1,
    	controls: false,
        auto: true,
        speed: 800,
        loop: true,
        pause: 4000,
        vertical:true,
        verticalHeight:330,
        vThumbWidth:100
    });
});
</script>

<div class="container-fluid pad-t header" align="center">
	<h4>ANDA PASIEN? DAFTAR PEMERIKSAAN DOKTER SEGERA</h4>
	<div style="margin-top:10px;">
		<button type="button" class="btn btn-danger">DAFTAR</button>
	</div>
</div>
<div class="container pad-t">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<b><span class="glyphicon glyphicon-user"></span> Dokter</b>
						</div>
						<div class="col-xs-6" align="right">
							<button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> Cari Dokter</button>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<ul id="lightSlider">
						<li>
							<div style="margin-bottom:10px;margin-top:5px;">
								<center>
									<img src="<?php echo base_url('assets/img/dokter.png'); ?>" class="img-responsive img-thumbnail" style="max-height:200px;">
								</center>
								<ul class="dokter-info">
									<li><span class="glyphicon glyphicon-user"></span>&nbsp; Dr. Wahyudi Soedebyio</li>
									<li><span class="glyphicon glyphicon-star"></span>&nbsp; Dokter THT</li>
								</ul>
							</div>
							<center>
								<a href="#" data-toggle="modal" data-target="#dokterModal"><button type="button" class="detail btn btn-xs btn-info">Detail</button></a>
							</center>
						</li>
						<li>
							<div style="margin-bottom:10px;margin-top:5px;">
								<center>
									<img src="<?php echo base_url('assets/img/dokter2.png'); ?>" class="img-responsive img-thumbnail" style="max-height:200px;">
								</center>
								<ul class="dokter-info">
									<li><span class="glyphicon glyphicon-user"></span>&nbsp; Prof. Rudi Wahyudi</li>
									<li><span class="glyphicon glyphicon-star"></span>&nbsp; Spesialis Anak</li>
								</ul>
							</div>
							<center>
								<a href="#" data-toggle="modal" data-target="#dokterModal"><button type="button" class="detail btn btn-xs btn-info">Detail</button></a>
							</center>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>