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
    // navigator.getMedia(
    //         {
    //             video: true,
    //             audio: false,
    //         },
    //         function(stream)
    //         {
    //             video.src = vendorUrl.createObjectURL(stream);
    //             video.play();
    //         },
    //         function(error)
    //         {
    //             // An error occured
    //             // error.code
    //         });
    document.getElementById('capture').addEventListener('click', function()
    {
        context.drawImage(video, 0, 0, 500, 400);
        //MANIPULATE CANVAS

        photo.setAttribute('src', canvas.toDataURL('image/png'));
    });
})();

var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}
   