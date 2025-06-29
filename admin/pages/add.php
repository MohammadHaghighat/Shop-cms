<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            اضافه کردن صفحه جدید
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>عنوان  : </label>
                    <input required name="frm[title]" type="text" class="form-control"
                           placeholder="عنوان را وارد نمایید">
                </div>
                <div class="form-group">
                    <label>کلمات کلیدی : </label>
                    <input required name="frm[keywords]" type="text" class="form-control"
                           placeholder="کلمات کلیدی را وارد نمایید">
                </div>
                <div class="form-group">
                    <label>توضیحات صفحه : </label>
                    <textarea name="frm[description]" class="form-control" cols="20" rows="3"
                              placeholder="توضیحات را وارد کنید"></textarea>
                </div>
                <div class="form-group">
                    <label>محتویات صفحه : </label>
                        <textarea name="frm[body]" id="editor1" class="form-control ckeditor " cols="20" rows="3"
                              placeholder="توضیحات را وارد کنید"></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
                <button name="addPage-btn" type="submit" class="btn btn-info">افزودن</button>
                <br>
                <div class="text-danger"><?= $errMsg ? $errMsg : "" ?></div>
            </form>

        </div>
    </section>
</div>