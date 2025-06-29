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
                    <th>دسته بندی</th>
                    <th>عکس</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($news_list as $new_list):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $new_list['title'] ?></td>
                        <td>
                            <?php
                            if ($new_list['cat_id'] == 0) {
                                echo "بدون دسته بندی";
                            } else {
                                $newsCat = newsCatItems($new_list['cat_id']);
                                echo $newsCat[0]['title'];
                            }
                            ?>
                        </td>
                        <td><img width="30" src="<?= $new_list['img_path'] ?>"/></td>
                        <td><a href="dashboard.php?m=news&a=edit&id=<?= $new_list['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید خبر <?= $new_list["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=news&a=delete&id=<?= $new_list['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>