<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            اضافه کردن محصول جدید
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="dashboard.php?m=products&a=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label>عنوان محصول : </label>
                    <input required name="frm[title]" type="text" class="form-control" placeholder="عنوان را وارد نمایید">
                </div>
                <div class="form-group">
                    <label>توضیحات محصول : </label>
                    <textarea name="frm[text]" class="form-control" cols="20" rows="3" placeholder="توضیحات را وارد کنید"></textarea>
                </div>
                <div class="form-group">
                    <label>قیمت محصول : </label>
                    <input required name="frm[price]" type="number" class="form-control" placeholder="قیمت را وارد نمایید">
                </div>
                <div class="form-group">
                    <label>تعداد محصول : </label>
                    <input required name="frm[amount]" type="number" class="form-control" placeholder="تعداد را وارد نمایید">
                </div>
                <div class="form-group">
                    <select class="form-control" name="frm[cat_id]">
                        <option value="0">بدون دسته بندی</option>
                        <?php foreach ($proCat_items as $item):?>
                            <option value="<?=$item['id']?>"><?=$item['title']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="imageInput">انتخاب عکس محصول</label>
                    <input name="img" type="file" class="form-control" id="imageInput">
                </div>
                <button name="addPro-btn" type="submit" class="btn btn-info">افزودن</button>
                <br>
                <div class="text-danger"><?=$errMsg?$errMsg:"" ?></div>
            </form>

        </div>
    </section>
</div>