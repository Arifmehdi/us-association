jQuery(function (t) {
    var s = [];
    s.push('<div class="cbx-switcher-area">'),
        s.push('<div class="cbx-switcher-inner">'),
        s.push(
            '<a id="cbx-switcher-btn" class="cbx-switcher-btn" href="#"><span class="fa fa-cog" aria-hidden="true"></span></a>'
        ),
        s.push(
            '<div id="cbx-switcher-body" class="cbx-switcher-body cbx-hide">'
        ),
        s.push('<p class="cbx-switcher-text" > Style Switcher</p>'),
        s.push('<ul class="list-unstyled clearfix cbx-switcher-list">'),
        t.each(
            [
                "default",
                "yellow",
                "red",
                "orange",
                "olive",
                "violet",
                "pink",
                "navy",
            ],
            function (c, e) {
                s.push(
                    '<li class="cbx-list-' +
                        e +
                        '"><a title="Color ' +
                        e +
                        '" href="#"  class="cbx-switcher-clr-btn" data-color-name="-' +
                        e +
                        '"></a></li>'
                );
            }
        ),
        s.push("</ul>"),
        s.push("</div></div></div>"),
        (t.fn.SwitcherLoader = function () {
            var c = t(this);
            c.html(s.join(""));
            var e = !0;
            c.find("#cbx-switcher-btn").on("click", function (c) {
                c.preventDefault(),
                    (e =
                        (e
                            ? t("#cbx-switcher-body").animate({ right: 0 }, 500)
                            : t("#cbx-switcher-body").animate(
                                  { right: -280 },
                                  500
                              ),
                        !e));
            }),
                t("a.cbx-switcher-clr-btn").on("click", function (c) {
                    c.preventDefault();
                    c = t(this);
                    t("#cbx-style").attr(
                        "href",
                        "assets/css/style" + c.data("color-name") + ".css?v=2"
                    );
                });
        });
}),
    jQuery(document).ready(function (c) {
        c(document.body).append('<div class="switcher-loader"></div>'),
            c(".switcher-loader").length &&
                c(".switcher-loader").SwitcherLoader();
    });
