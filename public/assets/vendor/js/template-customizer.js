! function(t, e) {
    if ("object" == typeof exports && "object" == typeof module) module.exports = e();
    else if ("function" == typeof define && define.amd) define([], e);
    else {
        var s = e();
        for (var i in s)("object" == typeof exports ? exports : t)[i] = s[i]
    }
}(self, (function() {
    return function() {
        "use strict";
        var t = {
                7621: function(t, e, s) {
                    var i = s(8081),
                        o = s.n(i),
                        a = s(3645),
                        n = s.n(a),
                        l = s(1667),
                        r = s.n(l),
                        c = new URL(s(6468), s.b),
                        u = n()(o()),
                        d = r()(c);
                    
                },
                3645: function(t) {
                    t.exports = function(t) {
                        var e = [];
                        return e.toString = function() {
                            return this.map((function(e) {
                                var s = "",
                                    i = void 0 !== e[5];
                                return e[4] && (s += "@supports (".concat(e[4], ") {")), e[2] && (s += "@media ".concat(e[2], " {")), i && (s += "@layer".concat(e[5].length > 0 ? " ".concat(e[5]) : "", " {")), s += t(e), i && (s += "}"), e[2] && (s += "}"), e[4] && (s += "}"), s
                            })).join("")
                        }, e.i = function(t, s, i, o, a) {
                            "string" == typeof t && (t = [
                                [null, t, void 0]
                            ]);
                            var n = {};
                            if (i)
                                for (var l = 0; l < this.length; l++) {
                                    var r = this[l][0];
                                    null != r && (n[r] = !0)
                                }
                            for (var c = 0; c < t.length; c++) {
                                var u = [].concat(t[c]);
                                i && n[u[0]] || (void 0 !== a && (void 0 === u[5] || (u[1] = "@layer".concat(u[5].length > 0 ? " ".concat(u[5]) : "", " {").concat(u[1], "}")), u[5] = a), s && (u[2] ? (u[1] = "@media ".concat(u[2], " {").concat(u[1], "}"), u[2] = s) : u[2] = s), o && (u[4] ? (u[1] = "@supports (".concat(u[4], ") {").concat(u[1], "}"), u[4] = o) : u[4] = "".concat(o)), e.push(u))
                            }
                        }, e
                    }
                },
                1667: function(t) {
                    t.exports = function(t, e) {
                        return e || (e = {}), t ? (t = String(t.__esModule ? t.default : t), /^['"].*['"]$/.test(t) && (t = t.slice(1, -1)), e.hash && (t += e.hash), /["'() \t\n]|(%20)/.test(t) || e.needQuotes ? '"'.concat(t.replace(/"/g, '\\"').replace(/\n/g, "\\n"), '"') : t) : t
                    }
                },
                8081: function(t) {
                    t.exports = function(t) {
                        return t[1]
                    }
                },
                3379: function(t) {
                    var e = [];

                    function s(t) {
                        for (var s = -1, i = 0; i < e.length; i++)
                            if (e[i].identifier === t) {
                                s = i;
                                break
                            } return s
                    }

                    function i(t, i) {
                        for (var a = {}, n = [], l = 0; l < t.length; l++) {
                            var r = t[l],
                                c = i.base ? r[0] + i.base : r[0],
                                u = a[c] || 0,
                                d = "".concat(c, " ").concat(u);
                            a[c] = u + 1;
                            var h = s(d),
                                p = {
                                    css: r[1],
                                    media: r[2],
                                    sourceMap: r[3],
                                    supports: r[4],
                                    layer: r[5]
                                };
                            if (-1 !== h) e[h].references++, e[h].updater(p);
                            else {
                                var m = o(p, i);
                                i.byIndex = l, e.splice(l, 0, {
                                    identifier: d,
                                    updater: m,
                                    references: 1
                                })
                            }
                            n.push(d)
                        }
                        return n
                    }

                    function o(t, e) {
                        var s = e.domAPI(e);
                        return s.update(t),
                            function(e) {
                                if (e) {
                                    if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap && e.supports === t.supports && e.layer === t.layer) return;
                                    s.update(t = e)
                                } else s.remove()
                            }
                    }
                    t.exports = function(t, o) {
                        var a = i(t = t || [], o = o || {});
                        return function(t) {
                            t = t || [];
                            for (var n = 0; n < a.length; n++) {
                                var l = s(a[n]);
                                e[l].references--
                            }
                            for (var r = i(t, o), c = 0; c < a.length; c++) {
                                var u = s(a[c]);
                                0 === e[u].references && (e[u].updater(), e.splice(u, 1))
                            }
                            a = r
                        }
                    }
                },
                569: function(t) {
                    var e = {};
                    t.exports = function(t, s) {
                        var i = function(t) {
                            if (void 0 === e[t]) {
                                var s = document.querySelector(t);
                                if (window.HTMLIFrameElement && s instanceof window.HTMLIFrameElement) try {
                                    s = s.contentDocument.head
                                } catch (t) {
                                    s = null
                                }
                                e[t] = s
                            }
                            return e[t]
                        }(t);
                        if (!i) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                        i.appendChild(s)
                    }
                },
                9216: function(t) {
                    t.exports = function(t) {
                        var e = document.createElement("style");
                        return t.setAttributes(e, t.attributes), t.insert(e, t.options), e
                    }
                },
                3565: function(t, e, s) {
                    t.exports = function(t) {
                        var e = s.nc;
                        e && t.setAttribute("nonce", e)
                    }
                },
                7795: function(t) {
                    t.exports = function(t) {
                        var e = t.insertStyleElement(t);
                        return {
                            update: function(s) {
                                ! function(t, e, s) {
                                    var i = "";
                                    s.supports && (i += "@supports (".concat(s.supports, ") {")), s.media && (i += "@media ".concat(s.media, " {"));
                                    var o = void 0 !== s.layer;
                                    o && (i += "@layer".concat(s.layer.length > 0 ? " ".concat(s.layer) : "", " {")), i += s.css, o && (i += "}"), s.media && (i += "}"), s.supports && (i += "}");
                                    var a = s.sourceMap;
                                    a && "undefined" != typeof btoa && (i += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a)))), " */")), e.styleTagTransform(i, t, e.options)
                                }(e, t, s)
                            },
                            remove: function() {
                                ! function(t) {
                                    if (null === t.parentNode) return !1;
                                    t.parentNode.removeChild(t)
                                }(e)
                            }
                        }
                    }
                },
                4589: function(t) {
                    t.exports = function(t, e) {
                        if (e.styleSheet) e.styleSheet.cssText = t;
                        else {
                            for (; e.firstChild;) e.removeChild(e.firstChild);
                            e.appendChild(document.createTextNode(t))
                        }
                    }
                },
                6468: function(t) {
                    t.exports = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg=="
                }
            },
            e = {};

        function s(i) {
            var o = e[i];
            if (void 0 !== o) return o.exports;
            var a = e[i] = {
                id: i,
                exports: {}
            };
            return t[i](a, a.exports, s), a.exports
        }
        s.m = t, s.n = function(t) {
            var e = t && t.__esModule ? function() {
                return t.default
            } : function() {
                return t
            };
            return s.d(e, {
                a: e
            }), e
        }, s.d = function(t, e) {
            for (var i in e) s.o(e, i) && !s.o(t, i) && Object.defineProperty(t, i, {
                enumerable: !0,
                get: e[i]
            })
        }, s.o = function(t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, s.r = function(t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(t, "__esModule", {
                value: !0
            })
        }
        
        , s.b = document.baseURI || self.location.href, s.nc = void 0;
        var i = {};
        return function() {
            s.r(i), s.d(i, {
                TemplateCustomizer: function() {
                    return L
                }
            });
            var t = s(3379),
                e = s.n(t),
                o = s(7795),
                a = s.n(o),
                n = s(569),
                l = s.n(n),
                r = s(3565),
                c = s.n(r),
                u = s(9216),
                d = s.n(u),
                h = s(4589),
                p = s.n(h),
                m = s(7621),
                y = {};


            function g(t) {
                return g = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                    return typeof t
                } : function(t) {
                    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
                }, g(t)
            }

            function v(t, e, s) {
                return (e = _(e)) in t ? Object.defineProperty(t, e, {
                    value: s,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : t[e] = s, t
            }

            function b(t, e) {
                for (var s = 0; s < e.length; s++) {
                    var i = e[s];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, _(i.key), i)
                }
            }

            function _(t) {
                var e = function(t, e) {
                    if ("object" !== g(t) || null === t) return t;
                    var s = t[Symbol.toPrimitive];
                    if (void 0 !== s) {
                        var i = s.call(t, "string");
                        if ("object" !== g(i)) return i;
                        throw new TypeError("@@toPrimitive must return a primitive value.")
                    }
                    return String(t)
                }(t);
                return "symbol" === g(e) ? e : String(e)
            }
            var x = ["rtl", "style", "layoutType", "layoutMenuFlipped", "showDropdownOnHover", "layoutNavbarFixed", "layoutFooterFixed", "themes"],
                w = ["light", "dark"],
                S = document.documentElement.classList,
                z = document.getElementsByTagName("HTML")[0].getAttribute("data-theme") || 0,
                F = S.contains("dark-style") ? "dark" : "light",
                k = "rtl" === document.documentElement.getAttribute("dir"),
                C = !!S.contains("layout-menu-collapsed"),
                A = !!S.contains("layout-menu-flipped"),
                T = !!S.contains("layout-navbar-fixed"),
                E = !!S.contains("layout-footer-fixed"),
                N = S.contains("layout-menu-offcanvas") ? "static-offcanvas" : S.contains("layout-menu-fixed") ? "fixed" : S.contains("layout-menu-fixed-offcanvas") ? "fixed-offcanvas" : "static",
                L = function() {
                    function t(e) {
                        var s = e.cssPath,
                            i = e.themesPath,
                            o = e.cssFilenamePattern,
                            a = e.displayCustomizer,
                            n = e.controls,
                            l = e.defaultTextDir,
                            r = e.defaultLayoutType,
                            c = e.defaultMenuCollapsed,
                            u = e.defaultMenuFlipped,
                            d = e.defaultShowDropdownOnHover,
                            h = e.defaultNavbarFixed,
                            p = e.defaultFooterFixed,
                            m = e.styles,
                            y = e.defaultStyle,
                            f = e.availableThemes,
                            g = e.defaultTheme,
                            v = e.pathResolver,
                            b = e.onSettingsChange,
                            _ = e.lang;
                        if (function(t, e) {
                                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                            }(this, t), !this._ssr) {
                            if (!window.Helpers) throw new Error("window.Helpers required.");
                            if (this.settings = {}, this.settings.cssPath = s, this.settings.themesPath = i, this.settings.cssFilenamePattern = o || "%name%.css", this.settings.displayCustomizer = void 0 === a || a, this.settings.controls = n || x, this.settings.defaultTextDir = "rtl" === l || k, this.settings.defaultLayoutType = r || N, this.settings.defaultMenuCollapsed = void 0 !== c ? c : C, this.settings.defaultMenuFlipped = void 0 !== u ? u : A, this.settings.defaultShowDropdownOnHover = void 0 !== d ? d : void 0, this.settings.defaultNavbarFixed = void 0 !== h ? h : T, this.settings.defaultFooterFixed = void 0 !== p ? p : E, this.settings.availableThemes = f || t.THEMES, this.settings.defaultTheme = this._getDefaultTheme(void 0 !== g ? g : z), this.settings.styles = m || w, this.settings.defaultStyle = y || F, this.settings.lang = _ || "en", this.pathResolver = v || function(t) {
                                    return t
                                }, this.settings.styles.length < 2) {
                                var S = this.settings.controls.indexOf("style"); - 1 !== S && (this.settings.controls = this.settings.controls.slice(0, S).concat(this.settings.controls.slice(S + 1)))
                            }
                            this.settings.onSettingsChange = "function" == typeof b ? b : function() {}, this._loadSettings(), this._listeners = [], this._controls = {}, this._initDirection(), this._initStyle(), this._initTheme(), this.setLayoutType(this.settings.layoutType, !1), this.setLayoutMenuFlipped(this.settings.layoutMenuFlipped, !1), this.setDropdownOnHover(this.settings.showDropdownOnHover, !1), this.setLayoutNavbarFixed(this.settings.layoutNavbarFixed, !1), this.setLayoutFooterFixed(this.settings.layoutFooterFixed, !1), this._setup()
                        }
                    }
                    var e, s;
                    return e = t, s = [{
                        key: "setRtl",
                        value: function(t) {
                            this._hasControls("rtl") && (this._setSetting("Rtl", String(t)), window.location.reload())
                        }
                    }, {
                        key: "setStyle",
                        value: function(t) {
                            this._hasControls("style") && (this._setSetting("Style", -1 === ["dark"].indexOf(t) ? "light" : t), window.location.reload())
                        }
                    }, {
                        key: "setTheme",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1],
                                s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
                            if (this._hasControls("themes")) {
                                var i = this._getThemeByName(t);
                                if (i) {
                                    this.settings.theme = i, e && this._setSetting("Theme", t);
                                    var o = this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace("%name%", t + ("light" !== this.settings.style ? "-".concat(this.settings.style) : "")));
                                    this._loadStylesheets(v({}, o, document.querySelector(".template-customizer-theme-css")), s || function() {}), e && this.settings.onSettingsChange.call(this, this.settings)
                                }
                            }
                        }
                    }, {
                        key: "setLayoutType",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                            if (this._hasControls("layoutType") && ("static" === t || "static-offcanvas" === t || "fixed" === t || "fixed-offcanvas" === t)) {
                                this.settings.layoutType = t, e && this._setSetting("LayoutType", t), window.Helpers.setPosition("fixed" === t || "fixed-offcanvas" === t, "static-offcanvas" === t || "fixed-offcanvas" === t), e && this.settings.onSettingsChange.call(this, this.settings);
                                var s = window.Helpers.menuPsScroll,
                                    i = window.PerfectScrollbar;
                                "fixed" === this.settings.layoutType || "fixed-offcanvas" === this.settings.layoutType ? i && s && (window.Helpers.menuPsScroll.destroy(), s = new i(document.querySelector(".menu-inner"), {
                                    suppressScrollX: !0,
                                    wheelPropagation: !1
                                }), window.Helpers.menuPsScroll = s) : s && window.Helpers.menuPsScroll.destroy()
                            }
                        }
                    }, {
                        key: "setLayoutMenuFlipped",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                            this._hasControls("layoutMenuFlipped") && (this.settings.layoutMenuFlipped = t, e && this._setSetting("MenuFlipped", t), window.Helpers.setFlipped(t), e && this.settings.onSettingsChange.call(this, this.settings))
                        }
                    }, {
                        key: "setDropdownOnHover",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                            if (this._hasControls("showDropdownOnHover")) {
                                if (this.settings.showDropdownOnHover = t, e && this._setSetting("ShowDropdownOnHover", t), window.Helpers.mainMenu) {
                                    window.Helpers.mainMenu.destroy(), config.showDropdownOnHover = t;
                                    var s = window,
                                        i = s.Menu;
                                    window.Helpers.mainMenu = new i(document.getElementById("layout-menu"), {
                                        orientation: "horizontal",
                                        closeChildren: !0,
                                        showDropdownOnHover: config.showDropdownOnHover
                                    })
                                }
                                e && this.settings.onSettingsChange.call(this, this.settings)
                            }
                        }
                    }, {
                        key: "setLayoutNavbarFixed",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                            this._hasControls("layoutNavbarFixed") && (this.settings.layoutNavbarFixed = t, e && this._setSetting("FixedNavbar", t), window.Helpers.setNavbarFixed(t), e && this.settings.onSettingsChange.call(this, this.settings))
                        }
                    }, {
                        key: "setLayoutFooterFixed",
                        value: function(t) {
                            var e = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                            this._hasControls("layoutFooterFixed") && (this.settings.layoutFooterFixed = t, e && this._setSetting("FixedFooter", t), window.Helpers.setFooterFixed(t), e && this.settings.onSettingsChange.call(this, this.settings))
                        }
                    }, {
                        key: "setLang",
                        value: function(e) {
                            var s = this,
                                i = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                            if (e !== this.settings.lang || i) {
                                if (!t.LANGUAGES[e]) throw new Error('Language "'.concat(e, '" not found!'));
                                var o = t.LANGUAGES[e];
                                ["panel_header", "panel_sub_header", "theming_header", "theme_header", "style_label", "style_switch_light", "style_switch_dark", "layout_header", "layout_label", "layout_static", "layout_offcanvas", "layout_fixed", "layout_fixed_offcanvas", "layout_flipped_label", "layout_dd_open_label", "layout_navbar_label", "layout_footer_label", "misc_header", "theme_label", "rtl_label"].forEach((function(t) {
                                    var e = s.container.querySelector(".template-customizer-t-".concat(t));
                                    e && (e.textContent = o[t])
                                }));
                                for (var a = o.themes || {}, n = this.container.querySelectorAll(".template-customizer-theme-item") || [], l = 0, r = n.length; l < r; l++) {
                                    var c = n[l].querySelector('input[type="radio"]').value;
                                    n[l].querySelector(".template-customizer-theme-name").textContent = a[c] || this._getThemeByName(c).title
                                }
                                this.settings.lang = e
                            }
                        }
                    }, {
                        key: "update",
                        value: function() {
                            if (!this._ssr) {
                                var t = !!document.querySelector(".layout-navbar"),
                                    e = !!document.querySelector(".layout-menu"),
                                    s = !!document.querySelector(".layout-menu-horizontal.menu, .layout-menu-horizontal .menu"),
                                    i = (document.querySelector(".layout-wrapper.layout-navbar-full"), !!document.querySelector(".content-footer"));
                                this._controls.layoutMenuFlipped && (e ? (this._controls.layoutMenuFlipped.removeAttribute("disabled"), this._controls.layoutMenuFlipped.classList.remove("disabled")) : (this._controls.layoutMenuFlipped.setAttribute("disabled", "disabled"), this._controls.layoutMenuFlipped.classList.add("disabled"))), this._controls.showDropdownOnHover && (e ? (this._controls.showDropdownOnHover.setAttribute("disabled", "disabled"), this._controls.showDropdownOnHover.classList.add("disabled")) : (this._controls.showDropdownOnHover.removeAttribute("disabled"), this._controls.showDropdownOnHover.classList.remove("disabled"))), this._controls.layoutNavbarFixed && (t ? (this._controls.layoutNavbarFixed.removeAttribute("disabled"), this._controls.layoutNavbarFixedW.classList.remove("disabled")) : (this._controls.layoutNavbarFixed.setAttribute("disabled", "disabled"), this._controls.layoutNavbarFixedW.classList.add("disabled")), s && t && "fixed" == this.settings.layoutType && (this._controls.layoutNavbarFixed.setAttribute("disabled", "disabled"), this._controls.layoutNavbarFixedW.classList.add("disabled"))), this._controls.layoutFooterFixed && (i ? (this._controls.layoutFooterFixed.removeAttribute("disabled"), this._controls.layoutFooterFixedW.classList.remove("disabled")) : (this._controls.layoutFooterFixed.setAttribute("disabled", "disabled"), this._controls.layoutFooterFixedW.classList.add("disabled"))), this._controls.layoutType && (e || s ? this._controls.layoutType.removeAttribute("disabled") : this._controls.layoutType.setAttribute("disabled", "disabled"))
                            }
                        }
                    }, {
                        key: "clearLocalStorage",
                        value: function() {
                            this._ssr || (this._setSetting("Theme", ""), this._setSetting("Rtl", ""), this._setSetting("Style", ""), this._setSetting("MenuFlipped", ""), this._setSetting("FixedNavbar", ""), this._setSetting("FixedFooter", ""), this._setSetting("LayoutType", ""))
                        }
                    }, {
                        key: "destroy",
                        value: function() {
                            this._ssr || (this._cleanup(), this.settings = null, this.container.parentNode.removeChild(this.container), this.container = null)
                        }
                    }, {
                        key: "_loadSettings",
                        value: function() {
                            var t, e = this._getSetting("Rtl"),
                                s = this._getSetting("Style"),
                                i = this._getSetting("LayoutCollapsed"),
                                o = this._getSetting("LayoutMenuFlipped"),
                                a = this._getSetting("ShowDropdownOnHover"),
                                n = this._getSetting("FixedNavbar"),
                                l = this._getSetting("FixedFooter"),
                                r = this._getSetting("LayoutType");
                            t = "" !== r && -1 !== ["static", "static-offcanvas", "fixed", "fixed-offcanvas"].indexOf(r) ? r : this.settings.defaultLayoutType, this.settings.layoutType = t, this.settings.rtl = "" !== e ? "true" === e : this.settings.defaultTextDir, this.settings.style = -1 !== this.settings.styles.indexOf(s) ? s : this.settings.defaultStyle, -1 === this.settings.styles.indexOf(this.settings.style) && (this.settings.style = this.settings.styles[0]), this.settings.layoutMenu = "" !== i ? "true" === i : this.settings.defaultMenuCollapsed, this.settings.layoutMenuFlipped = "" !== o ? "true" === o : this.settings.defaultMenuFlipped, this.settings.showDropdownOnHover = "" !== a ? "true" === a : this.settings.defaultShowDropdownOnHover, this.settings.layoutNavbarFixed = "" !== n ? "true" === n : this.settings.defaultNavbarFixed, this.settings.layoutFooterFixed = "" !== l ? "true" === l : this.settings.defaultFooterFixed, this.settings.theme = this._getThemeByName(this._getSetting("Theme"), !0), this._hasControls("rtl") || (this.settings.rtl = "rtl" === document.documentElement.getAttribute("dir")), this._hasControls("style") || (this.settings.style = S.contains("dark-style") ? "dark" : "light"), this._hasControls("layoutType") || (this.settings.layoutType = null), this._hasControls("layoutMenuFlipped") || (this.settings.layoutMenuFlipped = null), this._hasControls("showDropdownOnHover") || (this.settings.showDropdownOnHover = null), this._hasControls("layoutNavbarFixed") || (this.settings.layoutNavbarFixed = null), this._hasControls("layoutFooterFixed") || (this.settings.layoutFooterFixed = null), this._hasControls("themes") || (this.settings.theme = null)
                        }
                    }, 
                     {
                        key: "_initDirection",
                        value: function() {
                            this._hasControls("rtl") && document.documentElement.setAttribute("dir", this.settings.rtl ? "rtl" : "ltr")
                        }
                    }, {
                        key: "_initStyle",
                        value: function() {
                            if (this._hasControls("style")) {
                                var t = this.settings.style;
                                this._insertStylesheet("template-customizer-core-css", this.pathResolver(this.settings.cssPath + this.settings.cssFilenamePattern.replace("%name%", "core".concat("light" !== t ? "-".concat(t) : "")))), ("light" === t ? ["dark-style"] : ["light-style"]).forEach((function(t) {
                                    document.documentElement.classList.remove(t)
                                })), document.documentElement.classList.add("".concat(t, "-style"))
                            }
                        }
                    }, {
                        key: "_initTheme",
                        value: function() {
                            if (this._hasControls("themes")) this._insertStylesheet("template-customizer-theme-css", this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace("%name%", this.settings.theme.name + ("light" !== this.settings.style ? "-".concat(this.settings.style) : ""))));
                            else {
                                var t = this._getSetting("Theme");
                                this._insertStylesheet("template-customizer-theme-css", this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace("%name%", t || "theme-default" + ("light" !== this.settings.style ? "-".concat(this.settings.style) : ""))))
                            }
                        }
                    }, {
                        key: "_insertStylesheet",
                        value: function(t, e) {
                            var s = document.querySelector(".".concat(t));
                            if ("number" == typeof document.documentMode && document.documentMode < 11) {
                                if (!s) return;
                                if (e === s.getAttribute("href")) return;
                                var i = document.createElement("link");
                                i.setAttribute("rel", "stylesheet"), i.setAttribute("type", "text/css"), i.className = t, i.setAttribute("href", e), s.parentNode.insertBefore(i, s.nextSibling)
                            } else document.write('<link rel="stylesheet" type="text/css" href="'.concat(e, '" class="').concat(t, '">'));
                            s.parentNode.removeChild(s)
                        }
                    }, {
                        key: "_loadStylesheets",
                        value: function(t, e) {
                            var s = Object.keys(t),
                                i = s.length,
                                o = 0;

                            function a(t, e, s) {
                                var i = document.createElement("link");
                                i.setAttribute("href", t), i.setAttribute("rel", "stylesheet"), i.setAttribute("type", "text/css"), i.className = e.className;
                                var o, a = "sheet" in i ? "sheet" : "styleSheet",
                                    n = "sheet" in i ? "cssRules" : "rules",
                                    l = setTimeout((function() {
                                        clearInterval(o), clearTimeout(l), e.parentNode.removeChild(i), s(!1, t)
                                    }), 15e3);
                                o = setInterval((function() {
                                    try {
                                        i[a] && i[a][n].length && (clearInterval(o), clearTimeout(l), e.parentNode.removeChild(e), s(!0))
                                    } catch (t) {}
                                }), 10), e.parentNode.insertBefore(i, e.nextSibling)
                            }
                            for (var n = 0; n < s.length; n++) a(s[n], t[s[n]], void((o += 1) >= i && e()))
                        }
                    }, {
                        key: "_loadingState",
                        value: function(t, e) {
                            this.container.classList[t ? "add" : "remove"]("template-customizer-loading".concat(e ? "-theme" : ""))
                        }
                    }, {
                        key: "_getElementFromString",
                        value: function(t) {
                            var e = document.createElement("div");
                            return e.innerHTML = t, e.firstChild
                        }
                    }, {
                        key: "_getSetting",
                        value: function(t) {
                            var e = null,
                                s = this._getLayoutName();
                            try {
                                e = localStorage.getItem("templateCustomizer-".concat(s, "--").concat(t))
                            } catch (t) {}
                            return String(e || "")
                        }
                    }, {
                        key: "_setSetting",
                        value: function(t, e) {
                            var s = this._getLayoutName();
                            try {
                                localStorage.setItem("templateCustomizer-".concat(s, "--").concat(t), String(e))
                            } catch (t) {}
                        }
                    }, {
                        key: "_getLayoutName",
                        value: function() {
                            return document.getElementsByTagName("HTML")[0].getAttribute("data-template")
                        }
                    }, {
                        key: "_removeListeners",
                        value: function() {
                            for (var t = 0, e = this._listeners.length; t < e; t++) this._listeners[t][0].removeEventListener(this._listeners[t][1], this._listeners[t][2])
                        }
                    }, {
                        key: "_cleanup",
                        value: function() {
                            this._removeListeners(), this._listeners = [], this._controls = {}, this._updateInterval && (clearInterval(this._updateInterval), this._updateInterval = null)
                        }
                    }, {
                        key: "_ssr",
                        get: function() {
                            return "undefined" == typeof window
                        }
                    }, {
                        key: "_hasControls",
                        value: function(t) {
                            var e = this,
                                s = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                            return t.split(" ").reduce((function(t, i) {
                                return -1 !== e.settings.controls.indexOf(i) ? (s || !1 !== t) && (t = !0) : s && !0 === t || (t = !1), t
                            }), null)
                        }
                    }, {
                        key: "_getDefaultTheme",
                        value: function(t) {
                            var e;
                            if (!(e = "string" == typeof t ? this._getThemeByName(t, !1) : this.settings.availableThemes[t])) throw new Error('Theme ID "'.concat(t, '" not found!'));
                            return e
                        }
                    }, {
                        key: "_getThemeByName",
                        value: function(t) {
                            for (var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], s = this.settings.availableThemes, i = 0, o = s.length; i < o; i++)
                                if (s[i].name === t) return s[i];
                            return e ? this.settings.defaultTheme : null
                        }
                    }], s && b(e.prototype, s), Object.defineProperty(e, "prototype", {
                        writable: !1
                    }), t
                }();
            L.THEMES = [{
                name: "theme-default",
                title: "Default"
            }, {
                name: "theme-semi-dark",
                title: "Semi Dark"
            }, {
                name: "theme-bordered",
                title: "Bordered"
            }], L.LANGUAGES = {
                en: {
                    panel_header: "TEMPLATE CUSTOMIZER",
                    panel_sub_header: "Customize and preview in real time",
                    theming_header: "THEMING",
                    theme_header: "THEME",
                    theme_label: "Themes",
                    style_label: "Style (Mode)",
                    style_switch_light: "Light",
                    style_switch_dark: "Dark",
                    layout_header: "LAYOUT",
                    layout_label: "Layout (Menu)",
                    layout_static: "Static",
                    layout_offcanvas: "Offcanvas",
                    layout_fixed: "Fixed",
                    layout_fixed_offcanvas: "Fixed offcanvas",
                    layout_flipped_label: "Menu flipped",
                    layout_dd_open_label: "Dropdown on hover",
                    layout_navbar_label: "Fixed navbar",
                    layout_footer_label: "Fixed footer",
                    misc_header: "MISC",
                    rtl_label: "RTL direction"
                },
                fr: {
                    panel_header: "MODÈLE DE PERSONNALISATION",
                    panel_sub_header: "Personnalisez et prévisualisez en temps réel",
                    theming_header: "THÉMATISATION",
                    theme_header: "THÈME",
                    theme_label: "Thèmes",
                    style_label: "Style (Mode)",
                    style_switch_light: "Léger",
                    style_switch_dark: "Sombre",
                    layout_header: "DISPOSITION",
                    layout_label: "Mise en page (Menu)",
                    layout_static: "Statique",
                    layout_offcanvas: "Hors toile",
                    layout_fixed: "Fixé",
                    layout_fixed_offcanvas: "Fixe hors toile",
                    layout_flipped_label: "Menu inversé",
                    layout_dd_open_label: "Liste déroulante au survol",
                    layout_navbar_label: "Barre de navigation fixe",
                    layout_footer_label: "Pied de page fixe",
                    misc_header: "DIVERS",
                    rtl_label: "Sens RTL"
                },
                de: {
                    panel_header: "VORLAGEN-ANPASSER",
                    panel_sub_header: "Anpassen und Vorschau in Echtzeit",
                    theming_header: "THEMEN",
                    theme_header: "THEMA",
                    theme_label: "Themen",
                    style_label: "Stil (Modus)",
                    style_switch_light: "Hell",
                    style_switch_dark: "Dunkel",
                    layout_header: "LAYOUT",
                    layout_label: "Layout (Speisekarte)",
                    layout_static: "Statisch",
                    layout_offcanvas: "Leinwand",
                    layout_fixed: "Fest",
                    layout_fixed_offcanvas: "Außerhalb der Leinwand behoben",
                    layout_flipped_label: "Menü umgedreht",
                    layout_dd_open_label: "Dropdown beim Hover",
                    layout_navbar_label: "Navigationsleiste behoben",
                    layout_footer_label: "Feste Fußzeile",
                    misc_header: "VERSCHIEDENES",
                    rtl_label: "RTL-Regie"
                },
                pt: {
                    panel_header: "PERSONALIZADOR DE MODELO",
                    panel_sub_header: "Personalize e visualize em tempo real",
                    theming_header: "TEMAS",
                    theme_header: "TEMA",
                    theme_label: "Temas",
                    style_label: "Estilo (Modo)",
                    style_switch_light: "Luz",
                    style_switch_dark: "Escuro",
                    layout_header: "ESQUEMA",
                    layout_label: "Esquema (Cardápio)",
                    layout_static: "Estático",
                    layout_offcanvas: "Offcanvas",
                    layout_fixed: "Fixo",
                    layout_fixed_offcanvas: "Offscreen fixo",
                    layout_flipped_label: "Menu invertido",
                    layout_dd_open_label: "Suspensão ao passar o mouse",
                    layout_navbar_label: "Barra de navegação fixa",
                    layout_footer_label: "Rodapé fixo",
                    misc_header: "DIVERSOS",
                    rtl_label: "Direção RTL"
                }
            }
        }(), i
    }()
}));