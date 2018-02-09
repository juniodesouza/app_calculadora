$(function(){
	
	$('#visor').focus().val('');
	$('#visor').data('lastChar', 0);
	
	$('body').on("click", function(){
		$('#visor').focus();
	});
	
	
	$('#teclado button').on("click", function(){
		
		if ($('#visor').data("error")){
			$('#visor').data("error", false);
			$('#visor').focus().val("");
		}
		
		var key = $(this).attr('data-key');
		
		if (key==27){
			$('#visor').focus().val("");
			$('#visor').data('lastChar', 0);
			$('#visor').data("raiz", false);
			return;
		}
		
		if (key==00){
			$('#visor').data("raiz", true);
			if ($('#visor').val()!=""){
				$('#visor').focus();
				return false;
			}
		}
		
		// Realiza o calculo
		if (key==61){
			
			 $.ajax({
				type:"post",
				dataType:"json",
				data:{
					acao:"calcular",
					expressao:$('#visor').val()
				},
				success: function(data){
					if (data.status){
						$('#visor').val(data.result);
					}else{
						$('#visor').val("Expressão mal formatada");
						$('#visor').data("error", true);
					}
				},
				error:function(){
					$('#visor').val("Expressão mal formatada");
					$('#visor').data("error", true);
				}
			 });
			
			return;
		}
		
		if ($('#visor').val()==""){
			$('#visor').val($(this).text()).focus();
		}else{
			$('#visor').val($('#visor').val()+$(this).text()).focus();
		}
		
		$('#visor').data('lastChar', key);
		
		
	});
	
	$('#visor').on("keydown", function(event){
		
		if ($('#visor').data("error")){
			$('#visor').data("error", false);
			$('#visor').focus().val("");
		}
		
		if (event.which==13){
			$('button[data-key="61"]').trigger('click');
			return;
		}
		
		if (event.which==27){
			event.preventDefault();
			
			$('button[data-key="27"]').trigger('click');
			return;
		}
	});
	
	
});