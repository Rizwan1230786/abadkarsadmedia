/*!
 * jQuery UI 1.8.18
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI
 */
(function(a, b) {
    function d(b) {
        return !a(b).parents().andSelf().filter(function() {
            return a.curCSS(this, "visibility") === "hidden" || a.expr.filters.hidden(this)
        }).length
    }

    function c(b, c) {
        var e = b.nodeName.toLowerCase();
        if ("area" === e) {
            var f = b.parentNode,
                g = f.name,
                h;
            if (!b.href || !g || f.nodeName.toLowerCase() !== "map") return !1;
            h = a("img[usemap=#" + g + "]")[0];
            return !!h && d(h)
        }
        return (/input|select|textarea|button|object/.test(e) ? !b.disabled : "a" == e ? b.href || c : c) && d(b)
    }
    a.ui = a.ui || {};
    a.ui.version || (a.extend(a.ui, {
        version: "1.8.18",
        keyCode: {
            ALT: 18,
            BACKSPACE: 8,
            CAPS_LOCK: 20,
            COMMA: 188,
            COMMAND: 91,
            COMMAND_LEFT: 91,
            COMMAND_RIGHT: 93,
            CONTROL: 17,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            INSERT: 45,
            LEFT: 37,
            MENU: 93,
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
            SHIFT: 16,
            SPACE: 32,
            TAB: 9,
            UP: 38,
            WINDOWS: 91
        }
    }), a.fn.extend({
        propAttr: a.fn.prop || a.fn.attr,
        _focus: a.fn.focus,
        focus: function(b, c) {
            return typeof b == "number" ? this.each(function() {
                var d = this;
                setTimeout(function() {
                    a(d).focus(), c && c.call(d)
                }, b)
            }) : this._focus.apply(this, arguments)
        },
        scrollParent: function() {
            var b;
            a.browser.msie && /(static|relative)/.test(this.css("position")) || /absolute/.test(this.css("position")) ? b = this.parents().filter(function() {
                return /(relative|absolute|fixed)/.test(a.curCSS(this, "position", 1)) && /(auto|scroll)/.test(a.curCSS(this, "overflow", 1) + a.curCSS(this, "overflow-y", 1) + a.curCSS(this, "overflow-x", 1))
            }).eq(0) : b = this.parents().filter(function() {
                return /(auto|scroll)/.test(a.curCSS(this, "overflow", 1) + a.curCSS(this, "overflow-y", 1) + a.curCSS(this, "overflow-x", 1))
            }).eq(0);
            return /fixed/.test(this.css("position")) || !b.length ? a(document) : b
        },
        zIndex: function(c) {
            if (c !== b) return this.css("zIndex", c);
            if (this.length) {
                var d = a(this[0]),
                    e, f;
                while (d.length && d[0] !== document) {
                    e = d.css("position");
                    if (e === "absolute" || e === "relative" || e === "fixed") {
                        f = parseInt(d.css("zIndex"), 10);
                        if (!isNaN(f) && f !== 0) return f
                    }
                    d = d.parent()
                }
            }
            return 0
        },
        disableSelection: function() {
            return this.bind((a.support.selectstart ? "selectstart" : "mousedown") + ".ui-disableSelection", function(a) {
                a.preventDefault()
            })
        },
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        }
    }), a.each(["Width", "Height"], function(c, d) {
        function h(b, c, d, f) {
            a.each(e, function() {
                c -= parseFloat(a.curCSS(b, "padding" + this, !0)) || 0, d && (c -= parseFloat(a.curCSS(b, "border" + this + "Width", !0)) || 0), f && (c -= parseFloat(a.curCSS(b, "margin" + this, !0)) || 0)
            });
            return c
        }
        var e = d === "Width" ? ["Left", "Right"] : ["Top", "Bottom"],
            f = d.toLowerCase(),
            g = {
                innerWidth: a.fn.innerWidth,
                innerHeight: a.fn.innerHeight,
                outerWidth: a.fn.outerWidth,
                outerHeight: a.fn.outerHeight
            };
        a.fn["inner" + d] = function(c) {
            if (c === b) return g["inner" + d].call(this);
            return this.each(function() {
                a(this).css(f, h(this, c) + "px")
            })
        }, a.fn["outer" + d] = function(b, c) {
            if (typeof b != "number") return g["outer" + d].call(this, b);
            return this.each(function() {
                a(this).css(f, h(this, b, !0, c) + "px")
            })
        }
    }), a.extend(a.expr[":"], {
        data: function(b, c, d) {
            return !!a.data(b, d[3])
        },
        focusable: function(b) {
            return c(b, !isNaN(a.attr(b, "tabindex")))
        },
        tabbable: function(b) {
            var d = a.attr(b, "tabindex"),
                e = isNaN(d);
            return (e || d >= 0) && c(b, !e)
        }
    }), a(function() {
        var b = document.body,
            c = b.appendChild(c = document.createElement("div"));
        c.offsetHeight, a.extend(c.style, {
            minHeight: "100px",
            height: "auto",
            padding: 0,
            borderWidth: 0
        }), a.support.minHeight = c.offsetHeight === 100, a.support.selectstart = "onselectstart" in c, b.removeChild(c).style.display = "none"
    }), a.extend(a.ui, {
        plugin: {
            add: function(b, c, d) {
                var e = a.ui[b].prototype;
                for (var f in d) e.plugins[f] = e.plugins[f] || [], e.plugins[f].push([c, d[f]])
            },
            call: function(a, b, c) {
                var d = a.plugins[b];
                if (!!d && !!a.element[0].parentNode)
                    for (var e = 0; e < d.length; e++) a.options[d[e][0]] && d[e][1].apply(a.element, c)
            }
        },
        contains: function(a, b) {
            return document.compareDocumentPosition ? a.compareDocumentPosition(b) & 16 : a !== b && a.contains(b)
        },
        hasScroll: function(b, c) {
            if (a(b).css("overflow") === "hidden") return !1;
            var d = c && c === "left" ? "scrollLeft" : "scrollTop",
                e = !1;
            if (b[d] > 0) return !0;
            b[d] = 1, e = b[d] > 0, b[d] = 0;
            return e
        },
        isOverAxis: function(a, b, c) {
            return a > b && a < b + c
        },
        isOver: function(b, c, d, e, f, g) {
            return a.ui.isOverAxis(b, d, f) && a.ui.isOverAxis(c, e, g)
        }
    }))
})(jQuery);
/*!
 * jQuery UI Widget 1.8.18
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Widget
 */
(function(a, b) {
    if (a.cleanData) {
        var c = a.cleanData;
        a.cleanData = function(b) {
            for (var d = 0, e;
                (e = b[d]) != null; d++) try {
                a(e).triggerHandler("remove")
            } catch (f) {}
            c(b)
        }
    } else {
        var d = a.fn.remove;
        a.fn.remove = function(b, c) {
            return this.each(function() {
                c || (!b || a.filter(b, [this]).length) && a("*", this).add([this]).each(function() {
                    try {
                        a(this).triggerHandler("remove")
                    } catch (b) {}
                });
                return d.call(a(this), b, c)
            })
        }
    }
    a.widget = function(b, c, d) {
        var e = b.split(".")[0],
            f;
        b = b.split(".")[1], f = e + "-" + b, d || (d = c, c = a.Widget), a.expr[":"][f] = function(c) {
            return !!a.data(c, b)
        }, a[e] = a[e] || {}, a[e][b] = function(a, b) {
            arguments.length && this._createWidget(a, b)
        };
        var g = new c;
        g.options = a.extend(!0, {}, g.options), a[e][b].prototype = a.extend(!0, g, {
            namespace: e,
            widgetName: b,
            widgetEventPrefix: a[e][b].prototype.widgetEventPrefix || b,
            widgetBaseClass: f
        }, d), a.widget.bridge(b, a[e][b])
    }, a.widget.bridge = function(c, d) {
        a.fn[c] = function(e) {
            var f = typeof e == "string",
                g = Array.prototype.slice.call(arguments, 1),
                h = this;
            e = !f && g.length ? a.extend.apply(null, [!0, e].concat(g)) : e;
            if (f && e.charAt(0) === "_") return h;
            f ? this.each(function() {
                var d = a.data(this, c),
                    f = d && a.isFunction(d[e]) ? d[e].apply(d, g) : d;
                if (f !== d && f !== b) {
                    h = f;
                    return !1
                }
            }) : this.each(function() {
                var b = a.data(this, c);
                b ? b.option(e || {})._init() : a.data(this, c, new d(e, this))
            });
            return h
        }
    }, a.Widget = function(a, b) {
        arguments.length && this._createWidget(a, b)
    }, a.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        options: {
            disabled: !1
        },
        _createWidget: function(b, c) {
            a.data(c, this.widgetName, this), this.element = a(c), this.options = a.extend(!0, {}, this.options, this._getCreateOptions(), b);
            var d = this;
            this.element.bind("remove." + this.widgetName, function() {
                d.destroy()
            }), this._create(), this._trigger("create"), this._init()
        },
        _getCreateOptions: function() {
            return a.metadata && a.metadata.get(this.element[0])[this.widgetName]
        },
        _create: function() {},
        _init: function() {},
        destroy: function() {
            this.element.unbind("." + this.widgetName).removeData(this.widgetName), this.widget().unbind("." + this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass + "-disabled " + "ui-state-disabled")
        },
        widget: function() {
            return this.element
        },
        option: function(c, d) {
            var e = c;
            if (arguments.length === 0) return a.extend({}, this.options);
            if (typeof c == "string") {
                if (d === b) return this.options[c];
                e = {}, e[c] = d
            }
            this._setOptions(e);
            return this
        },
        _setOptions: function(b) {
            var c = this;
            a.each(b, function(a, b) {
                c._setOption(a, b)
            });
            return this
        },
        _setOption: function(a, b) {
            this.options[a] = b, a === "disabled" && this.widget()[b ? "addClass" : "removeClass"](this.widgetBaseClass + "-disabled" + " " + "ui-state-disabled").attr("aria-disabled", b);
            return this
        },
        enable: function() {
            return this._setOption("disabled", !1)
        },
        disable: function() {
            return this._setOption("disabled", !0)
        },
        _trigger: function(b, c, d) {
            var e, f, g = this.options[b];
            d = d || {}, c = a.Event(c), c.type = (b === this.widgetEventPrefix ? b : this.widgetEventPrefix + b).toLowerCase(), c.target = this.element[0], f = c.originalEvent;
            if (f)
                for (e in f) e in c || (c[e] = f[e]);
            this.element.trigger(c, d);
            return !(a.isFunction(g) && g.call(this.element[0], c, d) === !1 || c.isDefaultPrevented())
        }
    }
})(jQuery);
/*!
 * jQuery UI Mouse 1.8.18
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Mouse
 *
 * Depends:
 *	jquery.ui.widget.js
 */
(function(a, b) {
    var c = !1;
    a(document).mouseup(function(a) {
        c = !1
    }), a.widget("ui.mouse", {
        options: {
            cancel: ":input,option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var b = this;
            this.element.bind("mousedown." + this.widgetName, function(a) {
                return b._mouseDown(a)
            }).bind("click." + this.widgetName, function(c) {
                if (!0 === a.data(c.target, b.widgetName + ".preventClickEvent")) {
                    a.removeData(c.target, b.widgetName + ".preventClickEvent"), c.stopImmediatePropagation();
                    return !1
                }
            }), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.unbind("." + this.widgetName)
        },
        _mouseDown: function(b) {
            if (!c) {
                this._mouseStarted && this._mouseUp(b), this._mouseDownEvent = b;
                var d = this,
                    e = b.which == 1,
                    f = typeof this.options.cancel == "string" && b.target.nodeName ? a(b.target).closest(this.options.cancel).length : !1;
                if (!e || f || !this._mouseCapture(b)) return !0;
                this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                    d.mouseDelayMet = !0
                }, this.options.delay));
                if (this._mouseDistanceMet(b) && this._mouseDelayMet(b)) {
                    this._mouseStarted = this._mouseStart(b) !== !1;
                    if (!this._mouseStarted) {
                        b.preventDefault();
                        return !0
                    }
                }!0 === a.data(b.target, this.widgetName + ".preventClickEvent") && a.removeData(b.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(a) {
                    return d._mouseMove(a)
                }, this._mouseUpDelegate = function(a) {
                    return d._mouseUp(a)
                }, a(document).bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), b.preventDefault(), c = !0;
                return !0
            }
        },
        _mouseMove: function(b) {
            if (a.browser.msie && !(document.documentMode >= 9) && !b.button) return this._mouseUp(b);
            if (this._mouseStarted) {
                this._mouseDrag(b);
                return b.preventDefault()
            }
            this._mouseDistanceMet(b) && this._mouseDelayMet(b) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, b) !== !1, this._mouseStarted ? this._mouseDrag(b) : this._mouseUp(b));
            return !this._mouseStarted
        },
        _mouseUp: function(b) {
            a(document).unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, b.target == this._mouseDownEvent.target && a.data(b.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(b));
            return !1
        },
        _mouseDistanceMet: function(a) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - a.pageX), Math.abs(this._mouseDownEvent.pageY - a.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function(a) {
            return this.mouseDelayMet
        },
        _mouseStart: function(a) {},
        _mouseDrag: function(a) {},
        _mouseStop: function(a) {},
        _mouseCapture: function(a) {
            return !0
        }
    })
})(jQuery);

/*
 * jQuery UI Slider 1.8.18
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Slider
 *
 * Depends:
 *	jquery.ui.core.js
 *	jquery.ui.mouse.js
 *	jquery.ui.widget.js
 */
(function(a, b) {
    var c = 5;
    a.widget("ui.slider", a.ui.mouse, {
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
            values: null
        },
        _create: function() {
            var b = this,
                d = this.options,
                e = this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),
                f = "<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",
                g = d.values && d.values.length || 1,
                h = [];
            this._keySliding = !1, this._mouseSliding = !1, this._animateOff = !0, this._handleIndex = null, this._detectOrientation(), this._mouseInit(), this.element.addClass("ui-slider ui-slider-" + this.orientation + " ui-widget" + " ui-widget-content" + " ui-corner-all" + (d.disabled ? " ui-slider-disabled ui-disabled" : "")), this.range = a([]), d.range && (d.range === !0 && (d.values || (d.values = [this._valueMin(), this._valueMin()]), d.values.length && d.values.length !== 2 && (d.values = [d.values[0], d.values[0]])), this.range = a("<div></div>").appendTo(this.element).addClass("ui-slider-range ui-widget-header" + (d.range === "min" || d.range === "max" ? " ui-slider-range-" + d.range : "")));
            for (var i = e.length; i < g; i += 1) h.push(f);
            this.handles = e.add(a(h.join("")).appendTo(b.element)), this.handle = this.handles.eq(0), this.handles.add(this.range).filter("a").click(function(a) {
                a.preventDefault()
            }).hover(function() {
                d.disabled || a(this).addClass("ui-state-hover")
            }, function() {
                a(this).removeClass("ui-state-hover")
            }).focus(function() {
                d.disabled ? a(this).blur() : (a(".ui-slider .ui-state-focus").removeClass("ui-state-focus"), a(this).addClass("ui-state-focus"))
            }).blur(function() {
                a(this).removeClass("ui-state-focus")
            }), this.handles.each(function(b) {
                a(this).data("index.ui-slider-handle", b)
            }), this.handles.keydown(function(d) {
                var e = a(this).data("index.ui-slider-handle"),
                    f, g, h, i;
                if (!b.options.disabled) {
                    switch (d.keyCode) {
                        case a.ui.keyCode.HOME:
                        case a.ui.keyCode.END:
                        case a.ui.keyCode.PAGE_UP:
                        case a.ui.keyCode.PAGE_DOWN:
                        case a.ui.keyCode.UP:
                        case a.ui.keyCode.RIGHT:
                        case a.ui.keyCode.DOWN:
                        case a.ui.keyCode.LEFT:
                            d.preventDefault();
                            if (!b._keySliding) {
                                b._keySliding = !0, a(this).addClass("ui-state-active"), f = b._start(d, e);
                                if (f === !1) return
                            }
                    }
                    i = b.options.step, b.options.values && b.options.values.length ? g = h = b.values(e) : g = h = b.value();
                    switch (d.keyCode) {
                        case a.ui.keyCode.HOME:
                            h = b._valueMin();
                            break;
                        case a.ui.keyCode.END:
                            h = b._valueMax();
                            break;
                        case a.ui.keyCode.PAGE_UP:
                            h = b._trimAlignValue(g + (b._valueMax() - b._valueMin()) / c);
                            break;
                        case a.ui.keyCode.PAGE_DOWN:
                            h = b._trimAlignValue(g - (b._valueMax() - b._valueMin()) / c);
                            break;
                        case a.ui.keyCode.UP:
                        case a.ui.keyCode.RIGHT:
                            if (g === b._valueMax()) return;
                            h = b._trimAlignValue(g + i);
                            break;
                        case a.ui.keyCode.DOWN:
                        case a.ui.keyCode.LEFT:
                            if (g === b._valueMin()) return;
                            h = b._trimAlignValue(g - i)
                    }
                    b._slide(d, e, h)
                }
            }).keyup(function(c) {
                var d = a(this).data("index.ui-slider-handle");
                b._keySliding && (b._keySliding = !1, b._stop(c, d), b._change(c, d), a(this).removeClass("ui-state-active"))
            }), this._refreshValue(), this._animateOff = !1
        },
        destroy: function() {
            this.handles.remove(), this.range.remove(), this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-slider-disabled ui-widget ui-widget-content ui-corner-all").removeData("slider").unbind(".slider"), this._mouseDestroy();
            return this
        },
        _mouseCapture: function(b) {
            var c = this.options,
                d, e, f, g, h, i, j, k, l;
            if (c.disabled) return !1;
            this.elementSize = {
                width: this.element.outerWidth(),
                height: this.element.outerHeight()
            }, this.elementOffset = this.element.offset(), d = {
                x: b.pageX,
                y: b.pageY
            }, e = this._normValueFromMouse(d), f = this._valueMax() - this._valueMin() + 1, h = this, this.handles.each(function(b) {
                var c = Math.abs(e - h.values(b));
                f > c && (f = c, g = a(this), i = b)
            }), c.range === !0 && this.values(1) === c.min && (i += 1, g = a(this.handles[i])), j = this._start(b, i);
            if (j === !1) return !1;
            this._mouseSliding = !0, h._handleIndex = i, g.addClass("ui-state-active").focus(), k = g.offset(), l = !a(b.target).parents().andSelf().is(".ui-slider-handle"), this._clickOffset = l ? {
                left: 0,
                top: 0
            } : {
                left: b.pageX - k.left - g.width() / 2,
                top: b.pageY - k.top - g.height() / 2 - (parseInt(g.css("borderTopWidth"), 10) || 0) - (parseInt(g.css("borderBottomWidth"), 10) || 0) + (parseInt(g.css("marginTop"), 10) || 0)
            }, this.handles.hasClass("ui-state-hover") || this._slide(b, i, e), this._animateOff = !0;
            return !0
        },
        _mouseStart: function(a) {
            return !0
        },
        _mouseDrag: function(a) {
            var b = {
                    x: a.pageX,
                    y: a.pageY
                },
                c = this._normValueFromMouse(b);
            this._slide(a, this._handleIndex, c);
            return !1
        },
        _mouseStop: function(a) {
            this.handles.removeClass("ui-state-active"), this._mouseSliding = !1, this._stop(a, this._handleIndex), this._change(a, this._handleIndex), this._handleIndex = null, this._clickOffset = null, this._animateOff = !1;
            return !1
        },
        _detectOrientation: function() {
            this.orientation = this.options.orientation === "vertical" ? "vertical" : "horizontal"
        },
        _normValueFromMouse: function(a) {
            var b, c, d, e, f;
            this.orientation === "horizontal" ? (b = this.elementSize.width, c = a.x - this.elementOffset.left - (this._clickOffset ? this._clickOffset.left : 0)) : (b = this.elementSize.height, c = a.y - this.elementOffset.top - (this._clickOffset ? this._clickOffset.top : 0)), d = c / b, d > 1 && (d = 1), d < 0 && (d = 0), this.orientation === "vertical" && (d = 1 - d), e = this._valueMax() - this._valueMin(), f = this._valueMin() + d * e;
            return this._trimAlignValue(f)
        },
        _start: function(a, b) {
            var c = {
                handle: this.handles[b],
                value: this.value()
            };
            this.options.values && this.options.values.length && (c.value = this.values(b), c.values = this.values());
            return this._trigger("start", a, c)
        },
        _slide: function(a, b, c) {
            var d, e, f;
            this.options.values && this.options.values.length ? (d = this.values(b ? 0 : 1), this.options.values.length === 2 && this.options.range === !0 && (b === 0 && c > d || b === 1 && c < d) && (c = d), c !== this.values(b) && (e = this.values(), e[b] = c, f = this._trigger("slide", a, {
                handle: this.handles[b],
                value: c,
                values: e
            }), d = this.values(b ? 0 : 1), f !== !1 && this.values(b, c, !0))) : c !== this.value() && (f = this._trigger("slide", a, {
                handle: this.handles[b],
                value: c
            }), f !== !1 && this.value(c))
        },
        _stop: function(a, b) {
            var c = {
                handle: this.handles[b],
                value: this.value()
            };
            this.options.values && this.options.values.length && (c.value = this.values(b), c.values = this.values()), this._trigger("stop", a, c)
        },
        _change: function(a, b) {
            if (!this._keySliding && !this._mouseSliding) {
                var c = {
                    handle: this.handles[b],
                    value: this.value()
                };
                this.options.values && this.options.values.length && (c.value = this.values(b), c.values = this.values()), this._trigger("change", a, c)
            }
        },
        value: function(a) {
            if (arguments.length) this.options.value = this._trimAlignValue(a), this._refreshValue(), this._change(null, 0);
            else return this._value()
        },
        values: function(b, c) {
            var d, e, f;
            if (arguments.length > 1) this.options.values[b] = this._trimAlignValue(c), this._refreshValue(), this._change(null, b);
            else {
                if (!arguments.length) return this._values();
                if (!a.isArray(arguments[0])) return this.options.values && this.options.values.length ? this._values(b) : this.value();
                d = this.options.values, e = arguments[0];
                for (f = 0; f < d.length; f += 1) d[f] = this._trimAlignValue(e[f]), this._change(null, f);
                this._refreshValue()
            }
        },
        _setOption: function(b, c) {
            var d, e = 0;
            a.isArray(this.options.values) && (e = this.options.values.length), a.Widget.prototype._setOption.apply(this, arguments);
            switch (b) {
                case "disabled":
                    c ? (this.handles.filter(".ui-state-focus").blur(), this.handles.removeClass("ui-state-hover"), this.handles.propAttr("disabled", !0), this.element.addClass("ui-disabled")) : (this.handles.propAttr("disabled", !1), this.element.removeClass("ui-disabled"));
                    break;
                case "orientation":
                    this._detectOrientation(), this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-" + this.orientation), this._refreshValue();
                    break;
                case "value":
                    this._animateOff = !0, this._refreshValue(), this._change(null, 0), this._animateOff = !1;
                    break;
                case "values":
                    this._animateOff = !0, this._refreshValue();
                    for (d = 0; d < e; d += 1) this._change(null, d);
                    this._animateOff = !1
            }
        },
        _value: function() {
            var a = this.options.value;
            a = this._trimAlignValue(a);
            return a
        },
        _values: function(a) {
            var b, c, d;
            if (arguments.length) {
                b = this.options.values[a], b = this._trimAlignValue(b);
                return b
            }
            c = this.options.values.slice();
            for (d = 0; d < c.length; d += 1) c[d] = this._trimAlignValue(c[d]);
            return c
        },
        _trimAlignValue: function(a) {
            if (a <= this._valueMin()) return this._valueMin();
            if (a >= this._valueMax()) return this._valueMax();
            var b = this.options.step > 0 ? this.options.step : 1,
                c = (a - this._valueMin()) % b,
                d = a - c;
            Math.abs(c) * 2 >= b && (d += c > 0 ? b : -b);
            return parseFloat(d.toFixed(5))
        },
        _valueMin: function() {
            return this.options.min
        },
        _valueMax: function() {
            return this.options.max
        },
        _refreshValue: function() {
            var b = this.options.range,
                c = this.options,
                d = this,
                e = this._animateOff ? !1 : c.animate,
                f, g = {},
                h, i, j, k;
            this.options.values && this.options.values.length ? this.handles.each(function(b, i) {
                f = (d.values(b) - d._valueMin()) / (d._valueMax() - d._valueMin()) * 100, g[d.orientation === "horizontal" ? "left" : "bottom"] = f + "%", a(this).stop(1, 1)[e ? "animate" : "css"](g, c.animate), d.options.range === !0 && (d.orientation === "horizontal" ? (b === 0 && d.range.stop(1, 1)[e ? "animate" : "css"]({
                    left: f + "%"
                }, c.animate), b === 1 && d.range[e ? "animate" : "css"]({
                    width: f - h + "%"
                }, {
                    queue: !1,
                    duration: c.animate
                })) : (b === 0 && d.range.stop(1, 1)[e ? "animate" : "css"]({
                    bottom: f + "%"
                }, c.animate), b === 1 && d.range[e ? "animate" : "css"]({
                    height: f - h + "%"
                }, {
                    queue: !1,
                    duration: c.animate
                }))), h = f
            }) : (i = this.value(), j = this._valueMin(), k = this._valueMax(), f = k !== j ? (i - j) / (k - j) * 100 : 0, g[d.orientation === "horizontal" ? "left" : "bottom"] = f + "%", this.handle.stop(1, 1)[e ? "animate" : "css"](g, c.animate), b === "min" && this.orientation === "horizontal" && this.range.stop(1, 1)[e ? "animate" : "css"]({
                width: f + "%"
            }, c.animate), b === "max" && this.orientation === "horizontal" && this.range[e ? "animate" : "css"]({
                width: 100 - f + "%"
            }, {
                queue: !1,
                duration: c.animate
            }), b === "min" && this.orientation === "vertical" && this.range.stop(1, 1)[e ? "animate" : "css"]({
                height: f + "%"
            }, c.animate), b === "max" && this.orientation === "vertical" && this.range[e ? "animate" : "css"]({
                height: 100 - f + "%"
            }, {
                queue: !1,
                duration: c.animate
            }))
        }
    }), a.extend(a.ui.slider, {
        version: "1.8.18"
    })
})(jQuery);

/*
 * jQuery UI Datepicker 1.8.18
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Datepicker
 *
 * Depends:
 *	jquery.ui.core.js
 */
(function($, undefined) {
    function isArray(a) {
        return a && ($.browser.safari && typeof a == "object" && a.length || a.constructor && a.constructor.toString().match(/\Array\(\)/))
    }

    function extendRemove(a, b) {
        $.extend(a, b);
        for (var c in b)
            if (b[c] == null || b[c] == undefined) a[c] = b[c];
        return a
    }

    function bindHover(a) {
        var b = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
        return a.bind("mouseout", function(a) {
            var c = $(a.target).closest(b);
            !c.length || c.removeClass("ui-state-hover ui-datepicker-prev-hover ui-datepicker-next-hover")
        }).bind("mouseover", function(c) {
            var d = $(c.target).closest(b);
            !$.datepicker._isDisabledDatepicker(instActive.inline ? a.parent()[0] : instActive.input[0]) && !!d.length && (d.parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"), d.addClass("ui-state-hover"), d.hasClass("ui-datepicker-prev") && d.addClass("ui-datepicker-prev-hover"), d.hasClass("ui-datepicker-next") && d.addClass("ui-datepicker-next-hover"))
        })
    }

    function Datepicker() {
        this.debug = !1, this._curInst = null, this._keyEvent = !1, this._disabledInputs = [], this._datepickerShowing = !1, this._inDialog = !1, this._mainDivId = "ui-datepicker-div", this._inlineClass = "ui-datepicker-inline", this._appendClass = "ui-datepicker-append", this._triggerClass = "ui-datepicker-trigger", this._dialogClass = "ui-datepicker-dialog", this._disableClass = "ui-datepicker-disabled", this._unselectableClass = "ui-datepicker-unselectable", this._currentClass = "ui-datepicker-current-day", this._dayOverClass = "ui-datepicker-days-cell-over", this.regional = [], this.regional[""] = {
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
        }, $.extend(this._defaults, this.regional[""]), this.dpDiv = bindHover($('<div id="' + this._mainDivId + '" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>'))
    }
    $.extend($.ui, {
        datepicker: {
            version: "1.8.18"
        }
    });
    var PROP_NAME = "datepicker",
        dpuuid = (new Date).getTime(),
        instActive;
    $.extend(Datepicker.prototype, {
        markerClassName: "hasDatepicker",
        maxRows: 4,
        log: function() {
            this.debug && console.log.apply("", arguments)
        },
        _widgetDatepicker: function() {
            return this.dpDiv
        },
        setDefaults: function(a) {
            extendRemove(this._defaults, a || {});
            return this
        },
        _attachDatepicker: function(target, settings) {
            var inlineSettings = null;
            for (var attrName in this._defaults) {
                var attrValue = target.getAttribute("date:" + attrName);
                if (attrValue) {
                    inlineSettings = inlineSettings || {};
                    try {
                        inlineSettings[attrName] = eval(attrValue)
                    } catch (err) {
                        inlineSettings[attrName] = attrValue
                    }
                }
            }
            var nodeName = target.nodeName.toLowerCase(),
                inline = nodeName == "div" || nodeName == "span";
            target.id || (this.uuid += 1, target.id = "dp" + this.uuid);
            var inst = this._newInst($(target), inline);
            inst.settings = $.extend({}, settings || {}, inlineSettings || {}), nodeName == "input" ? this._connectDatepicker(target, inst) : inline && this._inlineDatepicker(target, inst)
        },
        _newInst: function(a, b) {
            var c = a[0].id.replace(/([^A-Za-z0-9_-])/g, "\\\\$1");
            return {
                id: c,
                input: a,
                selectedDay: 0,
                selectedMonth: 0,
                selectedYear: 0,
                drawMonth: 0,
                drawYear: 0,
                inline: b,
                dpDiv: b ? bindHover($('<div class="' + this._inlineClass + ' ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>')) : this.dpDiv
            }
        },
        _connectDatepicker: function(a, b) {
            var c = $(a);
            b.append = $([]), b.trigger = $([]);
            c.hasClass(this.markerClassName) || (this._attachments(c, b), c.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp).bind("setData.datepicker", function(a, c, d) {
                b.settings[c] = d
            }).bind("getData.datepicker", function(a, c) {
                return this._get(b, c)
            }), this._autoSize(b), $.data(a, PROP_NAME, b), b.settings.disabled && this._disableDatepicker(a))
        },
        _attachments: function(a, b) {
            var c = this._get(b, "appendText"),
                d = this._get(b, "isRTL");
            b.append && b.append.remove(), c && (b.append = $('<span class="' + this._appendClass + '">' + c + "</span>"), a[d ? "before" : "after"](b.append)), a.unbind("focus", this._showDatepicker), b.trigger && b.trigger.remove();
            var e = this._get(b, "showOn");
            (e == "focus" || e == "both") && a.focus(this._showDatepicker);
            if (e == "button" || e == "both") {
                var f = this._get(b, "buttonText"),
                    g = this._get(b, "buttonImage");
                b.trigger = $(this._get(b, "buttonImageOnly") ? $("<img/>").addClass(this._triggerClass).attr({
                    src: g,
                    alt: f,
                    title: f
                }) : $('<button type="button"></button>').addClass(this._triggerClass).html(g == "" ? f : $("<img/>").attr({
                    src: g,
                    alt: f,
                    title: f
                }))), a[d ? "before" : "after"](b.trigger), b.trigger.click(function() {
                    $.datepicker._datepickerShowing && $.datepicker._lastInput == a[0] ? $.datepicker._hideDatepicker() : $.datepicker._datepickerShowing && $.datepicker._lastInput != a[0] ? ($.datepicker._hideDatepicker(), $.datepicker._showDatepicker(a[0])) : $.datepicker._showDatepicker(a[0]);
                    return !1
                })
            }
        },
        _autoSize: function(a) {
            if (this._get(a, "autoSize") && !a.inline) {
                var b = new Date(2009, 11, 20),
                    c = this._get(a, "dateFormat");
                if (c.match(/[DM]/)) {
                    var d = function(a) {
                        var b = 0,
                            c = 0;
                        for (var d = 0; d < a.length; d++) a[d].length > b && (b = a[d].length, c = d);
                        return c
                    };
                    b.setMonth(d(this._get(a, c.match(/MM/) ? "monthNames" : "monthNamesShort"))), b.setDate(d(this._get(a, c.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - b.getDay())
                }
                a.input.attr("size", this._formatDate(a, b).length)
            }
        },
        _inlineDatepicker: function(a, b) {
            var c = $(a);
            c.hasClass(this.markerClassName) || (c.addClass(this.markerClassName).append(b.dpDiv).bind("setData.datepicker", function(a, c, d) {
                b.settings[c] = d
            }).bind("getData.datepicker", function(a, c) {
                return this._get(b, c)
            }), $.data(a, PROP_NAME, b), this._setDate(b, this._getDefaultDate(b), !0), this._updateDatepicker(b), this._updateAlternate(b), b.settings.disabled && this._disableDatepicker(a), b.dpDiv.css("display", "block"))
        },
        _dialogDatepicker: function(a, b, c, d, e) {
            var f = this._dialogInst;
            if (!f) {
                this.uuid += 1;
                var g = "dp" + this.uuid;
                this._dialogInput = $('<input type="text" id="' + g + '" style="position: absolute; top: -100px; width: 0px; z-index: -10;"/>'), this._dialogInput.keydown(this._doKeyDown), $("body").append(this._dialogInput), f = this._dialogInst = this._newInst(this._dialogInput, !1), f.settings = {}, $.data(this._dialogInput[0], PROP_NAME, f)
            }
            extendRemove(f.settings, d || {}), b = b && b.constructor == Date ? this._formatDate(f, b) : b, this._dialogInput.val(b), this._pos = e ? e.length ? e : [e.pageX, e.pageY] : null;
            if (!this._pos) {
                var h = document.documentElement.clientWidth,
                    i = document.documentElement.clientHeight,
                    j = document.documentElement.scrollLeft || document.body.scrollLeft,
                    k = document.documentElement.scrollTop || document.body.scrollTop;
                this._pos = [h / 2 - 100 + j, i / 2 - 150 + k]
            }
            this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), f.settings.onSelect = c, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), $.blockUI && $.blockUI(this.dpDiv), $.data(this._dialogInput[0], PROP_NAME, f);
            return this
        },
        _destroyDatepicker: function(a) {
            var b = $(a),
                c = $.data(a, PROP_NAME);
            if (!!b.hasClass(this.markerClassName)) {
                var d = a.nodeName.toLowerCase();
                $.removeData(a, PROP_NAME), d == "input" ? (c.append.remove(), c.trigger.remove(), b.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : (d == "div" || d == "span") && b.removeClass(this.markerClassName).empty()
            }
        },
        _enableDatepicker: function(a) {
            var b = $(a),
                c = $.data(a, PROP_NAME);
            if (!!b.hasClass(this.markerClassName)) {
                var d = a.nodeName.toLowerCase();
                if (d == "input") a.disabled = !1, c.trigger.filter("button").each(function() {
                    this.disabled = !1
                }).end().filter("img").css({
                    opacity: "1.0",
                    cursor: ""
                });
                else if (d == "div" || d == "span") {
                    var e = b.children("." + this._inlineClass);
                    e.children().removeClass("ui-state-disabled"), e.find("select.ui-datepicker-month, select.ui-datepicker-year").removeAttr("disabled")
                }
                this._disabledInputs = $.map(this._disabledInputs, function(b) {
                    return b == a ? null : b
                })
            }
        },
        _disableDatepicker: function(a) {
            var b = $(a),
                c = $.data(a, PROP_NAME);
            if (!!b.hasClass(this.markerClassName)) {
                var d = a.nodeName.toLowerCase();
                if (d == "input") a.disabled = !0, c.trigger.filter("button").each(function() {
                    this.disabled = !0
                }).end().filter("img").css({
                    opacity: "0.5",
                    cursor: "default"
                });
                else if (d == "div" || d == "span") {
                    var e = b.children("." + this._inlineClass);
                    e.children().addClass("ui-state-disabled"), e.find("select.ui-datepicker-month, select.ui-datepicker-year").attr("disabled", "disabled")
                }
                this._disabledInputs = $.map(this._disabledInputs, function(b) {
                    return b == a ? null : b
                }), this._disabledInputs[this._disabledInputs.length] = a
            }
        },
        _isDisabledDatepicker: function(a) {
            if (!a) return !1;
            for (var b = 0; b < this._disabledInputs.length; b++)
                if (this._disabledInputs[b] == a) return !0;
            return !1
        },
        _getInst: function(a) {
            try {
                return $.data(a, PROP_NAME)
            } catch (b) {
                throw "Missing instance data for this datepicker"
            }
        },
        _optionDatepicker: function(a, b, c) {
            var d = this._getInst(a);
            if (arguments.length == 2 && typeof b == "string") return b == "defaults" ? $.extend({}, $.datepicker._defaults) : d ? b == "all" ? $.extend({}, d.settings) : this._get(d, b) : null;
            var e = b || {};
            typeof b == "string" && (e = {}, e[b] = c);
            if (d) {
                this._curInst == d && this._hideDatepicker();
                var f = this._getDateDatepicker(a, !0),
                    g = this._getMinMaxDate(d, "min"),
                    h = this._getMinMaxDate(d, "max");
                extendRemove(d.settings, e), g !== null && e.dateFormat !== undefined && e.minDate === undefined && (d.settings.minDate = this._formatDate(d, g)), h !== null && e.dateFormat !== undefined && e.maxDate === undefined && (d.settings.maxDate = this._formatDate(d, h)), this._attachments($(a), d), this._autoSize(d), this._setDate(d, f), this._updateAlternate(d), this._updateDatepicker(d)
            }
        },
        _changeDatepicker: function(a, b, c) {
            this._optionDatepicker(a, b, c)
        },
        _refreshDatepicker: function(a) {
            var b = this._getInst(a);
            b && this._updateDatepicker(b)
        },
        _setDateDatepicker: function(a, b) {
            var c = this._getInst(a);
            c && (this._setDate(c, b), this._updateDatepicker(c), this._updateAlternate(c))
        },
        _getDateDatepicker: function(a, b) {
            var c = this._getInst(a);
            c && !c.inline && this._setDateFromField(c, b);
            return c ? this._getDate(c) : null
        },
        _doKeyDown: function(a) {
            var b = $.datepicker._getInst(a.target),
                c = !0,
                d = b.dpDiv.is(".ui-datepicker-rtl");
            b._keyEvent = !0;
            if ($.datepicker._datepickerShowing) switch (a.keyCode) {
                case 9:
                    $.datepicker._hideDatepicker(), c = !1;
                    break;
                case 13:
                    var e = $("td." + $.datepicker._dayOverClass + ":not(." + $.datepicker._currentClass + ")", b.dpDiv);
                    e[0] && $.datepicker._selectDay(a.target, b.selectedMonth, b.selectedYear, e[0]);
                    var f = $.datepicker._get(b, "onSelect");
                    if (f) {
                        var g = $.datepicker._formatDate(b);
                        f.apply(b.input ? b.input[0] : null, [g, b])
                    } else $.datepicker._hideDatepicker();
                    return !1;
                case 27:
                    $.datepicker._hideDatepicker();
                    break;
                case 33:
                    $.datepicker._adjustDate(a.target, a.ctrlKey ? -$.datepicker._get(b, "stepBigMonths") : -$.datepicker._get(b, "stepMonths"), "M");
                    break;
                case 34:
                    $.datepicker._adjustDate(a.target, a.ctrlKey ? +$.datepicker._get(b, "stepBigMonths") : +$.datepicker._get(b, "stepMonths"), "M");
                    break;
                case 35:
                    (a.ctrlKey || a.metaKey) && $.datepicker._clearDate(a.target), c = a.ctrlKey || a.metaKey;
                    break;
                case 36:
                    (a.ctrlKey || a.metaKey) && $.datepicker._gotoToday(a.target), c = a.ctrlKey || a.metaKey;
                    break;
                case 37:
                    (a.ctrlKey || a.metaKey) && $.datepicker._adjustDate(a.target, d ? 1 : -1, "D"), c = a.ctrlKey || a.metaKey, a.originalEvent.altKey && $.datepicker._adjustDate(a.target, a.ctrlKey ? -$.datepicker._get(b, "stepBigMonths") : -$.datepicker._get(b, "stepMonths"), "M");
                    break;
                case 38:
                    (a.ctrlKey || a.metaKey) && $.datepicker._adjustDate(a.target, -7, "D"), c = a.ctrlKey || a.metaKey;
                    break;
                case 39:
                    (a.ctrlKey || a.metaKey) && $.datepicker._adjustDate(a.target, d ? -1 : 1, "D"), c = a.ctrlKey || a.metaKey, a.originalEvent.altKey && $.datepicker._adjustDate(a.target, a.ctrlKey ? +$.datepicker._get(b, "stepBigMonths") : +$.datepicker._get(b, "stepMonths"), "M");
                    break;
                case 40:
                    (a.ctrlKey || a.metaKey) && $.datepicker._adjustDate(a.target, 7, "D"), c = a.ctrlKey || a.metaKey;
                    break;
                default:
                    c = !1
            } else a.keyCode == 36 && a.ctrlKey ? $.datepicker._showDatepicker(this) : c = !1;
            c && (a.preventDefault(), a.stopPropagation())
        },
        _doKeyPress: function(a) {
            var b = $.datepicker._getInst(a.target);
            if ($.datepicker._get(b, "constrainInput")) {
                var c = $.datepicker._possibleChars($.datepicker._get(b, "dateFormat")),
                    d = String.fromCharCode(a.charCode == undefined ? a.keyCode : a.charCode);
                return a.ctrlKey || a.metaKey || d < " " || !c || c.indexOf(d) > -1
            }
        },
        _doKeyUp: function(a) {
            var b = $.datepicker._getInst(a.target);
            if (b.input.val() != b.lastVal) try {
                var c = $.datepicker.parseDate($.datepicker._get(b, "dateFormat"), b.input ? b.input.val() : null, $.datepicker._getFormatConfig(b));
                c && ($.datepicker._setDateFromField(b), $.datepicker._updateAlternate(b), $.datepicker._updateDatepicker(b))
            } catch (a) {
                $.datepicker.log(a)
            }
            return !0
        },
        _showDatepicker: function(a) {
            a = a.target || a, a.nodeName.toLowerCase() != "input" && (a = $("input", a.parentNode)[0]);
            if (!$.datepicker._isDisabledDatepicker(a) && $.datepicker._lastInput != a) {
                var b = $.datepicker._getInst(a);
                $.datepicker._curInst && $.datepicker._curInst != b && ($.datepicker._curInst.dpDiv.stop(!0, !0), b && $.datepicker._datepickerShowing && $.datepicker._hideDatepicker($.datepicker._curInst.input[0]));
                var c = $.datepicker._get(b, "beforeShow"),
                    d = c ? c.apply(a, [a, b]) : {};
                if (d === !1) return;
                extendRemove(b.settings, d), b.lastVal = null, $.datepicker._lastInput = a, $.datepicker._setDateFromField(b), $.datepicker._inDialog && (a.value = ""), $.datepicker._pos || ($.datepicker._pos = $.datepicker._findPos(a), $.datepicker._pos[1] += a.offsetHeight);
                var e = !1;
                $(a).parents().each(function() {
                    e |= $(this).css("position") == "fixed";
                    return !e
                }), e && $.browser.opera && ($.datepicker._pos[0] -= document.documentElement.scrollLeft, $.datepicker._pos[1] -= document.documentElement.scrollTop);
                var f = {
                    left: $.datepicker._pos[0],
                    top: $.datepicker._pos[1]
                };
                $.datepicker._pos = null, b.dpDiv.empty(), b.dpDiv.css({
                    position: "absolute",
                    display: "block",
                    top: "-1000px"
                }), $.datepicker._updateDatepicker(b), f = $.datepicker._checkOffset(b, f, e), b.dpDiv.css({
                    position: $.datepicker._inDialog && $.blockUI ? "static" : e ? "fixed" : "absolute",
                    display: "none",
                    left: f.left + "px",
                    top: f.top + "px"
                });
                if (!b.inline) {
                    var g = $.datepicker._get(b, "showAnim"),
                        h = $.datepicker._get(b, "duration"),
                        i = function() {
                            var a = b.dpDiv.find("iframe.ui-datepicker-cover");
                            if (!!a.length) {
                                var c = $.datepicker._getBorders(b.dpDiv);
                                a.css({
                                    left: -c[0],
                                    top: -c[1],
                                    width: b.dpDiv.outerWidth(),
                                    height: b.dpDiv.outerHeight()
                                })
                            }
                        };
                    b.dpDiv.zIndex($(a).zIndex() + 1), $.datepicker._datepickerShowing = !0, $.effects && $.effects[g] ? b.dpDiv.show(g, $.datepicker._get(b, "showOptions"), h, i) : b.dpDiv[g || "show"](g ? h : null, i), (!g || !h) && i(), b.input.is(":visible") && !b.input.is(":disabled") && b.input.focus(), $.datepicker._curInst = b
                }
            }
        },
        _updateDatepicker: function(a) {
            var b = this;
            b.maxRows = 4;
            var c = $.datepicker._getBorders(a.dpDiv);
            instActive = a, a.dpDiv.empty().append(this._generateHTML(a));
            var d = a.dpDiv.find("iframe.ui-datepicker-cover");
            !d.length || d.css({
                left: -c[0],
                top: -c[1],
                width: a.dpDiv.outerWidth(),
                height: a.dpDiv.outerHeight()
            }), a.dpDiv.find("." + this._dayOverClass + " a").mouseover();
            var e = this._getNumberOfMonths(a),
                f = e[1],
                g = 17;
            a.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), f > 1 && a.dpDiv.addClass("ui-datepicker-multi-" + f).css("width", g * f + "em"), a.dpDiv[(e[0] != 1 || e[1] != 1 ? "add" : "remove") + "Class"]("ui-datepicker-multi"), a.dpDiv[(this._get(a, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), a == $.datepicker._curInst && $.datepicker._datepickerShowing && a.input && a.input.is(":visible") && !a.input.is(":disabled") && a.input[0] != document.activeElement && a.input.focus();
            if (a.yearshtml) {
                var h = a.yearshtml;
                setTimeout(function() {
                    h === a.yearshtml && a.yearshtml && a.dpDiv.find("select.ui-datepicker-year:first").replaceWith(a.yearshtml), h = a.yearshtml = null
                }, 0)
            }
        },
        _getBorders: function(a) {
            var b = function(a) {
                return {
                    thin: 1,
                    medium: 2,
                    thick: 3
                }[a] || a
            };
            return [parseFloat(b(a.css("border-left-width"))), parseFloat(b(a.css("border-top-width")))]
        },
        _checkOffset: function(a, b, c) {
            var d = a.dpDiv.outerWidth(),
                e = a.dpDiv.outerHeight(),
                f = a.input ? a.input.outerWidth() : 0,
                g = a.input ? a.input.outerHeight() : 0,
                h = document.documentElement.clientWidth + $(document).scrollLeft(),
                i = document.documentElement.clientHeight + $(document).scrollTop();
            b.left -= this._get(a, "isRTL") ? d - f : 0, b.left -= c && b.left == a.input.offset().left ? $(document).scrollLeft() : 0, b.top -= c && b.top == a.input.offset().top + g ? $(document).scrollTop() : 0, b.left -= Math.min(b.left, b.left + d > h && h > d ? Math.abs(b.left + d - h) : 0), b.top -= Math.min(b.top, b.top + e > i && i > e ? Math.abs(e + g) : 0);
            return b
        },
        _findPos: function(a) {
            var b = this._getInst(a),
                c = this._get(b, "isRTL");
            while (a && (a.type == "hidden" || a.nodeType != 1 || $.expr.filters.hidden(a))) a = a[c ? "previousSibling" : "nextSibling"];
            var d = $(a).offset();
            return [d.left, d.top]
        },
        _hideDatepicker: function(a) {
            var b = this._curInst;
            if (!(!b || a && b != $.data(a, PROP_NAME)) && this._datepickerShowing) {
                var c = this._get(b, "showAnim"),
                    d = this._get(b, "duration"),
                    e = this,
                    f = function() {
                        $.datepicker._tidyDialog(b), e._curInst = null
                    };
                $.effects && $.effects[c] ? b.dpDiv.hide(c, $.datepicker._get(b, "showOptions"), d, f) : b.dpDiv[c == "slideDown" ? "slideUp" : c == "fadeIn" ? "fadeOut" : "hide"](c ? d : null, f), c || f(), this._datepickerShowing = !1;
                var g = this._get(b, "onClose");
                g && g.apply(b.input ? b.input[0] : null, [b.input ? b.input.val() : "", b]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
                    position: "absolute",
                    left: "0",
                    top: "-100px"
                }), $.blockUI && ($.unblockUI(), $("body").append(this.dpDiv))), this._inDialog = !1
            }
        },
        _tidyDialog: function(a) {
            a.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")
        },
        _checkExternalClick: function(a) {
            if (!!$.datepicker._curInst) {
                var b = $(a.target),
                    c = $.datepicker._getInst(b[0]);
                (b[0].id != $.datepicker._mainDivId && b.parents("#" + $.datepicker._mainDivId).length == 0 && !b.hasClass($.datepicker.markerClassName) && !b.closest("." + $.datepicker._triggerClass).length && $.datepicker._datepickerShowing && (!$.datepicker._inDialog || !$.blockUI) || b.hasClass($.datepicker.markerClassName) && $.datepicker._curInst != c) && $.datepicker._hideDatepicker()
            }
        },
        _adjustDate: function(a, b, c) {
            var d = $(a),
                e = this._getInst(d[0]);
            this._isDisabledDatepicker(d[0]) || (this._adjustInstDate(e, b + (c == "M" ? this._get(e, "showCurrentAtPos") : 0), c), this._updateDatepicker(e))
        },
        _gotoToday: function(a) {
            var b = $(a),
                c = this._getInst(b[0]);
            if (this._get(c, "gotoCurrent") && c.currentDay) c.selectedDay = c.currentDay, c.drawMonth = c.selectedMonth = c.currentMonth, c.drawYear = c.selectedYear = c.currentYear;
            else {
                var d = new Date;
                c.selectedDay = d.getDate(), c.drawMonth = c.selectedMonth = d.getMonth(), c.drawYear = c.selectedYear = d.getFullYear()
            }
            this._notifyChange(c), this._adjustDate(b)
        },
        _selectMonthYear: function(a, b, c) {
            var d = $(a),
                e = this._getInst(d[0]);
            e["selected" + (c == "M" ? "Month" : "Year")] = e["draw" + (c == "M" ? "Month" : "Year")] = parseInt(b.options[b.selectedIndex].value, 10), this._notifyChange(e), this._adjustDate(d)
        },
        _selectDay: function(a, b, c, d) {
            var e = $(a);
            if (!$(d).hasClass(this._unselectableClass) && !this._isDisabledDatepicker(e[0])) {
                var f = this._getInst(e[0]);
                f.selectedDay = f.currentDay = $("a", d).html(), f.selectedMonth = f.currentMonth = b, f.selectedYear = f.currentYear = c, this._selectDate(a, this._formatDate(f, f.currentDay, f.currentMonth, f.currentYear))
            }
        },
        _clearDate: function(a) {
            var b = $(a),
                c = this._getInst(b[0]);
            this._selectDate(b, "")
        },
        _selectDate: function(a, b) {
            var c = $(a),
                d = this._getInst(c[0]);
            b = b != null ? b : this._formatDate(d), d.input && d.input.val(b), this._updateAlternate(d);
            var e = this._get(d, "onSelect");
            e ? e.apply(d.input ? d.input[0] : null, [b, d]) : d.input && d.input.trigger("change"), d.inline ? this._updateDatepicker(d) : (this._hideDatepicker(), this._lastInput = d.input[0], typeof d.input[0] != "object" && d.input.focus(), this._lastInput = null)
        },
        _updateAlternate: function(a) {
            var b = this._get(a, "altField");
            if (b) {
                var c = this._get(a, "altFormat") || this._get(a, "dateFormat"),
                    d = this._getDate(a),
                    e = this.formatDate(c, d, this._getFormatConfig(a));
                $(b).each(function() {
                    $(this).val(e)
                })
            }
        },
        noWeekends: function(a) {
            var b = a.getDay();
            return [b > 0 && b < 6, ""]
        },
        iso8601Week: function(a) {
            var b = new Date(a.getTime());
            b.setDate(b.getDate() + 4 - (b.getDay() || 7));
            var c = b.getTime();
            b.setMonth(0), b.setDate(1);
            return Math.floor(Math.round((c - b) / 864e5) / 7) + 1
        },
        parseDate: function(a, b, c) {
            if (a == null || b == null) throw "Invalid arguments";
            b = typeof b == "object" ? b.toString() : b + "";
            if (b == "") return null;
            var d = (c ? c.shortYearCutoff : null) || this._defaults.shortYearCutoff;
            d = typeof d != "string" ? d : (new Date).getFullYear() % 100 + parseInt(d, 10);
            var e = (c ? c.dayNamesShort : null) || this._defaults.dayNamesShort,
                f = (c ? c.dayNames : null) || this._defaults.dayNames,
                g = (c ? c.monthNamesShort : null) || this._defaults.monthNamesShort,
                h = (c ? c.monthNames : null) || this._defaults.monthNames,
                i = -1,
                j = -1,
                k = -1,
                l = -1,
                m = !1,
                n = function(b) {
                    var c = s + 1 < a.length && a.charAt(s + 1) == b;
                    c && s++;
                    return c
                },
                o = function(a) {
                    var c = n(a),
                        d = a == "@" ? 14 : a == "!" ? 20 : a == "y" && c ? 4 : a == "o" ? 3 : 2,
                        e = new RegExp("^\\d{1," + d + "}"),
                        f = b.substring(r).match(e);
                    if (!f) throw "Missing number at position " + r;
                    r += f[0].length;
                    return parseInt(f[0], 10)
                },
                p = function(a, c, d) {
                    var e = $.map(n(a) ? d : c, function(a, b) {
                            return [
                                [b, a]
                            ]
                        }).sort(function(a, b) {
                            return -(a[1].length - b[1].length)
                        }),
                        f = -1;
                    $.each(e, function(a, c) {
                        var d = c[1];
                        if (b.substr(r, d.length).toLowerCase() == d.toLowerCase()) {
                            f = c[0], r += d.length;
                            return !1
                        }
                    });
                    if (f != -1) return f + 1;
                    throw "Unknown name at position " + r
                },
                q = function() {
                    if (b.charAt(r) != a.charAt(s)) throw "Unexpected literal at position " + r;
                    r++
                },
                r = 0;
            for (var s = 0; s < a.length; s++)
                if (m) a.charAt(s) == "'" && !n("'") ? m = !1 : q();
                else switch (a.charAt(s)) {
                    case "d":
                        k = o("d");
                        break;
                    case "D":
                        p("D", e, f);
                        break;
                    case "o":
                        l = o("o");
                        break;
                    case "m":
                        j = o("m");
                        break;
                    case "M":
                        j = p("M", g, h);
                        break;
                    case "y":
                        i = o("y");
                        break;
                    case "@":
                        var t = new Date(o("@"));
                        i = t.getFullYear(), j = t.getMonth() + 1, k = t.getDate();
                        break;
                    case "!":
                        var t = new Date((o("!") - this._ticksTo1970) / 1e4);
                        i = t.getFullYear(), j = t.getMonth() + 1, k = t.getDate();
                        break;
                    case "'":
                        n("'") ? q() : m = !0;
                        break;
                    default:
                        q()
                }
            if (r < b.length) throw "Extra/unparsed characters found in date: " + b.substring(r);
            i == -1 ? i = (new Date).getFullYear() : i < 100 && (i += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (i <= d ? 0 : -100));
            if (l > -1) {
                j = 1, k = l;
                for (;;) {
                    var u = this._getDaysInMonth(i, j - 1);
                    if (k <= u) break;
                    j++, k -= u
                }
            }
            var t = this._daylightSavingAdjust(new Date(i, j - 1, k));
            if (t.getFullYear() != i || t.getMonth() + 1 != j || t.getDate() != k) throw "Invalid date";
            return t
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
        _ticksTo1970: (718685 + Math.floor(492.5) - Math.floor(19.7) + Math.floor(4.925)) * 24 * 60 * 60 * 1e7,
        formatDate: function(a, b, c) {
            if (!b) return "";
            var d = (c ? c.dayNamesShort : null) || this._defaults.dayNamesShort,
                e = (c ? c.dayNames : null) || this._defaults.dayNames,
                f = (c ? c.monthNamesShort : null) || this._defaults.monthNamesShort,
                g = (c ? c.monthNames : null) || this._defaults.monthNames,
                h = function(b) {
                    var c = m + 1 < a.length && a.charAt(m + 1) == b;
                    c && m++;
                    return c
                },
                i = function(a, b, c) {
                    var d = "" + b;
                    if (h(a))
                        while (d.length < c) d = "0" + d;
                    return d
                },
                j = function(a, b, c, d) {
                    return h(a) ? d[b] : c[b]
                },
                k = "",
                l = !1;
            if (b)
                for (var m = 0; m < a.length; m++)
                    if (l) a.charAt(m) == "'" && !h("'") ? l = !1 : k += a.charAt(m);
                    else switch (a.charAt(m)) {
                        case "d":
                            k += i("d", b.getDate(), 2);
                            break;
                        case "D":
                            k += j("D", b.getDay(), d, e);
                            break;
                        case "o":
                            k += i("o", Math.round(((new Date(b.getFullYear(), b.getMonth(), b.getDate())).getTime() - (new Date(b.getFullYear(), 0, 0)).getTime()) / 864e5), 3);
                            break;
                        case "m":
                            k += i("m", b.getMonth() + 1, 2);
                            break;
                        case "M":
                            k += j("M", b.getMonth(), f, g);
                            break;
                        case "y":
                            k += h("y") ? b.getFullYear() : (b.getYear() % 100 < 10 ? "0" : "") + b.getYear() % 100;
                            break;
                        case "@":
                            k += b.getTime();
                            break;
                        case "!":
                            k += b.getTime() * 1e4 + this._ticksTo1970;
                            break;
                        case "'":
                            h("'") ? k += "'" : l = !0;
                            break;
                        default:
                            k += a.charAt(m)
                    }
            return k
        },
        _possibleChars: function(a) {
            var b = "",
                c = !1,
                d = function(b) {
                    var c = e + 1 < a.length && a.charAt(e + 1) == b;
                    c && e++;
                    return c
                };
            for (var e = 0; e < a.length; e++)
                if (c) a.charAt(e) == "'" && !d("'") ? c = !1 : b += a.charAt(e);
                else switch (a.charAt(e)) {
                    case "d":
                    case "m":
                    case "y":
                    case "@":
                        b += "0123456789";
                        break;
                    case "D":
                    case "M":
                        return null;
                    case "'":
                        d("'") ? b += "'" : c = !0;
                        break;
                    default:
                        b += a.charAt(e)
                }
            return b
        },
        _get: function(a, b) {
            return a.settings[b] !== undefined ? a.settings[b] : this._defaults[b]
        },
        _setDateFromField: function(a, b) {
            if (a.input.val() != a.lastVal) {
                var c = this._get(a, "dateFormat"),
                    d = a.lastVal = a.input ? a.input.val() : null,
                    e, f;
                e = f = this._getDefaultDate(a);
                var g = this._getFormatConfig(a);
                try {
                    e = this.parseDate(c, d, g) || f
                } catch (h) {
                    this.log(h), d = b ? "" : d
                }
                a.selectedDay = e.getDate(), a.drawMonth = a.selectedMonth = e.getMonth(), a.drawYear = a.selectedYear = e.getFullYear(), a.currentDay = d ? e.getDate() : 0, a.currentMonth = d ? e.getMonth() : 0, a.currentYear = d ? e.getFullYear() : 0, this._adjustInstDate(a)
            }
        },
        _getDefaultDate: function(a) {
            return this._restrictMinMax(a, this._determineDate(a, this._get(a, "defaultDate"), new Date))
        },
        _determineDate: function(a, b, c) {
            var d = function(a) {
                    var b = new Date;
                    b.setDate(b.getDate() + a);
                    return b
                },
                e = function(b) {
                    try {
                        return $.datepicker.parseDate($.datepicker._get(a, "dateFormat"), b, $.datepicker._getFormatConfig(a))
                    } catch (c) {}
                    var d = (b.toLowerCase().match(/^c/) ? $.datepicker._getDate(a) : null) || new Date,
                        e = d.getFullYear(),
                        f = d.getMonth(),
                        g = d.getDate(),
                        h = /([+-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,
                        i = h.exec(b);
                    while (i) {
                        switch (i[2] || "d") {
                            case "d":
                            case "D":
                                g += parseInt(i[1], 10);
                                break;
                            case "w":
                            case "W":
                                g += parseInt(i[1], 10) * 7;
                                break;
                            case "m":
                            case "M":
                                f += parseInt(i[1], 10), g = Math.min(g, $.datepicker._getDaysInMonth(e, f));
                                break;
                            case "y":
                            case "Y":
                                e += parseInt(i[1], 10), g = Math.min(g, $.datepicker._getDaysInMonth(e, f))
                        }
                        i = h.exec(b)
                    }
                    return new Date(e, f, g)
                },
                f = b == null || b === "" ? c : typeof b == "string" ? e(b) : typeof b == "number" ? isNaN(b) ? c : d(b) : new Date(b.getTime());
            f = f && f.toString() == "Invalid Date" ? c : f, f && (f.setHours(0), f.setMinutes(0), f.setSeconds(0), f.setMilliseconds(0));
            return this._daylightSavingAdjust(f)
        },
        _daylightSavingAdjust: function(a) {
            if (!a) return null;
            a.setHours(a.getHours() > 12 ? a.getHours() + 2 : 0);
            return a
        },
        _setDate: function(a, b, c) {
            var d = !b,
                e = a.selectedMonth,
                f = a.selectedYear,
                g = this._restrictMinMax(a, this._determineDate(a, b, new Date));
            a.selectedDay = a.currentDay = g.getDate(), a.drawMonth = a.selectedMonth = a.currentMonth = g.getMonth(), a.drawYear = a.selectedYear = a.currentYear = g.getFullYear(), (e != a.selectedMonth || f != a.selectedYear) && !c && this._notifyChange(a), this._adjustInstDate(a), a.input && a.input.val(d ? "" : this._formatDate(a))
        },
        _getDate: function(a) {
            var b = !a.currentYear || a.input && a.input.val() == "" ? null : this._daylightSavingAdjust(new Date(a.currentYear, a.currentMonth, a.currentDay));
            return b
        },
        _generateHTML: function(a) {
            var b = new Date;
            b = this._daylightSavingAdjust(new Date(b.getFullYear(), b.getMonth(), b.getDate()));
            var c = this._get(a, "isRTL"),
                d = this._get(a, "showButtonPanel"),
                e = this._get(a, "hideIfNoPrevNext"),
                f = this._get(a, "navigationAsDateFormat"),
                g = this._getNumberOfMonths(a),
                h = this._get(a, "showCurrentAtPos"),
                i = this._get(a, "stepMonths"),
                j = g[0] != 1 || g[1] != 1,
                k = this._daylightSavingAdjust(a.currentDay ? new Date(a.currentYear, a.currentMonth, a.currentDay) : new Date(9999, 9, 9)),
                l = this._getMinMaxDate(a, "min"),
                m = this._getMinMaxDate(a, "max"),
                n = a.drawMonth - h,
                o = a.drawYear;
            n < 0 && (n += 12, o--);
            if (m) {
                var p = this._daylightSavingAdjust(new Date(m.getFullYear(), m.getMonth() - g[0] * g[1] + 1, m.getDate()));
                p = l && p < l ? l : p;
                while (this._daylightSavingAdjust(new Date(o, n, 1)) > p) n--, n < 0 && (n = 11, o--)
            }
            a.drawMonth = n, a.drawYear = o;
            var q = this._get(a, "prevText");
            q = f ? this.formatDate(q, this._daylightSavingAdjust(new Date(o, n - i, 1)), this._getFormatConfig(a)) : q;
            var r = this._canAdjustMonth(a, -1, o, n) ? '<a class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery_' + dpuuid + ".datepicker._adjustDate('#" + a.id + "', -" + i + ", 'M');\"" + ' title="' + q + '"><span class="ui-icon ui-icon-circle-triangle-' + (c ? "e" : "w") + '">' + q + "</span></a>" : e ? "" : '<a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="' + q + '"><span class="ui-icon ui-icon-circle-triangle-' + (c ? "e" : "w") + '">' + q + "</span></a>",
                s = this._get(a, "nextText");
            s = f ? this.formatDate(s, this._daylightSavingAdjust(new Date(o, n + i, 1)), this._getFormatConfig(a)) : s;
            var t = this._canAdjustMonth(a, 1, o, n) ? '<a class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery_' + dpuuid + ".datepicker._adjustDate('#" + a.id + "', +" + i + ", 'M');\"" + ' title="' + s + '"><span class="ui-icon ui-icon-circle-triangle-' + (c ? "w" : "e") + '">' + s + "</span></a>" : e ? "" : '<a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="' + s + '"><span class="ui-icon ui-icon-circle-triangle-' + (c ? "w" : "e") + '">' + s + "</span></a>",
                u = this._get(a, "currentText"),
                v = this._get(a, "gotoCurrent") && a.currentDay ? k : b;
            u = f ? this.formatDate(u, v, this._getFormatConfig(a)) : u;
            var w = a.inline ? "" : '<button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" onclick="DP_jQuery_' + dpuuid + '.datepicker._hideDatepicker();">' + this._get(a, "closeText") + "</button>",
                x = d ? '<div class="ui-datepicker-buttonpane ui-widget-content">' + (c ? w : "") + (this._isInRange(a, v) ? '<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" onclick="DP_jQuery_' + dpuuid + ".datepicker._gotoToday('#" + a.id + "');\"" + ">" + u + "</button>" : "") + (c ? "" : w) + "</div>" : "",
                y = parseInt(this._get(a, "firstDay"), 10);
            y = isNaN(y) ? 0 : y;
            var z = this._get(a, "showWeek"),
                A = this._get(a, "dayNames"),
                B = this._get(a, "dayNamesShort"),
                C = this._get(a, "dayNamesMin"),
                D = this._get(a, "monthNames"),
                E = this._get(a, "monthNamesShort"),
                F = this._get(a, "beforeShowDay"),
                G = this._get(a, "showOtherMonths"),
                H = this._get(a, "selectOtherMonths"),
                I = this._get(a, "calculateWeek") || this.iso8601Week,
                J = this._getDefaultDate(a),
                K = "";
            for (var L = 0; L < g[0]; L++) {
                var M = "";
                this.maxRows = 4;
                for (var N = 0; N < g[1]; N++) {
                    var O = this._daylightSavingAdjust(new Date(o, n, a.selectedDay)),
                        P = " ui-corner-all",
                        Q = "";
                    if (j) {
                        Q += '<div class="ui-datepicker-group';
                        if (g[1] > 1) switch (N) {
                            case 0:
                                Q += " ui-datepicker-group-first", P = " ui-corner-" + (c ? "right" : "left");
                                break;
                            case g[1] - 1:
                                Q += " ui-datepicker-group-last", P = " ui-corner-" + (c ? "left" : "right");
                                break;
                            default:
                                Q += " ui-datepicker-group-middle", P = ""
                        }
                        Q += '">'
                    }
                    Q += '<div class="ui-datepicker-header ui-widget-header ui-helper-clearfix' + P + '">' + (/all|left/.test(P) && L == 0 ? c ? t : r : "") + (/all|right/.test(P) && L == 0 ? c ? r : t : "") + this._generateMonthYearHeader(a, n, o, l, m, L > 0 || N > 0, D, E) + '</div><table class="ui-datepicker-calendar"><thead>' + "<tr>";
                    var R = z ? '<th class="ui-datepicker-week-col">' + this._get(a, "weekHeader") + "</th>" : "";
                    for (var S = 0; S < 7; S++) {
                        var T = (S + y) % 7;
                        R += "<th" + ((S + y + 6) % 7 >= 5 ? ' class="ui-datepicker-week-end"' : "") + ">" + '<span title="' + A[T] + '">' + C[T] + "</span></th>"
                    }
                    Q += R + "</tr></thead><tbody>";
                    var U = this._getDaysInMonth(o, n);
                    o == a.selectedYear && n == a.selectedMonth && (a.selectedDay = Math.min(a.selectedDay, U));
                    var V = (this._getFirstDayOfMonth(o, n) - y + 7) % 7,
                        W = Math.ceil((V + U) / 7),
                        X = j ? this.maxRows > W ? this.maxRows : W : W;
                    this.maxRows = X;
                    var Y = this._daylightSavingAdjust(new Date(o, n, 1 - V));
                    for (var Z = 0; Z < X; Z++) {
                        Q += "<tr>";
                        var _ = z ? '<td class="ui-datepicker-week-col">' + this._get(a, "calculateWeek")(Y) + "</td>" : "";
                        for (var S = 0; S < 7; S++) {
                            var ba = F ? F.apply(a.input ? a.input[0] : null, [Y]) : [!0, ""],
                                bb = Y.getMonth() != n,
                                bc = bb && !H || !ba[0] || l && Y < l || m && Y > m;
                            _ += '<td class="' + ((S + y + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (bb ? " ui-datepicker-other-month" : "") + (Y.getTime() == O.getTime() && n == a.selectedMonth && a._keyEvent || J.getTime() == Y.getTime() && J.getTime() == O.getTime() ? " " + this._dayOverClass : "") + (bc ? " " + this._unselectableClass + " ui-state-disabled" : "") + (bb && !G ? "" : " " + ba[1] + (Y.getTime() == k.getTime() ? " " + this._currentClass : "") + (Y.getTime() == b.getTime() ? " ui-datepicker-today" : "")) + '"' + ((!bb || G) && ba[2] ? ' title="' + ba[2] + '"' : "") + (bc ? "" : ' onclick="DP_jQuery_' + dpuuid + ".datepicker._selectDay('#" + a.id + "'," + Y.getMonth() + "," + Y.getFullYear() + ', this);return false;"') + ">" + (bb && !G ? "&#xa0;" : bc ? '<span class="ui-state-default">' + Y.getDate() + "</span>" : '<a class="ui-state-default' + (Y.getTime() == b.getTime() ? " ui-state-highlight" : "") + (Y.getTime() == k.getTime() ? " ui-state-active" : "") + (bb ? " ui-priority-secondary" : "") + '" href="#">' + Y.getDate() + "</a>") + "</td>", Y.setDate(Y.getDate() + 1), Y = this._daylightSavingAdjust(Y)
                        }
                        Q += _ + "</tr>"
                    }
                    n++, n > 11 && (n = 0, o++), Q += "</tbody></table>" + (j ? "</div>" + (g[0] > 0 && N == g[1] - 1 ? '<div class="ui-datepicker-row-break"></div>' : "") : ""), M += Q
                }
                K += M
            }
            K += x + ($.browser.msie && parseInt($.browser.version, 10) < 7 && !a.inline ? '<iframe src="javascript:false;" class="ui-datepicker-cover" frameborder="0"></iframe>' : ""),
                a._keyEvent = !1;
            return K
        },
        _generateMonthYearHeader: function(a, b, c, d, e, f, g, h) {
            var i = this._get(a, "changeMonth"),
                j = this._get(a, "changeYear"),
                k = this._get(a, "showMonthAfterYear"),
                l = '<div class="ui-datepicker-title">',
                m = "";
            if (f || !i) m += '<span class="ui-datepicker-month">' + g[b] + "</span>";
            else {
                var n = d && d.getFullYear() == c,
                    o = e && e.getFullYear() == c;
                m += '<select class="ui-datepicker-month" onchange="DP_jQuery_' + dpuuid + ".datepicker._selectMonthYear('#" + a.id + "', this, 'M');\" " + ">";
                for (var p = 0; p < 12; p++)(!n || p >= d.getMonth()) && (!o || p <= e.getMonth()) && (m += '<option value="' + p + '"' + (p == b ? ' selected="selected"' : "") + ">" + h[p] + "</option>");
                m += "</select>"
            }
            k || (l += m + (f || !i || !j ? "&#xa0;" : ""));
            if (!a.yearshtml) {
                a.yearshtml = "";
                if (f || !j) l += '<span class="ui-datepicker-year">' + c + "</span>";
                else {
                    var q = this._get(a, "yearRange").split(":"),
                        r = (new Date).getFullYear(),
                        s = function(a) {
                            var b = a.match(/c[+-].*/) ? c + parseInt(a.substring(1), 10) : a.match(/[+-].*/) ? r + parseInt(a, 10) : parseInt(a, 10);
                            return isNaN(b) ? r : b
                        },
                        t = s(q[0]),
                        u = Math.max(t, s(q[1] || ""));
                    t = d ? Math.max(t, d.getFullYear()) : t, u = e ? Math.min(u, e.getFullYear()) : u, a.yearshtml += '<select class="ui-datepicker-year" onchange="DP_jQuery_' + dpuuid + ".datepicker._selectMonthYear('#" + a.id + "', this, 'Y');\" " + ">";
                    for (; t <= u; t++) a.yearshtml += '<option value="' + t + '"' + (t == c ? ' selected="selected"' : "") + ">" + t + "</option>";
                    a.yearshtml += "</select>", l += a.yearshtml, a.yearshtml = null
                }
            }
            l += this._get(a, "yearSuffix"), k && (l += (f || !i || !j ? "&#xa0;" : "") + m), l += "</div>";
            return l
        },
        _adjustInstDate: function(a, b, c) {
            var d = a.drawYear + (c == "Y" ? b : 0),
                e = a.drawMonth + (c == "M" ? b : 0),
                f = Math.min(a.selectedDay, this._getDaysInMonth(d, e)) + (c == "D" ? b : 0),
                g = this._restrictMinMax(a, this._daylightSavingAdjust(new Date(d, e, f)));
            a.selectedDay = g.getDate(), a.drawMonth = a.selectedMonth = g.getMonth(), a.drawYear = a.selectedYear = g.getFullYear(), (c == "M" || c == "Y") && this._notifyChange(a)
        },
        _restrictMinMax: function(a, b) {
            var c = this._getMinMaxDate(a, "min"),
                d = this._getMinMaxDate(a, "max"),
                e = c && b < c ? c : b;
            e = d && e > d ? d : e;
            return e
        },
        _notifyChange: function(a) {
            var b = this._get(a, "onChangeMonthYear");
            b && b.apply(a.input ? a.input[0] : null, [a.selectedYear, a.selectedMonth + 1, a])
        },
        _getNumberOfMonths: function(a) {
            var b = this._get(a, "numberOfMonths");
            return b == null ? [1, 1] : typeof b == "number" ? [1, b] : b
        },
        _getMinMaxDate: function(a, b) {
            return this._determineDate(a, this._get(a, b + "Date"), null)
        },
        _getDaysInMonth: function(a, b) {
            return 32 - this._daylightSavingAdjust(new Date(a, b, 32)).getDate()
        },
        _getFirstDayOfMonth: function(a, b) {
            return (new Date(a, b, 1)).getDay()
        },
        _canAdjustMonth: function(a, b, c, d) {
            var e = this._getNumberOfMonths(a),
                f = this._daylightSavingAdjust(new Date(c, d + (b < 0 ? b : e[0] * e[1]), 1));
            b < 0 && f.setDate(this._getDaysInMonth(f.getFullYear(), f.getMonth()));
            return this._isInRange(a, f)
        },
        _isInRange: function(a, b) {
            var c = this._getMinMaxDate(a, "min"),
                d = this._getMinMaxDate(a, "max");
            return (!c || b.getTime() >= c.getTime()) && (!d || b.getTime() <= d.getTime())
        },
        _getFormatConfig: function(a) {
            var b = this._get(a, "shortYearCutoff");
            b = typeof b != "string" ? b : (new Date).getFullYear() % 100 + parseInt(b, 10);
            return {
                shortYearCutoff: b,
                dayNamesShort: this._get(a, "dayNamesShort"),
                dayNames: this._get(a, "dayNames"),
                monthNamesShort: this._get(a, "monthNamesShort"),
                monthNames: this._get(a, "monthNames")
            }
        },
        _formatDate: function(a, b, c, d) {
            b || (a.currentDay = a.selectedDay, a.currentMonth = a.selectedMonth, a.currentYear = a.selectedYear);
            var e = b ? typeof b == "object" ? b : this._daylightSavingAdjust(new Date(d, c, b)) : this._daylightSavingAdjust(new Date(a.currentYear, a.currentMonth, a.currentDay));
            return this.formatDate(this._get(a, "dateFormat"), e, this._getFormatConfig(a))
        }
    }), $.fn.datepicker = function(a) {
        if (!this.length) return this;
        $.datepicker.initialized || ($(document).mousedown($.datepicker._checkExternalClick).find("body").append($.datepicker.dpDiv), $.datepicker.initialized = !0);
        var b = Array.prototype.slice.call(arguments, 1);
        if (typeof a == "string" && (a == "isDisabled" || a == "getDate" || a == "widget")) return $.datepicker["_" + a + "Datepicker"].apply($.datepicker, [this[0]].concat(b));
        if (a == "option" && arguments.length == 2 && typeof arguments[1] == "string") return $.datepicker["_" + a + "Datepicker"].apply($.datepicker, [this[0]].concat(b));
        return this.each(function() {
            typeof a == "string" ? $.datepicker["_" + a + "Datepicker"].apply($.datepicker, [this].concat(b)) : $.datepicker._attachDatepicker(this, a)
        })
    }, $.datepicker = new Datepicker, $.datepicker.initialized = !1, $.datepicker.uuid = (new Date).getTime(), $.datepicker.version = "1.8.18", window["DP_jQuery_" + dpuuid] = $
})(jQuery);

/////DATETIME PICKER
/*
 * jQuery timepicker addon
 * By: Trent Richardson [http://trentrichardson.com]
 * Version 0.9.9
 * Last Modified: 02/05/2012
 * 
 * Copyright 2012 Trent Richardson
 * Dual licensed under the MIT and GPL licenses.
 * http://trentrichardson.com/Impromptu/GPL-LICENSE.txt
 * http://trentrichardson.com/Impromptu/MIT-LICENSE.txt
 * 
 * HERES THE CSS:
 * .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
 * .ui-timepicker-div dl { text-align: left; }
 * .ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
 * .ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
 * .ui-timepicker-div td { font-size: 90%; }
 * .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
 */

(function($) {

    $.extend($.ui, {
        timepicker: {
            version: "0.9.9"
        }
    });

    /* Time picker manager.
       Use the singleton instance of this class, $.timepicker, to interact with the time picker.
       Settings for (groups of) time pickers are maintained in an instance object,
       allowing multiple different settings on the same page. */

    function Timepicker() {
        this.regional = []; // Available regional settings, indexed by language code
        this.regional[''] = { // Default regional settings
            currentText: 'Now',
            closeText: 'Done',
            ampm: false,
            amNames: ['AM', 'A'],
            pmNames: ['PM', 'P'],
            timeFormat: 'hh:mm tt',
            timeSuffix: '',
            timeOnlyTitle: 'Choose Time',
            timeText: 'Time',
            hourText: 'Hour',
            minuteText: 'Minute',
            secondText: 'Second',
            millisecText: 'Millisecond',
            timezoneText: 'Time Zone'
        };
        this._defaults = { // Global defaults for all the datetime picker instances
            showButtonPanel: true,
            timeOnly: false,
            showHour: true,
            showMinute: true,
            showSecond: false,
            showMillisec: false,
            showTimezone: false,
            showTime: true,
            stepHour: 1,
            stepMinute: 1,
            stepSecond: 1,
            stepMillisec: 1,
            hour: 0,
            minute: 0,
            second: 0,
            millisec: 0,
            timezone: '+0000',
            hourMin: 0,
            minuteMin: 0,
            secondMin: 0,
            millisecMin: 0,
            hourMax: 23,
            minuteMax: 59,
            secondMax: 59,
            millisecMax: 999,
            minDateTime: null,
            maxDateTime: null,
            onSelect: null,
            hourGrid: 0,
            minuteGrid: 0,
            secondGrid: 0,
            millisecGrid: 0,
            alwaysSetTime: true,
            separator: ' ',
            altFieldTimeOnly: true,
            showTimepicker: true,
            timezoneIso8609: false,
            timezoneList: null,
            addSliderAccess: false,
            sliderAccessArgs: null
        };
        $.extend(this._defaults, this.regional['']);
    };

    $.extend(Timepicker.prototype, {
        $input: null,
        $altInput: null,
        $timeObj: null,
        inst: null,
        hour_slider: null,
        minute_slider: null,
        second_slider: null,
        millisec_slider: null,
        timezone_select: null,
        hour: 0,
        minute: 0,
        second: 0,
        millisec: 0,
        timezone: '+0000',
        hourMinOriginal: null,
        minuteMinOriginal: null,
        secondMinOriginal: null,
        millisecMinOriginal: null,
        hourMaxOriginal: null,
        minuteMaxOriginal: null,
        secondMaxOriginal: null,
        millisecMaxOriginal: null,
        ampm: '',
        formattedDate: '',
        formattedTime: '',
        formattedDateTime: '',
        timezoneList: null,

        /* Override the default settings for all instances of the time picker.
           @param  settings  object - the new settings to use as defaults (anonymous object)
           @return the manager object */
        setDefaults: function(settings) {
            extendRemove(this._defaults, settings || {});
            return this;
        },

        //########################################################################
        // Create a new Timepicker instance
        //########################################################################
        _newInst: function($input, o) {
            var tp_inst = new Timepicker(),
                inlineSettings = {};

            for (var attrName in this._defaults) {
                var attrValue = $input.attr('time:' + attrName);
                if (attrValue) {
                    try {
                        inlineSettings[attrName] = eval(attrValue);
                    } catch (err) {
                        inlineSettings[attrName] = attrValue;
                    }
                }
            }
            tp_inst._defaults = $.extend({}, this._defaults, inlineSettings, o, {
                beforeShow: function(input, dp_inst) {
                    if ($.isFunction(o.beforeShow))
                        return o.beforeShow(input, dp_inst, tp_inst);
                },
                onChangeMonthYear: function(year, month, dp_inst) {
                    // Update the time as well : this prevents the time from disappearing from the $input field.
                    tp_inst._updateDateTime(dp_inst);
                    if ($.isFunction(o.onChangeMonthYear))
                        o.onChangeMonthYear.call($input[0], year, month, dp_inst, tp_inst);
                },
                onClose: function(dateText, dp_inst) {
                    if (tp_inst.timeDefined === true && $input.val() != '')
                        tp_inst._updateDateTime(dp_inst);
                    if ($.isFunction(o.onClose))
                        o.onClose.call($input[0], dateText, dp_inst, tp_inst);
                },
                timepicker: tp_inst // add timepicker as a property of datepicker: $.datepicker._get(dp_inst, 'timepicker');
            });
            tp_inst.amNames = $.map(tp_inst._defaults.amNames, function(val) {
                return val.toUpperCase()
            });
            tp_inst.pmNames = $.map(tp_inst._defaults.pmNames, function(val) {
                return val.toUpperCase()
            });

            if (tp_inst._defaults.timezoneList === null) {
                var timezoneList = [];
                for (var i = -11; i <= 12; i++)
                    timezoneList.push((i >= 0 ? '+' : '-') + ('0' + Math.abs(i).toString()).slice(-2) + '00');
                if (tp_inst._defaults.timezoneIso8609)
                    timezoneList = $.map(timezoneList, function(val) {
                        return val == '+0000' ? 'Z' : (val.substring(0, 3) + ':' + val.substring(3));
                    });
                tp_inst._defaults.timezoneList = timezoneList;
            }

            tp_inst.hour = tp_inst._defaults.hour;
            tp_inst.minute = tp_inst._defaults.minute;
            tp_inst.second = tp_inst._defaults.second;
            tp_inst.millisec = tp_inst._defaults.millisec;
            tp_inst.ampm = '';
            tp_inst.$input = $input;

            if (o.altField)
                tp_inst.$altInput = $(o.altField)
                .css({
                    cursor: 'pointer'
                })
                .focus(function() {
                    $input.trigger("focus");
                });

            if (tp_inst._defaults.minDate == 0 || tp_inst._defaults.minDateTime == 0) {
                tp_inst._defaults.minDate = new Date();
            }
            if (tp_inst._defaults.maxDate == 0 || tp_inst._defaults.maxDateTime == 0) {
                tp_inst._defaults.maxDate = new Date();
            }

            // datepicker needs minDate/maxDate, timepicker needs minDateTime/maxDateTime..
            if (tp_inst._defaults.minDate !== undefined && tp_inst._defaults.minDate instanceof Date)
                tp_inst._defaults.minDateTime = new Date(tp_inst._defaults.minDate.getTime());
            if (tp_inst._defaults.minDateTime !== undefined && tp_inst._defaults.minDateTime instanceof Date)
                tp_inst._defaults.minDate = new Date(tp_inst._defaults.minDateTime.getTime());
            if (tp_inst._defaults.maxDate !== undefined && tp_inst._defaults.maxDate instanceof Date)
                tp_inst._defaults.maxDateTime = new Date(tp_inst._defaults.maxDate.getTime());
            if (tp_inst._defaults.maxDateTime !== undefined && tp_inst._defaults.maxDateTime instanceof Date)
                tp_inst._defaults.maxDate = new Date(tp_inst._defaults.maxDateTime.getTime());
            return tp_inst;
        },

        //########################################################################
        // add our sliders to the calendar
        //########################################################################
        _addTimePicker: function(dp_inst) {
            var currDT = (this.$altInput && this._defaults.altFieldTimeOnly) ?
                this.$input.val() + ' ' + this.$altInput.val() :
                this.$input.val();

            this.timeDefined = this._parseTime(currDT);
            this._limitMinMaxDateTime(dp_inst, false);
            this._injectTimePicker();
        },

        //########################################################################
        // parse the time string from input value or _setTime
        //########################################################################
        _parseTime: function(timeString, withDate) {
            var regstr = this._defaults.timeFormat.toString()
                .replace(/h{1,2}/ig, '(\\d?\\d)')
                .replace(/m{1,2}/ig, '(\\d?\\d)')
                .replace(/s{1,2}/ig, '(\\d?\\d)')
                .replace(/l{1}/ig, '(\\d?\\d?\\d)')
                .replace(/t{1,2}/ig, this._getPatternAmpm())
                .replace(/z{1}/ig, '(z|[-+]\\d\\d:?\\d\\d)?')
                .replace(/\s/g, '\\s?') + this._defaults.timeSuffix + '$',
                order = this._getFormatPositions(),
                ampm = '',
                treg;

            if (!this.inst) this.inst = $.datepicker._getInst(this.$input[0]);

            if (withDate || !this._defaults.timeOnly) {
                // the time should come after x number of characters and a space.
                // x = at least the length of text specified by the date format
                var dp_dateFormat = $.datepicker._get(this.inst, 'dateFormat');
                // escape special regex characters in the seperator
                var specials = new RegExp("[.*+?|()\\[\\]{}\\\\]", "g");
                regstr = '^.{' + dp_dateFormat.length + ',}?' + this._defaults.separator.replace(specials, "\\$&") + regstr;
            }

            treg = timeString.match(new RegExp(regstr, 'i'));

            if (treg) {
                if (order.t !== -1) {
                    if (treg[order.t] === undefined || treg[order.t].length === 0) {
                        ampm = '';
                        this.ampm = '';
                    } else {
                        ampm = $.inArray(treg[order.t].toUpperCase(), this.amNames) !== -1 ? 'AM' : 'PM';
                        this.ampm = this._defaults[ampm == 'AM' ? 'amNames' : 'pmNames'][0];
                    }
                }

                if (order.h !== -1) {
                    if (ampm == 'AM' && treg[order.h] == '12')
                        this.hour = 0; // 12am = 0 hour
                    else if (ampm == 'PM' && treg[order.h] != '12')
                        this.hour = (parseFloat(treg[order.h]) + 12).toFixed(0); // 12pm = 12 hour, any other pm = hour + 12
                    else this.hour = Number(treg[order.h]);
                }

                if (order.m !== -1) this.minute = Number(treg[order.m]);
                if (order.s !== -1) this.second = Number(treg[order.s]);
                if (order.l !== -1) this.millisec = Number(treg[order.l]);
                if (order.z !== -1 && treg[order.z] !== undefined) {
                    var tz = treg[order.z].toUpperCase();
                    switch (tz.length) {
                        case 1: // Z
                            tz = this._defaults.timezoneIso8609 ? 'Z' : '+0000';
                            break;
                        case 5: // +hhmm
                            if (this._defaults.timezoneIso8609)
                                tz = tz.substring(1) == '0000' ?
                                'Z' :
                                tz.substring(0, 3) + ':' + tz.substring(3);
                            break;
                        case 6: // +hh:mm
                            if (!this._defaults.timezoneIso8609)
                                tz = tz == 'Z' || tz.substring(1) == '00:00' ?
                                '+0000' :
                                tz.replace(/:/, '');
                            else if (tz.substring(1) == '00:00')
                                tz = 'Z';
                            break;
                    }
                    this.timezone = tz;
                }

                return true;

            }
            return false;
        },

        //########################################################################
        // pattern for standard and localized AM/PM markers
        //########################################################################
        _getPatternAmpm: function() {
            var markers = [];
            o = this._defaults;
            if (o.amNames)
                $.merge(markers, o.amNames);
            if (o.pmNames)
                $.merge(markers, o.pmNames);
            markers = $.map(markers, function(val) {
                return val.replace(/[.*+?|()\[\]{}\\]/g, '\\$&')
            });
            return '(' + markers.join('|') + ')?';
        },

        //########################################################################
        // figure out position of time elements.. cause js cant do named captures
        //########################################################################
        _getFormatPositions: function() {
            var finds = this._defaults.timeFormat.toLowerCase().match(/(h{1,2}|m{1,2}|s{1,2}|l{1}|t{1,2}|z)/g),
                orders = {
                    h: -1,
                    m: -1,
                    s: -1,
                    l: -1,
                    t: -1,
                    z: -1
                };

            if (finds)
                for (var i = 0; i < finds.length; i++)
                    if (orders[finds[i].toString().charAt(0)] == -1)
                        orders[finds[i].toString().charAt(0)] = i + 1;

            return orders;
        },

        //########################################################################
        // generate and inject html for timepicker into ui datepicker
        //########################################################################
        _injectTimePicker: function() {
            var $dp = this.inst.dpDiv,
                o = this._defaults,
                tp_inst = this,
                // Added by Peter Medeiros:
                // - Figure out what the hour/minute/second max should be based on the step values.
                // - Example: if stepMinute is 15, then minMax is 45.
                hourMax = parseInt((o.hourMax - ((o.hourMax - o.hourMin) % o.stepHour)), 10),
                minMax = parseInt((o.minuteMax - ((o.minuteMax - o.minuteMin) % o.stepMinute)), 10),
                secMax = parseInt((o.secondMax - ((o.secondMax - o.secondMin) % o.stepSecond)), 10),
                millisecMax = parseInt((o.millisecMax - ((o.millisecMax - o.millisecMin) % o.stepMillisec)), 10),
                dp_id = this.inst.id.toString().replace(/([^A-Za-z0-9_])/g, '');

            // Prevent displaying twice
            //if ($dp.find("div#ui-timepicker-div-"+ dp_id).length === 0) {
            if ($dp.find("div#ui-timepicker-div-" + dp_id).length === 0 && o.showTimepicker) {
                var noDisplay = ' style="display:none;"',
                    html = '<div class="ui-timepicker-div" id="ui-timepicker-div-' + dp_id + '"><dl>' +
                    '<dt class="ui_tpicker_time_label" id="ui_tpicker_time_label_' + dp_id + '"' +
                    ((o.showTime) ? '' : noDisplay) + '>' + o.timeText + '</dt>' +
                    '<dd class="ui_tpicker_time" id="ui_tpicker_time_' + dp_id + '"' +
                    ((o.showTime) ? '' : noDisplay) + '></dd>' +
                    '<dt class="ui_tpicker_hour_label" id="ui_tpicker_hour_label_' + dp_id + '"' +
                    ((o.showHour) ? '' : noDisplay) + '>' + o.hourText + '</dt>',
                    hourGridSize = 0,
                    minuteGridSize = 0,
                    secondGridSize = 0,
                    millisecGridSize = 0,
                    size;

                // Hours
                html += '<dd class="ui_tpicker_hour"><div id="ui_tpicker_hour_' + dp_id + '"' +
                    ((o.showHour) ? '' : noDisplay) + '></div>';
                if (o.showHour && o.hourGrid > 0) {
                    html += '<div style="padding-left: 1px"><table class="ui-tpicker-grid-label"><tr>';

                    for (var h = o.hourMin; h <= hourMax; h += parseInt(o.hourGrid, 10)) {
                        hourGridSize++;
                        var tmph = (o.ampm && h > 12) ? h - 12 : h;
                        if (tmph < 10) tmph = '0' + tmph;
                        if (o.ampm) {
                            if (h == 0) tmph = 12 + 'a';
                            else if (h < 12) tmph += 'a';
                            else tmph += 'p';
                        }
                        html += '<td>' + tmph + '</td>';
                    }

                    html += '</tr></table></div>';
                }
                html += '</dd>';

                // Minutes
                html += '<dt class="ui_tpicker_minute_label" id="ui_tpicker_minute_label_' + dp_id + '"' +
                    ((o.showMinute) ? '' : noDisplay) + '>' + o.minuteText + '</dt>' +
                    '<dd class="ui_tpicker_minute"><div id="ui_tpicker_minute_' + dp_id + '"' +
                    ((o.showMinute) ? '' : noDisplay) + '></div>';

                if (o.showMinute && o.minuteGrid > 0) {
                    html += '<div style="padding-left: 1px"><table class="ui-tpicker-grid-label"><tr>';

                    for (var m = o.minuteMin; m <= minMax; m += parseInt(o.minuteGrid, 10)) {
                        minuteGridSize++;
                        html += '<td>' + ((m < 10) ? '0' : '') + m + '</td>';
                    }

                    html += '</tr></table></div>';
                }
                html += '</dd>';

                // Seconds
                html += '<dt class="ui_tpicker_second_label" id="ui_tpicker_second_label_' + dp_id + '"' +
                    ((o.showSecond) ? '' : noDisplay) + '>' + o.secondText + '</dt>' +
                    '<dd class="ui_tpicker_second"><div id="ui_tpicker_second_' + dp_id + '"' +
                    ((o.showSecond) ? '' : noDisplay) + '></div>';

                if (o.showSecond && o.secondGrid > 0) {
                    html += '<div style="padding-left: 1px"><table><tr>';

                    for (var s = o.secondMin; s <= secMax; s += parseInt(o.secondGrid, 10)) {
                        secondGridSize++;
                        html += '<td>' + ((s < 10) ? '0' : '') + s + '</td>';
                    }

                    html += '</tr></table></div>';
                }
                html += '</dd>';

                // Milliseconds
                html += '<dt class="ui_tpicker_millisec_label" id="ui_tpicker_millisec_label_' + dp_id + '"' +
                    ((o.showMillisec) ? '' : noDisplay) + '>' + o.millisecText + '</dt>' +
                    '<dd class="ui_tpicker_millisec"><div id="ui_tpicker_millisec_' + dp_id + '"' +
                    ((o.showMillisec) ? '' : noDisplay) + '></div>';

                if (o.showMillisec && o.millisecGrid > 0) {
                    html += '<div style="padding-left: 1px"><table><tr>';

                    for (var l = o.millisecMin; l <= millisecMax; l += parseInt(o.millisecGrid, 10)) {
                        millisecGridSize++;
                        html += '<td>' + ((l < 10) ? '0' : '') + l + '</td>';
                    }

                    html += '</tr></table></div>';
                }
                html += '</dd>';

                // Timezone
                html += '<dt class="ui_tpicker_timezone_label" id="ui_tpicker_timezone_label_' + dp_id + '"' +
                    ((o.showTimezone) ? '' : noDisplay) + '>' + o.timezoneText + '</dt>';
                html += '<dd class="ui_tpicker_timezone" id="ui_tpicker_timezone_' + dp_id + '"' +
                    ((o.showTimezone) ? '' : noDisplay) + '></dd>';

                html += '</dl></div>';
                $tp = $(html);

                // if we only want time picker...
                if (o.timeOnly === true) {
                    $tp.prepend(
                        '<div class="ui-widget-header ui-helper-clearfix ui-corner-all">' +
                        '<div class="ui-datepicker-title">' + o.timeOnlyTitle + '</div>' +
                        '</div>');
                    $dp.find('.ui-datepicker-header, .ui-datepicker-calendar').hide();
                }

                this.hour_slider = $tp.find('#ui_tpicker_hour_' + dp_id).slider({
                    orientation: "horizontal",
                    value: this.hour,
                    min: o.hourMin,
                    max: hourMax,
                    step: o.stepHour,
                    slide: function(event, ui) {
                        tp_inst.hour_slider.slider("option", "value", ui.value);
                        tp_inst._onTimeChange();
                    }
                });


                // Updated by Peter Medeiros:
                // - Pass in Event and UI instance into slide function
                this.minute_slider = $tp.find('#ui_tpicker_minute_' + dp_id).slider({
                    orientation: "horizontal",
                    value: this.minute,
                    min: o.minuteMin,
                    max: minMax,
                    step: o.stepMinute,
                    slide: function(event, ui) {
                        tp_inst.minute_slider.slider("option", "value", ui.value);
                        tp_inst._onTimeChange();
                    }
                });

                this.second_slider = $tp.find('#ui_tpicker_second_' + dp_id).slider({
                    orientation: "horizontal",
                    value: this.second,
                    min: o.secondMin,
                    max: secMax,
                    step: o.stepSecond,
                    slide: function(event, ui) {
                        tp_inst.second_slider.slider("option", "value", ui.value);
                        tp_inst._onTimeChange();
                    }
                });

                this.millisec_slider = $tp.find('#ui_tpicker_millisec_' + dp_id).slider({
                    orientation: "horizontal",
                    value: this.millisec,
                    min: o.millisecMin,
                    max: millisecMax,
                    step: o.stepMillisec,
                    slide: function(event, ui) {
                        tp_inst.millisec_slider.slider("option", "value", ui.value);
                        tp_inst._onTimeChange();
                    }
                });

                this.timezone_select = $tp.find('#ui_tpicker_timezone_' + dp_id).append('<select></select>').find("select");
                $.fn.append.apply(this.timezone_select,
                    $.map(o.timezoneList, function(val, idx) {
                        return $("<option />")
                            .val(typeof val == "object" ? val.value : val)
                            .text(typeof val == "object" ? val.label : val);
                    })
                );
                this.timezone_select.val((typeof this.timezone != "undefined" && this.timezone != null && this.timezone != "") ? this.timezone : o.timezone);
                this.timezone_select.change(function() {
                    tp_inst._onTimeChange();
                });

                // Add grid functionality
                if (o.showHour && o.hourGrid > 0) {
                    size = 100 * hourGridSize * o.hourGrid / (hourMax - o.hourMin);

                    $tp.find(".ui_tpicker_hour table").css({
                        width: size + "%",
                        marginLeft: (size / (-2 * hourGridSize)) + "%",
                        borderCollapse: 'collapse'
                    }).find("td").each(function(index) {
                        $(this).click(function() {
                            var h = $(this).html();
                            if (o.ampm) {
                                var ap = h.substring(2).toLowerCase(),
                                    aph = parseInt(h.substring(0, 2), 10);
                                if (ap == 'a') {
                                    if (aph == 12) h = 0;
                                    else h = aph;
                                } else if (aph == 12) h = 12;
                                else h = aph + 12;
                            }
                            tp_inst.hour_slider.slider("option", "value", h);
                            tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        }).css({
                            cursor: 'pointer',
                            width: (100 / hourGridSize) + '%',
                            textAlign: 'center',
                            overflow: 'hidden'
                        });
                    });
                }

                if (o.showMinute && o.minuteGrid > 0) {
                    size = 100 * minuteGridSize * o.minuteGrid / (minMax - o.minuteMin);
                    $tp.find(".ui_tpicker_minute table").css({
                        width: size + "%",
                        marginLeft: (size / (-2 * minuteGridSize)) + "%",
                        borderCollapse: 'collapse'
                    }).find("td").each(function(index) {
                        $(this).click(function() {
                            tp_inst.minute_slider.slider("option", "value", $(this).html());
                            tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        }).css({
                            cursor: 'pointer',
                            width: (100 / minuteGridSize) + '%',
                            textAlign: 'center',
                            overflow: 'hidden'
                        });
                    });
                }

                if (o.showSecond && o.secondGrid > 0) {
                    $tp.find(".ui_tpicker_second table").css({
                        width: size + "%",
                        marginLeft: (size / (-2 * secondGridSize)) + "%",
                        borderCollapse: 'collapse'
                    }).find("td").each(function(index) {
                        $(this).click(function() {
                            tp_inst.second_slider.slider("option", "value", $(this).html());
                            tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        }).css({
                            cursor: 'pointer',
                            width: (100 / secondGridSize) + '%',
                            textAlign: 'center',
                            overflow: 'hidden'
                        });
                    });
                }

                if (o.showMillisec && o.millisecGrid > 0) {
                    $tp.find(".ui_tpicker_millisec table").css({
                        width: size + "%",
                        marginLeft: (size / (-2 * millisecGridSize)) + "%",
                        borderCollapse: 'collapse'
                    }).find("td").each(function(index) {
                        $(this).click(function() {
                            tp_inst.millisec_slider.slider("option", "value", $(this).html());
                            tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        }).css({
                            cursor: 'pointer',
                            width: (100 / millisecGridSize) + '%',
                            textAlign: 'center',
                            overflow: 'hidden'
                        });
                    });
                }

                var $buttonPanel = $dp.find('.ui-datepicker-buttonpane');
                if ($buttonPanel.length) $buttonPanel.before($tp);
                else $dp.append($tp);

                this.$timeObj = $tp.find('#ui_tpicker_time_' + dp_id);

                if (this.inst !== null) {
                    var timeDefined = this.timeDefined;
                    this._onTimeChange();
                    this.timeDefined = timeDefined;
                }

                //Emulate datepicker onSelect behavior. Call on slidestop.
                var onSelectDelegate = function() {
                    tp_inst._onSelectHandler();
                };
                this.hour_slider.bind('slidestop', onSelectDelegate);
                this.minute_slider.bind('slidestop', onSelectDelegate);
                this.second_slider.bind('slidestop', onSelectDelegate);
                this.millisec_slider.bind('slidestop', onSelectDelegate);

                // slideAccess integration: http://trentrichardson.com/2011/11/11/jquery-ui-sliders-and-touch-accessibility/
                if (this._defaults.addSliderAccess) {
                    var sliderAccessArgs = this._defaults.sliderAccessArgs;
                    setTimeout(function() { // fix for inline mode
                        if ($tp.find('.ui-slider-access').length == 0) {
                            $tp.find('.ui-slider:visible').sliderAccess(sliderAccessArgs);

                            // fix any grids since sliders are shorter
                            var sliderAccessWidth = $tp.find('.ui-slider-access:eq(0)').outerWidth(true);
                            if (sliderAccessWidth) {
                                $tp.find('table:visible').each(function() {
                                    var $g = $(this),
                                        oldWidth = $g.outerWidth(),
                                        oldMarginLeft = $g.css('marginLeft').toString().replace('%', ''),
                                        newWidth = oldWidth - sliderAccessWidth,
                                        newMarginLeft = ((oldMarginLeft * newWidth) / oldWidth) + '%';

                                    $g.css({
                                        width: newWidth,
                                        marginLeft: newMarginLeft
                                    });
                                });
                            }
                        }
                    }, 0);
                }
                // end slideAccess integration

            }
        },

        //########################################################################
        // This function tries to limit the ability to go outside the
        // min/max date range
        //########################################################################
        _limitMinMaxDateTime: function(dp_inst, adjustSliders) {
            var o = this._defaults,
                dp_date = new Date(dp_inst.selectedYear, dp_inst.selectedMonth, dp_inst.selectedDay);

            if (!this._defaults.showTimepicker) return; // No time so nothing to check here

            if ($.datepicker._get(dp_inst, 'minDateTime') !== null && $.datepicker._get(dp_inst, 'minDateTime') !== undefined && dp_date) {
                var minDateTime = $.datepicker._get(dp_inst, 'minDateTime'),
                    minDateTimeDate = new Date(minDateTime.getFullYear(), minDateTime.getMonth(), minDateTime.getDate(), 0, 0, 0, 0);

                if (this.hourMinOriginal === null || this.minuteMinOriginal === null || this.secondMinOriginal === null || this.millisecMinOriginal === null) {
                    this.hourMinOriginal = o.hourMin;
                    this.minuteMinOriginal = o.minuteMin;
                    this.secondMinOriginal = o.secondMin;
                    this.millisecMinOriginal = o.millisecMin;
                }

                if (dp_inst.settings.timeOnly || minDateTimeDate.getTime() == dp_date.getTime()) {
                    this._defaults.hourMin = minDateTime.getHours();
                    if (this.hour <= this._defaults.hourMin) {
                        this.hour = this._defaults.hourMin;
                        this._defaults.minuteMin = minDateTime.getMinutes();
                        if (this.minute <= this._defaults.minuteMin) {
                            this.minute = this._defaults.minuteMin;
                            this._defaults.secondMin = minDateTime.getSeconds();
                        } else if (this.second <= this._defaults.secondMin) {
                            this.second = this._defaults.secondMin;
                            this._defaults.millisecMin = minDateTime.getMilliseconds();
                        } else {
                            if (this.millisec < this._defaults.millisecMin)
                                this.millisec = this._defaults.millisecMin;
                            this._defaults.millisecMin = this.millisecMinOriginal;
                        }
                    } else {
                        this._defaults.minuteMin = this.minuteMinOriginal;
                        this._defaults.secondMin = this.secondMinOriginal;
                        this._defaults.millisecMin = this.millisecMinOriginal;
                    }
                } else {
                    this._defaults.hourMin = this.hourMinOriginal;
                    this._defaults.minuteMin = this.minuteMinOriginal;
                    this._defaults.secondMin = this.secondMinOriginal;
                    this._defaults.millisecMin = this.millisecMinOriginal;
                }
            }

            if ($.datepicker._get(dp_inst, 'maxDateTime') !== null && $.datepicker._get(dp_inst, 'maxDateTime') !== undefined && dp_date) {
                var maxDateTime = $.datepicker._get(dp_inst, 'maxDateTime'),
                    maxDateTimeDate = new Date(maxDateTime.getFullYear(), maxDateTime.getMonth(), maxDateTime.getDate(), 0, 0, 0, 0);

                if (this.hourMaxOriginal === null || this.minuteMaxOriginal === null || this.secondMaxOriginal === null) {
                    this.hourMaxOriginal = o.hourMax;
                    this.minuteMaxOriginal = o.minuteMax;
                    this.secondMaxOriginal = o.secondMax;
                    this.millisecMaxOriginal = o.millisecMax;
                }

                if (dp_inst.settings.timeOnly || maxDateTimeDate.getTime() == dp_date.getTime()) {
                    this._defaults.hourMax = maxDateTime.getHours();
                    if (this.hour >= this._defaults.hourMax) {
                        this.hour = this._defaults.hourMax;
                        this._defaults.minuteMax = maxDateTime.getMinutes();
                        if (this.minute >= this._defaults.minuteMax) {
                            this.minute = this._defaults.minuteMax;
                            this._defaults.secondMax = maxDateTime.getSeconds();
                        } else if (this.second >= this._defaults.secondMax) {
                            this.second = this._defaults.secondMax;
                            this._defaults.millisecMax = maxDateTime.getMilliseconds();
                        } else {
                            if (this.millisec > this._defaults.millisecMax) this.millisec = this._defaults.millisecMax;
                            this._defaults.millisecMax = this.millisecMaxOriginal;
                        }
                    } else {
                        this._defaults.minuteMax = this.minuteMaxOriginal;
                        this._defaults.secondMax = this.secondMaxOriginal;
                        this._defaults.millisecMax = this.millisecMaxOriginal;
                    }
                } else {
                    this._defaults.hourMax = this.hourMaxOriginal;
                    this._defaults.minuteMax = this.minuteMaxOriginal;
                    this._defaults.secondMax = this.secondMaxOriginal;
                    this._defaults.millisecMax = this.millisecMaxOriginal;
                }
            }

            if (adjustSliders !== undefined && adjustSliders === true) {
                var hourMax = parseInt((this._defaults.hourMax - ((this._defaults.hourMax - this._defaults.hourMin) % this._defaults.stepHour)), 10),
                    minMax = parseInt((this._defaults.minuteMax - ((this._defaults.minuteMax - this._defaults.minuteMin) % this._defaults.stepMinute)), 10),
                    secMax = parseInt((this._defaults.secondMax - ((this._defaults.secondMax - this._defaults.secondMin) % this._defaults.stepSecond)), 10),
                    millisecMax = parseInt((this._defaults.millisecMax - ((this._defaults.millisecMax - this._defaults.millisecMin) % this._defaults.stepMillisec)), 10);

                if (this.hour_slider)
                    this.hour_slider.slider("option", {
                        min: this._defaults.hourMin,
                        max: hourMax
                    }).slider('value', this.hour);
                if (this.minute_slider)
                    this.minute_slider.slider("option", {
                        min: this._defaults.minuteMin,
                        max: minMax
                    }).slider('value', this.minute);
                if (this.second_slider)
                    this.second_slider.slider("option", {
                        min: this._defaults.secondMin,
                        max: secMax
                    }).slider('value', this.second);
                if (this.millisec_slider)
                    this.millisec_slider.slider("option", {
                        min: this._defaults.millisecMin,
                        max: millisecMax
                    }).slider('value', this.millisec);
            }

        },


        //########################################################################
        // when a slider moves, set the internal time...
        // on time change is also called when the time is updated in the text field
        //########################################################################
        _onTimeChange: function() {
            var hour = (this.hour_slider) ? this.hour_slider.slider('value') : false,
                minute = (this.minute_slider) ? this.minute_slider.slider('value') : false,
                second = (this.second_slider) ? this.second_slider.slider('value') : false,
                millisec = (this.millisec_slider) ? this.millisec_slider.slider('value') : false,
                timezone = (this.timezone_select) ? this.timezone_select.val() : false,
                o = this._defaults;

            if (typeof(hour) == 'object') hour = false;
            if (typeof(minute) == 'object') minute = false;
            if (typeof(second) == 'object') second = false;
            if (typeof(millisec) == 'object') millisec = false;
            if (typeof(timezone) == 'object') timezone = false;

            if (hour !== false) hour = parseInt(hour, 10);
            if (minute !== false) minute = parseInt(minute, 10);
            if (second !== false) second = parseInt(second, 10);
            if (millisec !== false) millisec = parseInt(millisec, 10);

            var ampm = o[hour < 12 ? 'amNames' : 'pmNames'][0];

            // If the update was done in the input field, the input field should not be updated.
            // If the update was done using the sliders, update the input field.
            var hasChanged = (hour != this.hour || minute != this.minute ||
                second != this.second || millisec != this.millisec ||
                (this.ampm.length > 0 &&
                    (hour < 12) != ($.inArray(this.ampm.toUpperCase(), this.amNames) !== -1)) ||
                timezone != this.timezone);

            if (hasChanged) {

                if (hour !== false) this.hour = hour;
                if (minute !== false) this.minute = minute;
                if (second !== false) this.second = second;
                if (millisec !== false) this.millisec = millisec;
                if (timezone !== false) this.timezone = timezone;

                if (!this.inst) this.inst = $.datepicker._getInst(this.$input[0]);

                this._limitMinMaxDateTime(this.inst, true);
            }
            if (o.ampm) this.ampm = ampm;

            //this._formatTime();
            this.formattedTime = $.datepicker.formatTime(this._defaults.timeFormat, this, this._defaults);
            if (this.$timeObj) this.$timeObj.text(this.formattedTime + o.timeSuffix);
            this.timeDefined = true;
            if (hasChanged) this._updateDateTime();
        },

        //########################################################################
        // call custom onSelect. 
        // bind to sliders slidestop, and grid click.
        //########################################################################
        _onSelectHandler: function() {
            var onSelect = this._defaults.onSelect;
            var inputEl = this.$input ? this.$input[0] : null;
            if (onSelect && inputEl) {
                onSelect.apply(inputEl, [this.formattedDateTime, this]);
            }
        },

        //########################################################################
        // left for any backwards compatibility
        //########################################################################
        _formatTime: function(time, format) {
            time = time || {
                hour: this.hour,
                minute: this.minute,
                second: this.second,
                millisec: this.millisec,
                ampm: this.ampm,
                timezone: this.timezone
            };
            var tmptime = (format || this._defaults.timeFormat).toString();

            tmptime = $.datepicker.formatTime(tmptime, time, this._defaults);

            if (arguments.length) return tmptime;
            else this.formattedTime = tmptime;
        },

        //########################################################################
        // update our input with the new date time..
        //########################################################################
        _updateDateTime: function(dp_inst) {
            dp_inst = this.inst || dp_inst;
            var dt = $.datepicker._daylightSavingAdjust(new Date(dp_inst.selectedYear, dp_inst.selectedMonth, dp_inst.selectedDay)),
                dateFmt = $.datepicker._get(dp_inst, 'dateFormat'),
                formatCfg = $.datepicker._getFormatConfig(dp_inst),
                timeAvailable = dt !== null && this.timeDefined;
            this.formattedDate = $.datepicker.formatDate(dateFmt, (dt === null ? new Date() : dt), formatCfg);
            var formattedDateTime = this.formattedDate;
            if (dp_inst.lastVal !== undefined && (dp_inst.lastVal.length > 0 && this.$input.val().length === 0))
                return;

            if (this._defaults.timeOnly === true) {
                formattedDateTime = this.formattedTime;
            } else if (this._defaults.timeOnly !== true && (this._defaults.alwaysSetTime || timeAvailable)) {
                formattedDateTime += this._defaults.separator + this.formattedTime + this._defaults.timeSuffix;
            }

            this.formattedDateTime = formattedDateTime;

            if (!this._defaults.showTimepicker) {
                this.$input.val(this.formattedDate);
            } else if (this.$altInput && this._defaults.altFieldTimeOnly === true) {
                this.$altInput.val(this.formattedTime);
                this.$input.val(this.formattedDate);
            } else if (this.$altInput) {
                this.$altInput.val(formattedDateTime);
                this.$input.val(formattedDateTime);
            } else {
                this.$input.val(formattedDateTime);
            }

            this.$input.trigger("change");
        }

    });

    $.fn.extend({
        //########################################################################
        // shorthand just to use timepicker..
        //########################################################################
        timepicker: function(o) {
            o = o || {};
            var tmp_args = arguments;

            if (typeof o == 'object') tmp_args[0] = $.extend(o, {
                timeOnly: true
            });

            return $(this).each(function() {
                $.fn.datetimepicker.apply($(this), tmp_args);
            });
        },

        //########################################################################
        // extend timepicker to datepicker
        //########################################################################
        datetimepicker: function(o) {
            o = o || {};
            var $input = this,
                tmp_args = arguments;

            if (typeof(o) == 'string') {
                if (o == 'getDate')
                    return $.fn.datepicker.apply($(this[0]), tmp_args);
                else
                    return this.each(function() {
                        var $t = $(this);
                        $t.datepicker.apply($t, tmp_args);
                    });
            } else
                return this.each(function() {
                    var $t = $(this);
                    $t.datepicker($.timepicker._newInst($t, o)._defaults);
                });
        }
    });

    //########################################################################
    // format the time all pretty... 
    // format = string format of the time
    // time = a {}, not a Date() for timezones
    // options = essentially the regional[].. amNames, pmNames, ampm
    //########################################################################
    $.datepicker.formatTime = function(format, time, options) {
        options = options || {};
        options = $.extend($.timepicker._defaults, options);
        time = $.extend({
            hour: 0,
            minute: 0,
            second: 0,
            millisec: 0,
            timezone: '+0000'
        }, time);

        var tmptime = format;
        var ampmName = options['amNames'][0];

        var hour = parseInt(time.hour, 10);
        if (options.ampm) {
            if (hour > 11) {
                ampmName = options['pmNames'][0];
                if (hour > 12)
                    hour = hour % 12;
            }
            if (hour === 0)
                hour = 12;
        }
        tmptime = tmptime.replace(/(?:hh?|mm?|ss?|[tT]{1,2}|[lz])/g, function(match) {
            switch (match.toLowerCase()) {
                case 'hh':
                    return ('0' + hour).slice(-2);
                case 'h':
                    return hour;
                case 'mm':
                    return ('0' + time.minute).slice(-2);
                case 'm':
                    return time.minute;
                case 'ss':
                    return ('0' + time.second).slice(-2);
                case 's':
                    return time.second;
                case 'l':
                    return ('00' + time.millisec).slice(-3);
                case 'z':
                    return time.timezone;
                case 't':
                case 'tt':
                    if (options.ampm) {
                        if (match.length == 1)
                            ampmName = ampmName.charAt(0);
                        return match.charAt(0) == 'T' ? ampmName.toUpperCase() : ampmName.toLowerCase();
                    }
                    return '';
            }
        });

        tmptime = $.trim(tmptime);
        return tmptime;
    }

    //########################################################################
    // the bad hack :/ override datepicker so it doesnt close on select
    // inspired: http://stackoverflow.com/questions/1252512/jquery-datepicker-prevent-closing-picker-when-clicking-a-date/1762378#1762378
    //########################################################################
    $.datepicker._base_selectDate = $.datepicker._selectDate;
    $.datepicker._selectDate = function(id, dateStr) {
        var inst = this._getInst($(id)[0]),
            tp_inst = this._get(inst, 'timepicker');

        if (tp_inst) {
            tp_inst._limitMinMaxDateTime(inst, true);
            inst.inline = inst.stay_open = true;
            //This way the onSelect handler called from calendarpicker get the full dateTime
            this._base_selectDate(id, dateStr);
            inst.inline = inst.stay_open = false;
            this._notifyChange(inst);
            this._updateDatepicker(inst);
        } else this._base_selectDate(id, dateStr);
    };

    //#############################################################################################
    // second bad hack :/ override datepicker so it triggers an event when changing the input field
    // and does not redraw the datepicker on every selectDate event
    //#############################################################################################
    $.datepicker._base_updateDatepicker = $.datepicker._updateDatepicker;
    $.datepicker._updateDatepicker = function(inst) {

        // don't popup the datepicker if there is another instance already opened
        var input = inst.input[0];
        if ($.datepicker._curInst &&
            $.datepicker._curInst != inst &&
            $.datepicker._datepickerShowing &&
            $.datepicker._lastInput != input) {
            return;
        }

        if (typeof(inst.stay_open) !== 'boolean' || inst.stay_open === false) {

            this._base_updateDatepicker(inst);

            // Reload the time control when changing something in the input text field.
            var tp_inst = this._get(inst, 'timepicker');
            if (tp_inst) tp_inst._addTimePicker(inst);
        }
    };

    //#######################################################################################
    // third bad hack :/ override datepicker so it allows spaces and colon in the input field
    //#######################################################################################
    $.datepicker._base_doKeyPress = $.datepicker._doKeyPress;
    $.datepicker._doKeyPress = function(event) {
        var inst = $.datepicker._getInst(event.target),
            tp_inst = $.datepicker._get(inst, 'timepicker');

        if (tp_inst) {
            if ($.datepicker._get(inst, 'constrainInput')) {
                var ampm = tp_inst._defaults.ampm,
                    dateChars = $.datepicker._possibleChars($.datepicker._get(inst, 'dateFormat')),
                    datetimeChars = tp_inst._defaults.timeFormat.toString()
                    .replace(/[hms]/g, '')
                    .replace(/TT/g, ampm ? 'APM' : '')
                    .replace(/Tt/g, ampm ? 'AaPpMm' : '')
                    .replace(/tT/g, ampm ? 'AaPpMm' : '')
                    .replace(/T/g, ampm ? 'AP' : '')
                    .replace(/tt/g, ampm ? 'apm' : '')
                    .replace(/t/g, ampm ? 'ap' : '') +
                    " " +
                    tp_inst._defaults.separator +
                    tp_inst._defaults.timeSuffix +
                    (tp_inst._defaults.showTimezone ? tp_inst._defaults.timezoneList.join('') : '') +
                    (tp_inst._defaults.amNames.join('')) +
                    (tp_inst._defaults.pmNames.join('')) +
                    dateChars,
                    chr = String.fromCharCode(event.charCode === undefined ? event.keyCode : event.charCode);
                return event.ctrlKey || (chr < ' ' || !dateChars || datetimeChars.indexOf(chr) > -1);
            }
        }

        return $.datepicker._base_doKeyPress(event);
    };

    //#######################################################################################
    // Override key up event to sync manual input changes.
    //#######################################################################################
    $.datepicker._base_doKeyUp = $.datepicker._doKeyUp;
    $.datepicker._doKeyUp = function(event) {
        var inst = $.datepicker._getInst(event.target),
            tp_inst = $.datepicker._get(inst, 'timepicker');

        if (tp_inst) {
            if (tp_inst._defaults.timeOnly && (inst.input.val() != inst.lastVal)) {
                try {
                    $.datepicker._updateDatepicker(inst);
                } catch (err) {
                    $.datepicker.log(err);
                }
            }
        }

        return $.datepicker._base_doKeyUp(event);
    };

    //#######################################################################################
    // override "Today" button to also grab the time.
    //#######################################################################################
    $.datepicker._base_gotoToday = $.datepicker._gotoToday;
    $.datepicker._gotoToday = function(id) {
        var inst = this._getInst($(id)[0]),
            $dp = inst.dpDiv;
        this._base_gotoToday(id);
        var now = new Date();
        var tp_inst = this._get(inst, 'timepicker');
        if (tp_inst && tp_inst._defaults.showTimezone && tp_inst.timezone_select) {
            var tzoffset = now.getTimezoneOffset(); // If +0100, returns -60
            var tzsign = tzoffset > 0 ? '-' : '+';
            tzoffset = Math.abs(tzoffset);
            var tzmin = tzoffset % 60;
            tzoffset = tzsign + ('0' + (tzoffset - tzmin) / 60).slice(-2) + ('0' + tzmin).slice(-2);
            if (tp_inst._defaults.timezoneIso8609)
                tzoffset = tzoffset.substring(0, 3) + ':' + tzoffset.substring(3);
            tp_inst.timezone_select.val(tzoffset);
        }
        this._setTime(inst, now);
        $('.ui-datepicker-today', $dp).click();
    };

    //#######################################################################################
    // Disable & enable the Time in the datetimepicker
    //#######################################################################################
    $.datepicker._disableTimepickerDatepicker = function(target, date, withDate) {
        var inst = this._getInst(target),
            tp_inst = this._get(inst, 'timepicker');
        $(target).datepicker('getDate'); // Init selected[Year|Month|Day]
        if (tp_inst) {
            tp_inst._defaults.showTimepicker = false;
            tp_inst._updateDateTime(inst);
        }
    };

    $.datepicker._enableTimepickerDatepicker = function(target, date, withDate) {
        var inst = this._getInst(target),
            tp_inst = this._get(inst, 'timepicker');
        $(target).datepicker('getDate'); // Init selected[Year|Month|Day]
        if (tp_inst) {
            tp_inst._defaults.showTimepicker = true;
            tp_inst._addTimePicker(inst); // Could be disabled on page load
            tp_inst._updateDateTime(inst);
        }
    };

    //#######################################################################################
    // Create our own set time function
    //#######################################################################################
    $.datepicker._setTime = function(inst, date) {
        var tp_inst = this._get(inst, 'timepicker');
        if (tp_inst) {
            var defaults = tp_inst._defaults,
                // calling _setTime with no date sets time to defaults
                hour = date ? date.getHours() : defaults.hour,
                minute = date ? date.getMinutes() : defaults.minute,
                second = date ? date.getSeconds() : defaults.second,
                millisec = date ? date.getMilliseconds() : defaults.millisec;

            //check if within min/max times..
            if ((hour < defaults.hourMin || hour > defaults.hourMax) || (minute < defaults.minuteMin || minute > defaults.minuteMax) || (second < defaults.secondMin || second > defaults.secondMax) || (millisec < defaults.millisecMin || millisec > defaults.millisecMax)) {
                hour = defaults.hourMin;
                minute = defaults.minuteMin;
                second = defaults.secondMin;
                millisec = defaults.millisecMin;
            }

            tp_inst.hour = hour;
            tp_inst.minute = minute;
            tp_inst.second = second;
            tp_inst.millisec = millisec;

            if (tp_inst.hour_slider) tp_inst.hour_slider.slider('value', hour);
            if (tp_inst.minute_slider) tp_inst.minute_slider.slider('value', minute);
            if (tp_inst.second_slider) tp_inst.second_slider.slider('value', second);
            if (tp_inst.millisec_slider) tp_inst.millisec_slider.slider('value', millisec);

            tp_inst._onTimeChange();
            tp_inst._updateDateTime(inst);
        }
    };

    //#######################################################################################
    // Create new public method to set only time, callable as $().datepicker('setTime', date)
    //#######################################################################################
    $.datepicker._setTimeDatepicker = function(target, date, withDate) {
        var inst = this._getInst(target),
            tp_inst = this._get(inst, 'timepicker');

        if (tp_inst) {
            this._setDateFromField(inst);
            var tp_date;
            if (date) {
                if (typeof date == "string") {
                    tp_inst._parseTime(date, withDate);
                    tp_date = new Date();
                    tp_date.setHours(tp_inst.hour, tp_inst.minute, tp_inst.second, tp_inst.millisec);
                } else tp_date = new Date(date.getTime());
                if (tp_date.toString() == 'Invalid Date') tp_date = undefined;
                this._setTime(inst, tp_date);
            }
        }

    };

    //#######################################################################################
    // override setDate() to allow setting time too within Date object
    //#######################################################################################
    $.datepicker._base_setDateDatepicker = $.datepicker._setDateDatepicker;
    $.datepicker._setDateDatepicker = function(target, date) {
        var inst = this._getInst(target),
            tp_date = (date instanceof Date) ? new Date(date.getTime()) : date;

        this._updateDatepicker(inst);
        this._base_setDateDatepicker.apply(this, arguments);
        this._setTimeDatepicker(target, tp_date, true);
    };

    //#######################################################################################
    // override getDate() to allow getting time too within Date object
    //#######################################################################################
    $.datepicker._base_getDateDatepicker = $.datepicker._getDateDatepicker;
    $.datepicker._getDateDatepicker = function(target, noDefault) {
        var inst = this._getInst(target),
            tp_inst = this._get(inst, 'timepicker');

        if (tp_inst) {
            this._setDateFromField(inst, noDefault);
            var date = this._getDate(inst);
            if (date && tp_inst._parseTime($(target).val(), tp_inst.timeOnly)) date.setHours(tp_inst.hour, tp_inst.minute, tp_inst.second, tp_inst.millisec);
            return date;
        }
        return this._base_getDateDatepicker(target, noDefault);
    };

    //#######################################################################################
    // override parseDate() because UI 1.8.14 throws an error about "Extra characters"
    // An option in datapicker to ignore extra format characters would be nicer.
    //#######################################################################################
    $.datepicker._base_parseDate = $.datepicker.parseDate;
    $.datepicker.parseDate = function(format, value, settings) {
        var date;
        try {
            date = this._base_parseDate(format, value, settings);
        } catch (err) {
            if (err.indexOf(":") >= 0) {
                // Hack!  The error message ends with a colon, a space, and
                // the "extra" characters.  We rely on that instead of
                // attempting to perfectly reproduce the parsing algorithm.
                date = this._base_parseDate(format, value.substring(0, value.length - (err.length - err.indexOf(':') - 2)), settings);
            } else {
                // The underlying error was not related to the time
                throw err;
            }
        }
        return date;
    };

    //#######################################################################################
    // override formatDate to set date with time to the input
    //#######################################################################################
    $.datepicker._base_formatDate = $.datepicker._formatDate;
    $.datepicker._formatDate = function(inst, day, month, year) {
        var tp_inst = this._get(inst, 'timepicker');
        if (tp_inst) {
            if (day)
                var b = this._base_formatDate(inst, day, month, year);
            tp_inst._updateDateTime(inst);
            return tp_inst.$input.val();
        }
        return this._base_formatDate(inst);
    };

    //#######################################################################################
    // override options setter to add time to maxDate(Time) and minDate(Time). MaxDate
    //#######################################################################################
    $.datepicker._base_optionDatepicker = $.datepicker._optionDatepicker;
    $.datepicker._optionDatepicker = function(target, name, value) {
        var inst = this._getInst(target),
            tp_inst = this._get(inst, 'timepicker');
        if (tp_inst) {
            var min, max, onselect;
            if (typeof name == 'string') { // if min/max was set with the string
                if (name === 'minDate' || name === 'minDateTime')
                    min = value;
                else if (name === 'maxDate' || name === 'maxDateTime')
                    max = value;
                else if (name === 'onSelect')
                    onselect = value;
            } else if (typeof name == 'object') { //if min/max was set with the JSON
                if (name.minDate)
                    min = name.minDate;
                else if (name.minDateTime)
                    min = name.minDateTime;
                else if (name.maxDate)
                    max = name.maxDate;
                else if (name.maxDateTime)
                    max = name.maxDateTime;
            }
            if (min) { //if min was set
                if (min == 0)
                    min = new Date();
                else
                    min = new Date(min);

                tp_inst._defaults.minDate = min;
                tp_inst._defaults.minDateTime = min;
            } else if (max) { //if max was set
                if (max == 0)
                    max = new Date();
                else
                    max = new Date(max);
                tp_inst._defaults.maxDate = max;
                tp_inst._defaults.maxDateTime = max;
            } else if (onselect)
                tp_inst._defaults.onSelect = onselect;
        }
        if (value === undefined)
            return this._base_optionDatepicker(target, name);
        return this._base_optionDatepicker(target, name, value);
    };

    //#######################################################################################
    // jQuery extend now ignores nulls!
    //#######################################################################################
    function extendRemove(target, props) {
        $.extend(target, props);
        for (var name in props)
            if (props[name] === null || props[name] === undefined)
                target[name] = props[name];
        return target;
    };

    $.timepicker = new Timepicker(); // singleton instance
    $.timepicker.version = "0.9.9";

})(jQuery);