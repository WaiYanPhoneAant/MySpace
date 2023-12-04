let fsIcon= document.getElementById('fsIcon');
    let fsContainer= document.getElementById('fsContainer');
    let fsClose=document.getElementById('fsClose');
    let fsInput=document.getElementById('fsInput');
    fsIcon.addEventListener('click',function(){
            fsIcon.classList.add('d-none');
            fsContainer.classList.remove('d-none');
            fsInput.focus();
    })
    fsClose.addEventListener('click',function(){
            fsIcon.classList.remove('d-none');
            fsContainer.classList.add('d-none');
            fsInput.value='';
    })




    let startingX = 0;
    let isDragging = false;

    const scrollableDiv = document.querySelector('.tags');

    scrollableDiv.addEventListener('mousedown', (event) => {
        isDragging = true;
        startingX = event.clientX;
    });

    scrollableDiv.addEventListener('mousemove', (event) => {
        if (isDragging) {
            const deltaX = event.clientX - startingX;
            scrollableDiv.scrollLeft-=deltaX;
            startingX=event.clientX;

            console.log(event.clientX-startingX);
        }
    });

    scrollableDiv.addEventListener('mouseup', () => {
        isDragging = false;
    });
    scrollableDiv.addEventListener('mouseout',function(){
        isDragging=false;
    })

    scrollableDiv.addEventListener('touchstart', (event) => {
        startingX = event.touches[0].clientX;
    });

    scrollableDiv.addEventListener('touchmove', (event) => {
        if (event.changedTouches.length > 0) {
            const touch = event.changedTouches[0];
            const deltaX = touch.clientX - startingX;

            if (Math.abs(deltaX) > 50) {
                if (deltaX > 0) {
                    scrollableDiv.scrollLeft -= 10;
                } else {
                    scrollableDiv.scrollLeft += 10;
                }
            }
        }
    });
