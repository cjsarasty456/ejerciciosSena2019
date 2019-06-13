function numeroMayor(){
    var num1=0,num2=0;
    var campoResult=document.getElementById('mayor');
    num1=document.getElementById('num1').value;
    num2=document.getElementById('num2').value;
    if(num1>=num2){
        campoResult.value=num1;
    }else{
        campoResult.value=num2;
    }
}

