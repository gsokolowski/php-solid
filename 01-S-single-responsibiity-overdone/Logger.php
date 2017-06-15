<?php


class Logger {

    public function logToFile($filename, $msg) {
        // open file
        $fd = fopen('logs/'.$filename, "a");
        // append date/time to message
        $str = "[" . date("Y/m/d h:i:s", time()) . "] " . $msg;
        // write string
        fwrite($fd, $str . "\n");
        // close file
        fclose($fd);
    }
}
