<div id="container_info">
    
    <div class="left">
        <img src="images/<?php echo $char_item['avatar'] ?> " alt="img">
        <div class="character_stats" style="background-color:<?php echo $char_item['color']; ?>">
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $char_item['health'] ?></li>
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $char_item['attack'] ?></li>
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $char_item['defense'] ?></li>
                <?php if ($char_item['weapon'] !== null){?>
                <li><strong>Weapon:</strong><?php echo $char_item['weapon'];?></li>
                <?php } if ($char_item['armor'] !== null){ ?>
                <li><strong>Armor:</strong><?php echo $char_item['armor'];?></li>
                <?php }?>
            </ul>
            
        </div>
    </div>
    <div class="right">
        
        <div class="bio">
            <p><?php echo $char_item['bio'] ?></p>
        </div>
    </div>
    
</div>