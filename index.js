//increment counter
const counters = document.querySelectorAll('.counter');

counters.forEach(counter =>{
    counter.innerText='0'
    const updateCounter=()=>{
    const target = +counter.getAttribute('data-target')
    const c = +counter.innerText

    if(c<target){
        counter.innerText=`${Math.ceil(c+1)}`;
        setTimeout(updateCounter,200)
    }
    else{
        counter.innerText=target+'+'
    }
    }
    updateCounter()
})
//
