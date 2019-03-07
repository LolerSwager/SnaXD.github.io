var mp3 = document.getElementById("REE");
function beep() 
{
	mp3.loop = true;

		mp3.play();

}	
function exit()
{
	mp3.pause();
	mp3.currenttime = 0;
	
}