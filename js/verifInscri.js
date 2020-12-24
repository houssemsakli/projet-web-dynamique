function Verifier()
{	
	var c='@';var i;
	ok=0;
	
	var email=document.getElementById("email").value;
	var mdp=document.getElementById("mdp").value;
	var mdp2=document.getElementById("mdp2").value;
	var nom=document.getElementById("nom").value;
	var prenom=document.getElementById("prenom").value;
	var gen=document.frm.genre;
	var add=document.getElementById("adr").value;
	
	if(email.length==0 || mdp.length==0||mdp2.length==0||nom.length==0||prenom.length==0||(gen[0].checked==false && gen[1].checked==false)||add.length==0)
		alert("remplir tous les champ SVP");
	else{
		if((email.indexOf(c)==-1)||(email.lastIndexOf(c)!=email.indexOf(c))||email.indexOf(c)>email.lastIndexOf('.')||mail.indexOf('.')==-1)
			alert("Verifier votre email");
		else
		{
			//alert("remplir tous les champcccccccc SVP");
		/*
			for(i=0;i<nom.length;i++)
				if(toUpperCase(nom[i])<'A'||toUpperCase(nom[i])>'Z')
					ok++;
			if(ok>0)*/
				
		}
			
	}
	
		
	

}
