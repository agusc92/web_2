const formulario =document.querySelector('#form');

formulario.addEventListener('submit',(e)=>{
    e.preventDefault();
    const fData = new FormData(formulario);
    console.log(fData)
    fetch('procesar.php',{
        method: 'post',
        body : fData,
    })
    .then(response =>response.text())
    .then(html=>{
        document.querySelector('#container').innerHTML = html;
    })
    .catch(error => console.log(error));
});

