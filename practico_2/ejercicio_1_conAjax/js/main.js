"use strict"
let form = document.querySelector('#formulario');
let tabla = document.querySelector('#muestraLaTabla');



form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const Fdata = new FormData(form);
    let url = Fdata.get('numero')+'/'+Fdata.get('maximo');
    let html;
    fetch(url,{method:'get'})

    .then(response =>response.text() )
     .then(result=>tabla.innerHTML=result)
        
})
// form.addEventListener('submit',mandar);
// async function mandar(event){

//     event.preventDefault()

//     const Fdata = new FormData(form);

//     let url = Fdata.get('numero')+'/'+Fdata.get('maximo');
//     let response = await fetch(url,{
//         method:'get'
//     });

//     let html = await response.text();

//     tabla.innerHTML=html;
// }