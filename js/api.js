// Configure all ajax calls with api-token header
$.ajaxSetup({
    contentType: 'application/json',
    dataType: 'json',
    beforeSend: function (request) {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (user) {
            request.setRequestHeader("api-token", user.api_token);
        }
    },
    error: function(jqXHR, textStatus, error) {
        alert('api error');
    }
});

/************ USERS API ************/
var users_api = {};
users_api.login = function(params, done_callback, fail_callback) {
    $.ajax({
        url: 'http://127.0.0.1:9080/users/login',
        type: 'post',
        data: JSON.stringify(params)
    }).done(function (r) {
        sessionStorage.setItem('user', JSON.stringify(r));
        done_callback(r);
    }).fail(function (jqXHR, textStatus, error) {
        if (fail_callback !== undefined) {
            fail_callback(jqXHR, textStatus, error);
        }
    });
}

users_api.logout = function() {
    sessionStorage.setItem('user', null);
    location.href = 'index.html';
};

users_api.getUsers = function(params, done_callback, fail_callback) {
    $.ajax({
        url: 'http://127.0.0.1:9080/users',
        type: 'get',
        data: params
    }).done(function (r) {
        done_callback(r);
    }).fail(function (jqXHR, textStatus, error) {
        if (fail_callback !== undefined) {
            fail_callback(jqXHR, textStatus, error);
        }
    });
}

users_api.createUser = function(params, done_callback, fail_callback) {
    $.ajax({
        url: 'http://127.0.0.1:9080/users',
        type: 'post',
        data: JSON.stringify(params)
    }).done(function (r) {
        done_callback(r);
    }).fail(function (jqXHR, textStatus, error) {
        if (fail_callback !== undefined) {
            fail_callback(jqXHR, textStatus, error);
        }
    });
}

users_api.deleteUser = function(userId, done_callback, fail_callback) {
    $.ajax({
        url: 'http://127.0.0.1:9080/users/'+userId,
        type: 'delete',
    }).done(function (r) {
        done_callback(r);
    }).fail(function (jqXHR, textStatus, error) {
        if (fail_callback !== undefined) {
            fail_callback(jqXHR, textStatus, error);
        }
    });
}

users_api.updateUser = function(userId, params, done_callback, fail_callback) {
    $.ajax({
        url: 'http://127.0.0.1:9080/users/'+userId,
        type: 'put',
        data: JSON.stringify(params)
    }).done(function (r) {
        done_callback(r);
    }).fail(function (jqXHR, textStatus, error) {
        if (fail_callback !== undefined) {
            fail_callback(jqXHR, textStatus, error);
        }
    });
}