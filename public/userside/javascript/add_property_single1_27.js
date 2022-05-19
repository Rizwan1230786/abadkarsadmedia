(function($) {
    $.fn.extend({
        center_screen: function(position) {
            var win_height = $(window).height();
            var ypos = $(window).scrollTop();
            var bounds = {
                w: $(this).width(),
                h: $(this).height()
            };
            xpos = ($(window).width() - bounds.w) / 2;
            if (position == "fixed") ypos = 0;
            else position = "absolute";
            ypos = ypos + (win_height - bounds.h) / 2;
            ypos = (ypos > 17) ? ypos : 17;
            return $(this).css({
                top: ypos,
                left: xpos,
                position: position
            });
        }
    });
})(jQuery);


//COMMENT: jquery.ui.js
(function(e, t) {
    function i(t, i) {
        var s, n, r, o = t.nodeName.toLowerCase();
        return "area" === o ? (s = t.parentNode, n = s.name, t.href && n && "map" === s.nodeName.toLowerCase() ? (r = e("img[usemap=#" + n + "]")[0], !!r && a(r)) : !1) : (/input|select|textarea|button|object/.test(o) ? !t.disabled : "a" === o ? t.href || i : i) && a(t)
    }

    function a(t) {
        return e.expr.filters.visible(t) && !e(t).parents().addBack().filter(function() {
            return "hidden" === e.css(this, "visibility")
        }).length
    }
    var s = 0,
        n = /^ui-id-\d+$/;
    e.ui = e.ui || {}, e.extend(e.ui, {
        version: "1.10.3",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            NUMPAD_ADD: 107,
            NUMPAD_DECIMAL: 110,
            NUMPAD_DIVIDE: 111,
            NUMPAD_ENTER: 108,
            NUMPAD_MULTIPLY: 106,
            NUMPAD_SUBTRACT: 109,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), e.fn.extend({
        focus: function(t) {
            return function(i, a) {
                return "number" == typeof i ? this.each(function() {
                    var t = this;
                    setTimeout(function() {
                        e(t).focus(), a && a.call(t)
                    }, i)
                }) : t.apply(this, arguments)
            }
        }(e.fn.focus),
        scrollParent: function() {
            var t;
            return t = e.ui.ie && /(static|relative)/.test(this.css("position")) || /absolute/.test(this.css("position")) ? this.parents().filter(function() {
                return /(relative|absolute|fixed)/.test(e.css(this, "position")) && /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x"))
            }).eq(0) : this.parents().filter(function() {
                return /(auto|scroll)/.test(e.css(this, "overflow") + e.css(this, "overflow-y") + e.css(this, "overflow-x"))
            }).eq(0), /fixed/.test(this.css("position")) || !t.length ? e(document) : t
        },
        zIndex: function(i) {
            if (i !== t) return this.css("zIndex", i);
            if (this.length)
                for (var a, s, n = e(this[0]); n.length && n[0] !== document;) {
                    if (a = n.css("position"), ("absolute" === a || "relative" === a || "fixed" === a) && (s = parseInt(n.css("zIndex"), 10), !isNaN(s) && 0 !== s)) return s;
                    n = n.parent()
                }
            return 0
        },
        uniqueId: function() {
            return this.each(function() {
                this.id || (this.id = "ui-id-" + ++s)
            })
        },
        removeUniqueId: function() {
            return this.each(function() {
                n.test(this.id) && e(this).removeAttr("id")
            })
        }
    }), e.extend(e.expr[":"], {
        data: e.expr.createPseudo ? e.expr.createPseudo(function(t) {
            return function(i) {
                return !!e.data(i, t)
            }
        }) : function(t, i, a) {
            return !!e.data(t, a[3])
        },
        focusable: function(t) {
            return i(t, !isNaN(e.attr(t, "tabindex")))
        },
        tabbable: function(t) {
            var a = e.attr(t, "tabindex"),
                s = isNaN(a);
            return (s || a >= 0) && i(t, !s)
        }
    }), e("<a>").outerWidth(1).jquery || e.each(["Width", "Height"], function(i, a) {
        function s(t, i, a, s) {
            return e.each(n, function() {
                i -= parseFloat(e.css(t, "padding" + this)) || 0, a && (i -= parseFloat(e.css(t, "border" + this + "Width")) || 0), s && (i -= parseFloat(e.css(t, "margin" + this)) || 0)
            }), i
        }
        var n = "Width" === a ? ["Left", "Right"] : ["Top", "Bottom"],
            r = a.toLowerCase(),
            o = {
                innerWidth: e.fn.innerWidth,
                innerHeight: e.fn.innerHeight,
                outerWidth: e.fn.outerWidth,
                outerHeight: e.fn.outerHeight
            };
        e.fn["inner" + a] = function(i) {
            return i === t ? o["inner" + a].call(this) : this.each(function() {
                e(this).css(r, s(this, i) + "px")
            })
        }, e.fn["outer" + a] = function(t, i) {
            return "number" != typeof t ? o["outer" + a].call(this, t) : this.each(function() {
                e(this).css(r, s(this, t, !0, i) + "px")
            })
        }
    }), e.fn.addBack || (e.fn.addBack = function(e) {
        return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
    }), e("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (e.fn.removeData = function(t) {
        return function(i) {
            return arguments.length ? t.call(this, e.camelCase(i)) : t.call(this)
        }
    }(e.fn.removeData)), e.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), e.support.selectstart = "onselectstart" in document.createElement("div"), e.fn.extend({
        disableSelection: function() {
            return this.bind((e.support.selectstart ? "selectstart" : "mousedown") + ".ui-disableSelection", function(e) {
                e.preventDefault()
            })
        },
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        }
    }), e.extend(e.ui, {
        plugin: {
            add: function(t, i, a) {
                var s, n = e.ui[t].prototype;
                for (s in a) n.plugins[s] = n.plugins[s] || [], n.plugins[s].push([i, a[s]])
            },
            call: function(e, t, i) {
                var a, s = e.plugins[t];
                if (s && e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType)
                    for (a = 0; s.length > a; a++) e.options[s[a][0]] && s[a][1].apply(e.element, i)
            }
        },
        hasScroll: function(t, i) {
            if ("hidden" === e(t).css("overflow")) return !1;
            var a = i && "left" === i ? "scrollLeft" : "scrollTop",
                s = !1;
            return t[a] > 0 ? !0 : (t[a] = 1, s = t[a] > 0, t[a] = 0, s)
        }
    })
})(jQuery);
(function(e, t) {
    var i = 0,
        s = Array.prototype.slice,
        a = e.cleanData;
    e.cleanData = function(t) {
        for (var i, s = 0; null != (i = t[s]); s++) try {
            e(i).triggerHandler("remove")
        } catch (n) {}
        a(t)
    }, e.widget = function(i, s, a) {
        var n, r, o, h, l = {},
            u = i.split(".")[0];
        i = i.split(".")[1], n = u + "-" + i, a || (a = s, s = e.Widget), e.expr[":"][n.toLowerCase()] = function(t) {
            return !!e.data(t, n)
        }, e[u] = e[u] || {}, r = e[u][i], o = e[u][i] = function(e, i) {
            return this._createWidget ? (arguments.length && this._createWidget(e, i), t) : new o(e, i)
        }, e.extend(o, r, {
            version: a.version,
            _proto: e.extend({}, a),
            _childConstructors: []
        }), h = new s, h.options = e.widget.extend({}, h.options), e.each(a, function(i, a) {
            return e.isFunction(a) ? (l[i] = function() {
                var e = function() {
                        return s.prototype[i].apply(this, arguments)
                    },
                    t = function(e) {
                        return s.prototype[i].apply(this, e)
                    };
                return function() {
                    var i, s = this._super,
                        n = this._superApply;
                    return this._super = e, this._superApply = t, i = a.apply(this, arguments), this._super = s, this._superApply = n, i
                }
            }(), t) : (l[i] = a, t)
        }), o.prototype = e.widget.extend(h, {
            widgetEventPrefix: r ? h.widgetEventPrefix : i
        }, l, {
            constructor: o,
            namespace: u,
            widgetName: i,
            widgetFullName: n
        }), r ? (e.each(r._childConstructors, function(t, i) {
            var s = i.prototype;
            e.widget(s.namespace + "." + s.widgetName, o, i._proto)
        }), delete r._childConstructors) : s._childConstructors.push(o), e.widget.bridge(i, o)
    }, e.widget.extend = function(i) {
        for (var a, n, r = s.call(arguments, 1), o = 0, h = r.length; h > o; o++)
            for (a in r[o]) n = r[o][a], r[o].hasOwnProperty(a) && n !== t && (i[a] = e.isPlainObject(n) ? e.isPlainObject(i[a]) ? e.widget.extend({}, i[a], n) : e.widget.extend({}, n) : n);
        return i
    }, e.widget.bridge = function(i, a) {
        var n = a.prototype.widgetFullName || i;
        e.fn[i] = function(r) {
            var o = "string" == typeof r,
                h = s.call(arguments, 1),
                l = this;
            return r = !o && h.length ? e.widget.extend.apply(null, [r].concat(h)) : r, o ? this.each(function() {
                var s, a = e.data(this, n);
                return a ? e.isFunction(a[r]) && "_" !== r.charAt(0) ? (s = a[r].apply(a, h), s !== a && s !== t ? (l = s && s.jquery ? l.pushStack(s.get()) : s, !1) : t) : e.error("no such method '" + r + "' for " + i + " widget instance") : e.error("cannot call methods on " + i + " prior to initialization; " + "attempted to call method '" + r + "'")
            }) : this.each(function() {
                var t = e.data(this, n);
                t ? t.option(r || {})._init() : e.data(this, n, new a(r, this))
            }), l
        }
    }, e.Widget = function() {}, e.Widget._childConstructors = [], e.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {
            disabled: !1,
            create: null
        },
        _createWidget: function(t, s) {
            s = e(s || this.defaultElement || this)[0], this.element = e(s), this.uuid = i++, this.eventNamespace = "." + this.widgetName + this.uuid, this.options = e.widget.extend({}, this.options, this._getCreateOptions(), t), this.bindings = e(), this.hoverable = e(), this.focusable = e(), s !== this && (e.data(s, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function(e) {
                    e.target === s && this.destroy()
                }
            }), this.document = e(s.style ? s.ownerDocument : s.document || s), this.window = e(this.document[0].defaultView || this.document[0].parentWindow)), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: e.noop,
        _getCreateEventData: e.noop,
        _create: e.noop,
        _init: e.noop,
        destroy: function() {
            this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
        },
        _destroy: e.noop,
        widget: function() {
            return this.element
        },
        option: function(i, s) {
            var a, n, r, o = i;
            if (0 === arguments.length) return e.widget.extend({}, this.options);
            if ("string" == typeof i)
                if (o = {}, a = i.split("."), i = a.shift(), a.length) {
                    for (n = o[i] = e.widget.extend({}, this.options[i]), r = 0; a.length - 1 > r; r++) n[a[r]] = n[a[r]] || {}, n = n[a[r]];
                    if (i = a.pop(), s === t) return n[i] === t ? null : n[i];
                    n[i] = s
                } else {
                    if (s === t) return this.options[i] === t ? null : this.options[i];
                    o[i] = s
                }
            return this._setOptions(o), this
        },
        _setOptions: function(e) {
            var t;
            for (t in e) this._setOption(t, e[t]);
            return this
        },
        _setOption: function(e, t) {
            return this.options[e] = t, "disabled" === e && (this.widget().toggleClass(this.widgetFullName + "-disabled ui-state-disabled", !!t).attr("aria-disabled", t), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")), this
        },
        enable: function() {
            return this._setOption("disabled", !1)
        },
        disable: function() {
            return this._setOption("disabled", !0)
        },
        _on: function(i, s, a) {
            var n, r = this;
            "boolean" != typeof i && (a = s, s = i, i = !1), a ? (s = n = e(s), this.bindings = this.bindings.add(s)) : (a = s, s = this.element, n = this.widget()), e.each(a, function(a, o) {
                function h() {
                    return i || r.options.disabled !== !0 && !e(this).hasClass("ui-state-disabled") ? ("string" == typeof o ? r[o] : o).apply(r, arguments) : t
                }
                "string" != typeof o && (h.guid = o.guid = o.guid || h.guid || e.guid++);
                var l = a.match(/^(\w+)\s*(.*)$/),
                    u = l[1] + r.eventNamespace,
                    c = l[2];
                c ? n.delegate(c, u, h) : s.bind(u, h)
            })
        },
        _off: function(e, t) {
            t = (t || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.unbind(t).undelegate(t)
        },
        _delay: function(e, t) {
            function i() {
                return ("string" == typeof e ? s[e] : e).apply(s, arguments)
            }
            var s = this;
            return setTimeout(i, t || 0)
        },
        _hoverable: function(t) {
            this.hoverable = this.hoverable.add(t), this._on(t, {
                mouseenter: function(t) {
                    e(t.currentTarget).addClass("ui-state-hover")
                },
                mouseleave: function(t) {
                    e(t.currentTarget).removeClass("ui-state-hover")
                }
            })
        },
        _focusable: function(t) {
            this.focusable = this.focusable.add(t), this._on(t, {
                focusin: function(t) {
                    e(t.currentTarget).addClass("ui-state-focus")
                },
                focusout: function(t) {
                    e(t.currentTarget).removeClass("ui-state-focus")
                }
            })
        },
        _trigger: function(t, i, s) {
            var a, n, r = this.options[t];
            if (s = s || {}, i = e.Event(i), i.type = (t === this.widgetEventPrefix ? t : this.widgetEventPrefix + t).toLowerCase(), i.target = this.element[0], n = i.originalEvent)
                for (a in n) a in i || (i[a] = n[a]);
            return this.element.trigger(i, s), !(e.isFunction(r) && r.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented())
        }
    }, e.each({
        show: "fadeIn",
        hide: "fadeOut"
    }, function(t, i) {
        e.Widget.prototype["_" + t] = function(s, a, n) {
            "string" == typeof a && (a = {
                effect: a
            });
            var r, o = a ? a === !0 || "number" == typeof a ? i : a.effect || i : t;
            a = a || {}, "number" == typeof a && (a = {
                duration: a
            }), r = !e.isEmptyObject(a), a.complete = n, a.delay && s.delay(a.delay), r && e.effects && e.effects.effect[o] ? s[t](a) : o !== t && s[o] ? s[o](a.duration, a.easing, n) : s.queue(function(i) {
                e(this)[t](), n && n.call(s[0]), i()
            })
        }
    })
})(jQuery);
(function(e) {
    var t = !1;
    e(document).mouseup(function() {
        t = !1
    }), e.widget("ui.mouse", {
        version: "1.10.3",
        options: {
            cancel: "input,textarea,button,select,option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var t = this;
            this.element.bind("mousedown." + this.widgetName, function(e) {
                return t._mouseDown(e)
            }).bind("click." + this.widgetName, function(i) {
                return !0 === e.data(i.target, t.widgetName + ".preventClickEvent") ? (e.removeData(i.target, t.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1) : undefined
            }), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && e(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function(i) {
            if (!t) {
                this._mouseStarted && this._mouseUp(i), this._mouseDownEvent = i;
                var s = this,
                    a = 1 === i.which,
                    n = "string" == typeof this.options.cancel && i.target.nodeName ? e(i.target).closest(this.options.cancel).length : !1;
                return a && !n && this._mouseCapture(i) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                    s.mouseDelayMet = !0
                }, this.options.delay)), this._mouseDistanceMet(i) && this._mouseDelayMet(i) && (this._mouseStarted = this._mouseStart(i) !== !1, !this._mouseStarted) ? (i.preventDefault(), !0) : (!0 === e.data(i.target, this.widgetName + ".preventClickEvent") && e.removeData(i.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(e) {
                    return s._mouseMove(e)
                }, this._mouseUpDelegate = function(e) {
                    return s._mouseUp(e)
                }, e(document).bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), i.preventDefault(), t = !0, !0)) : !0
            }
        },
        _mouseMove: function(t) {
            return e.ui.ie && (!document.documentMode || 9 > document.documentMode) && !t.button ? this._mouseUp(t) : this._mouseStarted ? (this._mouseDrag(t), t.preventDefault()) : (this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, t) !== !1, this._mouseStarted ? this._mouseDrag(t) : this._mouseUp(t)), !this._mouseStarted)
        },
        _mouseUp: function(t) {
            return e(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, t.target === this._mouseDownEvent.target && e.data(t.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(t)), !1
        },
        _mouseDistanceMet: function(e) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - e.pageX), Math.abs(this._mouseDownEvent.pageY - e.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function() {
            return this.mouseDelayMet
        },
        _mouseStart: function() {},
        _mouseDrag: function() {},
        _mouseStop: function() {},
        _mouseCapture: function() {
            return !0
        }
    })
})(jQuery);
(function(e, t) {
    function i(e, t, i) {
        return [parseFloat(e[0]) * (p.test(e[0]) ? t / 100 : 1), parseFloat(e[1]) * (p.test(e[1]) ? i / 100 : 1)]
    }

    function s(t, i) {
        return parseInt(e.css(t, i), 10) || 0
    }

    function a(t) {
        var i = t[0];
        return 9 === i.nodeType ? {
            width: t.width(),
            height: t.height(),
            offset: {
                top: 0,
                left: 0
            }
        } : e.isWindow(i) ? {
            width: t.width(),
            height: t.height(),
            offset: {
                top: t.scrollTop(),
                left: t.scrollLeft()
            }
        } : i.preventDefault ? {
            width: 0,
            height: 0,
            offset: {
                top: i.pageY,
                left: i.pageX
            }
        } : {
            width: t.outerWidth(),
            height: t.outerHeight(),
            offset: t.offset()
        }
    }
    e.ui = e.ui || {};
    var n, r = Math.max,
        o = Math.abs,
        h = Math.round,
        l = /left|center|right/,
        u = /top|center|bottom/,
        c = /[\+\-]\d+(\.[\d]+)?%?/,
        d = /^\w+/,
        p = /%$/,
        f = e.fn.position;
    e.position = {
            scrollbarWidth: function() {
                if (n !== t) return n;
                var i, s, a = e("<div style='display:block;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),
                    r = a.children()[0];
                return e("body").append(a), i = r.offsetWidth, a.css("overflow", "scroll"), s = r.offsetWidth, i === s && (s = a[0].clientWidth), a.remove(), n = i - s
            },
            getScrollInfo: function(t) {
                var i = t.isWindow ? "" : t.element.css("overflow-x"),
                    s = t.isWindow ? "" : t.element.css("overflow-y"),
                    a = "scroll" === i || "auto" === i && t.width < t.element[0].scrollWidth,
                    n = "scroll" === s || "auto" === s && t.height < t.element[0].scrollHeight;
                return {
                    width: n ? e.position.scrollbarWidth() : 0,
                    height: a ? e.position.scrollbarWidth() : 0
                }
            },
            getWithinInfo: function(t) {
                var i = e(t || window),
                    s = e.isWindow(i[0]);
                return {
                    element: i,
                    isWindow: s,
                    offset: i.offset() || {
                        left: 0,
                        top: 0
                    },
                    scrollLeft: i.scrollLeft(),
                    scrollTop: i.scrollTop(),
                    width: s ? i.width() : i.outerWidth(),
                    height: s ? i.height() : i.outerHeight()
                }
            }
        }, e.fn.position = function(t) {
            if (!t || !t.of) return f.apply(this, arguments);
            t = e.extend({}, t);
            var n, p, m, g, v, y, b = e(t.of),
                _ = e.position.getWithinInfo(t.within),
                x = e.position.getScrollInfo(_),
                k = (t.collision || "flip").split(" "),
                w = {};
            return y = a(b), b[0].preventDefault && (t.at = "left top"), p = y.width, m = y.height, g = y.offset, v = e.extend({}, g), e.each(["my", "at"], function() {
                var e, i, s = (t[this] || "").split(" ");
                1 === s.length && (s = l.test(s[0]) ? s.concat(["center"]) : u.test(s[0]) ? ["center"].concat(s) : ["center", "center"]), s[0] = l.test(s[0]) ? s[0] : "center", s[1] = u.test(s[1]) ? s[1] : "center", e = c.exec(s[0]), i = c.exec(s[1]), w[this] = [e ? e[0] : 0, i ? i[0] : 0], t[this] = [d.exec(s[0])[0], d.exec(s[1])[0]]
            }), 1 === k.length && (k[1] = k[0]), "right" === t.at[0] ? v.left += p : "center" === t.at[0] && (v.left += p / 2), "bottom" === t.at[1] ? v.top += m : "center" === t.at[1] && (v.top += m / 2), n = i(w.at, p, m), v.left += n[0], v.top += n[1], this.each(function() {
                var a, l, u = e(this),
                    c = u.outerWidth(),
                    d = u.outerHeight(),
                    f = s(this, "marginLeft"),
                    y = s(this, "marginTop"),
                    D = c + f + s(this, "marginRight") + x.width,
                    T = d + y + s(this, "marginBottom") + x.height,
                    M = e.extend({}, v),
                    S = i(w.my, u.outerWidth(), u.outerHeight());
                "right" === t.my[0] ? M.left -= c : "center" === t.my[0] && (M.left -= c / 2), "bottom" === t.my[1] ? M.top -= d : "center" === t.my[1] && (M.top -= d / 2), M.left += S[0], M.top += S[1], e.support.offsetFractions || (M.left = h(M.left), M.top = h(M.top)), a = {
                    marginLeft: f,
                    marginTop: y
                }, e.each(["left", "top"], function(i, s) {
                    e.ui.position[k[i]] && e.ui.position[k[i]][s](M, {
                        targetWidth: p,
                        targetHeight: m,
                        elemWidth: c,
                        elemHeight: d,
                        collisionPosition: a,
                        collisionWidth: D,
                        collisionHeight: T,
                        offset: [n[0] + S[0], n[1] + S[1]],
                        my: t.my,
                        at: t.at,
                        within: _,
                        elem: u
                    })
                }), t.using && (l = function(e) {
                    var i = g.left - M.left,
                        s = i + p - c,
                        a = g.top - M.top,
                        n = a + m - d,
                        h = {
                            target: {
                                element: b,
                                left: g.left,
                                top: g.top,
                                width: p,
                                height: m
                            },
                            element: {
                                element: u,
                                left: M.left,
                                top: M.top,
                                width: c,
                                height: d
                            },
                            horizontal: 0 > s ? "left" : i > 0 ? "right" : "center",
                            vertical: 0 > n ? "top" : a > 0 ? "bottom" : "middle"
                        };
                    c > p && p > o(i + s) && (h.horizontal = "center"), d > m && m > o(a + n) && (h.vertical = "middle"), h.important = r(o(i), o(s)) > r(o(a), o(n)) ? "horizontal" : "vertical", t.using.call(this, e, h)
                }), u.offset(e.extend(M, {
                    using: l
                }))
            })
        }, e.ui.position = {
            fit: {
                left: function(e, t) {
                    var i, s = t.within,
                        a = s.isWindow ? s.scrollLeft : s.offset.left,
                        n = s.width,
                        o = e.left - t.collisionPosition.marginLeft,
                        h = a - o,
                        l = o + t.collisionWidth - n - a;
                    t.collisionWidth > n ? h > 0 && 0 >= l ? (i = e.left + h + t.collisionWidth - n - a, e.left += h - i) : e.left = l > 0 && 0 >= h ? a : h > l ? a + n - t.collisionWidth : a : h > 0 ? e.left += h : l > 0 ? e.left -= l : e.left = r(e.left - o, e.left)
                },
                top: function(e, t) {
                    var i, s = t.within,
                        a = s.isWindow ? s.scrollTop : s.offset.top,
                        n = t.within.height,
                        o = e.top - t.collisionPosition.marginTop,
                        h = a - o,
                        l = o + t.collisionHeight - n - a;
                    t.collisionHeight > n ? h > 0 && 0 >= l ? (i = e.top + h + t.collisionHeight - n - a, e.top += h - i) : e.top = l > 0 && 0 >= h ? a : h > l ? a + n - t.collisionHeight : a : h > 0 ? e.top += h : l > 0 ? e.top -= l : e.top = r(e.top - o, e.top)
                }
            },
            flip: {
                left: function(e, t) {
                    var i, s, a = t.within,
                        n = a.offset.left + a.scrollLeft,
                        r = a.width,
                        h = a.isWindow ? a.scrollLeft : a.offset.left,
                        l = e.left - t.collisionPosition.marginLeft,
                        u = l - h,
                        c = l + t.collisionWidth - r - h,
                        d = "left" === t.my[0] ? -t.elemWidth : "right" === t.my[0] ? t.elemWidth : 0,
                        p = "left" === t.at[0] ? t.targetWidth : "right" === t.at[0] ? -t.targetWidth : 0,
                        f = -2 * t.offset[0];
                    0 > u ? (i = e.left + d + p + f + t.collisionWidth - r - n, (0 > i || o(u) > i) && (e.left += d + p + f)) : c > 0 && (s = e.left - t.collisionPosition.marginLeft + d + p + f - h, (s > 0 || c > o(s)) && (e.left += d + p + f))
                },
                top: function(e, t) {
                    var i, s, a = t.within,
                        n = a.offset.top + a.scrollTop,
                        r = a.height,
                        h = a.isWindow ? a.scrollTop : a.offset.top,
                        l = e.top - t.collisionPosition.marginTop,
                        u = l - h,
                        c = l + t.collisionHeight - r - h,
                        d = "top" === t.my[1],
                        p = d ? -t.elemHeight : "bottom" === t.my[1] ? t.elemHeight : 0,
                        f = "top" === t.at[1] ? t.targetHeight : "bottom" === t.at[1] ? -t.targetHeight : 0,
                        m = -2 * t.offset[1];
                    0 > u ? (s = e.top + p + f + m + t.collisionHeight - r - n, e.top + p + f + m > u && (0 > s || o(u) > s) && (e.top += p + f + m)) : c > 0 && (i = e.top - t.collisionPosition.marginTop + p + f + m - h, e.top + p + f + m > c && (i > 0 || c > o(i)) && (e.top += p + f + m))
                }
            },
            flipfit: {
                left: function() {
                    e.ui.position.flip.left.apply(this, arguments), e.ui.position.fit.left.apply(this, arguments)
                },
                top: function() {
                    e.ui.position.flip.top.apply(this, arguments), e.ui.position.fit.top.apply(this, arguments)
                }
            }
        },
        function() {
            var t, i, s, a, n, r = document.getElementsByTagName("body")[0],
                o = document.createElement("div");
            t = document.createElement(r ? "div" : "body"), s = {
                visibility: "hidden",
                width: 0,
                height: 0,
                border: 0,
                margin: 0,
                background: "none"
            }, r && e.extend(s, {
                position: "absolute",
                left: "-1000px",
                top: "-1000px"
            });
            for (n in s) t.style[n] = s[n];
            t.appendChild(o), i = r || document.documentElement, i.insertBefore(t, i.firstChild), o.style.cssText = "position: absolute; left: 10.7432222px;", a = e(o).offset().left, e.support.offsetFractions = a > 10 && 11 > a, t.innerHTML = "", i.removeChild(t)
        }()
})(jQuery);
(function(e) {
    e.widget("ui.draggable", e.ui.mouse, {
        version: "1.10.3",
        widgetEventPrefix: "drag",
        options: {
            addClasses: !0,
            appendTo: "parent",
            axis: !1,
            connectToSortable: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            iframeFix: !1,
            opacity: !1,
            refreshPositions: !1,
            revert: !1,
            revertDuration: 500,
            scope: "default",
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            snap: !1,
            snapMode: "both",
            snapTolerance: 20,
            stack: !1,
            zIndex: !1,
            drag: null,
            start: null,
            stop: null
        },
        _create: function() {
            "original" !== this.options.helper || /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative"), this.options.addClasses && this.element.addClass("ui-draggable"), this.options.disabled && this.element.addClass("ui-draggable-disabled"), this._mouseInit()
        },
        _destroy: function() {
            this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._mouseDestroy()
        },
        _mouseCapture: function(t) {
            var i = this.options;
            return this.helper || i.disabled || e(t.target).closest(".ui-resizable-handle").length > 0 ? !1 : (this.handle = this._getHandle(t), this.handle ? (e(i.iframeFix === !0 ? "iframe" : i.iframeFix).each(function() {
                e("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>").css({
                    width: this.offsetWidth + "px",
                    height: this.offsetHeight + "px",
                    position: "absolute",
                    opacity: "0.001",
                    zIndex: 1e3
                }).css(e(this).offset()).appendTo("body")
            }), !0) : !1)
        },
        _mouseStart: function(t) {
            var i = this.options;
            return this.helper = this._createHelper(t), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), e.ui.ddmanager && (e.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(), this.offsetParent = this.helper.offsetParent(), this.offsetParentCssPosition = this.offsetParent.css("position"), this.offset = this.positionAbs = this.element.offset(), this.offset = {
                top: this.offset.top - this.margins.top,
                left: this.offset.left - this.margins.left
            }, this.offset.scroll = !1, e.extend(this.offset, {
                click: {
                    left: t.pageX - this.offset.left,
                    top: t.pageY - this.offset.top
                },
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }), this.originalPosition = this.position = this._generatePosition(t), this.originalPageX = t.pageX, this.originalPageY = t.pageY, i.cursorAt && this._adjustOffsetFromHelper(i.cursorAt), this._setContainment(), this._trigger("start", t) === !1 ? (this._clear(), !1) : (this._cacheHelperProportions(), e.ui.ddmanager && !i.dropBehaviour && e.ui.ddmanager.prepareOffsets(this, t), this._mouseDrag(t, !0), e.ui.ddmanager && e.ui.ddmanager.dragStart(this, t), !0)
        },
        _mouseDrag: function(t, i) {
            if ("fixed" === this.offsetParentCssPosition && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(t), this.positionAbs = this._convertPositionTo("absolute"), !i) {
                var a = this._uiHash();
                if (this._trigger("drag", t, a) === !1) return this._mouseUp({}), !1;
                this.position = a.position
            }
            return this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), e.ui.ddmanager && e.ui.ddmanager.drag(this, t), !1
        },
        _mouseStop: function(t) {
            var i = this,
                a = !1;
            return e.ui.ddmanager && !this.options.dropBehaviour && (a = e.ui.ddmanager.drop(this, t)), this.dropped && (a = this.dropped, this.dropped = !1), "original" !== this.options.helper || e.contains(this.element[0].ownerDocument, this.element[0]) ? ("invalid" === this.options.revert && !a || "valid" === this.options.revert && a || this.options.revert === !0 || e.isFunction(this.options.revert) && this.options.revert.call(this.element, a) ? e(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function() {
                i._trigger("stop", t) !== !1 && i._clear()
            }) : this._trigger("stop", t) !== !1 && this._clear(), !1) : !1
        },
        _mouseUp: function(t) {
            return e("div.ui-draggable-iframeFix").each(function() {
                this.parentNode.removeChild(this)
            }), e.ui.ddmanager && e.ui.ddmanager.dragStop(this, t), e.ui.mouse.prototype._mouseUp.call(this, t)
        },
        cancel: function() {
            return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
        },
        _getHandle: function(t) {
            return this.options.handle ? !!e(t.target).closest(this.element.find(this.options.handle)).length : !0
        },
        _createHelper: function(t) {
            var i = this.options,
                a = e.isFunction(i.helper) ? e(i.helper.apply(this.element[0], [t])) : "clone" === i.helper ? this.element.clone().removeAttr("id") : this.element;
            return a.parents("body").length || a.appendTo("parent" === i.appendTo ? this.element[0].parentNode : i.appendTo), a[0] === this.element[0] || /(fixed|absolute)/.test(a.css("position")) || a.css("position", "absolute"), a
        },
        _adjustOffsetFromHelper: function(t) {
            "string" == typeof t && (t = t.split(" ")), e.isArray(t) && (t = {
                left: +t[0],
                top: +t[1] || 0
            }), "left" in t && (this.offset.click.left = t.left + this.margins.left), "right" in t && (this.offset.click.left = this.helperProportions.width - t.right + this.margins.left), "top" in t && (this.offset.click.top = t.top + this.margins.top), "bottom" in t && (this.offset.click.top = this.helperProportions.height - t.bottom + this.margins.top)
        },
        _getParentOffset: function() {
            var t = this.offsetParent.offset();
            return "absolute" === this.cssPosition && this.scrollParent[0] !== document && e.contains(this.scrollParent[0], this.offsetParent[0]) && (t.left += this.scrollParent.scrollLeft(), t.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === document.body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && e.ui.ie) && (t = {
                top: 0,
                left: 0
            }), {
                top: t.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: t.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" === this.cssPosition) {
                var e = this.element.position();
                return {
                    top: e.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(),
                    left: e.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()
                }
            }
            return {
                top: 0,
                left: 0
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.element.css("marginLeft"), 10) || 0,
                top: parseInt(this.element.css("marginTop"), 10) || 0,
                right: parseInt(this.element.css("marginRight"), 10) || 0,
                bottom: parseInt(this.element.css("marginBottom"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var t, i, a, s = this.options;
            return s.containment ? "window" === s.containment ? (this.containment = [e(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, e(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, e(window).scrollLeft() + e(window).width() - this.helperProportions.width - this.margins.left, e(window).scrollTop() + (e(window).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], undefined) : "document" === s.containment ? (this.containment = [0, 0, e(document).width() - this.helperProportions.width - this.margins.left, (e(document).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], undefined) : s.containment.constructor === Array ? (this.containment = s.containment, undefined) : ("parent" === s.containment && (s.containment = this.helper[0].parentNode), i = e(s.containment), a = i[0], a && (t = "hidden" !== i.css("overflow"), this.containment = [(parseInt(i.css("borderLeftWidth"), 10) || 0) + (parseInt(i.css("paddingLeft"), 10) || 0), (parseInt(i.css("borderTopWidth"), 10) || 0) + (parseInt(i.css("paddingTop"), 10) || 0), (t ? Math.max(a.scrollWidth, a.offsetWidth) : a.offsetWidth) - (parseInt(i.css("borderRightWidth"), 10) || 0) - (parseInt(i.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (t ? Math.max(a.scrollHeight, a.offsetHeight) : a.offsetHeight) - (parseInt(i.css("borderBottomWidth"), 10) || 0) - (parseInt(i.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relative_container = i), undefined) : (this.containment = null, undefined)
        },
        _convertPositionTo: function(t, i) {
            i || (i = this.position);
            var a = "absolute" === t ? 1 : -1,
                s = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && e.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent;
            return this.offset.scroll || (this.offset.scroll = {
                top: s.scrollTop(),
                left: s.scrollLeft()
            }), {
                top: i.top + this.offset.relative.top * a + this.offset.parent.top * a - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : this.offset.scroll.top) * a,
                left: i.left + this.offset.relative.left * a + this.offset.parent.left * a - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : this.offset.scroll.left) * a
            }
        },
        _generatePosition: function(t) {
            var i, a, s, n, r = this.options,
                o = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && e.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                l = t.pageX,
                h = t.pageY;
            return this.offset.scroll || (this.offset.scroll = {
                top: o.scrollTop(),
                left: o.scrollLeft()
            }), this.originalPosition && (this.containment && (this.relative_container ? (a = this.relative_container.offset(), i = [this.containment[0] + a.left, this.containment[1] + a.top, this.containment[2] + a.left, this.containment[3] + a.top]) : i = this.containment, t.pageX - this.offset.click.left < i[0] && (l = i[0] + this.offset.click.left), t.pageY - this.offset.click.top < i[1] && (h = i[1] + this.offset.click.top), t.pageX - this.offset.click.left > i[2] && (l = i[2] + this.offset.click.left), t.pageY - this.offset.click.top > i[3] && (h = i[3] + this.offset.click.top)), r.grid && (s = r.grid[1] ? this.originalPageY + Math.round((h - this.originalPageY) / r.grid[1]) * r.grid[1] : this.originalPageY, h = i ? s - this.offset.click.top >= i[1] || s - this.offset.click.top > i[3] ? s : s - this.offset.click.top >= i[1] ? s - r.grid[1] : s + r.grid[1] : s, n = r.grid[0] ? this.originalPageX + Math.round((l - this.originalPageX) / r.grid[0]) * r.grid[0] : this.originalPageX, l = i ? n - this.offset.click.left >= i[0] || n - this.offset.click.left > i[2] ? n : n - this.offset.click.left >= i[0] ? n - r.grid[0] : n + r.grid[0] : n)), {
                top: h - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : this.offset.scroll.top),
                left: l - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : this.offset.scroll.left)
            }
        },
        _clear: function() {
            this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1
        },
        _trigger: function(t, i, a) {
            return a = a || this._uiHash(), e.ui.plugin.call(this, t, [i, a]), "drag" === t && (this.positionAbs = this._convertPositionTo("absolute")), e.Widget.prototype._trigger.call(this, t, i, a)
        },
        plugins: {},
        _uiHash: function() {
            return {
                helper: this.helper,
                position: this.position,
                originalPosition: this.originalPosition,
                offset: this.positionAbs
            }
        }
    }), e.ui.plugin.add("draggable", "connectToSortable", {
        start: function(t, i) {
            var a = e(this).data("ui-draggable"),
                s = a.options,
                n = e.extend({}, i, {
                    item: a.element
                });
            a.sortables = [], e(s.connectToSortable).each(function() {
                var i = e.data(this, "ui-sortable");
                i && !i.options.disabled && (a.sortables.push({
                    instance: i,
                    shouldRevert: i.options.revert
                }), i.refreshPositions(), i._trigger("activate", t, n))
            })
        },
        stop: function(t, i) {
            var a = e(this).data("ui-draggable"),
                s = e.extend({}, i, {
                    item: a.element
                });
            e.each(a.sortables, function() {
                this.instance.isOver ? (this.instance.isOver = 0, a.cancelHelperRemoval = !0, this.instance.cancelHelperRemoval = !1, this.shouldRevert && (this.instance.options.revert = this.shouldRevert), this.instance._mouseStop(t), this.instance.options.helper = this.instance.options._helper, "original" === a.options.helper && this.instance.currentItem.css({
                    top: "auto",
                    left: "auto"
                })) : (this.instance.cancelHelperRemoval = !1, this.instance._trigger("deactivate", t, s))
            })
        },
        drag: function(t, i) {
            var a = e(this).data("ui-draggable"),
                s = this;
            e.each(a.sortables, function() {
                var n = !1,
                    r = this;
                this.instance.positionAbs = a.positionAbs, this.instance.helperProportions = a.helperProportions, this.instance.offset.click = a.offset.click, this.instance._intersectsWith(this.instance.containerCache) && (n = !0, e.each(a.sortables, function() {
                    return this.instance.positionAbs = a.positionAbs, this.instance.helperProportions = a.helperProportions, this.instance.offset.click = a.offset.click, this !== r && this.instance._intersectsWith(this.instance.containerCache) && e.contains(r.instance.element[0], this.instance.element[0]) && (n = !1), n
                })), n ? (this.instance.isOver || (this.instance.isOver = 1, this.instance.currentItem = e(s).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item", !0), this.instance.options._helper = this.instance.options.helper, this.instance.options.helper = function() {
                    return i.helper[0]
                }, t.target = this.instance.currentItem[0], this.instance._mouseCapture(t, !0), this.instance._mouseStart(t, !0, !0), this.instance.offset.click.top = a.offset.click.top, this.instance.offset.click.left = a.offset.click.left, this.instance.offset.parent.left -= a.offset.parent.left - this.instance.offset.parent.left, this.instance.offset.parent.top -= a.offset.parent.top - this.instance.offset.parent.top, a._trigger("toSortable", t), a.dropped = this.instance.element, a.currentItem = a.element, this.instance.fromOutside = a), this.instance.currentItem && this.instance._mouseDrag(t)) : this.instance.isOver && (this.instance.isOver = 0, this.instance.cancelHelperRemoval = !0, this.instance.options.revert = !1, this.instance._trigger("out", t, this.instance._uiHash(this.instance)), this.instance._mouseStop(t, !0), this.instance.options.helper = this.instance.options._helper, this.instance.currentItem.remove(), this.instance.placeholder && this.instance.placeholder.remove(), a._trigger("fromSortable", t), a.dropped = !1)
            })
        }
    }), e.ui.plugin.add("draggable", "cursor", {
        start: function() {
            var t = e("body"),
                i = e(this).data("ui-draggable").options;
            t.css("cursor") && (i._cursor = t.css("cursor")), t.css("cursor", i.cursor)
        },
        stop: function() {
            var t = e(this).data("ui-draggable").options;
            t._cursor && e("body").css("cursor", t._cursor)
        }
    }), e.ui.plugin.add("draggable", "opacity", {
        start: function(t, i) {
            var a = e(i.helper),
                s = e(this).data("ui-draggable").options;
            a.css("opacity") && (s._opacity = a.css("opacity")), a.css("opacity", s.opacity)
        },
        stop: function(t, i) {
            var a = e(this).data("ui-draggable").options;
            a._opacity && e(i.helper).css("opacity", a._opacity)
        }
    }), e.ui.plugin.add("draggable", "scroll", {
        start: function() {
            var t = e(this).data("ui-draggable");
            t.scrollParent[0] !== document && "HTML" !== t.scrollParent[0].tagName && (t.overflowOffset = t.scrollParent.offset())
        },
        drag: function(t) {
            var i = e(this).data("ui-draggable"),
                a = i.options,
                s = !1;
            i.scrollParent[0] !== document && "HTML" !== i.scrollParent[0].tagName ? (a.axis && "x" === a.axis || (i.overflowOffset.top + i.scrollParent[0].offsetHeight - t.pageY < a.scrollSensitivity ? i.scrollParent[0].scrollTop = s = i.scrollParent[0].scrollTop + a.scrollSpeed : t.pageY - i.overflowOffset.top < a.scrollSensitivity && (i.scrollParent[0].scrollTop = s = i.scrollParent[0].scrollTop - a.scrollSpeed)), a.axis && "y" === a.axis || (i.overflowOffset.left + i.scrollParent[0].offsetWidth - t.pageX < a.scrollSensitivity ? i.scrollParent[0].scrollLeft = s = i.scrollParent[0].scrollLeft + a.scrollSpeed : t.pageX - i.overflowOffset.left < a.scrollSensitivity && (i.scrollParent[0].scrollLeft = s = i.scrollParent[0].scrollLeft - a.scrollSpeed))) : (a.axis && "x" === a.axis || (t.pageY - e(document).scrollTop() < a.scrollSensitivity ? s = e(document).scrollTop(e(document).scrollTop() - a.scrollSpeed) : e(window).height() - (t.pageY - e(document).scrollTop()) < a.scrollSensitivity && (s = e(document).scrollTop(e(document).scrollTop() + a.scrollSpeed))), a.axis && "y" === a.axis || (t.pageX - e(document).scrollLeft() < a.scrollSensitivity ? s = e(document).scrollLeft(e(document).scrollLeft() - a.scrollSpeed) : e(window).width() - (t.pageX - e(document).scrollLeft()) < a.scrollSensitivity && (s = e(document).scrollLeft(e(document).scrollLeft() + a.scrollSpeed)))), s !== !1 && e.ui.ddmanager && !a.dropBehaviour && e.ui.ddmanager.prepareOffsets(i, t)
        }
    }), e.ui.plugin.add("draggable", "snap", {
        start: function() {
            var t = e(this).data("ui-draggable"),
                i = t.options;
            t.snapElements = [], e(i.snap.constructor !== String ? i.snap.items || ":data(ui-draggable)" : i.snap).each(function() {
                var i = e(this),
                    a = i.offset();
                this !== t.element[0] && t.snapElements.push({
                    item: this,
                    width: i.outerWidth(),
                    height: i.outerHeight(),
                    top: a.top,
                    left: a.left
                })
            })
        },
        drag: function(t, i) {
            var a, s, n, r, o, l, h, u, d, c, p = e(this).data("ui-draggable"),
                f = p.options,
                m = f.snapTolerance,
                g = i.offset.left,
                v = g + p.helperProportions.width,
                y = i.offset.top,
                b = y + p.helperProportions.height;
            for (d = p.snapElements.length - 1; d >= 0; d--) o = p.snapElements[d].left, l = o + p.snapElements[d].width, h = p.snapElements[d].top, u = h + p.snapElements[d].height, o - m > v || g > l + m || h - m > b || y > u + m || !e.contains(p.snapElements[d].item.ownerDocument, p.snapElements[d].item) ? (p.snapElements[d].snapping && p.options.snap.release && p.options.snap.release.call(p.element, t, e.extend(p._uiHash(), {
                snapItem: p.snapElements[d].item
            })), p.snapElements[d].snapping = !1) : ("inner" !== f.snapMode && (a = m >= Math.abs(h - b), s = m >= Math.abs(u - y), n = m >= Math.abs(o - v), r = m >= Math.abs(l - g), a && (i.position.top = p._convertPositionTo("relative", {
                top: h - p.helperProportions.height,
                left: 0
            }).top - p.margins.top), s && (i.position.top = p._convertPositionTo("relative", {
                top: u,
                left: 0
            }).top - p.margins.top), n && (i.position.left = p._convertPositionTo("relative", {
                top: 0,
                left: o - p.helperProportions.width
            }).left - p.margins.left), r && (i.position.left = p._convertPositionTo("relative", {
                top: 0,
                left: l
            }).left - p.margins.left)), c = a || s || n || r, "outer" !== f.snapMode && (a = m >= Math.abs(h - y), s = m >= Math.abs(u - b), n = m >= Math.abs(o - g), r = m >= Math.abs(l - v), a && (i.position.top = p._convertPositionTo("relative", {
                top: h,
                left: 0
            }).top - p.margins.top), s && (i.position.top = p._convertPositionTo("relative", {
                top: u - p.helperProportions.height,
                left: 0
            }).top - p.margins.top), n && (i.position.left = p._convertPositionTo("relative", {
                top: 0,
                left: o
            }).left - p.margins.left), r && (i.position.left = p._convertPositionTo("relative", {
                top: 0,
                left: l - p.helperProportions.width
            }).left - p.margins.left)), !p.snapElements[d].snapping && (a || s || n || r || c) && p.options.snap.snap && p.options.snap.snap.call(p.element, t, e.extend(p._uiHash(), {
                snapItem: p.snapElements[d].item
            })), p.snapElements[d].snapping = a || s || n || r || c)
        }
    }), e.ui.plugin.add("draggable", "stack", {
        start: function() {
            var t, i = this.data("ui-draggable").options,
                a = e.makeArray(e(i.stack)).sort(function(t, i) {
                    return (parseInt(e(t).css("zIndex"), 10) || 0) - (parseInt(e(i).css("zIndex"), 10) || 0)
                });
            a.length && (t = parseInt(e(a[0]).css("zIndex"), 10) || 0, e(a).each(function(i) {
                e(this).css("zIndex", t + i)
            }), this.css("zIndex", t + a.length))
        }
    }), e.ui.plugin.add("draggable", "zIndex", {
        start: function(t, i) {
            var a = e(i.helper),
                s = e(this).data("ui-draggable").options;
            a.css("zIndex") && (s._zIndex = a.css("zIndex")), a.css("zIndex", s.zIndex)
        },
        stop: function(t, i) {
            var a = e(this).data("ui-draggable").options;
            a._zIndex && e(i.helper).css("zIndex", a._zIndex)
        }
    })
})(jQuery);
(function(e) {
    function t(e, t, i) {
        return e > t && t + i > e
    }
    e.widget("ui.droppable", {
        version: "1.10.3",
        widgetEventPrefix: "drop",
        options: {
            accept: "*",
            activeClass: !1,
            addClasses: !0,
            greedy: !1,
            hoverClass: !1,
            scope: "default",
            tolerance: "intersect",
            activate: null,
            deactivate: null,
            drop: null,
            out: null,
            over: null
        },
        _create: function() {
            var t = this.options,
                i = t.accept;
            this.isover = !1, this.isout = !0, this.accept = e.isFunction(i) ? i : function(e) {
                return e.is(i)
            }, this.proportions = {
                width: this.element[0].offsetWidth,
                height: this.element[0].offsetHeight
            }, e.ui.ddmanager.droppables[t.scope] = e.ui.ddmanager.droppables[t.scope] || [], e.ui.ddmanager.droppables[t.scope].push(this), t.addClasses && this.element.addClass("ui-droppable")
        },
        _destroy: function() {
            for (var t = 0, i = e.ui.ddmanager.droppables[this.options.scope]; i.length > t; t++) i[t] === this && i.splice(t, 1);
            this.element.removeClass("ui-droppable ui-droppable-disabled")
        },
        _setOption: function(t, i) {
            "accept" === t && (this.accept = e.isFunction(i) ? i : function(e) {
                return e.is(i)
            }), e.Widget.prototype._setOption.apply(this, arguments)
        },
        _activate: function(t) {
            var i = e.ui.ddmanager.current;
            this.options.activeClass && this.element.addClass(this.options.activeClass), i && this._trigger("activate", t, this.ui(i))
        },
        _deactivate: function(t) {
            var i = e.ui.ddmanager.current;
            this.options.activeClass && this.element.removeClass(this.options.activeClass), i && this._trigger("deactivate", t, this.ui(i))
        },
        _over: function(t) {
            var i = e.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.addClass(this.options.hoverClass), this._trigger("over", t, this.ui(i)))
        },
        _out: function(t) {
            var i = e.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("out", t, this.ui(i)))
        },
        _drop: function(t, i) {
            var a = i || e.ui.ddmanager.current,
                s = !1;
            return a && (a.currentItem || a.element)[0] !== this.element[0] ? (this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function() {
                var t = e.data(this, "ui-droppable");
                return t.options.greedy && !t.options.disabled && t.options.scope === a.options.scope && t.accept.call(t.element[0], a.currentItem || a.element) && e.ui.intersect(a, e.extend(t, {
                    offset: t.element.offset()
                }), t.options.tolerance) ? (s = !0, !1) : undefined
            }), s ? !1 : this.accept.call(this.element[0], a.currentItem || a.element) ? (this.options.activeClass && this.element.removeClass(this.options.activeClass), this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("drop", t, this.ui(a)), this.element) : !1) : !1
        },
        ui: function(e) {
            return {
                draggable: e.currentItem || e.element,
                helper: e.helper,
                position: e.position,
                offset: e.positionAbs
            }
        }
    }), e.ui.intersect = function(e, i, a) {
        if (!i.offset) return !1;
        var s, n, r = (e.positionAbs || e.position.absolute).left,
            o = r + e.helperProportions.width,
            l = (e.positionAbs || e.position.absolute).top,
            h = l + e.helperProportions.height,
            u = i.offset.left,
            d = u + i.proportions.width,
            c = i.offset.top,
            p = c + i.proportions.height;
        switch (a) {
            case "fit":
                return r >= u && d >= o && l >= c && p >= h;
            case "intersect":
                return r + e.helperProportions.width / 2 > u && d > o - e.helperProportions.width / 2 && l + e.helperProportions.height / 2 > c && p > h - e.helperProportions.height / 2;
            case "pointer":
                return s = (e.positionAbs || e.position.absolute).left + (e.clickOffset || e.offset.click).left, n = (e.positionAbs || e.position.absolute).top + (e.clickOffset || e.offset.click).top, t(n, c, i.proportions.height) && t(s, u, i.proportions.width);
            case "touch":
                return (l >= c && p >= l || h >= c && p >= h || c > l && h > p) && (r >= u && d >= r || o >= u && d >= o || u > r && o > d);
            default:
                return !1
        }
    }, e.ui.ddmanager = {
        current: null,
        droppables: {
            "default": []
        },
        prepareOffsets: function(t, i) {
            var a, s, n = e.ui.ddmanager.droppables[t.options.scope] || [],
                r = i ? i.type : null,
                o = (t.currentItem || t.element).find(":data(ui-droppable)").addBack();
            e: for (a = 0; n.length > a; a++)
                if (!(n[a].options.disabled || t && !n[a].accept.call(n[a].element[0], t.currentItem || t.element))) {
                    for (s = 0; o.length > s; s++)
                        if (o[s] === n[a].element[0]) {
                            n[a].proportions.height = 0;
                            continue e
                        }
                    n[a].visible = "none" !== n[a].element.css("display"), n[a].visible && ("mousedown" === r && n[a]._activate.call(n[a], i), n[a].offset = n[a].element.offset(), n[a].proportions = {
                        width: n[a].element[0].offsetWidth,
                        height: n[a].element[0].offsetHeight
                    })
                }
        },
        drop: function(t, i) {
            var a = !1;
            return e.each((e.ui.ddmanager.droppables[t.options.scope] || []).slice(), function() {
                this.options && (!this.options.disabled && this.visible && e.ui.intersect(t, this, this.options.tolerance) && (a = this._drop.call(this, i) || a), !this.options.disabled && this.visible && this.accept.call(this.element[0], t.currentItem || t.element) && (this.isout = !0, this.isover = !1, this._deactivate.call(this, i)))
            }), a
        },
        dragStart: function(t, i) {
            t.element.parentsUntil("body").bind("scroll.droppable", function() {
                t.options.refreshPositions || e.ui.ddmanager.prepareOffsets(t, i)
            })
        },
        drag: function(t, i) {
            t.options.refreshPositions && e.ui.ddmanager.prepareOffsets(t, i), e.each(e.ui.ddmanager.droppables[t.options.scope] || [], function() {
                if (!this.options.disabled && !this.greedyChild && this.visible) {
                    var a, s, n, r = e.ui.intersect(t, this, this.options.tolerance),
                        o = !r && this.isover ? "isout" : r && !this.isover ? "isover" : null;
                    o && (this.options.greedy && (s = this.options.scope, n = this.element.parents(":data(ui-droppable)").filter(function() {
                        return e.data(this, "ui-droppable").options.scope === s
                    }), n.length && (a = e.data(n[0], "ui-droppable"), a.greedyChild = "isover" === o)), a && "isover" === o && (a.isover = !1, a.isout = !0, a._out.call(a, i)), this[o] = !0, this["isout" === o ? "isover" : "isout"] = !1, this["isover" === o ? "_over" : "_out"].call(this, i), a && "isout" === o && (a.isout = !1, a.isover = !0, a._over.call(a, i)))
                }
            })
        },
        dragStop: function(t, i) {
            t.element.parentsUntil("body").unbind("scroll.droppable"), t.options.refreshPositions || e.ui.ddmanager.prepareOffsets(t, i)
        }
    }
})(jQuery);
(function(e) {
    function t(e) {
        return parseInt(e, 10) || 0
    }

    function i(e) {
        return !isNaN(parseInt(e, 10))
    }
    e.widget("ui.resizable", e.ui.mouse, {
        version: "1.10.3",
        widgetEventPrefix: "resize",
        options: {
            alsoResize: !1,
            animate: !1,
            animateDuration: "slow",
            animateEasing: "swing",
            aspectRatio: !1,
            autoHide: !1,
            containment: !1,
            ghost: !1,
            grid: !1,
            handles: "e,s,se",
            helper: !1,
            maxHeight: null,
            maxWidth: null,
            minHeight: 10,
            minWidth: 10,
            zIndex: 90,
            resize: null,
            start: null,
            stop: null
        },
        _create: function() {
            var t, i, s, a, n, r = this,
                o = this.options;
            if (this.element.addClass("ui-resizable"), e.extend(this, {
                    _aspectRatio: !!o.aspectRatio,
                    aspectRatio: o.aspectRatio,
                    originalElement: this.element,
                    _proportionallyResizeElements: [],
                    _helper: o.helper || o.ghost || o.animate ? o.helper || "ui-resizable-helper" : null
                }), this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i) && (this.element.wrap(e("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({
                    position: this.element.css("position"),
                    width: this.element.outerWidth(),
                    height: this.element.outerHeight(),
                    top: this.element.css("top"),
                    left: this.element.css("left")
                })), this.element = this.element.parent().data("ui-resizable", this.element.data("ui-resizable")), this.elementIsWrapper = !0, this.element.css({
                    marginLeft: this.originalElement.css("marginLeft"),
                    marginTop: this.originalElement.css("marginTop"),
                    marginRight: this.originalElement.css("marginRight"),
                    marginBottom: this.originalElement.css("marginBottom")
                }), this.originalElement.css({
                    marginLeft: 0,
                    marginTop: 0,
                    marginRight: 0,
                    marginBottom: 0
                }), this.originalResizeStyle = this.originalElement.css("resize"), this.originalElement.css("resize", "none"), this._proportionallyResizeElements.push(this.originalElement.css({
                    position: "static",
                    zoom: 1,
                    display: "block"
                })), this.originalElement.css({
                    margin: this.originalElement.css("margin")
                }), this._proportionallyResize()), this.handles = o.handles || (e(".ui-resizable-handle", this.element).length ? {
                    n: ".ui-resizable-n",
                    e: ".ui-resizable-e",
                    s: ".ui-resizable-s",
                    w: ".ui-resizable-w",
                    se: ".ui-resizable-se",
                    sw: ".ui-resizable-sw",
                    ne: ".ui-resizable-ne",
                    nw: ".ui-resizable-nw"
                } : "e,s,se"), this.handles.constructor === String)
                for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), t = this.handles.split(","), this.handles = {}, i = 0; t.length > i; i++) s = e.trim(t[i]), n = "ui-resizable-" + s, a = e("<div class='ui-resizable-handle " + n + "'></div>"), a.css({
                    zIndex: o.zIndex
                }), "se" === s && a.addClass("ui-icon ui-icon-gripsmall-diagonal-se"), this.handles[s] = ".ui-resizable-" + s, this.element.append(a);
            this._renderAxis = function(t) {
                var i, s, a, n;
                t = t || this.element;
                for (i in this.handles) this.handles[i].constructor === String && (this.handles[i] = e(this.handles[i], this.element).show()), this.elementIsWrapper && this.originalElement[0].nodeName.match(/textarea|input|select|button/i) && (s = e(this.handles[i], this.element), n = /sw|ne|nw|se|n|s/.test(i) ? s.outerHeight() : s.outerWidth(), a = ["padding", /ne|nw|n/.test(i) ? "Top" : /se|sw|s/.test(i) ? "Bottom" : /^e$/.test(i) ? "Right" : "Left"].join(""), t.css(a, n), this._proportionallyResize()), e(this.handles[i]).length
            }, this._renderAxis(this.element), this._handles = e(".ui-resizable-handle", this.element).disableSelection(), this._handles.mouseover(function() {
                r.resizing || (this.className && (a = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), r.axis = a && a[1] ? a[1] : "se")
            }), o.autoHide && (this._handles.hide(), e(this.element).addClass("ui-resizable-autohide").mouseenter(function() {
                o.disabled || (e(this).removeClass("ui-resizable-autohide"), r._handles.show())
            }).mouseleave(function() {
                o.disabled || r.resizing || (e(this).addClass("ui-resizable-autohide"), r._handles.hide())
            })), this._mouseInit()
        },
        _destroy: function() {
            this._mouseDestroy();
            var t, i = function(t) {
                e(t).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()
            };
            return this.elementIsWrapper && (i(this.element), t = this.element, this.originalElement.css({
                position: t.css("position"),
                width: t.outerWidth(),
                height: t.outerHeight(),
                top: t.css("top"),
                left: t.css("left")
            }).insertAfter(t), t.remove()), this.originalElement.css("resize", this.originalResizeStyle), i(this.originalElement), this
        },
        _mouseCapture: function(t) {
            var i, s, a = !1;
            for (i in this.handles) s = e(this.handles[i])[0], (s === t.target || e.contains(s, t.target)) && (a = !0);
            return !this.options.disabled && a
        },
        _mouseStart: function(i) {
            var s, a, n, r = this.options,
                o = this.element.position(),
                h = this.element;
            return this.resizing = !0, /absolute/.test(h.css("position")) ? h.css({
                position: "absolute",
                top: h.css("top"),
                left: h.css("left")
            }) : h.is(".ui-draggable") && h.css({
                position: "absolute",
                top: o.top,
                left: o.left
            }), this._renderProxy(), s = t(this.helper.css("left")), a = t(this.helper.css("top")), r.containment && (s += e(r.containment).scrollLeft() || 0, a += e(r.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {
                left: s,
                top: a
            }, this.size = this._helper ? {
                width: h.outerWidth(),
                height: h.outerHeight()
            } : {
                width: h.width(),
                height: h.height()
            }, this.originalSize = this._helper ? {
                width: h.outerWidth(),
                height: h.outerHeight()
            } : {
                width: h.width(),
                height: h.height()
            }, this.originalPosition = {
                left: s,
                top: a
            }, this.sizeDiff = {
                width: h.outerWidth() - h.width(),
                height: h.outerHeight() - h.height()
            }, this.originalMousePosition = {
                left: i.pageX,
                top: i.pageY
            }, this.aspectRatio = "number" == typeof r.aspectRatio ? r.aspectRatio : this.originalSize.width / this.originalSize.height || 1, n = e(".ui-resizable-" + this.axis).css("cursor"), e("body").css("cursor", "auto" === n ? this.axis + "-resize" : n), h.addClass("ui-resizable-resizing"), this._propagate("start", i), !0
        },
        _mouseDrag: function(t) {
            var i, s = this.helper,
                a = {},
                n = this.originalMousePosition,
                r = this.axis,
                o = this.position.top,
                h = this.position.left,
                l = this.size.width,
                u = this.size.height,
                c = t.pageX - n.left || 0,
                d = t.pageY - n.top || 0,
                p = this._change[r];
            return p ? (i = p.apply(this, [t, c, d]), this._updateVirtualBoundaries(t.shiftKey), (this._aspectRatio || t.shiftKey) && (i = this._updateRatio(i, t)), i = this._respectSize(i, t), this._updateCache(i), this._propagate("resize", t), this.position.top !== o && (a.top = this.position.top + "px"), this.position.left !== h && (a.left = this.position.left + "px"), this.size.width !== l && (a.width = this.size.width + "px"), this.size.height !== u && (a.height = this.size.height + "px"), s.css(a), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), e.isEmptyObject(a) || this._trigger("resize", t, this.ui()), !1) : !1
        },
        _mouseStop: function(t) {
            this.resizing = !1;
            var i, s, a, n, r, o, h, l = this.options,
                u = this;
            return this._helper && (i = this._proportionallyResizeElements, s = i.length && /textarea/i.test(i[0].nodeName), a = s && e.ui.hasScroll(i[0], "left") ? 0 : u.sizeDiff.height, n = s ? 0 : u.sizeDiff.width, r = {
                width: u.helper.width() - n,
                height: u.helper.height() - a
            }, o = parseInt(u.element.css("left"), 10) + (u.position.left - u.originalPosition.left) || null, h = parseInt(u.element.css("top"), 10) + (u.position.top - u.originalPosition.top) || null, l.animate || this.element.css(e.extend(r, {
                top: h,
                left: o
            })), u.helper.height(u.size.height), u.helper.width(u.size.width), this._helper && !l.animate && this._proportionallyResize()), e("body").css("cursor", "auto"), this.element.removeClass("ui-resizable-resizing"), this._propagate("stop", t), this._helper && this.helper.remove(), !1
        },
        _updateVirtualBoundaries: function(e) {
            var t, s, a, n, r, o = this.options;
            r = {
                minWidth: i(o.minWidth) ? o.minWidth : 0,
                maxWidth: i(o.maxWidth) ? o.maxWidth : 1 / 0,
                minHeight: i(o.minHeight) ? o.minHeight : 0,
                maxHeight: i(o.maxHeight) ? o.maxHeight : 1 / 0
            }, (this._aspectRatio || e) && (t = r.minHeight * this.aspectRatio, a = r.minWidth / this.aspectRatio, s = r.maxHeight * this.aspectRatio, n = r.maxWidth / this.aspectRatio, t > r.minWidth && (r.minWidth = t), a > r.minHeight && (r.minHeight = a), r.maxWidth > s && (r.maxWidth = s), r.maxHeight > n && (r.maxHeight = n)), this._vBoundaries = r
        },
        _updateCache: function(e) {
            this.offset = this.helper.offset(), i(e.left) && (this.position.left = e.left), i(e.top) && (this.position.top = e.top), i(e.height) && (this.size.height = e.height), i(e.width) && (this.size.width = e.width)
        },
        _updateRatio: function(e) {
            var t = this.position,
                s = this.size,
                a = this.axis;
            return i(e.height) ? e.width = e.height * this.aspectRatio : i(e.width) && (e.height = e.width / this.aspectRatio), "sw" === a && (e.left = t.left + (s.width - e.width), e.top = null), "nw" === a && (e.top = t.top + (s.height - e.height), e.left = t.left + (s.width - e.width)), e
        },
        _respectSize: function(e) {
            var t = this._vBoundaries,
                s = this.axis,
                a = i(e.width) && t.maxWidth && t.maxWidth < e.width,
                n = i(e.height) && t.maxHeight && t.maxHeight < e.height,
                r = i(e.width) && t.minWidth && t.minWidth > e.width,
                o = i(e.height) && t.minHeight && t.minHeight > e.height,
                h = this.originalPosition.left + this.originalSize.width,
                l = this.position.top + this.size.height,
                u = /sw|nw|w/.test(s),
                c = /nw|ne|n/.test(s);
            return r && (e.width = t.minWidth), o && (e.height = t.minHeight), a && (e.width = t.maxWidth), n && (e.height = t.maxHeight), r && u && (e.left = h - t.minWidth), a && u && (e.left = h - t.maxWidth), o && c && (e.top = l - t.minHeight), n && c && (e.top = l - t.maxHeight), e.width || e.height || e.left || !e.top ? e.width || e.height || e.top || !e.left || (e.left = null) : e.top = null, e
        },
        _proportionallyResize: function() {
            if (this._proportionallyResizeElements.length) {
                var e, t, i, s, a, n = this.helper || this.element;
                for (e = 0; this._proportionallyResizeElements.length > e; e++) {
                    if (a = this._proportionallyResizeElements[e], !this.borderDif)
                        for (this.borderDif = [], i = [a.css("borderTopWidth"), a.css("borderRightWidth"), a.css("borderBottomWidth"), a.css("borderLeftWidth")], s = [a.css("paddingTop"), a.css("paddingRight"), a.css("paddingBottom"), a.css("paddingLeft")], t = 0; i.length > t; t++) this.borderDif[t] = (parseInt(i[t], 10) || 0) + (parseInt(s[t], 10) || 0);
                    a.css({
                        height: n.height() - this.borderDif[0] - this.borderDif[2] || 0,
                        width: n.width() - this.borderDif[1] - this.borderDif[3] || 0
                    })
                }
            }
        },
        _renderProxy: function() {
            var t = this.element,
                i = this.options;
            this.elementOffset = t.offset(), this._helper ? (this.helper = this.helper || e("<div style='overflow:hidden;'></div>"), this.helper.addClass(this._helper).css({
                width: this.element.outerWidth() - 1,
                height: this.element.outerHeight() - 1,
                position: "absolute",
                left: this.elementOffset.left + "px",
                top: this.elementOffset.top + "px",
                zIndex: ++i.zIndex
            }), this.helper.appendTo("body").disableSelection()) : this.helper = this.element
        },
        _change: {
            e: function(e, t) {
                return {
                    width: this.originalSize.width + t
                }
            },
            w: function(e, t) {
                var i = this.originalSize,
                    s = this.originalPosition;
                return {
                    left: s.left + t,
                    width: i.width - t
                }
            },
            n: function(e, t, i) {
                var s = this.originalSize,
                    a = this.originalPosition;
                return {
                    top: a.top + i,
                    height: s.height - i
                }
            },
            s: function(e, t, i) {
                return {
                    height: this.originalSize.height + i
                }
            },
            se: function(t, i, s) {
                return e.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [t, i, s]))
            },
            sw: function(t, i, s) {
                return e.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [t, i, s]))
            },
            ne: function(t, i, s) {
                return e.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [t, i, s]))
            },
            nw: function(t, i, s) {
                return e.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [t, i, s]))
            }
        },
        _propagate: function(t, i) {
            e.ui.plugin.call(this, t, [i, this.ui()]), "resize" !== t && this._trigger(t, i, this.ui())
        },
        plugins: {},
        ui: function() {
            return {
                originalElement: this.originalElement,
                element: this.element,
                helper: this.helper,
                position: this.position,
                size: this.size,
                originalSize: this.originalSize,
                originalPosition: this.originalPosition
            }
        }
    }), e.ui.plugin.add("resizable", "animate", {
        stop: function(t) {
            var i = e(this).data("ui-resizable"),
                s = i.options,
                a = i._proportionallyResizeElements,
                n = a.length && /textarea/i.test(a[0].nodeName),
                r = n && e.ui.hasScroll(a[0], "left") ? 0 : i.sizeDiff.height,
                o = n ? 0 : i.sizeDiff.width,
                h = {
                    width: i.size.width - o,
                    height: i.size.height - r
                },
                l = parseInt(i.element.css("left"), 10) + (i.position.left - i.originalPosition.left) || null,
                u = parseInt(i.element.css("top"), 10) + (i.position.top - i.originalPosition.top) || null;
            i.element.animate(e.extend(h, u && l ? {
                top: u,
                left: l
            } : {}), {
                duration: s.animateDuration,
                easing: s.animateEasing,
                step: function() {
                    var s = {
                        width: parseInt(i.element.css("width"), 10),
                        height: parseInt(i.element.css("height"), 10),
                        top: parseInt(i.element.css("top"), 10),
                        left: parseInt(i.element.css("left"), 10)
                    };
                    a && a.length && e(a[0]).css({
                        width: s.width,
                        height: s.height
                    }), i._updateCache(s), i._propagate("resize", t)
                }
            })
        }
    }), e.ui.plugin.add("resizable", "containment", {
        start: function() {
            var i, s, a, n, r, o, h, l = e(this).data("ui-resizable"),
                u = l.options,
                c = l.element,
                d = u.containment,
                p = d instanceof e ? d.get(0) : /parent/.test(d) ? c.parent().get(0) : d;
            p && (l.containerElement = e(p), /document/.test(d) || d === document ? (l.containerOffset = {
                left: 0,
                top: 0
            }, l.containerPosition = {
                left: 0,
                top: 0
            }, l.parentData = {
                element: e(document),
                left: 0,
                top: 0,
                width: e(document).width(),
                height: e(document).height() || document.body.parentNode.scrollHeight
            }) : (i = e(p), s = [], e(["Top", "Right", "Left", "Bottom"]).each(function(e, a) {
                s[e] = t(i.css("padding" + a))
            }), l.containerOffset = i.offset(), l.containerPosition = i.position(), l.containerSize = {
                height: i.innerHeight() - s[3],
                width: i.innerWidth() - s[1]
            }, a = l.containerOffset, n = l.containerSize.height, r = l.containerSize.width, o = e.ui.hasScroll(p, "left") ? p.scrollWidth : r, h = e.ui.hasScroll(p) ? p.scrollHeight : n, l.parentData = {
                element: p,
                left: a.left,
                top: a.top,
                width: o,
                height: h
            }))
        },
        resize: function(t) {
            var i, s, a, n, r = e(this).data("ui-resizable"),
                o = r.options,
                h = r.containerOffset,
                l = r.position,
                u = r._aspectRatio || t.shiftKey,
                c = {
                    top: 0,
                    left: 0
                },
                d = r.containerElement;
            d[0] !== document && /static/.test(d.css("position")) && (c = h), l.left < (r._helper ? h.left : 0) && (r.size.width = r.size.width + (r._helper ? r.position.left - h.left : r.position.left - c.left), u && (r.size.height = r.size.width / r.aspectRatio), r.position.left = o.helper ? h.left : 0), l.top < (r._helper ? h.top : 0) && (r.size.height = r.size.height + (r._helper ? r.position.top - h.top : r.position.top), u && (r.size.width = r.size.height * r.aspectRatio), r.position.top = r._helper ? h.top : 0), r.offset.left = r.parentData.left + r.position.left, r.offset.top = r.parentData.top + r.position.top, i = Math.abs((r._helper ? r.offset.left - c.left : r.offset.left - c.left) + r.sizeDiff.width), s = Math.abs((r._helper ? r.offset.top - c.top : r.offset.top - h.top) + r.sizeDiff.height), a = r.containerElement.get(0) === r.element.parent().get(0), n = /relative|absolute/.test(r.containerElement.css("position")), a && n && (i -= r.parentData.left), i + r.size.width >= r.parentData.width && (r.size.width = r.parentData.width - i, u && (r.size.height = r.size.width / r.aspectRatio)), s + r.size.height >= r.parentData.height && (r.size.height = r.parentData.height - s, u && (r.size.width = r.size.height * r.aspectRatio))
        },
        stop: function() {
            var t = e(this).data("ui-resizable"),
                i = t.options,
                s = t.containerOffset,
                a = t.containerPosition,
                n = t.containerElement,
                r = e(t.helper),
                o = r.offset(),
                h = r.outerWidth() - t.sizeDiff.width,
                l = r.outerHeight() - t.sizeDiff.height;
            t._helper && !i.animate && /relative/.test(n.css("position")) && e(this).css({
                left: o.left - a.left - s.left,
                width: h,
                height: l
            }), t._helper && !i.animate && /static/.test(n.css("position")) && e(this).css({
                left: o.left - a.left - s.left,
                width: h,
                height: l
            })
        }
    }), e.ui.plugin.add("resizable", "alsoResize", {
        start: function() {
            var t = e(this).data("ui-resizable"),
                i = t.options,
                s = function(t) {
                    e(t).each(function() {
                        var t = e(this);
                        t.data("ui-resizable-alsoresize", {
                            width: parseInt(t.width(), 10),
                            height: parseInt(t.height(), 10),
                            left: parseInt(t.css("left"), 10),
                            top: parseInt(t.css("top"), 10)
                        })
                    })
                };
            "object" != typeof i.alsoResize || i.alsoResize.parentNode ? s(i.alsoResize) : i.alsoResize.length ? (i.alsoResize = i.alsoResize[0], s(i.alsoResize)) : e.each(i.alsoResize, function(e) {
                s(e)
            })
        },
        resize: function(t, i) {
            var s = e(this).data("ui-resizable"),
                a = s.options,
                n = s.originalSize,
                r = s.originalPosition,
                o = {
                    height: s.size.height - n.height || 0,
                    width: s.size.width - n.width || 0,
                    top: s.position.top - r.top || 0,
                    left: s.position.left - r.left || 0
                },
                h = function(t, s) {
                    e(t).each(function() {
                        var t = e(this),
                            a = e(this).data("ui-resizable-alsoresize"),
                            n = {},
                            r = s && s.length ? s : t.parents(i.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                        e.each(r, function(e, t) {
                            var i = (a[t] || 0) + (o[t] || 0);
                            i && i >= 0 && (n[t] = i || null)
                        }), t.css(n)
                    })
                };
            "object" != typeof a.alsoResize || a.alsoResize.nodeType ? h(a.alsoResize) : e.each(a.alsoResize, function(e, t) {
                h(e, t)
            })
        },
        stop: function() {
            e(this).removeData("resizable-alsoresize")
        }
    }), e.ui.plugin.add("resizable", "ghost", {
        start: function() {
            var t = e(this).data("ui-resizable"),
                i = t.options,
                s = t.size;
            t.ghost = t.originalElement.clone(), t.ghost.css({
                opacity: .25,
                display: "block",
                position: "relative",
                height: s.height,
                width: s.width,
                margin: 0,
                left: 0,
                top: 0
            }).addClass("ui-resizable-ghost").addClass("string" == typeof i.ghost ? i.ghost : ""), t.ghost.appendTo(t.helper)
        },
        resize: function() {
            var t = e(this).data("ui-resizable");
            t.ghost && t.ghost.css({
                position: "relative",
                height: t.size.height,
                width: t.size.width
            })
        },
        stop: function() {
            var t = e(this).data("ui-resizable");
            t.ghost && t.helper && t.helper.get(0).removeChild(t.ghost.get(0))
        }
    }), e.ui.plugin.add("resizable", "grid", {
        resize: function() {
            var t = e(this).data("ui-resizable"),
                i = t.options,
                s = t.size,
                a = t.originalSize,
                n = t.originalPosition,
                r = t.axis,
                o = "number" == typeof i.grid ? [i.grid, i.grid] : i.grid,
                h = o[0] || 1,
                l = o[1] || 1,
                u = Math.round((s.width - a.width) / h) * h,
                c = Math.round((s.height - a.height) / l) * l,
                d = a.width + u,
                p = a.height + c,
                f = i.maxWidth && d > i.maxWidth,
                m = i.maxHeight && p > i.maxHeight,
                g = i.minWidth && i.minWidth > d,
                v = i.minHeight && i.minHeight > p;
            i.grid = o, g && (d += h), v && (p += l), f && (d -= h), m && (p -= l), /^(se|s|e)$/.test(r) ? (t.size.width = d, t.size.height = p) : /^(ne)$/.test(r) ? (t.size.width = d, t.size.height = p, t.position.top = n.top - c) : /^(sw)$/.test(r) ? (t.size.width = d, t.size.height = p, t.position.left = n.left - u) : (t.size.width = d, t.size.height = p, t.position.top = n.top - c, t.position.left = n.left - u)
        }
    })
})(jQuery);
(function(e) {
    var t = 0,
        i = {},
        a = {};
    i.height = i.paddingTop = i.paddingBottom = i.borderTopWidth = i.borderBottomWidth = "hide", a.height = a.paddingTop = a.paddingBottom = a.borderTopWidth = a.borderBottomWidth = "show", e.widget("ui.accordion", {
        version: "1.10.3",
        options: {
            active: 0,
            animate: {},
            collapsible: !1,
            event: "click",
            header: "> li > :first-child,> :not(li):even",
            heightStyle: "auto",
            icons: {
                activeHeader: "ui-icon-triangle-1-s",
                header: "ui-icon-triangle-1-e"
            },
            activate: null,
            beforeActivate: null
        },
        _create: function() {
            var t = this.options;
            this.prevShow = this.prevHide = e(), this.element.addClass("ui-accordion ui-widget ui-helper-reset").attr("role", "tablist"), t.collapsible || t.active !== !1 && null != t.active || (t.active = 0), this._processPanels(), 0 > t.active && (t.active += this.headers.length), this._refresh()
        },
        _getCreateEventData: function() {
            return {
                header: this.active,
                panel: this.active.length ? this.active.next() : e(),
                content: this.active.length ? this.active.next() : e()
            }
        },
        _createIcons: function() {
            var t = this.options.icons;
            t && (e("<span>").addClass("ui-accordion-header-icon ui-icon " + t.header).prependTo(this.headers), this.active.children(".ui-accordion-header-icon").removeClass(t.header).addClass(t.activeHeader), this.headers.addClass("ui-accordion-icons"))
        },
        _destroyIcons: function() {
            this.headers.removeClass("ui-accordion-icons").children(".ui-accordion-header-icon").remove()
        },
        _destroy: function() {
            var e;
            this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role"), this.headers.removeClass("ui-accordion-header ui-accordion-header-active ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-selected").removeAttr("aria-controls").removeAttr("tabIndex").each(function() {
                /^ui-accordion/.test(this.id) && this.removeAttribute("id")
            }), this._destroyIcons(), e = this.headers.next().css("display", "").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-labelledby").removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled").each(function() {
                /^ui-accordion/.test(this.id) && this.removeAttribute("id")
            }), "content" !== this.options.heightStyle && e.css("height", "")
        },
        _setOption: function(e, t) {
            return "active" === e ? (this._activate(t), undefined) : ("event" === e && (this.options.event && this._off(this.headers, this.options.event), this._setupEvents(t)), this._super(e, t), "collapsible" !== e || t || this.options.active !== !1 || this._activate(0), "icons" === e && (this._destroyIcons(), t && this._createIcons()), "disabled" === e && this.headers.add(this.headers.next()).toggleClass("ui-state-disabled", !!t), undefined)
        },
        _keydown: function(t) {
            if (!t.altKey && !t.ctrlKey) {
                var i = e.ui.keyCode,
                    a = this.headers.length,
                    s = this.headers.index(t.target),
                    n = !1;
                switch (t.keyCode) {
                    case i.RIGHT:
                    case i.DOWN:
                        n = this.headers[(s + 1) % a];
                        break;
                    case i.LEFT:
                    case i.UP:
                        n = this.headers[(s - 1 + a) % a];
                        break;
                    case i.SPACE:
                    case i.ENTER:
                        this._eventHandler(t);
                        break;
                    case i.HOME:
                        n = this.headers[0];
                        break;
                    case i.END:
                        n = this.headers[a - 1]
                }
                n && (e(t.target).attr("tabIndex", -1), e(n).attr("tabIndex", 0), n.focus(), t.preventDefault())
            }
        },
        _panelKeyDown: function(t) {
            t.keyCode === e.ui.keyCode.UP && t.ctrlKey && e(t.currentTarget).prev().focus()
        },
        refresh: function() {
            var t = this.options;
            this._processPanels(), t.active === !1 && t.collapsible === !0 || !this.headers.length ? (t.active = !1, this.active = e()) : t.active === !1 ? this._activate(0) : this.active.length && !e.contains(this.element[0], this.active[0]) ? this.headers.length === this.headers.find(".ui-state-disabled").length ? (t.active = !1, this.active = e()) : this._activate(Math.max(0, t.active - 1)) : t.active = this.headers.index(this.active), this._destroyIcons(), this._refresh()
        },
        _processPanels: function() {
            this.headers = this.element.find(this.options.header).addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"), this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").filter(":not(.ui-accordion-content-active)").hide()
        },
        _refresh: function() {
            var i, a = this.options,
                s = a.heightStyle,
                n = this.element.parent(),
                r = this.accordionId = "ui-accordion-" + (this.element.attr("id") || ++t);
            this.active = this._findActive(a.active).addClass("ui-accordion-header-active ui-state-active ui-corner-top").removeClass("ui-corner-all"), this.active.next().addClass("ui-accordion-content-active").show(), this.headers.attr("role", "tab").each(function(t) {
                var i = e(this),
                    a = i.attr("id"),
                    s = i.next(),
                    n = s.attr("id");
                a || (a = r + "-header-" + t, i.attr("id", a)), n || (n = r + "-panel-" + t, s.attr("id", n)), i.attr("aria-controls", n), s.attr("aria-labelledby", a)
            }).next().attr("role", "tabpanel"), this.headers.not(this.active).attr({
                "aria-selected": "false",
                tabIndex: -1
            }).next().attr({
                "aria-expanded": "false",
                "aria-hidden": "true"
            }).hide(), this.active.length ? this.active.attr({
                "aria-selected": "true",
                tabIndex: 0
            }).next().attr({
                "aria-expanded": "true",
                "aria-hidden": "false"
            }) : this.headers.eq(0).attr("tabIndex", 0), this._createIcons(), this._setupEvents(a.event), "fill" === s ? (i = n.height(), this.element.siblings(":visible").each(function() {
                var t = e(this),
                    a = t.css("position");
                "absolute" !== a && "fixed" !== a && (i -= t.outerHeight(!0))
            }), this.headers.each(function() {
                i -= e(this).outerHeight(!0)
            }), this.headers.next().each(function() {
                e(this).height(Math.max(0, i - e(this).innerHeight() + e(this).height()))
            }).css("overflow", "auto")) : "auto" === s && (i = 0, this.headers.next().each(function() {
                i = Math.max(i, e(this).css("height", "").height())
            }).height(i))
        },
        _activate: function(t) {
            var i = this._findActive(t)[0];
            i !== this.active[0] && (i = i || this.active[0], this._eventHandler({
                target: i,
                currentTarget: i,
                preventDefault: e.noop
            }))
        },
        _findActive: function(t) {
            return "number" == typeof t ? this.headers.eq(t) : e()
        },
        _setupEvents: function(t) {
            var i = {
                keydown: "_keydown"
            };
            t && e.each(t.split(" "), function(e, t) {
                i[t] = "_eventHandler"
            }), this._off(this.headers.add(this.headers.next())), this._on(this.headers, i), this._on(this.headers.next(), {
                keydown: "_panelKeyDown"
            }), this._hoverable(this.headers), this._focusable(this.headers)
        },
        _eventHandler: function(t) {
            var i = this.options,
                a = this.active,
                s = e(t.currentTarget),
                n = s[0] === a[0],
                r = n && i.collapsible,
                o = r ? e() : s.next(),
                h = a.next(),
                l = {
                    oldHeader: a,
                    oldPanel: h,
                    newHeader: r ? e() : s,
                    newPanel: o
                };
            t.preventDefault(), n && !i.collapsible || this._trigger("beforeActivate", t, l) === !1 || (i.active = r ? !1 : this.headers.index(s), this.active = n ? e() : s, this._toggle(l), a.removeClass("ui-accordion-header-active ui-state-active"), i.icons && a.children(".ui-accordion-header-icon").removeClass(i.icons.activeHeader).addClass(i.icons.header), n || (s.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top"), i.icons && s.children(".ui-accordion-header-icon").removeClass(i.icons.header).addClass(i.icons.activeHeader), s.next().addClass("ui-accordion-content-active")))
        },
        _toggle: function(t) {
            var i = t.newPanel,
                a = this.prevShow.length ? this.prevShow : t.oldPanel;
            this.prevShow.add(this.prevHide).stop(!0, !0), this.prevShow = i, this.prevHide = a, this.options.animate ? this._animate(i, a, t) : (a.hide(), i.show(), this._toggleComplete(t)), a.attr({
                "aria-expanded": "false",
                "aria-hidden": "true"
            }), a.prev().attr("aria-selected", "false"), i.length && a.length ? a.prev().attr("tabIndex", -1) : i.length && this.headers.filter(function() {
                return 0 === e(this).attr("tabIndex")
            }).attr("tabIndex", -1), i.attr({
                "aria-expanded": "true",
                "aria-hidden": "false"
            }).prev().attr({
                "aria-selected": "true",
                tabIndex: 0
            })
        },
        _animate: function(e, t, s) {
            var n, r, o, h = this,
                l = 0,
                u = e.length && (!t.length || e.index() < t.index()),
                d = this.options.animate || {},
                c = u && d.down || d,
                p = function() {
                    h._toggleComplete(s)
                };
            return "number" == typeof c && (o = c), "string" == typeof c && (r = c), r = r || c.easing || d.easing, o = o || c.duration || d.duration, t.length ? e.length ? (n = e.show().outerHeight(), t.animate(i, {
                duration: o,
                easing: r,
                step: function(e, t) {
                    t.now = Math.round(e)
                }
            }), e.hide().animate(a, {
                duration: o,
                easing: r,
                complete: p,
                step: function(e, i) {
                    i.now = Math.round(e), "height" !== i.prop ? l += i.now : "content" !== h.options.heightStyle && (i.now = Math.round(n - t.outerHeight() - l), l = 0)
                }
            }), undefined) : t.animate(i, o, r, p) : e.animate(a, o, r, p)
        },
        _toggleComplete: function(e) {
            var t = e.oldPanel;
            t.removeClass("ui-accordion-content-active").prev().removeClass("ui-corner-top").addClass("ui-corner-all"), t.length && (t.parent()[0].className = t.parent()[0].className), this._trigger("activate", null, e)
        }
    })
})(jQuery);
(function(e) {
    var t, i, a, s, n = "ui-button ui-widget ui-state-default ui-corner-all",
        r = "ui-state-hover ui-state-active ",
        o = "ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",
        h = function() {
            var t = e(this);
            setTimeout(function() {
                t.find(":ui-button").button("refresh")
            }, 1)
        },
        l = function(t) {
            var i = t.name,
                a = t.form,
                s = e([]);
            return i && (i = i.replace(/'/g, "\\'"), s = a ? e(a).find("[name='" + i + "']") : e("[name='" + i + "']", t.ownerDocument).filter(function() {
                return !this.form
            })), s
        };
    e.widget("ui.button", {
        version: "1.10.3",
        defaultElement: "<button>",
        options: {
            disabled: null,
            text: !0,
            label: null,
            icons: {
                primary: null,
                secondary: null
            }
        },
        _create: function() {
            this.element.closest("form").unbind("reset" + this.eventNamespace).bind("reset" + this.eventNamespace, h), "boolean" != typeof this.options.disabled ? this.options.disabled = !!this.element.prop("disabled") : this.element.prop("disabled", this.options.disabled), this._determineButtonType(), this.hasTitle = !!this.buttonElement.attr("title");
            var r = this,
                o = this.options,
                u = "checkbox" === this.type || "radio" === this.type,
                d = u ? "" : "ui-state-active",
                c = "ui-state-focus";
            null === o.label && (o.label = "input" === this.type ? this.buttonElement.val() : this.buttonElement.html()), this._hoverable(this.buttonElement), this.buttonElement.addClass(n).attr("role", "button").bind("mouseenter" + this.eventNamespace, function() {
                o.disabled || this === t && e(this).addClass("ui-state-active")
            }).bind("mouseleave" + this.eventNamespace, function() {
                o.disabled || e(this).removeClass(d)
            }).bind("click" + this.eventNamespace, function(e) {
                o.disabled && (e.preventDefault(), e.stopImmediatePropagation())
            }), this.element.bind("focus" + this.eventNamespace, function() {
                r.buttonElement.addClass(c)
            }).bind("blur" + this.eventNamespace, function() {
                r.buttonElement.removeClass(c)
            }), u && (this.element.bind("change" + this.eventNamespace, function() {
                s || r.refresh()
            }), this.buttonElement.bind("mousedown" + this.eventNamespace, function(e) {
                o.disabled || (s = !1, i = e.pageX, a = e.pageY)
            }).bind("mouseup" + this.eventNamespace, function(e) {
                o.disabled || (i !== e.pageX || a !== e.pageY) && (s = !0)
            })), "checkbox" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                return o.disabled || s ? !1 : undefined
            }) : "radio" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                if (o.disabled || s) return !1;
                e(this).addClass("ui-state-active"), r.buttonElement.attr("aria-pressed", "true");
                var t = r.element[0];
                l(t).not(t).map(function() {
                    return e(this).button("widget")[0]
                }).removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : (this.buttonElement.bind("mousedown" + this.eventNamespace, function() {
                return o.disabled ? !1 : (e(this).addClass("ui-state-active"), t = this, r.document.one("mouseup", function() {
                    t = null
                }), undefined)
            }).bind("mouseup" + this.eventNamespace, function() {
                return o.disabled ? !1 : (e(this).removeClass("ui-state-active"), undefined)
            }).bind("keydown" + this.eventNamespace, function(t) {
                return o.disabled ? !1 : ((t.keyCode === e.ui.keyCode.SPACE || t.keyCode === e.ui.keyCode.ENTER) && e(this).addClass("ui-state-active"), undefined)
            }).bind("keyup" + this.eventNamespace + " blur" + this.eventNamespace, function() {
                e(this).removeClass("ui-state-active")
            }), this.buttonElement.is("a") && this.buttonElement.keyup(function(t) {
                t.keyCode === e.ui.keyCode.SPACE && e(this).click()
            })), this._setOption("disabled", o.disabled), this._resetButton()
        },
        _determineButtonType: function() {
            var e, t, i;
            this.type = this.element.is("[type=checkbox]") ? "checkbox" : this.element.is("[type=radio]") ? "radio" : this.element.is("input") ? "input" : "button", "checkbox" === this.type || "radio" === this.type ? (e = this.element.parents().last(), t = "label[for='" + this.element.attr("id") + "']", this.buttonElement = e.find(t), this.buttonElement.length || (e = e.length ? e.siblings() : this.element.siblings(), this.buttonElement = e.filter(t), this.buttonElement.length || (this.buttonElement = e.find(t))), this.element.addClass("ui-helper-hidden-accessible"), i = this.element.is(":checked"), i && this.buttonElement.addClass("ui-state-active"), this.buttonElement.prop("aria-pressed", i)) : this.buttonElement = this.element
        },
        widget: function() {
            return this.buttonElement
        },
        _destroy: function() {
            this.element.removeClass("ui-helper-hidden-accessible"), this.buttonElement.removeClass(n + " " + r + " " + o).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html()), this.hasTitle || this.buttonElement.removeAttr("title")
        },
        _setOption: function(e, t) {
            return this._super(e, t), "disabled" === e ? (t ? this.element.prop("disabled", !0) : this.element.prop("disabled", !1), undefined) : (this._resetButton(), undefined)
        },
        refresh: function() {
            var t = this.element.is("input, button") ? this.element.is(":disabled") : this.element.hasClass("ui-button-disabled");
            t !== this.options.disabled && this._setOption("disabled", t), "radio" === this.type ? l(this.element[0]).each(function() {
                e(this).is(":checked") ? e(this).button("widget").addClass("ui-state-active").attr("aria-pressed", "true") : e(this).button("widget").removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : "checkbox" === this.type && (this.element.is(":checked") ? this.buttonElement.addClass("ui-state-active").attr("aria-pressed", "true") : this.buttonElement.removeClass("ui-state-active").attr("aria-pressed", "false"))
        },
        _resetButton: function() {
            if ("input" === this.type) return this.options.label && this.element.val(this.options.label), undefined;
            var t = this.buttonElement.removeClass(o),
                i = e("<span></span>", this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(t.empty()).text(),
                a = this.options.icons,
                s = a.primary && a.secondary,
                n = [];
            a.primary || a.secondary ? (this.options.text && n.push("ui-button-text-icon" + (s ? "s" : a.primary ? "-primary" : "-secondary")), a.primary && t.prepend("<span class='ui-button-icon-primary ui-icon " + a.primary + "'></span>"), a.secondary && t.append("<span class='ui-button-icon-secondary ui-icon " + a.secondary + "'></span>"), this.options.text || (n.push(s ? "ui-button-icons-only" : "ui-button-icon-only"), this.hasTitle || t.attr("title", e.trim(i)))) : n.push("ui-button-text-only"), t.addClass(n.join(" "))
        }
    }), e.widget("ui.buttonset", {
        version: "1.10.3",
        options: {
            items: "button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"
        },
        _create: function() {
            this.element.addClass("ui-buttonset")
        },
        _init: function() {
            this.refresh()
        },
        _setOption: function(e, t) {
            "disabled" === e && this.buttons.button("option", e, t), this._super(e, t)
        },
        refresh: function() {
            var t = "rtl" === this.element.css("direction");
            this.buttons = this.element.find(this.options.items).filter(":ui-button").button("refresh").end().not(":ui-button").button().end().map(function() {
                return e(this).button("widget")[0]
            }).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(t ? "ui-corner-right" : "ui-corner-left").end().filter(":last").addClass(t ? "ui-corner-left" : "ui-corner-right").end().end()
        },
        _destroy: function() {
            this.element.removeClass("ui-buttonset"), this.buttons.map(function() {
                return e(this).button("widget")[0]
            }).removeClass("ui-corner-left ui-corner-right").end().button("destroy")
        }
    })
})(jQuery);
(function(e, t) {
    function i() {
        this._curInst = null, this._keyEvent = !1, this._disabledInputs = [], this._datepickerShowing = !1, this._inDialog = !1, this._mainDivId = "ui-datepicker-div", this._inlineClass = "ui-datepicker-inline", this._appendClass = "ui-datepicker-append", this._triggerClass = "ui-datepicker-trigger", this._dialogClass = "ui-datepicker-dialog", this._disableClass = "ui-datepicker-disabled", this._unselectableClass = "ui-datepicker-unselectable", this._currentClass = "ui-datepicker-current-day", this._dayOverClass = "ui-datepicker-days-cell-over", this.regional = [], this.regional[""] = {
            closeText: "Done",
            prevText: "Prev",
            nextText: "Next",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            weekHeader: "Wk",
            dateFormat: "mm/dd/yy",
            firstDay: 0,
            isRTL: !1,
            showMonthAfterYear: !1,
            yearSuffix: ""
        }, this._defaults = {
            showOn: "focus",
            showAnim: "fadeIn",
            showOptions: {},
            defaultDate: null,
            appendText: "",
            buttonText: "...",
            buttonImage: "",
            buttonImageOnly: !1,
            hideIfNoPrevNext: !1,
            navigationAsDateFormat: !1,
            gotoCurrent: !1,
            changeMonth: !1,
            changeYear: !1,
            yearRange: "c-10:c+10",
            showOtherMonths: !1,
            selectOtherMonths: !1,
            showWeek: !1,
            calculateWeek: this.iso8601Week,
            shortYearCutoff: "+10",
            minDate: null,
            maxDate: null,
            duration: "fast",
            beforeShowDay: null,
            beforeShow: null,
            onSelect: null,
            onChangeMonthYear: null,
            onClose: null,
            numberOfMonths: 1,
            showCurrentAtPos: 0,
            stepMonths: 1,
            stepBigMonths: 12,
            altField: "",
            altFormat: "",
            constrainInput: !0,
            showButtonPanel: !1,
            autoSize: !1,
            disabled: !1
        }, e.extend(this._defaults, this.regional[""]), this.dpDiv = a(e("<div id='" + this._mainDivId + "' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))
    }

    function a(t) {
        var i = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
        return t.delegate(i, "mouseout", function() {
            e(this).removeClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && e(this).removeClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && e(this).removeClass("ui-datepicker-next-hover")
        }).delegate(i, "mouseover", function() {
            e.datepicker._isDisabledDatepicker(n.inline ? t.parent()[0] : n.input[0]) || (e(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"), e(this).addClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && e(this).addClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && e(this).addClass("ui-datepicker-next-hover"))
        })
    }

    function s(t, i) {
        e.extend(t, i);
        for (var a in i) null == i[a] && (t[a] = i[a]);
        return t
    }
    e.extend(e.ui, {
        datepicker: {
            version: "1.10.3"
        }
    });
    var n, r = "datepicker";
    e.extend(i.prototype, {
        markerClassName: "hasDatepicker",
        maxRows: 4,
        _widgetDatepicker: function() {
            return this.dpDiv
        },
        setDefaults: function(e) {
            return s(this._defaults, e || {}), this
        },
        _attachDatepicker: function(t, i) {
            var a, s, n;
            a = t.nodeName.toLowerCase(), s = "div" === a || "span" === a, t.id || (this.uuid += 1, t.id = "dp" + this.uuid), n = this._newInst(e(t), s), n.settings = e.extend({}, i || {}), "input" === a ? this._connectDatepicker(t, n) : s && this._inlineDatepicker(t, n)
        },
        _newInst: function(t, i) {
            var s = t[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1");
            return {
                id: s,
                input: t,
                selectedDay: 0,
                selectedMonth: 0,
                selectedYear: 0,
                drawMonth: 0,
                drawYear: 0,
                inline: i,
                dpDiv: i ? a(e("<div class='" + this._inlineClass + " ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")) : this.dpDiv
            }
        },
        _connectDatepicker: function(t, i) {
            var a = e(t);
            i.append = e([]), i.trigger = e([]), a.hasClass(this.markerClassName) || (this._attachments(a, i), a.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp), this._autoSize(i), e.data(t, r, i), i.settings.disabled && this._disableDatepicker(t))
        },
        _attachments: function(t, i) {
            var a, s, n, r = this._get(i, "appendText"),
                o = this._get(i, "isRTL");
            i.append && i.append.remove(), r && (i.append = e("<span class='" + this._appendClass + "'>" + r + "</span>"), t[o ? "before" : "after"](i.append)), t.unbind("focus", this._showDatepicker), i.trigger && i.trigger.remove(), a = this._get(i, "showOn"), ("focus" === a || "both" === a) && t.focus(this._showDatepicker), ("button" === a || "both" === a) && (s = this._get(i, "buttonText"), n = this._get(i, "buttonImage"), i.trigger = e(this._get(i, "buttonImageOnly") ? e("<img/>").addClass(this._triggerClass).attr({
                src: n,
                alt: s,
                title: s
            }) : e("<button type='button'></button>").addClass(this._triggerClass).html(n ? e("<img/>").attr({
                src: n,
                alt: s,
                title: s
            }) : s)), t[o ? "before" : "after"](i.trigger), i.trigger.click(function() {
                return e.datepicker._datepickerShowing && e.datepicker._lastInput === t[0] ? e.datepicker._hideDatepicker() : e.datepicker._datepickerShowing && e.datepicker._lastInput !== t[0] ? (e.datepicker._hideDatepicker(), e.datepicker._showDatepicker(t[0])) : e.datepicker._showDatepicker(t[0]), !1
            }))
        },
        _autoSize: function(e) {
            if (this._get(e, "autoSize") && !e.inline) {
                var t, i, a, s, n = new Date(2009, 11, 20),
                    r = this._get(e, "dateFormat");
                r.match(/[DM]/) && (t = function(e) {
                    for (i = 0, a = 0, s = 0; e.length > s; s++) e[s].length > i && (i = e[s].length, a = s);
                    return a
                }, n.setMonth(t(this._get(e, r.match(/MM/) ? "monthNames" : "monthNamesShort"))), n.setDate(t(this._get(e, r.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - n.getDay())), e.input.attr("size", this._formatDate(e, n).length)
            }
        },
        _inlineDatepicker: function(t, i) {
            var a = e(t);
            a.hasClass(this.markerClassName) || (a.addClass(this.markerClassName).append(i.dpDiv), e.data(t, r, i), this._setDate(i, this._getDefaultDate(i), !0), this._updateDatepicker(i), this._updateAlternate(i), i.settings.disabled && this._disableDatepicker(t), i.dpDiv.css("display", "block"))
        },
        _dialogDatepicker: function(t, i, a, n, o) {
            var h, l, u, d, c, p = this._dialogInst;
            return p || (this.uuid += 1, h = "dp" + this.uuid, this._dialogInput = e("<input type='text' id='" + h + "' style='position: absolute; top: -100px; width: 0px;'/>"), this._dialogInput.keydown(this._doKeyDown), e("body").append(this._dialogInput), p = this._dialogInst = this._newInst(this._dialogInput, !1), p.settings = {}, e.data(this._dialogInput[0], r, p)), s(p.settings, n || {}), i = i && i.constructor === Date ? this._formatDate(p, i) : i, this._dialogInput.val(i), this._pos = o ? o.length ? o : [o.pageX, o.pageY] : null, this._pos || (l = document.documentElement.clientWidth, u = document.documentElement.clientHeight, d = document.documentElement.scrollLeft || document.body.scrollLeft, c = document.documentElement.scrollTop || document.body.scrollTop, this._pos = [l / 2 - 100 + d, u / 2 - 150 + c]), this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), p.settings.onSelect = a, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), e.blockUI && e.blockUI(this.dpDiv), e.data(this._dialogInput[0], r, p), this
        },
        _destroyDatepicker: function(t) {
            var i, a = e(t),
                s = e.data(t, r);
            a.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), e.removeData(t, r), "input" === i ? (s.append.remove(), s.trigger.remove(), a.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : ("div" === i || "span" === i) && a.removeClass(this.markerClassName).empty())
        },
        _enableDatepicker: function(t) {
            var i, a, s = e(t),
                n = e.data(t, r);
            s.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), "input" === i ? (t.disabled = !1, n.trigger.filter("button").each(function() {
                this.disabled = !1
            }).end().filter("img").css({
                opacity: "1.0",
                cursor: ""
            })) : ("div" === i || "span" === i) && (a = s.children("." + this._inlineClass), a.children().removeClass("ui-state-disabled"), a.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !1)), this._disabledInputs = e.map(this._disabledInputs, function(e) {
                return e === t ? null : e
            }))
        },
        _disableDatepicker: function(t) {
            var i, a, s = e(t),
                n = e.data(t, r);
            s.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), "input" === i ? (t.disabled = !0, n.trigger.filter("button").each(function() {
                this.disabled = !0
            }).end().filter("img").css({
                opacity: "0.5",
                cursor: "default"
            })) : ("div" === i || "span" === i) && (a = s.children("." + this._inlineClass), a.children().addClass("ui-state-disabled"), a.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !0)), this._disabledInputs = e.map(this._disabledInputs, function(e) {
                return e === t ? null : e
            }), this._disabledInputs[this._disabledInputs.length] = t)
        },
        _isDisabledDatepicker: function(e) {
            if (!e) return !1;
            for (var t = 0; this._disabledInputs.length > t; t++)
                if (this._disabledInputs[t] === e) return !0;
            return !1
        },
        _getInst: function(t) {
            try {
                return e.data(t, r)
            } catch (i) {
                throw "Missing instance data for this datepicker"
            }
        },
        _optionDatepicker: function(i, a, n) {
            var r, o, h, l, u = this._getInst(i);
            return 2 === arguments.length && "string" == typeof a ? "defaults" === a ? e.extend({}, e.datepicker._defaults) : u ? "all" === a ? e.extend({}, u.settings) : this._get(u, a) : null : (r = a || {}, "string" == typeof a && (r = {}, r[a] = n), u && (this._curInst === u && this._hideDatepicker(), o = this._getDateDatepicker(i, !0), h = this._getMinMaxDate(u, "min"), l = this._getMinMaxDate(u, "max"), s(u.settings, r), null !== h && r.dateFormat !== t && r.minDate === t && (u.settings.minDate = this._formatDate(u, h)), null !== l && r.dateFormat !== t && r.maxDate === t && (u.settings.maxDate = this._formatDate(u, l)), "disabled" in r && (r.disabled ? this._disableDatepicker(i) : this._enableDatepicker(i)), this._attachments(e(i), u), this._autoSize(u), this._setDate(u, o), this._updateAlternate(u), this._updateDatepicker(u)), t)
        },
        _changeDatepicker: function(e, t, i) {
            this._optionDatepicker(e, t, i)
        },
        _refreshDatepicker: function(e) {
            var t = this._getInst(e);
            t && this._updateDatepicker(t)
        },
        _setDateDatepicker: function(e, t) {
            var i = this._getInst(e);
            i && (this._setDate(i, t), this._updateDatepicker(i), this._updateAlternate(i))
        },
        _getDateDatepicker: function(e, t) {
            var i = this._getInst(e);
            return i && !i.inline && this._setDateFromField(i, t), i ? this._getDate(i) : null
        },
        _doKeyDown: function(t) {
            var i, a, s, n = e.datepicker._getInst(t.target),
                r = !0,
                o = n.dpDiv.is(".ui-datepicker-rtl");
            if (n._keyEvent = !0, e.datepicker._datepickerShowing) switch (t.keyCode) {
                case 9:
                    e.datepicker._hideDatepicker(), r = !1;
                    break;
                case 13:
                    return s = e("td." + e.datepicker._dayOverClass + ":not(." + e.datepicker._currentClass + ")", n.dpDiv), s[0] && e.datepicker._selectDay(t.target, n.selectedMonth, n.selectedYear, s[0]), i = e.datepicker._get(n, "onSelect"), i ? (a = e.datepicker._formatDate(n), i.apply(n.input ? n.input[0] : null, [a, n])) : e.datepicker._hideDatepicker(), !1;
                case 27:
                    e.datepicker._hideDatepicker();
                    break;
                case 33:
                    e.datepicker._adjustDate(t.target, t.ctrlKey ? -e.datepicker._get(n, "stepBigMonths") : -e.datepicker._get(n, "stepMonths"), "M");
                    break;
                case 34:
                    e.datepicker._adjustDate(t.target, t.ctrlKey ? +e.datepicker._get(n, "stepBigMonths") : +e.datepicker._get(n, "stepMonths"), "M");
                    break;
                case 35:
                    (t.ctrlKey || t.metaKey) && e.datepicker._clearDate(t.target), r = t.ctrlKey || t.metaKey;
                    break;
                case 36:
                    (t.ctrlKey || t.metaKey) && e.datepicker._gotoToday(t.target), r = t.ctrlKey || t.metaKey;
                    break;
                case 37:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, o ? 1 : -1, "D"), r = t.ctrlKey || t.metaKey, t.originalEvent.altKey && e.datepicker._adjustDate(t.target, t.ctrlKey ? -e.datepicker._get(n, "stepBigMonths") : -e.datepicker._get(n, "stepMonths"), "M");
                    break;
                case 38:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, -7, "D"), r = t.ctrlKey || t.metaKey;
                    break;
                case 39:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, o ? -1 : 1, "D"), r = t.ctrlKey || t.metaKey, t.originalEvent.altKey && e.datepicker._adjustDate(t.target, t.ctrlKey ? +e.datepicker._get(n, "stepBigMonths") : +e.datepicker._get(n, "stepMonths"), "M");
                    break;
                case 40:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, 7, "D"), r = t.ctrlKey || t.metaKey;
                    break;
                default:
                    r = !1
            } else 36 === t.keyCode && t.ctrlKey ? e.datepicker._showDatepicker(this) : r = !1;
            r && (t.preventDefault(), t.stopPropagation())
        },
        _doKeyPress: function(i) {
            var a, s, n = e.datepicker._getInst(i.target);
            return e.datepicker._get(n, "constrainInput") ? (a = e.datepicker._possibleChars(e.datepicker._get(n, "dateFormat")), s = String.fromCharCode(null == i.charCode ? i.keyCode : i.charCode), i.ctrlKey || i.metaKey || " " > s || !a || a.indexOf(s) > -1) : t
        },
        _doKeyUp: function(t) {
            var i, a = e.datepicker._getInst(t.target);
            if (a.input.val() !== a.lastVal) try {
                i = e.datepicker.parseDate(e.datepicker._get(a, "dateFormat"), a.input ? a.input.val() : null, e.datepicker._getFormatConfig(a)), i && (e.datepicker._setDateFromField(a), e.datepicker._updateAlternate(a), e.datepicker._updateDatepicker(a))
            } catch (s) {}
            return !0
        },
        _showDatepicker: function(t) {
            if (t = t.target || t, "input" !== t.nodeName.toLowerCase() && (t = e("input", t.parentNode)[0]), !e.datepicker._isDisabledDatepicker(t) && e.datepicker._lastInput !== t) {
                var i, a, n, r, o, h, l;
                i = e.datepicker._getInst(t), e.datepicker._curInst && e.datepicker._curInst !== i && (e.datepicker._curInst.dpDiv.stop(!0, !0), i && e.datepicker._datepickerShowing && e.datepicker._hideDatepicker(e.datepicker._curInst.input[0])), a = e.datepicker._get(i, "beforeShow"), n = a ? a.apply(t, [t, i]) : {}, n !== !1 && (s(i.settings, n), i.lastVal = null, e.datepicker._lastInput = t, e.datepicker._setDateFromField(i), e.datepicker._inDialog && (t.value = ""), e.datepicker._pos || (e.datepicker._pos = e.datepicker._findPos(t), e.datepicker._pos[1] += t.offsetHeight), r = !1, e(t).parents().each(function() {
                    return r |= "fixed" === e(this).css("position"), !r
                }), o = {
                    left: e.datepicker._pos[0],
                    top: e.datepicker._pos[1]
                }, e.datepicker._pos = null, i.dpDiv.empty(), i.dpDiv.css({
                    position: "absolute",
                    display: "block",
                    top: "-1000px"
                }), e.datepicker._updateDatepicker(i), o = e.datepicker._checkOffset(i, o, r), i.dpDiv.css({
                    position: e.datepicker._inDialog && e.blockUI ? "static" : r ? "fixed" : "absolute",
                    display: "none",
                    left: o.left + "px",
                    top: o.top + "px"
                }), i.inline || (h = e.datepicker._get(i, "showAnim"), l = e.datepicker._get(i, "duration"), i.dpDiv.zIndex(e(t).zIndex() + 1), e.datepicker._datepickerShowing = !0, e.effects && e.effects.effect[h] ? i.dpDiv.show(h, e.datepicker._get(i, "showOptions"), l) : i.dpDiv[h || "show"](h ? l : null), e.datepicker._shouldFocusInput(i) && i.input.focus(), e.datepicker._curInst = i))
            }
        },
        _updateDatepicker: function(t) {
            this.maxRows = 4, n = t, t.dpDiv.empty().append(this._generateHTML(t)), this._attachHandlers(t), t.dpDiv.find("." + this._dayOverClass + " a").mouseover();
            var i, a = this._getNumberOfMonths(t),
                s = a[1],
                r = 17;
            t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), s > 1 && t.dpDiv.addClass("ui-datepicker-multi-" + s).css("width", r * s + "em"), t.dpDiv[(1 !== a[0] || 1 !== a[1] ? "add" : "remove") + "Class"]("ui-datepicker-multi"), t.dpDiv[(this._get(t, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), t === e.datepicker._curInst && e.datepicker._datepickerShowing && e.datepicker._shouldFocusInput(t) && t.input.focus(), t.yearshtml && (i = t.yearshtml, setTimeout(function() {
                i === t.yearshtml && t.yearshtml && t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml), i = t.yearshtml = null
            }, 0))
        },
        _shouldFocusInput: function(e) {
            return e.input && e.input.is(":visible") && !e.input.is(":disabled") && !e.input.is(":focus")
        },
        _checkOffset: function(t, i, a) {
            var s = t.dpDiv.outerWidth(),
                n = t.dpDiv.outerHeight(),
                r = t.input ? t.input.outerWidth() : 0,
                o = t.input ? t.input.outerHeight() : 0,
                h = document.documentElement.clientWidth + (a ? 0 : e(document).scrollLeft()),
                l = document.documentElement.clientHeight + (a ? 0 : e(document).scrollTop());
            return i.left -= this._get(t, "isRTL") ? s - r : 0, i.left -= a && i.left === t.input.offset().left ? e(document).scrollLeft() : 0, i.top -= a && i.top === t.input.offset().top + o ? e(document).scrollTop() : 0, i.left -= Math.min(i.left, i.left + s > h && h > s ? Math.abs(i.left + s - h) : 0), i.top -= Math.min(i.top, i.top + n > l && l > n ? Math.abs(n + o) : 0), i
        },
        _findPos: function(t) {
            for (var i, a = this._getInst(t), s = this._get(a, "isRTL"); t && ("hidden" === t.type || 1 !== t.nodeType || e.expr.filters.hidden(t));) t = t[s ? "previousSibling" : "nextSibling"];
            return i = e(t).offset(), [i.left, i.top]
        },
        _hideDatepicker: function(t) {
            var i, a, s, n, o = this._curInst;
            !o || t && o !== e.data(t, r) || this._datepickerShowing && (i = this._get(o, "showAnim"), a = this._get(o, "duration"), s = function() {
                e.datepicker._tidyDialog(o)
            }, e.effects && (e.effects.effect[i] || e.effects[i]) ? o.dpDiv.hide(i, e.datepicker._get(o, "showOptions"), a, s) : o.dpDiv["slideDown" === i ? "slideUp" : "fadeIn" === i ? "fadeOut" : "hide"](i ? a : null, s), i || s(), this._datepickerShowing = !1, n = this._get(o, "onClose"), n && n.apply(o.input ? o.input[0] : null, [o.input ? o.input.val() : "", o]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
                position: "absolute",
                left: "0",
                top: "-100px"
            }), e.blockUI && (e.unblockUI(), e("body").append(this.dpDiv))), this._inDialog = !1)
        },
        _tidyDialog: function(e) {
            e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")
        },
        _checkExternalClick: function(t) {
            if (e.datepicker._curInst) {
                var i = e(t.target),
                    a = e.datepicker._getInst(i[0]);
                (i[0].id !== e.datepicker._mainDivId && 0 === i.parents("#" + e.datepicker._mainDivId).length && !i.hasClass(e.datepicker.markerClassName) && !i.closest("." + e.datepicker._triggerClass).length && e.datepicker._datepickerShowing && (!e.datepicker._inDialog || !e.blockUI) || i.hasClass(e.datepicker.markerClassName) && e.datepicker._curInst !== a) && e.datepicker._hideDatepicker()
            }
        },
        _adjustDate: function(t, i, a) {
            var s = e(t),
                n = this._getInst(s[0]);
            this._isDisabledDatepicker(s[0]) || (this._adjustInstDate(n, i + ("M" === a ? this._get(n, "showCurrentAtPos") : 0), a), this._updateDatepicker(n))
        },
        _gotoToday: function(t) {
            var i, a = e(t),
                s = this._getInst(a[0]);
            this._get(s, "gotoCurrent") && s.currentDay ? (s.selectedDay = s.currentDay, s.drawMonth = s.selectedMonth = s.currentMonth, s.drawYear = s.selectedYear = s.currentYear) : (i = new Date, s.selectedDay = i.getDate(), s.drawMonth = s.selectedMonth = i.getMonth(), s.drawYear = s.selectedYear = i.getFullYear()), this._notifyChange(s), this._adjustDate(a)
        },
        _selectMonthYear: function(t, i, a) {
            var s = e(t),
                n = this._getInst(s[0]);
            n["selected" + ("M" === a ? "Month" : "Year")] = n["draw" + ("M" === a ? "Month" : "Year")] = parseInt(i.options[i.selectedIndex].value, 10), this._notifyChange(n), this._adjustDate(s)
        },
        _selectDay: function(t, i, a, s) {
            var n, r = e(t);
            e(s).hasClass(this._unselectableClass) || this._isDisabledDatepicker(r[0]) || (n = this._getInst(r[0]), n.selectedDay = n.currentDay = e("a", s).html(), n.selectedMonth = n.currentMonth = i, n.selectedYear = n.currentYear = a, this._selectDate(t, this._formatDate(n, n.currentDay, n.currentMonth, n.currentYear)))
        },
        _clearDate: function(t) {
            var i = e(t);
            this._selectDate(i, "")
        },
        _selectDate: function(t, i) {
            var a, s = e(t),
                n = this._getInst(s[0]);
            i = null != i ? i : this._formatDate(n), n.input && n.input.val(i), this._updateAlternate(n), a = this._get(n, "onSelect"), a ? a.apply(n.input ? n.input[0] : null, [i, n]) : n.input && n.input.trigger("change"), n.inline ? this._updateDatepicker(n) : (this._hideDatepicker(), this._lastInput = n.input[0], "object" != typeof n.input[0] && n.input.focus(), this._lastInput = null)
        },
        _updateAlternate: function(t) {
            var i, a, s, n = this._get(t, "altField");
            n && (i = this._get(t, "altFormat") || this._get(t, "dateFormat"), a = this._getDate(t), s = this.formatDate(i, a, this._getFormatConfig(t)), e(n).each(function() {
                e(this).val(s)
            }))
        },
        noWeekends: function(e) {
            var t = e.getDay();
            return [t > 0 && 6 > t, ""]
        },
        iso8601Week: function(e) {
            var t, i = new Date(e.getTime());
            return i.setDate(i.getDate() + 4 - (i.getDay() || 7)), t = i.getTime(), i.setMonth(0), i.setDate(1), Math.floor(Math.round((t - i) / 864e5) / 7) + 1
        },
        parseDate: function(i, a, s) {
            if (null == i || null == a) throw "Invalid arguments";
            if (a = "object" == typeof a ? "" + a : a + "", "" === a) return null;
            var n, r, o, h, l = 0,
                u = (s ? s.shortYearCutoff : null) || this._defaults.shortYearCutoff,
                d = "string" != typeof u ? u : (new Date).getFullYear() % 100 + parseInt(u, 10),
                c = (s ? s.dayNamesShort : null) || this._defaults.dayNamesShort,
                p = (s ? s.dayNames : null) || this._defaults.dayNames,
                m = (s ? s.monthNamesShort : null) || this._defaults.monthNamesShort,
                f = (s ? s.monthNames : null) || this._defaults.monthNames,
                g = -1,
                v = -1,
                y = -1,
                b = -1,
                _ = !1,
                k = function(e) {
                    var t = i.length > n + 1 && i.charAt(n + 1) === e;
                    return t && n++, t
                },
                x = function(e) {
                    var t = k(e),
                        i = "@" === e ? 14 : "!" === e ? 20 : "y" === e && t ? 4 : "o" === e ? 3 : 2,
                        s = RegExp("^\\d{1," + i + "}"),
                        n = a.substring(l).match(s);
                    if (!n) throw "Missing number at position " + l;
                    return l += n[0].length, parseInt(n[0], 10)
                },
                D = function(i, s, n) {
                    var r = -1,
                        o = e.map(k(i) ? n : s, function(e, t) {
                            return [
                                [t, e]
                            ]
                        }).sort(function(e, t) {
                            return -(e[1].length - t[1].length)
                        });
                    if (e.each(o, function(e, i) {
                            var s = i[1];
                            return a.substr(l, s.length).toLowerCase() === s.toLowerCase() ? (r = i[0], l += s.length, !1) : t
                        }), -1 !== r) return r + 1;
                    throw "Unknown name at position " + l
                },
                w = function() {
                    if (a.charAt(l) !== i.charAt(n)) throw "Unexpected literal at position " + l;
                    l++
                };
            for (n = 0; i.length > n; n++)
                if (_) "'" !== i.charAt(n) || k("'") ? w() : _ = !1;
                else switch (i.charAt(n)) {
                    case "d":
                        y = x("d");
                        break;
                    case "D":
                        D("D", c, p);
                        break;
                    case "o":
                        b = x("o");
                        break;
                    case "m":
                        v = x("m");
                        break;
                    case "M":
                        v = D("M", m, f);
                        break;
                    case "y":
                        g = x("y");
                        break;
                    case "@":
                        h = new Date(x("@")), g = h.getFullYear(), v = h.getMonth() + 1, y = h.getDate();
                        break;
                    case "!":
                        h = new Date((x("!") - this._ticksTo1970) / 1e4), g = h.getFullYear(), v = h.getMonth() + 1, y = h.getDate();
                        break;
                    case "'":
                        k("'") ? w() : _ = !0;
                        break;
                    default:
                        w()
                }
            if (a.length > l && (o = a.substr(l), !/^\s+/.test(o))) throw "Extra/unparsed characters found in date: " + o;
            if (-1 === g ? g = (new Date).getFullYear() : 100 > g && (g += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (d >= g ? 0 : -100)), b > -1)
                for (v = 1, y = b;;) {
                    if (r = this._getDaysInMonth(g, v - 1), r >= y) break;
                    v++, y -= r
                }
            if (h = this._daylightSavingAdjust(new Date(g, v - 1, y)), h.getFullYear() !== g || h.getMonth() + 1 !== v || h.getDate() !== y) throw "Invalid date";
            return h
        },
        ATOM: "yy-mm-dd",
        COOKIE: "D, dd M yy",
        ISO_8601: "yy-mm-dd",
        RFC_822: "D, d M y",
        RFC_850: "DD, dd-M-y",
        RFC_1036: "D, d M y",
        RFC_1123: "D, d M yy",
        RFC_2822: "D, d M yy",
        RSS: "D, d M y",
        TICKS: "!",
        TIMESTAMP: "@",
        W3C: "yy-mm-dd",
        _ticksTo1970: 1e7 * 60 * 60 * 24 * (718685 + Math.floor(492.5) - Math.floor(19.7) + Math.floor(4.925)),
        formatDate: function(e, t, i) {
            if (!t) return "";
            var a, s = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                n = (i ? i.dayNames : null) || this._defaults.dayNames,
                r = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                o = (i ? i.monthNames : null) || this._defaults.monthNames,
                h = function(t) {
                    var i = e.length > a + 1 && e.charAt(a + 1) === t;
                    return i && a++, i
                },
                l = function(e, t, i) {
                    var a = "" + t;
                    if (h(e))
                        for (; i > a.length;) a = "0" + a;
                    return a
                },
                u = function(e, t, i, a) {
                    return h(e) ? a[t] : i[t]
                },
                d = "",
                c = !1;
            if (t)
                for (a = 0; e.length > a; a++)
                    if (c) "'" !== e.charAt(a) || h("'") ? d += e.charAt(a) : c = !1;
                    else switch (e.charAt(a)) {
                        case "d":
                            d += l("d", t.getDate(), 2);
                            break;
                        case "D":
                            d += u("D", t.getDay(), s, n);
                            break;
                        case "o":
                            d += l("o", Math.round((new Date(t.getFullYear(), t.getMonth(), t.getDate()).getTime() - new Date(t.getFullYear(), 0, 0).getTime()) / 864e5), 3);
                            break;
                        case "m":
                            d += l("m", t.getMonth() + 1, 2);
                            break;
                        case "M":
                            d += u("M", t.getMonth(), r, o);
                            break;
                        case "y":
                            d += h("y") ? t.getFullYear() : (10 > t.getYear() % 100 ? "0" : "") + t.getYear() % 100;
                            break;
                        case "@":
                            d += t.getTime();
                            break;
                        case "!":
                            d += 1e4 * t.getTime() + this._ticksTo1970;
                            break;
                        case "'":
                            h("'") ? d += "'" : c = !0;
                            break;
                        default:
                            d += e.charAt(a)
                    }
            return d
        },
        _possibleChars: function(e) {
            var t, i = "",
                a = !1,
                s = function(i) {
                    var a = e.length > t + 1 && e.charAt(t + 1) === i;
                    return a && t++, a
                };
            for (t = 0; e.length > t; t++)
                if (a) "'" !== e.charAt(t) || s("'") ? i += e.charAt(t) : a = !1;
                else switch (e.charAt(t)) {
                    case "d":
                    case "m":
                    case "y":
                    case "@":
                        i += "0123456789";
                        break;
                    case "D":
                    case "M":
                        return null;
                    case "'":
                        s("'") ? i += "'" : a = !0;
                        break;
                    default:
                        i += e.charAt(t)
                }
            return i
        },
        _get: function(e, i) {
            return e.settings[i] !== t ? e.settings[i] : this._defaults[i]
        },
        _setDateFromField: function(e, t) {
            if (e.input.val() !== e.lastVal) {
                var i = this._get(e, "dateFormat"),
                    a = e.lastVal = e.input ? e.input.val() : null,
                    s = this._getDefaultDate(e),
                    n = s,
                    r = this._getFormatConfig(e);
                try {
                    n = this.parseDate(i, a, r) || s
                } catch (o) {
                    a = t ? "" : a
                }
                e.selectedDay = n.getDate(), e.drawMonth = e.selectedMonth = n.getMonth(), e.drawYear = e.selectedYear = n.getFullYear(), e.currentDay = a ? n.getDate() : 0, e.currentMonth = a ? n.getMonth() : 0, e.currentYear = a ? n.getFullYear() : 0, this._adjustInstDate(e)
            }
        },
        _getDefaultDate: function(e) {
            return this._restrictMinMax(e, this._determineDate(e, this._get(e, "defaultDate"), new Date))
        },
        _determineDate: function(t, i, a) {
            var s = function(e) {
                    var t = new Date;
                    return t.setDate(t.getDate() + e), t
                },
                n = function(i) {
                    try {
                        return e.datepicker.parseDate(e.datepicker._get(t, "dateFormat"), i, e.datepicker._getFormatConfig(t))
                    } catch (a) {}
                    for (var s = (i.toLowerCase().match(/^c/) ? e.datepicker._getDate(t) : null) || new Date, n = s.getFullYear(), r = s.getMonth(), o = s.getDate(), h = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g, l = h.exec(i); l;) {
                        switch (l[2] || "d") {
                            case "d":
                            case "D":
                                o += parseInt(l[1], 10);
                                break;
                            case "w":
                            case "W":
                                o += 7 * parseInt(l[1], 10);
                                break;
                            case "m":
                            case "M":
                                r += parseInt(l[1], 10), o = Math.min(o, e.datepicker._getDaysInMonth(n, r));
                                break;
                            case "y":
                            case "Y":
                                n += parseInt(l[1], 10), o = Math.min(o, e.datepicker._getDaysInMonth(n, r))
                        }
                        l = h.exec(i)
                    }
                    return new Date(n, r, o)
                },
                r = null == i || "" === i ? a : "string" == typeof i ? n(i) : "number" == typeof i ? isNaN(i) ? a : s(i) : new Date(i.getTime());
            return r = r && "Invalid Date" == "" + r ? a : r, r && (r.setHours(0), r.setMinutes(0), r.setSeconds(0), r.setMilliseconds(0)), this._daylightSavingAdjust(r)
        },
        _daylightSavingAdjust: function(e) {
            return e ? (e.setHours(e.getHours() > 12 ? e.getHours() + 2 : 0), e) : null
        },
        _setDate: function(e, t, i) {
            var a = !t,
                s = e.selectedMonth,
                n = e.selectedYear,
                r = this._restrictMinMax(e, this._determineDate(e, t, new Date));
            e.selectedDay = e.currentDay = r.getDate(), e.drawMonth = e.selectedMonth = e.currentMonth = r.getMonth(), e.drawYear = e.selectedYear = e.currentYear = r.getFullYear(), s === e.selectedMonth && n === e.selectedYear || i || this._notifyChange(e), this._adjustInstDate(e), e.input && e.input.val(a ? "" : this._formatDate(e))
        },
        _getDate: function(e) {
            var t = !e.currentYear || e.input && "" === e.input.val() ? null : this._daylightSavingAdjust(new Date(e.currentYear, e.currentMonth, e.currentDay));
            return t
        },
        _attachHandlers: function(t) {
            var i = this._get(t, "stepMonths"),
                a = "#" + t.id.replace(/\\\\/g, "\\");
            t.dpDiv.find("[data-handler]").map(function() {
                var t = {
                    prev: function() {
                        e.datepicker._adjustDate(a, -i, "M")
                    },
                    next: function() {
                        e.datepicker._adjustDate(a, +i, "M")
                    },
                    hide: function() {
                        e.datepicker._hideDatepicker()
                    },
                    today: function() {
                        e.datepicker._gotoToday(a)
                    },
                    selectDay: function() {
                        return e.datepicker._selectDay(a, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this), !1
                    },
                    selectMonth: function() {
                        return e.datepicker._selectMonthYear(a, this, "M"), !1
                    },
                    selectYear: function() {
                        return e.datepicker._selectMonthYear(a, this, "Y"), !1
                    }
                };
                e(this).bind(this.getAttribute("data-event"), t[this.getAttribute("data-handler")])
            })
        },
        _generateHTML: function(e) {
            var t, i, a, s, n, r, o, h, l, u, d, c, p, m, f, g, v, y, b, _, k, x, D, w, T, M, S, N, C, A, P, I, F, j, H, E, z, L, O, R = new Date,
                W = this._daylightSavingAdjust(new Date(R.getFullYear(), R.getMonth(), R.getDate())),
                Y = this._get(e, "isRTL"),
                J = this._get(e, "showButtonPanel"),
                $ = this._get(e, "hideIfNoPrevNext"),
                Q = this._get(e, "navigationAsDateFormat"),
                B = this._getNumberOfMonths(e),
                K = this._get(e, "showCurrentAtPos"),
                V = this._get(e, "stepMonths"),
                U = 1 !== B[0] || 1 !== B[1],
                G = this._daylightSavingAdjust(e.currentDay ? new Date(e.currentYear, e.currentMonth, e.currentDay) : new Date(9999, 9, 9)),
                q = this._getMinMaxDate(e, "min"),
                X = this._getMinMaxDate(e, "max"),
                Z = e.drawMonth - K,
                et = e.drawYear;
            if (0 > Z && (Z += 12, et--), X)
                for (t = this._daylightSavingAdjust(new Date(X.getFullYear(), X.getMonth() - B[0] * B[1] + 1, X.getDate())), t = q && q > t ? q : t; this._daylightSavingAdjust(new Date(et, Z, 1)) > t;) Z--, 0 > Z && (Z = 11, et--);
            for (e.drawMonth = Z, e.drawYear = et, i = this._get(e, "prevText"), i = Q ? this.formatDate(i, this._daylightSavingAdjust(new Date(et, Z - V, 1)), this._getFormatConfig(e)) : i, a = this._canAdjustMonth(e, -1, et, Z) ? "<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "e" : "w") + "'>" + i + "</span></a>" : $ ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "e" : "w") + "'>" + i + "</span></a>", s = this._get(e, "nextText"), s = Q ? this.formatDate(s, this._daylightSavingAdjust(new Date(et, Z + V, 1)), this._getFormatConfig(e)) : s, n = this._canAdjustMonth(e, 1, et, Z) ? "<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='" + s + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "w" : "e") + "'>" + s + "</span></a>" : $ ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='" + s + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "w" : "e") + "'>" + s + "</span></a>", r = this._get(e, "currentText"), o = this._get(e, "gotoCurrent") && e.currentDay ? G : W, r = Q ? this.formatDate(r, o, this._getFormatConfig(e)) : r, h = e.inline ? "" : "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" + this._get(e, "closeText") + "</button>", l = J ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + (Y ? h : "") + (this._isInRange(e, o) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>" + r + "</button>" : "") + (Y ? "" : h) + "</div>" : "", u = parseInt(this._get(e, "firstDay"), 10), u = isNaN(u) ? 0 : u, d = this._get(e, "showWeek"), c = this._get(e, "dayNames"), p = this._get(e, "dayNamesMin"), m = this._get(e, "monthNames"), f = this._get(e, "monthNamesShort"), g = this._get(e, "beforeShowDay"), v = this._get(e, "showOtherMonths"), y = this._get(e, "selectOtherMonths"), b = this._getDefaultDate(e), _ = "", x = 0; B[0] > x; x++) {
                for (D = "", this.maxRows = 4, w = 0; B[1] > w; w++) {
                    if (T = this._daylightSavingAdjust(new Date(et, Z, e.selectedDay)), M = " ui-corner-all", S = "", U) {
                        if (S += "<div class='ui-datepicker-group", B[1] > 1) switch (w) {
                            case 0:
                                S += " ui-datepicker-group-first", M = " ui-corner-" + (Y ? "right" : "left");
                                break;
                            case B[1] - 1:
                                S += " ui-datepicker-group-last", M = " ui-corner-" + (Y ? "left" : "right");
                                break;
                            default:
                                S += " ui-datepicker-group-middle", M = ""
                        }
                        S += "'>"
                    }
                    for (S += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + M + "'>" + (/all|left/.test(M) && 0 === x ? Y ? n : a : "") + (/all|right/.test(M) && 0 === x ? Y ? a : n : "") + this._generateMonthYearHeader(e, Z, et, q, X, x > 0 || w > 0, m, f) + "</div><table class='ui-datepicker-calendar'><thead>" + "<tr>", N = d ? "<th class='ui-datepicker-week-col'>" + this._get(e, "weekHeader") + "</th>" : "", k = 0; 7 > k; k++) C = (k + u) % 7, N += "<th" + ((k + u + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + ">" + "<span title='" + c[C] + "'>" + p[C] + "</span></th>";
                    for (S += N + "</tr></thead><tbody>", A = this._getDaysInMonth(et, Z), et === e.selectedYear && Z === e.selectedMonth && (e.selectedDay = Math.min(e.selectedDay, A)), P = (this._getFirstDayOfMonth(et, Z) - u + 7) % 7, I = Math.ceil((P + A) / 7), F = U ? this.maxRows > I ? this.maxRows : I : I, this.maxRows = F, j = this._daylightSavingAdjust(new Date(et, Z, 1 - P)), H = 0; F > H; H++) {
                        for (S += "<tr>", E = d ? "<td class='ui-datepicker-week-col'>" + this._get(e, "calculateWeek")(j) + "</td>" : "", k = 0; 7 > k; k++) z = g ? g.apply(e.input ? e.input[0] : null, [j]) : [!0, ""], L = j.getMonth() !== Z, O = L && !y || !z[0] || q && q > j || X && j > X, E += "<td class='" + ((k + u + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (L ? " ui-datepicker-other-month" : "") + (j.getTime() === T.getTime() && Z === e.selectedMonth && e._keyEvent || b.getTime() === j.getTime() && b.getTime() === T.getTime() ? " " + this._dayOverClass : "") + (O ? " " + this._unselectableClass + " ui-state-disabled" : "") + (L && !v ? "" : " " + z[1] + (j.getTime() === G.getTime() ? " " + this._currentClass : "") + (j.getTime() === W.getTime() ? " ui-datepicker-today" : "")) + "'" + (L && !v || !z[2] ? "" : " title='" + z[2].replace(/'/g, "&#39;") + "'") + (O ? "" : " data-handler='selectDay' data-event='click' data-month='" + j.getMonth() + "' data-year='" + j.getFullYear() + "'") + ">" + (L && !v ? "&#xa0;" : O ? "<span class='ui-state-default'>" + j.getDate() + "</span>" : "<a class='ui-state-default" + (j.getTime() === W.getTime() ? " ui-state-highlight" : "") + (j.getTime() === G.getTime() ? " ui-state-active" : "") + (L ? " ui-priority-secondary" : "") + "' href='#'>" + j.getDate() + "</a>") + "</td>", j.setDate(j.getDate() + 1), j = this._daylightSavingAdjust(j);
                        S += E + "</tr>"
                    }
                    Z++, Z > 11 && (Z = 0, et++), S += "</tbody></table>" + (U ? "</div>" + (B[0] > 0 && w === B[1] - 1 ? "<div class='ui-datepicker-row-break'></div>" : "") : ""), D += S
                }
                _ += D
            }
            return _ += l, e._keyEvent = !1, _
        },
        _generateMonthYearHeader: function(e, t, i, a, s, n, r, o) {
            var h, l, u, d, c, p, m, f, g = this._get(e, "changeMonth"),
                v = this._get(e, "changeYear"),
                y = this._get(e, "showMonthAfterYear"),
                b = "<div class='ui-datepicker-title'>",
                _ = "";
            if (n || !g) _ += "<span class='ui-datepicker-month'>" + r[t] + "</span>";
            else {
                for (h = a && a.getFullYear() === i, l = s && s.getFullYear() === i, _ += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>", u = 0; 12 > u; u++)(!h || u >= a.getMonth()) && (!l || s.getMonth() >= u) && (_ += "<option value='" + u + "'" + (u === t ? " selected='selected'" : "") + ">" + o[u] + "</option>");
                _ += "</select>"
            }
            if (y || (b += _ + (!n && g && v ? "" : "&#xa0;")), !e.yearshtml)
                if (e.yearshtml = "", n || !v) b += "<span class='ui-datepicker-year'>" + i + "</span>";
                else {
                    for (d = this._get(e, "yearRange").split(":"), c = (new Date).getFullYear(), p = function(e) {
                            var t = e.match(/c[+\-].*/) ? i + parseInt(e.substring(1), 10) : e.match(/[+\-].*/) ? c + parseInt(e, 10) : parseInt(e, 10);
                            return isNaN(t) ? c : t
                        }, m = p(d[0]), f = Math.max(m, p(d[1] || "")), m = a ? Math.max(m, a.getFullYear()) : m, f = s ? Math.min(f, s.getFullYear()) : f, e.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>"; f >= m; m++) e.yearshtml += "<option value='" + m + "'" + (m === i ? " selected='selected'" : "") + ">" + m + "</option>";
                    e.yearshtml += "</select>", b += e.yearshtml, e.yearshtml = null
                }
            return b += this._get(e, "yearSuffix"), y && (b += (!n && g && v ? "" : "&#xa0;") + _), b += "</div>"
        },
        _adjustInstDate: function(e, t, i) {
            var a = e.drawYear + ("Y" === i ? t : 0),
                s = e.drawMonth + ("M" === i ? t : 0),
                n = Math.min(e.selectedDay, this._getDaysInMonth(a, s)) + ("D" === i ? t : 0),
                r = this._restrictMinMax(e, this._daylightSavingAdjust(new Date(a, s, n)));
            e.selectedDay = r.getDate(), e.drawMonth = e.selectedMonth = r.getMonth(), e.drawYear = e.selectedYear = r.getFullYear(), ("M" === i || "Y" === i) && this._notifyChange(e)
        },
        _restrictMinMax: function(e, t) {
            var i = this._getMinMaxDate(e, "min"),
                a = this._getMinMaxDate(e, "max"),
                s = i && i > t ? i : t;
            return a && s > a ? a : s
        },
        _notifyChange: function(e) {
            var t = this._get(e, "onChangeMonthYear");
            t && t.apply(e.input ? e.input[0] : null, [e.selectedYear, e.selectedMonth + 1, e])
        },
        _getNumberOfMonths: function(e) {
            var t = this._get(e, "numberOfMonths");
            return null == t ? [1, 1] : "number" == typeof t ? [1, t] : t
        },
        _getMinMaxDate: function(e, t) {
            return this._determineDate(e, this._get(e, t + "Date"), null)
        },
        _getDaysInMonth: function(e, t) {
            return 32 - this._daylightSavingAdjust(new Date(e, t, 32)).getDate()
        },
        _getFirstDayOfMonth: function(e, t) {
            return new Date(e, t, 1).getDay()
        },
        _canAdjustMonth: function(e, t, i, a) {
            var s = this._getNumberOfMonths(e),
                n = this._daylightSavingAdjust(new Date(i, a + (0 > t ? t : s[0] * s[1]), 1));
            return 0 > t && n.setDate(this._getDaysInMonth(n.getFullYear(), n.getMonth())), this._isInRange(e, n)
        },
        _isInRange: function(e, t) {
            var i, a, s = this._getMinMaxDate(e, "min"),
                n = this._getMinMaxDate(e, "max"),
                r = null,
                o = null,
                h = this._get(e, "yearRange");
            return h && (i = h.split(":"), a = (new Date).getFullYear(), r = parseInt(i[0], 10), o = parseInt(i[1], 10), i[0].match(/[+\-].*/) && (r += a), i[1].match(/[+\-].*/) && (o += a)), (!s || t.getTime() >= s.getTime()) && (!n || t.getTime() <= n.getTime()) && (!r || t.getFullYear() >= r) && (!o || o >= t.getFullYear())
        },
        _getFormatConfig: function(e) {
            var t = this._get(e, "shortYearCutoff");
            return t = "string" != typeof t ? t : (new Date).getFullYear() % 100 + parseInt(t, 10), {
                shortYearCutoff: t,
                dayNamesShort: this._get(e, "dayNamesShort"),
                dayNames: this._get(e, "dayNames"),
                monthNamesShort: this._get(e, "monthNamesShort"),
                monthNames: this._get(e, "monthNames")
            }
        },
        _formatDate: function(e, t, i, a) {
            t || (e.currentDay = e.selectedDay, e.currentMonth = e.selectedMonth, e.currentYear = e.selectedYear);
            var s = t ? "object" == typeof t ? t : this._daylightSavingAdjust(new Date(a, i, t)) : this._daylightSavingAdjust(new Date(e.currentYear, e.currentMonth, e.currentDay));
            return this.formatDate(this._get(e, "dateFormat"), s, this._getFormatConfig(e))
        }
    }), e.fn.datepicker = function(t) {
        if (!this.length) return this;
        e.datepicker.initialized || (e(document).mousedown(e.datepicker._checkExternalClick), e.datepicker.initialized = !0), 0 === e("#" + e.datepicker._mainDivId).length && e("body").append(e.datepicker.dpDiv);
        var i = Array.prototype.slice.call(arguments, 1);
        return "string" != typeof t || "isDisabled" !== t && "getDate" !== t && "widget" !== t ? "option" === t && 2 === arguments.length && "string" == typeof arguments[1] ? e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this[0]].concat(i)) : this.each(function() {
            "string" == typeof t ? e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this].concat(i)) : e.datepicker._attachDatepicker(this, t)
        }) : e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this[0]].concat(i))
    }, e.datepicker = new i, e.datepicker.initialized = !1, e.datepicker.uuid = (new Date).getTime(), e.datepicker.version = "1.10.3"
})(jQuery);
(function(e) {
    var t = {
            buttons: !0,
            height: !0,
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0,
            width: !0
        },
        i = {
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0
        };
    e.widget("ui.dialog", {
        version: "1.10.3",
        options: {
            appendTo: "body",
            autoOpen: !0,
            buttons: [],
            closeOnEscape: !0,
            closeText: "close",
            dialogClass: "",
            draggable: !0,
            hide: null,
            height: "auto",
            maxHeight: null,
            maxWidth: null,
            minHeight: 150,
            minWidth: 150,
            modal: !1,
            position: {
                my: "center",
                at: "center",
                of: window,
                collision: "fit",
                using: function(t) {
                    var i = e(this).css(t).offset().top;
                    0 > i && e(this).css("top", t.top - i)
                }
            },
            resizable: !0,
            show: null,
            title: null,
            width: 300,
            beforeClose: null,
            close: null,
            drag: null,
            dragStart: null,
            dragStop: null,
            focus: null,
            open: null,
            resize: null,
            resizeStart: null,
            resizeStop: null
        },
        _create: function() {
            this.originalCss = {
                display: this.element[0].style.display,
                width: this.element[0].style.width,
                minHeight: this.element[0].style.minHeight,
                maxHeight: this.element[0].style.maxHeight,
                height: this.element[0].style.height
            }, this.originalPosition = {
                parent: this.element.parent(),
                index: this.element.parent().children().index(this.element)
            }, this.originalTitle = this.element.attr("title"), this.options.title = this.options.title || this.originalTitle, this._createWrapper(), this.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(this.uiDialog), this._createTitlebar(), this._createButtonPane(), this.options.draggable && e.fn.draggable && this._makeDraggable(), this.options.resizable && e.fn.resizable && this._makeResizable(), this._isOpen = !1
        },
        _init: function() {
            this.options.autoOpen && this.open()
        },
        _appendTo: function() {
            var t = this.options.appendTo;
            return t && (t.jquery || t.nodeType) ? e(t) : this.document.find(t || "body").eq(0)
        },
        _destroy: function() {
            var e, t = this.originalPosition;
            this._destroyOverlay(), this.element.removeUniqueId().removeClass("ui-dialog-content ui-widget-content").css(this.originalCss).detach(), this.uiDialog.stop(!0, !0).remove(), this.originalTitle && this.element.attr("title", this.originalTitle), e = t.parent.children().eq(t.index), e.length && e[0] !== this.element[0] ? e.before(this.element) : t.parent.append(this.element)
        },
        widget: function() {
            return this.uiDialog
        },
        disable: e.noop,
        enable: e.noop,
        close: function(t) {
            var i = this;
            this._isOpen && this._trigger("beforeClose", t) !== !1 && (this._isOpen = !1, this._destroyOverlay(), this.opener.filter(":focusable").focus().length || e(this.document[0].activeElement).blur(), this._hide(this.uiDialog, this.options.hide, function() {
                i._trigger("close", t)
            }))
        },
        isOpen: function() {
            return this._isOpen
        },
        moveToTop: function() {
            this._moveToTop()
        },
        _moveToTop: function(e, t) {
            var i = !!this.uiDialog.nextAll(":visible").insertBefore(this.uiDialog).length;
            return i && !t && this._trigger("focus", e), i
        },
        open: function() {
            var t = this;
            return this._isOpen ? (this._moveToTop() && this._focusTabbable(), undefined) : (this._isOpen = !0, this.opener = e(this.document[0].activeElement), this._size(), this._position(), this._createOverlay(), this._moveToTop(null, !0), this._show(this.uiDialog, this.options.show, function() {
                t._focusTabbable(), t._trigger("focus")
            }), this._trigger("open"), undefined)
        },
        _focusTabbable: function() {
            var e = this.element.find("[autofocus]");
            e.length || (e = this.element.find(":tabbable")), e.length || (e = this.uiDialogButtonPane.find(":tabbable")), e.length || (e = this.uiDialogTitlebarClose.filter(":tabbable")), e.length || (e = this.uiDialog), e.eq(0).focus()
        },
        _keepFocus: function(t) {
            function i() {
                var t = this.document[0].activeElement,
                    i = this.uiDialog[0] === t || e.contains(this.uiDialog[0], t);
                i || this._focusTabbable()
            }
            t.preventDefault(), i.call(this), this._delay(i)
        },
        _createWrapper: function() {
            this.uiDialog = e("<div>").addClass("ui-dialog ui-widget ui-widget-content ui-corner-all ui-front " + this.options.dialogClass).hide().attr({
                tabIndex: -1,
                role: "dialog"
            }).appendTo(this._appendTo()), this._on(this.uiDialog, {
                keydown: function(t) {
                    if (this.options.closeOnEscape && !t.isDefaultPrevented() && t.keyCode && t.keyCode === e.ui.keyCode.ESCAPE) return t.preventDefault(), this.close(t), undefined;
                    if (t.keyCode === e.ui.keyCode.TAB) {
                        var i = this.uiDialog.find(":tabbable"),
                            a = i.filter(":first"),
                            s = i.filter(":last");
                        t.target !== s[0] && t.target !== this.uiDialog[0] || t.shiftKey ? t.target !== a[0] && t.target !== this.uiDialog[0] || !t.shiftKey || (s.focus(1), t.preventDefault()) : (a.focus(1), t.preventDefault())
                    }
                },
                mousedown: function(e) {
                    this._moveToTop(e) && this._focusTabbable()
                }
            }), this.element.find("[aria-describedby]").length || this.uiDialog.attr({
                "aria-describedby": this.element.uniqueId().attr("id")
            })
        },
        _createTitlebar: function() {
            var t;
            this.uiDialogTitlebar = e("<div>").addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(this.uiDialog), this._on(this.uiDialogTitlebar, {
                mousedown: function(t) {
                    e(t.target).closest(".ui-dialog-titlebar-close") || this.uiDialog.focus()
                }
            }), this.uiDialogTitlebarClose = e("<button></button>").button({
                label: this.options.closeText,
                icons: {
                    primary: "ui-icon-closethick"
                },
                text: !1
            }).addClass("ui-dialog-titlebar-close").appendTo(this.uiDialogTitlebar), this._on(this.uiDialogTitlebarClose, {
                click: function(e) {
                    e.preventDefault(), this.close(e)
                }
            }), t = e("<span>").uniqueId().addClass("ui-dialog-title").prependTo(this.uiDialogTitlebar), this._title(t), this.uiDialog.attr({
                "aria-labelledby": t.attr("id")
            })
        },
        _title: function(e) {
            this.options.title || e.html("&#160;"), e.text(this.options.title)
        },
        _createButtonPane: function() {
            this.uiDialogButtonPane = e("<div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"), this.uiButtonSet = e("<div>").addClass("ui-dialog-buttonset").appendTo(this.uiDialogButtonPane), this._createButtons()
        },
        _createButtons: function() {
            var t = this,
                i = this.options.buttons;
            return this.uiDialogButtonPane.remove(), this.uiButtonSet.empty(), e.isEmptyObject(i) || e.isArray(i) && !i.length ? (this.uiDialog.removeClass("ui-dialog-buttons"), undefined) : (e.each(i, function(i, a) {
                var s, n;
                a = e.isFunction(a) ? {
                    click: a,
                    text: i
                } : a, a = e.extend({
                    type: "button"
                }, a), s = a.click, a.click = function() {
                    s.apply(t.element[0], arguments)
                }, n = {
                    icons: a.icons,
                    text: a.showText
                }, delete a.icons, delete a.showText, e("<button></button>", a).button(n).appendTo(t.uiButtonSet)
            }), this.uiDialog.addClass("ui-dialog-buttons"), this.uiDialogButtonPane.appendTo(this.uiDialog), undefined)
        },
        _makeDraggable: function() {
            function t(e) {
                return {
                    position: e.position,
                    offset: e.offset
                }
            }
            var i = this,
                a = this.options;
            this.uiDialog.draggable({
                cancel: ".ui-dialog-content, .ui-dialog-titlebar-close",
                handle: ".ui-dialog-titlebar",
                containment: "document",
                start: function(a, s) {
                    e(this).addClass("ui-dialog-dragging"), i._blockFrames(), i._trigger("dragStart", a, t(s))
                },
                drag: function(e, a) {
                    i._trigger("drag", e, t(a))
                },
                stop: function(s, n) {
                    a.position = [n.position.left - i.document.scrollLeft(), n.position.top - i.document.scrollTop()], e(this).removeClass("ui-dialog-dragging"), i._unblockFrames(), i._trigger("dragStop", s, t(n))
                }
            })
        },
        _makeResizable: function() {
            function t(e) {
                return {
                    originalPosition: e.originalPosition,
                    originalSize: e.originalSize,
                    position: e.position,
                    size: e.size
                }
            }
            var i = this,
                a = this.options,
                s = a.resizable,
                n = this.uiDialog.css("position"),
                r = "string" == typeof s ? s : "n,e,s,w,se,sw,ne,nw";
            this.uiDialog.resizable({
                cancel: ".ui-dialog-content",
                containment: "document",
                alsoResize: this.element,
                maxWidth: a.maxWidth,
                maxHeight: a.maxHeight,
                minWidth: a.minWidth,
                minHeight: this._minHeight(),
                handles: r,
                start: function(a, s) {
                    e(this).addClass("ui-dialog-resizing"), i._blockFrames(), i._trigger("resizeStart", a, t(s))
                },
                resize: function(e, a) {
                    i._trigger("resize", e, t(a))
                },
                stop: function(s, n) {
                    a.height = e(this).height(), a.width = e(this).width(), e(this).removeClass("ui-dialog-resizing"), i._unblockFrames(), i._trigger("resizeStop", s, t(n))
                }
            }).css("position", n)
        },
        _minHeight: function() {
            var e = this.options;
            return "auto" === e.height ? e.minHeight : Math.min(e.minHeight, e.height)
        },
        _position: function() {
            var e = this.uiDialog.is(":visible");
            e || this.uiDialog.show(), this.uiDialog.position(this.options.position), e || this.uiDialog.hide()
        },
        _setOptions: function(a) {
            var s = this,
                n = !1,
                r = {};
            e.each(a, function(e, a) {
                s._setOption(e, a), e in t && (n = !0), e in i && (r[e] = a)
            }), n && (this._size(), this._position()), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", r)
        },
        _setOption: function(e, t) {
            var i, a, s = this.uiDialog;
            "dialogClass" === e && s.removeClass(this.options.dialogClass).addClass(t), "disabled" !== e && (this._super(e, t), "appendTo" === e && this.uiDialog.appendTo(this._appendTo()), "buttons" === e && this._createButtons(), "closeText" === e && this.uiDialogTitlebarClose.button({
                label: "" + t
            }), "draggable" === e && (i = s.is(":data(ui-draggable)"), i && !t && s.draggable("destroy"), !i && t && this._makeDraggable()), "position" === e && this._position(), "resizable" === e && (a = s.is(":data(ui-resizable)"), a && !t && s.resizable("destroy"), a && "string" == typeof t && s.resizable("option", "handles", t), a || t === !1 || this._makeResizable()), "title" === e && this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))
        },
        _size: function() {
            var e, t, i, a = this.options;
            this.element.show().css({
                width: "auto",
                minHeight: 0,
                maxHeight: "none",
                height: 0
            }), a.minWidth > a.width && (a.width = a.minWidth), e = this.uiDialog.css({
                height: "auto",
                width: a.width
            }).outerHeight(), t = Math.max(0, a.minHeight - e), i = "number" == typeof a.maxHeight ? Math.max(0, a.maxHeight - e) : "none", "auto" === a.height ? this.element.css({
                minHeight: t,
                maxHeight: i,
                height: "auto"
            }) : this.element.height(Math.max(0, a.height - e)), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", "minHeight", this._minHeight())
        },
        _blockFrames: function() {
            this.iframeBlocks = this.document.find("iframe").map(function() {
                var t = e(this);
                return e("<div>").css({
                    position: "absolute",
                    width: t.outerWidth(),
                    height: t.outerHeight()
                }).appendTo(t.parent()).offset(t.offset())[0]
            })
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _allowInteraction: function(t) {
            return e(t.target).closest(".ui-dialog").length ? !0 : !!e(t.target).closest(".ui-datepicker").length
        },
        _createOverlay: function() {
            if (this.options.modal) {
                var t = this,
                    i = this.widgetFullName;
                e.ui.dialog.overlayInstances || this._delay(function() {
                    e.ui.dialog.overlayInstances && this.document.bind("focusin.dialog", function(a) {
                        t._allowInteraction(a) || (a.preventDefault(), e(".ui-dialog:visible:last .ui-dialog-content").data(i)._focusTabbable())
                    })
                }), this.overlay = e("<div>").addClass("ui-widget-overlay ui-front").appendTo(this._appendTo()), this._on(this.overlay, {
                    mousedown: "_keepFocus"
                }), e.ui.dialog.overlayInstances++
            }
        },
        _destroyOverlay: function() {
            this.options.modal && this.overlay && (e.ui.dialog.overlayInstances--, e.ui.dialog.overlayInstances || this.document.unbind("focusin.dialog"), this.overlay.remove(), this.overlay = null)
        }
    }), e.ui.dialog.overlayInstances = 0, e.uiBackCompat !== !1 && e.widget("ui.dialog", e.ui.dialog, {
        _position: function() {
            var t, i = this.options.position,
                a = [],
                s = [0, 0];
            i ? (("string" == typeof i || "object" == typeof i && "0" in i) && (a = i.split ? i.split(" ") : [i[0], i[1]], 1 === a.length && (a[1] = a[0]), e.each(["left", "top"], function(e, t) {
                +a[e] === a[e] && (s[e] = a[e], a[e] = t)
            }), i = {
                my: a[0] + (0 > s[0] ? s[0] : "+" + s[0]) + " " + a[1] + (0 > s[1] ? s[1] : "+" + s[1]),
                at: a.join(" ")
            }), i = e.extend({}, e.ui.dialog.prototype.options.position, i)) : i = e.ui.dialog.prototype.options.position, t = this.uiDialog.is(":visible"), t || this.uiDialog.show(), this.uiDialog.position(i), t || this.uiDialog.hide()
        }
    })
})(jQuery);
(function(e) {
    var t = 5;
    e.widget("ui.slider", e.ui.mouse, {
        version: "1.10.3",
        widgetEventPrefix: "slide",
        options: {
            animate: !1,
            distance: 0,
            max: 100,
            min: 0,
            orientation: "horizontal",
            range: !1,
            step: 1,
            value: 0,
            values: null,
            change: null,
            slide: null,
            start: null,
            stop: null
        },
        _create: function() {
            this._keySliding = !1, this._mouseSliding = !1, this._animateOff = !0, this._handleIndex = null, this._detectOrientation(), this._mouseInit(), this.element.addClass("ui-slider ui-slider-" + this.orientation + " ui-widget" + " ui-widget-content" + " ui-corner-all"), this._refresh(), this._setOption("disabled", this.options.disabled), this._animateOff = !1
        },
        _refresh: function() {
            this._createRange(), this._createHandles(), this._setupEvents(), this._refreshValue()
        },
        _createHandles: function() {
            var t, i, s = this.options,
                a = this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),
                n = "<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",
                r = [];
            for (i = s.values && s.values.length || 1, a.length > i && (a.slice(i).remove(), a = a.slice(0, i)), t = a.length; i > t; t++) r.push(n);
            this.handles = a.add(e(r.join("")).appendTo(this.element)), this.handle = this.handles.eq(0), this.handles.each(function(t) {
                e(this).data("ui-slider-handle-index", t)
            })
        },
        _createRange: function() {
            var t = this.options,
                i = "";
            t.range ? (t.range === !0 && (t.values ? t.values.length && 2 !== t.values.length ? t.values = [t.values[0], t.values[0]] : e.isArray(t.values) && (t.values = t.values.slice(0)) : t.values = [this._valueMin(), this._valueMin()]), this.range && this.range.length ? this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({
                left: "",
                bottom: ""
            }) : (this.range = e("<div></div>").appendTo(this.element), i = "ui-slider-range ui-widget-header ui-corner-all"), this.range.addClass(i + ("min" === t.range || "max" === t.range ? " ui-slider-range-" + t.range : ""))) : this.range = e([])
        },
        _setupEvents: function() {
            var e = this.handles.add(this.range).filter("a");
            this._off(e), this._on(e, this._handleEvents), this._hoverable(e), this._focusable(e)
        },
        _destroy: function() {
            this.handles.remove(), this.range.remove(), this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"), this._mouseDestroy()
        },
        _mouseCapture: function(t) {
            var i, s, a, n, r, o, h, l, u = this,
                c = this.options;
            return c.disabled ? !1 : (this.elementSize = {
                width: this.element.outerWidth(),
                height: this.element.outerHeight()
            }, this.elementOffset = this.element.offset(), i = {
                x: t.pageX,
                y: t.pageY
            }, s = this._normValueFromMouse(i), a = this._valueMax() - this._valueMin() + 1, this.handles.each(function(t) {
                var i = Math.abs(s - u.values(t));
                (a > i || a === i && (t === u._lastChangedValue || u.values(t) === c.min)) && (a = i, n = e(this), r = t)
            }), o = this._start(t, r), o === !1 ? !1 : (this._mouseSliding = !0, this._handleIndex = r, n.addClass("ui-state-active").focus(), h = n.offset(), l = !e(t.target).parents().addBack().is(".ui-slider-handle"), this._clickOffset = l ? {
                left: 0,
                top: 0
            } : {
                left: t.pageX - h.left - n.width() / 2,
                top: t.pageY - h.top - n.height() / 2 - (parseInt(n.css("borderTopWidth"), 10) || 0) - (parseInt(n.css("borderBottomWidth"), 10) || 0) + (parseInt(n.css("marginTop"), 10) || 0)
            }, this.handles.hasClass("ui-state-hover") || this._slide(t, r, s), this._animateOff = !0, !0))
        },
        _mouseStart: function() {
            return !0
        },
        _mouseDrag: function(e) {
            var t = {
                    x: e.pageX,
                    y: e.pageY
                },
                i = this._normValueFromMouse(t);
            return this._slide(e, this._handleIndex, i), !1
        },
        _mouseStop: function(e) {
            return this.handles.removeClass("ui-state-active"), this._mouseSliding = !1, this._stop(e, this._handleIndex), this._change(e, this._handleIndex), this._handleIndex = null, this._clickOffset = null, this._animateOff = !1, !1
        },
        _detectOrientation: function() {
            this.orientation = "vertical" === this.options.orientation ? "vertical" : "horizontal"
        },
        _normValueFromMouse: function(e) {
            var t, i, s, a, n;
            return "horizontal" === this.orientation ? (t = this.elementSize.width, i = e.x - this.elementOffset.left - (this._clickOffset ? this._clickOffset.left : 0)) : (t = this.elementSize.height, i = e.y - this.elementOffset.top - (this._clickOffset ? this._clickOffset.top : 0)), s = i / t, s > 1 && (s = 1), 0 > s && (s = 0), "vertical" === this.orientation && (s = 1 - s), a = this._valueMax() - this._valueMin(), n = this._valueMin() + s * a, this._trimAlignValue(n)
        },
        _start: function(e, t) {
            var i = {
                handle: this.handles[t],
                value: this.value()
            };
            return this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._trigger("start", e, i)
        },
        _slide: function(e, t, i) {
            var s, a, n;
            this.options.values && this.options.values.length ? (s = this.values(t ? 0 : 1), 2 === this.options.values.length && this.options.range === !0 && (0 === t && i > s || 1 === t && s > i) && (i = s), i !== this.values(t) && (a = this.values(), a[t] = i, n = this._trigger("slide", e, {
                handle: this.handles[t],
                value: i,
                values: a
            }), s = this.values(t ? 0 : 1), n !== !1 && this.values(t, i, !0))) : i !== this.value() && (n = this._trigger("slide", e, {
                handle: this.handles[t],
                value: i
            }), n !== !1 && this.value(i))
        },
        _stop: function(e, t) {
            var i = {
                handle: this.handles[t],
                value: this.value()
            };
            this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._trigger("stop", e, i)
        },
        _change: function(e, t) {
            if (!this._keySliding && !this._mouseSliding) {
                var i = {
                    handle: this.handles[t],
                    value: this.value()
                };
                this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._lastChangedValue = t, this._trigger("change", e, i)
            }
        },
        value: function(e) {
            return arguments.length ? (this.options.value = this._trimAlignValue(e), this._refreshValue(), this._change(null, 0), undefined) : this._value()
        },
        values: function(t, i) {
            var s, a, n;
            if (arguments.length > 1) return this.options.values[t] = this._trimAlignValue(i), this._refreshValue(), this._change(null, t), undefined;
            if (!arguments.length) return this._values();
            if (!e.isArray(arguments[0])) return this.options.values && this.options.values.length ? this._values(t) : this.value();
            for (s = this.options.values, a = arguments[0], n = 0; s.length > n; n += 1) s[n] = this._trimAlignValue(a[n]), this._change(null, n);
            this._refreshValue()
        },
        _setOption: function(t, i) {
            var s, a = 0;
            switch ("range" === t && this.options.range === !0 && ("min" === i ? (this.options.value = this._values(0), this.options.values = null) : "max" === i && (this.options.value = this._values(this.options.values.length - 1), this.options.values = null)), e.isArray(this.options.values) && (a = this.options.values.length), e.Widget.prototype._setOption.apply(this, arguments), t) {
                case "orientation":
                    this._detectOrientation(), this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-" + this.orientation), this._refreshValue();
                    break;
                case "value":
                    this._animateOff = !0, this._refreshValue(), this._change(null, 0), this._animateOff = !1;
                    break;
                case "values":
                    for (this._animateOff = !0, this._refreshValue(), s = 0; a > s; s += 1) this._change(null, s);
                    this._animateOff = !1;
                    break;
                case "min":
                case "max":
                    this._animateOff = !0, this._refreshValue(), this._animateOff = !1;
                    break;
                case "range":
                    this._animateOff = !0, this._refresh(), this._animateOff = !1
            }
        },
        _value: function() {
            var e = this.options.value;
            return e = this._trimAlignValue(e)
        },
        _values: function(e) {
            var t, i, s;
            if (arguments.length) return t = this.options.values[e], t = this._trimAlignValue(t);
            if (this.options.values && this.options.values.length) {
                for (i = this.options.values.slice(), s = 0; i.length > s; s += 1) i[s] = this._trimAlignValue(i[s]);
                return i
            }
            return []
        },
        _trimAlignValue: function(e) {
            if (this._valueMin() >= e) return this._valueMin();
            if (e >= this._valueMax()) return this._valueMax();
            var t = this.options.step > 0 ? this.options.step : 1,
                i = (e - this._valueMin()) % t,
                s = e - i;
            return 2 * Math.abs(i) >= t && (s += i > 0 ? t : -t), parseFloat(s.toFixed(5))
        },
        _valueMin: function() {
            return this.options.min
        },
        _valueMax: function() {
            return this.options.max
        },
        _refreshValue: function() {
            var t, i, s, a, n, r = this.options.range,
                o = this.options,
                h = this,
                l = this._animateOff ? !1 : o.animate,
                u = {};
            this.options.values && this.options.values.length ? this.handles.each(function(s) {
                i = 100 * ((h.values(s) - h._valueMin()) / (h._valueMax() - h._valueMin())), u["horizontal" === h.orientation ? "left" : "bottom"] = i + "%", e(this).stop(1, 1)[l ? "animate" : "css"](u, o.animate), h.options.range === !0 && ("horizontal" === h.orientation ? (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({
                    left: i + "%"
                }, o.animate), 1 === s && h.range[l ? "animate" : "css"]({
                    width: i - t + "%"
                }, {
                    queue: !1,
                    duration: o.animate
                })) : (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({
                    bottom: i + "%"
                }, o.animate), 1 === s && h.range[l ? "animate" : "css"]({
                    height: i - t + "%"
                }, {
                    queue: !1,
                    duration: o.animate
                }))), t = i
            }) : (s = this.value(), a = this._valueMin(), n = this._valueMax(), i = n !== a ? 100 * ((s - a) / (n - a)) : 0, u["horizontal" === this.orientation ? "left" : "bottom"] = i + "%", this.handle.stop(1, 1)[l ? "animate" : "css"](u, o.animate), "min" === r && "horizontal" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({
                width: i + "%"
            }, o.animate), "max" === r && "horizontal" === this.orientation && this.range[l ? "animate" : "css"]({
                width: 100 - i + "%"
            }, {
                queue: !1,
                duration: o.animate
            }), "min" === r && "vertical" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({
                height: i + "%"
            }, o.animate), "max" === r && "vertical" === this.orientation && this.range[l ? "animate" : "css"]({
                height: 100 - i + "%"
            }, {
                queue: !1,
                duration: o.animate
            }))
        },
        _handleEvents: {
            keydown: function(i) {
                var s, a, n, r, o = e(i.target).data("ui-slider-handle-index");
                switch (i.keyCode) {
                    case e.ui.keyCode.HOME:
                    case e.ui.keyCode.END:
                    case e.ui.keyCode.PAGE_UP:
                    case e.ui.keyCode.PAGE_DOWN:
                    case e.ui.keyCode.UP:
                    case e.ui.keyCode.RIGHT:
                    case e.ui.keyCode.DOWN:
                    case e.ui.keyCode.LEFT:
                        if (i.preventDefault(), !this._keySliding && (this._keySliding = !0, e(i.target).addClass("ui-state-active"), s = this._start(i, o), s === !1)) return
                }
                switch (r = this.options.step, a = n = this.options.values && this.options.values.length ? this.values(o) : this.value(), i.keyCode) {
                    case e.ui.keyCode.HOME:
                        n = this._valueMin();
                        break;
                    case e.ui.keyCode.END:
                        n = this._valueMax();
                        break;
                    case e.ui.keyCode.PAGE_UP:
                        n = this._trimAlignValue(a + (this._valueMax() - this._valueMin()) / t);
                        break;
                    case e.ui.keyCode.PAGE_DOWN:
                        n = this._trimAlignValue(a - (this._valueMax() - this._valueMin()) / t);
                        break;
                    case e.ui.keyCode.UP:
                    case e.ui.keyCode.RIGHT:
                        if (a === this._valueMax()) return;
                        n = this._trimAlignValue(a + r);
                        break;
                    case e.ui.keyCode.DOWN:
                    case e.ui.keyCode.LEFT:
                        if (a === this._valueMin()) return;
                        n = this._trimAlignValue(a - r)
                }
                this._slide(i, o, n)
            },
            click: function(e) {
                e.preventDefault()
            },
            keyup: function(t) {
                var i = e(t.target).data("ui-slider-handle-index");
                this._keySliding && (this._keySliding = !1, this._stop(t, i), this._change(t, i), e(t.target).removeClass("ui-state-active"))
            }
        }
    })
})(jQuery);
(function(e) {
    function t(t, i) {
        var s = (t.attr("aria-describedby") || "").split(/\s+/);
        s.push(i), t.data("ui-tooltip-id", i).attr("aria-describedby", e.trim(s.join(" ")))
    }

    function i(t) {
        var i = t.data("ui-tooltip-id"),
            s = (t.attr("aria-describedby") || "").split(/\s+/),
            a = e.inArray(i, s); - 1 !== a && s.splice(a, 1), t.removeData("ui-tooltip-id"), s = e.trim(s.join(" ")), s ? t.attr("aria-describedby", s) : t.removeAttr("aria-describedby")
    }
    var s = 0;
    e.widget("ui.tooltip", {
        version: "1.10.3",
        options: {
            content: function() {
                var t = e(this).attr("title") || "";
                return e("<a>").text(t).html()
            },
            hide: !0,
            items: "[title]:not([disabled])",
            position: {
                my: "left top+15",
                at: "left bottom",
                collision: "flipfit flip"
            },
            show: !0,
            tooltipClass: null,
            track: !1,
            close: null,
            open: null
        },
        _create: function() {
            this._on({
                mouseover: "open",
                focusin: "open"
            }), this.tooltips = {}, this.parents = {}, this.options.disabled && this._disable()
        },
        _setOption: function(t, i) {
            var s = this;
            return "disabled" === t ? (this[i ? "_disable" : "_enable"](), this.options[t] = i, void 0) : (this._super(t, i), "content" === t && e.each(this.tooltips, function(e, t) {
                s._updateContent(t)
            }), void 0)
        },
        _disable: function() {
            var t = this;
            e.each(this.tooltips, function(i, s) {
                var a = e.Event("blur");
                a.target = a.currentTarget = s[0], t.close(a, !0)
            }), this.element.find(this.options.items).addBack().each(function() {
                var t = e(this);
                t.is("[title]") && t.data("ui-tooltip-title", t.attr("title")).attr("title", "")
            })
        },
        _enable: function() {
            this.element.find(this.options.items).addBack().each(function() {
                var t = e(this);
                t.data("ui-tooltip-title") && t.attr("title", t.data("ui-tooltip-title"))
            })
        },
        open: function(t) {
            var i = this,
                s = e(t ? t.target : this.element).closest(this.options.items);
            s.length && !s.data("ui-tooltip-id") && (s.attr("title") && s.data("ui-tooltip-title", s.attr("title")), s.data("ui-tooltip-open", !0), t && "mouseover" === t.type && s.parents().each(function() {
                var t, s = e(this);
                s.data("ui-tooltip-open") && (t = e.Event("blur"), t.target = t.currentTarget = this, i.close(t, !0)), s.attr("title") && (s.uniqueId(), i.parents[this.id] = {
                    element: this,
                    title: s.attr("title")
                }, s.attr("title", ""))
            }), this._updateContent(s, t))
        },
        _updateContent: function(e, t) {
            var i, s = this.options.content,
                a = this,
                n = t ? t.type : null;
            return "string" == typeof s ? this._open(t, e, s) : (i = s.call(e[0], function(i) {
                e.data("ui-tooltip-open") && a._delay(function() {
                    t && (t.type = n), this._open(t, e, i)
                })
            }), i && this._open(t, e, i), void 0)
        },
        _open: function(i, s, a) {
            function n(e) {
                l.of = e, r.is(":hidden") || r.position(l)
            }
            var r, o, h, l = e.extend({}, this.options.position);
            if (a) {
                if (r = this._find(s), r.length) return r.find(".ui-tooltip-content").html(a), void 0;
                s.is("[title]") && (i && "mouseover" === i.type ? s.attr("title", "") : s.removeAttr("title")), r = this._tooltip(s), t(s, r.attr("id")), r.find(".ui-tooltip-content").html(a), this.options.track && i && /^mouse/.test(i.type) ? (this._on(this.document, {
                    mousemove: n
                }), n(i)) : r.position(e.extend({ of: s
                }, this.options.position)), r.hide(), this._show(r, this.options.show), this.options.show && this.options.show.delay && (h = this.delayedShow = setInterval(function() {
                    r.is(":visible") && (n(l.of), clearInterval(h))
                }, e.fx.interval)), this._trigger("open", i, {
                    tooltip: r
                }), o = {
                    keyup: function(t) {
                        if (t.keyCode === e.ui.keyCode.ESCAPE) {
                            var i = e.Event(t);
                            i.currentTarget = s[0], this.close(i, !0)
                        }
                    },
                    remove: function() {
                        this._removeTooltip(r)
                    }
                }, i && "mouseover" !== i.type || (o.mouseleave = "close"), i && "focusin" !== i.type || (o.focusout = "close"), this._on(!0, s, o)
            }
        },
        close: function(t) {
            var s = this,
                a = e(t ? t.currentTarget : this.element),
                n = this._find(a);
            this.closing || (clearInterval(this.delayedShow), a.data("ui-tooltip-title") && a.attr("title", a.data("ui-tooltip-title")), i(a), n.stop(!0), this._hide(n, this.options.hide, function() {
                s._removeTooltip(e(this))
            }), a.removeData("ui-tooltip-open"), this._off(a, "mouseleave focusout keyup"), a[0] !== this.element[0] && this._off(a, "remove"), this._off(this.document, "mousemove"), t && "mouseleave" === t.type && e.each(this.parents, function(t, i) {
                e(i.element).attr("title", i.title), delete s.parents[t]
            }), this.closing = !0, this._trigger("close", t, {
                tooltip: n
            }), this.closing = !1)
        },
        _tooltip: function(t) {
            var i = "ui-tooltip-" + s++,
                a = e("<div>").attr({
                    id: i,
                    role: "tooltip"
                }).addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content " + (this.options.tooltipClass || ""));
            return e("<div>").addClass("ui-tooltip-content").appendTo(a), a.appendTo(this.document[0].body), this.tooltips[i] = t, a
        },
        _find: function(t) {
            var i = t.data("ui-tooltip-id");
            return i ? e("#" + i) : e()
        },
        _removeTooltip: function(e) {
            e.remove(), delete this.tooltips[e.attr("id")]
        },
        _destroy: function() {
            var t = this;
            e.each(this.tooltips, function(i, s) {
                var a = e.Event("blur");
                a.target = a.currentTarget = s[0], t.close(a, !0), e("#" + i).remove(), s.data("ui-tooltip-title") && (s.attr("title", s.data("ui-tooltip-title")), s.removeData("ui-tooltip-title"))
            })
        }
    })
})(jQuery);
//COMMENT: jquery.ui.js

//COMMENT: jquery.ui.sortable.js
(function(t) {
    function e(t, e, i) {
        return t > e && e + i > t
    }

    function i(t) {
        return /left|right/.test(t.css("float")) || /inline|table-cell/.test(t.css("display"))
    }
    t.widget("ui.sortable", t.ui.mouse, {
        version: "1.10.4",
        widgetEventPrefix: "sort",
        ready: !1,
        options: {
            appendTo: "parent",
            axis: !1,
            connectWith: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            dropOnEmpty: !0,
            forcePlaceholderSize: !1,
            forceHelperSize: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            items: "> *",
            opacity: !1,
            placeholder: !1,
            revert: !1,
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            scope: "default",
            tolerance: "intersect",
            zIndex: 1e3,
            activate: null,
            beforeStop: null,
            change: null,
            deactivate: null,
            out: null,
            over: null,
            receive: null,
            remove: null,
            sort: null,
            start: null,
            stop: null,
            update: null
        },
        _create: function() {
            var t = this.options;
            this.containerCache = {}, this.element.addClass("ui-sortable"), this.refresh(), this.floating = this.items.length ? "x" === t.axis || i(this.items[0].item) : !1, this.offset = this.element.offset(), this._mouseInit(), this.ready = !0
        },
        _destroy: function() {
            this.element.removeClass("ui-sortable ui-sortable-disabled"), this._mouseDestroy();
            for (var t = this.items.length - 1; t >= 0; t--) this.items[t].item.removeData(this.widgetName + "-item");
            return this
        },
        _setOption: function(e, i) {
            "disabled" === e ? (this.options[e] = i, this.widget().toggleClass("ui-sortable-disabled", !!i)) : t.Widget.prototype._setOption.apply(this, arguments)
        },
        _mouseCapture: function(e, i) {
            var s = null,
                n = !1,
                o = this;
            return this.reverting ? !1 : this.options.disabled || "static" === this.options.type ? !1 : (this._refreshItems(e), t(e.target).parents().each(function() {
                return t.data(this, o.widgetName + "-item") === o ? (s = t(this), !1) : undefined
            }), t.data(e.target, o.widgetName + "-item") === o && (s = t(e.target)), s ? !this.options.handle || i || (t(this.options.handle, s).find("*").addBack().each(function() {
                this === e.target && (n = !0)
            }), n) ? (this.currentItem = s, this._removeCurrentsFromItems(), !0) : !1 : !1)
        },
        _mouseStart: function(e, i, s) {
            var n, o, a = this.options;
            if (this.currentContainer = this, this.refreshPositions(), this.helper = this._createHelper(e), this._cacheHelperProportions(), this._cacheMargins(), this.scrollParent = this.helper.scrollParent(), this.offset = this.currentItem.offset(), this.offset = {
                    top: this.offset.top - this.margins.top,
                    left: this.offset.left - this.margins.left
                }, t.extend(this.offset, {
                    click: {
                        left: e.pageX - this.offset.left,
                        top: e.pageY - this.offset.top
                    },
                    parent: this._getParentOffset(),
                    relative: this._getRelativeOffset()
                }), this.helper.css("position", "absolute"), this.cssPosition = this.helper.css("position"), this.originalPosition = this._generatePosition(e), this.originalPageX = e.pageX, this.originalPageY = e.pageY, a.cursorAt && this._adjustOffsetFromHelper(a.cursorAt), this.domPosition = {
                    prev: this.currentItem.prev()[0],
                    parent: this.currentItem.parent()[0]
                }, this.helper[0] !== this.currentItem[0] && this.currentItem.hide(), this._createPlaceholder(), a.containment && this._setContainment(), a.cursor && "auto" !== a.cursor && (o = this.document.find("body"), this.storedCursor = o.css("cursor"), o.css("cursor", a.cursor), this.storedStylesheet = t("<style>*{ cursor: " + a.cursor + " !important; }</style>").appendTo(o)), a.opacity && (this.helper.css("opacity") && (this._storedOpacity = this.helper.css("opacity")), this.helper.css("opacity", a.opacity)), a.zIndex && (this.helper.css("zIndex") && (this._storedZIndex = this.helper.css("zIndex")), this.helper.css("zIndex", a.zIndex)), this.scrollParent[0] !== document && "HTML" !== this.scrollParent[0].tagName && (this.overflowOffset = this.scrollParent.offset()), this._trigger("start", e, this._uiHash()), this._preserveHelperProportions || this._cacheHelperProportions(), !s)
                for (n = this.containers.length - 1; n >= 0; n--) this.containers[n]._trigger("activate", e, this._uiHash(this));
            return t.ui.ddmanager && (t.ui.ddmanager.current = this), t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this.dragging = !0, this.helper.addClass("ui-sortable-helper"), this._mouseDrag(e), !0
        },
        _mouseDrag: function(e) {
            var i, s, n, o, a = this.options,
                r = !1;
            for (this.position = this._generatePosition(e), this.positionAbs = this._convertPositionTo("absolute"), this.lastPositionAbs || (this.lastPositionAbs = this.positionAbs), this.options.scroll && (this.scrollParent[0] !== document && "HTML" !== this.scrollParent[0].tagName ? (this.overflowOffset.top + this.scrollParent[0].offsetHeight - e.pageY < a.scrollSensitivity ? this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop + a.scrollSpeed : e.pageY - this.overflowOffset.top < a.scrollSensitivity && (this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop - a.scrollSpeed), this.overflowOffset.left + this.scrollParent[0].offsetWidth - e.pageX < a.scrollSensitivity ? this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft + a.scrollSpeed : e.pageX - this.overflowOffset.left < a.scrollSensitivity && (this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft - a.scrollSpeed)) : (e.pageY - t(document).scrollTop() < a.scrollSensitivity ? r = t(document).scrollTop(t(document).scrollTop() - a.scrollSpeed) : t(window).height() - (e.pageY - t(document).scrollTop()) < a.scrollSensitivity && (r = t(document).scrollTop(t(document).scrollTop() + a.scrollSpeed)), e.pageX - t(document).scrollLeft() < a.scrollSensitivity ? r = t(document).scrollLeft(t(document).scrollLeft() - a.scrollSpeed) : t(window).width() - (e.pageX - t(document).scrollLeft()) < a.scrollSensitivity && (r = t(document).scrollLeft(t(document).scrollLeft() + a.scrollSpeed))), r !== !1 && t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e)), this.positionAbs = this._convertPositionTo("absolute"), this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), i = this.items.length - 1; i >= 0; i--)
                if (s = this.items[i], n = s.item[0], o = this._intersectsWithPointer(s), o && s.instance === this.currentContainer && n !== this.currentItem[0] && this.placeholder[1 === o ? "next" : "prev"]()[0] !== n && !t.contains(this.placeholder[0], n) && ("semi-dynamic" === this.options.type ? !t.contains(this.element[0], n) : !0)) {
                    if (this.direction = 1 === o ? "down" : "up", "pointer" !== this.options.tolerance && !this._intersectsWithSides(s)) break;
                    this._rearrange(e, s), this._trigger("change", e, this._uiHash());
                    break
                }
            return this._contactContainers(e), t.ui.ddmanager && t.ui.ddmanager.drag(this, e), this._trigger("sort", e, this._uiHash()), this.lastPositionAbs = this.positionAbs, !1
        },
        _mouseStop: function(e, i) {
            if (e) {
                if (t.ui.ddmanager && !this.options.dropBehaviour && t.ui.ddmanager.drop(this, e), this.options.revert) {
                    var s = this,
                        n = this.placeholder.offset(),
                        o = this.options.axis,
                        a = {};
                    o && "x" !== o || (a.left = n.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollLeft)), o && "y" !== o || (a.top = n.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === document.body ? 0 : this.offsetParent[0].scrollTop)), this.reverting = !0, t(this.helper).animate(a, parseInt(this.options.revert, 10) || 500, function() {
                        s._clear(e)
                    })
                } else this._clear(e, i);
                return !1
            }
        },
        cancel: function() {
            if (this.dragging) {
                this._mouseUp({
                    target: null
                }), "original" === this.options.helper ? this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper") : this.currentItem.show();
                for (var e = this.containers.length - 1; e >= 0; e--) this.containers[e]._trigger("deactivate", null, this._uiHash(this)), this.containers[e].containerCache.over && (this.containers[e]._trigger("out", null, this._uiHash(this)), this.containers[e].containerCache.over = 0)
            }
            return this.placeholder && (this.placeholder[0].parentNode && this.placeholder[0].parentNode.removeChild(this.placeholder[0]), "original" !== this.options.helper && this.helper && this.helper[0].parentNode && this.helper.remove(), t.extend(this, {
                helper: null,
                dragging: !1,
                reverting: !1,
                _noFinalSort: null
            }), this.domPosition.prev ? t(this.domPosition.prev).after(this.currentItem) : t(this.domPosition.parent).prepend(this.currentItem)), this
        },
        serialize: function(e) {
            var i = this._getItemsAsjQuery(e && e.connected),
                s = [];
            return e = e || {}, t(i).each(function() {
                var i = (t(e.item || this).attr(e.attribute || "id") || "").match(e.expression || /(.+)[\-=_](.+)/);
                i && s.push((e.key || i[1] + "[]") + "=" + (e.key && e.expression ? i[1] : i[2]))
            }), !s.length && e.key && s.push(e.key + "="), s.join("&")
        },
        toArray: function(e) {
            var i = this._getItemsAsjQuery(e && e.connected),
                s = [];
            return e = e || {}, i.each(function() {
                s.push(t(e.item || this).attr(e.attribute || "id") || "")
            }), s
        },
        _intersectsWith: function(t) {
            var e = this.positionAbs.left,
                i = e + this.helperProportions.width,
                s = this.positionAbs.top,
                n = s + this.helperProportions.height,
                o = t.left,
                a = o + t.width,
                r = t.top,
                h = r + t.height,
                l = this.offset.click.top,
                c = this.offset.click.left,
                u = "x" === this.options.axis || s + l > r && h > s + l,
                d = "y" === this.options.axis || e + c > o && a > e + c,
                p = u && d;
            return "pointer" === this.options.tolerance || this.options.forcePointerForContainers || "pointer" !== this.options.tolerance && this.helperProportions[this.floating ? "width" : "height"] > t[this.floating ? "width" : "height"] ? p : e + this.helperProportions.width / 2 > o && a > i - this.helperProportions.width / 2 && s + this.helperProportions.height / 2 > r && h > n - this.helperProportions.height / 2
        },
        _intersectsWithPointer: function(t) {
            var i = "x" === this.options.axis || e(this.positionAbs.top + this.offset.click.top, t.top, t.height),
                s = "y" === this.options.axis || e(this.positionAbs.left + this.offset.click.left, t.left, t.width),
                n = i && s,
                o = this._getDragVerticalDirection(),
                a = this._getDragHorizontalDirection();
            return n ? this.floating ? a && "right" === a || "down" === o ? 2 : 1 : o && ("down" === o ? 2 : 1) : !1
        },
        _intersectsWithSides: function(t) {
            var i = e(this.positionAbs.top + this.offset.click.top, t.top + t.height / 2, t.height),
                s = e(this.positionAbs.left + this.offset.click.left, t.left + t.width / 2, t.width),
                n = this._getDragVerticalDirection(),
                o = this._getDragHorizontalDirection();
            return this.floating && o ? "right" === o && s || "left" === o && !s : n && ("down" === n && i || "up" === n && !i)
        },
        _getDragVerticalDirection: function() {
            var t = this.positionAbs.top - this.lastPositionAbs.top;
            return 0 !== t && (t > 0 ? "down" : "up")
        },
        _getDragHorizontalDirection: function() {
            var t = this.positionAbs.left - this.lastPositionAbs.left;
            return 0 !== t && (t > 0 ? "right" : "left")
        },
        refresh: function(t) {
            return this._refreshItems(t), this.refreshPositions(), this
        },
        _connectWith: function() {
            var t = this.options;
            return t.connectWith.constructor === String ? [t.connectWith] : t.connectWith
        },
        _getItemsAsjQuery: function(e) {
            function i() {
                r.push(this)
            }
            var s, n, o, a, r = [],
                h = [],
                l = this._connectWith();
            if (l && e)
                for (s = l.length - 1; s >= 0; s--)
                    for (o = t(l[s]), n = o.length - 1; n >= 0; n--) a = t.data(o[n], this.widgetFullName), a && a !== this && !a.options.disabled && h.push([t.isFunction(a.options.items) ? a.options.items.call(a.element) : t(a.options.items, a.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), a]);
            for (h.push([t.isFunction(this.options.items) ? this.options.items.call(this.element, null, {
                    options: this.options,
                    item: this.currentItem
                }) : t(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]), s = h.length - 1; s >= 0; s--) h[s][0].each(i);
            return t(r)
        },
        _removeCurrentsFromItems: function() {
            var e = this.currentItem.find(":data(" + this.widgetName + "-item)");
            this.items = t.grep(this.items, function(t) {
                for (var i = 0; e.length > i; i++)
                    if (e[i] === t.item[0]) return !1;
                return !0
            })
        },
        _refreshItems: function(e) {
            this.items = [], this.containers = [this];
            var i, s, n, o, a, r, h, l, c = this.items,
                u = [
                    [t.isFunction(this.options.items) ? this.options.items.call(this.element[0], e, {
                        item: this.currentItem
                    }) : t(this.options.items, this.element), this]
                ],
                d = this._connectWith();
            if (d && this.ready)
                for (i = d.length - 1; i >= 0; i--)
                    for (n = t(d[i]), s = n.length - 1; s >= 0; s--) o = t.data(n[s], this.widgetFullName), o && o !== this && !o.options.disabled && (u.push([t.isFunction(o.options.items) ? o.options.items.call(o.element[0], e, {
                        item: this.currentItem
                    }) : t(o.options.items, o.element), o]), this.containers.push(o));
            for (i = u.length - 1; i >= 0; i--)
                for (a = u[i][1], r = u[i][0], s = 0, l = r.length; l > s; s++) h = t(r[s]), h.data(this.widgetName + "-item", a), c.push({
                    item: h,
                    instance: a,
                    width: 0,
                    height: 0,
                    left: 0,
                    top: 0
                })
        },
        refreshPositions: function(e) {
            this.offsetParent && this.helper && (this.offset.parent = this._getParentOffset());
            var i, s, n, o;
            for (i = this.items.length - 1; i >= 0; i--) s = this.items[i], s.instance !== this.currentContainer && this.currentContainer && s.item[0] !== this.currentItem[0] || (n = this.options.toleranceElement ? t(this.options.toleranceElement, s.item) : s.item, e || (s.width = n.outerWidth(), s.height = n.outerHeight()), o = n.offset(), s.left = o.left, s.top = o.top);
            if (this.options.custom && this.options.custom.refreshContainers) this.options.custom.refreshContainers.call(this);
            else
                for (i = this.containers.length - 1; i >= 0; i--) o = this.containers[i].element.offset(), this.containers[i].containerCache.left = o.left, this.containers[i].containerCache.top = o.top, this.containers[i].containerCache.width = this.containers[i].element.outerWidth(), this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
            return this
        },
        _createPlaceholder: function(e) {
            e = e || this;
            var i, s = e.options;
            s.placeholder && s.placeholder.constructor !== String || (i = s.placeholder, s.placeholder = {
                element: function() {
                    var s = e.currentItem[0].nodeName.toLowerCase(),
                        n = t("<" + s + ">", e.document[0]).addClass(i || e.currentItem[0].className + " ui-sortable-placeholder").removeClass("ui-sortable-helper");
                    return "tr" === s ? e.currentItem.children().each(function() {
                        t("<td>&#160;</td>", e.document[0]).attr("colspan", t(this).attr("colspan") || 1).appendTo(n)
                    }) : "img" === s && n.attr("src", e.currentItem.attr("src")), i || n.css("visibility", "hidden"), n
                },
                update: function(t, n) {
                    (!i || s.forcePlaceholderSize) && (n.height() || n.height(e.currentItem.innerHeight() - parseInt(e.currentItem.css("paddingTop") || 0, 10) - parseInt(e.currentItem.css("paddingBottom") || 0, 10)), n.width() || n.width(e.currentItem.innerWidth() - parseInt(e.currentItem.css("paddingLeft") || 0, 10) - parseInt(e.currentItem.css("paddingRight") || 0, 10)))
                }
            }), e.placeholder = t(s.placeholder.element.call(e.element, e.currentItem)), e.currentItem.after(e.placeholder), s.placeholder.update(e, e.placeholder)
        },
        _contactContainers: function(s) {
            var n, o, a, r, h, l, c, u, d, p, f = null,
                g = null;
            for (n = this.containers.length - 1; n >= 0; n--)
                if (!t.contains(this.currentItem[0], this.containers[n].element[0]))
                    if (this._intersectsWith(this.containers[n].containerCache)) {
                        if (f && t.contains(this.containers[n].element[0], f.element[0])) continue;
                        f = this.containers[n], g = n
                    } else this.containers[n].containerCache.over && (this.containers[n]._trigger("out", s, this._uiHash(this)), this.containers[n].containerCache.over = 0);
            if (f)
                if (1 === this.containers.length) this.containers[g].containerCache.over || (this.containers[g]._trigger("over", s, this._uiHash(this)), this.containers[g].containerCache.over = 1);
                else {
                    for (a = 1e4, r = null, p = f.floating || i(this.currentItem), h = p ? "left" : "top", l = p ? "width" : "height", c = this.positionAbs[h] + this.offset.click[h], o = this.items.length - 1; o >= 0; o--) t.contains(this.containers[g].element[0], this.items[o].item[0]) && this.items[o].item[0] !== this.currentItem[0] && (!p || e(this.positionAbs.top + this.offset.click.top, this.items[o].top, this.items[o].height)) && (u = this.items[o].item.offset()[h], d = !1, Math.abs(u - c) > Math.abs(u + this.items[o][l] - c) && (d = !0, u += this.items[o][l]), a > Math.abs(u - c) && (a = Math.abs(u - c), r = this.items[o], this.direction = d ? "up" : "down"));
                    if (!r && !this.options.dropOnEmpty) return;
                    if (this.currentContainer === this.containers[g]) return;
                    r ? this._rearrange(s, r, null, !0) : this._rearrange(s, null, this.containers[g].element, !0), this._trigger("change", s, this._uiHash()), this.containers[g]._trigger("change", s, this._uiHash(this)), this.currentContainer = this.containers[g], this.options.placeholder.update(this.currentContainer, this.placeholder), this.containers[g]._trigger("over", s, this._uiHash(this)), this.containers[g].containerCache.over = 1
                }
        },
        _createHelper: function(e) {
            var i = this.options,
                s = t.isFunction(i.helper) ? t(i.helper.apply(this.element[0], [e, this.currentItem])) : "clone" === i.helper ? this.currentItem.clone() : this.currentItem;
            return s.parents("body").length || t("parent" !== i.appendTo ? i.appendTo : this.currentItem[0].parentNode)[0].appendChild(s[0]), s[0] === this.currentItem[0] && (this._storedCSS = {
                width: this.currentItem[0].style.width,
                height: this.currentItem[0].style.height,
                position: this.currentItem.css("position"),
                top: this.currentItem.css("top"),
                left: this.currentItem.css("left")
            }), (!s[0].style.width || i.forceHelperSize) && s.width(this.currentItem.width()), (!s[0].style.height || i.forceHelperSize) && s.height(this.currentItem.height()), s
        },
        _adjustOffsetFromHelper: function(e) {
            "string" == typeof e && (e = e.split(" ")), t.isArray(e) && (e = {
                left: +e[0],
                top: +e[1] || 0
            }), "left" in e && (this.offset.click.left = e.left + this.margins.left), "right" in e && (this.offset.click.left = this.helperProportions.width - e.right + this.margins.left), "top" in e && (this.offset.click.top = e.top + this.margins.top), "bottom" in e && (this.offset.click.top = this.helperProportions.height - e.bottom + this.margins.top)
        },
        _getParentOffset: function() {
            this.offsetParent = this.helper.offsetParent();
            var e = this.offsetParent.offset();
            return "absolute" === this.cssPosition && this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === document.body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && t.ui.ie) && (e = {
                top: 0,
                left: 0
            }), {
                top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" === this.cssPosition) {
                var t = this.currentItem.position();
                return {
                    top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(),
                    left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()
                }
            }
            return {
                top: 0,
                left: 0
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.currentItem.css("marginLeft"), 10) || 0,
                top: parseInt(this.currentItem.css("marginTop"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var e, i, s, n = this.options;
            "parent" === n.containment && (n.containment = this.helper[0].parentNode), ("document" === n.containment || "window" === n.containment) && (this.containment = [0 - this.offset.relative.left - this.offset.parent.left, 0 - this.offset.relative.top - this.offset.parent.top, t("document" === n.containment ? document : window).width() - this.helperProportions.width - this.margins.left, (t("document" === n.containment ? document : window).height() || document.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]), /^(document|window|parent)$/.test(n.containment) || (e = t(n.containment)[0], i = t(n.containment).offset(), s = "hidden" !== t(e).css("overflow"), this.containment = [i.left + (parseInt(t(e).css("borderLeftWidth"), 10) || 0) + (parseInt(t(e).css("paddingLeft"), 10) || 0) - this.margins.left, i.top + (parseInt(t(e).css("borderTopWidth"), 10) || 0) + (parseInt(t(e).css("paddingTop"), 10) || 0) - this.margins.top, i.left + (s ? Math.max(e.scrollWidth, e.offsetWidth) : e.offsetWidth) - (parseInt(t(e).css("borderLeftWidth"), 10) || 0) - (parseInt(t(e).css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left, i.top + (s ? Math.max(e.scrollHeight, e.offsetHeight) : e.offsetHeight) - (parseInt(t(e).css("borderTopWidth"), 10) || 0) - (parseInt(t(e).css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top])
        },
        _convertPositionTo: function(e, i) {
            i || (i = this.position);
            var s = "absolute" === e ? 1 : -1,
                n = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                o = /(html|body)/i.test(n[0].tagName);
            return {
                top: i.top + this.offset.relative.top * s + this.offset.parent.top * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : o ? 0 : n.scrollTop()) * s,
                left: i.left + this.offset.relative.left * s + this.offset.parent.left * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : o ? 0 : n.scrollLeft()) * s
            }
        },
        _generatePosition: function(e) {
            var i, s, n = this.options,
                o = e.pageX,
                a = e.pageY,
                r = "absolute" !== this.cssPosition || this.scrollParent[0] !== document && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                h = /(html|body)/i.test(r[0].tagName);
            return "relative" !== this.cssPosition || this.scrollParent[0] !== document && this.scrollParent[0] !== this.offsetParent[0] || (this.offset.relative = this._getRelativeOffset()), this.originalPosition && (this.containment && (e.pageX - this.offset.click.left < this.containment[0] && (o = this.containment[0] + this.offset.click.left), e.pageY - this.offset.click.top < this.containment[1] && (a = this.containment[1] + this.offset.click.top), e.pageX - this.offset.click.left > this.containment[2] && (o = this.containment[2] + this.offset.click.left), e.pageY - this.offset.click.top > this.containment[3] && (a = this.containment[3] + this.offset.click.top)), n.grid && (i = this.originalPageY + Math.round((a - this.originalPageY) / n.grid[1]) * n.grid[1], a = this.containment ? i - this.offset.click.top >= this.containment[1] && i - this.offset.click.top <= this.containment[3] ? i : i - this.offset.click.top >= this.containment[1] ? i - n.grid[1] : i + n.grid[1] : i, s = this.originalPageX + Math.round((o - this.originalPageX) / n.grid[0]) * n.grid[0], o = this.containment ? s - this.offset.click.left >= this.containment[0] && s - this.offset.click.left <= this.containment[2] ? s : s - this.offset.click.left >= this.containment[0] ? s - n.grid[0] : s + n.grid[0] : s)), {
                top: a - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : h ? 0 : r.scrollTop()),
                left: o - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : h ? 0 : r.scrollLeft())
            }
        },
        _rearrange: function(t, e, i, s) {
            i ? i[0].appendChild(this.placeholder[0]) : e.item[0].parentNode.insertBefore(this.placeholder[0], "down" === this.direction ? e.item[0] : e.item[0].nextSibling), this.counter = this.counter ? ++this.counter : 1;
            var n = this.counter;
            this._delay(function() {
                n === this.counter && this.refreshPositions(!s)
            })
        },
        _clear: function(t, e) {
            function i(t, e, i) {
                return function(s) {
                    i._trigger(t, s, e._uiHash(e))
                }
            }
            this.reverting = !1;
            var s, n = [];
            if (!this._noFinalSort && this.currentItem.parent().length && this.placeholder.before(this.currentItem), this._noFinalSort = null, this.helper[0] === this.currentItem[0]) {
                for (s in this._storedCSS)("auto" === this._storedCSS[s] || "static" === this._storedCSS[s]) && (this._storedCSS[s] = "");
                this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")
            } else this.currentItem.show();
            for (this.fromOutside && !e && n.push(function(t) {
                    this._trigger("receive", t, this._uiHash(this.fromOutside))
                }), !this.fromOutside && this.domPosition.prev === this.currentItem.prev().not(".ui-sortable-helper")[0] && this.domPosition.parent === this.currentItem.parent()[0] || e || n.push(function(t) {
                    this._trigger("update", t, this._uiHash())
                }), this !== this.currentContainer && (e || (n.push(function(t) {
                    this._trigger("remove", t, this._uiHash())
                }), n.push(function(t) {
                    return function(e) {
                        t._trigger("receive", e, this._uiHash(this))
                    }
                }.call(this, this.currentContainer)), n.push(function(t) {
                    return function(e) {
                        t._trigger("update", e, this._uiHash(this))
                    }
                }.call(this, this.currentContainer)))), s = this.containers.length - 1; s >= 0; s--) e || n.push(i("deactivate", this, this.containers[s])), this.containers[s].containerCache.over && (n.push(i("out", this, this.containers[s])), this.containers[s].containerCache.over = 0);
            if (this.storedCursor && (this.document.find("body").css("cursor", this.storedCursor), this.storedStylesheet.remove()), this._storedOpacity && this.helper.css("opacity", this._storedOpacity), this._storedZIndex && this.helper.css("zIndex", "auto" === this._storedZIndex ? "" : this._storedZIndex), this.dragging = !1, this.cancelHelperRemoval) {
                if (!e) {
                    for (this._trigger("beforeStop", t, this._uiHash()), s = 0; n.length > s; s++) n[s].call(this, t);
                    this._trigger("stop", t, this._uiHash())
                }
                return this.fromOutside = !1, !1
            }
            if (e || this._trigger("beforeStop", t, this._uiHash()), this.placeholder[0].parentNode.removeChild(this.placeholder[0]), this.helper[0] !== this.currentItem[0] && this.helper.remove(), this.helper = null, !e) {
                for (s = 0; n.length > s; s++) n[s].call(this, t);
                this._trigger("stop", t, this._uiHash())
            }
            return this.fromOutside = !1, !0
        },
        _trigger: function() {
            t.Widget.prototype._trigger.apply(this, arguments) === !1 && this.cancel()
        },
        _uiHash: function(e) {
            var i = e || this;
            return {
                helper: i.helper,
                placeholder: i.placeholder || t([]),
                position: i.position,
                originalPosition: i.originalPosition,
                offset: i.positionAbs,
                item: i.currentItem,
                sender: e ? e.element : null
            }
        }
    })
})(jQuery);
//COMMENT: jquery.ui.sortable.js

/* imzee settings */
$.extend($.ui.dialog.prototype.options, {
    modal: true,
    draggable: false,
    resizable: false,
    dialogClass: "bgw ui-dialog_orng"
});
$.extend($.ui.tooltip.prototype.options, {
    position: {
        my: "left-40 bottom-10",
        at: "center top",
        collision: 'none',
        using: function(position, feedback) {
            $(this).append("<div class='bgc tt_arrow'></div>");
            $(this).css(position);
        }
    },
    show: {
        effect: "none"
    },
    hide: {
        effect: "none"
    }
});
/* imzee settings */


//COMMENT: common_lang.js
var glang_autoSuggest_emptyText = "No results found";
var glang_autoSuggest_limitText = "No More Selections Are Allowed";
var loading_txt = "Loading...";
sortable_selector = '';
sortable_key = '';
//COMMENT: common_lang.js
//COMMENT: common.js
/* autofill code */
var typing_lang = "en";
var combo_source_array = [];
load_combo_data = function(city_id, callback) {
    var file_id = city_id || $("#tab_city").val();
    data_index = "cat_json_object_" + typing_lang;
    if (typeof(file_id) !== 'undefined' && file_id != "") {
        if (typeof(window[data_index]) == 'undefined') {
            window[data_index] = [];
        }
        if (typeof(window[data_index][file_id]) == 'undefined') {
            var cache_url = ajax_location_url + "/ajax_category_list_" + file_id + "_" + typing_lang + ".js";
            /* 			$.getScript(cache_url,function(){
            				combo_source_array = window[data_index][file_id];
            				if(callback) callback.call();
            			}); */
            $.ajax({
                url: cache_url + "?v=" + ajax_cache_ver,
                dataType: "script",
                cache: true,
            }).done(function(html) {
                combo_source_array = window[data_index][file_id];
                if (callback) callback.call();
            });
        } else {
            combo_source_array = window[data_index][file_id];
            if (callback) callback.call();
        }
    }
};

function get_data(opts) {
    if (opts.datasource == "category")
        return combo_source_array;
}
$(".sel_box select").live("change", function() {
    if (typeof $(this).find("option:selected").attr('data-cval') != "undefined")
        var cb_sel_val = $(this).find("option:selected").attr('data-cval');
    else
        var cb_sel_val = $(this).find("option:selected").html();
    $("#" + this.name + "_txt").html(cb_sel_val);
});
$(document).ready(function() {
    $(".autofilter").each(function(i, obj) {
        options = $.parseJSON(I(obj.id.replace("_input", "") + "_data").value);
        txt = ($(obj).attr("disabled") && options.disabled_txt) ? options.disabled_txt : options.default_txt;
        $(obj).val(txt);
    });
    $('.autofilter').live("focus", function() {
        $(this).val("").addClass("focus");
    });
    $('.autofilter').live("blur", function() {
        options = $.parseJSON(I(this.id.replace("_input", "") + "_data").value);

        if (options == null)
            txt = "Enter Location Here";
        else {
            val = $("#" + this.id.replace("_input", "")).val();
            if ($(this).attr("disabled"))
                txt = options.disabled_txt;
            else if (val && options.enter_more_txt)
                txt = options.enter_more_txt;
            else
                txt = options.default_txt;
        }

        $(this).val(txt).removeClass("focus");
    });

    $("#searchable_text").keydown(function(e) {
        if (e.which == 13) $("#search_client").click();
    });

    $('#city-button').live("click", function() {
        var enabled_list_count = $('#city-menu').find('li.ui-menu-item').length - $('#city-menu').find('li.ui-state-disabled').length;

        $('.dropdown-ui #city-menu li:nth-child(' + parseInt(enabled_list_count + 1) + ')').addClass('note_msg_1')
        $('.dropdown-ui #city-menu li:nth-child(' + parseInt(enabled_list_count + 1) + ') div').addClass('note_msg_1_div');

        $('.dropdown-ui #city-menu li:nth-child(' + parseInt(enabled_list_count + 2) + ')').addClass('note_msg_2');
        $('.dropdown-ui #city-menu li:nth-child(' + parseInt(enabled_list_count + 2) + ') div').addClass('note_msg_2_div');

    });

});

function overlib_info(input, txt, STICKY) {
    /* 	offset = object_rect(input);
    	if($(input).attr("data-blur")==undefined )
    	{
    		if(input.tagName=="INPUT")
    			$(input).attr("data-blur",1).blur(function(e){ I("overDiv").style.visibility = "hidden"; });
    		else
    			$(input).attr("data-blur",1).mouseleave(function(e){ I("overDiv").style.visibility = "hidden"; });
    	}
    	overlib(txt,STICKY,FIXX,offset.x,FIXY,offset.yy+4);
    	return; */
    $(input).attr("title", "").tooltip({
        tooltipClass: "ttg phone_tooltip_cls",
        position: {
            my: "left-40 bottom-10",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: txt
    }).tooltip("open");
}
//COMMENT: common.js





ie_8 = ($.browser.msie && parseInt($.browser.version, 10) === 8);

function jsAjax(url, callback, cache) {
    /*     var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    			if(callback) callback(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send(); */
    $.ajax({
        url: url,
        success: function(responseText) {
            if (callback) callback(responseText);
        },
        cache: cache
    });
}

function FileUploadedCallback(up, file, info, block) {
    result = info.response.split("@");
    uploaderbox = $(".uploaderbox_" + block);
    uploaderbox.removeClass("limit_exceeds noItems").addClass(result[1]);
    uploaderbox.find("ul").html(result[3]);
    //
    selector = $(".uploaderbox_" + block).find('ul.list_sortable').data('sortable_selector');
    set_number_text(selector);
    //
    if (result[0] == "1")
        uploaderbox.find(".message_box_files").hide();
    else
        uploaderbox.find(".message_box_files").html(result[2]).show();
    if (result[1] == "limit_exceeds")
        up.stop(); //COMMENT: stop frequent uploads
    return result;
}

function multi_files_iframe_callback(data) {
    class_name = (data.remaining > 0) ? "" : "limit_exceeds";
    $("#UploadImages").removeClass("limit_exceeds noItems").addClass(class_name);
    $("#images_list").html(data.thumbs_html);
    if (data.status != 1) {
        $("#UploadImages .message_box_files").html(data.output_msg).show();
    }
    $("#images_ids,#UploadImages [name=image_ids]").val(data.image_ids);
    $("#FileUpload").val("");
    var filebox = $("#filebox");
    filebox.find(".filecontrol_images").show();
    filebox.find(".uploading_images").hide();
    filebox.find(".images").val("");
    attach_evnts();
}

function open_div(chk) {
    if (chk.value != 'existing_user') {
        I('old_member').style.display = 'none';
        I('new_member').style.display = 'block';
    } else {
        I('old_member').style.display = 'block';
        I('new_member').style.display = 'none';
    }
}

function category_preFill(data_handler, opts) {
    city_id = $("#city").val();
    load_combo_data(city_id, function() {
        data_handler(combo_source_array);
        $("#location_id_input").removeAttr("disabled").blur();
    });
}

function empty(value, opts) {
    return /^[ \t\n]*$/.test(value) || value == "0" || value == undefined;
}
$(".infologo").live("mouseover", function() {
    $(this).attr("title", "").tooltip({
        tooltipClass: "ttg tooltip_info_cls1",
        position: {
            my: "left-37 bottom-10",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: function() {
            return this.firstChild.innerHTML;
        }
    }).tooltip("open");
});

function onchange_city(obj, load_city_childs) {
    city_id = obj.value;
    if (city_id && load_city_childs) {
        // console.log($("#loc_selector").val());
        jsAjax(request_url + "&get_city_childs=" + city_id + "&width=" + cat_combo_width + "&selected=" + $("#loc_selector").val() + "&v=" + ajax_cache_ver, function(str) {
            data = eval('(' + str + ')');
            $("#cat_selector").html(data.html);
        }, 1);
        return;
    }
    $("#location_id").val("");
    $("#as-selections-location_id").removeClass("single_sel").find(".as-selection-item").remove();
    location_change("location_id");
    if (city_id) {
        // check for cross city restriction
        city_ids = zone_city_id.split(',');
        if (zn_cross_city_restriction == 1) {
            if (zn_quota_checkbox_enabled == 1) {
                if (city_ids.indexOf(city_id) == -1) {
                    $(".zameen-checkbox-opacity").css("opacity", 0.5);
                    $('#zameen_checkbox').attr('checked', false);
                    $('#zameen_checkbox').val(0);
                    $("#zameen_checkbox").prop('disabled', true);
                    $('.city_rest_tooltip').css('display', 'inline-block');
                } else {
                    $(".zameen-checkbox-opacity").css("opacity", 1);
                    $('#zameen_checkbox').attr('checked', true);
                    $('#zameen_checkbox').val(1);
                    $("#zameen_checkbox").prop('disabled', false);
                    $('.city_rest_tooltip').css('display', 'none');
                }
            }
        }
        if (olx_cross_city_restriction == 1) {
            if (olx_quota_checkbox_enabled == 1) {
                if (city_ids.indexOf(city_id) == -1) {
                    $(".checkbox-opacity").css("opacity", .50);
                    $('#option1').attr('checked', false);
                    $("#option1").val(0);
                    $("#option1").prop('disabled', true);
                    $('.city_rest_tooltip').css('display', 'inline-block');
                } else {
                    $(".checkbox-opacity").css("opacity", 1);
                    $('#option1').attr('checked', true);
                    $("#option1").val(1);
                    $("#option1").prop('disabled', false);
                    $('.city_rest_tooltip').css('display', 'none');
                }
            }
        }
        area_unit = city_area_unit[city_id];
        if (area_unit == undefined)
            area_unit = city_area_unit['default'];
        $("#unit").val(area_unit).change();
        $("#location_id_input").removeClass("disabled").removeAttr("disabled").val(loading_txt);
        load_combo_data(city_id, function() {
            $("#location_id_input").blur();
        });
        $("#loc_selector_row").removeClass("empty_city").find("#loc_selector").val(""); //show loc_selector
        $("#cat_selector").html("<img class='loading' src='" + paths.images_css + "/loading1.gif' style='margin:7px;' />");
        jsAjax(request_url + "&get_city_childs=" + city_id + "&width=" + cat_combo_width + "&v=" + ajax_cache_ver, function(str) {
            data = eval('(' + str + ')');
            $("#cat_selector").html(data.html);
        }, 1);
    } else {
        $("#location_id_input").addClass("disabled").attr('disabled', 'disabled').blur();
        $("#loc_selector_row").addClass("empty_city").find("#loc_selector").val("");
    }

    empty_form('city');
}
$("#loc_selector").live("change", function() {
    location_change("loc_selector");

    empty_form('loc_selector');
});

function location_change(input_id) {
    loc = I(input_id).value.split(",")[0];
    if (loc == "") {
        //COMMENT: pick with non empty value from type cat box and combo
        loc_1 = $("#location_id").val().split(",")[0];
        loc_2 = $("#loc_selector").val().split(",")[0];

        if (loc_1 == "" && loc_2 != "")
            loc = loc_2;
        else if (loc_2 == "" && loc_1 != "")
            loc = loc_1;

    }
    $("#mylatitude,#mylatitude").val("");
    $("#span_breadcrumb").html("");
    if (loc) {
        __get_cat_info(loc);
        $("#map_div").show();
        $("#last_location").val(loc).trigger("change");
    } else {
        $("#map_div").hide();
        $("#last_location").val("").trigger("change");
    }

    empty_form('last_location');

    // Get Plot number
    getPlotNumber();
}
$(document).ready(function() {
    if ($("#location_id_input").length) {
        // console.log($("#location_id_input").length);
        $("#location_id_input").autoSuggest(get_data, {
            selectionLimit: 1,
            keyboard: 1,
            preFill: category_preFill,
            resultClick: function(event, ui) {
                location_change("location_id")
            },

            selectionRemoved: function(elem) {
                elem.remove();
                location_change("location_id")
            }
        });
    }

});

function cat_sel_box_change(obj) {
    last_cat = $("#_cat_selector_" + (parseInt(obj.name.replace("_cat_selector_", "")) - 1)).val();
    loc_value = obj.value;
    container = $(obj).parent().next();

    if (loc_value == "") //COMMENT: 'any' clicked pick previous value
    {
        $("#loc_selector").val(last_cat).trigger("change");
        container.html("");
        return;
    }
    if (loc_value) {
        $("#loc_selector").val(loc_value).trigger("change");
        container.html("<img class='loading' src='" + paths.images_css + "/loading1.gif' />");
        // Get Cities
        jsAjax(request_url + "&get_city_childs=" + loc_value + "&width=" + cat_combo_width + "&v=" + ajax_cache_ver, function(str) {
            data = eval('(' + str + ')');
            combohtml = $(".sboxarrow").eq(0).clone().show().after(data.html);
            if (data.child_count != 0)
                container.html(combohtml);
            else
                container.html("");
        }, 1);
    } else {
        $("#loc_selector").val("").trigger("change");
        container.html("");
    }

    // // on location change clear price n give error
    // empty_price_error();
}

// Get Plot Numbers for Residencial and commercial plots
function getPlotNumber() {
    loc_value = $("#last_location").val();

    plot_container = $('#sp_plot');
    plot_container.find('.container').remove();
    plot_container.append('<span class="container"></span>');

    ptype = $("#ptype").val();
    type = $("#type").val();

    plot_container.find('span#plot_no_sel_box').remove();
    plot_container.find('input#plot_no').attr('disabled', false).css('display', 'block');

    if (loc_value) {
        if (ptype == 2 && (type == 11 || type == 12)) {
            plot_container.find('.container').html("<img class='loading' src='" + paths.images_css + "/loading1.gif' />");

            jsAjax(request_url + "&get_plot_numbers=1&loc_value=" + loc_value + "&type=" + type + "&width=" + cat_combo_width + "&v=" + ajax_cache_ver, function(str) {
                data = eval('(' + str + ')');
                plot_container.find('.container').html('');
                if (data.show_input != 0) {
                    plot_container.find('.container').remove();
                    plot_container.find('input#plot_no').attr('disabled', true).css('display', 'none');
                    plot_container.append(data.html);
                    //
                    if (edit_property_page == 1) {
                        plot_no = $('input#plot_no').val();
                        if (plot_no != "" && $("select#plot_no option[value='" + plot_no + "']").length > 0)
                            $('select#plot_no').val(plot_no).change();
                    }
                }
            }, 1);
        }
    }
}

$('select#plot_no').live("change", function() {
    lat_lng = $(this).find(':selected').data("latlng").split(',');
    title = $(this).find(':selected').data("title");

    clatitude = parseFloat(lat_lng[1]);
    clongitude = parseFloat(lat_lng[0]);

    update_query_field("#map_field", {
        latitude: clatitude,
        longitude: clongitude,
        cat_title: title,
        msg_index: 'default_cat',
        zoom: 14
    });
    update_query_field("#default_params", {
        latitude: clatitude,
        longitude: clongitude,
        cat_title: title,
        msg_index: 'default_cat',
        zoom: 14
    });
    google_image(map_params.small_map, {
        latitude: clatitude,
        longitude: clongitude
    });

});

$("#price").live("keyup", function() {
    text_div = $(".price_text").eq(0);
    if (/^[0-9]+$/.test(this.value)) {
        temp_purpose = $("#purpose").val();
        type_value = $("#type").val();
        if (temp_purpose == "" || type_value == "") return text_div.html(getPriceText(this.value));
        config_options = config_options_data[temp_purpose] || {};
        min_price = config_options[type_value].min_price;
        if (this.value < min_price)
            text_div.html(error_messages.min_price);
        else
            text_div.html(getPriceText(this.value));
    } else {
        this.value = this.value.replace(/\D/g, '');
    }


});
$("#rental").live("keyup", function() {
    text_div = $(".price_text").eq(1);
    if (/^[0-9]+$/.test(this.value)) {
        temp_purpose = $("#purpose").val();
        type_value = $("#type").val();
        if (temp_purpose == "" || type_value == "") return text_div.html(getPriceText(this.value));
        config_options = config_options_data[temp_purpose] || {};
        min_rental = config_options_data['2'].all.rental;
        if (this.value < min_rental)
            text_div.html(error_messages.min_rental);
        else
            text_div.html(getPriceText(this.value));
    } else {
        this.value = this.value.replace(/\D/g, '');
        //text_div.html("&nbsp;");
    }


    // invoke_price_check_api();

});
$("#rental").live("change", function() {
    $("#security_deposit,#agency_commission_tenant,#agency_commision_landlord,#advance_rent").trigger("blur");
});

function pushBtnClick(obj, name, value) {
    // reset plot number field
    $('#sp_plot').find('span#plot_no_sel_box').remove();
    $('#sp_plot').find('input#plot_no').attr('disabled', false).css('display', 'block');

    if (typeof obj == "string") //COMMENT: when called programically with field name
    {
        obj = I(obj);
        onchange_method = window[obj.name + "_onchange"];
        if (typeof onchange_method == "function") onchange_method.call(0, obj, obj.value);
        return;
    }
    pushBtnDiv = $(obj).parent();
    pushBtnDiv.find(".pushBtnLabel").removeClass("checked").filter(obj).addClass("checked");
    input = pushBtnDiv.find("input").val(value).get(0);
    onchange_method = window[name + "_onchange"];
    if (typeof onchange_method == "function") onchange_method.call(0, input, value);

    // on purpose or type change empty price/rental and price text
    if (name == "purpose") {

        empty_form('purpose');
    } else if (name == "ptype" || name == "type" || name == "wanted_for")
        empty_form('type');


    var buyCredits = $("#hidden_buy_credits").val();
    var rentCredits = $("#hidden_rent_credits").val();

    if (rentCredits < 1 && value == 2 && name == "purpose") {
        $('#option1').attr('checked', false);
        $("#option1").prop('disabled', true);
        if (is_new_olx_system == 0)
            $("#credit-type").text("Rent");
        $(".olx_credits_error_msg").show();
        $(".checkbox-opacity").css("opacity", .50);
        $("#option1").val(0);
        olx_quota_checkbox_enabled = 0;
    }
    if (rentCredits > 1 && value == 2 && name == "purpose") {
        $('#option1').attr('checked', true);
        $("#option1").prop('disabled', false);
        $(".olx_credits_error_msg").hide();
        $(".checkbox-opacity").css("opacity", 1);
        $("#option1").val(1);
        olx_quota_checkbox_enabled = 1;
    }
    if (buyCredits < 1 && value == 1 && name == "purpose") {
        $('#option1').attr('checked', false);
        $("#option1").prop('disabled', true);
        if (is_new_olx_system == 0)
            $("#credit-type").text("Buy");
        $(".olx_credits_error_msg").show();
        $(".checkbox-opacity").css("opacity", .50);
        $("#option1").val(0);
        olx_quota_checkbox_enabled = 0;
    }
    if (buyCredits > 1 && value == 1 && name == "purpose") {
        $('#option1').attr('checked', true);
        $("#option1").prop('disabled', false);
        $(".checkbox-opacity").css("opacity", 1);
        $("#option1").val(1);
        $(".olx_credits_error_msg").hide();
        olx_quota_checkbox_enabled = 1;
    }
}

function show_hide_options() {
    purpose_value = $("#purpose").val();
    type_value = $("#type").val() || "all";
    config_options_ = config_options_data[purpose_value] || {};
    config_options = config_options_[type_value] || {};
    $("#div_beds,#div_bathrooms,#div_ownership_status").hide();
    if (config_options.beds) $("#div_beds").show();
    if (config_options.baths) $("#div_bathrooms").show();
    if (config_options.ow_status) $("#div_ownership_status").show();
    if (config_options.oc_status) $("#div_oc_status").show();


    address_fields = $("#sp_unit,#sp_street,#sp_floor,#sp_plot").hide().removeClass("visible");
    if (config_options.label) $("#lb_unit").html(config_options.label);
    if (config_options.show_unit) $("#sp_unit").show().addClass("visible");
    if (config_options.show_street) $("#sp_street").show().addClass("visible");
    if (config_options.show_floor) $("#sp_floor").show().addClass("visible");
    if (config_options.show_plot) $("#sp_plot").show().addClass("visible");
    $("#div_address").show();
    if (address_fields.filter(".visible").length == 0)
        $("#div_address").hide();

    $("#div_finance").hide();
    if (config_options.show_finance) $("#div_finance").show();

    $("#span_finance").hide();
    if ($("#finance_available").val() == 'yes')
        $("#span_finance").show();


    $("#span_construction").hide();
    if ($("#const_status").val() == 'Under Construction')
        $("#span_construction").show();

    $("#span_rented_till").hide();
    if ($("#occupancy_status").val() == 'rented')
        $("#span_rented_till").show();

    $("#span_mortgage_approved").hide();
    if ($("#mortgage_approved").val() == 'Yes')
        $("#span_mortgage_approved").show();
    wanted_fileds = $("#div_wanted_status,#div_mode_of_funds").hide();
    $("#div_mortgage_approved").hide();
    if (purpose_value == 3) {
        wanted_fileds.show();
        if ($("#mode_of_funds").val() == 'Mortgage')
            $("#div_mortgage_approved").show();
    }
    $("#div_const_status").hide();
    if (purpose_value == 1) {
        $("#div_const_status").show();
        $(".div_instalments").show();
        $('#property_box_heading').text('PROPERTY SPECS AND PRICE');
        $('#Uploaddocuments').show();
    }
    if (purpose_value == 2) {
        $(".div_oc_status ").show();
        $(".div_instalments").hide();
        $('.instalments-box').removeClass('display-block');
        //
        $("li.instalment_status").removeClass('checked');
        $('input[name="instalment_status"]').val('');
        $('#property_box_heading').text('PROPERTY SPECS');
        $('#Uploaddocuments').hide();
    }

    // Possession Available box show on specific Property Type
    if (purpose_value == 1 && $.inArray(type_value, ['8', '9', '11', '12', '15', '20', '25']) != -1) {
        $(".div_possession").show();
    } else {
        $(".div_possession").hide();
        $("li.possession_available").removeClass('checked');
        $('input[name="possession_available"]').val('');
    }
}
var quota_error = 0;

function purpose_onchange(obj, value) {
    if (value == 3) {
        $(".olx_credits_error_msg").hide();
        $(".olx_credits_box").hide();
        $(".olx_checkbox").hide();
    } else {
        $(".olx_credits_box").show();
        $(".olx_checkbox").show();
    }
    purposeVal = (value == "") ? 1 : value;
    $(".pheading").hide().eq(purposeVal - 1).show();
    show_hide_options();
    $(".div_wantedfor").toggle(purposeVal == 3);
    $("#rental_prices").toggle(purposeVal == 2);
    $("#add_price_breakdown_div").toggle(purposeVal == 1);
    $("#add_prop_main").removeClass("purpose_1 purpose_2 purpose_3").addClass("purpose_" + purposeVal);
    fields_on_blur(obj);

    /*=================================*/
    check_olx_credits();
    check_zameen_credits();
    /*=================================*/

    $("#no_quota_message").hide();
    quota_error = 0;
    if ($("#selector").val() == "") //new listing and user selects purpose then check quota
    {
        if (quota_array[purposeVal] == false) {
            $("#no_quota_message").show();
            quota_error = 1;
            return;
        }
    } else if (value != old_purpose) //user changes purpose of existing listing for example from wanted to sale then check quota
    {
        if (quota_array[purposeVal] == false) {
            $("#no_quota_message").show();
            quota_error = 1;
            return;
        }
    }

}

function wanted_for_onchange(obj, value) {
    fields_on_blur(obj);
}

function ptype_onchange(obj, value) {
    $("#sub_type_box").html($("#hidden_type_" + value).html());
    $(".div_type").show();
    fields_on_blur(obj);
}

function type_onchange(obj, value) {
    fields_on_blur(obj);
    type_value = value;
    if (type_value == "")
        $(".div_type").hide();
    else
        $(".div_type").show();
    show_hide_options();
    if (type_value == "" && property_type == "") return;
    jsAjax(request_url + "&get_features=1&type=" + type_value + "&property_type=" + property_type, function(str) {
        data = eval('(' + str + ')');
        features_popup.html(data.html);
        $(".features_count").html(data.count);

        eq_index = (data.count == 0) ? 0 : 1;
        $(".div_features").hide().eq(eq_index).show();

        type_old = type_value;
        $(".add_property_form").removeClass("NoFeatures");
        if (data.html == '') {
            $(".add_property_form").addClass("NoFeatures");
        }
    });
}

function form_types_onchange(obj, value) {
    $("#add_prop_main").removeClass("QuickSubmision AdvanceSubmision");
    if (value == "basic")
        $("#add_prop_main").addClass("QuickSubmision");
    else
        $("#add_prop_main").addClass("AdvanceSubmision");
    document.cookie = 'form_type_new=' + value + '; path=/'
}

function highlight(field_name, err) {
    form = $(".add_property_form");
    //COMMENT: d highlight code
    field = form.find("[name=" + field_name + "]").removeClass("emptyfield");
    sel_box = form.find("#" + field_name + "_sel_box").removeClass("emptyfield");
    field_by_id = form.find("#" + field_name).removeClass("emptyfield");
    pushBtnLabel = form.find("#" + field_name + "_push_buttons .pushBtnLabel").removeClass("emptyfield");
    //COMMENT: highlight code
    if (err) {
        field.addClass('emptyfield');
        field_by_id.addClass('emptyfield');
        sel_box.addClass('emptyfield');
        pushBtnLabel.addClass('emptyfield');
    }
}
var checkOnBlur = 0;

function fields_on_blur(field) {
    if (checkOnBlur) {
        validate_form();
    }
}
$("#last_location").live("change", function() {
    fields_on_blur(this);

    // // empty price on change of search
    // empty_price_error();
});
$(document).ready(function() {
    $('#full-body-overlay').click(function() {
        removePopup();
    });
    $(".credit-runout-featured.buy-olx-popup").click(function(event) {
        event.stopPropagation();
    });

    var selector = $('#plat_property_id').val();
    var userId = $('#plat_user_id').val();
    var api_hits = 0;
    if (step_value == 5) {
        var myInterval = setInterval(function() {
            if (olx_listing_posted == 0 && platform_olx == "true") {
                $(".olx-no-credits-box.loader").show();
                $.post(request_url + "&check_listing_posted_on_olx=1" + "&user_id=" + userId + "&listing_id=" + selector, userId, function(str) {
                    if (++api_hits === 3) {
                        clearInterval(myInterval);
                    }
                    str = str.trim();
                    var obj = jQuery.parseJSON(str);
                    if (obj == "posted") {
                        $("..olx-no-credits-box.loader").hide();
                        clearInterval(myInterval);
                        location.reload();
                    } else {
                        $(".olx-no-credits-box.loader").show();
                        //show  olx loader ..
                    }
                });

            }
        }, 3000);
    }
    var value = $('#listing_owner').val();
    if (cuipplf == 1) {
        if ($("#listing_purpose").length > 0)
            var purpose = $("#listing_purpose").val();
        else
            var purpose = $("#purpose").val();
        $.post(request_url + "&check_olx_credits=1" + "&user_id=" + value + "&purpose=" + purpose, value, function(str) {
            str = str.trim();
            var obj = jQuery.parseJSON(str);
            var buy_credits = obj.buy_credits;
            var rent_credits = obj.rent_credits;
            var olx_basic_buy_quota = obj.olx_basic_buy;
            var olx_basic_rent_quota = obj.olx_basic_rent;
            var purpose = $('#purpose').val();
            $("#hidden_buy_credits").val(buy_credits);
            $("#hidden_rent_credits").val(rent_credits);
            if ($("#listing_purpose").length > 0)
                var listing_purpose = $("#listing_purpose").val();
            else
                var listing_purpose = $("#purpose").val();
            if (step_value == 5) {
                if (listing_purpose == 1 && buy_credits >= 1) {
                    $(".olx-post-property").show();
                    $(".olx-no-credits-box").hide();
                }
                if (listing_purpose == 2 && rent_credits >= 1) {

                    $(".olx-post-property").show();
                    $(".olx-no-credits-box").hide();
                }
                if (is_new_olx_system && listing_purpose == 1 && olx_basic_buy_quota >= 1) {
                    $(".olx-post-property").show();
                    $(".olx-no-credits-box").hide();
                }
                if (is_new_olx_system && listing_purpose == 2 && olx_basic_rent_quota >= 1) {
                    $(".olx-post-property").show();
                    $(".olx-no-credits-box").hide();
                }
            }

            if (obj === false) {

                $(".olx_credits_error_msg").show();
                $(".contact-for-credit").html("User not found on OLX. Contact us to add your user to OLX. <br><br> <b> Call 0800-ZAMEEN (92633) </b>");
                $('#option1').attr('checked', false);
                $(".checkbox-opacity").css("opacity", .50);
                $("#option1").prop('disabled', true);
                $("#option1").val(0);
                olx_quota_checkbox_enabled = 0;
                return;
            }
            if (buy_credits === 0 && rent_credits === 0) {
                $(".olx_credits_error_msg").show();
                $("#option1").prop('disabled', true);
                $('#option1').attr('checked', false);
                $("#option1").val(0);
                olx_quota_checkbox_enabled = 0;
                $(".checkbox-opacity").css("opacity", 0.50);
                if (listing_purpose == 2) {
                    $('.olx_checkbox .credits-available-plisting').text('0 Rent Credits Available');
                    if (is_new_olx_system)
                        $('.olx_checkbox .credits-available-plisting').text('0 Quota Available');
                }
                if (listing_purpose == 1) {
                    $('.olx_checkbox .credits-available-plisting').text('0 Buy Credits Available');
                    if (is_new_olx_system)
                        $('.olx_checkbox .credits-available-plisting').text('0 Quota Available');
                }
                if (quota_array[1] == 0 && quota_array[2] == 0 && quota_array[3] == 0) {
                    $('.post-listing-credit-box').slideDown(100);
                }
                return;
            }

            if (buy_credits === 0 && (rent_credits > 1 || olx_basic_rent_quota)) {
                $(".olx_credits_error_msg").show();
                if (is_new_olx_system == 0)
                    $("#credit-type").text("Buy");
                $("#option1").prop('disabled', true);
                $('#option1').attr('checked', false);
                $("#option1").val(0);
                olx_quota_checkbox_enabled = 0;
                $(".checkbox-opacity").css("opacity", 0.50);
                $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Rent Credits Available");
                if (is_new_olx_system)
                    $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Quota Available");
                return;
            }
            if ((buy_credits > 1 || olx_basic_buy_quota > 1)) {
                $(".checkbox-opacity").css("opacity", 1);
                $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Buy Credits Available");
                if (is_new_olx_system)
                    $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Quota Available");
                //$("#rent_credits").text(rent_credits);
                $("#option1").prop('disabled', false);
                $('#option1').attr('checked', true);
                olx_quota_checkbox_enabled = 1;
            }
            if (is_new_olx_system) {
                //buy quota and rent quota both will be the same as per 
                var remaining_quota_value = buy_credits;

                if (remaining_quota_value < 0 && agency_user_quota[value]['olx']["remaining_basic_" + purpose] >= 1)
                    $('.olx_checkbox .credits-available-plisting').text("Quota Available");
            }
        });
    }
});

function active_zameen_checkbox() {
    $(".zameen-checkbox-opacity").css("opacity", 1);
    $('#zameen_checkbox').attr('checked', true);
    $('#zameen_checkbox').val(1);
    $("#zameen_checkbox").prop('disabled', false);
    $('.zameen_credits_error_msg').hide();
    $('.post-listing-credit-box').slideUp(100);
    zn_quota_checkbox_enabled = 1;
}

function deactivate_zameen_checkbox() {
    $(".zameen-checkbox-opacity").css("opacity", 0.5);
    $('#zameen_checkbox').attr('checked', false);
    $('#zameen_checkbox').val(0);
    $("#zameen_checkbox").prop('disabled', true);
    $('.zameen_credits_error_msg').show();
    zn_quota_checkbox_enabled = 0;
}

function reset_city_dropdown(platform) {
    return false;
    if (city_combo_dropdown2 != '') {
        $jQuery_1_12_4("#city").selectmenu('destroy');

        // if( platform == 1 )
        $('#city').html(city_combo_dropdown1);
        // else
        // 	$('#city').html(city_combo_dropdown2);

        $jQuery_1_12_4("#city").selectmenu({
            appendTo: ".dropdown-ui",
        });

        $jQuery_1_12_4("#city").on('selectmenuchange', function() {
            onchange_city(this);
        });
    }
}

function check_zameen_credits_for_rent_sale() {
    var check = $('#zameen_checkbox').is(':checked');
    if (check == true) {
        var purpose = $('#purpose').val();
        var value = $('#listing_owner').val();

        if (agency_user_quota[value]["remaining_basic_" + purpose] > 0) {
            reset_city_dropdown(1);
            active_zameen_checkbox();
            invoke_price_check_api();
        } else {
            reset_city_dropdown(2);
            deactivate_zameen_checkbox();
        }
    } else {
        reset_city_dropdown(2);
        $('#price_notification').hide();
    }
}

function zameen_quota_message(quota, purpose) {
    if (purpose == 1)
        purpose_label = 'Sale';
    if (purpose == 2)
        purpose_label = 'Rent';
    if (purpose == 3)
        purpose_label = 'Wanted';
    if (is_new_olx_system)
        purpose_label = '';
    $('#zameen-credit-type').text(purpose_label);

    return quota + " " + purpose_label + " Quota Available";
}

function check_zameen_credits() {
    var value = $('#listing_owner').val();
    var purpose = $('#purpose').val();
    if (agency_user_quota[value]) {
        // use quota from here
        var remaining_quota_value = agency_user_quota[value]["quota_standard"] - agency_user_quota[value]["total_used"];
        if (agency_user_quota[value]["premium_user"] == 0)
            remaining_quota_value = agency_user_quota[value]["remaining_basic_" + purpose];
        var quota_count_label = remaining_quota_value.toFixed(2);
        if (remaining_quota_value < 1 && agency_user_quota[value]["remaining_basic_" + purpose] >= 1) {
            remaining_quota_value = 1;
            quota_count_label = '';
        }

        if (remaining_quota_value >= 1) {
            $('.zameen_checkbox .credits-available-plisting').text(zameen_quota_message(quota_count_label, purpose));
            active_zameen_checkbox();
        } else {
            $('.zameen_checkbox .credits-available-plisting').text(zameen_quota_message(0, purpose));
            deactivate_zameen_checkbox();
        }
    } else {
        $.post(request_url + "&get_user_quota=1" + "&user_id=" + value, value, function(str) {
            str = str.trim();
            agency_user_quota[value] = jQuery.parseJSON(str);

            var remaining_quota_value = agency_user_quota[value]["quota_standard"] - agency_user_quota[value]["total_used"];
            var quota_count_label = remaining_quota_value.toFixed(2);
            if (remaining_quota_value < 1 && agency_user_quota[value]["remaining_basic_" + purpose] >= 1) {
                remaining_quota_value = 1;
                quota_count_label = '';
            }

            if (remaining_quota_value >= 1) {
                $('.zameen_checkbox .credits-available-plisting').text(zameen_quota_message(quota_count_label, purpose));
                active_zameen_checkbox();
            } else {
                $('.zameen_checkbox .credits-available-plisting').text(zameen_quota_message(0, purpose));
                deactivate_zameen_checkbox();
            }
        });
    }

}

function ConfirmListingFeatured(property_details) {

    if (property_details == "nocredits") {
        $('#buy-olx-credit-wrapper').fadeIn('fast');

    } else {

        var txt_msg = "<div id='div_ch_status'>Are you sure you want to mark this property as Featured? Once you turn this property Featured, 1 credit will be deducted from your credits.<br /><br /><center><span class='bg_orng'  onclick='make_listing_feature(" + property_details + ");' > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";

        show_popup("Make Featured", txt_msg);
    }
}

function user_has_any_zameen_quota(userid) {
    if ((typeof agency_user_quota[userid]['remaining_basic_1'] !== 'undefined' && agency_user_quota[userid]['remaining_basic_1']) || (typeof agency_user_quota[userid]['remaining_basic_2'] !== 'undefined' && agency_user_quota[userid]['remaining_basic_2']) || (typeof agency_user_quota[userid]['remaining_basic_3'] !== 'undefined' && agency_user_quota[userid]['remaining_basic_3']))
        return true;
    return false;
}

function check_olx_credits() {
    var value = $('#listing_owner').val();
    var purpose = $('#purpose').val();
    $.post(request_url + "&check_olx_credits=1" + "&user_id=" + value + "&purpose=" + purpose, value, function(str) {
        str = str.trim();
        var obj = jQuery.parseJSON(str);
        var buy_credits = obj.buy_credits;
        var rent_credits = obj.rent_credits;
        var olx_basic_buy_quota = obj.olx_basic_buy;
        var olx_basic_rent_quota = obj.olx_basic_rent;
        $("#hidden_buy_credits").val(buy_credits);
        $("#hidden_rent_credits").val(rent_credits);

        if ((rent_credits == 0 && buy_credits == 0) && (!user_has_any_zameen_quota(value))) {
            $('.post-listing-credit-box').slideDown(100);
        }

        if (obj == false) {
            $(".olx_credits_error_msg").show();
            $(".contact-for-credit").html("User not found on OLX. Contact us to add your user to OLX.<br> <span class='tel-no'><b> Call 0800-ZAMEEN (92633)</b></span>");
            $('#option1').attr('checked', false);
            $(".checkbox-opacity").css("opacity", .50);
            $("#option1").prop('disabled', true);
            $("#option1").val(0);
            olx_quota_checkbox_enabled = 0;
            $("#buy_credits").text(0);
            $("#rent_credits").text(0);
            if (purpose == 2) {
                $('.olx_checkbox .credits-available-plisting').text("0 Rent Credits Available");
                if (is_new_olx_system)
                    $('.olx_checkbox .credits-available-plisting').text("0 Quota Available");
            } else {
                $('.olx_checkbox .credits-available-plisting').text("0 Buy Credits Available");
                if (is_new_olx_system)
                    $('.olx_checkbox .credits-available-plisting').text("0 Quota Available");
            }
            return;
        }
        if (purpose == 2 && rent_credits == 0) {
            $(".olx_credits_error_msg").show();
            if (is_new_olx_system == 0)
                $("#credit-type").text("Rent");
            $(".checkbox-opacity").css("opacity", .50);
            $('#option1').attr('checked', false);
            $('#option1').val(0);
            $("#option1").prop('disabled', true);
            olx_quota_checkbox_enabled = 0;
            $("#buy_credits").text(buy_credits);
            $("#rent_credits").text(rent_credits);
            $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Rent Credits Available");
            $(".contact-for-credit").html("You have no <strong id='credit-type'>Rent</strong> OLX credits remaining to be used. Get in touch with our team to buy more credits.<br/><span class='tel-no'><b>Call 0800-ZAMEEN (92633)</b></span>");
            if (is_new_olx_system) {
                $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Quota Available");
                $(".contact-for-credit").html("You have no OLX quota remaining to be used. Get in touch with our team to buy more quota.<br/><span class='tel-no'><b>Call 0800-ZAMEEN (92633)</b></span>");
            }
        }
        if (purpose == 1 && buy_credits == 0) {
            $(".olx_credits_error_msg").show();
            if (is_new_olx_system == 0)
                $("#credit-type").html("Buy");
            $(".checkbox-opacity").css("opacity", .50);
            $('#option1').attr('checked', false);
            $('#option1').val(0);
            $("#option1").prop('disabled', true);
            olx_quota_checkbox_enabled = 0;
            $("#buy_credits").text(buy_credits);
            $("#rent_credits").text(rent_credits);
            $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Buy Credits Available");
            $(".contact-for-credit").html("You have no <strong id='credit-type'>Buy</strong> OLX credits remaining to be used. Get in touch with our team to buy more credits.<br/><span class='tel-no'><b>Call 0800-ZAMEEN (92633)</b></span>");
            if (is_new_olx_system) {
                $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Buy Quota Available");
                $(".contact-for-credit").html("You have no OLX quota remaining to be used. Get in touch with our team to buy more quota.<br/><span class='tel-no'><b>Call 0800-ZAMEEN (92633)</b></span>");
            }
        }
        if ((buy_credits > 0 || olx_basic_buy_quota > 0) && purpose == 1) {
            $(".olx_credits_error_msg").hide();
            $(".checkbox-opacity").css("opacity", 1);
            $('#option1').attr('checked', true);
            $('#option1').val(1);
            $("#option1").prop('disabled', false);
            olx_quota_checkbox_enabled = 1;
            $("#buy_credits").text(buy_credits);
            $("#rent_credits").text(rent_credits);
            $('.post-listing-credit-box').slideUp(100);
            $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Buy Credits Available");
            if (is_new_olx_system)
                $('.olx_checkbox .credits-available-plisting').text(buy_credits + " Quota Available");
        }
        if ((rent_credits > 0 || olx_basic_rent_quota > 0) && purpose == 2) {
            $(".olx_credits_error_msg").hide();
            $(".checkbox-opacity").css("opacity", 1);
            $('#option1').attr('checked', true);
            $('#option1').val(1);
            $("#option1").prop('disabled', false);
            olx_quota_checkbox_enabled = 1;
            $("#buy_credits").text(buy_credits);
            $("#rent_credits").text(rent_credits);
            $('.post-listing-credit-box').slideUp(100);
            $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Rent Credits Available");
            if (is_new_olx_system)
                $('.olx_checkbox .credits-available-plisting').text(rent_credits + " Quota Available");
        }

        if (is_new_olx_system) {
            if ((agency_user_quota[value]['olx']["remaining_basic_" + purpose] < 1) && (rent_credits < 1 && rent_credits > 0)) {
                $(".checkbox-opacity").css("opacity", .50);
                $('#option1').attr('checked', false);
                $('#option1').val(0);
                $("#option1").prop('disabled', true);
                olx_quota_checkbox_enabled = 0;
                $("#buy_credits").text(buy_credits);
                $("#rent_credits").text(rent_credits);
                $(".olx_credits_error_msg").show();
            }
        }

        // in case of olx quota capping show only that quota are available and hide the exact quantity.
        if (is_new_olx_system) {
            //buy quota and rent quota both will be the same as per 
            var remaining_quota_value = buy_credits;

            if (remaining_quota_value < 1 && agency_user_quota[value]['olx']["remaining_basic_" + purpose] >= 1)
                $('.olx_checkbox .credits-available-plisting').text("Quota Available");
        }
    });
}

function ConfirmListingFeatured(property_details) {
    if (property_details == "nocredits") {
        $('#buy-olx-credit-wrapper').fadeIn('fast');
    } else {
        var txt_msg = "<div id='div_ch_status'>Are you sure you want to mark this property as Featured? Once you turn this property Featured, 1 credit will be deducted from your credits.<br /><br /><center><span class='bg_orng'  onclick='make_listing_feature(" + property_details + ");' > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
        show_popup("Make Featured", txt_msg);
        return;
    }
}

// function make_listing_feature(property_id,property_owner_id,purpose)
// {
//  	var value = 0;
// 	$.post(request_url+"&olx_listing_feature_consume_package=1"+"&user_id="+property_owner_id+"&property_id="+property_id+"&purpose="+purpose ,value,function(str)
//     {
//         var str = str.trim();
//         var obj = jQuery.parseJSON(str);
//         if(obj == "success")
//         {
// 			$('.list__category-featured').html("Featured");
// 			$('.list__category-featured').css('color', '#0793EA');
// 			$('#sum-utl-button').removeAttr('disabled');
// 			$('#div_set_olx_feature').hide();
//         }
//         else
//         {

// 			$('.list__category-featured').html("Your listing could not be featured on OLX. Please try again later.");
// 			$('.list__category-featured').css('color', 'red');
// 			$('#sum-utl-button').removeAttr('disabled');
// 			$('#div_set_olx_feature').hide();
// 		}
// 		hide_popup();
//     });
// }

function check_olx_credits_for_rent_sale() {
    var check = $('#option1').is(':checked');
    if (check == true) {
        var purpose = $('#purpose').val();
        var value = $('#listing_owner').val();
        $.post(request_url + "&check_olx_credits=1" + "&user_id=" + value + "&purpose=" + purpose, value, function(str) {
            str = str.trim();
            var obj = jQuery.parseJSON(str);
            var buy_credits = obj.buy_credits;
            var rent_credits = obj.rent_credits;
            var olx_basic_buy_quota = obj.olx_basic_buy;
            var olx_basic_rent_quota = obj.olx_basic_rent;
            if (purpose == 2 && rent_credits == 0) {
                $(".olx_credits_error_msg").show();
                if (is_new_olx_system == 0)
                    $("#credit-type").text("Rent");
                $(".checkbox-opacity").css("opacity", .50);
                $('#option1').attr('checked', false);
                $('#option1').val(0);
                $("#option1").prop('disabled', true);
                olx_quota_checkbox_enabled = 0;
            }
            if (purpose == 1 && buy_credits == 0) {
                $(".olx_credits_error_msg").show();
                if (is_new_olx_system == 0)
                    $("#credit-type").html("Buy");
                $(".checkbox-opacity").css("opacity", .50);
                $('#option1').attr('checked', false);
                $('#option1').val(0);
                $("#option1").prop('disabled', true);
                olx_quota_checkbox_enabled = 0;
            }
            if ((buy_credits > 1 || olx_basic_buy_quota > 1) && purpose == 1) {
                $(".olx_credits_error_msg").hide();
                $(".checkbox-opacity").css("opacity", 1);
                $('#option1').attr('checked', true);
                $('#option1').val(1);
                $("#option1").prop('disabled', false);
                olx_quota_checkbox_enabled = 1;
            }
            if ((buy_credits > 1 || olx_basic_rent_quota > 1) && purpose == 2) {
                $(".olx_credits_error_msg").hide();
                $(".checkbox-opacity").css("opacity", 1);
                $('#option1').attr('checked', true);
                $('#option1').val(1);
                $("#option1").prop('disabled', false);
                olx_quota_checkbox_enabled = 1;
            }
            if (is_new_olx_system) {
                if ((agency_user_quota[value]['olx']["remaining_basic_" + purpose] < 1) && (rent_credits < 1 && rent_credits > 0)) {
                    $(".checkbox-opacity").css("opacity", .50);
                    $('#option1').attr('checked', false);
                    $('#option1').val(0);
                    $("#option1").prop('disabled', true);
                    olx_quota_checkbox_enabled = 0;
                    $("#buy_credits").text(buy_credits);
                    $("#rent_credits").text(rent_credits);
                    $(".olx_credits_error_msg").show();
                }
            }
            invoke_price_check_api();
        });
    }
}

function submit_button_click() {
    $('.add_property_form').find('[name=add_property]').click();
    if (errors.length > 0)
        form.find(".message_box").get(0).scrollIntoView();
}
var errors = [];

function validate_form() {
    // imz_filter.click();
    checkOnBlur = 1;
    form = $(".add_property_form");
    //COMMENT: file upload take place using same form
    if (form.attr("target") == "iframeTemp")
        return true;

    purposeVal = form.find("[name=purpose]").val();
    type_value = form.find("[name=type]").val() || "";

    index = (purposeVal == "") ? 1 : purposeVal;
    logined = $("#userid").val() != "";


    //COMMENT: remove empty classes ( un highlight fields )
    fields = form.find("input,select,textarea");
    fields.each(function(i, obj) {
        field_name = obj.name.replace(/[\[\]]*/g, "");
        form.find("#" + field_name + "_sel_box").removeClass("emptyfield"); //COMMENT: combo boxes
        $(obj).removeClass("emptyfield"); //COMMENT: input box
        form.find(".pushBtnLabel").removeClass("emptyfield");
    });

    errors = [];
    if (form.find("#option1").is(":checked") == false && form.find("#zameen_checkbox").is(":checked") == false && cuipplf == 1 && edit_property_page != 1) {
        errors.push(error_messages['platform_select']);
    }
    if (empty(form.find("[name=purpose]").val())) {
        highlight('purpose', 1);
        errors.push(error_messages['purpose']);
    }
    if (empty(form.find("[name=wanted_for]").val()) && purposeVal == 3) {
        highlight('wanted_for', 1);
        errors.push(error_messages['wanted_for']);
    }
    if (empty(form.find("[name=ptype]").val())) {
        highlight('ptype', 1);
        errors.push(error_messages['type']);
    } else if (empty(form.find("[name=type]").val())) {
        highlight('type', 1);
        errors.push(error_messages['type']);
    }
    if (empty(form.find("[name=city]").val())) {
        highlight('city', 1);
        errors.push(error_messages['city']);
    }
    if (empty(form.find("[name=last_location]").val())) {
        highlight('location_id', 1);
        highlight('_cat_selector_3', 1);
        errors.push(error_messages['location_id']);
    }

    if (empty(form.find("[name=area]").val()) || isNaN(form.find("[name=area]").val())) {
        highlight('area', 1);
        errors.push(error_messages['area']);
    }

    /*************************************by naveed 30-11-2016 ends*****************************/
    //price optional in wanted
    //price optional when new project selected
    if ($("#development_id").val() == "" || $("#development_id").val() == undefined) {
        if (purposeVal == 2) //COMMENT: rental
        {
            rental_val = form.find("[name=rental]").val();
            if (empty(rental_val) || isNaN(rental_val)) {
                highlight('rental', 1);
                errors.push(error_messages["price" + index]);
            } else {
                min_rental = config_options_data['2'].all.rental;
                if (rental_val < min_rental) {
                    highlight('rental', 1);
                    errors.push(error_messages['min_rental']);
                }
            }
        } else if (purposeVal == 1) //price optional in wanted
        {
            price_val = form.find("[name=price]").val();
            if (empty(price_val) || isNaN(price_val)) {
                highlight('price', 1);
                errors.push(error_messages["price" + index]);
            } else {
                config_options = config_options_data[purposeVal] || {};
                min_price = config_options[type_value].min_price;
                if (price_val < min_price) {
                    highlight('price', 1);
                    errors.push(error_messages['min_price']);
                }
            }
        }
    }

    if (empty(form.find("[name=title]").val())) {
        highlight('title', 1);
        errors.push(error_messages['title']);
    }
    if (empty(form.find("[name=description]").val())) {
        highlight('description', 1);
        errors.push(error_messages['description']);
    }
    if (!empty(form.find("[name=title]").val())) {
        var title_value = "";
        var title_trimmed = "";
        var title_length = "";
        title_value = $('#title').val();
        title_trimmed = title_value.replace(/ /g, '');
        title_length = title_trimmed.length;

        if (title_length < 5) {
            highlight('title', 1);
            errors.push(error_messages['title_limit']);
            $("#title_validation").css('color', 'red');
        } else {
            $("#title_validation").css('color', '#A3A3A3');
        }
    }

    if (!empty(form.find("[name=description]").val())) {
        var desc_length = "";
        var desc_value = "";
        var desc_length = "";
        desc_value = $('#description').val();
        desc_trimmed = desc_value.replace(/ /g, '');
        desc_length = desc_trimmed.length;

        if (desc_length < 20) {
            highlight('description', 1);
            errors.push(error_messages['description_limit']);
            $("#description_validation").css('color', 'red');
        } else {
            $("#description_validation").css('color', '#A3A3A3');
        }
    }
    /*************************************by naveed 30-11-2016*****************************/
    if (form.find("#chk_client").is(":checked") == true) {
        if (form.find("#new_client_radio").is(":checked")) {
            if (empty(form.find("#client_name").val())) {
                highlight('client_name', 1);
                errors.push(error_messages['client_name']);
            }
            if (empty(form.find("#client_email").val())) {
                highlight('client_email', 1);
                errors.push(error_messages['client_email']);
            }

        }
    }

    if (purposeVal == 1) {

        if (!empty(form.find("[name=instalment_status]").val())) {
            if (empty(form.find("[name=adv_amount]").val())) {
                highlight('adv_amount', 1);
                errors.push(error_messages['adv_amount']);
            }
            if (empty(form.find("[name=monthly_instalments]").val())) {
                highlight('monthly_instalments', 1);
                errors.push(error_messages['monthly_instalments']);
            }
            if (empty(form.find("[name=no_of_instalments]").val())) {
                highlight('no_of_instalments', 1);
                errors.push(error_messages['no_of_instalments']);
            }
        }
    }


    if (logined == false) {
        member_status = $(".member_status:checked").val();
        if (member_status == 'existing_user') {
            if (empty(form.find("[name=existing_username]").val())) {
                highlight('existing_username', 1);
                errors.push(error_messages['login']);
            }
            if (empty(form.find("[name=existing_password]").val())) {
                highlight('existing_password', 1);
                errors.push(error_messages['password']);
            }
        } else {
            if (empty(form.find("[name=fullname]").val())) {
                highlight('fullname', 1);
                errors.push(error_messages['fullname']);
            }
            if (empty(form.find("[name=contact_email]").val())) {
                highlight('contact_email', 1);
                errors.push(error_messages['email']);
            }
            if (empty(form.find("[name=phone0]").val()) || empty(form.find("[name=phone1]").val()) || empty(form.find("[name=phone2]").val())) {
                if (empty(form.find("[name=phone0]").val())) highlight('phone0', 1);
                if (empty(form.find("[name=phone1]").val())) highlight('phone1', 1);
                if (empty(form.find("[name=phone2]").val())) highlight('phone2', 1);
                errors.push(error_messages['phone']);
            }
            if (empty(form.find("[name=password]").val())) {
                highlight('password', 1);
                errors.push(error_messages['password']);
            }
            if (empty(form.find("[name=security]").val())) {
                highlight('security', 1);
                errors.push(error_messages['security_code']);
            }
        }
    } else {
        if (empty(form.find("[name=name]").val())) {
            highlight('name', 1);
            errors.push(error_messages['name']);
        }

        $('input[id^="cell"]').each(function(index) {
            current_index = index + 1;
            var input_cell_id = $(this).attr('id');
            if (empty(form.find("#" + input_cell_id).val())) {
                highlight(input_cell_id, 1);
                $('#error-msg-' + input_cell_id).show();
                //                errors.push("Please specify contact person "+input_cell_id+" number.");
                errors.push("Mobile #" + current_index + " field is empty. Please enter proper Mobile number.");
            } else if (!check_cell_num('#' + input_cell_id)) {
                highlight(input_cell_id, 1);
                $('#error-msg-' + input_cell_id).show();
                //errors.push("Please specify correct contact person "+input_cell_id+" number.");
                errors.push("Please enter Mobile #" + current_index + " in correct format.");
            }
        })

        if (empty(form.find("[name=email]").val())) {
            highlight('email', 1);
            errors.push(error_messages['email']);
        }
    }
    if (errors.length == 0) {
        form.find(".message_box").hide();
        return true;
    } else {
        var error_message = "";
        for (index in errors)
            error_message = error_message + "<li>" + errors[index] + "</li>";
        error_message = "<div class='error' id='msg_box'><span class='icon_error'></span><ul class='items'>" + error_message + "</ul></div>";
        form.find(".message_box").html(error_message).show();
        return false;
    }
}

$("#adv_amount, #monthly_instalments, #no_of_instalments, #area").live("keyup", function() {
    if (!/^[0-9]+$/.test(this.value)) {
        this.value = this.value.replace(/\D/g, '');
    }
});

function preview_loaded(h) //preview iframe loaded
{
    $(".add_property_form").addClass("preview_loaded");
    $(".property_preview").height(h + 20);
}
imz_filter = $();

function show_imz_filter(_parms_) {
    _parms_ = _parms_ || {};
    imz_filter = $('#backgroundFilter').height($("body").height()).show().get(0);
    imz_filter.onclick = function() {
        $(imz_filter).hide();
        if (_parms_.onclose) _parms_.onclose.call();
        $(_parms_.div_selector).hide();
    };
    if (_parms_.div_selector) {
        if (_parms_.width) $(_parms_.div_selector).width(_parms_.width);
        if (_parms_.title) $(_parms_.div_selector).find(".dialog_title").html(_parms_.title);
        if (_parms_.html) $(_parms_.div_selector).find(".dialog_container").html(_parms_.html);
        $(_parms_.div_selector).show().center_screen().find("input:first").focus();
        $(_parms_.div_selector).keydown(function(e) {
            if (e.which == 27) $(imz_filter).click();
        });
    }
}

function show_imz_filter_redefined(_parms_) {
    _parms_ = _parms_ || {};
    imz_filter = $('#backgroundFilter').height($("body").height()).show().get(0);
    imz_filter.onclick = function() {
        $(imz_filter).hide();
        if (_parms_.onclose) _parms_.onclose.call();
        $(_parms_.div_selector).hide();
    };
    if (_parms_.div_selector) {
        if (_parms_.width) $(_parms_.div_selector).width(_parms_.width);
        if (_parms_.title) $(_parms_.div_selector).find(".dialog_title_redefined").html(_parms_.title);
        if (_parms_.html) $(_parms_.div_selector).find(".dialog_container_redefined").html(_parms_.html);
        $(_parms_.div_selector).show().center_screen().find("input:first").focus();
        $(_parms_.div_selector).keydown(function(e) {
            if (e.which == 27) $(imz_filter).click();
        });
    }
}

function imz_dialog(params) {
    show_imz_filter(params);
}

function imz_dialog_redefined(params) {
    show_imz_filter_redefined(params);
}

function update_features() {
    features_popup.dialog("close");
    total_fetures = $(".features_popup").find("input:checked,input[type=text][value!=],select[value!=]").length;
    $(".features_count").html(total_fetures);
    eq_index = (total_fetures == 0) ? 0 : 1;
    $(".div_features").hide().eq(eq_index).show();
}
var features_popup = 0;
var type_old = -1;
$(".popup_features").live("click", function() {
    type_value = $("#type").val();
    if (type_old == type_value) {
        features_popup.dialog({
            autoOpen: 1
        });
    } else {
        features_popup.html("<img class='loading' src='" + paths.images_css + "/loading1.gif' />").dialog({
            autoOpen: 1
        });
        jsAjax(request_url + "&get_features=1&type=" + type_value + "&property_type=" + property_type, function(str) {
            data = eval('(' + str + ')');
            features_popup.html(data.html).dialog("option", "position", "center");
            $(".features_count").html(data.count);
            type_old = type_value;
        });
    }
});


function removeArrayItem(arr, item) {
    var removeCounter = 0;
    for (var index = 0; index < arr.length; index++) {
        if (arr[index] === item) {
            arr.splice(index, 1);
            removeCounter++;
            index--;
            return arr;
        }
    }
    return arr;
}

function set_number_text(selector) {
    var counter = 0;
    var str = "";
    $(selector).parent('div').find('div.ListItem').each(function(i, obj) {
        $(obj).find(".num").html(counter + 1);
        counter++;
    });
    sortable_selector = selector;
    sort_update();
}

function set_as_main(obj) {
    sortable_selector = $(obj).parents("ul.list_sortable").data('sortable_selector');
    sortable_key = $(obj).parents("ul.list_sortable").data('sortable_key');
    li = $(obj).parents("li");
    if (li.prev('li').length > 0) {
        li.insertBefore($(sortable_selector).find("li:eq(0)"));
    }
    sort_update();
}
//

function ConfirmBoxListingHotNew(userId, selector) {
    var str_arr = "";
    var deduction_for = "hot_listing";

    var txt_msg = "";
    var remaining_hot_credits = $('#admin_hot_credit').val();
    var rdata = {
        selector: selector,
        del: 15,
        txtcom: deduction_for
    }
    $.post('?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html', rdata, function(str) {
        str_arr = str.split("|");
        txt_msg = str_arr[0];


        // If status 200 and zone factor applies
        if (str_arr[1] == "200" && str_arr[2] == 1) {
            txt_msg = "success";
            $('#plat_hot_zone_credit').val(str_arr[4]);
            $('#summary-cr-hot').text(str_arr[4]);
            $('#sum_note_txt').text(str_arr[0]);

            var zone_credit_to_be_applied = str_arr[4];
            // if the zone factor applies and the available credits are less then throw error popup
            if (remaining_hot_credits < zone_credit_to_be_applied) {
                var link = $("<a>");
                link.attr("href", this_domain + "/profolio/index.php?tabs=13&section=advertise");
                link.attr("title", "Credits page");
                link.text("Buy Credits");
                link.addClass("link");
                $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }

            displayPopup('platform-utl-credit-popup');
        }
        // if status 200 and zone factor not appies then show regular msg
        else if (str_arr[1] == "200" && str_arr[2] == 0) {
            txt_msg = "success";
            var credit_to_be_applied = 1;
            // if the zone factor applies and the available credits are less then throw error popup
            if (remaining_hot_credits < credit_to_be_applied) {
                var link = $("<a>");
                link.attr("href", this_domain + "/profolio/index.php?tabs=13&section=advertise");
                link.attr("title", "Credits page");
                link.text("Buy Credits");
                link.addClass("link");
                $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }
            displayPopup('platform-utl-credit-popup');
        }
        // If status 204, prompt the error msg sent in response
        else if (str_arr[1] == "204") {
            txt_msg = "error";
            $('#error_confirm_txt').text(str_arr[3]);
            displayPopup('utl-error-credit-popup');
        } else {
            txt_msg = "error";
            displayPopup('utl-error-credit-popup');
        }


    });


}

function ConfirmBoxListingHot(userId, selector, flag, pre) {
    var str = "";
    var str_arr = "";
    // var quota_from="admin";
    var deduction_for = "hot_listing";

    var txt_msg = "";


    // if(quota_from == 1)
    // {
    // 	quota_from = "admin";
    // }
    // else
    // {
    // 	quota_from = "user";	
    // }

    var rdata = {
        selector: selector,
        del: 15,
        txtcom: deduction_for
        // quota_from:quota_from
    }
    $.post('?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html', rdata, function(str) {
        str_arr = str.split("|");
        txt_msg = str_arr[0];


        // If status 200 and zone factor applies
        if (str_arr[1] == "200" && str_arr[2] == 1) {
            txt_msg = "<div id='div_ch_status'>" + str_arr[0] + "<br /><br /><center><span class='bg_orng' onclick=\"SetListingHot(" + selector + "," + userId + ",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
        }
        // if status 200 and zone factor not appies then show regular msg
        else if (str_arr[1] == "200" && str_arr[2] == 0) {
            txt_msg = "<div id='div_ch_status'>Are you sure you want to turn this listing into a Hot Property? Once you turn this property hot, 1 credit will be deducted from your hot listing quota.<br /><br /><center><span class='bg_orng' onclick=\"SetListingHot(" + selector + "," + userId + ",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
        }
        // If status 204, prompt the error msg sent in response
        else if (str_arr[1] == "204") {
            txt_msg = "<div id='div_ch_status'>" + str_arr[3] + "<br /><br /><center><span class='bg_orng' onclick='hide_popup();' > Close </span></center></div>";
        } else {
            txt_msg = "<div id='div_ch_status'><Something went wrong. Please Try later.<br /><br /><center><span class='bg_orng' onclick='hide_popup();' > Close </span></center></div>";
        }

        show_popup("Make It Hot", txt_msg);

    });



    // // Old function
    // var txt_msg = "<div id='div_ch_status'>Are you sure you want to turn this listing into a Hot Property? Once you turn this property hot, one credit will be deducted from your hot listing quota.<br /><br /><center><span class='bg_orng' onclick=\"SetListingHot("+selector+","+userId+",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
    // show_popup("Make It Hot",txt_msg);

} ////End Of Function

function ConfirmBoxListingSuperHotNew(userId, selector, flag, pre) {
    var str_arr = "";
    var deduction_for = "shot_listing";
    var txt_msg = "";
    var remaining_super_hot_credits = $('#admin_shot_credit').val();
    var rdata = {
        selector: selector,
        del: 15,
        txtcom: deduction_for
    }

    $.post('?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html', rdata, function(str) {

        str_arr = str.split("|");
        txt_msg = str_arr[0];


        // If status 200 and zone factor applies
        if (str_arr[1] == "200" && str_arr[2] == 1) {
            txt_msg = "success";
            $('#plat_superhot_zone_credit').val(str_arr[4]);
            $('#summary-cr-superhot').text(str_arr[4]);
            $('#sum_note_txt').text(str_arr[0]);
            var zone_credit_to_be_applied = str_arr[4];
            if (remaining_super_hot_credits < zone_credit_to_be_applied) {
                var link = $("<a>");
                link.attr("href", this_domain + "/profolio/index.php?tabs=13&section=advertise");
                link.attr("title", "Credits page");
                link.text("Buy Credits");
                link.addClass("link");
                $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }
            displayPopup('platform-utl-credit-popup');
        }
        // if status 200 and zone factor not appies then show regular msg
        else if (str_arr[1] == "200" && str_arr[2] == 0) {
            txt_msg = "success";
            var credit_to_be_applied = 1;
            if (remaining_super_hot_credits < credit_to_be_applied) {
                var link = $("<a>");
                link.attr("href", this_domain + "/profolio/index.php?tabs=13&section=advertise");
                link.attr("title", "Credits page");
                link.text("Buy Credits");
                link.addClass("link");
                $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }
            displayPopup('platform-utl-credit-popup');
        }
        // If status 204, prompt the error msg sent in response
        else if (str_arr[1] == "204") {
            txt_msg = "error";
            $('#error_confirm_txt').text(str_arr[3]);
            displayPopup('utl-error-credit-popup');
        } else {
            txt_msg = "error";
            displayPopup('utl-error-credit-popup');
        }

        return txt_msg;

    });


}

function ConfirmBoxListingOlxFeaturedNew(userId, selector) {
    var str_arr = "";
    var deduction_for = "olx_feature";
    var txt_msg = "";
    var remaining_olx_credit = $('#admin_olx_credit').val();
    var rdata = {
        selector: selector,
        del: 18,
        txtcom: deduction_for
    }

    $.post('?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html', rdata, function(str) {
        str_arr = str.split("|");
        txt_msg = str_arr[0];

        $('#sum_note_txt').text("");
        // If status 200 and zone factor applies
        if (str_arr[1] == "200" && str_arr[2] == 1) {
            txt_msg = "success";
            $('#plat_olx_featured_zone').val(str_arr[4]);
            $('#summary-cr-featured').text(str_arr[4]);
            $('#sum_note_txt').text(str_arr[0]);
            var zone_credit_to_be_applied = str_arr[4];
            if (remaining_olx_credit < zone_credit_to_be_applied) {
                // var link = $("<a>");
                // link.attr("href", this_domain+"/profolio/index.php?tabs=13&section=advertise");
                // link.attr("title", "Credits page");
                // link.text("Buy Credits");
                // link.addClass("link");
                // $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }
            displayPopup('platform-utl-credit-popup');
        }
        // if status 200 and zone factor not appies then show regular msg
        else if (str_arr[1] == "200" && str_arr[2] == 0) {
            txt_msg = "success";
            var credit_to_be_applied = 1;
            if (remaining_olx_credit < credit_to_be_applied) {
                // var link = $("<a>");
                // link.attr("href", this_domain+"/profolio/index.php?tabs=13&section=advertise");
                // link.attr("title", "Credits page");
                // link.text("Buy Credits");
                // link.addClass("link");
                // $('.utl-goback-btn').html(link)
                $('#error_heading_txt').text("");
                $('#error_confirm_txt').text("You do not have enough credits. Please buy more credits.");
                displayPopup('utl-error-credit-popup');
                return;
            }
            displayPopup('platform-utl-credit-popup');
        }
        // If status 204, prompt the error msg sent in response
        else if (str_arr[1] == "204") {
            txt_msg = "error";
            $('#error_confirm_txt').text(str_arr[3]);
            displayPopup('utl-error-credit-popup');
        } else {
            txt_msg = "error";
            displayPopup('utl-error-credit-popup');
        }

        return txt_msg;

    });


}

function ConfirmBoxListingSuperHot(userId, selector, flag, pre) {

    // if(quota_from == 1)
    // {
    // 	quota_from = "admin";
    // }
    // else
    // {
    // 	quota_from = "user";	
    // }

    var str = "";
    var str_arr = "";
    // var quota_from="admin";
    var deduction_for = "shot_listing";

    var txt_msg = "";

    var rdata = {
        selector: selector,
        del: 15,
        txtcom: deduction_for
        // quota_from:quota_from
    }

    $.post('?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html', rdata, function(str) {
        str_arr = str.split("|");
        txt_msg = str_arr[0];


        // If status 200 and zone factor applies
        if (str_arr[1] == "200" && str_arr[2] == 1) {
            txt_msg = "<div id='div_ch_status'>" + str_arr[0] + "<br /><br /><center><span class='bg_orng' onclick=\"SetListingSuperHot(" + selector + "," + userId + ",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
        }
        // if status 200 and zone factor not appies then show regular msg
        else if (str_arr[1] == "200" && str_arr[2] == 0) {
            txt_msg = "<div id='div_ch_status'>Are you sure you want to turn this listing into a Super Hot Property? Once you turn this property super hot, 1 credit will be deducted from your super hot listing quota.<br /><br /><center><span class='bg_orng' onclick=\"SetListingSuperHot(" + selector + "," + userId + ",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
        }
        // If status 204, prompt the error msg sent in response
        else if (str_arr[1] == "204") {
            txt_msg = "<div id='div_ch_status'>" + str_arr[3] + "<br /><br /><center><span class='bg_orng' onclick='hide_popup();' > Close </span></center></div>";
        } else {
            txt_msg = "<div id='div_ch_status'>Something went wrong. Please Try later.<br /><br /><center><span class='bg_orng' onclick='hide_popup();' > Close </span></center></div>";
        }


        show_popup("Make It Super Hot", txt_msg);
    });

    // // Old function
    // var txt_msg = "<div id='div_ch_status'>Are you sure you want to turn this listing into a Super Hot Property? Once you turn this property super hot, one credit will be deducted from your super hot listing quota.<br /><br /><center><span class='bg_orng' onclick=\"SetListingSuperHot("+selector+","+userId+",this)\" > Yes </span>&nbsp;&nbsp;<span class='bg_orng' onclick='hide_popup();' > No </span></center></div>";
    // show_popup("Make It Super Hot",txt_msg);

} ////End Of Function
function hide_popup() {
    //cdialog.remove();
    imz_filter.click()
    //$("#common_popup").hide();
}

function show_popup(title, html, width) {
    width = width || 750;
    //if(window.cdialog) $(cdialog).remove();
    //cdialog = $("<div>").dialog({ width:450,title:title}).html(html);
    imz_dialog({
        'div_selector': '#common_popup',
        width: width,
        title: title,
        html: html
    });
}

function show_popup_redefined(title, html, width) {

    width = width || 750;
    //if(window.cdialog) $(cdialog).remove();
    //cdialog = $("<div>").dialog({ width:450,title:title}).html(html);
    imz_dialog_redefined({
        'div_selector': '#common_popup_redefined',
        width: width,
        title: title,
        html: html
    });
}

function SetListingHot(selector, userId, obj) {
    $(obj).parent().append("<img class='loading' src='" + paths.images_css + "/loading1.gif' style='margin:7px;' />");
    $(obj).next().remove();
    $(obj).remove();
    $.get(request_url + "&SetListingHot=1&userId=" + userId, function(str) {
        data = eval('(' + str + ')');
        if (data.status == "success") {
            $("#listing_type").addClass("clshot").html("Hot Listing");
            $("#remaining_hot").html(data.remaining_hot);
            $("#div_sethot").hide();
            hide_popup();
        } else {
            $("#div_ch_status").html(data.message);
        }
    });

} ////End Of Function
function SetListingHotNew(selector, userId, obj) {

    $.get(request_url + "&SetListingHot=1&userId=" + userId, function(str) {
        data = eval('(' + str + ')');
        if (data.status == "success") {
            var zone_credit = $("#plat_hot_zone_credit").val();
            var credit_listing = $("#remaining_hot").text();
            var updated_credit = credit_listing - 1;
            if (zone_credit > 1) {
                updated_credit = credit_listing - zone_credit;
            }
            if (updated_credit < 1) {
                updated_credit = 0;
            }
            $("#remaining_hot").text(updated_credit.toFixed(2));
            $(".listing-category").text('Hot Listing');
            $("#hot-mark-btn").hide();
            $("#hot-success-btn").show();
            $('#sum-utl-button').removeAttr('disabled');
            displayPopup('utl-success-credit');
        } else {
            $('#sum-utl-button').removeAttr('disabled');
            displayPopup('utl-error-credit-popup');
        }
    });

}

function SetListingSuperHot(selector, userId, obj) {
    $(obj).parent().append("<img class='loading' src='" + paths.images_css + "/loading1.gif' style='margin:7px;' />");
    $(obj).next().remove();
    $(obj).remove();
    $.get(request_url + "&SetListingSuperHot=1&userId=" + userId, function(str) {
        data = eval('(' + str + ')');
        if (data.status == "success") {
            $("#listing_type").addClass("clshot").html("Super Hot Listing");
            $("#div_setsuperhot").hide();
            $("#div_sethot").hide();
            //hide_popup();
            show_jeffi_task_popup();
        } else {
            $("#div_ch_status").html(data.message);
        }
    });

} ////End Of Function
function SetListingSuperHotNew(selector, userId, obj) {
    // $(obj).parent().append("<img class='loading' src='"+paths.images_css+"/loading1.gif' style='margin:7px;' />");
    // $(obj).next().remove();
    // $(obj).remove();
    $.get(request_url + "&SetListingSuperHot=1&userId=" + userId, function(str) {
        data = eval('(' + str + ')');
        if (data.status == "success") {

            var zone_credit = $("#plat_superhot_zone_credit").val();
            var credit_listing = $("#remaining_superhot").text();
            var updated_credit = credit_listing - 1;
            if (zone_credit > 1) {
                updated_credit = credit_listing - zone_credit;
            }
            if (updated_credit < 1) {
                updated_credit = 0;
            }
            $("#remaining_superhot").text(updated_credit.toFixed(2));
            $("#super-mark-btn").hide();
            $(".listing-category").text('Super Hot Listing');
            $("#superhot-success-btn").show();
            $(".hot").hide();
            $('#sum-utl-button').removeAttr('disabled');
            displayPopup('utl-success-credit');
        } else {
            displayPopup('utl-error-credit-popup');
            $('#sum-utl-button').removeAttr('disabled');
        }
    });

} ////End Of Function
//COMMENT: convert area to sqft
var unit_convert_array = {
    "Square Feet": 1,
    "Square Meters": 0.09290304,
    "Square Yards": 0.111111111,
    "Marla": 0.004444444,
    "Kanal": 0.0002222222
};

function land_text(area_sqft) {
    area_sqft = parseInt(area_sqft);
    area_text = "";
    for (i in unit_convert_array) {
        scal = unit_convert_array[i];
        converted = Number(area_sqft * scal).toFixed(1);
        area_text += (converted) + " " + i + " <br/>";
    }
    //return area_text;
    return area_text.replace(/(\.0 )/g, " ").replace(/(\.00 )/g, " ");
}

function land_convert_txt2(obj, area_sqft) {
    unit = $("#unit").val();
    area = $("#area").val();
    if ($("#db_unit").val() != unit || $("#db_area").val() != area) //COMMENT: if user changes area or unit
    {
        area_sqft = Math.round(area / unit_convert_array[unit]);
        $(obj).tooltip("option", "content", land_text(area_sqft));
    } else {
        if (area_sqft == "") {
            area_sqft = 0;
        } else {
            area_sqft = Math.round(area / unit_convert_array[unit]);
        }
    }
    $(obj).attr("title", "").tooltip({
        tooltipClass: "ttg phone_tooltip_cls",
        position: {
            my: "left-25 bottom-10",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: land_text(area_sqft)
    }).tooltip("open");
}

function city_restriction_tooltip(obj, str) {
    $(obj).attr("title", "").tooltip({
        tooltipClass: "ttg phone_tooltip_cls",
        position: {
            my: "left-25 bottom-10",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: str
    }).tooltip("open");
}

function purchase_hotquota() {
    $.get(request_url + "&tpl=add_property_hot_quota_package.tpl", function(str) {
        show_popup("Purchase Hot Listings", str);
    });
}

function submit_hotcredit() {
    checked_chkbox = $("#hotcredits_form [type=radio]:checked");
    if (checked_chkbox.length == 0) {
        $("#hotcredits_form .message_box").show();
        return false;
    } else {
        return true;
    }
}

function hideSelect(theRdo, calPrice, theVal25) {
    $("#hotcredits_form .message_box").hide();
    $("#nowPrice").val(calPrice);
}

function toggle_pricediv(n) {
    $(".cluetip_tab li").removeClass("selected").eq(n).addClass("selected");
    $("#price_breakdown,#div_install_info").hide().eq(n).show();
}

Date.firstDayOfWeek = 7;
Date.format = 'dd/mm/yyyy';
var currentTime = new Date();
var month = currentTime.getMonth() + 1;
if (month < 10)
    month = "0" + month;
var day = currentTime.getDate();
if (day < 10)
    day = "0" + day;
var year = currentTime.getFullYear();
var now_date = day + "/" + month + "/" + year;
var price_txt = 0;
var per_txt = 0;


function getMonthText(month) {
    switch (month) {
        case 1:
            txt = "Jan";
            break;
        case 2:
            txt = "Feb";
            break;
        case 3:
            txt = "Mar";
            break;
        case 4:
            txt = "Apr";
            break;
        case 5:
            txt = "May";
            break;
        case 6:
            txt = "Jun";
            break;
        case 7:
            txt = "Jul";
            break;
        case 8:
            txt = "Aug";
            break;
        case 9:
            txt = "Sep";
            break;
        case 10:
            txt = "Oct";
            break;
        case 11:
            txt = "Nov";
            break;
        case 12:
            txt = "Dec";
            break;
    }
    return txt;
} ////End of Function
function close_recalculate() {
    $("#recalculate_div,#span_reprice,#span_reinstall").hide();
} ////End of Function
function calculate_restdates(this_counter) {
    var thisyear_id = "#intyear_" + this_counter;
    var thisyear_value = $(thisyear_id).val();
    var newyear_value = parseInt(thisyear_value);
    var thismonth_id = "#intmonth_" + this_counter;
    var thismonth_value = $(thismonth_id).val();
    var newmonth_value = parseInt(thismonth_value) + 1;
    for (var $i = this_counter + 1; $i < div_counter; $i++) {
        thisamount_id = "#paid_" + $i;
        this_amount_value = $(thisamount_id).val();
        if (this_amount_value > 0)
            return;
        if (newmonth_value < 13) {
            month_id = "#intmonth_" + $i;
            $(month_id).val(newmonth_value);
            newmonth_value++;
            year_id = "#intyear_" + $i;
            $(year_id).val(newyear_value);
        } else {
            newmonth_value = 1;
            newyear_value++;
            year_id = "#intyear_" + $i;
            $(year_id).val(newyear_value);
            month_id = "#intmonth_" + $i;
            $(month_id).val(newmonth_value);
            newmonth_value++;
            //calculate_rest($i,"year")
        }
    }

} //// End of Function
function calculate_paidprice(counter, from_input) {
    span_id = "tpaid_" + counter;
    input_id = "paid_" + counter;
    per_id = "paidper_" + counter;
    og_price = I("original_price").value;
    if (og_price <= 0) {
        I(span_id).innerHTML = "Please enter original price.";
        return false;
    }
    if (from_input == "txt") {
        this_price = I(input_id).value;
        if (this_price == "" || isNaN(this_price) || this_price < 0) {
            this_price = 0;
            I(input_id).value = "";
            return false;
        }
        if (this_price != price_txt) {
            var paid_price = this_price * 100 / og_price;
            paid_price = Math.round(paid_price * 100) / 100;
            I(per_id).value = paid_price;
            per_txt = paid_price;
        }
    } else {
        var per_value = I(per_id).value;
        if (per_value == "" || isNaN(per_value) || per_value < 0) {
            per_value = 0;
            I(per_id).value = "";
            return false;
        }
        if (per_value != per_txt) {
            this_price = per_value * og_price / 100;
            this_price = Math.round(this_price * 100) / 100;
            I(input_id).value = this_price;
            price_txt = this_price;
        }
    }

    if (counter == "1") {
        I(span_id).innerHTML = getPriceText(this_price);
    } else {
        pre_counter = parseInt(counter) - 1;
        grand_total = 0;
        for (pre_counter; pre_counter >= 1; pre_counter--) {
            pre_input = $("#paid_" + pre_counter);
            last_total = pre_input.val();
            if (last_total == "" || isNaN(last_total) || last_total < 0) last_total = 0;
            grand_total = parseInt(grand_total) + parseInt(last_total);
        }
        if (this_price == "" || isNaN(this_price) || this_price < 0) this_price = 0;
        total_price = parseInt(grand_total) + parseInt(this_price);
        var org_price = $("#original_price").val();
        if (total_price > org_price)
            I(span_id).innerHTML = "<img src=\"" + this_domain + "/images/common/alert_icon_small.gif\" border=\"0\" align=\"absmiddle\" /> Greater then original price.";
        else
            I(span_id).innerHTML = getPriceText(total_price);
    }

} ////End of Function

function recaluclate_prices(this_a) {
    if (this_a == "a_reprice") {
        $("#txt_preseller_percent,#txt_agseller_percent,#txt_agbuyer_percent,#txt_ts_percent,#txt_tb_percent").trigger("blur");
    } else {
        $("#txt_paid_percent").trigger("blur");
        for (var k = 1; k < div_counter; k++) {
            input_per = $("#paidper_" + k);
            if (input_per.length && input_per.val() != "")
                calculate_paidprice(k, "else");
        }
    }

} ////End of Function

function clear_pricedownrows() {
    if ($("#div_install_info:visible").length) {
        $("#div_install_info").find(".perc,.paid").val("");
        $("#div_install_info").find(".tpaid").html("");
    }
}
div_counter = 11;

function add_install_row() {
    html = "<div class='rowdiv'><span class='w1'>";
    html += "<select name=\"intmonth_" + div_counter + "\" id=\"intmonth_" + div_counter + "\">";
    for (j = 1; j <= 12; j++) {
        html += "<option value=\"" + j + "\">" + getMonthText(j) + "</option>";
    }
    html += "</select>&nbsp;&nbsp;";
    html += "<select name=\"intyear_" + div_counter + "\" id=\"intyear_" + div_counter + "\" onchnage='calculate_restdates(" + div_counter + ");' >";
    for (z = 2003; z <= 2020; z++) {
        selected_txt = "";
        if (z == year)
            selected_txt = "selected";
        html += "<option value=\"" + z + "\" " + selected_txt + " >" + z + "</option>";
    }
    html += "</select>";
    html += "</span><span class='w2'><input type=\"text\" class='paid' name=\"paid_" + div_counter + "\" id=\"paid_" + div_counter + "\" value=\"\" onblur=\"calculate_paidprice('" + div_counter + "','txt')\" />&nbsp;&nbsp;or&nbsp;&nbsp;<input type=\"text\" class='perc' name=\"paidper_" + div_counter + "\" id=\"paidper_" + div_counter + "\" value=\"\" style=\"width:50px;\" onblur=\"calculate_paidprice('" + div_counter + "','per')\" />%</span><span style=\"width:200px;\" id=\"tpaid_" + div_counter + "\"></span></div>";
    $("#add_more_row").before(html);
    prev_count = div_counter - 1;
    div_counter++;
    calculate_restdates(prev_count);
}

function get_total_orig_price() {
    var orig_price = $("#total_org").text().replace(/,/g, "");
    if (orig_price == "" || isNaN(orig_price)) orig_price = 0;
    return orig_price;
}

function get_original_price() {
    var org_price = $("#original_price").val();
    if (org_price == "" || isNaN(org_price) || org_price < 0) org_price = 0;
    return org_price;
}

function price_break_down_events() {
    var dvalue = 100;
    $("#original_price").blur(function(event) {
        var org_price = get_original_price();
        if (old_price == 0) {
            old_price = org_price;
        }
        if (org_price == 0) {
            org_price = 0;
            $("#original_price").val(0)
        }
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(org_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#total_org").html(number_format(org_price, 0, ".", ","));
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtotal_org").html(getPriceText(org_price));
        $("#wtsale_price").html(getPriceText(tsale_price));
        $("#span_ogprice").html(getPriceText(org_price));
        //$("#txt_preseller_percent").trigger("blur");
        var premium_value = $("#premuim_price").val();
        var agseller_value = $("#agency_seller").val();
        var agbuyer_value = $("#agency_buyer").val();
        var tsseller_value = $("#transfer_seller").val();
        var tsbuyer_value = $("#transfer_buyer").val();
        var paid_value = $("#seller_paid").val();
        var first_install = $("#paid_1").val();;
        if (org_price > 0 && old_price != org_price && (premium_value != "" || agseller_value != "" || agbuyer_value != "" || tsseller_value != "" || tsbuyer_value != "" || paid_value != "" || first_install != "")) {
            I("recalculate_div").style.display = "block";
            if (first_install != "" || paid_value != "") {
                I("span_reinstall").style.display = "inline";
                I("a_reinstall").focus();
            }
            if (premium_value != "" || agseller_value != "" || agbuyer_value != "" || tsseller_value != "" || tsbuyer_value != "") {
                I("span_reprice").style.display = "inline";
                I("a_reprice").focus();
            }
            old_price = org_price;
        }
    });
    $("#txt_preseller_percent").blur(function(event) {
        var org_price = get_original_price();
        var per_value = $("#txt_preseller_percent").val();
        if (per_value == "" || isNaN(per_value) || per_value == per_txt) {
            if (per_value < 0 || isNaN(per_value)) $("#txt_preseller_percent").val("");
            return false;
        }
        var premium_value = org_price * per_value / 100;
        premium_value = Math.round(premium_value * dvalue) / dvalue;
        $("#premuim_price").val(premium_value);
        price_txt = premium_value;
        var total_price = parseInt(premium_value) + parseInt(org_price);
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(total_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#total_org").html(number_format(total_price, 0, ".", ","));
        $("#wtotal_org").html(getPriceText(total_price));
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
        $("#txt_agseller_percent,#txt_agbuyer_percent,#txt_ts_percent,#txt_tb_percent,#txt_paid_percent").trigger("blur");
    });
    $("#premuim_price").blur(function(event) {
        var org_price = get_original_price();
        var premium_value = $("#premuim_price").val();
        if (premium_value == "" || isNaN(premium_value) || premium_value == price_txt) {
            if (premium_value < 0 || isNaN(premium_value)) $("#premuim_price").val("");
            return false;
        }
        $("#txt_agseller_percent,#txt_agbuyer_percent,#txt_ts_percent,#txt_tb_percent,#txt_paid_percent").trigger("blur");
        var total_price = parseInt(premium_value) + parseInt(org_price);
        var per_value = premium_value * 100 / org_price;
        per_value = Math.round(per_value * dvalue) / dvalue;

        $("#txt_preseller_percent").val(per_value);
        per_txt = per_value

        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(total_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#total_org").html(number_format(total_price, 0, ".", ","));
        $("#wtotal_org").html(getPriceText(total_price));
        $("#tsale_price").html(number_format(total_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
    });
    $("#txt_agseller_percent").blur(function(event) {
        org_price = get_total_orig_price();
        var agper_value = $("#txt_agseller_percent").val();
        if (agper_value == "" || agper_value < 0 || isNaN(agper_value) || agper_value == per_txt) {
            if (agper_value < 0 || isNaN(agper_value)) $("#txt_agseller_percent").val("");
            return false;
        }
        var agseller_price = org_price * agper_value / 100;
        agseller_price = Math.round(agseller_price * dvalue) / dvalue;
        $("#agency_seller").val(agseller_price);
        price_txt = agseller_price;
    });
    $("#agency_seller").blur(function(event) {
        org_price = get_total_orig_price();
        var agseller_value = $("#agency_seller").val();
        if (agseller_value == "" || agseller_value < 0 || isNaN(agseller_value) || agseller_value == price_txt) {
            if (agseller_value < 0 || isNaN(agseller_value)) $("#agency_seller").val("");
            return false;
        }
        var agper_value = agseller_value * 100 / org_price;
        agper_value = Math.round(agper_value * dvalue) / dvalue;
        $("#txt_agseller_percent").val(agper_value);
        per_txt = agper_value;

    });
    $("#txt_agbuyer_percent").blur(function(event) {
        org_price = get_total_orig_price();
        var agper_value = $("#txt_agbuyer_percent").val();
        if (agper_value == "" || agper_value < 0 || isNaN(agper_value) || agper_value == per_txt) {
            if (agper_value < 0 || isNaN(agper_value)) $("#txt_agbuyer_percent").val("");
            return false;
        }
        var agbuyer_price = org_price * agper_value / 100;
        agbuyer_price = Math.round(agbuyer_price * dvalue) / dvalue;
        $("#agency_buyer").val(agbuyer_price);
        price_txt = agbuyer_price;
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(org_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
    });
    $("#agency_buyer").blur(function(event) {
        var org_price = get_total_orig_price();
        var agbuyer_value = $("#agency_buyer").val();
        if (agbuyer_value == "" || agbuyer_value < 0 || isNaN(agbuyer_value) || price_txt == agbuyer_value) {
            if (agbuyer_value < 0 || isNaN(agbuyer_value)) $("#agency_buyer").val("");
            return false;
        }
        var agper_value = agbuyer_value * 100 / org_price;
        agper_value = Math.round(agper_value * dvalue) / dvalue;
        $("#txt_agbuyer_percent").val(agper_value);
        per_txt = agper_value;
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(org_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
    });
    $("#txt_ts_percent").blur(function(event) {
        var org_price = get_total_orig_price();
        var tsper_value = $("#txt_ts_percent").val();
        if (tsper_value == "" || tsper_value < 0 || isNaN(tsper_value) || tsper_value == per_txt) {
            if (tsper_value < 0 || isNaN(tsper_value)) $("#txt_ts_percent").val("");
            return false;
        }
        var tsseller_price = org_price * tsper_value / 100;
        tsseller_price = Math.round(tsseller_price * dvalue) / dvalue;
        $("#transfer_seller").val(tsseller_price);
        price_txt = tsseller_price;
    });
    $("#transfer_seller").blur(function(event) {
        var org_price = get_total_orig_price();
        var tsseller_value = $("#transfer_seller").val();
        if (tsseller_value == "" || tsseller_value < 0 || isNaN(tsseller_value) || tsseller_value == price_txt) {
            if (tsseller_value < 0 || isNaN(tsseller_value)) $("#transfer_seller").val("");
            return false;
        }
        var tsper_value = tsseller_value * 100 / org_price;
        tsper_value = Math.round(tsper_value * dvalue) / dvalue;
        $("#txt_ts_percent").val(tsper_value);
        per_txt = tsper_value;
    });
    $("#txt_tb_percent").blur(function(event) {
        var org_price = get_total_orig_price();
        var tsper_value = $("#txt_tb_percent").val();
        if (tsper_value == "" || tsper_value < 0 || isNaN(tsper_value) || tsper_value == per_txt) {
            if (tsper_value < 0 || isNaN(tsper_value)) $("#txt_tb_percent").val("");
            return false;
        }
        var tsbuyer_price = org_price * tsper_value / 100;
        tsbuyer_price = Math.round(tsbuyer_price * dvalue) / dvalue;
        $("#transfer_buyer").val(tsbuyer_price);
        price_txt = tsbuyer_price;
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(org_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
    });
    $("#transfer_buyer").blur(function(event) {
        var org_price = get_total_orig_price();
        var tsbuyer_value = $("#transfer_buyer").val();
        if (tsbuyer_value == "" || tsbuyer_value < 0 || isNaN(tsbuyer_value) || tsbuyer_value == price_txt) {
            if (tsbuyer_value < 0 || isNaN(tsbuyer_value)) $("#transfer_buyer").val("");
            return false;
        }
        var tsper_value = tsbuyer_value * 100 / org_price;
        tsper_value = Math.round(tsper_value * dvalue) / dvalue;
        $("#txt_tb_percent").val(tsper_value);
        per_txt = tsper_value;
        buyer_agfee = $("#agency_buyer").val() || 0;
        buyer_tbfee = $("#transfer_buyer").val() || 0;
        var tsale_price = parseInt(org_price) + parseInt(buyer_agfee) + parseInt(buyer_tbfee);
        $("#tsale_price").html(number_format(tsale_price, 0, ".", ","));
        $("#wtsale_price").html(getPriceText(tsale_price));
    });
    $("#txt_paid_percent").blur(function(event) {
        var org_price = get_original_price();
        var paidper_value = $("#txt_paid_percent").val();
        if (paidper_value == "" || paidper_value < 0 || isNaN(paidper_value) || paidper_value == per_txt) {
            if (paidper_value < 0 || isNaN(paidper_value)) $("#txt_paid_percent").val();
            return false;
        }
        var paid_price = org_price * paidper_value / 100;
        paid_price = Math.round(paid_price * dvalue) / dvalue;
        $("#seller_paid").val(paid_price);
        price_txt = paid_price;
        var due_amount = org_price - paid_price;
        if (due_amount == 0) {
            due_amount = "<font color=\"red\">NILL</font>";
        }
        $("#due_amount").html(due_amount);
    });

    $("#seller_paid").blur(function(event) {
        var org_price = get_original_price();
        var paid_value = $("#seller_paid").val();
        if (paid_value == "" || paid_value < 0 || isNaN(paid_value) || paid_value == price_txt) {
            if (paid_value < 0 || isNaN(paid_value)) $("#seller_paid").val();
            return false;
        }
        var paidper_value = paid_value * 100 / org_price;
        paidper_value = Math.round(paidper_value * dvalue) / dvalue;
        $("#txt_paid_percent").val(paidper_value);
        per_txt = paidper_value;
        var due_amount = org_price - paid_value;
        if (due_amount == 0) {
            due_amount = "<font color=\"red\">NILL</font>";
        }
        $("#due_amount").html(due_amount);
    });
}

function sort_update(event, ui) {
    if (ui !== undefined) {
        sortable_selector = ui.item.parents("ul.list_sortable").data('sortable_selector');
        sortable_key = ui.item.parents("ul.list_sortable").data('sortable_key')
    } else {
        sortable_selector = window.sortable_selector;
        sortable_key = window.sortable_key;
    }

    var counter = $(sortable_selector).parent('div').find('div.ListItem').length;
    var str = "";
    var ordered_ids = [];
    $(sortable_selector).find("li").each(function(i, obj) {
        var ListItem = $(obj).removeClass("clsMain");
        imgid = ListItem.find(".js_field").val();
        if (imgid) str = str + imgid + "=" + counter + ",";
        if (i == 0) ListItem.addClass("clsMain");
        ListItem.find(".num").html(counter + 1);
        //
        if (sortable_selector == "#images_list" || sortable_selector == "#documents_list") {
            ordered_ids.push(ListItem.data('id'));
        }
        counter++;
    });
    //
    if (sortable_selector == "#images_list") {
        $('#image_ids').val(ordered_ids.join(','));
    }
    if (sortable_selector == "#documents_list") {
        $('#document_ids').val(ordered_ids.join(','));
    }
}

function add_price_breakdown() {
    imz_dialog({
        'div_selector': '#price_breakdown_dialog'
    })
}

function add_area_breakdown() {
    imz_dialog({
        'div_selector': '#area_breakdown',
        width: 450
    })
}
$(document).ready(function() {
    //COMMENT: bind blue events
    $("#development_id").change(fields_on_blur);
    $("#title,#description,#price,#rental,#area,#existing_username,#existing_password,#fullname,#contact_email,#phone0,#phone1,#phone2,#password,#security,#adv_amount,#monthly_instalments,#no_of_instalments").blur(
        function(e) {
            fields_on_blur(this);
        }
    );
    /* attach_evnts(); */
    if ($.fn.sortable)
        $(".list_sortable").sortable({
            placeholder: "ListItem ui-state-highlight",
            tolerance: "pointer",
            update: sort_update
        });
    features_popup = $("<div/>").dialog({
        appendTo: "#hfeatures",
        autoOpen: false,
        title: "Property Features",
        width: 850,
        dialogClass: "features_popup ui-dialog_orng bgw",
        close: function(ev, ui) {
            update_features();
        }
    });
    $('.ui-widget-overlay').live("click", function() {
        $(".ui-button").click();
    });
    $("#finance_available,#const_status,#occupancy_status,#mode_of_funds,#mortgage_approved").live("change", function() {
        show_hide_options();
    });
    /*	if(Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor')>0)
    	{
    		$('.upload_images').removeAttr("multiple");
    		$(".multipleuploader").show();
    	} */


    if (step_value == 1)
        price_break_down_events();

    $(".hot_listings_cls").attr("title", 'title').tooltip({
        tooltipClass: "ttg tooltip_info_cls2",
        position: {
            my: "left-46 bottom-13",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: function() {
            return $(".hot_listings_txt").html();
        }
    });
    $(".hot_listings_cls_olx").attr("title", 'title').tooltip({
        tooltipClass: "ttg tooltip_info_cls2",
        position: {
            my: "left-46 bottom-13",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: function() {
            return $(".olx_feature_txt").html();
        }
    });
    $(".pending_listing_feature_msg").attr("title", 'title').tooltip({
        tooltipClass: "ttg tooltip_info_cls2",
        position: {
            my: "left-46 bottom-13",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: function() {
            return $(".mark_feature_pending_txt").html();
        }
    });
    $(".super_hot_listings_cls").attr("title", 'title').tooltip({
        tooltipClass: "ttg tooltip_info_cls2",
        position: {
            my: "left-46 bottom-13",
            at: "center top",
            collision: 'none',
            using: function(position, feedback) {
                $(this).append("<div class='bgc tt_arrow'></div>").css(position);
            }
        },
        content: function() {
            return $(".super_hot_listings_txt").html();
        }
    });
});

function rentalFieldsBlur(obj) {
    from_percent = 0;
    rental = $("#rental").val() || "";
    fieldvalue = obj.value || 0;
    if (obj.name.indexOf("_perc") > -1) {
        field = $("#" + obj.name.replace("_perc", ""));
        field_percent = $(obj);
        from_percent = 1;
    } else {
        field = $(obj);
        field_percent = $("#" + obj.name + "_perc");
    }
    if (rental <= 0 || rental == "") {
        field.val("");
        field_percent.val("");
    } else {
        if (from_percent) {
            result = Math.round((fieldvalue * rental) * 100) / 100;
            field.val(result || "");
        } else {
            result = Math.round((fieldvalue / rental) * 100) / 100;
            field_percent.val(result || "");
        }
    }
}

function set_classess() {
    if ($("ul#images_list .ListItem").length == 0)
        $("#UploadImages").removeClass("limit_exceeds noItems").addClass("noItems");
    else
        $("#UploadImages").removeClass("limit_exceeds noItems");
}

function remove_image(image_id, link, del) {
    del = del || false;

    if (!del) {
        $(link).parents("li").remove();
        set_number_text("#images_list");
        $(".message_box_files").hide();

        all_img_ids = $("#image_ids").val().split(",");
        removeArrayItem(all_img_ids, image_id);
        $("#image_ids").val(all_img_ids);

        if ($("#image_bank_ids").length > 0) {
            all_bank_img_ids = $("#image_bank_ids").val().split(",");
            removeArrayItem(all_bank_img_ids, image_id);
            $("#image_bank_ids").val(all_bank_img_ids);
        }
        set_classess();
    } else {
        del_image_id = image_id.split('|')[0];
        $(link).css({
            "pointer-events": "none"
        }).text('Removing...');
        jsAjax(request_url_image + "&delete_image=" + del_image_id, function(str) {
            if (str) {
                $(link).parents("li").remove();
                set_number_text("#images_list");
                $(".message_box_files").hide();

                all_img_ids = $("#image_ids").val().split(",");
                removeArrayItem(all_img_ids, image_id);
                $("#image_ids").val(all_img_ids);
                set_classess();
            } else {
                $(link).removeAttr("style").text('Remove this Image');
            }
        });
    }
}

function add_more_videos(fromBank) {
    hide_popup();

    count = $(".list_sortable#videos_list li").length;
    if (count >= video_upload_limit || (count + 1) >= video_upload_limit)
        $("#add_more_videos").hide();
    if (count >= video_upload_limit) {
        return;
    }
    if (fromBank)
        tempItem = $(window["indexed_list_html_" + fromBank]).appendTo($("#videos_list"));
    else
        tempItem = $("#ListItem_").clone().attr("id", "ListItem_" + count).show().appendTo($("#videos_list"));
    count += $('#Uploadvideos').find('div.ListItem').length;
    tempItem.find(".num").html(count + 1);
    set_video_classess();
}

function check_image_count(func_name) {
    if ($("ul#images_list .ListItem").length == 0) {
        var txt = "";
        txt += "<div style='text-align:center;'>";
        txt += "<div>There are no images uploaded with your listing. We suggest that you add images before uploading a video. Do you wish to proceed without adding images?</div><br>";
        txt += "<table width=\"100%\" align=\"center\"><tr><td style='text-align:center;'>";

        if (func_name == "add_more_videos")
            txt += "<input type='button' class='bg_orng' value='Yes' onclick='add_more_videos();'>&nbsp;&nbsp;";
        else if (func_name == "get_video_bank")
            txt += '<input type="button" class="bg_orng" value="Yes" onclick="get_from_bank(\'' + neww + '\',\'' + func_name + '\');">&nbsp;&nbsp;';

        txt += "<input type='button' class='bg_orng' value='No' onclick='hide_popup();' >";
        txt += "</td></tr></table>";
        txt += "</div>";
        show_popup("Note", txt);
    } else {
        add_more_videos();
    }
}

temp_loading1 = "<img class='loading' src='" + paths.images_css + "/loading.gif' />";
temp_loading1 = "<img class='loading' src='" + this_domain + "/images/common/loading.gif' />";
temp_loading_new = "<div class='lds-ellipsiss'><div></div><div></div><div></div><div></div></div>"
var Selected_Ids = "";
var selected_imgs = [];
var selected_imgs_count = "";

function row_select(div) {
    // ----------------------

    img_url = $(div).attr('data-image');
    uuid = $(div).attr('data-uuid');

    checkbox = $(div).find("input[type=checkbox]");
    ItemId = checkbox.val();

    if (checkbox.attr("checked")) {
        $(div).removeClass("selected");
        delete selected_imgs[ItemId];
    } else {
        $(div).addClass("selected");
        selected_imgs[ItemId] = {
            image_id: uuid,
            image_url: img_url
        };
    }

    // console.log(ItemId, selected_imgs);

    // ----------------------

    is_checked = checkbox.attr("checked", !checkbox.attr("checked")).attr("checked");

    temp_array = Selected_Ids.split(",");
    if (is_checked)
        Selected_Ids = Selected_Ids + ItemId + ",";
    else {
        temp_array = removeArrayItem(temp_array, ItemId);
        Selected_Ids = temp_array.join(",");
    }

    selected_imgs_count = "";
    selected_imgs_count = Object.keys(selected_imgs).length;
    if (selected_imgs_count == 0) selected_imgs_count = "";
    $("#CountSelected").html(selected_imgs_count);
}

function get_from_bank(obj, param) {
    Selected_Ids = "";

    title_text = $(obj).data('title');
    ids_array = [];
    $(document).find('ul#images_list li.ListItem').each(function(i, obj) {
        uuid = $(obj).data('id').split("|");
        ids_array.push(uuid[1]);
    })
    imz_dialog({
        'div_selector': '#common_popup',
        width: 750,
        title: title_text,
        html: temp_loading1
    });
    jsAjax(request_url + "&" + param + "=1&v=" + ajax_cache_ver, function(str) {
        uslist = $("#common_popup .dialog_container").html(str);
        for (i in ids_array) {
            each_id = ids_array[i];
            uslist.find('li.drow').each(function(i, obj) {
                uuid = $(obj).data('uuid').split("|");
                if (uuid.indexOf(each_id) >= 0) {
                    $(obj).find("input").attr("checked", true);
                    $(obj).addClass("selected").css('pointer-events', 'none');
                }
            });
        }
        $("#common_popup ul").height($(window).height() - 200).addClass("fixheight");
        $("#common_popup").center_screen("fixed");
    });
}

function BankDataSearch(form) {
    query = $(form).serialize();
    load_image = "<center><img src='" + this_domain + "/images/common/loading.gif' style='padding: 15px;' /></center>";
    $("#MyDataBank ul").html(load_image);
    $("#MyDataBank .page_value").val("");
    $.get(request_url + "&SearchData=1&" + query, function(str) {
        uslist = $("#MyDataBank ul").html(str);
        // Old selected imgs
        ids_array = [];
        $(document).find('ul#images_list li.ListItem').each(function(i, obj) {
            uuid = $(obj).data('id').split("|");
            ids_array.push(uuid[1]);
        })
        for (i in ids_array) {
            each_id = ids_array[i];
            uslist.find('li.drow').each(function(i, obj) {
                uuid = $(obj).data('uuid').split("|");
                if (uuid.indexOf(each_id) >= 0) {
                    $(obj).find("input").attr("checked", true);
                    $(obj).addClass("selected").css('pointer-events', 'none');
                }
            });
        }
        // New selected imgs
        ids_array = Selected_Ids.replace(/,$/, "").split(",");
        for (i in ids_array) {
            each_id = ids_array[i];
            uslist.find("input[value='" + each_id + "']").attr("checked", true);
            uslist.find("#row_" + each_id).removeClass("selected").addClass("selected");
        }
    });
    return false;
}

function BankDataSearchPaginate(page_value) {
    $("#MyDataBank .page_value").val(page_value);
    $("#MyDataBank .popupSearch").submit();
}

function remove_floor_plan(floorplan_id) {
    $("#ListItem_" + floorplan_id).remove();
    jsAjax(request_url + "&delete_floorplan=" + floorplan_id);
    $("#UploadImages").removeClass("limit_exceeds");
    if ($("#Uploadfloorplan .ListItem").length == 0) $("#UploadImages").addClass("noItems");
    set_number_text("#floorplan_list");
    $(".message_box_files").hide();
}

function set_document_classess() {
    if ($("ul#documents_list .ListItem").length == 0)
        $("#Uploaddocuments").removeClass("limit_exceeds noItems").addClass("noItems");
    else
        $("#Uploaddocuments").removeClass("limit_exceeds noItems");
}

function remove_document(document_id, link, del) {
    del = del || false;

    if (!del) {
        $(link).parents("li").remove();
        set_number_text("#documents_list");
        $(".message_box_files").hide();

        all_doc_ids = $("#document_ids").val().split(",");
        all_doc_ids = removeArrayItem(all_doc_ids, document_id);
        $("#document_ids").val(all_doc_ids.join(','));

        set_document_classess();
    } else {
        $(link).css({
            "pointer-events": "none"
        }).text('Removing...');
        jsAjax(request_url + "&delete_document=" + document_id, function(str) {
            if (str) {
                $(link).parents("div.ListItem").remove();
                set_number_text("#documents_list");
                set_document_classess();
            } else {
                $(link).removeAttr("style").text('Remove this document');
            }
        });
    }
}

function set_video_classess() {
    if ($("ul#videos_list .ListItem").length == 0)
        $("#Uploadvideos").removeClass("limit_exceeds noItems").addClass("noItems");
    else
        $("#Uploadvideos").removeClass("limit_exceeds noItems");
}

function remove_video(video_id, link, del) {
    del = del || false;

    if (!del) {
        $(link).parents("li").remove();
        if ($("#Uploadvideos .ListItem").length == 0) $("#Uploadvideos").addClass("noItems");
        $("#add_more_videos").show();
        set_number_text("#videos_list");
        set_video_classess();
    } else {
        $(link).css({
            "pointer-events": "none"
        }).text('Removing...');
        jsAjax(request_url + "&delete_video=" + video_id, function(str) {
            if (str) {
                $(link).parents("div.ListItem").remove();
                video_upload_limit += 1;
                $("#add_more_videos").show();
                set_number_text("#videos_list");
                set_video_classess();
            } else {
                $(link).removeAttr("style").text('Remove this Video');
            }
        });
    }
}

function listing_owner_change(obj) {
    var userdata = window["agency_users_list"] || {};
    userdata = userdata[$(obj).val()] || {};

    //if( userdata.email && userdata.userid )
    {
        form = $(".add_property_form");
        form.find("input[name=userid]").val(userdata.userid);
        form.find("input[name=email]").val(userdata.email);
        form.find("input[name=name]").val(userdata.name);

        var phone = userdata.phone || "";
        phone = phone.split("-");
        form.find("input[name=phone0]").val(phone[0]);
        form.find("input[name=phone1]").val(phone[1]);
        form.find("input[name=phone2]").val(phone[2]);
        var phone_all = phone.slice(2);
        phone_all = phone_all.join("-");
        form.find("input[name=phone2]").val(phone_all);

        var cell = userdata.cell || "";
        cell = cell.split(",");
        if (cell.length > 0) {
            var j = cell.length;
            $(".cellinputs").remove();
            for (var i = 0; i < cell.length; i++) {
                var add_new_cell_link = "";

                if (i == cell.length - 1) {
                    add_new_cell_link = '<a class="l add_price_breakdown add_new_cell_input_listing_form" id="add_cell_id" style="margin-left: 10px;" href="javascript:void(0)" onclick="add_new_cell_input_listing_form(this.id);">Add Another Mobile Number</a>';
                } else {
                    add_new_cell_link = ' <a class="l add_price_breakdown add_new_cell_input_listing_form" id="add_cell_id_' + j + '"style="margin-left: 10px; color:red" href="javascript:void(0)" onclick="remove_cell_input_listing_form(this.id);">Remove Mobile Number</a>';
                }
                var new_input_with_div = '<div class="divrow cellinputs"><label class="label l font_s">Mobile #' + j + ': <img src="https://profolio.zameen.com/images/common/asteriskred.gif"></label><span class="ph_input_box l"><input type="text" name="cell[]" id="cell' + j + '" value="' + cell[i] + '" style="width:245px;" maxlength="100" class="rfield l cell_input_class"><span id="valid-msg-cell' + j + '" class="valid-msg-cell" style="display: none"></span><span id="error-msg-cell' + j + '" class="error-msg-cell" onmouseover="show_cell_message_tooltip(this)" style="right:10px;display: none"></span></span><div class="bgc infologo r"><p>Enter your mobile number along with international dialing code.<br>Example: +92-3001234567</p></div>' + add_new_cell_link + '</div>';


                $('.put_cell_input_after_this').after(new_input_with_div);
                var input = $("#cell" + j);
                intlValidation(input);
                j--;
            }

        } else {
            // no need to perform any action here for now
        }
        form.find("input[name=cell0]").val(cell[0]);
        form.find("input[name=cell1]").val(cell[1]);

        var fax = userdata.fax || "";
        fax = fax.split("-");
        form.find("input[name=fax0]").val(fax[0]);
        form.find("input[name=fax1]").val(fax[1]);
        form.find("input[name=fax2]").val(fax[2]);
    }
    check_zameen_credits();
    check_olx_credits();
}

function add_new_cell_input_listing_form(id) {

    var new_input_with_div = "";
    //New cell input must have greater cell
    var last_cell_id = $('input[id^="cell"]').last().attr('id');
    var total_cell_inputs_count = $("#" + last_cell_id).attr('id').replace(/cell/, '');
    total_cell_inputs_count++;
    var new_input_with_div = '<div class="divrow cellinputs"><label class="label l font_s">Mobile #' + total_cell_inputs_count + ': <img src="https://profolio.zameen.com/images/common/asteriskred.gif"></label><span class="ph_input_box l"><input type="text" name="cell[]" id="cell' + total_cell_inputs_count + '" value="" style="width:245px;" maxlength="100" class="rfield l cell_input_class"><span id="valid-msg-cell' + total_cell_inputs_count + '" class="valid-msg-cell" style="display: none"></span><span id="error-msg-cell' + total_cell_inputs_count + '" class="error-msg-cell" onmouseover="show_cell_message_tooltip(this)" style="right:10px;display: none"></span></span><div class="bgc infologo r"><p>Enter your mobile number along with international dialing code.<br>Example: +92-3001234567</p></div><a class="l add_price_breakdown add_new_cell_input_listing_form" id="add_cell_id_' + total_cell_inputs_count + '"" style="margin-left: 10px; color:red" href="javascript:void(0)" onclick="remove_cell_input_listing_form(this.id);">Remove Mobile Number</a></div>';
    $('#' + last_cell_id).parent().parent().parent().after(new_input_with_div);

    var input = $("#cell" + total_cell_inputs_count);
    intlValidation(input);
}

function remove_cell_input_listing_form(id) {
    var id = id.split("_");
    $("#cell" + id[3]).parent().parent().parent().remove();
}

function search_client() {
    $("#client_search_div").show().html("<center><img src='" + this_domain + "/images/common/loading.gif' /></center>");
    var data = {
        search_value: $("#searchable_text").val(),
        search_field: $("#search_type").val(),
        client_id: $("#tmp_client_id").val()
    };
    $.get(request_url + '&search_clients=1', data, function(str) {
        $("#tmp_client_id").val("");
        $("#client_search_div").html(str);
        //$(".rowselect.selected,.rownormal.selected").get(0).scrollIntoView();
    });
}

function client_type_radio(radio) {
    if ($(radio).val() == "New Client") {
        $("#existing_client_div").hide();
        $("#new_client_div").show();
        //$("#client_search_div").hide();
        $("#existing_cleint_error").hide();
    } else {
        $("#existing_client_div").show();
        $("#new_client_div").hide();
        //$("#client_search_div").hide();
    }
}

function client_select_radio(radio) {
    $(".rowselect.selected,.rownormal.selected").removeClass("selected");
    $(radio).parent().parent().addClass("selected");
}


function show_jeffi_task_popup() {
    show_popup("Make It Super Hot", jeffi_task_popup, 650);
    //imz_dialog({'div_selector':'#common_popup',width:650,title:"Make It Super Hot",html:txt_msg});
    init_jeffi_date_time_picker();
} ////End Of Function

$(document).ready(function() {
    jeffi_task_popup = $(".jeffi_task").html();
    $(".jeffi_task").remove();
    //init_jeffi_date_time_picker();
});

function init_jeffi_date_time_picker() {
    $('#date_added_jeffi').removeClass('hasDatepicker').datetimepicker({
        minDate: 2,
        dateFormat: 'dd/mm/yy',
        timeFormat: 'hh:mm',
        hourMin: 0,
        stepMinute: 15,
        hourMax: 24,
        minuteGrid: 15
    });
}

function submit_jeffi_task() {
    $.post(request_url + "&add_jeffi_task=1", $("#jeffi_task_form").serialize(), function(str) {
        data = eval('(' + str + ')');
        $(".message_box_popup").html(data.message).show();
        $("#jeffi_task_form").hide();
        //hide_popup();
    });

}

function show_users_list() {
    imz_dialog({
        'div_selector': '#users_list_dialog'
    })
}


function listing_owner_change_new(obj) {
    var userdata = window["agency_users_list"] || {};
    userdata = userdata[$(obj).val()] || {};
    //if( userdata.email && userdata.userid )
    {
        form = $(".add_property_form");
        form.find("input[name=userid]").val(userdata.userid);
        form.find("input[name=email]").val(userdata.email);
        form.find("input[name=name]").val(userdata.name);

        var phone = userdata.phone || "";
        phone = phone.split("-");
        form.find("input[name=phone0]").val(phone[0]);
        form.find("input[name=phone1]").val(phone[1]);
        form.find("input[name=phone2]").val(phone[2]);
        var phone_all = phone.slice(2);
        phone_all = phone_all.join("-");
        form.find("input[name=phone2]").val(phone_all);

        var cell = userdata.cell || "";
        cell = cell.split("-");
        form.find("input[name=cell0]").val(cell[0]);
        form.find("input[name=cell1]").val(cell[1]);

        var fax = userdata.fax || "";
        fax = fax.split("-");
        form.find("input[name=fax0]").val(fax[0]);
        form.find("input[name=fax1]").val(fax[1]);
        form.find("input[name=fax2]").val(fax[2]);
    }

    $(imz_filter).click();
}


function show_users_list() {
    imz_dialog({
        'div_selector': '#users_list_dialog'
    })
}


function listing_owner_change_new(obj) {
    var userdata = window["agency_users_list"] || {};
    userdata = userdata[$(obj).val()] || {};
    //if( userdata.email && userdata.userid )
    {
        form = $(".add_property_form");
        form.find("input[name=userid]").val(userdata.userid);
        form.find("input[name=email]").val(userdata.email);
        form.find("input[name=name]").val(userdata.name);

        var phone = userdata.phone || "";
        phone = phone.split("-");
        form.find("input[name=phone0]").val(phone[0]);
        form.find("input[name=phone1]").val(phone[1]);
        form.find("input[name=phone2]").val(phone[2]);
        var phone_all = phone.slice(2);
        phone_all = phone_all.join("-");
        form.find("input[name=phone2]").val(phone_all);

        var cell = userdata.cell || "";
        cell = cell.split("-");
        form.find("input[name=cell0]").val(cell[0]);
        form.find("input[name=cell1]").val(cell[1]);

        var fax = userdata.fax || "";
        fax = fax.split("-");
        form.find("input[name=fax0]").val(fax[0]);
        form.find("input[name=fax1]").val(fax[1]);
        form.find("input[name=fax2]").val(fax[2]);
    }

    $(imz_filter).click();
}

function check_premium_quota(id, page) {
    $("#main_img_id").val($("#images_list .clsMain").data('id'));

    if (validate_form()) {
        if (page == 'add') {
            var purpose_id = $('#purpose').val();
            var location_id = $.trim($('#loc_selector').val());
            var type_id = $('#type').val();
            if (location_id == '' || $('#last_location').val() != '') //last_location has auto suggest's value
                location_id = $('#last_location').val();

            if (purpose_id != '' && location_id != '' && type_id != '') {
                var formData = $('.add_property_form').serialize();
                $.post(request_url + "&check_premium_quota=1", formData, function(str) {
                    str = JSON.parse(str.trim());
                    // If insufficient quota error
                    if (str['error'] == "true" && cuipplf == 0) {
                        txt += "<div class='credit-runout popup-redefined'>";
                        txt += "<div>";
                        txt += "<span class='close_btn pull-right'></span>";
                        txt += "<input type='button' class='close_btn pull-right' onclick='hide_popup();' >";
                        txt += "</div>";
                        txt += "<div class='content'>";
                        txt += "<div class='logo-zameen'></div>";
                        txt += "<div class='title'>";
                        txt += "Quota insufficient for additional properties.";
                        txt += "</div>";
                        txt += "<p class='discription'>";
                        txt += "Please buy more quota or contact support.";
                        txt += "</p>";
                        txt += "<div class='clearfix'></div>";
                        txt += "<p class='center-align'>";
                        txt += "<a href='" + this_domain + "/profolio/index.php?tabs=13&section=advertise' class='btn-buycredit'>";
                        txt += "Buy Quota";
                        txt += "</a>";
                        txt += "</div>";
                        txt += "<ul class='contact-detials'>";
                        txt += "<li>";
                        txt += "<h3>Call to Buy Credits</h3>";
                        txt += "<p>0800-ZAMEEN (92633)</p>";
                        txt += "</li>";
                        txt += "</ul>";
                        txt += "<div class='clearfix'></div>";
                        txt += "</div>";
                        txt += "</div>";
                        show_popup_redefined(" ", txt);
                    } else if (str['error'] == "true" && cuipplf == 1 && $('#zameen_checkbox').is(':checked')) {
                        deactivate_zameen_checkbox();
                    } else // If zonefactor or peakfactor applies and msg not empty		
                    {
                        var call_func = "";

                        if ((str['return_msg'] != "false" || (str['olx_return_msg'] != "false" && $('#option1').is(':checked'))) && ((edit_property_page == 1 && posted_on_zameen == 1) || $('#zameen_checkbox').is(':checked') || $('#option1').is(':checked')) || (str['return_msg'] != "false" && agency_user_quota[$("#listing_owner").val()].premium_user == 1)) {
                            // zameen getting zone factor message but is not checked
                            if (str['return_msg'] != "false" && !$('#zameen_checkbox').is(':checked') && $('#option1').is(':checked') && str['olx_return_msg'] == "false") {
                                continue_submission(id);
                                return;
                            }
                            if (is_new_olx_system && ($('#option1').is(':checked') && str['olx_return_msg'] != "false"))
                                olx_str = "<b>OLX Listing: </b>  <br>" + str['olx_return_msg'] + "<br>";

                            var txt = "";
                            txt += "<div style='text-align:left;'>";

                            if (str['return_msg'] != "false" &&
                                ($('#zameen_checkbox').is(':checked') || $('#zameen_checkbox').length == 0)) {
                                str_zam = str['return_msg'] + "<br>";
                                str_zam = "<b>Zameen Listing:</b>  <br>" + str_zam;
                                txt += str_zam + " <br>";
                            }

                            if (is_new_olx_system && ($('#option1').is(':checked') && str['olx_return_msg'] != "false"))
                                txt += olx_str + "<br>";

                            txt += "<table width=\"100%\" align=\"center\"><tr><td style='text-align:center;'>";

                            call_func = "submit_property(\"" + id + "\");";

                            // post listing
                            if ($("#listing_purpose").val() == undefined)
                                call_func = "continue_submission(\"" + id + "\");";

                            txt += "<input type='button' class='bg_orng' value='Yes' onclick='" + call_func + "' >&nbsp;&nbsp;";
                            txt += "<input type='button' class='bg_orng' value='No' onclick='hide_popup();' >";

                            txt += "</td></tr></table>";
                            txt += "</div>";
                            show_popup("Quota Alert", txt);
                        } else // If no zonefactor or peakfactor applied then proceed
                        {
                            // Post listing
                            if ($("#listing_purpose").val() == undefined) {
                                continue_submission(id);
                            }
                            // Edit listing
                            else {
                                submit_property(id);
                            }
                        }
                    }
                });
            } else {
                imz_filter.click();
                $('#' + id).trigger('click');
            }
        } else {
            if (edit_page_form_str == $('.add_property_form').serialize()) {
                // redirect to status page if nothing changed
                window.location.href = edit_page_redirect_url;
            } else {
                // submit form directly in case of edit
                submit_property(id);
            }
        }
    } else {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    }
}

// This function has made seprate for post to olx from status/confirmation page. It returns the status of the listing, wheather the zone factor is applicable or not and it's details. 
function check_premium_quota_confirmation_page(purpose, userid, type, loc_selector, platform) {
    var data = {
        purpose: purpose,
        userid: userid,
        type: type,
        loc_selector: loc_selector,
        platform: platform

    };
    $.post(request_url + "&check_premium_quota_for_status_and_grid_page=1", data, function(str) {

        str = JSON.parse(str.trim());
        // If insufficient quota error
        if (str['error'] == "true") {
            var msg = str['error_msg'];
            $('#error_confirm_txt').text(msg);
            displayPopup('utl-error-credit-popup');
            return;
        } else // If zonefactor or peakfactor applies and msg not empty		
        {
            if (str['return_msg'] != "false") {
                $('.quota_to_be_utilized').text(str['quantity']);
                var quantity = str['quantity'];
                var extra_quantity = quantity - 1;
                extra_quantity = extra_quantity.toFixed(2);
                var rsp_msg = "You are posting a listing in a premium location an overall " + extra_quantity + " extra quota will be deducted. Do you wish to continue?";
                $('#sum_note_txt').text(rsp_msg);
                $('.quantity-zameen').text(str['quantity']);
                displayPopup('platform-utl-credit-popup');

            } else // If no zonefactor or peakfactor applied then proceed
            {
                displayPopup('platform-utl-credit-popup');
                return;
            }

        }

    });


}

function continue_submission(id) {
    imz_filter.click();
    var is_olx_box_checked = $('#option1').is(':checked');
    var is_zameen_box_checked = $('#zameen_checkbox').is(':checked');
    var txt = "";
    if (is_new_olx_system) {
        if (is_zameen_box_checked) {
            txt += "<div style='text-align:left;'>";
            txt += "<b>Zameen Listing: </b>  <br>";
            txt += "You shall not be able to alter the (Purpose, Type and Location) fields after you submit this form. Do you wish to continue?" + "<br><br>";
        }
        if (is_olx_box_checked) {
            txt += "<div style='text-align:left;'>";
            txt += "<b>OLX Listing: </b>  <br>";
            txt += "You shall not be able to alter the (Purpose, Type and Location) fields after you submit this form. Do you wish to continue?" + "<br>";
        }
        // incase of agency is mapped on olx and shifted to new quota system but user has not yet shifted to new OLX quota system.
        if (is_zameen_box_checked == false && is_olx_box_checked == false) {
            txt += "<div style='text-align:left;'>";
            txt += "You shall not be able to alter the (Purpose, Type and Location) fields after you submit this form. Do you wish to continue?";
        }
    } else {
        txt += "<div style='text-align:left;'>";
        txt += "You shall not be able to alter the (Purpose, Type and Location) fields after you submit this form. Do you wish to continue?";
    }
    txt += "<table width=\"100%\" align=\"center\"><tr><td style='text-align:center;'>";
    txt += "<input type='button' class='bg_orng' value='Yes' onclick='submit_property(\"" + id + "\");'>&nbsp;&nbsp;";
    txt += "<input type='button' class='bg_orng' value='No' onclick='hide_popup();' >";
    txt += "</td></tr></table>";
    txt += "</div>";
    show_popup("Listing Update Alert", txt);
}

function submit_property(id) {
    if (validate_form()) {
        $(".bg_orng").css("pointer-events", "none");
        $('.add_property_form .submit_button').css("pointer-events", "none");
        imz_dialog({
            'div_selector': '#common_popup',
            title: 'Submittion Form',
            html: temp_loading_new
        });
        $("#common_popup").center_screen("fixed");
        var formData = $('.add_property_form').serialize();
        $.post(request_url + "&add_property_form_submit=1", formData, function(str) {
            str = JSON.parse(str.trim());
            if (str.error) {
                $('.add_property_form .submit_button').css("pointer-events", "auto");
                $('#error_message_box').html(str.error_msg).css('display', 'block');
                hide_popup();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
            } else {
                $('#error_message_box').css('display', 'none');
                window.location.href = str.return_url;
            }
        });
    } else {
        hide_popup();
        return false;
    }
}

function close_lib(obj) {
    cClick();
}

function empty_form(selector) {
    var exclude_inputs = ['name', 'email', 'phone0', 'phone1', 'phone2', 'cell0', 'cell1', 'cell[]', 'fax0', 'fax1', 'fax2', 'website', 'video_link[]', 'video_title[]'];

    if (selector == "purpose") {
        clear_form('purpose');
    } else if (selector == "type") {
        clear_form('type');
    } else if (selector == "city") /*|| selector == "last_location" || selector == "loc_selector" */ {
        clear_form();
    } else if (selector == "last_location" || selector == "loc_selector") {
        clear_form('sub_location');
    }

    // Clear Form input type text
    $("#" + selector).closest('form')
        .find("input[type=text], textarea")
        .filter(function(key, input) {
            return !exclude_inputs.includes($(input).attr('name'));
        }).val("");
}

function clear_form(exclude_input) {
    if (exclude_input == "purpose") {
        // Type (Sale or Rent)
        $("#ptype_push_buttons .checked").removeClass("checked");
        $("#ptype").val('');
        // Subtype
        $("#type_push_buttons .checked").removeClass("checked").parent().parent().parent().hide();
        $("#type").val('');

        // Wanted Type
        $("#wanted_for_push_buttons .checked").removeClass("checked");
        $("#wanted_for").val('');
    }

    if (exclude_input == "type" || exclude_input == "purpose") {
        // City
        $("#city-menu .ui-menu-item").first().trigger('click');
        $("#loc_selector").val('');
        $("#last_location").val('');

        // Map
        $("#map_div").hide();

        // Features hide as dependent on type id
        $(".div_features").hide();
    }

    // Property Details Section (SALE WANTED RENTAL PRICE DETAILS)
    $(".price_text").html('&nbsp;');

    // *default area unit
    $("#unit").val(default_area_unit).next().text(default_area_unit);

    // *default expires after
    $("#expiry_days").val("30").next().text("1 Month");


    // Dynmaic fetch all select ids to reset 
    var exclude_select = ['city', 'unit', 'expiry_days', 'listing_owner', 'occupancymonth', 'occupancyyear', 'development_id'];

    if (exclude_input == "sub_location")
        exclude_select.push('_cat_selector_3', '_cat_selector_4', '_cat_selector_5', '_cat_selector_6', '_cat_selector_7', '_cat_selector_8');

    $("form select").each(function() {
        if (!exclude_select.includes(this.id)) {
            $("#" + this.id).val('').next().text("Please Select")
        }
    });

    // CLIENTS DETAILS
    $("#chk_client").removeAttr('checked');
    $("#main_client_div").hide();

    $("#price_notification").hide();

    // Features
    $("#hfeatures input[type=checkbox]").removeAttr("checked");
    $("#hfeatures select").val("");
    // $(".num_of_feature_text").parent().closest('div').css('display', 'block').prev('div').css('display', 'none');
    // checkboxes

}

// counter to stop below function from firing on page load
var counter_for_pct = 0;

$("#price, #rental, #area, #unit").live("change", function() {
    counter_for_pct++;
    if (counter_for_pct == 1) {
        return false;
    }

    invoke_price_check_api();
});

// fetch inputs.. if not empty ..trigger price check api
function invoke_price_check_api() {

    /*
    	// If listing is being edited then do nothing
    	if( $("#listing_purpose").val() != undefined )
    	{
    		return;
    	}
    */
    var purpose_id = $('#purpose').val();
    var type_id = $('#type').val();


    var location_id = $.trim($('#loc_selector').val());
    if (location_id == '' || $('#last_location').val() != '') //last_location has auto suggest's value
        location_id = $('#last_location').val();


    var price = "";

    if (purpose_id == "2") // rent
        price = $("#rental").val();
    else // wanted n sale
        price = $("#price").val();


    var area = $("#area").val();
    var unit = $("#unit").val();


    if (purpose_id !== '' && type_id !== '' && location_id !== '' && price !== '' && area !== '' && unit !== '') {
        var data = {
            purpose_id: purpose_id,
            type_id: type_id,
            location_id: location_id,
            price: price,
            area: area,
            unit: unit
        };

        $('.notification_outer')
            .removeClass('notification_danger notification_default notification_warning')
            .addClass('notification_default');
        $('.notification_txt').text('Please wait while system reviews your property details');
        $('#price_notification').show().addClass('price-show').removeClass('price-hide');

        // trigger api
        $.post(request_url + "&price_check=1", data, function(str) {
            str = JSON.parse(str);
            if (str.show_msg > 0 && str.status != "on") {
                if (str.status == "crit_aa") {
                    // crit_aa orange
                    $('.notification_outer')
                        .removeClass('notification_default notification_danger notification_warning')
                        .addClass('notification_warning');
                } else if (str.status == "crit_p") {
                    // crit_p red

                    $('.notification_outer')
                        .removeClass('notification_default notification_warning notification_danger')
                        .addClass('notification_danger');
                }

                $("#price_notification .notification_txt").html(str.message);
            } else {
                $("#price_notification").hide().addClass('price-hide').removeClass('price-show');
            }

        });
    } else {
        return; // Do nothing
    }
}

function show_cell_message_tooltip(obj) {

    $(obj).attr("title", "").tooltip({
        tooltipClass: "ttg phone_tooltip_cls",
        position: {
            my: "left-25 bottom-10",
            at: "center top",
            collision: 'none',

        },
        content: 'Kindly provide a valid number.'
    }).tooltip("open");
}


$("#review_price").live("click", function(e) {
    e.preventDefault();
    var $window = $(window),
        $element = $('#price'),
        elementTop = $element.offset().top,
        elementHeight = $element.height(),
        viewportHeight = $window.height(),
        scrollIt = elementTop - ((viewportHeight - elementHeight) / 2);

    $('html, body').animate({
        scrollTop: scrollIt
    }, 500);
    $('#price').addClass('price_check_error');
    $('#price').focus();
    $("#price").css("border", "1px red solid");
});




/*============================
    Show popup on the screen according to screen size
*/
function displayPopup(id) {
    if (id) {
        removePopup(1);
        $('#full-body-overlay').fadeIn('fast', function() {
            $('#' + id).fadeIn('fast').addClass('utl-popup-active');
        }).addClass('active-overlay');
        style_element = window.getComputedStyle(document.getElementById(id));
        var element_outer_height = parseInt(style_element.paddingTop) + parseInt(style_element.paddingBottom) + $('#' + id).height();
        var element_outer_width = parseInt(style_element.paddingLeft) + parseInt(style_element.paddingRight) + $('#' + id).width();
        var top = 30;
        if (element_outer_height < $(window).height()) {
            top = ($(window).height() - element_outer_height) / 2;
            $('#' + id).css('position', 'fixed');
            $('body').addClass('freeze');
        } else {
            $('#' + id).css('position', 'absolute');
            window.scrollTo(0, 0);
        }
    }
}
//
function displayerrprPopup(id) {
    if (id) {
        removePopup(1);
        $('#full-body-overlay').fadeIn('fast', function() {
            $('#' + id).fadeIn('fast').addClass('utl-popup-active');
        }).addClass('active-overlay');
        style_element = window.getComputedStyle(document.getElementById(id));
        var element_outer_height = parseInt(style_element.paddingTop) + parseInt(style_element.paddingBottom) + $('#' + id).height();
        var element_outer_width = parseInt(style_element.paddingLeft) + parseInt(style_element.paddingRight) + $('#' + id).width();
        var top = 30;
        if (element_outer_height < $(window).height()) {
            top = ($(window).height() - element_outer_height) / 2;
            $('#' + id).css('position', 'fixed');
            $('body').addClass('freeze');
        } else {
            $('#' + id).css('position', 'absolute');
            window.scrollTo(0, 0);
        }
    }
}

function platformPopup(id) {
    var purpose = $('#plat_purpose_id').val();
    var selector = $('#plat_property_id').val();
    var userId = $('#plat_user_id').val();
    var type = $('#plat_type_id').val();
    var location_id = $('#plat_location_id').val();
    if (id == 'sum-superhot-row') {
        ConfirmBoxListingSuperHotNew(userId, selector);
        $('#sum-superhot-row').show();
        $('#sum-hot-row').hide();
        $('#sum-featured-row').hide();
        $('#post-olx-row').hide();
        $('#post-zameen-row').hide();
        $('.platform-logo-client-olx').hide();
        $('.platform-logo-client-zameen').hide();
        $('#platform-popup-row3').show();
        $('#platform-popup-row2').show();
        $('#sum_note_txt').show();
        $('#sum_heading_txt').text("Make this property Superhot");
        $('#platform-popup-row2').text("Credits Available ");
        $('#sum_confirm_txt').text("Following credits will be utilized:");
        $('#platform-popup-row3').text("Credits to be utilized");
        $("#sum-utl-button").attr('data-value', id);
        $("#sum-utl-button-error").attr('data-value', id);
        return;
    }
    if (id == 'sum-hot-row') {
        ConfirmBoxListingHotNew(userId, selector);
        $('#sum-hot-row').show();
        $('#sum-superhot-row').hide();
        $('#sum-featured-row').hide();
        $('.platform-logo-client-olx').hide();
        $('.platform-logo-client-zameen').hide();
        $('#post-olx-row').hide();
        $('#post-zameen-row').hide();
        $('#sum_note_txt').show();
        $('#sum_confirm_txt').text("Following credits will be utilized:");
        $('#platform-popup-row3').show();
        $('#platform-popup-row2').show();
        $('#platform-popup-row2').text("Credits Available ");
        $('#platform-popup-row3').text("Credits to be utilized");
        $('#sum_heading_txt').text("Make this property Hot");
        $("#sum-utl-button").attr('data-value', id);
        $("#sum-utl-button-error").attr('data-value', id);
    }
    if (id == 'sum-featured-row') {
        $('#sum-featured-row').show();
        $('#sum-superhot-row').hide();
        $('#post-olx-row').hide();
        $('#sum-hot-row').hide();
        $('.platform-logo-client-olx').hide();
        $('.platform-logo-client-zameen').hide();
        $('#sum_note_txt').hide();
        $('#post-zameen-row').hide();
        $('#sum_heading_txt').text("Make this property Featured");
        $('#sum_confirm_txt').text("Following credits will be utilized:");
        $('#platform-popup-row2').text("Credits Available ");
        $('#platform-popup-row3').show();
        $('#platform-popup-row3').text("Credits to be utilized");
        $("#sum-utl-button").attr('data-value', id);
        if ($('#is_new_olx_system').val()) {
            $('#sum_note_txt').show();
            ConfirmBoxListingOlxFeaturedNew(userId, selector);
        } else {
            displayPopup('platform-utl-credit-popup');
        }
    }
    if (id == 'post-olx-row') {
        $('#post-olx-row').show();
        $('.platform-logo-client-zameen').hide();
        $('.platform-logo-client-olx').show();
        $('#sum-superhot-row').hide();
        $('#sum-hot-row').hide();
        $('#sum-featured-row').hide();
        $('#post-zameen-row').hide();
        $('#sum_note_txt').hide();
        $('#sum_heading_txt').text("Posting this property to");
        $('#sum_confirm_txt').text("Following quota will be utilized:");
        $('#platform-popup-row2').text("Quota Available ");
        $('#platform-popup-row3').show();
        $('#platform-popup-row3').text("Quota to be utilized");
        $("#sum-utl-button").attr('data-value', id);
        if (is_new_olx_system) {
            $('#platform-popup-row2').text("Quota to be utilized");
            $('#platform-popup-row3').hide();
            $('#sum_note_txt').text("");
            $('#sum_note_txt').show();
            check_premium_quota_confirmation_page(purpose, userId, type, location_id, 'olx');
        } else {
            displayPopup('platform-utl-credit-popup');
        }
    }
    if (id == 'post-zameen-row') {

        $('#post-zameen-row').show();
        $('.platform-logo-client-zameen').show();
        $('.platform-logo-client-olx').hide();
        $('#post-olx-row').hide();
        $('#sum-superhot-row').hide();
        $('#sum-hot-row').hide();
        $('#sum-featured-row').hide();
        $('#platform-popup-row3').hide();
        $('#sum_note_txt').show();
        $('#sum_heading_txt').text("Posting this property to   ");
        $('#sum_confirm_txt').text("Following quota will be utilized:");
        // $('#platform-popup-row2').text("Quota Available ");
        $('#platform-popup-row2').text("Quota to be utilized");
        $("#sum-utl-button").attr('data-value', id);
        check_premium_quota_confirmation_page(purpose, userId, type, location_id, 'zameen');

    }
}
/*============================
    Remove popup from the screen
*/
function removePopup(rapid_hide = 0) {
    if (rapid_hide == 0) {
        $('.utl-popup-active').fadeOut('fast', 'linear', function() {
            $('#full-body-overlay').fadeOut('fast', 'linear').removeClass('active-overlay');
        }).removeClass('utl-popup-active');
    } else {
        if (!$('#full-body-overlay').hasClass('active-overlay'))
            $('#full-body-overlay').hide().removeClass('active-overlay');
        $('.utl-popup-active').hide().removeClass('utl-popup-active');
    }
}
/*============================
    Dropdown Button from the screen
*/
function utlDropdown(obj) {
    var id = $(obj).siblings('.utl-dropdown-content').attr("id");
    $('.utl-dropdown-content').animate({
        'margin-top': '-96px'
    }, 50, 'linear');
    $('.utl-dropdown-content').fadeOut(100, 'linear');
    $("#" + id).fadeIn(25, 'linear');
    $("#" + id).animate({
        'margin-top': '-48px'
    }, 25, 'linear');
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.utl-dropbtn')) {
        $('.utl-dropdown-content').animate({
            'margin-top': '-96px'
        }, 50, 'linear');
        $('.utl-dropdown-content').fadeOut(100, 'linear');
    }
}
// 
function ajax_platform_controller(obj) {
    // action call gets the value of the element from the generic popup form. 
    var actioncall = $(obj).attr('data-value');
    var purpose = $('#plat_purpose_id').val();
    var property_id = $('#plat_property_id').val();
    var property_owner_id = $('#plat_user_id').val();
    var selector = $('#plat_property_id').val();
    var userId = $('#plat_user_id').val();
    if (actioncall == "error-hot-row") {
        $('#plat_purpose_id').val();
        $('#plat_property_id').val();
        $('#plat_user_id').val();
        $("#sum-superhot-row").show();
    }
    if (actioncall == "error-superhot-row") {
        $('#plat_purpose_id').val();
        $('#plat_property_id').val();
        $('#plat_user_id').val();
        $("#sum-superhot-row").show();
    }
    if (actioncall == "error-featured-row") {
        $('#plat_purpose_id').val();
        $('#plat_property_id').val();
        $('#plat_user_id').val();
        $("#sum-superhot-row").show();
    }
    if (actioncall == "sum-superhot-row") {
        $("#sum-utl-button").prop('disabled', true);
        SetListingSuperHotNew(userId, selector);
        return;
    }
    if (actioncall == "sum-hot-row") {
        $("#sum-utl-button").prop('disabled', true);
        SetListingHotNew(userId, selector);
    }
    if (actioncall == "sum-featured-row") {
        $("#sum-utl-button").prop('disabled', true);
        make_listing_feature(property_id, property_owner_id, purpose);
    }
    if (actioncall == "post-olx-row") {
        $("#sum-utl-button").prop('disabled', true);
        post_to_olx(property_id);
    }
    if (actioncall == "post-zameen-row") {
        $("#sum-utl-button").prop('disabled', true);
        post_to_zameen(property_id);
    }

}

function make_listing_feature(property_id, property_owner_id, purpose) {
    var value = 0;
    $.post(request_url + "&olx_listing_feature_consume_package=1" + "&user_id=" + property_owner_id + "&property_id=" + property_id + "&purpose=" + purpose, value, function(str) {
        var str = str.trim();
        var obj = jQuery.parseJSON(str);
        if (obj == "success") {
            var zone_credit = $("#plat_olx_featured_zone").val();

            var listing_credit = $('#remaining_feature').text();
            var updated_credit = listing_credit - 1;
            if (zone_credit > 1) {
                updated_credit = listing_credit - zone_credit;
            }
            if (updated_credit < 1) {
                updated_credit = 0;
            }
            $('#remaining_feature').text(updated_credit.toFixed(2));
            $('#feature-mark-btn').hide();
            $('#feature-success-btn').show();
            displayPopup('utl-success-credit');
            $('#sum-utl-button').removeAttr('disabled');
        } else {
            $('#feature-mark-btn').show();
            $('#feature-success-btn').hide();
            displayPopup('utl-error-credit-popup');
            $('#sum-utl-button').removeAttr('disabled');
        }
    });
}

function post_to_olx(selector_id) {
    var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_olx&selector=" + selector_id + "&del=12";
    status = $.ajax({
        url: this_domain + "/profolio/" + action_url,
        async: false
    }).responseText;
    var str = status.trim();
    var obj = jQuery.parseJSON(str);
    if (obj.status == 1) {
        displayPopup('utl-success-credit');
        $('.utl-heading-credit-popup').text("Listing Posted");
        $('.utl-continue-text').text(obj.message);
        $('#sum-utl-button').removeAttr('disabled');
        location.reload();

    }
    if (obj.status == 0) {
        $('.utl-heading-credit-popup').text("Listing could not be posted!");
        $('.utl-continue-text').text(obj.message);
        $('#sum-utl-button').removeAttr('disabled');
        displayPopup('utl-error-credit-popup');
    }
}

function post_to_zameen(selector_id) {
    var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_zameen&selector=" + selector_id + "&del=12";
    status = $.ajax({
        url: this_domain + "/profolio/" + action_url,
        async: false
    }).responseText;
    var str = status.trim();
    var obj = jQuery.parseJSON(str);
    if (obj.status == 1) {
        displayPopup('utl-success-credit');
        $('.utl-heading-credit-popup').text("Listing Posted");
        $('.utl-continue-text').text(obj.message);
        $('#sum-utl-button').removeAttr('disabled');
        location.reload();
    }
    if (obj.status == 0) {
        $('.utl-heading-credit-popup').text("Listing could not be posted!");
        $('.utl-continue-text').text(obj.message);
        $('#sum-utl-button').removeAttr('disabled');
        displayPopup('utl-error-credit-popup');
    }
}


function show_instalment_boxes(obj) {
    checked_icon = $(obj).parent();

    if (!$('.instalments-box').hasClass('display-block')) {
        $('.instalments-box').addClass('display-block');
        checked_icon.find(".pushBtnLabel").removeClass("checked").filter(obj).addClass("checked");
        $('input[name="instalment_status"]').val('1');
    } else {
        $('.instalments-box').removeClass('display-block');
        checked_icon.find(".pushBtnLabel").removeClass("checked");
        $('input[name="instalment_status"]').val('');
    }
    fields_on_blur();
}

function show_checkbox_icon(obj) {
    checked_icon = $(obj).parent();
    if (!$('.possession_available').hasClass('checked')) {
        checked_icon.find(".pushBtnLabel").addClass("checked");
        $('input[name="possession_available"]').val('1');
    } else {
        checked_icon.find(".pushBtnLabel").removeClass("checked");
        $('input[name="possession_available"]').val('');
    }
    fields_on_blur();
}