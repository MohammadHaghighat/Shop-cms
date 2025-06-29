<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی اخبار
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
                foreach ($newsCat_items as $newsCat_item):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $newsCat_item['title'] ?></td>
                        <td>
                            <?php
                            if ($newsCat_item['parent_id'] == 0) {
                                echo "سرگروه";
                            } else {
                                $parent_newsCat_items = newsCatItems($newsCat_item['parent_id']);
                                echo $parent_newsCat_items[0]['title'];
                            }
                            ?>
                        </td>
                        <td class="text-<?= $newsCat_item['status'] ? "success" : "danger" ?>"><?= $newsCat_item['status'] ? "فعال" : "غیرفعال" ?></td>
                        <td><?= $newsCat_item['sort'] ?></td>
                        <td><a href="dashboard.php?m=news_cat&a=edit&id=<?= $newsCat_item['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید دسته بندی <?= $newsCat_item["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=news_cat&a=delete&id=<?= $newsCat_item['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>