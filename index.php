<?php
require_once __DIR__."/db.php"
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src = "script.js"></script>
</head>
<body>
<input type="button" onclick="SaveContent()" value="Save">
<input type="button" onclick="ShowContent()" value="Show Saved Content">
<form action="" method="post">
    <input type="text" name="processor" placeholder="Find Processor">
    <input type="submit" value="Input"><br>
</form>
<br>
<form action="" method="post">
    <select name="software">
        <option value="Microsoft Office 2019">Microsoft Office 2019</option>
        <option value="Adobe Photoshop">Adobe Photoshop</option>
        <option value="PHP Storm">PHP Storm</option>
    </select>
    <input type="submit" value="Input"><br>
</form>
<br>
<form action="" method="post">
    <input type="submit" value="Check guarantee" name="guarantee"><br>
</form>
<br>
<?php
if (isset($_POST["processor"])) {
    findProcessor($_POST["processor"]);
} elseif (isset($_POST["software"])) {
    findSoftware($_POST["software"]);
}elseif (isset($_POST["guarantee"])) {
    findGuarantee();
}
?>
<br>
<div id="saved_content">

</div>
</body>
</html>