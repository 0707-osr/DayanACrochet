<?php
    // $user="up0veyhjjocrcfrz";
    // $pass="xydY6hA5kZmnt0pFBK4c";
    // $server="bqnrc0fpk7ahuuzgenga-mysql.services.clever-cloud.com";
    // $db="bqnrc0fpk7ahuuzgenga";
   include('conecction.php');

   //get first list
    $stmt = "SELECT * FROM products LIMIT 0,8";
    

    //for  pagination variables
    $valuePagination=0;
    $renderToPagination=8;//render products of 8 to 8
    $next = 8;
    $before = 0;


    $url=$_SERVER['REQUEST_URI'];
    if($url=="localhost"){
        $url="localhost"."/dora";
    }

    $valuePagination = 0;
    if(isset($_GET['pagination'])){
        $valuePagination = $_GET['pagination'];
        $before= $renderToPagination*($valuePagination-1);
        $next = $renderToPagination*$valuePagination;

        //change stmt to pagination
        $stmt = "SELECT * FROM products LIMIT ".$before.",".$next;
    }
    
    $query = mysqli_query($conection,$stmt) or die('err');
?>

<section id="product1" class="section-p1">
        <div class="pro-container">   
        <?php while($render = mysqli_fetch_array($query)){ ?>
<?php $valueSend = $render[0].",".$render[1].",".$render[2].",".$render[3].",".$render[4].",".$render[5].",".$render[6].",".$render[7]; ?>
            <div class="pro" style="height:400px">
                <img style="height:60%" src="uploads/<?php echo $render['url_image'];?>" alt="">
                <div class="des">
                    <span><?php echo $render['matiral'];?></span>
                    <h5><?php echo $render['name'];?></h5>
                    <h5 style="height:40px !important; width:100%; overflow-y; font-weight: 400; font-size:11px"><?php echo $render['description'];?></h5>
                    <div class="star">
                        <?php 
                            $starts = $render['ranking']; 
                            for($i=0;$i<$starts;$i++){
                        ?>
                            <i class="fas fa-star"></i>
                        <?php }; ?>
                    </div>
                    <h4>S/.<?php echo $render['price']; ?></h4>
                </div>
                <!-- <a href="./query/products/add-cards.php?id=<?php echo $render['id']; ?>"><i class="fal fa-shopping-cart cart"></i></a> -->

                <a  href="#add" onclick="addProduct('<?php echo $valueSend; ?>')"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        <?php }; ?>

        </div>
</section>

<section id="pagination" class="section-p1">
    <?php
        $stmtCount = "SELECT count(id) as total_row from products";
        $query = mysqli_query($conection,$stmtCount) or die('err');
        $rows = mysqli_fetch_array($query);
        $numberRows = $rows['total_row'];
        $pagination = ceil($numberRows/8);

        if($valuePagination !=0){
            $valuePagination--;
        }

        for($i=0;$i<$pagination;$i++){
            if($i == $valuePagination ){
    ?>
        <a class="active-pagination"href="?pagination=<?php echo $i+1;?>"><?php echo $i+1; ?></a>
    <?php
                continue;
        };
    ?>
        <a href="?pagination=<?php echo $i+1;?>"><?php echo $i+1; ?></a>

    <?php 
        };

        if($pagination > 3){
    ?>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    <?php } ?>
</section>