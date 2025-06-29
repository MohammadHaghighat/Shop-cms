<?php
require_once "config.php";
function login($data)
{
    global $db;
    $sql = "SELECT * FROM $db->usersTable WHERE email='$data[email]'";
    $result = $db->query($sql);
    $row = $result->fetch(2);
    if ($row) {
        if ($row['password'] == sha1($data['password'])) {
            doLogin($row['id'], $row['fname'] . " " . $row['lname']);
        } else {
            header("location:index.php?login-failed");
        }
    } else {
        header("location:index.php?login-failed");
    }
}

function doLogin($id, $fullname)
{
    $_SESSION['userId'] = $id;
    $_SESSION['userFullName'] = $fullname;
    header("location:dashboard.php");
}

//menu func
function addMenu($data)
{
    global $db;
    $sql = "INSERT INTO $db->menuTable (title,url,parent_id,status,sort) VALUES ('$data[title]','$data[url]',$data[parent_id],$data[status],$data[sort])";
    $db->query($sql);
}

function menuItems($status = 0, $id = 0, $parent_status = "all")
{
    global $db;
    if ($parent_status === "all") {
        if ($status and $id)
            $whereStr = "WHERE status = $status and id=$id";
        elseif ($status)
            $whereStr = "WHERE status = $status";
        elseif ($id)
            $whereStr = "WHERE id=$id";
        else
            $whereStr = "";
    } else {
        $whereStr = "WHERE parent_id=$parent_status and status=1 order by sort ASC";
    }
    $sql = "SELECT * FROM $db->menuTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function subMenuItems($status = 0, $id)
{
    global $db;
    $sql = "SELECT * FROM $db->menuTable WHERE parent_id=$id";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function deleteMenuItem($id)
{
    global $db;
    $sql = "DElETE FROM $db->menuTable WHERE id=$id";
    $db->query($sql);
}

function editMenuItem($data, $id)
{
    global $db;
    $sql = "UPDATE $db->menuTable SET title='$data[title]' , url='$data[url]' , parent_id = $data[parent_id] , status=$data[status] , sort=$data[sort] WHERE id=$id";
    $db->query($sql);
}

//pro_cat func

function proCatItems($id = 0)
{
    global $db;
    if ($id) {
        $whereStr = "WHERE id=$id";
    } else {
        $whereStr = "";
    }
    $sql = "SELECT * FROM $db->proCatTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function addproCat($data)
{
    global $db;
    $sql = "INSERT INTO $db->proCatTable (title,parent_id,status,sort) VALUES ('$data[title]',$data[parent_id],'$data[status]',$data[sort])";
    $db->query($sql);
}

function deleteProCat($id)
{
    global $db;
    $sql = "DElETE FROM $db->proCatTable WHERE id=$id";
    $db->query($sql);
}

function editProCatItem($data, $id)
{
    global $db;
    $sql = "UPDATE $db->proCatTable SET title='$data[title]'  , parent_id = $data[parent_id] , status='$data[status]' , sort=$data[sort] WHERE id=$id";
    $db->query($sql);
}

//products func
function addPro($data, $file, &$errMsg = null)
{
    global $db;
    if (empty($file['name'])) {
        $errMsg = "لطفا عکس محصول را انتخاب کنید";
        return false;
    }
    if ($image_path = uploadFile($file, "products", $errMsg)) {
        $sql = "INSERT INTO $db->proTable (title,text,cat_id,price,amount,img_path) VALUES ('$data[title]','$data[text]',$data[cat_id],$data[price],$data[amount],'$image_path')";
        $db->query($sql);
        return true;
    }
}

function uploadFile($file, $folder, &$errMsg = null)
{
    if (!file_exists("images")) {
        mkdir("images");
    }
    if (!file_exists("images/$folder")) {
        mkdir("images/$folder");
    }
    $oldPath = $file['tmp_name'];
    $newPath = "images/$folder/";
    $oldFileName = $file['name'];
    $nameSplitedArray = explode(".", $oldFileName);
    $ext = end($nameSplitedArray);
    if (!in_array($ext, array("gif", "png", "jpg", "jpeg", "bmp"))) {
        $errMsg = "پسوند فایل ارسالی غیر مجاز است<br>";
        return false;
    }
    $newFileName = "img-" . rand(1000, 9999) . "." . $ext;
    if (move_uploaded_file($oldPath, $newPath . $newFileName)) {
        $image_path = $newPath . $newFileName;
        return $image_path;
    } else {
        $errMsg = "عکس ارسالی آپلود نشد";
        return false;
    }
}

function proItems($id = 0)
{
    if ($id) {
        $whereStr = "WHERE id=$id";
    } else {
        $whereStr = "";
    }
    global $db;
    $sql = "SELECT * FROM $db->proTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function deleteProItem($id)
{
    global $db;
    $sql = "DElETE FROM $db->proTable WHERE id=$id";
    $db->query($sql);
}

function editProItem($data, $id, $file, &$errMsg)
{
    global $db;
    if (empty($file['name'])) {
        $image_path = $data['oldImg'];
    } else {
        if ($image_path = uploadFile($file, "products", $errMsg)) {
        } else {
            return false;
        }
    }
    $sql = "UPDATE $db->proTable SET title='$data[title]' , text='$data[text]' , cat_id = $data[cat_id] , price = $data[price] , amount = $data[amount] , img_path = '$image_path' WHERE id=$id";
    $db->query($sql);
    return true;
}

//news_cat func


function newsCatItems($id = 0)
{
    global $db;
    if ($id) {
        $whereStr = "WHERE id=$id";
    } else {
        $whereStr = "";
    }
    $sql = "SELECT * FROM $db->newsCatTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function addNewsCat($data)
{
    global $db;
    $sql = "INSERT INTO $db->newsCatTable (title,parent_id,status,sort) VALUES ('$data[title]',$data[parent_id],'$data[status]',$data[sort])";
    $db->query($sql);
}

function deleteNewsCat($id)
{
    global $db;
    $sql = "DElETE FROM $db->newsCatTable WHERE id=$id";
    $db->query($sql);
}

function editNewsCatItem($data, $id)
{
    global $db;
    $sql = "UPDATE $db->newsCatTable SET title='$data[title]'  , parent_id = $data[parent_id] , status='$data[status]' , sort=$data[sort] WHERE id=$id";
    $db->query($sql);
}

//news func
function addNews($data, $file, &$errMsg = null)
{
    global $db;
    if (empty($file['name'])) {
        $errMsg = "لطفا عکس محصول را انتخاب کنید";
        return false;
    }
    if ($image_path = uploadFile($file, "news", $errMsg)) {
        $sql = "INSERT INTO $db->newsTable (title,text,cat_id,img_path) VALUES ('$data[title]','$data[text]',$data[cat_id],'$image_path')";
        $db->query($sql);
        return true;
    }
}


function newsItems($id = 0)
{
    if ($id) {
        $whereStr = "WHERE id=$id";
    } else {
        $whereStr = "";
    }
    global $db;
    $sql = "SELECT * FROM $db->newsTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function deleteNewsItem($id)
{
    global $db;
    $sql = "DElETE FROM $db->newsTable WHERE id=$id";
    $db->query($sql);
}

function editNewsItem($data, $id, $file, &$errMsg)
{
    global $db;
    if (empty($file['name'])) {
        $image_path = $data['oldImg'];
    } else {
        if ($image_path = uploadFile($file, "news", $errMsg)) {
        } else {
            return false;
        }
    }
    $sql = "UPDATE $db->newsTable SET title='$data[title]' , text='$data[text]' , cat_id = $data[cat_id] , img_path = '$image_path' WHERE id=$id";
    $db->query($sql);
    return true;
}

function settingItems()
{
    global $db;
    $sql = "SELECT * FROM $db->settingTable";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function editSetting($data, $logo, $banner_img, &$errMsg)
{
    global $db;
    if (empty($logo['name'])) {
        $logo_path = $data['oldLogoImg'];
    } else {
        if ($logo_path = uploadFile($logo, "logo", $errMsg)) {
        } else {
            return false;
        }
    }
    if (empty($banner_img['name'])) {
        $banner_img_path = $data['oldBannerImg'];
    } else {
        if ($banner_img_path = uploadFile($banner_img, "banner_img", $errMsg)) {
        } else {
            return false;
        }
    }
    $sql = "UPDATE $db->settingTable SET title='$data[title]' , describtion='$data[describtion]' , logo = '$logo_path' , banner_img= '$banner_img_path' ,banner_title='$data[banner_title]',tel='$data[tel]',fax='$data[fax]',address='$data[address]',email='$data[email]',copyright='$data[copyright]'";
    $db->query($sql);
    return true;
}

function addPage($data)
{
    global $db;
        $sql = "INSERT INTO $db->pageTable (title,keywords,description,body) VALUES ('$data[title]','$data[keywords]','$data[description]','$data[body]')";
        $db->query($sql);
        return true;
}
function pagesItems($id = 0)
{
    if ($id) {
        $whereStr = "WHERE id=$id";
    } else {
        $whereStr = "";
    }
    global $db;
    $sql = "SELECT * FROM $db->pageTable $whereStr";
    $result = $db->query($sql);
    $row = $result->fetchAll(2);
    return $row;
}

function deletePageItem($id)
{
    global $db;
    $sql = "DElETE FROM $db->pageTable WHERE id=$id";
    $db->query($sql);
}

function editPageItem($data, $id)
{
    global $db;
    $sql = "UPDATE $db->pageTable SET title='$data[title]' , description='$data[description]', keywords='$data[keywords]' , body='$data[body]' WHERE id=$id";
    $db->query($sql);
    return true;
}

function goToPage($m, $a)
{
    header("location:dashboard.php?m=$m&a=$a");
}