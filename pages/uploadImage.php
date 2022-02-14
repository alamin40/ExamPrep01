<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">Add Image</div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">


                            <div class="form-group row">
                                <label class="col-md-3">Insert Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="product_btn" class="btn btn-outline-success" value="Submit" />
                                </div>
                            </div>


                                <div class="form-group row">
                                    <label class="col-md-3">Image: </label>
                                    <div class="col-md-9">
                                        <img src="<?php echo $result;?>" alt="" class="card-img-top" style="height: 300px"/>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include 'footer.php' ?>
