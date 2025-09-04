<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="<?= base_url() ?>public/assets/js/index.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

<script src="<?= base_url() ?>public/assets/js/vendors.js"></script>
<script src="<?= base_url() ?>public/assets/js/main.js"></script>

<script src="<?= base_url() ?>public/assets/js/FlyBackground.js"></script>
<script src="<?= base_url() ?>public/assets/js/contact.js"></script>

<script>
    window.addEventListener("scroll", function () {
        let arrow = document.getElementById("scrollArrow");

        if (window.scrollY > 100) {
            arrow.classList.add("show");
        }
        else {
            arrow.classList.remove("show");
        }
    }
    )
</script>
<script>
    $(document).ready(function () {
        $(".Background").Background({
            birds: '20',
            size: '20',
            interval: '30',
            velocity: '3',
            color: 'rgb(255, 255, 255, 1)'
        });


        let year = new Date().getFullYear();
        $('#current-year').text(year);
    })



</script>
<script>

    $(window).mousemove(function (e) {
        $("#cursor").css({
            transform: `translate(${e.clientX}px, ${e.clientY}px)`
        });
    });

</script>


<!-- Enquiry Form -->
<script>
    $(".book-enquiry").click(function () {
        $(".contactForm").find("input,select,textarea").val("");
        $("#booknowModal").modal("show")
    })

</script>


<!-- Audio Play -->
<script>
    const audio = document.getElementById("bg-audio");
    document.addEventListener("click", () => {
        play10sLoop();
    }, { once: true });

    function play10sLoop() {

        audio.currentTime = 0;
        audio.play();

        setTimeout(() => {
            audio.pause();
            audio.currentTime = 0;
        }, 10000);

        // Schedule next play after 20 seconds (10s play + 10s pause)
        setTimeout(() => {
            play10sLoop();
        }, 20000);
    }
</script>

<script>
    $(window).on("load", function () {
        $("#loader").fadeOut(500, function () {
            $(".content").fadeIn(500);
        });
    })
</script>