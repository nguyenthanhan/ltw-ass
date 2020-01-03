 <div class="like-more">
            <h3> Có thể bạn cũng thích </h3>
            <div class = "like-more-list">
            
            <?php 
            $sql_morebook = "
SELECT truyen.id, truyen.ten as tentruyen,truyen.anh as hinhanh,tacgia.ten as tentacgia FROM `truyen` 
JOIN tacgia 
on tacgia.id = truyen.id
WHERE truyen.id_theloai = ".$truyen['id_theloai']." and truyen.id != ".$id." order by truyen.luotxem DESC limit 0,6
";
            $rst = $conn->query($sql_morebook);
            while($morebook = $rst->fetch_assoc()){
                echo "<li>";
                echo "<div class=\"like-more-img\">";
                echo "<a  target=\"_blank\" href=\"chitiettruyen.php?id=".$morebook["id"]."\">";
                echo "<img src= \"../assets/img/front-book/".$morebook['hinhanh']."\">";
                echo "</a>";
                echo "</div>";
                echo "<h5><b>".$morebook['tentruyen']."</b></h5>";
                echo "<p>".$morebook['tentacgia']."</p>";
                echo "</li>";
            };
           ?>
            </div>
      <div class="clearfix"></div>
          </div>
  <div class="clearfix"></div>