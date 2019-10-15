var testresults
  function checkemail()
  {                  
  var str=document.email2.email.value
  var filter=/^.+@.+..{2,3}$/
  if (filter.test(str))
  testresults=true
  else
  {
  alert("Por favor, preenche o seu endereço de E-mail correto")
  testresults=false
  email2.email.focus();
  return (testresults)
  }
  
var str2=document.email2.nome.value
  if (str2 == "")
  {
  alert("Por favor, preenche o campo do seu Nome")
  email2.nome.focus();
  return (false)  
  } 

var str2=document.email2.mensagem.value
  if (str2 == "")
  {
  alert("Por favor, digite alguma Mensagem")
  email2.mensagem.focus();
  return (false)  
} 
}