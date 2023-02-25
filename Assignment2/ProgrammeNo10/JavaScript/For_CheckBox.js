function CheckNow(){
    
    var Add = document.getElementById('Add');
    var Sub = document.getElementById('Sub');
    var Mul = document.getElementById('Mul');

    var Num1 = parseInt(document.getElementById('No1').value);
    var Num2 = parseInt(document.getElementById('No2').value);
    var Ans;
                
    if(Add.checked == true){
        
        Ans = Num1+Num2; alert("Addition Is "+Ans);

    }else if(Sub.checked == true){

        Ans = Num1-Num2; alert("Subtraction Is "+Ans);

    }else if(Mul.checked == true){
        
        Ans = Num1*Num2; alert("Multiplication Is "+Ans);
    }
}