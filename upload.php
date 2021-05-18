<?php include_once 'config/init.php'; ?>

<?php


$job = new Job;

if (isset($_POST['submit'])) {

    if (!empty($_POST['title'])) {

        $file = $_FILES['my_image'];
        $fileName = $_FILES['my_image']['name'];
        $fileTmpName = $_FILES['my_image']['tmp_name'];
        $fileSize = $_FILES['my_image']['size'];
        $fileError = $_FILES['my_image']['error'];
        $fileType = $_FILES['my_image']['type'];
        // $img_ex = pathinfo($fileName, PATHINFO_EXTENSION);

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {

            $new_img_name = uniqid("IMG-", true) . '.' . $fileActualExt;
            // echo "$new_img_name";
            $img_upload_path = 'uploads/' . $new_img_name;
            move_uploaded_file($fileTmpName, $img_upload_path);

            // Insert into database
            $data = array();
            $data['img'] = $new_img_name;
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['form_description'];
            $data['username'] = $_COOKIE['user'];

            print_r($data);

            if ($job->create($data)) {

                header('Location: index.php');
            } else {
                echo "Failed";
            }
        } else {
            echo "list this type is not allowed";
            $em = "You can't upload files of this type";
            // header("Location: upload.php?error=$em");
        }
    } else {
        echo 'Something went wrong';
    }
}


$template = new Template('templates/list-create.php');


echo $template;
