let muestra= document.querySelector('#muestra');
let nuemros = document.querySelectorAll('.numero');
let igual = document.querySelector('#igual');
let primerValor="";
let valores={
    'num1':'',
    'num2':'',
    'operador':''
};

igual.addEventListener('click',()=>{
    valores['num2']= primerValor;
    fetch(`process.php?num1=${valores['num1']}&num2=${valores['num2']}&operador=${valores['operador']}`,{
        method:'get',
        
    })
    .then(response=>response.text())
    .then(result=>{
        muestra.innerHTML = result;
    })
    .catch(error=>console.log(error));
})
nuemros.forEach(numero=>{
    numero.addEventListener('click',()=>{
        if(numero.dataset.valor>='0'&&numero.dataset.valor<='9'|| numero.dataset.valor == '.'){
            primerValor += numero.dataset.valor;
            muestra.innerHTML = primerValor;
        }else{
            valores['operador']=numero.dataset.valor;
            
            if(muestra.innerHTML!=''){
                
                if(valores['num1']==''){
                    valores['num1'] = primerValor;
                    primerValor = '';
                    muestra.innerHTML = primerValor;
                }
            }
        }
    })
})

let menu = [...document.querySelectorAll('.menu')];
let pi = document.querySelector('#pi');
let about = document.querySelector('#about');
let aledanios = document.querySelector('#aledanios');

menu.forEach(boton=>{
    boton.addEventListener('click',()=>{
        fetch(`aledanios.php?render=${boton.dataset.pag}`,
        {method: 'get'})
        .then(response=>response.text())
        .then(result=>{aledanios.innerHTML = result})
        .catch(error=>console.log(error));
    })
})


