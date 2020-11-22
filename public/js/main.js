(function() {
    let jsAddToBasketAllbtn = document.querySelectorAll('.jsAddToBasket');
    console.log(jsAddToBasketAllbtn);

    jsAddToBasketAllbtn.forEach(el => {
        el.addEventListener('click', async el => {
            let data = el.target.dataset.id;

            let data2 = {'id': 4}

            console.log(data2);

            let options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data2)
            }
            
            let response = await fetch('/basket', options).then( resp => {
                console.log(resp);
            })
            
            

            // $.post('/basket', function(resp){
            //     console.log(resp);
            // });
            
        })
    })

}());