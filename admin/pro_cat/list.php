<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی محصولات
            </header>
            <table class="table table-striped border-top" id="sample_1">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>سرگروه</th>
                    <th>وضعیت</th>
                    <th>ترتیب نمایش</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($proCat_items as $proCat_item):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $proCat_item['title'] ?></td>
                        <td>
                            <?php
                            if ($proCat_item['parent_id'] == 0) {
                                echo "سرگروه";
                            } else {
                                $parent_proCat_items = proCatItems($proCat_item['parent_id']);
                                echo $parent_proCat_items[0]['title'];
                            }
                            ?>
                        </td>
                        <td class="text-<?= $proCat_item['status'] ? "success" : "danger" ?>"><?= $proCat_item['status'] ? "فعال" : "غیرفعال" ?></td>
                        <td><?= $proCat_item['sort'] ?></td>
                        <td><a href="dashboard.php?m=pro_cat&a=edit&id=<?= $proCat_item['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید دسته بندی <?= $proCat_item["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=pro_cat&a=delete&id=<?= $proCat_item['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>