<?php
if (isset($requiredJs)) {
    foreach ($requiredJs as $js => $use) {
        echo '<script type="text/javascript" charset="utf-8" src="' . WWW_JS_PATH . $js . '"></script>' . "\n";
    }
}
?>

</body>
</html>
