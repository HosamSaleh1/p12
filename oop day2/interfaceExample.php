<?php

interface media {
    function uploadMedia();
    function deleteMedia();
}

interface crud {
    function create();
    function read();
    function update();
    function delete();
}

class operations {
    function uploadMedia() {
        echo "upload media";
    }
    function deleteMedia() {
        echo "delete media";
    }
}

class product extends operations implements media,crud {
    function create(){

    }
    function read(){

    }
    function update(){

    }
    function delete(){

    }
}


class order extends product implements media,crud{
    
}