
$('.button_login').click(function(){
    $('.content-login').toggleClass('s--signup');
});


$("#connection").on("click", function() {
	var login = $("#login-input").val();
	var password = $("#pass-input").val();
	if(login == "" || password == "") {
		alert("Tous les champs doivent êtres remplis");
	}else{
		$.ajax({
			url: "?rub=identification",
			type: "post",
            data: {
                identifiant: login,
                motdepasse: password
            },

			beforesend: function(){
				alert("loading");
			},
			success: function(data){
				console.log(data.includes('Logged'));
				if(data.includes('Logged')) location.href = '?rub=profil'
			},
			error:function(data){
				console.log(data);
			}   
		});
	}
	return false;
});

function hash(str){
	var hash = 0;
	if (str.length == 0) return hash;
	for (i = 0; i < str.length; i++) {
		char = str.charCodeAt(i);
		hash = ((hash<<5)-hash)+char;
		hash = hash & hash; // Convert to 32bit integer
	}
	return hash;
}