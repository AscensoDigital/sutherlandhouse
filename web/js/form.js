function validaText(txt,nombre,flag){txt.value=trim(txt.value);if(txt.value==""){if(flag!=1){alert("Debes ingresar tu "+nombre);txt.focus();}
return false;}
return true;}
function validaFile(txt,nombre,flag){if(txt.value==""){if(flag!=1){alert("Debes seleccionar tu "+nombre);txt.focus();}
return false;}
return true;}
function validaSelect(cmb,nombre,flag){var indice=cmb.selectedIndex;if(indice==0){if(flag!=1){alert("Debes seleccionar tu "+nombre);cmb.focus();}
return false;}
return true;}
function validaCheck(chk,nombre,flag){}
function validaRadio(opt,nombre,flag){}
function validaLength(txt,min,nombre)
{if(txt.value.length<min){alert("El "+nombre+" no es v�lido");txt.focus();return false;}
return true;}
function validaRut(strRut,strDv,nombre)
{rut_leido=strRut;d8=Math.floor(rut_leido/10000000);rut_leido=rut_leido-d8*10000000;d7=Math.floor(rut_leido/1000000);rut_leido=rut_leido-d7*1000000;d6=Math.floor(rut_leido/100000);rut_leido=rut_leido-d6*100000;d5=Math.floor(rut_leido/10000);rut_leido=rut_leido-d5*10000;d4=Math.floor(rut_leido/1000);rut_leido=rut_leido-d4*1000;d3=Math.floor(rut_leido/100);rut_leido=rut_leido-d3*100;d2=Math.floor(rut_leido/10);rut_leido=rut_leido-d2*10;d1=Math.floor(rut_leido/1);sum=d1*2+d2*3+d3*4+d4*5+d5*6+d6*7+d7*2+d8*3;modu=sum%11;dv_leido=11-modu;if(dv_leido==11)
dv_leido=0;if(dv_leido==10)
dv_leido='K';if(dv_leido!=strDv){alert("Debes ingresar un "+nombre+" y/o d�gito verificador adecuado.");return false;}
return true;}
function isText(txt,nombre)
{txt.value=txt.value.toUpperCase();for(i=0;i<txt.value.length;i++){if(isNaN(parseInt(txt.value.charAt(i)))){if(!((txt.value.charCodeAt(i)>=65&&txt.value.charCodeAt(i)<=90)||txt.value.charCodeAt(i)==193||txt.value.charCodeAt(i)==201||txt.value.charCodeAt(i)==205||txt.value.charCodeAt(i)==211||txt.value.charCodeAt(i)==218||txt.value.charCodeAt(i)==32||txt.value.charCodeAt(i)==209)){alert("El "+nombre+" no es valido");txt.focus();txt.select();return false;}}
else{alert("El "+nombre+" no es valido");txt.focus();txt.select();return false;}}
return true;}
function isNumber(txt,nombre,flag){var tmp;if(txt=="[object HTMLInputElement]"){tmp=txt.value;}
else{tmp=txt;}
for(i=0;i<tmp.length;i++){if(isNaN(parseInt(tmp.charAt(i)))){if(flag!=1){alert("El "+nombre+" no es un numero valido");txt.focus();txt.select();}
return false;}}
return true;}
function isDecimal(txt,nombre){var array=txt.value.match(/^(.+).(.+)$/);if(array==null){alert("el "+nombre+" no es un numero decimal valido");txt.focus();txt.select();return false;}
if(!isNumber(array[1].substring(1,1),"",1)){alert("el "+nombre+" no es un numero decimal valido");txt.focus();txt.select();return false;}
if(!isNumber(array[2],"",1)){alert("el "+nombre+" no es un numero decimal valido");txt.focus();txt.select();return false;}
return true;}
function isMail(txt){strMail=txt.value;var patMail=/^(.+)@(.+)$/;var patUser=/^[a-zA-Z\d_-]+(\.[a-zA-Z\d_-]+)*$/;var patDomainIP=/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/;var patDomain=/^[a-zA-Z\d_-]+(\.[a-zA-Z\d_-]+)+$/;var matchArray=strMail.match(patMail);if(matchArray==null)
{alert("e-mail no es válido");txt.focus();txt.select();return false;}
var user=new String(matchArray[1]);var domain=new String(matchArray[2]);if(user.match(patUser)==null)
{alert(" e-mail inválido");txt.focus();txt.select();return false;}
var IPArray=domain.match(patDomainIP);if(IPArray!=null)
{for(var i=1;i<=4;i++)
{if(IPArray[i]>255)
{alert("e-mail inválido");txt.focus();txt.select();return false;}}
return true;}
var domainArray=domain.match(patDomain);if(domainArray==null)
{alert("Dominio del e-mail inválido");txt.focus();txt.select();return false;}
if(domainArray[domainArray.length-1].length<3||domainArray[domainArray.length-1].length>4)
{alert("Extensión del dominio del  e-mail inválido");txt.focus();txt.select();return false;}
return true;}
function isRut(txtRut,txtDv,nombre){if(!validaText(txtRut,nombre))return false;if(!isNumber(txtRut,nombre))return false;if(!validaLength(txtRut,7,nombre))return false;if(!validaText(txtDv,"Dígito Verificador"))return false;if(txtDv.value=='k')txtDv.value='K';if(isNaN(txtDv.value))
if(txtDv.value!='K'){alert("Debes ingresar un dígito verificador adecuado.");txtDv.focus();txtDv.select();return false;}
if(!validaRut(txtRut.value,txtDv.value,nombre)){txtRut.focus();txtRut.select();return false;}
return true;}
function TrimLeft(str){var resultStr="";var i=len=0;if(str+""=="undefined"||str==null)
return null;str+="";if(str.length==0)
resultStr="";else{len=str.length;while((i<=len)&&(str.charAt(i)==" "))
i++;resultStr=str.substring(i,len);}
return resultStr;}
function TrimRight(str){var resultStr="";var i=0;if(str+""=="undefined"||str==null)
return null;str+="";if(str.length==0)
resultStr="";else{i=str.length-1;while((i>=0)&&(str.charAt(i)==" "))
i--;resultStr=str.substring(0,i+1);}
return resultStr;}
function trim(str){var resultStr="";resultStr=TrimLeft(str);resultStr=TrimRight(resultStr);return resultStr;}