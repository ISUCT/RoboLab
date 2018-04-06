images = new Array (
"img/banan.jpg",
"img/holod.jpg",
"img/ruka.png"
);
var NumBlock = 0;
var BlocksLength = images.length - 1;

function changeBlock(direction) {
	NumBlock += direction;
	if (NumBlock > BlocksLength) { NumBlock = 0; }
	if (NumBlock < 0) { NumBlock = BlocksLength; }
	document.slide_show.src = images[NumBlock];
}