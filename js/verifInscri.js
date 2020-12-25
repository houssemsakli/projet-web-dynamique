function verifNomPrenom(ch)
{
	var i=0;
	var ok=0;
	while(i<ch.length)
	{
		if(ch[i].toUpperCase()<'A'||ch[i].toUpperCase()>'Z')
			return false ; 
		i++;
	};
	return true;
}
function increaseHeight()
{
	x = parseInt(document.getElementById("bigbox").style.height)+50;
	document.getElementById("bigbox").style.height = x.toString()+"px";
	x = parseInt(document.getElementById("hei").style.height)+50;
	document.getElementById("hei").style.height = x.toString()+"px";
}
function decreaseHeight()
{
	x = parseInt(document.getElementById("bigbox").style.height)-50;
	document.getElementById("bigbox").style.height = x.toString()+"px";
	x = parseInt(document.getElementById("hei").style.height)-50;
	document.getElementById("hei").style.height = x.toString()+"px";
}

function VerifNom()
{
	var nom=document.getElementById("nom").value;
	if((!verifNomPrenom(nom)||nom.length==0)&&(document.getElementById("ernom").classList.contains("d-none")==true))
	{
		increaseHeight();
		document.getElementById("ernom").classList.remove('d-none');
		
	}else if((verifNomPrenom(nom)&&nom.length>0)&&(document.getElementById("ernom").classList.contains("d-none")==false)){
		decreaseHeight();
		document.getElementById("ernom").classList.add('d-none');
	}
}
function VerifPren()
{
	var prenom=document.getElementById("prenom").value;
	if((!verifNomPrenom(prenom)||prenom.length==0)&&(document.getElementById("erpren").classList.contains("d-none")==true))
	{
		increaseHeight();
		document.getElementById("erpren").classList.remove('d-none');
	
	}else if((verifNomPrenom(prenom)&&prenom.length>0)&&(document.getElementById("erpren").classList.contains("d-none")==false)){
		decreaseHeight();
		document.getElementById("erpren").classList.add('d-none');
	}
}


function VerifMdp()
{
	var mdp=document.getElementById("mdp").value;
	var mdp2=document.getElementById("mdp2").value;
	if((mdp!=mdp2)&&(document.getElementById("ermdp").classList.contains("d-none")==true))
	{
		increaseHeight();
		document.getElementById("ermdp").classList.remove('d-none');
	}else if((mdp==mdp2)&&(document.getElementById("ermdp").classList.contains("d-none")==false))
	{
		decreaseHeight();
		document.getElementById("ermdp").classList.add('d-none');
	}
}


function disableSubmit()
{
	document.getElementById("sub").disabled = true ; 
	document.getElementById("sub").style.backgroundColor = "grey";
	document.getElementById("sub").style.border = "grey";
}
function enableSubmit()
{
	document.getElementById("sub").disabled = false ; 
	document.getElementById("sub").style.backgroundColor = "#BE3144";
	document.getElementById("sub").style.border = "#BE3144";
}

function Verifier()
{	
	var mdp=document.getElementById("mdp").value;
	var mdp2=document.getElementById("mdp2").value;
	var nom=document.getElementById("nom").value;
	var prenom=document.getElementById("prenom").value;
	var gen=document.frm.genre;

//verification nom et prenom 
	if(!verifNomPrenom(nom))
	{
		disableSubmit();
		return false;
	}
		
	if(!verifNomPrenom(prenom))
	{
		disableSubmit();
		return false;
	}	
//verif mdp
	if(mdp!=mdp2)
	{
		disableSubmit();
		return false;
	}
//verif radio 
	if(gen[0].checked==false&&gen[1].checked==false)
	{
		disableSubmit();
		return false;
	}
	enableSubmit();
}


