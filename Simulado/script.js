var btn = document.querySelector('#id-sinopse');
var container = document.querySelector('.btn-sinopse');

function sinopse(){
    if(container.style.display === 'block'){
        container.style.display = 'none';
    }
    else{
        container.style.display = 'block';
    }
}
