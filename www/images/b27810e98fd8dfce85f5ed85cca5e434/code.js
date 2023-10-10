gsap.registerPlugin(MotionPathPlugin);



var tl = gsap.timeline()


var tl2 = gsap.timeline()
  

tl.to('.character',4,{backgroundPosition: "-9300px",ease:SteppedEase.config(31)}).to('.emty',1,{},)

.fromTo(".ballsize",{opacity:0},{opacity:100,duration:3,motionPath:{
    path:"M1 39.8142C90.7913 42.3226 137.496 48.879 216.258 67C326.313 35.5817 388.858 18.7393 516 3",
    align: "#ballpath",},},3
)

gsap.fromTo(".matchmain",{y:-40,opacity:0},{y:80,opacity:100,duration:1,ease:"back"},6)

tl.repeat(4)

document.getElementById("button").onclick = ()=>{
    console.log("clicked")
    tl.pause();
    var anim = document.getElementById("anim")
    anim.style.display='none';
}

document.getElementById("link").onclick = ()=>{
    console.log("link")
    window.location.href = "https://www.tsports.com.bd/";
}



