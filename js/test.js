window.onload = () =>{
    console.log("Loaded");
    loadSvg();
};

function loadSvg () {
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute('width', 210);
    svg.setAttribute('height', 210);
    svg.setAttribute('viewBox', "0 0 210 210");
    var el = document.getElementById('myCanvas');
    el.appendChild(svg);
    var s = Snap(svg);
    var bigCircle = s.circle(105, 105, 100);
    bigCircle.attr({
        fill: "#bada55",
        stroke: "#000",
        strokeWidth: 1
    });
    bigCircle.animate({r:20},1000,null,()=>{
        console.log("First");
        bigCircle.animate({r:100},1000);
    });
    console.log("Second");
    var line = s.line(10,10,10,10);
    line.attr({
        stroke: "#0F0",
        strokeWidth: 5
    });
    line.animate({x2:50,y2:50},1000);
    var rect = s.rect(0, 0, 10, 10);
    
    rect.animate(0, 10, function (val) {
        rect.attr({
        x: val
        });
    }, 1000);
    // in given context is equivalent to
    rect.animate({x: 10}, 1000);
    
}