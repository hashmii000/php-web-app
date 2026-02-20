<?php
include 'check_session.php';
?>
<?php
include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Banner</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="banner_insert.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Banner Image </label>
                                    <input type="file" name='image' class="form-control file" accept="image/*" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Banner Heading</label>
                                    <input type="text" name='title' class="form-control"
                                        placeholder="Enter Banner Title">
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Banner Content</label>
                                    <input type="text" name="details" class="form-control" placeholder="Enter Details">
                                </div>
                                <div class="form-group col-md-6 mt-2">
                                    <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .note-editable {
            height: 400px;
        }
    </style>
    <?php
    include('footer.php');
    ?>