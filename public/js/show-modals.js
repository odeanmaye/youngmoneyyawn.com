function showVideoModal( title, url ){
     var videoId = url.slice(32);
     var prefix = '//www.youtube.com/embed/';
     url = prefix.concat(videoId);
     $('#videoModal iframe').attr('src', url);
     $('#videoModal #video-modal-dialog #video-modal-content #video-modal-header #videoModalLabel strong').text(title);
     $('#videoModal').modal('show');
 }

 function showMixtapeModal( title, url ){
     $('#mixtapeModal iframe').attr('src', url);
     $('#mixtapeModal #mixtape-modal-dialog #mixtape-modal-content #mixtape-modal-header #mixtapeModalLabel strong').text(title);
     $('#mixtapeModal').modal('show');
 }

 function showImageModal( img ){
     $('#imageModal iframe').attr('src', img);
     $('#imageModal').modal('show');
 }

 function showContactModal(){
     $('#contactModal').modal('show');
 }

 $('#videoModal button').click(function () {
     $('#videoModal iframe').removeAttr('src');  
 });

 $('#mixtapeModal button').click(function () {
     $('#mixtapeModal iframe').removeAttr('src');  
 });