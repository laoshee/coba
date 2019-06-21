<script type="text/javascript">
  $(document).ready(function(){
    $(".datepicker").datepicker({
        //dateFormat: 'dd/mm/yy',
        Format: 'dd/mm/yy',
        minDate: 0,
        maxDate: 7,
        changeMonth: true,
        changeYear: false,
        showAnim:'bounce',	
    });
      
    $("#penanggung").change(function() {
		//console.log($("#penanggung option:selected").val());
		if ($("#penanggung option:selected").val() == 'Umum') {
			$('#nm_pesertas').prop('hidden', 'true');
			$('#no_pesertas').prop('hidden', 'true');
			$('#hub_pesertas').prop('hidden', 'true');
			$('#no_rujuks').prop('hidden', 'true');
		} else {
			$('#nm_pesertas').prop('hidden', false);
			$('#no_pesertas').prop('hidden', false);
			$('#hub_pesertas').prop('hidden', false);
			$('#no_rujuks').prop('hidden', false);
		} 
        $('#nm_pesertas').focus();
	});

    $(function () {
      $("#penanggung").change(function () {
        if ($(this).val() == "Umum") {
          $("#hub_peserta").hide();
          $("#textn1").hide();
          $("#textn2").hide();
          $("#textn3").hide();
          $("#textn4").hide();
        } else {
          $("#hub_peserta").show();
          $("#textn1").show();
          $("#textn2").show();
          $("#textn3").show();
          $("#textn4").show();
        }
      });
    });
    $("#asal").change(function() {
				//console.log($("#penanggung option:selected").val());
				if ($("#asal option:selected").val() == 'Datang Sendiri') {
					$('#sembunyi').prop('hidden', 'true');
				} else {
					$('#sembunyi').prop('hidden', false);
          $('#sembunyi').focus();
				}
        $('#sembunyi').focus();
		});
    $(function () {
      $("#asal").change(function () {
          if ($(this).val() == "Datang Sendiri") {
			     $("#texta1").hide();
          } else {
			     $("#texta1").show();
          }
      });
    });

    $("#penanggung").change(function() {
				//console.log($("#penanggung option:selected").val());
				if ($("#penanggung option:selected").val() == 'Umum') {
					$('#sembunyi').prop('hidden', 'true');
				} else {
					$('#sembunyi').prop('hidden', false);
          $('#sembunyi').focus();
				}
        $('#sembunyi').focus();
		});
    $(function () {
      $("#penanggung").change(function () {
          if ($(this).val() == "Umum") {
			     $("#texta2").hide();
           $("#texta3").hide();
           $("#texta4").hide();
           $("#texta5").hide();
          } else {
			     $("#texta2").show();
           $("#texta3").show();
           $("#texta4").show();
           $("#texta5").show();
          }
      });
    });

    var btnFinish = $('<button></button>').text('Finish')
      .addClass('btn btn-finish')
      .on('click', function()
      {
          if( !$(this).hasClass('hide'))
          {
               var elmForm = $("#myForm");
               var idrm = document.getElementById("id_rm1").value;
                          idrm.innerHTML = "";
              if(elmForm)
              {
                  elmForm.validator('validate');
                  var elmErr = elmForm.find('.has-error');
                  var id_rm1 = document.getElementById("id_rm1").value;
                  var myJSON = JSON.stringify(id_rm1);
                  var nama = document.getElementById("nama").value;
                  var namaJSON = JSON.stringify(nama);
                  var lahir = document.getElementById("tgllahir").value;
                  var tgllahirJSON = JSON.stringify(lahir);
                  //  //var id_rm1=$(this).val();
                  //  //var d = new Date();
                  //  var hari = ['Minggu', 'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
                  //  var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
                  //  var tanggal = new Date().getDate();
                  //  var _hari = new Date().getDay();
                  //  var _bulan = new Date().getMonth();
                  //  var _tahun = new Date().getYear();
                  //  var hari = hari[_hari];
                  //  var bulan = bulan[_bulan];
                  //  var tahun = (_tahun <1000) ? _tahun +1900 :_tahun;
                  //  //d.format("dd/mm/yyyy"); 
                  //  var today_date = hari + "/" + bulan + "/" + tahun;
                  if(elmErr && elmErr.length >0){
                     $.ajax({
                     type : "POST",
                     url  : "<?php echo base_url('index.php/pasien/get_pasienalert')?>",
                     dataType : "JSON",
                     data : {id_rm1: id_rm1},
                     cache:false,
                     error: function(e){
                       //console.log(data);
                       alert("Silakan isi data terlebih dahulu")
                     },
                     success: function(result){
                       console.log(result);
                       for (var i = 0; i < result.length; i++) {
                           alert("Selamat Datang \n Nomer RM: "+result[i]['id_rm1']+ "\n Nama: "+result[i]['nama']+ "\n Tanggal Lahir: " +result[i]['tgl_lahir']+"");
                         }
                       }
                     });
                  } else{
                      //alert('Selamat! Silahkan klik "OK" untuk mendaftar');
                      elmForm.submit();
                      return false;
                  }
              }
          }
      });
  $('#smartwizard').smartWizard({
    //theme: 'dots',
    selected: 0,  // Initial selected step, 0 = first step 
        // keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        // autoAdjustHeight:true, // Automatically adjust content height
        // cycleSteps: false, // Allows to cycle the navigation of steps
        // backButtonSupport: true, // Enable the back button support
        // useURLhash: true, // Enable selection of the step based on url hash
         lang: {  // Language variables
             next: 'Lanjut', 
             previous: 'Kembali',
         },
    useURLhash: true,
    transitionEffect:'fade',
    toolbarSettings: {
                toolbarPosition: 'bottom', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right
                showNextButton: true, // show/hide a Next button
                showPreviousButton: true, // show/hide a Previous button
                toolbarExtraButtons: [btnFinish],
            },   
    anchorSettings: {
            markDoneStep: true, // add done css
            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
    //enableFinishButton: false,
    ajaxType: "POST",
    contentURL: null,
  });

  
  $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
    var elmForm = $("#form-step-" + stepNumber);
        if(stepDirection === 'forward' && elmForm)
        {
            elmForm.validator('validate');
                var elmErr = elmForm.children('.has-error');
            if(elmErr && elmErr.length > 0)
            {
                // Form validation failed
                alert('SELESAIKAN DULU');
                return false;
            }
              var x = document.forms["myForm"]["asal"].value;
              var y = document.forms["myForm"]["pengirim"].value;
              
              var c = document.forms["myForm"]["no_peserta"].value;
              var d = document.forms["myForm"]["hub_peserta"].value;
              var e = document.forms["myForm"]["no_rujuk"].value;
              if (x != "Datang Sendiri" && y == "") {
                alert("Data Pengirim Belum di isi");
                return false;
              } else {
                return true;
              }
              var a = document.forms["myForm"]["penanggung"].value;
              var b = document.forms["myForm"]["nm_peserta"].value;
              if (a != "Umum" && b == "") {
                alert("Nama Peserta Belum di isi");
                return false;
              } else {
                return true;
              }
        }
            
        return true;
  });

  // $('#id_rm1').change(function(){
  //     //loadTeachers($(e1.target).val());;
  //     var id_rm1=$(this).val();
		
  //     $.ajax({
  //     type : "POST",
  //     url  : "<?php echo base_url('index.php/pasien/get_pasien')?>",
  //     dataType : "JSON",
  //     data : {id_rm1: id_rm1},
  //     cache:false,
  //     error: function(){
  //       $("#nama").val("");
  //       $("#tgllahir").val("");
  //       $("#flag").val("");
  //       alert("Nomor Rekam Medis Salah")
  //     },
  //     success: function(data){
  //         $("#nama").val(data['nama']);
  //         $("#tgllahir").val(data['ubah']);	
  //         $("#flag").val(data['flagnya']);				
  //       }
	// 	  });
	// 	  return false;
  // });

	// $('#tanggal_input').change(function(e){
  //     e.preventDefault();
  //     var data = $('#tanggal_input').val();
  //     $.ajax({
  //         url: "<?php echo site_url('Daftar/get_room') ?>",
  //         type: "POST",
  //         dataType: "json",
  //         data: {tanggal:data},
  //         success: function(data){
  //             console.log(data);
  //             var html = '';
  //             var i;
  //       $('#ruangan').children('option').hide();  
  //             for(i=0; i<data.length; i++){
  //                 $('#ruangan').append('<option value='+data[i].id+'>' +data[i].nama_dokter+' ('+data[i].poli+')</option>');   
  //             }
  //         }
  //     });
  // });

}); //penutup document

    </script>  
