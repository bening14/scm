<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/sbadmin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/sbadmin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('asset/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- Tinymce -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('asset') ?>/tinymce/js/tinymce/tinymce.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script>
        tinymce.init({
            selector: '#textEditor',
            plugins: 'link lists image advlist fullscreen media code table emoticons textcolor codesample hr preview mediaGallery',
            menubar: false,
            toolbar: [
                'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | image media link',
                ' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code | fullscreen | mediaGallery',
            ],
        });
    </script>

</head>