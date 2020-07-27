$( document ).ready( function(){

	const form = document.querySelector('form');
	const message = document.getElementById('message');
	const textmessage = message.textContent;
	const smallMessage = document.getElementById('smallMessage');
	const textMessage = 'Escribe a cerca de tu duda';
	const nameMessage = 'Escribe tu nombre';
	const emailMessage = 'Escribe tu correo';
	const subjectMessage = 'Escribe el asunto';
	const text = document.getElementById('text');
	const name = document.getElementById('name');
	const email = document.getElementById('email');
	const subject = document.getElementById('subject');
	const submitBtn = document.getElementById('submit');

	text.addEventListener("focusout",focusOut);
	name.addEventListener("focusout",focusOut);
	email.addEventListener("focusout",focusOut);
	subject.addEventListener("focusout",focusOut);

	function firstMessage(){
		message.innerHTML = textMessage;
		message.style.color="#fff";
		smallMessage.innerHTML = "";
	}
	function secondMessage(){
		message.innerHTML = nameMessage;
		message.style.color="#fff";
	}
	function thirdMessage(){
		message.innerHTML = emailMessage;
		message.style.color="#fff";
	}
	function fourthMessage(){
		message.innerHTML = subjectMessage;
		message.style.color="#fff";
	}
	function focusOut(){
		message.innerHTML = textmessage;
		message.style.color="#0b1c39";
	}

	function formValidation(){
		
		text.addEventListener("focus",firstMessage);
		
		name.addEventListener("focus",secondMessage);
		email.addEventListener("focus",thirdMessage);
		subject.addEventListener("focus",fourthMessage);
		
		submitBtn.addEventListener('mouseover', function(event){
			message.innerHTML="Estás a un solo click";
			smallMessage.innerHTML = "Vamos! No tengas miedo";
		});
	}

	formValidation();

	function sendEmail(){
		
		if(isNotEmpty(text) && isNotEmpty(name) && 
			isNotEmpty(email) && isNotEmpty(subject)){

			$.ajax({
				url: 'contact_process.php',
				method: 'POST',
				dataType: 'json',
				data:{
					text: text.val(), 
					name: name.val(),
					email: email.val(),
					subject: subject.val()
				}, success: function(response){
					form.reset();
					form.innerHTML = '<h1>Listo!</h1><p class="success-message">Trataremos de responderte lo más pronto posible</p>';
				}
			});

		}
	}

	function isNotEmpty(caller){
		if(caller.val()==""){
			return false;
		} else {
			return true;
		}
	}
	
});





