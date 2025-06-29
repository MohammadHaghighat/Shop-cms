<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منوها
            </header>
            <table class="table table-striped border-top" id="sample_1">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>لینک</th>
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
                foreach ($menu_items as $menu_item):?>
                    <tr>
                        <td class="text-right"><?= $i++ ?></td>
                        <td><?= $menu_item['title'] ?></td>
                        <td><?= $menu_item['url'] ?></td>
                        <td>
                            <?php
                            if ($menu_item['parent_id'] == 0) {
                                echo "سرگروه";
                            } else {
                                $parent_menu_items = menuItems(0,$menu_item['parent_id']);
                                echo $parent_menu_items[0]['title'];
                            }
                            ?>
                        </td>
                        <td class="text-<?= $menu_item['status'] ? "success" : "danger" ?>"><?= $menu_item['status'] ? "فعال" : "غیرفعال" ?></td>
                        <td><?= $menu_item['sort'] ?></td>
                        <td><a href="dashboard.php?m=menu&a=edit&id=<?= $menu_item['id'] ?>"
                               class="btn btn-primary icon-pencil"></a></td>
                        <td><a onclick="return confirm('آیا میخواهید منوی <?= $menu_item["title"] ?> را حذف کنید ؟ ')"
                               href="dashboard.php?m=menu&a=delete&id=<?= $menu_item['id'] ?>"
                               class="btn btn-danger icon-remove"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>