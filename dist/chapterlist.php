<div class="catalog-list">
      <h4> <b>Danh sách chương</b></h4>
      <ul>
      <?php
      $sql_chapter = "SELECT  id, ten, so FROM `chuong` WHERE id_truyen = ".$id." order by so";
      $rst = $conn->query($sql_chapter);
      if($rst){
      while($chapter = $rst->fetch_assoc()){
         echo " <li><a href=\"..\dist\doctruyen.php?id=".$chapter["id"]."\" title=\"Chương ".$chapter["so"]." : ".$chapter["ten"]."\">";
         echo "<font style=\"vertical-align:inherit;\">";
         echo "<font style=\"vertical-align:inherit;\">Chương ".$chapter["so"]." : ".$chapter["ten"]."</font>";
         echo "</font>
          </a></li>";
      }
      }
      else echo "chưa có chương nào được up";
      ?>

    <div class="clearfix"></div>
      </ul>
 <div class="clearfix"></div>
</div>

     </div>
<div class="clearfix"></div>