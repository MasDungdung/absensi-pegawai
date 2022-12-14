<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Presensi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css?v=3.2.0')}}"">
    <script nonce=" 31718a9c-ac3b-46a1-9146-62e4ddee4d5f">
    (function (w, d) {
    ! function (a, e, t, r) {
    a.zarazData = a.zarazData || {};
    a.zarazData.executed = [];
    a.zaraz = {
    deferred: []
    };
    a.zaraz.q = [];
    a.zaraz._f = function (e) {
    return function () {
    var t = Array.prototype.slice.call(arguments);
    a.zaraz.q.push({
    m: e,
    a: t
    })
    }
    };
    for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
    a.zaraz.init = () => {
    var t = e.getElementsByTagName(r)[0],
    z = e.createElement(r),
    n = e.getElementsByTagName("title")[0];
    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
    a.zarazData.x = Math.random();
    a.zarazData.w = a.screen.width;
    a.zarazData.h = a.screen.height;
    a.zarazData.j = a.innerHeight;
    a.zarazData.e = a.innerWidth;
    a.zarazData.l = a.location.href;
    a.zarazData.r = e.referrer;
    a.zarazData.k = a.screen.colorDepth;
    a.zarazData.n = e.characterSet;
    a.zarazData.o = (new Date).getTimezoneOffset();
    a.zarazData.q = [];
    for (; a.zaraz.q.length;) {
    const e = a.zaraz.q.shift();
    a.zarazData.q.push(e)
    }
    z.defer = !0;
    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a
    .startsWith("_zaraz_"))).forEach((t => {
    try {
    a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
    } catch {
    a.zarazData["z_" + t.slice(7)] = e.getItem(t)
    }
    }));
    z.referrerPolicy = "origin";
    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
    t.parentNode.insertBefore(z, t)
    };
    ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
    "DOMContentLoaded", zaraz.init)
    }(w, d, 0, "script");
    })(window, document);

    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <form action="{{ route('ceklogin') }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="card-footer text-center">
                    <a href="{{ url('/registrasi') }}" class="text-center">Belum Punya Akun ? Daftar Disini</a>
                </div>
            </div>

        </div>
    </div>


    @include('template.script');
</body>

</html>
