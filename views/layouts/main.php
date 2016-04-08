<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>MyBlog | Welcome</title>

<link rel="icon" type="image/x-icon" href="/public/img/favicon.ico" />
<link rel="stylesheet" href="/public/css/foundation.min.css">
<link rel="stylesheet" href="/public/css/main.css">
</head>
<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text"><a href="/">My Blog</a></li>
            </ul>
        </div> <!-- end top-bar-left -->

        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="/posts/new">Add New</a></li>
            </ul>
        </div> <!-- end top-bar-right -->
    </div> <!-- end top-bar -->


    <!-- include the view file according to the url defined in route -->
    <?php include(VIEW_PATH.$route['controller'].DS.$route['view'].'.php'); ?>



<script src="/public/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
</body>
</html>

