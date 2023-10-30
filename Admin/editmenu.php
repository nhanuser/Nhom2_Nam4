<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h2>Xác nhận sửa bài viết</h2>
    </div>
    <div class="container shadow p-5">
        <div class="row pb-2">
            <h2>Sửa bài viết <span></span></h2>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div asp-validation-summary="All"></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tiêu đề:</label>
                    <input type="text" name="title" class="form-control mb-3" value="">
                    <span class="alert-danger"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Hình ảnh:</label>
                        <img id="previewImage" src="" alt="Hình ảnh bài viết" style="width: 200px;">
                        <img id="previewImage" src="" alt="Hình ảnh bài viết" style="display: none; width: 200px;">
                    <input type="file" name="blogImages" class="form-control mb-3" onchange="previewFile()">
                    <span class="alert-danger"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Mô tả:</label>
                    <input type="text" name="description" class="form-control mb-3" value="">
                    <span class="alert-danger"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Thể loại:</label>
                    <select class="form-control mb-3" name="catID">
                        <option>-- Lựa chọn thể loại --</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Ngày đăng bài:</label>
                    <input type="date" name="create_date" class="form-control mb-3" value="">
                    <span class="alert-danger"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Nội dung bài viết:</label>
                    <textarea name="blogContent" class="form-control mb-3" id="your_summernote"></textarea>
                </div>
            </div>
            <button type="submit" name="sua" class="btn btn-lg btn-primary p-2"><i class="bi bi-file-plus-fill"></i>Lưu</button>
            <a href="post.php" class="btn btn-lg btn-warning p-2">Quay lại</a>
        </form>
</main>
<?php
include 'inc/footer.php';
?>