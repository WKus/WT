window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-youngpeople7.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-environment-renewableenergy3.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-grants-education2.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-health5.jpg',
		<!-- 5 -->
		'slideshow/wtslideshows-poverty6.jpg',
		<!-- 6 -->
		'slideshow/wtslideshows-community6.jpg',
		
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'The Wisdom Trust offers all its members a range of special grants to help them make positive changes in their own lives, whatever their age or background. ',
        <!-- 2 -->
		'Wisdom Trust Eco Grants ',
        <!-- 3 -->
		'Wisdom Trust Education Grants ',
		<!-- 4 -->
		'Wisdom Trust Social Grants',
        <!-- 5 -->
		'Wisdom Trust Charity Grants ',
		<!-- 6 -->
		'Wisdom Trust Grants are available to every Wisdom Trust member, of all ages, anywhere in the world and grow in value every time you use the website.',
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Through our grants scheme, we aim to help people in four key areas:- to help protect their local environment; to enhance their education; to help them make healthier food choices or heat their home in Winter\; and to help them do more to support their favourite causes.  ',
        <!-- 2 -->
		'Wisdom Trust Eco Grants help people offset their costs of environmental projects that reduce their carbon footprint at home or in the office. ',
        <!-- 3 -->
		'Wisdom Trust Education Grants help people, especially young people, offset the ever-spiralling costs of higher education such as university course fees, books, stationery and even their living expenses while they\'re studying.',
		<!-- 4 -->
		'Wisdom Trust social grants help people (especially pensioners and those on low income) with special vouchers a) to offset the additional expense of healthier food choices (i.e. fresh fruit ad veg) and b) to heat their homes adequately in Winter. ',
        <!-- 5 -->
		'Wisdom Trust charity grants give members an additional opportunity to direct some extra funding to their own favourite charities or good causes.  ',
		<!-- 6 -->
		'Your grant fund grows in value every time you log in, vote for your cause, invite friends and family to join, like or share some Wisdom with them, answer a question or shop online.  You can check its value online and access your fund via a simple online form.',
	]
	
	<!-- generate random number to start slideshow from, size of image array = max length -->
	var FirstSlide = 0;
	<!-- load the element for the first cycle, empty otherwise --> 
    elem = document.getElementById("btmText");
    elem2 = document.getElementById("rightText");
    <!-- starting texts-->

    elem.innerHTML = btm_text[FirstSlide];
    elem2.innerHTML = rightTxt[FirstSlide];
	
    <!-- initial animation, are repeated in the setInterval function -->
    <!--  picture fade in -->
    $(function () {
        $('#pic').fadeOut(0).fadeIn( 1000 );
			pic.src = images[FirstSlide];
			images.current = FirstSlide;
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