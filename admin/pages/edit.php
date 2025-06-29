<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            ویرایش صفحه <?= $current_page[0]['title'] ?>
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                <input name="frm[id]" type="text" hidden value="<?= $current_page[0]['id'] ?>">
                <div class="form-group">
                    <label>عنوان صفحه : </label>
                    <input required name="frm[title]" type="text" class="form-control" placeholder="صفحه را وارد کنید"
                           value="<?= $current_page[0]['title'] ?>">
                </div>
                <div class="form-group">
                    <label>کلمات کلیدی صفحه : </label>
                    <input required name="frm[keywords]" type="text" class="form-control" placeholder="صفحه را وارد کنید"
                           value="<?= $current_page[0]['keywords'] ?>">
                </div>
                <div class="form-group">
                    <label>توضیحات صفحه :</label>
                    <textarea name="frm[description]" class="form-control"
                              placeholder="توضیحات را وارد نمایید"><?= $current_page[0]['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>محتویات صفحه : </label>
                    <textarea name="frm[body]" id="editor1" class="form-control ckeditor " cols="20" rows="3"
                              placeholder="توضیحات را وارد کنید"><?= $current_page[0]['body'] ?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
                <button name="editPage-btn" type="submit" class="btn btn-info">ویرایش</button>
                <br><br>
                <div class="text-danger"><?= $errMsg ? $errMsg : "" ?></div>
            </form>

        </div>
    </section>
</div>