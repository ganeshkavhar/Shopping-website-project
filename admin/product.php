<?php

	include 'navbar.php';
    if(isset($_SESSION['admin'])){
?>
<!-- Containr continue -->

<div class="main">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Add Product</h1>
                <?php
           
                    if(isset($_REQUEST['add_product']))
                    {   
                        
                        $p_name=$_REQUEST['pname'];
                        $cate=$_REQUEST['cate'];
                        $a_price=$_REQUEST['a_price'];
                        $o_price=$_REQUEST['o_price'];
                        
                        $pic1 = $_FILES['pic1']['tmp_name'];
                        $img_name1 = $_FILES['pic1']['name'];
                        $name1="product_img/".$img_name1;
                        move_uploaded_file($pic1,$name1);

                        $pic2 = $_FILES['pic2']['tmp_name'];
                        $img_name2 = $_FILES['pic2']['name'];
                        $name2="product_img/".$img_name2;
                        move_uploaded_file($pic2,$name2);

                        $query = "INSERT INTO `product`(`name`, `category`, `actual_price`, `our_price`, `photo_f`, `photo_b`) VALUES ('$p_name','$cate','$a_price','$o_price','$img_name1','$img_name2')";
                        $query_run=mysqli_query($connection,$query);
                        echo "<h3 class='text-center'>SuccessFully Added</h3>";
                        
                    }
                ?>

                <form method="post" enctype="multipart/form-data">

                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="text" class="form-control" name="pname" placeholder="Product Name" class="form-control" required="" />
                    </div>
                    
                    <div class="form-group col-md-6 col-md-offset-3">
                          <select class="form-control" id="sel1" name="cate">
                            <option>Men Fashion</option>
                            <option>Woman Fashion</option>
                          </select>
                    </div>

                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="number" class="form-control" name="a_price" placeholder="Actual Price" class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="number" class="form-control" name="o_price" placeholder="Our Price" class="form-control" required="" />
                    </div>
                    
                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="file" class="form-control" name="pic1" class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="file" class="form-control" name="pic2" class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6 col-md-offset-3">
                        <input type="submit" class="btn btn-info" name="add_product" class="form-control" value="Add Product">
                    </div>
                </form>
        </div> 

        <div class="container" style="margin-top:50px;">
               
                        <div class="row">
                            <h2 class="text-center"><b>All Product</b></h2>
                        </div>
                
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                            <?php 
                                $query="SELECT * FROM product";
                                $query_run=mysqli_query($connection,$query); ?>
                            <table id="datatable" class="table table-striped table-bordered" width="100%" >
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Actual Price</th>
                                            <th>Our Price</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                       <?php
                                            $x=1;

                                            if (isset($_POST['update_p'])) {
                                                    
                                                    $id = $_POST['id'];
                                                    $pname = $_POST['pname'];
                                                    $cate = $_POST['cate'];
                                                    $a_price = $_POST['a_price'];
                                                    $o_price = $_POST['o_price'];

                                                    $pic1 = $_FILES['pic1']['tmp_name'];
                                                    $img_name1 = $_FILES['pic1']['name'];
                                                    $name1="product_img/".$img_name1;
                                                    move_uploaded_file($pic1,$name1);

                                                    $pic2 = $_FILES['pic2']['tmp_name'];
                                                    $img_name2 = $_FILES['pic2']['name'];
                                                    $name2="product_img/".$img_name2;
                                                    move_uploaded_file($pic2,$name2);

                                                    $update = "UPDATE `product` SET `name`='$pname',`category`='$cate',`actual_price`='$a_price',`our_price`='$o_price',`photo_f`='$img_name1',`photo_b`='$img_name2' WHERE id='$id'";
                                                    $run = mysqli_query($connection,$update);
                                            }
                                            
                                            while($row = mysqli_fetch_assoc($query_run))
                                            { ?>
                                        
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['category'] ?></td>
                                                <td><?php echo $row['actual_price'] ?></td>
                                                <td><?php echo $row['our_price'] ?></td>
                                                
                                                <td> <input type="button" id="<?php echo $row['id']; ?>" class="delete btn btn-danger" value="Delete"> </td>
                                                <td> <input type="button" id="<?php echo $row['id']; ?>" class="update btn btn-warning" value="Update" data-toggle="modal" data-target="#<?php echo $row['id']; ?>"> </td>

                                                <div id="<?php echo $row['id']; ?>" class="modal fade" role="dialog">
                                                  <div class="modal-dialog modal-lg"">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"><?php echo $row['name'] ?></h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="post"  enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <input type="text" value="<?php echo $row['name'] ?>" class="form-control" name="pname" class="form-control" />
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="hidden" value="<?php echo $row['id']; ?>" class="form-control" name="id" class="form-control" />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                  <select class="form-control" id="sel1" name="cate">
                                                                    <option>Men Fashion</option>
                                                                    <option>Woman Fashion</option>
                                                                  </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="number" value="<?php echo $row['actual_price'] ?>" class="form-control" name="a_price" class="form-control" />
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="number" value="<?php echo $row['our_price'] ?>" class="form-control" name="o_price" class="form-control" />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label><a href="product_img/<?php echo $row['photo_f'] ?>"><?php echo $row['photo_f'] ?></a></label>
                                                                <input type="file" class="form-control" name="pic1" class="form-control" />
                                                            </div>

                                                            <div class="form-group">
                                                                <label><a href="product_img/<?php echo $row['photo_b'] ?>"><?php echo $row['photo_b'] ?></a></label>
                                                                <input type="file" class="form-control" name="pic2" class="form-control" />
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-success" name="update_p" class="form-control" value="Update Product">
                                                            </div>
                                                        </form>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            <?php
                                                echo "</tr>";
                                                
                                                $x++;
                                            }
                                       ?> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div> 
</div>



<?php
	
	include 'footer.php';

?>
<script>
    $(document).on('click','.delete', function(){
        var id = $(this).attr('id');

        $.ajax({
            method: 'POST',
            url: 'delete.php',
            data: {id:id},
            success: function(data){
                alert("Deleted Successfully");
            }
        });
        $(this).parent().parent().fadeOut(300,function(){
            $(this).remove();
        });
    });
</script>

<?php } else {
    echo "<script>
                    window.location='index.php';
                  </script>";
}

?>