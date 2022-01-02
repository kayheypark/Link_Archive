console.info("default.js imported");

//Alert, 박경호, 2021-08-27
function Alert(msg, callback) {
    if ( msg !== null && msg !== '' && msg.length > 0 && typeof msg == 'string' ) {
        alert(msg);
        if ( callback !== null && typeof callback == 'function' ) {
            callback();
        };
    };
};

//Confirm, 박경호, 2021-08-27
function Confirm(msg, callback) {
    if ( msg !== null && msg !== '' && msg.length > 0 && typeof msg == 'string' ) {
        if ( confirm(msg) ) {
            if ( callback !== null && typeof callback == 'function' ) {
                callback();
            };
        };
    };
};

function fnBack() {
    Confirm("Are you sure?", function() {
        history.back();
    });
};