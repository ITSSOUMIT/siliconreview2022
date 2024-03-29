!(function (r) {
  "use strict";
  r(window).on("load", function () {
    r('[data-loader="circle-side"]').fadeOut(),
      r("#preloader").delay(350).fadeOut("slow"),
      r("body").delay(350).css({ overflow: "visible" });
  }),
    r("#wizard_container")
      .wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        beforeSelect: function (e, t) {
          if (0 != r("input#website").val().length) return !1;
          if (!t.isMovingForward) return !0;
          t = r(this).wizard("state").step.find(":input");
          return !t.length || !!t.valid();
        },
      })
      .validate({
        errorPlacement: function (e, t) {
          t.is(":radio") || t.is(":checkbox")
            ? e.insertBefore(t.next())
            : e.insertAfter(t);
        },
      }),
    r("#progressbar").progressbar(),
    r("#wizard_container").wizard({
      afterSelect: function (e, t) {
        r("#progressbar").progressbar("value", t.percentComplete),
          r("#location").text(
            "(" + t.stepsComplete + "/" + t.stepsPossible + ")"
          );
      },
    }),
    r("#wrapped").validate({
      ignore: [],
      rules: { select: { required: !0 } },
      errorPlacement: function (e, t) {
        t.is("select:hidden")
          ? e.insertAfter(t.next(".nice-select"))
          : e.insertAfter(t);
      },
    });
  var e = r("form#wrapped");
  e.on("submit", function () {
    e.validate(), e.valid() && r("#loader_form").fadeIn();
  }),
    r("#modal_h").magnificPopup({
      type: "inline",
      fixedContentPos: !0,
      fixedBgPos: !0,
      overflowY: "auto",
      closeBtnInside: !0,
      preloader: !1,
      midClick: !0,
      removalDelay: 300,
      closeMarkup:
        '<button title="%title%" type="button" class="mfp-close"></button>',
      mainClass: "my-mfp-zoom-in",
    });
})(window.jQuery);
