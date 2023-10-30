<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'connect.php';
?>
<main id="main" class="main">

<div class="pagetitle">
    <h2>Danh sách bài viết</h2>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active">Bài viết</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<p>
    <a type="button" class="btn btn-success" href="addpost.php"><i class="bi bi-file-earmark-text me-1"></i>Thêm
        bài viết</a>
</p>
<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body mt-4">
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">#</th>
                                <th class="col-1 text-center">Hình ảnh</th>
                                <th class="col-1 text-center">Tiêu đề</th>
                                <th class="col-1 text-center">Mô tả</th>
                                <th class="col-1 text-center">Thời gian đăng</th>
                                <th class="col-2 text-center">Nội dung</th>
                                <th class="col-1 text-center">Người đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            $sql = "SELECT * FROM post";
            $qr = mysqli_query($conn, $sql);
            if ($qr) {
                while ($row = mysqli_fetch_array($qr)) {
                    ?>
                        <tr>
                                <th class="col-1 text-center"><?php echo $row["PostID"] ?></th>
                                <th class="col-1 text-center"><?php echo $row["Images"] ?></th>
                                <th class="col-1 text-center"><?php echo $row["Title"] ?></th>
                                <th class="col-1 text-center"><?php echo $row["Abstract"] ?></th>
                                <th class="col-1 text-center"><?php echo $row["CreateDate"] ?></th>
                                <th class="col-2 text-center"><?php echo $row["Contents"] ?></th>
                                <th class="col-1 text-center"><?php echo $row["Author"] ?></th>
                            </tr>
                            <?php
                }
            }
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</main><!-- End #main -->
</body>
<?php
include 'inc/footer.php';
?>