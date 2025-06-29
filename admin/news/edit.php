<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            ویرایش خبر <?= $current_news[0]['title'] ?>
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                <input name="frm[id]" type="text" hidden value="<?= $current_news[0]['id'] ?>">
                <div class="form-group">
                    <label>عنوان خبر : </label>
                    <input required name="frm[title]" type="text" class="form-control" placeholder="عنوان را وارد کنید"
                           value="<?= $current_news[0]['title'] ?>">
                </div>
                <div class="form-group">
                    <label>توضیحات خبر :</label>
                    <textarea name="frm[text]" class="form-control"
                              placeholder="توضیحات را وارد نمایید"><?= $current_news[0]['text'] ?></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" name="frm[cat_id]">
                        <option value="0" <?= $current_news[0]['cat_id'] ? '' : 'Selected' ?> >بدون دسته بندی</option>
                        <?php foreach ($newsCat_items as $item): ?>
                            <option value="<?= $item['id'] ?>" <?= $current_news[0]['cat_id'] == $item['id'] ? "Selected" : "" ?>><?= $item['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="imageInput">انتخاب عکس خبر</label>
                    <input name="img" type="file" class="form-control" id="imageInput">
                    <input hidden name="frm[oldImg]" type="text" value="<?= $current_news[0]['img_path'] ?>">
                </div>
                <img width="500" src="<?= $current_news[0]['img_path'] ?>" alt="<?= $current_news[0]['title'] ?>"><br><br>
                <button name="editNews-btn" type="submit" class="btn btn-info">ویرایش</button>
                <br><br>
                <div class="text-danger"><?= $errMsg ? $errMsg : "" ?></div>
            </form>

        </div>
    </section>
</div>