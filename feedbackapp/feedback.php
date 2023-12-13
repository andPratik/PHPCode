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


<style>
    .date {
        position: absolute;
        top: 0;
        right: 0;
        margin: 2%;

    }
</style>
<!-- itrating over the data using loop -->
<?php foreach ($feedback as $item) :  ?>
    <div class="" style="background-color:#adadad; padding: 3%; margin:2% ; text-align:center;position:relative">

        <div class="date"><?php echo $item['date'] ?>
        </div>
        <div class="" style=" padding:2px; margin:5px 0">
            <?php echo $item["feedback"] ?>

        </div>
        <div class=""><?php echo $item['name'] ?>
        </div>
    </div>
<?php endforeach ?>