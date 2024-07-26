$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 4
            }
        }]
    });
});

document.querySelectorAll('.shareButton').forEach(button => {
    button.addEventListener('click', function() {
        shareWebsite();
    });
});

function shareWebsite() {
    const url = 'https://voilastudio.co.in';
    if (navigator.share) {
        navigator.share({
            title: 'Check out Voila Studio!',
            text: 'Visit Voila Studio for amazing services!',
            url: url
        }).then(() => {
            console.log('Thanks for sharing!');
        }).catch((error) => {
            console.error('Error sharing:', error);
        });
    } else {
     
        prompt('Copy this link to share:', url);
    }
}