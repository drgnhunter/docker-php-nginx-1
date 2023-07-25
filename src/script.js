//function to view Password
function viewOldPasssword() {
    var password = document.getElementById("old_password");

    if (password.type == "password") {
        password.type = "text";
        document.getElementById("op_icon").classList.remove("bi-eye-slash");
        document.getElementById("op_icon").classList.add("bi-eye");
    } else {
        password.type = "password";
        document.getElementById("op_icon").classList.remove("bi-eye");
        document.getElementById("op_icon").classList.add("bi-eye-slash");
    }
}

//function to view Password
function viewPasssword() {
    var password = document.getElementById("password");

    if (password.type == "password") {
        password.type = "text";
        document.getElementById("p_icon").classList.remove("bi-eye-slash");
        document.getElementById("p_icon").classList.add("bi-eye");
    } else {
        password.type = "password";
        document.getElementById("p_icon").classList.remove("bi-eye");
        document.getElementById("p_icon").classList.add("bi-eye-slash");
    }
}
//function to view RPassword
function viewRPassword() {
    var password = document.getElementById("password2");

    if (password.type == "password") {
        password.type = "text";
        document.getElementById("p_icon2").classList.remove("bi-eye-slash");
        document.getElementById("p_icon2").classList.add("bi-eye");
    } else {
        password.type = "password";
        document.getElementById("p_icon2").classList.remove("bi-eye");
        document.getElementById("p_icon2").classList.add("bi-eye-slash");
    }
}
    

//function to register students
function registerStudent() {

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var study_place = document.getElementById("studying_place");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");

    var password = "";

    if (document.getElementById("password").value == document.getElementById("password2").value) {
        password = document.getElementById("password").value;
    }


    var f = new FormData();
    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("password", password);
    f.append("studying_place", study_place.value);
    f.append("email", email.value);
    f.append("mobile", mobile.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Student has successfully registered!");

                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("study_place").value = "";
                document.getElementById("email").value = "";
                document.getElementById("mobile").value = "";
                document.getElementById("password").value = "";
                document.getElementById("password2").value = "";

                window.location.href = "signIn.php";
            } else {
                alert(t);
            }

        }
    };

    r.open("POST", "registerStudentProcess.php", true);
    r.send(f);
}

var am;

function adminSignin() {
    var email = document.getElementById("form3Example3c");

    var f = new FormData();
    f.append("email", email.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                var m = document.getElementById("adminModal");
                am = new bootstrap.Modal(m);
                am.show();
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "adminSigninProcess.php", true);
    r.send(f);
}

function enterAdminOTP() {
    var otp = document.getElementById("otp");
    var f = new FormData();
    f.append("email", document.getElementById("form3Example3c").value);
    f.append("otp", otp.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.href = "adminHome.php";
            } else {
                alert(t);
            }

        }
    };

    r.open("POST", "adminOTPVerifyProcess.php", true);
    r.send(f);
}

var sm;

//function to send otp to student
function sendStudentOTP() {
    var email = document.getElementById("form3Example3c");

    if (email.value == "") {
        alert("Email can't be empty");
    } else {
        var f = new FormData();
        f.append("email", email.value);

        var r = new XMLHttpRequest();
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    var m = document.getElementById("studentModal");
                    sm = new bootstrap.Modal(m);
                    sm.show();
                } else {
                    alert(t);
                }
            }
        };

        r.open("POST", "sendStudentOTPProcess.php", true);
        r.send(f);
    }
}

function enterStudentOTP() {
    var otp = document.getElementById("otp");

    if (document.getElementById("password").value == document.getElementById("password2").value) {
        var f = new FormData();
        f.append("email", document.getElementById("form3Example3c").value);
        f.append("otp", otp.value);
        f.append("password", document.getElementById("password").value);

        var r = new XMLHttpRequest();
        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    window.location.href = "studentHome.php";
                } else {
                    alert(t);
                }

            }
        };

        r.open("POST", "studentOTPVerifyProcess.php", true);
        r.send(f);
    } else {
        alert("Two Passwords must be the same.");
    }


}

function studentSignin() {
    var email = document.getElementById("form3Example3c");
    var password = document.getElementById("old_password");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.href = "studentHome.php";
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "studentSigninProcess.php.php", true);
    r.send(f);
}


function scheduleLecture() {
    var start_date = document.getElementById("start_date");
    var start_time = document.getElementById("start_time");
    var end_time = document.getElementById("end_time");
    var name = document.getElementById("name");
    var link = document.getElementById("link");
    var subject = document.getElementById("subject");

    var f = new FormData();
    f.append("start_date", start_date.value);
    f.append("start_time", start_time.value);
    f.append("end_time", end_time.value);
    f.append("name", name.value);
    f.append("link", link.value);
    f.append("subject", subject.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                document.getElementById("start_date").value = "";
                document.getElementById("start_time").value = "";
                document.getElementById("end_time").value = "";
                document.getElementById("name").value = "";
                document.getElementById("link").value = "";
                document.getElementById("subject").value = "select";
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "scheduleStudentLecture.php", true);
    r.send(f);
}

function updateLecture() {
    var id = document.getElementById("update_id");
    var start_date = document.getElementById("update_start_date");
    var start_time = document.getElementById("update_start_time");
    var end_time = document.getElementById("update_end_time");
    var name = document.getElementById("update_name");
    var link = document.getElementById("update_link");
    var subject = document.getElementById("update_subject");

    var f = new FormData();
    f.append("id", id.value);
    f.append("start_date", start_date.value);
    f.append("start_time", start_time.value);
    f.append("end_time", end_time.value);
    f.append("name", name.value);
    f.append("link", link.value);
    f.append("subject", subject.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                document.getElementById("update_start_date").value = "";
                document.getElementById("update_start_time").value = "";
                document.getElementById("update_end_time").value = "";
                document.getElementById("update_name").value = "";
                document.getElementById("update_link").value = "";
                document.getElementById("update_subject").value = "select";
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "updateStudentLecture.php", true);
    r.send(f);
}

function deleteLecture() {
    var id = document.getElementById("delete_id");


    var f = new FormData();
    f.append("id", id.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                location.reload();
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "deleteStudentLecture.php", true);
    r.send(f);
}

function updateStudent() {
    var update_fname = document.getElementById("update_fname");
    var update_lname = document.getElementById("update_lname");
    var update_mobile = document.getElementById("update_mobile");
    var update_password_attempts = document.getElementById("update_password_attempts");


    var f = new FormData();
    f.append("update_fname", update_fname.value);
    f.append("update_lname", update_lname.value);
    f.append("update_mobile", update_mobile.value);
    f.append("update_password_attempts", update_password_attempts.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                location.reload();
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "updateStudentAdminProcess.php", true);
    r.send(f);
}

function removeStudent() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                location.reload();
            } else {
                alert(t);
            }

        }
    };

    r.open("GET", "removeStudentAdminProcess.php", true);
    r.send();
}
