var App = function(){
	return {
		init: function(){
			this.bindClickPlay();
			this.bindSubcribe();
		},

		getVid: function(){
			return document.getElementById('vid');
		},

		bindClickPlay: function(){
			$(".play-icon").click(function(){
				$("#vid")[0].play()
				$(".play-icon").hide();
			});

			$("#vid")[0].onended = function(){
				$(".play-icon").show();
			};
		},

		bindSubcribe: function(){
			$(".submit").click(function(){
				if(!App.isSubscribe)
				{
					var email = $("input").val();
					var rex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

					if(rex.test(email))
					{
						var data = {"email": email};
						$.post('db/addsubscribe.php', data, function(data){
							//console.log('addAccessLog, result:' + data.result);
							App.isSubscribe = true;
							$(".model").show();
							$("input").removeClass("inp");

							$(".close").click(function(){
								$(".model").hide();
							});
						}, "JSON");
					}else
					{
						if(!email)
						{
							$("input").attr("placeholder", "EMAIL ADDRESS");
						}
						else
						{
							$("input").addClass("inp");
						}

					}
				}
			});
		},

		isSubscribe : false,
	};
}();
App.init();