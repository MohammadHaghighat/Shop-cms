<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست اخبار
            </header>
            <table class="table table-striped border-top" id="sample_1">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>کلمات کلیدی</th>
                    <th>آدرس</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($pages_list as $val):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $val['title'] ?></td>
                        <td><?= $val['keywords'] ?></td>
                        <td><input readonly dir="ltr" size="5" type="text" class="form-control" value="<?="pages.php?id=".$val['id'] ?>"></td>
                        <td><a href="dashboard.php?m=pages&a=edit&id=<?= $val['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید صفحه <?= $val["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=pages&a=delete&id=<?= $val['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>