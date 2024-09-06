// Main Program
// console.log("first");
let ham = document.getElementById("Ham");
let cross = document.getElementById("Cross");
let nav = document.getElementById("navbar");
let mainContent = document.getElementById("MainContent");
let hideService = document.getElementsByClassName("hideService");
let input = document.querySelectorAll(".input");
let success = document.querySelector("#success");
ham.addEventListener("click", function (event) {
    event.stopPropagation();

    if(nav.style.left!="0px"){
        nav.style.left = 0 + "px";
        document.addEventListener("click",function (){
            nav.style.left = -600 + "px";
        })
    }
    else{
        nav.style.left = -600 + "px";
    }
});
// cross.addEventListener("click", function () {
// })

// Srollbar animation
const Observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});
const HiddenElements = document.querySelectorAll(".HiddenElements");
HiddenElements.forEach((el) => Observer.observe(el));
const HiddenElements2 = document.querySelectorAll(".HiddenElements2");
HiddenElements2.forEach((el) => Observer.observe(el));
const FooterElement1 = document.querySelectorAll('.FSectionBox1');
FooterElement1.forEach((el) => Observer.observe(el));
const FooterElement2 = document.querySelectorAll('.FSectionBox2');
FooterElement2.forEach((el) => Observer.observe(el));
const FooterElement3 = document.querySelectorAll('.FSectionBox3');
FooterElement3.forEach((el) => Observer.observe(el));
const DetailBox1 = document.querySelectorAll(".DetailBox1");
DetailBox1.forEach((el) => Observer.observe(el));
let ServiceSection = document.getElementById("MainContent");
let ServiceButton = document.getElementById("Service");
let Service1 = document.getElementById("Service1");
let Service2 = document.getElementById("Service2");
let Service3 = document.getElementById("Service3");
let Service4 = document.getElementById("Service4");
let Service5 = document.getElementById("Service5");
let Service6 = document.getElementById("Service6");
let demo = document.getElementById("HomePageSection");
function ShowService() {
    Service1.classList.toggle("ServiceAnime1");
    Service2.classList.toggle("ServiceAnime2");
    Service3.classList.toggle("ServiceAnime3");
    Service4.classList.toggle("ServiceAnime4");
    Service5.classList.toggle("ServiceAnime5");
    Service6.classList.toggle("ServiceAnime6");
}

// Service href changer js start here 
let serviceLabel = document.querySelector("#serviceLabel");
let serviceButton = document.querySelector("#serviceButton");
function updateHref() {
    if (window.matchMedia("(max-width:883px)").matches) {
        serviceButton.href = "services.html";
        serviceLabel.setAttribute('for', 'none');
    }
    else {
        serviceLabel.setAttribute('for', 'Check')
        serviceButton.href = "#";
    }
}
window.addEventListener('resize', updateHref);
updateHref();
// Service href changer js end here 


// Slider js start here
let leftArrow = document.querySelector("#leftArrow");
let rightArrow = document.querySelector("#rightArrow");
let template = document.querySelector("#template");
let templateArr = ["img/Banners/s5.png",
    "img/Banners/s2.png",
    "img/Banners/s3.png",
    "img/Banners/s4.png",
    "img/Banners/s1.png",
    "img/Banners/s6.png",
    "img/Banners/s7.png",
    "img/Banners/s8.png",
    "img/Banners/s9.png"];
let i = 0;
leftArrow.addEventListener('click', () => {
    i--;
    if (i == -1) {
        i = templateArr.length - 1;
    }
    setTimeout(() => { }, 500);
    template.style.opacity = 0;
    template.style.transform = "translateX(-80px)";
    setTimeout(() => {
        template.style.transform = "translateX(0px)";
        template.src = templateArr[i]
        template.style.opacity = 1;
    }, 500);

});
rightArrow.addEventListener('click', () => {
    i++;
    if (i == templateArr.length) {
        i = 0;
    }
    setTimeout(() => { }, 500);
    template.style.opacity = 0;
    template.style.transform = "translateX(80px)";
    setTimeout(() => {
        template.style.transform = "translateX(0px)";
        template.src = templateArr[i]
        template.style.opacity = 1;
    }, 500);
});

function onSubmit() {
    if (input[0].value == '' || input[1].value == '' || input[2].value == '' || input[3].value == '' || input[4].value == '') {
        alert("All Fields Are Required");
        return false;
    }
    else{
    }
}
// Slider js end here


// Plan Section Starts here 



let detailBtn=document.querySelectorAll(".showDetails");
let plan=document.querySelectorAll(".plan");
let detail1=document.querySelectorAll(".li1");
let detail2=document.querySelectorAll(".li2");
let detail3=document.querySelectorAll(".li3");
let detail4=document.querySelectorAll(".li4");
let detail5=document.querySelectorAll(".li5");

// for(i=0;i<detailBtn.length;i++){
    // while(true){
        function showDetail1(){
            if(detailBtn[0].innerHTML=="<p>See Details</p>"){
                plan[0].style.height="auto";
                for(j=0;j<detail1.length;j++){
                    detail1[j].style.display="block";
                }
                detailBtn[0].innerHTML="<p>Show Less</p>";    
            }
            else{

                    plan[0].style.height="500px";
                    for(j=0;j<detail1.length;j++){
                        detail1[j].style.display="none";
                    }
                    detailBtn[0].innerHTML="<p>See Details</p>";

            }
        }
        function showDetail2(){
            if(detailBtn[1].innerHTML=="<p>See Details</p>"){
                plan[1].style.height="auto";
                for(j=0;j<detail2.length;j++){
                    detail2[j].style.display="block";
                }
                detailBtn[1].innerHTML="<p>Show Less</p>";    
            }
            else{

                    plan[1].style.height="500px";
                    for(j=0;j<detail2.length;j++){
                        detail2[j].style.display="none";
                    }
                    detailBtn[1].innerHTML="<p>See Details</p>";

            }
        }
        function showDetail3(){
            if(detailBtn[2].innerHTML=="<p>See Details</p>"){
                plan[2].style.height="auto";
                for(j=0;j<detail3.length;j++){
                    detail3[j].style.display="block";
                }
                detailBtn[2].innerHTML="<p>Show Less</p>";    
            }
            else{

                    plan[2].style.height="500px";
                    for(j=0;j<detail3.length;j++){
                        detail3[j].style.display="none";
                    }
                    detailBtn[1].innerHTML="<p>See Details</p>";

            }
        }
        function showDetail4(){
            if(detailBtn[3].innerHTML=="<p>See Details</p>"){
                plan[3].style.height="auto";
                for(j=0;j<detail4.length;j++){
                    detail4[j].style.display="block";
                }
                detailBtn[3].innerHTML="<p>Show Less</p>";    
            }
            else{

                    plan[3].style.height="500px";
                    for(j=0;j<detail4.length;j++){
                        detail4[j].style.display="none";
                    }
                    detailBtn[3].innerHTML="<p>See Details</p>";

            }
        }


        function showDetail5(){
            if(detailBtn[4].innerHTML=="<p>See Details</p>"){
                plan[4].style.height="auto";
                for(j=0;j<detail5.length;j++){
                    detail5[j].style.display="block";
                }
                detailBtn[4].innerHTML="<p>Show Less</p>";    
            }
            else{

                    plan[4].style.height="500px";
                    for(j=0;j<detail5.length;j++){
                        detail5[j].style.display="none";
                    }
                    detailBtn[4].innerHTML="<p>See Details</p>";

            }
        }
       

// Plan secction ends here 