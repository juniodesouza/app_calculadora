$(function(){
	
	$('#usu_nome, #usu_login, #usu_senha, #usu_senha_2').blur(function(){
		if ($(this).val().trim()==""){
			$(this).closest('div.form-group').addClass('has-error');
		}else{
			$(this).closest('div.form-group').removeClass('has-error');
		}			
	});
	
	$('#btnCancelar').click(function(){
		$('#usu_nome, #usu_login, #usu_senha, #usu_senha_2').each(function(idx, elm){
			$(elm).closest('div.form-group').removeClass('has-error');	
			$(elm).val("");
		});
	});
	
	$('#btnNovoUsuario').click(function(){
		$('#usu_nome, #usu_login, #usu_senha, #usu_senha_2').each(function(idx, elm){
			if ($(elm).val().trim()==""){
				$(elm).closest('div.form-group').addClass('has-error');
			}else{
				$(elm).closest('div.form-group').removeClass('has-error');
			}			
		});
		
		if ($('div.form-group.has-error').length==0){
			 $.ajax({
				type:"post",
				dataType:"json",
				data:{
					acao:"cadastrar",
					usu_nome:$('#usu_nome').val(),
					usu_login:$('#usu_login').val(),
					usu_senha:$('#usu_senha').val(),
					usu_senha_2:$('#usu_senha_2').val()
				},
				success: function(data){
					if (data.status){
						window.location.reload();
					}else{
						alert(data.message);
					}
				}
			 });
		}
		
	});
	
	$('a.delete').click(function(e){
		e.preventDefault();
		
		if (confirm("Deseja realmente excluir?")){
			$.ajax({
				type:"post",
				dataType:"json",
				data:{
					acao:"excluir",
					usu_id:$(this).attr('href')
				},
				success: function(data){
					if (data.status){
						window.location.reload();
					}else{
						alert(data.message);
					}
				}
			 });
		}
		
	});	
});