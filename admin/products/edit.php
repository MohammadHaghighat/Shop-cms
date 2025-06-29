<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            ویرایش محصول <?= $current_pro[0]['title'] ?>
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                <input name="frm[id]" type="text" hidden value="<?= $current_pro[0]['id'] ?>">
                <div class="form-group">
                    <label>عنوان محصول : </label>
                    <input required name="frm[title]" type="text" class="form-control" placeholder="عنوان را وارد کنید"
                           value="<?= $current_pro[0]['title'] ?>">
                </div>
                <div class="form-group">
                    <label>توضیحات محصول :</label>
                    <textarea name="frm[text]" class="form-control"
                              placeholder="توضیحات را وارد نمایید"><?= $current_pro[0]['text'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>قیمت محصول : </label>
                    <input required name="frm[price]" type="number" class="form-control" placeholder="قیمت را وارد کنید"
                           value="<?= $current_pro[0]['price'] ?>">
                </div>
                <div class="form-group">
                    <label>تعداد محصول : </label>
                    <input required name="frm[amount]" type="number" class="form-control"
                           placeholder="تعداد را وارد کنید"
                           value="<?= $current_pro[0]['amount'] ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="frm[cat_id]">
                        <option value="0" <?= $current_pro[0]['cat_id'] ? '' : 'Selected' ?> >بدون دسته بندی</option>
                        <?php foreach ($proCat_items as $item): ?>
                            <option value="<?= $item['id'] ?>" <?= $current_pro[0]['cat_id'] == $item['id'] ? "Selected" : "" ?>><?= $item['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="imageInput">انتخاب عکس محصول</label>
                    <input name="img" type="file" class="form-control" id="imageInput">
                    <input hidden name="frm[oldImg]" type="text" value="<?= $current_pro[0]['img_path'] ?>">
                </div>
                <img width="500" src="<?= $current_pro[0]['img_path'] ?>" alt="<?= $current_pro[0]['title'] ?>"><br><br>
                <button name="editPro-btn" type="submit" class="btn btn-info">ویرایش</button>
                <br><br>
                <div class="text-danger"><?= $errMsg ? $errMsg : "" ?></div>
            </form>

        </div>
    </section>
</div>