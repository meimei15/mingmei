
function insertAfter(e, t) {
    var n = t.parentNode;
    n.lastChild == t ? n.appendChild(e) : n.insertBefore(e, t.nextSibling)
}

(function() {
    function a(e, t) {
        this.el = e,
        this.currentIndex = 0,
        this._render(t),
        this.isRunning = !1,
        this.autoplayPause = !1,
        this._sliders = this._getSliders(),
        this.autoPlay && this.auto(this.direction),
        this.pagenation && this.outPagenation()
    }
    var e = NodeH.getElementsByClass,
    t = NodeH.g,
    n = NodeH.removeClass,
    r = NodeH.addClass,
    i = NodeH.getRect,
    s = DomU.getDocRect,
    o = DomU.rectIntersect,
    u = function(e) {
        return - ((e -= 1) * e * e * e - 1)
    };
    a.prototype.toNext = function(e) {
        if (this.isRunning && this.clickLock !== undefined) return ! 1;
        this.isRunning = !0;
        var t = this.switchItems,
        n = this.step;
        if (typeof e == "number") var r = e;
        else var r = (this.currentIndex + n + t.length) % t.length;
        if (this.loopDirection == "alwaysOne") for (var i = this.step - 1; i >= 0; i--) {
            var s = (r + i + t.length) % t.length;
            insertAfter(t[s], t[this.currentIndex])
        } else if (this.loopDirection == "single" && t[this.currentIndex].offsetLeft > t[r].offsetLeft) for (var i = 0; i < this.step; ++i) {
            var s = (r + i + t.length) % t.length;
            t[this.currentIndex].parentNode.appendChild(t[s])
        }
        this.switchTo(r)
    },
    a.prototype.toPrevious = function(e) {
        if (this.isRunning && this.clickLock !== undefined) return ! 1;
        this.isRunning = !0;
        var t = this.switchItems,
        n = -1 * this.step;
        if (typeof e == "number") var r = e;
        else var r = (this.currentIndex + n + t.length) % t.length;
        if (this.loopDirection == "alwaysOne") for (var i = 0; i < this.step; ++i) {
            var s = (r + this.step - 1 - i + t.length) % t.length;
            t[this.currentIndex].parentNode.insertBefore(t[s], t[this.currentIndex])
        } else if (this.loopDirection == "single" && t[this.currentIndex].offsetLeft < t[r].offsetLeft) for (var i = 0; i < this.step; ++i) {
            var s = (r + this.step - 1 - i + t.length) % t.length;
            t[this.currentIndex].parentNode.insertBefore(t[s], t[this.currentIndex].parentNode.firstChild)
        }
        this.switchTo(r)
    },
    a.prototype._textareaPreload = function() {
        var t = this.currentIndex,
        n = this.relatedIndex,
        r = e(this.el, this.nodesClassName);
        for (var i = t; i < n + this.step + this.lazyPre; ++i) if (typeof r[i] != "undefined") {
            var s = r[i].firstChild;
            while (s.nodeType != 1) s = s.nextSibling;
            s.tagName == "TEXTAREA" && (r[i].innerHTML = s.value)
        }
    },
    a.prototype._imagePreload = function() {
        var e = this.currentIndex,
        t = this.relatedIndex,
        n = this.switchItems;
        for (var r = e; r < t + this.step + this.lazyPre; ++r) if (typeof n[r] != "undefined") {
            var i = W(n[r]).query("img[lazysrc]");
            i.attr("src", i.attr("lazysrc")).removeAttr("lazysrc")
        }
    },
    a.prototype._switchTo = function(e) {
        e > this.currentIndex ? this.toNext(e) : this.toPrevious(e)
    },
    a.prototype.switchTo = function(e, t) {
        this.relatedIndex = e;
        switch (this.lazyLoadType) {
        case "textarea":
            this._textareaPreload();
            break;
        case "image":
            this._imagePreload();
            break;
        case "none":
        default:
        }
        if (this.onbeforeswitch && this.onbeforeswitch() === !1) return ! 1;
        this._doAnimation(this.currentIndex, this.relatedIndex),
        this.currentIndex = this.relatedIndex,
        this.pagenation && W(this.pageContainer).query(this.pagenationTag).filter(":nth-child(" + (this.currentIndex + 1) + ")").addClass(this.currentPageCss).siblings().removeClass(this.currentPageCss),
        this.onafterswitch && this.onafterswitch()
    },
    a.prototype.outPagenation = function() {
        var e = this.pageContainer.getElementsByTagName(this.pagenationTag),
        t = Math.floor(this.currentIndex / this.step),
        n = this;
        for (var r = 0; r < e.length; ++r)(function(t) {
            e[t].onclick = function() {
                W(this).addClass(n.currentPageCss).siblings().removeClass(n.currentPageCss),
                n._switchTo(t * n.step, !0)
            }
        })(r)
    },
    a.prototype.auto = function(e) {
        switch (e) {
        case "left":
        case "down":
            dir = 1;
            break;
        case "right":
        case "up":
            dir = -1
        }
        var t = this;
        clearTimeout(t.playIntervalHandler),
        t.playIntervalHandler = setTimeout(function() {
            t.autoplayPause == 0 && t._isInVisualField() && t.toNext(),
            t.auto(e)
        },
        this.playInterval)
    },
    a.prototype.switchAutoPlay = function(e) {
        this.autoplayPause = !e,
        clearTimeout(self.playIntervalHandler),
        e && this.auto(this.direction)
    },
    a.prototype._isInVisualField = function() {
        var e = i(this.el),
        t = s(),
        n = {
            left: t.scrollX,
            right: t.width + t.scrollX,
            top: t.scrollY,
            bottom: t.height + t.scrollY
        };
        return !! o(e, n)
    },
    a.prototype._doAnimation = function(e, t) {
        var n = this.switchItems[e].offsetLeft,
        r = this.switchItems[t].offsetLeft - this.initOffset,
        i = (r | 0) - (n | 0),
        s = this.doTimes,
        o = this.totalTime,
        u = Math.ceil(o / s),
        a = new Date;
        try {
            window.clearInterval(this.animateHandler)
        } catch(f) {}
        var l = this;
        l._scrollAnim(n, r, a, o),
        this.animateHandler = window.setInterval(function() {
            l._scrollAnim(n, r, a, o)
        },
        u)
    },
    a.prototype._scrollAnim = function(e, t, n, r) {
        var i = new Date,
        s = (i.getTime() - n.getTime()) / r;
        s >= 1 && (s = 1, window.clearInterval(this.animateHandler), this.isRunning = !1);
        var o = e + u(s) * (t - e);
        this.container.scrollLeft = o
    },
    a.prototype._render = function(e) {
        this.direction = e.direction || "left",
        this.autoPlay = e.autoPlay | 0,
        this.step = e.step || 1,
        this.onbeforeswitch = e.onbeforeswitch,
        this.onafterswitch = e.onafterswitch,
        this.playInterval = e.playInterval || 2e3,
        this.pagenation = e.pagenation && 1,
        this.pageContainer = e.pageContainer || "",
        this.container = e.container || "",
        this.loopDirection = e.loopDirection || "alternate",
        this.currentPageCss = e.currentPageCss || "selected",
        this.nodesClassName = e.nodesClassName || "switch-content-item",
        this.doTimes = e.doTimes || 36,
        this.totalTime = e.totalTime || 2e3,
        this.lazyLoadType = e.lazyLoadType || "none",
        this.lazyPre = e.lazyPre || 0,
        this.pagenationTag = e.pagenationTag || "LI",
        this.switchItems = this._getSliders(),
        this.initOffset = this.switchItems[0].offsetLeft,
        this.container.scrollLeft = 0
    },
    a.prototype._getSliders = function() {
        return e(this.el, this.nodesClassName)
    },
    window.ElSlide = a
})();


Dom.ready(function() {
    var e;
    /MSIE (\d+\.\d+);/.test(navigator.userAgent) && (e = new Number(RegExp.$1));
    var t = new ElSlide(g("slideWrapper"), {
        container: g("slideWrapper"),
        nodesClassName: "J-pic-node",
        autoPlay: !0,
        doTimes: 72,
        playInterval: 6e3,
        totalTime: 2e3,
        loopDirection: "alwaysOne",
        step: 1,
        lazyLoadType: "image",
        lazyPre: 1,
        onafterswitch: function() {
            var t = this.relatedIndex;
            e <= 7 ? W(".slide-hd .title a").css("display", "none").item(t).show() : W(".slide-hd .title a").fadeOut(200,
            function() {
                W(".slide-hd .title a").item(t).fadeIn()
            })
        },
        pagenation: 1,
        pageContainer: g("slidePagination"),
        currentPageCss: "selected",
        pagenationTag: "LI"
    });
    W("#slidePagination li,.slide-btn a").on("click",
    function(e) {
        t.switchAutoPlay(!1),
        t.switchAutoPlay(!0)
    }),
    W(".slide-btn .prev").on("click",
    function(e) {
        e.preventDefault(),
        t.toPrevious()
    }),
    W(".slide-btn .next").on("click",
    function(e) {
        e.preventDefault(),
        t.toNext()
    }),
    W(".scenic-recommand").delegate(".scenic-section-ft .month-more", "click",
    function(e) {
        e.preventDefault();
        var t = W(this);
        W(this).hasClass("toggled") ? W(this).parentNode("div").previousSibling("div").query(".month-more").slideUp(400,
        function() {
            t.query(".indicator").css("background-position", "0 1px"),
            t.removeClass("toggled")
        }) : W(this).parentNode("div").previousSibling("div").query(".month-more").slideDown(400,
        function() {
            t.query(".indicator").css("background-position", "0 -20px"),
            t.addClass("toggled")
        })
    }),
    W(".slide").on("mouseover",
    function(e) {
        W(".slide-btn a").addClass("selected")
    }),
    W(".slide").on("mouseout",
    function(e) {
        W(".slide-btn a").removeClass("selected")
    })
});