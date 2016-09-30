$(document).ready(function() { 
	function progress(percent, $element) 
	{
	    var progressBarWidth = percent * $element.width() / 100;
	    $element.find('div').animate({ width: progressBarWidth }, 4000);
					}
    $("#add").submit(function()
    {
	    var headline = $('#headline').val();
		var textComment = $('#textComment').val();
		console.log(headline, textComment);
			$.ajax(
			{
				type: 'POST',
				url: '/user/addComment',
				data:{headline:$('#headline').val(), textComment:$('#textComment').val()},
			  	success: function(data) 
			  	{
				  	$('#headline').hide();
				  	$('#textComment').hide();
				  	$('label').hide();
				  	$('#result').text("Your comment has been added. Redirect to the comments page after 5 sec!");
					$('#result1').text(headline);
					$('#result2').text(textComment);
					$('#submit').hide();
					$('#progressBar').toggle();
					$('#div').toggle();
					progress(100, $('#progressBar'));
					setTimeout(function () 
			    	{
			    		window.location.replace("/");
					}, 5000);
			  	},
			});		
		return false;  	    	
	})
});