<?php include 'headerOne.php';?>

<section class="py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="post">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="search" placeholder="Search Product Name"/>
                        <div class="input-group-append">
                            <button type="submit" name="search_btn" class="btn btn-outline-success">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<section class="py-2 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 300px"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product['name']; ?></h3>
                        <h6"><?php echo $product['id']; ?></h3>
                        <h3>TK. <?php echo $product['price']; ?></h3>
                        <p><b>Description:</b> <?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="action.php?pages=detail&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>