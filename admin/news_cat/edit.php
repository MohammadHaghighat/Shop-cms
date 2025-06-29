<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            ویرایش دسته بندی <?= $current_news_cat[0]['title'] ?>
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="">
                <input name="frm[id]" type="text" hidden value="<?= $current_news_cat[0]['id'] ?>">
                <div class="form-group">
                    <label>عنوان منو :</label>
                    <input required name="frm[title]" type="text" class="form-control"
                           placeholder="عنوان را وارد نمایید" value="<?= $current_news_cat[0]['title'] ?>">
                </div>

                <div class="form-group">
                    <select class="form-control" name="frm[parent_id]">
                        <option value="0" <?= $current_news_cat[0]['parent_id'] ? '' : 'Selected' ?> >سر گروه</option>
                        <?php foreach ($newsCat_items as $item): ?>
                            <option value="<?= $item['id'] ?>" <?= $current_news_cat[0]['parent_id']==$item['id']?"Selected":"" ?>><?= $item['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>ترتیب نمایش : </label>
                    <input required name="frm[sort]" type="number" class="form-control"
                           placeholder="ترتیب نمایش را وارد کنید" value="<?= $current_news_cat[0]['sort'] ?>">
                </div>
                <div class="form-group">
                    <label for="activeRadio">فعال</label>
                    <input id="activeRadio" name="frm[status]" type="radio"
                           value="1" <?= $current_news_cat[0]['status'] ? 'checked' : '' ?>>
                    <label for="inActiveRadio">غیر فعال</label>
                    <input id="inActiveRadio" name="frm[status]" type="radio"
                           value="0" <?= $current_news_cat[0]['status'] ? '' : 'checked' ?>>
                </div>
                <button name="editNewsCat-btn" type="submit" class="btn btn-info">ویرایش</button>
            </form>

        </div>
    </section>
</div>