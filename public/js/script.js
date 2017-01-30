
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

function favorite(id) {  
    //console.log(id);
    var response = readCookie('favorite');
    
    if (response && response.length) {
        var data_array = JSON.parse(response);
        if( $.inArray(id, data_array)===-1){
       data_array.push(id);
       var json_str = JSON.stringify(data_array);
       createCookie('favorite', json_str, 1);
        }
}
        else {
        var array = [id];
        array=jQuery.unique(array);
        var json_str = JSON.stringify(array);
        createCookie('favorite', json_str, 1);
    }
}

function removeFavorite(id) {  
    var response = readCookie('favorite');
    if (response && response.length) {
        var data_array = JSON.parse(response);
        console.log(data_array);
		var c = $.inArray(id, data_array);
        if(c!==-1){
       data_array.splice(c,1);
       var json_str = JSON.stringify(data_array);
       createCookie('favorite', json_str, 1);
        }
}
        else {
        var array = [id];
        array=jQuery.unique(array);
        var json_str = JSON.stringify(array);
        createCookie('favorite', json_str, 1);
    }
}   
  function hideLocations(loc){
                var id=loc;
                console.log(id);
                $('#locationID_'+id).fadeOut(1000);
            }
	
