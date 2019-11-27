(function()
{
    var video = document.getElementById('videoElement'),
        canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        photo = document.getElementById('photo'),
        vendorUrl = window.URL || window.webkitURL;
    
    navigator.getMedia =    navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;
   
    document.getElementById('capture').addEventListener('click', function()
    {
        context.save();
        context.scale(-1, 1);
        context.drawImage(video, 0, 0, 530 * -1, 400); // drawing image on canvas 
        context.restore();
        canvas.style.display = 'block';
        // photo.setAttribute('src', canvas.toDataURL('image/png')); // getting information of image to save into database
    });

    document.getElementById('upload').addEventListener('click', function()
    {
      var pickle =  new Image();
        pickle.src="../images/picklerick.jpeg";
        pickle.onload = function()
        {
          context.drawImage(pickle, 0, 0, 530 * -1, 400);
        };
      var img = new Image();
        img.src = canvas.toDataURL();
      var button = document.getElementById('upload');
        button.value = img.src;
        alert(img.src);

    });
})();

var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia)
{
  navigator.mediaDevices.getUserMedia({ video: true, audio: false})
    .then(function (stream)
    {
      video.srcObject = stream;
    })
    .catch(function (error)
    {
      console.log("Something went wrong!");
    });
}

