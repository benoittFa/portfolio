function checkboxCategory(category){

    if(category==='oil'){

        document.getElementById('oil-category-container').classList.add('active');
        document.getElementById('oil-check').checked = true;

        document.getElementById('acrylique-category-container').classList.remove('active');
        document.getElementById('acrylique-check').checked = false;

    }else if(category==='acrylique'){
        document.getElementById('acrylique-category-container').classList.add('active');
        document.getElementById('acrylique-check').checked = true;

        document.getElementById('oil-category-container').classList.remove('active');
        document.getElementById('oil-check').checked = false;
    }

}

function checkboxMode(mode){

    if(mode==='portrait'){

        document.getElementById('portrait-category-container').classList.add('active');
        document.getElementById('portrait-check').checked = true;

        document.getElementById('paysage-category-container').classList.remove('active');
        document.getElementById('paysage-check').checked = false;

    }else if(mode==='paysage'){
        document.getElementById('paysage-category-container').classList.add('active');
        document.getElementById('paysage-check').checked = true;

        document.getElementById('portrait-category-container').classList.remove('active');
        document.getElementById('portrait-check').checked = false;
    }

}