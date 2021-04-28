<!doctype html>
<?php
include 'lib/functions.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= TITLE; ?></title>
</head>

<body>

<?php
echo '<h1>Hello world from PHP</h1>';
print '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
?>

<h2>Lorem ipsum</h2>
<p><?= /** @var string $content */
    $content ?></p>

<h2>Best PHP Books</h2>
<ul>
    <?php /** @var array $books */
    foreach ($books as $book): ?>
        <li><?php book_info($book); ?></li>
    <?php endforeach; ?>
</ul>

<h2>World largest countries</h2>
<?= /** @var string $list */
$list ?>

</body>
</html>