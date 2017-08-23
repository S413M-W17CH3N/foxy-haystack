<?php

class Config
{
    // The URL of S413MS-W0RKSH0P data library manager (Named nebula-lensus by default)
    public static $request_endpoint = "http://localhost:6660/nebula-lensus/";

    // By default, if you leave this null, a global encryption key can be used, however this also means anyone
    // With access to nebula-lensus can also view data unencrypted.
    // I recommend setting this to either a familiar password, or have the keysmith generate a 512 random character key for you.
    // To generate a key, simply perform an empty GET request to http://localhost/magic-gateway/keysmith/
    // Be sure to save the key, you cannot get this back.
    public static $request_lock = null;

    // This value is for you to search with when finding values inserted from this application
    public static $request_filter = "S413M-F4C3800K";
}

?>