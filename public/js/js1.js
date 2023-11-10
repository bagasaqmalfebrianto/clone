
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });




// <!-- Inputan File Name-->

function showname () {
  var name = document.getElementById("fileInput").value;
  document.getElementById("filename").innerHTML = name;
};

// <!-- Konfirmasi Pass -->
$(document).ready(function () {
	window.onload = function () {
		document.getElementById("passbaru1").onchange = validatePassword;
		document.getElementById("passbaru2").onchange = validatePassword;
	}
	function validatePassword(){
		var pass2=document.getElementById("passbaru2").value;
		var pass1=document.getElementById("passbaru1").value;
		if(pass1!=pass2)
			document.getElementById("passbaru2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
		else
			document.getElementById("passbaru2").setCustomValidity('');
	}
});

// <!-- Menghapus inputan pass & Menampilkan Modul -->
$('#FormPass').on('submit', function(e){
	document.getElementById("passbaru").value = "";
	document.getElementById("passbaru1").value = "";
	document.getElementById("passbaru2").value = "";
	$('#ubahPassword').modal('hide');
	$('#PassBerhasil').modal('show');
	e.preventDefault();

});

$('#FormPass').on('submit', function(e){
  $('.passprog').each(function() {
	var $coba = $('.pass5');
	var $alert = $('.alertpass');
	$('.passprog').css('width', '0%').attr('aria-valuenow', 0);
	$alert.hide();
	$coba.show();

	var $bar = $(this);
	var progress = setInterval(function() {

	  var currWidth = parseInt($bar.attr('aria-valuenow'));
	  var maxWidth = parseInt($bar.attr('aria-valuemax'));

	  //update the progress
		$bar.width(currWidth+'%');
		$bar.attr('aria-valuenow',currWidth+10);

	  //clear timer when max is reach
	  if (currWidth >= maxWidth){
		clearInterval(progress);
		$coba.hide();
		$alert.show();
	  }

	}, 500);
	});
});
// <!-- Menghapus inputan pass & Menampilkan Modul -->

// <!-- Menghapus inputan Pesan & Menampilkan Modul -->

$('#FormPesan').on('submit', function(e){
	document.getElementById("judulpesan").value = "";
	document.getElementById("message-text").value = "";
	document.getElementById("filename").value = "";
	document.getElementById("SelectPolis").value = "";
	$('#Pesan').modal('hide');
	$('#PesanBerhasil').modal('show');
	e.preventDefault();
});

$('#FormPesan').on('submit', function(e){
  $('.bar-pesan').each(function() {
	var $coba = $('.progress-pesan');
	var $alert = $('.alert-pesan');
	$('.bar-pesan').css('width', '0%').attr('aria-valuenow', 0);
	$alert.hide();
	$coba.show();

	var $bar = $(this);
	var progress = setInterval(function() {

	  var currWidth = parseInt($bar.attr('aria-valuenow'));
	  var maxWidth = parseInt($bar.attr('aria-valuemax'));

	  //update the progress
		$bar.width(currWidth+'%');
		$bar.attr('aria-valuenow',currWidth+10);

	  //clear timer when max is reach
	  if (currWidth >= maxWidth){
		clearInterval(progress);
		$coba.hide();
		$alert.show();
	  }

	}, 500);
	});
});
// <!-- Menghapus inputan Pesan & Menampilkan Modul -->


// <!-- scroll -->

	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	  mybutton.style.display = "block";
	} else {
	  mybutton.style.display = "none";
	}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
	}


$(".filter-dropdown").on("click", ".dropdown-toggle", function(e) {
	  e.preventDefault();
	  $(this).parent().addClass("show");
	  $(this).attr("aria-expanded", "true");
	  $(this).next().addClass("show");
});

 function ShowPassword()
{
	if(document.getElementById("passbaru").value!="")
	{
		document.getElementById("passbaru").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	}
	if(document.getElementById("passbaru1").value!="")
	{
		document.getElementById("passbaru1").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	}
	if(document.getElementById("passbaru2").value!="")
	{
		document.getElementById("passbaru2").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	}
}

function HidePassword()
{
	if(document.getElementById("passbaru").type == "text")
	{
		document.getElementById("passbaru").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
	if(document.getElementById("passbaru1").type == "text")
	{
		document.getElementById("passbaru1").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
	if(document.getElementById("passbaru2").type == "text")
	{
		document.getElementById("passbaru2").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
}


