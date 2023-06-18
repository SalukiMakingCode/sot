const btnFiltre = document.querySelector('.btn-filter');
const filter= document.querySelector('.filter');
        
filter.classList.add('hidden');
btnFiltre.addEventListener('click',()=> filter.classList.toggle('hidden'));