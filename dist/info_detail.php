<div class="info-detail">
          <div class="book-intro">
          <p><?php echo $truyen['mota'];?></p>
          </div>
          </div>
        <div class="book-state">
          <ul>
          <!--- UPDATOR ------------->
            <li>
                <p> Người đăng </p>
                 <div class="updator">
        <a class="bluetag"><?php  $sql_nguoidang = "SELECT * FROM `taikhoan` where id= ".$truyen['id_taikhoan'];
        $rst = $conn->query($sql_nguoidang);
        $nguoidang = $rst->fetch_assoc();
        echo $nguoidang['ten'];
        ?> </a>
  </div>
            </li>
        <div class="clearfix"></div>
         <!--- NEW CATALOG ------------->
        <li>
        <?php
        $sql_lastedchap="SELECT id,so,ten,thoigian from chuong where id in (select max(id) from chuong group by id_truyen having id_truyen = ".$id." )";
         $rst = $conn->query($sql_lastedchap);
        $lastedchap = $rst->fetch_assoc();
?>
                <p> Chương mới </p>
                 <div class="new-catalog">
          <a href=<?php echo "../dist/doctruyen.php?id=".$lastedchap["id"];?> > <?php if($lastedchap) echo "chương ".$lastedchap['so'].": ".$lastedchap["ten"]; else echo "Chưa có chương nào được cập "?> </a>
        <h6> <?php echo $lastedchap['thoigian'];?> </h6>
  </div>
            </li>
        <div class="clearfix"></div>
        <!--- Tags------------->
           <li>
                <p> Tags </p>
                 <div class="tags">
         <?php 
         $sql_tag = "SELECT * FROM `tag` WHERE id_truyen = ".$id;
         $rst = $conn->query($sql_tag);
         while($tag = $rst->fetch_assoc()){
             echo " <a  class=\"bluetag\">".$tag['tag']."</a>";
         }
         ?>
  </div>
            </li>
        <div class="clearfix"></div>
          </ul>
         </div>
      <div class="clearfix"></div>