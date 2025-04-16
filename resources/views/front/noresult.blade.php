<html>

<!-- Mirrored from colorlib.com/etc/searchf/colorlib-search-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 18:18:52 GMT -->

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <style id="" media="all">
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
        }
    </style>
    <link href="{{ url('/') }}/public/home/css/main.css" rel="stylesheet" />
    <meta name="robots" content="noindex, follow">
    <script nonce="063775fc-3367-40ab-b9a4-2bf1b135d16a">
        (function(w, d) {
            ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return async function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        })
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer)
                        for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) zaraz.set(n[0], n[1], {
                            scope: "page"
                        });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith(
                        "_zaraz_"))).forEach((s => {
                        try {
                            a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                        } catch {
                            a[c]["z_" + s.slice(7)] = r.getItem(s)
                        }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="s007">


        <form method="post" action="{{ url('/') }}/viewresult">
            @csrf
            <div class="inner-form">
                <h2 class="heading"> Verify your TTEpakistan Certificate / Diploma
                </h2>

                <h4 class="alert alert-denger heading">
                    {{ $message }}
                </h4>

                <h5>It is possible That
                </h5>
                <ol class="style_1">
                    <li>Your record may not being updated yet.
                    </li>
                    <li>This Reg#/Roll# is blocked.
                    </li>
                    <li>If you need more Information Please Contact the admistrator


                    </li>

                </ol>

                <div class="basic-search">
                    <div class="input-field">
                        <div class="icon-wrap">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                viewBox="0 0 20 20">
                                <path
                                    d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z">
                                </path>
                            </svg>
                        </div>
                        <input id="search" name="search" type="text" placeholder="Search..." required />

                    </div>
                </div>
                <div class="advance-search">

                    <div class="row">
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger name="type" required>
                                    <option placeholder value="">Choose Search by</option>
                                    <option value="roll_no">Roll no</option>
                                    <option value="registation">Registation no</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row third">
                        <div class="input-field">
                            <button class="btn-search">Search</button>

                        </div>
                    </div>
                </div>

            </div>



        </form>




    </div>
    <script src="{{ url('/') }}/public/home/js/extention/choices.js"></script>
    <script>
        const customSelects = document.querySelectorAll("select");
        const deleteBtn = document.getElementById('delete')
        const choices = new Choices('select', {
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: '',
        });
        for (let i = 0; i < customSelects.length; i++) {
            customSelects[i].addEventListener('addItem', function(event) {
                if (event.detail.value) {
                    let parent = this.parentNode.parentNode
                    parent.classList.add('valid')
                    parent.classList.remove('invalid')
                } else {
                    let parent = this.parentNode.parentNode
                    parent.classList.add('invalid')
                    parent.classList.remove('valid')
                }
            }, false);
        }
        deleteBtn.addEventListener("click", function(e) {
            e.preventDefault()
            const deleteAll = document.querySelectorAll('.choices__button')
            for (let i = 0; i < deleteAll.length; i++) {
                deleteAll[i].click();
            }
        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"80ddfdcb5997c914","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/searchf/colorlib-search-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 18:18:53 GMT -->

</html>
