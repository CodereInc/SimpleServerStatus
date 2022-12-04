<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"></script>
    </head>
    <body>
        <?php
            $filename = scandir("json/");
            $conname = array();
            foreach ($filename as $k => $v) {
                $conname[] = substr($v, 0, strpos($v, "."));
            }
            $handler = opendir('json');
            while ($file = readdir($handler)) {
                if ($file != "." && $file != ".." && $file != "index.php") {
                        $filename = $dir_handle . "json/" . $file;
                        $json = file_get_contents($filename);
                        $json = json_decode($json, true);
                        $DEVNAME = $json['DEVNAME'];
                        $CPU = $json['CPU'];
                        $MEM = $json['MEM'];
                        $DISK = $json['DISK'];
                        $FMEM = $json['FMEM'];
                        $FDISK = $json['FDISK'];
                        $UP = $json['UP'];
                        $DOWN = $json['DOWN'];
                        echo "<div class=\"mdui-card\">";
                        echo "<div class=\"mdui-card-actions mdui-card-actions-stacked\">";
                        echo "<button class=\"mdui-btn mdui-ripple\">";
                        echo "Device:" . $DEVNAME;
                        echo "</button>";
                        echo "<button class=\"mdui-btn mdui-ripple\">";
                        echo "CPU LOAD:" . $CPU;
                        echo "</button>";
                        echo "<div class=\"mdui-card-actions mdui-card-actions-stacked\">";
                        echo "<button class=\"mdui-btn mdui-ripple\">";
                        echo "MEM:" . $MEM . "/" . $FMEM;
                        echo "</button>";
                        echo "<button class=\"mdui-btn mdui-ripple\">";
                        echo "DISK:" . $FDISK . "/" . $DISK;
                        echo "</button>";
                        echo "<button class=\"mdui-btn mdui-ripple\">";
                        echo "上行:" . $UP . "下行:" . $DOWN;
                        echo "</button>";
                        echo "</div>";
                }
            }
        ?>
    </body>
</html>