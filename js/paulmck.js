$(document).ready(function(){
	$('.dropdownLink').on('click', function(){
		$('#menutarget').removeClass('in').addClass('collapse');
		console.log("clicked yeah");
	})

	// screenAdapt();

	// function screenAdapt() {

	// 	var endOfProjectsOffset = $('.endOfProjects').offset().top;
	// 	var projectsOffset = $('.projects').offset().top;
	// 	var projectsHeight = endOfProjectsOffset - projectsOffset;

	// 	var contactOffset = $('.contact').offset().top;
	// 	var endOfContactOffset = $('.endOfContact').offset().top;
	// 	var contactHeight = endOfContactOffset - contactOffset;

	// 	var screenHeight = $(window).height();

	// 	console.log('projectsHeight is ' + projectsHeight + ' and screenHeight is ' + screenHeight);

	// 	if (screenHeight < projectsHeight){
	// 		$('#projects').css('height', projectsHeight);
			
	// 	}

	// 	if (screenHeight < contactHeight){
	// 		$('#contact').css('height', contactHeight);
	// 	}
	// };

	

	// window.onresize = screenAdapt;

	// function screenAdapt(){
	// 	var endOfProjectsOffset = $('.endOfAbout').offset().top;
	// 	var projectsOffset = $('.projects').offset().top;
	// 	var projectsHeight = endOfProjectsOffset - projectsOffset;

	// 	var contactOffset = $('.contact').offset().top;
	// 	var endOfContactOffset = $('.endOfContact').offset().top;
	// 	var contactHeight = endOfContactOffset - contactOffset;

	// 	var screenHeight = $(window).height();

	// 	if (screenHeight < projectsHeight){
	// 		$('#projects').css('height', projectsHeight);
	// 		console.log('projectsHeight is ' + projectsHeight + ' and screenHeight is ' + screenHeight);
	// 	}

	// 	if (screenHeight < contactHeight){
	// 		$('#contact').css('height', contactHeight);
	// 	}
	// }

	
	
	


})

