
(() => {
    "use strict";
    var t = function() {
            return t = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, t.apply(this, arguments)
        },
        e = {},
        i = "asw";

    function n(i) {
        var n = t(t({}, e), {
            states: t(t({}, e.states), i)
        });
        return a(n), n
    }

    function a(n) {
        e = t(t({}, e), n),
            function(t, e, i) {
                var n = new Date;
                n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3);
                var a = "expires=" + n.toUTCString();
                document.cookie = t + "=" + e + ";" + a + ";path=/"
            }(i, JSON.stringify(e))
    }

    function o(t) {
        var i;
        return null === (i = null == e ? void 0 : e.states) || void 0 === i ? void 0 : i[t]
    }

    function s(t) {
        if (void 0 === t && (t = !0), t) return e;
        var n = function(t) {
            for (var e = t + "=", i = decodeURIComponent(document.cookie).split(";"), n = 0; n < i.length; n++) {
                for (var a = i[n];
                    " " == a.charAt(0);) a = a.substring(1);
                if (0 == a.indexOf(e)) return a.substring(e.length, a.length)
            }
            return ""
        }(i);
        return n && (e = JSON.parse(n)), e
    }

    function r(t) {
        void 0 === t && (t = 1), document.querySelectorAll("h1,h2,h3,h4,h5,h6,p,a,dl,dt,li,ol,th,td,span,blockquote,.asw-text").forEach((function(e) {
            var i;
            if (!e.classList.contains("material-icons") && !e.classList.contains("fa")) {
                var n = Number(null !== (i = e.getAttribute("data-asw-orgFontSize")) && void 0 !== i ? i : 0);
                n || (n = parseInt(window.getComputedStyle(e).getPropertyValue("font-size")), e.setAttribute("data-asw-orgFontSize", String(n)));
                var a = n * t;
                e.style["font-size"] = a + "px"
            }
        }));
        var e = document.querySelector(".asw-amount");
        e && (e.innerText = "".concat((100 * t).toFixed(0), "%"))
    }

    function l(t) {
        var e = t.id,
            i = t.css;
        if (i) {
            var n = document.getElementById(e || "") || document.createElement("style");
            n.innerHTML = i, n.id || (n.id = e, document.head.appendChild(n))
        }
    }
    var c = ["-o-", "-ms-", "-moz-", "-webkit-", ""],
        g = ["filter"];

    function u(t) {
        var e, i = "";
        return t && ((i += function(t) {
            var e = "";
            if (t) {
                var i = function(i) {
                    (g.includes(i) ? c : [""]).forEach((function(n) {
                        e += "".concat(n).concat(i, ":").concat(t[i], " !important;")
                    }))
                };
                for (var n in t) i(n)
            }
            return e
        }(t.styles)).length && t.selector && (i = function(t) {
            var e = t.selector,
                i = t.childrenSelector,
                n = void 0 === i ? [""] : i,
                a = t.css,
                o = "";
            return n.forEach((function(t) {
                o += "".concat(e, " ").concat(t, "{").concat(a, "}")
            })), o
        }({
            selector: t.selector,
            childrenSelector: t.childrenSelector,
            css: i
        })), i += null !== (e = t.css) && void 0 !== e ? e : ""), i
    }

    function d(t) {
        var e, i = t.id,
            n = void 0 === i ? "" : i,
            a = t.enable,
            o = void 0 !== a && a,
            s = "asw-".concat(n);
        o ? l({
            css: u(t),
            id: s
        }) : null === (e = document.getElementById(s)) || void 0 === e || e.remove();
        document.documentElement.classList.toggle(s, o)
    }
    var h = function(t, e, i) {
            if (i || 2 === arguments.length)
                for (var n, a = 0, o = e.length; a < o; a++) !n && a in e || (n || (n = Array.prototype.slice.call(e, 0, a)), n[a] = e[a]);
            return t.concat(n || Array.prototype.slice.call(e))
        },
        p = ["", "*:not(.material-icons,.asw-menu,.asw-menu *)"],
        m = ["h1", "h2", "h3", "h4", "h5", "h6", ".wsite-headline", ".wsite-content-title"],
        v = h(h([], m, !0), ["img", "p", "i", "svg", "a", "button:not(.asw-btn)", "label", "li", "ol"], !1),
        b = {
            "dark-contrast": {
                styles: {
                    color: "#FFF",
                    fill: "#FFF",
                    "background-color": "#000"
                },
                childrenSelector: v
            },
            "light-contrast": {
                styles: {
                    color: "#000",
                    fill: "#000",
                    "background-color": "#FFF"
                },
                childrenSelector: v
            },
            "high-contrast": {
                styles: {
                    filter: "contrast(125%)"
                }
            },
            "high-saturation": {
                styles: {
                    filter: "saturate(200%)"
                }
            },
            "low-saturation": {
                styles: {
                    filter: "saturate(50%)"
                }
            },
            monochrome: {
                styles: {
                    filter: "grayscale(100%)"
                }
            }
        };
    var S = function() {
        return S = Object.assign || function(t) {
            for (var e, i = 1, n = arguments.length; i < n; i++)
                for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
            return t
        }, S.apply(this, arguments)
    };

    function w() {
        var t = s().states.contrast,
            e = "",
            i = b[t];
        i && (e = u(S(S({}, i), {
            selector: "html.aws-filter"
        }))), l({
            css: e,
            id: "asw-filter-style"
        }), document.documentElement.classList.toggle("aws-filter", Boolean(t))
    }
    var y = function() {
            return y = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, y.apply(this, arguments)
        },
        f = {
            id: "stop-animations",
            selector: "html",
            childrenSelector: ["*"],
            styles: {
                transition: "none",
                "animation-fill-mode": "forwards",
                "animation-iteration-count": "1",
                "animation-duration": ".01s"
            }
        };
    var k = function() {
            return k = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, k.apply(this, arguments)
        },
        A = {
            id: "readable-font",
            selector: "html",
            childrenSelector: function(t, e, i) {
                if (i || 2 === arguments.length)
                    for (var n, a = 0, o = e.length; a < o; a++) !n && a in e || (n || (n = Array.prototype.slice.call(e, 0, a)), n[a] = e[a]);
                return t.concat(n || Array.prototype.slice.call(e))
            }(["", "*:not(.material-icons,.fa)"], v, !0),
            styles: {
                "font-family": "OpenDyslexic3,Comic Sans MS,Arial,Helvetica,sans-serif"
            },
            css: '@font-face {font-family: OpenDyslexic3;src: url("https://website-widgets.pages.dev/fonts/OpenDyslexic3-Regular.woff") format("woff"), url("https://website-widgets.pages.dev/fonts/OpenDyslexic3-Regular.ttf") format("truetype");}'
        };
    var C = function() {
            return C = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, C.apply(this, arguments)
        },
        L = {
            id: "big-cursor",
            selector: "body",
            childrenSelector: ["*"],
            styles: {
                cursor: "url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='98px' height='98px' viewBox='0 0 48 48'%3E%3Cpath fill='%23E0E0E0' d='M27.8 39.7c-.1 0-.2 0-.4-.1s-.4-.3-.6-.5l-3.7-8.6-4.5 4.2c-.1.2-.3.3-.6.3-.1 0-.3 0-.4-.1-.3-.1-.6-.5-.6-.9V12c0-.4.2-.8.6-.9.1-.1.3-.1.4-.1.2 0 .5.1.7.3l16 15c.3.3.4.7.3 1.1-.1.4-.5.6-.9.7l-6.3.6 3.9 8.5c.1.2.1.5 0 .8-.1.2-.3.5-.5.6l-2.9 1.3c-.2-.2-.4-.2-.5-.2z'/%3E%3Cpath fill='%23212121' d='m18 12 16 15-7.7.7 4.5 9.8-2.9 1.3-4.3-9.9L18 34V12m0-2c-.3 0-.5.1-.8.2-.7.3-1.2 1-1.2 1.8v22c0 .8.5 1.5 1.2 1.8.3.2.6.2.8.2.5 0 1-.2 1.4-.5l3.4-3.2 3.1 7.3c.2.5.6.9 1.1 1.1.2.1.5.1.7.1.3 0 .5-.1.8-.2l2.9-1.3c.5-.2.9-.6 1.1-1.1.2-.5.2-1.1 0-1.5l-3.3-7.2 4.9-.4c.8-.1 1.5-.6 1.7-1.3.3-.7.1-1.6-.5-2.1l-16-15c-.3-.5-.8-.7-1.3-.7z'/%3E%3C/svg%3E\") 40 15, auto"
            }
        };
    var F = function() {
            return F = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, F.apply(this, arguments)
        },
        x = {
            id: "highlight-title",
            selector: "html",
            childrenSelector: m,
            styles: {
                outline: "2px solid #2d233d",
                "outline-offset": "2px"
            }
        };
    const H = '<style>.asw-rg{position:fixed;top:0;left:0;right:0;width:100%;height:0;pointer-events:none;background-color:rgba(0,0,0,.8);z-index:1000000}</style> <div class="asw-rg asw-rg-top"></div> <div class="asw-rg asw-rg-bottom" style="top:auto;bottom:0"></div>';
    var z = function() {
            return z = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, z.apply(this, arguments)
        },
        j = {
            id: "highlight-links",
            selector: "html",
            childrenSelector: ["a[href]"],
            styles: {
                outline: "2px solid #2d233d",
                "outline-offset": "2px"
            }
        };
    var M = function() {
            return M = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, M.apply(this, arguments)
        },
        D = {
            id: "letter-spacing",
            selector: "html",
            childrenSelector: p,
            styles: {
                "letter-spacing": "2px"
            }
        };
    var R = function() {
            return R = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, R.apply(this, arguments)
        },
        O = {
            id: "line-height",
            selector: "html",
            childrenSelector: p,
            styles: {
                "line-height": "3"
            }
        };
    var T = function() {
            return T = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, T.apply(this, arguments)
        },
        B = {
            id: "font-weight",
            selector: "html",
            childrenSelector: p,
            styles: {
                "font-weight": "700"
            }
        };

    function P() {
        var t, e = s().states;
        void 0 === (t = e["highlight-title"]) && (t = !1), d(F(F({}, x), {
                enable: t
            })),
            function(t) {
                void 0 === t && (t = !1), d(z(z({}, j), {
                    enable: t
                }))
            }(e["highlight-links"]),
            function(t) {
                void 0 === t && (t = !1), d(M(M({}, D), {
                    enable: t
                }))
            }(e["letter-spacing"]),
            function(t) {
                void 0 === t && (t = !1), d(R(R({}, O), {
                    enable: t
                }))
            }(e["line-height"]),
            function(t) {
                void 0 === t && (t = !1), d(T(T({}, B), {
                    enable: t
                }))
            }(e["font-weight"]),
            function(t) {
                void 0 === t && (t = !1), d(k(k({}, A), {
                    enable: t
                }))
            }(e["readable-font"]),
            function(t) {
                void 0 === t && (t = !1);
                var e = document.querySelector(".asw-rg-container");
                if (t) {
                    if (!e) {
                        (e = document.createElement("div")).setAttribute("class", "asw-rg-container"), e.innerHTML = H;
                        var i = e.querySelector(".asw-rg-top"),
                            n = e.querySelector(".asw-rg-bottom");
                        window.__asw__onScrollReadableGuide = function(t) {
                            i.style.height = t.clientY - 20 + "px", n.style.height = window.innerHeight - t.clientY - 40 + "px"
                        }, document.addEventListener("mousemove", window.__asw__onScrollReadableGuide, {
                            passive: !1
                        }), document.body.appendChild(e)
                    }
                } else e && e.remove(), window.__asw__onScrollReadableGuide && (document.removeEventListener("mousemove", window.__asw__onScrollReadableGuide), delete window.__asw__onScrollReadableGuide)
            }(e["readable-guide"]),
            function(t) {
                void 0 === t && (t = !1), d(y(y({}, f), {
                    enable: t
                }))
            }(e["stop-animations"]),
            function(t) {
                void 0 === t && (t = !1), d(C(C({}, L), {
                    enable: t
                }))
            }(e["big-cursor"])
    }

    function V() {
        var t = s().states;
        r((null == t ? void 0 : t.fontSize) || 1), P(), w()
    }
    const I = '<style>.asw-menu,.asw-widget{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;font-weight:400;-webkit-font-smoothing:antialiased}.asw-menu *,.asw-widget *{box-sizing:border-box!important}.asw-menu-btn{position:fixed;z-index:500000;left:30px;bottom:30px;box-shadow:0 5px 15px 0 rgb(37 44 97 / 15%),0 2px 4px 0 rgb(93 100 148 / 20%);transition:transform .2s ease;border-radius:50%;align-items:center;justify-content:center;width:40px;height:40px;display:flex;cursor:pointer;border:3px solid #fff!important;outline:5px solid #2d233d!important;text-decoration:none!important;background:#326cff!important;background:linear-gradient(96deg,#554570 0,#2d233d 100%)!important}.asw-menu-btn svg{width:36px;height:36px;min-height:36px;min-width:36px;max-width:36px;max-height:36px;background:0 0!important}.asw-menu-btn:hover{transform:scale(1.05)}@media only screen and (max-width:768px){.asw-menu-btn{width:42px;height:42px}.asw-menu-btn svg{width:26px;height:26px;min-height:26px;min-width:26px;max-width:26px;max-height:26px}}</style> <div class="asw-widget"> <a href="https://accessibility-widget.pages.dev" target="_blank" class="asw-menu-btn" title="Open Accessibility Menu" role="button" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" style="fill:white" viewBox="0 0 24 24" width="30px" height="30px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg> </a> </div>';

    function N(t, e) {
        t.style.display = void 0 === e ? "none" === t.style.display ? "block" : "none" : 1 == e ? "block" : "none"
    }
    const G = '<style>.asw-menu{position:fixed;left:0;top:0;box-shadow:0 0 20px #00000080;opacity:1;transition:.3s;z-index:500000;overflow:hidden;background:#ebe7e0;width:500px;line-height:1;font-size:16px;height:100%;letter-spacing:.015em}.asw-menu *{color:#000!important;font-family:inherit;padding:0;margin:0;line-height:1!important;letter-spacing:normal!important}.asw-menu-header{display:flex;align-items:center;justify-content:space-between;padding-left:18px;padding-right:18px;height:55px;font-weight:700!important;background-color:#554570!important}.asw-menu-title{font-size:16px!important;color:#fff!important}.asw-menu-header svg{fill:#554570!important;width:24px!important;height:24px!important;min-width:24px!important;min-height:24px!important;max-width:24px!important;max-height:24px!important}.asw-menu-header>div{display:flex}.asw-menu-header div[role=button]{padding:5px;background:#fff!important;cursor:pointer;border-radius:50%;transition:opacity .3s ease}.asw-menu-header div[role=button]:hover{opacity:.8}.asw-card{margin:0 15px 20px}.asw-card-title{font-size:14px!important;padding:15px 0;font-weight:600!important;opacity:.8}.asw-menu .asw-select{width:100%!important;padding:0 15px!important;font-size:16px!important;font-family:inherit!important;font-weight:600!important;border-radius:45px!important;background:#fff!important;border:none!important;min-height:45px!important;max-height:45px!important;height:45px!important;color:inherit!important}.asw-items{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:1rem}.asw-btn{aspect-ratio:6/5;border-radius:12px;padding:0 15px;display:flex;align-items:center;justify-content:center;flex-direction:column;text-align:center;color:#333;font-size:16px!important;background:#fff!important;border:2px solid transparent!important;transition:border-color .2s ease;cursor:pointer;word-break:break-word;gap:10px;position:relative;width:auto!important;height:auto!important}.asw-adjust-font .asw-label div,.asw-btn .asw-translate{font-size:14px!important;font-weight:600!important}.asw-minus,.asw-plus{background-color:#ebe7e0!important;border:2px solid transparent;transition:border .2s ease}.asw-minus:hover,.asw-plus:hover{border-color:#554570!important}.asw-amount{font-size:18px!important;font-weight:600!important}.asw-adjust-font svg{width:24px!important;height:24px!important;min-width:24px!important;min-height:24px!important;max-width:24px!important;max-height:24px!important}.asw-btn svg{width:34px!important;height:34px!important;min-width:34px!important;min-height:34px!important;max-width:34px!important;max-height:34px!important}.asw-btn.asw-selected,.asw-btn:hover{border-color:#554570!important}.asw-btn.asw-selected span,.asw-btn.asw-selected svg{fill:#554570!important;color:#554570!important}.asw-btn.asw-selected:after{content:"âœ“";position:absolute;top:10px;right:10px;background-color:#554570!important;color:#fff;padding:6px;font-size:10px;width:18px;height:18px;border-radius:100%;line-height:6px}.asw-footer{position:absolute;bottom:0;left:0;right:0;background:#fff;padding:20px;text-align:center;border-top:2px solid #ebe7e0}.asw-footer a{font-size:16px!important;text-decoration:none!important;color:#000!important;background:0 0!important;font-weight:600!important}.asw-footer a:hover,.asw-footer a:hover span{color:#554570!important}.asw-menu-content{overflow:auto;max-height:calc(100% - 80px);padding:30px 0 15px}.asw-adjust-font{background:#fff;padding:20px;margin-bottom:20px}.asw-adjust-font .asw-label{display:flex;justify-content:flex-start}.asw-adjust-font>div{display:flex;justify-content:space-between;margin-top:20px;align-items:center;font-size:15px}.asw-adjust-font .asw-label div{font-size:15px!important}.asw-adjust-font div[role=button]{background:#ebe7e0!important;border-radius:50%;width:36px;height:36px;display:flex;align-items:center;justify-content:center;cursor:pointer}.asw-overlay{position:fixed;top:0;left:0;width:100%;height:100%;z-index:10000}@media only screen and (max-width:560px){.asw-menu{width:100%}}@media only screen and (max-width:420px){.asw-items{grid-template-columns:repeat(2,minmax(0,1fr));gap:.5rem}}</style> <div class="asw-menu"> <div class="asw-menu-header"> <div class="asw-menu-title asw-translate"> Accessibility Menu </div> <div style="gap:15px"> <div role="button" class="asw-menu-reset" title="Reset settings"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M12 4c2.1 0 4.1.8 5.6 2.3 3.1 3.1 3.1 8.2 0 11.3a7.78 7.78 0 0 1-6.7 2.3l.5-2c1.7.2 3.5-.4 4.8-1.7a6.1 6.1 0 0 0 0-8.5A6.07 6.07 0 0 0 12 6v4.6l-5-5 5-5V4M6.3 17.6C3.7 15 3.3 11 5.1 7.9l1.5 1.5c-1.1 2.2-.7 5 1.2 6.8.5.5 1.1.9 1.8 1.2l-.6 2a8 8 0 0 1-2.7-1.8Z"/> </svg> </div> <div role="button" class="asw-menu-close" title="Close"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z"/> </svg> </div> </div> </div> <div class="asw-menu-content"> <div class="asw-card"> <select id="asw-language" title="Language" class="asw-select"></select> </div> <div class="asw-card"> <div class="asw-card-title"> Content Adjustments </div> <div class="asw-adjust-font"> <div class="asw-label" style="margin:0"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="margin-right:15px"> <path d="M2 4v3h5v12h3V7h5V4H2m19 5h-9v3h3v7h3v-7h3V9Z"/> </svg> <div class="asw-translate"> Adjust Font Size </div> </div> <div> <div class="asw-minus" data-key="font-size" role="button" aria-pressed="false" title="Decrease Font Size" tabindex="0"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M19 13H5v-2h14v2Z"/> </svg> </div> <div class="asw-amount"> 100% </div> <div class="asw-plus" data-key="font-size" role="button" aria-pressed="false" title="Increase Font Size" tabindex="0"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2Z"/> </svg> </div> </div> </div> <div class="asw-items content"> </div> </div> <div class="asw-card"> <div class="asw-card-title"> Color Adjustments </div> <div class="asw-items contrast"> </div> </div> <div class="asw-card"> <div class="asw-card-title"> Tools </div> <div class="asw-items tools"> </div> </div> </div>  </div> <div class="asw-overlay"> </div>',
        E = [{
            label: "Monochrome",
            key: "monochrome",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="m19 19-7-8v8H5l7-8V5h7m0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/>\r\n</svg>'
        }, {
            label: "Low Saturation",
            key: "low-saturation",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M11 9h2v2h-2V9m-2 2h2v2H9v-2m4 0h2v2h-2v-2m2-2h2v2h-2V9M7 9h2v2H7V9m12-6H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2M9 18H7v-2h2v2m4 0h-2v-2h2v2m4 0h-2v-2h2v2m2-7h-2v2h2v2h-2v-2h-2v2h-2v-2h-2v2H9v-2H7v2H5v-2h2v-2H5V5h14v6Z"/>\r\n</svg>'
        }, {
            label: "High Saturation",
            key: "high-saturation",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M12 16a4 4 0 0 1-4-4 4 4 0 0 1 4-4 4 4 0 0 1 4 4 4 4 0 0 1-4 4m6.7-3.6a6.06 6.06 0 0 0-.86-.4 5.98 5.98 0 0 0 3.86-5.59 6 6 0 0 0-6.78.54A5.99 5.99 0 0 0 12 .81a6 6 0 0 0-2.92 6.14A6 6 0 0 0 2.3 6.4 5.95 5.95 0 0 0 6.16 12a6 6 0 0 0-3.86 5.58 6 6 0 0 0 6.78-.54A6 6 0 0 0 12 23.19a6 6 0 0 0 2.92-6.14 6 6 0 0 0 6.78.54 5.98 5.98 0 0 0-3-5.19Z"/>\r\n</svg>'
        }, {
            label: "High Contrast",
            key: "high-contrast",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 17.93a8 8 0 0 1 0-15.86v15.86zm2-15.86a8 8 0 0 1 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87a8 8 0 0 1-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93a8.4 8.4 0 0 1-.19 1z"/>\r\n</svg>'
        }, {
            label: "Light Contrast",
            key: "light-contrast",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M12 18a6 6 0 0 1-6-6 6 6 0 0 1 6-6 6 6 0 0 1 6 6 6 6 0 0 1-6 6m8-2.69L23.31 12 20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69Z"/>\r\n</svg>'
        }, {
            label: "Dark Contrast",
            key: "dark-contrast",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M18 12c0-4.5-1.92-8.74-6-10a10 10 0 0 0 0 20c4.08-1.26 6-5.5 6-10Z"/>\r\n</svg>'
        }],
        J = [{
            label: "Font Weight",
            key: "font-weight",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M13.5 15.5H10v-3h3.5A1.5 1.5 0 0 1 15 14a1.5 1.5 0 0 1-1.5 1.5m-3.5-9h3A1.5 1.5 0 0 1 14.5 8 1.5 1.5 0 0 1 13 9.5h-3m5.6 1.29c.97-.68 1.65-1.79 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.1 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42Z"/>\r\n</svg>'
        }, {
            label: "Line Height",
            key: "line-height",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M21 22H3v-2h18v2m0-18H3V2h18v2m-11 9.7h4l-2-5.4-2 5.4M11.2 6h1.7l4.7 12h-2l-.9-2.6H9.4L8.5 18h-2l4.7-12Z"/>\r\n</svg>'
        }, {
            label: "Letter Spacing",
            key: "letter-spacing",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M22 3v18h-2V3h2M4 3v18H2V3h2m6 10.7h4l-2-5.4-2 5.4M11.2 6h1.7l4.7 12h-2l-.9-2.6H9.4L8.5 18h-2l4.7-12Z"/>\r\n</svg>'
        }, {
            label: "Dyslexia Font",
            key: "readable-font",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="m21.59 11.59-8.09 8.09L9.83 16l-1.41 1.41 5.08 5.09L23 13M6.43 11 8.5 5.5l2.07 5.5m1.88 5h2.09L9.43 3H7.57L2.46 16h2.09l1.12-3h5.64l1.14 3Z"/>\r\n</svg>'
        }, {
            label: "Highlight Links",
            key: "highlight-links",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H5V5h14v14m-5.06-8.94a3.37 3.37 0 0 1 0 4.75L11.73 17A3.29 3.29 0 0 1 7 17a3.31 3.31 0 0 1 0-4.74l1.35-1.36-.01.6c-.01.5.07 1 .23 1.44l.05.15-.4.41a1.6 1.6 0 0 0 0 2.28c.61.62 1.67.62 2.28 0l2.2-2.19c.3-.31.48-.72.48-1.15 0-.44-.18-.83-.48-1.14a.87.87 0 0 1 0-1.24.91.91 0 0 1 1.24 0m4.06-.7c0 .9-.35 1.74-1 2.38l-1.34 1.36v-.6c.01-.5-.07-1-.23-1.44l-.05-.14.4-.42a1.6 1.6 0 0 0 0-2.28 1.64 1.64 0 0 0-2.28 0l-2.2 2.2c-.3.3-.48.71-.48 1.14 0 .44.18.83.48 1.14.17.16.26.38.26.62s-.09.46-.26.62a.86.86 0 0 1-.62.25.88.88 0 0 1-.62-.25 3.36 3.36 0 0 1 0-4.75L12.27 7A3.31 3.31 0 0 1 17 7c.65.62 1 1.46 1 2.36Z"/>\r\n</svg>'
        }, {
            label: "Highlight Title",
            key: "highlight-title",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M5 4v3h5.5v12h3V7H19V4H5Z"/>\r\n</svg>'
        }],
        Z = [{
            label: "Big Cursor",
            key: "big-cursor",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M11 1.07C7.05 1.56 4 4.92 4 9h7m-7 6a8 8 0 0 0 8 8 8 8 0 0 0 8-8v-4H4m9-9.93V9h7a8 8 0 0 0-7-7.93Z"/>\r\n</svg>'
        }, {
            label: "Stop Animations",
            key: "stop-animations",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M22 12c0-5.54-4.46-10-10-10-1.17 0-2.3.19-3.38.56l.7 1.94A7.15 7.15 0 0 1 12 3.97 8.06 8.06 0 0 1 20.03 12 8.06 8.06 0 0 1 12 20.03 8.06 8.06 0 0 1 3.97 12c0-.94.19-1.88.53-2.72l-1.94-.66A10.37 10.37 0 0 0 2 12c0 5.54 4.46 10 10 10s10-4.46 10-10M5.47 3.97c.85 0 1.53.71 1.53 1.5C7 6.32 6.32 7 5.47 7c-.79 0-1.5-.68-1.5-1.53 0-.79.71-1.5 1.5-1.5M18 12c0-3.33-2.67-6-6-6s-6 2.67-6 6 2.67 6 6 6 6-2.67 6-6m-7-3v6H9V9m6 0v6h-2V9"/>\r\n</svg>'
        }, {
            label: "Reading Guide",
            key: "readable-guide",
            icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">\r<path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54A13.15 13.15 0 0 0 3 8v11c3.5 0 6.64 1.35 9 3.54A13.15 13.15 0 0 1 21 19V8c-3.5 0-6.64 1.35-9 3.54Z"/>\r\n</svg>'
        }];

    function W(t, e) {
        for (var i = "", n = t.length; n--;) {
            var a = t[n];
            i += '<button class="asw-btn '.concat(e || "", '" type="button" data-key="').concat(a.key, '" title="').concat(a.label, '">').concat(a.icon, '<span class="asw-translate">').concat(a.label, "</span></button>")
        }
        return i
    }
    var K = {
        en: JSON.parse('{"Accessibility Menu":"Accessibility Menu","Reset settings":"Reset settings","Close":"Close","Content Adjustments":"Content Adjustments","Adjust Font Size":"Adjust Font Size","Highlight Title":"Highlight Title","Highlight Links":"Highlight Links","Readable Font":"Readable Font","Color Adjustments":"Color Adjustments","Dark Contrast":"Dark Contrast","Light Contrast":"Light Contrast","High Contrast":"High Contrast","High Saturation":"High Saturation","Low Saturation":"Low Saturation","Monochrome":"Monochrome","Tools":"Tools","Reading Guide":"Reading Guide","Stop Animations":"Stop Animations","Big Cursor":"Big Cursor","Increase Font Size":"Increase Font Size","Decrease Font Size":"Decrease Font Size","Letter Spacing":"Letter Spacing","Line Height":"Line Height","Font Weight":"Font Weight","Dyslexia Font":"Dyslexia Font","Language":"Language","Open Accessibility Menu":"Open Accessibility Menu"}'),
        lv: JSON.parse('{"Accessibility Menu":"Pieejamības izvēlne","Reset settings":"Atiestatīt iestatījumus","Close":"Aizvērt","Content Adjustments":"Satura pielāgojumi","Adjust Font Size":"Pielāgot fonta izmēru","Highlight Title":"Izcelt virsrakstu","Highlight Links":"Izcelt saites","Readable Font":"Lasāms fonts","Color Adjustments":"Krāsu pielāgojumi","Dark Contrast":"Tumšs kontrasts","Light Contrast":"Gaišs kontrasts","High Contrast":"Augsts kontrasts","High Saturation":"Augsta piesātinātība","Low Saturation":"Zema piesātinātība","Monochrome":"Melnbalts","Tools":"Rīki","Reading Guide":"Lasīšanas ceļvedis","Stop Animations":"Apturēt animācijas","Big Cursor":"Liels kursors","Increase Font Size":"Palielināt fonta izmēru","Decrease Font Size":"Samazināt fonta izmēru","Letter Spacing":"Burtu atstarpes","Line Height":"Rindas augstums","Font Weight":"Fonta biezums","Dyslexia Font":"Dizleksijas fonts","Language":"Valoda","Open Accessibility Menu":"Atvērt pieejamības izvēlni"}')




        },
        _ = [{
            code: "en",
            label: "English (English)"
        }, {
            code: "lv",
            label: "Latviešu (Latvian)"
        }];

    function q(t, e) {
        var i = t.getAttribute("data-translate");
        return !i && e && (i = e, t.setAttribute("data-translate", i)),
            function(t) {
                var e = s().lang;
                return (K[e] || K.en)[t] || t
            }(i)
    }

    function Y(t) {
        t.querySelectorAll(".asw-card-title, .asw-translate").forEach((function(t) {
            t.innerText = q(t, String(t.innerText || "").trim())
        })), t.querySelectorAll("[title]").forEach((function(t) {
            t.setAttribute("title", q(t, t.getAttribute("title")))
        }))
    }
    var U = function(t, e) {
        var i = {};
        for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && e.indexOf(n) < 0 && (i[n] = t[n]);
        if (null != t && "function" == typeof Object.getOwnPropertySymbols) {
            var a = 0;
            for (n = Object.getOwnPropertySymbols(t); a < n.length; a++) e.indexOf(n[a]) < 0 && Object.prototype.propertyIsEnumerable.call(t, n[a]) && (i[n[a]] = t[n[a]])
        }
        return i
    };

    function Q(t) {
        var e, i, l, c, g = t.container,
            u = t.position,
            d = U(t, ["container", "position"]),
            h = document.createElement("div");
        h.innerHTML = G;
        var p = h.querySelector(".asw-menu");
        (null == u ? void 0 : u.includes("right")) && (p.style.right = "0px", p.style.left = "auto"), p.querySelector(".content").innerHTML = W(J), p.querySelector(".tools").innerHTML = W(Z, "asw-tools"), p.querySelector(".contrast").innerHTML = W(E, "asw-filter"), h.querySelectorAll(".asw-menu-close, .asw-overlay").forEach((function(t) {
            t.addEventListener("click", (function() {
                N(h, !1)
            }))
        })), p.querySelectorAll(".asw-adjust-font div[role='button']").forEach((function(t) {
            t.addEventListener("click", (function() {
                var e, i = null !== (e = o("fontSize")) && void 0 !== e ? e : 1;
                t.classList.contains("asw-minus") ? i -= .1 : i += .1, i = Math.max(i, .1), i = Math.min(i, 2), r((i = Number(i.toFixed(2))) || 1), n({
                    fontSize: i
                })
            }))
        })), p.querySelectorAll(".asw-btn").forEach((function(t) {
            t.addEventListener("click", (function() {
                var e, i = t.dataset.key,
                    a = !t.classList.contains("asw-selected");
                t.classList.contains("asw-filter") ? (p.querySelectorAll(".asw-filter").forEach((function(t) {
                    t.classList.remove("asw-selected")
                })), n({
                    contrast: !!a && i
                }), a && t.classList.add("asw-selected"), w()) : (t.classList.toggle("asw-selected", a), n(((e = {})[i] = a, e)), P())
            }))
        })), null === (e = p.querySelector(".asw-menu-reset")) || void 0 === e || e.addEventListener("click", (function() {
            ! function() {
                var t;
                a({
                    states: {}
                }), V(), null === (t = null === document || void 0 === document ? void 0 : document.querySelectorAll(".asw-selected")) || void 0 === t || t.forEach((function(t) {
                    var e;
                    return null === (e = null == t ? void 0 : t.classList) || void 0 === e ? void 0 : e.remove("asw-selected")
                }))
            }()
        }));
        var m = s(),
            v = Number(null === (i = null == m ? void 0 : m.states) || void 0 === i ? void 0 : i.fontSize) || 1;
        1 != v && (p.querySelector(".asw-amount").innerHTML = "".concat(100 * v, "%"));
        var b = p.querySelector("#asw-language");
        if (b.innerHTML = _.map((function(t) {
                return '<option value="'.concat(t.code, '">').concat(t.label, "</option>")
            })).join(""), m.lang !== d.lang && a({
                lang: d.lang
            }), b.value = (null == d ? void 0 : d.lang) || "en", null == b || b.addEventListener("change", (function() {
                a({
                    lang: b.value
                }), Y(g)
            })), Y(p), m.states)
            for (var S in m.states)
                if (m.states[S] && "fontSize" !== S) {
                    var y = "contrast" === S ? m.states[S] : S;
                    null === (c = null === (l = p.querySelector('.asw-btn[data-key="'.concat(y, '"]'))) || void 0 === l ? void 0 : l.classList) || void 0 === c || c.add("asw-selected")
                } return g.appendChild(h), h
    }
    var X = function() {
        return X = Object.assign || function(t) {
            for (var e, i = 1, n = arguments.length; i < n; i++)
                for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
            return t
        }, X.apply(this, arguments)
    };
    var $ = function() {
            return $ = Object.assign || function(t) {
                for (var e, i = 1, n = arguments.length; i < n; i++)
                    for (var a in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, a) && (t[a] = e[a]);
                return t
            }, $.apply(this, arguments)
        },
        tt = {
            lang: "en",
            position: "bottom-left"
        };

    function et(t) {
        var e = $({}, tt);
        try {
            var i = s(!1);
            e = $($({}, e), i), V()
        } catch (t) {}
        a(e = $($({}, e), t)),
            function(t) {
                var e, i, n, a, o, s, r = t.position,
                    l = void 0 === r ? "bottom-left" : r,
                    c = t.offset,
                    g = void 0 === c ? [20, 20] : c,
                    u = document.createElement("div");
                u.innerHTML = I, u.classList.add("asw-container");
                var d, h = u.querySelector(".asw-menu-btn"),
                    p = null !== (e = null == g ? void 0 : g[0]) && void 0 !== e ? e : 20,
                    m = null !== (i = null == g ? void 0 : g[1]) && void 0 !== i ? i : 25,
                    v = {
                        left: "".concat(p, "px"),
                        bottom: "".concat(m, "px")
                    };
                "bottom-right" === l ? v = X(X({}, v), {
                    right: "".concat(p, "px"),
                    left: "auto"
                }) : "top-left" === l ? v = X(X({}, v), {
                    top: "".concat(m, "px"),
                    bottom: "auto"
                }) : "center-left" === l ? v = X(X({}, v), {
                    bottom: "calc(50% - (55px / 2) - ".concat(null !== (n = null == g ? void 0 : g[1]) && void 0 !== n ? n : 0, "px)")
                }) : "top-right" === l ? v = {
                    top: "".concat(m, "px"),
                    bottom: "auto",
                    right: "".concat(p, "px"),
                    left: "auto"
                } : "center-right" === l ? v = {
                    right: "".concat(p, "px"),
                    left: "auto",
                    bottom: "calc(50% - (55px / 2) - ".concat(null !== (a = null == g ? void 0 : g[1]) && void 0 !== a ? a : 0, "px)")
                } : "bottom-center" === l ? v = X(X({}, v), {
                    left: "calc(50% - (55px / 2) - ".concat(null !== (o = null == g ? void 0 : g[0]) && void 0 !== o ? o : 0, "px)")
                }) : "top-center" === l && (v = {
                    top: "".concat(m, "px"),
                    bottom: "auto",
                    left: "calc(50% - (55px / 2) - ".concat(null !== (s = null == g ? void 0 : g[0]) && void 0 !== s ? s : 0, "px)")
                }), Object.assign(h.style, v), null == h || h.addEventListener("click", (function(e) {
                    e.preventDefault(), e.stopPropagation(), e.stopImmediatePropagation(), d ? N(d) : d = Q(X(X({}, t), {
                        container: u
                    }))
                })), Y(u), document.body.appendChild(u)
            }(e)
    }

    function it(t) {
        var e;
        return t = "data-asw-".concat(t), null === (e = null === document || void 0 === document ? void 0 : document.querySelector("[".concat(t, "]"))) || void 0 === e ? void 0 : e.getAttribute(t)
    }
    document.addEventListener("readystatechange", (function t() {
        var e, i, n, a, o;
        "complete" !== document.readyState && "interactive" !== document.readyState || (n = it("lang"), a = it("position"), o = it("offset"), n || (n = null === (i = null === (e = null === document || void 0 === document ? void 0 : document.querySelector("html")) || void 0 === e ? void 0 : e.getAttribute("lang")) || void 0 === i ? void 0 : i.replace(/[_-].*/, "")), !n && "undefined" != typeof navigator && (null === navigator || void 0 === navigator ? void 0 : navigator.language) && (n = null === navigator || void 0 === navigator ? void 0 : navigator.language), o && (o = o.split(",").map((function(t) {
            return parseInt(t)
        }))), et({
            lang: n,
            position: a,
            offset: o
        }), document.removeEventListener("readystatechange", t))
    }))
})();
