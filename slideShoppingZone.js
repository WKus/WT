window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-shopping-shopping1.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-shopping-compare1.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-shopping-specialoffers1.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-shopping-shopping2.jpg',
		
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'Shopping With Wisdom - over 2,000 popular shops and stores. ',
        <!-- 2 -->
		'Compare prices and save money ',
        <!-- 3 -->
		'Special offers and discount codes every day. ',
		<!-- 4 -->
		'Your friends\' and family\'s shopping can help too!',
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Every purchase you make via The Wisdom Trust shopping Mall raises funds for your own favourite cause and for hundreds of other great charities and good causes all over the world.  ',
        <!-- 2 -->
		'Use The Wisdom Trust\'s price comparison engines to check out the cheapest pricess for anything you want to buy - and save money every time.',
        <!-- 3 -->
		'The Wisdom Trust offers loads of special offers every day for our members and other visitors to out website, together with special discount codes so you can save money on your shopping - and still raise money for charity with every purchase.',
		<!-- 4 -->
		'Introduce your friends, family and colleagues to The Wisdom Trust and when they shop online or save money with our special offers, we\'ll allocate extra funds to your own chosen cause as well - for all their purchases - with our thanks for your help in spreading the word. ',
	]
	
	<!-- generate random number to start slideshow from, size of image array = max length -->
	var randomFirstSlide = Math.floor((Math.random()*images.length));
	<!-- load the element for the first cycle, empty otherwise --> 
    elem = document.getElementById("btmText");
    elem2 = document.getElementById("rightText");
    <!-- starting texts-->

    elem.innerHTML = btm_text[randomFirstSlide];
    elem2.innerHTML = rightTxt[randomFirstSlide];
	
    <!-- initial animation, are repeated in the setInterval function -->
    <!--  picture fade in -->
    $(function () {
        $('#pic').fadeOut(0).fadeIn( 1000 );
			pic.src = images[randomFirstSlide];
			images.current = randomFirstSlide;
    });
    
    <!--  bottom text animation, from left to right -->
    $(function () {
        $( "#btmText" ).fadeOut(0).delay( 2500 ).fadeIn( 500 );
    });
    <!--  right text animation, from up -->
    $(function () {
        $( "#rightText" ).fadeOut(0).delay( 3500 ).fadeIn( 800 );
    });
	images.current++;


    setInterval(function () {
	    elem.innerHTML = btm_text[images.current];
        elem2.innerHTML = rightTxt[images.current];
		
        pic.src = images[images.current++];
        if (images.current === images.length) images.current = 0;
        
        <!-- animate bottom left text every cycle -->
        $( "#btmText" ).fadeOut(0).delay( 2500 ).fadeIn( 500 );
        <!-- amimate right text every cycle -->
        $( "#rightText" ).fadeOut(0).delay( 3500 ).fadeIn( 800 );
		<!-- fade in picture every cycle -->
        $('#pic').fadeOut(0).fadeIn( 1000 );
		<!--  Interval -->
    }, 5000);

};