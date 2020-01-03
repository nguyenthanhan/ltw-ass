function detailInfo(){
  document.getElementsByClassName("info-book-tab")[0].style.display="block"
 document.getElementsByClassName("catalog-list")[0].style.display="none"
  document.getElementsByClassName("detail-book-tab")[0].style.borderBottom= "2px solid red";
document.getElementsByClassName("detail-book-tab")[0].style.color= "rgb(255,125,25)";
document.getElementsByClassName("catalog-book-tab")[0].style.borderBottom= "none";
document.getElementsByClassName("catalog-book-tab")[0].style.color= "#666";
document.getElementsByClassName("comment-book-tab")[0].style.borderBottom= "none";  document.getElementsByClassName("comment-book-tab")[0].style.color= "#666";
};
function setStar(point){
	for(i=1;i<=5;i++){
		if(i<= point) document.getElementById("star"+i).src="../assets/img/mucthankydt/star-on.png";
		else document.getElementById("star"+i).src="../assets/img/mucthankydt/star-off.png";
	}
}
function rate(point,truyen,user){
	var xhttp;  
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      setStar(point);
	    }
	  };
	  xhttp.open("GET", "../dist/rating.php?point="+point +"&truyen="+truyen+"&user="+user, true);
	  xhttp.send();
};
function detailCatalog(){
document.getElementsByClassName("info-book-tab")[0].style.display="none"
 document.getElementsByClassName("catalog-list")[0].style.display="block"
  document.getElementsByClassName("detail-book-tab")[0].style.borderBottom= "none";
document.getElementsByClassName("detail-book-tab")[0].style.color= "#666";
document.getElementsByClassName("catalog-book-tab")[0].style.borderBottom= "2px solid red";
document.getElementsByClassName("catalog-book-tab")[0].style.color= "rgb(255,125,25)";
document.getElementsByClassName("comment-book-tab")[0].style.borderBottom= "none";  document.getElementsByClassName("comment-book-tab")[0].style.color= "#666";
};
function detailComment(){
   document.getElementsByClassName("info-book-tab")[0].style.display="block"
 document.getElementsByClassName("catalog-list")[0].style.display="none"
  document.getElementsByClassName("detail-book-tab")[0].style.borderBottom= "none";
document.getElementsByClassName("detail-book-tab")[0].style.color= "#666";

document.getElementsByClassName("catalog-book-tab")[0].style.borderBottom= "none";
document.getElementsByClassName("catalog-book-tab")[0].style.color= "#666";
document.getElementsByClassName("comment-book-tab")[0].style.borderBottom= "2px solid red";
  document.getElementsByClassName("comment-book-tab")[0].style.color= "rgb(255,125,25)";
};
function commentSection(){
  document.getElementsByClassName("user-discuss")[0].style.display="block";
  document.getElementsByClassName("user-rating")[0].style.display="none";
}
function ratingSection(){
  document.getElementsByClassName("user-discuss")[0].style.display="none";
  document.getElementsByClassName("user-rating")[0].style.display="block";
}
function readmore(){
  document.getElementsByClassName("content-user-comment-partly")[0].style.display="none";
  document.getElementsByClassName("readmore-comment")[0].style.display="none";
  document.getElementsByClassName("content-user-comment-fully")[0].style.display="block";
}


function writecomment(){ document.getElementsByClassName("write-comment")[0].style.display="block";
}


$(document).ready(function(){
  $(".rely-comment").click(function(){

    $(this).parents("li").find(".user-reply").toggle();;
  });
  $(".catalog-medium").click(function(){
    $(".catalog-list-medium").toggleClass("show");
     $(".hompage-medium").removeClass("select");
     $(".account-medium").removeClass("select");;
     $(".catalog-medium").removeClass("deselect");;
     $(".hompage-medium").addClass("deselect");
    $(".account-medium").addClass("deselect");;
      $(".catalog-medium").toggleClass("select");
  });
    $(".hompage-medium").click(function(){
     $(".catalog-list-medium").removeClass("show");
    $(".catalog-list-medium").hide();
     $(".hompage-medium").removeClass("deselect");
     $(".account-medium").removeClass("select");;
       $(".catalog-medium").removeClass("select");;
     $(".hompage-medium").addClass("select");
    $(".account-medium").addClass("deselect");
      $(".catalog-medium").addClass("deselect");
  });

  $(".account-medium").click(function(){
     $(".catalog-list-medium").removeClass("show");
    $(".catalog-list-medium").hide();
     $(".account-medium").removeClass("deselect");
     $(".catalog-medium").removeClass("select");;
       $(".homepage-medium").removeClass("select");;
     $(".hompage-medium").addClass("deselect");
    $(".account-medium").addClass("select");
      $(".catalog-medium").addClass("deselect");
  });
  $(".nav-medi").click(function(){
    $(".nav-medimum").toggleClass("show");

  });

    $(".rating").click(function(){
    $(".write-comment").hide();
    $(".rating").addClass("select-comrat");
    $(".rating").removeClass("deselect-comrat");
       $(".comment").addClass("deselect-comrat");
    $(".comment").removeClass("select-comrat");
  });

    $(".comment").click(function(){
    $(".rating").removeClass("select-comrat");
    $(".rating").adđClass("deselect-comrat");
    $(".comment").addClass("select-comrat");
    $(".comment").removeClass("deselect-comrat");
  });

    $(".like").parent().find("p").click( function(){
      $(".like").parent().find("p").toggleClass("deepred");
});
  $(".follow").parent().find("p").click( function(){
      $(".follow").parent().find("p").toggleClass("deepred");
});
  $(".nominate").parent().find("p").click( function(){
      $(".nominate").parent().find("p").toggleClass("deepred");
});

});

function parallax() {
	var s = document.getElementByClassName("background-top");
  var yPos = 0 - window.pageYOffset/4;
  s.style.top = 50 + yPos + "%";

  //alert(yPos);
}

window.addEventListener("scroll", function(){
	parallax();
});
function tuongtac(truyen,thanhvien,loai){
	var xhttp;
	var trangthai=0;
    switch(loai){
    case 1:
    	if(document.getElementById("thichbtn").innerHTML == "Bỏ thích") {trangthai = 1;}
        break;
    case 2:
    	if(document.getElementById("theodoibtn").innerHTML == "Bỏ theo dõi") {trangthai = 1;}
    	break;
    case 3:
    	if(document.getElementById("decubtn").innerHTML == "Bỏ đề xuất") {trangthai = 1;}
    	break;
    }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		  switch(loai){
		    case 1:
		    	if(trangthai == 1) document.getElementById("thichbtn").innerHTML = "Yêu thích";
		    	else document.getElementById("thichbtn").innerHTML = "Bỏ thích";
		        break;
		    case 2:
		    	if(trangthai == 1) document.getElementById("theodoibtn").innerHTML = "Theo dõi";
		    	else document.getElementById("theodoibtn").innerHTML = "Bỏ theo dõi";
		        break;
		    case 3:
		    	if(trangthai == 1) document.getElementById("decubtn").innerHTML = "Đề xuất";
		    	else document.getElementById("decubtn").innerHTML = "Bỏ đề xuất";
		        break;
		    }
	  };
	 xhttp.open("GET", "../dist/tuongtac.php?truyen="+truyen+"&user="+thanhvien+"&loai="+loai+"&trangthai="+trangthai, true);
	 xhttp.send();
};

function login(){
	window.location.href = "../src/login-page.php";
};


