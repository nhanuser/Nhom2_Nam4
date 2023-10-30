<?php 
    include("connect.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Danh sách Menu</h1>
  
</div><!-- End Page Title -->
<p>
  <a href="insert-menu.php" type="button" class="btn btn-success" ><i class="bi bi-file-earmark-text me-1"></i>Thêm menu</a>
</p>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
         
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">MenuName</th>
                <th scope="col">Order</th>
                <th scope="col">Parent</th>
                <th scope="col">Active</th>
                <th scope="col">MenuTitle</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM menu";
            $qr = mysqli_query($conn, $sql);
            if ($qr) {
                while ($row = mysqli_fetch_array($qr)) {
                    ?>
              <tr>                
                <td scope="row"><?php echo $row['MenuID']; ?></td>
                <td><?php echo $row['MenuName']; ?></td>
                <td><?php echo $row['Orders']; ?></td>
                <td><?php echo $row['Parent']; ?></td>
                <td><?php echo $row['IsActive']; ?></td>
                <th ><?php echo $row['MenuTitle']; ?></th>
              </tr>
              <?php
                }
            }
            ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
