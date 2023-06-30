<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Coding</title>
    <?php include 'stylelinks.php' ?>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">

        <div class="row">

            <h1 class="mt-4 col-12 text-center Dynamic-text">
                Cources We Offer:
                <a href="" class="typewrite" data-period="2000" data-type='[ "C.", "C++.", "JAVA.", "HTML.","CSS.","JavaScript.","Python." ]'>
                    <span class="wrap"></span>
                </a>
            </h1>

        </div>
        <div class=" mt-4 row d-flex justify-content-center Main-title">
            <h1 class="col-10 text-center">Build  Your Logic Fast With Coder </h1>
        </div>
        <div class="row mt-5">
            <center>
                <div class="col-lg-6 mt-5">
                    <h3 class="theme-heading fs-1">
                        <i class="bi bi-emoji-heart-eyes"></i>
                        What is Coder
                        <i class="bi bi-question-diamond-fill"></i>
                    </h3>
                    <p class="fs-5" style="color:#adadad;">
                        Coder is a Site that Provides Cources about Coding i.e various coding languages Like C , C++ , Java.<br>
                    </p>

                </div>
            </center>
        </div>
    </div>


</body>
<?php include 'scriptlinks.php' ?>

<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

</html>