<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Layout</title>
    <link rel="stylesheet" href="styless.css">
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="header">
        <h1><i class="fas fa-folder"></i> Tài liệu</h1>
        <input type="text" placeholder="Tìm kiếm">
    </div>
    <div class="filter-options">
        <p>Tài liệu gần đây</p>
        <p>Do tôi sở hữu</p>
    </div>

    <div class="document-grid" id="documentGrid">
        <?php
        include "TrangChu_Model.php";
        $model = new TrangChu_Model();
        $users = $model->view();
        ?>

        <?php foreach ($users as $gc): ?>
            <div class="document-card">
                <i class="fas fa-file-alt fa-3x document-icon"></i>
                <p class="title"><?php echo $gc['tenGC']?></p>
                <p class="date">Đã mở 24 thg 10, 2024</p>
            </div>
        <?php endforeach; ?>



    </div>


    <div class="add-button" id="addButton">
        <i class="fas fa-plus"></i>
    </div>

    <script src="s">

    </script>
</body>

</html>