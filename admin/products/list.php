<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست محصولات
            </header>
            <table class="table table-striped border-top" id="sample_1">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>عکس</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($products_list as $product_list):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $product_list['title'] ?></td>
                        <td>
                            <?php
                            if ($product_list['cat_id'] == 0) {
                                echo "بدون دسته بندی";
                            } else {
                                $proCat = proCatItems($product_list['cat_id']);
                                echo $proCat[0]['title'];
                            }
                            ?>
                        </td>
                        <td><?= $product_list['price'] ?></td>
                        <td><?= $product_list['amount'] ?></td>
                        <td><img width="30" src="<?= $product_list['img_path'] ?>"/></td>
                        <td><a href="dashboard.php?m=products&a=edit&id=<?= $product_list['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید محصول <?= $product_list["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=products&a=delete&id=<?= $product_list['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>