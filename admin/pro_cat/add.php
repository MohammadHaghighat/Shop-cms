<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            اضافه کردن دسته بندی جدید
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="dashboard.php?m=pro_cat&a=add">
                <div class="form-group">
                    <label>عنوان دسته بندی :</label>
                    <input required name="frm[title]" type="text" class="form-control"
                           placeholder="عنوان را وارد نمایید">
                </div>
                <div class="form-group">
                    <label>ترتیب نمایش : </label>
                    <input required name="frm[sort]" type="number" class="form-control"
                           placeholder="ترتیب نمایش را وارد کنید">
                </div>
                <div class="form-group">
                    <select class="form-control" name="frm[parent_id]">
                        <option value="0">سر گروه</option>
                        <?php foreach ($proCat_items as $item): ?>
                            <option value="<?= $item['id'] ?>"><?= $item['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="activeRadio">فعال</label>
                    <input id="activeRadio" name="frm[status]" type="radio" value="1" checked>
                    <label for="inActiveRadio">غیر فعال</label>
                    <input id="inActiveRadio" name="frm[status]" type="radio" value="0">
                </div>
                <button name="addProCat-btn" type="submit" class="btn btn-info">افزودن</button>
            </form>

        </div>
    </section>
</div>