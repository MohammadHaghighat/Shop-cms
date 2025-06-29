<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            تنظیمات وبسایت
        </header>
        <div class="panel-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
                <input name="frm[id]" type="text" hidden value="<?= $setting_items[0]['id'] ?>">
                <div class="form-group">
                    <label>عنوان : </label>
                    <input required name="frm[title]" type="text" class="form-control" placeholder="تعداد را وارد کنید"
                           value="<?= $setting_items[0]['title'] ?>">
                </div>
                <div class="form-group">
                    <label>توضیحات :</label>
                    <textarea name="frm[describtion]" class="form-control"
                              placeholder="توضیحات را وارد نمایید"><?= $setting_items[0]['describtion'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="imageInput">انتخاب لوگو</label>
                    <input name="logo" type="file" class="form-control" id="imageInput">
                    <input hidden name="frm[oldLogoImg]" type="text" value="<?= $setting_items[0]['logo'] ?>"><br>
                    <img width="250" src="<?= $setting_items[0]['logo'] ?>"><br>
                </div>
                <div class="form-group">
                    <label>عنوان بنر : </label>
                    <input required name="frm[banner_title]" type="text" class="form-control" placeholder="عنوان را وارد کنید"
                           value="<?= $setting_items[0]['banner_title'] ?>">
                </div>
                <div class="form-group">
                    <label for="imageInput">انتخاب عکس بنر</label>
                    <input name="banner_img" type="file" class="form-control" id="imageInput">
                    <input hidden name="frm[oldBannerImg]" type="text" value="<?= $setting_items[0]['banner_img'] ?>"><br>
                    <img width="500" src="<?= $setting_items[0]['banner_img'] ?>"><br>
                </div>
                <div class="form-group">
                    <label>تلفن : </label>
                    <input required name="frm[tel]" type="text" class="form-control"
                           placeholder="تلفن را وارد کنید"
                           value="<?= $setting_items[0]['tel'] ?>">
                </div>
                <div class="form-group">
                    <label>فکس : </label>
                    <input required name="frm[fax]" type="text" class="form-control" placeholder="فکس را وارد کنید"
                           value="<?= $setting_items[0]['fax'] ?>">
                </div>
                <div class="form-group">
                    <label>آدرس :</label>
                    <textarea name="frm[address]" class="form-control"
                              placeholder="آدرس را وارد نمایید"><?= $setting_items[0]['address'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>ایمیل : </label>
                    <input required name="frm[email]" type="email" class="form-control" placeholder="ایمیل را وارد کنید"
                           value="<?= $setting_items[0]['email'] ?>">
                </div>
                <div class="form-group">
                    <label>متن کپی رایت : </label>
                    <input required name="frm[copyright]" type="text" class="form-control" placeholder="متن کپی رایت را وارد کنید"
                           value="<?= $setting_items[0]['copyright'] ?>">
                </div>
                <button name="editSetting-btn" type="submit" class="btn btn-info">ویرایش</button>
                <br><br>
                <div class="text-danger"><?= $errMsg ? $errMsg : "" ?></div>
            </form>

        </div>
    </section>
</div>