
   <?php 
   if (isset($_POST['submitbinhluan']) ) {
       if(isset($_SESSION["id"]) && !empty($_POST['noidung'])){
           $noidung = $_POST["noidung"];
           $sql = "INSERT INTO `binhluan`(`id_thanhvien`, `id_truyen`, `noidung`) VALUES (".$id_user.",".$truyen["id"].",'".$noidung."')";
           $rstadd = $conn->query($sql);
       }
   }
   ?>
    <div class="comment-section" id="comment-area">
   <div class ="comment-head">
     <div class= "comment-rating">
       <span class="comment" onclick="commentSection()">Bình luận</span>
       <i class="grey">|</i>
        <span class="rating" onclick="ratingSection()">Đánh giá</span>
       <a class="write-comment-header" onclick=<?php if(isset($_SESSION['id'] ))  echo "writecomment()"; else echo "login()"; ?> > <i class="fas fa-comments"></i> Viết bình luận </a>
         <div class="clearfix"></div>
  <div class="write-comment">
    <div class="img-user-comment">
             <img src=<?php echo "../assets/img/avatar/".$userinfo["avatar"]?>>
           </div>
   <form action="#" method="POST" >
    <textarea  class="comment-textbox" name ="noidung"></textarea>
   <input type="submit" name="submitbinhluan"> 
    </form>
   <div class="clearfix"></div>
  </div>
  </div>
  </div>
     <!---------comment-area----------------------->
       <div class = "user-discuss">
         <div class="discuss-list">
           <ul>
   

     <?php  
$sql_loadcomment = "select * from binhluan where id_truyen = ".$truyen["id"]." ORDER by  id DESC";
$rst = $conn->query($sql_loadcomment);
while($loadcomment = $rst->fetch_assoc()){
    
    $sql_usercomment = "select thanhvien.id as id_thanhvien, thanhvien.level as level,taikhoan.id as id_taikhoan,taikhoan.avatar as avatar,taikhoan.ten as ten from thanhvien
join taikhoan on thanhvien.id_taikhoan = taikhoan.id
where thanhvien.id= ".$loadcomment["id_thanhvien"];
    $rstcmt = $conn->query($sql_usercomment);
    $usercomment = $rstcmt->fetch_assoc();
   echo " <li> ";
   echo "<div class=\"user-commenr\">";
   echo "<div class=\"img-user-comment\"> ";
   echo "<img src=\"../assets/img/avatar/".$usercomment['avatar']."\">
    </div>
           <div class=\"detail-user-comment\">
             <div>
             <a class= \"name-user-comment\" ><b>".$usercomment["ten"]."</b></a>
             </div>";
    
    if(strlen($loadcomment["noidung"]) > 100) {
        $shortcomment =substr($loadcomment, 0, 65)."..";
         echo "  <div class=\"content-user-comment-partly\">".$shortcomment.".</div>";
         echo  "<span class=\"readmore-comment\" onclick=\"readmore()\"><a>readmore</a></span>";
         echo "<div class=\"content-user-comment-fully\">".$loadcomment["noidung"]."</div>";
             
    }
    else {
        echo "<div>".$loadcomment["noidung"]."</div>";
    }
       
          echo  "<div class=\"info-user-comment\">";
          echo  "<span class=\"time-comment\">".$loadcomment["thoigian"]."</span>";
          echo  "<a  class=\"rely-comment\"><i class=\"fas fa-comment-dots\"></i> <span ><span class=\"rely-comment-count\">0</span> Trả lời<span></a>
                 <a href =\"#\" class=\"like-count\"><i class=\"far fa-thumbs-up\"></i><span>0</span></a>
  </div>
             </div>
             <div class=\"clearfix\"></div>
                 </div>
         

           </li>";

           
}
  ?>       
           </ul>
  </div>
  </div>
<!------------END-USER-DISCUSS---------->
  <!----------USER_RATING-------------->
  <div class ="user-rating">

 <div class= "user-rating-list">
  <ul>
  
  <?php
 $sql = "SELECT truyen_thanhvien.rate, thanhvien.id_taikhoan from truyen_thanhvien 
LEFT join thanhvien
ON truyen_thanhvien.id_thanhvien = thanhvien.id
WHERE id_truyen =".$_GET["id"]." and rate >0";
$rst = $conn->query($sql);
while ($ratinglist = $rst ->fetch_assoc()) {
    $ratequery = $conn ->query("select * from taikhoan where id=".$ratinglist["id_taikhoan"]);
    $rateuser = $ratequery -> fetch_assoc();
    echo 
"<li>
           <div class=\"img-user-rating\">
  <img src=\"../assets/img/avatar/".$rateuser["avatar"]."\">
  </div>
           <div class=\"detail-user-rating\">
             <div>
             <a class= \"name-user-rating\" ><b>".$rateuser["ten"]."</b></a>
             </div>
           <div class=\"content-user-rating\">
           
           Đã rate ".$ratinglist["rate"]." điểm
             </div>
            <div class=\"info-user-rating\">
  </div>
             </div>
             </li><div class=\"clearfix\"></div>";
}
           ?>
  </ul>
  </div>
  </div>
  </div>