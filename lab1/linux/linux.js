$(".panel").on('keypress', ".in", function(e) {
    if (e.which == 13) {
        $(this).prop('readonly', true);
        var input = $(this).val().split(" ");
        if (input[1]) {
            var output = execute(input[0], input[1]);
        } else {
            var output = execute(input[0], "");
        }
        $(".output").last().html(output)
        $(".panel").append($("<div class='action'>").html("<div class='action'><div class='command'><span class='symbol'>$</span><input class='in' type='text'></div><div class='output'></div></div>"));
        $(".in").last().focus();
    }
});


function execute(command, parameters) {
    console.log(command, parameters);
    if (window[command]) {
        return window[command](parameters);
    } else {
        return "bash: " + command + " : command not found";
    }
}

files = {
    "root": {
        "who.txt": "I am koyomi.",
        "passwords.txt": "olo",
        "projects": {
            "my-secret":{
                "root": {
                    "flag.txt": "flag{cat_flag_linux}"
                }
            },
            "hacker.txt": "Koyomi is not black Hat",
            "fuck.txt": "Hi root"
        }
    }
}


var upperFolder = null;
var currentFolder = files["root"];
var path = [];


function ls() {
    var keys = [];
    for (var key in currentFolder) {
        if (currentFolder.hasOwnProperty(key)) { //to be safe
            keys.push(key);
        }
    }
    return keys.join(" ");
}

function cat(filename) {
    if (filename == "") {
        return "usage: cat file ...";
    }
    if (typeof currentFolder[filename] == "object") {
        return "cat: " + filename + " : Is a directory"

    }
    if (currentFolder[filename] == "") {
        return "";
    }
    if (currentFolder[filename]) {
        return currentFolder[filename];
    } else {
        return "cat: " + filename + " : No such file or directory"
    }
}

function cd(folder) {
    if (folder == "") {
        return "";
    }
    if (folder == "..") {
        if (path.length > 0) {
            currentFolder = upperFolder;
            path.pop();
        }
    } else if (typeof currentFolder[folder] == "object") {
        upperFolder = currentFolder;
        currentFolder = currentFolder[folder];
        path.push(folder);
    } else {
        return "bash: cd: " + folder + ": No such file or directory";
    }
}

function mkdir(folderName) {
    if (folderName != "") {
        currentFolder[folderName] = {};
        return "";
    } else {
        return "usage: mkdir directory ...";
    }
}

function touch(fileName) {
    currentFolder[fileName] = "";
}

function echo(string) {
    return string;
}

function rm(name) {
    delete currentFolder[name]
}

function help() {
    return "Commands: whoami, ls, cd, echo, cat, pwd, help";
}

function whoami() {
    return "root-koyomi";
}

function pwd() {
    if (path.length == 0) {
        return "/"
    }
    return "/" + path.join("/")
}


$('.panel').stop().animate({
    scrollTop: $(".panel")[0].scrollHeight
}, 800);