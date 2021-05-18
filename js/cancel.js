const cancel = document.querySelector('.cancel');


cancel.addEventListener('click', () =>{

    console.log('hello');
    document.cookie = "user= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"

	location.reload();



})