window.addEventListener('load', function() {
    $(document).ready(function(){

        $('.modal-close').on('click', function(){
            $('.main-modal').css('display', 'none')
            console.log('working')
        })
    });
})



