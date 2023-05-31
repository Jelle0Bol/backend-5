
<div class="container">
    <a class="item" href="?character_info=<?php echo $x ?> ">
        <div class="left">
          <img class="avatar" src="images/<?php echo $char_item['avatar'] ?> " alt="img">
        </div>
        <div class="right">
            <h2> <?php echo $char_item['name'] ?></h2>
            <div class="stats">
              <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-heart"></i></span>  <?php echo $char_item['health'] ?> </li>
                  <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $char_item['attack'] ?> </li>
                  <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $char_item['defense'] ?> </li>
              </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
</div>