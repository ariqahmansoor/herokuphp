<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Put your description here.">
  <!-- fix: Tap targets are not sized appropriately -->
  <style data-meta="MuiButtonBase">
    .webchat-MuiButtonBase-root {
        padding:48px;
        margin:8px;
    }
  </style>
</head>
<body>
  <!-- fix : Image elements do not have [alt] attributes -->
  <img src="img/wallpaper.jpg" alt="view of the ocean from a mountain top">
  <!-- fix: [user-scalable="no"] is used in the <meta name="viewport"> element or the [maximum-scale] attribute is less than 5 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
  <!-- fix : Serve images in next-gen formats. -->
  <img src="img/wallpaper.avif" alt="view of the ocean from a mountain top">
</body>
</html>
