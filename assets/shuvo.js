$(document).ready(function() {
    var vg = new vGallery({
        gallery: '#gallery',
        images: [
            'images/11.jpg',
            'images/22.jpg',
            'images/33.jpg',
            'images/44.jpg'
        ],
        indicators: {
            element: '#indicators',
            round: true, 
            opacity:0.5,
        },
        text: {
            element: '#text',
            items: [
                '<div class="text_header">WELCOME</div>Looking over cuty Jimmy<div class="text_small">February 2015</div>',
                '<div class="text_header">WELCOME</div>Looking over a cute baby at our hospital<div class="text_small">May 2015</div>',
                '<div class="text_header">WELCOME</div>We cured Jack<div class="text_small">July 2015</div>',
                '<div class="text_header">WELCOME</div>We cured Jenifer<div class="text_small">August 2015</div>'
            ],
        },
        loading: {
            image: 'images/loading.gif',
        },
    });
    vg.start();
});