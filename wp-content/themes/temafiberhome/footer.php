<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready( () => {
            $('.products .carousel').carousel()
            $('.products .next').on('click', () => {
                $('.products .carousel').carousel('next')
            })
            $('.products .prev').on('click', () => {
                $('.products .carousel').carousel('prev')
            })

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                dots: false,
                navText: [''],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                    },
                    600:{
                        items:2,
                    },
                    1000:{
                        items:4,
                        nav:true,
                    }
                }
            })
            // $('.faq').carousel({
            //     fullWidth: true
            // })
            $('.sidenav').sidenav()
            $('.parallax').parallax()
            $('.collapsible').collapsible()

            //Modal
            const modalButtons = document.querySelectorAll('.modal-button')
            const modalOverlay = document.querySelector('.modal-video')

            for(let modalButton of modalButtons) {
                const id = modalButton.getAttribute('id')
                modalButton.addEventListener('click', (event) => {
                    modalOverlay.classList.add('active')
                    modalOverlay.querySelector('iframe').src = `https://www.youtube.com/embed/${id}`
                })
            }
            document.querySelector('.close').addEventListener('click', function() {
                modalOverlay.classList.remove('active')
                modalOverlay.querySelector('iframe').src = ''
            })

        });

        function gotoScroll() {
            var hash = window.location.hash.replace("#", "")
            if(hash) {
                $('body, html').animate({'scrollTop':$('.scroll-to-block[data-id="'+hash+'"]').offset().top - 63}, 500)
            }
        }gotoScroll()

        $('.scroll-to-link').on('click', function(){
            $('.sidenav').sidenav('close')
            var index = $(this).attr('href').substr(1)
            $('body, html').animate({'scrollTop':$('.scroll-to-block[data-id="'+index+'"]').offset().top -63}, 500)
            return false
        });


        let documentScroll
        const header = $('header')

        window.onscroll = () => {
            documentScroll = $(document).scrollTop()
            menushow()
        }

        // Anima Menu
        const menushow = () => {
            if( documentScroll > 163 ) {
                header.addClass('fixed')
            } else {
                header.removeClass('fixed')
            }
        }
        menushow()

        new RDStationForms('formulario-lp-fiberhome-2-5ed0e2219684ad2119b2', 'UA-32191804-1').createForm()
        new RDStationForms('formulario-lp-fiberhome-32ff90fa7bef39066f83', 'UA-32191804-1').createForm()



    </script>
    <?php wp_footer(); ?>
</body>

</html>