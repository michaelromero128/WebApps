<?php
if(!isset($page_title)) { $page_title = 'UPDATE PAGE TITLE'; }
if(!isset($style_sheet)){ $style_sheet = ('/stylesheets/default.css');}
?>


<!doctype html>

<html lang="en">
<head>
    <title><?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for($style_sheet); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>

<body>
 <div id = page-container>
     <header id="header">
         <h1>TweetBook - Home Page</h1>
     </header>
     <navigation>
         <ul>
         </ul>
     </navigation>
     <main id="content-container">

