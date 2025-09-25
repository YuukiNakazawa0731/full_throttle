//full_throtle.js

//===[ローディング]===//
$(function () {
  var load_edit = function () {
    if (sessionStorage.getItem("access")) {
      //2回目以降//
      $("#loading-containar").addClass("no-load");
      $("header").addClass("header-slidein");
      $("#title-container").addClass("titleback-fadein");
      $("#title-logo").addClass("title-fadein");
    } else {
      //初回アクセス//
      sessionStorage.setItem("access", "true");
      jQuery(function ($) {
        $("#loading-txt").typist({
          text: "Now Loading...",
          speed: 10,
        });
      });
      $("#center-line").addClass("line-through");
      $("#bike-icon").addClass("bike-through");
      setTimeout(function () {
        $(".cover-up").addClass("coveranime");
        $(".cover-down").addClass("coveranime");
      }, 2800);
      setTimeout(function () {
        $("#bike-icon").animate({ opacity: "0" }, 100);
        $("#loading-containar").addClass("no-load");
      }, 2900);
      setTimeout(function () {
        $("#loading-containar").fadeOut();
      }, 3100);
      //タイトル//
      setTimeout(function () {
        $("header").addClass("header-slidein");
        $("#title-container").addClass("titleback-fadein");
        $("#title-logo").addClass("title-fadein");
      }, 3200);
    }
  };
  load_edit();
});

//===[メインコンテンツ]===//
$(function () {
  //[infoモーダル]
  $("#info-btn").on("click", function () {
    $("#over-lay").fadeIn();
  });

  //[モーダルクローズ処理]
  $("#over-lay").on("click", function () {
    $("#over-lay").fadeOut();
  });

  //[メニュー アコーディオン(モバイル)]
  $("#menu-btn").off("click");
  $("#menu-btn").on("click", function () {
    $(this).next("#menu-list-mobile-outer").slideToggle(300);
    $(".menu-btn-line").toggleClass("active");
  });

  //[メニュークリックでクローズ(モバイル)]
  $(".menu-item-mobile").off("click");
  $(".menu-item-mobile").on("click", function () {
    $("#menu-list-mobile-outer").slideToggle(300);
    $(".menu-btn-line").removeClass("active");
  });
});

$(function () {
  //[メニュースクロ－ル]
  $('a[href^="#"]').click(function () {
    var adjust = 90;
    var speed = 400; // ミリ秒
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - adjust;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

$(function () {
  //[bike_anime]
  $("#return-top-icon").mouseover(function () {
    $("#return-bike-body").css("animation-duration", ".1s");
    $("#tire-f").css("animation-duration", ".2s");
    $("#tire-r").css("animation-duration", ".2s");
  });
  $("#return-top-icon").mouseout(function () {
    $("#return-bike-body").css("animation-duration", ".2s");
    $("#tire-f").css("animation-duration", "1.0s");
    $("#tire-r").css("animation-duration", "1.0s");
  });

  //[return_top_icon]
  function return_fadeIn() {
    $("#return-top-icon").each(function () {
      var from_position = $("#about-container").offset().top - 5;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll >= from_position - windowHeight) {
        $(this).addClass("return-fadein");
      } else {
        $(this).removeClass("return-fadein");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    return_fadeIn();
  });

  //[TOPページへ]
  $(function () {
    $("#return-top-icon").on("click", function () {
      const position = $("#title-container").offset().top;
      $("html,body").animate({ scrollTop: position }, 500);
      setTimeout(function () {
        $("#loading-container").fadeOut();
      }, 1000);
      $(this).toggleClass("return-fadeIn");
      $("#return-bike-body").addClass("bike-dash");
    });
  });

  //[付箋]
  function postit_fadeIn() {
    $(".postit-outer").each(function () {
      var from_position = $(this).offset().top - 5;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= from_position - windowHeight) {
        $(this).addClass("postit-fadein");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    postit_fadeIn();
  });

  //[スクロールでページ出現]
  function contents_fadeUp() {
    $(".contents-outer").each(function () {
      var from_position = $(this).offset().top - 15;
      var scroll = $(window).scrollTop();
      var window_height = $(window).height();

      if (scroll > from_position - window_height) {
        $(this).addClass("contents-fadeup");
        $(".contents-inner").addClass("contents-inner-fadeup");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    contents_fadeUp();
  });

  //[写真フェードイン(about)]
  function photofadeIn() {
    $("#about-contents").each(function () {
      var from_position = $(this).offset().top - 15;
      var scroll = $(window).scrollTop();
      var window_height = $(window).height();

      if (scroll > from_position - window_height) {
        $("#about-photo").addClass("photofadein");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    photofadeIn();
  });

  //[プロフィール]
  function plofilefadeIn() {
    $(".contents-inner").each(function () {
      var from_position = $(this).offset().top - 15;
      var scroll = $(window).scrollTop();
      var window_height = $(window).height();

      if (scroll > from_position - window_height) {
        $(".plofile-photo").addClass("photo-open");
        $(".arrow-img").addClass("arrowin");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    plofilefadeIn();
  });

  //[スキルコンテンツ]
  function skillfadeIn() {
    $("#skill-contents").each(function () {
      var from_position = $(this).offset().top - 15;
      var scroll = $(window).scrollTop();
      var window_height = $(window).height();

      if (scroll > from_position - window_height) {
        $("#skill-item-1").addClass("skill-fadein");
        $("#skill-item-2").addClass("skill-fadein");
        $("#skill-item-3").addClass("skill-fadein");
        $("#skill-item-4").addClass("skill-fadein");
        $("#skill-item-5").addClass("skill-fadein");
        $("#license-cont").addClass("ll-fadein");
      }
    });
  }
  //リロード/スクロールで呼び出し
  $(window).on("load scroll", function () {
    skillfadeIn();
  });
});

$(function () {
  //[制作物popup]
  $(".works-img").mouseover(function () {
    $(this).addClass("works-popup");
    $(this).removeClass("works-popdown");
  });
  $(".works-img").mouseout(function () {
    $(this).addClass("works-podown");
    $(this).removeClass("works-popup");
  });
});
