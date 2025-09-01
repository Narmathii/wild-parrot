<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="<?= base_url() ?>public/assets/js/index.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

<script src="<?= base_url() ?>public/assets/js/vendors.js"></script>
<script src="<?= base_url() ?>public/assets/js/main.js"></script>

<script src="<?= base_url() ?>public/assets/js/FlyBackground.js"></script>
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
    })
</script>