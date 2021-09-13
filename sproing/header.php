<?php wp_head(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<header>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sp-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo get_page_link( get_page_by_title( 'Home Page' )->ID );?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'blog' )->ID );?>">Blog</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>