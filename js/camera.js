
    var video = document.getElementById('videoElement'),
        canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        photo = document.getElementById('photo'),
        vendorUrl = window.URL || window.webkitURL;

        navigator.getMedia =    navigator.getUserMedia ||
                                navigator.webkitGetUserMedia ||
                                navigator.mozGetUserMedia ||
                                navigator.msGetUserMedia;

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
                          

        
        // console.log(stickers[1]);
        // stickers.forEach( function( item )
        // {
        //   item.onclick = function()
        //   {
        //     console.log( item );
        //   }
        // })
        
        document.getElementById('capture').addEventListener('click', function()
        {
          context.save();
          context.scale(-1, 1);
          context.drawImage(video, 0, 0, 530 * -1, 400); // drawing image on canvas 
          context.restore();
          canvas.style.display = 'block';
          // photo.setAttribute('src', canvas.toDataURL('image/png')); // getting information of image to save into database
        });
        
        var filters = new Array;
          filters[0] = "../filters/crown.png"
          filters[1] = "../filters/beard.png"
        // filters[2] = "../filters/rick_and_morty_emoji_face.png"
        
        function  add_filters(e)
        {
          var image = new Image();
          image.onload = function () 
          {
            context.drawImage(image,250,0,200,200);

          };
          image.src = filters[e];
        }
        
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