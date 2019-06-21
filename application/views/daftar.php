<html>
  <head>
      <title> daftar </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
            <!-- <meta name="description" content="free-educational-responsive-web-template-webEdu"> -->
        <meta name="author" content="***.com">
            <title> <?=$title?> </title>
        <link rel="favicon" href="<?=base_url('assets/images/favicon.png')?>">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>"> 
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-theme.css" media="screen')?>"> 
        <link rel="stylesheet" href="<?=base_url('assets/jquery-ui-1.12.1/jquery-ui.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/jquery.steps.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/smart_wizard.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/smart_wizard_theme_dots.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/ace1.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/footer-distributed-with-address-and-phones.css')?>">
        <!-- <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>  -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        
        <style>
            #popup {
                width: 100%;
                height: 95%;
                position: fixed;
                background: rgba(0,0,0,.7);
                top: 0;
                left: 0;
                z-index: 9999;
                visibility: hidden;
            }

            .window {
                width: 99.1% ;
                height: 90% ;
                background: #fff;
                border-radius: 10px;
                position: relative;
                padding: 1px;
                text-align: center;
                margin: 3% auto;
            }
            .window h2 {
                margin: 30px 0 0 0;
            }
            /* Button Close */
            .close-button {
                width: 3%;
                height: 10%;
                line-height: 25px;
                background: #000;
                border-radius: 50%;
                border: 3px solid #fff;
                display: block;
                text-align: center;
                color: #fff;
                text-decoration: none;
                position: absolute;
                top: -10px;
                right: -10px;	
            }
            /* Memunculkan Jendela Pop Up*/
            #popup:target {
                visibility: visible;
            }   
        </style>
  </head>

<body >
  <!-- konten -->
<div class="container">
<?php echo $this->session->flashdata('pesan');?>
  <form  autocomplete="off"  action="" 
  id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8"
   novalidate="true" >

        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul class="nav nav-tabs step-anchor">
                <li ><a href="#step-2" class="nav-link">Tahap 1<br><small>DAFTAR</small></a></li>
                <li ><a href="#step-3" class="nav-link">Tahap 2<br><small>PERIKSA</small></a></li>
                <li ><a href="#step-4" class="nav-link">Tahap 3<br><small>PENJAMIN</small></a></li>
                <li ><a href="#step-5" class="nav-link">Tahap 4<br><small>PERSETUJUAN</small></a></li>
            </ul>

            <div class="sw-container tab-content" style="min-height: 187px;">
              <div id="step-2" class="tab-pane step-content">
                <!-- <div id="form-step-1" role="form" data-toggle="validator">-->
                  <div class="form-group"> 
                    <label>Asal Pasien:</label>
                      <select class="form-control" name="asal" value=" " id="asal"  required="" > 
                        <option value='Datang Sendiri' selected>Datang Sendiri</option>
                        <option value='Pihak Luar' >Pihak Luar</option>
                        <option value='Kasus Polisi' >Kasus Polisi</option>					
                      </select>
                      <!-- <div class="help-block with-errors"></div>
                  </div>-->
                </div> 
                <div id="form-step-1" role="form" data-toggle="validator">
                  <div class="form-group">
                    <label id="texta1" hidden>Pengirim:</label>
                      <input type="text" class="form-control" name="pengirim" value="<?php echo set_value('pengirim'); ?>" 
                      placeholder="Nama Dokter/ Nama Klinik/ Nama Puskesmas"   onfocusout="return validateForm()" 
                      id="sembunyi" hidden>  
                      <div class="help-block with-errors"></div>
                  </div>
                <div id="form-step-1" role="form" data-toggle="validator">
                  <div class="form-group">
                      <input type="text" name="status"  value="daftar" hidden>
                  </div>
                </div>
                </div>
              </div>
                <div id="step-3" class="tab-pane step-content" >
                  <div id="form-step-2" role="form" data-toggle="validator">
                    <div class="form-group">
                      <label>Tanggal Periksa:</label>
                      <input class='datepicker form-control' name="tgl_periksa" id="tanggal_input" data-date-format="dd-mm-yyyy"  data-error="data tidak boleh kosong" required="true" />        
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div id="form-step-2" role="form" data-toggle="validator">
                    <div class="form-group">
                    <label>Dokter Dituju:</label>
                      <select class='form-control' id='ruangan' name='klinik_dituju' Required="True" >
                        <option value='' selected>--pilih--</option>
                        <option value='Dr. A' >Dr. A</option>
                        <option value='Dr. B' >Dr. B</option>					
                      </select>
                    </div>
                  </div>
                </div>
                <!-- 
                <div id="step-4" class="tab-pane step-content">
                  <div id="form-step-3" role="form" data-toggle="validator">
                    <input type="checkbox" name="Umum" value="Umum"> Umum<br>
                    <input type="checkbox" name="BPJS" value="BPJS"> BPJS<br>
                  </div>
                </div>    
                -->
                <div id="step-4" class="tab-pane step-content">
                  <!-- <div id="form-step-3" role="form" data-toggle="validator"> -->
                    <div class="form-group" >
                      <label >Jenis Penanggung:</label>
                        <select class=" form-control" name="penanggung" value="<?php echo set_value('penanggung'); ?>" id="penanggung" required="" > 
                          <option value='Umum' selected>Umum</option>
                          <option value='BPJS' >BPJS</option>
                          <option value='BPJS Ketenagakerjaan' >BPJS Ketenagakerjaan</option>
                          <option value='Jasa Raharja' >Jasa Raharja</option>
                          <option value='Owner dan Keluarga' >Owner dan Keluarga</option>							
                        </select>
                    <!--  
                      <label id="textn1" hidden>Nama Peserta Penanggung:</label>
                        <input type="text" class="form-control" name="nm_peserta" value="&nbsp;" placeholder="Nama" onfocusout="return validateForm()"  id="nm_pesertas" hidden Required=""/> 
                      <label id="textn2" hidden>No.Kartu Peserta Penanggung:</label>
                        <input type="text" class=" form-control" name="no_peserta" value="&nbsp;" placeholder="Nomor Kartu" id="no_pesertas" hidden/>
                      <label id="textn3" hidden>Hub. Peserta Penanggung:</label>
                        <select class="form-control" name="hub_peserta" id="hub_pesertas"  hidden> 
                          <option value='Peserta' >Peserta</option>
                          <option value='Istri' >Istri</option>
                          <option value='Suami' >Suami</option>
                          <option value='Anak'>Anak</option>					
                        </select> 
                      <label id="textn4" hidden>Nomor Rujuk Penanggung:</label>
                        <input type="text" class="form-control" name="no_rujuk" value="&nbsp;" placeholder="Nomor Rujuk" id="no_rujuks" hidden/> 
                    -->

                      <div id="form-step-4" role="form" data-toggle="validator">
                          <div class="form-group">
                            <label id="texta2" hidden>Nama Peserta Penanggung:</label>
                              <input type="text" class="form-control" name="nm_peserta" value="&nbsp;" placeholder="Nama"   
                              id="nm_pesertas" Required=""
                               id="sembunyi" hidden> 
                          <div class="help-block with-errors"></div>
                        </div>

                        <div id="form-step-4" role="form" data-toggle="validator">
                          <div class="form-group">
                            <label id="texta3" hidden>No.Kartu Peserta Penanggung:</label>
                            <input type="text" class=" form-control" name="no_peserta" value="&nbsp;" placeholder="Nomor Kartu" id="no_pesertas"
                               id="sembunyi" hidden> 
                          <div class="help-block with-errors"></div>
                        </div>

                        <div id="form-step-4" role="form" data-toggle="validator">
                          <div class="form-group">
                            <label id="texta4" hidden>Hub. Peserta Penanggung:</label>
                              <select class="form-control" name="hub_peserta" id="hub_pesertas"  hidden> 
                              <option value='Peserta' >Peserta</option>
                              <option value='Istri' >Istri</option>
                              <option value='Suami' >Suami</option>
                              <option value='Anak'>Anak</option>					
                            </select> 
                          <div class="help-block with-errors"></div>
                        </div>

                        <div id="form-step-4" role="form" data-toggle="validator">
                          <div class="form-group">
                            <label id="texta5" hidden>Nomor Rujuk Penanggung::</label>
                            <input type="text" class="form-control" name="no_rujuk" value="&nbsp;" placeholder="Nomor Rujuk" id="no_rujuks"
                               id="sembunyi" hidden> 
                          <div class="help-block with-errors"></div>
                        </div>
                    
                    <!-- </div> -->
                  </div>
                </div>
                
                <div id="step-5" class="tab-pane step-content">
                  <center>
                    <h2>syarat dan ketentuan</h2>
                    <p> syarat dan ketentuan : Keep your smile :) </p>
                    <div id="form-step-3" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="terms"> Menyetujui data yang telah Anda masukan </label>
                            <input type="checkbox" id="terms" data-error="Harap terima Syarat dan Ketentuan" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                  </center>


                </div>

            </div>

            
        </div>

  </form>
</div>

  <?php
    // $this->load->model('M_model');
    // $this->M_model->autoupdatedaftar();
  ?>

    

  <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>     
  <script src="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.validate.js"></script> 
  <script src="<?=base_url()?>assets/js/bootstrap.js"></script> 
  <script src="<?=base_url()?>assets/js/jquery.smartWizard.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <?php $this->load->view('sc_daftar.php'); ?>

</body>
</html>