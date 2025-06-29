<?php
require_once "functions.php";
$errMsg = "";
switch ($page) {
    case "index" :
        $menu_items = menuItems(1, 0, 0);
        $products_list = proItems();
        $news_list = newsItems();
        $setting = settingItems();
        break;
    case "page" :
        $menu_items = menuItems(1, 0, 0);
        $setting = settingItems();
        if (isset($_GET['id']))
        $page = pagesItems($_GET['id']);
        break;
    case "login":
        if (isset($_POST['login-btn'])) {
            $data = $_POST['frm'];
            login($data);
        }
        if (isset($_GET['login-failed'])) {
            $errMsg = "ایمیل وارد شده یا کلمه عبور نامعتبر است";
        }
        break;
    case "menu-add" :
        if (isset($_POST['addMenu-btn'])) {
            $data = $_POST['frm'];
            addmenu($data);
        }
        $menu_items = menuItems();
        break;
    case "menu-list" :
        $menu_items = menuItems();
        break;
    case "menu-delete":
        header("location:dashboard.php?m=menu&a=list");
        break;
    case "menu-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_menu_item = menuItems(0, $id);
            $menu_items = menuItems();
        }
        if (isset($_POST['editMenu-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            editMenuItem($data, $id);
            header("location:dashboard.php?m=menu&a=list");
        }
        break;
    case "pro_cat-add" :
        $proCat_items = proCatItems();
        if (isset($_POST['addProCat-btn'])) {
            $data = $_POST['frm'];
            addproCat($data);
        }
        break;
    case "pro_cat-list" :
        $proCat_items = proCatItems();
        break;
    case "pro_cat-delete":
        header("location:dashboard.php?m=pro_cat&a=list");
        break;
    case "pro_cat-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_pro_cat = proCatItems($id);
            $proCat_items = proCatItems();
        }
        if (isset($_POST['editProCat-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            editProCatItem($data, $id);
            header("location:dashboard.php?m=pro_cat&a=list");
        }
        break;
    case "products-add" :
        if (isset($_POST['addPro-btn'])) {
            $data = $_POST['frm'];
            $file = $_FILES['img'];/*
            var_dump($data);
            var_dump($file);*/
            if (addPro($data, $file, $errMsg)) {
                header("location:dashboard.php?m=products&a=list");
            } else {
            }

        }
        $proCat_items = proCatItems();
        break;
    case "products-list" :
        $products_list = proItems();
        break;
    case "products-delete":
        header("location:dashboard.php?m=products&a=list");
        break;
    case "products-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_pro = proItems($id);
            $proCat_items = proCatItems();
        }
        if (isset($_POST['editPro-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            if (editProItem($data, $id, $file, $errMsg))
                header("location:dashboard.php?m=products&a=list");
            else {
                $errMsg .= "محصول ویرایش نشد";
            }
        }
        break;
    case "news_cat-add" :
        $newsCat_items = newsCatItems();
        if (isset($_POST['addNewsCat-btn'])) {
            $data = $_POST['frm'];
            addNewsCat($data);
        }
        break;
    case "news_cat-list" :
        $newsCat_items = newsCatItems();
        break;
    case "news_cat-delete":
        header("location:dashboard.php?m=news_cat&a=list");
        break;
    case "news_cat-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_news_cat = newsCatItems($id);
            $newsCat_items = newsCatItems();
        }
        if (isset($_POST['editNewsCat-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            editNewsCatItem($data, $id);
            header("location:dashboard.php?m=news_cat&a=list");
        }
        break;
    case "news-add" :
        if (isset($_POST['addNews-btn'])) {
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            if (addNews($data, $file, $errMsg)) {
                header("location:dashboard.php?m=news&a=list");
            } else {
            }

        }
        $newsCat_items = newsCatItems();
        break;
    case "news-list" :
        $news_list = newsItems();
        break;
    case "news-delete":
        header("location:dashboard.php?m=news&a=list");
        break;
    case "news-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_news = newsItems($id);
            $newsCat_items = newsCatItems();
        }
        if (isset($_POST['editNews-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            if (editNewsItem($data, $id, $file, $errMsg))
                header("location:dashboard.php?m=news&a=list");
            else {
                $errMsg .= "خبر ویرایش نشد";
            }
        }
        break;
    case "setting-edit" :
        $setting_items = settingItems();
        if (isset($_POST['editSetting-btn'])) {
            $data = $_POST['frm'];
            $logoFile = $_FILES['logo'];
            $bannerImgFile = $_FILES['banner_img'];
            if (editSetting($data, $logoFile, $bannerImgFile, $errMsg))
                header("location:dashboard.php?m=setting&a=edit");
            else {
                $errMsg .= "تنظیمات ویرایش نشد";
            }
        }
        break;
    case "pages-add" :
        if (isset($_POST['addPage-btn'])) {
            $data = $_POST['frm'];
            if (addPage($data)) {
                header("location:dashboard.php?m=pages&a=list");
            }
        }
        break;
    case "pages-list" :
        $pages_list = pagesItems();
        break;
    case "pages-delete":
        header("location:dashboard.php?m=pages&a=list");
        break;
    case "pages-edit" :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $current_page = pagesItems($id);
        }
        if (isset($_POST['editPage-btn'])) {
            $id = $_POST['frm']['id'];
            $data = $_POST['frm'];
            if (editPageItem($data, $id))
                header("location:dashboard.php?m=pages&a=list");
        }
        break;

}