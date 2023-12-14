<?php include "inc/header.php"; ?>
<!-- retiving data from the database with query and geting result by 
pasing the connection "$con"  which is in hedaerfile ,pasing query
result is convetetd into acctive array and store in feedback-->
<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($con, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<h2>feedback</h2>
<?php ?>

<!-- checking for empty data -->
<?php if (empty($feedback)) : ?>

    <p>there is no feedback</p>
<?php endif ?>

<div class="feed">

    <!-- itrating over the data using loop -->
    <?php foreach ($feedback as $item) :  ?>

        <!-- <div class="ele2">
            <div class="date">
            </div>
            <div class="ele3">
            </div>
            <div class="ele3" >
               

            </div>
            
        </div> -->
        <div class="feed">
            <p class="name"><?php echo $item['name'] ?></p>
            <p class="date"><?php echo $item['date'] ?></p>
            <p> <?php echo $item["feedback"] ?></p>
        </div>

    <?php endforeach ?>
</div>