<style type="text/css">
	@media(max-width:972px){
	    .ubah{
	    	text-align: center;
	     	margin-top: -50px;
	    }
	}
	@media(min-width:972px){
	    .ubah{
	     	margin-top: 80px;
	    }
	    .ubah2{
	    	margin-top: -70px;
	    }
	}
	.formkhusus{
    background-color: white;box-shadow: 0px 6px 6px 0px rgba(2,25,65,0.08);
    border-radius: 10px;
    }
    .nav-pills .nav-link.active{
   	background-color: #ff9f67;
   	color:white;
   }
   a:hover{
   	color: #ff9f67;
   }
   a{
   	color: #4255A4;
   }
</style>
<main>
		<!--? slider Area Start-->
		<section class="slider-area slider-area2">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider slider-height2">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-11 col-md-12">
								<div class="hero__caption hero__caption2">
									<h1 data-animation="bounceIn" data-delay="0.2s">Profile</h1>
									 <!-- breadcrumb Start -->
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.html">Home | Profile</a></li>
										</ol>
									</nav>
									<!-- breadcrumb End -->
								</div>
							</div>
						</div>
					</div>          
				</div>
			</div>
		</section>
		<div class="services-area" style="margin-top: 50px">
			<div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-md-12">
                        <div class="single-services mb-30 formkhusus" style="background-image: url('<?= base_url()?>assets/user/assets/img/gallery/back2.png'); height: 300px;">
                            <div class="features-caption" style="color: white;margin-left: 50px">
                            	<div class="row ubah">
                            		<div class="col-lg-5 text-center ubah2"><br><br>
                            			<img src="<?= base_url('project/')?>1.png" width="150" alt="">
                            		</div>
                            		<div class="col-lg-7">
                            			<p style="color: white">User</p>
						                <p style="color: white">user@elearning.com</p>
						                <p style="color: white">+62 8021 9392 6311</p>
						                <a class="genric-btn radius" style="background-color: #ff9f67;color: white" href="#" data-toggle="modal" data-target="#exampleModal">Ubah Profil</a>
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="services-area" style="margin-top: 50px">
			<div class="container">
                <div style="padding: 40px;" class="formkhusus">
					<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overtime</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tryout</a>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  	<section class="sample-text-area" style="background-color: #fff;">
							<div class="services-area" style="padding-top: 30px">
								<div class="section-tittle text-center mb-55">
					                <!-- <img src="<?= base_url()?>assets/user/assets/img/gambar/2.png" width="400" alt="" class="text-center"><br><br> -->
					                <h3>Yuk Isi Profil-mu!</h3>
					                <img src="<?= base_url('project/')?>1.png" width="150" alt="">
					                <br><a class="genric-btn radius" style="background-color: #ff9f67;color: white" href="#" data-toggle="modal" data-target="#exampleModal">Ubah Profil</a>
					            </div>
					        </div>
						</section>
					  </div>
					  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  	<section class="sample-text-area" style="background-color: #fff;">
							<div class="services-area" style="padding-top: 30px">
								<div class="section-tittle text-center mb-55">
					                <!-- <img src="<?= base_url()?>assets/user/assets/img/gambar/2.png" width="400" alt="" class="text-center"><br><br> -->
					                <h3>Yuk Isi Profil-mu!</h3>
					                <img src="<?= base_url('project/')?>1.png" width="150" alt="">
					                <br><a class="genric-btn radius" style="background-color: #ff9f67;color: white" href="#" data-toggle="modal" data-target="#exampleModal">Ubah Profil</a>
					            </div>
					        </div>
						</section>
					  </div>
					</div>
				</div>
            </div>
        </div>
<br>
	</main>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ubah Profil</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- <h3 class="mb-30">Form Element</h3> -->
						<form action="#">
					        <a href="#" class="genric-btn radius float-right" style="background-color: #ff9f67;color: white;border:#ff9f67;"  data-toggle="modal" data-target="#exampleModal2"> Ganti Password</a><br><br>
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="Nama"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder=Username"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder="Email"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="EMAIL" placeholder="No. HP"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<textarea class="single-textarea" placeholder="Alamat" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							<div class="mt-10">
								<button type="button" class="genric-btn radius" style="background-color: #ff9f67;color: white;border:#ff9f67;">Simpan</button>
						        <button type="button" class="genric-btn radius" style="background-color: #4255A4		;color: white;border:#4255a4;" data-dismiss="modal">Batal</button>
							</div>
						</form>
					</div>
				</div>
            </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- <h3 class="mb-30">Form Element</h3> -->
						<form action="#">
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="Password Lama"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder="Password Baru"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="last_name" placeholder="Konfirmasi Password"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
								class="single-input">
							</div>
							<div class="mt-10">
								<button type="button" class="genric-btn radius" style="background-color: #ff9f67;color: white;border:#ff9f67;">Simpan</button>
						        <button type="button" class="genric-btn radius" style="background-color: #4255A4		;color: white;border:#4255a4;" data-dismiss="modal">Batal</button>
							</div>
						</form>
					</div>
				</div>
            </div>
	      </div>
	    </div>
	  </div>
	</div>