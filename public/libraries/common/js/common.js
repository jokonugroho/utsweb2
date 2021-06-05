var i=0,Tulisan;
    Tulisan = "Testimonials"
  
    function typing() {
      if(i<Tulisan.length){
        document.getElementById("typing").innerHTML += Tulisan.charAt(i);
        i++;
        setTimeout(typing,80);
      }
    }
    typing();

const slides=document.querySelector(".slider").children;
   const indicatorImages=document.querySelector(".slider-indicator").children;

    for(let i=0; i<indicatorImages.length; i++){
    	indicatorImages[i].addEventListener("click",function(){
         
           for(let j=0; j<indicatorImages.length; j++){
             indicatorImages[j].classList.remove("active");
           }
            this.classList.add("active");
            const id=this.getAttribute("data-id");
           for(let j=0; j<slides.length; j++){
           	slides[j].classList.remove("active");
           }

            slides[id].classList.add("active");

    	})
    }