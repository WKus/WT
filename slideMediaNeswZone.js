window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-medianewsevents-media1.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-medianewsevents-news1.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-medianewsevents-events1.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-community20.jpg',
		
    ]

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'Wisdom Trust\'s Media Projects: - Inspiring people online, all around the world. ',
        <!-- 2 -->
		'Wisdom Trust News\: - Keeping you up to date with the world of Wisdom and other global news. ',
        <!-- 3 -->
		'Wisdom Trust Events\: - Meetings, conferences, seminars, road shows, training, sport and music. ',
		<!-- 4 -->
		'Media - News - Events.  Helping The Wisdom Trust reach out and make a difference all over the world.',
        
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Wisdom Trust\'s media projects include Wisdom TV, Radio Wisdom , The Wisdom Times and our Words of Wisdom newsletters - all of which offer brilliant volunteering opportunities to our members. ',
        <!-- 2 -->
		'Wisdom Trust\'s news service keeps all our members and other website visitors up to date with everything that\'s happening in the world of Wisdom and about all other important issues affecting the future of our planet, especially with regard to poverty, environment and health. ',
        <!-- 3 -->
		'Wisdom Trust\'s events happen all year round and in all sorts of places.  From meetings, conferences and seminars through to road shows, training and sport or music events.  There\'s something to suit everyone.  Check out our website for news of upcoming events and reports of past events.',
		<!-- 4 -->
		'The Wisdom Trust is helping to make a real, positive difference to people\'s lives in communities on every continent.  With our media, news and events programmes, we can reach out and help even more people.  Get involved today and use your own skills to help us in our campaigns. ',
        
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