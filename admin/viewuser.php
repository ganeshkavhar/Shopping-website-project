<?php

	include 'navbar.php';

    if (isset($_SESSION['admin'])) {

        $select = "select * from user";
        $run = mysqli_query($connection,$select);

?>
    <!-- Containr continue -->

    <div class="main">
        <div class="container" style="padding-top:50px;">
            <h2 class="text-center"><b>All Users</b></h2>
            <div class="row">
                <div class="col-md-12">
                    <table id="datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $x =1;
                            while($fet = mysqli_fetch_assoc($run)){ ?>
                            <tr>
                                <td><?php echo $x; ?></td>
                                <td><?php echo $fet['username']; ?></td>
                                <td><?php echo $fet['email']; ?></td>
                                <td><?php echo $fet['contact']; ?></td>
                                <td><?php echo $fet['address']; ?></td>
                                <td> <input type="button" id="<?php echo $row['id']; ?>" class="delete btn btn-danger" value="Delete"> </td>
                            </tr>

                            <?php $x++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
<?php
    
    include 'footer.php';

?>
<script>
    $(document).on('click','.delete', function(){
        var userid = $(this).attr('id');

        $.ajax({
            method: 'POST',
            url: 'delete.php',
            data: {userid:userid},
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