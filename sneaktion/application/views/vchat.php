

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"><img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Icons</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Icons
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Line Awesome section start -->
<section id="line-awesome-icons">
  <div class="row">
      <div class="col-3">
          <div class="card">
              <div style="background:rgba(180, 24, 19, 1)" class="card-header">
                  <h4 style="color:white;" class="card-title">Chat List</h4>
</div>
                  <div class="container">
                    <ul class="list-group list-group-flush">
                      <?php foreach($user->result() as $row){ ?>
                        <a href="javascript:void(0)" style="text-decoration:none" onClick="getChatAll('<?php echo $row->id_user; ?>','0')"><li class="list-group-item " onclick="aktifkan('<?php echo $row->id_user  ?>')" id="aktif-<?php echo $row->id_user ?>" id="<?php echo $row->id_user; ?>" id="user" ><i class="fa fa-angle-right"></i> <?php echo $row->nama; ?></li></a>
                      <?php } ?>
                    </ul>
                  </div>
               </div>
               </div>


      <div class="col-9">
            <div class="card">
              <div style="background:rgba(180, 24, 19, 1)" class="card-header">
                <h4 style="color:white;" class="card-title">Chat Box</h4>
              </div>
				<div class="panel-body" style="height:400px;overflow-y:auto" id="box">
					<div id="chat-box">
						<div class='panel-body'><h2 style='text-align:center;color:grey;padding-top:20px;'>Click User on Chatt List to Start Chatt</h2></div>
						<!--br/>
						<div id="loading" style="display:none"><center><i class="fa fa-spinner fa-spin"></i> Loading...</center></div>
						</br !-->
					</div>
				</div>
				<div class="panel-footer" style="display:none">
					<div class="row">
						<div class="col-md-12">
							<textarea class="form-control " id="pesan" style="margin-right:10px;"></textarea>
							<button id="send" type="button" class="btn btn-primary pull-right" style="margin-top:10px;"  onClick="sendMessage()" ><i class="fa fa-send"></i> Send Message</button>
						</div>
					</div>
                      </div>
</section>
<!-- // Line Awesome section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>
    <script>
      $(document).ready(function(){
	//getChat(0);
	$("#user").click(function(){
		$("#id_max").val('0');
	});
	
	setInterval(function(){ 
		if($("#id_user").val() > 0){
			getLastId($("#id_user").val(),$("#id_max").val()); 
			getChat($("#id_user").val(),$("#id_max").val()); 
			autoScroll();
		}else{
			
		}
	},3000);
});

function getChatAll(id_user,id_max){
	
	$.ajax({
		url		: "<?php echo site_url('admin/getChatAll') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			$("#chat-box").html(result);
			$(".panel-footer").show();
			
			autoScroll();
			document.getElementById('pesan').focus();
		}
	});
}

function getChat(id_user,id_max){
	
	$.ajax({
		url		: "<?php echo site_url('admin/getChat') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			if(id_user != $("#id_user").val() ){
				$("#chat-box").html(result);
			}else{
				$("#chat-box").append(result);
			}
			$(".panel-footer").show();
			document.getElementById('pesan').focus();
		}
	});
}

function getLastId(id_user,id_max){
	$.ajax({
		url		: "<?php echo site_url('admin/getLastId') ?>",
		type	: 'POST',
		dataType: 'json',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			
		},
		success	: function(result){
			$("#id_max").val(result.id);
		}
	});
}

function sendMessage(){
	var pesan 	= $("#pesan").val();
	var id_user = $("#id_user").val();
	
	if(pesan == ''){
		document.getElementById('pesan').focus();
	}else{
		$.ajax({
			url		: "<?php echo site_url('admin/sendMessage') ?>",
			type	: 'POST',
			dataType: 'json',
			data 	: {id_user:id_user,pesan:pesan},
			beforeSend	: function(){
			},
			success	: function(result){
				getChat($("#id_user").val(),$("#id_max").val());
				getLastId($("#id_user").val(),$("#id_max").val()); 
				$("#pesan").val('');
				autoScroll();
			}
		});
	}
}

function autoScroll(){
	var elem = document.getElementById('box');
	elem.scrollTop = elem.scrollHeight;
}

function aktifkan(i){
	$("li").removeClass("active");
	$("#aktif-"+i).addClass("active");
}
</script>
