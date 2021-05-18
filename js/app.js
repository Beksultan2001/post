const inpFile = document.querySelector('.my_image');
const labelfile = document.querySelector('.label');
const image = document.querySelector('.form_image');
const form = document.querySelector('.form');
const img = document.querySelector('.form_img');



inpFile.addEventListener('change',function(){
    const file = this.files[0];

    if(file){

        const reader = new FileReader();

        reader.addEventListener('load',function(){
            
    
            labelfile.style.display = 'none';
            img.classList.add('active');
            img.src = this.result;
    
        });


        reader.readAsDataURL(file);


    }else{

        labelfile.style.display = "block";
   
    }
})
