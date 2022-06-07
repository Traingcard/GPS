const middleware = () => {
    const path = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1];
    $.ajax({
        type: "GET",
        url: './script/middleware.php',
        dataType: 'json',
        success: function (obj, textstatus) {
            if (!('error' in obj)) {
                const user = obj.success;
                if (user.isAdmin == 1) {
                    if (path !== 'AddCurso.php' && path !== 'index.php' && path !== '') {
                        window.location.href = "./AddCurso.html";
                    }

                } else {
                    if ( path !== 'index.php' && path !== '') {
                        window.location.href = "./";
                    }
                }
            } else {

                if (path !== 'login.php' && path !== 'index.php' && path !== '') {
                    window.location.href = "./login.php";
                }

            }
        }
    });
}

