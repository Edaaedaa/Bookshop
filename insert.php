<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/_bootstrapComponents.scss" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/33wjaemng0go9n8ybj88tgm2kuztqxitd04jps730afk6udo/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

<body>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row g-3">
        <div class="col-md-6">
                <label for="prodNavn">Product Name</label>
            <label for="prodName">
                <input type="text" class="form-control" id="prodName" name="data[prodName]">
            </label>
            </div>

            <div class="col-12">
                <label class="form-label" for="prodPicture"></label>
                    <input type="file" class="form-control" id="prodPicture" name="prodPicture">
            </div>


            <div class="col-12">
                    <label for="prodDescription" class="form-label">Product Description</label>
                    <textarea class="tinymce" name="data[prodDescription]" id="prodDescription"></textarea>
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary">Create product</button>
               </div>
         </div>
    </form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.9.2/tinymce.min.js"
        integrity="sha512-Li99Fwr7Wagnan6Di9BMCxQ0DiCJYL11qn2YM/S8tGeSSPCMeMHjEOwWUXDYAu/pcyLhQko2zmvyiCphdUKC7Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            {value: 'First.Name', title: 'First Name'},
            {value: 'Email', title: 'Email'},
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        string(param) {
            
        }
    });
</script>

</body>
</html>

