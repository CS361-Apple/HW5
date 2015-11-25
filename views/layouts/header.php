<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Circled_latin_capital_letter_k.svg/2000px-Circled_latin_capital_letter_k.svg.png">
    <title><?php echo $pageTitle ?></title>

    <?php
    if (isset($requiredCss)) {
        foreach ($requiredCss as $css => $use) {
            echo '<link rel="stylesheet" href="' . WWW_CSS_PATH . $css . '" type="text/css" media="all" charset="utf-8" />' . "\n";
        }
    }

    if (isset($requiredJsInHead)) {
        foreach ($requiredJsInHead as $js => $use) {
            echo '<script type="text/javascript" charset="utf-8" src="' . WWW_JS_PATH . $js . '"></script>' . "\n";
        }
    }

    ?>
</head>
