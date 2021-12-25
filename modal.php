<!DOCTYPE html>
<html lang="en">

<style>

   .modal1, .modal2 {
    position: fixed;
    top:-500%; left: 0;
    z-index: 100000;
    min-height: 100vh;
    width:100%;
    background:rgba(0,0,0,.7);
   }

   .modal1.active, .modal2.active {
       top: 0;
   }
   
   .modal1 .popup, .modal2 .popup {
    padding: 5%;
    border-radius: 1%;
    background:#fff;
    box-sizing: content-box;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
   }

</style>

<body>
    
    <div class="modal1">
        <div class="popup">
        <div class="d-flex">
            <div class="flex-grow-1">Share Blog Link</div>
            <div><i class="fas fa-times" id="modal1-close"></i></div>
        </div>    
        <hr>
        <div class="body1"></div>
        <hr>
        <div class="d-flex">
            <div class="flex-grow-1"></div>
            <button onclick="copyurl1()" class="btn clipboard" style="background:radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);">Copy URL</button>
        </div>
        </div>
    </div>
    
    <div class="modal2">
        <div class="popup">
        <div class="d-flex">
            <div class="flex-grow-1">Share Blog Link</div>
            <div><i class="fas fa-times" id="modal2-close"></i></div>
        </div>    
        <hr>
        <div class="body2"></div>
        <hr>
        <div class="d-flex">
            <div class="flex-grow-1"></div>
            <button onclick="copyurl2()" class="btn clipboard" style="background:radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);">Copy URL</button>
        </div>
        </div>
    </div>  
    
    
    <script>

        let modal1 = document.querySelector('.modal1');
        let modal1Close = document.querySelector('#modal1-close');
        modal1Close.addEventListener('click', () => {
          modal1.classList.remove('active');
        });

        let modal2 = document.querySelector('.modal2');
        let modal2Close = document.querySelector('#modal2-close');
        modal2Close.addEventListener('click', () => {
          modal2.classList.remove('active');
        });

    </script>

</body>
</html>