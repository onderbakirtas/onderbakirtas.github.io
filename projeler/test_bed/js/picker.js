$(document).ready(function() {
    
    var startOver = $(".startover");
    var steps = $(".casinoBullets");
    var width = $(".content").width();
    var mover = "-=" + width + "px";
    var back = "-" + width + "px";
    var mover2 = "-" + width * 2 + "px";
    var mover3 = "-" + width * 3 + "px";
    
    steps.hide();
    
    $(window).on("resize", function() {
        width = $(".content").width();
        var mover = "-=" + width + "px";
    });
    
    $(".game").on("click", function() {
        $(".game").removeClass("selected");
        $(this).addClass("selected");
        $(".wrap").animate({
            "left": mover
        });
        if (width < 400) {
            $(".content").animate({
                "height": "860px"
            }, 200);
        }
        steps.slideDown(300);
        $(".stepBullet:nth-child(2)").addClass("complete");
    });

    $(".dealer").on("click", function() {
        $(".dealer").removeClass("selected");
        $(this).addClass("selected");

        if ($(".online").hasClass("selected")) {
            $("#resultDealer").attr("src", "img/online.png");
        }
        if ($(".live").hasClass("selected")) {
            $("#resultDealer").attr("src", "img/live.png");
        }
        if ($(".nopref").hasClass("selected")) {
            $("#resultDealer").attr("src", "img/nopref.png");
        }

        $(".wrap").animate({
            "left": mover
        });
        $(".stepBullet:nth-child(3)").addClass("complete");
    });
    
    $(".payout").on("click", function() {
        $(".payout").removeClass("selected");
        $(this).addClass("selected");

        if ($(".13days").hasClass("selected")) {
            $("#resultPayout").html("1-3 Gün");
        }
        if ($(".25days").hasClass("selected")) {
            $("#resultPayout").html("2-5 Gün");
        }
        if ($(".1week").hasClass("selected")) {
            $("#resultPayout").html("1 Hafta");
        }

        $(".wrap").animate({
            "left": mover
        });
        $(".stepBullet:nth-child(4)").addClass("complete");
    });
    
    $(".device").on("click", function() {
        $(".device").removeClass("selected");
        $(this).addClass("selected");

        if ($(".desktop").hasClass("selected")) {
            $("#resultDevice").attr("src", "img/desktop.png");
        }
        if ($(".mobile").hasClass("selected")) {
            $("#resultDevice").attr("src", "img/mobile.png");
        }
        if ($(".tablet").hasClass("selected")) {
            $("#resultDevice").attr("src", "img/tablet.png");
        }

        $(".wrap").animate({
            "left": mover
        }).delay(2000).animate({
            "left": mover
        }, 300);
        $(".finderResult").addClass("complete");
    });
    $(".stepBullet[data-step=1]").on("click", function() {
        $(".stepBullet").removeClass("complete");
        $(".finderResult").removeClass("complete");
        $(".wrap").animate({
            "left": "0"
        }, 300);
        $(this).addClass("complete");
        $(".casinoBullets").slideUp(300);
    });
    $(".stepBullet[data-step=2]").on("click", function() {
        $(".stepBullet:nth-child(3)").removeClass("complete");
        $(".stepBullet:nth-child(4)").removeClass("complete");
        $(".finderResult").removeClass("complete");
        $(".wrap").animate({
            "left": back
        }, 300);
        $(this).addClass("complete");
    });
    $(".stepBullet[data-step=3]").on("click", function() {
        $(".stepBullet:nth-child(4)").removeClass("complete");
        $(".finderResult").removeClass("complete");
        $(".wrap").animate({
            "left": mover2
        }, 300);
        $(this).addClass("complete");
    });
    $(".stepBullet[data-step=4]").on("click", function() {
        $(".finderResult").removeClass("complete");
        $(".wrap").animate({
            "left": mover3
        }, 300);
        $(this).addClass("complete");
    });
    
    startOver.on("click", function() {
        $(".wrap").animate({
            "left": 0
        }, 300);
        $(".selected").removeClass("selected");
        $(".casinoBullets").slideUp();
        $(".stepBullet").removeClass("complete");
        $(".stepBullet").first().addClass("complete");
    })
});




      