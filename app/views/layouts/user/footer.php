<script>
    const mobile = document.querySelector(".mobile");
    const pc = document.querySelector(".pc");
    window.addEventListener("resize", function() {
        const screenWidth = window.innerWidth;
        if (screenWidth <= 576) {
            mobile.classList.remove("d-none")
            pc.classList.add("d-none");
        } else {
            pc.classList.remove("d-none")
            mobile.classList.add("d-none");
        }
    });
</script>
<script src="<?= URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
</script>
<script src="<?= URL; ?>/assets/owl-carousel/dist/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
</body>

</html>