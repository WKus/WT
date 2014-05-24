window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-schools2.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-live-inspire2.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-live-volunteer2.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-live-empower1.jpg',
		<!-- 5 -->
		'slideshow/wtslideshows-community13.jpg',
		
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'LEARN: - Increase your awareness about important global issues. ',
        <!-- 2 -->
		'INSPIRE: - Share your own wisdom with others. ',
        <!-- 3 -->
		'VOLUNTEER: - Help make a difference using your own skills, energy and enthusiasm. ',
		<!-- 4 -->
		'EMPOWER: - Spread the word and help others in your community to make a difference too.',
        <!-- 5 -->
		'LIVE with a bit more wisdom - and make a difference all over the world. ',
		]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Every day you can learn something new about the big global issues and all sorts of other stuff, take a quiz or even sit an exam for a certificate of achievement.  And every time you learn something or answer a question, you\'ll earn special credits to raise funds for your own favourite cause.  ',
        <!-- 2 -->
		'Why not share any information you know and all sort of other stuff you might learn - even simple eco tips or health tips - to help inspire others via our website.  And every time you share something or when others like or share your items, you\'ll earn even more credits for your own favourite cause.',
        <!-- 3 -->
		'The Wisdom Trust is run entirely by volunteers.  So whatever your own skills and experience we can always use more people.  From marketing and PR to events, fundraising, web design and media production - even online editors and contributors.  If you\'ve got time, we\'ve got a place for you.',
		<!-- 4 -->
		'Why not become a Wisdom Trust Ambassador and help us spread the word in your community so others can help us make an even bigger difference all around the world. ',
        <!-- 5 -->
		'LEARN - INSPIRE - VOLUNTEER - EMPOWER: - Join The Wisdom Trust team and help us support charities, good causes and community projects on every continent.  We\'ll also help you make positive changes in your own life with our special Wisdom Trust Grants. ',
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