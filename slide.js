window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-poverty5.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-environment-water2.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-environment-rainforest1.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-schools7.jpg',
		<!-- 5 -->
		'slideshow/wtslideshows-environment-renewableenergy1.jpg',
		<!-- 6 -->
		'slideshow/wtslideshows-youngpeople4.jpg',
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'Who We are. <br /> The Wisdom Trust is a small UK based charity, run entirely by volunteers.     ',
        <!-- 2 -->
		'What we do. <br />Our vision is to build an organisation that helps people in many different ways - people of all ages, backgrounds and cultures in communities on every continent. ',
        <!-- 3 -->
		'Sharing Wisdom Around The World. Firstly, we aim to help deliver a wider awareness about the big global issues affecting the future of our planet and about all sorts of other important, interesting and educational topics too. ',
		<!-- 4 -->
		'Supporting Other Charities & Good Causes. Secondly, we set aside at least 70% of our income to support the work of other charities and good causes in communities all over the world.',
        <!-- 5 -->
		'Helping People Make A Difference In Their Own Lives. And finally, we offer our members a range of grants a) to help with environmental projects, b) to support their education and c) to encourage them to live a more healthy and secure lifestyle. ',
		<!-- 6 -->
		'Join Us Today And Help Us Make Positive Changes Around The World. Joining The Wisdom Trust is free and all you need is a valid email address. In just a few clicks you could be helping us make a difference all over the world.  Join us today. Thank you. ',
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Funding from The Wisdom Trust helps relieve to poverty and to feed hungry children in the UK and in communities on every continent. ',
        <!-- 2 -->
		'Donations from our fund, voted for by our members, helps provide clean water in some of the world’s poorest regions.',
        <!-- 3 -->
		'Our donations help protect the world’s tropical rainforests, which provide 20% of the planet’s oxygen, so vital to our growing population.',
		<!-- 4 -->
		'Our members vote for their favourite charities and good causes to receive donations from our fund, some of which helps provide better education in communities all over the world. ',
        <!-- 5 -->
		'Wisdom Trust grants help people reduce their carbon footprint, help students offset the costs of higher education and support low-income families and the elderly with food or heating vouchers.  ',
		<!-- 6 -->
		'We aim to inspire young people to take on the responsibility for the changes needed to face the big global challenges in the future.  Wisdom Trust grants help empower young people all over the world. ',
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