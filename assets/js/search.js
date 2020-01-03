function detailInfo(){
  document.getElementsByClassName("info-book-tab")[0].style.display="block"
 document.getElementsByClassName("catalog-list")[0].style.display="none"
  document.getElementsByClassName("detail-book-tab")[0].style.borderBottom= "2px solid red";
document.getElementsByClassName("detail-book-tab")[0].style.color= "rgb(255,125,25)";
document.getElementsByClassName("catalog-book-tab")[0].style.borderBottom= "none";
document.getElementsByClassName("catalog-book-tab")[0].style.color= "#666";
document.getElementsByClassName("comment-book-tab")[0].style.borderBottom= "none";  document.getElementsByClassName("comment-book-tab")[0].style.color= "#666";
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
function search_respond(){
	window.location = "http://localhost/src/search.php?type=name&key="+document.getElementById('searchtext').value ;
};

function searchtextnav(){
	window.location = "http://localhost/src/search.php?type=name&key="+document.getElementById('search-input').value ;
};



